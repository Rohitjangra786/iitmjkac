<?php
/* ------------------------------------------------------------------
   SAMPLE ONLY — this file is committed to git. Do NOT put real
   credentials here.

   The real config.php is created automatically the first time you
   open  https://www.iitmjanakpuri.com/AAC/admin/  (the install screen
   asks you to set a username + password). config.php is gitignored,
   so your credentials are never committed and survive redeploys.

   To create it by hand instead: copy this file to config.php and set
     AAC_ADMIN_HASH = password_hash('your-password', PASSWORD_DEFAULT)
   ------------------------------------------------------------------ */
define('AAC_ADMIN_USER', 'admin');
define('AAC_ADMIN_HASH', '$2y$10$REPLACE_WITH_A_REAL_BCRYPT_HASH_VALUE');
define('AAC_SECRET',     'replace-with-a-long-random-string');
