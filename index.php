<?php
// Cache HTML for 5 minutes; revalidate against server before reuse
header("Cache-Control: public, max-age=300, must-revalidate");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD || performance.getEntriesByType("navigation")[0].type === "back_forward")) {';
echo '   window.location.href = "index.php";';
echo '}';
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM Janakpuri | Established 1999 | Established - 1999 | Institute of Information Technology & Management | IITM Janakpuri |  BA (JMC) | Top BAJMC College of IP University | IPU | Top BAJMC College in IPU | mass communication colleges in IPU | Top BAJMC College in IP University | Best Journalism College in Delhi | Top BAJMC College in Delhi | BJMC | Media Hub | Journalism Courses near me |
    Best Mass Communication Colleges in Delhi | IITm Delhi | Top BJMC Colleges | BJMC ke liye IITM kaisa college hai| IITM me bjmc ka placement kaisa hai | Top Placements in BAJMC | IITM BAJMC placements | Placements in BJMC | How are the BJMC placements of IITM </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Modern font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap JS -->

    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}
        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }

        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 10px;
            padding-right: 0;
        }
        .hero-title{
            font-size: 20px;
        }

  .carousel-inner {
        width: 100%; /* Ensure the carousel spans the full width of the screen */
        height: auto; /* Allow height to adjust dynamically */
    }

    .carousel-item img {
        width: 100%; /* Make the image stretch across the full width */
        height: auto; /* Maintain the image's aspect ratio */
        object-fit: cover; /* Fill the container while maintaining aspect ratio */
    }

    .carousel-item {
        display: flex;
        align-items: center;
        justify-content: center;
    }
