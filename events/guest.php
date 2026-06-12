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
    <title>IITM | Guest Lectures</title>

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
      <h1 id="iipc" class="ec-hero-title">Guest Lectures</h1>
      <span class="ec-hero-rule"></span>
    </header>

    <div class="row">
      <!-- Sidebar -->
      <aside class="col-lg-3 ec-sidebar-col">
        <nav class="ec-sidebar" aria-label="Events sections">
          <h2 class="ec-sidebar-title">Events</h2>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/extra.php">Extra &amp; Co-Curricular Events</a>
          <a class="ec-side-link active" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/conference.php">Conference / Seminars / Webinars</a>
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
            <p>Distinguished personalities from both the academia and the corporate sphere are invited to impart their valuable insights to the students, thereby enhancing their learning journey and broadening their understanding of the global business environment.</p>
          </article>
        </div>

        <!-- Event records -->
        <section class="ec-events">
          <div class="ec-events-head">
            <h2 class="ec-section-title">Guest Lectures by Year</h2>
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
            <button class="ec-tab" type="button" data-year="2021-22">2021-22</button>
          </div>

          <div class="ec-panels">
            <div class="ec-panel active" data-year="2025-26">
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
                <tr><td>1</td><td>05.08.2025</td><td>BBA Orientation Programme</td><td></td></tr>
                <tr><td>2</td><td>05.08.2025</td><td>MBA Orientation Programme</td><td></td></tr>
                <tr><td>3</td><td>04-08.08.2025</td><td>Deeksharambh</td><td>Mr. Shams Tahir Khan, Dr. Salini Rosaline</td></tr>
                <tr><td>4</td><td>06-08.08.2025</td><td>Deeksharambh</td><td>Ms. Saguna Khajuria</td></tr>
                <tr><td>5</td><td>25.08.2025</td><td>Smart Finance, Smart Future</td><td>Mr. Manoj Gupta</td></tr>
                <tr><td>6</td><td>15.09.2025</td><td>Financial Discipline</td><td>Ms. Himani Lath</td></tr>
                <tr><td>7</td><td>24.09.2025</td><td>Mastering GD & PI</td><td>Dr. Pavithra Ganesh</td></tr>
                <tr><td>8</td><td>13.10.2025</td><td>Session on Digital Marketing Trends</td><td>Dr. Parul Manchanda</td></tr>
                <tr><td>9</td><td>28.10.2025-01.11.2025</td><td>Subject Expert Lecture Series</td><td>Department of Management Studies</td></tr>
                <tr><td>10</td><td>29.10.2025</td><td>Extension Lecture</td><td>Ms. Disha Garg, Dr. Ruhee Mittal</td></tr>
                <tr><td>11</td><td>06.11.2025</td><td>Fire Safety and Preparedness Session</td><td>Mr. Amit Kumar</td></tr>
                <tr><td>12</td><td>10.11.2025</td><td>Writing Skills for Media</td><td>Ms. Anshu Naithani</td></tr>
                <tr><td>13</td><td>13.11.2025</td><td>Aptitude Enhancement for Placement Success</td><td>Mr. Navneet Anand</td></tr>
                <tr><td>14</td><td>17.02.2026</td><td>Anchoring and Reporting in Television News Channel</td><td>Mr. Suchivrat Arya</td></tr>
                <tr><td>15</td><td>20.02.2026</td><td>Digital Marketing and Meta Ads</td><td>Mr. Karan Sethia</td></tr>
                <tr><td>16</td><td>23.02.2026</td><td>Education to Employment</td><td>Mr. Satyamedh Nandedkar</td></tr>
                <tr><td>17</td><td>12.03.2026</td><td>AI and Robotics in Marketing</td><td>Mr. Neeraj Maddheshya</td></tr>
                <tr><td>18</td><td>09.04.2026</td><td>Awareness Session on E-Waste</td><td>Mr. Vivek Vishal</td></tr>
                <tr><td>19</td><td>18.04.2026</td><td>Crafting a Brand Identity</td><td>Mr. Rashid Ali</td></tr>
                <tr><td>20</td><td>21.04.2026</td><td>Performance Market</td><td>Mr. Pankaj Arya</td></tr>
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
                <tr><td>	1	</td><td>	11.09.2024-14.09.2024	</td><td>	A session for the CISCO placement drive	</td><td>	Mr. Praveen Kumar	</td></tr>
                    <tr><td>	2	</td><td>	26.09.2024-28.09.2024	</td><td>	A session for the CISCO recruitment  drive	</td><td>	Ms. Ruchika	</td></tr>
                    <tr><td>	3	</td><td>	29.08.2024	</td><td>	AI Digital Marketing	</td><td>	Mr. Jay Dattani	</td></tr>
                    <tr><td>	4	</td><td>	27.09.2024	</td><td>	Minor Project (MCA-269) Briefing-MCA Sem-III	</td><td>	Ms. Kavita Srivastava	</td></tr>
                    <tr><td>	5	</td><td>	27.09.2024-04.10.2024	</td><td>	Pre-placement session for the upcoming placement drive	</td><td>	Mr. Praveen Kumar	</td></tr>
                    <tr><td>	6	</td><td>	27.09.2024-04.10.2024	</td><td>	Pre-placement session for the upcoming placement drive	</td><td>	Mr. Praveen Kumar	</td></tr>
                    <tr><td>	7	</td><td>	01.10.2024	</td><td>	Minor Project (MCA-169) Briefing-MCA Sem-1	</td><td>	Ms. Kavita Srivastava	</td></tr>
                    <tr><td>	8	</td><td>	03.10.2024	</td><td>	Deep Learning & its Applications	</td><td>	Mr. Usman 	</td></tr>
                    <tr><td>	9	</td><td>	14.10.2024	</td><td>	Introduction to the industrial IOT ecosystem 	</td><td>	Ms. Nabeela Hasan	</td></tr>
                    <tr><td>	10	</td><td>	05.11.2024	</td><td>	Mastering first impressions: essential skills for self-introduction and resume writing”	</td><td>	Dr. Ratika Malhotra	</td></tr>
                    <tr><td>	11	</td><td>	06.11.2024	</td><td>	Pre-placement session on “soft skills & interview & business Etiquettes”	</td><td>	Ms. Kavita Rajput	</td></tr>
                    <tr><td>	12	</td><td>	06.11.2024	</td><td>	External Pre-placement for MCA final year , by IIPC	</td><td>	Ms. Kavita Rajput	</td></tr>
                    <tr><td>	13	</td><td>	08.11.2024	</td><td>	Strategic thinking and decision-making for tomorrow’s managers	</td><td>	Ms. Shilpi Kulshrestha	</td></tr>
                    <tr><td>	14	</td><td>	12.11.2024	</td><td>	Pre-placement for Mock interview drive for MCA final year	</td><td>	Mr. Deepak Sharma	</td></tr>
                    <tr><td>	15	</td><td>	13.12.2024	</td><td>	Pre-placement Session for SAP Labs online test (Coding session)	</td><td>	Mr. Divyansh Jha 	</td></tr>
                    <tr><td>	16	</td><td>	17.12.2024	</td><td>	Pre-placement Session for SAP Labs Interview process	</td><td>	Mr. Divyansh Jha 	</td></tr>
                    <tr><td>	17	</td><td>	19.12.2024	</td><td>	Pre-placement session for galytix (Batch: 2022-25)	</td><td>	Mr. Gautam Kohli	</td></tr>
                    <tr><td>	18	</td><td>	19-12-2024	</td><td>	Pre-placement session for Galytix (Batch:2023-25)	</td><td>	Mr. Gautam Kohli	</td></tr>
                    <tr><td>	19	</td><td>	23.12.2024	</td><td>	Industry Expectations for online Interview and assessments for MCA 2025 by IIPC	</td><td>	Mr. Kamal Walia	</td></tr>
                    <tr><td>	20	</td><td>	25.02.2025	</td><td>	“Cracking the code: Preparing for deloitte’s national-level assessment”	</td><td>	Mr. Ruchir Midha	</td></tr>
                    <tr><td>	21	</td><td>	04.02.2025	</td><td>	Roadmap to data structure and algorithms, problem solving	</td><td>	Mr. Rajesh Gupta	</td></tr>
                    <tr><td>	22	</td><td>	19.02.2025	</td><td>	Yoga Session 	</td><td>	Dr. Gopal Singh Latwal	</td></tr>
                    <tr><td>	23	</td><td>	21.02.2025	</td><td>	Aptitude Session 	</td><td>	Ms. Kavita Srivastava	</td></tr>
                    <tr><td>	24	</td><td>	27.02.2025	</td><td>	The Hackathon Playbook: Compete, win & get Industry ready	</td><td>	Mr.Salik Inam	</td></tr>
                    <tr><td>	25	</td><td>	4.3.25	</td><td>	Fundamental of Cloud Computing	</td><td>	Mr. Dheeraj Kumar	</td></tr>
                    <tr><td>	26	</td><td>	8.3.25	</td><td>	KNIME – Platform for Data Analytics and Machine Learning	</td><td>	Dr. Nabela Hasan	</td></tr>
                    <tr><td>	27	</td><td>	8.3.25	</td><td>	Generative AI	</td><td>	Dr. Arshad Ali	</td></tr>
                    <tr><td>	28	</td><td>	18.3.25	</td><td>	Transforming Industries with IOT, Drones and Robotics	</td><td>	Ms. Prerna Ajmani	</td></tr>
                    <tr><td>	29	</td><td>	11.04.2025	</td><td>	Digital Transformation in Industry	</td><td>	Dr. Ruchi Kawatra	</td></tr>
                    <tr><td>	30	</td><td>	21.04.25	</td><td>	Predictive Power: A Practical Guide to Data Analytics and Machine Learning	</td><td>	Dr. Simmi Chawla Madaan	</td></tr>
                    <tr><td>	31	</td><td>	20.03.2025	</td><td>	Generative AI and LLM	</td><td>	Mr. Neeraj Rathaur	</td></tr>
                    <tr><td>	32	</td><td>	21.03.2025	</td><td>	Data Science and its Future in India	</td><td>	Er. Kamal Kumar Ranga	</td></tr>
                    <tr><td>	33	</td><td>	09.09.24	</td><td>	Subject Expert Lecture On Finance And Accounting: Need Of The Hour	</td><td>	Mr. Rohan Chopra	</td></tr>
                    <tr><td>	34	</td><td>	7/2/2025	</td><td>	Union Budget	</td><td>	Ms. Nisha	</td></tr>
                    <tr><td>	35	</td><td>	9/9/2024	</td><td>	“Finance and Accounting: Need of the hour”	</td><td>	Mr. Rohan Chopra	</td></tr>
                    <tr><td>	36	</td><td>	03-05.03.2025	</td><td>	3-day Stress Management medication camp	</td><td>	Dr. Arvind Pal Tomar	</td></tr>
                    <tr><td>	37	</td><td>	11.11.24	</td><td>	Session on “how to do well in PI with Mock PI practice	</td><td>	Mr. Amit Poddar 	</td></tr>
                    <tr><td>	38	</td><td>	20.08.2024-03.09.2024	</td><td>	Bridge course	</td><td>	Dr. Vikas Bharara	</td></tr>
                    <tr><td>	39	</td><td>	27.09.2024	</td><td>	Global Trade patterns Post COVID	</td><td>	Ms. Mahima Khurana	</td></tr>
                    <tr><td>	40	</td><td>	29.08.2024	</td><td>	Ai in Digital marketing	</td><td>	Mr. Jay Dattani 	</td></tr>
                    <tr><td>	41	</td><td>	09.09.204	</td><td>	Finance and Accounting	</td><td>	Mr. Rohan Chopra 	</td></tr>
                    <tr><td>	42	</td><td>	03.10.2024	</td><td>	Mastering GD & PI	</td><td>	Dr. Neha arora	</td></tr>
                    <tr><td>	43	</td><td>	04.10.2024	</td><td>	Green Finance 	</td><td>	Mr. Swaraj Manchandana	</td></tr>
                    <tr><td>	44	</td><td>	08.10.2024	</td><td>	Relevance of ancient knowledge in the contemporary world	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	45	</td><td>	08.10.2024-08.11.2024	</td><td>	Keys to accelerate success	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	46	</td><td>	09.10.2024	</td><td>	Financial freedom	</td><td>	Cs Rakesh Chawla	</td></tr>
                    <tr><td>	47	</td><td>	11.10.2024	</td><td>	Sovereign green bonds	</td><td>	Ms. Megha	</td></tr>
                    <tr><td>	48	</td><td>	14.10.24-08.11.2024	</td><td>	Knowledge series	</td><td>	Ms. Amita Pathania	</td></tr>
                    <tr><td>	49	</td><td>	04-09.11.2024	</td><td>	Mastering Investments	</td><td>	Dr. Shikha Gupta 	</td></tr>
                    <tr><td>	50	</td><td>	05.11.2024	</td><td>	Stand out from the start	</td><td>	Dr. Ratika Malhotra	</td></tr>
                    <tr><td>	51	</td><td>	09.11.2024	</td><td>	Navigating your future	</td><td>	Mr. Madhav	</td></tr>
                    <tr><td>	52	</td><td>	19.12.2024	</td><td>	Pre placement Session	</td><td>	Dr. Pankaj Varshney	</td></tr>
                    <tr><td>	53	</td><td>	29.01.2025-20.02.2025	</td><td>	Excel & power BI	</td><td>	Mr. Ranjeet Prajapti	</td></tr>
                    <tr><td>	54	</td><td>	30.01.2025	</td><td>	Navigating the hiring process	</td><td>	Mr. Pravir singh	</td></tr>
                    <tr><td>	55	</td><td>	04.02.2025	</td><td>	The interview drill	</td><td>	Mr. Amit Poddar 	</td></tr>
                    <tr><td>	56	</td><td>	07.02.2025	</td><td>	Union budget 	</td><td>	Ms. Nisha	</td></tr>
                    <tr><td>	57	</td><td>	26.02.25	</td><td>	Mastering the JLL campus drive 	</td><td>	Mr. Shaurya Verma	</td></tr>
                    <tr><td>	58	</td><td>	23.08.2024	</td><td>	Building a start-up from idea to executions	</td><td>	Prof. (Dr.) Abhishek Jain	</td></tr>
                    <tr><td>	59	</td><td>	06.09.2024	</td><td>	Resume Writing: an essential tool for career planning	</td><td>	Dr. Ishita Adhikari	</td></tr>
                    <tr><td>	60	</td><td>	14.09.2024	</td><td>	Effective presentation skills	</td><td>	Ms. Yashvi Kumar	</td></tr>
                    <tr><td>	61	</td><td>	14.09.2024	</td><td>	Use of AI marketing	</td><td>	Dr. Anurag tiruwa	</td></tr>
                    <tr><td>	62	</td><td>	18.09.2024	</td><td>	College to career: key skills for success	</td><td>	Ms. Arleen	</td></tr>
                    <tr><td>	63	</td><td>	18.09.24	</td><td>	Alumni Talk Business Strategy and development	</td><td>	Mr. Himanshu Chabra	</td></tr>
                    <tr><td>	64	</td><td>	18.09.24	</td><td>	College to career: key skills for success	</td><td>	Ms. Arleen	</td></tr>
                    <tr><td>	65	</td><td>	26.09.2024	</td><td>	Career counselling	</td><td>	Mr. Amit Poddar	</td></tr>
                    <tr><td>	66	</td><td>	27.09.2024	</td><td>	Global trade patterns post Covid-India’s role and challenges	</td><td>	Ms. Mahima Khurana 	</td></tr>
                    <tr><td>	67	</td><td>	27.09.2024	</td><td>	Talent search examination	</td><td>	Mr. Nikhil	</td></tr>
                    <tr><td>	68	</td><td>	30.09.2024	</td><td>	Emergency Fire mock drill	</td><td>	Disaster Management committee	</td></tr>
                    <tr><td>	69	</td><td>	03.10.2024	</td><td>	Career Growth hacks	</td><td>	Dr. Manchandana	</td></tr>
                    <tr><td>	70	</td><td>	10.10.2024	</td><td>	Teaming for success: a hand-on team building	</td><td>	Prof. (Dr.) Deepali Saluja	</td></tr>
                    <tr><td>	71	</td><td>	23.11.2024	</td><td>	Explore pathways to international education	</td><td>	Ms. Shaminie Chetty	</td></tr>
                    <tr><td>	72	</td><td>	20.12.2024	</td><td>	Excel essentials for galytix	</td><td>	Ms. Sunaina	</td></tr>
                    <tr><td>	73	</td><td>	06.01.2025	</td><td>	Understanding the impact of social media on  modern society	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	74	</td><td>	21.01.2025	</td><td>	IELTS Preparation	</td><td>	Ms. Manisha	</td></tr>
                    <tr><td>	75	</td><td>	22.01.2025	</td><td>	From garage to grid developing skills for a smart automotive	</td><td>	Mr. Himanshu Matta	</td></tr>
                    <tr><td>	76	</td><td>	24.01.2025	</td><td>	Role to IMC in Branding	</td><td>	Dr. Rekha Dahiya	</td></tr>
                    <tr><td>	77	</td><td>	30.01.2025	</td><td>	Green Marketing 	</td><td>	Dr. Aun Ahmed	</td></tr>
                    <tr><td>	78	</td><td>	21.02.2025	</td><td>	The entrepreneur mindset 	</td><td>	Mr. Kumar Ashish 	</td></tr>
                    <tr><td>	79	</td><td>	20.02.2025	</td><td>	The Power of calm :stress management for success 	</td><td>	Ms. Arleen kaur	</td></tr>
                    <tr><td>	80	</td><td>	20.02.2025	</td><td>	Intellectual Property essentials	</td><td>	Mr. Venkatesh Bharti	</td></tr>
                    <tr><td>	81	</td><td>	06.03.2025	</td><td>	Corporate readiness	</td><td>	Mr. Ashok Sangwan	</td></tr>
                    <tr><td>	82	</td><td>	06.03.2025	</td><td>	Corporate Readiness, self-motivation	</td><td>	Mr. Ashok Sangwan	</td></tr>
                    <tr><td>	83	</td><td>	16.10.2024	</td><td>	Normative Theories and the Ethical Challenges of Global Journalism 	</td><td>	Dr. Aaqib Butt	</td></tr>
                    <tr><td>	84	</td><td>	11.2.2025	</td><td>	Guest Lecture on “Content Writing and Translation in Media”	</td><td>	Mr. Nilesh Kumar	</td></tr>
                    <tr><td>	85	</td><td>	24.01.2025	</td><td>	Guest lecture under KARMA- PR Conclave: Shaping Stories, Building Brands	</td><td>	Mrs. Shivani Gupta	</td></tr>
                    <tr><td>	86	</td><td>	15.10.2024	</td><td>	Guest lecture under KARMA- Media and Misinformation : Challenges in the Digital Age	</td><td>	Mr. Bal Krishna Mishra	</td></tr>
                    <tr><td>	87	</td><td>	18.10.2024	</td><td>	Guest lecture under KARMA- The Role of Content Creation  in Shaping Public Opinion	</td><td>	Mr. Chandan Kumar	</td></tr>
                    <tr><td>	88	</td><td>	01.02.2025	</td><td>	POSCO act	</td><td>	Mr. Utkarsh Singh	</td></tr>
                    <tr><td>	89	</td><td>	01.02.2025	</td><td>	Crime against Women	</td><td>	Ms.Nirmala B.Walter	</td></tr>
                    <tr><td>	90	</td><td>	18.10.2025	</td><td>	The role of Content Creation in Shaping Public Opinion 	</td><td>	Mr. Chandan Kumar	</td></tr>
                    <tr><td>	91	</td><td>	24.01.2025	</td><td>	Pr Conclave: Shaping Stories, Building Brands	</td><td>	Ms. Deepti Sethi	</td></tr>
                    <tr><td>	92	</td><td>	15.10.2025	</td><td>	Media and Misinformation: Challenges in the digital age	</td><td>	Mr. Bal Krishna Mishra	</td></tr>
                    <tr><td>	93	</td><td>	11.02.2025	</td><td>	“Content writing and translation in media”	</td><td>	Mr. Nilesh Kumar	</td></tr>
                    <tr><td>	94	</td><td>	16.10.2024	</td><td>	Normative Theories and the ethical challenges of Global Journalism	</td><td>	Dr.Aaqib Butt	</td></tr>
                    <tr><td>	95	</td><td>	10.10.2024	</td><td>	Trends and opportunities in media	</td><td>	Dr. Rahul kumar	</td></tr>

                

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
                <tr><td>1</td><td>25.8.23</td><td>Knowledge session on Prajatantra 2023</td><td>Dr. Debarpita Roy</td></tr>
                <tr><td>2</td><td>4.9.23</td><td>Placement Policy</td><td>Dr. Mandeep Singh</td></tr>
                <tr><td>3</td><td>14.9.23</td><td>How to do Well in PI</td><td>Dr. Latika Malhotra</td></tr>
                <tr><td>4</td><td>13.9.23</td><td>Ace Personal Interview & Resume Building</td><td>Mr. Navneet Anand</td></tr>
                <tr><td>5</td><td>20.9.23</td><td>Psychometric Testing</td><td>Ms. Shweta Jha</td></tr>
                <tr><td>6</td><td>21.9.23</td><td>Mock Group Discussion</td><td>Dr. Harmeet Malhotra, Dr. Latika Malhotra</td></tr>
                <tr><td>7</td><td>25.9.23</td><td>Placement Policy Briefing</td><td>Dr. Mandeep Singh</td></tr>
                <tr><td>8</td><td>7.10.23</td><td>Subject Expert Lecture on MIS for MBA</td><td>Dr. Tripti Lamba</td></tr>
                <tr><td>9</td><td>11.10.23</td><td>How to prepare for GD/Presentation/PI</td><td>Prof. Naveen Verna</td></tr>
                <tr><td>10</td><td>11.10.23</td><td>Personal Branding Via LinkedIn</td><td>Dr. Ranjit Kaur</td></tr>
                <tr><td>11</td><td>12.10.23</td><td>Subject Expert Lecture on FinTech</td><td>Dr. Kamini Bhutani</td></tr>
                <tr><td>12</td><td>14.10.23</td><td>How to Write a Research Paper</td><td>Mr. Shashank Sharma</td></tr>
                <tr><td>13</td><td>14.10.23</td><td>Future of Digital Currency in India</td><td>Dr. Bhawana Mukaria</td></tr>
                <tr><td>14</td><td>14.10.23</td><td>Digital Payment Methods</td><td>Dr. Bhawna Mukaria</td></tr>
                <tr><td>15</td><td>18.10.23</td><td>Subject Expert Lecture on Corporate Ethics: Focus on Time Management</td><td>Ms. Maneesha Tyagi</td></tr>
                <tr><td>16</td><td>19.10.23</td><td>Financial Literacy on Mutual Funds</td><td>Ms. Deepa Negi</td></tr>
                <tr><td>17</td><td>20.10.23</td><td>Resume Writing & Profile Building</td><td>Ms. Shristi Bisht</td></tr>
                <tr><td>18</td><td>20.10.23</td><td>Pre Placement Session on Mock GD</td><td>Dr. Latika Malhotra</td></tr>
                <tr><td>19</td><td>20.10.23</td><td>Introduction to the world of finance for Endeavoring Professionals</td><td>Dr. Saranleen Kaur</td></tr>
                <tr><td>20</td><td>20.10.23</td><td>Introduction to the world of finance for Aspiring Managers</td><td>Dr. Saranleen Kaur</td></tr>
                <tr><td>21</td><td>23.10.23</td><td>Generative AI</td><td>Dr. Ruchi Kawatra</td></tr>
                <tr><td>22</td><td>25.10.23</td><td>MOOCs Briefing</td><td>Ms. Saguna Khujaria</td></tr>
                <tr><td>23</td><td>26.10.23</td><td>Business Analytics</td><td>Ms. Himani</td></tr>
                <tr><td>24</td><td>8.11.23</td><td>Cyber Awareness</td><td>Mr. Raghvendra Pandey</td></tr>
                <tr><td>25</td><td>9.11.23</td><td>Exploring the Dynamics of Branding in the Contemporary World</td><td>Dr. Mahtab Alam</td></tr>
                <tr><td>26</td><td>9.11.23</td><td>Assessing the financial Strength and viability of new benchers</td><td>Dr. Madhu Ruhil</td></tr>
                <tr><td>27</td><td>9.11.23</td><td>Mock GD & PI</td><td>Dr. Latika Malhotra</td></tr>
                <tr><td>28</td><td>10.11.23</td><td>Importance of Review of Literature</td><td>Dr. Preeti Malhotra</td></tr>
                <tr><td>29</td><td>11.11.23</td><td>Technical Analysis</td><td>CS Rakesh</td></tr>
                <tr><td>30</td><td>22.11.23</td><td>Unlocking the financial Flow</td><td>Ms. Shristi Arora</td></tr>
                <tr><td>31</td><td>22.11.23</td><td>Leaderships Skill and Tea Building</td><td>Mr. Arun K Kaul</td></tr>
                <tr><td>32</td><td>24.11.23</td><td>Science of Healthy Living Through Yoga</td><td>Dr. Madhu Arora</td></tr>
                <tr><td>33</td><td>24.11.23</td><td>Basics of Fundamental and Technical Analysis</td><td>CS Rakesh</td></tr>
                <tr><td>34</td><td>24.11.23</td><td>Process of Business Research</td><td>Dr. Madhu Arora</td></tr>
                <tr><td>35</td><td>30.11.23</td><td>How to stay Motivated</td><td>Dr. Anita Sharma</td></tr>
               <tr><td>36</td><td>30.11.23</td><td>Importance of Motivation in Organization</td><td>Dr. Anita Sharma</td></tr>
