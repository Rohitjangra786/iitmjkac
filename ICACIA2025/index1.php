<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ICACIA 2025 | IITM Janakpuri</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    :root{
      --brand:#0078D7;
      --brand-dark:#0067a7;
      --brand-soft:#e9f4ff;
    }

    /* Top announcement bar */
    .topbar{
      background: var(--brand);
      color:#fff;
      font-weight:600;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;
    }
    .topbar a{ color:#fff; text-decoration: underline; }
    .topbar .btn{ text-decoration: none; }

    /* Navbar overrides (kept minimal, header.php can style more) */
    .navbar{
      background-color: var(--brand);
      font-family: Georgia, serif;
    }
    .navbar .nav-link{ color:#fff; }
    .navbar .nav-link:hover{ color: cyan; }
    .navbar .nav-link.active{
      color:#fff;
      background-color: rgba(0,120,215,.2);
      text-shadow:0 0 5px lightblue;
    }

    /* HERO */
    .hero{
      position: relative;
      background: linear-gradient(120deg, #f8fbff, var(--brand-soft));
      overflow: hidden;
    }
    .hero .hero-media{
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }
    .hero h1{
      color: var(--brand);
      font-weight: 800;
      line-height: 1.15;
    }
    .hero .lead{
      color: #0f2147;
    }
    .hero .cta-wrap .btn{
      padding: .8rem 1.25rem;
      font-weight: 700;
      border-radius: .75rem;
    }
    .btn-register{
      background: var(--brand);
      color:#fff;
      border:none;
    }
    .btn-register:hover{ background: var(--brand-dark); color:#fff; }
    .btn-ecopyright{
      background: #ffffff;
      color: var(--brand);
      border:2px solid var(--brand);
    }
    .btn-ecopyright:hover{
      background: var(--brand);
      color:#fff;
      border-color: var(--brand);
    }

    /* Section headings */
    .section-title{
      color:#357ec7;
      font-size: 20px;
      font-weight: 700;
      margin-bottom:.5rem;
    }
    li{ text-align: justify; }

    /* Info cards / side panel */
    .side-card{
      background:#fff;
      border: 1px solid #e6eef7;
      border-radius: 12px;
      padding: 18px;
      box-shadow: 0 6px 18px rgba(0,0,0,.04);
    }

    /* Sticky footer (visible on initial load even on short pages) */
    footer{
      background:#f8f9fa;
      border-top:1px solid #e9ecef;
    }
    .footer-inner{
      min-height: 48px;
      display:flex;
      align-items:center;
      justify-content:center;
      color:#2b2b2b;
      font-size:.95rem;
    }

    /* Carousel caption (if you keep it later) */
    .carousel-caption{
      bottom: 20%;
      right: 10%;
      background: rgba(255,255,255,.7);
      padding: 15px 25px;
      border-radius:10px;
      width:60%;
      text-align:left;
      color: var(--brand);
    }
    @media (max-width: 992px){
      .carousel-caption{ width:50%; right:5%; bottom:25%; }
    }
    @media (max-width: 768px){
      .carousel-caption{
        width:75%;
        left:50%; right:50%;
        transform: translateX(-50%);
        bottom: 30%;
        padding:10px 15px;
        font-size:12px;
      }
      .carousel-caption h1{ font-size:1rem; }
      .carousel-caption p{ font-size:.8rem; }
    }
  </style>
</head>
<body>

  <!-- Top announcement bar with Registration CTA -->
  <div class="topbar py-2">
    <div class="container d-flex flex-column flex-md-row gap-2 align-items-center justify-content-between">
      <div>
        <span>ICACIA 2025 • 7–8 November 2025 • IITM Janakpuri, New Delhi</span>
      </div>
      <div class="d-flex gap-2">
        <a class="btn btn-sm btn-light fw-bold" href="registration.php" aria-label="Register for ICACIA 2025">Register Now</a>
        <a class="btn btn-sm btn-outline-light fw-bold" href="downloads/ICACIA2025_eCopyright_Form.pdf" target="_blank" rel="noopener"
           aria-label="Open e-Copyright Form">e-Copyright Form</a>
      </div>
    </div>
  </div>

  <?php
    include("header.php");
    include("conferencenav.php");
  ?>

  <!-- HERO: first fold with big CTAs -->
  <section class="hero py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <div class="header-title bg-white rounded-3 p-3 mb-3 text-center text-lg-start" style="color:#0078D7;">
            <div style="font-size:1.1rem; font-weight:700;">International Conference on</div>
            <div style="font-size:1.35rem; font-weight:800;">Advances in Computational Intelligence and Applications – 2025</div>
            <div class="mt-2" style="font-size:1.05rem; color:#0f2147;">
              <strong>Conference Dates:</strong> 7–8 November 2025 • New Delhi, India
            </div>
          </div>
          <p class="lead mb-4">
            A flagship forum by the Institute of Information Technology &amp; Management (IITM), bringing together academia and industry across
            AI, ML, Fuzzy Systems, Evolutionary Computation, Cybersecurity, Blockchain, IoT, and allied areas.
          </p>
          <div class="cta-wrap d-flex flex-wrap gap-2">
            <a href="registration.php" class="btn btn-register" aria-label="Register for ICACIA 2025">
              Register Now
            </a>
            <!-- 🔁 Update this href to your actual e-Copyright link/file -->
            <a href="downloads/ICACIA2025_eCopyright_Form.pdf"
               class="btn btn-ecopyright"
               target="_blank" rel="noopener"
               aria-label="Open e-Copyright Form PDF">
              e-Copyright Form
            </a>
          </div>
        </div>
        <div class="col-lg-5">
          <!-- Replace with your hero image / slider if desired -->
          <img src="images/sliderpic12.png" alt="ICACIA 2025 Conference" class="img-fluid hero-media"/>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT THE CONFERENCE -->
  <section class="py-4">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-8">
          <div class="section-title"><strong>ABOUT THE CONFERENCE</strong></div>
          <p style="text-align: justify;">
            The International Conference on Advances in Computational Intelligence and Applications (ICACIA) 2025 is a flagship conference of the
            Institute of Information Technology and Management, New Delhi. ICACIA-2025 brings together scholars across Machine Learning, Fuzzy Systems,
            Evolutionary Computation, and allied areas to present original research. It provides an ideal environment for researchers from academia,
            research labs, and industry to share insights, foster collaborations, and build lasting partnerships.
          </p>
          <p style="text-align: justify;">
            We invite creative, original papers not under review elsewhere. The conference emphasizes impactful research and community building
            across computational intelligence, cybersecurity, blockchain, IoT, wireless networks, data science, and cloud computing.
          </p>

          <div class="mt-3"><strong>Objectives</strong></div>
          <ul>
            <li>Provide a global platform for researchers, academicians, and industry experts to share research, opportunities, and innovations across
                AI, Big Data, Blockchain, IoT, Cybersecurity &amp; Privacy, Networks &amp; Data Communication, and Data Science.</li>
            <li>Energize the exchange of ideas, collaborative research, and dissemination of cutting-edge knowledge.</li>
          </ul>
        </div>

        <!-- Right side: Dates, Templates -->
        <div class="col-md-4">
          <div class="side-card">
            <div class="section-title mb-2"><strong>IMPORTANT DATES</strong></div>
            <div class="small">
              <div class="d-flex justify-content-between">
                <span>Submission of Full Paper</span><strong>Aug 18, 2025</strong>
              </div>
              <div class="d-flex justify-content-between">
                <span>Acceptance Notification</span><strong>Sep 20, 2025</strong>
              </div>
              <div class="d-flex justify-content-between">
                <span>Final Camera-Ready</span><strong>Oct 4, 2025</strong>
              </div>
              <div class="d-flex justify-content-between">
                <span>Registration Deadline</span><strong>Oct 4, 2025</strong>
              </div>
            </div>
            <hr/>
            <div class="section-title mb-2"><strong>PUBLISHING &amp; INDEXING</strong></div>
            <p class="mb-2">Accepted papers will be submitted for inclusion into Springer.</p>

            <div class="section-title mb-2"><strong>Templates</strong></div>
            <ul class="mb-0">
              <li><a href="downloads/Microsoft+Word+Proceedings+Templates.zip" target="_blank" download>Microsoft Word Template (.zip)</a></li>
              <li><a href="downloads/LaTeX2e+Proceedings+Templates+download (1).zip" target="_blank" download>LaTeX Template (.zip)</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TRACKS -->
  <section class="py-3">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="section-title">TRACK #1 INTELLIGENT SYSTEMS FOR SCALABLE BLOCKCHAIN AND WIRELESS SOLUTIONS</div>
          <ul>
            <li>AI-Driven Blockchain Optimization; AI-Powered Consensus</li>
            <li>Edge AI for Blockchain &amp; Wireless; 5G/6G &amp; Blockchain for IoT</li>
            <li>Privacy-Preserving ML on Blockchain; DANs for Wireless</li>
            <li>Blockchain for Spectrum Management, Smart Cities, Mesh Networks</li>
            <li>Quantum &amp; Blockchain for Wireless Systems; Supply Chain &amp; Logistics</li>
            <li>Security for Blockchain-Enabled Wireless; Scalable IoT &amp; WSNs</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="section-title">TRACK #2 COMPUTATIONAL INTELLIGENCE FOR CYBERSECURITY AND PRIVACY PRESERVATION</div>
          <ul>
            <li>AI-Driven Threat Detection; Behavioral Anomaly Analytics</li>
            <li>Deep Learning for Malware; Adversarial ML (Attacks &amp; Defenses)</li>
            <li>Vulnerability Assessment, XAI, Privacy Risk &amp; Anonymization</li>
            <li>Security &amp; Privacy in IoT/Edge/Cloud; Zero-Trust Architectures</li>
            <li>Digital Forensics, Incident Response; Secure Data Sharing</li>
            <li>Biometric Security; Domain-Specific Privacy (Health/Finance)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT IITM + Map -->
  <section class="py-4">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-8">
          <div class="section-title"><strong>ABOUT IITM</strong></div>
          <p style="text-align: justify;">
            The Institute of Information Technology &amp; Management (IITM) is affiliated to Guru Gobind Singh Indraprastha University (GGSIPU), New Delhi;
            accredited Grade “A” by NAAC; and approved by AICTE. IITM is rated Category ‘A+’ by SFRC and ‘A’ by the Joint Assessment Committee (JAC) of
            GGSIPU &amp; Directorate of Higher Education, Govt. of NCT of Delhi, and recognized under UGC Act 2(f).
          </p>
          <p style="text-align: justify;">
            IITM offers AICTE-approved MCA &amp; MBA, and GGSIPU-conducted BBA, BCA, B.Com (Hons.), and BA(JMC). For over 25 years, IITM has delivered
            academic excellence and industry-ready graduates for the technology and business ecosystem.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img src="images/campus.jpg" class="img-fluid rounded shadow" alt="IITM Campus"/>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-6">
          <a href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" target="_blank" rel="noopener">
            <img src="http://iitmjanakpuri.com/ICACIA2025/images/map.png" alt="IITM Location Map" style="height:300px; width:100%; max-width:450px;" />
          </a>
        </div>
        <div class="col-md-6">
          <address class="text-center m-0">
            <p class="mb-1"><b>Institute of Information Technology and Management</b></p>
            <p class="mb-1">D-29, Institutional Area, Janakpuri, New Delhi-110058</p>
            <p class="mb-1">Phone: +91/011-28525882, 28520239, 28525051</p>
            <p class="mb-0">Mobile: 7982416019, 7906025772</p>
          </address>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <!-- Sticky copyright (if your footer.php doesn't already show it) -->
  <footer>
    <div class="container">
      <div class="footer-inner text-center py-2">
        © 2025 ICACIA / IITM Janakpuri. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