@media (max-width: 768px) {
    .svg-icon-container {
        margin-bottom: 30px; /* Adjust spacing for smaller screens */
    }

    .programmes .icon {
        width: 70px;
        height: 70px; /* Adjust icon size for smaller screens */
    }


    .marquee-hot{
  color:#0b1020;
  font-weight:900;
  padding:6px 12px;
  border-radius:999px;
  background: linear-gradient(135deg,#7c5cff,#23c4ff);
  text-decoration:none;
  box-shadow:0 8px 20px rgba(0,0,0,.18);
}
.marquee-hot:hover{ filter:brightness(1.05); text-decoration:none; }

}


.course-intake-section{
    background: #fff;
    padding: 25px 0 10px;
}

.course-title{
    text-align: center;
    font-weight: bold;
    color: #800000;
    margin-bottom: 15px;
    font-size: 22px;
    border-bottom: 2px solid #800000;
    display: inline-block;
    padding-bottom: 5px;
}

.course-wrap{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

.course-box{
    border: 2px solid #800000;
    border-radius: 8px;
    padding: 12px 20px;
    text-align: center;
    background: #fffaf5;
    min-width: 120px;
    transition: 0.3s;
}

.course-box:hover{
    background: #800000;
    color: #fff;
    transform: translateY(-3px);
}

.course-name{
    font-weight: bold;
    font-size: 16px;
}

.course-value{
    font-size: 18px;
    font-weight: bold;
}

@media(max-width:768px){
    .course-box{
        min-width: 100px;
        padding: 10px;
    }
}

/* Collapse the giant empty gap between "Explore IITM" and "Course Intake" on mobile.
   The Welcome section is mostly commented out, the lowerb wrapper has a 2rem top margin,
   and there's an empty admissions card placeholder that all add up to ~100px of dead space. */
@media (max-width: 991.98px){
    .modern-explore{ margin-bottom: 0 !important; }

    /* Welcome section ("bwhite") — empty content, just collapse it */
    .bwhite{ padding: 0 !important; margin: 0 !important; }
    .bwhite > .container{ padding: 0 !important; margin: 0 !important; }
    .bwhite .row{ margin: 0 !important; }
    .bwhite .container .container{ padding: 0 !important; margin: 0 !important; }

    /* Lowerb wrapper — drop the 2rem top margin and inner Bootstrap padding */
    .lowerb{ margin-top: 0 !important; padding: 0 !important; }
    .lowerb > .row{ margin: 0 !important; min-height: 0 !important; }
    .lowerb .row > .container{ padding: 0 !important; }
    .lowerb .col-md{ padding: 0 !important; }
    .lowerb .col-md-7 > .container{ padding: 0 !important; }
    .lowerb .col-md-7 .row{ margin: 0 !important; }

    /* Hide ALL the empty wrapper rows above course-intake:
       (1) the decorative empty row at top of .lowerb
       (2) the row containing the now-hidden empty admissions card
       (3) the empty row inside .col-md-7 > .container
       (4) the 5vh spacer inside .col-md-7 > .container */
    .lowerb > .row:nth-of-type(1),
    .lowerb > .row:nth-of-type(2){ display: none !important; }
    .lowerb .col-md-7 > .container > .row:first-child{ display: none !important; }
    .lowerb .col-md-7 > .container > div[style*="height: 5vh"]{ display: none !important; }

    /* Empty admissions placeholder card (content commented out) — hide it */
    .lowerb .card.sliders3-ed[style*="background-color: #800000"]{
        display: none !important;
    }

    /* Course-intake itself: minimal top padding, sits flush after Explore IITM */
    .course-intake-section{ padding-top: 4px !important; }
}

/* Course Intake — compact 3-per-row mobile */
@media (max-width: 991.98px){
    .course-intake-section{ padding: 14px 0 6px !important; }
    .course-title{
        font-size: 16px !important;
        margin-bottom: 10px !important;
        padding-bottom: 4px !important;
    }
    .course-wrap{
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 8px !important;
        padding: 0 14px !important;
    }
    .course-box{
        padding: 8px 4px !important;
        min-width: 0 !important;
        border-radius: 10px !important;
        border-width: 1.5px !important;
    }
    .course-name{ font-size: 11px !important; line-height: 1.15 !important; }
    .course-value{ font-size: 15px !important; margin-top: 2px; }
}

/* ===================== MOBILE HOME REDESIGN ===================== */
/* Floating sticky "Apply Now" CTA — visible on mobile only */
.mobile-apply-fab{
    display: none;
}

@media (max-width: 991.98px){
    .mobile-apply-fab{
        display: flex;
        position: fixed;
        right: 14px;
        bottom: 18px;
        z-index: 1080;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg,#ffb703 0%,#fb8500 50%,#d62828 100%);
        color: #fff !important;
        font-weight: 800;
        font-size: 14px;
        padding: 12px 16px;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 8px 22px rgba(214,40,40,.45);
        animation: fabPulse 1.8s ease-in-out infinite;
    }
    .mobile-apply-fab:hover,
    .mobile-apply-fab:focus{
        color: #fff !important;
        text-decoration: none;
        transform: translateY(-1px);
    }
    .mobile-apply-fab .fab-icon{
        font-size: 18px;
    }
}

@keyframes fabPulse{
    0%,100%{ box-shadow: 0 8px 22px rgba(214,40,40,.45); }
    50%    { box-shadow: 0 12px 30px rgba(214,40,40,.75); }
}

/* Eye-catching admissions hero card (mobile) */
.mobile-admissions-hero{
    display: none;
}

@media (max-width: 991.98px){
    .mobile-admissions-hero{
        display: block;
        margin: 14px 12px 6px;
        padding: 18px 16px;
        border-radius: 14px;
        background: linear-gradient(135deg,#800000 0%,#a52a2a 50%,#d62828 100%);
        color: #fff;
        text-align: center;
        box-shadow: 0 8px 22px rgba(128,0,0,.30);
        position: relative;
        overflow: hidden;
    }
    .mobile-admissions-hero::before{
        content:"";
        position:absolute;
        top:-30%; right:-20%;
        width:200px; height:200px;
        background: radial-gradient(circle, rgba(255,183,3,.35) 0%, transparent 70%);
    }
    .mobile-admissions-hero h3{
        font-size: 22px;
        font-weight: 900;
        margin: 0 0 4px;
        letter-spacing: .3px;
    }
    .mobile-admissions-hero p{
        margin: 0 0 12px;
        font-size: 13px;
        opacity: .92;
    }
    .mobile-admissions-hero .hero-actions{
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .mobile-admissions-hero .hero-btn{
        background: #ffb703;
        color: #5e0000 !important;
        font-weight: 800;
        padding: 10px 16px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(0,0,0,.18);
    }
    .mobile-admissions-hero .hero-btn.outline{
        background: rgba(255,255,255,.15);
        color: #fff !important;
        border: 1.5px solid #fff;
    }
    .mobile-admissions-hero .hero-btn:hover,
    .mobile-admissions-hero .hero-btn:focus{
        text-decoration: none;
    }
}

/* Compact homepage sections on mobile */
@media (max-width: 991.98px){
    /* Cap promo video height */
    .container-fluid > video{
        max-height: 36vh !important;
        object-fit: cover;
    }

    /* Carousel images: smaller */
    #carouselExampleIndicators1 .carousel-item img{
        max-height: 40vh;
        object-fit: cover;
    }

    /* Reduce huge vertical spacers — collapse them almost entirely on mobile */
    div[style*="height: 5vh"],
    div[style*="height: 10vh"]{
        height: 4px !important;
    }

    /* Course intake: 2-column grid */
    .course-intake-section{ padding: 16px 0 4px; }
    .course-title{ font-size: 18px; }
    .course-wrap{
        display: grid !important;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 0 14px;
    }
    .course-box{
        min-width: 0 !important;
        padding: 10px 6px !important;
    }
    .course-name{ font-size: 13px; }
    .course-value{ font-size: 16px; }

    /* "IITM In News" carousel — compact */
    .card.sliders3-ed{
        margin: 12px !important;
        border-radius: 10px;
    }
    .card.sliders3-ed .card-title{ font-size: 1.1rem !important; }
    .card.sliders3-ed .carousel-item img{
        max-height: 220px;
        object-fit: contain;
    }

    /* Notices block — compact, tighter spacing between items */
    .col-md-3 > div h1.nt{ font-size: 20px !important; margin: 6px 0 8px !important; }
    .col-md-3 > div .badge{ font-size: 10px !important; padding: 3px 6px !important; margin-right: 4px; }
    .col-md-3 > div .nt{ font-size: 12.5px !important; line-height: 1.3 !important; }
    .col-md-3 > div a.tgfmlt{ display: inline-block; margin: 3px 0; }
    .col-md-3 > div .scp2{ font-size: 10px !important; color: #666; margin: 2px 0 !important; }
    .col-md-3 > div br{ display: none; } /* drop double-spacing line breaks */
    .col-md-3 > div { margin: 0.5em !important; }
    .col-md-3 > div a.btn-danger{
        margin-top: 8px !important;
        padding: 6px 12px !important;
        font-size: 12px !important;
    }

    /* Programmes (Incubation / Green / Societies / Counselling) — ultra-compact 2×2 grid */
    .container[style*="background-color: #f0f8ff"]{
        padding: 8px !important;
        margin-top: 6px !important;
        background: linear-gradient(135deg,#fff7ed,#fdf3e7) !important;
    }
    .container[style*="background-color: #f0f8ff"] .row{
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 6px !important;
        margin: 0 !important;
    }
    .container[style*="background-color: #f0f8ff"] .svg-icon-container{
        flex: unset !important;
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    .programmes{ margin: 0 !important; }
    .programmes a{
        padding: 14px 8px !important;
        border-radius: 10px !important;
    }
    .programmes .text{
        font-size: 14px !important;
        font-weight: 700 !important;
        line-height: 1.2 !important;
        margin: 0 !important;
    }

    /* Follow Us — base block already compact; no mobile override needed */

    /* Hero header section — keep text but tighten */
    .hero-section{ padding: 8px 6px !important; }
    .hero-section .hero-title{ font-size: 14px !important; line-height: 1.25; }
    .hero-section p{ font-size: 11px !important; line-height: 1.3; }
    .hero-section .col-md-3 p{ font-size: 12px !important; margin-bottom: 4px; }
    .logo{ height: 56px !important; width: auto !important; margin-top: 4px !important; }

    /* Marquee — slightly smaller */
    .marquee-container{ font-size: 13px; padding: 4px 0; }

    /* No body padding-bottom — the footer itself reserves space for the FABs below its bottom bar
       so the FABs always sit over the dark maroon footer area, not over a white gap. */
    body{ padding-bottom: 0; }
}

/* ========================== MODERN HOME ELEMENTS ========================== */

/* ==================== PLACEMENT HIGHLIGHTS ==================== */
.placement-section{
    margin: 24px auto 6px;
    padding: 0 14px;
    max-width: 1100px;
}
.placement-section .placement-title{
    text-align: center;
    margin-bottom: 16px;
}
.placement-section .placement-title h2{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 22px;
    font-weight: 800;
    color: #800000;
    margin: 0;
    letter-spacing: .3px;
}
.placement-section .placement-title h2::after{
    content:"";
    display: block;
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg,#800000,#fb8500);
    border-radius: 3px;
    margin: 8px auto 0;
}
.placement-section .placement-title p{
    color: #6b6b6b;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 13px;
    margin: 6px 0 0;
}

.placement-grid{
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 12px;
}
@media (max-width: 991.98px){
    .placement-grid{ grid-template-columns: repeat(3, 1fr); gap: 10px; }
}
@media (max-width: 575px){
    .placement-grid{ grid-template-columns: repeat(2, 1fr); gap: 8px; }
}

.placement-card{
    background: linear-gradient(135deg,#ffffff 0%,#fdf3e7 100%);
    border: 1px solid rgba(128,0,0,.12);
    border-radius: 14px;
    padding: 14px 8px;
    text-align: center;
    box-shadow: 0 4px 14px rgba(128,0,0,.08);
    transition: transform .25s ease, box-shadow .25s ease;
    font-family: 'Poppins', system-ui, sans-serif;
    animation: fadeUp .5s ease backwards;
    position: relative;
    overflow: hidden;
}
.placement-card:hover{
    transform: translateY(-4px);
    box-shadow: 0 14px 28px rgba(128,0,0,.18);
}
.placement-card:nth-child(1){ animation-delay: .05s; }
.placement-card:nth-child(2){ animation-delay: .12s; }
.placement-card:nth-child(3){ animation-delay: .19s; }
.placement-card:nth-child(4){ animation-delay: .26s; }
.placement-card:nth-child(5){ animation-delay: .33s; }
.placement-card:nth-child(6){ animation-delay: .40s; }

.placement-card .pkg-course{
    font-size: 11px;
    font-weight: 800;
    color: #800000;
    text-transform: uppercase;
    letter-spacing: .9px;
    margin-bottom: 6px;
    display: block;
    line-height: 1.1;
}
.placement-card .pkg-value{
    font-size: 20px;
    font-weight: 800;
    line-height: 1;
    background: linear-gradient(135deg,#800000,#d62828,#fb8500);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: transparent;
    display: block;
    margin-bottom: 4px;
}
.placement-card .pkg-value small{
    font-size: 11px;
    font-weight: 700;
    margin-left: 2px;
}
.placement-card .pkg-label{
    font-size: 10px;
    color: #6b6b6b;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .6px;
    line-height: 1.2;
    display: block;
}
@media (min-width: 992px){
    .placement-card .pkg-value{ font-size: 24px; }
    .placement-card .pkg-value small{ font-size: 12px; }
}

/* Featured "Highest Package" card — gold gradient + crown */
.placement-card.featured{
    background: linear-gradient(135deg,#ffe27a 0%,#ffb703 55%,#fb8500 100%);
    border: 1px solid #fb8500;
    box-shadow: 0 8px 22px rgba(251,133,0,.30);
    animation: fadeUp .5s ease backwards, featuredPulse 2.6s ease-in-out infinite 1s;
}
.placement-card.featured:hover{
    box-shadow: 0 16px 32px rgba(251,133,0,.45);
}
.placement-card.featured .pkg-course,
.placement-card.featured .pkg-label{
    color: #5e0000;
}
.placement-card.featured .pkg-value{
    background: linear-gradient(135deg,#5e0000,#800000,#3d0000);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
.placement-card.featured::before{
    content: "👑";
    position: absolute;
    top: 4px;
    right: 6px;
    font-size: 14px;
    transform: rotate(14deg);
    filter: drop-shadow(0 2px 3px rgba(0,0,0,.18));
}

@keyframes featuredPulse{
    0%,100%{ box-shadow: 0 8px 22px rgba(251,133,0,.30); }
    50%    { box-shadow: 0 12px 30px rgba(251,133,0,.55); }
}

/* Modern stats strip — 6 cards: 6 cols desktop, 3 cols tablet, 2 cols mobile */
.modern-stats{
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 12px;
    margin: 22px auto;
    padding: 0 14px;
    max-width: 1100px;
}
@media (max-width: 991.98px){
    .modern-stats{ grid-template-columns: repeat(3, 1fr); gap: 10px; }
}
@media (max-width: 575px){
    .modern-stats{ grid-template-columns: repeat(2, 1fr); gap: 8px; }
}

.stat-card{
    background: linear-gradient(135deg, #ffffff 0%, #fdf3e7 100%);
    border: 1px solid rgba(128,0,0,.10);
    border-radius: 16px;
    padding: 16px 8px;
    text-align: center;
    box-shadow: 0 6px 18px rgba(128,0,0,.07);
    transition: transform .25s ease, box-shadow .25s ease;
    animation: fadeUp .5s ease backwards;
}
.stat-card:nth-child(1){ animation-delay: .05s; }
.stat-card:nth-child(2){ animation-delay: .12s; }
.stat-card:nth-child(3){ animation-delay: .19s; }
.stat-card:nth-child(4){ animation-delay: .26s; }
.stat-card:nth-child(5){ animation-delay: .33s; }
.stat-card:nth-child(6){ animation-delay: .40s; }

.stat-card:hover{
    transform: translateY(-4px);
    box-shadow: 0 14px 28px rgba(128,0,0,.18);
}

.stat-card .stat-icon{
    font-size: 24px;
    display: block;
    margin-bottom: 6px;
}

.stat-card .stat-num{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 22px;
    font-weight: 800;
    line-height: 1.05;
    background: linear-gradient(135deg,#800000,#d62828,#fb8500);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: transparent;
    display: block;
}
@media (min-width: 992px){
    .stat-card .stat-num{ font-size: 26px; }
}

.stat-card .stat-label{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 11px;
    font-weight: 600;
    color: #6b6b6b;
    text-transform: uppercase;
    letter-spacing: .8px;
    margin-top: 8px;
    display: block;
    line-height: 1.2;
}

/* Modern "Explore IITM" quick-access cards */
.modern-explore{
    margin: 28px auto;
    padding: 0 14px;
    max-width: 1100px;
}

.modern-explore .explore-title{
    text-align: center;
    margin-bottom: 18px;
}

.modern-explore .explore-title h2{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 24px;
    font-weight: 800;
    color: #800000;
    margin: 0;
    letter-spacing: .3px;
}

.modern-explore .explore-title h2::after{
    content:"";
    display: block;
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg,#800000,#fb8500);
    border-radius: 3px;
    margin: 8px auto 0;
}

.modern-explore .explore-title p{
    color: #6b6b6b;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 13px;
    margin: 8px 0 0;
}

.explore-grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);  /* compact 3-per-row mobile (3+3 for 6 cards) */
    gap: 10px;
}
@media (min-width: 576px){ .explore-grid{ grid-template-columns: repeat(3, 1fr); gap: 12px; } }
@media (min-width: 768px){ .explore-grid{ grid-template-columns: repeat(6, 1fr); } }

.explore-card{
    background: #fff;
    border-radius: 14px;
    padding: 14px 6px 12px;
    text-align: center;
    text-decoration: none;
    color: #2b2b2b;
    box-shadow: 0 4px 14px rgba(0,0,0,.06);
    border: 1px solid rgba(0,0,0,.05);
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease, background .3s ease;
    position: relative;
    overflow: hidden;
    animation: fadeUp .5s ease backwards;
}

/* Subtle gradient sheen on hover */
.explore-card::after{
    content:"";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, transparent 50%, rgba(128,0,0,.04) 100%);
    opacity: 0;
    transition: opacity .3s ease;
    pointer-events: none;
}
.explore-card:hover::after{ opacity: 1; }
.explore-grid .explore-card:nth-child(1){ animation-delay: .05s; }
.explore-grid .explore-card:nth-child(2){ animation-delay: .12s; }
.explore-grid .explore-card:nth-child(3){ animation-delay: .19s; }
.explore-grid .explore-card:nth-child(4){ animation-delay: .26s; }
.explore-grid .explore-card:nth-child(5){ animation-delay: .33s; }
.explore-grid .explore-card:nth-child(6){ animation-delay: .40s; }

.explore-card:hover{
    transform: translateY(-5px);
    text-decoration: none;
    color: #2b2b2b;
    box-shadow: 0 16px 32px rgba(0,0,0,.12);
    border-color: rgba(128,0,0,.15);
}

.explore-card .explore-icon{
    width: 44px;
    height: 44px;
    margin: 0 auto 8px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,.18);
    transition: transform .3s ease;
}
.explore-card:hover .explore-icon{
    transform: scale(1.1) rotate(-3deg);
}
@media (min-width: 768px){
    .explore-card .explore-icon{ width: 54px; height: 54px; font-size: 26px; border-radius: 16px; margin-bottom: 10px; }
    .explore-card{ padding: 18px 10px; }
}

.explore-card.c1 .explore-icon{ background: linear-gradient(135deg,#800000,#d62828); }
.explore-card.c2 .explore-icon{ background: linear-gradient(135deg,#0077b6,#00b4d8); }
.explore-card.c3 .explore-icon{ background: linear-gradient(135deg,#588157,#a3b18a); }
.explore-card.c4 .explore-icon{ background: linear-gradient(135deg,#7c5cff,#23c4ff); }
.explore-card.c5 .explore-icon{ background: linear-gradient(135deg,#fb8500,#ffb703); }
.explore-card.c6 .explore-icon{ background: linear-gradient(135deg,#e63946,#d62828); }

.explore-card .explore-name{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    color: #2b2b2b;
    line-height: 1.2;
    display: block;
}
@media (min-width: 768px){
    .explore-card .explore-name{ font-size: 13px; line-height: 1.25; }
}

@keyframes fadeUp{
    from{ opacity: 0; transform: translateY(18px); }
    to  { opacity: 1; transform: translateY(0); }
}

/* Modernize marquee bar */
.marquee-container{
    position: relative;
    background: linear-gradient(90deg,#fff7ed 0%,#ffe9d3 100%);
    border-top: 1px solid rgba(128,0,0,.12);
    border-bottom: 1px solid rgba(128,0,0,.12);
    padding: 8px 0 8px 86px;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 14px;
}
.marquee-container::before{
    content:"LATEST";
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    background: linear-gradient(135deg,#800000,#d62828);
    color: #fff;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.2px;
    padding: 4px 10px;
    border-radius: 50px;
    box-shadow: 0 4px 10px rgba(128,0,0,.25);
}
.marquee-container marquee a{
    color: #800000;
    font-weight: 600;
    text-decoration: none;
    margin-right: 8px;
}
.marquee-container marquee a:hover{ color: #d62828; }

/* Modernize "IITM In News" carousel frame on mobile */
@media (max-width: 991.98px){
    .card.sliders3-ed{
        background: linear-gradient(135deg,#800000 0%,#a52a2a 50%,#5e0000 100%) !important;
        border: 0 !important;
        box-shadow: 0 12px 28px rgba(128,0,0,.25);
    }
    .card.sliders3-ed .card-title{
        font-family: 'Poppins', system-ui, sans-serif !important;
        font-weight: 800 !important;
        letter-spacing: .5px;
        text-transform: uppercase;
    }
    .card.sliders3-ed .carousel-item img{
        border-radius: 8px;
    }
}

/* Modernize Notices block */
.col-md-3 > div h1.nt{
    font-family: 'Poppins', system-ui, sans-serif;
}

@media (max-width: 991.98px){
    .col-md-3 > div h1.nt{
        font-size: 22px !important;
        font-weight: 800;
        color: #800000;
        position: relative;
        padding-left: 14px;
    }
    .col-md-3 > div h1.nt::before{
        content:"";
        position: absolute;
        left: 0; top: 6px;
        width: 5px;
        height: 22px;
        background: linear-gradient(180deg,#800000,#d62828);
        border-radius: 5px;
    }
}

/* Modernize programmes (icon row) */
.programmes a{
    display: block;
    background: #fff;
    border-radius: 14px;
    padding: 16px 8px;
    text-align: center;
    text-decoration: none;
    color: #800000 !important;
    border: 1px solid rgba(128,0,0,.12);
    transition: transform .25s ease, box-shadow .25s ease;
    font-family: 'Poppins', system-ui, sans-serif;
    font-weight: 600;
}
.programmes a:hover{
    transform: translateY(-3px);
    box-shadow: 0 12px 22px rgba(128,0,0,.15);
    text-decoration: none;
    background: linear-gradient(135deg,#800000,#a52a2a);
    color: #fff !important;
}
.programmes .text{
    margin: 0;
}

/* ==================== COMPACT MODERN FOLLOW US ==================== */
.follow-us-icons{
    background: linear-gradient(135deg,#fff7ed 0%,#ffe9d3 50%,#fcd5b4 100%) !important;
    padding: 18px 14px !important;
    position: relative;
    overflow: hidden;
}
.follow-us-icons::before,
.follow-us-icons::after{
    content:"";
    position: absolute;
    width: 180px; height: 180px;
    border-radius: 50%;
    filter: blur(50px);
    pointer-events: none;
    opacity: .30;
}
.follow-us-icons::before{
    top: -90px; left: -60px;
    background: radial-gradient(circle, rgba(255,183,3,.7), transparent);
}
.follow-us-icons::after{
    bottom: -90px; right: -60px;
    background: radial-gradient(circle, rgba(214,40,40,.55), transparent);
}
.follow-us-icons .container,
.follow-us-icons .row,
.follow-us-icons .col-md-12{
    position: relative;
    z-index: 1;
}

.follow-s-txt{
    font-family: 'Poppins', system-ui, sans-serif !important;
    font-size: 20px !important;
    font-weight: 800 !important;
    letter-spacing: .4px;
    background: linear-gradient(135deg,#800000,#d62828,#fb8500);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: transparent !important;
    margin-bottom: 2px !important;
    display: block;
    line-height: 1.1;
}

.follow-us-tagline{
    display: block;
    font-family: 'Poppins', system-ui, sans-serif;
    color: #6b6b6b;
    font-size: 11.5px;
    font-weight: 500;
    margin-bottom: 12px;
    letter-spacing: .3px;
}

.follow-us-icons .icons-gs{
    display: flex !important;
    justify-content: center;
    gap: 22px;
    flex-wrap: wrap;
    align-items: center;
}

/* Pure icon only — no pill, no border, no background */
.follow-us-icons .icons-gs a.s{
    width: auto !important;
    height: auto !important;
    line-height: 1 !important;
    border-radius: 0 !important;
    background: transparent !important;
    color: #800000 !important;
    font-size: 24px !important;
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    box-shadow: none !important;
    border: 0 !important;
    padding: 0 !important;
    text-decoration: none;
    transition: transform .25s ease, color .25s ease;
}
.follow-us-icons .icons-gs a.s:hover{
    transform: translateY(-3px) scale(1.08);
}
/* Hover: color shifts to brand color, no chunky background */
.follow-us-icons .icons-gs a.instagram:hover{ color: #dc2743 !important; background: transparent !important; box-shadow: none !important; }
.follow-us-icons .icons-gs a.facebook:hover { color: #1877f2 !important; background: transparent !important; box-shadow: none !important; }
.follow-us-icons .icons-gs a.linkedin:hover { color: #0a66c2 !important; background: transparent !important; box-shadow: none !important; }
.follow-us-icons .icons-gs a.twitter:hover  { color: #1da1f2 !important; background: transparent !important; box-shadow: none !important; }
.follow-us-icons .icons-gs a.youtube:hover  { color: #ff0000 !important; background: transparent !important; box-shadow: none !important; }

/* ============== Course-wise Admission Helpline cards (compact) ============== */
.course-leads{
    margin: 14px auto 10px;
    padding: 0 14px;
    max-width: 1100px;
}

.course-leads .leads-title{
    text-align: center;
    margin-bottom: 10px;
}

.course-leads .leads-title h2{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 18px;
    font-weight: 800;
    color: #800000;
    margin: 0;
    letter-spacing: .3px;
    line-height: 1.2;
}

.course-leads .leads-title h2::after{
    content:"";
    display: block;
    width: 40px;
    height: 2px;
    background: linear-gradient(90deg,#800000,#fb8500);
    border-radius: 2px;
    margin: 6px auto 0;
}

.course-leads .leads-title p{
    color: #6b6b6b;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 12px;
    margin: 4px 0 0;
    line-height: 1.3;
}

.leads-grid{
    display: grid;
    grid-template-columns: 1fr;
    gap: 8px;
}
@media (min-width: 576px){ .leads-grid{ grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 992px){ .leads-grid{ grid-template-columns: repeat(3, 1fr); } }

.lead-card{
    background: #fff;
    border-radius: 12px;
    padding: 10px 12px;
    display: grid;
    grid-template-columns: 44px 1fr auto;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,.06);
    border: 1px solid rgba(0,0,0,.05);
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    font-family: 'Poppins', system-ui, sans-serif;
}

.lead-card:hover{
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(0,0,0,.10);
    border-color: rgba(128,0,0,.18);
}

.lead-badge{
    width: 44px;
    height: 44px;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 800;
    font-size: 11px;
    text-align: center;
    line-height: 1.05;
    box-shadow: 0 4px 10px rgba(0,0,0,.16);
    letter-spacing: .3px;
}

.lead-card.l1 .lead-badge{ background: linear-gradient(135deg,#800000,#d62828); }
.lead-card.l2 .lead-badge{ background: linear-gradient(135deg,#0077b6,#00b4d8); }
.lead-card.l3 .lead-badge{ background: linear-gradient(135deg,#588157,#a3b18a); }
.lead-card.l4 .lead-badge{ background: linear-gradient(135deg,#7c5cff,#23c4ff); }
.lead-card.l5 .lead-badge{ background: linear-gradient(135deg,#fb8500,#ffb703); }

.lead-info{ min-width: 0; }
.lead-info .lead-course{
    font-size: 10px;
    font-weight: 700;
    color: #800000;
    text-transform: uppercase;
    letter-spacing: .7px;
    line-height: 1.1;
}
.lead-info .lead-name{
    font-size: 13px;
    font-weight: 700;
    color: #2b2b2b;
    line-height: 1.2;
    margin-top: 2px;
    word-break: break-word;
}
.lead-info .lead-phone{
    font-size: 11.5px;
    font-weight: 600;
    color: #6b6b6b;
    text-decoration: none;
    margin-top: 1px;
    display: inline-block;
}
.lead-info .lead-phone:hover{ color: #800000; }

.lead-call{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: linear-gradient(135deg,#22c55e,#16a34a);
    color: #fff !important;
    font-size: 16px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(22,163,74,.32);
    transition: transform .2s ease, box-shadow .2s ease;
}
.lead-call:hover,
.lead-call:focus{
    transform: scale(1.08);
    color: #fff !important;
    text-decoration: none;
    box-shadow: 0 8px 18px rgba(22,163,74,.50);
}

/* Mobile-only: secondary Enquiry FAB next to Apply FAB (opens enquiry modal) */
.mobile-call-fab{
    display: none;
}
@media (max-width: 991.98px){
    .mobile-call-fab{
        display: inline-flex;
        position: fixed;
        right: 14px;
        bottom: 80px;
        z-index: 1080;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        background: linear-gradient(135deg,#22c55e,#16a34a);
        color: #fff !important;
        font-size: 24px;
        border: 0;
        border-radius: 50%;
        text-decoration: none;
        box-shadow: 0 8px 22px rgba(22,163,74,.45);
        animation: callPulse 1.6s ease-in-out infinite;
        cursor: pointer;
    }
    .mobile-call-fab:hover,
    .mobile-call-fab:focus{
        color: #fff !important;
        text-decoration: none;
        transform: translateY(-2px);
        outline: 0;
    }
}

@keyframes callPulse{
    0%,100%{ box-shadow: 0 8px 22px rgba(22,163,74,.45); }
    50%    { box-shadow: 0 14px 32px rgba(22,163,74,.75); }
}

/* ==================== ENQUIRY MODAL ==================== */
.enquiry-modal-content{
    border-radius: 18px !important;
    overflow: hidden;
    border: 0 !important;
    box-shadow: 0 30px 60px rgba(0,0,0,.35);
    font-family: 'Poppins', system-ui, sans-serif;
}
.enquiry-modal-content .modal-header{
    background: linear-gradient(135deg,#800000 0%,#a52a2a 60%,#5e0000 100%);
    color: #fff;
    padding: 18px 22px;
    border-bottom: 0;
    align-items: flex-start;
}
.enquiry-modal-content .modal-title{
    font-weight: 800;
    letter-spacing: .3px;
    font-size: 18px;
    line-height: 1.2;
}
.enquiry-modal-content .modal-title small{
    display: block;
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: .9;
    margin-top: 3px;
}
.enquiry-modal-content .btn-close{
    filter: invert(1) brightness(2);
    opacity: .9;
}
.enquiry-modal-content .modal-body{
    padding: 22px;
    background: #fffaf5;
}
.enquiry-modal-content .form-group{
    margin-bottom: 14px;
}
.enquiry-modal-content label{
    font-size: 11px;
    font-weight: 700;
    color: #800000;
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin-bottom: 5px;
}
.enquiry-modal-content .form-control,
.enquiry-modal-content .form-select{
    border-radius: 10px;
    border: 1.5px solid rgba(128,0,0,.18);
    padding: 11px 14px;
    font-size: 14px;
    background-color: #fff;
    transition: border-color .2s ease, box-shadow .2s ease;
    width: 100%;
    font-family: inherit;
}
.enquiry-modal-content .form-control:focus,
.enquiry-modal-content .form-select:focus{
    border-color: #800000;
    box-shadow: 0 0 0 4px rgba(128,0,0,.12);
    outline: 0;
}
.enquiry-modal-content .form-help{
    font-size: 11.5px;
    color: #6b6b6b;
    margin-top: 2px;
    line-height: 1.3;
}
.btn-submit-enquiry{
    width: 100%;
    background: linear-gradient(135deg,#22c55e,#16a34a);
    color: #fff;
    border: 0;
    border-radius: 12px;
    padding: 13px 20px;
    font-weight: 800;
    font-size: 14px;
    letter-spacing: .5px;
    cursor: pointer;
    transition: transform .2s ease, box-shadow .2s ease;
    margin-top: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}
.btn-submit-enquiry:hover,
.btn-submit-enquiry:focus{
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(22,163,74,.45);
}
.enquiry-channel-note{
    margin-top: 12px;
    text-align: center;
    font-size: 11px;
    color: #6b6b6b;
}

    </style>
</head>
<body>

<?php include('naacheader.php'); ?>

       <?php include('n.php'); ?>



        <!-- Marquee Section -->
    <div class="marquee-container">
        <marquee behavior="scroll" direction="left">

  <!--          <a href="https://iitmjanakpuri.com/direct-file/CollageMakingCompetition.jpg" target="_blank">Anugoonj - Collage Making Competition</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <a href="https://iitmjanakpuri.com/direct-file/HindiDebateTopic.jpeg" target="_blank">Anugoonj Hindi Debate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/EnglishDebateTopic.jpeg" target="_blank">Anugoonj English Debate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="https://www.iitmjanakpuri.com/notices/AnugoonjPrelimsNotice.pdf" target="_blank">IITM Zone 4 Anugoonj Prelims Schedule 2026</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a class="marquee-hot" href="https://iitmjanakpuri-sdc.in/ManagementSapiens/" target="_blank">
  🔥 Management Sapiens 2026 (22–23 Jan) • Register Now
</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <a href="https://iitmjanakpuri.com/direct-file/Anugoonj Prelims 2026 Zone 4 Brochure.pdf" target="_blank">Anugoonj Prelims Zone IV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     -->        <a href="https://iitmjanakpuri.com/direct-file/feesdetails.pdf" target="_blank">Fee Details for Academic Year 2025-26 (First Year)</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/counselor.pdf">Contact Your Counsellor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <!-- <a href="https://iitmjanakpuri.com/fiesta2k25/">Fiesta 2K25</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/finalcheck.pdf" target="_blank">Admission Document (Two Copies Each) Check List for Academic Year 2025-26</a>&nbsp;&nbsp;
             <a href="https://iitmjanakpuri.com/admissions/managementquota.php" target="_blank">Management Quota Admissions-2025-26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/admissions/docs/iitmfees.pdf">Fee Details for UG & PG Programme</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="https://forms.gle/6d1BNdiLqA4JjLD1A">Message for students from Chairman</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/20250801(1).pdf" target="_blank">Orientation & Commencement of Classes Academic Year 2025-26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://forms.gle/JXh5zGktX6gjYnVv6">Parent Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.iitmjanakpuri.com/notices/IITMNationalcongf.pdf" target="_blank">AICTE Sponsored National Conference</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="https://forms.gle/m7tJHZE7cEkZXEGu5" target="_blank">Admission Enquiry 2025- 26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
        </marquee>
    </div>

    <!-- Promo Video Section -->
<div class="container-fluid px-0">
    <video autoplay muted loop playsinline style="width: 100%; height: auto; display: block;" oncontextmenu="return false">
         <source src="0519d.mp4" type="video/mp4">
       <!--<source src="Final_13-04-2024.mp4" type="video/mp4">-->
        Your browser does not support the video tag.
    </video>
</div>

     <!-- Carousel Section -->
   <!-- First Slider -->
     <div id="carouselExampleIndicators1" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="9" aria-label="Slide 10"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="10" aria-label="Slide 11"></button>

    </div>
    <div class="carousel-inner">

         <div class="carousel-item active">
            <img src="sliderimages/12.png" class="d-block w-100" alt="Slide 1">
        </div>
       <div class="carousel-item">
            <img src="sliderimages/13.png" class="d-block w-100" alt="Slide 2">
        </div>
         <div class="carousel-item">
            <img src="sliderimages/14.png" class="d-block w-100" alt="Slide 3">
        </div>
         <div class="carousel-item">
            <img src="sliderimages/15.png" class="d-block w-100" alt="Slide 4">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/16.png" class="d-block w-100" alt="Slide 5">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/17.png" class="d-block w-100" alt="Slide 6">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/18.png" class="d-block w-100" alt="Slide 7">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/19.png" class="d-block w-100" alt="Slide 8">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/11.png" class="d-block w-100" alt="Slide 9">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/TV Studio.png" class="d-block w-100" alt="Slide 10">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/nccc.jpeg" class="d-block w-100" alt="Slide 11">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Mobile-only Admissions Hero Card -->
<div class="mobile-admissions-hero">
    <h3>🎓 Admissions Open 2026-27</h3>
    <p>MBA · MCA · BBA · BCA · B.Com (H) · BA (JMC)</p>
    <div class="hero-actions">
        <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" class="hero-btn">Apply Now</a>
        <a href="https://iitmjanakpuri.com/admissions/admissionprocedure.php" class="hero-btn outline">Procedure</a>
        <a href="tel:01128525051" class="hero-btn outline">📞 Helpline</a>
    </div>
</div>

<!-- Course-wise Admission Helpline -->
<div class="course-leads">
    <div class="leads-title">
        <h2>Course-wise Admission Helpline</h2>
        <p>Talk directly to the program lead for Admissions 2026-27</p>
    </div>
    <div class="leads-grid">
        <div class="lead-card l1">
            <div class="lead-badge">MBA</div>
            <div class="lead-info">
                <div class="lead-course">Master of Business Admin</div>
                <div class="lead-name">Dr. Mandeep Singh</div>
                <a href="tel:+919560098709" class="lead-phone">+91 95600 98709</a>
            </div>
            <a href="tel:+919560098709" class="lead-call" aria-label="Call Dr. Mandeep Singh">📞</a>
        </div>

        <div class="lead-card l2">
            <div class="lead-badge">BCA<br>MCA</div>
            <div class="lead-info">
                <div class="lead-course">BCA &amp; MCA</div>
                <div class="lead-name">Mr. Ashish Nayyar</div>
                <a href="tel:+919211592472" class="lead-phone">+91 92115 92472</a>
            </div>
            <a href="tel:+919211592472" class="lead-call" aria-label="Call Mr. Ashish Nayyar">📞</a>
        </div>

        <div class="lead-card l3">
            <div class="lead-badge">BBA</div>
            <div class="lead-info">
                <div class="lead-course">Bachelor of Business Admin</div>
                <div class="lead-name">Dr. Deepika Arora &amp; Dr. Deepali Saluja</div>
                <a href="tel:+919711197715" class="lead-phone">+91 97111 97715</a>
            </div>
            <a href="tel:+919711197715" class="lead-call" aria-label="Call BBA Lead">📞</a>
        </div>

        <div class="lead-card l4">
            <div class="lead-badge">B.Com<br>(H)</div>
            <div class="lead-info">
                <div class="lead-course">B.Com (Honours)</div>
                <div class="lead-name">Dr. Raghav Jain</div>
                <a href="tel:+918920636874" class="lead-phone">+91 89206 36874</a>
            </div>
            <a href="tel:+918920636874" class="lead-call" aria-label="Call Dr. Raghav Jain">📞</a>
        </div>

        <div class="lead-card l5">
            <div class="lead-badge">BA<br>(JMC)</div>
            <div class="lead-info">
                <div class="lead-course">Journalism &amp; Mass Comm.</div>
                <div class="lead-name">Dr. Nivedita Sharma</div>
                <a href="tel:+917217872947" class="lead-phone">+91 72178 72947</a>
            </div>
            <a href="tel:+917217872947" class="lead-call" aria-label="Call Dr. Nivedita Sharma">📞</a>
        </div>
    </div>
</div>

<!-- Modern stats strip — 6 cards -->
<div class="modern-stats">
    <div class="stat-card">
        <span class="stat-icon">🎓</span>
        <span class="stat-num">2500+</span>
        <span class="stat-label">Students</span>
    </div>
    <div class="stat-card">
        <span class="stat-icon">👨‍🏫</span>
        <span class="stat-num">120+</span>
        <span class="stat-label">Faculty</span>
    </div>
    <div class="stat-card">
        <span class="stat-icon">👥</span>
        <span class="stat-num">7600+</span>
        <span class="stat-label">Alumni</span>
    </div>
    <div class="stat-card">
        <span class="stat-icon">🏆</span>
        <span class="stat-num">25+</span>
        <span class="stat-label">Years of Excellence</span>
    </div>
    <div class="stat-card">
        <span class="stat-icon">💼</span>
        <span class="stat-num">530+</span>
        <span class="stat-label">Mentorship by Industry Leaders</span>
    </div>
    <div class="stat-card">
        <span class="stat-icon">🎉</span>
        <span class="stat-num">1100+</span>
        <span class="stat-label">Campus Events</span>
    </div>
</div>

<!-- Placement Highlights — course-wise average packages + featured highest package -->
<div class="placement-section">
    <div class="placement-title">
        <h2>Placement Highlights</h2>
        <p>Highest packages by program · Highest offer of the year</p>
    </div>
    <div class="placement-grid">
        <div class="placement-card featured">
            <span class="pkg-course">Highest</span>
            <span class="pkg-value">22.30<small>&nbsp;LPA</small></span>
            <span class="pkg-label">BCA Top Package</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">MBA</span>
            <span class="pkg-value">13.36<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">MCA</span>
            <span class="pkg-value">6.70<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">BBA</span>
            <span class="pkg-value">6.70<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">B.Com (H)</span>
            <span class="pkg-value">6<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">BA (JMC)</span>
            <span class="pkg-value">4.50<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
    </div>
</div>

<!-- Modern "Explore IITM" quick-access cards -->
<div class="modern-explore">
    <div class="explore-title">
        <h2>Explore IITM</h2>
        <p>Quick access to what matters most</p>
    </div>
    <div class="explore-grid">
        <a href="course/programmes.php" class="explore-card c1">
            <span class="explore-icon">📚</span>
            <span class="explore-name">Programmes</span>
        </a>
        <a href="placements/placements.php" class="explore-card c2">
            <span class="explore-icon">💼</span>
            <span class="explore-name">Placements</span>
        </a>
        <a href="Library/" class="explore-card c3">
            <span class="explore-icon">📖</span>
            <span class="explore-name">Library</span>
        </a>
        <a href="https://iitmjanakpuri-sdc.in/" target="_blank" class="explore-card c4">
            <span class="explore-icon">🚀</span>
            <span class="explore-name">Incubation</span>
        </a>
        <a href="StudentZone/studentzone.php" class="explore-card c5">
            <span class="explore-icon">🎭</span>
            <span class="explore-name">Campus Life</span>
        </a>
        <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" class="explore-card c6">
            <span class="explore-icon">✏️</span>
            <span class="explore-name">Apply Now</span>
        </a>
    </div>
</div>

<!-- Second Slider
<div id="carouselExampleIndicators2" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="sliderimages/4.jpeg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/5.jpeg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/6.jpeg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>-->

    <!-- Conference and Admission -->

<!-- Conference and Admission Ends -->
      <!-- upcoming Ends
   <div class="bwhite" data-aos="zoom-in">
      <div class="container">
       <div class="row">
           <div class="container" style="margin: 30px 0px"><h1 class="tgfmlt1 text-center">Upcoming Events</h1>
           	    <hr class="hr-maroon"/>

           </div>
           <div class="container  text-center">
               <div class="card-deck">
  <div class="card" style="background: #800000; color: #fff; margin-left: 5px;margin-right: 5px;">
    <div class="card-body text-center">
      <h2 class="tgfmlt"></h2>
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Green Light Initiative:Driving Change for Cleaner Air</h4>
      	               <h4 class="tgfmlt">Under the Campaign</h4>
      	               <h3 class="tgfmlt">Diwali with MY BHARAT</h3>
      	               <h3 class="tgfmlt">October 29, 2024</h3>
      	               <h3 class="tgfmlt"></h3>
			           <h4 class="tgfmlt"> </h4>

			           <p class="tgfmlt"></p>
    </div>
  </div>
  <div class="card" style="background: #800000; color: #fff; margin-left: 5px;margin-right: 5px;">
    <div class="card-body text-center">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Rangoli Competition</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">October 29, 2024</h3>
			           <h4 class="tgfmlt"></h4>

			           <p class="tgfmlt"></p>

    </div>
  </div>
  <div class="card" style="background: #800000; color: #fff; margin-left: 5px;margin-right: 5px;">
    <div class="card-body text-center">
      <h2 class="tgfmlt"></h2>
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Model United Nations</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">November 13-14, 2024</h3>
			           <h4 class="tgfmlt"></h4>
			           <p class="tgfmlt"></p>


    </div>
  </div>

</div>




               </div>
       </div>
      </div>
  </div>
       upcoming -->

      <!-- Welcome Begins -->
  <div class="bwhite" data-aos="zoom-in">
      <div class="container">
       <div class="row">
         <!--  <div class="container" style="margin: 20px 0px"><h1 class="tgfmlt1 text-center">Welcome</h1> -->
           	  <!--   <hr class="hr-maroon"/> -->

           </div>
           <div class="container  text-center">
               <div class="col-md-16">
     <div class="container mt-10">
</div>

  <div class="container">
<!--	<div class="row">
	    <div class="col-md-3">
	        <div class="aboutheading tgfmlt1">
			   <p class="ab1" id="aa1"> About</p><p class="ab2" id="aa2">Us</p>
			</div>
	    </div>
	    <div class="col-md-9">
	        <div class="aboutp" id="aa3" onmouseover="change7()" onmouseleave="change8()">
			            <p class="text-justify tj tgfmlt" style="color: #000;"><i class="fas fa-quote-left"></i> Established in 1999 under the auspices of Mata Leelawati Shikshan Sansthan (MLSS), a registered educational society dedicated to philanthropic endeavours. The Institute (IITM) has established a strong foundation for academic excellence. Guided by the visionary leadership of Shri T.N. Chaturvedi, a recipient of the prestigious Padma Vibhushan, India's second-highest civilian honour, IITM embarked on its journey with Shri. Chaturvedi serving as both the founding President of the society and the institute. Shri Chaturvedi's illustrious career marked by his tenure as the Governor of Karnataka, Parliamentarian, and Comptroller and Auditor General (CAG) of India, underscored his profound impact in the realms of education, politics, and administration.</p>
			            <p class="text-justify tj tgfmlt" style="color: #000;">Situated in tranquil and pollution-free surroundings, conveniently accessible via the Delhi Metro Rail. The institute takes pride in fostering a conducive academic environment, endowed with a dedicated faculty and state-of-the-art infrastructure. IITM champions the implementation of 'Outcome based education', a methodology rooted in technological innovations and a student-centric pedagogy. The result-driven approach not only augments students' learning capabilities but also enhances their performance across various domains. Central to its ethos, IITM remains steadfast to its commitments to nurturing youth, envisioning them not merely as proficient professionals but as empathetic leaders poised for excellence in their respective fields. IITM offers an extensive array of brief yet impactful skill enhancement and syllabus enrichment workshops spanning diverse areas of management specializations, and emerging technologies. Additionally, the IITM takes pride in its expansive alumni network, comprising over 7000 professionals who occupy key managerial positions within the nation's primer corporate establishments. This robust network not only reflects the institute's commitment to fostering enduring relationships but also underscores its alumni's significant contributions to the professional landscape.</p>
			            <!--<p class="text-justify tj tgfmlt" style="color: #000;">The Institute takes pride in having developed the faculty support and infrastructure imperative to effectively implement the &quot;Outcome Based Education&quot;, a technology-based learner centric and result-oriented approach which enhances students' learning and performance capabilities. We are passionate about grooming the nation&apos;s youth to grow into excellent professionals and good human beings destined to become torch bearers of their respective domains.</p>
			            <p class="text-justify tj tgfmlt" style="color: #000;">IITM conducts a plethora of short duration skill enhancement and syllabus enrichment workshops related to areas of management specialisations and emerging IT technologies. We have a strong alumni network of over 6000+ professionals working at various management levels in the leading corporate houses of the country.
			            <i class="fas fa-quote-right"></i></p>-->
			         </div>
	    </div>


	</div>
</div>



     </div>


       </div>
      </div>
    </div>

        <div class="lowerb" style="background:#fff;margin-top: 2rem;">
             <div class="row" style="margin-top:0;padding-top:0;background: #fff;">
                 <div class="col-md"></div>
             </div>
        <div class="row">
                <div class="container">
                         <div class="col-md" style="color: black;">
  <div class="card sliders3-ed"  style="background-color: #800000;margin:0;padding:0;">

    <!--<div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: white;"><span style="font-size: 2rem;">Admissions Open</span>
      <br>
      <span>MBA, MCA, BCA, BBA, B.Com(H) & BA(JMC)</span>
      </h1>
      <h4 class="" style="font-size: 1.3rem;text-align:center;color: white;">Academic Year: 2025-2026</h4>
      <h3 class="" style="font-size: 1.3rem;text-align:center;color: white;"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdFH0kGBvQVXcsEWM5P08jG8Zd0ZSaYZs6efY6pmusXllT5Rw/viewform" target="_blank" style="color: white;">Click here</a></h3>

      <p class="card-text">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" style="text-align:center;">
                    <!--<div class="carousel-item active">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt"></h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">MEDIAX</h3>
      	               <h3 class="tgfmlt">April 16-17,2025</h3>
      	               <h3 class="tgfmlt"></h3>
			           <h4 class="tgfmlt"> </h4>

			           <p class="tgfmlt"></p>
                    </div>
                    <div class="carousel-item active">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt"></h4>
      	               <h4 class="tgfmlt">Academic Year: 2025-2026</h4>
      	               <h3 class="tgfmlt"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdFH0kGBvQVXcsEWM5P08jG8Zd0ZSaYZs6efY6pmusXllT5Rw/viewform" target="_blank" style="color: white;">Click here</a></h3>
			           <h3 class="tgfmlt"></h3>


			           <p class="tgfmlt"></p>
                    </div> -->
                   <!-- <div class="carousel-item">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Celestia 1.0</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">April 17, 2025</h3>
			           <h4 class="tgfmlt"></h4>
			           <p class="tgfmlt"></p>
                    </div>-->
                </div>
             </div>
      </p>
    </div>
  </div>
                         </div>
                     </div>
        </div>
        <div class="row">

          <div class="col-md-7">
             <div class="container">
                 <div class="row">

                 </div>
                 <div style="height: 5vh;"></div>
                 <div class="row">
                     <div class="container">
                         <div class="col-md" style="color: black; max-width: 600px; margin: 0 auto;">



<div class="course-intake-section">
    <div class="container text-center">
        <div class="course-title">Course Intake</div>

        <div class="course-wrap">
            <div class="course-box">
                <div class="course-name">MBA</div>
                <div class="course-value">60</div>
            </div>

            <div class="course-box">
                <div class="course-name">MCA</div>
                <div class="course-value">60</div>
            </div>

            <div class="course-box">
                <div class="course-name">BCA</div>
                <div class="course-value">240</div>
            </div>

            <div class="course-box">
                <div class="course-name">BBA</div>
                <div class="course-value">360</div>
            </div>

            <div class="course-box">
                <div class="course-name">B.Com (H)</div>
                <div class="course-value">120</div>
            </div>

            <div class="course-box">
                <div class="course-name">BA (JMC)</div>
                <div class="course-value">180</div>
            </div>
        </div>
    </div>
</div>


<div class="card sliders3-ed" style="background: #800000;">
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: white;">IITM In News</h1>
       <div class="card-text">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                        <img src="NewsImages/top19b.jpeg" class="img-responsive" style="width: 100%;  height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top 19 B-School (MBA) &mdash; Times B-School Survey 2026</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                   <div class="carousel-item">
                        <img src="NewsImages/37th.jpeg" class="img-responsive" style="width: 100%;  height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Ranked 37th in Placements &mdash; Times B-School Survey 2026</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                   <div class="carousel-item">
                        <img src="upload_new/gallery/rankk.jpeg" class="img-responsive" style="width: 100%;  height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top 50 B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/conf.jpg" class="img-responsive" style="width: 100%;  height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">International Conference on IKDSAK-2023</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/tb24.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Placement Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/tbb23.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top Private Institutes</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/bscho24.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top 70 B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/deb23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Best B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                     <div class="carousel-item">
                        <img src="upload_new/gallery/ind23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/inddd23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/india2333.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                     <div class="carousel-item">
                        <img src="upload_new/gallery/deb23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Business Award</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/businessaward.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Business Award</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                   <div class="carousel-item">
                      <img src="upload_new/gallery/timesbschool.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/fiesta.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">IITM Fiesta</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                     <div class="carousel-item">
                      <img src="upload_new/gallery/fiesta1.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">IITM Fiesta</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/Times B-School 1.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/Times B-Schoolbba.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/placement.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/lak.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Star Cast of LAKEEREIN</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/indiia.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Live Show- India TV</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                </div>
             </div>

      </div>
     </div>
  </div>
                         </div>
                     </div>
                 </div>
             </div>
          </div>

      <?php
$notices = [];
try {
    $db = new PDO('mysql:host=localhost;dbname=iitmjkac_Information', 'iitmjkac_Gautam123', 'Gautam@123+##');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Fetch the last 7 records in descending order of notice_id from the AllNotices table
    $query = "SELECT * FROM AllNotices ORDER BY notice_id DESC LIMIT 7";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $notices = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
    // Silently fail — page must render even when DB is unreachable
    $notices = [];
}
?>

<div class="col-md-3" style="margin: 2em;">
    <div>
        <h1 class="tgfmlt nt">Notices</h1>
        <?php $counter = 1; ?>
        <?php foreach ($notices as $notice): ?>
            <span class="badge tgfmlt" style="background: #800000;color:#fff;"><?php echo $counter; ?></span>
            <?php $counter++; ?>
            <a href="<?php echo $notice['file_path']; ?>" target="_blank" class="tgfmlt nt">
                <?php echo $notice['notice_title']; ?>
                <p class="scp2">[Uploaded on: <?php echo $notice['date_uploaded']; ?>]</p>
                [Link: <a href="<?php echo $notice['file_path']; ?>" target="_blank"><?php echo $notice['file_path']; ?></a>]
            </a>
            <br/>
        <?php endforeach; ?>
        <a class="btn btn-danger tgfmlt"  href="https://www.iitmjanakpuri.com/notices.php" target="_blank">View All Notices</a>
        <div class="text-right">

        </div>
    </div>
</div>
<div style="height: 5vh;"></div>
<div class="container" style="background-color: #f0f8ff; padding: 50px 20px;">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri-sdc.in/" target="_blank">

                 <!--   <img src="icon1.svg" alt="Icon 1" class="icon"> -->

                    <p class="text">Incubation Program</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri.com/StudentZone/esc.php">
                 <!--   <img src="icon2.svg" alt="Icon 2" class="icon"> -->
                    <p class="text">Green Initiatives</p>
                </a>
            </div>
        </div>
<div class="col-lg-3 col-md-6 col-sm-3 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri.com/StudentZone/studentzone.php" target="_blank">

                 <!--   <img src="icon1.svg" alt="Icon 1" class="icon"> -->

                    <p class="text">Students' Societies</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri.com/upload_new/Physical%20Wellbeing.pdf" target="_blank">
            <!--        <img src="icon3.svg" alt="Icon 3" class="icon"> -->
                    <p class="text">Counselling Services</p>
                </a>
            </div>
        </div>



       <!--  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
                   <img src="icon3.svg" alt="Icon 3" class="icon">
                    <p class="text">Centre for Professional Development</p>
                </a>
            </div>
        </div>-->
        <!-- Repeat structure for additional items -->
    </div>

</div>
<div style="height: 10vh;"></div>


 <!--   SOCIAL MEDIA ICONS -->
  <div class="row follow-us-icons" style="background: #F5CEAF;width: 100%;">
    <div style="width: 100%">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 text-center" style="text-align:center;padding: 5px;">
                	<span class="text-danger h3 tgfmlt follow-s-txt">Follow Us</span>
                	<span class="follow-us-tagline">Stay connected with IITM Janakpuri</span>
                  <div class="icons-gs">

	<a href="https://www.instagram.com/iitm_janakpuri/" class="s instagram" target="_blank" style="border-top-left-radius:4px;"><i class="fa fa-instagram"></i></a>
  	<a href="https://www.facebook.com/iitmjanakpurinewdelhi" class="s facebook" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.linkedin.com/in/iitm-janakpuri-29678b100" class="s linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
  	<a href="https://twitter.com/iitm_ipu" class="s twitter" target="_blank"><i class="fa fa-twitter"></i></a>
  	<a href="https://www.youtube.com/channel/UCRfsFwiKcTStwUIf2vISxCw" class="s youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
   <!--  <div style="background-color: #800000; color: #fff; margin: 0; padding: 20px 0; width: 100%;">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Research & Consultancy</h6>
                <ul class="list-unstyled">
                    <li><a href="upload_new/Formation of Research Committee.pdf" target="_blank" style="color: white;">Research Committee</a></li><br>
                    <li><a href="upload_new/projects.pdf" target="_blank" style="color: white;">Projects</a></li><br>
                    <li><a href="upload_new/consultancy.pdf" target="_blank" style="color: white;">Consultancy</a></li><br>
                </ul>
            </div>

            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Essential Requirements</h6>
                <ul class="list-unstyled">
                    <li><a href="upload_new/ICC-1.pdf" target="_blank" style="color: white;">Internal Complaints Committee (ICC)</a></li><br>
                    <li><a href="upload_new/SC_ST Committtee.pdf" target="_blank" style="color: white;">SC/ST Committee</a></li><br>
                    <li><a href="upload_new/Guidepg (1).pdf" target="_blank" style="color: white;">Code of Conduct (PG)</a></li><br>
                    <li><a href="upload_new/disabilities.pdf" target="_blank" style="color: white;">Disabilities Committee</a></li><br>
                    <li><a href="upload_new/AntiRagging.pdf" target="_blank" style="color: white;">Anti-Ragging Guidelines</a></li><br>
                    <li><a href="upload_new/GRC Notices.pdf" target="_blank" style="color: white;">Constitution of GRC and SGRC</a></li>
                </ul>
            </div>

        </div>


    </div>
</div>
  <div style="background-color: #800000; color: #fff; margin: 0; padding: 20px 0; width: 100%;">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-4">
                <a href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" target="_blank">
                    <img src="images/map.png" style= "height: 300px; width: 400px;"/>
                </a>
               </div>
           <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Contact Us</h6>
                <p class="mb-1">Institute of Information Technology & Management</p>
                <p>D-29, Institutional Area,<br>Janakpuri, New Delhi-110058</p>
                <p><i class="fa fa-phone"></i> 011-28525882 / 28520239 / 28525051</p>
                <p><i class="fa fa-envelope"></i> director@iitmipu.ac.in</p>
            </div>
            </div>
        </div>


        </div>


        <div class="row text-center">
            <div class="col">
               <p class="small mb-0" style="color: #800000;">
                    &copy; Institute of Information Technology & Management 2021<br>
                    Visitors Count: 1234569
                </p>
            </div>
        </div> -->
    </div>
</div>
  </div>
    <!--   SOCIAL MEDIA ICONS END HERE -->



        </div>

        <?php
       include("naacfooter.php");
    ?>
      <!-- Footer Ends -->







</div>
   </div>

    <!-- Mobile-only floating Apply Now FAB -->
    <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" class="mobile-apply-fab" aria-label="Apply for Admission 2026-27">
        <span class="fab-icon">🎓</span>
        <span>Apply Now</span>
    </a>

    <!-- Mobile-only Enquiry FAB (opens admission enquiry form modal) -->
    <button type="button" class="mobile-call-fab" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Open admission enquiry form">✉️</button>

    <!-- Admission Enquiry Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content enquiry-modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">
                        Admission Enquiry
                        <small>2026 - 27 · Talk to the program lead</small>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="enquiryForm" novalidate>
                        <div class="form-group">
                            <label for="enq-name">Student Name</label>
                            <input type="text" class="form-control" id="enq-name" name="name" required minlength="2" autocomplete="name" placeholder="Your full name">
                        </div>
                        <div class="form-group">
                            <label for="enq-email">Email</label>
                            <input type="email" class="form-control" id="enq-email" name="email" required autocomplete="email" placeholder="you@example.com">
                        </div>
                        <div class="form-group">
                            <label for="enq-phone">Phone</label>
                            <input type="tel" class="form-control" id="enq-phone" name="phone" required pattern="[0-9]{10}" autocomplete="tel" placeholder="10-digit mobile number">
                        </div>
                        <div class="form-group">
                            <label for="enq-course">Course of Interest</label>
                            <select class="form-select" id="enq-course" name="course" required>
                                <option value="" disabled selected>Select a course</option>
                                <option value="MBA|9560098709|Dr. Mandeep Singh">MBA</option>
                                <option value="BCA / MCA|9211592472|Mr. Ashish Nayyar">BCA &amp; MCA</option>
                                <option value="BBA|9711197715|Dr. Deepika Arora &amp; Dr. Deepali Saluja">BBA</option>
                                <option value="B.Com (H)|8920636874|Dr. Raghav Jain">B.Com (H)</option>
                                <option value="BA (JMC)|7217872947|Dr. Nivedita Sharma">BA (JMC)</option>
                            </select>
                            <div class="form-help">You'll be connected directly to the selected course lead via WhatsApp.</div>
                        </div>
                        <button type="submit" class="btn-submit-enquiry">
                            <span>Send Enquiry on WhatsApp</span>
                            <span style="font-size:18px;">›</span>
                        </button>
                        <div class="enquiry-channel-note">Your details will be shared only with the selected program lead.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    (function(){
        var modalEl = document.getElementById('enquiryModal');
        var form    = document.getElementById('enquiryForm');
        if (!modalEl || !form) return;

        // Auto-show the enquiry modal once per browser session, ~1.8s after page is interactive
        window.addEventListener('load', function(){
            try {
                if (sessionStorage.getItem('enquiryModalShown') === '1') return;
            } catch (_) { /* sessionStorage may be blocked — fall through and show */ }
            setTimeout(function(){
                var modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                modal.show();
                try { sessionStorage.setItem('enquiryModalShown', '1'); } catch (_) {}
            }, 1800);
        });

        // Form submit → open WhatsApp with pre-filled message to the selected course lead
        form.addEventListener('submit', function(e){
            e.preventDefault();
            if (!form.checkValidity()){
                form.classList.add('was-validated');
                form.reportValidity();
                return;
            }
            var name   = form.name.value.trim();
            var email  = form.email.value.trim();
            var phone  = form.phone.value.trim();
            var parts  = form.course.value.split('|'); // [course, leadPhone, leadName]
            var course = parts[0], leadPhone = parts[1], leadName = parts[2];

            var msg =
                'Hello ' + leadName + ',\n\n' +
                'I am interested in admission for ' + course + ' (Academic Year 2026-27) at IITM Janakpuri.\n\n' +
                'My Details:\n' +
                '• Name: '  + name  + '\n' +
                '• Phone: ' + phone + '\n' +
                '• Email: ' + email + '\n\n' +
                'Please guide me through the admission process. Thank you!';

            var url = 'https://wa.me/91' + leadPhone + '?text=' + encodeURIComponent(msg);
            window.open(url, '_blank', 'noopener');

            // Close the modal after submit
            var modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) modal.hide();
            form.reset();
        });
    })();
    </script>

    <script src="myscript.js"></script>
</body>
</html>
