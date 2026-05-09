<style>
.jf-wrap {
	margin-top: 50px;
	background: linear-gradient(180deg, #fffaf0 0%, #f7f0e0 100%);
	color: #5a2a00;
	border-top: 4px solid #c00000;
	position: relative;
	overflow: hidden;
}
.jf-wrap::before {
	content: "";
	position: absolute;
	top: -120px; right: -120px;
	width: 360px; height: 360px;
	background: radial-gradient(circle, rgba(192,0,0,0.06) 0%, transparent 70%);
	pointer-events: none;
}
.jf-wrap::after {
	content: "";
	position: absolute;
	bottom: -100px; left: -100px;
	width: 300px; height: 300px;
	background: radial-gradient(circle, rgba(140,80,0,0.05) 0%, transparent 70%);
	pointer-events: none;
}

/* ── Logo band ────────────────────────────────────────── */
.jf-logos {
	background: #fff;
	padding: 22px 0;
	border-bottom: 1px solid #e8e0cc;
	position: relative;
	z-index: 1;
}
.jf-logos-row {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
	gap: 0;
}
.jf-logos-row > div {
	flex: 1 1 0;
	min-width: 160px;
	text-align: center;
	padding: 8px 6px;
	border-right: 1px solid #efe7d6;
}
.jf-logos-row > div:last-child { border-right: none; }
.jf-logos-row img {
	max-height: 110px;
	max-width: 100%;
	width: auto;
	object-fit: contain;
	transition: transform .25s ease;
}
.jf-logos-row a:hover img { transform: scale(1.05); }

/* ── Main 4-column section ────────────────────────────── */
.jf-main {
	padding: 40px 0 28px;
	position: relative;
	z-index: 1;
}
.jf-main .row { margin-left: -10px; margin-right: -10px; }
.jf-main .row > [class*="col-"] { padding-left: 10px; padding-right: 10px; margin-bottom: 18px; }

.jf-main h5 {
	color: #8b0000;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 14px;
	font-weight: 700;
	letter-spacing: 1.1px;
	text-transform: uppercase;
	margin: 0 0 14px;
	padding-bottom: 10px;
	border-bottom: 2px solid rgba(192,0,0,0.25);
	position: relative;
}
.jf-main h5::after {
	content: "";
	position: absolute;
	bottom: -2px; left: 0;
	width: 32px; height: 2px;
	background: #c00000;
}
.jf-main p, .jf-main li {
	font-size: 13px;
	line-height: 1.65;
	color: #5a2a00;
}
.jf-main a {
	color: #5a2a00;
	text-decoration: none;
	transition: color .15s, padding .15s;
}
.jf-main a:hover { color: #c00000; text-decoration: none; }

.jf-about p { margin: 0 0 10px; color: #6b4a1c; }
.jf-about .jf-issn-line {
	display: inline-block;
	margin-top: 12px;
	padding: 6px 12px;
	background: #fff;
	border: 1px solid #e6d8b8;
	border-left: 3px solid #c00000;
	border-radius: 50px;
	font-family: 'Courier New', monospace;
	font-size: 11px;
	color: #5a2a00;
	letter-spacing: 0.5px;
	font-weight: 700;
}

.jf-links ul, .jf-contact ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.jf-links li {
	padding: 5px 0;
}
.jf-links li a {
	display: inline-flex;
	align-items: center;
	gap: 6px;
	font-weight: 600;
}
.jf-links li a::before {
	content: "›";
	color: #c00000;
	font-weight: 700;
	transition: transform .15s;
}
.jf-links li a:hover { padding-left: 4px; }
.jf-links li a:hover::before { transform: translateX(2px); }

.jf-contact li {
	padding: 6px 0;
	display: flex;
	align-items: flex-start;
	gap: 10px;
}
.jf-contact li .jf-c-icon {
	color: #c00000;
	font-size: 14px;
	flex: 0 0 auto;
	width: 18px;
	text-align: center;
	margin-top: 2px;
}
.jf-contact li .jf-c-text { flex: 1 1 auto; min-width: 0; word-break: break-word; }
.jf-contact li .jf-c-text a { color: #c00000; font-weight: 600; }
.jf-contact li .jf-c-text a:hover { color: #8b0000; text-decoration: underline; }

.jf-submit {
	background: #fff;
	border: 1px solid #e6d8b8;
	border-left: 3px solid #c00000;
	border-radius: 0 6px 6px 0;
	padding: 12px 14px;
	margin-top: 14px;
	box-shadow: 0 1px 4px rgba(0,0,0,0.04);
}
.jf-submit .jf-submit-tag {
	display: inline-block;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	font-size: 9px;
	font-weight: 800;
	padding: 2px 8px;
	border-radius: 50px;
	letter-spacing: 1.2px;
	margin-bottom: 6px;
}
.jf-submit .jf-submit-line { font-size: 12px; color: #5a2a00; }
.jf-submit .jf-submit-mail {
	display: block;
	margin-top: 6px;
	background: #faf6ee;
	border-left: 3px solid #c00000;
	padding: 6px 10px;
	border-radius: 0 3px 3px 0;
	font-family: 'Courier New', monospace;
	font-size: 12px;
	color: #8b0000 !important;
	font-weight: 700;
	word-break: break-all;
}
.jf-submit .jf-submit-mail:hover { background: #f1e6d2; text-decoration: none; }

/* ── Bottom bar ───────────────────────────────────────── */
.jf-bottom {
	background: rgba(192,0,0,0.06);
	border-top: 1px solid rgba(192,0,0,0.18);
	padding: 14px 0;
	position: relative;
	z-index: 1;
}
.jf-bottom-row {
	display: flex;
	align-items: center;
	justify-content: space-between;
	flex-wrap: wrap;
	gap: 12px;
	font-size: 12px;
	color: #6b4a1c;
}
.jf-bottom-row a { color: #5a2a00; text-decoration: none; font-weight: 600; }
.jf-bottom-row a:hover { color: #c00000; }
.jf-bottom-row .jf-sep { color: #c5a87a; }
.jf-back-top {
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	border: 0;
	border-radius: 50px;
	padding: 6px 16px;
	font-size: 11px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #fff !important;
	text-transform: uppercase;
	cursor: pointer;
	transition: transform .15s, box-shadow .2s;
	box-shadow: 0 2px 6px rgba(192,0,0,0.25);
}
.jf-back-top:hover {
	transform: translateY(-1px);
	box-shadow: 0 4px 10px rgba(192,0,0,0.35);
	color: #fff !important;
	text-decoration: none;
}

@media (max-width: 768px) {
	.jf-logos-row > div {
		flex: 1 1 50%;
		border-right: none;
		border-bottom: 1px solid #efe7d6;
		padding: 12px 6px;
	}
	.jf-logos-row > div:nth-last-child(-n+2) { border-bottom: none; }
	.jf-main { padding: 28px 0 14px; }
	.jf-bottom-row { justify-content: center; text-align: center; }
}
</style>

<div class="jf-wrap">

	<!-- ── Partner / Indexing logos ─────────────────────── -->
	<div class="jf-logos">
		<div class="container">
			<div class="jf-logos-row">
				<div><img src="images/logos/icssr.png" alt="ICSSR" title="Funded and Supported by ICSSR" /></div>
				<div><img src="images/logos/jgate.png" alt="J-Gate" title="Indexed in J-Gate" /></div>
				<div><img src="images/logos/google_scholar.png" alt="Google Scholar" title="Indexed in Google Scholar" /></div>
				<div>
					<a href="https://journalskart.com/journals/iitm" target="_blank" rel="noopener">
						<img src="images/logos/journalskart.png" alt="JournalsKart" title="Partnered with JournalsKart" />
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- ── Main footer columns ──────────────────────────── -->
	<div class="jf-main">
		<div class="container">
			<div class="row">

				<div class="col-sm-4 jf-about">
					<h5>About IJMIT</h5>
					<p>
						IITM Journal of Management and IT (IJMIT) is a peer-reviewed, open access,
						bi-annual research publication of the Institute of Information Technology
						and Management, New Delhi.
					</p>
					<p>Funded &amp; supported by ICSSR. Indexed in J-Gate and Google Scholar.</p>
					<div class="jf-issn-line">
						ISSN: 0976-8629 &middot; E-ISSN: 2349-9826
					</div>
				</div>

				<div class="col-sm-2 jf-links">
					<h5>Explore</h5>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">About</a></li>
						<li><a href="aimscope.php">Aim &amp; Scope</a></li>
						<li><a href="ineditor.php">Editorial Board</a></li>
						<li><a href="abstracting.php">Abstracting</a></li>
					</ul>
				</div>

				<div class="col-sm-2 jf-links">
					<h5>Authors</h5>
					<ul>
						<li><a href="guidlines.php">Submission</a></li>
						<li><a href="policy.php">Policies</a></li>
						<li><a href="downloads.php">Downloads</a></li>
						<li><a href="itissue.php">Archive</a></li>
						<li><a href="currentssue.php">Current Issue</a></li>
					</ul>
				</div>

				<div class="col-sm-4 jf-contact">
					<h5>Contact</h5>
					<ul>
						<li>
							<span class="jf-c-icon">&#9873;</span>
							<span class="jf-c-text">
								Institute of Information Technology &amp; Management,<br/>
								D-29, Institutional Area, Janakpuri, New Delhi &ndash; 110058
							</span>
						</li>
						<li>
							<span class="jf-c-icon">&#9742;</span>
							<span class="jf-c-text">+91 / 011-28525882, 28525051</span>
						</li>
						<li>
							<span class="jf-c-icon">&#9993;</span>
							<span class="jf-c-text">
								<a href="mailto:journal@iitmipu.ac.in">journal@iitmipu.ac.in</a>
							</span>
						</li>
					</ul>

					<div class="jf-submit">
						<span class="jf-submit-tag">Submit</span>
						<div class="jf-submit-line">Send manuscripts to:</div>
						<a class="jf-submit-mail" href="mailto:journal@iitmipu.ac.in">journal@iitmipu.ac.in</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- ── Bottom bar ───────────────────────────────────── -->
	<div class="jf-bottom">
		<div class="container">
			<div class="jf-bottom-row">
				<div>
					&copy; <?php echo date("Y"); ?>
					<a href="https://www.iitmjanakpuri.com/" target="_blank" rel="noopener">www.iitmjanakpuri.com</a>
					<span class="jf-sep">&middot;</span> All rights reserved.
				</div>
				<div>
					<a href="policy.php">Policies</a>
					<span class="jf-sep">&middot;</span>
					<a href="address.php">Contact</a>
					<span class="jf-sep">&middot;</span>
					<a href="#" class="jf-back-top" onclick="window.scrollTo({top:0,behavior:'smooth'});return false;">&uarr; Back to top</a>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include($path."external-js.php"); ?>
</body>
</html>
