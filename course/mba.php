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
    <title>Best MBA College in Delhi | Top MBA College in Delhi NCR</title>
    <meta name="description" content="Choose IITM Janakpuri, the best MBA College in Delhi and top MBA College in Delhi NCR, for a two-year AICTE-approved MBA program emphasizing industry projects. ">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="https://iitmjanakpuri.com/course/mba.php">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">
    <meta name="theme-color" content="#800000" />

    <!-- Bootstrap 5 + Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- NOTE: Intentionally NOT loading course/style.css or assets_new/styles_new.css -
         legacy rules in those files clash with Bootstrap 5. This page is self-contained. -->

    <style>
    /* ============ Page-scoped styles ============ */
    .mba-page{
        font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        color: #2b2b2b;
        background: #fafafa;
    }
    .mba-page h1, .mba-page h2, .mba-page h3, .mba-page h4{
        font-family: 'Poppins', system-ui, sans-serif;
        color: #1a1a1a;
        letter-spacing: -0.01em;
    }
    .mba-page a{ color: #800000; }
    .mba-page p{ font-size: 15.5px; line-height: 1.7; color: #303030; }
    .mba-page .navigation{ display: none !important; }

    /* ===== Hero ===== */
    .mba-hero{
        position: relative;
        background: linear-gradient(135deg, #800000 0%, #5e0000 55%, #3d0000 100%);
        color: #fff;
        padding: 56px 0 60px;
        overflow: hidden;
    }
    .mba-hero::before{
        content:"";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 85% 15%, rgba(255,255,255,.10), transparent 55%);
        pointer-events: none;
    }
    .mba-hero .container{ position: relative; }
    .hero-eyebrow{
        display: inline-block;
        background: rgba(255,255,255,.14);
        border: 1px solid rgba(255,255,255,.28);
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 12.5px;
        letter-spacing: .6px;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 14px;
    }
    .hero-title{
        font-size: clamp(28px, 4.2vw, 44px);
        font-weight: 800;
        color: #fff !important;
        margin: 0 0 12px;
        line-height: 1.14;
    }
    .mba-page .hero-sub{
        font-size: clamp(15px, 1.8vw, 17.5px);
        opacity: .92;
        max-width: 780px;
        margin: 0 0 18px;
        line-height: 1.55;
        color: #fff;
    }
    .hero-meta{ display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 14px 0 22px; }
    .hero-pill{
        background: rgba(255,255,255,.13);
        border: 1px solid rgba(255,255,255,.25);
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12.5px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }
    .hero-card{
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.18);
        border-radius: 14px;
        padding: 22px;
        backdrop-filter: blur(4px);
    }
    .hero-card h4{ color: #fff !important; font-weight: 700; font-size: 16px; margin-bottom: 12px; }
    .hero-card .kv{ display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed rgba(255,255,255,.18); font-size: 13.5px; }
    .hero-card .kv:last-child{ border-bottom: 0; }
    .hero-card .kv b{ font-family: 'Poppins', sans-serif; font-weight: 700; }

    /* ===== Programme switcher ===== */
    .prog-switch{
        background: #fff;
        border-bottom: 1px solid #ececec;
        padding: 14px 0;
    }
    .prog-switch .chips{ display: flex; flex-wrap: wrap; gap: 8px; }
    .prog-switch a{
        text-decoration: none;
        background: #fff;
        border: 1px solid #e6e6e6;
        color: #2b2b2b;
        padding: 7px 14px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        transition: all .15s ease;
    }
    .prog-switch a:hover{ border-color: #800000; color: #800000; }
    .prog-switch a.is-current{ background: #800000; color: #fff !important; border-color: #800000; }

    /* ===== Section primitives ===== */
    .section{ padding: 56px 0; }
    .section-tight{ padding: 40px 0; }
    .section-alt{ background: #fff; }
    .section-heading{
        font-size: clamp(22px, 2.6vw, 30px);
        font-weight: 800;
        margin-bottom: 8px;
    }
    .section-sub{
        font-size: 14.5px;
        color: #5b5b5b;
        margin-bottom: 28px;
        max-width: 820px;
    }
    .accent-bar{
        width: 56px; height: 4px; border-radius: 4px;
        background: #800000; margin: 0 0 18px;
    }

    /* ===== Fact cards ===== */
    .fact-card{
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 14px;
        padding: 22px;
        height: 100%;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }
    .fact-card:hover{ transform: translateY(-3px); box-shadow: 0 14px 30px rgba(0,0,0,.07); border-color: #f1d6d6; }
    .fact-icon{
        width: 44px; height: 44px;
        display: inline-flex; align-items: center; justify-content: center;
        border-radius: 12px;
        background: rgba(128,0,0,.08);
        color: #800000;
        font-size: 19px;
        margin-bottom: 12px;
    }
    .fact-card h3{ font-size: 16px; font-weight: 700; margin-bottom: 6px; }
    .fact-card p{ font-size: 14px; color: #4a4a4a; margin: 0; }

    /* ===== Outcome tables (PEO / PSO / PO) ===== */
    .po-table{
        width: 100%;
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 14px;
        overflow: hidden;
        border-collapse: separate;
        border-spacing: 0;
    }
    .po-table thead th{
        background: #800000;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 13.5px;
        padding: 12px 14px;
        text-align: left;
        border: 0;
    }
    .po-table td{
        padding: 12px 14px;
        font-size: 14px;
        line-height: 1.6;
        color: #303030;
        vertical-align: top;
        border-top: 1px solid #f0e8e8;
    }
    .po-table td.code{
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        color: #800000;
        white-space: nowrap;
        width: 80px;
    }
    .po-table tbody tr:nth-child(even) td{ background: #fdfaf7; }

    /* ===== Vision / Mission panels ===== */
    .info-panel{
        background: linear-gradient(135deg, #fff 0%, #fff7f7 100%);
        border: 1px solid #f1d6d6;
        border-radius: 14px;
        padding: 24px;
    }
    .info-panel h3{ font-size: 18px; font-weight: 700; margin: 0 0 10px; color: #1a1a1a; }
    .info-panel p{ font-size: 14.5px; line-height: 1.7; color: #2e2e2e; margin: 0 0 10px; }
    .info-panel p:last-child{ margin-bottom: 0; }
    .info-panel ul{ margin: 8px 0 0; padding-left: 22px; }
    .info-panel ul li{ font-size: 14.5px; line-height: 1.7; color: #2e2e2e; margin-bottom: 6px; }

    /* ===== Skill cards ===== */
    .skill-card{
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
    }
    .skill-card .head{
        background: #800000;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 14.5px;
        padding: 12px 18px;
        letter-spacing: .3px;
    }
    .skill-card .head.ict{ background: linear-gradient(135deg, #800000 0%, #5e0000 100%); }
    .skill-card .head.mgmt{ background: linear-gradient(135deg, #1f6f43 0%, #144d2e 100%); }
    .skill-card .head.soft{ background: linear-gradient(135deg, #b87a00 0%, #8a5a00 100%); }
    .skill-card .head.think{ background: linear-gradient(135deg, #1d5b8c 0%, #0f3f66 100%); }
    .skill-card ul{
        list-style: none;
        padding: 16px 18px;
        margin: 0;
    }
    .skill-card li{
        position: relative;
        padding: 5px 0 5px 22px;
        font-size: 14px;
        color: #303030;
        line-height: 1.55;
    }
    .skill-card li::before{
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: #800000;
        position: absolute;
        left: 0; top: 7px;
        font-size: 11px;
    }

    /* ===== Syllabus download grid ===== */
    .dl-grid{ display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px; }
    .dl-card{
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 12px;
        padding: 18px 20px;
        display: flex;
        gap: 14px;
        align-items: flex-start;
        text-decoration: none !important;
        color: inherit;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }
    .dl-card:hover{ transform: translateY(-2px); box-shadow: 0 12px 26px rgba(0,0,0,.07); border-color: #f1d6d6; color: inherit; }
    .dl-card .dl-ico{
        width: 42px; height: 42px;
        display: inline-flex; align-items: center; justify-content: center;
        border-radius: 10px;
        background: rgba(128,0,0,.08);
        color: #800000;
        font-size: 18px;
        flex-shrink: 0;
    }
    .dl-card h4{ font-size: 15px; font-weight: 700; margin: 0 0 2px; color: #1a1a1a; }
    .dl-card p{ font-size: 13px; color: #5b5b5b; margin: 0; line-height: 1.5; }
    .dl-card .dl-tag{
        display: inline-block;
        background: rgba(128,0,0,.08);
        color: #800000;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: .4px;
        padding: 3px 8px;
        border-radius: 999px;
        margin-top: 6px;
    }

    @media (max-width: 768px){
        .mba-hero{ padding: 40px 0 44px; }
        .section{ padding: 40px 0; }
    }
    </style>
</head>
<body class="mba-page">

<?php include('../naacheader.php'); ?>
<?php include('../n.php'); ?>

<!-- ============ HERO ============ -->
<section class="mba-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="hero-eyebrow"><i class="fa fa-graduation-cap me-1"></i> Programme of Study</span>
                <h1 class="hero-title">Master of Business Administration (General)</h1>
                <p class="hero-sub">
                    A two-year MBA programme affiliated to Guru Gobind Singh Indraprastha University and
                    approved by AICTE — built on Outcome-Based Education with experiential learning, MOOCs,
                    AI/ML-enabled assignments and summer industrial training.
                </p>
                <div class="hero-meta">
                    <span class="hero-pill">2 Years · 4 Semesters</span>
                    <span class="hero-pill">GGSIPU Affiliated</span>
                    <span class="hero-pill">AICTE Approved</span>
                    <span class="hero-pill">Intake 60</span>
                    <span class="hero-pill">CAT/CMAT/GGSIPU CET/CUET PG</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-card">
                    <h4><i class="fa fa-info-circle me-1"></i> Programme Snapshot</h4>
                    <div class="kv"><span>Duration</span><b>2 Years</b></div>
                    <div class="kv"><span>Affiliation</span><b>GGSIPU</b></div>
                    <div class="kv"><span>Approval</span><b>AICTE</b></div>
                    <div class="kv"><span>Intake</span><b>60</b></div>
                    <div class="kv"><span>Entrance</span><b>CAT / CMAT / CET / CUET PG</b></div>
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
            <a href="https://iitmjanakpuri.com/course/mba.php" class="is-current">MBA</a>
            <a href="https://iitmjanakpuri.com/course/mca.php">MCA</a>
            <a href="https://iitmjanakpuri.com/course/bba.php">BBA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bca.php">BCA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bcom.php">B.Com (H)</a>
            <a href="https://iitmjanakpuri.com/course/bjmc.php">BA (JMC) / BJMC</a>
        </div>
    </div>
</div>

<!-- ============ ABOUT THE PROGRAMME ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">About the Programme</h2>
        <p>
            The two-year MBA (General) programme is affiliated with Guru Gobind Singh Indraprastha
            University and approved by AICTE. The program runs with Outcome Based Education (OBE)
            philosophy. The program, meticulously crafted, aims to impart participants with relevant
            knowledge, essential attributes, and necessary skills crucial for thriving in the corporate
            world. The program goes beyond the realm of domain-specific endeavours, and cultivates in
            students the leadership (instructional, operational, functional) and entrepreneurial skills,
            thereby empowering them to make meaningful contributions to society. Some noteworthy features
            of the student-centered pedagogy at IITM includes MOOC, self-directed learning, AI/ML enabled
            assignments, experiential learning and also includes Summer Industrial Training and
            supplementary value-added courses. There is heightened emphasis on public speaking through
            presentations, and collaborative group activities tailored to enrich the course curriculum.
        </p>
        <p>
            The norms and benchmarks governing the administration of the course adhere to the directives
            established by the All India Council of Technical Education (AICTE), under the aegis of the
            Ministry of Human Resource Development, Government of India. The MBA program, spanning over
            four semesters, each lasting 15 weeks, is structured to provide a comprehensive foundation in
            key domains of Business Administration during the initial two semesters. Subsequent to this
            foundational phase, students engage in a summer training program after the second semester,
            with the opportunity to explore elective subjects during the third and fourth semesters,
            thereby allowing them to tailor their academic journey to align with their individual
            interests and career aspirations.
        </p>
    </div>
</section>

<!-- ============ KEY FACTS ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme at a Glance</h2>
        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-clock"></i></div>
                    <h3>Duration</h3>
                    <p>2 Years · 4 Semesters of 15 weeks each.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-users"></i></div>
                    <h3>Student Intake</h3>
                    <p>AICTE-approved intake of 60 students. 10% Management Quota, 85% Delhi / 15% Outside Delhi on the remaining seats.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-check-circle"></i></div>
                    <h3>Eligibility</h3>
                    <p>Bachelor's degree (any discipline) with at least 50% aggregate, or B.E./B.Tech. with 50%, or CA / ICWA / CS final examination.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-university"></i></div>
                    <h3>Affiliation</h3>
                    <p>Affiliated to Guru Gobind Singh Indraprastha University (GGSIPU), Delhi · Approved by AICTE.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ VISION & MISSION ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-eye me-2" style="color:#800000;"></i>Vision of the Department</h3>
                    <p>
                        Department of Management Studies aims to promote value-based quality education to
                        the students, impart skills &amp; training in the management and allied areas.
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-bullseye me-2" style="color:#800000;"></i>Mission of the Department</h3>
                    <p>Department of Management Studies (DMS) strives</p>
                    <ul>
                        <li>To prepare students as professionals through interactive, research-driven and experiential learning which is well integrated in the pedagogy.</li>
                        <li>To provide a multidisciplinary environment for life-long learning that shall be focused on skilling, reskilling and upskilling, thereby equipping students with abilities necessary to succeed in a diverse, global business environment.</li>
                        <li>To cultivate a diverse and inclusive ecosystem through innovative entrepreneurship, constructive public engagement and proactive community involvement engendering socially responsible decision makers.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ PEOs ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme Educational Objectives (PEOs)</h2>
        <p class="section-sub">
            The PEOs articulate what MBA graduates of IITM are expected to attain within a few years of
            graduation.
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead>
                    <tr><th style="width:80px;">Code</th><th>Programme Educational Objective</th></tr>
                </thead>
                <tbody>
                    <tr><td class="code">PEO 1</td><td>To equip the students with domain knowledge (disciplinary / interdisciplinary), professional skills &amp; aptitude necessary to exhibit effective leadership in global environment.</td></tr>
                    <tr><td class="code">PEO 2</td><td>To inculcate sensitivity and responsibility towards societal, ethical and ecological issues &amp; to shape them into responsible citizens fostering lifelong learning.</td></tr>
                    <tr><td class="code">PEO 3</td><td>To impart practical skills and provide students with research opportunities in order to cultivate creative &amp; reflective thinking skills for adapting in dynamic corporate scenarios.</td></tr>
                    <tr><td class="code">PEO 4</td><td>To adopt entrepreneurial and interpersonal skill instilling collaborative and experiential learning through innovative pedagogy.</td></tr>
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
            Specialised outcomes the MBA graduate will demonstrate in the field of Management.
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead>
                    <tr><th style="width:80px;">Code</th><th>Programme Specific Outcome</th></tr>
                </thead>
                <tbody>
                    <tr><td class="code">PSO 1</td><td>MBA graduate shall have the ability to demonstrate discipline / interdisciplinary knowledge, coherent understanding in the management and allied areas for impact-oriented decision making.</td></tr>
                    <tr><td class="code">PSO 2</td><td>MBA graduate shall exhibit professional skills instilling critical and analytical thinking to enthuse problem solving abilities in different domains of management.</td></tr>
                    <tr><td class="code">PSO 3</td><td>MBA graduate shall be able to demonstrate proficiency in varied research areas through designing and implementing innovative business strategies in real-world corporate scenarios.</td></tr>
                    <tr><td class="code">PSO 4</td><td>MBA graduate shall become a responsible citizen inculcating interpersonal skills, social skills, lifelong learning (learn, unlearn &amp; relearn), entrepreneurial acumen, leadership abilities and adaptability to dynamic business landscapes.</td></tr>
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
        <p class="section-sub">
            On completion of the MBA programme the graduate shall be able to demonstrate the following
            capabilities:
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead>
                    <tr><th style="width:80px;">Code</th><th>Programme Outcome</th></tr>
                </thead>
                <tbody>
                    <tr><td class="code">PO 1</td><td>Demonstrate an understanding of management concepts, principles and theories, and apply them in the context of organizational work practices.</td></tr>
                    <tr><td class="code">PO 2</td><td>Apply analytical and critical thinking skills to analyze the dynamic business environment and identify entrepreneurial and business opportunities and risks.</td></tr>
                    <tr><td class="code">PO 3</td><td>Prepare business strategies, develop concomitant functional and operational strategies and implement them in an integrated manner to efficiently and effectively achieve the functional goals and the business objectives.</td></tr>
                    <tr><td class="code">PO 4</td><td>Demonstrate an understanding of decision-making processes at various levels of organization with respect to resources mobilization and their efficient deployment and use to achieve the set goals.</td></tr>
                    <tr><td class="code">PO 5</td><td>Demonstrate the ability to analyze the management problems, to identify and collect relevant data and to apply a creative problem-solving approach.</td></tr>
                    <tr><td class="code">PO 6</td><td>Identify and recommend the IT based interventions to achieve organizational goals.</td></tr>
                    <tr><td class="code">PO 7</td><td>Benchmark organizational and managerial practices against the principles of good governance, ethical conduct, corporate social responsibility and imperatives of long-term societal welfare.</td></tr>
                    <tr><td class="code">PO 8</td><td>Demonstrate effective communication and interpersonal skills as well as the ability to work with and lead teams.</td></tr>
                    <tr><td class="code">PO 9</td><td>Develop a lifelong learning approach manifested in their attitude to learn, unlearn and relearn and in their pursuit of excellence in professional, personal and social life.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ INTAKE & ELIGIBILITY (DETAILED) ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-balance-scale me-2" style="color:#800000;"></i>Student Intake &amp; Reservation</h3>
                    <p>
                        AICTE approved intake for the programme is 60 students. The existing reservation
                        policy stipulates 10% seats (6 in number) as "Management Quota Seats". Out of the
                        remaining 90% seats (54 in number), 85% seats (46 in number) are reserved for Delhi
                        candidates and 15% seats (8 in number) for outside Delhi candidates. Further
                        reservation for specific categories are as per the guidelines of Government of NCT
                        of Delhi.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-check-double me-2" style="color:#800000;"></i>Eligibility Criteria</h3>
                    <p>
                        Bachelor's Degree of a Recognised University in any discipline with at least 50%
                        marks in aggregate.
                    </p>
                    <p>
                        <strong>or</strong> Bachelor's Degree in Engineering or Technology or any
                        qualification recognised as equivalent thereto with at least 50% marks in aggregate.
                    </p>
                    <p>
                        <strong>or</strong> Passed the Final Examination of Institute of Chartered Accountants
                        of India or England, the Institute of Cost and Work Accountants of India or England,
                        or the Institute of Company Secretaries of India.
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
            The pedagogy embraced at IITM prioritizes the cultivation of academic excellence and
            professional skills, facilitating the application of conceptual learning to real-world business
            scenarios in various industries. This approach emphasizes the attainment of high standards
            through interactive learning processes, achieved by employing innovative teaching methodologies
            that inspire students to both generate and utilize knowledge through critical thinking and
            practical application. Consequently, students are prepared to take on leadership roles in an
            ever-evolving global landscape. The pedagogical framework at IITM is meticulously designed to
            nurture students' intellectual capacity for analysis, assessment, judgment, decision-making,
            and action-taking, which are integral facets of their chosen career paths.
        </p>
        <p>
            The institute employs a diverse range of formal teaching methodologies to facilitate
            comprehensive learning experiences for our students. These methodologies encompass lectures,
            assignments, case studies, role-plays, group discussions, business games, experiential
            learning activities, group work, seminars, simulation workshops, skill enhancement workshops,
            personality development workshops, entrepreneurship development programs, educational tours,
            recreational tours, and field visits. Additionally, students actively engage in team projects,
            presentations, and field-based projects as integral components of various courses.
        </p>
    </div>
</section>

<!-- ============ SKILL DEVELOPMENT ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Skill Development</h2>
        <p>
            The institute places a high priority on aiding students in attaining academic excellence while
            cultivating the skills essential for proficient leadership and teamwork. Consequently, students
            are thoroughly prepared to meet the demands of the fiercely competitive corporate environment.
        </p>
        <p>
            The skill enhancement programs facilitate the acquisition of skills by students to identify and
            address complex management issues. These skills imparted to the students aim to aid them in
            navigating through unforeseen and challenging business, economic, and social changes in the
            future.
        </p>
        <p>
            The objective of skills development is to instill a philosophy of <strong>'Learning by Doing'</strong>,
            emphasizing analysis and problem-solving over rote learning, and fostering critical thinking
            rather than mere information gathering. Our skill development courses and workshops aim to
            cultivate heightened awareness regarding both domestic and international business environments.
            Thus, at IITM, we prioritize the refinement of students' personalities, integrating them with
            strong ethical values and a positive attitude.
        </p>

        <h3 style="margin: 28px 0 16px; font-size: 20px; font-weight: 700; color: #1a1a1a;">Core Skills Development Areas</h3>

        <div class="row g-3">
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head ict"><i class="fa fa-laptop-code me-2"></i>ICT Integration</div>
                    <ul>
                        <li>Advanced Excel</li>
                        <li>Python Programming</li>
                        <li>Simulation</li>
                        <li>HR Analytics</li>
                        <li>Digital Marketing</li>
                        <li>Marketing Analytics</li>
                        <li>E-Commerce</li>
                        <li>Lanquill</li>
                        <li>Statistics &amp; Data Science</li>
                        <li>R Programming</li>
                        <li>Technical Writing</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head mgmt"><i class="fa fa-briefcase me-2"></i>Management Professionals' Skills</div>
                    <ul>
                        <li>Planning &amp; Organizing</li>
                        <li>Leadership</li>
                        <li>Decision Making &amp; Problem Solving</li>
                        <li>Numerical Competence</li>
                        <li>Financial Analysis</li>
                        <li>Technical-Application Software</li>
                        <li>Strategic Thinking</li>
                        <li>Interpersonal Communication</li>
                        <li>Change Management</li>
                        <li>Project Management</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head soft"><i class="fa fa-comments me-2"></i>Soft Skills</div>
                    <ul>
                        <li>Values and Ethics</li>
                        <li>Written and Verbal Communication</li>
                        <li>Interpersonal Skills</li>
                        <li>Active Listening &amp; Teamwork</li>
                        <li>Self Confidence</li>
                        <li>Positive Attitude</li>
                        <li>Emotional Intelligence</li>
                        <li>Adaptability and Resilience</li>
                        <li>Time Management</li>
                        <li>Conflict Resolution</li>
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
                        <li>Creation of Knowledge</li>
                        <li>Critical Thinking</li>
                        <li>Analytical Reasoning</li>
                        <li>Systems Thinking</li>
                        <li>Strategic Foresight</li>
                        <li>Design Thinking</li>
                        <li>Problem Structuring and Framing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SYLLABUS DOWNLOAD ============ -->
<section class="section" id="syllabus">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Curriculum &amp; Syllabus</h2>
        <p class="section-sub">
            Download the official MBA syllabus prescribed by Guru Gobind Singh Indraprastha University.
        </p>
        <div class="dl-grid">
            <a class="dl-card" href="https://www.iitmjanakpuri.com/academics/images/mbasy.pdf" target="_blank" rel="noopener">
                <span class="dl-ico"><i class="fa fa-file-pdf"></i></span>
                <div>
                    <h4>MBA Syllabus (GGSIPU)</h4>
                    <p>Detailed course structure and semester-wise syllabus for the MBA (General) programme.</p>
                    <span class="dl-tag">Official GGSIPU Document</span>
                </div>
            </a>
        </div>
    </div>
</section>

<div style="height: 4vh"></div>

<?php
    include('faqs/mba.php');
    include('_faq-section.php');
?>

<?php
    include("../naacfooter.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
