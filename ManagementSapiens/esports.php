<?php
// esports.php — Management Sapiens (Esports: BGMI Duo Tournament)
// Note: Put your poster image in the same folder and update $POSTER if needed.

$POSTER = "eSports.png";   // ✅ rename your esports poster image to this (or change here)
$QR_IMG = "esportQR.png";         // from your index.php assets (optional, keep if available)
$REG_URL = "https://forms.gle/tAmNsdY9XyXPSSXk9";

// Coordinators (as per your contacts section in index.php)
$COORDS = [
  ["name"=>"Vedant", "phone"=>"+918743004396", "display"=>"87430 04396"],
  ["name"=>"Sadiq",  "phone"=>"+919315507480", "display"=>"93155 07480"],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Esports (BGMI Duo) | Management Sapiens • 22 Jan, 2026</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <style>
    :root{
      --ink:#0b1020;
      --muted:#4b5a78;

      --p1:#ffeff7;
      --p2:#eef7ff;
      --p3:#f0fff6;

      --a1:#7c5cff;
      --a2:#23c4ff;
    }

    body{
      color: var(--ink);
      background:
        radial-gradient(900px 450px at 10% 8%, rgba(255,122,165,.24), transparent 60%),
        radial-gradient(900px 450px at 90% 12%, rgba(35,196,255,.22), transparent 60%),
        radial-gradient(800px 420px at 70% 88%, rgba(34,197,94,.18), transparent 65%),
        linear-gradient(180deg, var(--p1), var(--p2) 45%, var(--p3));
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      padding-bottom: 72px; /* sticky footer space */
    }
    @media (max-width: 768px){
      body{ padding-bottom: 92px; }
    }

    /* bubbles */
    .bubbles{ position: fixed; inset:0; pointer-events:none; z-index:-1; overflow:hidden; }
    .bubble{
      position:absolute; border-radius:999px;
      opacity:.55;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,.75), rgba(255,255,255,.2) 45%, rgba(255,255,255,0) 70%);
      box-shadow: 0 12px 45px rgba(0,0,0,.06);
      animation: floaty linear infinite;
    }
    @keyframes floaty{ from{ transform: translateY(40px);} to{ transform: translateY(-120vh);} }

    /* ✅ IITM Prominent DARK Header */
    .iitm-prominent{
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1050;
      padding: 10px 14px;
      background: linear-gradient(90deg,#070b16,#0d1630,#0a1226);
      border-bottom: 1px solid rgba(255,255,255,.10);
      box-shadow: 0 10px 40px rgba(0,0,0,.35);
    }
    .iitm-wrap{
      max-width: 1280px;
      margin: 0 auto;
      display: flex;
      gap: 16px;
      align-items: center;
    }
    .iitm-logo{
      width: 86px;
      height: 72px;
      border-radius: 14px;
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.16);
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 0 0 auto;
      overflow: hidden;
    }
    .iitm-logo img{ width: 80%; height: 80%; object-fit: contain; display:block; }
    .iitm-panel{
      flex: 1 1 auto;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.05);
      padding: 10px 14px;
    }
    .iitm-title{
      text-align: center;
      font-weight: 1000;
      letter-spacing: .5px;
      text-transform: uppercase;
      font-size: clamp(1.02rem, 1.25vw, 1.35rem);
      color: #ffffff;
      padding: 4px 10px;
      border-radius: 10px;
      background: linear-gradient(135deg,#7c5cff,#23c4ff);
      box-shadow: 0 8px 24px rgba(124,92,255,.35);
      display: block;
    }
    .iitm-lines{
      margin-top: 8px;
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid rgba(255,255,255,.10);
    }
    .iitm-line{
      text-align: center;
      padding: 6px 10px;
      font-weight: 800;
      font-size: clamp(.78rem, .92vw, .95rem);
      color: rgba(255,255,255,.92);
      background: rgba(255,255,255,.04);
    }
    .iitm-line + .iitm-line{ border-top: 1px solid rgba(255,255,255,.08); }
    .iitm-line:nth-child(1){ color: #c7d2ff; }
    .iitm-line:nth-child(2){ color: #a7efff; }
    .iitm-line:nth-child(3){ color: #b8ffd6; }

    /* NAV */
    .nav-soft{
      position: fixed;
      left: 0; right: 0;
      top: 110px;
      z-index: 1040;
      background: rgba(255,255,255,.78);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(0,0,0,.06);
    }
    .brand-pill{
      display:inline-flex; align-items:center; gap:.6rem;
      padding:.42rem .78rem;
      border-radius:999px;
      background: rgba(255,255,255,.92);
      border: 1px solid rgba(0,0,0,.06);
      box-shadow: 0 10px 30px rgba(0,0,0,.05);
      font-weight:800;
    }
    .dot{
      width:12px; height:12px; border-radius:50%;
      background: linear-gradient(135deg, var(--a1), var(--a2));
      box-shadow: 0 0 0 6px rgba(124,92,255,.10);
    }

    /* hero */
    .hero{ padding: 220px 0 18px; }
    .hero-card{
      border-radius: 26px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.75);
      box-shadow: 0 22px 70px rgba(0,0,0,.08);
      overflow:hidden;
    }
    .hero-inner{ padding: 22px; }
    @media (min-width: 992px){ .hero-inner{ padding: 28px; } }

    .kicker{
      display:inline-flex; align-items:center; gap:.5rem;
      background: rgba(255,255,255,.88);
      border: 1px solid rgba(0,0,0,.06);
      border-radius: 999px;
      padding: .35rem .7rem;
      color: var(--muted);
      font-weight:700;
      font-size:.9rem;
    }
    .title{
      font-weight: 900;
      font-size: clamp(2rem, 3.4vw, 3.0rem);
      letter-spacing: -0.02em;
      margin: .6rem 0 .35rem;
      line-height: 1.1;
    }
    .subtitle{ color: var(--muted); font-size: 1.05rem; margin-bottom: 0; }

    .tag{
      display:inline-flex; align-items:center; gap:.45rem;
      padding:.35rem .62rem;
      border-radius:999px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.88);
      color: #1a2a44;
      font-weight:700;
      font-size:.92rem;
    }

    .btn-fun{
      border:none;
      border-radius: 14px;
      padding:.75rem 1rem;
      font-weight:900;
      color:#0b1020;
      background: linear-gradient(135deg, rgba(124,92,255,.95), rgba(35,196,255,.95));
      box-shadow: 0 16px 40px rgba(124,92,255,.20);
    }
    .btn-fun:hover{ filter: brightness(1.03); transform: translateY(-1px); }
    .btn-soft{
      border-radius: 14px;
      padding:.75rem 1rem;
      font-weight:800;
      border: 1px solid rgba(0,0,0,.08);
      background: rgba(255,255,255,.90);
      color: #0b1020;
    }

    section{ padding: 22px 0; }
    .section-title{ font-weight: 900; margin: 0 0 6px; }
    .section-sub{ color: var(--muted); margin: 0 0 16px; }

    .card-fun{
      border-radius: 20px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.75);
      box-shadow: 0 16px 50px rgba(0,0,0,.07);
      overflow:hidden;
    }

    .poster{
      width: 100%;
      max-width: 520px;
      border-radius: 22px;
      border: 1px solid rgba(0,0,0,.06);
      box-shadow: 0 18px 60px rgba(0,0,0,.10);
    }

    .qrPreview{
      width: 118px;
      height: 118px;
      border-radius: 18px;
      border: 1px solid rgba(0,0,0,.10);
      background: #fff;
      box-shadow: 0 10px 30px rgba(0,0,0,.06);
      padding: 8px;
      display:flex; align-items:center; justify-content:center;
    }
    .qrPreview img{ width:100%; height:100%; object-fit:contain; }

    /* ✅ Contacts alignment (same premium grid) */
    .coordinator-list{ display:grid; gap:.55rem; }
    .coord-row{
      display: grid;
      grid-template-columns: 140px 160px 86px 110px;
      align-items: center;
      gap: .5rem;
      padding: .35rem .5rem;
      border-radius: 14px;
      background: rgba(255,255,255,.60);
      border: 1px solid rgba(0,0,0,.06);
    }
    .coord-name{ font-weight: 900; white-space: nowrap; }
    .coord-num{
      font-weight: 900;
      color: #0b1020;
      text-decoration: none;
      padding: .18rem .55rem;
      border-radius: 999px;
      background: rgba(124,92,255,.12);
      border: 1px solid rgba(124,92,255,.18);
      display: inline-block;
      text-align: center;
      white-space: nowrap;
    }
    .coord-num:hover{ text-decoration: underline; }
    .coord-btn{
      width: 100%;
      border-radius: 999px;
      font-weight: 900;
      padding: .32rem .55rem;
      font-size: .85rem;
      line-height: 1.1;
    }
    @media (max-width: 576px){
      .coord-row{ grid-template-columns: 1fr 1fr; grid-auto-rows: auto; }
      .coord-row a.coord-btn{ width:100%; }
    }

    /* ✅ Sticky Footer */
    .footer-sticky{
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 1030;
      background: rgba(255,255,255,.92);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(0,0,0,.08);
    }

    /* Mobile header spacing */
    @media (max-width: 991px){
      .iitm-wrap{ align-items: stretch; }
      .iitm-logo{ width: 70px; height: 64px; }
      .iitm-panel{ padding: 10px 10px; }
      .nav-soft{ top: 150px; }
      .hero{ padding-top: 280px; }
    }

    /* lists */
    .rule-list li{ margin-bottom: .45rem; }
    .mono-pill{
      display:inline-flex; align-items:center; gap:.35rem;
      padding:.28rem .55rem;
      border-radius:999px;
      border: 1px solid rgba(0,0,0,.08);
      background: rgba(255,255,255,.9);
      font-weight:900;
      color:#0b1020;
      white-space:nowrap;
    }
  </style>
</head>

<body>
  <!-- IITM Header -->
  <div class="iitm-prominent">
    <div class="iitm-wrap">
      <div class="iitm-logo">
        <img src="logow.png" alt="IITM Logo">
      </div>

      <div class="iitm-panel">
        <div class="iitm-title">INSTITUTE OF INFORMATION TECHNOLOGY &amp; MANAGEMENT</div>

        <div class="iitm-lines">
          <div class="iitm-line">
            Accredited by National Board of Accreditation (NBA) &amp; National Assessment and Accreditation Council (NAAC) Grade-A
          </div>
          <div class="iitm-line">
            Recognised U/s 2(f) of UGC act. Rated Category 'A+' by SFRC &amp; 'A' Grade (Highest Category) by JAC Govt. of NCT of Delhi
          </div>
          <div class="iitm-line">
            Approved by AICTE &amp; Affiliated to GGS Indraprastha University, New Delhi
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- bubbles -->
  <div class="bubbles" aria-hidden="true">
    <div class="bubble" style="width:120px;height:120px;left:6%;top:92%;animation-duration:18s;"></div>
    <div class="bubble" style="width:180px;height:180px;left:18%;top:110%;animation-duration:23s;"></div>
    <div class="bubble" style="width:90px;height:90px;left:42%;top:105%;animation-duration:16s;"></div>
    <div class="bubble" style="width:140px;height:140px;left:62%;top:100%;animation-duration:20s;"></div>
    <div class="bubble" style="width:220px;height:220px;left:78%;top:115%;animation-duration:26s;"></div>
    <div class="bubble" style="width:110px;height:110px;left:90%;top:95%;animation-duration:19s;"></div>
  </div>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg nav-soft">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <span class="brand-pill"><span class="dot"></span> Management Sapiens</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto gap-lg-2">
          <li class="nav-item"><a class="nav-link fw-semibold" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#format">Format</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#rules">Rules</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#contacts">Contacts</a></li>
          <li class="nav-item">
            <a class="btn btn-fun btn-sm px-3" href="#register"><i class="bi bi-qr-code-scan"></i> Register Now</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header id="top" class="hero">
    <div class="container">
      <div class="hero-card">
        <div class="hero-inner">
          <div class="row g-3 align-items-center">

            <div class="col-lg-5">
              <span class="kicker"><i class="bi bi-controller"></i> Esports • BGMI Duo Tournament</span>
              <h1 class="title">E-Sport (BGMI Duo)</h1>
              <p class="subtitle">
                25 teams. 4 epic matches. Table topper wins.
              </p>

              <div class="d-flex flex-wrap gap-2 my-3">
                <span class="tag"><i class="bi bi-calendar-event"></i> 22 Jan, 2026</span>
                <span class="tag"><i class="bi bi-people"></i> Team Size: Duo</span>
                <span class="tag"><i class="bi bi-cash-coin"></i> ₹100 per person</span>
              </div>

              <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-fun" href="#register"><i class="bi bi-qr-code-scan"></i> Register Now</a>
                <a class="btn btn-soft" href="index.php"><i class="bi bi-arrow-left"></i> Back to Home</a>
              </div>

              <div class="mt-3 small text-muted">
                Cash prizes &amp; hampers • Trophy &amp; certificate
              </div>
            </div>

            <div class="col-lg-7 text-center">
              <img class="poster" src="<?php echo htmlspecialchars($POSTER); ?>" alt="Esports Poster">
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT -->
  <section id="about">
    <div class="container">
      <h2 class="section-title">About the Tournament</h2>
      <p class="section-sub">Fast, fair, competitive — built for serious duo squads.</p>

      <div class="card-fun p-3 p-md-4">
        <div class="row g-3">
          <div class="col-md-8">
            <div class="d-flex flex-wrap gap-2 mb-2">
              <span class="mono-pill"><i class="bi bi-people"></i> 25 Teams</span>
              <span class="mono-pill"><i class="bi bi-trophy"></i> Table Topper Wins</span>
              <span class="mono-pill"><i class="bi bi-lightning-charge"></i> 4 Matches</span>
            </div>
            <div class="text-muted">
              Play under custom settings with the latest official scoring approach.
              Your total points across all matches decide the champion.
            </div>
          </div>

          <div class="col-md-4">
            <div class="d-flex align-items-center gap-3">
              <div class="qrPreview">
                <img src="<?php echo htmlspecialchars($QR_IMG); ?>" alt="QR Register">
              </div>
              <div class="small text-muted">
                Scan / tap register.<br>
                Keep your BGMI IDs ready.
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- FORMAT -->
  <section id="format">
    <div class="container">
      <h2 class="section-title">Points System &amp; Matches</h2>
      <p class="section-sub">Placement + kills = final score.</p>

      <div class="row g-3">
        <div class="col-lg-6">
          <div class="card-fun p-3 p-md-4 h-100">
            <h5 class="fw-black mb-3" style="font-weight:900;">Placement Points</h5>
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead>
                  <tr>
                    <th>Placement</th>
                    <th>Points</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td><b>#1</b> (Chicken Dinner)</td><td><b>10</b></td></tr>
                  <tr><td><b>#2</b></td><td><b>6</b></td></tr>
                  <tr><td><b>#3</b></td><td><b>5</b></td></tr>
                  <tr><td><b>#4</b></td><td><b>4</b></td></tr>
                  <tr><td><b>#5</b></td><td><b>3</b></td></tr>
                  <tr><td><b>#6</b></td><td><b>2</b></td></tr>
                  <tr><td><b>#7</b></td><td><b>1</b></td></tr>
                </tbody>
              </table>
            </div>
            <div class="mt-3">
              <span class="tag"><i class="bi bi-crosshair"></i> 1 Kill = 1 Point</span>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card-fun p-3 p-md-4 h-100">
            <h5 class="fw-black mb-3" style="font-weight:900;">Match Plan</h5>
            <div class="d-flex flex-wrap gap-2">
              <span class="tag"><i class="bi bi-map"></i> Erangel</span>
              <span class="tag"><i class="bi bi-map"></i> Miramar</span>
              <span class="tag"><i class="bi bi-map"></i> Rondo</span>
              <span class="tag"><i class="bi bi-map"></i> Erangel</span>
            </div>

            <div class="mt-3 text-muted">
              Total points across all 4 matches decide the winner.
            </div>

            <div class="mt-3">
              <div class="d-flex flex-wrap gap-2">
                <span class="mono-pill"><i class="bi bi-gift"></i> Cash Prizes</span>
                <span class="mono-pill"><i class="bi bi-bag-heart"></i> Hampers</span>
                <span class="mono-pill"><i class="bi bi-award"></i> Trophy</span>
                <span class="mono-pill"><i class="bi bi-patch-check"></i> Certificate</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- RULES -->
  <section id="rules">
    <div class="container">
      <h2 class="section-title">Rules &amp; Regulations</h2>
      <p class="section-sub">Strict fair-play. Organizer decisions are final.</p>

      <div class="card-fun p-3 p-md-4">
        <ul class="rule-list mb-0">
          <li>The tournament format is <b>Duo</b> with <b>25 teams</b>, playing under custom settings.</li>
          <li>The champion is decided by the <b>highest total points</b> accumulated over <b>4 matches</b>.</li>
          <li>Tie-breakers order: <b>Total Kills</b>, <b>Best Placement</b>, <b>Head-to-Head</b>, then <b>Organizer Decision</b>.</li>
          <li><b>Zero tolerance</b> for hacks, cheats, emulators, teaming, or exploits — will result in disqualification.</li>
          <li>Players must use only their <b>registered IDs</b>.</li>
          <li><b>No toxic behavior</b> is permitted.</li>
          <li>No rematches for individual technical issues.</li>
          <li>All organizer decisions are final.</li>
          <li class="text-muted">Note: Participation grants permission for streaming and media usage.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- REGISTER -->
  <section id="register">
    <div class="container">
      <h2 class="section-title">Register</h2>
      <p class="section-sub">One tap opens the registration form.</p>

      <div class="card-fun p-3 p-md-4">
        <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
          <div>
            <div class="fw-bold">E-Sport (BGMI Duo) • 22 Jan, 2026</div>
            <div class="small text-muted">Entry Fee: ₹100 per person • Team Size: Duo</div>
          </div>
          <button class="btn btn-fun" onclick="window.open('<?php echo htmlspecialchars($REG_URL); ?>','_blank','noopener');">
            <i class="bi bi-qr-code-scan"></i> Register Now
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACTS -->
  <section id="contacts">
    <div class="container">
      <h2 class="section-title">Contact for Queries</h2>
      <p class="section-sub">Tap to call or WhatsApp the student coordinators.</p>

      <div class="card-fun p-3 p-md-4">
        <div class="coordinator-list">
          <?php foreach($COORDS as $c): ?>
            <div class="coord-row">
              <div class="coord-name"><?php echo htmlspecialchars($c["name"]); ?></div>

              <a class="coord-num" href="tel:<?php echo htmlspecialchars($c["phone"]); ?>">
                <?php echo htmlspecialchars($c["display"]); ?>
              </a>

              <a class="btn btn-outline-dark coord-btn" href="tel:<?php echo htmlspecialchars($c["phone"]); ?>">
                <i class="bi bi-telephone"></i> Call
              </a>

              <a class="btn btn-success coord-btn" target="_blank" rel="noopener"
                 href="https://wa.me/<?php echo htmlspecialchars(ltrim($c["phone"], "+")); ?>">
                <i class="bi bi-whatsapp"></i> WhatsApp
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Sticky Footer -->
  <footer class="footer footer-sticky">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2 py-3">
      <div>
        <div class="fw-bold">Management Sapiens • 22–23 Jan, 2026</div>
        <div class="small">Proudly Powered by <b>IITM Software Development Cell</b></div>
      </div>
      <a class="btn btn-soft" href="#top"><i class="bi bi-arrow-up"></i> Back to top</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
