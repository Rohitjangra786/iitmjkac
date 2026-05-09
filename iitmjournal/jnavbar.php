<?php
	// Best-effort active-page detection so the current nav item gets highlighted.
	$nav_self = strtolower(basename($_SERVER["PHP_SELF"] ?? ""));
	function nav_is($files) {
		global $nav_self;
		if (!is_array($files)) $files = [$files];
		foreach ($files as $f) { if ($nav_self === strtolower($f)) return true; }
		return false;
	}
?>
<style>
.jn-wrap {
	background: linear-gradient(180deg, #8b0000 0%, #6a0000 100%);
	box-shadow: 0 3px 10px rgba(0,0,0,0.15);
	position: sticky;
	top: 0;
	z-index: 1030;
	border-bottom: 1px solid rgba(0,0,0,0.2);
}
.jn-bar {
	display: flex;
	flex-wrap: wrap;
	align-items: stretch;
	list-style: none;
	margin: 0;
	padding: 0;
}
.jn-item {
	position: relative;
}
.jn-item > a {
	display: flex;
	align-items: center;
	height: 100%;
	padding: 13px 16px;
	color: rgba(255,255,255,0.92);
	font-family: Georgia, 'Times New Roman', serif;
	font-weight: 700;
	font-size: 12.5px;
	letter-spacing: 0.7px;
	text-decoration: none;
	text-transform: uppercase;
	transition: background .2s, color .15s;
	border-bottom: 3px solid transparent;
}
.jn-item > a:hover, .jn-item > a:focus {
	background: rgba(0,0,0,0.18);
	color: #fff;
	text-decoration: none;
	border-bottom-color: #ffd27d;
}
.jn-item.jn-active > a {
	background: rgba(0,0,0,0.25);
	color: #fff;
	border-bottom-color: #ffd27d;
}
.jn-item .jn-caret {
	display: inline-block;
	margin-left: 6px;
	font-size: 9px;
	transition: transform .2s;
}
.jn-item.open .jn-caret { transform: rotate(180deg); }

.jn-item .dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0;
	min-width: 240px;
	background: #fff;
	border: 1px solid #e8e0cc;
	border-top: 3px solid #c00000;
	border-radius: 0 0 6px 6px;
	box-shadow: 0 8px 22px rgba(0,0,0,0.18);
	padding: 6px 0;
	margin: 0;
	display: none;
	list-style: none;
}
.jn-item.open .dropdown-menu { display: block; }
.jn-item .dropdown-menu li a {
	display: block;
	padding: 9px 16px;
	color: #4a2a00;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 13px;
	font-weight: 600;
	text-decoration: none;
	border-left: 3px solid transparent;
	transition: background .15s, border-color .15s, color .15s, padding .15s;
}
.jn-item .dropdown-menu li a:hover {
	background: #faf6ee;
	border-left-color: #c00000;
	color: #c00000;
	padding-left: 22px;
}

