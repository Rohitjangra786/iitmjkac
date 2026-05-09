<?php
	include("jheader.php");
	include("jnavbar.php");
?>
<style>
.ad-hero {
	background: linear-gradient(135deg, #c00000 0%, #8b0000 60%, #6a0000 100%);
	color: #fff;
	padding: 30px 28px;
	border-radius: 8px;
	margin-top: 20px;
	position: relative;
	overflow: hidden;
	box-shadow: 0 6px 22px rgba(140,0,0,0.18);
}
.ad-hero::before {
	content: "";
	position: absolute;
	top: -60px; right: -60px;
	width: 240px; height: 240px;
	background: radial-gradient(circle, rgba(255,255,255,0.10) 0%, transparent 70%);
	pointer-events: none;
}
.ad-hero h1 {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 26px;
	font-weight: 700;
	margin: 0 0 6px;
	position: relative;
}
.ad-hero p {
	font-size: 14px;
	color: rgba(255,255,255,0.9);
	margin: 0;
	font-style: italic;
	position: relative;
}

.ad-card {
	background: #fff;
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 3px 14px rgba(0,0,0,0.07);
	border: 1px solid #ececec;
	margin-top: 20px;
	transition: transform .25s ease, box-shadow .25s ease;
}
.ad-card:hover {
	transform: translateY(-2px);
	box-shadow: 0 8px 22px rgba(0,0,0,0.12);
}
.ad-card .ad-head {
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	padding: 11px 16px;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 15px;
	font-weight: 700;
	letter-spacing: 0.4px;
	border-bottom: 3px solid #6a0000;
	display: flex;
	align-items: center;
	gap: 10px;
}
.ad-card .ad-head .ad-h-icon {
	width: 26px; height: 26px;
	background: rgba(255,255,255,0.18);
	border-radius: 50%;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	font-size: 13px;
	font-weight: 800;
}
.ad-card .ad-body { padding: 22px 20px; }

/* Editorial leadership grid */
.ad-leaders {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	gap: 16px;
}
.ad-leader {
	background: #faf6ee;
	border: 1px solid #ece2cb;
	border-left: 4px solid #c00000;
	border-radius: 0 6px 6px 0;
	padding: 18px 16px;
	display: flex;
	align-items: center;
	gap: 14px;
	transition: transform .2s, box-shadow .2s;
}
.ad-leader:hover {
	transform: translateY(-2px);
	box-shadow: 0 6px 14px rgba(0,0,0,0.08);
}
.ad-leader .ad-avatar {
	width: 56px; height: 56px;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 22px;
	font-weight: 700;
	flex-shrink: 0;
	box-shadow: 0 2px 8px rgba(192,0,0,0.30);
}
.ad-leader .ad-leader-text { min-width: 0; }
.ad-leader .ad-leader-name {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 17px;
	font-weight: 700;
	color: #5a2a00;
	line-height: 1.2;
	margin-bottom: 4px;
}
.ad-leader .ad-leader-role {
	font-size: 11px;
	color: #c00000;
	letter-spacing: 1px;
	font-weight: 700;
	text-transform: uppercase;
}

/* Contact info rows */
.ad-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
	gap: 14px;
}
.ad-info-item {
	background: #faf6ee;
	border-left: 3px solid #c00000;
	border-radius: 0 4px 4px 0;
	padding: 14px 16px;
	display: flex;
	align-items: flex-start;
	gap: 12px;
}
.ad-info-item .ad-i-icon {
	width: 38px; height: 38px;
	background: #fff;
	border: 1px solid #e6d8b8;
	color: #c00000;
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 17px;
	flex-shrink: 0;
	box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.ad-info-item .ad-i-text { min-width: 0; flex: 1; }
.ad-info-item .ad-i-label {
	font-size: 10px;
	color: #888;
	text-transform: uppercase;
	letter-spacing: 0.8px;
	font-weight: 700;
	margin-bottom: 3px;
}
.ad-info-item .ad-i-value {
	font-size: 14px;
	color: #2c2c2c;
	font-weight: 600;
	line-height: 1.45;
	word-break: break-word;
}
.ad-info-item .ad-i-value a { color: #c00000; }
.ad-info-item .ad-i-value a:hover { color: #8b0000; }

/* Publisher block */
.ad-publisher {
	background: linear-gradient(135deg, #fffaf0 0%, #f7f0e0 100%);
	border: 1px solid #e6d8b8;
	border-radius: 6px;
	padding: 18px 20px;
	text-align: center;
}
.ad-publisher .ad-pub-tag {
	display: inline-block;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	font-size: 10px;
	font-weight: 800;
	letter-spacing: 1.5px;
	padding: 3px 12px;
	border-radius: 50px;
	margin-bottom: 10px;
	text-transform: uppercase;
	box-shadow: 0 2px 6px rgba(192,0,0,0.25);
}
.ad-publisher .ad-pub-name {
	font-family: Georgia, 'Times New Roman', serif;
	font-size: 17px;
	font-weight: 700;
	color: #8b0000;
	margin-bottom: 4px;
}
.ad-publisher .ad-pub-addr {
	color: #5a2a00;
	font-size: 13px;
	line-height: 1.5;
}

/* Map link */
.ad-map-cta {
	display: inline-flex;
	align-items: center;
	gap: 6px;
	margin-top: 14px;
	background: linear-gradient(135deg, #c00000 0%, #8b0000 100%);
	color: #fff;
	padding: 9px 18px;
	border-radius: 4px;
	font-size: 13px;
	font-weight: 600;
	text-decoration: none;
	letter-spacing: 0.4px;
	transition: transform .15s, box-shadow .2s;
	box-shadow: 0 2px 6px rgba(192,0,0,0.25);
}
.ad-map-cta:hover {
	transform: translateY(-1px);
	box-shadow: 0 4px 12px rgba(192,0,0,0.35);
	color: #fff;
	text-decoration: none;
}
</style>

<div class="container mt-10">
	<div class="row">
		<div class="col-sm-3">
			<?php include("left.php"); ?>
		</div>
		<div class="col-sm-9">

			<!-- ── Hero ─────────────────────────────────── -->
			<div class="ad-hero">
				<h1>&#9993; Contact Us</h1>
				<p>Get in touch with the IITM Journal of Management and IT editorial team.</p>
			</div>

			<!-- ── Editorial Leadership ─────────────────── -->
			<div class="ad-card">
				<div class="ad-head">
					<span class="ad-h-icon">&#9733;</span> Editorial Leadership
				</div>
				<div class="ad-body">
					<div class="ad-leaders">
						<div class="ad-leader">
							<div class="ad-avatar">RR</div>
							<div class="ad-leader-text">
								<div class="ad-leader-name">Prof. (Dr.) Rachita Rana</div>
								<div class="ad-leader-role">Editor-in-Chief</div>
							</div>
						</div>
						<div class="ad-leader">
							<div class="ad-avatar">DG</div>
							<div class="ad-leader-text">
								<div class="ad-leader-name">Dr. Dipti Gulati</div>
								<div class="ad-leader-role">Editor</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ── Contact Information ──────────────────── -->
			<div class="ad-card">
				<div class="ad-head">
					<span class="ad-h-icon">&#9743;</span> Contact Information
				</div>
				<div class="ad-body">
					<div class="ad-info">
						<div class="ad-info-item" style="grid-column: 1 / -1;">
							<div class="ad-i-icon">&#9873;</div>
							<div class="ad-i-text">
								<div class="ad-i-label">Address</div>
								<div class="ad-i-value">
									IITM Journal of Management and IT<br/>
									Institute of Information Technology &amp; Management<br/>
									D-29, Institutional Area, Janakpuri,<br/>
									New Delhi &ndash; 110058
								</div>
							</div>
						</div>
						<div class="ad-info-item">
							<div class="ad-i-icon">&#9742;</div>
							<div class="ad-i-text">
								<div class="ad-i-label">Phone</div>
								<div class="ad-i-value">
									+91 / 011-28525882<br/>
									+91 / 011-28525051
								</div>
							</div>
						</div>
						<div class="ad-info-item">
							<div class="ad-i-icon">&#9993;</div>
							<div class="ad-i-text">
								<div class="ad-i-label">E-mail</div>
								<div class="ad-i-value">
									<a href="mailto:journal@iitmipu.ac.in">journal@iitmipu.ac.in</a><br/>
									<a href="mailto:submission@journalskart.com">submission@journalskart.com</a>
								</div>
							</div>
						</div>
						<div class="ad-info-item" style="grid-column: 1 / -1;">
							<div class="ad-i-icon">&#9783;</div>
							<div class="ad-i-text">
								<div class="ad-i-label">Website</div>
								<div class="ad-i-value">
									<a href="https://www.iitmjanakpuri.com/iitmjournal/" target="_blank" rel="noopener">www.iitmjanakpuri.com/iitmjournal/</a>
									&nbsp;&middot;&nbsp;
									<a href="https://journalskart.com/journals/iitm" target="_blank" rel="noopener">journalskart.com/journals/iitm</a>
								</div>
							</div>
						</div>
					</div>

					<div style="text-align:center; margin-top:6px;">
						<a class="ad-map-cta"
						   href="https://www.google.com/maps/search/?api=1&query=Institute+of+Information+Technology+and+Management+D-29+Institutional+Area+Janakpuri+New+Delhi+110058"
						   target="_blank" rel="noopener">
							&#9873; View on Google Maps &rarr;
						</a>
					</div>
				</div>
			</div>

			<!-- ── Published by ─────────────────────────── -->
			<div class="ad-card">
				<div class="ad-head">
					<span class="ad-h-icon">&#9783;</span> Published by
				</div>
				<div class="ad-body">
					<div class="ad-publisher">
						<span class="ad-pub-tag">Publisher</span>
						<div class="ad-pub-name">Institute of Information Technology &amp; Management</div>
						<div class="ad-pub-addr">
							D-29, Institutional Area, Janakpuri, New Delhi &ndash; 110058
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include("jfooter.php"); ?>