<tr><td>37</td><td>24.11.23</td><td>Story of Variable in research</td><td>Dr. Madhu Arora</td></tr>
<tr><td>38</td><td>2.12.23</td><td>Indian Startups its Funding Patterns and University incubators</td><td>Dr. Deepak Kumar Adana</td></tr>
<tr><td>39</td><td>7.12.23</td><td>Interview Skills for Management and Commerce Students</td><td>Dr. Deepak Trivedi</td></tr>
<tr><td>40</td><td>7.12.23</td><td>Relevant Skills to Progress in the Corporate World</td><td>Mr. Alok Tiwari, Senior Vice President and Country head</td></tr>
<tr><td>41</td><td>6.12.23</td><td>How to improve Communication and Soft Skills</td><td>Mr. Amit Poddar, Senior Regional Head. T.I.M.E</td></tr>
<tr><td>42</td><td>7.12.23</td><td>Emerging Trends in the IT Industry for Management</td><td>Mr. Alok Tiwari, Senior Vice President and Country head</td></tr>
<tr><td>43</td><td>21.12.23</td><td>Marketing and Research Analytics</td><td>Mr. Sarthak Gupta, Analyst, HCl Tech.</td></tr>
<tr><td>44</td><td>21.12.23</td><td>How to ace Placement Derive: Strategies for Success</td><td>Dr. Mandeep Singh</td></tr>
<tr><td>45</td><td>10-24.11.23</td><td>Subject Expert Lecture Series-II</td><td>Dr. Sunitha Ravi, Dr. Harmeet Malhotra, Dr. Gopal Singh Latwal, Ms. Shikha Dabral, Dr. Latika Malhotra</td></tr>
<tr><td>46</td><td>20.10.23</td><td>Session on MOCK GROUP DISCUSSION</td><td>Dr. Madhu, Mr. Rohit</td></tr>
<tr><td>47</td><td>15.9.23</td><td>Session on GD</td><td>Mr. Amit Poddar, Senior Regional Head, T.I.M.E</td></tr>
<tr><td>48</td><td>2.12.23</td><td>Guest Lecture on Mastering the Job Interview: Key Skills and Insights”</td><td>Mr. Dayanshu Kumar, Manager HRBP</td></tr>
<tr><td>49</td><td>17.1.24</td><td>Session on Minor Project Briefing</td><td>Dr. Deepika Arora</td></tr>
<tr><td>50</td><td>3.2.24</td><td>Minor Project Briefing</td><td>Mr. Puneet Chawla</td></tr>
<tr><td>51</td><td>3.2.24</td><td>Alumni Talk on Anchoring and Teamwork for Leadership talk series</td><td>Mr. Himanshu Matta</td></tr>
<tr><td>52</td><td>22.02.24</td><td>Unlocking the power of an effective resume</td><td>Ms. Shriya Jain</td></tr>
<tr><td>53</td><td>22.02.24</td><td>Evolutionary Computation</td><td>Dr. Charu Gupta</td></tr>
<tr><td>54</td><td>24.02.24</td><td>Indian economy: Phase of growth, current scenario, amrit kaal and vision 2047</td><td>Ms. Mahakta Meena</td></tr>
<tr><td>55</td><td>26.02.24</td><td>Navigating the financial galaxy: A guide to securities market mastery</td><td>Ms. Himani Lath</td></tr>
<tr><td>56</td><td>26.02.24</td><td>Unlocking wealth: Navigating the world of debentures and securities</td><td>Ms. Himani Lath</td></tr>
<tr><td>57</td><td>04.03.24</td><td>GD and PI essentials</td><td>Ms. Raghunandan</td></tr>
<tr><td>58</td><td>04.03.24</td><td>Cracking the JLL placement process: alumni and industry expert insights</td><td>Ms. Urvashi Saluja</td></tr>
<tr><td>59</td><td>04.03.24</td><td>Guest lecture on Leadership management</td><td>Dr. Lokesh Jindal</td></tr>
<tr><td>60</td><td>04.03.24</td><td>Guest lecture on problems faced in inbound marketing</td><td>Dr. Lokesh Jindal</td></tr>
<tr><td>61</td><td>04.03.24</td><td>Guest lecture on difficulties and challenges in building a well recognized brand image</td><td>Dr. Lokesh Jindal</td></tr>
<tr><td>62</td><td>04.03.24</td><td>Print writing Vs Digital writing Vs Marketing writing</td><td>Ms. Poonam Singh</td></tr>
<tr><td>63</td><td>07.03.24</td><td>Role of India and position of India in world: Viksit Bharat 2047</td><td>Dr. Deepak Kumar</td></tr>
<tr><td>64</td><td>13.03.24</td><td>Beyond Classroom: Exploring Career Prospects for commerce Graduates</td><td>Mr. Madhav Kanotra</td></tr>
<tr><td>65</td><td>13.03.24</td><td>“Developing Entrepreneurial Acumen”: Viksit Bharat 2047</td><td>Dr. Doa Naqvi</td></tr>
<tr><td>66</td><td>19.03.24</td><td>Sustainable Operations Management</td><td>Dr. Samir Gokaran</td></tr>
<tr><td>67</td><td>22.03.24</td><td>Perspective view of case study</td><td>Mr. Amit Poddar</td></tr>
<tr><td>68</td><td>26.03.24</td><td>Viksit Bharat: Initiatives for sustainable development</td><td>Dr. Antra Singh</td></tr>
<tr><td>69</td><td>08.04.24</td><td>Bridging the industry-Academia Gap: Insights from a Data Analyst</td><td>Ms. Aarushi Gangwani</td></tr>
<tr><td>70</td><td>09.04.24</td><td>Group Discussion</td><td>Dr. Latika Malhotra</td></tr>
<tr><td>71</td><td>10.04.24</td><td>Financial Horizon: Managing wealth and exploring career in finance</td><td>Ms. Taranjot Singh</td></tr>
<tr><td>72</td><td>18.04.24</td><td>Fundamentals of commodity and derivative markets</td><td>Dr. Sunita Ravi</td></tr>
<tr><td>73</td><td>18.04.24</td><td>Expert lecture on “Gig economy”</td><td>Ms. Anjum Tanwar</td></tr>
<tr><td>74</td><td>22.04.24</td><td>Financial Inclusion through Digital Transformation</td><td>Ms. Reena Yadav</td></tr>
<tr><td>75</td><td>24.04.24</td><td>Gen Z and Healthy living: Navigating Nutrition in a digital age</td><td>Dr. Sonam Arora</td></tr>
<tr><td>76</td><td>25.04.24</td><td>Step up your interview game: Mock PI test for placement preparation</td><td>Ms. Shikha Dabral</td></tr>
<tr><td>77</td><td>25.04.24</td><td>Transforming self-doubt into empowerment: Unleashing the potential of your mind</td><td>Ms. Nishta Prashar</td></tr>
<tr><td>78</td><td>25.04.24</td><td>Exploring Financial Markets</td><td>Ms. Srishti Arora</td></tr>
<tr><td>79</td><td>25.04.24</td><td>Awareness session on Sustainability: A walkthrough</td><td>Dr. Sonam Arora</td></tr>
<tr><td>80</td><td>3.5.24</td><td>Power on Time Value of Money-its Foundation and Application</td><td>Ms. Megha, Assistant Professor, VIPS</td></tr>
<tr><td>81</td><td>8.5.24</td><td>Instagram Marketing</td><td>Mr. Akash Gorgi, IIDE</td></tr>
<tr><td>82</td><td>27.3.24</td><td>How to do Well in Academics</td><td>Ms. Rashi Oberoi, Senior Analyst, NatWest Group</td></tr>
<tr><td>83</td><td>20.3.24</td><td>Essentials Skills for a Successful Manager Career</td><td>Ms. Elina Singh, Founder, Bitesquere & Brand Bakery</td></tr>
<tr><td>84</td><td>22.3.24</td><td>Digital Marketing</td><td>Dr. Preeti Suryavanshi, Associate Professor, Apeejay School of Management</td></tr>
<tr><td>85</td><td>18.4.24</td><td>Exploring Opportunities: A Guide to Informed Investing in Commodity and Derivatives Markets</td><td>Dr. Shikha Gupta, SEBI</td></tr>
<tr><td>86</td><td>8.5.24</td><td>Unlocking LinkedIn Essentials to Elevate Your Professional Profile</td><td>Mr. Akasg Gogri, Senior Manager, IIDE</td></tr>
<tr><td>87</td><td>16.2.24</td><td>Global Horizons: Exploring International Education With IDP</td><td></td></tr>
<tr><td>88</td><td>25.04.24</td><td>Setup Your Interview Game: Mock PI Test for Placement Preparation</td><td></td></tr>
<tr><td>89</td><td>19.3.24</td><td>Emerging Trends, Challenges, and Opportunities in Beat Reporting</td><td>Mr. Abhinav Goel</td></tr>
<tr><td>90</td><td>29.4.24</td><td>Cyber Threat Intelligence: Enhancing Proactive Security Measures</td><td>Ms. Onam Bansal, Senior Project Lead, Thales</td></tr>
<tr><td>91</td><td>17.5.24</td><td>CBDC and Other Digital Currencies</td><td>Ms. Isha Gupta, Assistant Professor, IINTM</td></tr>

                
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
               <tr><td>1</td><td>24.9.22</td><td>Lecture on Writing on Short Profile</td><td>Ms. Supriya Seghal</td></tr>
