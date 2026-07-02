<?php
/* Roll a document back to an archived version. */
require __DIR__ . '/inc.php';
aac_require_login();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php'); exit; }
aac_check_csrf();

$doc = aac_doc_by_file($_POST['file'] ?? '');
if (!$doc) { aac_flash_set('Unknown document.'); header('Location: index.php'); exit; }
$file = $doc['file'];
$ext  = aac_ext($file);

$version = basename((string)($_POST['version'] ?? ''));      // strip any path
if (!in_array($version, aac_archives($file), true)) {        // must be a real archived version of THIS file
    aac_flash_set('That version was not found.'); header('Location: index.php'); exit;
}
$src    = AAC_ARCHIVE_DIR . '/' . $version;
$target = AAC_PDF_DIR . '/' . basename($file);
if (!is_file($src)) { aac_flash_set('That version was not found.'); header('Location: index.php'); exit; }

// archive the current file first, so the restore is itself undoable
if (is_file($target)) {
    @copy($target, AAC_ARCHIVE_DIR . '/' . pathinfo($file, PATHINFO_FILENAME) . '__' . date('Ymd-His') . '.' . $ext);
}
if (!@copy($src, $target)) { aac_flash_set('Could not restore the file.'); header('Location: index.php'); exit; }
@chmod($target, 0644);
aac_flash_set('Restored an earlier version of “' . $doc['title'] . '”.');
header('Location: index.php');
exit;
