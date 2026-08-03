<?php
	include("jheader.php");
	include("jnavbar.php");

	$jsonPath = __DIR__ . "/data/articles.json";
	$issues = [];
	if (file_exists($jsonPath)) {
		$issues = json_decode(file_get_contents($jsonPath), true) ?: [];
	}

	$totalArticles = 0;
	foreach ($issues as $iss) { $totalArticles += count($iss["articles"] ?? []); }
?>
<style>
.archive-toolbar { margin: 18px 0 12px; }
.archive-toolbar input.form-control { max-width: 360px; display: inline-block; }
.archive-meta { color: #777; font-size: 14px; margin-left: 6px; }
.issue-panel .panel-heading {
	cursor: pointer;
	background: linear-gradient(to bottom, #8b0000 0%, #6a0000 100%);
	color: #fff;
	font-weight: 700;
	font-family: Georgia, 'Times New Roman', serif;
}
.issue-panel .panel-heading:hover { background: #6a0000; }
.issue-panel .panel-heading .issue-count {
	float: right; background: rgba(255,255,255,0.2);
	padding: 2px 9px; border-radius: 10px; font-size: 12px; font-weight: 600;
}
.issue-panel .panel-heading .caret-icon { margin-right: 8px; transition: transform .2s; display: inline-block; }
.issue-panel .panel-heading.collapsed .caret-icon { transform: rotate(-90deg); }
.article-table { margin-bottom: 0; }
.article-table > tbody > tr > td { vertical-align: middle; padding: 10px 8px; }
.article-table .col-no { width: 50px; text-align: center; color: #777; }
.article-table .col-title { font-weight: 600; color: #2c2c2c; }
.article-table .col-authors { color: #555; font-style: italic; font-size: 13px; }
.article-table .col-doi { font-family: 'Courier New', monospace; font-size: 12px; color: #444; word-break: break-all; }
.article-table .col-pages { width: 80px; color: #666; font-size: 13px; text-align: center; }
.article-table .col-pdf { width: 110px; text-align: center; }
.article-table .btn-pdf {
	background: #c00000; color: #fff; padding: 6px 12px; border-radius: 3px;
	font-size: 12px; font-weight: 600; text-decoration: none; display: inline-block;
}
.article-table .btn-pdf:hover { background: #8b0000; color: #fff; text-decoration: none; }
.article-table .btn-pdf-disabled { background: #999; cursor: not-allowed; }
.no-results { padding: 30px; text-align: center; color: #999; display: none; }
.archive-toolbar .sort-toggle { margin-left: 12px; }
@media (max-width: 768px) {
	.article-table .col-doi, .article-table .col-pages { display: none; }
}
</style>

<div class="container mt-10">
	<div class="row">
		<div class="col-sm-3">
			<?php include("left.php"); ?>
		</div>
		<div class="col-sm-9">
			<div class="page-title font-family-1 mt-10"><h3><b>Archive</b></h3></div>
			<hr class="hr-maroon" />

			<div class="archive-toolbar">
				<input type="text" id="archiveSearch" class="form-control" placeholder="Search by title, author, DOI..." />
				<span class="archive-meta">
					<b><?php echo count($issues); ?></b> issues &middot;
					<b><?php echo $totalArticles; ?></b> articles
				</span>
				<button type="button" id="expandAllBtn" class="btn btn-default btn-sm sort-toggle">Expand All</button>
				<button type="button" id="collapseAllBtn" class="btn btn-default btn-sm">Collapse All</button>
				<button type="button" id="sortToggleBtn" class="btn btn-default btn-sm" data-order="desc">Newest first</button>
			</div>

			<div class="panel-group" id="archiveAccordion" role="tablist">
				<?php foreach ($issues as $idx => $iss):
					$slug = htmlspecialchars($iss["slug"]);
					$collapsed = $idx === 0 ? "" : "collapsed";
					$expanded = $idx === 0 ? "true" : "false";
					$inClass = $idx === 0 ? "in" : "";
					$count = count($iss["articles"] ?? []);
				?>
				<div class="panel panel-default issue-panel"
					 data-sortkey="<?php echo (int)$iss["sortKey"]; ?>"
					 data-vol="<?php echo (int)$iss["vol"]; ?>"
					 data-issue="<?php echo htmlspecialchars($iss["issue"]); ?>">
					<div class="panel-heading <?php echo $collapsed; ?>" role="tab"
						 data-toggle="collapse" data-target="#issue-<?php echo $slug; ?>"
						 aria-expanded="<?php echo $expanded; ?>">
						<span class="caret-icon">&#9660;</span>
						Volume <?php echo (int)$iss["vol"]; ?>, Issue <?php echo htmlspecialchars($iss["issue"]); ?>
						&mdash; <?php echo htmlspecialchars($iss["period"]); ?> <?php echo (int)$iss["year"]; ?>
						<span class="issue-count"><?php echo $count; ?> article<?php echo $count == 1 ? "" : "s"; ?></span>
					</div>
					<div id="issue-<?php echo $slug; ?>" class="panel-collapse collapse <?php echo $inClass; ?>" role="tabpanel">
						<div class="panel-body" style="padding:0;">
							<table class="table table-striped article-table">
								<tbody>
								<?php foreach ($iss["articles"] as $a):
									$title = htmlspecialchars($a["title"] ?? "");
									$authors = htmlspecialchars($a["authors"] ?? "");
									$doi = htmlspecialchars($a["doi"] ?? "");
									$pages = htmlspecialchars($a["pages"] ?? "");
									$pdf = $a["pdf"] ?? null;
									$pdfUrl = $pdf ? implode('/', array_map('rawurlencode', explode('/', $pdf))) : null;
								?>
								<tr class="article-row"
									data-search="<?php echo strtolower($title . " " . $authors . " " . $doi); ?>">
									<td class="col-no"><?php echo (int)$a["no"]; ?></td>
									<td>
										<div class="col-title"><?php echo $title; ?></div>
										<div class="col-authors"><?php echo $authors; ?></div>
										<?php if ($doi): ?>
										<div class="col-doi visible-xs">DOI: <?php echo $doi; ?></div>
										<?php endif; ?>
									</td>
									<td class="col-doi hidden-xs">
										<?php if ($doi): ?>
											<a href="https://doi.org/<?php echo $doi; ?>" target="_blank" rel="noopener"><?php echo $doi; ?></a>
										<?php endif; ?>
									</td>
									<td class="col-pages hidden-xs"><?php echo $pages; ?></td>
									<td class="col-pdf">
										<?php if ($pdfUrl): ?>
											<a href="<?php echo htmlspecialchars($pdfUrl); ?>" target="_blank" rel="noopener" class="btn-pdf">View PDF</a>
										<?php else: ?>
											<span class="btn-pdf btn-pdf-disabled">N/A</span>
										<?php endif; ?>
									</td>
								</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

			<div id="noResults" class="no-results">No articles match your search.</div>
		</div>
	</div>
</div>

<script type="text/javascript">
(function () {
	var $ = window.jQuery;
	if (!$) return;

	var $search = $("#archiveSearch");
	var $panels = $("#archiveAccordion .issue-panel");
	var $noResults = $("#noResults");

	$search.on("input", function () {
		var q = $(this).val().trim().toLowerCase();
		var anyMatch = false;
		$panels.each(function () {
			var $panel = $(this);
			var $rows = $panel.find(".article-row");
			var matches = 0;
			$rows.each(function () {
				var hay = $(this).data("search") || "";
				var hit = !q || hay.indexOf(q) !== -1;
				$(this).toggle(hit);
				if (hit) matches++;
			});
			if (matches > 0) {
				$panel.show();
				anyMatch = true;
				if (q) {
					$panel.find(".panel-collapse").addClass("in").attr("aria-expanded", "true");
					$panel.find(".panel-heading").removeClass("collapsed").attr("aria-expanded", "true");
				}
			} else {
				$panel.hide();
			}
		});
		$noResults.toggle(!anyMatch && q.length > 0);
	});

	$("#expandAllBtn").on("click", function () {
		$panels.find(".panel-collapse").addClass("in").attr("aria-expanded", "true");
		$panels.find(".panel-heading").removeClass("collapsed").attr("aria-expanded", "true");
	});
	$("#collapseAllBtn").on("click", function () {
		$panels.find(".panel-collapse").removeClass("in").attr("aria-expanded", "false");
		$panels.find(".panel-heading").addClass("collapsed").attr("aria-expanded", "false");
	});

	$("#sortToggleBtn").on("click", function () {
		var $btn = $(this);
		var order = $btn.data("order") === "desc" ? "asc" : "desc";
		$btn.data("order", order).text(order === "desc" ? "Newest first" : "Oldest first");
		var $container = $("#archiveAccordion");
		var sorted = $panels.toArray().sort(function (a, b) {
			var av = parseInt(a.getAttribute("data-sortkey"), 10);
			var bv = parseInt(b.getAttribute("data-sortkey"), 10);
			return order === "desc" ? bv - av : av - bv;
		});
		$container.append(sorted);
	});
})();
</script>

<?php include("jfooter.php"); ?>
