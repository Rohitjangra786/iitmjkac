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
    <title>Best Management College in Delhi NCR | IT College in Delhi </title>
    <meta name="description" content="Ranked as the best management college in Delhi NCR & IT College in Delhi, IITM Janakpuri brings 25+ years of excellence & offers industry-aligned programmes.">


    <link rel="canonical" href="https://www.iitmjanakpuri.com/" />



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJX8PS9941"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VJX8PS9941');
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Site-wide font: Arial (academic / professional look) -->


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollegeOrUniversity",
  "@id": "https://www.iitmjanakpuri.com/#organization",
  "name": "Institute Of Information Technology & Management",
  "alternateName": "IITM JANAKPURI",
  "url": "https://www.iitmjanakpuri.com/",
  "logo": {
    "@type": "ImageObject",
    "url": "https://www.iitmjanakpuri.com/iitm-1.png"
  },
  "image": "https://www.iitmjanakpuri.com/iitm-1.png",
  "sameAs": [
    "https://www.facebook.com/iitmjanakpurinewdelhi",
    "https://twitter.com/iitm_ipu",
    "https://www.instagram.com/iitm_janakpuri/",
    "https://www.youtube.com/channel/UCRfsFwiKcTStwUIf2vISxCw",
    "https://www.linkedin.com/in/iitm-janakpuri-29678b100",
    "https://en.wikipedia.org/wiki/Institute_of_Information_Technology_and_Management"
  ]
}
</script>












    <style>
/* === Global font: Arial site-wide (academic / professional) ===
   This rule wins over inline 'Inter'/'Poppins' declarations in this file and
   all included partials (naacheader.php, naacfooter.php, n.php, etc.) thanks
   to the universal selector + !important. */
html, body, body *,
h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6,
.tgfmlt, .tgfmlt1,
.card-title, .nt,
.modal-title, .btn,
input, select, textarea, button{
    font-family: Arial, Helvetica, sans-serif !important;
    letter-spacing: 0 !important;
}
/* Restore icon-font families that the Arial site-wide override above clobbered.
   Without this, every <i class="fa ..."> renders as a blank/letter glyph. */
