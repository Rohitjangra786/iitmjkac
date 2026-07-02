<?php
/* ============================================================
   Academic Audit Cell (AAC) — shared SUBSITE header.
   Self-contained: deliberately NO main-site chrome
   (no naacheader.php / n.php / naacfooter.php). Formal,
   document-style layout with a left "Disclosure Index" TOC.

   Each page sets $aac_page_title and $aac_active BEFORE including:
       $aac_page_title = 'Status of Library';
       $aac_active     = 'librarystatus.php';
       include 'aac-header.php';
   ============================================================ */
$aac_page_title = isset($aac_page_title) ? $aac_page_title : 'Mandatory Disclosure';
$aac_active     = isset($aac_active) ? $aac_active : '';

// Single source of truth for the disclosure sections (label + short description).
$aac_nav = [
    ['href' => 'mandatorydisclosure.php',     'label' => 'A. Institute Information',              'desc' => 'Name, leadership, address and official contact details.'],
    ['href' => 'academicprogrammes.php',      'label' => 'B. Details of Academic Programmes',     'desc' => 'Programmes offered, intake, affiliation and approvals.'],
    ['href' => 'accreditationstatus.php',     'label' => '1. Status of Accreditation',            'desc' => 'NAAC, NBA and other accreditation and recognition.'],
    ['href' => 'teachersavailability.php',    'label' => '2. Status of Teachers Availability',     'desc' => 'Sanctioned, available and cadre-wise faculty position.'],
    ['href' => 'teachingquality.php',         'label' => '3. Quality of Teachers &amp; Teaching',  'desc' => 'Qualifications, experience and teaching quality.'],
    ['href' => 'institutionalsupport.php',    'label' => '4. Faculty Development Support',         'desc' => 'FDPs, research support and professional development.'],
    ['href' => 'grievanceredressal.php',      'label' => '5. Grievance Redressal Mechanism',       'desc' => 'Framework and committees for student grievances.'],
    ['href' => 'universityexaminations.php',  'label' => '6. University Examination Support',       'desc' => 'Examination conduct, evaluation and support.'],
    ['href' => 'librarystatus.php',           'label' => '7. Status of Library',                   'desc' => 'Books, journals, e-resources and facilities.'],
    ['href' => 'labstatus.php',               'label' => '8. Status of Laboratories',              'desc' => 'Computer and departmental laboratories.'],
    ['href' => 'cocurricular.php',            'label' => '9. Co-curricular Activities',            'desc' => 'Societies, events and co-curricular engagement.'],
    ['href' => 'institutepublications.php',   'label' => '10. Publications of the Institution',     'desc' => 'Journals, newsletters and publications.'],
    ['href' => 'personalitiesdevelopment.php','label' => '11. Students Personality Development',    'desc' => 'Soft-skills and personality development.'],
    ['href' => 'placementstatus.php',         'label' => '12. Status of Placement',                'desc' => 'Placement records, recruiters and training.'],
    ['href' => 'institutionparameters.php',   'label' => '13. General Parameters',                 'desc' => 'Governance, fees and other general parameters.'],
    ['href' => 'facilitiesavailable.php',     'label' => '14. Facilities Available',               'desc' => 'Infrastructure, sports and campus facilities.'],
    ['href' => 'deficienciesremoval.php',     'label' => '15. Removal of Deficiencies',            'desc' => 'Action taken on deficiencies identified in audits.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo strip_tags($aac_page_title); ?> &mdash; Academic Audit Cell | IITM Janakpuri</title>
<meta name="description" content="Mandatory Disclosure and Academic Audit records of Institute of Information Technology &amp; Management (IITM), Janakpuri, New Delhi — affiliated to GGSIPU, approved by AICTE, NAAC 'A' and NBA accredited.">
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
    --wrap:1680px;
    --shadow:0 1px 2px rgba(20,20,20,.04), 0 12px 30px rgba(80,10,10,.06);
}
*{ box-sizing:border-box; }
html{ scroll-behavior:smooth; }
body{ margin:0; font-family:'Inter',system-ui,-apple-system,'Segoe UI',Roboto,sans-serif; color:var(--ink); background:var(--bg); font-size:15px; line-height:1.65; }
a{ color:var(--maroon); text-decoration:none; }
a:hover{ text-decoration:underline; }

/* Consistent full-width wrapper: uses the screen but caps for readability */
.aac-topbar .in, .aac-mast .in, .aac-shell, .aac-foot .in{ width:min(94%, var(--wrap)); margin-inline:auto; }

/* ===== slim top bar ===== */
.aac-topbar{ background:var(--maroon-d); color:#fff; font-size:12px; }
.aac-topbar .in{ padding:7px 0; display:flex; justify-content:space-between; align-items:center; gap:10px; flex-wrap:wrap; }
.aac-topbar a{ color:rgba(255,255,255,.85); }
.aac-topbar a:hover{ color:#fff; text-decoration:none; }
.aac-topbar .yr{ letter-spacing:.5px; text-transform:uppercase; font-weight:600; opacity:.92; }

/* ===== letterhead masthead ===== */
.aac-mast{ background:var(--paper); border-bottom:3px solid var(--maroon); box-shadow:0 2px 12px rgba(0,0,0,.06); position:relative; z-index:5; }
.aac-mast .in{ padding:16px 0; display:flex; align-items:center; gap:18px; }
.aac-mast img{ height:64px; width:auto; }
.aac-mast .t{ min-width:0; }
.aac-mast .t .name{ font-family:'Poppins',sans-serif; font-weight:700; color:var(--maroon); font-size:clamp(16px,2.4vw,23px); line-height:1.15; letter-spacing:.2px; }
.aac-mast .t .sub{ font-family:'Roboto Slab',serif; font-weight:600; color:var(--ink); font-size:14px; margin-top:3px; }
.aac-mast .t .accr{ font-size:11.5px; color:var(--muted); margin-top:4px; letter-spacing:.2px; }
.aac-mast .badges{ margin-left:auto; display:flex; gap:8px; flex-shrink:0; }
.aac-mast .badge{ border:1px solid #e2cfcf; color:var(--maroon-d); background:var(--soft); font-family:'Poppins',sans-serif; font-weight:600; font-size:11.5px; padding:6px 13px; border-radius:999px; white-space:nowrap; }

/* ===== shell (sidebar + paper) ===== */
.aac-shell{ margin-top:28px; margin-bottom:28px; display:grid; grid-template-columns:300px 1fr; gap:30px; align-items:start; }

/* ===== sidebar TOC ===== */
.aac-toc{ background:var(--paper); border:1px solid var(--line); border-radius:9px; position:sticky; top:16px; overflow:hidden; box-shadow:var(--shadow); max-height:calc(100vh - 32px); display:flex; flex-direction:column; }
.aac-toc .h{ background:linear-gradient(180deg,#faf4f4,#f3e9e9); border-bottom:1px solid var(--line); padding:13px 16px; font-family:'Roboto Slab',serif; font-weight:600; color:var(--maroon-d); font-size:13px; text-transform:uppercase; letter-spacing:.6px; display:flex; align-items:center; justify-content:space-between; flex:0 0 auto; }
.aac-toc .h::after{ content:"\f107"; font-family:"Font Awesome 5 Free"; font-weight:900; font-size:13px; color:var(--maroon); display:none; transition:transform .25s ease; }
.aac-toc ul{ list-style:none; margin:0; padding:6px; overflow-y:auto; min-height:0; }
.aac-toc li a{ display:block; padding:9px 12px; border-radius:5px; color:var(--ink); font-size:13.2px; line-height:1.35; border-left:3px solid transparent; transition:background .15s ease, border-color .15s ease, color .15s ease; }
.aac-toc li a:hover{ background:var(--soft); text-decoration:none; color:var(--maroon); border-left-color:var(--maroon-l); }
.aac-toc li a.active{ background:var(--maroon); color:#fff; font-weight:600; border-left-color:#3d0000; }

/* ===== main "paper" ===== */
.aac-main{ background:var(--paper); border:1px solid var(--line); border-radius:9px; padding:34px 42px 42px; min-width:0; box-shadow:var(--shadow); }
.aac-crumb{ font-size:12px; color:var(--muted); margin-bottom:14px; }
.aac-crumb a{ color:var(--muted); }
.aac-h1{ font-family:'Roboto Slab',serif; font-weight:700; color:var(--maroon-d); font-size:clamp(22px,2.8vw,28px); margin:0 0 6px; line-height:1.2; }
.aac-lead{ color:var(--muted); font-size:14.5px; margin:0 0 22px; padding-bottom:16px; border-bottom:2px solid var(--soft); }
.aac-h2{ font-family:'Roboto Slab',serif; font-weight:600; color:var(--maroon); font-size:19px; margin:40px 0 15px; padding:2px 0 2px 14px; border-left:5px solid var(--maroon); }
.aac-main > .aac-h2:first-of-type{ margin-top:8px; }
.aac-main p{ margin:0 0 12px; }

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
.aac-foot{ background:var(--maroon-d); color:rgba(255,255,255,.85); margin-top:36px; }
.aac-foot .in{ padding:30px 0; display:grid; grid-template-columns:2fr 1fr 1fr; gap:28px; }
.aac-foot h4{ font-family:'Roboto Slab',serif; color:#fff; font-size:14px; margin:0 0 10px; font-weight:600; }
.aac-foot a{ color:rgba(255,255,255,.85); }
.aac-foot a:hover{ color:#fff; }
.aac-foot p{ margin:0 0 6px; font-size:13px; }
.aac-foot ul{ list-style:none; margin:0; padding:0; font-size:13px; }
.aac-foot li{ margin-bottom:6px; }
.aac-foot .bar{ border-top:1px solid rgba(255,255,255,.15); text-align:center; font-size:12px; padding:12px 20px; color:rgba(255,255,255,.7); }

/* ===== back-to-top button + motion prefs ===== */
.aac-top{ position:fixed; right:22px; bottom:22px; width:46px; height:46px; border-radius:50%; background:var(--maroon); color:#fff; border:0; display:flex; align-items:center; justify-content:center; font-size:15px; cursor:pointer; opacity:0; visibility:hidden; transform:translateY(10px); transition:opacity .25s ease, transform .25s ease, background .2s ease; box-shadow:0 6px 18px rgba(128,0,0,.34); z-index:60; }
.aac-top.show{ opacity:1; visibility:visible; transform:translateY(0); }
.aac-top:hover{ background:var(--maroon-d); transform:translateY(-2px); }
@media (prefers-reduced-motion: reduce){ html{ scroll-behavior:auto; } [data-aos]{ opacity:1 !important; transform:none !important; } }

/* ===== tablet / mobile ===== */
@media (max-width:900px){
    .aac-shell{ grid-template-columns:1fr; gap:16px; margin-top:16px; }
    .aac-toc{ position:static; max-height:none; display:block; }
    .aac-toc .h{ cursor:pointer; user-select:none; }
    .aac-toc .h::after{ display:inline-block; }
    .aac-toc ul{ max-height:0; padding:0 6px; overflow:hidden; transition:max-height .32s ease, padding .28s ease; }
    .aac-toc.open ul{ max-height:75vh; padding:6px; overflow-y:auto; }
    .aac-toc.open .h::after{ transform:rotate(180deg); }
    .aac-mast .in{ gap:12px; padding:12px 0; } .aac-mast img{ height:48px; }
    .aac-mast .badges{ display:none; }
    .aac-main{ padding:22px 18px 28px; }
    .aac-foot .in{ grid-template-columns:1fr; gap:18px; padding:24px 0; }
    .doc-table tbody th{ width:44%; }
    .aac-h1{ font-size:22px; }
    .aac-h2{ margin-top:30px; }
}
@media (max-width:520px){
    .aac-topbar .in{ font-size:11px; }
    .aac-mast .t .name{ font-size:16px; }
    .aac-mast .t .accr{ font-size:10.5px; }
    .aac-main{ padding:18px 14px 24px; }
    .doc-table th, .doc-table td{ padding:8px 10px; font-size:12.8px; }
}
</style>
</head>
<body>

<div class="aac-topbar"><div class="in">
    <span class="yr">Academic Audit Cell &middot; Mandatory Disclosure &middot; A.Y. 2024&ndash;25</span>
    <span><a href="https://www.iitmjanakpuri.com/index.php"><i class="fas fa-arrow-left"></i>&nbsp; Main Website</a></span>
</div></div>

<header class="aac-mast"><div class="in">
    <a href="mandatorydisclosure.php"><img src="../iitm-1.png" onerror="this.onerror=null;this.src='../logow.png';" alt="IITM Janakpuri"></a>
    <div class="t">
        <div class="name">Institute of Information Technology &amp; Management</div>
        <div class="sub">Mandatory Disclosure &mdash; Academic Audit Cell</div>
        <div class="accr">Affiliated to GGSIPU &middot; Approved by AICTE &middot; NAAC Grade &lsquo;A&rsquo; &middot; NBA Accredited &middot; Recognised u/s 2(f) of UGC Act</div>
    </div>
    <div class="badges">
        <span class="badge">NAAC &lsquo;A&rsquo;</span>
        <span class="badge">NBA</span>
        <span class="badge">AICTE</span>
    </div>
</div></header>

<div class="aac-shell">
    <aside class="aac-toc">
        <div class="h">Disclosure Index</div>
        <ul>
            <?php foreach ($aac_nav as $it): ?>
            <li><a href="<?php echo $it['href']; ?>"<?php echo ($aac_active === $it['href']) ? ' class="active"' : ''; ?>><?php echo $it['label']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <main class="aac-main">
