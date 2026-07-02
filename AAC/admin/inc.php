<?php
/* ============================================================
   AAC Document Manager — shared bootstrap.
   Session, config, auth guard, CSRF, file helpers, admin chrome.
   Included by every admin page. Not meant to be opened directly
   (blocked via .htaccess).
   ============================================================ */

if (session_status() === PHP_SESSION_NONE) {
    $secure = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off');
    session_name('aac_admin_sid');
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/AAC/admin/',
        'httponly' => true,
        'samesite' => 'Lax',
        'secure'   => $secure,
    ]);
    session_start();
}
date_default_timezone_set('Asia/Kolkata');

define('AAC_ADMIN_DIR',      __DIR__);
define('AAC_DOCROOT',        dirname(__DIR__, 2));                 // .../public_html
define('AAC_PDF_DIR',        AAC_DOCROOT . '/mandatory/pdf');      // live PDFs (gitignored, server-only)
define('AAC_ARCHIVE_DIR',    AAC_PDF_DIR . '/_archive');           // previous versions (rollback)
define('AAC_PUBLIC_PDF_URL', 'https://www.iitmjanakpuri.com/mandatory/pdf/');
define('AAC_MAX_BYTES',      30 * 1024 * 1024);                    // 30 MB upload cap
define('AAC_CONFIG_FILE',    __DIR__ . '/config.php');

require __DIR__ . '/documents.php';                                // $aac_documents
function aac_installed() { return is_file(AAC_CONFIG_FILE); }
if (aac_installed()) { require AAC_CONFIG_FILE; }

/* ---------- auth ---------- */
function aac_is_logged_in() { return !empty($_SESSION['aac_admin']); }
function aac_require_login() {
    if (!aac_installed()) { header('Location: install.php'); exit; }
    if (!aac_is_logged_in()) { header('Location: login.php'); exit; }
}

/* ---------- CSRF ---------- */
function aac_csrf() {
    if (empty($_SESSION['aac_csrf'])) { $_SESSION['aac_csrf'] = bin2hex(random_bytes(32)); }
    return $_SESSION['aac_csrf'];
}
function aac_check_csrf() {
    $t = $_POST['csrf'] ?? '';
    if (!is_string($t) || empty($_SESSION['aac_csrf']) || !hash_equals($_SESSION['aac_csrf'], $t)) {
        http_response_code(400);
        exit('Invalid or expired request token. Please go back, reload, and try again.');
    }
}

/* ---------- registry lookup (only known files may be touched) ---------- */
function aac_doc_by_file($file) {
    global $aac_documents;
    foreach ($aac_documents as $d) { if ($d['file'] === $file) return $d; }
    return null;
}

