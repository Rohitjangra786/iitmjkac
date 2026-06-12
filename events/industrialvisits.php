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
    <title>IITM | Industrial Visits</title>

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
.ec-page .ec-panel tbody td:last-child{ white-space:nowrap; color:#6a5a2a; font-weight:600; font-size:13.5px; }
.ec-no-results td{ text-align:center !important; padding:26px !important; color:#999 !important; font-style:italic; background:#fff !important; }

/* ---- mobile-first refinements ---- */
@media (max-width:767px){
  .ec-hero-title{ font-size:25px; }
  .ec-page .ec-panel thead th{ padding:10px 8px; font-size:11px; }
  .ec-page .ec-panel tbody td{ padding:9px 8px; font-size:12.5px; }
  .ec-page .ec-panel tbody td:first-child{ width:34px; }
  .ec-page .ec-panel tbody td:last-child{ white-space:normal; }
}

/* ---- legacy photo carousel (kept) ---- */
.carousel-inner{ max-width:70vw; margin:0 auto; transition:transform 0.3s cubic-bezier(0.4,0.0,0.2,1); }
.carousel-item img{ max-height:300px; width:auto; margin:0 auto; }
.carousel-image{ width:80%; height:auto; object-fit:cover; margin:0 auto; }
.carousel-item{ width:70vw; margin-left:0; }
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
      <h1 id="iipc" class="ec-hero-title">Industrial Visits</h1>
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
          <a class="ec-side-link active" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
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
            <p>IITM advocates that industrial visits, field trips, and excursions are essential components for enriching students' education. These experiences offer students genuine insights into the everyday operations of industries, providing a deeper understanding of their processes. Such tours ensure that students acquire practical experience alongside theoretical knowledge, meeting the demands of the curriculum. These activities complement and enhance classroom instruction, fostering new interests among students. Furthermore, they increase awareness of community resources and enable students to connect their educational experiences with the broader world outside academia.</p>
          </article>
        </div>

        <!-- Event records -->
        <section class="ec-events">
          <div class="ec-events-head">
            <h2 class="ec-section-title">Visits by Year</h2>
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
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Visit to News 18</td><td>29.07.2024</td></tr>
                <tr><td>2</td><td>India TV (Aap Ki Adalat)</td><td>20.08.2025</td></tr>
                <tr><td>3</td><td>Visit to India TV</td><td>11.09.2025</td></tr>
                <tr><td>4</td><td>India TV, Yudh</td><td>25.10.2025</td></tr>
                <tr><td>5</td><td>Visit to ATAL Incubation Center, GGSIPU</td><td>29.10.2025</td></tr>
                <tr><td>6</td><td>Visit to NCUI</td><td>06.11.2025</td></tr>
                <tr><td>7</td><td>Photo Walk at Humayun's Tomb & Sunder Nursery</td><td>12.11.2025</td></tr>
                <tr><td>8</td><td>Bharat Ka Share Bazaar</td><td>18.11.2025</td></tr>
                <tr><td>9</td><td>Educational Visit under YUVAK</td><td>24.01.2026</td></tr>
                <tr><td>10</td><td>Photowalk at Delhi 6</td><td>11.04.2026</td></tr>
            </tbody>
        </table>
                    </div>
            <div class="ec-panel" data-year="2024-25">
              <h3 class="ec-subhead">YUVK</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                 <tr><td>	1	</td><td>	Visit to Amrit Udyan	</td><td>	12.09.2024	</td></tr>
                        <tr><td>	2	</td><td>	Educational Visit to  DIDAC	</td><td>	18.09.2024	</td></tr>
                        <tr><td>	3	</td><td>	Educational Visit to DTU	</td><td>	18.09.2024	</td></tr>
                        <tr><td>	4	</td><td>	Educational Visit to  DIDAC	</td><td>	19.09.2024	</td></tr>
                        <tr><td>	5	</td><td>	Educational Visit to DIDAC	</td><td>	20.09.2024	</td></tr>
                        <tr><td>	6	</td><td>	Visit to NWIC	</td><td>	01.10.2024	</td></tr>
                        <tr><td>	7	</td><td>	Network Bulls 	</td><td>	05.11.2024	</td></tr>
                        <tr><td>	8	</td><td>	National Zoological park	</td><td>	01.10.2024	</td></tr>
                        <tr><td>	9	</td><td>	MCA Final year student	</td><td>	05.11.2024	</td></tr>
                        <tr><td>	10	</td><td>	Network Bulls 	</td><td>	05.11.2024	</td></tr>
                        <tr><td>	11	</td><td>	Educational Visit to Big Data, Cloud Computing  & IOT Laboratory Jamia Millia Islamia	</td><td>	09.11.2024	</td></tr>
                        <tr><td>	12	</td><td>	Sundar Nursery and Humayun Tomb	</td><td>	21.02.2025	</td></tr>
                        <tr><td>	13	</td><td>	Educational Visit to Amrit Udyan	</td><td>	12.09.24	</td></tr>
                        <tr><td>	14	</td><td>	Educational Visit to Bharat Start-up and MSMEs Summit-2024	</td><td>	16.02.24	</td></tr>
                        <tr><td>	15	</td><td>	Visit to New Delhi world Book Fair,2025	</td><td>	08.02.2025	</td></tr>
                        <tr><td>	16	</td><td>	Visit to Atal Incubation centre 	</td><td>	23.08.2024	</td></tr>
                        <tr><td>	17	</td><td>	Bharat ka share bazar	</td><td>	18.11.2024	</td></tr>
                        <tr><td>	18	</td><td>	Bharat mobility Global expo 2025	</td><td>	22.01.2025	</td></tr>
                        <tr><td>	19	</td><td>	Parle G company	</td><td>	17.02.2025	</td></tr>
                        <tr><td>	20	</td><td>	Yakult Danone India	</td><td>	20.02.2025	</td></tr>
                        <tr><td>	21	</td><td>	Pradhan Mantri Sanghralaya 	</td><td>	07.03.2025	</td></tr>
                        <tr><td>	22	</td><td>	Mother dairy 	</td><td>	05.03.2025	</td></tr>
                        <tr><td>	23	</td><td>	Coca Cola Plant-Noida	</td><td>	05.03.2025	</td></tr>
                        <tr><td>	24	</td><td>	International Women’s Day 2025	</td><td>	08.03.2025	</td></tr>
                        <tr><td>	25	</td><td>	Lapete mein Netaji	</td><td>	08.08.2024	</td></tr>
                        <tr><td>	26	</td><td>	Yuvak At Doordarshan	</td><td>	10.08.2024	</td></tr>
                        <tr><td>	27	</td><td>	Photo video at ASIA 2024	</td><td>	31.08.2024	</td></tr>
                        <tr><td>	28	</td><td>	Media expo	</td><td>	13.09.2024	</td></tr>
                        <tr><td>	29	</td><td>	Trip to jaipur	</td><td>	13-16.09.2024	</td></tr>
                        <tr><td>	30	</td><td>	Photowalk to old delhi	</td><td>	01.10.2024	</td></tr>

            </tbody>
        </table>    
                    </div>
            <div class="ec-panel" data-year="2023-24">
              <h3 class="ec-subhead">YUVK</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Visit to India TV Studio on the Occasion of Chandrayan 3</td><td>23.8.23</td></tr>
                <tr><td>2</td><td>Visit to India TV Special Live Telecast: ”Show on 24 elections”</td><td></td></tr>
                <tr><td>3</td><td>Visit to India TV</td><td>29.8.23</td></tr>
                <tr><td>4</td><td>Visit to NDTV Talk Show “HUMLOG”</td><td>21.9.23</td></tr>
                <tr><td>5</td><td>Visit to India TV: Discussion on Women Reservation Bill, Remarks on Sanatan Dharm and OBC Reservation</td><td>23.9.23</td></tr>
                <tr><td>6</td><td>Industrial Visit to Dainik Jagran</td><td>29.9.23</td></tr>
                <tr><td>7</td><td>Lok Sabha Election 2024 Opinion Polls Series “Desh Ki Awaj”</td><td>7.10.23</td></tr>
                <tr><td>8</td><td>Introduction to Financial Market and Stock Trading - BSE Ltd</td><td>7.12.23</td></tr>
                <tr><td>9</td><td>Visit at Yakult</td><td>5.2.24</td></tr>
                <tr><td>10</td><td>Recreational College Tour to Kasol-Manali</td><td>5-10.04.2024</td></tr>
                <tr><td>11</td><td>Educational Visit to Bharat Drone Manthan at PHDCCI</td><td>28.03.2024</td></tr>
                <tr><td>12</td><td>Visit to Pragati Maidan</td><td>21.03.2024</td></tr>
                <tr><td>13</td><td>Educational Visit – Neighborhood Tree Watch Campaign</td><td>9.03.2024</td></tr>
                <tr><td>14</td><td>Industrial Visit to Glida EV Charging Station</td><td>8.03.2024</td></tr>
                <tr><td>15</td><td>Educational Visit to Global Summit ESG Advancement</td><td>5.03.2024</td></tr>
            </tbody>
        </table>

                    </div>
            <div class="ec-panel" data-year="2022-23">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>National Cooperative Union of India: Study Visit</td><td>13.7.22</td></tr>
                <tr><td>2</td><td>Securities and Exchange Board of India: Study Visit</td><td>30.9.22</td></tr>
                <tr><td>3</td><td>Mother Dairy: Study Visit</td><td>22-23.11.22</td></tr>
                <tr><td>4</td><td>Bombay Stock Exchange (BSE): Study Visit</td><td>20.03.23</td></tr>
                <tr><td>5</td><td>Biodiversity Park: Study Visit</td><td>06.05.23</td></tr>
                <tr><td>6</td><td>Network Bulls: Industrial Visit</td><td>24.05.23</td></tr>
            </tbody>
        </table>

                    </div>
            <div class="ec-panel" data-year="2021-22">
 <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Industrial Visit to Parle, Bahadurgarh</td><td>17.11.21</td></tr>
                <tr><td>2</td><td>Industrial Visit to Parle, Bahadurgarh</td><td>30.11.21</td></tr>
                <tr><td>3</td><td>Virtual Industrial Visit - Yakult Danone</td><td>22.6.22</td></tr>
                <tr><td>4</td><td>Barclays Mentorship Programme Phase II</td><td>22-23.6.22</td></tr>
            </tbody>
        </table>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</div>
    <div style="height: 10vh;"></div>
              <div style="margin:0;width:100%;">
                   <div class="container">
                            <div class="row">
                  <div id="my-carousel4" class="carousel slide carousel-fade" data-ride="carousel" style="margin-right: auto;margin-left: auto;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#my-carousel4" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel4" data-slide-to="1"></li>
        <li data-target="#my-carousel4" data-slide-to="2"></li>
    </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
      <div class="carousel-item active" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/outlook.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Outlook Magazine </h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Organized for:</strong>BA(JMC) students</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> April 09, 2024</h2>
             </div>
      </div>
     </div>
      <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/2ind_1.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Capturing Empowered Indians <br>at Old Delhi</h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Organized for:</strong>BA(JMC) students</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> March 23, 2024</h2>
             </div>
      </div>
     </div>
    
    <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
            <div class="col-md-2">
            <img class="d-block carousel-image img-responsive" src="images/indus/loddhi.jpg" alt="Diwali">
         </div>
         <div class="col-md-10 center">
             <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Photography Walk at<br> Lodhi Garden</h1>
             <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Organized for:</strong>BA(JMC) Students</h2>
             <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Date:</strong> March 14, 2024</h2>
         </div>
        </div>
         
    </div>
   
  </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#my-carousel4" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel4" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
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
