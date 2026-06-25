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
    <title>Best BBA College in Delhi NCR | Top BBA Hons College in Delhi </title>
    <meta name="description" content="IITM Janakpuri, the best College for BBA in Delhi NCR and a top BBA Hons College in Delhi, focuses on career-ready learning, leadership & entrepreneurial development. ">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="https://iitmjanakpuri.com/course/bba.php">

    <link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">
    <meta name="theme-color" content="#800000">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    .bba-page{ font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,sans-serif; color:#2b2b2b; background:#fafafa; }
    .bba-page h1, .bba-page h2, .bba-page h3, .bba-page h4{ font-family:'Poppins',system-ui,sans-serif; color:#1a1a1a; letter-spacing:-0.01em; }
    .bba-page a{ color:#800000; }
    .bba-page p{ font-size:15.5px; line-height:1.7; color:#303030; }
    .bba-page .navigation{ display:none !important; }

    .bba-hero{ position:relative; background:linear-gradient(135deg,#800000 0%,#5e0000 55%,#3d0000 100%); color:#fff; padding:56px 0 60px; overflow:hidden; }
    .bba-hero::before{ content:""; position:absolute; inset:0; background:radial-gradient(circle at 85% 15%, rgba(255,255,255,.10), transparent 55%); pointer-events:none; }
    .bba-hero .container{ position:relative; }
    .hero-eyebrow{ display:inline-block; background:rgba(255,255,255,.14); border:1px solid rgba(255,255,255,.28); color:#fff; font-family:'Poppins',sans-serif; font-weight:600; font-size:12.5px; letter-spacing:.6px; text-transform:uppercase; padding:6px 14px; border-radius:999px; margin-bottom:14px; }
    .hero-title{ font-size:clamp(28px,4.2vw,44px); font-weight:800; color:#fff !important; margin:0 0 12px; line-height:1.14; }
    .bba-page .hero-sub{ font-size:clamp(15px,1.8vw,17.5px); opacity:.92; max-width:780px; margin:0 0 18px; line-height:1.55; color:#fff; }
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

    .po-table{ width:100%; background:#fff; border:1px solid #ececec; border-radius:14px; overflow:hidden; border-collapse:separate; border-spacing:0; }
    .po-table thead th{ background:#800000; color:#fff; font-family:'Poppins',sans-serif; font-weight:700; font-size:13.5px; padding:12px 14px; text-align:left; border:0; }
    .po-table td{ padding:12px 14px; font-size:14px; line-height:1.6; color:#303030; vertical-align:top; border-top:1px solid #f0e8e8; }
    .po-table td.code{ font-family:'Poppins',sans-serif; font-weight:700; color:#800000; white-space:nowrap; width:80px; }
    .po-table tbody tr:nth-child(even) td{ background:#fdfaf7; }

    .info-panel{ background:linear-gradient(135deg,#fff 0%,#fff7f7 100%); border:1px solid #f1d6d6; border-radius:14px; padding:24px; }
    .info-panel h3{ font-size:18px; font-weight:700; margin:0 0 10px; color:#1a1a1a; }
    .info-panel p{ font-size:14.5px; line-height:1.7; color:#2e2e2e; margin:0 0 10px; }
    .info-panel p:last-child{ margin-bottom:0; }

    .skill-card{ background:#fff; border:1px solid #ececec; border-radius:14px; overflow:hidden; height:100%; }
    .skill-card .head{ background:#800000; color:#fff; font-family:'Poppins',sans-serif; font-weight:700; font-size:14.5px; padding:12px 18px; letter-spacing:.3px; }
    .skill-card .head.it{ background:linear-gradient(135deg,#800000 0%,#5e0000 100%); }
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

    @media (max-width:768px){ .bba-hero{ padding:40px 0 44px; } .section{ padding:40px 0; } }
    </style>
</head>
<body class="bba-page">

<?php include('../naacheader.php'); ?>
<?php include('../n.php'); ?>

<!-- ============ HERO ============ -->
<section class="bba-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="hero-eyebrow"><i class="fa fa-graduation-cap me-1"></i> Programme of Study</span>
                <h1 class="hero-title">Bachelor of Business Administration (BBA Honours)</h1>
                <p class="hero-sub">
                    A four-year programme affiliated to Guru Gobind Singh Indraprastha University,
                    equipping students with the foundational knowledge and skills to manage complex
                    business processes across Banking, FMCG, Manufacturing, Telecom, Logistics and more.
                </p>
                <div class="hero-meta">
                    <span class="hero-pill">4 Years · 8 Semesters</span>
                    <span class="hero-pill">NEP-2020 Multiple Entry / Exit</span>
                    <span class="hero-pill">GGSIPU Affiliated</span>
                    <span class="hero-pill">Intake 360 (180 + 180)</span>
                    <span class="hero-pill">CET / CUET</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-card">
                    <h4><i class="fa fa-info-circle me-1"></i> Programme Snapshot</h4>
                    <div class="kv"><span>Duration</span><b>4 Years</b></div>
                    <div class="kv"><span>Affiliation</span><b>GGSIPU</b></div>
                    <div class="kv"><span>Shifts</span><b>First &amp; Second Shift</b></div>
                    <div class="kv"><span>Intake</span><b>180 + 180</b></div>
                    <div class="kv"><span>Entrance</span><b>CET / CUET</b></div>
                    <div class="kv"><span>Reservation</span><b>85% Delhi / 15% Outside</b></div>
                    <div class="kv"><span>Fee</span><b><a href="https://iitmjanakpuri.com/direct-file/feesdetails.pdf" target="_blank" style="color:#fff;text-decoration:underline">View Fee Details</a></b></div>
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
            <a href="https://iitmjanakpuri.com/course/bba.php" class="is-current">BBA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bca.php">BCA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bcom.php">B.Com (H)</a>
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
            The Guru Gobind Singh Indraprastha University has a four-year Bachelor of Business
            Administration (BBA) program. This program focuses on equipping students with basic knowledge
            and skills that are critical in managing the complex business processes. This program has a
            very specific aim of creating such professionals, who are capable of working not only in
            Banking, but also in various other industries including but not limited to Banking, FMCGs,
            Manufacturing, Telecom, and Logistics.
        </p>
        <p>
            This degree includes eight semesters in total. The first four semesters concentrate on core
            courses in business administration. In the fifth semester, the students have industrial
            placement and in the sixth semester, students engage in a research project, where they
            analyse real time data and report statistical analysis. This combination allows students to
            acquire knowledge concepts as well as gain learning exposure through actual business work
            around them. The final year could potentially lead the students to get an Honours degree by
            concentrating on practical implementations. The students may also obtain a research degree
            with Honors while working on research activities in the last semester.
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
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-users"></i></div><h3>Student Intake</h3><p>180 seats in First Shift &amp; 180 seats in Second Shift.</p></div></div>
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-check-circle"></i></div><h3>Eligibility</h3><p>10+2 with minimum 50% aggregate and a pass in English (core / elective / functional) as a subject.</p></div></div>
            <div class="col-md-6 col-lg-3"><div class="fact-card"><div class="fact-icon"><i class="fa fa-university"></i></div><h3>Affiliation</h3><p>Affiliated to Guru Gobind Singh Indraprastha University (GGSIPU), Delhi.</p></div></div>
        </div>
    </div>
</section>

<!-- ============ PSOs ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme Specific Outcomes (PSOs)</h2>
        <div class="table-responsive">
            <table class="po-table">
                <thead><tr><th style="width:80px;">Code</th><th>Programme Specific Outcome</th></tr></thead>
                <tbody>
                    <tr><td class="code">PSO 1</td><td>Apply reflective thinking and research skills using latest technological tools.</td></tr>
                    <tr><td class="code">PSO 2</td><td>Assimilate technical functional knowledge of operations in business organization.</td></tr>
                    <tr><td class="code">PSO 3</td><td>Demonstrate strategic and proactive thinking towards business decision making.</td></tr>
                    <tr><td class="code">PSO 4</td><td>Illustrate negotiation skills and networking abilities.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ POs ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme Outcomes (POs)</h2>
        <div class="table-responsive">
            <table class="po-table">
                <thead><tr><th style="width:80px;">Code</th><th>Programme Outcome</th></tr></thead>
                <tbody>
                    <tr><td class="code">PO 1</td><td>Develop conceptual knowledge and understanding of management theories and practices.</td></tr>
                    <tr><td class="code">PO 2</td><td>Apply critical thinking and analytical skills for effective business decision making.</td></tr>
                    <tr><td class="code">PO 3</td><td>Develop communication and leadership abilities to steer through the dynamic and global business environment.</td></tr>
                    <tr><td class="code">PO 4</td><td>Demonstrate business intelligence and foster research to find innovative solutions for diverse business situations.</td></tr>
                    <tr><td class="code">PO 5</td><td>Imbibe responsible citizenship, promoting sustainability, and embrace diverse cultures with universal values.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ INTAKE & ELIGIBILITY ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-balance-scale me-2" style="color:#800000;"></i>Student Intake &amp; Reservation</h3>
                    <p>
                        The course is being run in two shifts. First Shift having intake of 180 students
                        and Second Shift having intake of 180 students. The existing reservation policy
                        specifies 10% seats as "Management Quota Seats". Out of the remaining 90% seats,
                        85% seats are reserved for Delhi candidates and 15% for outside Delhi candidates.
                        Further reservation for specific categories shall be as per the guidelines of
                        Government of NCT of Delhi.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-check-double me-2" style="color:#800000;"></i>Eligibility Criteria</h3>
                    <p>
                        Passed 12th Class of 10+2 of CBSE or equivalent with a minimum of 50% marks in
                        aggregate and must also have passed English (core or elective or functional) as a
                        subject.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ ACADEMIC EXCELLENCE + PEDAGOGY ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Academic Excellence</h2>
        <p>
            The primary educational objective of the Institute is to stimulate the cognitive processes,
            thereby fostering creativity, innovation, and research endeavors that culminate in the
            generation of knowledge.
        </p>

        <h2 class="section-heading" style="margin-top:36px;">Pedagogy</h2>
        <p>
            Pedagogy focuses on critical thinking, practical application, and leadership development,
            enabling the students to perform well in a dynamic global business environment. Students
            attend skill development workshops, educational tours, and field visits, thus having
            hands-on experience. It develops a necessary competence in the analysis and decision-making
            capabilities and also in action-oriented problem solving, getting the students ready to take
            competitive industry leadership roles.
        </p>
    </div>
</section>

<!-- ============ SKILL DEVELOPMENT ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Skill Development</h2>
        <p>
            The BBA program at IITM focuses specifically to nurture academic as well as professional
            excellence. It helps the students to apply theoretical knowledge in real-world business
            scenarios. The philosophy of <strong>"Learning by Doing"</strong> guides the development of
            core IT, management, professional, soft, and thinking skills, including:
        </p>

        <h3 style="margin:28px 0 16px; font-size:20px; font-weight:700; color:#1a1a1a;">Core Skills Development Areas</h3>

        <div class="row g-3">
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head it"><i class="fa fa-laptop-code me-2"></i>IT Skills</div>
                    <ul>
                        <li>Data Analytics</li>
                        <li>Data Science</li>
                        <li>Technical Writing</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head mgmt"><i class="fa fa-briefcase me-2"></i>Management Skills</div>
                    <ul>
                        <li>Leadership</li>
                        <li>Decision-Making</li>
                        <li>Planning</li>
                        <li>Financial Analysis</li>
                        <li>Technical Applications</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head soft"><i class="fa fa-comments me-2"></i>Soft Skills</div>
                    <ul>
                        <li>Communication</li>
                        <li>Teamwork</li>
                        <li>Active Listening</li>
                        <li>Confidence</li>
                        <li>Ethics</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head think"><i class="fa fa-brain me-2"></i>Thinking Skills</div>
                    <ul>
                        <li>Creativity</li>
                        <li>Innovation</li>
                        <li>Research</li>
                        <li>Knowledge Creation</li>
                    </ul>
                </div>
            </div>
        </div>

        <p style="margin-top:24px;">
            This holistic approach to the enhancement of skills will equip students to adapt to changing
            business environments, innovate in diverse ways, lead effectively, and cultivate a value
            system along with an ethical attitude.
        </p>
    </div>
</section>

<!-- ============ SYLLABUS DOWNLOAD ============ -->
<section class="section" id="syllabus">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Curriculum &amp; Syllabus</h2>
        <p class="section-sub">Download the official BBA syllabus prescribed by Guru Gobind Singh Indraprastha University.</p>
        <div class="dl-grid">
            <a class="dl-card" href="syllabus/bbasyllabus.pdf" target="_blank" rel="noopener">
                <span class="dl-ico"><i class="fa fa-file-pdf"></i></span>
                <div>
                    <h4>BBA Syllabus (GGSIPU)</h4>
                    <p>Detailed course structure and semester-wise syllabus for the BBA (Honours) programme.</p>
                    <span class="dl-tag">Official GGSIPU Document</span>
                </div>
            </a>
        </div>
    </div>
</section>

<div style="height:4vh"></div>

<?php
    include('faqs/bba.php');
    include('_faq-section.php');
?>

<?php include("../naacfooter.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
