<?php
/* Handle a PDF replacement: validate -> archive current -> place new. */
require __DIR__ . '/inc.php';
aac_require_login();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php'); exit; }
aac_check_csrf();

$doc = aac_doc_by_file($_POST['file'] ?? '');
if (!$doc) { aac_flash_set('Unknown document.'); header('Location: index.php'); exit; }
$file = $doc['file'];                 // canonical filename from the registry (never user input)
$ext  = aac_ext($file);

$f = $_FILES['pdf'] ?? null;
if (!$f || ($f['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
    aac_flash_set('Upload failed — please choose a file and try again.'); header('Location: index.php'); exit;
}
if ($f['size'] <= 0 || $f['size'] > AAC_MAX_BYTES) {
    aac_flash_set('File is empty or larger than 30 MB.'); header('Location: index.php'); exit;
}
if (aac_ext($f['name']) !== $ext) {
    aac_flash_set('Please upload a .' . $ext . ' file to replace this document.'); header('Location: index.php'); exit;
}
if (!is_uploaded_file($f['tmp_name']) || !aac_magic_ok($f['tmp_name'], $ext)) {
    aac_flash_set('That file does not look like a valid ' . strtoupper($ext) . '.'); header('Location: index.php'); exit;
}

if (!is_dir(AAC_PDF_DIR) && !@mkdir(AAC_PDF_DIR, 0755, true)) {
    aac_flash_set('Cannot create the PDF folder on the server (permissions).'); header('Location: index.php'); exit;
}
$target = AAC_PDF_DIR . '/' . basename($file);

// archive the current version for rollback
if (is_file($target)) {
    if (!is_dir(AAC_ARCHIVE_DIR)) @mkdir(AAC_ARCHIVE_DIR, 0755, true);
    @copy($target, AAC_ARCHIVE_DIR . '/' . pathinfo($file, PATHINFO_FILENAME) . '__' . date('Ymd-His') . '.' . $ext);
}

// write to a temp name then rename (atomic-ish)
$tmp = $target . '.up' . bin2hex(random_bytes(4));
if (!@move_uploaded_file($f['tmp_name'], $tmp) || !@rename($tmp, $target)) {
    @unlink($tmp);
    aac_flash_set('Could not save the file — check folder permissions.'); header('Location: index.php'); exit;
}
@chmod($target, 0644);
aac_flash_set('“' . $doc['title'] . '” replaced successfully — it is now live on the website.');
header('Location: index.php');
exit;
