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
    <title>IITM | Events</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Poppins (theme font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
    <style>
html, body{ margin:0; }
.ec-page p{ text-align:justify; }

/* ============================================================
   Extra & Co-Curricular Events — refined maroon theme (2026)
   Scoped under .ec-page so the shared header/nav are untouched.
   ============================================================ */
:root{
  --ec-maroon:#800000; --ec-maroon-dark:#5e0000; --ec-maroon-light:#a52a2a;
  --ec-gold:#c9a227; --ec-gold-soft:#e7c65a; --ec-cream:#faf7f2;
  --ec-ink:#2b2b2b; --ec-grad:linear-gradient(135deg,#800000 0%,#a52a2a 55%,#5e0000 100%);
}
.ec-page{
  background:
     radial-gradient(circle at 0% 0%, rgba(201,162,39,.06), transparent 40%),
     radial-gradient(circle at 100% 18%, rgba(128,0,0,.05), transparent 45%),
     var(--ec-cream);
  font-family:'Poppins',system-ui,-apple-system,'Segoe UI',sans-serif;
  color:var(--ec-ink); padding:0 0 14px;
}
.ec-page *{ box-sizing:border-box; }
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

/* ---- intro cards ---- */
.ec-intro{ display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:32px; }
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

  /* keep the year tables readable and overflow-free on phones */
  .ec-page .ec-panel thead th{ padding:10px 8px; font-size:11px; }
  .ec-page .ec-panel tbody td{ padding:9px 8px; font-size:12.5px; }
  .ec-page .ec-panel tbody td:first-child{ width:34px; }
  .ec-page .ec-panel tbody td:last-child{ white-space:normal; }
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
      <h1 id="iipc" class="ec-hero-title">Extra &amp; Co-Curricular Events</h1>
      <span class="ec-hero-rule"></span>
    </header>

    <div class="row">
      <!-- Sidebar -->
      <aside class="col-lg-3 ec-sidebar-col">
        <nav class="ec-sidebar" aria-label="Events sections">
          <h2 class="ec-sidebar-title">Events</h2>
          <a class="ec-side-link active" href="https://iitmjanakpuri.com/events/extra.php">Extra &amp; Co-Curricular Events</a>
          <a class="ec-side-link" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
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
        <div class="ec-intro">
          <article class="ec-card">
            <h2 class="ec-card-title">Extra-Curricular Activities</h2>
            <p>Extracurricular activities constitute 
              an integral facet of collegiate existence, imbuing campus life with enrichment 
              and enjoyment. At IITM, there is a steadfast commitment to broadening students' 
              horizons beyond academic realms, fostering a conducive atmosphere for the 
              cultivation of communication and leadership proficiencies, 
              thereby fostering self-assurance and facilitating substantial 
              personal advancement. Engagement in committees, clubs, athletic 
              endeavors, and other extracurricular endeavors fosters the 
              acquisition of new competencies, engendering innovative learning 
              encounters. Such activities afford practical involvement and afford 
              a broad platform for showcasing talents and making meaningful societal contributions.</p>
          </article>
          <article class="ec-card">
            <h2 class="ec-card-title">Co-Curricular Activities</h2>
            <p>To facilitate comprehensive development 
              among students, the curriculum incorporates co-curricular activities. Significantly, 
              theoretical knowledge is applied through the organization of co-curricular 
              activities pertinent to classroom instruction. Intellectual facets of 
              individuals are cultivated through formal classroom education, whereas 
              character formation, spiritual development, and creative expression are 
              fostered through co-curricular pursuits. These activities, in conjunction 
              with formal education, channelize students' latent potential, thereby fostering their development into conscientious citizens.</p>
          </article>
        </div>

        <!-- Event calendar -->
        <section class="ec-events">
          <div class="ec-events-head">
            <h2 class="ec-section-title">Events by Year</h2>
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
                <tr><td>1</td><td>Green Light Initiative</td><td>31 January 2026</td></tr>
                <tr><td>2</td><td>Movie Screening DHURANDHAR</td><td>3 January 2026</td></tr>
                <tr><td>3</td><td>Holi Celebration</td><td>3 March 2026</td></tr>
                <tr><td>4</td><td>Yoga &amp; Distress Therapy Session</td><td>27 February 2026</td></tr>
                <tr><td>5</td><td>Republic Day celebrations</td><td>24 January 2026</td></tr>
                <tr><td>6</td><td>Unity March-NSS Event</td><td>12–23 November 2025</td></tr>
                <tr><td>7</td><td>Commitment to plastic free campus</td><td>12–15 September 2025</td></tr>
                <tr><td>8</td><td>Har-ghar Tiranga</td><td>4–15 August 2025</td></tr>
                <tr><td>9</td><td>Book Donation Drive</td><td>9 February 2026</td></tr>
                <tr><td>10</td><td>Health Awareness &amp; Blood donation Camp</td><td>18 February 2026</td></tr>
                <tr><td>11</td><td>Tribal Youth Exchange Programme</td><td>29 January 2026</td></tr>
                <tr><td>12</td><td>Health Camp</td><td>18 February 2026</td></tr>
                <tr><td>13</td><td>NSS collaboration Event</td><td>30 January 2026</td></tr>
                <tr><td>14</td><td>National Youth Festival</td><td>9–12 January 2026</td></tr>
                <tr><td>15</td><td>My Bharat Budget</td><td>18 February 2026</td></tr>
                <tr><td>16</td><td>Union Budget on Pharmaceuticals</td><td>18 February 2026</td></tr>
                <tr><td>17</td><td>Union Budget on Income Tax</td><td>18 February 2026</td></tr>
                <tr><td>18</td><td>Quiz Competition-NSS event</td><td>12–13 April 2026</td></tr>
                <tr><td>19</td><td>Yuva Connect Programme</td><td>17 April 2026</td></tr>
                <tr><td>20</td><td>Ekal rural Immersion Program</td><td>17 April 2026</td></tr>
                <tr><td>21</td><td>Sustainable Practices and cleanliness activities</td><td>1 August 2025</td></tr>
                <tr><td>22</td><td>Plantation of Saplings</td><td>1 August 2025</td></tr>
                <tr><td>23</td><td>Segregation and weeding out old records</td><td>1 August 2025</td></tr>
                <tr><td>24</td><td>How to reduce E-Waste</td><td>31 October 2025</td></tr>
                <tr><td>25</td><td>Blood donation</td><td>22 September 2025</td></tr>
                <tr><td>26</td><td>Teacher’s Day</td><td>4 September 2025</td></tr>
                <tr><td>27</td><td>ZERO-The innovators convention</td><td>19–20 September 2025</td></tr>
                <tr><td>28</td><td>MR &amp; Ms Fresher’s</td><td>30 August 2025</td></tr>
                <tr><td>29</td><td>Donation Drive</td><td>15 October 2025</td></tr>
                <tr><td>30</td><td>Visit to Ananya foundation</td><td>17 October 2025</td></tr>
                <tr><td>31</td><td>E-poster making competition</td><td>14 October 2025</td></tr>
                <tr><td>32</td><td>Hasya Kavi Sammelan</td><td>29 October 2025</td></tr>
                <tr><td>33</td><td>Talent Hunt</td><td>29 August 2025</td></tr>
                <tr><td>34</td><td>Awareness drive</td><td>11 November 2025</td></tr>
                <tr><td>35</td><td>Cleanliness drive</td><td>12 November 2025</td></tr>
                <tr><td>36</td><td>Founder’s Day</td><td>29 September 2025</td></tr>
                <tr><td>37</td><td>Cultural Event</td><td>27 August 2025</td></tr>
                <tr><td>38</td><td>Cultural Event</td><td>28 August 2025</td></tr>
                <tr><td>39</td><td>Plugging Drive</td><td>25 September 2025</td></tr>
                <tr><td>40</td><td>Dandiya Event</td><td>30 September 2025</td></tr>
                <tr><td>41</td><td>Annual Day</td><td>29 September 2025</td></tr>
                <tr><td>42</td><td>Diwali Celebration</td><td>17 October 2025</td></tr>
                <tr><td>43</td><td>Rakshabandhan celebration</td><td>2 August 2025</td></tr>
                <tr><td>44</td><td>Har ghar Tiranga</td><td>15 August 2025</td></tr>
                <tr><td>45</td><td>79th Independence day</td><td>14 August 2025</td></tr>
                <tr><td>46</td><td>Cultural day Celebration</td><td>14 August 2025</td></tr>
                <tr><td>47</td><td>Inter college poster making competition</td><td>10 September 2025</td></tr>
            </tbody>
        </table>
            </div>
            <div class="ec-panel" data-year="2024-25">
<table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                                <tr><td>	1	</td><td>	Essay writing competition	</td><td>14–17 September 2024</td></tr>
                                <tr><td>	2	</td><td>	Cover page designing Competition	</td><td>21–31 August 2024</td></tr>
                                <tr><td>	3	</td><td>	Blood Donation camp	</td><td>7 September 2024</td></tr>
                                <tr><td>	4	</td><td>	Plantation drive	</td><td>21 August 2024</td></tr>
                                <tr><td>	5	</td><td>	Independence day celebration	</td><td>14 August 2024</td></tr>
                                <tr><td>	6	</td><td>	Mr. & Ms. Freshers Contest 	</td><td>7 September 2024</td></tr>
                                <tr><td>	7	</td><td>	Talent Hunt 	</td><td>3 September 2024</td></tr>
                                <tr><td>	8	</td><td>	Raksha Bandhan Celebration	</td><td>10 August 2024</td></tr>
                                <tr><td>	9	</td><td>	Talent Hunt Engravers Talent Hunt  Talent Hunt	</td><td>28 August 2024</td></tr>
                                <tr><td>	10	</td><td>	Talent Hunt-Darmatic Society	</td><td>31 August 2024</td></tr>
                                <tr><td>	11	</td><td>	Plantation Drive “Ek ped maa ke naam”	</td><td>14 August 2024</td></tr>
                                <tr><td>	12	</td><td>	Matrix 2.0-tech fest	</td><td>20–21 September 2024</td></tr>
                                <tr><td>	13	</td><td>	Diwali Campaign	</td><td>30 October 2024</td></tr>
                                <tr><td>	14	</td><td>	Recruitment Drive – Cultural Committee	</td><td>25 September 2024</td></tr>
                                <tr><td>	15	</td><td>	Dandiya Fest	</td><td>11 October 2024</td></tr>
                                <tr><td>	16	</td><td>	Plastic Waste Management Campaign	</td><td>24–28 September 2024</td></tr>
                                <tr><td>	17	</td><td>	Ethnic Day	</td><td>5 October 2024</td></tr>
                                <tr><td>	18	</td><td>	Eye Camp for Senior Citizens	</td><td>1 October 2024</td></tr>
                                <tr><td>	19	</td><td>	Cyber Crime  Awareness  Campaign	</td><td>1 October 2024</td></tr>
                                <tr><td>	20	</td><td>	Cleanliness Drive	</td><td>27 August 2024</td></tr>
                                <tr><td>	21	</td><td>	Star Cast Interaction and Music Launch of Emergency Movie	</td><td>31 August 2024</td></tr>
                                <tr><td>	22	</td><td>	Intra College Debate Competition	</td><td>26 September 2024</td></tr>
                                <tr><td>	23	</td><td>	7th Global Strategy and Leadership Awards	</td><td>24 September 2024</td></tr>
                                <tr><td>	24	</td><td>	Hindi Writing Competition	</td><td>14 August 2024</td></tr>
                                <tr><td>	25	</td><td>	Poster Making Competition 	</td><td>9 October 2024</td></tr>
                                <tr><td>	26	</td><td>	Inter-college Declamation Contest	</td><td>20–26 November 2024</td></tr>
                                <tr><td>	27	</td><td>	Student’s Meet	</td><td>23 November 2024</td></tr>
                                <tr><td>	28	</td><td>	Cultural Competition	</td><td>29 October 2024</td></tr>
                                <tr><td>	29	</td><td>	Red Run Competition	</td><td>15 September 2024</td></tr>
                                <tr><td>	30	</td><td>	Web Innovative Competition	</td><td>20 August 2024</td></tr>
                                <tr><td>	31	</td><td>	Institute Internal Hackathon 	</td><td>31 August 2024</td></tr>
                                <tr><td>	32	</td><td>	NSS Drive	</td><td>29 October 2024</td></tr>
                                <tr><td>	33	</td><td>	Poster Making Competition	</td><td>27 October 2024</td></tr>
                                <tr><td>	34	</td><td>	Training Program 	</td><td>8–13 January 2025</td></tr>
                                <tr><td>	35	</td><td>	Cloth Donation Drive	</td><td>16–23 January 2025</td></tr>
                                <tr><td>	36	</td><td>	( Training-Cum-awareness Program)”Tobacco Control and cessation”	</td><td>22 January 2025</td></tr>
                                <tr><td>	37	</td><td>	Intra College Digital Poster making competition 	</td><td>27 January 2025</td></tr>
                                <tr><td>	38	</td><td>	Webinar on menstrual Hygiene	</td><td>28 January 2025</td></tr>
                                <tr><td>	39	</td><td>	Inter- college poster Making competition “WOMEN EMPOWERMENT”	</td><td>29 January 2025</td></tr>
                                <tr><td>	40	</td><td>	Campaign on Voter Awareness selfie campaign	</td><td>30 January 2025</td></tr>
                                <tr><td>	41	</td><td>	ED Cell (Samriddhi Competition) Inter College Competition	</td><td>11 February 2025</td></tr>
                                <tr><td>	42	</td><td>	Observance of Communal Harmony	</td><td>16–25 January 2025</td></tr>
                                <tr><td>	43	</td><td>	National Youth Festival	</td><td>8–13 January 2025</td></tr>
                                <tr><td>	44	</td><td>	Clothes Donation Drive	</td><td>16–23 January 2025</td></tr>
                                <tr><td>	45	</td><td>	Tobacco Control & Cessation	</td><td>22 January 2025</td></tr>
                                <tr><td>	46	</td><td>	Inter College Digital Poster Making Competition	</td><td>27 January 2025</td></tr>
                                <tr><td>	47	</td><td>	Inter College Digital Poster Making Competition – Women Empowerment	</td><td>29 January 2025</td></tr>
                                <tr><td>	48	</td><td>	Voter Awareness Selfie Campaign	</td><td>30 January 2025</td></tr>
                                <tr><td>	49	</td><td>	Mond-O-Pedia	</td><td>11 February 2025</td></tr>
                                <tr><td>	50	</td><td>	Poster Making Competition	</td><td>9 March 2025</td></tr>
                                <tr><td>	51	</td><td>	Bharat Drone Manthan 2.0	</td><td>12 March 2025</td></tr>
                                <tr><td>	52	</td><td>	Eco Vision 3D	</td><td>6 March 2025</td></tr>
                                <tr><td>	53	</td><td>	Intra College Sports Event - Kabaddi	</td><td>9 September 2024</td></tr>
                                <tr><td>	54	</td><td>	Intra College Sports Event - Cricket	</td><td>13–14 September 2024</td></tr>
                                <tr><td>	55	</td><td>	Intra College Sports Event - Table Tennis	</td><td>13–14 September 2024</td></tr>
                                <tr><td>	56	</td><td>	Intra College Sports Event - Volley Ball	</td><td>17 September 2024</td></tr>
                                <tr><td>	57	</td><td>	Intra College Sports Event - Power Lifting	</td><td>18–19 September 2024</td></tr>
                                <tr><td>	58	</td><td>	Intra College Sports Event - Athletics	</td><td>19 September 2024</td></tr>
                                <tr><td>	59	</td><td>	Intra College Sports Event - Badminton	</td><td>20 & 24 September 2024</td></tr>
                                <tr><td>	60	</td><td>	Intra College Sports Event - Basket Ball	</td><td>24 September 2024</td></tr>
                                <tr><td>	61	</td><td>	Intra College Sports Event - Chess	</td><td>27 & 28 September 2024</td></tr>
                                <tr><td>	62	</td><td>	Intra College Sports Event - Football	</td><td>28 September 2024</td></tr>
                                <tr><td>	63	</td><td>	Inter-College Sports Event - Badminton	</td><td>13–20 October 2024</td></tr>
                                <tr><td>	64	</td><td>	Inter-College Sports Event - KABADDI	</td><td>15–20 October 2024</td></tr>
                                <tr><td>	65	</td><td>	Inter-College Sports Event- Volley Ball	</td><td>16–20 October 2024</td></tr>
                                <tr><td>	66	</td><td>	Inter-college sports event-Athletics (Shot put and Race)	</td><td>16–20 October 2024</td></tr>
                                <tr><td>	67	</td><td>	Inter-college sports event-Tug of War	</td><td>22–27 October 2024</td></tr>
                                <tr><td>	68	</td><td>	Inter-college sports event-Football	</td><td>6–15 November 2024</td></tr>
                                <tr><td>	69	</td><td>	Inter-college sports event-Chess	</td><td>18–20 November 2024</td></tr>
                                <tr><td>	70	</td><td>	Workshop on Yoga	</td><td>20 March 2025</td></tr>
                                <tr><td>	71	</td><td>	Annual Sports Meet	</td><td>22–25 February 2025</td></tr>
            </tbody>
        </table>
            </div>
            <div class="ec-panel" data-year="2023-24">
<table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Cover Page Designing Competition</td><td>22 May – 5 June 2023</td></tr>
                <tr><td>2</td><td>Har Ghar Tringa</td><td>13–15 August 2023</td></tr>
                <tr><td>3</td><td>Panch Pran Pledge</td><td>14 August 2023</td></tr>
                <tr><td>4</td><td>Plantation Drive</td><td>14 August 2023</td></tr>
                <tr><td>5</td><td>Independence Day</td><td>14 August 2023</td></tr>
                <tr><td>6</td><td>Panch Pran Pledge - Online</td><td>17 August 2023</td></tr>
                <tr><td>7</td><td>World Entrepreneurship Day</td><td>21 August 2023</td></tr>
                <tr><td>8</td><td>Conclave on G-20 Nations</td><td>13 September 2023</td></tr>
                <tr><td>9</td><td>Hindi Diwas</td><td>14 September 2023</td></tr>
                <tr><td>10</td><td>Smart India Hackathon</td><td>27 September 2023</td></tr>
                <tr><td>11</td><td>Mega Swachhta Drive</td><td>4 October 2023</td></tr>
                <tr><td>12</td><td>IPU Health Mela</td><td>8 October 2023</td></tr>
                <tr><td>13</td><td>Poster Making Competition on Clean India Beautiful India</td><td>11 October 2023</td></tr>
                <tr><td>14</td><td>Seminar on Women Health Awareness Against Cancer</td><td>20 October 2023</td></tr>
                <tr><td>15</td><td>Matrix-Tech Fest</td><td>6–7 October 2023</td></tr>
                <tr><td>16</td><td>Cleanliness Drive</td><td>13 October 2023</td></tr>
                <tr><td>17</td><td>Videography Competition</td><td>9–14 October 2023</td></tr>
                <tr><td>18</td><td>Competition</td><td>22 September 2023</td></tr>
                <tr><td>19</td><td>Just a Minute</td><td>22 September 2023</td></tr>
                <tr><td>20</td><td>Battle of Wits – Intra College Debate Competition</td><td>23 September 2023</td></tr>
                <tr><td>21</td><td>Poetry Recitation Competition</td><td>25 September 2023</td></tr>
                <tr><td>22</td><td>Laugh Out Loud-Standup Comedy Competition</td><td>25 September 2023</td></tr>
                <tr><td>23</td><td>Lakeerin Star Cast Visit</td><td>31 October 2023</td></tr>
                <tr><td>24</td><td>UMUNG</td><td>17–18 November 2023</td></tr>
                <tr><td>25</td><td>Intra College Collage Making Competition</td><td>22 November 2023</td></tr>
                <tr><td>26</td><td>Inter College Debate Competition</td><td>23 November 2023</td></tr>
                <tr><td>27</td><td>Blood Donation Camp</td><td>29 November 2023</td></tr>
                <tr><td>28</td><td>National Youth Day Celebrations</td><td>12 January 2024</td></tr>
                <tr><td>29</td><td>Student Exchange Programme</td><td>12 December 2023</td></tr>
                <tr><td>30</td><td>Pledge of Rashtriya Gunvatta Pakhwada</td><td>25 January 2024</td></tr>
                <tr><td>31</td><td>Republic Day Celebration</td><td>25 January 2024</td></tr>
                <tr><td>32</td><td>Anugoonj Competitive (Painting Competition)</td><td>8 February 2024</td></tr>
                <tr><td>33</td><td>Anugoonj Competitive (Western Vocal Competition)</td><td>8 February 2024</td></tr>
                <tr><td>34</td><td>Anugoonj Competitive (Dance)</td><td>8 February 2024</td></tr>
                <tr><td>35</td><td>Anugoonj Competitive (Street Play)</td><td>8 February 2024</td></tr>
                <tr><td>36</td><td>Anugoonj Competitive (Folk Dance)</td><td>8 February 2024</td></tr>
                <tr><td>37</td><td>Anugoonj Competitive (JUST A MINUTE)</td><td>9 February 2024</td></tr>
                <tr><td>38</td><td>Anugoonj Competitive (Classical Vocal Solo)</td><td>9 February 2024</td></tr>
                <tr><td>39</td><td>Anugoonj Competitive (Group Song)</td><td>9 February 2024</td></tr>
                <tr><td>40</td><td>National Tribal Festival – Aadi Mahotsav</td><td>10 February 2024</td></tr>
                <tr><td>41</td><td>Mr & Ms. Anugoonj</td><td>10 February 2024</td></tr>
                <tr><td>42</td><td>Leadership Talk Season-2 (Motivation)</td><td>16–17 February 2024</td></tr>
                <tr><td>43</td><td>Project Exhibition and Demonstration</td><td>20 February 2024</td></tr>
                <tr><td>44</td><td>Alumni Meet- MBA, MCA and BCA</td><td>10 March 2024</td></tr>
                <tr><td>45</td><td>NSS National Integration Camp</td><td>12–18 March 2024</td></tr>
                <tr><td>46</td><td>Intra-College Declamation Competition</td><td>13 March 2024</td></tr>
                <tr><td>47</td><td>E-Poster Competition (Viksit Bharat)</td><td>15 March 2024</td></tr>
                <tr><td>48</td><td>Management Sapiens-Business Plan Competition</td><td>15 March 2024</td></tr>
                <tr><td>49</td><td>IT FEST - Ideathon</td><td>15 March 2024</td></tr>
                <tr><td>50</td><td>IT FEST – UI/UX Design</td><td>15 March 2024</td></tr>
                <tr><td>51</td><td>IT FEST – Techquizite</td><td>15 March 2024</td></tr>
                <tr><td>52</td><td>CommParv-Tally Masters</td><td>15 March 2024</td></tr>
                <tr><td>53</td><td>CommParv- E-Poster Competition</td><td>15 March 2024</td></tr>
                <tr><td>54</td><td>CommParv-Brand Quest Competition</td><td>15 March 2024</td></tr>
                <tr><td>55</td><td>CommParv-Master Mind</td><td>15 March 2024</td></tr>
                <tr><td>56</td><td>CommParv-The Big Bull</td><td>15 March 2024</td></tr>
                <tr><td>57</td><td>Commerce Fest</td><td>15 March 2024</td></tr>
                <tr><td>58</td><td>Case Study X Management Sapiens</td><td>15–16 March 2024</td></tr>
                <tr><td>59</td><td>Tech Fest (Hackathon)</td><td>15 March 2024</td></tr>
                <tr><td>60</td><td>Tech Fest (Project Exhibition)</td><td>15 March 2024</td></tr>
                <tr><td>61</td><td>Liteter-Less Campaign</td><td>15 April 2024</td></tr>
                <tr><td>62</td><td>Tech Fest – Massive Gaming</td><td>16 March 2024</td></tr>
                <tr><td>63</td><td>Tech Fest – Video Editing</td><td>16 March 2024</td></tr>
                <tr><td>64</td><td>Tech Fest – Ode to Code</td><td>16 March 2024</td></tr>
                <tr><td>65</td><td>Management Sapiens (JUST A MINUTE)</td><td>16 March 2024</td></tr>
                <tr><td>66</td><td>Tech Fest – Machine Learning</td><td>16 March 2024</td></tr>
                <tr><td>67</td><td>Inter-College Poster Making Competition</td><td>19 March 2024</td></tr>
                <tr><td>68</td><td>Eco Friendly Holi</td><td>22–24 March 2024</td></tr>
                <tr><td>69</td><td>Group Discussion</td><td>9 April 2024</td></tr>
                <tr><td>70</td><td>Annual Day Celebration</td><td>26 April 2024</td></tr>
                <tr><td>71</td><td>Yoga Session</td><td>12 February 2024</td></tr>
                <tr><td>72</td><td>Yoga Session</td><td>20 March 2024</td></tr>
                <tr><td>73</td><td>Yoga Session</td><td>24 February 2024</td></tr>
                <tr><td>74</td><td>Yoga Session</td><td>8 March 2024</td></tr>
                <tr><td>75</td><td>Alumni Meet – MCA, MBA & BCA</td><td>10 March 2024</td></tr>
                <tr><td>76</td><td>Videography Competition</td><td>18–22 March 2024</td></tr>
                <tr><td>77</td><td>InternHunt 7.0</td><td>20 April 2024</td></tr>
                <tr><td>78</td><td>Essay Writing Competition</td><td>22–29 April 2024</td></tr>
                <tr><td>79</td><td>Best Out of Waste Challenge</td><td>22 April 2024</td></tr>
                <tr><td>80</td><td>Visit of Gaishala</td><td>4 May 2024</td></tr>
                <tr><td>81</td><td>Farewell Party</td><td>10 May 2024</td></tr>
                <tr><td>82</td><td>Pet Feeding Drive</td><td>2 May 2024</td></tr>
                <tr><td>83</td><td>World Environment Day</td><td>5 June 2024</td></tr>
                <tr><td>84</td><td>Leadership Talks</td><td>16–17 February 2024</td></tr>
                <tr><td>85</td><td>InternHunt</td><td>20 April 2024</td></tr>
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
                <tr><td>1</td><td>Pitch-o-Pedia</td><td>23–24 September 2022</td></tr>
                <tr><td>2</td><td>Founder’s Day</td><td>29 September 2022</td></tr>
                <tr><td>3</td><td>Educational Trip to Pragati Maidan</td><td>4 October 2022</td></tr>
                <tr><td>4</td><td>Techquizite: Quest for Gyanmrit</td><td>18 October 2022</td></tr>
                <tr><td>5</td><td>Nature Photography Competition</td><td>11–18 October 2022</td></tr>
                <tr><td>6</td><td>BINGE WARS</td><td>19 October 2022</td></tr>
                <tr><td>7</td><td>Poster Making Competition on Say No To Crackers</td><td>20 October 2022</td></tr>
                <tr><td>8</td><td>Vigilance Awareness Week</td><td>31 October 2022</td></tr>
                <tr><td>9</td><td>Intra-Collage SQL Query Competition</td><td>12 November 2022</td></tr>
                <tr><td>10</td><td>Parindey Auditions</td><td>21 November 2022</td></tr>
                <tr><td>11</td><td>Talent Hunt</td><td>24 November 2022</td></tr>
                <tr><td>12</td><td>Treasure Hunt X Plantation Drive</td><td>29 November 2022</td></tr>
                <tr><td>13</td><td>MUN</td><td>2–3 December 2022</td></tr>
                <tr><td>14</td><td>Inter College Coding Competition</td><td>24 December 2022</td></tr>
                <tr><td>15</td><td>Logofy-Identify the Logo</td><td>28 December 2022</td></tr>
                <tr><td>16</td><td>Blood Donation Camp</td><td>5 January 2023</td></tr>
                <tr><td>17</td><td>Health Checkup Camp</td><td>6 January 2023</td></tr>
                <tr><td>18</td><td>Social Media Marketing for Creating a Change</td><td>9 January 2023</td></tr>
                <tr><td>19</td><td>Best Out of Waste Competition</td><td>12 January 2023</td></tr>
                <tr><td>20</td><td>Mock Parliament ”Vidhan Sabha”</td><td>20 January 2023</td></tr>
                <tr><td>21</td><td>Innovative Ways to Reduce E-Waste</td><td>25 January – 10 February 2023</td></tr>
                <tr><td>22</td><td>How to Reduce E-Waste</td><td>30 January 2023</td></tr>
                <tr><td>23</td><td>Anugoonj Prelims</td><td>23–24 February 2023</td></tr>
                <tr><td>24</td><td>Photography Competition</td><td>24–28 February 2023</td></tr>
                <tr><td>25</td><td>HR Conclave</td><td>25 February 2023</td></tr>
                <tr><td>26</td><td>Collage Making Competition on Flowers of G-20 Countries and 09 Invited Countries</td><td>27 February 2023</td></tr>
                <tr><td>27</td><td>Poster Making Competition on Food Culture of G-20 Countries and 09 Invited Countries</td><td>28 February 2023</td></tr>
                <tr><td>28</td><td>Visit to Mega Plantation Drive</td><td>28 February 2023</td></tr>
                <tr><td>29</td><td>Anugoonj</td><td>2–4 March 2023</td></tr>
                <tr><td>30</td><td>Alumni Meet</td><td>19 March 2023</td></tr>
                <tr><td>31</td><td>LOGOFY-G20</td><td>21 March 2023</td></tr>
                <tr><td>32</td><td>GD X Management Sapiens</td><td>24–25 March 2023</td></tr>
                <tr><td>33</td><td>Visit to Mega Plantation Drive</td><td>25 March 2023</td></tr>
                <tr><td>34</td><td>AdD O Mania</td><td>6 April 2023</td></tr>
                <tr><td>35</td><td>Nukkad Natak on Social Cause</td><td>7 April 2023</td></tr>
                <tr><td>36</td><td>Awareness Campaign on Self Hygiene and Self-Care for Females</td><td>17 April 2023</td></tr>
                <tr><td>37</td><td>Extempore Speech</td><td>21 April 2023</td></tr>
                <tr><td>38</td><td>Battle of Bits-An Intra College Debate Competition</td><td>25–26 April 2023</td></tr>
                <tr><td>39</td><td>Poster Making Competition</td><td>1 May 2023</td></tr>
                <tr><td>40</td><td>Disaster Management Fire Drill</td><td>1 May 2023</td></tr>
                <tr><td>41</td><td>Debate Competition</td><td>4 May 2023</td></tr>
                <tr><td>42</td><td>Annual Ekal Study Circle Meet</td><td>5 May 2023</td></tr>
                <tr><td>43</td><td>Essay Writing Competition</td><td>10 May 2023</td></tr>
                <tr><td>44</td><td>Internhunt 6.0</td><td>6 May 2023</td></tr>
                <tr><td>45</td><td>Yuva Utsav India 2047</td><td>28 May 2023</td></tr>
                <tr><td>46</td><td>Slogan Writing Competition</td><td>25–31 May 2023</td></tr>
                <tr><td>47</td><td>Visit to Thyagraj Stadium</td><td>5 June 2023</td></tr>
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
                <tr><td>1</td><td>Inter College Online Gaming Event – BGMI and Chess</td><td>19 July 2021</td></tr>
                <tr><td>2</td><td>Azadi Ka Amrut Mahotsav</td><td>14 August 2021</td></tr>
                <tr><td>3</td><td>Independence Day</td><td>14 August 2021</td></tr>
                <tr><td>4</td><td>Rakshabandhan</td><td>21 August 2021</td></tr>
                <tr><td>5</td><td>Spoil Your Loved ones With Care</td><td>28 August 2021</td></tr>
                <tr><td>6</td><td>Inter College Poster Making Competition</td><td>28 August 2021</td></tr>
                <tr><td>7</td><td>Inter college Mono Acting Competition</td><td>28 August 2021</td></tr>
                <tr><td>8</td><td>National Level Coding Competition</td><td>3 September 2021</td></tr>
                <tr><td>9</td><td>Inter College Chess Competition</td><td>11 September 2021</td></tr>
                <tr><td>10</td><td>National Level Hindi Poetry Recitation Competition</td><td>18 September 2021</td></tr>
                <tr><td>11</td><td>National Level Singing Competition</td><td>18 September 2021</td></tr>
                <tr><td>12</td><td>What the Bug</td><td>25 September 2021</td></tr>
                <tr><td>13</td><td>Founder’s Day</td><td>29 September 2021</td></tr>
                <tr><td>14</td><td>Annual Day</td><td>29 September 2021</td></tr>
                <tr><td>15</td><td>Paperless Painting</td><td>9 October 2021</td></tr>
                <tr><td>16</td><td>Mind-O-Pedia 2.0 – Quiz Competition</td><td>8 October 2021</td></tr>
                <tr><td>17</td><td>Battle of Wits-Inter college Debate Competition</td><td>30 October 2021</td></tr>
                <tr><td>18</td><td>Intra College Chess Tournament</td><td>1 November 2021</td></tr>
                <tr><td>19</td><td>Diwali Celebration- Rangoli Making and Diya Making Competition</td><td>3 November 2021</td></tr>
                <tr><td>20</td><td>Project Exhibition Cum Competition</td><td>25 November 2021</td></tr>
                <tr><td>21</td><td>EDP Scheme of Govt. of NCT of Delhi</td><td>4 October 2021</td></tr>
                <tr><td>22</td><td>Report on Inter college Poster Making Competition</td><td>11 November 2021</td></tr>
                <tr><td>23</td><td>Orientation Programme – MBA</td><td>1 December 2021</td></tr>
                <tr><td>24</td><td>Orientation Programme – B.Com(H)</td><td>1 December 2021</td></tr>
                <tr><td>25</td><td>Poster Competition on No Smoking Day</td><td>21 February 2022</td></tr>
                <tr><td>26</td><td>Talent Hunt</td><td>24 February 2022</td></tr>
                <tr><td>27</td><td>Intra College Indoor Tournament</td><td>3 March 2022</td></tr>
                <tr><td>28</td><td>Recreational College Tour to Kullu Manali</td><td>19 March 2022</td></tr>
                <tr><td>29</td><td>Blood Donation Camp- A Social Initiative</td><td>21 March 2022</td></tr>
                <tr><td>30</td><td>GD Competition</td><td>1–2 April 2022</td></tr>
                <tr><td>31</td><td>Go Green</td><td>23 April 2022</td></tr>
                <tr><td>32</td><td>Cloths Donation Camp</td><td>28 April 2022</td></tr>
                <tr><td>33</td><td>Internhunt 5.0</td><td>7 May 2022</td></tr>
                <tr><td>34</td><td>Educational College Trip to Drone Festival of India</td><td>28 May 2022</td></tr>
                <tr><td>35</td><td>International Day of Yoga</td><td>21 June 2022</td></tr>
                <tr><td>36</td><td>Youth Talkathon</td><td>8 July 2022</td></tr>
                <tr><td>37</td><td>Intra-College Debate Competition</td><td>15 July 2022</td></tr>
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
    var nr = panel.querySelector('.ec-no-results');
    if(nr) nr.style.display = (shown === 0) ? '' : 'none';
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