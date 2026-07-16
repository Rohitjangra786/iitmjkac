<?php
	// Pull the newest issue from articles.json so this card auto-updates.
	$rightPanelPath = __DIR__ . "/data/articles.json";
	$rightCurrent = null;
	if (file_exists($rightPanelPath)) {
		$rightAll = json_decode(file_get_contents($rightPanelPath), true) ?: [];
		if (count($rightAll) > 0) { $rightCurrent = $rightAll[0]; }
	}
	$rightVol     = $rightCurrent ? (int)$rightCurrent["vol"]     : 16;
	$rightIssue   = $rightCurrent ? $rightCurrent["issue"]        : 2;
	$rightPeriod  = $rightCurrent ? $rightCurrent["period"]       : "July-December";
	$rightYear    = $rightCurrent ? (int)$rightCurrent["year"]    : 2025;
	$rightCount   = $rightCurrent ? count($rightCurrent["articles"]) : 0;
?>
<style>
.ci-modern-card {
	background: #fff;
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 4px 18px rgba(0,0,0,0.08);
	border: 1px solid #ececec;
	transition: transform .25s ease, box-shadow .25s ease;
	position: relative;
}
.ci-modern-card:hover {
	transform: translateY(-3px);
	box-shadow: 0 10px 28px rgba(0,0,0,0.14);
}
.ci-modern-card .ci-title {
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 14px;
	font-weight: 700;
	letter-spacing: 0.4px;
	padding: 11px 14px;
	text-align: center;
	line-height: 1.25;
	text-transform: none;
	border-bottom: 3px solid #6a0000;
}
.ci-modern-card .ci-title small {
	display: block;
	font-size: 11px;
	font-weight: 600;
	letter-spacing: 1.5px;
	color: rgba(255,255,255,0.85);
	margin-top: 2px;
	text-transform: uppercase;
}
.ci-modern-card .ci-cover-wrap {
	background: linear-gradient(135deg, #f5f0e6 0%, #e8dfc8 100%);
	padding: 18px 14px 14px;
	text-align: center;
	position: relative;
	overflow: hidden;
}
.ci-modern-card .ci-cover-wrap::before {
	content: "";
	position: absolute;
	top: -40%;
	right: -30%;
	width: 180px;
	height: 180px;
	background: radial-gradient(circle, rgba(192,0,0,0.08) 0%, transparent 70%);
	pointer-events: none;
}
.ci-modern-card .ci-cover-img {
	width: 100%;
	max-width: 240px;
	box-shadow: 0 6px 18px rgba(0,0,0,0.22);
	border-radius: 3px;
	display: block;
	margin: 0 auto;
	transition: transform .35s ease;
}
.ci-modern-card:hover .ci-cover-img { transform: scale(1.025); }

.ci-modern-card .ci-info {
	padding: 16px 16px 18px;
	text-align: center;
}
.ci-modern-card .ci-vol {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 18px;
	font-weight: 700;
	color: #c00000;
	margin: 0 0 4px;
	line-height: 1.2;
}
.ci-modern-card .ci-period {
	color: #555;
	font-size: 13px;
	font-style: italic;
	margin-bottom: 10px;
}
.ci-modern-card .ci-stats {
	display: flex;
	justify-content: center;
	gap: 14px;
	margin-bottom: 14px;
	padding: 10px 0;
	border-top: 1px solid #f0eadd;
	border-bottom: 1px solid #f0eadd;
}
.ci-modern-card .ci-stat {
	text-align: center;
}
.ci-modern-card .ci-stat .ci-stat-num {
	display: block;
	font-size: 18px;
	font-weight: 700;
	color: #5a2a00;
	line-height: 1;
}
.ci-modern-card .ci-stat .ci-stat-lbl {
	font-size: 10px;
	color: #999;
	text-transform: uppercase;
	letter-spacing: 0.6px;
	margin-top: 3px;
}
.ci-modern-card .ci-cta {
	display: inline-block;
	width: 100%;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	padding: 9px 14px;
	border-radius: 4px;
	font-size: 13px;
	font-weight: 600;
	text-decoration: none;
	letter-spacing: 0.4px;
	transition: background .2s, transform .15s;
	box-shadow: 0 2px 6px rgba(192,0,0,0.25);
}
.ci-modern-card .ci-cta:hover {
	background: linear-gradient(135deg, #8b0000 0%, #6a0000 100%);
	color: #fff;
	text-decoration: none;
	transform: translateY(-1px);
}
.ci-modern-card .ci-cta i { margin-right: 5px; }
@media (max-width: 991px) {
	.ci-modern-card .ci-cover-img { max-width: 200px; }
}
</style>

<div class="ci-modern-card">
	<div class="ci-title">
		IITM Journal of Management and IT
		<small>IJMIT</small>
	</div>
	<a href="currentssue.php" class="ci-cover-wrap" style="display:block; text-decoration:none;">
		<img src="images/current_issue_cover.jpg"
			 class="ci-cover-img"
			 alt="IITM Journal of Management and IT - Vol. <?php echo $rightVol; ?> Issue <?php echo $rightIssue; ?>" />
	</a>
	<div class="ci-info">
		<h4 class="ci-vol">Volume <?php echo $rightVol; ?>, Issue <?php echo $rightIssue; ?></h4>
		<div class="ci-period"><?php echo htmlspecialchars($rightPeriod); ?> <?php echo $rightYear; ?></div>

		<div class="ci-stats">
			<div class="ci-stat">
				<span class="ci-stat-num"><?php echo $rightCount; ?></span>
				<span class="ci-stat-lbl">Articles</span>
			</div>
			<div class="ci-stat">
				<span class="ci-stat-num">DOI</span>
				<span class="ci-stat-lbl">Indexed</span>
			</div>
			<div class="ci-stat">
				<span class="ci-stat-num">OA</span>
				<span class="ci-stat-lbl">Open Access</span>
			</div>
		</div>

		<a href="currentssue.php" class="ci-cta">
			<i>&#10148;</i> View Articles
		</a>
	</div>
</div>
