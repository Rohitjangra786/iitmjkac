<!DOCTYPE html>
<html>
<head>
te	<title>IITM Journal of Management and IT</title>
	<?php
		$path = "assets/";
		include($path."external-css.php");
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body style="background: #f7f4ee;">

<style>
.jh-wrap {
	background:
		linear-gradient(180deg, #fffaf0 0%, #f7f0e0 100%);
	border-bottom: 4px solid #c00000;
	box-shadow: 0 4px 14px rgba(0,0,0,0.06);
	position: relative;
	overflow: hidden;
}
.jh-wrap::before {
	content: "";
	position: absolute;
	top: -120px; right: -120px;
	width: 360px; height: 360px;
	background: radial-gradient(circle, rgba(192,0,0,0.06) 0%, transparent 70%);
	pointer-events: none;
}
.jh-wrap::after {
	content: "";
	position: absolute;
	bottom: -100px; left: -100px;
	width: 300px; height: 300px;
	background: radial-gradient(circle, rgba(140,80,0,0.05) 0%, transparent 70%);
	pointer-events: none;
}
.jh-inner {
	display: flex;
	align-items: center;
	gap: 22px;
	padding: 18px 24px;
	position: relative;
}
.jh-logo {
	flex: 0 0 auto;
}
.jh-logo img {
	max-height: 96px;
	width: auto;
	display: block;
	transition: transform .25s ease;
}
.jh-logo:hover img { transform: scale(1.04); }

.jh-titleblock {
	flex: 1 1 auto;
	text-align: center;
	min-width: 0;
}
.jh-name {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 32px;
	font-weight: 700;
	color: #8b0000;
	line-height: 1.1;
	letter-spacing: 0.5px;
	margin: 0;
	text-transform: uppercase;
}
.jh-name .jh-amp { color: #c00000; font-style: italic; font-weight: 400; padding: 0 4px; }
.jh-acronym {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 18px;
	font-weight: 700;
	color: #c00000;
	margin-top: 4px;
	letter-spacing: 4px;
}
.jh-divider {
	width: 80px;
	height: 2px;
	background: linear-gradient(90deg, transparent, #c00000, transparent);
	margin: 8px auto;
}
.jh-tagline {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 12px;
	color: #8a5a00;
	font-style: italic;
	letter-spacing: 0.4px;
	margin-bottom: 10px;
}
.jh-issn {
	display: inline-flex;
	gap: 8px;
	flex-wrap: wrap;
	justify-content: center;
}
.jh-issn-pill {
	background: #fff;
	border: 1px solid #e6d8b8;
	border-left: 3px solid #c00000;
	border-radius: 50px;
	padding: 4px 14px;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 12px;
	font-weight: 700;
	color: #5a2a00;
	box-shadow: 0 1px 4px rgba(0,0,0,0.04);
	white-space: nowrap;
}
.jh-issn-pill .jh-issn-lbl { color: #999; font-weight: 600; margin-right: 4px; font-size: 10px; letter-spacing: 1px; }

.jh-side {
	flex: 0 0 auto;
	text-align: center;
}
.jh-side .jh-side-cap {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 10px;
	font-weight: 700;
	color: #c00000;
	letter-spacing: 0.8px;
	text-transform: uppercase;
	margin-bottom: 4px;
}
.jh-side img {
	max-height: 96px;
	width: auto;
	border: 3px solid #fff;
	box-shadow: 0 4px 12px rgba(0,0,0,0.18);
	border-radius: 3px;
	transition: transform .25s ease;
}
.jh-side:hover img { transform: scale(1.04); }

@media (max-width: 900px) {
	.jh-inner { flex-wrap: wrap; gap: 14px; padding: 14px 16px; }
	.jh-logo, .jh-side { flex: 1 1 50%; }
	.jh-titleblock { flex: 1 1 100%; order: 3; }
	.jh-name { font-size: 24px; }
	.jh-acronym { font-size: 15px; letter-spacing: 3px; }
	.jh-logo img, .jh-side img { max-height: 72px; }
}
@media (max-width: 480px) {
	.jh-name { font-size: 19px; letter-spacing: 0.2px; }
	.jh-issn-pill { font-size: 11px; padding: 3px 10px; }
}
</style>

<div class="jh-wrap">
	<div class="container">
		<div class="jh-inner">

			<a href="index.php" class="jh-logo" aria-label="IITM home">
				<img src="images/logo.png" alt="IITM &mdash; Nurturing Excellence" />
			</a>

			<div class="jh-titleblock">
				<h1 class="jh-name">IITM Journal of Management <span class="jh-amp">&amp;</span> IT</h1>
				<div class="jh-acronym">IJMIT</div>
				<div class="jh-divider"></div>
				<div class="jh-tagline">A Bi-Annual Peer-Reviewed Multidisciplinary Research Publication</div>
				<div class="jh-issn">
					<span class="jh-issn-pill"><span class="jh-issn-lbl">ISSN</span> 0976-8629</span>
					<span class="jh-issn-pill"><span class="jh-issn-lbl">E-ISSN</span> 2349-9826</span>
				</div>
			</div>

			<div class="jh-side hidden-xs">
				<a href="currentssue.php"><img src="images/iitm_front.jfif" alt="IITM Front" /></a>
			</div>

		</div>
	</div>
</div>
