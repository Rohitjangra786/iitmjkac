<?php
/* Dashboard: list every disclosure document grouped by section, with
   Replace (upload) and History (rollback) per document. */
require __DIR__ . '/inc.php';
aac_require_login();
$flash = aac_flash_get();

$groups = [];
foreach ($aac_documents as $d) { $groups[$d['section']][] = $d; }

aac_admin_head('Documents');
?>
<div class="wrap">
    <h1 class="page">Disclosure Documents</h1>
    <p class="sub">Replace any PDF below and it goes live on the website immediately. The previous version is archived automatically so you can roll back.</p>

    <?php if ($flash): ?><div class="flash ok"><i class="fas fa-check-circle"></i> <?php echo aac_h($flash); ?></div><?php endif; ?>
    <?php if (!is_dir(AAC_PDF_DIR)): ?>
        <div class="flash warn"><i class="fas fa-info-circle"></i> The PDF folder wasn't found on this server yet — your first upload will create it.</div>
    <?php endif; ?>

    <?php foreach ($groups as $section => $docs): ?>
        <div class="sec"><?php echo aac_h($section); ?></div>
        <?php foreach ($docs as $d):
            $path   = AAC_PDF_DIR . '/' . $d['file'];
            $exists = is_file($path);
            $arch   = aac_archives($d['file']);
            $hid    = 'h' . substr(md5($d['file']), 0, 8);
        ?>
        <div class="doc">
            <div class="row">
                <div class="name">
                    <?php echo aac_h($d['title']); ?>
                    <small><?php echo aac_h($d['file']); ?><?php if ($exists): ?> &middot; <?php echo aac_size(filesize($path)); ?> &middot; updated <?php echo date('d M Y, H:i', filemtime($path)); ?><?php endif; ?></small>
                </div>
                <?php if ($exists): ?>
                    <span class="pill present"><i class="fas fa-check"></i> On site</span>
                    <a class="btn ghost sm" target="_blank" rel="noopener" href="<?php echo aac_h(AAC_PUBLIC_PDF_URL . rawurlencode($d['file'])); ?>"><i class="fas fa-eye"></i> View</a>
                <?php else: ?>
                    <span class="pill missing"><i class="fas fa-exclamation-triangle"></i> Not uploaded</span>
                <?php endif; ?>
                <form class="up" method="post" action="upload.php" enctype="multipart/form-data">
                    <input type="hidden" name="csrf" value="<?php echo aac_csrf(); ?>">
                    <input type="hidden" name="file" value="<?php echo aac_h($d['file']); ?>">
                    <input type="file" name="pdf" accept=".<?php echo aac_ext($d['file']); ?>" required>
                    <button class="btn sm" type="submit"><i class="fas fa-upload"></i> Replace</button>
                </form>
                <?php if ($arch): ?>
                    <button class="btn ghost sm" type="button" onclick="document.getElementById('<?php echo $hid; ?>').classList.toggle('open')"><i class="fas fa-history"></i> History (<?php echo count($arch); ?>)</button>
                <?php endif; ?>
            </div>
            <?php if ($arch): ?>
            <div class="hist" id="<?php echo $hid; ?>">
                <?php foreach ($arch as $a): $ap = AAC_ARCHIVE_DIR . '/' . $a; ?>
                <div class="v">
                    <i class="fas fa-file-pdf"></i>
                    <span><?php echo aac_h($a); ?><?php if (is_file($ap)): ?> &middot; <?php echo aac_size(filesize($ap)); ?><?php endif; ?></span>
                    <form method="post" action="restore.php" style="margin-left:auto" onsubmit="return confirm('Restore this older version? The current file is archived first.');">
                        <input type="hidden" name="csrf" value="<?php echo aac_csrf(); ?>">
                        <input type="hidden" name="file" value="<?php echo aac_h($d['file']); ?>">
                        <input type="hidden" name="version" value="<?php echo aac_h($a); ?>">
                        <button class="btn ghost sm" type="submit"><i class="fas fa-undo"></i> Restore</button>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
<?php aac_admin_foot();
