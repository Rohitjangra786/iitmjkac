<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = "http://iitmjanakpuri.com/index.php";';
echo '}';
echo '</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ============ SEO ============ -->
    <title>Best BCom College in Delhi NCR | Top BCom College in Delhi</title>
    <meta name="description" content="IITM Janakpuri, the Best BCom College in Delhi NCR and Top BCom College in Delhi, offers BCom (Hons) with industry-aligned programs, internships & skill development.">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="https://iitmjanakpuri.com/course/bcom.php">

    <link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">
    <meta name="theme-color" content="#800000">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    .bcom-page{ font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,sans-serif; color:#2b2b2b; background:#fafafa; }
    .bcom-page h1, .bcom-page h2, .bcom-page h3, .bcom-page h4{ font-family:'Poppins',system-ui,sans-serif; color:#1a1a1a; letter-spacing:-0.01em; }
    .bcom-page a{ color:#800000; }
    .bcom-page p{ font-size:15.5px; line-height:1.7; color:#303030; }
    .bcom-page .navigation{ display:none !important; }

    .bcom-hero{ position:relative; background:linear-gradient(135deg,#800000 0%,#5e0000 55%,#3d0000 100%); color:#fff; padding:56px 0 60px; overflow:hidden; }
    .bcom-hero::before{ content:""; position:absolute; inset:0; background:radial-gradient(circle at 85% 15%, rgba(255,255,255,.10), transparent 55%); pointer-events:none; }
    .bcom-hero .container{ position:relative; }
    .hero-eyebrow{ display:inline-block; background:rgba(255,255,255,.14); border:1px solid rgba(255,255,255,.28); color:#fff; font-family:'Poppins',sans-serif; font-weight:600; font-size:12.5px; letter-spacing:.6px; text-transform:uppercase; padding:6px 14px; border-radius:999px; margin-bottom:14px; }
    .hero-title{ font-size:clamp(28px,4.2vw,44px); font-weight:800; color:#fff !important; margin:0 0 12px; line-height:1.14; }
    .bcom-page .hero-sub{ font-size:clamp(15px,1.8vw,17.5px); opacity:.92; max-width:780px; margin:0 0 18px; line-height:1.55; color:#fff; }
    .hero-meta{ display:flex; flex-wrap:wrap; gap:8px 10px; margin:14px 0 22px; }
    .hero-pill{ background:rgba(255,255,255,.13); border:1px solid rgba(255,255,255,.25); padding:6px 12px; border-radius:999px; font-size:12.5px; font-weight:600; font-family:'Poppins',sans-serif; }
    .hero-card{ background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.18); border-radius:14px; padding:22px; backdrop-filter:blur(4px); }
    .hero-card h4{ color:#fff !important; font-weight:700; font-size:16px; margin-bottom:12px; }
    .hero-card .kv{ display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px dashed rgba(255,255,255,.18); font-size:13.5px; }
    .hero-card .kv:last-child{ border-bottom:0; }
    .hero-card .kv b{ font-family:'Poppins',sans-serif; font-weight:700; }

    .prog-switch{ background:#fff; border-bottom:1px solid #ececec; padding:14px 0; }
    .prog-switch .chips{ display:flex; flex-wrap:wrap; gap:8px; }
    .prog-switch a{ text-decoration:none; background:#fff; border:1px solid #e6e6e6; color:#2b2b2b; padding:7px 14px; border-radius:999px; font-size:13px; font-weight:600; font-family:'Poppins',sans-serif; transition:all .15s ease; }
    .prog-switch a:hover{ border-color:#800000; color:#800000; }
    .prog-switch a.is-current{ background:#800000; color:#fff !important; border-color:#800000; }

    .section{ padding:56px 0; }
    .section-tight{ padding:40px 0; }
    .section-alt{ background:#fff; }
    .section-heading{ font-size:clamp(22px,2.6vw,30px); font-weight:800; margin-bottom:8px; }
    .section-sub{ font-size:14.5px; color:#5b5b5b; margin-bottom:28px; max-width:820px; }
    .accent-bar{ width:56px; height:4px; border-radius:4px; background:#800000; margin:0 0 18px; }

    .fact-card{ background:#fff; border:1px solid #ececec; border-radius:14px; padding:22px; height:100%; transition:transform .2s ease, box-shadow .2s ease, border-color .2s ease; }
    .fact-card:hover{ transform:translateY(-3px); box-shadow:0 14px 30px rgba(0,0,0,.07); border-color:#f1d6d6; }
    .fact-icon{ width:44px; height:44px; display:inline-flex; align-items:center; justify-content:center; border-radius:12px; background:rgba(128,0,0,.08); color:#800000; font-size:19px; margin-bottom:12px; }
    .fact-card h3{ font-size:16px; font-weight:700; margin-bottom:6px; }
    .fact-card p{ font-size:14px; color:#4a4a4a; margin:0; }

    .exit-grid{ display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:14px; }
    .exit-step{ background:#fff; border:1px solid #ececec; border-radius:12px; padding:20px 20px 18px; position:relative; }
    .exit-step .year{ font-family:'Poppins',sans-serif; font-weight:800; font-size:11.5px; letter-spacing:.8px; text-transform:uppercase; color:#800000; background:rgba(128,0,0,.07); padding:4px 10px; border-radius:999px; display:inline-block; margin-bottom:10px; }
    .exit-step h4{ font-size:16px; margin:0 0 4px; font-weight:700; color:#1a1a1a; }
    .exit-step p{ font-size:13.5px; color:#555; margin:0; line-height:1.55; }

    .po-table{ width:100%; background:#fff; border:1px solid #ececec; border-radius:14px; overflow:hidden; border-collapse:separate; border-spacing:0; }
    .po-table thead th{ background:#800000; color:#fff; font-family:'Poppins',sans-serif; font-weight:700; font-size:13.5px; padding:12px 14px; text-align:left; border:0; }
    .po-table td{ padding:12px 14px; font-size:14px; line-height:1.6; color:#303030; vertical-align:top; border-top:1px solid #f0e8e8; }
    .po-table td.code{ font-family:'Poppins',sans-serif; font-weight:700; color:#800000; white-space:nowrap; width:80px; }
    .po-table tbody tr:nth-child(even) td{ background:#fdfaf7; }

    .info-panel{ background:linear-gradient(135deg,#fff 0%,#fff7f7 100%); border:1px solid #f1d6d6; border-radius:14px; padding:24px; }
    .info-panel h3{ font-size:18px; font-weight:700; margin:0 0 10px; color:#1a1a1a; }
    .info-panel p{ font-size:14.5px; line-height:1.7; color:#2e2e2e; margin:0 0 10px; }
    .info-panel p:last-child{ margin-bottom:0; }
    .info-panel ul{ margin:8px 0 0; padding-left:22px; }
    .info-panel ul li{ font-size:14.5px; line-height:1.7; color:#2e2e2e; margin-bottom:6px; }

    .skill-card{ background:#fff; border:1px solid #ececec; border-radius:14px; overflow:hidden; height:100%; }
    .skill-card .head{ background:#800000; color:#fff; font-family:'Poppins',sans-serif; font-weight:700; font-size:14.5px; padding:12px 18px; letter-spacing:.3px; }
    .skill-card .head.ict{ background:linear-gradient(135deg,#800000 0%,#5e0000 100%); }
    .skill-card .head.mgmt{ background:linear-gradient(135deg,#1f6f43 0%,#144d2e 100%); }
    .skill-card .head.soft{ background:linear-gradient(135deg,#b87a00 0%,#8a5a00 100%); }
    .skill-card .head.think{ background:linear-gradient(135deg,#1d5b8c 0%,#0f3f66 100%); }
    .skill-card ul{ list-style:none; padding:16px 18px; margin:0; }
    .skill-card li{ position:relative; padding:5px 0 5px 22px; font-size:14px; color:#303030; line-height:1.55; }
    .skill-card li::before{ content:"\f00c"; font-family:"Font Awesome 5 Free"; font-weight:900; color:#800000; position:absolute; left:0; top:7px; font-size:11px; }

    .dl-grid{ display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:14px; }
    .dl-card{ background:#fff; border:1px solid #ececec; border-radius:12px; padding:18px 20px; display:flex; gap:14px; align-items:flex-start; text-decoration:none !important; color:inherit; transition:transform .2s ease, box-shadow .2s ease, border-color .2s ease; }
    .dl-card:hover{ transform:translateY(-2px); box-shadow:0 12px 26px rgba(0,0,0,.07); border-color:#f1d6d6; color:inherit; }
    .dl-card .dl-ico{ width:42px; height:42px; display:inline-flex; align-items:center; justify-content:center; border-radius:10px; background:rgba(128,0,0,.08); color:#800000; font-size:18px; flex-shrink:0; }
    .dl-card h4{ font-size:15px; font-weight:700; margin:0 0 2px; color:#1a1a1a; }
    .dl-card p{ font-size:13px; color:#5b5b5b; margin:0; line-height:1.5; }
    .dl-card .dl-tag{ display:inline-block; background:rgba(128,0,0,.08); color:#800000; font-family:'Poppins',sans-serif; font-weight:700; font-size:11px; letter-spacing:.4px; padding:3px 8px; border-radius:999px; margin-top:6px; }

    @media (max-width:768px){ .bcom-hero{ padding:40px 0 44px; } .section{ padding:40px 0; } }
    </style>
</head>
<body class="bcom-page">

<?php include('../naacheader.php'); ?>
<?php include('../n.php'); ?>

<!-- ============ HERO ============ -->
<section class="bcom-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="hero-eyebrow"><i class="fa fa-graduation-cap me-1"></i> Programme of Study</span>
                <h1 class="hero-title">Bachelor of Commerce — B.Com (Honours)</h1>
                <p class="hero-sub">
                    A flexible NEP-2020 programme affiliated to Guru Gobind Singh Indraprastha University —
                    3-Year Degree, 4-Year Honours, or 4-Year Honours with Research — building the
                    foundation for careers in Financial Analysis, Accountancy, Banking and Financial
                    Planning.
                </p>
                <div class="hero-meta">
                    <span class="hero-pill">3-Year Degree</span>
                    <span class="hero-pill">4-Year Honours</span>
                    <span class="hero-pill">4-Year Honours with Research</span>
                    <span class="hero-pill">GGSIPU Affiliated</span>
                    <span class="hero-pill">Intake 120 (60 + 60)</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-card">
                    <h4><i class="fa fa-info-circle me-1"></i> Programme Snapshot</h4>
                    <div class="kv"><span>Duration</span><b>3 / 4 Years</b></div>
                    <div class="kv"><span>Affiliation</span><b>GGSIPU</b></div>
                    <div class="kv"><span>Shifts</span><b>First &amp; Second Shift</b></div>
                    <div class="kv"><span>Intake</span><b>60 + 60</b></div>
                    <div class="kv"><span>Entrance</span><b>CET / CUET UG</b></div>
                    <div class="kv"><span>Reservation</span><b>85% Delhi / 15% Outside</b></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ PROGRAMME SWITCHER ============ -->
<div class="prog-switch">
    <div class="container">
        <div class="chips">
            <a href="https://iitmjanakpuri.com/course/mba.php">MBA</a>
            <a href="https://iitmjanakpuri.com/course/mca.php">MCA</a>
            <a href="https://iitmjanakpuri.com/course/bba.php">BBA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bca.php">BCA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bcom.php" class="is-current">B.Com (H)</a>
            <a href="https://iitmjanakpuri.com/course/bjmc.php">BA (JMC) / BJMC</a>
        </div>
    </div>
</div>

<!-- ============ ABOUT ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">About the Programme</h2>
        <p>
            The B.Com 3 Years Degree / B.Com 4 Years Honours / B.Com 4 Years Honours with Research
            Graduate Attributes programme is affiliated to Guru Gobind Singh Indraprastha University. It
            is divided into six/eight semesters. The programme aims to provide to the students the
            knowledge, understanding and skills that build the foundation for all disciplines of
            Commerce.
        </p>
    </div>
</section>

<!-- ============ KEY FACTS ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme at a Glance</h2>
        <div class="row g-3">
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-clock"></i></div><h3>Duration</h3><p>4 Years with Multiple Entry / Exit as per NEP-2020.</p></div></div>
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-users"></i></div><h3>Student Intake</h3><p>60 seats per shift across two shifts (total 120). 10% Management Quota; 85% Delhi / 15% Outside Delhi on remaining seats.</p></div></div>
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-check-circle"></i></div><h3>Eligibility</h3><p>10+2 with minimum 50% aggregate and a pass in five subjects (one language and four electives).</p></div></div>
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-university"></i></div><h3>Affiliation</h3><p>Affiliated to Guru Gobind Singh Indraprastha University (GGSIPU), Delhi.</p></div></div>
        </div>
    </div>
</section>

<!-- ============ NEP-2020 EXIT OPTIONS ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">NEP-2020 Multiple Entry &amp; Exit</h2>
        <p class="section-sub">
            Students may exit after any year of study and re-enter within the permitted window to
            complete the programme.
        </p>
        <div class="exit-grid">
            <div class="exit-step">
                <span class="year">After Year 1</span>
                <h4>UG Certificate in Commerce</h4>
                <p>Awarded on earning 45 credits including a mandatory 4-credit work-based vocational course / internship / apprenticeship (minimum 40 hours).</p>
            </div>
            <div class="exit-step">
                <span class="year">After Year 2</span>
                <h4>UG Diploma in Commerce</h4>
                <p>Awarded on earning 83 credits with an additional 4 credits in skill-based vocational courses / apprenticeship / industrial training (minimum 8 weeks).</p>
            </div>
            <div class="exit-step">
                <span class="year">After Year 3</span>
                <h4>B.Com Degree</h4>
                <p>3-Year Bachelor of Commerce Degree on successful completion of six semesters.</p>
            </div>
            <div class="exit-step">
                <span class="year">After Year 4</span>
                <h4>B.Com (Honours) / Honours with Research</h4>
                <p>4-Year Honours degree, with the option of an Honours-with-Research track for students undertaking research in the final year.</p>
            </div>
        </div>

        <div class="row g-4" style="margin-top:30px;">
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-undo me-2" style="color:#800000;"></i>Re-entry after First-Year Exit</h3>
                    <p>
                        A student who takes an exit after one year with an award of a certificate may be
                        allowed to re-enter into the Third Semester for completion of the B.Com (Honours)
                        Programme within a maximum of 3 years, subject to the condition that the total
                        term for completing the degree course should not exceed 7 years.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-undo me-2" style="color:#800000;"></i>Re-entry after Second-Year Exit</h3>
                    <p>
                        A student who takes an exit after two years with an award of a UG Diploma may be
                        allowed to re-enter into the Fifth Semester for completion of the B.Com (Honours)
                        Degree Programme within a period of 3 years, subject to the condition that the
                        total term for completing the course should not exceed 7 years.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ POs ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme Outcomes (POs)</h2>
        <p class="section-sub">
            On completion of the programme of Bachelors in Commerce (Honours), graduates will be able to:
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead><tr><th style="width:80px;">Code</th><th>Programme Outcome</th></tr></thead>
                <tbody>
                    <tr><td class="code">PO 1</td><td>Develop comprehensive understanding of overall business and financial environment in India.</td></tr>
                    <tr><td class="code">PO 2</td><td>Exhibit in-depth knowledge of financial operations and decision making in an organisation.</td></tr>
                    <tr><td class="code">PO 3</td><td>Enhance problem solving abilities for decision making in financial services and operations.</td></tr>
                    <tr><td class="code">PO 4</td><td>Augment critical thinking skills and analytical abilities to analyze business data using various techniques and technological tools.</td></tr>
                    <tr><td class="code">PO 5</td><td>Communicate effectively, articulate accurately and present professionally.</td></tr>
                    <tr><td class="code">PO 6</td><td>Create an inclusive culture with congenial interpersonal relationships.</td></tr>
                    <tr><td class="code">PO 7</td><td>Lead productive and proactive teams.</td></tr>
                    <tr><td class="code">PO 8</td><td>Demonstrate awareness of ethical issues and sensitivity towards social and environmental challenges.</td></tr>
                    <tr><td class="code">PO 9</td><td>Execute a Research Project using appropriate Research Design and suitable Data Analysis Techniques.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ PSOs ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme Specific Outcomes (PSOs)</h2>
        <p class="section-sub">
            On completion of the programme of Bachelors in Commerce (Honours), graduates will be able to:
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead><tr><th style="width:80px;">Code</th><th>Programme Specific Outcome</th></tr></thead>
                <tbody>
                    <tr><td class="code">PSO 1</td><td>Demonstrate an understanding of technological interventions in Finance.</td></tr>
                    <tr><td class="code">PSO 2</td><td>Augment skills for investments and trading in capital markets.</td></tr>
                    <tr><td class="code">PSO 3</td><td>Develop understanding on banking and financial services in India.</td></tr>
                    <tr><td class="code">PSO 4</td><td>Apply quantitative techniques and tools in Commerce.</td></tr>
                    <tr><td class="code">PSO 5</td><td>Imbibe human values and sense of responsibility towards self, society and environment.</td></tr>
                    <tr><td class="code">PSO 6</td><td>Undergo holistic personality development with skills for effective functioning.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ DISTRIBUTION OF COURSE ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Distribution of Course</h2>
        <p>
            The scheme proposes the distribution of Core (C), Skill Enhancement (SE), Ability Enhancement
            (AE), Generic Electives (GE), Discipline Specific Electives (DSE), NUES, Projects, and MOOC
            Courses into:
        </p>
        <div class="info-panel">
            <ul style="margin:0; padding-left:22px; column-count:2; column-gap:32px;">
                <li>Major Disciplinary Stream (Core courses) — (CDMA)</li>
                <li>Minor Disciplinary Stream (Core Courses) — (CDMI)</li>
                <li>Multidisciplinary Courses — (MDIC)</li>
                <li>Ability Enhancement Courses (AEC)</li>
                <li>Skill Enhancement Courses (SEC)</li>
                <li>Value Added Courses (VAC) (common for all UG)</li>
                <li>Summer Internship</li>
                <li>Research Project / Dissertation</li>
                <li>MOOC Courses</li>
                <li>NUES</li>
            </ul>
        </div>
    </div>
</section>

<!-- ============ INTAKE + ELIGIBILITY DETAILED ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-balance-scale me-2" style="color:#800000;"></i>Intake &amp; Reservation</h3>
                    <p>
                        The programme is run in two shifts, each having an intake of 60 students (total
                        120 students). The existing reservation policy stipulates 10% seats (6 in number)
                        as "Management Quota Seats." Out of the remaining 90% seats (54 in number), 85%
                        seats (46 in number) are reserved for Delhi candidates and 15% seats (8 in number)
                        for outside Delhi candidates. Further reservation for specific categories is as
                        per the guidelines of the Government of NCT of Delhi.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-check-double me-2" style="color:#800000;"></i>Eligibility Criteria</h3>
                    <p>
                        50% in aggregate in 10+2 examination / Senior School Certificate Examination of
                        C.B.S.E. as minimum marks for admission to B.Com with a pass in five subjects
                        (one language and four elective subjects) or an examination recognized as
                        equivalent to that.
                    </p>
                    <ul>
                        <li>Pre-University Examination (Two years after ten years of schooling) of an Indian school / college, or Intermediate Examination of an Indian University / Board, or an examination recognized as equivalent (pass in five written subjects).</li>
                        <li>Indian School Certificate Examination (12 years) conducted by the Council for the Indian School Certificate Examination, New Delhi (pass in five written subjects).</li>
                        <li>Examination of a foreign University / Board which is recognized as equivalent to 10+2 CBSE examination or Indian University.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-4" style="margin-top:24px;">
            <div class="col-12">
                <div class="info-panel">
                    <h3><i class="fa fa-file-alt me-2" style="color:#800000;"></i>Domain Specific Subjects / Optional Language / General Test under CUET UG 2024</h3>
                    <ul>
                        <li>Section IA: English (Code 101)</li>
                        <li>Section III: General Test (Code 501) for General Awareness / Logical Reasoning / Data Interpretation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SKILL DEVELOPMENT ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Skill Development</h2>
        <p>
            B.Com (Hons.) programme at IITM is providing a supportive and intellectually stimulating
            learning environment to the students that foster their capacity building and evaluative
            thinking. The programme equips students to drive and take on tomorrow's challenges by
            fostering conceptual and practical understanding that will enable them to manage enterprises
            and organizations. Students are groomed to pursue careers in the fields of Financial Analyst,
            Accountancy, Banking and Financial Planning.
        </p>
        <p>
            Value Added Courses (VAC) / Skill Development Courses for B.Com (Hons.) at IITM is designed
            to provide a primary foundation into the field of business and commerce to develop graduates
            from their primary discipline into organisational management and leadership positions as
            well as entrepreneurial development and innovation using the following skills:
        </p>

        <h3 style="margin:28px 0 16px; font-size:20px; font-weight:700; color:#1a1a1a;">Core Skills Development Areas</h3>

        <div class="row g-3">
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head ict"><i class="fa fa-laptop-code me-2"></i>ICT Integration</div>
                    <ul>
                        <li>Advanced Excel</li>
                        <li>Power BI</li>
                        <li>Data Analytics</li>
                        <li>Tally ERP9</li>
                        <li>Digital Marketing</li>
                        <li>R Programming</li>
                        <li>Technical Writing</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head mgmt"><i class="fa fa-briefcase me-2"></i>Commerce &amp; Management Professionals' Skills</div>
                    <ul>
                        <li>Leadership</li>
                        <li>Decision Making &amp; Problem Solving</li>
                        <li>Numerical Competence</li>
                        <li>Financial Analysis</li>
                        <li>Strategic Thinking</li>
                        <li>Project Management</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head soft"><i class="fa fa-comments me-2"></i>Soft Skills</div>
                    <ul>
                        <li>Adaptability</li>
                        <li>Self Confidence</li>
                        <li>Time Management</li>
                        <li>Communication</li>
                        <li>Emotional Intelligence</li>
                        <li>Networking</li>
                        <li>Teamwork and Collaboration</li>
                        <li>Effective Presentation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head think"><i class="fa fa-brain me-2"></i>Thinking Skills</div>
                    <ul>
                        <li>Creativity</li>
                        <li>Logical Reasoning</li>
                        <li>Critical Thinking</li>
                        <li>Problem Solving</li>
                        <li>Decision Making</li>
                        <li>Strategic Thinking</li>
                        <li>Ethical Thinking</li>
                        <li>Analytical Reasoning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SYLLABUS DOWNLOAD ============ -->
<section class="section section-alt" id="syllabus">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Curriculum &amp; Syllabus</h2>
        <p class="section-sub">Download the official B.Com (Honours) syllabus prescribed by Guru Gobind Singh Indraprastha University.</p>
        <div class="dl-grid">
            <a class="dl-card" href="syllabus/bcomsyllabus.pdf" target="_blank" rel="noopener">
                <span class="dl-ico"><i class="fa fa-file-pdf"></i></span>
                <div>
                    <h4>B.Com (H) Syllabus (GGSIPU)</h4>
                    <p>Detailed course structure and semester-wise syllabus for the B.Com (Honours) programme.</p>
                    <span class="dl-tag">Official GGSIPU Document</span>
                </div>
            </a>
        </div>
    </div>
</section>

<div style="height:4vh"></div>

<?php
    include('faqs/bcom.php');
    include('_faq-section.php');
?>

<?php include("../naacfooter.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
