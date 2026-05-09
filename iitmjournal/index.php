<?php
  include("jheader.php");
  include("jnavbar.php");

  // Pull latest issue + stats so the homepage auto-updates.
  $idxJson = __DIR__ . "/data/articles.json";
  $idxLatest = null;
  $idxIssues = 0;
  $idxArticles = 0;
  $idxVols = 0;
  if (file_exists($idxJson)) {
    $idxAll = json_decode(file_get_contents($idxJson), true) ?: [];
    $idxIssues = count($idxAll);
    $idxVolSet = [];
    foreach ($idxAll as $iss) {
      $idxArticles += count($iss["articles"] ?? []);
      $idxVolSet[(int)$iss["vol"]] = true;
    }
    $idxVols = count($idxVolSet);
    if ($idxIssues > 0) { $idxLatest = $idxAll[0]; }
  }
?>
<style>
/* ── Hero ──────────────────────────────────────────────── */
.hp-hero {
  background: linear-gradient(135deg, #c00000 0%, #8b0000 60%, #6a0000 100%);
  color: #fff;
  padding: 30px 28px;
  border-radius: 8px;
  margin-top: 18px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 6px 22px rgba(140,0,0,0.18);
}
.hp-hero::before {
  content: "";
  position: absolute;
  top: -60px;
  right: -60px;
  width: 240px; height: 240px;
  background: radial-gradient(circle, rgba(255,255,255,0.10) 0%, transparent 70%);
  pointer-events: none;
}
.hp-hero::after {
  content: "";
  position: absolute;
  bottom: -80px;
  left: -40px;
  width: 200px; height: 200px;
  background: radial-gradient(circle, rgba(255,255,255,0.06) 0%, transparent 70%);
  pointer-events: none;
}
.hp-hero h1 {
  font-family: Georgia, 'Times New Roman', serif;
  font-size: 24px;
  font-weight: 700;
  margin: 0 0 6px;
  letter-spacing: 0.3px;
  line-height: 1.2;
  position: relative;
}
.hp-hero .hp-sub {
  font-size: 13px;
  font-style: italic;
  color: rgba(255,255,255,0.85);
  margin-bottom: 14px;
  position: relative;
}
.hp-hero p {
  font-size: 14px;
  line-height: 1.55;
  color: rgba(255,255,255,0.92);
  margin: 0 0 18px;
  position: relative;
}
.hp-hero .hp-cta-row { display: flex; gap: 10px; flex-wrap: wrap; position: relative; }
.hp-hero .hp-btn {
  display: inline-block;
  padding: 9px 18px;
  border-radius: 4px;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.3px;
  text-decoration: none;
  transition: transform .15s, background .2s;
}
.hp-hero .hp-btn-primary {
  background: #fff;
  color: #8b0000;
}
.hp-hero .hp-btn-primary:hover {
  background: #fff5e6;
  transform: translateY(-1px);
  text-decoration: none;
  color: #8b0000;
}
.hp-hero .hp-btn-ghost {
  background: rgba(255,255,255,0.08);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.4);
}
.hp-hero .hp-btn-ghost:hover {
  background: rgba(255,255,255,0.15);
  transform: translateY(-1px);
  color: #fff;
  text-decoration: none;
}

/* ── Section card (re-used) ────────────────────────────── */
.hp-card {
  background: #fff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 3px 14px rgba(0,0,0,0.07);
  border: 1px solid #ececec;
  margin-top: 20px;
  transition: transform .25s ease, box-shadow .25s ease;
}
.hp-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 22px rgba(0,0,0,0.12);
}
.hp-card .hp-head {
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
.hp-card .hp-head .hp-h-icon {
  width: 26px; height: 26px;
  background: rgba(255,255,255,0.18);
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 800;
}
.hp-card .hp-body { padding: 16px 18px; }

/* ── Stat strip ─────────────────────────────────────────── */
.hp-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
  margin-top: 18px;
}
.hp-stat-tile {
  background: #fff;
  border-radius: 8px;
  border: 1px solid #ececec;
  padding: 14px 8px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  transition: transform .2s;
}
.hp-stat-tile:hover { transform: translateY(-2px); }
.hp-stat-tile .hp-stat-num {
  font-family: Georgia, 'Times New Roman', serif;
  font-size: 28px;
  font-weight: 700;
  color: #c00000;
  line-height: 1;
  display: block;
}
.hp-stat-tile .hp-stat-lbl {
  font-size: 11px;
  color: #777;
  text-transform: uppercase;
  letter-spacing: 0.6px;
  margin-top: 6px;
  font-weight: 700;
}

