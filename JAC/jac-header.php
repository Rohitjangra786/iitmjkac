<?php
/* ============================================================
   Joint Assessment Committee (JAC) — shared SUBSITE header.
   Self-contained: deliberately NO main-site chrome
   (no naacheader.php / n.php / naacfooter.php). Formal,
   document-style layout with a left "Disclosure Index" TOC.

   Each page sets $jac_page_title and $jac_active BEFORE including:
       $jac_page_title = 'Status of Library';
       $jac_active     = 'librarystatus.php';
       include 'jac-header.php';
   ============================================================ */
$jac_page_title = isset($jac_page_title) ? $jac_page_title : 'Mandatory Disclosure';
$jac_active     = isset($jac_active) ? $jac_active : '';

// Single source of truth for the disclosure sections (label + short description).
$jac_nav = [
    ['href' => 'mandatory-disclosure.php',     'label' => 'A. Institute Information',              'desc' => 'Name, leadership, address and official contact details.'],
    ['href' => 'academic-programmes.php',      'label' => 'B. Academic Programmes Details',        'desc' => 'Programmes offered, intake, affiliation and approvals.'],
    ['href' => 'physical-infrastructure.php',  'label' => 'Part-I: Physical Infrastructure',       'desc' => 'Land legality, space, occupancy & safety certificates.'],
    ['href' => 'director-status.php',          'label' => 'IIA. Director / Principal Status',      'desc' => 'Eligibility, appointments and qualification records.'],
    ['href' => 'teacher-student-ratio.php',     'label' => 'IIB(i). Teacher Student Ratio',         'desc' => 'Sanctioned and available teacher ratio per course.'],
    ['href' => 'faculty-cadre-ratio.php',       'label' => 'IIB(ii). Faculty Cadre Ratio',          'desc' => 'Professors, Associate and Assistant Professors cadre.'],
    ['href' => 'computer-centre.php',          'label' => 'IIC. Computer Centre Status',           'desc' => 'Computers, terminals, licensed software and internet.'],
    ['href' => 'library-status.php',           'label' => 'IID. Status of Library',                'desc' => 'Titles, volumes, journals, magazines and online subscriptions.'],
    ['href' => 'labs-status.php',               'label' => 'IIE(i). Laboratories & Workshops',      'desc' => 'Labs, workshops, equipment and lab staff details.'],
    ['href' => 'practical-training.php',       'label' => 'IIE(ii). Practical Training & Summer',  'desc' => 'Summer training, projects, presentations and GD records.'],
    ['href' => 'ancillary-facilities.php',     'label' => 'IIF. Ancillary & Essential Facilities', 'desc' => 'Common rooms, canteen, medical, power backup & utilities.'],
    ['href' => 'grievance-redressal.php',      'label' => 'IIG. Students Grievance Redressal',     'desc' => 'Grievance committee, proceedings, website display & counselling.'],
    ['href' => 'accreditation-status.php',     'label' => 'IIH. NAAC & NBA Accreditation',         'desc' => 'Accreditation status, valid cycles and certificates.'],
    ['href' => 'compliance-status.php',        'label' => 'Part-III. Status of Compliance',        'desc' => 'Compliance of Academic Audit & previous JAC/NOC observations.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo strip_tags($jac_page_title); ?> &mdash; Joint Assessment Committee | IITM Janakpuri</title>
<meta name="description" content="Mandatory Disclosure and Joint Assessment records of Institute of Information Technology &amp; Management (IITM), Janakpuri, New Delhi — affiliated to GGSIPU, approved by AICTE, NAAC 'A' and NBA accredited.">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">
<meta name="theme-color" content="#800000">

<!-- Google Analytics (kept for page-view tracking on the subsite) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VJX8PS9941"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-VJX8PS9941');</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto+Slab:wght@500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<style>
:root{
    --maroon:#800000; --maroon-d:#5e0000; --maroon-l:#9a2a2a;
    --ink:#232323; --muted:#5c5c5c; --line:#d8d8d8; --line-soft:#ececec;
    --bg:#edeff2; --paper:#ffffff; --soft:#f7f1f1;
    --wrap:1200px;
    --shadow:0 1px 2px rgba(20,20,20,.04), 0 12px 30px rgba(80,10,10,.06);
}
*{ box-sizing:border-box; }
html{ scroll-behavior:smooth; }
body{ margin:0; font-family:'Inter',system-ui,-apple-system,'Segoe UI',Roboto,sans-serif; color:var(--ink); background:var(--bg); font-size:15px; line-height:1.65; }
a{ color:var(--maroon); text-decoration:none; }
a:hover{ text-decoration:underline; }

/* Consistent full-width wrapper: uses the screen but caps for readability */
.jac-topbar .in, .jac-mast .in, .jac-shell, .jac-foot .in{ width:min(94%, var(--wrap)); margin-inline:auto; }

/* ===== slim top bar ===== */
.jac-topbar{ background:var(--maroon-d); color:#fff; font-size:12px; }
.jac-topbar .in{ padding:7px 0; display:flex; justify-content:space-between; align-items:center; gap:10px; flex-wrap:wrap; }
.jac-topbar a{ color:rgba(255,255,255,.85); }
.jac-topbar a:hover{ color:#fff; text-decoration:none; }
.jac-topbar .yr{ letter-spacing:.5px; text-transform:uppercase; font-weight:600; opacity:.92; }

/* ===== letterhead masthead ===== */
.jac-mast{ background:var(--paper); border-bottom:3px solid var(--maroon); box-shadow:0 2px 12px rgba(0,0,0,.06); position:relative; z-index:5; }
.jac-mast .in{ padding:16px 0; display:flex; align-items:center; gap:18px; }
.jac-mast img{ height:64px; width:auto; }
.jac-mast .t{ min-width:0; }
.jac-mast .t .name{ font-family:'Poppins',sans-serif; font-weight:700; color:var(--maroon); font-size:clamp(16px,2.4vw,23px); line-height:1.15; letter-spacing:.2px; }
.jac-mast .t .sub{ font-family:'Roboto Slab',serif; font-weight:600; color:var(--ink); font-size:14px; margin-top:3px; }
.jac-mast .t .accr{ font-size:11.5px; color:var(--muted); margin-top:4px; letter-spacing:.2px; }
.jac-mast .badges{ margin-left:auto; display:flex; gap:8px; flex-shrink:0; }
.jac-mast .badge{ border:1px solid #e2cfcf; color:var(--maroon-d); background:var(--soft); font-family:'Poppins',sans-serif; font-weight:600; font-size:11.5px; padding:6px 13px; border-radius:999px; white-space:nowrap; }

/* ===== shell (sidebar + paper) ===== */
.jac-shell{ margin-top:28px; margin-bottom:28px; display:grid; grid-template-columns:300px 1fr; gap:30px; align-items:start; }

/* ===== sidebar TOC ===== */
.jac-toc{ background:var(--paper); border:1px solid var(--line); border-radius:9px; position:sticky; top:16px; overflow:hidden; box-shadow:var(--shadow); max-height:calc(100vh - 32px); display:flex; flex-direction:column; }
.jac-toc .h{ background:linear-gradient(180deg,#faf4f4,#f3e9e9); border-bottom:1px solid var(--line); padding:13px 16px; font-family:'Roboto Slab',serif; font-weight:600; color:var(--maroon-d); font-size:13px; text-transform:uppercase; letter-spacing:.6px; display:flex; align-items:center; justify-content:space-between; flex:0 0 auto; }
.jac-toc .h::after{ content:"\f107"; font-family:"Font Awesome 5 Free"; font-weight:900; font-size:13px; color:var(--maroon); display:none; transition:transform .25s ease; }
.jac-toc ul{ list-style:none; margin:0; padding:6px; overflow-y:auto; min-height:0; }
.jac-toc li a{ display:block; padding:9px 12px; border-radius:5px; color:var(--ink); font-size:13.2px; line-height:1.35; border-left:3px solid transparent; transition:background .15s ease, border-color .15s ease, color .15s ease; }
.jac-toc li a:hover{ background:var(--soft); text-decoration:none; color:var(--maroon); border-left-color:var(--maroon-l); }
.jac-toc li a.active{ background:var(--maroon); color:#fff; font-weight:600; border-left-color:#3d0000; }

/* ===== main "paper" ===== */
.jac-main{ background:var(--paper); border:1px solid var(--line); border-radius:9px; padding:34px 42px 42px; min-width:0; box-shadow:var(--shadow); }
.jac-crumb{ font-size:12px; color:var(--muted); margin-bottom:14px; }
.jac-crumb a{ color:var(--muted); }
.jac-h1{ font-family:'Roboto Slab',serif; font-weight:700; color:var(--maroon-d); font-size:clamp(22px,2.8vw,28px); margin:0 0 6px; line-height:1.2; }
.jac-lead{ color:var(--muted); font-size:14.5px; margin:0 0 22px; padding-bottom:16px; border-bottom:2px solid var(--soft); }
.jac-h2{ font-family:'Roboto Slab',serif; font-weight:600; color:var(--maroon); font-size:19px; margin:40px 0 15px; padding:2px 0 2px 14px; border-left:5px solid var(--maroon); }
.jac-main > .jac-h2:first-of-type{ margin-top:8px; }
.jac-main p{ margin:0 0 12px; }

/* ===== formal document table ===== */
.doc-table{ width:100%; border-collapse:collapse; margin:0 0 10px; font-size:14px; }
.doc-table caption{ caption-side:top; text-align:left; font-weight:600; color:var(--muted); font-size:12.5px; padding:0 0 8px; }
.doc-table th,.doc-table td{ border:1px solid var(--line); padding:10px 14px; text-align:left; vertical-align:top; }
.doc-table thead th{ background:var(--maroon); color:#fff; font-weight:600; }
.doc-table tbody th{ background:var(--soft); color:var(--maroon-d); font-weight:600; width:40%; }
.doc-table tbody tr:nth-child(even) td{ background:#fcfbfb; }
.doc-table tbody tr:hover td{ background:#f6eeee; }
.doc-scroll{ overflow-x:auto; -webkit-overflow-scrolling:touch; margin:0 0 10px; border-radius:8px; }
.doc-scroll .doc-table{ margin:0; }
.doc-note{ background:var(--soft); border-left:4px solid var(--maroon-l); border-radius:0 6px 6px 0; padding:12px 16px; margin:0 0 14px; font-size:13.8px; color:#4a4a4a; }

/* ===== formal index list ===== */
.doc-index{ border:1px solid var(--line); border-radius:8px; overflow:hidden; box-shadow:var(--shadow); }
.doc-index a{ display:flex; align-items:center; gap:12px; padding:13px 18px; border-bottom:1px solid var(--line-soft); color:var(--ink); transition:background .15s ease, padding .15s ease; }
.doc-index a:last-child{ border-bottom:0; }
.doc-index a:hover{ background:var(--soft); text-decoration:none; padding-left:22px; }
.doc-index .l{ font-weight:600; font-size:14px; }
.doc-index .l small{ display:block; font-weight:400; color:var(--muted); font-size:12.3px; margin-top:2px; }
.doc-index i{ margin-left:auto; color:#c4a9a9; font-size:12px; }

/* ===== document download row ===== */
.doc-dl{ display:flex; flex-wrap:wrap; gap:10px; margin:4px 0 0; }
.doc-dl a{ display:inline-flex; align-items:center; gap:9px; border:1px solid var(--line); border-radius:6px; padding:9px 14px; font-size:13.5px; color:var(--ink); background:var(--paper); transition:border-color .15s ease, color .15s ease, box-shadow .15s ease, transform .15s ease; }
.doc-dl a:hover{ border-color:var(--maroon); color:var(--maroon); text-decoration:none; box-shadow:0 6px 16px rgba(128,0,0,.10); transform:translateY(-2px); }
.doc-dl a i{ color:var(--maroon); }

/* ===== footer ===== */
.jac-foot{ background:var(--maroon-d); color:rgba(255,255,255,.85); margin-top:36px; }
.jac-foot .in{ padding:30px 0; display:grid; grid-template-columns:2fr 1fr 1fr; gap:28px; }
.jac-foot h4{ font-family:'Roboto Slab',serif; color:#fff; font-size:14px; margin:0 0 10px; font-weight:600; }
.jac-foot a{ color:rgba(255,255,255,.85); }
.jac-foot a:hover{ color:#fff; }
.jac-foot p{ margin:0 0 6px; font-size:13px; }
.jac-foot ul{ list-style:none; margin:0; padding:0; font-size:13px; }
.jac-foot li{ margin-bottom:6px; }
.jac-foot .bar{ border-top:1px solid rgba(255,255,255,.15); text-align:center; font-size:12px; padding:12px 20px; color:rgba(255,255,255,.7); }

/* ===== back-to-top button + motion prefs ===== */
.jac-top{ position:fixed; right:22px; bottom:22px; width:46px; height:46px; border-radius:50%; background:var(--maroon); color:#fff; border:0; display:flex; align-items:center; justify-content:center; font-size:15px; cursor:pointer; opacity:0; visibility:hidden; transform:translateY(10px); transition:opacity .25s ease, transform .25s ease, background .2s ease; box-shadow:0 6px 18px rgba(128,0,0,.34); z-index:60; }
.jac-top.show{ opacity:1; visibility:visible; transform:translateY(0); }
.jac-top:hover{ background:var(--maroon-d); transform:translateY(-2px); }
@media (prefers-reduced-motion: reduce){ html{ scroll-behavior:auto; } [data-aos]{ opacity:1 !important; transform:none !important; } }

/* ===== tablet / mobile ===== */
@media (max-width:900px){
    .jac-shell{ grid-template-columns:1fr; gap:16px; margin-top:16px; }
    .jac-toc{ position:static; max-height:none; display:block; }
    .jac-toc .h{ cursor:pointer; user-select:none; }
    .jac-toc .h::after{ display:inline-block; }
    .jac-toc ul{ max-height:0; padding:0 6px; overflow:hidden; transition:max-height .32s ease, padding .28s ease; }
    .jac-toc.open ul{ max-height:75vh; padding:6px; overflow-y:auto; }
    .jac-toc.open .h::after{ transform:rotate(180deg); }
    .jac-mast .in{ gap:12px; padding:12px 0; } .jac-mast img{ height:48px; }
    .jac-mast .badges{ display:none; }
    .jac-main{ padding:22px 18px 28px; }
    .jac-foot .in{ grid-template-columns:1fr; gap:18px; padding:24px 0; }
    .doc-table tbody th{ width:44%; }
    .jac-h1{ font-size:22px; }
    .jac-h2{ margin-top:30px; }
}
@media (max-width:520px){
    .jac-topbar .in{ font-size:11px; }
    .jac-mast .t .name{ font-size:16px; }
    .jac-mast .t .accr{ font-size:10.5px; }
    .jac-main{ padding:18px 14px 24px; }
    .doc-table th, .doc-table td{ padding:8px 10px; font-size:12.8px; }
}
</style>
</head>
<body>

<div class="jac-topbar"><div class="in">
    <span class="yr">Joint Assessment Committee &middot; Mandatory Disclosure &middot; A.Y. 2024&ndash;25</span>
    <span><a href="https://www.iitmjanakpuri.com/index.php"><i class="fas fa-arrow-left"></i>&nbsp; Main Website</a></span>
</div></div>

<header class="jac-mast"><div class="in">
    <a href="mandatorydisclosure.php"><img src="../iitm-1.png" onerror="this.onerror=null;this.src='../logow.png';" alt="IITM Janakpuri"></a>
    <div class="t">
        <div class="name">Institute of Information Technology &amp; Management</div>
        <div class="sub">Mandatory Disclosure &mdash; Joint Assessment Committee</div>
        <div class="accr">Affiliated to GGSIPU &middot; Approved by AICTE &middot; NAAC Grade &lsquo;A&rsquo; &middot; NBA Accredited &middot; Recognised u/s 2(f) of UGC Act</div>
    </div>
    <div class="badges">
        <span class="badge">NAAC &lsquo;A&rsquo;</span>
        <span class="badge">NBA</span>
        <span class="badge">AICTE</span>
    </div>
</div></header>

<div class="jac-shell">
    <aside class="jac-toc">
        <div class="h">Disclosure Index</div>
        <ul>
            <?php foreach ($jac_nav as $it): ?>
            <li><a href="<?php echo $it['href']; ?>"<?php echo ($jac_active === $it['href']) ? ' class="active"' : ''; ?>><?php echo $it['label']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <main class="jac-main">
