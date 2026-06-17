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
    <title>Conferences, Seminars & Webinars | IITM Janakpuri </title>
    <meta name="description" content="Explore conferences, seminars, and webinars at IITM Janakpuri that foster knowledge sharing, research discussions, and professional learning.">

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
        
        .carousel-image {
            width: 80%;
            height: auto;
            object-fit: cover;
            margin: 0 auto;
        }
        .carousel-item {
            width: 70vw;
            margin-left: 0;
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
      <h1 id="iipc" class="ec-hero-title">Conference / Seminars / Webinars</h1>
      <span class="ec-hero-rule"></span>
    </header>

    <div class="row">
      <!-- Sidebar -->
      <aside class="col-lg-3 ec-sidebar-col">
        <nav class="ec-sidebar" aria-label="Events sections">
          <h2 class="ec-sidebar-title">Events</h2>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/extra.php">Extra &amp; Co-Curricular Events</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
          <a class="ec-side-link active" href="https://iitmjanakpuri.com/events/conference.php">Conference / Seminars / Webinars</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/fdp.php">FDP</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a>
          <a class="ec-side-link" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
        </nav>
      </aside>

      <!-- Main content -->
      <main class="col-lg-9 ec-main">

        <!-- Intro -->
        <div class="ec-intro ec-intro--single">
          <article class="ec-card">
            <h2 class="ec-card-title">Overview</h2>
            <p>The routine academic gatherings play a vital role in facilitating the exchange of knowledge and research among our faculty members, students, and scholars. Serving as forums for engaging with experts in academia, they offer opportunities for information dissemination. Through conferences, seminars, and webinars, faculty members and students are exposed to contemporary paradigms and the latest advancements in their respective fields. Notably, our conferences have received funding support from esteemed government agencies such as the Ministry of Science and Technology, DRDO, and the Indian Council for Social Science Research (ICSSR).</p>
          </article>
        </div>

        <!-- Event records -->
        <section class="ec-events">
          <div class="ec-events-head">
            <h2 class="ec-section-title">Conferences &amp; Seminars by Year</h2>
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
              <h3 class="ec-subhead">Conferences</h3>
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
        <tr>
            <td>1</td>
            <td>07-08 Nov, 2025</td>
            <td>Springer International Conference: International Conference on Advances in Computational Intelligence and Applications – 2025</td>
            <td>
                Prof. (Dr.) Narayan C. Debnath, Founding Dean, School of Computing and Information Technology, Eastern International University (EIU), Vietnam;
                Prof. (Dr.) D. K. Lobiyal, Professor, JNU, Delhi, India;
                Prof. (Dr.) Rajkumar Buyya, Director, CLOUDS Laboratory, Australia;
                Prof. (Dr.) Jemal H. Abawajy, Professor, Deakin University, School of Information Technology, Australia;
                Prof. (Dr.) Rytis Maskeliunas, Kaunas University of Technology, Lithuania;
                Prof. (Dr.) Sanjay Misra, Senior Scientist at IFE, Halden, Norway;
                Prof. (Dr.) Vinod Sharma, Director, Ramnagar Campus, University of Jammu, India;
                Prof. (Dr.) Mansaf Alam, Professor, Department of Computer Science, Jamia Millia Islamia, Delhi, India;
                Mr. Amit Sharma, Senior Principal Data Architect, Infosys, Gurugram, Haryana, India;
                Prof. (Dr.) Renu Balyan, State University of New York College, New York, United States
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>20-21 Sept, 2025</td>
            <td>AICTE Sponsored: Driving Innovation and Sustainability: Bridging Management, Economics, Business, Social Science, and Entrepreneurship</td>
            <td>
                Prof. (Dr.) Anil Sahasrabudhe, Chairman NAAC;
                Prof. Devi Singh, Former Director, IIM Lucknow;
                Prof. Deepak Tandon, Distinguished Professor, IMS;
                Dr. Preeti Tak, Program Director of Doctoral Program, IIFT;
                Mr. Ishaan Taneja, First Gen Entrepreneur;
                Dr. Neha Puri, Associate Professor, Amity College of Commerce & Finance
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>13-14 Nov, 2025</td>
            <td>National Conference on Synergizing Media, Management & Technology: Driving Integrity, Innovation and Entrepreneurship for Viksit Bharat @ 2047 (SMMT2025)</td>
            <td>
                Prof. (Dr.) A.K. Saini, Director-Development, GGSIPU;
                Prof. (Dr.) Bandana Jha, Chairperson, Centre of Indian Languages, JNU;
                Prof. (Dr.) K. G. Sures, Director IHC, Former VC, Makhanlal Chaturvedi University;
                Prof. (Dr.) Durgesh Tripathi, Dean-USMC, GGSIPU;
                Prof. (Dr.) Sachin Kumar Mangla, O P Jindal Global University, Sonipat, Haryana;
                Prof. (Dr.) K. Srinivas, Head ICT & Project Management Unit, NIEPA;
                Dr. Preeti Malhotra, Assistant Professor, GD Goenka University, Gurugram, Haryana;
                Dr. Salini Rosaline, Assistant Professor, Department of Management Studies, NSUT, Delhi;
                Dr. Aarti Suryavanshi, Assistant Professor, MRIIRS, Faridabad, Haryana;
                Dr. Shikha Gupta, Sr. Associate Professor, LLDIM, Delhi
            </td>
        </tr>
    </tbody>
</table>

                      <h3 class="ec-subhead">Seminars / Webinars</h3>
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
        <tr><td>1</td><td>07-07-2025</td><td>Major-Minor Scheme for BBA Students (Batch 2024–28)</td><td>Dr. Amita Pathania</td></tr>
        <tr><td>2</td><td>22-08-2025</td><td>Resume Building</td><td>Ms. Parul Sharma</td></tr>
        <tr><td>3</td><td>26-08-2025</td><td>Dream, Discover, Develop: Shaping Your Career Through Study Abroad</td><td>Ms. Kiran Negi</td></tr>
        <tr><td>4</td><td>28-08-2025</td><td>Stress Management: Techniques for a Balanced Life</td><td>Ms. Preeti</td></tr>
        <tr><td>5</td><td>03-09-2025</td><td>Baat to Karni Padegi – Breaking the Silence</td><td>Dr. Shefali Chhicholia</td></tr>
        <tr><td>6</td><td>06-09-2025</td><td>Career Branding Essentials</td><td>Ms. Shruti Rohilla</td></tr>
        <tr><td>7</td><td>10-09-2025</td><td>An Insight on Global Immersion</td><td>Ms. Akanksha</td></tr>
        <tr><td>8</td><td>16-09-2025</td><td>From Campus to Corporate: Skills You Need for a Global Career</td><td>Mr. Abhijeet; Ms. Shweta; Mr. Shashant (Imarticus Learning)</td></tr>
        <tr><td>9</td><td>23-09-2025</td><td>Happiness in Wellness: Empowering Youth for Life Balance</td><td>Ms. Shubhangi Manav</td></tr>
        <tr><td>10</td><td>26-09-2025</td><td>Basics of Investment & Depository Services</td><td>Dr. Shikha Gupta</td></tr>
        <tr><td>11</td><td>13-10-2025</td><td>Skills that Matter: Finance & Analytics Essentials for 2025</td><td>Mr. Vaibhav Deepak Mehta</td></tr>
        <tr><td>12</td><td>06-11-2025</td><td>Seminar: Reinforcement Learning – Intelligent Decision Making for a Smarter & Safer Future</td><td>Dr. Abhinav Tomar (Asst. Professor, NSUT)</td></tr>
        <tr><td>13</td><td>11-11-2025</td><td>Man vs Machine or Man with Machine? The Future of Management in the AI Era</td><td>Dr. Akhil Damodaran (IILM University)</td></tr>
        <tr><td>14</td><td>11-11-2025</td><td>Your Attitude is Your Personal Brand</td><td>Ms. Arushi Grover (Ontario Public Service, Canada)</td></tr>
        <tr><td>15</td><td>12-11-2025</td><td>Building Strong Teams for Success: Teamwork Makes the Dream Work</td><td>Ms. Meena Solanki (Anderson College, Canada)</td></tr>
        <tr><td>16</td><td>13-11-2025</td><td>Fitness and Nutrition for Productivity: Keys to Leadership & Resilience</td><td>Ms. Ankita Pandey (FitwishAnkita, Singapore)</td></tr>
        <tr><td>17</td><td>17-11-2025</td><td>I Step</td><td>Dr. Madhu; CA Rohit Kumar</td></tr>
        <tr><td>18</td><td>21-11-2025</td><td>Decoding Consumers: Market Research & Insights as a Career</td><td>Ms. Prabhleen K. Bilkhu (Ventures Middle East, Dubai)</td></tr>
        <tr><td>19</td><td>16-10-2025</td><td>Webinar: The Double-Edged Sword of AI – Transforming Our Lives for Better and Worse</td><td>Expert Speakers from Academia & Industry</td></tr>

        <tr><td>20</td><td>16-09-2025</td><td>From Campus to Corporate: Skills You Need for a Global Career (MBA)</td><td>Mr. Abhijeet; Ms. Shweta Singh; Mr. Shashank (Imarticus Learning)</td></tr>
        <tr><td>21</td><td>17-09-2025</td><td>Placement Policy Briefing</td><td>Dr. Mandeep Singh</td></tr>
        <tr><td>22</td><td>17-09-2025</td><td>The Big Leap Panel</td><td>Mr. Nitish Gupta; Mr. Jeyadev Parthasarathy (XLRI Alumnus); Mr. Narendra Kumar Gupta</td></tr>
        <tr><td>23</td><td>22-09-2025</td><td>An Insight on Global Immersion</td><td>Ms. Surbhi Kamle; Ms. Sakshi Rastogi; Assistant HR Manager (UAS International)</td></tr>
        <tr><td>24</td><td>13-10-2025</td><td>Importance of Digital Literacy for Young Graduates</td><td>Mr. Alok Tiwari (Group One)</td></tr>
        <tr><td>25</td><td>28-10-2025</td><td>Navigating the Entrepreneurial Journey</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>26</td><td>31-10-2025</td><td>How to Reduce E-Waste</td><td>Dr. Meenakshi Kharb (Asia Pacific Institute of Management)</td></tr>
        <tr><td>27</td><td>01-11-2025</td><td>What the Industry Expects from Fresh Graduates</td><td>Ms. Pooja Sharma (Market Xcel)</td></tr>
        <tr><td>28</td><td>11-11-2025</td><td>Man vs Machine or Man with Machine? The Future of Management in the AI Era (MBA)</td><td>Dr. Akhil Damodaran (IILM University)</td></tr>
        <tr><td>29</td><td>11-11-2025</td><td>Your Attitude is Your Personal Brand (MBA)</td><td>Ms. Arushi Grover (Ontario Public Service, Canada)</td></tr>

        <tr><td>30</td><td>07-07-2025</td><td>Career Pathways After Graduation: Opportunities & Insights</td><td>Mr. Grijesh Gupta; Mr. Gurneet Singh (T.I.M.E.)</td></tr>
        <tr><td>31</td><td>29-08-2025</td><td>Integrating Data Science, AI, Cybersecurity and Privacy</td><td>Professor Gang Li (Deakin University)</td></tr>
        <tr><td>32</td><td>08-09-2025</td><td>Career Awareness Session: Exploring Pathways in Commerce</td><td>Mr. Pawan Kumar (T.I.M.E.)</td></tr>
        <tr><td>33</td><td>26-09-2025</td><td>TrueBlue & Beyond: Exploring Career Pathways in HR</td><td>Ms. Shrishti (NexGen Tek Inc.)</td></tr>
        <tr><td>34</td><td>28-09-2025</td><td>Career Ready: Jaro Education Drive & Careers in Sales/BD</td><td>Ms. Priya Saxena (Jaro Education)</td></tr>
        <tr><td>35</td><td>29-10-2025</td><td>Extension Lecture: Bridging Economics and Econometrics</td><td>Dr. Ruhee Mittal (SOL, University of Delhi)</td></tr>
        <tr><td>36</td><td>07-11-2025</td><td>Skill Enhancement Seminar: Investment Awareness</td><td>Prof. (Dr.) Neelam Tandon (Well Being Shiksha Foundation / SEBI Smart Trainer)</td></tr>
        <tr><td>37</td><td>18-11-2025</td><td>Alumni Talk: Beyond the Classroom – Real-World Career Choices</td><td>Ms. Rishita Gaba (Fresh Prints)</td></tr>
        <tr><td>38</td><td>10-01-2026</td><td>Career Ready: NTT Data Hiring Drive & Careers in Finance/Accounting</td><td>Mr. Gaurav Mahana (NTT Data)</td></tr>

        <tr><td>39</td><td>16-10-2025</td><td>Artificial Intelligence in Media: Opportunities, Challenges & Ethical Concerns</td><td>Dr. Nimish Kumar (Certified ADiRA Trainer)</td></tr>
        <tr><td>40</td><td>10-11-2025</td><td>Writing Skills for Media</td><td>Ms. Anshu Naithani (Chetana Manch News)</td></tr>
        <tr><td>41</td><td>17-11-2025</td><td>Overview of Investigating Journalism</td><td>Mr. Kanaiya Jha (Dainik Jagran)</td></tr>
        <tr><td>42</td><td>31-01-2026</td><td>News Sources in Sports Journalism: Structure, Access and Authenticity</td><td>Dr. Rajesh Kumar (University of Jharkhand)</td></tr>
        <tr><td>43</td><td>31-01-2026</td><td>Viral Justice & Digital Vigilantism</td><td>Dr. Sumant Kumar (Alliance University, Bangalore)</td></tr>
        <tr><td>44</td><td>29-10-2025</td><td>Seminar on Summer Training Project Competition</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>45</td><td>29-01-2026</td><td>Beyond the Resume</td><td>Mr. Tanishq Rawat</td></tr>
        <tr><td>46</td><td>10-02-2026</td><td>Campus to Corporate</td><td>Ms. Neha; Ms. Shivani Mangla</td></tr>
        <tr><td>47</td><td>12-02-2026</td><td>Union Budget 26-27</td><td>Dr. Amita Pathania</td></tr>
        <tr><td>48</td><td>12-02-2026</td><td>Union Budget 26-27 on IT Sector</td><td>Ms. Divya Gupta</td></tr>
        <tr><td>49</td><td>12-02-2026</td><td>Inside the Model United Nations Conference</td><td>Ms. Paridhi Rajput</td></tr>
        <tr><td>50</td><td>13-02-2026</td><td>Union Budget 26-27</td><td>Dr. Amita Pathania</td></tr>
        <tr><td>51</td><td>16-02-2026</td><td>AI & the Future of Corporate Leadership</td><td>Mr. Nihar Suryavanshi</td></tr>
        <tr><td>52</td><td>24-02-2026</td><td>Financial Fitness for Next Gen</td><td>Dr. Sharan Kumar</td></tr>
        <tr><td>53</td><td>27-02-2026</td><td>Seminar on Sensationalism vs Public Interest</td><td>Mr. Vikas Kumar</td></tr>
        <tr><td>54</td><td>17-03-2026</td><td>Mock Personal Interview</td><td>Mr. Gaurav Joshi; Ms. Dwishojoyee Banerjee</td></tr>
        <tr><td>55</td><td>13-04-2026</td><td>Global Certification Session</td><td>Prof. (Dr.) Deepali Saluja</td></tr>
        <tr><td>56</td><td>18-04-2026</td><td>Mock Press Conference</td><td>Mr. Suchivrat Arya</td></tr>
    </tbody>
</table>
                 
                   
                   
                   
                   
                   
                   
                   
                                </div>
            <div class="ec-panel" data-year="2024-25">
              <h3 class="ec-subhead">Conferences</h3>
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
               
                    <tr><td>	1	</td><td>	24-25.01.2025	</td><td>	International conference on research and innovations in AI Environment, management and sustainability(ICAIMS-Virtual 2025)	</td><td>	Prof.(Dr.) Sanjay Bhayani, Dean, Professor and Head of Business Management, Saurashtra University, Rajkot, Gujarat Dr. Shweta Singh, Economics Times Most Inspiring Women Leader 2023-24, Entrepreneur, Speaker & Author, Delhi, India Dr. Anukrati Sharma presided over the event, guiding discussions and paper presentations. Dr. Sachin Gupta, Assistant Professor, Department of Business Administration, Mohanlal Sukhadia University, Udaipur, Rajasthan Dr. Albattat Ahmad, Associate Professor & Program Leader, Asia Pacific University of Technology & Innovation (APU), Malaysia Eva Tuba, Assistant Professor, Computer Science, Serbia & Visiting Assistant Professor, Trinity University, United States Prof.(Dr.) Roopali Sharma, Professor, Finance & International Business, Birla Institute of Technology, Mesra Dr. Kritika Tekwani, Academic Associate Strategy Area, IIM - Ahmedabad Prof.(Dr.) Sarwat Jahan, Ph.D., Marketing & Sustainability Professor, Prolific Researcher, Corporate Trainer, Learning & Development Manager, Higher Education Voice, Data Scientist, Dr. Vikas Garg, Associate (Research), Faculty of Finance, Symbiosis Institute of Business Management (SIBM), Noida Dr. Latika Vaishak Shanbhag, Joint Academic Dean for DBA, IIBM Institute of Business Management Dr. Nosile O’Connor, Senior University Lecturer, Educational Developer and Researcher, Technological University of the Shannon, Ireland Dr. Sampath Siriwardena, Senior Lecturer, Head of the Department, CINEC International Hotel School, CINEC Campus, Sri Lanka Milan Tuba, Professor of Computer Science, Mathematics and Electrical Engineering, Head of Artificial Intelligence Project, Singidunum University Belgrade, Vice Rector for Research, Sinergija University, BIH Dr. Divya Girdhar, Associate Professor & Head of Department, Media Studies, Maharishi Markandeshwar (Deemed to be University)	</td></tr>

            </tbody>
        </table>
                      <h3 class="ec-subhead">Seminars / Webinars</h3>
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
                <tr><td>	1	</td><td>	30.08.2024	</td><td>	Waste management and segregation	</td><td>	Ms. Devanshi Chhabra	</td></tr>
                    <tr><td>	2	</td><td>	02.09.2024	</td><td>	International webinar on Data Analysis-SAS	</td><td>	Ms.Amanpreeet Kaur Sara	</td></tr>
                    <tr><td>	3	</td><td>	13.09.2024	</td><td>	World Ozone Day	</td><td>	Mr. Gautam Kumar Singh	</td></tr>
                    <tr><td>	4	</td><td>	20.09.2024	</td><td>	Career sharing and interviewing skills to be successful at the workshop	</td><td>	Deutsche Bank	</td></tr>
                    <tr><td>	5	</td><td>	24.09.2024	</td><td>	General Cancer Awareness	</td><td>	Dr. Sushant Mittal	</td></tr>
                    <tr><td>	6	</td><td>	1/10/2024	</td><td>	Seminar on navigating the future: AI, Machine Learning, and Data science in the age of Innovation	</td><td>	Ms. Komal Sharma	</td></tr>
                    <tr><td>	7	</td><td>	8/10/2024	</td><td>	How to manage E-Waste	</td><td>	Ms. Priyanshi Ahuja	</td></tr>
                    <tr><td>	8	</td><td>	09.10.2024	</td><td>	Introduction to Cyber security	</td><td>	Mr Kandarp Kumar Thakur	</td></tr>
                    <tr><td>	9	</td><td>	11-11.2024	</td><td>	Strategies to do well in Pi though MOCK PI	</td><td>	Mr. Amit Poddar	</td></tr>
                    <tr><td>	10	</td><td>	17.01.2025	</td><td>	AI made simple: understanding the tech behind the buzz	</td><td>	Mr. Sanidhya Goel	</td></tr>
                    <tr><td>	11	</td><td>	11.3.25	</td><td>	Interface & Inheritance in Java	</td><td>	Ms. Kanchan Choudhary	</td></tr>
                    <tr><td>	12	</td><td>	05.05.2025	</td><td>	Transforming Research Into Patents-Strategies for Academic Innovators	</td><td>	Ms. Pooja Menon	</td></tr>
                    <tr><td>	13	</td><td>	31.01.2025	</td><td>	Basics of Mutual Funds 	</td><td>	Dr. Shikha Gupta	</td></tr>
                    <tr><td>	14	</td><td>	30.01.2025	</td><td>	Basics of Capital Market	</td><td>	Dr. Shikha Gupta	</td></tr>
                    <tr><td>	15	</td><td>	25.01.2025	</td><td>	Basics of investment and Depositories	</td><td>	Dr. Shikha Gupta	</td></tr>
                    <tr><td>	16	</td><td>	22.01.2025	</td><td>	 Global Academic Pursuit	</td><td>	Ms. Vidhu Singh	</td></tr>
                    <tr><td>	17	</td><td>	06.02.25	</td><td>	Gender sensitization	</td><td>	Ms. Saniya Azim	</td></tr>
                    <tr><td>	18	</td><td>	7.8.24	</td><td>	Alumni Interaction for BBA	</td><td>	Ms. Bhawana 	</td></tr>
                    <tr><td>	19	</td><td>	16.8.24	</td><td>	Effective Leadership and Human Relations	</td><td>	Dr. Kawaljeet Kaur	</td></tr>
                    <tr><td>	20	</td><td>	28.8.24	</td><td>	Cyber Security	</td><td>	Mr. Partho Pandya	</td></tr>
                    <tr><td>	21	</td><td>	31.01.2025	</td><td>	Seminar on Relevance of International Opportunity in Career	</td><td>	Ms. Aparna	</td></tr>
                    <tr><td>	22	</td><td>	11.7.24	</td><td>	Union Budget 2024	</td><td>	Ms. Parul Sharma	</td></tr>
                    <tr><td>	23	</td><td>	12.7. 24	</td><td>	Union Budget 2024	</td><td>	Ms. Amita Pathania	</td></tr>
                    <tr><td>	24	</td><td>	13.7. 24	</td><td>	Union Budget 2024	</td><td>	Dr. Madhu Ruhil	</td></tr>
                    <tr><td>	25	</td><td>	17.7. 24	</td><td>	Union Budget 2024	</td><td>	Ms. Shweta Aneja	</td></tr>
                    <tr><td>	26	</td><td>	17.7. 24	</td><td>	Union Budget 2024	</td><td>	Mr. Rohit Kumar	</td></tr>
                    <tr><td>	27	</td><td>	17.7. 24	</td><td>	Union Budget 2024	</td><td>	Ms. Shweta Aneja	</td></tr>
                    <tr><td>	28	</td><td>	19.7.24	</td><td>	Gender Sensitization 	</td><td>	Dr. Bhawna 	</td></tr>
                    <tr><td>	29	</td><td>	6.11.24	</td><td>	How to bell the CAT	</td><td>	Mr. Nihar Suryavanshi	</td></tr>
                    <tr><td>	30	</td><td>	6.11.24	</td><td>	Study Abroad: A Pathway to Global Citizens	</td><td>	Ms. Megha Manchanda	</td></tr>
                    <tr><td>	31	</td><td>	6.11.24	</td><td>	MBA as a Career Option	</td><td>	Mr. Anuraj	</td></tr>
                    <tr><td>	32	</td><td>	11.11.24	</td><td>	Strategies to do well in PI through MOCK PI	</td><td>	Mr. Amit Poddar	</td></tr>
                    <tr><td>	33	</td><td>	14.11.24	</td><td>	Implementing Responsible Business Conduct in Healthcare Practices	</td><td>	Dr. Jayesh Lele	</td></tr>
                    <tr><td>	34	</td><td>	31.1.25	</td><td>	Relevance of International Opportunity in CAreer	</td><td>	Ms. Arpana & Ms. Meghna	</td></tr>
                    <tr><td>	35	</td><td>	6.2.25	</td><td>	Union Budget	</td><td>	Mr. Puneet Chawla	</td></tr>
                    <tr><td>	36	</td><td>	6.2.25	</td><td>	Gender Sensitization 	</td><td>	Dr. Bhawna	</td></tr>
                    <tr><td>	37	</td><td>	6.2.25	</td><td>	Happiness Session	</td><td>	Ms. Saniya Azim	</td></tr>
                    <tr><td>	38	</td><td>	6.2.25	</td><td>	Union Budget	</td><td>	Dr. Amita Pathania	</td></tr>
                    <tr><td>	39	</td><td>	8.2.25	</td><td>	Union Budget	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	40	</td><td>	10.2.25	</td><td>	Union Budget on Infrastructure Sector	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	41	</td><td>	10.2.25	</td><td>	Union Budget	</td><td>	Ms. Parul Sharma	</td></tr>
                    <tr><td>	42	</td><td>	13.2.25	</td><td>	Union Budget	</td><td>	Ms. Shweta Aneja	</td></tr>
                    <tr><td>	43	</td><td>	22.2.25	</td><td>	Mental Health Awareness 	</td><td>	Dr. Renu Bhatia	</td></tr>
                    <tr><td>	44	</td><td>	22.2.25	</td><td>	Understanding Online/In-house Training /Apprenticeship Training 	</td><td>	Dr. Deepika Arora	</td></tr>
                    <tr><td>	45	</td><td>	6-7.2.25	</td><td>	Union Budget-Key Area Education Sector 	</td><td>	Ms. Manisha	</td></tr>
                    <tr><td>	46	</td><td>	11.3.25	</td><td>	Exploring Opportunities and Different Streams of Management	</td><td>	Mr. Dhruv Sawhney	</td></tr>
                    <tr><td>	47	</td><td>	4.3.25	</td><td>	Cancer Awareness	</td><td>	Dr. Neeti Leekha Chabra	</td></tr>
                    <tr><td>	48	</td><td>	11.3.25	</td><td>	Capital Market & Career  Opportunities	</td><td>	Ms. Himani Lath	</td></tr>
                    <tr><td>	49	</td><td>	13.01.2025	</td><td>	Webinar under KARMA- “The Impact of Technology on Global Politics: AI, Surveillance, and National Security”	</td><td>	Dr. Sumat Kumar	</td></tr>
                    <tr><td>	50	</td><td>	13.01.2025	</td><td>	Webinar under KARMA-- Webinar on Self Care and  Wellness : Tools for Mental Wellbeing 	</td><td>	Dr. Adhrit Chandra Tripathi	</td></tr>
                    <tr><td>	51	</td><td>	14.01.2025	</td><td>	Webinar under KARMA- “ Environmental Issues and The Role of Media”	</td><td>	Dr. Rahul Amin	</td></tr>
                    <tr><td>	52	</td><td>	15.01.2025	</td><td>	“The role of citizen journalism in conflict reporting”	</td><td>	Dr.Aaqib Anwar Butt	</td></tr>
                
            </tbody>
        </table>
                    </div>
            <div class="ec-panel" data-year="2023-24">
              <h3 class="ec-subhead">Conferences</h3>
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
                <tr>
                    <td>1</td>
                    <td>22-23.01.2024</td>
                    <td>Two Days ICSSR Sponsored National Conference on "NEP2020: A Paradigm Shift in Media Education and ensuring quality with the Global Framework of the G20”</td>
                    <td>Prof. Narayan C. Debnath, Founding Dean, School of Computing and Information Technology, Eastern International University, Vietnam, Dr. Durgesh Tripathi, Associate Professor - USMC and Prof. Dr. Rachita Rana, Director, IITM.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>21-22.6.24</td>
                    <td>Two Days International Conference on Advances in Computational Intelligence and Applications</td>
                    <td>Prof. (Dr.) Polkowaski, Dr. Ashish Sharma, Dr. Virendra Yadav</td>
                </tr>
            </tbody>
        </table>

                <h3 class="ec-subhead">Seminars / Webinars</h3>
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
                <tr><td>1</td><td>25.8.23</td><td>Bhartiya Gyan Prampara</td><td>Prof. Narayan Prasad Mishra</td></tr>
                <tr><td>2</td><td>31.8.23</td><td>Waste Management</td><td>Ms. Shubham Thareja & Ms. Vani Grover</td></tr>
                <tr><td>3</td><td>18.10.23</td><td>Transformative Intelligence Techniques in Industries</td><td>Mr. Vaseem Durrani</td></tr>
                <tr><td>4</td><td>18.10.23</td><td>Risk Management: Context, Scope and Future in India</td><td>Mr. Pineet Malhotra</td></tr>
                <tr><td>5</td><td>18.10.23</td><td>Impact of Fundamental Rights on Modern Society</td><td>Mr. Aditya Ojha</td></tr>
                <tr><td>6</td><td>28.10.23</td><td>How to be a Good Media Communicator</td><td>Ms. Surbhi</td></tr>
                <tr><td>7</td><td>18.11.23</td><td>Career Sharing and Personal Interviewing Skills to be Successful at Workplace</td><td>Dr. Madhu</td></tr>
                <tr><td>8</td><td>20.11.23</td><td>Exploring Tomorrow's Corporate Landscape</td><td>Mr. Ramit Bedi</td></tr>
                <tr><td>9</td><td>21.11.23</td><td>Embracing Diversity and Inclusion</td><td>Mr. Ankit</td></tr>
                <tr><td>10</td><td>20.12.23</td><td>Navigating Trends and Challenges in Sustainable Textiles in India</td><td>Ms. Prajaktya L. Verma, Joint Secretary, Ministry of Textiles</td></tr>
                <tr><td>11</td><td>18.10.23</td><td>Transformative Intelligence Technologies in Industries</td><td>Mr. Vaseem Durrani</td></tr>
                <tr><td>12</td><td>1.2.24</td><td>PHD Chamber for Budget Viewing Session</td><td>PHD Chamber of Commerce</td></tr>
                <tr><td>13</td><td>12.02.2024</td><td>Seminar on Business Intelligence using Power BI</td><td>Mr. Vaseem Durrani, Director and Co-founder of ACODS</td></tr>
                <tr><td>14</td><td>23.02.2024</td><td>Power Seminar on Internet of Things in Collaboration with ICT Academy</td><td>Mr. Tapan Kapoor</td></tr>
                <tr><td>15</td><td>26.02.2024</td><td>Seminar on How to Get into MAANG Companies</td><td>Mr. Monu Kumar</td></tr>
                <tr><td>16</td><td>16.03.2024</td><td>Seminar on Accelerating Sustainable Livelihood in Rural and Tribal India (Ekal Study Circle Meet)</td><td>Prof. Dinesh Khattar</td></tr>
                <tr><td>17</td><td>20.03.2024</td><td>Seminar on Mastering Profile Building: Strategies for Career Growth</td><td>Mr. Parveen Khanna</td></tr>
                <tr><td>18</td><td>18.04.2024</td><td>Seminar on Future Career Options for BCA Students</td><td>Prof. R Chadda</td></tr>
                <tr><td>19</td><td>30.3.24</td><td>Preserving the Blue Gold: National Webinar on Water Conservation</td><td>Ms. Shreya Das</td></tr>
            </tbody>
        </table>
        
        
        
             </div>
            <div class="ec-panel" data-year="2022-23">
              <h3 class="ec-subhead">Conferences</h3>
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
                <tr>
                    <td>1</td>
                    <td>28-29.04.23</td>
                    <td>International Conference on Industry 4.0 and Key Drivers of Sustainability in Amrit Kaal</td>
                    <td>
                        Dr. Deepak Tandon, Mr. Vijay Kumar, Prof. (Dr.) G.S Saun, Prof. (Dr.) Joanna, Mr. J. S. Kamyotra, Prof. (Dr.) Deepak Tandon, Mr. Vijay Gupta, Mr. J.S. Kamyotra, Prof. (Dr.) Resma Nasreen, Dr. Vishal Khatri
                    </td>
                </tr>
            </tbody>
        </table>
                <h3 class="ec-subhead">Seminars / Webinars</h3>
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
                <tr>
                    <td>1</td>
                    <td>15.10.22</td>
                    <td>Webinar on Advantages and Benefits of AWS Cloud Computing</td>
                    <td>Mr. Raushan Raj</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4.11.22</td>
                    <td>Webinar on Career in Social Sector</td>
                    <td>Ms. Deepti Dwivedi</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>14.11.22</td>
                    <td>Seminar on Menstrual Hygiene</td>
                    <td>Ms. Mansvi Singh</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>29.11.22</td>
                    <td>Seminar on Organ Donation</td>
                    <td>Ms. Simran Anand</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>20.03.23</td>
                    <td>Conclave on G-20 Nations- Building and Sustaining Prosperity</td>
                    <td>Dr. Jyoti Bhambhani</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>22.03.23</td>
                    <td>Symposium on G-20 Summit</td>
                    <td>Dr. Diksha Khera, Dr. Madhu Ruhil, Ms. Saguna Khajuria, Ms. Komal Goel</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>30.03.23</td>
                    <td>Seminar on Water Conservation: Rain Water Harvesting</td>
                    <td>Ms. Himanshi Pandey & Ms. Aaditri Sharma</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>03.05.23</td>
                    <td>Seminar on Cloud Ops Essentials</td>
                    <td>Mr. Piyush Pandey, CEO Interexus, Delhi</td>
                </tr>
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
