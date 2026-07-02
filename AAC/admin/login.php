<?php
require __DIR__ . '/inc.php';
if (!aac_installed())    { header('Location: install.php'); exit; }
if (aac_is_logged_in())  { header('Location: index.php'); exit; }

$err  = '';
$now  = time();
$fail = $_SESSION['aac_fail'] ?? ['n' => 0, 't' => 0];
$locked = ($fail['n'] >= 5 && ($now - $fail['t']) < 60);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    aac_check_csrf();
    if ($locked) {
        $err = 'Too many failed attempts. Please wait a minute and try again.';
    } else {
        $user = trim($_POST['user'] ?? '');
        $pw   = (string)($_POST['pw'] ?? '');
        if (hash_equals(AAC_ADMIN_USER, $user) && password_verify($pw, AAC_ADMIN_HASH)) {
            $_SESSION['aac_fail'] = ['n' => 0, 't' => 0];
            session_regenerate_id(true);
            $_SESSION['aac_admin'] = true;
            header('Location: index.php'); exit;
        }
        $_SESSION['aac_fail'] = ['n' => $fail['n'] + 1, 't' => $now];
        usleep(700000);
        $err = 'Incorrect username or password.';
    }
}
$flash = aac_flash_get();
aac_admin_head('Log in', false);
?>
<div class="wrap"><div class="center">
    <div class="card">
        <div class="logo"><i class="fas fa-lock"></i> AAC Document Manager</div>
        <div class="tag">Mandatory Disclosure — IITM Janakpuri</div>
        <?php if ($flash): ?><div class="flash ok"><?php echo aac_h($flash); ?></div><?php endif; ?>
        <?php if ($err):   ?><div class="flash err"><?php echo aac_h($err); ?></div><?php endif; ?>
        <form method="post" autocomplete="off">
            <input type="hidden" name="csrf" value="<?php echo aac_csrf(); ?>">
            <div class="fld"><label>Username</label><input type="text" name="user" required autofocus></div>
            <div class="fld"><label>Password</label><input type="password" name="pw" required></div>
            <button class="btn" type="submit"><i class="fas fa-sign-in-alt"></i> Log in</button>
        </form>
    </div>
</div></div>
<?php aac_admin_foot();
