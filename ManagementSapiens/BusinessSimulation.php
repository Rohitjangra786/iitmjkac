<?php
// BusinessSimulation.php (static page; keep extension as .php for your project routing)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Business Simulation | Management Sapiens • 22–23 Jan, 2026</title>

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
      padding-top: 0;
      padding-bottom: 72px; /* sticky footer space */
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
    @keyframes floaty{
      from{ transform: translateY(40px); }
      to{ transform: translateY(-120vh); }
    }

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
    .iitm-logo img{
      width: 80%;
      height: 80%;
      object-fit: contain;
      display: block;
    }
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
    .iitm-line + .iitm-line{
      border-top: 1px solid rgba(255,255,255,.08);
    }
    .iitm-line:nth-child(1){ color: #c7d2ff; }
    .iitm-line:nth-child(2){ color: #a7efff; }
    .iitm-line:nth-child(3){ color: #b8ffd6; }

    /* ✅ Navbar below header */
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

    /* ✅ Page hero spacing (header + navbar) */
    .hero{ padding: 220px 0 18px; }
    section{ padding: 18px 0; }

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
      font-size: clamp(2rem, 3.4vw, 3.2rem);
      letter-spacing: -0.02em;
      margin: .6rem 0 .35rem;
      line-height: 1.1;
    }
    .subtitle{
      color: var(--muted);
      font-size: 1.05rem;
      margin-bottom: .2rem;
    }

    .tag{
      display:inline-flex; align-items:center; gap:.45rem;
      padding:.35rem .62rem;
      border-radius:999px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.88);
      color: #1a2a44;
      font-weight:700;
      font-size:.92rem;
      white-space: nowrap;
    }
    .tag-soft{
      background: rgba(124,92,255,.10);
      border-color: rgba(124,92,255,.18);
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

    .card-fun{
      border-radius: 20px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.75);
      box-shadow: 0 16px 50px rgba(0,0,0,.07);
      overflow:hidden;
    }

    .poster-wrap{
      display:flex;
      justify-content:center;
      align-items:center;
      height: 100%;
    }
    .poster{
      width: 100%;
      max-width: 520px;
      border-radius: 22px;
      border: 1px solid rgba(0,0,0,.06);
      box-shadow: 0 18px 60px rgba(0,0,0,.10);
    }

    .section-title{ font-weight: 900; margin: 0 0 6px; }
    .section-sub{ color: var(--muted); margin: 0 0 16px; }

    .info-grid{
      display:grid;
      gap: 12px;
    }
    @media (min-width: 992px){
      .info-grid{ grid-template-columns: 1fr 1fr; }
    }
    .info-item{
      padding: 14px 14px;
      border-radius: 18px;
      background: rgba(255,255,255,.65);
      border: 1px solid rgba(0,0,0,.06);
    }
    .info-item h6{
      margin: 0 0 6px;
      font-weight: 900;
      display:flex; gap:.5rem; align-items:center;
    }
    .info-item p, .info-item ul{ margin:0; color: var(--muted); }
    .info-item ul{ padding-left: 1.1rem; }

    /* Contacts (compact, aligned) */
    .coordinator-list{ display:grid; gap:.55rem; }
    .coord-row{
      display: grid;
      grid-template-columns: 140px 160px 92px 120px;
      align-items: center;
      gap: .5rem;
      padding: .45rem .6rem;
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
      .coord-row{
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: auto;
      }
      .coord-row a.coord-btn{ width: 100%; }
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
    @media (max-width: 768px){
      body{ padding-bottom: 92px; }
    }

    /* ✅ Mobile header spacing */
    @media (max-width: 991px){
      .iitm-wrap{ align-items: stretch; }
      .iitm-logo{ width: 70px; height: 64px; }
      .iitm-panel{ padding: 10px 10px; }
      .nav-soft{ top: 150px; }
      .hero{ padding-top: 280px; }
      .poster{ max-width: 100%; }
    }
  </style>
</head>

<body>

  <!-- ✅ IITM Header -->
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
          <li class="nav-item"><a class="nav-link fw-semibold" href="index.php#events"><i class="bi bi-grid-3x3-gap"></i> Events</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#register"><i class="bi bi-qr-code-scan"></i> Register</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#contacts"><i class="bi bi-telephone"></i> Contacts</a></li>
          <li class="nav-item">
            <a class="btn btn-fun btn-sm px-3" href="index.php"><i class="bi bi-house"></i> Home</a>
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
              <span class="kicker"><i class="bi bi-stars"></i> Managenius • IITM</span>

              <h1 class="title">Business Simulation</h1>
              <p class="subtitle">Forge Your Path to Profit: Analyze, Compete, Conquer</p>

              <div class="d-flex flex-wrap gap-2 my-3">
                <span class="tag"><i class="bi bi-calendar-event"></i> 23 Jan, 2026</span>
                <span class="tag tag-soft"><i class="bi bi-people"></i> Team of 2</span>
                <span class="tag"><i class="bi bi-cash-coin"></i> ₹100</span>
                <span class="tag"><i class="bi bi-trophy"></i> Cash Prizes</span>
              </div>

              <div class="d-flex flex-wrap gap-2 mt-2">
                <a class="btn btn-fun" href="#register"><i class="bi bi-qr-code-scan"></i> Register Now</a>
                <a class="btn btn-soft" href="index.php#events"><i class="bi bi-arrow-left"></i> Back to Events</a>
              </div>

              <div class="mt-3 small text-muted">
                A team-based strategic management challenge where you run a virtual business and compete on performance.
              </div>
            </div>

            <div class="col-lg-7">
              <div class="poster-wrap">
                <!-- ✅ Put your poster image file name here -->
                <img class="poster" src="BusinessSimulation.png" alt="Business Simulation Poster">
              </div>
              <div class="text-center small text-muted mt-2">
                (If your poster filename is different, just rename it here.)
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- DETAILS -->
  <section id="details">
    <div class="container">
      <h2 class="section-title">Event Details</h2>
      <p class="section-sub">Simple, competitive, and realistic business decision-making.</p>

      <div class="card-fun p-3 p-md-4">
        <div class="info-grid">

          <div class="info-item">
            <h6><i class="bi bi-bullseye"></i> What this event is</h6>
            <ul>
              <li>A team-based strategic management competition where participants manage a virtual business.</li>
              <li>Teams take real-time decisions in finance, operations, marketing, and strategy.</li>
            </ul>
          </div>

          <div class="info-item">
            <h6><i class="bi bi-diagram-3"></i> Format</h6>
            <ul>
              <li>Conducted using the <b>SimVenture</b> app to simulate realistic market dynamics.</li>
              <li>Consists of <b>three rounds</b>, each representing a different business time period.</li>
            </ul>
          </div>

          <div class="info-item">
            <h6><i class="bi bi-graph-up-arrow"></i> Scoring / Evaluation</h6>
            <ul>
              <li>Performance is primarily measured using <b>Profit &amp; Loss (P&amp;L)</b>.</li>
              <li>Final rankings are mainly evaluated on P&amp;L outcomes.</li>
            </ul>
          </div>

          <div class="info-item">
            <h6><i class="bi bi-currency-dollar"></i> Important note</h6>
            <ul>
              <li>All financial transactions are handled in <b>US Dollars</b> (inside the simulation).</li>
              <li>Bring your team on time—briefing will not be repeated.</li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- RULES -->
  <section id="rules">
    <div class="container">
      <h2 class="section-title">Rules &amp; Regulations</h2>

      <div class="card-fun p-3 p-md-4">
        <ul class="mb-0 text-muted">
          <li>This is a team-based strategic management competition run as a virtual business simulation.</li>
          <li>The team must report to the venue on time; briefing will not be repeated.</li>
          <li>Any form of cheating, exploiting app bugs, or receiving outside assistance is strictly prohibited and may lead to disqualification.</li>
          <li>All decisions by the event organizers regarding rankings and rule interpretations are final.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- REGISTER -->
  <section id="register">
    <div class="container">
      <h2 class="section-title">Register</h2>
      <p class="section-sub">One click opens the registration form in a new tab.</p>

      <div class="card-fun p-3 p-md-4">
        <div class="d-grid d-md-flex gap-2">
          <button class="btn btn-fun" onclick="goRegister()">
            <i class="bi bi-qr-code-scan"></i> Register: Business Simulation
          </button>
          <a class="btn btn-soft" href="index.php#register">
            <i class="bi bi-grid-1x2"></i> View All Register Buttons
          </a>
        </div>

        <div class="mt-3 small text-muted">
          Instagram: <b>@Managenius.iitm</b> • Fest dates: <b>22–23 Jan, 2026</b>
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

          <div class="coord-row">
            <div class="coord-name">Ananya</div>
            <a class="coord-num" href="tel:+918882161432">88821 61432</a>
            <a class="btn btn-outline-dark coord-btn" href="tel:+918882161432"><i class="bi bi-telephone"></i> Call</a>
            <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/918882161432"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          </div>

          <div class="coord-row">
            <div class="coord-name">Shaan</div>
            <a class="coord-num" href="tel:+919311166770">93111 66770</a>
            <a class="btn btn-outline-dark coord-btn" href="tel:+919311166770"><i class="bi bi-telephone"></i> Call</a>
            <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919311166770"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer footer-sticky">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
      <div>
        <div class="fw-bold">Management Sapiens • 22–23 Jan, 2026</div>
        <div class="small">Proudly Powered by <b>IITM Software Development Cell</b></div>
      </div>
      <a class="btn btn-soft" href="#top"><i class="bi bi-arrow-up"></i> Back to top</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const REGISTER_URL = "https://forms.gle/TmX4MxnPMmgbPCNv9"; // same as 'sim' in index.php

    function goRegister(){
      window.open(REGISTER_URL, "_blank", "noopener");
    }
  </script>

  <!-- event content source (internal): :contentReference[oaicite:0]{index=0} -->
</body>
</html>