<tr><td>2</td><td>26.9.22</td><td>Lecture on Logical Reasoning</td><td>Dr. Rohit Yadav</td></tr>
<tr><td>3</td><td>28.9.22</td><td>Lecture on Professional Resume Writing</td><td>Mr. Rohit Premchandani</td></tr>
<tr><td>4</td><td>6.10.22</td><td>Lecture on How to do Well in PI</td><td>Mr. Amit Poddar</td></tr>
<tr><td>5</td><td>7.10.22</td><td>Session on Interview Skills</td><td>Mr. Ambani Rathur</td></tr>
<tr><td>6</td><td>14.10.22</td><td>Expert Series for BBA students</td><td>Ms. Supriya Seghal, Dr. Vandana Raghava, Mr. Soumitro Mukherjee</td></tr>
<tr><td>7</td><td>14-15.10.22</td><td>Session on Quantitative Skills</td><td>Dr. Megha Sharma</td></tr>
<tr><td>8</td><td>21.10.22</td><td>Alumni Talk on Cracking Your Job Interview</td><td>Mr. Krishna Arora</td></tr>
<tr><td>9</td><td>20.10.22</td><td>Talk Show ‘Zaahir’</td><td>Mr. Sayed Farooq Jamal, Dr. Akash Seghal, Ms. Maria Jaleel</td></tr>
<tr><td>10</td><td>21.10.22</td><td>Alumni Talk on Cracking Your First Internship</td><td>Mr. Krishna Arora</td></tr>
<tr><td>11</td><td>15.10.22</td><td>Session on How to read a JD</td><td>Dr. Deepika Arora, Ms. Arushi</td></tr>
<tr><td>12</td><td>12.10.22</td><td>Alumni Talk on Industry Expectations from Young Professionals</td><td>Mr. Anurag Batra, Mr. Aryan Sexena, Mr. Anurag Verma</td></tr>
<tr><td>13</td><td>8-15.10.22</td><td>Session on Group Discussion</td><td>Dr. Gopal and Dr. Vandana</td></tr>
<tr><td>14</td><td>11.11.22</td><td>Session on How to Ace an Interview</td><td>Ms. Preeti Sharma</td></tr>
<tr><td>15</td><td>18.11.22</td><td>Guest Lecture on Corporate Interface Series</td><td>Mr. Jitender Bhadana, AVP Startup</td></tr>
<tr><td>16</td><td>24.11.22</td><td>Session on Just A Minute</td><td>Dr. Deepika Arora</td></tr>
<tr><td>17</td><td>26.11.22</td><td>Session Professional Etiquette</td><td>Dr. Mandeep Singh</td></tr>
<tr><td>18</td><td>26.11.22</td><td>Session on Corporate Mentorship</td><td>Mr. Karan Dogra</td></tr>
<tr><td>19</td><td>29.11.22</td><td>Session on Personal Branding</td><td>Dr. Ranjit Kaur</td></tr>
<tr><td>20</td><td>30.11.22</td><td>Session on Teaching Etiquette</td><td>Ms. Chhaya Wadhwa</td></tr>
<tr><td>21</td><td>1.12.22</td><td>Guest Lecture on The Most Valued Soft Skills</td><td>Mr. Aamir Ajmal</td></tr>
<tr><td>22</td><td>14.12.22</td><td>Session on Goal Setting</td><td>Ms. Shikha Dabral, Dr. Supriya Seghal</td></tr>
<tr><td>23</td><td>20.12.22</td><td>Expert Lecture Series on E-Filing of ITR</td><td>Dr. Amit Kumar, Assistant Professor, IITM</td></tr>
<tr><td>24</td><td>21.12.22</td><td>Session on Time Management</td><td>Ms. Shikha Dabral, Dr. Supriya Seghal</td></tr>
<tr><td>25</td><td>13.03.23</td><td>Session on How to Prepare for Aptitude Test</td><td>Mr. Ankit Gaur</td></tr>
<tr><td>26</td><td>14.03.23</td><td>Session on Union Budget</td><td>Ms. Saguna Khajuria</td></tr>
<tr><td>27</td><td>15.03.23</td><td>Session on Union Budget</td><td>Dr. Madhu Ruhil</td></tr>
<tr><td>28</td><td>21-23.03.23</td><td>Session on Union Budget</td><td>Ms. Rachita Arora</td></tr>
<tr><td>29</td><td>11.04.23</td><td>Session on Effective Communication</td><td>Prof. Arun K Kaul</td></tr>
<tr><td>30</td><td>11.04.23</td><td>Session on Capital Market & Depositaries: Smart Financial Decisions</td><td>Dr. Shikha Gupta, CDSL, NISM</td></tr>
<tr><td>31</td><td>25.04.23</td><td>Session on Value System & Management of Self</td><td>Jagadguru Shankaracharya Ji</td></tr>
<tr><td>32</td><td>02.05.23</td><td>Guest Lecture on Transformation on Management Education: Integrating Sustainable Development Goals</td><td>Dr. Rajeshwari Malik</td></tr>
<tr><td>33</td><td>03.05.23</td><td>Session on Stress Management</td><td>Dr. Sonam Arora</td></tr>
<tr><td>34</td><td>08.05.23</td><td>Session on Mental Health Awareness</td><td>Dr. Renu Bhatia, Clinical Psychologist</td></tr>
<tr><td>35</td><td>10.05.23</td><td>Guest Lecture on Financial Market and Institutions</td><td>Ms. Srishti Arora, Assistant Professor, RDIAS</td></tr>

                
</tbody>
        </table>

                    </div>
            <div class="ec-panel" data-year="2021-22">
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
                <tr><td>1</td><td>7.8.21</td><td>National Education Summit</td><td>Dr. S S Mantha, Dr. Manpreet Manna, Prof.(Dr.) Premendu P. Mathur, Dr. Nitin Malik & Dr. Lagvish Malhotra</td></tr>
