<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Management Sapiens | 22–23 Jan 2026</title>

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
      padding-top: 0; /* we handle top spacing with fixed header */
    }

    /* ✅ Mandatory IITM Top Header (fixed) */
    .iitm-topbar{
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1050;
      background: #fff;
      border-bottom: 1px solid rgba(0,0,0,.10);
    }
    .iitm-topbar img{
      width: 100%;
      height: auto;
      display: block;
      max-height: 84px;          /* keeps it sleek */
      object-fit: cover;
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

    /* ✅ Navbar placed below IITM header */
    .nav-soft{
      position: fixed;
      left: 0; right: 0;
      top: 84px;                 /* matches iitm header height */
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

    /* ✅ Hero starts after BOTH fixed header + navbar */
    .hero{
      padding: 170px 0 20px; /* 84 header + ~56 navbar + breathing space */
    }

    .hero-card{
      border-radius: 26px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.75);
      box-shadow: 0 22px 70px rgba(0,0,0,.08);
      overflow:hidden;
    }

    /* ✅ reduce left whitespace by tighter padding */
    .hero-inner{
      padding: 22px;
    }
    @media (min-width: 992px){
      .hero-inner{ padding: 28px; }
    }

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
      margin-bottom: 0;
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

    /* ✅ poster area: more width, less empty left */
    .poster-wrap{
      display:flex;
      justify-content:center;
      align-items:center;
      height: 100%;
    }
    .poster{
      width: 100%;
      max-width: 520px;          /* larger */
      border-radius: 22px;
      border: 1px solid rgba(0,0,0,.06);
      box-shadow: 0 18px 60px rgba(0,0,0,.10);
    }

    section{ padding: 24px 0; }

    .section-title{ font-weight: 900; margin: 0 0 6px; }
    .section-sub{ color: var(--muted); margin: 0 0 16px; }

    .card-fun{
      height:100%;
      border-radius: 20px;
      border: 1px solid rgba(0,0,0,.06);
      background: rgba(255,255,255,.75);
      box-shadow: 0 16px 50px rgba(0,0,0,.07);
      overflow:hidden;
    }

    .event-top{ display:flex; justify-content:space-between; gap:10px; }
    .event-name{ font-weight: 900; font-size: 1.1rem; margin:0; }
    .event-line{ color: var(--muted); margin: .2rem 0 0; font-size: .95rem; }
    .pill-mini{
      border-radius:999px;
      padding: .28rem .58rem;
      font-weight:800;
      font-size:.78rem;
      background: rgba(255,255,255,.96);
      border: 1px solid rgba(0,0,0,.06);
      color:#1a2a44;
      white-space:nowrap;
    }

.qrPreview{
  width: 118px;
  height: 118px;
  border-radius: 18px;
  border: 1px solid rgba(0,0,0,.10);
  background: #fff;
  box-shadow: 0 10px 30px rgba(0,0,0,.06);
  flex: 0 0 auto;

  /* important */
  padding: 8px;              /* white border space */
  overflow: visible;         /* don't cut */
  display: flex;
  align-items: center;
  justify-content: center;
}

.qrPreview img{
  width: 100%;
  height: 100%;
  object-fit: contain;       /* show full QR */
  transform: none !important;/* remove zoom */
  image-rendering: crisp-edges;
}

    .footer{
      margin-top: 12px;
      padding: 26px 0 40px;
      color: var(--muted);
      border-top: 1px solid rgba(0,0,0,.06);
    }

    /* ✅ Mobile fixes */
    @media (max-width: 991px){
      .nav-soft{ top: 70px; }
      .iitm-topbar img{ max-height: 70px; }
      .hero{ padding-top: 150px; }
      .poster{ max-width: 100%; }
    }
    
    /*header */
    /* ✅ IITM Header (Dark, Clean, Centered, No ugly boxes) */
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

/* ✅ LOGO: fully visible (no crop, no translate) */
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

/* ✅ One elegant panel (no separate ugly boxes) */
.iitm-panel{
  flex: 1 1 auto;
  border-radius: 14px;
  border: 1px solid rgba(255,255,255,.14);
  background: rgba(255,255,255,.05);
  padding: 10px 14px;
}

/* ✅ CENTER aligned title + lines */
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

/* ✅ Lines container: subtle separators */
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

/* subtle separators */
.iitm-line + .iitm-line{
  border-top: 1px solid rgba(255,255,255,.08);
}

/* give each line a soft tint (not a box) */
.iitm-line:nth-child(1){ color: #c7d2ff; }
.iitm-line:nth-child(2){ color: #a7efff; }
.iitm-line:nth-child(3){ color: #b8ffd6; }

/* ✅ Push navbar below header */
.nav-soft{ top: 110px; }

/* ✅ Push hero below header + navbar */
.hero{ padding-top: 220px; }

/* ✅ Mobile: stack nicely */
@media (max-width: 991px){
  .iitm-wrap{ align-items: stretch; }
  .iitm-logo{ width: 70px; height: 64px; }
  .iitm-panel{ padding: 10px 10px; }
  .nav-soft{ top: 150px; }
  .hero{ padding-top: 280px; }
}
/* Contacts */
.contact-pill{
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  gap:.5rem .6rem;
  padding:.45rem .6rem;
  border-radius: 14px;
  background: rgba(255,255,255,.72);
  border: 1px solid rgba(0,0,0,.06);
}

.contact-num{
  font-weight: 900;
  color: #0b1020;
  text-decoration: none;
  padding: .15rem .45rem;
  border-radius: 999px;
  background: rgba(124,92,255,.12);
  border: 1px solid rgba(124,92,255,.18);
}
.contact-num:hover{ text-decoration: underline; }

.btn-call{
  border-radius: 999px;
  font-weight: 800;
}
.btn-wa{
  border-radius: 999px;
  font-weight: 800;
}
/* ✅ Contacts table alignment fix */
.contacts-table th{
  font-weight: 900;
  font-size: .92rem;
  color: #0b1020;
  border-bottom: 1px solid rgba(0,0,0,.08) !important;
}

.contacts-table td{
  vertical-align: top;
  border-top: 1px solid rgba(0,0,0,.06);
}

.coordinator-list{
  display: grid;
  gap: .55rem;
}

/* each coordinator row: name | number | call | whatsapp */
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

.coord-name{
  font-weight: 900;
  white-space: nowrap;
}

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

/* equal button sizing */
.coord-btn{
  width: 100%;
  border-radius: 999px;
  font-weight: 900;
  padding: .32rem .55rem;
  font-size: .85rem;
  line-height: 1.1;
}

/* mobile: stack nicely */
@media (max-width: 576px){
  .coord-row{
    grid-template-columns: 1fr 1fr;
    grid-auto-rows: auto;
  }
  .coord-row a.coord-btn{
    width: 100%;
  }
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

/* ✅ Prevent content hiding behind footer */
body{
  padding-bottom: 72px; /* footer height */
}

/* Mobile adjustment */
@media (max-width: 768px){
  body{ padding-bottom: 92px; }
}

  </style>
</head>

<body>

  <!-- ✅ Mandatory IITM Header on TOP -->
<!-- ✅ Mandatory IITM Prominent Header (Logo + Multicolor Text) -->
<!-- ✅ IITM Prominent DARK Header (Clean logo + centered text) -->
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

  <!-- NAV (below IITM header) -->
  <nav class="navbar navbar-expand-lg nav-soft">
    <div class="container">
      <a class="navbar-brand" href="#top">
        <span class="brand-pill"><span class="dot"></span> Management Sapiens</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto gap-lg-2">
          <li class="nav-item"><a class="nav-link fw-semibold" href="#events">Events</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#posters">Posters</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#register">Register</a></li>
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

            <!-- ✅ Give MORE WIDTH to poster side (5 / 7 split) -->
            <div class="col-lg-5">
              <span class="kicker"><i class="bi bi-stars"></i> Managenius (The Management Club) • IITM</span>
              <h1 class="title">Management Sapiens</h1>
              <p class="subtitle">
                A fun, high-energy student fest full of branding, creativity, auctions, strategy, media and esports.
                Pick your events and register in one click.
              </p>

              <div class="d-flex flex-wrap gap-2 my-3">
                <span class="tag"><i class="bi bi-calendar-event"></i> 22–23 Jan, 2026</span>
                <span class="tag"><i class="bi bi-geo-alt"></i> IITM Campus</span>
                <span class="tag"><i class="bi bi-instagram"></i> @Managenius.iitm</span>
              </div>

              <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-fun" href="#events"><i class="bi bi-grid-3x3-gap"></i> Explore Events</a>
                <!-- <a class="btn btn-soft" href="#posters"><i class="bi bi-image"></i> View Posters</a> -->
              </div>

              <div class="mt-3 small text-muted">
               <!-- Tip: Every event card below has its own QR-register button. -->
              </div>
            </div>

            <div class="col-lg-7">
              <div class="poster-wrap">
                <img class="poster" src="Poster.jpeg" alt="Management Sapiens Poster">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- EVENTS (rest unchanged) -->
  <section id="events">
    <div class="container">
      <h2 class="section-title">Events (Tap to Register)</h2>
    <!--  <p class="section-sub">Bubbly. Fast. Simple. Each event opens its own QR registration link.</p> -->

      <div class="row g-3">

        <div class="col-md-6 col-lg-4">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="ProductRemix.php" class="text-decoration-none text-dark">Product Remix</a>
      </p>
      <p class="event-line">Reimagine • Redesign • Pitch</p>
    </div>
    <span class="pill-mini">₹100 • Individual</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="ProductRemixQR.png" alt="QR Product Remix">
    </div>
    <div class="small text-muted">Product given one night before.<br/>7 min pitch + Q&amp;A.</div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('product')">
      <i class="bi bi-qr-code-scan"></i> Register: Product Remix
    </button>

    <button class="btn btn-soft" onclick="view('product')">
      <i class="bi bi-info-circle"></i> View Details
    </button>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-4">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="APL.php" class="text-decoration-none text-dark">
          Auction Premier League
        </a>
      </p>
      <p class="event-line">Bid smart • Build your XI</p>
    </div>
    <span class="pill-mini">₹200 • Team of 3</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="APLQR.png" alt="QR Auction">
    </div>
    <div class="small text-muted">
      Cricket auction simulation.<br/>Budget strategy matters!
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('auction')">
      <i class="bi bi-qr-code-scan"></i> Register: Auction Premier League
    </button>

    <a href="APL.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-4">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="esports.php" class="text-decoration-none text-dark">
          E-Sport (BGMI Duo)
        </a>
      </p>
      <p class="event-line">4 matches • points system</p>
    </div>
    <span class="pill-mini">₹100/person • Duo</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="esportQR.png" alt="QR Esport">
    </div>
    <div class="small text-muted">
      Fair play only.<br/>No hacks / emulators.
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('esport')">
      <i class="bi bi-qr-code-scan"></i> Register: E-Sport
    </button>

    <a href="esports.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-4">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="BrandPlay.php" class="text-decoration-none text-dark">
          Brand Play
        </a>
      </p>
      <p class="event-line">Debate • defend • win</p>
    </div>
    <span class="pill-mini">₹100 • Team of 2</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="BrandPlayQR.png" alt="QR Brand Play">
    </div>
    <div class="small text-muted">
      3 rounds (Day 1 + Day 2).<br/>Speak smart. Think fast.
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('brand')">
      <i class="bi bi-qr-code-scan"></i> Register: Brand Play
    </button>

    <a href="BrandPlay.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-4">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="MadMoments.php" class="text-decoration-none text-dark">
          Mad Moments
        </a>
      </p>
      <p class="event-line">Photography • Reel making</p>
    </div>
    <span class="pill-mini">₹100 • Individual</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="MadMomentsQR.png" alt="QR Mad Moments">
    </div>
    <div class="small text-muted">
      Cover both days.<br/>Original edits only.
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('mad')">
      <i class="bi bi-qr-code-scan"></i> Register: Mad Moments
    </button>

    <a href="MadMoments.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-4">
 <div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="ThinkOrSink.php" class="text-decoration-none text-dark">
          Think or Sink
        </a>
      </p>
      <p class="event-line">Case • campaign • pitch</p>
    </div>
    <span class="pill-mini">₹100 • Team of 2</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="ThinkOrSinkQR.png" alt="QR Think or Sink">
    </div>
    <div class="small text-muted">
      Case given on spot.<br/>Pitch + Q&amp;A.
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('think')">
      <i class="bi bi-qr-code-scan"></i> Register: Think or Sink
    </button>

    <a href="ThinkOrSink.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-6">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="BusinessSimulation.php" class="text-decoration-none text-dark">
          Business Simulation Challenge
        </a>
      </p>
      <p class="event-line">Strategy • decisions • outcomes</p>
    </div>
    <span class="pill-mini">Fest Event</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="BSCQR.png" alt="QR Simulation">
    </div>
    <div class="small text-muted">
      Business simulation style challenge.<br/>Compete as teams.
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('sim')">
      <i class="bi bi-qr-code-scan"></i> Register: Business Simulation
    </button>

    <a href="BusinessSimulation.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

        <div class="col-md-6 col-lg-6">
<div class="card-fun p-3">
  <div class="event-top">
    <div>
      <p class="event-name mb-0">
        <a href="TreasureTrack.php" class="text-decoration-none text-dark">
          Treasure Track
        </a>
      </p>
      <p class="event-line">Clues • chase • campus fun</p>
    </div>
    <span class="pill-mini">Fest Event</span>
  </div>

  <div class="d-flex align-items-center gap-3 mt-3">
    <div class="qrPreview">
      <img src="TTQR.png" alt="QR Treasure Track">
    </div>
    <div class="small text-muted">
      Treasure hunt vibes.<br/>Fastest team wins!
    </div>
  </div>

  <div class="d-grid gap-2 mt-3">
    <button class="btn btn-fun" onclick="go('treasure')">
      <i class="bi bi-qr-code-scan"></i> Register: Treasure Track
    </button>

    <a href="TreasureTrack.php" class="btn btn-soft">
      <i class="bi bi-info-circle"></i> View Details
    </a>
  </div>
</div>

        </div>

      </div>
    </div>
  </section>

  <!-- POSTERS -->
 <!-- <section id="posters">
    <div class="container">
      <h2 class="section-title">Posters</h2>
      <p class="section-sub">Use these posters on WhatsApp + Insta. Students can also scan directly from here.</p>
      <div class="row g-3">
        <div class="col-lg-6"><img class="poster" src="Poster.jpeg" alt="Main Poster"></div>
        <div class="col-lg-6"><img class="poster" src="poster-qr.jpg" alt="QR Poster"></div>
      </div>
    </div>
  </section> -->

  <!-- REGISTER -->
  <section id="register">
    <div class="container">
      <h2 class="section-title">One-Click Register</h2>
     <!-- <p class="section-sub">Choose an event and it opens the correct registration page.</p> -->
      <div class="card-fun p-3 p-md-4">
        <div class="row g-2">
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('product')">Product Remix</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('auction')">Auction Premier League</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('esport')">E-Sport (BGMI Duo)</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('brand')">Brand Play</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('mad')">Mad Moments</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('think')">Think or Sink</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('sim')">Business Simulation Challenge</button></div>
          <div class="col-md-6"><button class="btn btn-fun w-100" onclick="go('treasure')">Treasure Track</button></div>
        </div>
        <div class="mt-3 small text-muted">Instagram: <b>@Managenius.iitm</b> • Dates: <b>22–23 Jan, 2026</b></div>
      </div>
    </div>
    
    <hr class="my-4" style="opacity:.12">

<div class="fw-bold mb-2">View Event Pages</div>
<div class="row g-2">
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('product')">Product Remix (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('auction')">Auction Premier League (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('esport')">E-Sport (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('brand')">Brand Play (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('mad')">Mad Moments (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('think')">Think or Sink (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('sim')">Business Simulation (Details)</button></div>
  <div class="col-md-6"><button class="btn btn-soft w-100" onclick="view('treasure')">Treasure Track (Details)</button></div>
</div>

  </section>

<!-- CONTACTS -->
<section id="contacts">
  <div class="container">
    <h2 class="section-title">Contact for Queries</h2>
    <p class="section-sub">Tap to call or WhatsApp the student coordinators for your event.</p>

    <div class="card-fun p-3 p-md-4">
      <div class="table-responsive">
        <table class="table contacts-table align-middle mb-0">
          <thead>
            <tr>
              <th style="min-width:220px;">Event</th>
              <th>Student Coordinators</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td class="fw-bold">Product Remix</td>
              <td>
                <div class="coordinator-list">
                  <div class="coord-row">
                    <div class="coord-name">Ishaan</div>
                    <a class="coord-num" href="tel:+918168530126">81685 30126</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+918168530126"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/918168530126"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>

                  <div class="coord-row">
                    <div class="coord-name">Aditya</div>
                    <a class="coord-num" href="tel:+919315287970">93152 87970</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919315287970"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919315287970"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="fw-bold">Business Simulation Challenge</td>
              <td>
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
              </td>
            </tr>

            <tr>
              <td class="fw-bold">Mad Moments</td>
              <td>
                <div class="coordinator-list">
                  <div class="coord-row">
                    <div class="coord-name">Shreya</div>
                    <a class="coord-num" href="tel:+918178743787">81787 43787</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+918178743787"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/918178743787"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>

                  <div class="coord-row">
                    <div class="coord-name">Chanchal</div>
                    <a class="coord-num" href="tel:+919306096985">93060 96985</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919306096985"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919306096985"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="fw-bold">Treasure Track</td>
              <td>
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
              </td>
            </tr>

            <tr>
              <td class="fw-bold">Think or Sink</td>
              <td>
                <div class="coordinator-list">
                  <div class="coord-row">
                    <div class="coord-name">Tulika</div>
                    <a class="coord-num" href="tel:+917042797923">70427 97923</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+917042797923"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/917042797923"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>

                  <div class="coord-row">
                    <div class="coord-name">Anmol</div>
                    <a class="coord-num" href="tel:+917303077702">73030 77702</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+917303077702"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/917303077702"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="fw-bold">Brand Play</td>
              <td>
                <div class="coordinator-list">
                  <div class="coord-row">
                    <div class="coord-name">Shaivi</div>
                    <a class="coord-num" href="tel:+919773830095">97738 30095</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919773830095"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919773830095"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>

                  <div class="coord-row">
                    <div class="coord-name">Manpreet</div>
                    <a class="coord-num" href="tel:+919811806164">98118 06164</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919811806164"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919811806164"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="fw-bold">E-Sport</td>
              <td>
                <div class="coordinator-list">
                  <div class="coord-row">
                    <div class="coord-name">Vedant</div>
                    <a class="coord-num" href="tel:+918743004396">87430 04396</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+918743004396"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/918743004396"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>

                  <div class="coord-row">
                    <div class="coord-name">Sadiq</div>
                    <a class="coord-num" href="tel:+919315507480">93155 07480</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919315507480"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919315507480"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td class="fw-bold">Auction Premier League</td>
              <td>
                <div class="coordinator-list">
                  <div class="coord-row">
                    <div class="coord-name">Mohnish</div>
                    <a class="coord-num" href="tel:+919311681677">93116 81677</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919311681677"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919311681677"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>

                  <div class="coord-row">
                    <div class="coord-name">Hiteshi</div>
                    <a class="coord-num" href="tel:+919899970162">98999 70162</a>
                    <a class="btn btn-outline-dark coord-btn" href="tel:+919899970162"><i class="bi bi-telephone"></i> Call</a>
                    <a class="btn btn-success coord-btn" target="_blank" rel="noopener" href="https://wa.me/919899970162"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                  </div>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>


<footer class="footer footer-sticky">
  <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
    <div>
      <div class="fw-bold">Management Sapiens • 22–23 Jan, 2026</div>
      <div class="small">
        Proudly Powered by <b>IITM Software Development Cell</b>
      </div>
    </div>
    <a class="btn btn-soft" href="#top">
      <i class="bi bi-arrow-up"></i> Back to top
    </a>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const reg = {
    product:  "https://forms.gle/xSWuPsgk82U4jyjX8",
    auction:  "https://forms.gle/52CCy64mJ8PVF4QG9",
    esport:   "https://forms.gle/tAmNsdY9XyXPSSXk9",
    brand:    "https://forms.gle/ECCdwR1QzN6jd3jH9",
    mad:      "https://forms.gle/RQCqxDaULZznBmCJ6",
    think:    "https://forms.gle/3fhCZLMMMqrN7xRW6",
    sim:      "https://forms.gle/TmX4MxnPMmgbPCNv9",
    treasure: "https://forms.gle/JwwcwpxgYp1TKQsb7"
  };

  // ✅ event detail pages
  const pages = {
    product:  "ProductRemix.php",
    auction:  "APL.php",
    esport:   "esports.php",
    brand:    "BrandPlay.php",
    mad:      "MadMoments.php",
    think:    "ThinkOrSink.php",
    sim:      "BusinessSimulation.php",
    treasure: "TreasureTrack.php"
  };

  function go(key){
    const url = reg[key];
    if(!url){ alert("Registration link missing."); return; }
    window.open(url, "_blank", "noopener");
  }

  function view(key){
    const page = pages[key];
    if(!page){ alert("Event page missing."); return; }
    window.location.href = page;
  }
</script>


</body>
</html>