/* Mobile toggle */
.jn-toggle {
	display: none;
	background: transparent;
	border: 0;
	color: #fff;
	padding: 12px 14px;
	font-size: 18px;
	cursor: pointer;
	line-height: 1;
}
.jn-toggle:focus { outline: 2px solid #ffd27d; outline-offset: -3px; }

@media (max-width: 991px) {
	.jn-toggle { display: inline-flex; align-items: center; gap: 8px; font-family: Georgia, serif; font-size: 14px; font-weight: 700; }
	.jn-bar { display: none; flex-direction: column; width: 100%; background: #6a0000; }
	.jn-bar.is-open { display: flex; }
	.jn-item > a { padding: 12px 18px; border-bottom: 1px solid rgba(255,255,255,0.07); }
	.jn-item .dropdown-menu {
		position: static;
		box-shadow: none;
		border: 0;
		border-radius: 0;
		background: rgba(0,0,0,0.18);
		padding: 0;
	}
	.jn-item .dropdown-menu li a {
		color: rgba(255,255,255,0.88);
		padding-left: 36px;
		border-left: 0;
	}
	.jn-item .dropdown-menu li a:hover {
		background: rgba(255,255,255,0.07);
		color: #ffd27d;
		padding-left: 42px;
	}
}
</style>

<nav class="jn-wrap" id="navbar">
	<div class="container" style="position: relative;">
		<button type="button" class="jn-toggle" id="jnToggle" aria-label="Toggle menu">
			<span style="font-size:18px;">&#9776;</span> Menu
		</button>
		<ul class="jn-bar" id="jnBar">
			<li class="jn-item <?php echo nav_is(['index.php']) ? 'jn-active' : ''; ?>">
				<a href="index.php">Home</a>
			</li>
			<li class="jn-item dropdown <?php echo nav_is(['aboutus.php','aimscope.php','abstracting.php']) ? 'jn-active' : ''; ?>">
				<a href="aboutus.php">About <span class="jn-caret">&#9660;</span></a>
				<ul class="dropdown-menu">
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="aimscope.php">Aim and Scope</a></li>
					<li><a href="abstracting.php">Abstracting and Indexing</a></li>
				</ul>
			</li>
			<li class="jn-item <?php echo nav_is(['itissue.php','currentssue.php']) ? 'jn-active' : ''; ?>">
				<a href="itissue.php">Archive</a>
			</li>
			<li class="jn-item <?php echo nav_is(['guidlines.php']) ? 'jn-active' : ''; ?>">
				<a href="guidlines.php">Submission Guidelines</a>
			</li>
			<li class="jn-item <?php echo nav_is(['ineditor.php']) ? 'jn-active' : ''; ?>">
				<a href="ineditor.php">Editorial Board</a>
			</li>
			<li class="jn-item dropdown <?php echo nav_is(['policy.php']) ? 'jn-active' : ''; ?>">
				<a href="policy.php">Journal Policy <span class="jn-caret">&#9660;</span></a>
				<ul class="dropdown-menu">
					<li><a href="policy.php#privacy">Privacy Statement</a></li>
					<li><a href="policy.php#publication-ethics">Publication Ethics</a></li>
					<li><a href="policy.php#reviewer-policy">Reviewer Policy</a></li>
					<li><a href="policy.php#copyright-policy">Copyright and Licensing Policy</a></li>
					<li><a href="policy.php#plagiarism-ai">Plagiarism and AI Generated Content Policy</a></li>
				</ul>
			</li>
			<li class="jn-item <?php echo nav_is(['address.php']) ? 'jn-active' : ''; ?>">
				<a href="address.php">Contact Us</a>
			</li>
			<li class="jn-item <?php echo nav_is(['downloads.php']) ? 'jn-active' : ''; ?>">
				<a href="downloads.php">Downloads</a>
			</li>
		</ul>
	</div>
</nav>

<script type="text/javascript">
(function () {
	// Mobile menu toggle
	var btn = document.getElementById('jnToggle');
	var bar = document.getElementById('jnBar');
	if (btn && bar) {
		btn.addEventListener('click', function () { bar.classList.toggle('is-open'); });
	}
	// Dropdown click/hover (works alongside Bootstrap 3 dropdowns)
	var items = document.querySelectorAll('.jn-item.dropdown');
	items.forEach(function (item) {
		var link = item.querySelector('a');
		if (!link) return;
		// Open on hover (desktop)
		item.addEventListener('mouseenter', function () { if (window.matchMedia('(min-width: 992px)').matches) item.classList.add('open'); });
		item.addEventListener('mouseleave', function () { item.classList.remove('open'); });
		// Toggle on click for mobile + caret click
		link.addEventListener('click', function (e) {
			if (!window.matchMedia('(min-width: 992px)').matches) {
				e.preventDefault();
				items.forEach(function (other) { if (other !== item) other.classList.remove('open'); });
				item.classList.toggle('open');
			}
		});
	});
	// Close on outside click
	document.addEventListener('click', function (e) {
		if (!e.target.closest('.jn-item.dropdown')) {
			items.forEach(function (item) { item.classList.remove('open'); });
		}
	});
})();
</script>
