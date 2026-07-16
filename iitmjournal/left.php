<?php
	// Pull stats + latest issue from articles.json so the sidebar auto-updates.
	$leftPanelPath = __DIR__ . "/data/articles.json";
	$leftLatest = null;
	$leftTotalArticles = 0;
	$leftTotalIssues = 0;
	$leftTotalVolumes = 0;
	if (file_exists($leftPanelPath)) {
		$leftAll = json_decode(file_get_contents($leftPanelPath), true) ?: [];
		$leftTotalIssues = count($leftAll);
		$leftVolSet = [];
		foreach ($leftAll as $iss) {
			$leftTotalArticles += count($iss["articles"] ?? []);
			$leftVolSet[(int)$iss["vol"]] = true;
		}
		$leftTotalVolumes = count($leftVolSet);
		if ($leftTotalIssues > 0) { $leftLatest = $leftAll[0]; }
	}
?>
<style>
.lp-card {
	background: #fff;
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 3px 14px rgba(0,0,0,0.07);
	border: 1px solid #ececec;
	margin-bottom: 18px;
	transition: transform .25s ease, box-shadow .25s ease;
}
.lp-card:hover {
	transform: translateY(-2px);
	box-shadow: 0 8px 22px rgba(0,0,0,0.12);
}
.lp-card .lp-head {
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	padding: 11px 14px;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 14px;
	font-weight: 700;
	letter-spacing: 0.5px;
	border-bottom: 3px solid #6a0000;
	display: flex;
	align-items: center;
	gap: 8px;
}
.lp-card .lp-head .lp-icon {
	width: 22px; height: 22px;
	background: rgba(255,255,255,0.18);
	border-radius: 50%;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	font-size: 12px;
	font-weight: 800;
}
.lp-card .lp-body { padding: 14px 14px 16px; }

