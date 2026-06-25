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
    <title>Top BJMC College in Delhi | Best College for BJMC in Delhi</title>
    <meta name="description" content="Ranked as the best College for BJMC in Delhi, IITM Janakpuri, a top BJMC College offers industry-aligned BJMC programs with internships & media projects.">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="https://iitmjanakpuri.com/course/bjmc.php">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">
    <meta name="theme-color" content="#800000" />

    <!-- Bootstrap 5 + Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    /* ============ Page-scoped styles ============ */
    .bjmc-page{
        font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        color: #2b2b2b;
        background: #fafafa;
    }
    .bjmc-page h1, .bjmc-page h2, .bjmc-page h3, .bjmc-page h4{
        font-family: 'Poppins', system-ui, sans-serif;
        color: #1a1a1a;
        letter-spacing: -0.01em;
    }
    .bjmc-page a{ color: #800000; }
    .bjmc-page a.adm-ribbon{ color:#fff; }
    .bjmc-page p{ font-size: 15.5px; line-height: 1.7; color: #303030; }
    .bjmc-page .navigation{ display: none !important; }

    /* ===== Admission ribbon ===== */
    .adm-ribbon{
        display:block; text-decoration:none;
        background: linear-gradient(135deg,#800000 0%,#5e0000 100%);
        color:#fff; padding:14px 20px; text-align:center;
        font-family:'Poppins',system-ui,sans-serif;
        font-weight:700; font-size:15px; letter-spacing:.3px;
        box-shadow:0 4px 14px rgba(128,0,0,.25);
    }
    .adm-ribbon:hover{ color:#fff; }
    .adm-ribbon .badge-pill{
        display:inline-block; margin-left:10px; padding:4px 10px;
        background:#fff; color:#800000; border-radius:999px; font-size:12px;
    }

    /* ===== Hero ===== */
    .bjmc-hero{
        position: relative;
        background: linear-gradient(135deg, #800000 0%, #5e0000 55%, #3d0000 100%);
        color: #fff;
        padding: 56px 0 60px;
        overflow: hidden;
    }
    .bjmc-hero::before{
        content:""; position: absolute; inset: 0;
        background: radial-gradient(circle at 85% 15%, rgba(255,255,255,.10), transparent 55%);
        pointer-events: none;
    }
    .bjmc-hero .container{ position: relative; }
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
    .bjmc-page .hero-sub{
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

    /* ===== Outcome tables ===== */
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
    .po-table td.po-name{
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        color: #1a1a1a;
        white-space: nowrap;
        width: 220px;
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
    .skill-card .head.tech{ background: linear-gradient(135deg, #800000 0%, #5e0000 100%); }
    .skill-card .head.write{ background: linear-gradient(135deg, #1f6f43 0%, #144d2e 100%); }
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

    /* ===== Big CTA banner ===== */
    .big-cta{
        background: linear-gradient(135deg, #800000 0%, #5e0000 100%);
        color: #fff;
        border-radius: 18px;
        padding: 32px;
        text-align: center;
        position: relative; overflow: hidden;
        box-shadow: 0 14px 34px rgba(128,0,0,.30);
    }
    .big-cta h3{ color: #fff !important; font-size: clamp(20px, 2.4vw, 26px); font-weight: 800; margin: 0 0 8px; }
    .big-cta p{ margin: 0 0 16px; opacity: .92; font-size: 15px; color: #fff; }
    .big-cta .hbtn{
        display: inline-flex; align-items: center; gap: 8px;
        padding: 12px 22px; border-radius: 8px;
        font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px;
        text-decoration: none !important; transition: transform .15s ease, box-shadow .2s ease;
        border: 2px solid transparent;
        background: #fff; color: #800000 !important;
    }
    .big-cta .hbtn:hover{ transform: translateY(-2px); box-shadow: 0 10px 22px rgba(0,0,0,.25); }

    @media (max-width: 768px){
        .bjmc-hero{ padding: 40px 0 44px; }
        .section{ padding: 40px 0; }
    }
    </style>


<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Course",
"name": "BA (Journalism & Mass Communication) — Honours",
"description": "Ranked as the best College for BJMC in Delhi, IITM Janakpuri, a top BJMC College offers industry-aligned BJMC programs with internships & media projects.",
"provider": {
"@type": "Organization",
"name": "IITM Janakpuri",
"sameAs": "https://iitmjanakpuri.com/course/bjmc.php"
}
}
</script>





</head>
<body class="bjmc-page">

<?php include('../naacheader.php'); ?>
<?php include('../n.php'); ?>

<!-- Admission 2026 ribbon: routes prospective students to the new admission landing -->
<a href="bajmc-admission-2026.php" class="adm-ribbon">
    <i class="fa fa-bullhorn" aria-hidden="true" style="margin-right:8px;"></i>
    BA (JMC) Admission 2026-27 is Open &mdash; Fees, FAQs, Recruiters &amp; Apply Now
    <span class="badge-pill">View Details &nbsp;&rsaquo;</span>
</a>

<!-- ============ HERO ============ -->
<section class="bjmc-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="hero-eyebrow"><i class="fa fa-graduation-cap me-1"></i> Programme of Study</span>
                <h1 class="hero-title">BA (Journalism &amp; Mass Communication) — Honours in Delhi</h1>
                <p class="hero-sub">
                    A four-year programme affiliated to Guru Gobind Singh Indraprastha University,
                    cultivating thought-leaders in journalism, broadcasting, digital media and advertising
                    through Outcome-Based Education, experiential learning and on-field reporting. Recognized as one of the best Journalism and Mass Communication (BJMC) colleges in Delhi, IITM offers a curriculum designed to prepare students for diverse media careers.

                </p>
                <div class="hero-meta">
                    <span class="hero-pill">4 Years · 8 Semesters</span>
                    <span class="hero-pill">NEP-2020 Multiple Entry / Exit</span>
                    <span class="hero-pill">GGSIPU Affiliated</span>
                    <span class="hero-pill">Intake 180</span>
                    <span class="hero-pill">CET / CUET</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-card">
                    <h4><i class="fa fa-info-circle me-1"></i> Programme Snapshot</h4>
                    <div class="kv"><span>Duration</span><b>4 Years</b></div>
                    <div class="kv"><span>Affiliation</span><b>GGSIPU</b></div>
                    <div class="kv"><span>Shift</span><b>Single Shift</b></div>
                    <div class="kv"><span>Intake</span><b>180</b></div>
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
            <a href="https://iitmjanakpuri.com/course/bba.php">BBA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bca.php">BCA (H)</a>
            <a href="https://iitmjanakpuri.com/course/bcom.php">B.Com (H)</a>
            <a href="https://iitmjanakpuri.com/course/bjmc.php" class="is-current">BA (JMC) / BJMC</a>
        </div>
    </div>
</div>

<!-- ============ ABOUT THE PROGRAMME ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">About the Programme</h2>
        <p>
            The Bachelor of Arts in Journalism and Mass Communication (BA JMC) program, affiliated with
            Guru Gobind Singh Indraprastha University and approved by statutory bodies, operates with an
            Outcome-Based Education (OBE) philosophy. The program is meticulously designed to provide
            students with a robust understanding of the ever-evolving media landscape while equipping them
            with the essential skills to excel in various domains of journalism and mass communication.
       IITM Janakpuri (Information Campus) is widely regarded as a top BJMC college in Delhi, ensuring students receive both academic excellence and practical exposure.
       
       
        </p>
        <p>
            Going beyond traditional learning, the course fosters creativity, critical thinking, and
            ethical practices in media, empowering students to become thought leaders in the industry.
            The program emphasizes experiential and self-directed learning through workshops, on-field
            reporting, media productions, and AI-driven projects. Key highlights include industry-oriented
            activities such as BJMC programs with internships & media projects, hands-on training in studios,
            participation in live news productions, and supplementary value-added courses to enhance
            professional competencies.
        </p>
        <p>
            With a focus on practical exposure, the program integrates elements like public speaking,
            collaborative assignments, and real-world reporting to ensure holistic development. Structured
            across eight semesters, the curriculum covers foundational and advanced topics in journalism,
            broadcasting, advertising, digital media, and more. Students engage in extensive fieldwork and
            media projects, culminating in capstone assignments that align with their individual career
            aspirations and areas of interest.
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
                    <p>4 Years with Multiple Entry / Exit as per NEP-2020. (3-year BAJMC Degree &amp; 4-year BA (JMC) Honours.)</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-users"></i></div>
                    <h3>Student Intake</h3>
                    <p>180 students in a single shift. 10% Management Quota; 85% Delhi / 15% Outside Delhi on remaining seats.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-check-circle"></i></div>
                    <h3>Eligibility</h3>
                    <p>10+2 with minimum 50% aggregate and a pass in English (core) as a subject.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="fact-card">
                    <div class="fact-icon"><i class="fa fa-university"></i></div>
                    <h3>Admission</h3>
                    <p>Merit of CET; vacant seats filled through the merit of CUET. Affiliated to GGSIPU, Delhi.</p>
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
                        Being a center of excellence in journalism and mass communication, we strive to
                        foster and develop professional media ethics and moral values that benefit society.
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-bullseye me-2" style="color:#800000;"></i>Mission of the Department</h3>
                    <p>The IITM School of Mass Communication strives to:</p>
                    <ul>
                        <li>Nurture excellence and foster quality education, critical thinking, and creativity in the domain of media studies.</li>
                        <li>Empower students and inculcate media ethics and responsibility towards society.</li>
                        <li>Create professionally competent, socially sensitive individuals who can work in a dynamic media environment.</li>
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
            The PEOs articulate what BA (JMC) graduates of IITM are expected to attain within a few years
            of graduation.
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead>
                    <tr><th style="width:80px;">Code</th><th>Programme Educational Objective</th></tr>
                </thead>
                <tbody>
                    <tr><td class="code">PEO 1</td><td>Exhibit professional, social, and entrepreneurial competencies and knowledge to be a successful professional in the journalism, media, and entertainment industry.</td></tr>
                    <tr><td class="code">PEO 2</td><td>Be a lifelong learner, adapt, and maintain leadership in a rapidly changing, multi-dimensional, contemporary world.</td></tr>
                    <tr><td class="code">PEO 3</td><td>Act as a catalyst and inspire societal empowerment as a people-centric change agent.</td></tr>
                    <tr><td class="code">PEO 4</td><td>Facilitate transparency and strengthen democracy as its fourth pillar.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ POs ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Programme Outcomes (POs)</h2>
        <p class="section-sub">
            On completion of the BA (JMC) programme the graduate shall be able to demonstrate the
            following capabilities:
        </p>
        <div class="table-responsive">
            <table class="po-table">
                <thead>
                    <tr>
                        <th style="width:70px;">Code</th>
                        <th style="width:230px;">Programme Outcome</th>
                        <th>Detailed Statement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="code">PO 1</td><td class="po-name">Critical Thinking &amp; Problem Solving (CTPS)</td><td>The ability to use knowledge, facts, and data to critically analyze and develop a well-thought-out solution within a reasonable time frame.</td></tr>
                    <tr><td class="code">PO 2</td><td class="po-name">Communication Efficiency (CE)</td><td>The ability to effectively communicate with the professional community and with the society at large — write effective reports, design documentation, make effective presentations, and give and take clear instructions.</td></tr>
                    <tr><td class="code">PO 3</td><td class="po-name">Modern Tools Usage (MTU)</td><td>The ability to explore, select, adapt, and apply appropriate technologies and tools to a wide range of activities.</td></tr>
                    <tr><td class="code">PO 4</td><td class="po-name">Professional Ethics (PE)</td><td>The ability to perform professional practices ethically, considering cyber regulations, laws, responsibilities, and norms of professional practices.</td></tr>
                    <tr><td class="code">PO 5</td><td class="po-name">Individual &amp; Team Work (ITW)</td><td>The ability to work in multi-disciplinary team collaboration, both as a member and leader as per need.</td></tr>
                    <tr><td class="code">PO 6</td><td class="po-name">Social &amp; Environmental Concern (SEC)</td><td>The ability to recognize and assess societal, environmental, health, safety, legal, and cultural issues within local and global contexts, along with the consequential responsibilities applicable to professional practices.</td></tr>
                    <tr><td class="code">PO 7</td><td class="po-name">Life-long Learning (LLL)</td><td>The ability to engage in independent learning for continuous self-development as a professional.</td></tr>
                    <tr><td class="code">PO 8</td><td class="po-name">Innovation &amp; Entrepreneurship (I&amp;E)</td><td>The ability to apply innovation to identify suitable opportunities to create value and wealth for the betterment of the individual and society at large.</td></tr>
                    <tr><td class="code">PO 9</td><td class="po-name">Project Management &amp; Finance (PMF)</td><td>The ability to apply knowledge to manage projects in multidisciplinary environments.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ INTAKE & ELIGIBILITY (DETAILED) ============ -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-balance-scale me-2" style="color:#800000;"></i>Student Intake &amp; Reservation</h3>
                    <p>
                        The programme is run in only one shift, with an intake of 120 students. The
                        existing reservation policy stipulates 10% seats (12 in number) as "Management
                        Quota Seats." Out of the remaining 90% seats (108 in number), 85% seats (92 in
                        number) are reserved for Delhi candidates and 15% seats (16 in number) for outside
                        Delhi candidates. Further reservation for specific categories is as per the
                        guidelines of the Government of NCT of Delhi.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-panel h-100">
                    <h3><i class="fa fa-check-double me-2" style="color:#800000;"></i>Eligibility &amp; Admission</h3>
                    <p>
                        Pass in 12th Class of 10+2 of CBSE or equivalent with a minimum of 50% marks in
                        aggregate and must also have passed English (core) as a subject.
                    </p>
                    <p>
                        Admission shall be on the basis of the merit of the CET. The vacant seats after
                        exhausting the merit list of CET will be filled through the merit list of CUET.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ ACADEMIC EXCELLENCE + PEDAGOGY ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Academic Excellence</h2>
        <p>
            The Institute's primary goal is to stimulate critical thinking and creativity, fostering
            innovation and research in media and communication. Through a dynamic curriculum and hands-on
            experiences, students gain a deep understanding of journalism, broadcasting, digital media,
            and more. This approach equips them with the skills to produce ethical, engaging content and
            address contemporary media challenges, preparing them to excel in the evolving media industry.
             As a best college for BJMC in Delhi NCR, the institute nurtures students to excel in journalism, 
             mass media and communication.
        </p>

        <h2 class="section-heading" style="margin-top:36px;">Pedagogy</h2>
        <p>
            The teaching pedagogy at IITM School of Mass Communication focuses on blending theoretical
            foundations with practical applications to equip students with the knowledge and skills
            required in the ever-evolving field of mass communication. Experiential learning in media
            production, including journalism, filmmaking, digital content creation, and public relations,
            is a cornerstone of this approach. These methodologies encompass lectures, assignments,
            role-plays, group discussions, media simulations, group work, seminars, and skill enhancement
            workshops.
            Through BJMC programs with internships & media projects, learners cultivate storytelling, analytical, and communication skills essential for the modern media landscape.
        </p>
        <p>
            Students actively engage in a variety of media activities such as live reporting, anchoring,
            content creation, and field-based projects, providing them with opportunities to experience
            real-world media production processes. Additionally, students have access to state-of-the-art
            studios, editing suites, and production equipment for hands-on exposure. Industry internships
            and field visits to leading media houses, production studios, and communication firms are
            integral components of the pedagogy. Students participate in debates, panel discussions, and
            mock interviews to hone their critical thinking and presentation skills.
        </p>
        <p>
            Other essential pedagogical activities include creative workshops, personality development
            sessions, media industry visits, and interactions with industry experts. Collaborative media
            projects are also a key feature, fostering both individual and team-based skills. These
            components are designed to prepare students for diverse roles in the media industry, whether
            in journalism, broadcasting, public relations, or digital media content creation.
        </p>
    </div>
</section>

<!-- ============ SKILL DEVELOPMENT ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Skill Development</h2>
        <p>
            The institute places a high priority on aiding students in attaining academic excellence while
            cultivating the skills essential for effective storytelling, critical analysis, and teamwork
            in the media industry. Consequently, students are thoroughly prepared to meet the demands of
            the dynamic and highly competitive media landscape.
        </p>
        <p>
            The program focuses on equipping the students with the ability to identify and address complex
            communication challenges. It aims to prepare students for navigating unforeseen and evolving
            scenarios in journalism, broadcasting, advertising, digital media, and more.
        </p>
        <p>
            The objective of skill development is to instill a philosophy of <strong>'Experiential Learning'</strong>,
            emphasizing creativity, ethical reporting, and problem-solving over rote learning. By
            fostering critical thinking, investigative skills, and an understanding of diverse media
            platforms, the program ensures that students move beyond mere information dissemination to
            impactful content creation.
        </p>
        <p>
            Our skill development courses (VAC) and workshops aim to cultivate a comprehensive awareness
            of domestic and global media trends. At IITM, we emphasize the holistic refinement of
            students' professional and personal attributes, integrating them with strong ethical values,
            an innovative mindset, and a positive attitude essential for success in the media domain.
        </p>

        <h3 style="margin: 28px 0 16px; font-size: 20px; font-weight: 700; color: #1a1a1a;">Core Skills Development Areas</h3>

        <div class="row g-3">
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head tech"><i class="fa fa-video me-2"></i>Technical Skills</div>
                    <ul>
                        <li>Media Production</li>
                        <li>Audio-Visual Production</li>
                        <li>Video Editing Software</li>
                        <li>Radio Production</li>
                        <li>Graphics Designing Software</li>
                        <li>Photography</li>
                        <li>Broadcasting Techniques</li>
                        <li>Social Media Management</li>
                        <li>Web Designing Software</li>
                        <li>Data Journalism</li>
                        <li>Mobile Journalism</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head write"><i class="fa fa-pen-nib me-2"></i>Writing Skills</div>
                    <ul>
                        <li>News Writing</li>
                        <li>Feature Writing</li>
                        <li>Scriptwriting</li>
                        <li>Copywriting</li>
                        <li>Blogging</li>
                        <li>Editing</li>
                        <li>Broadcast Writing</li>
                        <li>Press Releases</li>
                        <li>Research</li>
                        <li>Creative Writing</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <div class="head soft"><i class="fa fa-comments me-2"></i>Soft Skills</div>
                    <ul>
                        <li>Values and Ethics</li>
                        <li>Written and Verbal Communication</li>
                        <li>Active Listening &amp; Teamwork</li>
                        <li>Self-Confidence</li>
                        <li>Positive Attitude</li>
                        <li>Time Management</li>
                        <li>Adaptability and Resilience</li>
                        <li>Creative Problem-Solving</li>
                        <li>Conflict Resolution</li>
                        <li>Critical Thinking</li>
                        <li>Collaboration and Networking</li>
                        <li>Stress Management</li>
                        <li>Presentation Skills</li>
                        <li>Self-Motivation and Initiative</li>
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
<section class="section section-alt" id="syllabus">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Curriculum &amp; Syllabus</h2>
        <p class="section-sub">
            Download the official BA (JMC) syllabus prescribed by Guru Gobind Singh Indraprastha University.
        </p>
        <div class="dl-grid">
            <a class="dl-card" href="syllabus/bajmcsyllabus.pdf" target="_blank" rel="noopener">
                <span class="dl-ico"><i class="fa fa-file-pdf"></i></span>
                <div>
                    <h4>BA (JMC) Syllabus (GGSIPU)</h4>
                    <p>Detailed course structure and semester-wise syllabus for the BA (JMC) / BJMC programme.</p>
                    <span class="dl-tag">Official GGSIPU Document</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ============ STANDARDS NOTE ============ -->
<section class="section-tight">
    <div class="container">
        <p style="font-size:14.5px; color:#4a4a4a; max-width:920px;">
            The program's norms and benchmarks are aligned with the guidelines of Guru Gobind Singh
            Indraprastha University (GGSIPU), ensuring the highest academic standards and preparing
            students for rewarding careers in the dynamic media industry. The combination of academic
            rigor and practical training positions graduates to thrive in various professional roles
            within the rapidly evolving world of journalism and mass communication.
        </p>
    </div>
</section>

<!-- ============ ADMISSION CTA ============ -->
<section class="section-tight">
    <div class="container">
        <div class="big-cta">
            <h3>BA (JMC) Admission 2026-27 is Open</h3>
            <p>Get fees, FAQs, recruiters and the full admission process on the dedicated admission page.</p>
            <a href="bajmc-admission-2026.php" class="hbtn"><i class="fa fa-paper-plane"></i> View Admission 2026 Page</a>
        </div>
    </div>
</section>

<div style="height: 4vh"></div>

<?php
    include("../naacfooter.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