.fa, .fas, .far, .fal, .fad,
[class^="fa-"], [class*=" fa-"]{
    font-family: FontAwesome, "Font Awesome 5 Free", "Font Awesome 6 Free" !important;
}
.fab{ font-family: "Font Awesome 5 Brands", "Font Awesome 6 Brands" !important; }
.glyphicon{ font-family: "Glyphicons Halflings" !important; }
.material-icons{ font-family: "Material Icons" !important; }
html,
body * {
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
html, body{
    color: #1f2937;
    line-height: 1.55;
}
h1, h2, h3, .h1, .h2, .h3{
    font-weight: 700;
}
strong, b{
    font-weight: 700;
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
    background: linear-gradient(135deg,#fff8f8 0%,#ffd6d6 100%);
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
        background: linear-gradient(135deg,#a00000 0%,#800000 50%,#5e0000 100%);
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
        background: linear-gradient(135deg, #800000 0%, #a00000 50%, #5e0000 100%);
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
        background: radial-gradient(circle, rgba(255,255,255,.18) 0%, transparent 70%);
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
        background: #ffffff;
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
        background: linear-gradient(135deg,#ffffff,#fef2f2) !important;
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
    background: linear-gradient(90deg,#800000,#d62828);
    border-radius: 3px;
    margin: 8px auto 0;
}
.placement-section .placement-title p{
    color: #4b4b4b;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 15px;
    font-weight: 500;
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
    background: linear-gradient(135deg,#ffffff 0%,#fef2f2 100%);
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
    background: linear-gradient(135deg,#800000,#d62828);
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
    background: linear-gradient(135deg,#a00000 0%,#800000 50%,#5e0000 100%);
    border: 1px solid #5e0000;
    box-shadow: 0 8px 22px rgba(251,133,0,.30);
    animation: fadeUp .5s ease backwards, featuredPulse 2.6s ease-in-out infinite 1s;
}
.placement-card.featured:hover{
    box-shadow: 0 16px 32px rgba(251,133,0,.45);
}
.placement-card.featured .pkg-course,
.placement-card.featured .pkg-label{
    color: #ffffff !important;
    text-shadow: 0 1px 2px rgba(0,0,0,.20);
}
.placement-card.featured .pkg-value{
    background: none !important;
    -webkit-background-clip: initial !important;
    background-clip: initial !important;
    -webkit-text-fill-color: initial !important;
    color: #ffffff !important;
    text-shadow: 0 2px 4px rgba(0,0,0,.25);
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
    background: linear-gradient(135deg, #ffffff 0%, #ffe8e8 100%);
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
    background: linear-gradient(135deg,#800000,#d62828);
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

/* Modern "Explore IITM" quick-access cards — RED gradient section */
.modern-explore{
    margin: 28px auto;
    padding: 32px 24px 30px;
    max-width: 1100px;
    background: linear-gradient(135deg, #800000 0%, #a00000 50%, #5e0000 100%);
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(128,0,0,.25);
    color: #fff;
    position: relative;
    overflow: hidden;
}
.modern-explore::before{
    content: "";
    position: absolute;
    top: -40%; right: -10%;
    width: 380px; height: 380px;
    background: radial-gradient(circle, rgba(255,255,255,.12), transparent 70%);
    pointer-events: none;
}
.modern-explore::after{
    content: "";
    position: absolute;
    bottom: -40%; left: -10%;
    width: 320px; height: 320px;
    background: radial-gradient(circle, rgba(214,40,40,.40), transparent 70%);
    pointer-events: none;
}
.modern-explore > *{ position: relative; z-index: 1; }

.modern-explore .explore-title{
    text-align: center;
    margin-bottom: 18px;
}

.modern-explore .explore-title h2{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 24px;
    font-weight: 800;
    color: #ffffff !important;
    margin: 0;
    letter-spacing: .3px;
}

.modern-explore .explore-title h2::after{
    content:"";
    display: block;
    width: 56px;
    height: 3px;
    background: linear-gradient(90deg, #ffffff, rgba(255,255,255,.55));
    border-radius: 3px;
    margin: 8px auto 0;
}

.modern-explore .explore-title p{
    color: rgba(255,255,255,.88) !important;
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
.explore-card.c5 .explore-icon{ background: linear-gradient(135deg,#a00000,#800000); }
.explore-card.c6 .explore-icon{ background: linear-gradient(135deg,#ff9e00,#ff6d00); }

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
    background: linear-gradient(90deg,#ffffff 0%,#fef2f2 100%);
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
    background: linear-gradient(135deg, #ffffff 0%, rgba(128,0,0,.08) 100%) !important;
    padding: 32px 24px !important;
    position: relative;
    overflow: hidden;
    border: 2px solid #800000;
    border-radius: 18px;
    box-shadow: 0 8px 24px rgba(128,0,0,.12);
    max-width: 1100px;
    margin: 28px auto !important;
    color: #2b2b2b;
}
.follow-us-icons::before,
.follow-us-icons::after{
    content:"";
    position: absolute;
    width: 220px; height: 220px;
    border-radius: 50%;
    filter: blur(60px);
    pointer-events: none;
    opacity: .25;
}
.follow-us-icons::before{
    top: -110px; left: -70px;
    background: radial-gradient(circle, rgba(214,40,40,.45), transparent);
}
.follow-us-icons::after{
    bottom: -110px; right: -70px;
    background: radial-gradient(circle, rgba(128,0,0,.50), transparent);
}
/* Maroon text + icons on the light pink card */
.follow-us-icons .follow-s-txt{
    background: linear-gradient(135deg, #800000, #d62828) !important;
    -webkit-background-clip: text !important;
    background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    color: transparent !important;
}
.follow-us-icons .follow-us-tagline{
    color: #6b6b6b !important;
}
.follow-us-icons .icons-gs a.s{
    color: #800000 !important;
}
.follow-us-icons .icons-gs a.s::after{
    color: #800000 !important;
}
.follow-us-icons .icons-gs a.s:hover::after{
    color: #d62828 !important;
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
    background: linear-gradient(135deg,#800000,#d62828);
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
    font-size: 28px !important;
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    box-shadow: none !important;
    border: 0 !important;
    padding: 0 !important;
    text-decoration: none;
    transition: transform .25s ease, filter .25s ease;
}
.follow-us-icons .icons-gs a.s svg{
    width: 1em;
    height: 1em;
    display: block;
}
.follow-us-icons .icons-gs a.s:hover{
    transform: translateY(-3px) scale(1.08);
    filter: brightness(1.08) drop-shadow(0 4px 8px rgba(0,0,0,.18));
}
/* Brand colors applied by default (icons inherit via currentColor; Instagram uses its own gradient) */
.follow-us-icons .icons-gs a.facebook { color: #1877f2 !important; }
.follow-us-icons .icons-gs a.linkedin { color: #0a66c2 !important; }
.follow-us-icons .icons-gs a.twitter  { color: #000000 !important; }
.follow-us-icons .icons-gs a.youtube  { color: #ff0000 !important; }

/* ============== Course-wise Admission Helpline cards (compact) ============== */
.course-leads{
    margin: 28px auto;
    padding: 28px 24px 24px;
    max-width: 1100px;
    background: linear-gradient(135deg, #ffffff 0%, #fff5f5 100%);
    border: 2px solid #800000;
    border-radius: 18px;
    box-shadow: 0 8px 24px rgba(128,0,0,.12);
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
    background: linear-gradient(90deg,#800000,#d62828);
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
    box-shadow: 0 4px 10px rgba(128,0,0,.06);
    border: 1px solid rgba(128,0,0,.10);
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    font-family: 'Poppins', system-ui, sans-serif;
}

.lead-card:hover{
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(128,0,0,.14);
    border-color: rgba(128,0,0,.30);
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
.lead-card.l2 .lead-badge{ background: linear-gradient(135deg,#a00000,#800000); }
.lead-card.l3 .lead-badge{ background: linear-gradient(135deg,#5e0000,#800000); }
.lead-card.l4 .lead-badge{ background: linear-gradient(135deg,#800000,#a00000); }
.lead-card.l5 .lead-badge{ background: linear-gradient(135deg,#a00000,#800000); }
.lead-card.l6 .lead-badge{ background: linear-gradient(135deg,#800000,#d62828); }

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

/* Enquiry modal styles moved to shared partial: enquiry-modal.php */

/* ============ Section enhancements: icons, labels, summaries ============ */

/* Course Intake — icons, subtitle, "SEATS" labels, total footer */
.course-intake-section .course-title-wrap{
    text-align: center;
    margin-bottom: 18px;
}
.course-intake-section .course-subtitle{
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 13px;
    color: #6b6b6b;
    margin: 8px 0 0;
    letter-spacing: .2px;
}
.course-intake-section .course-icon{
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: linear-gradient(135deg, #800000, #d62828);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    margin: 0 auto 8px;
    box-shadow: 0 4px 10px rgba(128,0,0,.22);
    transition: transform .25s ease, background .25s ease, color .25s ease;
}
.course-intake-section .course-box:hover .course-icon{
    transform: scale(1.1) rotate(-5deg);
    background: #fff;
    color: #800000;
    box-shadow: inset 0 0 0 2px #800000;
}
.course-intake-section .course-value small{
    display: block;
    font-size: 9.5px;
    font-weight: 700;
    letter-spacing: 1.4px;
    margin-top: 4px;
    color: #800000;
    -webkit-text-fill-color: #800000 !important;
    background: none;
    -webkit-background-clip: initial;
    background-clip: initial;
}
.course-intake-section .course-total{
    margin-top: 18px;
    padding: 12px 18px;
    text-align: center;
    background: linear-gradient(135deg, #800000 0%, #5e0000 100%);
    border-radius: 50px;
    color: #fff;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .35px;
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 12px;
    box-shadow: 0 6px 18px rgba(128,0,0,.24);
}
.course-intake-section .course-total strong{
    font-weight: 800;
    font-size: 16px;
}
.course-intake-section .course-total-divider{
    opacity: .5;
}

/* Notices — NEW badge on the latest notice (first item) */
.col-md-3[style*="margin: 2em"] .notice-item:first-child{
    position: relative;
    background: linear-gradient(135deg, rgba(128,0,0,.04), rgba(214,40,40,.02));
    border-radius: 10px;
    padding-right: 50px !important;
}
.col-md-3[style*="margin: 2em"] .notice-item:first-child::after{
    content: "NEW";
    position: absolute;
    top: 14px;
    right: 8px;
    background: linear-gradient(135deg, #800000, #d62828);
    color: #fff;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1.4px;
    padding: 3px 9px;
    border-radius: 50px;
    box-shadow: 0 4px 10px rgba(128,0,0,.32);
    animation: notiNewPulse 2s ease-in-out infinite;
}
@keyframes notiNewPulse{
    0%,100%{ transform: scale(1); box-shadow: 0 4px 10px rgba(128,0,0,.32); }
    50%    { transform: scale(1.08); box-shadow: 0 6px 16px rgba(128,0,0,.50); }
}

/* Follow Us — add social-network labels under each icon (CSS-only, attr-free) */
.follow-us-icons .icons-gs{ gap: 26px !important; }
.follow-us-icons .icons-gs a.s{
    flex-direction: column !important;
    gap: 6px !important;
    font-size: 30px !important;
}
.follow-us-icons .icons-gs a.s::after{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 10px;
    font-weight: 700;
    color: #800000;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color .25s ease;
}
.follow-us-icons .icons-gs a.instagram::after{ content: "Instagram"; }
.follow-us-icons .icons-gs a.facebook::after { content: "Facebook"; }
.follow-us-icons .icons-gs a.linkedin::after { content: "LinkedIn"; }
.follow-us-icons .icons-gs a.twitter::after  { content: "X"; }
.follow-us-icons .icons-gs a.youtube::after  { content: "YouTube"; }
.follow-us-icons .icons-gs a.s:hover::after{ color: #d62828; }


/* ============ FULL HORIZONTAL FIT — wider sections that fill the screen ============ */
@media (min-width: 992px){
    .iitm-highlights-banner,
    .placement-section,
    .modern-stats,
    .modern-explore,
    .course-leads,
    .course-intake-section,
    .iitm-programmes-section,
    .col-md-3[style*="margin: 2em"],
    .follow-us-icons,
    .container.px-0:has(> video),
    .container-fluid.px-0:has(> video){
        max-width: min(1320px, 92vw) !important;
    }
}
@media (min-width: 1400px){
    .iitm-highlights-banner,
    .placement-section,
    .modern-stats,
    .modern-explore,
    .course-leads,
    .course-intake-section,
    .iitm-programmes-section,
    .col-md-3[style*="margin: 2em"],
    .follow-us-icons,
    .container.px-0:has(> video),
    .container-fluid.px-0:has(> video){
        max-width: min(1480px, 90vw) !important;
    }
}

/* ============ Our Programmes — themed card grid (matches Course Intake) ============ */
.iitm-programmes-section{
    background: linear-gradient(135deg,#fff0f0 0%,#ffd6d6 100%);
    border-radius: 18px;
    padding: 28px 24px 24px;
    max-width: 1100px;
    margin: 28px auto;
    box-shadow: 0 6px 20px rgba(128,0,0,.06);
    border: 1px solid rgba(128,0,0,.10);
}
.iitm-programmes-section .programmes-title{
    text-align: center;
    margin-bottom: 18px;
}
.iitm-programmes-section .programmes-title h2{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 26px;
    font-weight: 800;
    color: #800000;
    margin: 0;
    letter-spacing: .3px;
    display: inline-block;
}
.iitm-programmes-section .programmes-title h2::after{
    content:"";
    display: block;
    width: 56px;
    height: 3px;
    background: linear-gradient(90deg,#800000,#d62828);
    border-radius: 3px;
    margin: 8px auto 0;
}
.iitm-programmes-section .programmes-title p{
    color: #6b6b6b;
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 13px;
    margin: 8px 0 0;
}
.iitm-programmes-section .programmes-grid{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin-top: 18px;
}
@media (min-width: 768px){
    .iitm-programmes-section .programmes-grid{ grid-template-columns: repeat(4, 1fr); gap: 16px; }
}
.iitm-programmes-section .prog-card{
    background: #ffffff;
    border: 1px solid rgba(128,0,0,.10);
    border-radius: 14px;
    padding: 22px 14px;
    text-align: center;
    text-decoration: none !important;
    color: #800000 !important;
    box-shadow: 0 6px 16px rgba(128,0,0,.06);
    transition: transform .25s ease, box-shadow .25s ease, background .25s ease, color .25s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
    min-height: 140px;
}
.iitm-programmes-section .prog-card:hover{
    transform: translateY(-5px);
    box-shadow: 0 16px 32px rgba(128,0,0,.22);
    background: linear-gradient(135deg, #800000 0%, #5e0000 100%);
    color: #ffffff !important;
    border-color: #5e0000;
}
.iitm-programmes-section .prog-icon{
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #800000, #d62828);
    color: #ffffff !important;
    font-size: 26px;
    box-shadow: 0 4px 12px rgba(128,0,0,.25);
    transition: transform .3s ease, background .25s ease, color .25s ease;
}
.iitm-programmes-section .prog-card:hover .prog-icon{
    transform: scale(1.12) rotate(-6deg);
    background: #ffffff;
    color: #800000 !important;
}
.iitm-programmes-section .prog-name{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.3;
    letter-spacing: .2px;
    color: inherit;
}
@media (min-width: 992px){
    .iitm-programmes-section .programmes-title h2{ font-size: 28px; }
    .iitm-programmes-section .prog-name{ font-size: 15px; }
    .iitm-programmes-section .prog-icon{ width: 60px; height: 60px; font-size: 28px; }
}

/* ============ IITM Mitra — dummy chatbot widget ============ */
.iitm-chatbot-fab{
    position: fixed;
    left: 22px;
    bottom: 26px;
    z-index: 1090;
    background: linear-gradient(135deg, #800000, #5e0000);
    color: #fff;
    border: 0;
    border-radius: 50px;
    padding: 12px 18px;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 13.5px;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    box-shadow: 0 8px 24px rgba(128,0,0,.40);
    transition: transform .25s ease, box-shadow .25s ease;
    letter-spacing: .3px;
}
.iitm-chatbot-fab:hover{
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(128,0,0,.55);
}
.iitm-chatbot-fab.is-active{
    background: linear-gradient(135deg, #5e0000, #3d0000);
}
.iitm-chatbot-fab .cf-icon{ font-size: 18px; }
.iitm-chatbot-fab .cf-pulse{
    width: 8px; height: 8px;
    background: #4ade80;
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(74,222,128,.6);
    animation: cbFabPulse 1.6s infinite ease-out;
}
@keyframes cbFabPulse{
    0%{ box-shadow: 0 0 0 0 rgba(74,222,128,.7); }
    70%{ box-shadow: 0 0 0 8px rgba(74,222,128,0); }
    100%{ box-shadow: 0 0 0 0 rgba(74,222,128,0); }
}

.iitm-chatbot-window{
    position: fixed;
    left: 22px;
    bottom: 86px;
    z-index: 1095;
    width: 360px;
    max-width: calc(100vw - 44px);
    height: 520px;
    max-height: calc(100vh - 120px);
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 24px 60px rgba(0,0,0,.30), 0 0 0 1px rgba(128,0,0,.12);
    overflow: hidden;
    display: none;
    flex-direction: column;
    font-family: 'Inter', system-ui, sans-serif;
    opacity: 0;
    transform: translateY(20px) scale(.96);
    transition: transform .25s ease, opacity .25s ease;
}
.iitm-chatbot-window.is-open{
    display: flex;
    opacity: 1;
    transform: translateY(0) scale(1);
}
.cb-header{
    background: linear-gradient(135deg, #800000 0%, #5e0000 100%);
    color: #fff;
    padding: 16px 16px 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    position: relative;
    overflow: hidden;
}
.cb-header::before{
    content:"";
    position: absolute;
    top: -40px; right: -40px;
    width: 140px; height: 140px;
    background: radial-gradient(circle, rgba(255,255,255,.10), transparent 70%);
    pointer-events: none;
}
.cb-brand{
    display: flex;
    align-items: center;
    gap: 12px;
    position: relative;
    z-index: 1;
}
/* Academic robot avatar — standing bot with graduation cap on top */
.cb-academic-robot{
    position: relative;
    width: 54px;
    height: 54px;
    background: linear-gradient(135deg, rgba(255,255,255,.28), rgba(255,255,255,.10));
    border: 2px solid rgba(255,255,255,.55);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 14px rgba(0,0,0,.22), inset 0 1px 0 rgba(255,255,255,.20);
    flex-shrink: 0;
    margin-top: 8px;
    animation: cbBotStand 3.5s ease-in-out infinite;
}
@keyframes cbBotStand{
    0%,100%{ transform: translateY(0); }
    50%    { transform: translateY(-3px); }
}
.cb-bot-emoji{
    font-size: 28px;
    line-height: 1;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,.30));
}
.cb-logo-img{
    width: 36px;
    height: auto;
    max-height: 30px;
    object-fit: contain;
    filter: brightness(0) invert(1) drop-shadow(0 2px 4px rgba(0,0,0,.30));
    display: block;
}
/* Graduation cap pinned to the top of the robot */
.cb-grad-cap{
    position: absolute;
    top: -16px;
    left: 50%;
    transform: translateX(-50%) rotate(-10deg);
    font-size: 22px;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,.30));
    z-index: 2;
}
/* Subtle floor shadow under the standing bot */
.cb-academic-robot::after{
    content:"";
    position: absolute;
    bottom: -10px;
    left: 12%; right: 12%;
    height: 6px;
    background: rgba(0,0,0,.30);
    border-radius: 50%;
    filter: blur(4px);
}
.cb-titles{
    display: flex;
    flex-direction: column;
    gap: 2px;
    line-height: 1.15;
}
.cb-iitm-tag{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 9.5px;
    font-weight: 800;
    letter-spacing: 2px;
    color: rgba(255,255,255,.75);
    text-transform: uppercase;
    border-bottom: 1px solid rgba(255,255,255,.20);
    padding-bottom: 2px;
    margin-bottom: 2px;
}
.cb-name{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 15.5px;
    font-weight: 800;
    letter-spacing: .3px;
}
.cb-status{
    font-size: 10.5px;
    opacity: .92;
    display: flex;
    align-items: center;
    gap: 5px;
}
.cb-dot{
    width: 7px; height: 7px; border-radius: 50%;
    background: #4ade80;
    box-shadow: 0 0 8px rgba(74,222,128,.7);
}
.cb-close{
    background: rgba(255,255,255,.18); border: 0;
    width: 30px; height: 30px; border-radius: 50%;
    color: #fff; font-size: 20px; line-height: 1;
    cursor: pointer; padding: 0;
}
.cb-close:hover{ background: rgba(255,255,255,.30); }

.cb-body{
    flex: 1;
    overflow-y: auto;
    padding: 16px;
    background: #fff5f5;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.cb-msg{
    max-width: 88%;
    padding: 8px 12px;
    border-radius: 12px;
    font-size: 12px;
    line-height: 1.42;
    word-wrap: break-word;
    animation: cbFade .3s ease;
    letter-spacing: .1px;
}
.cb-msg b{ font-weight: 700; }
.cb-msg br + br{ display: none; }
@keyframes cbFade{
    from{ opacity: 0; transform: translateY(6px); }
    to{ opacity: 1; transform: translateY(0); }
}
.cb-msg.cb-bot{
    align-self: flex-start;
    background: #fff;
    color: #2b2b2b;
    border: 1px solid rgba(128,0,0,.10);
    border-bottom-left-radius: 4px;
}
.cb-msg.cb-bot a{ color: #800000; font-weight: 600; }
.cb-msg.cb-user{
    align-self: flex-end;
    background: linear-gradient(135deg, #800000, #5e0000);
    color: #fff;
    border-bottom-right-radius: 4px;
}
.cb-msg.cb-typing{
    display: flex;
    gap: 5px;
    align-items: center;
    padding: 10px 14px;
}
.cb-msg.cb-typing .cb-typing-bot{
    width: auto !important;
    height: auto !important;
    background: transparent !important;
    border-radius: 0 !important;
    animation: none !important;
    font-size: 14px;
    margin-right: 4px;
}
.cb-msg.cb-typing span:not(.cb-typing-bot){
    width: 7px; height: 7px;
    background: #800000;
    border-radius: 50%;
    animation: cbTyp 1.2s infinite ease-in-out;
}
.cb-msg.cb-typing span:nth-child(2){ animation-delay: .15s; }
.cb-msg.cb-typing span:nth-child(3){ animation-delay: .3s; }
@keyframes cbTyp{
    0%, 80%, 100%{ transform: scale(.6); opacity: .4; }
    40%{ transform: scale(1); opacity: 1; }
}

.cb-suggestions{
    padding: 8px 12px 0;
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    background: #fff;
    border-top: 1px solid rgba(128,0,0,.08);
}
.cb-chip{
    background: #fff5f5;
    border: 1px solid rgba(128,0,0,.20);
    color: #800000;
    padding: 5px 11px;
    border-radius: 50px;
    font-size: 11.5px;
    font-weight: 600;
    cursor: pointer;
    transition: background .2s ease, color .2s ease, transform .15s ease;
    font-family: 'Poppins', system-ui, sans-serif;
}
.cb-chip:hover{
    background: #800000;
    color: #fff;
    transform: translateY(-1px);
}

.cb-input-wrap{
    display: flex;
    gap: 8px;
    padding: 12px 12px 14px;
    background: #fff;
    border-top: 1px solid rgba(128,0,0,.08);
    align-items: flex-end;
    position: relative;
    min-height: 70px;
}
/* Full-body standing robot next to the input */
.cb-standing-bot{
    flex-shrink: 0;
    display: flex;
    align-items: flex-end;
    margin-bottom: -8px;        /* let the feet sit on the input baseline */
    animation: cbBotIdle 2.6s ease-in-out infinite;
    transform-origin: bottom center;
}
.cb-standing-bot svg{ display: block; }
@keyframes cbBotIdle{
    0%,100%{ transform: translateY(0) rotate(0deg); }
    25%    { transform: translateY(-2px) rotate(-1deg); }
    75%    { transform: translateY(-2px) rotate(1deg); }
}
.cb-input{
    flex: 1; min-width: 0;
    border: 1px solid rgba(128,0,0,.20);
    border-radius: 22px;
    padding: 9px 14px;
    font-size: 13px;
    font-family: 'Inter', system-ui, sans-serif;
    outline: none;
    transition: border-color .2s ease, box-shadow .2s ease;
}
.cb-input:focus{
    border-color: #800000;
    box-shadow: 0 0 0 3px rgba(128,0,0,.10);
}
.cb-send{
    background: linear-gradient(135deg, #800000, #5e0000);
    color: #fff; border: 0;
    width: 38px; height: 38px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 14px;
    display: flex; align-items: center; justify-content: center;
    transition: transform .2s ease;
}
.cb-send:hover{ transform: scale(1.08); }

@media (max-width: 575.98px){
    .iitm-chatbot-fab{
        left: 14px; bottom: 18px;
        padding: 0; width: 50px; height: 50px;
        border-radius: 50%;
        justify-content: center;
    }
    .iitm-chatbot-fab .cf-label,
    .iitm-chatbot-fab .cf-pulse{ display: none; }
    .iitm-chatbot-window{
        left: 10px; right: 10px; bottom: 75px;
        width: auto; max-width: none;
        height: 70vh;
    }
}

/* ============ Mascot robot — TOP-TO-BOTTOM on the RIGHT of chat ============
   Chat is at left:22, width:360 (right edge at left:382). Mascot is positioned
   right after the chat, full viewport height, with its left arm reaching IN to
   grip the chat's right edge. SVG viewBox extends -40px on the left so the arm
   can paint past the mascot's CSS box into the chat's right edge. */
.cb-mascot{
    position: fixed;
    left: 386px;
    top: 24px;
    bottom: 24px;
    z-index: 1097;            /* in front of chat (1095) so the hand grips visibly */
    width: 220px;
    pointer-events: none;
    opacity: 0;
    transform: translateX(60px);
    transition: opacity .4s ease, transform .5s cubic-bezier(.34,1.56,.64,1);
}
.cb-mascot.is-visible{
    opacity: 1;
    transform: translateX(0);
}
.cb-mascot svg{
    display: block;
    width: 100%;
    height: 100%;
    overflow: visible;
    filter: drop-shadow(0 16px 28px rgba(128,0,0,.30));
    animation: cbMascotBreathe 4.2s ease-in-out infinite;
}
@keyframes cbMascotBreathe{
    0%,100%{ transform: translateY(0); }
    50%    { transform: translateY(-5px); }
}
.cb-mascot-bubble{
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    background: #fff;
    color: #800000;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 12px;
    font-weight: 800;
    padding: 7px 14px;
    border-radius: 16px;
    border: 1.5px solid #800000;
    box-shadow: 0 6px 14px rgba(128,0,0,.30);
    white-space: nowrap;
    pointer-events: none;
    animation: cbBubbleBob 2.6s ease-in-out infinite;
    letter-spacing: .3px;
    z-index: 2;
}
.cb-mascot-bubble::after{
    content: "";
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%) rotate(45deg);
    width: 12px;
    height: 12px;
    background: #fff;
    border-right: 1.5px solid #800000;
    border-bottom: 1.5px solid #800000;
}
@keyframes cbBubbleBob{
    0%,100%{ transform: translateX(-50%) translateY(0); }
    50%    { transform: translateX(-50%) translateY(-3px); }
}

/* Hide mascot on tablets / mobiles — desktop ≥1200px only */
@media (max-width: 1199.98px){
    .cb-mascot{ display: none !important; }
}

/* ============ Lightbox modal styling for highlights ============ */
.img-lightbox-content{
    background: transparent !important;
    border: 0 !important;
    box-shadow: none !important;
    position: relative;
}
.img-lightbox-img{
    width: 100%;
    height: auto;
    max-height: 85vh;
    object-fit: contain;
    border-radius: 14px;
    box-shadow: 0 30px 60px rgba(0,0,0,.50);
    display: block;
}
.img-lightbox-close{
    position: absolute !important;
    top: -18px;
    right: -18px;
    z-index: 10;
    background-color: #ffffff !important;
    background-size: 16px 16px !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
    border-radius: 50% !important;
    width: 42px !important;
    height: 42px !important;
    padding: 0 !important;
    opacity: 1 !important;
    box-shadow: 0 10px 26px rgba(0,0,0,.45);
    border: 2px solid #800000 !important;
    transition: background-color .2s ease, transform .2s ease;
}
.img-lightbox-close:hover,
.img-lightbox-close:focus{
    background-color: #800000 !important;
    transform: rotate(90deg) scale(1.05);
    box-shadow: 0 12px 30px rgba(128,0,0,.55);
    outline: 0 !important;
    /* Invert the X icon to white when bg goes maroon */
    filter: invert(1);
}
#imgLightbox .modal-dialog{
    margin: 24px auto;
}

/* ============ NEW HERO — campus image + heading + CTAs (image-ref design) ============ */
.iitm-hero-new{
    display: grid;
    grid-template-columns: 1.25fr 1fr;
    align-items: center;
    gap: 28px;
    max-width: min(1320px, 92vw);
    margin: 28px auto 0;
    padding: 32px 32px;
    background: linear-gradient(135deg, #faf3f3 0%, #fff5f5 60%, #f5e8e8 100%);
    border-radius: 18px;
    border: 1px solid rgba(128,0,0,.10);
    box-shadow: 0 8px 24px rgba(128,0,0,.08);
    overflow: hidden;
    position: relative;
}
.iitm-hero-new::before{
    content: "";
    position: absolute;
    top: -40%; right: -20%;
    width: 480px; height: 480px;
    background: radial-gradient(circle, rgba(214,40,40,.10), transparent 70%);
    pointer-events: none;
}
.iitm-hero-new .hero-new-content{ position: relative; z-index: 1; }
.iitm-hero-new .hero-new-eyebrow{
    display: inline-block;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 11.5px;
    font-weight: 800;
    letter-spacing: 1.4px;
    text-transform: uppercase;
    color: #fff;
    /* Inherits the unified admission gradient — same as top strip / hero card / explore */
    background: var(--iitm-admission-bg, linear-gradient(135deg, #800000 0%, #a00000 50%, #5e0000 100%));
    padding: 6px 14px;
    border-radius: 50px;
    box-shadow: 0 4px 12px rgba(128,0,0,.25);
    margin-bottom: 14px;
}
.iitm-hero-new .hero-new-title{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 40px;
    font-weight: 800;
    line-height: 1.15;
    color: #2b2b2b;
    margin: 0 0 10px;
    letter-spacing: -.5px;
}
.iitm-hero-new .hero-new-courses{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 13.5px;
    font-weight: 700;
    color: #800000;
    margin: 0 0 12px;
    letter-spacing: .35px;
}
.iitm-hero-new .hero-new-tag{
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 14.5px;
    line-height: 1.55;
    color: #5a5a5a;
    margin: 0 0 22px;
    max-width: 540px;
}
.iitm-hero-new .hero-new-actions{
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    align-items: center;
}
.iitm-hero-new .hero-new-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 11px 20px;
    border-radius: 6px;
    font-family: 'Poppins', system-ui, sans-serif;
    font-weight: 700;
    font-size: 13.5px;
    letter-spacing: .3px;
    text-decoration: none !important;
    transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
    border: 2px solid #800000;
    white-space: nowrap;
    flex-shrink: 0;
    cursor: pointer;
    font-family: 'Poppins', system-ui, sans-serif;
}
.iitm-hero-new .hero-new-btn.primary{
    background: #800000;
    color: #fff !important;
}
.iitm-hero-new .hero-new-btn.primary:hover{
    background: #5e0000;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(128,0,0,.30);
    color: #fff !important;
}
.iitm-hero-new .hero-new-btn.outline{
    background: #fff;
    color: #800000 !important;
}
.iitm-hero-new .hero-new-btn.outline:hover{
    background: #fff5f5;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(128,0,0,.18);
    color: #800000 !important;
}
/* "Enquiry" button — green so it's visually distinct from the other two */
.iitm-hero-new .hero-new-btn.enquiry{
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: #fff !important;
    border-color: #16a34a;
}
.iitm-hero-new .hero-new-btn.enquiry:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(22,163,74,.32);
    color: #fff !important;
}

/* Admission helper-link row (helpline / programme leads / procedure) */
.iitm-hero-new .hero-new-helpers{
    display: flex;
    flex-wrap: wrap;
    gap: 4px 8px;
    align-items: center;
    margin-top: 14px;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 12.5px;
}
.iitm-hero-new .hero-new-helper-link{
    color: #800000 !important;
    font-weight: 700;
    font-size: 12.5px;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 0;
    transition: color .2s ease;
}
.iitm-hero-new .hero-new-helper-link:hover{
    color: #5e0000 !important;
    text-decoration: underline !important;
}
.iitm-hero-new .hero-new-helper-link i.fa{ font-size: 12px; }
.iitm-hero-new .hero-new-helper-divider{
    color: rgba(128,0,0,.40);
    font-weight: 700;
}

/* Mini stats row — credibility for admission-seekers */
.iitm-hero-new .hero-new-stats-row{
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-top: 18px;
    padding-top: 16px;
    border-top: 1px dashed rgba(128,0,0,.25);
}
.iitm-hero-new .hero-new-stat{
    display: flex;
    flex-direction: column;
    line-height: 1.1;
}
.iitm-hero-new .hero-new-stat b{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 18px;
    font-weight: 800;
    color: #800000;
    letter-spacing: -.3px;
}
.iitm-hero-new .hero-new-stat span{
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 11px;
    font-weight: 600;
    color: #6b6b6b;
    text-transform: uppercase;
    letter-spacing: .6px;
    margin-top: 2px;
}
.iitm-hero-new .hero-new-image{
    border-radius: 14px;
    overflow: hidden;
    aspect-ratio: 1 / 1;            /* square — fits the admissions banner perfectly and shows the campus hero cropped sensibly */
    max-height: 500px;
    background: #1b3a73;            /* matches the admissions banner blue so any letterbox blends in */
    box-shadow: 0 14px 30px rgba(0,0,0,.12);
    position: relative;
    z-index: 1;
}
.iitm-hero-new .hero-new-image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 28%;
    display: block;
}

/* ============ Hero horizontal slider ============ */
.iitm-hero-new .hero-slider{
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: inherit;
}
.iitm-hero-new .hero-slides{
    display: flex;
    width: 100%;
    height: 100%;
    transition: transform .55s cubic-bezier(.4, .0, .2, 1);
    will-change: transform;
}
.iitm-hero-new .hero-slide{
    flex: 0 0 100%;
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.iitm-hero-new .hero-slide img{
    width: 100%;
    height: 100%;
    object-fit: contain;            /* show the whole image — no cropping of the admissions banner */
    object-position: center center;
    display: block;
}
/* Campus-hero portrait: cover to fill the square cleanly */
.iitm-hero-new .hero-slide:nth-child(2) img{
    object-fit: cover;
    object-position: center 28%;
}
.iitm-hero-new .hero-dots{
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 7px;
    z-index: 3;
    padding: 5px 10px;
    background: rgba(0,0,0,.28);
    border-radius: 50px;
    backdrop-filter: blur(4px);
}
.iitm-hero-new .hero-dots button{
    width: 8px;
    height: 8px;
    border-radius: 50%;
    border: 1.5px solid #fff;
    background: rgba(255,255,255,.35);
    padding: 0;
    cursor: pointer;
    transition: background .2s ease, transform .2s ease, width .25s ease;
    line-height: 0;
}
.iitm-hero-new .hero-dots button.is-active{
    background: #fff;
    width: 20px;
    border-radius: 4px;
}
.iitm-hero-new .hero-arrow{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 0;
    background: rgba(0,0,0,.40);
    color: #fff;
    font-size: 14px;
    line-height: 1;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    z-index: 3;
    opacity: 0;
    transition: opacity .25s ease, background .2s ease, transform .2s ease;
    padding: 0;
}
.iitm-hero-new .hero-arrow.prev{ left: 8px; }
.iitm-hero-new .hero-arrow.next{ right: 8px; }
.iitm-hero-new .hero-slider:hover .hero-arrow{ opacity: 1; }
.iitm-hero-new .hero-arrow:hover{
    background: rgba(128,0,0,.85);
    transform: translateY(-50%) scale(1.08);
}

@media (max-width: 991.98px){
    .iitm-hero-new .hero-new-image{
        aspect-ratio: 1 / 1;
        max-height: 360px;
    }
    .iitm-hero-new .hero-slide:nth-child(2) img{ object-position: center 22%; }
    .iitm-hero-new .hero-arrow{ display: none; }
}
@media (max-width: 991.98px){
    .iitm-hero-new{
        grid-template-columns: 1fr;
        padding: 24px 20px;
        margin: 16px auto 0;
        gap: 22px;
    }
    .iitm-hero-new .hero-new-title{ font-size: 26px; }
    .iitm-hero-new .hero-new-tag{ font-size: 13.5px; }
    .iitm-hero-new .hero-new-image{ order: -1; }
}

/* ============ Overview cards row — Course Intake / Helpline / Programmes / Follow Us ============ */
.iitm-overview-cards{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
    max-width: min(1320px, 92vw);
    margin: 18px auto;
}
@media (max-width: 991.98px){
    /* 2-up grid on tablets and phones — never collapse to single column */
    .iitm-overview-cards{ grid-template-columns: repeat(2, 1fr); gap: 10px; margin: 14px auto; }
}
.iitm-overview-cards .overview-card{
    background: linear-gradient(135deg, #fff 0%, rgba(128,0,0,.05) 100%);
    border: 1.5px solid #800000;
    border-radius: 12px;
    padding: 16px 14px 14px;
    text-align: left;
    transition: transform .25s ease, box-shadow .25s ease;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.iitm-overview-cards .overview-card:hover{
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(128,0,0,.18);
}
.iitm-overview-cards .overview-icon{
    color: #800000;
    margin-bottom: 2px;
    line-height: 0;
}
.iitm-overview-cards .overview-icon svg{ width: 26px; height: 26px; }
.iitm-overview-cards .overview-title{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 12px;
    font-weight: 800;
    color: #800000;
    letter-spacing: .7px;
    text-transform: uppercase;
    line-height: 1.2;
}
.iitm-overview-cards .overview-stat{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 28px;
    font-weight: 800;
    color: #800000;
    line-height: 1.05;
    margin-top: 2px;
}
.iitm-overview-cards .overview-sub{
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 12px;
    color: #5a5a5a;
}
.iitm-overview-cards .overview-desc{
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 12px;
    line-height: 1.45;
    color: #5a5a5a;
    margin: 2px 0 0;
}
.iitm-overview-cards .overview-btn{
    display: inline-block;
    margin-top: auto;
    padding-top: 10px;
    color: #800000 !important;
    font-family: 'Poppins', system-ui, sans-serif;
    font-weight: 700;
    font-size: 12.5px;
    text-decoration: none !important;
    border: 0;
    align-self: flex-start;
}
@media (min-width: 992px){
    .iitm-overview-cards .overview-title{ font-size: 13px; }
    .iitm-overview-cards .overview-stat{ font-size: 34px; }
    .iitm-overview-cards .overview-sub,
    .iitm-overview-cards .overview-desc{ font-size: 13px; }
    .iitm-overview-cards .overview-btn{ font-size: 13px; padding-top: 12px; }
    .iitm-overview-cards .overview-icon svg{ width: 30px; height: 30px; }
    .iitm-overview-cards .overview-card{ padding: 20px 18px 18px; }
}
.iitm-overview-cards .overview-card:hover .overview-btn{
    color: #5e0000 !important;
}
.iitm-overview-cards .overview-btn::after{
    content: " ›";
    transition: margin-left .2s ease;
    display: inline-block;
}
.iitm-overview-cards .overview-card:hover .overview-btn::after{
    margin-left: 4px;
}

/* ============ IITM Highlights — compact auto-scrolling banner (slider) ============ */
.iitm-highlights-banner{
    overflow: hidden;
    background: linear-gradient(180deg, #fff5f5 0%, #ffe4e4 100%);
    padding: 28px 0;
    margin: 24px auto;
    max-width: 1140px;
    border-radius: 16px;
    box-shadow: 0 8px 22px rgba(128,0,0,.10);
    border: 1px solid rgba(128,0,0,.12);
    position: relative;
}
.iitm-highlights-banner::before,
.iitm-highlights-banner::after{
    content:"";
    position: absolute;
    top: 0; bottom: 0;
    width: 80px;
    z-index: 2;
    pointer-events: none;
}
.iitm-highlights-banner::before{
    left: 0;
    background: linear-gradient(90deg, #fff5f5, transparent);
}
.iitm-highlights-banner::after{
    right: 0;
    background: linear-gradient(-90deg, #fff5f5, transparent);
}
.iitm-highlights-banner .highlights-track{
    display: flex;
    gap: 14px;
    width: max-content;
    animation: scrollHighlights 60s linear infinite;
}
.iitm-highlights-banner:hover .highlights-track{
    animation-play-state: paused;
}
.iitm-highlights-banner .highlights-row{
    display: flex;
    gap: 14px;
    flex-shrink: 0;
}
.iitm-highlights-banner .hl-card{
    flex-shrink: 0;
    display: block;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(128,0,0,.10);
    transition: transform .35s cubic-bezier(.34,1.56,.64,1), box-shadow .3s ease, border-color .3s ease;
    border: 1px solid rgba(128,0,0,.08);
    background: #fff;
    position: relative;
    z-index: 1;
    cursor: zoom-in;
}
.iitm-highlights-banner .hl-card:hover{
    transform: translateY(-10px) scale(1.55);
    box-shadow: 0 24px 50px rgba(128,0,0,.40);
    border-color: #800000;
    z-index: 10;
}
.iitm-highlights-banner .hl-card img{
    height: 170px;
    width: auto;
    display: block;
    object-fit: cover;
}
@keyframes scrollHighlights{
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
}
@media (max-width: 575.98px){
    .iitm-highlights-banner .hl-card img{ height: 120px; }
    .iitm-highlights-banner{ padding: 12px 0; margin: 18px auto; border-radius: 12px; }
}

/* ---------- Hide ALL sliders / carousels everywhere (per user) ---------- */
#carouselExampleIndicators1,
#carouselExampleSlidesOnly,
.card.sliders3-ed,
.carousel.slide,
.carousel.slide.mt-3{
    display: none !important;
}

/* Hide the legacy .lowerb wrapper entirely — its content has been replaced
   (Course Intake is now its own section above; IITM In News has a new framed grid below) */
.lowerb,
.bwhite{ display: none !important; }

/* ============ IITM In News — auto-scrolling framed banner (matches highlights) ============ */
.iitm-news-banner{
    margin: 28px auto;
    padding: 22px 0 24px;
    max-width: 1140px;
    background: linear-gradient(135deg, #ffffff 0%, #fef2f2 100%);
    border: 1px solid rgba(128,0,0,.10);
    border-radius: 18px;
    box-shadow: 0 6px 20px rgba(128,0,0,.08);
    overflow: hidden;
}
.iitm-news-banner .news-title{
    text-align: center;
    margin: 0 auto 16px;
    padding: 0 14px;
}
.iitm-news-banner .news-title h2{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 26px;
    font-weight: 800;
    color: #800000;
    margin: 0;
    letter-spacing: .3px;
    display: inline-block;
}
.iitm-news-banner .news-title h2::after{
    content:"";
    display: block;
    width: 56px;
    height: 3px;
    background: linear-gradient(90deg,#800000,#d62828);
    border-radius: 3px;
    margin: 8px auto 0;
}
.iitm-news-banner .news-title p{
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 13px;
    color: #6b6b6b;
    margin: 8px 0 0;
}
.iitm-news-banner .news-banner-wrap{
    overflow: hidden;
    position: relative;
    padding: 8px 0 16px;
}
.iitm-news-banner .news-banner-wrap::before,
.iitm-news-banner .news-banner-wrap::after{
    content:"";
    position: absolute;
    top: 0; bottom: 0;
    width: 80px;
    z-index: 2;
    pointer-events: none;
}
.iitm-news-banner .news-banner-wrap::before{
    left: 0;
    background: linear-gradient(90deg, #fff5f5, transparent);
}
.iitm-news-banner .news-banner-wrap::after{
    right: 0;
    background: linear-gradient(-90deg, #fff5f5, transparent);
}
.iitm-news-banner .news-track{
    display: flex;
    gap: 14px;
    width: max-content;
    animation: scrollNews 70s linear infinite;
}
.iitm-news-banner:hover .news-track{
    animation-play-state: paused;
}
.iitm-news-banner .news-row{
    display: flex;
    gap: 14px;
    flex-shrink: 0;
}
.iitm-news-banner .news-card{
    flex-shrink: 0;
    display: block;
    width: 220px;
    background: #fff;
    border: 1px solid rgba(128,0,0,.10);
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4 / 3;
    box-shadow: 0 4px 12px rgba(128,0,0,.10);
    cursor: zoom-in;
    transition: transform .35s cubic-bezier(.34,1.56,.64,1), box-shadow .3s ease, border-color .3s ease;
    position: relative;
    z-index: 1;
}
.iitm-news-banner .news-card:hover{
    transform: translateY(-10px) scale(1.4);
    z-index: 10;
    box-shadow: 0 24px 50px rgba(128,0,0,.40);
    border-color: #800000;
}
.iitm-news-banner .news-card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.iitm-news-banner .news-card .news-caption{
    position: absolute;
    left: 0; right: 0; bottom: 0;
    padding: 6px 10px;
    background: linear-gradient(180deg, transparent, rgba(94,0,0,.92));
    color: #fff;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 10.5px;
    font-weight: 600;
    text-align: center;
    line-height: 1.3;
    pointer-events: none;
    letter-spacing: .2px;
}
@keyframes scrollNews{
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
}
@media (min-width: 992px){
    .iitm-news-banner{ max-width: min(1320px, 92vw); }
    .iitm-news-banner .news-card{ width: 240px; }
}
@media (min-width: 1400px){
    .iitm-news-banner{ max-width: min(1480px, 90vw); }
}
@media (max-width: 575.98px){
    .iitm-news-banner .news-card{ width: 170px; }
    .iitm-news-banner{ padding: 16px 0 18px; }
}

/* ============ Auto-hide scrollbar — invisible at idle, red on activity ============ */
/* Always-reserved width so layout doesn't shift, but thumb is invisible by default */
html{
    scrollbar-width: thin;
    scrollbar-color: transparent transparent;
    transition: scrollbar-color .35s ease;
}
html::-webkit-scrollbar{
    width: 10px;
    background: transparent;
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background: transparent;
    border-radius: 10px;
    border: 2px solid transparent;
    background-clip: padding-box;
    transition: background .35s ease;
}
/* On user activity (scroll / mouse move) — show red themed thumb */
html.is-active{
    scrollbar-color: #800000 transparent;
}
html.is-active::-webkit-scrollbar-thumb{
    background: linear-gradient(180deg, #800000, #d62828);
    border: 2px solid transparent;
    background-clip: padding-box;
    box-shadow: inset 0 0 0 1px rgba(255,255,255,.20);
}
html.is-active::-webkit-scrollbar-thumb:hover{
    background: linear-gradient(180deg, #5e0000, #800000);
    background-clip: padding-box;
}

/* ---------- Force horizontal fit — no horizontal scroll, ever ---------- */
html, body{
    overflow-x: hidden !important;
    max-width: 100vw !important;
    margin: 0;
    scroll-behavior: smooth;
}
img, video{
    max-width: 100%;
    height: auto;
}
/* Navbar must NOT have any overflow clipping — dropdowns + caret need to render outside */
nav.navbar,
nav.navbar .container,
nav.navbar .navbar-collapse,
nav.navbar .navbar-nav,
nav.navbar .nav-item{
    overflow: visible !important;
}

/* ============ Themed Notices (clean cards, no raw URLs) ============ */
.col-md-3[style*="margin: 2em"] .notices-card{
    background: #fff;
    border-radius: 16px;
    padding: 24px 28px;
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
    border: 1px solid rgba(128,0,0,.10);
}
.col-md-3[style*="margin: 2em"] .notices-list{
    list-style: none;
    padding: 0;
    margin: 0 0 6px;
}
.col-md-3[style*="margin: 2em"] .notice-item{
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px 4px;
    border-bottom: 1px dashed rgba(128,0,0,.14);
    transition: background .25s ease;
    border-radius: 8px;
}
.col-md-3[style*="margin: 2em"] .notice-item:last-child{ border-bottom: 0; }
.col-md-3[style*="margin: 2em"] .notice-item:hover{
    background: linear-gradient(135deg, rgba(128,0,0,.04), rgba(214,40,40,.06));
}
.col-md-3[style*="margin: 2em"] .notice-num{
    flex-shrink: 0;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: linear-gradient(135deg,#800000,#d62828);
    color: #fff;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 12.5px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(128,0,0,.30);
    margin-top: 2px;
}
.col-md-3[style*="margin: 2em"] .notice-link{
    flex: 1;
    min-width: 0;
    color: #2b2b2b !important;
    text-decoration: none !important;
    display: block;
    transition: color .2s ease;
}
.col-md-3[style*="margin: 2em"] .notice-link:hover{ color: #800000 !important; }
.col-md-3[style*="margin: 2em"] .notice-title-text{
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.45;
    display: block;
    word-break: break-word;
}
.col-md-3[style*="margin: 2em"] .notice-icon{
    color: #d62828;
    margin-right: 8px;
    font-size: 14px;
    transition: transform .2s ease, color .2s ease;
}
.col-md-3[style*="margin: 2em"] .notice-link:hover .notice-icon{
    color: #800000;
    transform: translateX(2px);
}
.col-md-3[style*="margin: 2em"] .notice-date{
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 11px;
    color: #6b6b6b;
    font-weight: 600;
    margin-top: 6px;
    letter-spacing: .2px;
    background: rgba(128,0,0,.06);
    border: 1px solid rgba(128,0,0,.10);
    padding: 3px 10px;
    border-radius: 50px;
}
.col-md-3[style*="margin: 2em"] .notice-date i.fa{
    color: #800000;
    font-size: 10px;
}
.col-md-3[style*="margin: 2em"] .notices-view-all{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 18px;
    padding: 11px 22px;
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: #fff !important;
    background: linear-gradient(135deg,#800000,#d62828);
    border-radius: 50px;
    text-decoration: none !important;
    box-shadow: 0 6px 16px rgba(128,0,0,.25);
    transition: transform .2s ease, box-shadow .2s ease;
    letter-spacing: .3px;
    border: 0;
}
.col-md-3[style*="margin: 2em"] .notices-view-all:hover{
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(128,0,0,.40);
    color: #fff !important;
    text-decoration: none !important;
}
.col-md-3[style*="margin: 2em"] .notices-view-all i.fa{
    transition: transform .2s ease;
}
.col-md-3[style*="margin: 2em"] .notices-view-all:hover i.fa{
    transform: translateX(4px);
}

/* ================================================================== */
/* ============== DESKTOP MODERN POLISH (≥992px) ==================== */
/* ================================================================== */
@media (min-width: 992px){

    /* ---------- 0. MIRROR MOBILE: hide dated strip, show modern hero ---------- */
    /* Hide the legacy top-admission-strip on desktop — same as mobile.
       Replaced by the gradient admissions hero card below the slider. */
    .top-admission-strip{ display: none !important; }

    /* Show the maroon gradient "Admissions Open 2026-27" card on desktop, sized large */
    .mobile-admissions-hero{
        display: block !important;
        margin: 32px auto !important;
        max-width: 1100px;
        padding: 44px 48px !important;
        border-radius: 22px !important;
        text-align: center;
        background: linear-gradient(135deg, #800000 0%, #a00000 50%, #5e0000 100%) !important;
        color: #fff;
        box-shadow: 0 18px 40px rgba(128,0,0,.30);
        position: relative;
        overflow: hidden;
    }
    .mobile-admissions-hero::before{
        content:"";
        position: absolute;
        top: -40%; right: -8%;
        width: 360px; height: 360px;
        background: radial-gradient(circle, rgba(255,255,255,.22) 0%, transparent 70%);
        pointer-events: none;
    }
    .mobile-admissions-hero::after{
        content:"";
        position: absolute;
        bottom: -40%; left: -8%;
        width: 320px; height: 320px;
        background: radial-gradient(circle, rgba(255,255,255,.10) 0%, transparent 70%);
        pointer-events: none;
    }
    .mobile-admissions-hero > *{ position: relative; z-index: 1; }
    .mobile-admissions-hero h3{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 38px !important;
        font-weight: 900 !important;
        margin: 0 0 10px !important;
        letter-spacing: .4px;
        line-height: 1.15;
    }
    .mobile-admissions-hero p{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 16px !important;
        margin: 0 0 24px !important;
        opacity: .95;
        font-weight: 500;
    }
    .mobile-admissions-hero .hero-actions{
        display: flex !important;
        gap: 14px !important;
        flex-wrap: wrap !important;
        justify-content: center !important;
    }
    .mobile-admissions-hero .hero-btn{
        background: #ffffff !important;
        color: #800000 !important;
        font-weight: 800 !important;
        padding: 14px 30px !important;
        border-radius: 50px !important;
        text-decoration: none !important;
        font-size: 15px !important;
        box-shadow: 0 8px 20px rgba(0,0,0,.20);
        transition: transform .2s ease, box-shadow .2s ease;
        font-family: 'Poppins', system-ui, sans-serif;
        letter-spacing: .3px;
    }
    .mobile-admissions-hero .hero-btn:hover{
        transform: translateY(-2px);
        box-shadow: 0 14px 28px rgba(0,0,0,.30);
        color: #5e0000 !important;
    }
    .mobile-admissions-hero .hero-btn.outline{
        background: rgba(255,255,255,.14) !important;
        color: #fff !important;
        border: 1.5px solid rgba(255,255,255,.75);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .mobile-admissions-hero .hero-btn.outline:hover{
        background: rgba(255,255,255,.24) !important;
        color: #fff !important;
    }

    /* ---------- Promo video: framed, natural aspect, no letterbox ----------
       width:100% + height:auto means the video element height matches the video's
       natural aspect ratio — so there's no dead "brown" letterbox area. */
    .container-fluid.px-0:has(> video){
        max-width: 1140px !important;
        margin: 24px auto !important;
        padding: 0 14px !important;
    }
    .container-fluid.px-0 > video{
        width: 100% !important;
        height: auto !important;
        max-height: none !important;
        object-fit: initial !important;
        background: transparent !important;
        border-radius: 18px;
        box-shadow: 0 14px 32px rgba(0,0,0,.18);
        border: 2px solid rgba(128,0,0,.18);
        display: block;
    }

    /* Show the floating "Apply Now" FAB on desktop too */
    .mobile-apply-fab{
        display: inline-flex !important;
        position: fixed;
        right: 22px;
        bottom: 26px;
        z-index: 1080;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg,#a00000 0%,#800000 50%,#5e0000 100%);
        color: #fff !important;
        font-weight: 800;
        font-size: 14px;
        padding: 13px 22px;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 10px 26px rgba(214,40,40,.40);
        animation: fabPulse 1.8s ease-in-out infinite;
        font-family: 'Poppins', system-ui, sans-serif;
        letter-spacing: .3px;
    }
    .mobile-apply-fab:hover,
    .mobile-apply-fab:focus{
        color: #fff !important;
        text-decoration: none;
        transform: translateY(-2px);
    }
    .mobile-apply-fab .fab-icon{ font-size: 20px; }

    /* Show the "Enquiry" FAB on desktop too — opens the admission enquiry modal
       so users can re-interact with the form after closing the auto-popup */
    .mobile-call-fab{
        display: inline-flex !important;
        position: fixed;
        right: 22px;
        bottom: 90px;
        z-index: 1080;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: auto;
        height: auto;
        padding: 12px 20px;
        background: linear-gradient(135deg,#22c55e,#16a34a);
        color: #fff !important;
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: .3px;
        border: 0;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 8px 22px rgba(22,163,74,.45);
        animation: callPulse 1.8s ease-in-out infinite;
        cursor: pointer;
    }
    .mobile-call-fab::after{
        content: "Enquiry";
    }
    .mobile-call-fab:hover,
    .mobile-call-fab:focus{
        color: #fff !important;
        text-decoration: none;
        transform: translateY(-2px);
        outline: 0;
    }


    /* ---------- A. Hide empty wrappers / placeholders ---------- */
    /* Welcome ("bwhite") — content is mostly commented out */
    .bwhite{ padding: 0 !important; margin: 0 !important; }
    .bwhite > .container{ padding: 0 !important; margin: 0 !important; }
    .bwhite .row{ margin: 0 !important; }

    /* Lowerb wrapper — drop the 2rem top margin and decorative empty rows */
    .lowerb{ margin-top: 0 !important; }
    .lowerb > .row:first-child{ display: none !important; }

    /* Empty maroon admissions placeholder card (style="background-color: #800000") */
    .lowerb .card.sliders3-ed[style*="background-color: #800000"]{
        display: none !important;
    }
    .lowerb > .row:nth-of-type(2):has(.card.sliders3-ed[style*="background-color: #800000"]){
        display: none !important;
    }

    /* The empty inner row + 5vh spacer above course-intake */
    .lowerb .col-md-7 > .container > .row:first-child{ display: none !important; }
    .lowerb .col-md-7 > .container > div[style*="height: 5vh"]{ display: none !important; }

    /* Tighten the giant 5vh / 10vh dividers on desktop */
    div[style*="height: 5vh"]{ height: 24px !important; }
    div[style*="height: 10vh"]{ height: 36px !important; }

    /* Let the inner sections breathe — undo the col-md-7 + max-width: 600px constraint */
    .lowerb .col-md-7{
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
    .lowerb .col-md-7 .col-md[style*="max-width: 600px"]{
        max-width: 100% !important;
    }
    /* Force the course-intake-section to use the full responsive section width */
    .lowerb .course-intake-section{
        max-width: min(1320px, 92vw) !important;
        width: auto !important;
    }
    @media (min-width: 1400px){
        .lowerb .course-intake-section{
            max-width: min(1480px, 90vw) !important;
        }
    }


    /* ---------- B. Course Intake — modern gradient card grid ---------- */
    .course-intake-section{
        background: linear-gradient(135deg,#ffffff 0%,#fef2f2 100%);
        border-radius: 18px;
        padding: 28px 24px 24px !important;
        max-width: 1100px;
        margin: 28px auto !important;
        box-shadow: 0 8px 24px rgba(128,0,0,.12);
        border: 2px solid #800000;
    }
    .course-intake-section .course-title{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 26px;
        font-weight: 800;
        color: #800000;
        border-bottom: 0;
        padding-bottom: 0;
        margin-bottom: 6px;
    }
    .course-intake-section .course-title::after{
        content:"";
        display: block;
        width: 56px;
        height: 3px;
        background: linear-gradient(90deg,#800000,#d62828);
        border-radius: 3px;
        margin: 8px auto 0;
    }
    .course-intake-section .course-wrap{
        display: grid !important;
        grid-template-columns: repeat(6, 1fr) !important;
        gap: 14px !important;
        margin-top: 18px;
        padding: 0 !important;
    }
    .course-intake-section .course-box{
        background: #fff;
        border: 1px solid rgba(128,0,0,.10) !important;
        border-radius: 14px !important;
        padding: 18px 10px !important;
        min-width: 0 !important;
        box-shadow: 0 4px 10px rgba(128,0,0,.06);
        transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease, background .25s ease;
    }
    .course-intake-section .course-box:hover{
        background: linear-gradient(135deg, #800000, #5e0000) !important;
        transform: translateY(-4px) !important;
        box-shadow: 0 14px 28px rgba(128,0,0,.30);
        border-color: #5e0000 !important;
    }
    .course-intake-section .course-box:hover .course-name,
    .course-intake-section .course-box:hover .course-value small{
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }
    .course-intake-section .course-box:hover .course-value{
        background: none !important;
        -webkit-background-clip: initial !important;
        background-clip: initial !important;
        -webkit-text-fill-color: #ffffff !important;
        color: #ffffff !important;
    }
    .course-intake-section .course-box:hover .course-icon{
        background: #ffffff !important;
        color: #800000 !important;
    }
    .course-intake-section .course-box .course-name{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 12px;
        font-weight: 700;
        color: #800000 !important;
        text-transform: uppercase;
        letter-spacing: .8px;
        margin-bottom: 8px;
    }
    .course-intake-section .course-box .course-value{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 28px;
        font-weight: 800;
        line-height: 1;
        background: linear-gradient(135deg,#800000,#d62828);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent !important;
    }


    /* ---------- C. "IITM In News" carousel — maroon gradient + shadow ---------- */
    /* Targets only the IITM In News card (style="background: #800000;") — the empty
       admissions placeholder uses style="background-color: #800000" and is hidden above. */
    .lowerb .card.sliders3-ed[style*="background: #800000"]{
        background: linear-gradient(135deg,#800000 0%,#a52a2a 50%,#5e0000 100%) !important;
        border: 0 !important;
        border-radius: 18px !important;
        box-shadow: 0 14px 32px rgba(128,0,0,.25) !important;
        margin: 28px auto !important;
        max-width: 1100px;
        overflow: hidden;
    }
    .lowerb .card.sliders3-ed[style*="background: #800000"] .card-body{
        padding: 28px !important;
    }
    .lowerb .card.sliders3-ed[style*="background: #800000"] .card-title{
        font-family: 'Poppins', system-ui, sans-serif !important;
        font-size: 1.5rem !important;
        font-weight: 800 !important;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 16px !important;
    }
    .lowerb .card.sliders3-ed[style*="background: #800000"] .card-title::after{
        content:"";
        display: block;
        width: 56px;
        height: 3px;
        background: linear-gradient(90deg,#ffffff,#fee2e2);
        border-radius: 3px;
        margin: 10px auto 0;
    }
    .lowerb .card.sliders3-ed[style*="background: #800000"] .carousel-item img{
        border-radius: 12px;
        max-height: 420px;
        object-fit: contain;
    }
    .lowerb .card.sliders3-ed[style*="background: #800000"] h4.tgfmlt{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 15px !important;
        font-weight: 600;
        margin-top: 12px;
        color: rgba(255,255,255,.92);
    }


    /* ---------- D. Notices column — modern card layout ---------- */
    .col-md-3[style*="margin: 2em"]{
        flex: 0 0 auto !important;
        width: 100% !important;
        max-width: 1100px !important;
        margin: 28px auto !important;
        padding: 0 14px !important;
    }
    .col-md-3[style*="margin: 2em"] > div{
        background: #fff;
        border-radius: 16px;
        padding: 28px 32px;
        box-shadow: 0 8px 24px rgba(0,0,0,.06);
        border: 1px solid rgba(128,0,0,.08);
    }
    .col-md-3[style*="margin: 2em"] h1.nt{
        font-family: 'Poppins', system-ui, sans-serif !important;
        font-size: 26px !important;
        font-weight: 800 !important;
        color: #800000 !important;
        position: relative;
        padding-left: 18px;
        margin: 0 0 16px !important;
    }
    .col-md-3[style*="margin: 2em"] h1.nt::before{
        content:"";
        position: absolute;
        left: 0; top: 6px;
        width: 6px;
        height: 26px;
        background: linear-gradient(180deg,#800000,#d62828);
        border-radius: 5px;
    }
    .col-md-3[style*="margin: 2em"] .badge{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 11px !important;
        padding: 4px 9px !important;
        border-radius: 50px !important;
        margin-right: 8px;
        background: linear-gradient(135deg,#800000,#d62828) !important;
        color: #fff !important;
    }
    .col-md-3[style*="margin: 2em"] a.tgfmlt.nt{
        font-family: 'Poppins', system-ui, sans-serif !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        color: #2b2b2b !important;
        line-height: 1.5;
        text-decoration: none !important;
    }
    .col-md-3[style*="margin: 2em"] a.tgfmlt.nt:hover{
        color: #800000 !important;
    }
    .col-md-3[style*="margin: 2em"] .scp2{
        font-size: 11px !important;
        color: #888 !important;
        margin: 4px 0 10px !important;
        font-weight: 500;
    }
    .col-md-3[style*="margin: 2em"] a.btn-danger{
        margin-top: 16px !important;
        padding: 10px 22px !important;
        font-size: 13px !important;
        font-weight: 700;
        border-radius: 50px !important;
        background: linear-gradient(135deg,#800000,#d62828) !important;
        border: 0 !important;
        box-shadow: 0 6px 16px rgba(128,0,0,.25);
        text-decoration: none !important;
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .col-md-3[style*="margin: 2em"] a.btn-danger:hover{
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(128,0,0,.40);
    }


    /* ---------- E. Programmes grid — replace alice-blue with warm gradient ---------- */
    .container[style*="background-color: #f0f8ff"]{
        background: linear-gradient(135deg,#ffffff 0%,#fef2f2 100%) !important;
        border-radius: 20px;
        max-width: 1100px;
        margin: 28px auto !important;
        padding: 36px 28px !important;
        box-shadow: 0 6px 20px rgba(128,0,0,.06);
    }
    .container[style*="background-color: #f0f8ff"] .row{
        margin: 0;
        --bs-gutter-x: 18px;
    }
    .container[style*="background-color: #f0f8ff"] .programmes a{
        padding: 26px 14px !important;
        font-size: 16px !important;
        border-radius: 16px !important;
    }
    .container[style*="background-color: #f0f8ff"] .programmes .text{
        font-size: 16px !important;
        font-weight: 700;
        margin: 0;
    }


    /* ---------- F. Marquee desktop refinement ---------- */
    .marquee-container{ font-size: 14.5px; }


    /* ---------- G. Follow Us — desktop spacing + larger icons ---------- */
    .follow-us-icons{
        padding: 40px 14px !important;
        max-width: 1100px;
        margin: 28px auto !important;
        border-radius: 20px;
    }
    .follow-s-txt{ font-size: 28px !important; }
    .follow-us-tagline{ font-size: 13px !important; }
    .follow-us-icons .icons-gs{ gap: 32px !important; }
    .follow-us-icons .icons-gs a.s{ font-size: 32px !important; }


    /* ---------- H. Section title typography parity ---------- */
    .placement-section .placement-title h2,
    .modern-explore .explore-title h2{
        font-size: 28px !important;
    }
    .course-leads .leads-title h2{
        font-size: 22px !important;
    }
    .placement-section,
    .modern-explore{
        margin-top: 32px !important;
        margin-bottom: 32px !important;
    }
    .modern-stats{
        margin-top: 28px !important;
        margin-bottom: 28px !important;
    }

}

    </style>
</head>
<body>

<?php include('naacheader.php'); ?>

       <?php include('n.php'); ?>

        <!-- ============ NEW HERO — admission-centric (image-ref design) ============ -->
        <section class="iitm-hero-new">
            <div class="hero-new-content">
                <span class="hero-new-eyebrow">🎓 Admissions Open · Academic Year 2026-27</span>
                <h1 class="hero-new-title">"Education : Empowering Minds, Transforming Futures."</h1>
                <p class="hero-new-courses">MBA · MCA · BBA · BCA · B.Com (H) · BA (JMC)</p>
                <p class="hero-new-tag">25+ years of academic excellence, industry-aligned programmes and holistic development.</p>
                <div class="hero-new-actions">
                    <a href="course/programmes.php" class="hero-new-btn outline">Explore Programmes</a>
                </div>
                <div class="hero-new-helpers">
                    <a href="tel:01128525051" class="hero-new-helper-link" aria-label="Call admission helpline">
                        <i class="fa fa-phone" aria-hidden="true"></i> 011-28525051
                    </a>
                    <span class="hero-new-helper-divider">·</span>
                    <a href="#course-leads" class="hero-new-helper-link">
                        <i class="fa fa-headphones" aria-hidden="true"></i> Talk to a Programme Lead
                    </a>
                    <span class="hero-new-helper-divider">·</span>
                    <a href="admissions/admissionprocedure.php" class="hero-new-helper-link">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i> Admission Procedure
                    </a>
                </div>
                <div class="hero-new-stats-row">
                    <div class="hero-new-stat"><b>1,020+</b><span>Total Seats</span></div>
                    <div class="hero-new-stat"><b>6</b><span>Programmes</span></div>
                    <div class="hero-new-stat"><b>NAAC</b><span>Grade A</span></div>
                    <div class="hero-new-stat"><b>NBA</b><span>Accredited</span></div>
                </div>
            </div>
            <div class="hero-new-image">
                <div class="hero-slider" data-autoplay="4500">
                    <div class="hero-slides" id="heroSlides">
                        <div class="hero-slide">
                            <img src="images/admissions-2026.jpg" alt="Admissions Open for Session 2026-27 at IITM Janakpuri" width="1080" height="1080" loading="eager" decoding="async" fetchpriority="high">
                        </div>
                        <div class="hero-slide">
                            <img src="images/campus-hero.jpg" alt="IITM Janakpuri Campus" width="720" height="1280" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='images/campus-hero.png'">
                        </div>
                    </div>
                    <button type="button" class="hero-arrow prev" id="heroPrev" aria-label="Previous slide">&#10094;</button>
                    <button type="button" class="hero-arrow next" id="heroNext" aria-label="Next slide">&#10095;</button>
                    <div class="hero-dots" id="heroDots" role="tablist" aria-label="Hero slider pagination">
                        <button type="button" data-slide="0" class="is-active" aria-label="Slide 1" role="tab"></button>
                        <button type="button" data-slide="1" aria-label="Slide 2" role="tab"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Overview cards (4-up: Course Intake / Helpline / Programmes / Follow Us) ============ -->
        <section class="iitm-overview-cards">
            <div class="overview-card">
                <div class="overview-icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="11" r="3"/><circle cx="23" cy="11" r="3"/><circle cx="16" cy="9" r="3.5"/>
                        <path d="M3 24c1-4 4-6 6-6s5 2 6 6M17 24c1-4 4-6 6-6s5 2 6 6"/>
                    </svg>
                </div>
                <div class="overview-title">COURSE INTAKE</div>
                <div class="overview-stat">1,020+</div>
                <div class="overview-sub">Total Seats</div>
                <a href="#course-intake" class="overview-btn">View Intake</a>
            </div>
            <div class="overview-card">
                <div class="overview-icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 4a10 10 0 0 0-10 10v6a3 3 0 0 0 3 3h2v-9H7a8 8 0 0 1 18 0h-4v9h2a3 3 0 0 0 3-3v-6A10 10 0 0 0 16 4z"/>
                        <path d="M21 23v2a4 4 0 0 1-4 4h-2"/>
                    </svg>
                </div>
                <div class="overview-title">COURSE-WISE HELPLINE</div>
                <p class="overview-desc">Talk to the right faculty for your chosen programme.</p>
                <a href="#course-leads" class="overview-btn">View Helplines</a>
            </div>
            <div class="overview-card">
                <div class="overview-icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 6 2 13l14 7 14-7-14-7z"/>
                        <path d="M6 16v6c0 1.5 4 3 10 3s10-1.5 10-3v-6"/>
                    </svg>
                </div>
                <div class="overview-title">PROGRAMMES</div>
                <p class="overview-desc">UG, PG &amp; Professional programmes designed for your future.</p>
                <a href="course/programmes.php" class="overview-btn">Explore Programmes</a>
            </div>
            <div class="overview-card">
                <div class="overview-icon" aria-hidden="true">
                    <svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="12" r="4"/><circle cx="22" cy="11" r="3"/>
                        <path d="M3 26c1-5 4-7 8-7s7 2 8 7M19 26c.5-3.5 2.5-5 5-5s4 1.5 5 5"/>
                    </svg>
                </div>
                <div class="overview-title">FOLLOW US</div>
                <p class="overview-desc">Stay connected for latest updates, events &amp; more.</p>
                <a href="#follow-us-anchor" class="overview-btn">Follow Us</a>
            </div>
        </section>

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
     -->    <a href="https://iitmjanakpuri.com/admissions/managementquota.php" target="_blank">Management Quota Admissions-2026-27</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            <a href="https://iitmjanakpuri.com/direct-file/feesdetails.pdf" target="_blank">Fee Details for Academic Year 2025-26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/counselor.pdf">Contact Your Counsellor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <!-- <a href="https://iitmjanakpuri.com/fiesta2k25/">Fiesta 2K25</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/finalcheck.pdf" target="_blank">Admission Document (Two Copies Each) Check List for Academic Year 2025-26</a>&nbsp;&nbsp;
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
            <img src="sliderimages/slide-01-stats.png" class="d-block w-100" alt="IITM Janakpuri at a glance — 2500+ Students, 120+ Faculty, 7600+ Alumni">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-02-infrastructure.jpg" class="d-block w-100" alt="Cutting-Edge Infrastructure and Facilities for BA (JMC)" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-03-mediax.jpg" class="d-block w-100" alt="Media X — Annual Media Fest of IITM" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-04-career-connect.jpg" class="d-block w-100" alt="Career Connect Expo — Top Recruiters Associated with IITM" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-05-pride-mba.jpg" class="d-block w-100" alt="Our Academic Pride — MBA" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-06-pride-mca.jpg" class="d-block w-100" alt="Our Academic Pride — MCA" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-07-pride-bba.jpg" class="d-block w-100" alt="Our Academic Pride — BBA" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-08-pride-bca.jpg" class="d-block w-100" alt="Our Academic Pride — BCA" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-09-pride-bcom.jpg" class="d-block w-100" alt="Our Academic Pride — B.Com (H)" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-10-pride-bajmc.jpg" class="d-block w-100" alt="Our Academic Pride — BA (JMC)" loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/slide-11-highest-package.png" class="d-block w-100" alt="Highest Package across MBA, MCA, BBA, BCA, B.Com (H), BA (JMC)" loading="lazy">
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

<!-- ============ IITM Highlights — auto-scrolling compact banner ============ -->
<section class="iitm-highlights-banner" aria-label="IITM Highlights">
    <div class="highlights-track">
        <div class="highlights-row">
            <a href="sliderimages/slide-01-stats.png" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-01-stats.png" alt="IITM at a Glance" loading="lazy"></a>
            <a href="sliderimages/slide-02-infrastructure.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-02-infrastructure.jpg" alt="Infrastructure — BA (JMC)" loading="lazy"></a>
            <a href="sliderimages/slide-03-mediax.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-03-mediax.jpg" alt="Media X — Annual Media Fest" loading="lazy"></a>
            <a href="sliderimages/slide-04-career-connect.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-04-career-connect.jpg" alt="Career Connect Expo" loading="lazy"></a>
            <a href="sliderimages/slide-05-pride-mba.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-05-pride-mba.jpg" alt="Academic Pride — MBA" loading="lazy"></a>
            <a href="sliderimages/slide-06-pride-mca.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-06-pride-mca.jpg" alt="Academic Pride — MCA" loading="lazy"></a>
            <a href="sliderimages/slide-07-pride-bba.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-07-pride-bba.jpg" alt="Academic Pride — BBA" loading="lazy"></a>
            <a href="sliderimages/slide-08-pride-bca.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-08-pride-bca.jpg" alt="Academic Pride — BCA" loading="lazy"></a>
            <a href="sliderimages/slide-09-pride-bcom.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-09-pride-bcom.jpg" alt="Academic Pride — B.Com (H)" loading="lazy"></a>
            <a href="sliderimages/slide-10-pride-bajmc.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-10-pride-bajmc.jpg" alt="Academic Pride — BA (JMC)" loading="lazy"></a>
            <a href="sliderimages/slide-11-highest-package.png" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-11-highest-package.png" alt="Highest Package per Program" loading="lazy"></a>
        </div>
        <!-- Duplicate row for seamless infinite loop -->
        <div class="highlights-row" aria-hidden="true">
            <a href="sliderimages/slide-01-stats.png" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-01-stats.png" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-02-infrastructure.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-02-infrastructure.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-03-mediax.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-03-mediax.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-04-career-connect.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-04-career-connect.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-05-pride-mba.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-05-pride-mba.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-06-pride-mca.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-06-pride-mca.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-07-pride-bba.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-07-pride-bba.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-08-pride-bca.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-08-pride-bca.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-09-pride-bcom.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-09-pride-bcom.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-10-pride-bajmc.jpg" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-10-pride-bajmc.jpg" alt="" loading="lazy"></a>
            <a href="sliderimages/slide-11-highest-package.png" class="hl-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="sliderimages/slide-11-highest-package.png" alt="" loading="lazy"></a>
        </div>
    </div>
</section>

<!-- Mobile-only Admissions Hero Card -->
<div class="mobile-admissions-hero">
    <h3>🎓 Admissions Open 2026-27</h3>
    <p>MBA · MCA · BBA · BCA · B.Com (H) · BA (JMC)</p>
    <div class="hero-actions">
        <a href="https://iitmjanakpuri.com/admissions/admissionprocedure.php" class="hero-btn outline">Procedure</a>
        <a href="tel:01128525051" class="hero-btn outline">📞 Helpline</a>
    </div>
</div>

<!-- Course-wise Admission Helpline -->
<div class="course-leads" id="course-leads">
    <div class="leads-title">
        <h2>Course-wise Admission Helpline</h2>
        <p>Talk directly to the admission incharge for Admissions 2026-27</p>
    </div>
    <div class="leads-grid">
        <div class="lead-card l1">
            <div class="lead-badge">BCA</div>
            <div class="lead-info">
                <div class="lead-course">Bachelor of Computer Application</div>
                <div class="lead-name">Ms. Leena Gupta</div>
                <a href="tel:+918796283551" class="lead-phone">+91 87962 83551</a>
            </div>
            <a href="tel:+918796283551" class="lead-call" aria-label="Call Ms. Leena Gupta">📞</a>
        </div>

        <div class="lead-card l2">
            <div class="lead-badge">MCA</div>
            <div class="lead-info">
                <div class="lead-course">Master of Computer Application</div>
                <div class="lead-name">Mr. Ashish Nayyar</div>
                <a href="tel:+918796452755" class="lead-phone">+91 87964 52755</a>
            </div>
            <a href="tel:+918796452755" class="lead-call" aria-label="Call Mr. Ashish Nayyar">📞</a>
        </div>

        <div class="lead-card l3">
            <div class="lead-badge">BBA</div>
            <div class="lead-info">
                <div class="lead-course">Bachelor of Business Administration</div>
                <div class="lead-name">Dr. Deepali Saluja</div>
                <a href="tel:+918796452756" class="lead-phone">+91 87964 52756</a>
            </div>
            <a href="tel:+918796452756" class="lead-call" aria-label="Call Dr. Deepali Saluja">📞</a>
        </div>

        <div class="lead-card l4">
            <div class="lead-badge">B.Com<br>(H)</div>
            <div class="lead-info">
                <div class="lead-course">Bachelor of Commerce (Honours)</div>
                <div class="lead-name">Dr. Raghav Jain</div>
                <a href="tel:+918796452757" class="lead-phone">+91 87964 52757</a>
            </div>
            <a href="tel:+918796452757" class="lead-call" aria-label="Call Dr. Raghav Jain">📞</a>
        </div>

        <div class="lead-card l5">
            <div class="lead-badge">MBA</div>
            <div class="lead-info">
                <div class="lead-course">Master of Business Administration</div>
                <div class="lead-name">Dr. Mandeep Singh</div>
                <a href="tel:+919560098709" class="lead-phone">+91 95600 98709</a>
            </div>
            <a href="tel:+919560098709" class="lead-call" aria-label="Call Dr. Mandeep Singh">📞</a>
        </div>

        <div class="lead-card l6">
            <div class="lead-badge">BA<br>(JMC)</div>
            <div class="lead-info">
                <div class="lead-course">Journalism &amp; Mass Communication</div>
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
        <div class="placement-card">
            <span class="pkg-course">BCA</span>
            <span class="pkg-value">22<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
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
            <span class="pkg-value">9<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">B.Com (H)</span>
            <span class="pkg-value">6<small>&nbsp;LPA</small></span>
            <span class="pkg-label">Highest</span>
        </div>
        <div class="placement-card">
            <span class="pkg-course">BA (JMC)</span>
            <span class="pkg-value">6<small>&nbsp;LPA</small></span>
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
        <a href="https://www.alumniiitmjanakpuri.com/" target="_blank" rel="noopener" class="explore-card c6">
            <span class="explore-icon">🎓</span>
            <span class="explore-name">Alumni Portal</span>
        </a>
    </div>
</div>

<!-- ============ Course Intake (moved out of .lowerb so it spans full width) ============ -->
<div class="course-intake-section" id="course-intake">
    <div class="container text-center">
        <div class="course-title-wrap">
            <h2 class="course-title">Course Intake</h2>
            <p class="course-subtitle">Available seats · Academic Year 2026-27</p>
        </div>

        <div class="course-wrap">
            <div class="course-box">
                <span class="course-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                <div class="course-name">MBA</div>
                <div class="course-value">60<small>SEATS</small></div>
            </div>

            <div class="course-box">
                <span class="course-icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
                <div class="course-name">MCA</div>
                <div class="course-value">60<small>SEATS</small></div>
            </div>

            <div class="course-box">
                <span class="course-icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                <div class="course-name">BCA</div>
                <div class="course-value">240<small>SEATS</small></div>
            </div>

            <div class="course-box">
                <span class="course-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                <div class="course-name">BBA</div>
                <div class="course-value">360<small>SEATS</small></div>
            </div>

            <div class="course-box">
                <span class="course-icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <div class="course-name">B.Com (H)</div>
                <div class="course-value">120<small>SEATS</small></div>
            </div>

            <div class="course-box">
                <span class="course-icon"><i class="fa fa-microphone" aria-hidden="true"></i></span>
                <div class="course-name">BA (JMC)</div>
                <div class="course-value">180<small>SEATS</small></div>
            </div>
        </div>

        <div class="course-total">
            <span><strong>1,020</strong> Total Seats</span>
            <span class="course-total-divider">·</span>
            <span><strong>6</strong> Programmes</span>
        </div>
    </div>
</div>

<!-- ============ IITM In News — auto-scrolling framed banner ============ -->
<section class="iitm-news-banner" aria-label="IITM In News">
    <div class="news-title">
        <h2>IITM In News</h2>
        <p>Recognitions and rankings featured in leading publications</p>
    </div>
    <div class="news-banner-wrap">
        <div class="news-track">
            <div class="news-row">
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="NewsImages/top19b.jpeg" alt="Top 19 B-School (MBA)" loading="lazy">
                    <div class="news-caption">Top 19 B-School (MBA) — Times 2026</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="NewsImages/37th.jpeg" alt="Ranked 37th in Placements" loading="lazy">
                    <div class="news-caption">Ranked 37th in Placements — Times 2026</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/rankk.jpeg" alt="Top 50 B-School" loading="lazy">
                    <div class="news-caption">Top 50 B-School</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/bscho24.jpg" alt="Top 70 B-School" loading="lazy">
                    <div class="news-caption">Top 70 B-School</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/deb23.jpeg" alt="Best B-School" loading="lazy">
                    <div class="news-caption">Best B-School</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/ind23.jpeg" alt="India Today Ranking" loading="lazy">
                    <div class="news-caption">India Today Ranking</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/timesbschool.jpg" alt="Times B-School" loading="lazy">
                    <div class="news-caption">Times B-School</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/businessaward.jpg" alt="Business Award" loading="lazy">
                    <div class="news-caption">Business Award</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/conf.jpg" alt="International Conference IKDSAK-2023" loading="lazy">
                    <div class="news-caption">International Conference IKDSAK-2023</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/fiesta.jpg" alt="IITM Fiesta" loading="lazy">
                    <div class="news-caption">IITM Fiesta</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/lak.jpg" alt="Star Cast of LAKEEREIN" loading="lazy">
                    <div class="news-caption">Star Cast of LAKEEREIN</div>
                </a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox">
                    <img src="upload_new/gallery/indiia.jpg" alt="Live Show — India TV" loading="lazy">
                    <div class="news-caption">Live Show — India TV</div>
                </a>
            </div>
            <!-- Duplicate row for seamless infinite loop -->
            <div class="news-row" aria-hidden="true">
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="NewsImages/top19b.jpeg" alt="" loading="lazy"><div class="news-caption">Top 19 B-School (MBA) — Times 2026</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="NewsImages/37th.jpeg" alt="" loading="lazy"><div class="news-caption">Ranked 37th in Placements — Times 2026</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/rankk.jpeg" alt="" loading="lazy"><div class="news-caption">Top 50 B-School</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/bscho24.jpg" alt="" loading="lazy"><div class="news-caption">Top 70 B-School</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/deb23.jpeg" alt="" loading="lazy"><div class="news-caption">Best B-School</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/ind23.jpeg" alt="" loading="lazy"><div class="news-caption">India Today Ranking</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/timesbschool.jpg" alt="" loading="lazy"><div class="news-caption">Times B-School</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/businessaward.jpg" alt="" loading="lazy"><div class="news-caption">Business Award</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/conf.jpg" alt="" loading="lazy"><div class="news-caption">International Conference IKDSAK-2023</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/fiesta.jpg" alt="" loading="lazy"><div class="news-caption">IITM Fiesta</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/lak.jpg" alt="" loading="lazy"><div class="news-caption">Star Cast of LAKEEREIN</div></a>
                <a class="news-card" data-bs-toggle="modal" data-bs-target="#imgLightbox"><img src="upload_new/gallery/indiia.jpg" alt="" loading="lazy"><div class="news-caption">Live Show — India TV</div></a>
            </div>
        </div>
    </div>
</section>

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
    <div class="notices-card">
        <h1 class="tgfmlt nt">Notices</h1>
        <ul class="notices-list">
            <?php $counter = 1; foreach ($notices as $notice): ?>
                <li class="notice-item">
                    <span class="notice-num"><?php echo $counter++; ?></span>
                    <a href="<?php echo $notice['file_path']; ?>" target="_blank" class="notice-link">
                        <span class="notice-title-text">
                            <i class="fa fa-file-text-o notice-icon" aria-hidden="true"></i>
                            <?php echo $notice['notice_title']; ?>
                        </span>
                        <span class="notice-date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php echo $notice['date_uploaded']; ?>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a class="notices-view-all" href="https://www.iitmjanakpuri.com/notices.php" target="_blank">
            View All Notices <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<div style="height: 5vh;"></div>
<!-- ============ Our Programmes — themed card grid (matches Course Intake) ============ -->
<section class="iitm-programmes-section">
    <div class="programmes-title">
        <h2>Our Programmes</h2>
        <p>Initiatives that shape every IITM student</p>
    </div>
    <div class="programmes-grid">
        <a href="https://iitmjanakpuri-sdc.in/" target="_blank" class="prog-card">
            <span class="prog-icon"><i class="fa fa-rocket" aria-hidden="true"></i></span>
            <span class="prog-name">Incubation Program</span>
        </a>
        <a href="https://iitmjanakpuri.com/StudentZone/esc.php" class="prog-card">
            <span class="prog-icon"><i class="fa fa-leaf" aria-hidden="true"></i></span>
            <span class="prog-name">Green Initiatives</span>
        </a>
        <a href="https://iitmjanakpuri.com/StudentZone/studentzone.php" target="_blank" class="prog-card">
            <span class="prog-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
            <span class="prog-name">Students' Societies</span>
        </a>
        <a href="https://iitmjanakpuri.com/upload_new/Physical%20Wellbeing.pdf" target="_blank" class="prog-card">
            <span class="prog-icon"><i class="fa fa-heart" aria-hidden="true"></i></span>
            <span class="prog-name">Counselling Services</span>
        </a>
    </div>
</section>
<div style="height: 10vh;"></div>


 <!--   SOCIAL MEDIA ICONS -->
  <div class="row follow-us-icons" id="follow-us-anchor" style="width: 100%;">
    <div style="width: 100%">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 text-center" style="text-align:center;padding: 5px;">
                	<span class="text-danger h3 tgfmlt follow-s-txt">Follow Us</span>
                	<span class="follow-us-tagline">Stay connected with IITM Janakpuri</span>
                  <div class="icons-gs">

	<a href="https://www.instagram.com/iitm_janakpuri/" class="s instagram" target="_blank" rel="noopener" aria-label="Instagram">
		<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
			<defs>
				<linearGradient id="ig-grad-fu" x1="0%" y1="100%" x2="100%" y2="0%">
					<stop offset="0%" stop-color="#feda75"/>
					<stop offset="25%" stop-color="#fa7e1e"/>
					<stop offset="50%" stop-color="#d62976"/>
					<stop offset="75%" stop-color="#962fbf"/>
					<stop offset="100%" stop-color="#4f5bd5"/>
				</linearGradient>
			</defs>
			<path fill="url(#ig-grad-fu)" d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.311.975.975 1.249 2.242 1.311 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.311 3.608-.975.975-2.242 1.249-3.608 1.311-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.311-.975-.975-1.249-2.242-1.311-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.336-2.633 1.311-3.608.975-.975 2.242-1.249 3.608-1.311C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.014 7.052.072 5.775.13 4.602.396 3.635 1.363c-.967.967-1.233 2.14-1.291 3.417C2.014 8.332 2 8.741 2 12c0 3.259.014 3.668.072 4.948.058 1.277.324 2.45 1.291 3.417.967.967 2.14 1.233 3.417 1.291 1.28.058 1.689.072 4.948.072s3.668-.014 4.948-.072c1.277-.058 2.45-.324 3.417-1.291.967-.967 1.233-2.14 1.291-3.417.058-1.28.072-1.689.072-4.948 0-3.259-.014-3.668-.072-4.948-.058-1.277-.324-2.45-1.291-3.417C19.398.396 18.225.13 16.948.072 15.668.014 15.259 0 12 0z"/>
			<path fill="url(#ig-grad-fu)" d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8z"/>
			<circle fill="url(#ig-grad-fu)" cx="18.406" cy="5.594" r="1.44"/>
		</svg>
	</a>
  	<a href="https://www.facebook.com/iitmjanakpurinewdelhi" class="s facebook" target="_blank" rel="noopener" aria-label="Facebook">
		<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12c0 5.99 4.388 10.954 10.125 11.854V15.47H7.078V12h3.047V9.356c0-3.007 1.792-4.668 4.533-4.668 1.312 0 2.686.234 2.686.234v2.953H15.83c-1.491 0-1.956.925-1.956 1.874V12h3.328l-.532 3.47h-2.796v8.385C19.612 22.954 24 17.99 24 12z"/></svg>
	</a>
    <a href="https://www.linkedin.com/in/iitm-janakpuri-29678b100" class="s linkedin" target="_blank" rel="noopener" aria-label="LinkedIn">
		<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
	</a>
  	<a href="https://twitter.com/iitm_ipu" class="s twitter" target="_blank" rel="noopener" aria-label="X (formerly Twitter)">
		<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231zm-1.161 17.52h1.833L7.084 4.126H5.117l11.966 15.644z"/></svg>
	</a>
  	<a href="https://www.youtube.com/channel/UCRfsFwiKcTStwUIf2vISxCw" class="s youtube" target="_blank" rel="noopener" aria-label="YouTube">
		<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
	</a>
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

    <!-- ============ IITM Mitra — dummy chatbot widget (hidden for now) ============ -->
    <button type="button" class="iitm-chatbot-fab" id="chatbotToggle" aria-label="Open IITM Mitra chatbot" style="display:none !important;">
        <span class="cf-icon">💬</span>
        <span class="cf-pulse"></span>
        <span class="cf-label">IITM Mitra</span>
    </button>
    <div class="iitm-chatbot-window" id="chatbotWindow" aria-hidden="true" role="dialog" aria-label="IITM Mitra chatbot" style="display:none !important;">
        <div class="cb-header">
            <div class="cb-brand">
                <div class="cb-academic-robot" aria-hidden="true">
                    <span class="cb-grad-cap">🎓</span>
                    <img src="iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM" class="cb-logo-img">
                </div>
                <div class="cb-titles">
                    <div class="cb-iitm-tag">IITM Janakpuri</div>
                    <div class="cb-name">IITM Mitra</div>
                    <div class="cb-status"><span class="cb-dot"></span> Online · Ask me anything</div>
                </div>
            </div>
            <button type="button" class="cb-close" id="chatbotClose" aria-label="Close chat">×</button>
        </div>
        <div class="cb-body" id="chatbotMessages"></div>
        <div class="cb-suggestions" id="chatbotSuggestions">
            <button type="button" class="cb-chip">🎓 Admissions</button>
            <button type="button" class="cb-chip">📚 Courses</button>
            <button type="button" class="cb-chip">💼 Placements</button>
            <button type="button" class="cb-chip">📞 Contact</button>
            <button type="button" class="cb-chip">📍 Location</button>
            <button type="button" class="cb-chip">💰 Fees</button>
        </div>
        <form class="cb-input-wrap" id="chatbotForm" autocomplete="off">
            <div class="cb-standing-bot" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 100" width="40" height="68">
                    <!-- Tassel -->
                    <line x1="30" y1="14" x2="44" y2="20" stroke="#800000" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="44" cy="20" r="2" fill="#800000"/>
                    <!-- Graduation cap -->
                    <rect x="13" y="9" width="34" height="3" fill="#1a1a1a"/>
                    <polygon points="14,12 30,16 46,12 30,4" fill="#222"/>
                    <!-- Antennas -->
                    <line x1="22" y1="18" x2="22" y2="22" stroke="#800000" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="22" cy="16" r="1.5" fill="#d62828"/>
                    <line x1="38" y1="18" x2="38" y2="22" stroke="#800000" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="38" cy="16" r="1.5" fill="#d62828"/>
                    <!-- Head -->
                    <rect x="16" y="22" width="28" height="22" rx="6" fill="#fff" stroke="#800000" stroke-width="2"/>
                    <!-- Eyes -->
                    <circle cx="25" cy="31" r="2.4" fill="#800000"/>
                    <circle cx="35" cy="31" r="2.4" fill="#800000"/>
                    <circle cx="26" cy="30" r=".8" fill="#fff"/>
                    <circle cx="36" cy="30" r=".8" fill="#fff"/>
                    <!-- Smile -->
                    <path d="M 24 38 Q 30 41 36 38" stroke="#800000" stroke-width="1.6" fill="none" stroke-linecap="round"/>
                    <!-- Neck -->
                    <rect x="27" y="44" width="6" height="3" fill="#800000"/>
                    <!-- Body with IITM chest -->
                    <rect x="11" y="47" width="38" height="30" rx="5" fill="#fff" stroke="#800000" stroke-width="2"/>
                    <line x1="16" y1="55" x2="44" y2="55" stroke="rgba(128,0,0,.18)" stroke-width="0.6"/>
                    <text x="30" y="68" text-anchor="middle" font-family="Arial,Helvetica,sans-serif" font-size="8" font-weight="800" fill="#800000" letter-spacing="0.5">IITM</text>
                    <!-- Arms -->
                    <rect x="3" y="50" width="6" height="22" rx="2.5" fill="#fff" stroke="#800000" stroke-width="1.5"/>
                    <rect x="51" y="50" width="6" height="22" rx="2.5" fill="#fff" stroke="#800000" stroke-width="1.5"/>
                    <!-- Hands -->
                    <circle cx="6" cy="74" r="3" fill="#800000"/>
                    <circle cx="54" cy="74" r="3" fill="#800000"/>
                    <!-- Legs -->
                    <rect x="18" y="77" width="8" height="17" rx="2" fill="#fff" stroke="#800000" stroke-width="1.5"/>
                    <rect x="34" y="77" width="8" height="17" rx="2" fill="#fff" stroke="#800000" stroke-width="1.5"/>
                    <!-- Feet -->
                    <ellipse cx="22" cy="96" rx="6.5" ry="2.5" fill="#800000"/>
                    <ellipse cx="38" cy="96" rx="6.5" ry="2.5" fill="#800000"/>
                </svg>
            </div>
            <input type="text" class="cb-input" id="chatbotInput" placeholder="Type your question…" />
            <button type="submit" class="cb-send" aria-label="Send">➤</button>
        </form>
    </div>
    <script>
        (function(){
            var fab = document.getElementById('chatbotToggle');
            var win = document.getElementById('chatbotWindow');
            var closeBtn = document.getElementById('chatbotClose');
            var form = document.getElementById('chatbotForm');
            var input = document.getElementById('chatbotInput');
            var messages = document.getElementById('chatbotMessages');
            var suggestions = document.getElementById('chatbotSuggestions');
            if (!fab || !win) return;

            var mascot = document.getElementById('chatbotMascot');
            function openChat(){
                win.classList.add('is-open');
                fab.classList.add('is-active');
                win.setAttribute('aria-hidden','false');
                if (mascot) mascot.classList.add('is-visible');
                if (!messages.dataset.greeted){
                    addBot("Namaste! 🙏 I'm <b>IITM Mitra</b>, your friendly admission guide.<br><i>\"Vidyā Dadāti Vinayam\"</i> — Knowledge brings humility.<br>How can I help you today?");
                    messages.dataset.greeted = '1';
                }
                setTimeout(function(){ input.focus(); }, 200);
            }
            function closeChat(){
                win.classList.remove('is-open');
                fab.classList.remove('is-active');
                win.setAttribute('aria-hidden','true');
                if (mascot) mascot.classList.remove('is-visible');
            }
            fab.addEventListener('click', function(){
                win.classList.contains('is-open') ? closeChat() : openChat();
            });
            closeBtn.addEventListener('click', closeChat);

            function addUser(text){
                var d = document.createElement('div');
                d.className = 'cb-msg cb-user';
                d.textContent = text;
                messages.appendChild(d);
                messages.scrollTop = messages.scrollHeight;
            }
            function addBot(html){
                var d = document.createElement('div');
                d.className = 'cb-msg cb-bot';
                d.innerHTML = html;
                messages.appendChild(d);
                messages.scrollTop = messages.scrollHeight;
            }

            // Course-wise faculty contacts (used by multiple intents)
            var COURSE_CONTACTS = "<b>Course-wise Admission Helpline (2026-27):</b><br>" +
                "• <b>BCA</b> — Ms. Leena Gupta · <a href='tel:+918796283551'>+91 87962 83551</a><br>" +
                "• <b>MCA</b> — Mr. Ashish Nayyar · <a href='tel:+918796452755'>+91 87964 52755</a><br>" +
                "• <b>BBA</b> — Dr. Deepali Saluja · <a href='tel:+918796452756'>+91 87964 52756</a><br>" +
                "• <b>B.Com (H)</b> — Dr. Raghav Jain · <a href='tel:+918796452757'>+91 87964 52757</a><br>" +
                "• <b>MBA</b> — Dr. Mandeep Singh · <a href='tel:+919560098709'>+91 95600 98709</a><br>" +
                "• <b>BA (JMC)</b> — Dr. Nivedita Sharma · <a href='tel:+917217872947'>+91 72178 72947</a>";

            var responses = [
                { match: /\b(hi|hello|hey|namaste|namaskar|hola|salam|howdy|yo|sup|wassup|whats?\s?up|aloha|hiya|good\s?(morning|afternoon|evening|day)|gree ?tings|nice.*meet|pleased.*meet)\b/i,
                  reply: "Namaste! 🙏 Welcome to <b>IITM Janakpuri</b>. <i>Vidyā Dadāti Vinayam</i> — knowledge gives humility. How may I assist you?" },
                /* Bot status — "how are you" type queries */
                { match: /(how.*are.*you|how.*you.*doing|how.*it.*going|how.*have.*you.*been|how.*everything|are.*you.*good|how.*things|are.*you.*okay|how.*your.*day|are.*you.*fine|how.*you.*feel|status.?check|all.?good\??$)/i,
                  reply: "I'm doing great, thanks! 🤖 Ready to help with your IITM queries — admissions, courses, fees, placements, you name it. What would you like to know?" },
                /* Library — specific book actions / facilities — comes BEFORE the general library intent */
                { match: /(issue.*book|borrow|book.*lend|lending|return.*book|book.*return|renew.*book|reissue|book.*search|catalog|fine.*overdue|fine.*book|overdue|lost.*book|book.*lost|library.*book.*issue|how.?many.?books|library.?card|take.*book|take.*home|reading.?room|study.?area|study.?room|study.?space|librarian|carry.*book)/i,
                  reply: "📚 <b>Library — Book Services &amp; Facilities</b><br>• <b>Issue / borrow</b> — present your library card at the counter<br>• Up to <b>4 books</b> per student (varies by programme)<br>• <b>Renewal</b> — bring book to counter or use OPAC: <a href='https://www.iitmjanakpuri.com/Library/opac.php' target='_blank'>OPAC search</a><br>• <b>Late fine</b> — ~₹2/day per overdue book<br>• <b>Lost book</b> — inform the librarian; replacement charge applies<br>• <b>Reading rooms / study areas</b> — open during library hours<br>🕘 <b>Hours:</b> Mon–Fri 8 AM – 6 PM · Sat 10 AM – 5 PM · Sun closed<br>🔗 <a href='https://www.iitmjanakpuri.com/Library/libraryservices.php' target='_blank'>All Library Services</a> · <a href='https://www.iitmjanakpuri.com/Library/contactus.php' target='_blank'>Contact Library</a>" },
                /* E-resources — e-books / e-journals / e-databases / online */
                { match: /(e.?book|e.?journal|e.?database|online.?resource|online.?journal|digital.?library|digital.?resource|open.?access|e.?newsletter)/i,
                  reply: "💻 <b>Library E-Resources:</b><br>• <a href='https://www.iitmjanakpuri.com/Library/ebooks.php' target='_blank'>E-Books</a><br>• <a href='https://www.iitmjanakpuri.com/Library/ejournals.php' target='_blank'>E-Journals</a><br>• <a href='https://www.iitmjanakpuri.com/Library/edatabases.php' target='_blank'>E-Databases</a><br>• <a href='https://www.iitmjanakpuri.com/Library/openaccessresources.php' target='_blank'>Open Access Resources</a><br>• <a href='https://www.iitmjanakpuri.com/Library/enewsletters.php' target='_blank'>E-Newsletters</a><br>Access via campus Wi-Fi or the LMS portal." },
                /* Medical leave / attendance */
                { match: /(medical.?leave|medical.?cer\s?ti?fic|sick.*class|sick.*miss|missed.*class|absent.*sick|i.?was.?sick|a\s?ttend?ance.*medical|medical.*absent)/i,
                  reply: "🏥 <b>Medical Leave Policy:</b><br>If you missed class due to sickness, submit a <b>valid medical certificate</b> to the administration office <b>within one week of rejoining</b>. Contact your department head for the specific form." },
                /* FAQ — general help */
                { match: /(\bfaq\b|frequently.?asked|common.?question|q\s*&\s*a|help.?topic|general.?inquir|general.?ques)/i,
                  reply: "📝 <b>Need a quick answer?</b><br>Full FAQ → <a href='https://iitmjanakpuri.com/admissions/faqs.php' target='_blank'>Admissions FAQs</a><br>Or just ask me directly — try keywords like: <i>admission, eligibility, fees, placements, scholarship, hostel, library, contact, faculty</i>." },
                /* Course-specific intents — match the course name in any form (BCA, B.C.A, b c a, etc.)
                   plus the lead's name. Broad regex so Hinglish queries with typos still hit:
                   "admission lena hai bca mein", "bca ka admission", "mai bca karna chahta hu" all work. */
                { match: /(\bb\.?\s?c\.?\s?a\b|\bleena\b|leena.?gupta)/i,
                  reply: "🎓 <b>BCA — Bachelor of Computer Applications</b><br>" +
                         "🪑 <b>240 seats</b> · 3-year programme<br>" +
                         "📋 Eligibility: 12th pass with min 50% (Maths preferred)<br>" +
                         "👩‍🏫 Lead: <b>Ms. Leena Gupta</b> · 📞 <a href='tel:+918796283551'>+91 87962 83551</a><br>" +
                         "🔗 <a href='https://iitmjanakpuri.com/course/bca.php' target='_blank'>BCA Course Page</a> · " +
                         "<a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php' target='_blank'>Apply / Procedure</a>" },
                { match: /(\bm\.?\s?c\.?\s?a\b|ashish.?nayyar|\bashish\b|\bnayyar\b)/i,
                  reply: "🎓 <b>MCA — Master of Computer Applications</b><br>" +
                         "🪑 <b>60 seats</b> · 2-year programme (NEP 2020)<br>" +
                         "📋 Eligibility: Bachelor's with Maths in 12th or graduation + IPU CET MCA<br>" +
                         "👨‍🏫 Lead: <b>Mr. Ashish Nayyar</b> · 📞 <a href='tel:+918796452755'>+91 87964 52755</a><br>" +
                         "🔗 <a href='https://iitmjanakpuri.com/course/mca.php' target='_blank'>MCA Course Page</a> · " +
                         "<a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php' target='_blank'>Apply / Procedure</a>" },
                { match: /(\bb\.?\s?b\.?\s?a\b|deepali.?saluja|\bsaluja\b|\bdeepali\b)/i,
                  reply: "🎓 <b>BBA — Bachelor of Business Administration</b><br>" +
                         "🪑 <b>360 seats</b> · 3-year programme<br>" +
                         "📋 Eligibility: 12th pass with min 50% (any stream)<br>" +
                         "👩‍🏫 Lead: <b>Dr. Deepali Saluja</b> · 📞 <a href='tel:+918796452756'>+91 87964 52756</a><br>" +
                         "🔗 <a href='https://iitmjanakpuri.com/course/bba.php' target='_blank'>BBA Course Page</a> · " +
                         "<a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php' target='_blank'>Apply / Procedure</a>" },
                { match: /(\bb\.?\s?com\b|raghav.?jain|\braghav\b)/i,
                  reply: "🎓 <b>B.Com (Honours)</b><br>" +
                         "🪑 <b>120 seats</b> · 3-year programme<br>" +
                         "📋 Eligibility: 12th pass with min 50% (Commerce preferred)<br>" +
                         "👨‍🏫 Lead: <b>Dr. Raghav Jain</b> · 📞 <a href='tel:+918796452757'>+91 87964 52757</a><br>" +
                         "🔗 <a href='https://iitmjanakpuri.com/course/bcom.php' target='_blank'>B.Com Course Page</a> · " +
                         "<a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php' target='_blank'>Apply / Procedure</a>" },
                { match: /(\bm\.?\s?b\.?\s?a\b|mandeep.?singh|\bmandeep\b)/i,
                  reply: "🎓 <b>MBA — Master of Business Administration</b><br>" +
                         "🪑 <b>60 seats</b> · 2-year programme<br>" +
                         "🎯 Specializations: Marketing · Finance · HR · Operations · IT &amp; Analytics · International Business<br>" +
                         "📋 Eligibility: Bachelor's 50%+ &amp; valid IPU CET MBA / CAT<br>" +
                         "👨‍🏫 Lead: <b>Dr. Mandeep Singh</b> · 📞 <a href='tel:+919560098709'>+91 95600 98709</a><br>" +
                         "🔗 <a href='https://iitmjanakpuri.com/course/mba.php' target='_blank'>MBA Course Page</a> · " +
                         "<a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php' target='_blank'>Apply / Procedure</a>" },
                { match: /(\bba.?\s?\(?jmc\)?\b|\bjmc\b|\bbajmc\b|journalism|mass.?comm|nivedita.?sharma|\bnivedita\b)/i,
                  reply: "🎓 <b>BA (JMC) — Journalism &amp; Mass Communication</b><br>" +
                         "🪑 <b>180 seats</b> · 3-year programme<br>" +
                         "📋 Eligibility: 12th pass with min 50% (any stream)<br>" +
                         "📺 In-house TV studio, radio &amp; audio lab, editing suites<br>" +
                         "👩‍🏫 Lead: <b>Dr. Nivedita Sharma</b> · 📞 <a href='tel:+917217872947'>+91 72178 72947</a><br>" +
                         "🔗 <a href='https://iitmjanakpuri.com/course/bjmc.php' target='_blank'>BA (JMC) Course Page</a> · " +
                         "<a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php' target='_blank'>Apply / Procedure</a>" },
                /* Faculty contact list — direct intent */
                { match: /(faculty.*(contact|number|list|phone)|course.?wise|programme.?lead|program.?lead|advisor|incharge|in.?charge)/i,
                  reply: COURSE_CONTACTS },

                /* ============ ADMISSION DEEP-DIVE INTENTS ============ */
                { match: /(eligibility|eligible|criteria|qualify|10\+2|12th|class.?12|cutoff|cut.?off|percentage|min.*marks|pass.*marks)/i,
                  reply: "📋 <b>Eligibility (2026-27):</b><br>• <b>BCA</b> — 12th pass, min 50% (Maths preferred)<br>• <b>BBA</b> — 12th pass, min 50% (any stream)<br>• <b>B.Com (H)</b> — 12th pass, min 50% (Commerce preferred)<br>• <b>BA (JMC)</b> — 12th pass, min 50% (any stream)<br>• <b>MBA</b> — Bachelor's 50%+ &amp; valid <b>IPU CET MBA</b> / CAT<br>• <b>MCA</b> — Bachelor's with Maths in 12th or grad + IPU CET MCA" },
                { match: /(ipu.?cet|ipu.?test|entrance.?(exam|test)|^cet$|cuet|ipu.*exam|admission.?test|how.*test)/i,
                  reply: "📝 <b>Admission via IPU CET</b><br>IITM is affiliated to <b>GGS Indraprastha University</b>. All UG &amp; PG admissions are via <b>IPU CET</b>.<br>1. Register on <a href='https://ipu.ac.in' target='_blank'>ipu.ac.in</a><br>2. Appear for the test → get rank<br>3. Counselling → choice fill <b>IITM Janakpuri</b><br>4. Seat allotment → reporting at IITM" },
                { match: /(document|paper|certificate|chahiye|need.*submit|need.*bring|kya.*chahiye|required.*admission)/i,
                  reply: "📄 <b>Documents required:</b><br>• 10th &amp; 12th marksheets + certificates<br>• Bachelor's degree (for MBA/MCA)<br>• IPU CET admit card + scorecard<br>• Photo ID (Aadhaar / PAN / Passport)<br>• 4 passport-size photos<br>• Caste / EWS certificate (if applicable)<br>• Migration / Transfer Certificate<br>• Character certificate" },
                { match: /(form|application|how.*apply|how.?to.?apply|register|registration|fill.*form|online.*apply|apply.*kaise)/i,
                  reply: "📝 <b>How to apply (step-by-step):</b><br>1️⃣ Register for <b>IPU CET</b> at <a href='https://ipu.ac.in' target='_blank'>ipu.ac.in</a><br>2️⃣ Appear for the test → check result<br>3️⃣ Online counselling + <b>choice filling</b> (pick IITM Janakpuri)<br>4️⃣ Document verification + fee payment<br>5️⃣ Report at IITM with originals<br><br>📞 <b>011-28525051</b> or click <b>Apply Now</b>" },
                { match: /(deadline|last.?date|important.?date|when.*admission|when.*apply|kab.*admission|schedule|notification.*admission)/i,
                  reply: "🗓 <b>Tentative Schedule 2026-27</b> (final dates from GGSIPU):<br>• Form release — Mar/Apr<br>• IPU CET — Apr/May<br>• Result — May/Jun<br>• Counselling — Jun–Aug<br>• Reporting at IITM — Aug<br>For latest: <a href='https://iitmjanakpuri.com/admissions/admissionprocedure.php'>Admission Procedure</a> · 📞 011-28525051" },
                { match: /(counsell?ing|choice.?filling|allotment|round|seat.?alloc|sliding)/i,
                  reply: "🗒 <b>Counselling Process (IPU CET):</b><br>1. Online registration with CET rank<br>2. <b>Choice filling</b> — list IITM Janakpuri<br>3. Seat allotment in multiple rounds<br>4. Document verification (online + on-campus)<br>5. Pay fees + report at IITM<br>📞 011-28525051" },
                { match: /(reservation|sc\b|st\b|obc|ews|category|quota|defence|defense|ward|girl.?child|kashmiri|pwd|disab)/i,
                  reply: "🪪 <b>Reservation (per GGSIPU norms):</b><br>• SC — 15% · ST — 7.5%<br>• OBC (NCL) — 27%<br>• EWS — 10%<br>• PwD — 5% (horizontal)<br>• Defence personnel ward — supernumerary<br>• Single girl child / Kashmiri migrant — supernumerary<br>Submit valid certificates at counselling." },
                { match: /(management.?quota|direct.?admission|nri.?seat|sponsored.?seat|management.?seat)/i,
                  reply: "🎟 <b>Management Quota / Direct Admission</b><br>~15% seats are filled under management quota for select courses.<br>📞 <b>011-28525051</b> · ✉️ director@iitmipu.ac.in<br>Page → <a href='https://iitmjanakpuri.com/admissions/managementquota.php'>Management Quota</a>" },
                { match: /(refund|cancel.*admission|withdraw|leaving|exit.*admission)/i,
                  reply: "💵 <b>Refund Policy</b> follows UGC guidelines:<br>• Before deadline → 100% (less ₹1,000 processing)<br>• Within 15 days → ~90%<br>• 15–30 days → ~80%<br>• Slab-wise reduction thereafter<br>Confirm slab: 011-28525051" },
                { match: /(result|merit.?list|allotment.?list|selected|admit.?card)/i,
                  reply: "📜 <b>Results &amp; Allotment:</b><br>• IPU CET result → <a href='https://ipu.ac.in' target='_blank'>ipu.ac.in</a><br>• Counselling allotment → IPU counselling portal<br>• IITM-side reporting via email/SMS<br>📞 011-28525051" },
                { match: /(form.?fee|application.?fee|registration.?fee|cet.?fee)/i,
                  reply: "💳 <b>Application/Form Fee</b> is set by GGSIPU on its CET portal (typically ₹1,200 per programme; varies year to year). Pay during IPU CET registration on <a href='https://ipu.ac.in' target='_blank'>ipu.ac.in</a>." },
                { match: /(brochure|prospectus|info.?booklet|pdf.*download|leaflet)/i,
                  reply: "📘 <b>IITM Brochure / Prospectus</b> — download from website (Placements → Brochure or Admissions). For a printed copy: 📞 011-28525051" },
                { match: /(website|official.?site|^url$|important.?link)/i,
                  reply: "🌐 <b>Useful links:</b><br>• Main site: <a href='https://www.iitmjanakpuri.com' target='_blank'>iitmjanakpuri.com</a><br>• Internship Cell: <a href='https://www.iitminternware.com' target='_blank'>iitminternware.com</a><br>• Alumni Portal: <a href='https://www.alumniiitmjanakpuri.com' target='_blank'>alumniiitmjanakpuri.com</a><br>• Grievance: <a href='https://iitmjanakpuri-sdc.in/tracking/' target='_blank'>iitmjanakpuri-sdc.in/tracking</a>" },
                { match: /(director|chairman|principal|head.*institute|leadership|founder|chaturvedi|executive.?director)/i,
                  reply: "👨‍💼 <b>Leadership:</b><br>• Founded by <b>Padma Vibhushan Shri T.N. Chaturvedi</b> (1999)<br>• Governed under <b>Mata Leelawati Shikshan Sansthan</b><br>About Us → Chairman / Director / Executive Director on the website." },
                { match: /(vision|mission|philosophy|motto|values)/i,
                  reply: "🎯 <b>Vision &amp; Mission:</b> Outcome-based education + tech-driven, learner-centric pedagogy producing empathetic professionals.<br>🪔 <i>Vidyā Dadāti Vinayam</i> — knowledge brings humility.<br>About Us → Vision &amp; Mission" },
                { match: /(mba.*(spec|stream|major|specializ)|finance.*mba|marketing.*mba|operations.*mba|analytics.*mba|international.?business|^ib$|hr.*mba)/i,
                  reply: "🎓 <b>MBA Specializations</b> at IITM (dual specialization in Year-2):<br>• Marketing · Finance · HR<br>• Operations · IT &amp; Analytics · International Business<br>📞 MBA — Dr. Mandeep Singh: <a href='tel:+919560098709'>+91 95600 98709</a>" },
                { match: /(duration|how.?long|kitne.?saal|kitne.?year|years.*course|length.*course|course.?length)/i,
                  reply: "⏳ <b>Programme Duration:</b><br>• MBA — 2 yrs · MCA — 2 yrs (NEP 2020)<br>• BCA / BBA / B.Com (H) / BA (JMC) — 3 yrs<br>4-year Honours / Research option available under NEP." },
                { match: /(wifi|wi.?fi|internet|^lab$|computer.?lab|smart.?class|infrastructure|facility|facilities)/i,
                  reply: "🖥 <b>Infrastructure:</b><br>• Wi-Fi enabled, pollution-free campus<br>• Modern computer labs · Smart classrooms<br>• Auditorium &amp; seminar halls<br>• Conference rooms<br>• ICT facilities — <a href='https://www.iitmjanakpuri.com/infrastructure/ict.php' target='_blank'>Infrastructure → ICT</a>" },
                { match: /(tv.?studio|media.?studio|radio.?lab|jmc.?lab|production|editing.?suite)/i,
                  reply: "📺 <b>Media Studio (BA-JMC):</b><br>• TV studio with cameras + lights<br>• Radio &amp; audio production lab<br>• Editing suites (video + photo)<br>Hands-on training for journalism students." },
                { match: /(cafe|canteen|food|mess|^eat$|kitchen)/i,
                  reply: "🍽 IITM has an in-campus <b>cafeteria</b> with student-friendly pricing — managed by the Canteen Committee. Hygienic, varied options through the day." },
                { match: /(sport|gym|cricket|football|basketball|games|outdoor.?game|indoor.?game|tournament)/i,
                  reply: "🏏 <b>Sports:</b><br>• Outdoor + indoor games<br>• Annual sports meets<br>• Sports Committee under Student Zone" },
                { match: /(ragging|anti.?ragging|harass|bully)/i,
                  reply: "🛡 <b>Zero-tolerance Anti-Ragging Policy.</b> Strict UGC compliance. Anti-Ragging Cell + ICC for women safety. 📞 011-28525051 to report." },
                { match: /(grievance|complaint|redressal|sgrc|grc\b|tracking.?portal)/i,
                  reply: "📮 <b>Grievance Redressal:</b><br>• GRC &amp; SGRC constituted as per UGC<br>• Online portal: <a href='https://iitmjanakpuri-sdc.in/tracking/' target='_blank'>iitmjanakpuri-sdc.in/tracking</a><br>• Confidential, time-bound resolution" },
                { match: /(icc\b|internal.?complaints|women.?safety|posh\b)/i,
                  reply: "👩‍⚖️ <b>Internal Complaints Committee (ICC)</b> functions as per the POSH Act 2013. Confidential mechanism for redressal of harassment complaints." },
                { match: /(industry.?connect|^mou$|^tie.?up$|corporate.?connect|partner.?company|collaboration)/i,
                  reply: "🤝 <b>Industry Connect:</b><br>• 530+ industry mentors<br>• MoUs with leading corporates<br>• Regular guest lectures, FDPs, workshops<br>• Live projects + summer training" },
                { match: /(nirf|times.?b.?school|times.?survey|^ranking$|ranked|top.?\d+)/i,
                  reply: "🏆 <b>Recent Recognitions:</b><br>• <b>Top 19 B-School (MBA)</b> — Times 2026<br>• Top 50 / Top 70 B-School rankings<br>• India Today rankings featured<br>• <b>37th in Placements</b> — Times 2026" },
                { match: /(fiesta|cultural|annual.?fest|^ncc$|^nss$|debate|^esc$|ed.?cell|management.?club|student.?society|^society$|^emc$)/i,
                  reply: "🎭 <b>Student Life:</b><br>• <b>Fiesta</b> — annual cultural fest<br>• MEDIAX, Anugoonj, Management Sapiens<br>• <b>NCC</b> &amp; <b>NSS</b> active units<br>• Debate, Cultural, Sports, ESC, ED Cell, Management Club, EMC<br>StudentZone → Societies" },
                { match: /(transport|metro|^bus$|how.?reach|kaise.?aaye|directions|nearest)/i,
                  reply: "🚇 <b>Reach IITM:</b><br>• Nearest Metro: <b>Janakpuri West</b> (Magenta) / <b>Janakpuri East</b> (Blue)<br>• Multiple DTC bus routes<br>📍 D-29, Institutional Area, Janakpuri" },
                { match: /(convocation|degree.*give|graduate.?ceremony|degree.?ceremony)/i,
                  reply: "🎓 <b>Convocation</b> is conducted by GGS Indraprastha University. IITM students receive degrees through the IPU convocation ceremony." },
                { match: /(migration|^tc$|transfer.?certificate)/i,
                  reply: "📑 <b>Migration / Transfer Certificate</b> required at admission (originals + photocopies). Issued by your previous board / university." },
                { match: /(dress|uniform|attire|dress.?code)/i,
                  reply: "👔 IITM follows a <b>smart-casual / formal</b> dress code on campus. Specific guidelines in the Student Handbook." },
                { match: /(holiday|vacation|leave.*calendar|winter.?break|summer.?break|academic.?calendar)/i,
                  reply: "🗓 Academic calendar &amp; holidays follow the GGSIPU schedule. See <b>Academics → Academic Calendar</b> on the website." },
                { match: /(timetable|class.?schedule|time.?table|class.?timing|kab.?class)/i,
                  reply: "🕘 Class timetables (programme + year-wise) are published in <b>Academics → Time Table</b>. Latest 2024-25 &amp; 2023-24 versions are online." },
                { match: /(top.?recruiter|company.*placed|placement.?company|placement.?partner|^recruit$)/i,
                  reply: "🏢 <b>Top Recruiters &amp; Partners</b> include leading corporates across IT, Finance, Marketing, Media. See Placements → <a href='https://www.iitmjanakpuri.com/placements/partners.php'>Placement Partners</a> &amp; <a href='https://www.iitmjanakpuri.com/placements/recruiters.php'>Recruiters Speak</a>." },
                { match: /(internship.?cell|summer.?training|live.?project|industrial.?training)/i,
                  reply: "💼 <b>Internships &amp; Summer Training</b><br>• Internship Cell: <a href='https://www.iitminternware.com' target='_blank'>iitminternware.com</a><br>• Summer training records: Placements section<br>• Live industry projects + 530+ mentors" },

                /* General admission / apply intent (fallback after specific intents) */
                { match: /(admission|apply|enrol|enroll|join|admit)/i,
                  reply: "🎓 <b>Admissions Open for 2026-27!</b><br>• Click <b>Apply Now</b> at the top<br>• 📞 Main helpline: <b>011-28525051</b><br>• Talk to the admission incharge directly:<br><br>" + COURSE_CONTACTS + "<br><br>Try asking: <i>eligibility, IPU CET, documents, how to apply, fees, scholarship, counselling</i>" },
                /* Total seats / intake */
                { match: /(total.?seats|how.?many.?seats|intake|seats.*available|kitne.?seats)/i,
                  reply: "🪑 <b>Total intake — 1,020 seats across 6 programmes</b><br>• MBA — 60 · MCA — 60<br>• BCA — 240 · BBA — 360<br>• B.Com (H) — 120 · BA (JMC) — 180<br><br>" + COURSE_CONTACTS },
                /* General courses */
                { match: /(course|program|degree|study|stream|branch|programme)/i,
                  reply: "📚 IITM offers <b>6 programmes</b> (Total 1,020 seats):<br>• <b>BCA</b> — 240 · Ms. Leena Gupta · <a href='tel:+918796283551'>87962 83551</a><br>• <b>MCA</b> — 60 · Mr. Ashish Nayyar · <a href='tel:+918796452755'>87964 52755</a><br>• <b>BBA</b> — 360 · Dr. Deepali Saluja · <a href='tel:+918796452756'>87964 52756</a><br>• <b>B.Com (H)</b> — 120 · Dr. Raghav Jain · <a href='tel:+918796452757'>87964 52757</a><br>• <b>MBA</b> — 60 · Dr. Mandeep Singh · <a href='tel:+919560098709'>95600 98709</a><br>• <b>BA (JMC)</b> — 180 · Dr. Nivedita Sharma · <a href='tel:+917217872947'>72178 72947</a>" },
                { match: /(fee|fees|cost|tuition|price|payment|kitna|kitne)/i,
                  reply: "💰 For full fee structure check the <b>Fee Details PDF</b> in the Admissions section, or call <b>011-28525051</b>." },
                { match: /(placement|package|salary|job|career|recruit|company)/i,
                  reply: "💼 <b>Placement Highlights:</b><br>• 🏆 Highest: <b>22 LPA</b> (BCA)<br>• MBA: 13.36 LPA<br>• Ranked <b>Top 19 B-School</b> — Times 2026<br>• 530+ industry mentors" },
                { match: /(library|opac|catalogue|reading.?material|library.?facili|book|journal)/i,
                  reply: "📖 <b>IITM Library</b> offers e-books, e-journals, OPAC, open-access resources &amp; advisory support.<br>🔗 <a href='https://www.iitmjanakpuri.com/Library/' target='_blank'>Library Home</a> · <a href='https://www.iitmjanakpuri.com/Library/about-library.php' target='_blank'>About</a> · <a href='https://www.iitmjanakpuri.com/Library/opac.php' target='_blank'>OPAC</a> · <a href='https://www.iitmjanakpuri.com/Library/resources.php' target='_blank'>Resources</a><br>🕘 Mon–Fri 8 AM – 6 PM · Sat 10 AM – 5 PM" },
                { match: /(contact|phone|number|helpline|reach|call|email|mail)/i,
                  reply: "📞 <b>Contact:</b><br>011-28525051 / 28520239 / 28525882<br>✉️ director@iitmipu.ac.in" },
                { match: /(address|location|where|place|map|metro|reach)/i,
                  reply: "📍 <b>IITM Janakpuri</b><br>D-29, Institutional Area,<br>Janakpuri, New Delhi-110058<br>🚇 Easily reachable via Delhi Metro" },
                { match: /(naac|nba|accreditation|approve|grade|recognise|recognize|aicte|ugc|ggsipu|iso)/i,
                  reply: "🏆 IITM is <b>NAAC Grade 'A'</b>, <b>NBA</b> accredited, <b>AICTE</b> approved, recognised under <b>UGC 2(f)</b>, ISO 21001:2018 certified, and affiliated to <b>GGSIPU</b>." },
                { match: /(faculty|teacher|professor|staff|guru|acharya)/i,
                  reply: "👨‍🏫 IITM has <b>120+</b> qualified faculty across MBA, BCA & MCA, B.Com & BBA, and BA(JMC) departments. Our <i>Acharyas</i> bring decades of academic + industry expertise." },
                { match: /(alumni|former student|past student|ex.?student)/i,
                  reply: "🎓 IITM has a strong network of <b>7,600+ alumni</b> in leading corporates across India." },
                { match: /(scholarship|fee waiver|financial aid|wazifa)/i,
                  reply: "🎁 IITM offers In-house, <b>Merit-cum-Means (DHE)</b>, and <b>EWS (GGSIPU)</b> scholarships. Check Student Zone → Scholarships." },
                { match: /(established|founded|history|since|year|when|kab)/i,
                  reply: "IITM was <b>established in 1999</b> under Mata Leelawati Shikshan Sansthan, with 25+ years of academic excellence — founded by Padma Vibhushan Shri T.N. Chaturvedi." },
                { match: /(hostel|accommodation|stay|residence|pg|rehne)/i,
                  reply: "🏠 IITM is a day-scholar institute. We don't run an in-house hostel, but our team can guide you to nearby PG accommodations." },
                { match: /(event|fest|fiesta|cultural|workshop|conference|seminar|guest)/i,
                  reply: "🎉 IITM hosts <b>Fiesta, MEDIAX, Anugoonj, Management Sapiens</b>, FDPs, Industrial Visits, Conferences, and many cultural fests every year." },
                { match: /(internship)/i,
                  reply: "💼 Visit our <b>Internship Cell</b> at <a href='https://www.iitminternware.com/' target='_blank'>iitminternware.com</a> for opportunities." },
                { match: /(thank|dhanyawad|shukriya|thanx|thx|appreciate|grateful|cheers)/i,
                  reply: "Dhanyawaad! 🙏 Happy to help. Aur kuch poochna hai? (Anything else?)" },
                { match: /(\bbye\b|goodbye|alvida|tata|see\s*ya|see\s*you|farewell|take\s*care|catch\s*you|talk\s*later|signing\s*off)/i,
                  reply: "Alvida! 🙏 Wishing you success on your IITM journey. <i>Tamasoma Jyotirgamaya</i> — lead us from darkness to light." },
                { match: /(who.*you|what.*name|tum kaun|aap kaun)/i,
                  reply: "I'm <b>IITM Mitra</b> 🤖 — a dummy assistant for IITM Janakpuri. <i>Mitra</i> means friend in Sanskrit. I can answer questions about admissions, courses, fees, placements, and more." }
            ];

            function botReply(q){
                for (var i=0;i<responses.length;i++){
                    if (responses[i].match.test(q)) return responses[i].reply;
                }
                return "🤔 I can help with <b>admissions, courses, fees, placements, contact, location, accreditation, scholarships, faculty, alumni, events</b> and more. Try a quick option below or rephrase your question.";
            }

            function send(text){
                var q = (text || '').trim();
                if (!q) return;
                addUser(q);
                input.value = '';
                var typing = document.createElement('div');
                typing.className = 'cb-msg cb-bot cb-typing';
                typing.innerHTML = '<span class="cb-typing-bot">🤖</span><span></span><span></span><span></span>';
                messages.appendChild(typing);
                messages.scrollTop = messages.scrollHeight;
                setTimeout(function(){
                    typing.remove();
                    addBot(botReply(q));
                }, 600);
            }

            form.addEventListener('submit', function(e){
                e.preventDefault();
                send(input.value);
            });
            suggestions.addEventListener('click', function(e){
                var chip = e.target.closest('.cb-chip');
                if (chip) send(chip.textContent);
            });
        })();
    </script>

    <!-- ============ Mascot robot — full TOP-TO-BOTTOM, stands RIGHT of chat, left arm holds the UI ============ -->
    <div class="cb-mascot" id="chatbotMascot" aria-hidden="true">
        <div class="cb-mascot-bubble">Holding it for you! 🤖</div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 0 240 800" preserveAspectRatio="xMidYMid meet">
            <!-- HEAD area (top) -->
            <!-- Tassel -->
            <path d="M 100 64 Q 130 72 142 88" stroke="#800000" stroke-width="3" fill="none" stroke-linecap="round"/>
            <circle cx="142" cy="88" r="5" fill="#d62828"/>
            <!-- Graduation cap -->
            <rect x="48" y="40" width="104" height="9" fill="#1a1a1a"/>
            <polygon points="48,49 100,68 152,49 100,28" fill="#222"/>
            <!-- Antennas -->
            <line x1="72" y1="58" x2="72" y2="80" stroke="#800000" stroke-width="3.5" stroke-linecap="round"/>
            <circle cx="72" cy="54" r="4.5" fill="#d62828"/>
            <line x1="128" y1="58" x2="128" y2="80" stroke="#800000" stroke-width="3.5" stroke-linecap="round"/>
            <circle cx="128" cy="54" r="4.5" fill="#d62828"/>
            <!-- Head box -->
            <rect x="30" y="80" width="140" height="110" rx="22" fill="#fff" stroke="#800000" stroke-width="4"/>
            <!-- Eyes -->
            <circle cx="68" cy="124" r="10" fill="#800000"/>
            <circle cx="132" cy="124" r="10" fill="#800000"/>
            <circle cx="72" cy="120" r="3.5" fill="#fff"/>
            <circle cx="136" cy="120" r="3.5" fill="#fff"/>
            <!-- Cheeks -->
            <circle cx="46" cy="156" r="6" fill="rgba(214,40,40,.32)"/>
            <circle cx="154" cy="156" r="6" fill="rgba(214,40,40,.32)"/>
            <!-- Smile -->
            <path d="M 68 162 Q 100 178 132 162" stroke="#800000" stroke-width="4" fill="none" stroke-linecap="round"/>

            <!-- Neck -->
            <rect x="88" y="190" width="24" height="14" fill="#800000"/>

            <!-- Body (middle) — IITM badge -->
            <rect x="20" y="204" width="160" height="320" rx="18" fill="#fff" stroke="#800000" stroke-width="4"/>
            <line x1="34" y1="226" x2="166" y2="226" stroke="rgba(128,0,0,.22)" stroke-width="1.2"/>
            <text x="100" y="368" text-anchor="middle" font-family="Arial,Helvetica,sans-serif" font-size="34" font-weight="800" fill="#800000" letter-spacing="3">IITM</text>
            <text x="100" y="396" text-anchor="middle" font-family="Arial,Helvetica,sans-serif" font-size="13" font-weight="700" fill="#a00000" letter-spacing="2">JANAKPURI</text>
            <!-- Chest panel circle (decorative) -->
            <circle cx="100" cy="280" r="22" fill="none" stroke="#800000" stroke-width="2.5"/>
            <circle cx="100" cy="280" r="14" fill="#d62828" opacity=".25"/>
            <circle cx="100" cy="280" r="6" fill="#d62828"/>
            <!-- Belt -->
            <rect x="20" y="500" width="160" height="14" fill="#800000"/>
            <rect x="92" y="498" width="16" height="18" rx="2" fill="#d62828" stroke="#fff" stroke-width="1.5"/>

            <!-- LEFT ARM — reaches OUT to grip the chat (extends to negative x, into chat's right edge) -->
            <path d="M 22 244 Q -10 280 -22 360 Q -28 430 -16 480 Q -8 510 8 514"
                  stroke="#800000" stroke-width="22" fill="none" stroke-linecap="round"/>
            <path d="M 22 244 Q -10 280 -22 360 Q -28 430 -16 480 Q -8 510 8 514"
                  stroke="#fff" stroke-width="14" fill="none" stroke-linecap="round"/>
            <!-- Left hand gripping -->
            <circle cx="8" cy="514" r="20" fill="#800000"/>
            <circle cx="8" cy="514" r="13" fill="#fff" stroke="#800000" stroke-width="2"/>
            <!-- Fingers wrapping -->
            <rect x="-2" y="500" width="5" height="14" rx="2" fill="#800000" transform="rotate(-18 0 507)"/>
            <rect x="6" y="498" width="5" height="14" rx="2" fill="#800000"/>
            <rect x="14" y="500" width="5" height="14" rx="2" fill="#800000" transform="rotate(18 16 507)"/>

            <!-- RIGHT ARM — hangs at the side -->
            <path d="M 178 244 Q 196 290 192 380 Q 188 470 184 510"
                  stroke="#800000" stroke-width="22" fill="none" stroke-linecap="round"/>
            <path d="M 178 244 Q 196 290 192 380 Q 188 470 184 510"
                  stroke="#fff" stroke-width="14" fill="none" stroke-linecap="round"/>
            <circle cx="184" cy="514" r="20" fill="#800000"/>
            <circle cx="184" cy="514" r="13" fill="#fff" stroke="#800000" stroke-width="2"/>

            <!-- Legs -->
            <rect x="48" y="524" width="36" height="180" rx="6" fill="#fff" stroke="#800000" stroke-width="4"/>
            <rect x="116" y="524" width="36" height="180" rx="6" fill="#fff" stroke="#800000" stroke-width="4"/>
            <!-- Knee dots -->
            <circle cx="66" cy="610" r="4" fill="#800000"/>
            <circle cx="134" cy="610" r="4" fill="#800000"/>
            <!-- Feet -->
            <ellipse cx="66" cy="710" rx="28" ry="9" fill="#800000"/>
            <ellipse cx="134" cy="710" rx="28" ry="9" fill="#800000"/>
            <!-- Floor shadow -->
            <ellipse cx="100" cy="730" rx="78" ry="8" fill="rgba(0,0,0,.22)"/>
        </svg>
    </div>

    <!-- ============ Highlights Image Lightbox Modal ============ -->
    <div class="modal fade" id="imgLightbox" tabindex="-1" aria-labelledby="imgLightboxLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content img-lightbox-content">
                <button type="button" class="btn-close img-lightbox-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="imgLightboxImg" src="" alt="IITM Highlight" class="img-lightbox-img">
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Lightbox for highlight + news images
            var lightbox = document.getElementById('imgLightbox');
            var lbImg = document.getElementById('imgLightboxImg');
            if (lightbox && lbImg) {
                document.querySelectorAll('.iitm-highlights-banner .hl-card, .iitm-news-banner .news-card').forEach(function (card) {
                    card.addEventListener('click', function (e) {
                        e.preventDefault();
                        var img = card.querySelector('img');
                        if (img && img.src) lbImg.src = img.src;
                    });
                });
            }

            // Auto-hide scrollbar — show red thumb on activity, fade after 1.5s idle
            var html = document.documentElement;
            var idleTimer = null;
            var IDLE_MS = 1500;
            function ping() {
                html.classList.add('is-active');
                if (idleTimer) clearTimeout(idleTimer);
                idleTimer = setTimeout(function () {
                    html.classList.remove('is-active');
                }, IDLE_MS);
            }
            window.addEventListener('scroll', ping, { passive: true });
            window.addEventListener('wheel', ping, { passive: true });
            window.addEventListener('mousemove', ping, { passive: true });
            window.addEventListener('touchmove', ping, { passive: true });
            window.addEventListener('keydown', ping);
        });
    </script>

    <!-- Admission Enquiry Modal moved to shared partial: enquiry-modal.php (included site-wide via naacfooter.php) -->

    <script src="myscript.js"></script>
    <script>
    /* ============ Hero horizontal slider — auto-rotate, swipe, dots, arrows ============ */
    (function(){
        var slider = document.querySelector('.iitm-hero-new .hero-slider');
        var slides = document.getElementById('heroSlides');
        var dots   = document.getElementById('heroDots');
        var prev   = document.getElementById('heroPrev');
        var next   = document.getElementById('heroNext');
        if (!slider || !slides || !dots) return;

        var slideEls = slides.children;
        var dotEls   = dots.querySelectorAll('button');
        var total    = slideEls.length;
        var idx      = 0;
        var timer    = null;
        var delay    = parseInt(slider.getAttribute('data-autoplay'), 10) || 4500;

        function go(target){
            idx = ((target % total) + total) % total;
            slides.style.transform = 'translateX(' + (-idx * 100) + '%)';
            for (var i = 0; i < dotEls.length; i++){
                dotEls[i].classList.toggle('is-active', i === idx);
            }
        }
        function play(){ stop(); timer = setInterval(function(){ go(idx + 1); }, delay); }
        function stop(){ if (timer){ clearInterval(timer); timer = null; } }

        Array.prototype.forEach.call(dotEls, function(d){
            d.addEventListener('click', function(){ go(parseInt(d.getAttribute('data-slide'), 10)); play(); });
        });
        if (prev) prev.addEventListener('click', function(){ go(idx - 1); play(); });
        if (next) next.addEventListener('click', function(){ go(idx + 1); play(); });
        slider.addEventListener('mouseenter', stop);
        slider.addEventListener('mouseleave', play);

        /* Touch swipe support */
        var startX = null, dx = 0;
        slider.addEventListener('touchstart', function(e){ startX = e.touches[0].clientX; dx = 0; stop(); }, { passive: true });
        slider.addEventListener('touchmove',  function(e){ if (startX !== null) dx = e.touches[0].clientX - startX; }, { passive: true });
        slider.addEventListener('touchend',   function(){
            if (Math.abs(dx) > 40) go(idx + (dx < 0 ? 1 : -1));
            startX = null; dx = 0; play();
        });

        go(0);
        play();
    })();
    </script>
</body>
</html>
