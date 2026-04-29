<?php
// TreasureTrack.php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Treasure Track | Management Sapiens • 22–23 Jan 2026</title>

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
      padding-bottom: 72px; /* for sticky footer */
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

    /* HERO spacing */
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
      font-weight: 950;
      font-size: clamp(2rem, 3.2vw, 3.1rem);
      letter-spacing: -0.02em;
      margin: .6rem 0 .35rem;
      line-height: 1.08;
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
    .section-title{ font-weight: 950; margin: 0 0 6px; }
    .section-sub{ color: var(--muted); margin: 0 0 14px; }

    .card-fun{
      border-radius: 20px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.75);
      box-shadow: 0 16px 50px rgba(0,0,0,.07);
      overflow:hidden;
    }

    /* poster */
    .poster{
      width: 100%;
      max-width: 560px;
      border-radius: 22px;
      border: 1px solid rgba(0,0,0,.06);
      box-shadow: 0 18px 60px rgba(0,0,0,.10);
    }

    /* Premium list blocks */
    .step{
      border-radius: 18px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.72);
      padding: 14px 14px;
      display:flex;
      gap:12px;
      align-items:flex-start;
    }
    .step .num{
      width: 34px; height: 34px;
      border-radius: 12px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight: 950;
      color:#0b1020;
      background: rgba(124,92,255,.14);
      border: 1px solid rgba(124,92,255,.18);
      flex: 0 0 auto;
    }
    .step h6{ margin: 0; font-weight: 950; }
    .step p{ margin: 4px 0 0; color: var(--muted); }

    /* Contacts (same premium alignment fix) */
    .coordinator-list{ display: grid; gap: .55rem; }
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
      .coord-row a.coord-btn{ width: 100%; }
    }

    /* Sticky Footer */
    .footer-sticky{
      position: fixed;
      bottom: 0; left: 0; right: 0;
      z-index: 1030;
      background: rgba(255,255,255,.92);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(0,0,0,.08);
    }
    @media (max-width: 768px){
      body{ padding-bottom: 92px; }
    }

    /* Mobile header stacking */
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
          <li class="nav-item"><a class="nav-link fw-semibold" href="#flow">Event Flow</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#rules">Rules</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#contacts">Contacts</a></li>
          <li class="nav-item">
            <a class="btn btn-fun btn-sm px-3" href="#register">
              <i class="bi bi-qr-code-scan"></i> Register Now
            </a>
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
              <span class="kicker"><i class="bi bi-stars"></i> Managenius (The Management Club) • IITM</span>
              <h1 class="title">Treasure Track</h1>
              <p class="subtitle">
                Speed. Strategy. Success. <br/>Your treasure awaits.
              </p>

              <div class="d-flex flex-wrap gap-2 my-3">
                <span class="tag"><i class="bi bi-calendar-event"></i> 23 Jan, 2026</span>
                <span class="tag"><i class="bi bi-people"></i> Team of 3</span>
                <span class="tag"><i class="bi bi-cash-coin"></i> ₹200</span>
                <span class="tag"><i class="bi bi-trophy"></i> Exciting Cash Prizes</span>
              </div>

              <div class="d-flex flex-wrap gap-2" id="register">
                <button class="btn btn-fun" onclick="goRegister()">
                  <i class="bi bi-qr-code-scan"></i> Register: Treasure Track
                </button>
                <a class="btn btn-soft" href="index.php">
                  <i class="bi bi-arrow-left"></i> Back to Home
                </a>
              </div>

              <div class="mt-3 small text-muted">
                Tip: Use the Call / WhatsApp buttons below for quick help.
              </div>
            </div>

            <div class="col-lg-7 text-center">
              <!-- ✅ Put your poster image file name here -->
              <img class="poster" src="TreasureTrack.png" alt="Treasure Track Poster">
              <!-- Example names if you want: TreasureTrack.jpg / TTPoster.jpeg -->
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT -->
  <section id="about">
    <div class="container">
      <h2 class="section-title">About the Event</h2>
      <p class="section-sub">
        A fast-paced campus hunt where teams solve codes, answer rapid questions, and finally build the puzzle to reach the last clue.
      </p>

      <div class="card-fun p-3 p-md-4">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="step">
              <div class="num"><i class="bi bi-lightbulb"></i></div>
              <div>
                <h6>Think fast</h6>
                <p>Codes + clues require logic, observation, and teamwork.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="step">
              <div class="num"><i class="bi bi-geo-alt"></i></div>
              <div>
                <h6>Move smart</h6>
                <p>Find the right spots quickly and stay coordinated as a team of 3.</p>
              </div>
            </div>
          </div>
        </div>

        <hr class="my-4" style="opacity:.12">

        <div class="d-flex flex-wrap gap-2">
          <span class="tag"><i class="bi bi-stopwatch"></i> Speed matters</span>
          <span class="tag"><i class="bi bi-diagram-3"></i> Strategy matters</span>
          <span class="tag"><i class="bi bi-shield-check"></i> Follow campus rules</span>
        </div>
      </div>
    </div>
  </section>

  <!-- EVENT FLOW -->
  <section id="flow">
    <div class="container">
      <h2 class="section-title">Event Flow</h2>
      <p class="section-sub">Four stages. Qualify step-by-step to reach the final clue.</p>

      <div class="row g-3">
        <div class="col-lg-6">
          <div class="step h-100">
            <div class="num">1</div>
            <div>
              <h6>Crack the code, find the spot</h6>
              <p>Be among the <b>Top 16</b> teams to qualify.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="step h-100">
            <div class="num">2</div>
            <div>
              <h6>Rapid fire, right answers</h6>
              <p>Speed into the <b>Top 8</b>.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="step h-100">
            <div class="num">3</div>
            <div>
              <h6>Hunt the pieces, build the puzzle</h6>
              <p>Join the <b>Final 4</b> teams.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="step h-100">
            <div class="num">4</div>
            <div>
              <h6>The ultimate hunt</h6>
              <p>Solve the trail to claim the <b>final clue</b>.</p>
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
      <p class="section-sub">Please follow these strictly during the event.</p>

      <div class="card-fun p-3 p-md-4">
        <ul class="mb-0" style="color: var(--muted); font-weight: 700;">
          <li class="mb-2">Teams must report on time and follow all coordinator instructions.</li>
          <li class="mb-2">Mobile phones are strictly not allowed and will be collected before the event begins.</li>
          <li class="mb-2">Cheating or sharing clues will result in immediate disqualification.</li>
          <li class="mb-2">Teams cannot skip, repeat, or reattempt any round.</li>
          <li class="mb-2">Participants must follow campus rules and ensure their own safety during the event.</li>
          <li>The decision of the coordinators and judges will be final and binding.</li>
        </ul>
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
            <div class="coord-name">Atul</div>
            <a class="coord-num" href="tel:+918506847802">85068 47802</a>
            <a class="btn btn-outline-dark coord-btn" href="tel:+918506847802"><i class="bi bi-telephone"></i> Call</a>
            <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/918506847802"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          </div>

          <div class="coord-row">
            <div class="coord-name">Yashika</div>
            <a class="coord-num" href="tel:+919289908995">92899 08995</a>
            <a class="btn btn-outline-dark coord-btn" href="tel:+919289908995"><i class="bi bi-telephone"></i> Call</a>
            <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919289908995"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          </div>
        </div>

        <hr class="my-4" style="opacity:.12">

        <div class="d-flex flex-wrap gap-2">
          <button class="btn btn-fun" onclick="goRegister()">
            <i class="bi bi-qr-code-scan"></i> Register: Treasure Track
          </button>
          <a class="btn btn-soft" href="#top"><i class="bi bi-arrow-up"></i> Back to top</a>
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

  <script>
    // Treasure Track registration link (same as your index.php mapping)
    const REGISTER_URL = "https://forms.gle/JwwcwpxgYp1TKQsb7";

    function goRegister(){
      window.open(REGISTER_URL, "_blank", "noopener");
    }
  </script>

</body>
</html>