/* ── News card ───────────────────────────────────────────── */
.lp-news .lp-news-tag {
	display: inline-block;
	background: #fff5e6;
	color: #a85d00;
	font-size: 10px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.8px;
	padding: 3px 8px;
	border-radius: 50px;
	margin-bottom: 8px;
}
.lp-news .lp-news-title {
	font-family: Georgia, 'Times New Roman', serif;
	color: #5a2a00;
	font-weight: 700;
	font-size: 15px;
	margin: 0 0 4px;
	line-height: 1.25;
}
.lp-news .lp-news-meta {
	color: #888;
	font-size: 12px;
	font-style: italic;
	margin-bottom: 10px;
}
.lp-news a.lp-news-cta {
	display: inline-block;
	color: #c00000;
	font-weight: 700;
	font-size: 12px;
	text-decoration: none;
	letter-spacing: 0.3px;
}
.lp-news a.lp-news-cta:hover { color: #8b0000; text-decoration: underline; }

/* ── Submission card ─────────────────────────────────────── */
.lp-submit .lp-submit-line {
	color: #444; font-size: 13px; line-height: 1.5; margin-bottom: 10px;
}
.lp-submit .lp-mail {
	display: block;
	background: #faf6ee;
	color: #5a2a00;
	font-family: 'Courier New', monospace;
	font-size: 12px;
	padding: 8px 10px;
	border-radius: 3px;
	border-left: 3px solid #c00000;
	margin-bottom: 12px;
	word-break: break-all;
	text-decoration: none;
	transition: background .2s;
}
.lp-submit .lp-mail:hover { background: #f1e6d2; text-decoration: none; }
.lp-submit .lp-cta-btn {
	display: block;
	width: 100%;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	padding: 9px 12px;
	border-radius: 4px;
	font-size: 13px;
	font-weight: 600;
	text-align: center;
	text-decoration: none;
	letter-spacing: 0.4px;
	transition: background .2s, transform .15s;
	box-shadow: 0 2px 6px rgba(192,0,0,0.25);
}
.lp-submit .lp-cta-btn:hover {
	background: linear-gradient(135deg, #8b0000 0%, #6a0000 100%);
	color: #fff;
	text-decoration: none;
	transform: translateY(-1px);
}

/* ── Quick links card ────────────────────────────────────── */
.lp-links ul { list-style: none; margin: 0; padding: 0; }
.lp-links li {
	border-bottom: 1px solid #f0eadd;
}
.lp-links li:last-child { border-bottom: none; }
.lp-links li a {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 10px 4px;
	color: #444;
	font-size: 13px;
	font-weight: 600;
	text-decoration: none;
	transition: color .15s, padding .15s;
}
.lp-links li a:hover {
	color: #c00000;
	padding-left: 8px;
	text-decoration: none;
}
.lp-links li a .lp-arrow {
	color: #c00000;
	font-weight: 700;
	font-size: 13px;
	transform: translateX(0);
	transition: transform .15s;
}
.lp-links li a:hover .lp-arrow { transform: translateX(3px); }

/* ── Stats card ──────────────────────────────────────────── */
.lp-stats .lp-stats-grid {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 6px;
	text-align: center;
}
.lp-stats .lp-stat {
	padding: 8px 4px;
	border-radius: 4px;
	background: #faf6ee;
}
.lp-stats .lp-stat-num {
	display: block;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 20px;
	font-weight: 700;
	color: #c00000;
	line-height: 1;
}
.lp-stats .lp-stat-lbl {
	font-size: 9px;
	color: #777;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	margin-top: 4px;
	font-weight: 700;
}
.lp-stats .lp-stats-since {
	margin-top: 10px;
	text-align: center;
	font-size: 11px;
	color: #888;
	font-style: italic;
}
</style>

<!-- ── 1. Latest News card ─────────────────────────────────── -->
<div class="lp-card lp-news">
	<div class="lp-head">
		<span class="lp-icon">&#9733;</span> Latest News
	</div>
	<div class="lp-body">
		<span class="lp-news-tag">New Issue Out</span>
		<?php if ($leftLatest): ?>
		<div class="lp-news-title">
			Volume <?php echo (int)$leftLatest["vol"]; ?>, Issue <?php echo htmlspecialchars($leftLatest["issue"]); ?> is now live
		</div>
		<div class="lp-news-meta"><?php echo htmlspecialchars($leftLatest["period"]); ?> <?php echo (int)$leftLatest["year"]; ?> &middot; <?php echo count($leftLatest["articles"]); ?> articles</div>
		<?php else: ?>
		<div class="lp-news-title">Latest issue is now available</div>
		<?php endif; ?>
		<a href="currentssue.php" class="lp-news-cta">Read Issue &rarr;</a>
	</div>
</div>

<!-- ── 2. Submit Manuscript card ───────────────────────────── -->
<div class="lp-card lp-submit">
	<div class="lp-head">
		<span class="lp-icon">&#9998;</span> Submit Manuscript
	</div>
	<div class="lp-body">
		<div class="lp-submit-line">Send your full manuscript to:</div>
		<a href="mailto:journal@iitmipu.ac.in" class="lp-mail">journal@iitmipu.ac.in</a>
		<a href="guidlines.php" class="lp-cta-btn">View Submission Guidelines</a>
	</div>
</div>

<!-- ── 3. Quick Links card ─────────────────────────────────── -->
<div class="lp-card lp-links">
	<div class="lp-head">
		<span class="lp-icon">&#8635;</span> Quick Links
	</div>
	<div class="lp-body" style="padding:6px 14px;">
		<ul>
			<li><a href="currentssue.php">Current Issue <span class="lp-arrow">&rsaquo;</span></a></li>
			<li><a href="itissue.php">Archive <span class="lp-arrow">&rsaquo;</span></a></li>
			<li><a href="ineditor.php">Editorial Board <span class="lp-arrow">&rsaquo;</span></a></li>
			<li><a href="aimscope.php">Aim &amp; Scope <span class="lp-arrow">&rsaquo;</span></a></li>
			<li><a href="policy.php">Journal Policy <span class="lp-arrow">&rsaquo;</span></a></li>
			<li><a href="downloads.php">Downloads <span class="lp-arrow">&rsaquo;</span></a></li>
		</ul>
	</div>
</div>

<!-- ── 4. Journal Stats card ───────────────────────────────── -->
<?php if ($leftTotalIssues > 0): ?>
<div class="lp-card lp-stats">
	<div class="lp-head">
		<span class="lp-icon">&#9783;</span> Journal at a Glance
	</div>
	<div class="lp-body">
		<div class="lp-stats-grid">
			<div class="lp-stat">
				<span class="lp-stat-num"><?php echo $leftTotalVolumes; ?></span>
				<span class="lp-stat-lbl">Volumes</span>
			</div>
			<div class="lp-stat">
				<span class="lp-stat-num"><?php echo $leftTotalIssues; ?></span>
				<span class="lp-stat-lbl">Issues</span>
			</div>
			<div class="lp-stat">
				<span class="lp-stat-num"><?php echo $leftTotalArticles; ?></span>
				<span class="lp-stat-lbl">Articles</span>
			</div>
		</div>
		<div class="lp-stats-since">Published since 2009</div>
	</div>
</div>
<?php endif; ?>