/* ---------- small helpers ---------- */
function aac_h($s)    { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function aac_ext($n)  { return strtolower(pathinfo($n, PATHINFO_EXTENSION)); }
function aac_size($b) {
    if ($b >= 1048576) return round($b / 1048576, 1) . ' MB';
    if ($b >= 1024)    return round($b / 1024) . ' KB';
    return (int)$b . ' B';
}
function aac_flash_set($m) { $_SESSION['aac_flash'] = $m; }
function aac_flash_get() { $m = $_SESSION['aac_flash'] ?? ''; unset($_SESSION['aac_flash']); return $m; }

/* upload content sanity via magic bytes */
function aac_magic_ok($tmp, $ext) {
    $fh = @fopen($tmp, 'rb'); if (!$fh) return false;
    $head = fread($fh, 8); fclose($fh);
    if ($ext === 'pdf') return substr($head, 0, 5) === '%PDF-';
    if (in_array($ext, ['docx', 'pptx', 'xlsx'], true)) return substr($head, 0, 2) === 'PK';
    return false;
}

/* archived versions of a given file, newest first */
function aac_archives($file) {
    if (!is_dir(AAC_ARCHIVE_DIR)) return [];
    $base = pathinfo($file, PATHINFO_FILENAME);
    $ext  = aac_ext($file);
    $out  = [];
    foreach (scandir(AAC_ARCHIVE_DIR) as $f) {
        if ($f === '.' || $f === '..') continue;
        if (strpos($f, $base . '__') === 0 && aac_ext($f) === $ext) $out[] = $f;
    }
    rsort($out);
    return $out;
}

/* ---------- admin page chrome ---------- */
function aac_admin_head($title, $nav = true) {
    $t = aac_h($title);
    echo <<<HTML
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>$t — AAC Document Manager</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto+Slab:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
:root{--maroon:#800000;--maroon-d:#5e0000;--ink:#232323;--muted:#5c5c5c;--line:#dcdcdc;--soft:#f7f1f1;--ok:#1c7c46;--okbg:#e7f5ec;--warn:#8a5a00;--warnbg:#fdf3e0;--err:#9b1c1c;--errbg:#fbe9e9;}
*{box-sizing:border-box}
body{margin:0;font-family:'Inter',system-ui,Segoe UI,Roboto,sans-serif;background:#eef0f2;color:var(--ink);font-size:15px;line-height:1.6}
a{color:var(--maroon);text-decoration:none}a:hover{text-decoration:underline}
.topbar{background:var(--maroon-d);color:#fff}
.topbar .in{max-width:1080px;margin:0 auto;padding:12px 20px;display:flex;align-items:center;gap:14px;flex-wrap:wrap}
.topbar .brand{font-family:'Roboto Slab',serif;font-weight:700;font-size:16px;display:flex;align-items:center;gap:9px}
.topbar .sp{margin-left:auto;display:flex;gap:16px;align-items:center;font-size:13.5px}
.topbar a{color:rgba(255,255,255,.9)}.topbar a:hover{color:#fff}
.wrap{max-width:1080px;margin:24px auto;padding:0 20px}
.card{background:#fff;border:1px solid var(--line);border-radius:10px;box-shadow:0 10px 30px rgba(80,10,10,.05)}
.flash{margin:0 0 18px;padding:12px 16px;border-radius:8px;font-size:14px;border:1px solid}
.flash.ok{background:var(--okbg);border-color:#bfe3cd;color:var(--ok)}
.flash.err{background:var(--errbg);border-color:#f0cccc;color:var(--err)}
.flash.warn{background:var(--warnbg);border-color:#efd9ad;color:var(--warn)}
h1.page{font-family:'Roboto Slab',serif;color:var(--maroon-d);font-size:23px;margin:0 0 4px}
.sub{color:var(--muted);font-size:14px;margin:0 0 20px}
label{display:block;font-weight:600;font-size:13.5px;margin:0 0 5px}
input[type=text],input[type=password]{width:100%;padding:11px 13px;border:1px solid var(--line);border-radius:7px;font-size:15px;font-family:inherit}
input:focus{outline:none;border-color:var(--maroon)}
.btn{display:inline-flex;align-items:center;gap:8px;background:var(--maroon);color:#fff!important;border:0;border-radius:7px;padding:11px 18px;font-size:14px;font-weight:600;font-family:inherit;cursor:pointer;text-decoration:none!important;transition:background .15s}
.btn:hover{background:var(--maroon-d)}
.btn.sm{padding:7px 12px;font-size:13px}
.btn.ghost{background:#fff;color:var(--maroon)!important;border:1px solid var(--line)}
.btn.ghost:hover{border-color:var(--maroon);background:var(--soft)}
.sec{font-family:'Roboto Slab',serif;color:var(--maroon);font-size:16px;margin:26px 0 10px;padding-left:12px;border-left:5px solid var(--maroon)}
.doc{border:1px solid var(--line);border-radius:9px;padding:14px 16px;margin-bottom:12px;background:#fff}
.doc .row{display:flex;gap:14px;align-items:center;flex-wrap:wrap}
.doc .name{font-weight:600;min-width:220px;flex:1}
.doc .name small{display:block;color:var(--muted);font-weight:400;font-size:12px;margin-top:2px}
.pill{font-size:11.5px;font-weight:600;padding:3px 9px;border-radius:999px;white-space:nowrap}
.pill.present{background:var(--okbg);color:var(--ok)}
.pill.missing{background:var(--warnbg);color:var(--warn)}
.doc form.up{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
input[type=file]{font-size:13px;max-width:230px}
.hist{margin-top:10px;padding-top:10px;border-top:1px dashed var(--line);font-size:13px;display:none}
.hist.open{display:block}
.hist .v{display:flex;gap:10px;align-items:center;padding:5px 0;color:var(--muted)}
.muted{color:var(--muted)}
.center{max-width:400px;margin:8vh auto}
.center .card{padding:28px 30px}
.center .logo{font-family:'Roboto Slab',serif;font-weight:700;color:var(--maroon);font-size:20px;text-align:center;margin-bottom:4px}
.center .tag{text-align:center;color:var(--muted);font-size:13px;margin-bottom:22px}
.fld{margin-bottom:15px}
</style></head><body>
HTML;
    if ($nav) {
        $u = aac_h(defined('AAC_ADMIN_USER') ? AAC_ADMIN_USER : '');
        echo '<div class="topbar"><div class="in">'
           . '<span class="brand"><i class="fas fa-folder-open"></i> AAC Document Manager</span>'
           . '<span class="sp"><span class="muted" style="color:rgba(255,255,255,.75)"><i class="fas fa-user"></i> ' . $u . '</span>'
           . '<a href="../mandatorydisclosure.php" target="_blank"><i class="fas fa-external-link-alt"></i> View site</a>'
           . '<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a></span>'
           . '</div></div>';
    }
}
function aac_admin_foot() { echo "\n</body></html>"; }
