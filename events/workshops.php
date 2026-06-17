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
    <title> Workshops & Skill Development | IITM Janakpuri  </title>
    <meta name="description" content="Participate in workshops at IITM Janakpuri to gain practical knowledge, industry-relevant skills, and hands-on learning experiences.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}
p{
    text-align: justify;
}
        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .hero-title {
            font-size: 14px; /* Reduced font size */
            font-weight: bold;
        }

        .value-added-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            line-height: 1.5;
        }

        .value-added-section h1 {
            font-size: 10px; /* Reduced font size */
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 7px; /* Further reduced font size */
            color: #333;
            margin-bottom: 15px;
        }

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }

        .carousel-inner {
            max-width: 70vw; /* Restored carousel width */
            margin: 0 auto;
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1); /* Fast and smooth sliding transition */
        }

        .carousel-item img {
            max-height: 300px; /* Restored carousel image height */
            width: auto;
            margin: 0 auto;
        }
        </style>
    <!-- Poppins (theme font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
    <style>
/* ============================================================
   Events pages - refined maroon theme (matches extra.php)
   Scoped under .ec-page so the shared header/nav are untouched.
   ============================================================ */
:root{
  --ec-maroon:#800000; --ec-maroon-dark:#5e0000; --ec-maroon-light:#a52a2a;
  --ec-gold:#c9a227; --ec-gold-soft:#e7c65a; --ec-cream:#faf7f2;
  --ec-ink:#2b2b2b; --ec-grad:linear-gradient(135deg,#800000 0%,#a52a2a 55%,#5e0000 100%);
}
.ec-page, .ec-page *{ font-family:'Poppins',system-ui,-apple-system,'Segoe UI',sans-serif; }
.ec-page{
  background:
     radial-gradient(circle at 0% 0%, rgba(201,162,39,.06), transparent 40%),
     radial-gradient(circle at 100% 18%, rgba(128,0,0,.05), transparent 45%),
     var(--ec-cream);
  color:var(--ec-ink); padding:0 0 14px;
}
.ec-page p{ text-align:justify; }
.ec-container{ padding-top:28px; padding-bottom:10px; }

/* ---- page hero ---- */
.ec-hero{ text-align:center; margin:6px auto 30px; }
.ec-eyebrow{
  display:inline-block; font-size:11.5px; font-weight:700; letter-spacing:2.4px;
  text-transform:uppercase; color:var(--ec-maroon);
  background:rgba(128,0,0,.07); border:1px solid rgba(128,0,0,.18);
  padding:5px 16px; border-radius:50px; margin:0 0 14px;
}
.ec-hero-title{
  font-size:34px; font-weight:800; color:var(--ec-maroon-dark);
  letter-spacing:.3px; margin:0; line-height:1.14;
}
.ec-hero-rule{
  display:block; width:92px; height:4px; margin:15px auto 0; border-radius:4px;
  background:linear-gradient(90deg,var(--ec-gold),var(--ec-maroon));
}

/* ---- sidebar ---- */
.ec-sidebar-col{ margin-bottom:24px; }
.ec-sidebar{
  background:#fff; border:1px solid rgba(128,0,0,.12); border-radius:16px;
  overflow:hidden; box-shadow:0 10px 30px rgba(128,0,0,.07);
  position:sticky; top:120px;
}
.ec-sidebar-title{
  background:var(--ec-grad); color:#fff; font-size:14px; font-weight:700;
  letter-spacing:.7px; text-transform:uppercase; margin:0; padding:14px 18px;
  border-bottom:3px solid var(--ec-gold);
}
.ec-side-link{
  display:block; padding:12px 18px; color:#4a3b3b; text-decoration:none;
  font-size:14px; font-weight:500; border-bottom:1px solid rgba(128,0,0,.07);
  border-left:3px solid transparent; transition:all .2s ease;
}
.ec-side-link:last-child{ border-bottom:0; }
.ec-side-link:hover{
  background:#fbf4f4; color:var(--ec-maroon); border-left-color:var(--ec-gold);
  padding-left:22px; text-decoration:none;
}
.ec-side-link.active{
  background:#fbf1f1; color:var(--ec-maroon-dark); font-weight:700;
  border-left-color:var(--ec-maroon);
}

/* ---- intro card ---- */
.ec-intro{ display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:32px; }
.ec-intro--single{ grid-template-columns:1fr; }
@media (max-width:767px){ .ec-intro{ grid-template-columns:1fr; } }
.ec-card{
  background:#fff; border:1px solid rgba(128,0,0,.10); border-left:5px solid var(--ec-gold);
  border-radius:14px; padding:20px 22px; box-shadow:0 8px 24px rgba(128,0,0,.06);
}
.ec-card-title{
  font-size:18px; font-weight:700; color:var(--ec-maroon); margin:0 0 10px;
  display:flex; align-items:center; gap:9px;
}
.ec-card-title::before{
  content:""; width:9px; height:9px; border-radius:50%; background:var(--ec-gold); flex:0 0 auto;
}
.ec-card p{ font-size:13.5px; line-height:1.72; color:#444; margin:0; }

/* ---- events explorer ---- */
.ec-section-title{
  font-size:21px; font-weight:800; color:var(--ec-maroon-dark); margin:0;
  position:relative; padding-left:14px;
}
.ec-section-title::before{
  content:""; position:absolute; left:0; top:3px; bottom:3px; width:5px;
  border-radius:4px; background:linear-gradient(var(--ec-gold),var(--ec-maroon));
}
.ec-events-head{
  display:flex; align-items:center; justify-content:space-between; gap:16px;
  flex-wrap:wrap; margin-bottom:16px;
}
.ec-search{ position:relative; display:flex; align-items:center; }
.ec-search-ico{ position:absolute; left:14px; font-size:13px; opacity:.55; pointer-events:none; }
.ec-search-input{
  width:260px; max-width:62vw; padding:10px 16px 10px 38px; font-size:14px;
  font-family:inherit; border:1.5px solid rgba(128,0,0,.20); border-radius:50px;
  background:#fff; color:var(--ec-ink); outline:none; transition:border-color .2s, box-shadow .2s;
}
.ec-search-input:focus{ border-color:var(--ec-gold); box-shadow:0 0 0 3px rgba(201,162,39,.20); }
.ec-count{ font-size:12.5px; color:#8a6d2f; font-weight:600; margin-left:12px; white-space:nowrap; }

/* ---- year tabs ---- */
.ec-tabs{ display:flex; flex-wrap:wrap; gap:8px; margin-bottom:18px; }
.ec-tab{
  font-family:inherit; font-size:14px; font-weight:600; color:var(--ec-maroon);
  background:#fff; border:1.5px solid rgba(128,0,0,.20); border-radius:50px;
  padding:8px 20px; cursor:pointer; transition:all .2s ease; letter-spacing:.3px;
}
.ec-tab:hover{ border-color:var(--ec-maroon); background:#fbf1f1; }
.ec-tab.active{
  background:var(--ec-grad); color:#fff; border-color:transparent;
  box-shadow:0 6px 16px rgba(128,0,0,.28);
}

/* ---- panels + tables ---- */
.ec-panel{ display:none; }
.ec-panel.active{ display:block; animation:ecFade .25s ease; }
@keyframes ecFade{ from{opacity:0; transform:translateY(6px);} to{opacity:1; transform:none;} }

.ec-subhead{
  font-size:16px; font-weight:700; color:var(--ec-maroon-dark);
  margin:26px 0 12px; padding-left:12px; border-left:4px solid var(--ec-gold);
}
.ec-panel .ec-subhead:first-child{ margin-top:0; }

.ec-page .ec-panel table{
  width:100%; border-collapse:separate; border-spacing:0; background:#fff;
  border-radius:14px; overflow:hidden; box-shadow:0 10px 30px rgba(128,0,0,.08); margin:0;
}
.ec-page .ec-panel thead th{
  background:var(--ec-grad) !important; color:#fff !important; font-weight:600;
  font-size:13px; letter-spacing:.4px; text-transform:uppercase;
  padding:13px 16px; border:0 !important; border-bottom:3px solid var(--ec-gold) !important; text-align:left;
}
.ec-page .ec-panel tbody td{
  padding:11px 16px; font-size:14px; color:#3a3a3a; border:0 !important;
  border-bottom:1px solid rgba(128,0,0,.07) !important; vertical-align:middle; background:transparent !important;
}
.ec-page .ec-panel tbody tr:nth-child(odd) td{ background:#fbf6f2 !important; }
.ec-page .ec-panel tbody tr:hover td{ background:#f3e2d8 !important; }
.ec-page .ec-panel tbody td:first-child{ font-weight:700; color:var(--ec-maroon); width:66px; text-align:center; }
.ec-page .ec-panel tbody td:nth-child(2){ white-space:nowrap; color:#6a5a2a; font-weight:600; font-size:13.5px; }
.ec-no-results td{ text-align:center !important; padding:26px !important; color:#999 !important; font-style:italic; background:#fff !important; }

/* ---- mobile-first refinements ---- */
@media (max-width:767px){
  .ec-hero-title{ font-size:25px; }
  .ec-page .ec-panel thead th{ padding:10px 8px; font-size:11px; }
  .ec-page .ec-panel tbody td{ padding:9px 8px; font-size:12.5px; }
  .ec-page .ec-panel tbody td:first-child{ width:34px; }
  .ec-page .ec-panel tbody td:nth-child(2){ white-space:normal; }
}

    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


<div class="ec-page">
  <div class="container ec-container">

    <!-- Page header -->
    <header class="ec-hero">
      <span class="ec-eyebrow">Campus Life</span>
      <h1 id="iipc" class="ec-hero-title">Workshops</h1>
      <span class="ec-hero-rule"></span>
    </header>

    <div class="row">
      <!-- Sidebar -->
      <aside class="col-lg-3 ec-sidebar-col">
        <nav class="ec-sidebar" aria-label="Events sections">
          <h2 class="ec-sidebar-title">Events</h2>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/extra.php">Extra &amp; Co-Curricular Events</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/conference.php">Conference / Seminars / Webinars</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/fdp.php">FDP</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
          <a class="ec-side-link active" href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a>
          <a class="ec-side-link" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
        </nav>
      </aside>

      <!-- Main content -->
      <main class="col-lg-9 ec-main">

        <!-- Intro -->
        <div class="ec-intro ec-intro--single">
          <article class="ec-card">
            <h2 class="ec-card-title">Overview</h2>
            <p>Regular in-house skill enhancement and personality development workshops are conducted at our institution to foster the holistic development of our students. Led by our faculty members and distinguished external experts, these workshops are tailored to assist students in achieving their personal educational and career objectives. They offer students the opportunity to cultivate the essential skills demanded in the professional sphere, thereby preparing them for success in their chosen paths.</p>
          </article>
        </div>

        <!-- Event records -->
        <section class="ec-events">
          <div class="ec-events-head">
            <h2 class="ec-section-title">Workshops by Year</h2>
            <div class="ec-search">
              <span class="ec-search-ico" aria-hidden="true">&#128269;</span>
              <input type="text" id="eventSearch" class="ec-search-input" placeholder="Search events..." autocomplete="off" aria-label="Search events">
              <span class="ec-count" id="eventCount"></span>
            </div>
          </div>

          <div class="ec-tabs" role="tablist">
            <button class="ec-tab active" type="button" data-year="2025-26">2025-26</button>
            <button class="ec-tab" type="button" data-year="2024-25">2024-25</button>
            <button class="ec-tab" type="button" data-year="2023-24">2023-24</button>
            <button class="ec-tab" type="button" data-year="2022-23">2022-23</button>
          </div>

          <div class="ec-panels">
            <div class="ec-panel active" data-year="2025-26">
              <h3 class="ec-subhead">Training Conducted</h3>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>S. No.</th>
            <th>Date</th>
            <th>Type of Activity</th>
            <th>Resource Person(s)</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>1</td><td>06-01-2025 to 15-01-2025</td><td>Advanced Excel & SPSS (MNG)</td><td>Ms. Priya Chetty (Project Guru)</td></tr>
        <tr><td>2</td><td>06-01-2025 to 15-01-2025</td><td>Advanced Excel & SPSS (MNG)</td><td>Ms. Priya Chetty (Project Guru)</td></tr>
        <tr><td>3</td><td>06-01-2025 to 11-01-2025</td><td>Career Excellence & Professional Skills</td><td>Dr. Amit Kumar, Dr. Madhu Ruhil (IITM)</td></tr>
        <tr><td>4</td><td>24-07-2025 to 30-07-2025</td><td>Data Analysis Training Program Using Power BI & Advanced Excel</td><td>Mr. Kundan (Campus Sutra)</td></tr>
        <tr><td>5</td><td>05-01-2026 to 16-01-2026</td><td>Building Smart Dashboards with Excel & Power BI (M1)</td><td>Mr. Kundan (Campus Sutra)</td></tr>
        <tr><td>6</td><td>05-01-2026 to 16-01-2026</td><td>Predictive & Descriptive Analytics with Excel and Power BI (M2)</td><td>Mr. Abhinash Jena (Project Guru)</td></tr>
        <tr><td>7</td><td>05-01-2026 to 16-01-2026</td><td>Advanced Excel & Power BI for Data-Driven Decisions (M3)</td><td>Mr. Pratik (Shape My Skills by DUCAT)</td></tr>
        <tr><td>8</td><td>05-01-2026 to 16-01-2026</td><td>Building Smart Dashboards with Excel & Power BI (E1)</td><td>Mr. Kundan (Campus Sutra)</td></tr>
        <tr><td>9</td><td>05-01-2026 to 16-01-2026</td><td>Predictive & Descriptive Analytics with Excel and Power BI (E2)</td><td>Mr. Abhinash Jena (Project Guru)</td></tr>
        <tr><td>10</td><td>05-01-2026 to 16-01-2026</td><td>Advanced Excel & Power BI for Data-Driven Decisions (E3)</td><td>Mr. Pratik (Shape My Skills by DUCAT)</td></tr>
        <tr><td>11</td><td>05-01-2026 to 09-01-2026</td><td>From Data to Decisions: Mastering Advanced Analytics & Soft Skills</td><td>Dr. Harmeet Malhotra, Mr. Manish Jha, Mr. Nikhil Malhotra, Mr. Anmol Upadhyay (Tata STRIVE / iStep Mentors / T.I.M.E.)</td></tr>
        <tr><td>12</td><td>24-10-2025 to 21-11-2025</td><td>Training Program on Banking, Financial Services & Insurance (BFSI)</td><td>BFSI Subject Matter Experts (Tata STRIVE)</td></tr>
        <tr><td>13</td><td>06-11-2025 to 12-11-2025</td><td>Career Readiness Bootcamp: Preparing for Professional Success</td><td>Mr. Nishant Kumar Verma (Freelance Corporate Trainer)</td></tr>
        <tr><td>14</td><td>06-01-2026 to 15-01-2026</td><td>Industrial Skill-Based Training on Business Analytics: Advanced Excel & Power BI</td><td>Ms. Priya Chetty (Project Guru)</td></tr>
        <tr><td>15</td><td>05-01-2026 to 09-01-2026</td><td>From Data to Decisions: Mastering Advanced Analytics & Soft Skills</td><td>Dr. Harmeet Malhotra (IITM), Mr. Manish Jha (Tata STRIVE), Mr. Anmol Upadhyay (T.I.M.E.)</td></tr>
        <tr><td>16</td><td>12-01-2026 to 16-01-2026</td><td>Business Training Analytics Program</td><td>Mr. Omkar, Mr. Siddarth (KPMG)</td></tr>
        <tr><td>17</td><td>12-01-2026 to 16-01-2026</td><td>Skill Based Training</td><td>Dr. Anurag Tiruwa (IITM)</td></tr>
        <tr><td>18</td><td>06-01-2025 to 11-01-2025</td><td>Integrating and Utilizing Sensors for IoT in Diverse Real-World Scenarios</td><td>Dr. Manzoor Ansari (IITM)</td></tr>
        <tr><td>19</td><td>06-01-2025 to 11-01-2025</td><td>Winter School on Web Development with MERN Stack</td><td>Ms. Kavita Srivastava (IITM)</td></tr>
        <tr><td>20</td><td>13-01-2025 to 17-01-2025</td><td>Winter School on Building Modern Web App with MERN Stack</td><td>Ms. Kavita Srivastava (IITM)</td></tr>
        <tr><td>21</td><td>12-01-2026 to 16-01-2026</td><td>Winter School on Intelligent IoT Systems and Applications</td><td>Dr. Manzoor Ansari (IITM)</td></tr>
        <tr><td>22</td><td>05-01-2026 to 10-01-2026</td><td>Winter School on Foundations of Deep Learning: Concepts, Models and Applications</td><td>Dr. Saima Saleem, Ms. Lakshmi Kumari (IITM)</td></tr>
        <tr><td>23</td><td>08-01-2026 to 16-01-2026</td><td>Winter School on Web Development and Deployment</td><td>Ms. Kavita Srivastava (IITM)</td></tr>
        <tr><td>24</td><td>June 2025</td><td>Summer Training on Data Science</td><td>Prateek Gupta (Shape My Skills)</td></tr>
        <tr><td>25</td><td>26-12-2025 to 30-12-2025</td><td>Summer Training on MERN Stack</td><td>Raman Tiwari (S.O. Infotech)</td></tr>
        <tr><td>26</td><td>26-12-2025 to 30-12-2025</td><td>Summer Training on Artificial Intelligence</td><td>Mohammad Jari, Amandeep Singh (IKIGAI School of AI)</td></tr>
        <tr><td>27</td><td>26-12-2025 to 30-12-2025</td><td>Winter School on Data Analytics</td><td>Sourabh Singh (IBM in collaboration with ICT Academy)</td></tr>
        <tr><td>28</td><td>25-08-2025</td><td>Smart Finance Smart Future: A Roadmap for Young Minds</td><td>Mr. Manoj Gupta (Wealth Building Coach, NGO – Aapki Apni Pehchaan)</td></tr>
        <tr><td>29</td><td>23-09-2025</td><td>Happiness in Wellness: Empowering Youth for Life</td><td>Ms. Tanisha Jain (Counselling Psychologist)</td></tr>
        <tr><td>30</td><td>15-10-2025</td><td>Mock GD & PI</td><td>Dr. Gopal Singh Latwal, Dr. Latika Malhotra, Dr. Sonam Arora, Dr. Himanshu Matta</td></tr>
        <tr><td>31</td><td>29-10-2025</td><td>Bridging Economics and Econometrics</td><td>Dr. Ruhee Mittal (SOL, University of Delhi)</td></tr>
        <tr><td>32</td><td>30-10-2025</td><td>Psychometric Testing</td><td>Dr. Sonam Arora</td></tr>
        <tr><td>33</td><td>30-10-2025</td><td>Corporate Ethics: Focus on Time Management</td><td>Dr. Mandeep Singh</td></tr>
        <tr><td>34</td><td>01-11-2025</td><td>Data Driven Decision Making</td><td>Dr. Gopal Singh Latwal</td></tr>
        <tr><td>35</td><td>30-10-2025</td><td>Cracking GDPI and Aptitude Test</td><td>Mr. Sharad Awasthi, Mr. Navneet Anand (Career Launcher)</td></tr>
        <tr><td>36</td><td>13-11-2025</td><td>Fitness and Nutrition for Productivity</td><td>Ms. Ankita Pandey (Singapore)</td></tr>
        <tr><td>37</td><td>13-11-2025</td><td>Aptitude Enhancement for Placement Success</td><td>Mr. Navneet Anand (Career Launcher)</td></tr>
        <tr><td>38</td><td>02-08-2025 to 08-08-2025</td><td>One Week Summer School on Influencer Marketing</td><td>Sakshi Bhayana; Sana Srivastava</td></tr>
        <tr><td>39</td><td>05-01-2026 to 10-01-2026</td><td>One Week Winter School on AI & Future of Media</td><td>Ms. Vertika Saxena; Mr. Pradeep Singh; Mr. Manoj Kumar Tripathi; Bharat Parmar; Ms. Anchal Sachdeva; Mr. Pankaj Yadav</td></tr>
    </tbody>
</table>

                   
                                                    <h3 class="ec-subhead">Workshops</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
<tr><td>1</td><td>06-08-2025</td><td>Time Management: Tool of Success</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>2</td><td>07-08-2025</td><td>See it, Set it, Achieve It: The Power of Goal Setting</td><td>Ms. Disha Garg</td></tr>
        <tr><td>3</td><td>07-08-2025</td><td>Student Wellbeing – Thrive & Adapt</td><td>Ms. Lavanya Chadha</td></tr>
        <tr><td>4</td><td>06-08-2025</td><td>Effective Communication Skills in Management</td><td>Ms. Akanksha Agarwal</td></tr>
        <tr><td>5</td><td>19-09-2025</td><td>ER Diagrams: From Concepts to Databases</td><td>Ms. Ruchika</td></tr>
        <tr><td>6</td><td>08-09-2025</td><td>Industrial IoT in POM</td><td>Dr. Manzoor Ansari</td></tr>
        <tr><td>7</td><td>05-08-2025</td><td>Group Presentation and Discussion</td><td>Ms. Komal Goel</td></tr>
        <tr><td>8</td><td>26-11-2025</td><td>Understanding In-House Industrial Training</td><td>Prof. (Dr.) Deepali Saluja, Dr. Sunitha Ravi</td></tr>
        <tr><td>9</td><td>17-09-2025</td><td>Building a Great Profile: Personal Branding</td><td>Mr. Harsh Wadhwa</td></tr>
        <tr><td>10</td><td>27-08-2025</td><td>Tally Prime: Benefits & Opportunities</td><td>Mr. Dinesh Khatri</td></tr>
        <tr><td>11</td><td>11-09-2025</td><td>Group Discussion Strategies</td><td>Dr. Chetan Bajaj</td></tr>
        <tr><td>12</td><td>23-09-2025</td><td>LinkedIn Advantage: Networking for Success</td><td>Dr. Aarti Dawra</td></tr>
        <tr><td>13</td><td>29-10-2025</td><td>Mission Placement: GD & Interview Skills</td><td>Mr. Mohit Sharma</td></tr>
        <tr><td>14</td><td>31-10-2025</td><td>Mock GD & Interview Masterclass</td><td>Mr. Ramit Bedi</td></tr>
        <tr><td>15</td><td>07-01-2026</td><td>Life Skills Employability Training Programme</td><td>Ms. Smriti Arora (Naandi Foundation)</td></tr>
        <tr><td>16</td><td>12-02-2026</td><td>Workshop on Resume Building</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>17</td><td>19-02-2026</td><td>Business Simulation Workshop</td><td>Dr. Deepika Arora, Mr. Jatin Rawat, Mr. Romil Chopra</td></tr>
        <tr><td>18</td><td>25-02-2026</td><td>Case Study Methodology</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>19</td><td>28-10-2025 to 01-11-2025</td><td>Global Immersion Program (Dubai)</td><td>Corporate Mentors</td></tr>
        <tr><td>20</td><td>13-10-2025</td><td>AI Kit Exposure & Hands-On Practice</td><td>Ducat Trainers</td></tr>
        <tr><td>21</td><td>09-10-2025</td><td>CodeSphere: Programming Challenge</td><td>Ms. Komal Sharma</td></tr>
        <tr><td>22</td><td>14-11-2025</td><td>CEREBRO Coding Challenge</td><td>Dr. Ramandeep Kaur</td></tr>
        <tr><td>23</td><td>13-11-2025</td><td>BRAINWIRED Quiz</td><td>AIEC & Dept. of Computer Science</td></tr>
        <tr><td>24</td><td>15-10-2025</td><td>Unlocking Insights with Data Analytics</td><td>Dr. Sunil Sikka</td></tr>
        <tr><td>25</td><td>31-10-2025</td><td>Tableau Hands-On Workshop</td><td>Dr. Abha Rajpoot</td></tr>
        <tr><td>26</td><td>13-10-2025</td><td>Autonomous Systems in Aerospace (UAV)</td><td>Mr. Avanish Kumar Singh</td></tr>
        <tr><td>27</td><td>10-09-2025</td><td>Exploring Generative AI & RAG</td><td>Mr. Dheeraj Kumar</td></tr>
        <tr><td>28</td><td>11-09-2025</td><td>CALM in Chaos: Change & Conflict</td><td>Mr. Manish Jha</td></tr>
        <tr><td>29</td><td>31-10-2025</td><td>RAW – The Unfiltered Talk Series</td><td>Industry Experts Panel</td></tr>
        <tr><td>30</td><td>11-11-2025</td><td>Stigma of Mental Illness in Society</td><td>Dr. Sonam Arora</td></tr>
        <tr><td>31</td><td>18-03-2025</td><td>Basics of Excel and MS Word</td><td>CA Rohit Kumar</td></tr>
        <tr><td>32</td><td>08-08-2025</td><td>Bridge Course: Business Mathematics</td><td>Ms. Akansha</td></tr>
        <tr><td>33</td><td>08-08-2025</td><td>Fundamentals of Accounting</td><td>Ms. Shweta Aneja</td></tr>
        <tr><td>34</td><td>26-08-2025 to 27-08-2025</td><td>Transforming Imaginations into Pixels</td><td>Ms. Srishti Manchanda; Mr. Sameer Ashraf; Mr. Mayank Midham; Ms. Aditi Singh</td></tr>
        <tr><td>35</td><td>13-09-2025</td><td>Workshop on Cyber Crime and Security</td><td>Adv. Piyush Tandon</td></tr>
        <tr><td>36</td><td>16-09-2025</td><td>Dealing in Project Finance</td><td>CA Vishal Goel</td></tr>
        <tr><td>37</td><td>25-09-2025 to 26-09-2025</td><td>Two Days Workshop on Life Skills</td><td>Mr. Keshav Bhatia</td></tr>
        <tr><td>38</td><td>15-10-2025</td><td>Stress Management through Yoga and Pranayam</td><td>Dr. Gopal Singh Latwal</td></tr>
        <tr><td>39</td><td>21-10-2025</td><td>Psychometric Testing for Students</td><td>Dr. Sonam Arora</td></tr>
        <tr><td>40</td><td>07-11-2025 to 08-11-2025</td><td>Theatre for Communication Excellence</td><td>Dr. Sandhya R.</td></tr>
        <tr><td>41</td><td>11-11-2025</td><td>Workshop on Modern Creator Path</td><td>Ms. Mehak Kapoor</td></tr>
        <tr><td>42</td><td>19-02-2026</td><td>Resume Building</td><td>Mr. Pawan Kumar</td></tr>
        <tr><td>43</td><td>26-02-2026</td><td>Importance of Media Membership & Ethics in Media Industry</td><td>Mr. Suchivrat Arya</td></tr>
        <tr><td>44</td><td>16-03-2026</td><td>CV Building Workshop</td><td>Dr. Mandeep Singh</td></tr>
        <tr><td>45</td><td>17-03-2026</td><td>AI and Technology in Investment, Resume Building, Startup Execution</td><td>Jaipuriya Institute of Management</td></tr>
        <tr><td>46</td><td>13-04-2026</td><td>GD Interview Skill Builder</td><td>Mr. Tijendra Sharma</td></tr>
   

                
 
 
            
            </tbody>
        </table>
                   
                               </div>
            <div class="ec-panel" data-year="2024-25">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>	1	</td><td>	09.11.2024	</td><td>	Big data, cloud computing & IOT Laboratory jamia Millia islamia	</td><td>	Dr. Manzoor Ansari	</td></tr>
                        <tr><td>	2	</td><td>	01.07.24-02.08.24	</td><td>	Summer Training on AI & DS/ML	</td><td>	Mr. Vaseem Durrani	</td></tr>
                        <tr><td>	3	</td><td>	01-10.10.2024	</td><td>	Self-defense workshop	</td><td>	Dr. Harmeet Malhotra	</td></tr>
                        <tr><td>	4	</td><td>	07.10.2024	</td><td>	Navigating natural language	</td><td>	Dr.Shubhra Goyal	</td></tr>
                        <tr><td>	5	</td><td>	9/10/2024	</td><td>	Introduction to cyber security	</td><td>	Mr Kandarp Kumar Thakur	</td></tr>
                        <tr><td>	6	</td><td>	11.10.2024	</td><td>	Digital forensics	</td><td>	Ms.Anaika Kumari	</td></tr>
                        <tr><td>	7	</td><td>	02-20.01.2025	</td><td>	Winter workshop on ICT academy- Honeywell Cyber Security Women Empowerment CSR Training Program	</td><td>	Mr. Salik Hayat Makhmoor ICT Trainer	</td></tr>
                        <tr><td>	8	</td><td>	06-11.01.2025	</td><td>	Winter school on web development with mern stack	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	9	</td><td>	6-11.01.2025	</td><td>	One week Winter Training Program “ Integrating and Utilizing Sensors for IOT in Diverse Real-World Scenarios”	</td><td>		</td></tr>
                        <tr><td>	10	</td><td>	10.01.2025	</td><td>	Workshop on data analytics	</td><td>	Dr. Manzoor Ansari	</td></tr>
                        <tr><td>	11	</td><td>	13-17.01.2025	</td><td>	Building modern web App with Mern stack	</td><td>	Mr. Prateek Gupta	</td></tr>
                        <tr><td>	12	</td><td>	16.01.2025	</td><td>	One day workshop on java full stack and AWS restart	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	13	</td><td>	23.01.2024	</td><td>	Sustainability through smart technology	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	14	</td><td>	10.02.2025	</td><td>	Power BI	</td><td>	Dr. Manzoor Ansari	</td></tr>
                        <tr><td>	15	</td><td>	19.02.2025	</td><td>	AI tools for Data Analytics	</td><td>	Mr Prateek Gupta	</td></tr>
                        <tr><td>	16	</td><td>	21.02.2025	</td><td>	Aptitude Session	</td><td>	Mr. Akash Manchanda	</td></tr>
                        <tr><td>	17	</td><td>	03.03.2025	</td><td>	Yoga Workshop	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	18	</td><td>	04.03.2025	</td><td>	Yoga Workshop	</td><td>	Dr. Gopal Singh Latwal	</td></tr>
                        <tr><td>	19	</td><td>	06-18.01.25	</td><td>	Certified Workshop on Advanced Excel	</td><td>	Ms.Preeti and Dr. Harmeet Malhotra	</td></tr>
                        <tr><td>	20	</td><td>	20.01.25	</td><td>	Workshop on Minor Research Project	</td><td>	Ms. Saguna Khajuria	</td></tr>
                        <tr><td>	21	</td><td>	21.01.25	</td><td>	Workshop on Major Research Project	</td><td>	Mr.Puneet Chawla	</td></tr>
                        <tr><td>	22	</td><td>	03.09.2024	</td><td>	Mastering time Strategies for balancing productivity	</td><td>	Dr. Latika Malhotra	</td></tr>
                        <tr><td>	23	</td><td>	23.08.2024	</td><td>	Lanquill	</td><td>	Ms. Priya Gupta 	</td></tr>
                        <tr><td>	24	</td><td>	23.08.2024	</td><td>	Business Simulation	</td><td>	Dr. Deepika Arora	</td></tr>
                        <tr><td>	25	</td><td>	24.09.2024	</td><td>	Stress Management:An Effective tool to improve efficiency at business world	</td><td>	Prof. Dr. Deepali Saluja 	</td></tr>
                        <tr><td>	26	</td><td>	29.08.2024	</td><td>	Ai in digital Marketing	</td><td>	Mr. Jay dattani	</td></tr>
                        <tr><td>	27	</td><td>	29.08.2024	</td><td>	Ai in digital marketing	</td><td>	Mr. Jay dattani	</td></tr>
                        <tr><td>	28	</td><td>	31.08.2024	</td><td>	Summer training project report	</td><td>	Dr, Anurag Tiruwa 	</td></tr>
                        <tr><td>	29	</td><td>	09.10.2024	</td><td>	Creation and usage of digital locker	</td><td>	Dr. Deepika Arora	</td></tr>
                        <tr><td>	30	</td><td>	10.10.2024	</td><td>	Complete guide to case study methodology	</td><td>	Prof. Navin Verma	</td></tr>
                        <tr><td>	31	</td><td>	14.10.24-16.10.24	</td><td>	Yoga & medication	</td><td>	Dr. Gopal Singh Latwal	</td></tr>
                        <tr><td>	32	</td><td>	15-10.2024	</td><td>	Ace the opportunity	</td><td>	Dr. Madhu Ruhil	</td></tr>
                        <tr><td>	33	</td><td>	06.11.2024	</td><td>	The global career landscape	</td><td>	Ms.megha manshandana	</td></tr>
                        <tr><td>	34	</td><td>	13-14.11.2024	</td><td>	Financial Eductaionfor young India	</td><td>	Dr. Shikha Gupta	</td></tr>
                        <tr><td>	35	</td><td>	13.11.2024	</td><td>	Mastering the techniques for MBA through CAT	</td><td>	Mr. Praveen khanna	</td></tr>
                        <tr><td>	36	</td><td>	06.01.2025-15.01.2025	</td><td>	In-house Industrial Skill Based training Program	</td><td>	Prof.(Dr.) Rachita Rana 	</td></tr>
                        <tr><td>	37	</td><td>	16.01.205	</td><td>	Building better Future 	</td><td>	Mr.Bhavish tiwari	</td></tr>
                        <tr><td>	38	</td><td>	16.01.2025	</td><td>	Empowering future leader	</td><td>	Mr.Bhavish tiwari	</td></tr>
                        <tr><td>	39	</td><td>	29.01.25	</td><td>	Resume Writing	</td><td>	Mr. Sunil Dua	</td></tr>
                        <tr><td>	40	</td><td>	29.01.2025	</td><td>	POSH ACT awareness	</td><td>	Dr, Shuchi Dikshit	</td></tr>
                        <tr><td>	41	</td><td>	11.02.2025	</td><td>	BULLRISERS	</td><td>	Mr. Nachiket Save	</td></tr>
                        <tr><td>	42	</td><td>	20.02.2025	</td><td>	Power BI	</td><td>	Mr. Prateek Gupta	</td></tr>
                        <tr><td>	43	</td><td>	20.09.2024	</td><td>	Radio microphone	</td><td>	IITM Mass Communication	</td></tr>
                        <tr><td>	44	</td><td>	20.09.2024	</td><td>	Exposure in Photography	</td><td>	IITM Mass Communication	</td></tr>
                        <tr><td>	45	</td><td>	11.10.2024	</td><td>	Camera presence : How to connect with the audience	</td><td>	Ms. Sana Srivastva	</td></tr>
                        <tr><td>	46	</td><td>	14.10.2024	</td><td>	Digital media writing	</td><td>	Ms. Anshu naithani	</td></tr>
                        <tr><td>	47	</td><td>	14.10.2024	</td><td>	Writing on Radio	</td><td>	IITM Mass Communication	</td></tr>
                        <tr><td>	48	</td><td>	01.02.2024	</td><td>	CSR and Ethical Business Practices in media	</td><td>	Ms. Nirmala B. walter	</td></tr>

                
 
 
            
            </tbody>
        </table>
                   
                    </div>
            <div class="ec-panel" data-year="2023-24">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>18.8.23</td><td>Retirement and Tax Planning</td><td>Mr. Dhirendra Rawat</td></tr>
                <tr><td>2</td><td>18.9.23</td><td>The Role of Youth in Bringing about Social Change</td><td>Ms. Anisha</td></tr>
                <tr><td>3</td><td>22.9.23</td><td>From Theory to Practice: Mutual Funds Derivatives, and Risk Management</td><td>Ms. Soumya</td></tr>
                <tr><td>4</td><td>26.9.23</td><td>Network Security & Ethical Hacking</td><td>Mr. Sandeep Kumar</td></tr>
                <tr><td>5</td><td>13-17.10.23</td><td>Life Skills</td><td>Ms. Seema Shruti, Ms. Rita Dixit</td></tr>
                <tr><td>6</td><td>13.10.23</td><td>GitHub Services</td><td>Mr. Piyush Pandey</td></tr>
                <tr><td>7</td><td>16.10.23</td><td>How to Prepare Presentations</td><td>All Mentors</td></tr>
                <tr><td>8</td><td>16.10.23</td><td>How to Prepare Assignments and Presentations</td><td>Ms. Manisha, Ms. Ankita Sharma, Dr. Jyoti Bhanbhani</td></tr>
                <tr><td>9</td><td>17.10.23</td><td>Digital Marketing</td><td>Prof. Somraj Bhattacharjee</td></tr>
                <tr><td>10</td><td>19.10.23</td><td>Strategic Planning in Project Management</td><td>Ms. Saguna Khajuria</td></tr>
 
  <tr><td>11</td><td>20.10.23</td><td>Workshop on Resume Building</td><td>Dr. Latika Malhotra, Associate Professor</td></tr>
                <tr><td>12</td><td>23.10.23</td><td>How to Prepare a Case Study</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>13</td><td>25.10.23</td><td>Research in the Digital Age: Leveraging ICT Tools and Techniques</td><td>Ms. Monika</td></tr>
                <tr><td>14</td><td>26.10.23</td><td>Educational Visit to Delhi Technological University UAS Lab</td><td>DTU</td></tr>
                <tr><td>15</td><td>26.10.23</td><td>Writing for Printing Digital Media</td><td>Mr. Prabhat Upadhaya</td></tr>
                <tr><td>16</td><td>27.10.23</td><td>Business Simulation</td><td>Mr. Rahul Jain</td></tr>
                <tr><td>17</td><td>9.11.23</td><td>Awareness of POSH Act</td><td>Ms. Parul Sharma, Assistant Prof.</td></tr>
                <tr><td>18</td><td>10.11.23</td><td>Quiz India Movement</td><td>RJ. Rocky</td></tr>
                <tr><td>19</td><td>20.11.23</td><td>Mock Stock</td><td>Mr. Puneet Chawala, Mr. Saksham Rana</td></tr>
                <tr><td>20</td><td>30.11.23</td><td>Indian Folk Art Workshop</td><td>Ms. Muskan</td></tr>
                
 <tr><td>21</td><td>31.1.24</td><td>Workshop on Artificial Intelligence</td><td>Prof.(Dr.) Rakesh Kumar, University of Petroleum, Dehradun</td></tr>
                <tr><td>22</td><td>31.1.24</td><td>Workshop on Forthcoming Semester - MBA</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>23</td><td>31.1.24</td><td>Workshop on Career Counseling</td><td>Mr. Bharat Sharma, Jamboree Education</td></tr>
                <tr><td>24</td><td>31.1.23</td><td>Workshop on Cyber Awareness Programme</td><td>Delhi Police</td></tr>
                <tr><td>25</td><td>1.2.24</td><td>Workshop on How to Crack a High Paying Role</td><td>Mr. Nikhil Gaur, Co-founder, HiveSchool</td></tr>
                <tr><td>26</td><td>3.2.24</td><td>Corporate Mentorship Session</td><td>Mr. Karan Dhami, Mr. Sarthak Gupta</td></tr>
                <tr><td>27</td><td>7.2.24</td><td>Workshop on Psychometric Testing</td><td>Dr. Sonam Arora</td></tr>
                <tr><td>28</td><td>7.2.24</td><td>Workshop on Digital Empowerment</td><td>Dr. Amit Kumar, Mr. Puneet Chwala</td></tr>
                <tr><td>29</td><td>17.11.23</td><td>Importance of Python Programming</td><td>Dr. Sudhir Kumar Sharma</td></tr>
                <tr><td>30</td><td>1.2.24</td><td>Workshop on IOT Explorer: Journey to M2M Communication IOT Academy</td><td>Ms. Anjali Chauhan</td></tr>
                <tr><td>31</td><td>1.2.24</td><td>Pre-placement Workshop on “How to Crack a High-paying Role”</td><td>Mr. Nikhil Gaur</td></tr>
                <tr><td>32</td><td>6.2.24</td><td>Minor Project-I</td><td>Dr. Vandana Raghava</td></tr>
                <tr><td>33</td><td>7.2.24</td><td>Major Research Project</td><td>Ms. Saguna Khajuria</td></tr>
                <tr><td>34</td><td>12.2.24</td><td>Self Defense Training Programme</td><td>Delhi Police West District</td></tr>
                <tr><td>35</td><td>12.2.24</td><td>Yoga Workshop</td><td>Dr. Gopal Singh Latwal</td></tr>
                <tr><td>36</td><td>14.2.24</td><td>Public Speaking</td><td>Mr. Sunil Dua</td></tr>
                <tr><td>37</td><td>15.2.24</td><td>Building a Successful Startup: Insights from Real-life Case Studies</td><td>Dr. Parul Manchanda</td></tr>
                <tr><td>38</td><td>24.2.24</td><td>Yoga Workshop</td><td>Dr. Gopal Singh Latwal</td></tr>
                <tr><td>39</td><td>26.2.24</td><td>Workshop on Minor Project</td><td>Dr. Vandana Raghava</td></tr>
                <tr><td>40</td><td>27.2.24</td><td>Click Kar: One Day DSLR Workshop</td><td>Mr. Deepak and Mr. Pankaj</td></tr>
                <tr><td>41</td><td>27.2.24</td><td>Global Horizon: Unlocking Opportunities through Higher Education Abroad</td><td>Mr. Kapil Chandok</td></tr>
                <tr><td>42</td><td>28.2.24</td><td>UAV Services & Technology</td><td>Mr. Sudhir Kumar Sharma</td></tr>
                <tr><td>43</td><td>6.3.24</td><td>Business Simulation</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>44</td><td>7.3.24</td><td>Stock Market</td><td>Mr. Alok Sharma</td></tr>
                <tr><td>45</td><td>13.3.24</td><td>Workshop on Digital Verification by Google News Initiative and Data Leads</td><td>Dr. Archna Kumari</td></tr>
                <tr><td>46</td><td>6.3.24</td><td>Crafting Impactful Resumes</td><td>Dr. Mandeep Singh</td></tr>
                <tr><td>47</td><td>14.3.24</td><td>Data Analytics using Python</td><td>Ms. Sheetal Mavi</td></tr>
                <tr><td>48</td><td>20.3.24</td><td>Workshop on IOT: Journey to M2M Communication by IOT Academy Noida</td><td>Dr. Manzoor</td></tr>
                <tr><td>49</td><td>10.4.24</td><td>Corporate Mentorship Session</td><td>Ms. Gentina George</td></tr>
                <tr><td>50</td><td>14.4.24</td><td>Corporate Mentorship Session</td><td>Mr. Nitin Bhandari</td></tr>
                <tr><td>51</td><td>18.4.24</td><td>Front End Development using Angular</td><td>Ms. Kavita Srivastava</td></tr>
                <tr><td>52</td><td>30.4.24</td><td>Enacting Gender Equity: Understanding and Applying Regulation 16 and AICTE Standards</td><td>Prof. Namita Rajput, Professor at Sri Aurobindo College</td></tr>
                <tr><td>53</td><td>7.2.24</td><td>Psychometric Testing</td><td>Dr. Sonam Arora</td></tr>
                <tr><td>54</td><td>20.3.24</td><td>Workshop on Yoga</td><td>Dr. Gopal Singh Latwal</td></tr>
                <tr><td>55</td><td>17.5.24</td><td>Summer Training Report</td><td>Dr. Amit Kumar</td></tr>
                <tr><td>56</td><td>15.5.24</td><td>Internship Project Report</td><td>Mr. Puneet Chawla</td></tr>
                <tr><td>57</td><td>18.3.24</td><td>Mastering the Art of News</td><td>Mr. Vivek Srivatav</td></tr>
            
            </tbody>
        </table>

                    </div>
            <div class="ec-panel" data-year="2022-23">
             <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>29.9.22</td><td>Workshop on Profession Email Writing</td><td>Dr. Ruby Daihya</td></tr>
                <tr><td>2</td><td>4.11.22</td><td>Barclays Life Skills Virtual Mentorship Program – Digital Skills for Enhanced Productivity</td><td>Barclay’s</td></tr>
                <tr><td>3</td><td>15.11.22</td><td>Workshop on Banking, Financial Services and Insurance Knowledge</td><td>Mr. Raghav Jain</td></tr>
                <tr><td>4</td><td>17.11.22</td><td>Workshop on Digital Detox & Success Mantras</td><td>BK Sisters</td></tr>
                <tr><td>5</td><td>26.11.22</td><td>Workshop on Google Hacks To Code</td><td>Mr. Piyush Pandey</td></tr>
                <tr><td>6</td><td>14.10.22</td><td>Barclays Life Skills for Employability</td><td>Corporate Persons from Barclay’s</td></tr>
                <tr><td>7</td><td>12.12.22</td><td>Workshop on Roadmap “To Get Into MAANG Companies”</td><td>Mr. Lakshay</td></tr>
                <tr><td>8</td><td>29-11.28-12.22</td><td>Induction Programme for BCA Students</td><td>IITM Faculty Members</td></tr>
                <tr><td>9</td><td>27-28.02.23</td><td>Corporate Mentorship Program-Corporate Behavioural Skills and Mentoring</td><td>Mr. Akash Grover, Ms. Sakshi Chopra</td></tr>
                <tr><td>10</td><td>12.03.23</td><td>Corporate Training Session on Inter Personal Training</td><td>Mr. Akshat Singhal</td></tr>
                <tr><td>11</td><td>04.03.23</td><td>Workshop on How to Make a Good Project Report</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>12</td><td>15.03.23</td><td>Workshop on Minor Project</td><td>Dr. Madhu Ruhil</td></tr>
                <tr><td>13</td><td>16.03.23</td><td>Workshop on Minor Project</td><td>Ms. Saguna Khajuria</td></tr>
                <tr><td>14</td><td>17.03.23</td><td>Workshop on Project Methodology</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>15</td><td>25.03.23</td><td>Case Study Competition: G-20 Nations</td><td>Dr. Sunitha Ravi & Ms. Sunakshi</td></tr>
                <tr><td>16</td><td>28.03.23</td><td>Student Exchange Programme</td><td>Dr. Shalini Vermani, Ms. Ruchi Malik</td></tr>
                <tr><td>17</td><td>12.04.23</td><td>Workshop on Minor Project</td><td>Dr. Latika Malhotra, Associate Professor, IITM</td></tr>
                <tr><td>18</td><td>13.04.23</td><td>Workshop on Research Project</td><td>Mr. Raghav Jain, Assistant Professor, IITM</td></tr>
                <tr><td>19</td><td>09.05.23</td><td>Workshop on Tally International Certification</td><td>Ms. Deepa Negi-BFSI Trainer, CQS Trainings Pvt. Ltd.</td></tr>
                <tr><td>20</td><td>26.05.23</td><td>Workshop on Financial Literacy</td><td>CA Nishant Kumar</td></tr>
                <tr><td>21</td><td>29.05.23</td><td>Workshop on Financial Derivatives</td><td>Mr. Himanshu Arora</td></tr>
            </tbody>
        </table>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</div>
    <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>

    <script>
(function(){
  var page = document.querySelector('.ec-page');
  if(!page) return;
  var tabs   = page.querySelectorAll('.ec-tab');
  var panels = page.querySelectorAll('.ec-panel');
  var search = document.getElementById('eventSearch');
  var countEl = document.getElementById('eventCount');

  // inject a hidden "no results" row into each table
  panels.forEach(function(panel){
    var tbody = panel.querySelector('tbody');
    if(!tbody) return;
    var head = panel.querySelector('thead tr');
    var cols = head ? head.children.length : 3;
    var tr = document.createElement('tr');
    tr.className = 'ec-no-results';
    var td = document.createElement('td');
    td.colSpan = cols;
    td.textContent = 'No events match your search.';
    tr.appendChild(td);
    tr.style.display = 'none';
    tbody.appendChild(tr);
  });

  function activePanel(){ return page.querySelector('.ec-panel.active'); }

  function applyFilter(){
    var panel = activePanel();
    if(!panel) return;
    var q = (search ? search.value : '').trim().toLowerCase();
    var shown = 0, total = 0;
    panel.querySelectorAll('tbody tr').forEach(function(tr){
      if(tr.classList.contains('ec-no-results')) return;
      total++;
      var match = q === '' || tr.textContent.toLowerCase().indexOf(q) !== -1;
      tr.style.display = match ? '' : 'none';
      if(match) shown++;
    });
    panel.querySelectorAll('.ec-no-results').forEach(function(nr){
      nr.style.display = (shown === 0) ? '' : 'none';
    });
    if(countEl) countEl.textContent = q ? (shown + ' of ' + total + ' events') : (total + ' events');
  }

  function selectTab(year){
    tabs.forEach(function(t){ t.classList.toggle('active', t.getAttribute('data-year') === year); });
    panels.forEach(function(p){ p.classList.toggle('active', p.getAttribute('data-year') === year); });
    if(search) search.value = '';
    applyFilter();
  }

  tabs.forEach(function(t){
    t.addEventListener('click', function(){ selectTab(t.getAttribute('data-year')); });
  });
  if(search) search.addEventListener('input', applyFilter);
  applyFilter();
})();
</script>
    <script src="myscript.js"></script>
</body>
</html>
