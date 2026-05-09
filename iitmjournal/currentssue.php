<?php
	include("jheader.php");
	include("jnavbar.php");

	$jsonPath = __DIR__ . "/data/articles.json";
	$current = null;
	if (file_exists($jsonPath)) {
		$issues = json_decode(file_get_contents($jsonPath), true) ?: [];
		if (count($issues) > 0) {
			$current = $issues[0]; // sorted newest first
		}
	}
?>
<style>
.ci-cover-wrap { text-align: center; }
.ci-cover-wrap img { max-width: 240px; box-shadow: 0 4px 14px rgba(0,0,0,0.15); border-radius: 3px; }
.ci-meta { font-family: Georgia, 'Times New Roman', serif; }
.ci-meta h2 { color: #c00000; margin-top: 0; font-weight: 700; }
.ci-meta .ci-issn { font-size: 14px; color: #555; margin-bottom: 10px; }
.ci-articles { margin-top: 20px; }
.ci-articles .ci-article {
	padding: 12px 14px;
	border-left: 3px solid #c00000;
	background: #fafafa;
	margin-bottom: 10px;
	border-radius: 0 3px 3px 0;
}
.ci-articles .ci-article-no { color: #999; font-weight: 700; margin-right: 6px; }
.ci-articles .ci-article-title { font-weight: 600; color: #2c2c2c; }
.ci-articles .ci-article-meta { color: #666; font-size: 13px; font-style: italic; margin-top: 4px; }
.ci-articles .ci-article-meta .ci-pages { color: #888; }
.ci-articles .ci-article-meta a { color: #c00000; }
.ci-articles .ci-article-actions { margin-top: 8px; }
.ci-articles .btn-pdf {
	background: #c00000; color: #fff; padding: 5px 12px; border-radius: 3px;
	font-size: 12px; font-weight: 600; text-decoration: none; display: inline-block;
}
.ci-articles .btn-pdf:hover { background: #8b0000; color: #fff; text-decoration: none; }
</style>

<div class="container mt-10">
	<div class="row">
		<div class="col-sm-3">
			<?php include("left.php"); ?>
		</div>
		<div class="col-sm-9">
			<div class="page-title font-family-1 mt-10"><h3><b>Current Issue</b></h3></div>
			<hr class="hr-maroon" />

			<?php if ($current): ?>
			<div class="row">
				<div class="col-sm-4 ci-cover-wrap">
					<img src="images/current_issue_cover.jpg" alt="IITM Journal Current Issue Cover" />
				</div>
				<div class="col-sm-8 ci-meta">
					<h2>Volume <?php echo (int)$current["vol"]; ?>, Issue <?php echo (int)$current["issue"]; ?></h2>
					<p style="font-size:18px;"><?php echo htmlspecialchars($current["period"]); ?> <?php echo (int)$current["year"]; ?></p>
					<div class="ci-issn">ISSN: 0976-8629 &middot; E-ISSN: 2349-9826</div>
					<p>
						<b><?php echo count($current["articles"]); ?> articles</b> in this issue. View the
						<a href="itissue.php">Archive</a> for past issues.
					</p>
				</div>
			</div>

			<div class="ci-articles">
				<?php foreach ($current["articles"] as $a):
					$title = htmlspecialchars($a["title"] ?? "");
					$authors = htmlspecialchars($a["authors"] ?? "");
					$doi = htmlspecialchars($a["doi"] ?? "");
					$pages = htmlspecialchars($a["pages"] ?? "");
					$pdf = $a["pdf"] ?? null;
				?>
				<div class="ci-article">
					<div>
						<span class="ci-article-no"><?php echo (int)$a["no"]; ?>.</span>
						<span class="ci-article-title"><?php echo $title; ?></span>
					</div>
					<div class="ci-article-meta">
						<?php echo $authors; ?>
						<?php if ($pages): ?> &middot; <span class="ci-pages">Pages <?php echo $pages; ?></span><?php endif; ?>
						<?php if ($doi): ?>
							&middot; DOI: <a href="https://doi.org/<?php echo $doi; ?>" target="_blank" rel="noopener"><?php echo $doi; ?></a>
						<?php endif; ?>
					</div>
					<?php if ($pdf): ?>
					<div class="ci-article-actions">
						<a href="<?php echo htmlspecialchars($pdf); ?>" target="_blank" rel="noopener" class="btn-pdf">View PDF</a>
					</div>
					<?php endif; ?>
				</div>
				<?php endforeach; ?>
			</div>

			<?php else: ?>
			<p>Current issue data is not available.</p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php include("jfooter.php"); ?>
