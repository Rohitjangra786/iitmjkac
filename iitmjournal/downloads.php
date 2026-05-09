<?php
	include("jheader.php");
	include("jnavbar.php");
?>
<style>
.dl-grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
	gap: 18px;
	margin-top: 22px;
}
.dl-card {
	background: #fff;
	border: 1px solid #e0d6c8;
	border-radius: 5px;
	padding: 22px 18px;
	text-align: center;
	box-shadow: 0 1px 4px rgba(0,0,0,0.06);
	transition: transform 0.2s, box-shadow 0.2s;
}
.dl-card:hover {
	transform: translateY(-3px);
	box-shadow: 0 6px 16px rgba(0,0,0,0.12);
}
.dl-icon {
	width: 56px;
	height: 56px;
	margin: 0 auto 14px;
	border-radius: 50%;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 26px;
}
.dl-card h4 {
	font-family: Georgia, 'Times New Roman', serif;
	margin: 8px 0 6px;
	color: #5a2a00;
	font-weight: 700;
	font-size: 17px;
}
.dl-card .dl-desc {
	color: #666;
	font-size: 13px;
	margin-bottom: 16px;
	min-height: 38px;
}
.dl-card .dl-meta {
	font-size: 11px;
	color: #999;
	margin-bottom: 12px;
	text-transform: uppercase;
	letter-spacing: 0.5px;
}
.dl-card .btn-dl {
	background: #c00000;
	color: #fff;
	padding: 9px 22px;
	border-radius: 3px;
	font-weight: 600;
	text-decoration: none;
	display: inline-block;
	font-size: 14px;
	transition: background 0.2s;
}
.dl-card .btn-dl:hover { background: #8b0000; color: #fff; text-decoration: none; }
.dl-card .btn-dl i { margin-right: 6px; }
</style>

<div class="container mt-10">
	<div class="row">
		<div class="col-sm-3">
			<?php include("left.php"); ?>
		</div>
		<div class="col-sm-9">
			<div class="page-title font-family-1 mt-10"><h3><b>Downloads</b></h3></div>
			<hr class="hr-maroon" />

			<p class="text-justify">
				Please find the journal&rsquo;s essential forms and reference documents below.
				All files open in a new tab. Click <b>Download</b> to save a copy.
			</p>

			<?php
				$files = [
					[
						"icon" => "&#128196;",
						"title" => "APA Style Guide",
						"desc"  => "Reference and citation style guide used for all manuscripts.",
						"href"  => "docs/APA.pdf",
						"size"  => filesize(__DIR__."/docs/APA.pdf"),
					],
					[
						"icon" => "&#169;",
						"title" => "Copyright Form",
						"desc"  => "Copyright Transfer Agreement (CTA) submitted on manuscript acceptance.",
						"href"  => "docs/copyright_certificate.pdf",
						"size"  => filesize(__DIR__."/docs/copyright_certificate.pdf"),
					],
					[
						"icon" => "&#9998;",
						"title" => "Reviewer Form",
						"desc"  => "Form used by reviewers to record their assessment of a manuscript.",
						"href"  => "docs/reviewerform.pdf",
						"size"  => filesize(__DIR__."/docs/reviewerform.pdf"),
					],
					[
						"icon" => "&#128240;",
						"title" => "Subscription Form",
						"desc"  => "Form for institutions and individuals subscribing to IJMIT.",
						"href"  => "docs/subscription_form.pdf",
						"size"  => filesize(__DIR__."/docs/subscription_form.pdf"),
					],
				];

				function fmt_size($b) {
					if ($b === false) return "";
					if ($b > 1024*1024) return number_format($b / (1024*1024), 1) . " MB";
					return number_format($b / 1024, 0) . " KB";
				}
			?>

			<div class="dl-grid">
				<?php foreach ($files as $f): ?>
				<div class="dl-card">
					<div class="dl-icon"><?php echo $f["icon"]; ?></div>
					<h4><?php echo htmlspecialchars($f["title"]); ?></h4>
					<div class="dl-desc"><?php echo htmlspecialchars($f["desc"]); ?></div>
					<div class="dl-meta">PDF &middot; <?php echo fmt_size($f["size"]); ?></div>
					<a href="<?php echo htmlspecialchars($f["href"]); ?>" target="_blank" rel="noopener" class="btn-dl" download>
						&#8595; Download
					</a>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<?php include("jfooter.php"); ?>
