<?php
/* First-run setup: create the gitignored config.php with the admin login.
   Refuses to run once config.php exists (so it can't be used to reset). */
require __DIR__ . '/inc.php';
if (aac_installed()) { header('Location: login.php'); exit; }

$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    aac_check_csrf();
    $user = trim($_POST['user'] ?? '');
    $pw   = (string)($_POST['pw']  ?? '');
    $pw2  = (string)($_POST['pw2'] ?? '');
    if (strlen($user) < 3)      $err = 'Username must be at least 3 characters.';
    elseif (strlen($pw) < 8)    $err = 'Password must be at least 8 characters.';
    elseif ($pw !== $pw2)       $err = 'The two passwords do not match.';
    else {
        $cfg = "<?php\n"
             . "define('AAC_ADMIN_USER', " . var_export($user, true) . ");\n"
             . "define('AAC_ADMIN_HASH', " . var_export(password_hash($pw, PASSWORD_DEFAULT), true) . ");\n"
             . "define('AAC_SECRET', "     . var_export(bin2hex(random_bytes(24)), true) . ");\n";
        if (@file_put_contents(AAC_CONFIG_FILE, $cfg, LOCK_EX) === false) {
            $err = 'Could not write config.php — make the /AAC/admin/ folder writable (chmod 755), or create config.php by hand from config.sample.php.';
        } else {
            @chmod(AAC_CONFIG_FILE, 0640);
            aac_flash_set('Admin account created — please log in.');
            header('Location: login.php'); exit;
        }
    }
}

aac_admin_head('Set up', false);
?>
<div class="wrap"><div class="center">
    <div class="card">
        <div class="logo"><i class="fas fa-shield-alt"></i> AAC Document Manager</div>
        <div class="tag">First-time setup — create your admin login</div>
        <?php if ($err): ?><div class="flash err"><?php echo aac_h($err); ?></div><?php endif; ?>
        <form method="post" autocomplete="off">
            <input type="hidden" name="csrf" value="<?php echo aac_csrf(); ?>">
            <div class="fld"><label>Username</label><input type="text" name="user" required minlength="3" value="<?php echo aac_h($_POST['user'] ?? 'admin'); ?>"></div>
            <div class="fld"><label>Password <span class="muted">(min 8 characters)</span></label><input type="password" name="pw" required minlength="8"></div>
            <div class="fld"><label>Confirm password</label><input type="password" name="pw2" required minlength="8"></div>
            <button class="btn" type="submit"><i class="fas fa-check"></i> Create account</button>
        </form>
    </div>
</div></div>
<?php aac_admin_foot();