<tr><td>2</td><td>5.8.21-19.8.21</td><td>Workshop on Adopting Life Skills for Improving Employability-Phase II</td><td>Mr. Madhav J Kapadia, Mr. Amar Singh, Mr. Kartik Nimbalkar, Mr. Somiron Mita – Corporate Trainer</td></tr>
<tr><td>3</td><td>21.8.21</td><td>Orientation Session by committee coordinators</td><td>All Committee Coordinator</td></tr>
<tr><td>4</td><td>27.8.21</td><td>Public Speaking and Presentation Skills</td><td>Dr. Malavika Srivastava</td></tr>
<tr><td>5</td><td>28.8.21</td><td>Artificial Intelligence Techniques</td><td>Dr. Jayraj Singh, IIT Delhi</td></tr>
<tr><td>6</td><td>1.9.21</td><td>Knowledge Series 2.0 Part 1</td><td>Dr. Anita Sharma, Dr. Sunitha Ravi, Ms. Tamanna Goel & Mr. Himanshu Matta</td></tr>
<tr><td>7</td><td>1.9.21</td><td>Expert Lecture on Current issues in Business Law</td><td>Dr. M. N. Jha-TIAS</td></tr>
<tr><td>8</td><td>3.9.21</td><td>Expert talk on Speak to Lead</td><td>Mr. Amit Poddar-T.I.M.E</td></tr>
<tr><td>9</td><td>3.9.21</td><td>Demystifying Blockchain</td><td>Dr. Pooja Sapra</td></tr>
<tr><td>10</td><td>3.9.21</td><td>Expert Talk on Changing Dynamics of Business Analytics for Commerce Graduates</td><td>Prof. (Dr.) Leena Sharma</td></tr>
<tr><td>11</td><td>6.9.21</td><td>Expert Lecture on Discovering the Insights of GST</td><td>Dr. Ekta Dargan, MAIMS GGSIPU</td></tr>
<tr><td>12</td><td>7.9.21</td><td>Expert Lecture on Way Forward to Digital Marketing</td><td>Dr. Anita Sharma-MSI</td></tr>
<tr><td>13</td><td>9.9.21</td><td>Expert Lecture on Corporate Entrepreneurship</td><td>Dr. Lokesh Jindal-Associate Professor, JNU</td></tr>
<tr><td>14</td><td>10.9.21-12.9.21</td><td>Series on Immunity Enhancement Program</td><td>Dr. Gopal Singh Latwal-IITM</td></tr>
<tr><td>15</td><td>10.9.21</td><td>Group Discussion Techniques</td><td>Mr. Navneet Anand-Head MBA Division</td></tr>
<tr><td>16</td><td>11.9.21</td><td>Innovative Ideas are Worth Millions, Only if They are Patent Protected</td><td>Ms. Latika Khandlya</td></tr>
<tr><td>17</td><td>14.9.21</td><td>Expert Lecture on Stress Management</td><td>Dr. Latika Malhotra-BCIPS</td></tr>
<tr><td>18</td><td>15.9.21</td><td>Expert Lecture on Emerging challenges in Operations Management</td><td>Prof.(Dr.) Vijay Kumar Khurana-MAIMS</td></tr>
<tr><td>19</td><td>17.9.21</td><td>Security with Machine Learning</td><td>Dr. Ramesh Kumar Tyagi-AMITY</td></tr>
<tr><td>20</td><td>17.9.21</td><td>Expert Talk on How to do Well in GD</td><td>Mr. Amit Poddar-T.I.M.E</td></tr>
<tr><td>21</td><td>17.9.21</td><td>Expert Talk on Marketing Innovation & Challenges in Industry 4.0</td><td>Prof. (Dr.) Sajjan Choudhari</td></tr>
<tr><td>22</td><td>25.9.21</td><td>Alumni Talk Series-I</td><td>Mr. Mohit Chopra-BBA</td></tr>
<tr><td>23</td><td>01.10.21</td><td>Workshop on Self Defence</td><td>Mr. Abhishek Gambhir</td></tr>
<tr><td>24</td><td>01.10.21</td><td>Entrepreneurship & Marketing Strategies</td><td>Ms. Bhawana Bansal</td></tr>
<tr><td>25</td><td>04.10.21</td><td>Extempore Speech Competition: Story Weaving</td><td>Ms. Shalini</td></tr>
<tr><td>26</td><td>24.9.21</td><td>Building Resilience & Leadership</td><td>Dr. Himanshi Tiwari, BIMTECH, Noida</td></tr>
<tr><td>27</td><td>24.9.21</td><td>Expert Lecture on “How Economy Works-Co-relation between RBI, Central Government & State Government”</td><td>Mr. Suresh Shankar Kadam, Assistant Professor, Future Education Entrepreneurship & Leadership</td></tr>
<tr><td>28</td><td>1.10.21</td><td>Expert Lecture on Why is it important for Management to use Balance Scorecard</td><td>Dr. Anita Sharma, Associate Professor IITM</td></tr>
<tr><td>29</td><td>05.10.21</td><td>Expert Lecture on Reimagining Services post Covid-19 Pandemic</td><td>Dr. Taru Baswan-BCIPS</td></tr>
<tr><td>30</td><td>08.10.21</td><td>Interview Techniques</td><td>Mr. Sunil Dua-T.I.M.E</td></tr>
<tr><td>31</td><td>11.10.21</td><td>Hazardous Effects of E-waste on the Environment</td><td>Ms. Kezia Chand</td></tr>
<tr><td>32</td><td>12.10.21</td><td>Expert Lecture on Managing People and Performance in Digital Era</td><td>Dr. Madhu Arora-NDIM</td></tr>
<tr><td>33</td><td>13.10.21</td><td>Leadership Talk Series: Episode 6</td><td>Mr. Saurabh Gandhi</td></tr>
<tr><td>34</td><td>12.10.21-14.10.21</td><td>Workshop on Advance Excel</td><td>Dr. Harmeet Malhotra</td></tr>
<tr><td>35</td><td>27.10.21</td><td>Knowledge Series 2.0 Part II</td><td>Ms. Sunakshi Chadha, Dr. Harmeet Malhotra, Dr. Megha Sharma</td></tr>
<tr><td>36</td><td>28.10.21</td><td>Corporate Mentorship Programme on Job Market and Resume Writing</td><td>Ms. Kiran, Co-founder of Aspirze</td></tr>
<tr><td>37</td><td>28.10.21</td><td>Corporate Mentorship Programme on Job Market and Resume Writing</td><td>Mr. Das Harkishan, Founder and CEO Scout Bizz International</td></tr>
<tr><td>38</td><td>28.10.21</td><td>Corporate Mentorship Programme on Job Market and Resume Writing</td><td>Mr. Tarun Kumar, Geo Financial Delivery Analyst, Accenture</td></tr>
<tr><td>39</td><td>28.10.21</td><td>Corporate Mentorship Programme on Job Market and Resume Writing</td><td>Ms. Kirti Machija, Research Analyst, WNS Global Services Ltd.</td></tr>
<tr><td>40</td><td>29.10.21</td><td>Workshop on Gender Issues</td><td>Prof. Vageswari Deswal</td></tr>
<tr><td>41</td><td>29.10.21</td><td>Image Processing with Machine Learning</td><td>Dr. Praveen Lalwani</td></tr>
<tr><td>42</td><td>30.10.22</td><td>Corporate Mentorship Programme - MBA</td><td>Ms. Mahima Nair, WNS Global Services</td></tr>
<tr><td>43</td><td>13.11.21</td><td>Corporate cum Alumni Talk- “Are You Job Ready?”</td><td>Mr. Arun Suryan</td></tr>
<tr><td>44</td><td>13.11.21</td><td>Corporate Mentorship Programme on Interview Skills</td><td>Ms. Ridhima Arora, Deputy Manager, ICICI Bank</td></tr>
<tr><td>45</td><td>13.11.21</td><td>Corporate Mentorship Programme on Interview Skills</td><td>Ms. Rani Gupta, Business Relations Manager, Ms Support Services Pvt. Ltd.</td></tr>
<tr><td>46</td><td>13.11.21</td><td>Corporate Mentorship Programme on Interview Skills</td><td>Ms. Astha Bajaj, Manager in Accenture Technologies</td></tr>
<tr><td>47</td><td>13.11.21</td><td>Corporate Mentorship Programme on Interview Skills</td><td>Mr. Karan Dogra, Debt. Manager, ICICI Bank</td></tr>
<tr><td>48</td><td>20.11.21</td><td>Alumni Talk-“Demystifying Campus to Corporate”</td><td>Ms. Osheen Sahajpal</td></tr>
<tr><td>49</td><td>26.11.21</td><td>Entrepreneurial opportunities Post Covid 19</td><td>Dr. Seema Wadhawan, Dr. Nudrat Moini Rahman, Mr. Yogesh Gautam</td></tr>
<tr><td>50</td><td>27.11.21</td><td>Webinar on Yoga for Emotional & Mental Health</td><td>Dr. Gopal Singh Latwal, Associate Professor - IITM</td></tr>
<tr><td>51</td><td>10.12.21</td><td>Public Speaking</td><td>Dr. Ramandeep Kaur & Dr. Malavika Srivastava</td></tr>
<tr><td>52</td><td>15.12.21</td><td>Robotics Automation – Skill A Thon</td><td>ICT Academy in association with UI Path</td></tr>
<tr><td>53</td><td>17.12.21</td><td>Webinar on Hackoverflow (Ethical Hacking)</td><td>Ms. Anisha Mol J, Security Researcher at InternNexus</td></tr>
<tr><td>54</td><td>24.12.21</td><td>Webinar on Cyber Security as a Career</td><td>Mr. Jose Kurian, Assistant Director E C Council</td></tr>
<tr><td>55</td><td>31.12.21</td><td>Session on Handling finance in Digital World</td><td>Dr. Deepika Arora, Associate Professor, IITM</td></tr>
<tr><td>56</td><td>31.12.21</td><td>Webinar on Introduction to AI</td><td>Dr. Romika Yadav, Assistant Professor, NIFT Kangra</td></tr>
<tr><td>57</td><td>7.1.22</td><td>Webinar on IT Jobs in Japan</td><td>Mr. Markus, Managing Director, Mr. Selyucus Markus, Director</td></tr>
<tr><td>58</td><td>7.1.22-11.3.22</td><td>Virtual Induction Events</td><td>Faculty Members from Dept. of Mgmt. Studies</td></tr>
<tr><td>59</td><td>27-31.1.22</td><td>Expert Lecture Series-I</td><td>Mr. Nargish Gupta, Assistant Professor, SisTec CA Shambhu Nath, Mr. Mukesh Sharma, Advocate, Delhi High Court</td></tr>
<tr><td>60</td><td>28.1.22</td><td>Lecture on E-Resources in Management and Commerce Discipline</td><td>Dr. Dipti Gulati, Librarian, IITM</td></tr>
<tr><td>61</td><td>29.1.22</td><td>Workshop on Major Project Briefing</td><td>Dr. Savita Waswani, Associate Professor IITM</td></tr>
<tr><td>62</td><td>29.1.22</td><td>Alumni Talk on Industry Academics Confluence: Bridging Gap</td><td>Mr. Sutikshan Kashyap, Senior Associate, Fiserv Group of Solutions</td></tr>
<tr><td>63</td><td>14-28.1.22</td><td>Virtual Induction Events-BCA</td><td>Dr. Ramandeep, Dr. Sandhya, Dr. Tripti</td></tr>
<tr><td>64</td><td>11.2.22</td><td>Union Budget-2022-23</td><td>Dr. Deepika Arora, Dr. Sunitha Ravi and Dr. Vikas Bharara</td></tr>
<tr><td>65</td><td>4.2.22</td><td>Content Based Image Retrieval and Its Application</td><td>Dr. Naushad Varish, Associate Professor, KL University Andhra Pradesh, India</td></tr>
<tr><td>66</td><td>4.2.22</td><td>Personal Interview “Face it to Nail it”</td><td>Ms. Neha Sharma, Dr. Tripti Lamba & Dr. Malavika Srivastava</td></tr>
<tr><td>67</td><td>4.2.22</td><td>Session on Critical Analysis of Financial Budget 2022-23</td><td>Prof. (Dr.) C P Chawla, Director General, IINTM</td></tr>
<tr><td>68</td><td>5.2.22</td><td>Scrambled Lies: Fastest Finger First X Truth & Lies</td><td>Internware Team</td></tr>
<tr><td>69</td><td>7.2.22</td><td>Workshop on Adopting Life Skills for Improving Employability: Phase III</td><td>Ms. Pooja, Trainer Soft Skills, Ms. Tushar, Trainer Soft Skill</td></tr>
<tr><td>70</td><td>10.2.22</td><td>Workshop on Personal Branding</td><td>Ms. Divya Singh, Corporate Trainer, Founder of Skilldify Studio</td></tr>
<tr><td>71</td><td>18.2.22</td><td>Guest Lecture on How to Make your Dream into Reality</td><td>Mr. Vikram Arora - Entrepreneur</td></tr>
<tr><td>72</td><td>21.2.22</td><td>Nation Wide Financial Quiz Contest</td><td>Mr. Raghav Jain</td></tr>
<tr><td>73</td><td>25.2.22</td><td>Expert Lecture on How to use WEKA Software</td><td>Prof. (Dr.) Sudhir Kumar Sharma</td></tr>
<tr><td>74</td><td>2.3.22</td><td>Marico Center for Women Empowerment Inaugurated in IITM Implemented by ICT Academy</td><td>Mr. B. Raghava Srinivasan, ICT Academy</td></tr>
<tr><td>75</td><td>4.3.22</td><td>Expert Lecture on Business Intelligence Using WEKA</td><td>Prof. (Dr.) Sudhir Kumar Sharma</td></tr>
<tr><td>76</td><td>11.3.22</td><td>Webinar on Investment Awareness</td><td>Dr. Shikha Gupta, (AMFI and Associate Professor Lingya’s Lalita Devi Institute of Management & Science)</td></tr>
<tr><td>77</td><td>14.3.22</td><td>Alumni Talk Series on Breaking Myths: Building Your Career in the Area of Content</td><td>Ms. Mansi Singh, Alumna of BCA batch 2015-18</td></tr>
<tr><td>78</td><td>19.3.22</td><td>Leadership Talk Series: Episode 7 - Decisiveness</td><td>Ms. Mansi Bedi, General Manager-HR, Wipro Ltd.</td></tr>
<tr><td>79</td><td>25-26.3.22</td><td>Internal Conference on Role of ICT in Management and Business: Practices, Trends and Prospects (ICRIMB 2022)</td><td>Prof. K.K. Aggarwal, Founder VC-GGSIPU, Chairman NBA, Prof. Arpan Kumar Kar from IIT, Delhi, Prof. P.S. Grover from University of Delhi, Prof. Amit Prakash Singh from USICT, GGSIP University, New Delhi, Dr. Bharat Bhushan from Sharada University, Greater Noida, Prof. Bhuvan Unhelkar from University of South Florida, USA, Mr. Keith Sherringham from Australia, Prof. Parvinder Singh from Murthal, Haryana, Dr. Kanta Prasad Sharma from Chandigarh University, Dr. Vikas Kumar from University of West U.K, Prof. (Dr.) Marcin Paprzycki from Poland</td></tr>
<tr><td>80</td><td>31.3.22</td><td>Innovative Managerial Thinking Through Scripted Role Play Competition</td><td>Dr. Harmeet Malhotra (Associate Professor, IITM) and Dr. Savita Waswani (Associate Professor, IITM)</td></tr>
<tr><td>81</td><td>1.4.22</td><td>Seminar on Economic and Financial Implications of the Russian Invasion on Ukraine</td><td>Prof. Soumitra Mookerjee</td></tr>
<tr><td>82</td><td>18.4.22</td><td>Seminar on Importance of Personal Hygiene</td><td>Nine Foundation, Gorakhpur</td></tr>
<tr><td>83</td><td>29.4.22</td><td>Workshop on Career Guidance</td><td>Mr. Kartik Mathur, Co-Founder, Coding Blocks</td></tr>
<tr><td>84</td><td>30.4.22</td><td>Minor Project -I Briefing</td><td>Dr. Deepika Arora, HOD Management, IITM</td></tr>
<tr><td>85</td><td>6.5.22</td><td>Workshop on Modern Web Technology (MERN STACK)</td><td>Mr. Piyush Pandey</td></tr>
<tr><td>86</td><td>13.5.22</td><td>Guest Lecture on Six Thinking Hats-Parallel Thinking</td><td>Ms. Durdana Naseer, Management Club Member</td></tr>
<tr><td>87</td><td>19-21.5.22</td><td>Workshop on Stock Market-The Big Board Game</td><td>Dr. Sunitha Ravi, Mr. Chetan, Ms. Karishma, Dr. Deepika Arora, Ms. Preeti Roy, Mr. Piyush Ranwar, Mr. Jatin Ahuja, Ms. Durdana Naseer</td></tr>
<tr><td>88</td><td>20.5.22</td><td>Webinar on Professional Etiquettes and Body Language</td><td>Ms. Palak Kohili, Corporate Trainer, Sunstone-My Future</td></tr>
<tr><td>89</td><td>20.5.22</td><td>Workshop on Machine Learning Using Python</td><td>Mr. Rohit Pahwa, Shape My Skills</td></tr>
<tr><td>90</td><td>27.5.22</td><td>Guest Lecture on Entrepreneurship & Globalization</td><td>Mr. Uttam Kumar Sharma, Founder, Dhirati Education</td></tr>
<tr><td>91</td><td>6.6.22</td><td>Session on Corporate Mentorship Program for BBA Students</td><td>Ms. Elina Singh, American Express, Associate</td></tr>
<tr><td>92</td><td>24.6.22</td><td>Expert Lecture on “Sri Lanka’s Economic Crises: A Lesson for Others”</td><td>Dr. Vandana Raghava, Professor-IITM</td></tr>
<tr><td>93</td><td>4.7.22</td><td>Mock Group Discussion</td><td>Mr. Amit Poddar, Senior-Regional Head, T.I.M.E</td></tr>


                
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