/* ── Journal Info pill grid ─────────────────────────────── */
.hp-info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 10px;
}
.hp-info-pill {
  background: #faf6ee;
  border-left: 3px solid #c00000;
  border-radius: 0 4px 4px 0;
  padding: 9px 12px;
}
.hp-info-pill .hp-info-lbl {
  font-size: 10px;
  color: #888;
  text-transform: uppercase;
  letter-spacing: 0.7px;
  font-weight: 700;
  margin-bottom: 2px;
}
.hp-info-pill .hp-info-val {
  font-size: 13px;
  color: #2c2c2c;
  font-weight: 600;
  line-height: 1.4;
  word-break: break-word;
}
.hp-info-pill .hp-info-val a { color: #c00000; }

/* ── Featured articles ──────────────────────────────────── */
.hp-feat {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.hp-feat-item {
  padding: 11px 12px;
  background: #fafafa;
  border-left: 3px solid #c00000;
  border-radius: 0 4px 4px 0;
  transition: background .2s, padding .2s;
}
.hp-feat-item:hover { background: #fff5e6; padding-left: 16px; }
.hp-feat-item .hp-feat-no {
  display: inline-block;
  background: #c00000;
  color: #fff;
  font-size: 10px;
  font-weight: 800;
  padding: 1px 7px;
  border-radius: 50px;
  margin-right: 8px;
  vertical-align: middle;
}
.hp-feat-item .hp-feat-title {
  font-weight: 600;
  color: #2c2c2c;
  font-size: 13px;
  line-height: 1.35;
}
.hp-feat-item .hp-feat-meta {
  color: #777;
  font-size: 11px;
  font-style: italic;
  margin-top: 3px;
}
.hp-feat-more {
  display: inline-block;
  margin-top: 10px;
  color: #c00000;
  font-weight: 700;
  font-size: 12px;
  text-decoration: none;
  letter-spacing: 0.3px;
}
.hp-feat-more:hover { color: #8b0000; text-decoration: underline; }

/* ── Logo row ───────────────────────────────────────────── */
.hp-logo-row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
  gap: 10px;
  text-align: center;
  align-items: center;
}
.hp-logo-row > * {
  padding: 10px 6px;
  border-radius: 4px;
  background: #fff;
  border: 1px solid #f0eadd;
  transition: transform .2s, box-shadow .2s;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 80px;
}
.hp-logo-row > *:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.07);
}
.hp-logo-row img { max-height: 56px; max-width: 100%; object-fit: contain; }

/* ── Tagline ────────────────────────────────────────────── */
.hp-tag {
  margin-top: 22px;
  background: linear-gradient(135deg, #fffaf0 0%, #fff5e6 100%);
  border-left: 4px solid #c00000;
  border-radius: 0 6px 6px 0;
  padding: 16px 18px;
  font-style: italic;
  color: #444;
  font-size: 13px;
  line-height: 1.5;
}
.hp-tag a { color: #c00000; font-weight: 700; word-break: break-all; }

@media (max-width: 600px) {
  .hp-hero { padding: 22px 18px; }
  .hp-hero h1 { font-size: 20px; }
  .hp-stats { gap: 6px; }
  .hp-stat-tile .hp-stat-num { font-size: 22px; }
}
</style>

<div class="container mt-10">
  <div class="row">
    <div class="col-sm-3">
      <?php include("left.php"); ?>
    </div>
    <div class="col-sm-6">

      <!-- ── Hero banner ──────────────────────────────── -->
      <div class="hp-hero">
        <h1>IITM Journal of Management and IT</h1>
        <div class="hp-sub">A Bi-Annual Peer-Reviewed Multidisciplinary Research Publication</div>
        <p>
          Disseminating original research, conceptual studies, and industry insights at the
          intersection of Management, Information Technology, Commerce, and Media &mdash;
          published by the Institute of Information Technology &amp; Management, New Delhi.
        </p>
        <div class="hp-cta-row">
          <a href="guidlines.php" class="hp-btn hp-btn-primary">&#9998; Manuscript Guidelines</a>
          <a href="currentssue.php" class="hp-btn hp-btn-ghost">&#10148; Read Latest Issue</a>
        </div>
      </div>

      <!-- ── Journal Information ──────────────────────── -->
      <div class="hp-card">
        <div class="hp-head">
          <span class="hp-h-icon">&#9432;</span>
          Journal Information
        </div>
        <div class="hp-body">
          <div class="hp-info-grid">
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Editor-in-Chief</div>
              <div class="hp-info-val">Prof. (Dr.) Rachita Rana</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Frequency</div>
              <div class="hp-info-val">Half-Yearly</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">ISSN</div>
              <div class="hp-info-val">0976-8629</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">E-ISSN</div>
              <div class="hp-info-val">2349-9826</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Starting Year</div>
              <div class="hp-info-val">2009</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Language</div>
              <div class="hp-info-val">English</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">E-mail IDs</div>
              <div class="hp-info-val">
                <a href="mailto:journal@iitmipu.ac.in">journal@iitmipu.ac.in</a><br/>
                <a href="mailto:submission@journalskart.com">submission@journalskart.com</a>
              </div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Partners with</div>
              <div class="hp-info-val">INFOKART INDIA PVT. LTD</div>
            </div>
            <div class="hp-info-pill" style="grid-column: 1 / -1;">
              <div class="hp-info-lbl">Website</div>
              <div class="hp-info-val">
                <a href="https://www.iitmjanakpuri.com/iitmjournal/" target="_blank" rel="noopener">www.iitmjanakpuri.com/iitmjournal/</a>
                &nbsp;&middot;&nbsp;
                <a href="https://journalskart.com/journals/iitm" target="_blank" rel="noopener">journalskart.com/journals/iitm</a>
              </div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Funded &amp; Supported by</div>
              <div class="hp-info-val">ICSSR</div>
            </div>
            <div class="hp-info-pill">
              <div class="hp-info-lbl">Listed in</div>
              <div class="hp-info-val">J-Gate, Google Scholar</div>
            </div>
          </div>
        </div>
      </div>

      <!-- ── Indexing logos ───────────────────────────── -->
      <div class="hp-card">
        <div class="hp-head">
          <span class="hp-h-icon">&#10070;</span>
          Funded, Indexed &amp; Partnered with
        </div>
        <div class="hp-body">
          <div class="hp-logo-row">
            <span><img src="images/logos/icssr.png" alt="ICSSR" title="Funded and Supported by ICSSR" /></span>
            <span><img src="images/logos/jgate.png" alt="J-Gate" title="Indexed in J-Gate" /></span>
            <span><img src="images/logos/google_scholar.png" alt="Google Scholar" title="Indexed in Google Scholar" /></span>
            <a href="https://journalskart.com/journals/iitm" target="_blank" rel="noopener">
              <img src="images/logos/journalskart.png" alt="JournalsKart" title="Partnered with JournalsKart" />
            </a>
          </div>
        </div>
      </div>

      <!-- ── Closing tagline ──────────────────────────── -->
      <div class="hp-tag">
        The online version of <b>IITM Journal of Management &amp; IT</b> is also available through
        <a href="https://journalskart.com/journals/iitm" target="_blank" rel="noopener">journalskart.com/journals/iitm</a>
      </div>

    </div>
    <div class="col-sm-3">
      <?php include("right.php"); ?>
    </div>
  </div>

<?php include("jfooter.php"); ?>
