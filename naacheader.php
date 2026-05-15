<?php
/* Compute a web-relative path back to the project root (where naacheader.php lives),
   so logo/image src attributes resolve correctly on pages inside subfolders
   (e.g. course/programmes.php, admissions/*, etc.). */
if (!isset($iitm_base_url)) {
    $project_dir = realpath(__DIR__);
    $page_dir    = realpath(dirname($_SERVER['SCRIPT_FILENAME']));
    if ($page_dir && $project_dir && strpos($page_dir, $project_dir) === 0) {
        $sub = substr($page_dir, strlen($project_dir));
        $depth = ($sub === '' || $sub === DIRECTORY_SEPARATOR) ? 0 : substr_count(trim($sub, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR) + 1;
        $iitm_base_url = $depth > 0 ? str_repeat('../', $depth) : '';
    } else {
        $iitm_base_url = '';
    }
}
?>
<!-- Font Awesome 4 — required for header quick-links icons (briefcase / shield / users / file).
     Loaded here so the header renders correctly on pages that don't include FA themselves. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <style>
    /* ============ Modal stacking — force on top of EVERYTHING ============
       Site has sticky header at z-index 1100 and chat FABs at 1090–1097, which
       sit above Bootstrap's default modal (1055) and backdrop (1050). The
       admission-enquiry popup (and the highlights lightbox) were being hidden
       behind those layers. Raising both backdrop + modal well above any other
       fixed/sticky element on the site. */
    .modal-backdrop{ z-index: 1200 !important; }
    .modal{ z-index: 1210 !important; }

    /* Single source-of-truth for the admission red gradient — change here once,
       every admission-themed section updates together (dynamic). Deep pure red,
       no gold/orange tint, matching the "Explore IITM" / footer-side admission cards. */
    :root{
        --iitm-admission-bg: linear-gradient(135deg, #800000 0%, #a00000 50%, #5e0000 100%);
    }

    /* ============ Admission strip — STICKY (in flow + sticks at top while scrolling) ============
       Sticky keeps the strip in normal document flow on load (so the institute hero below it
       is naturally visible) AND sticks to the top once the user scrolls past it. */
    .adm-announce-strip{
        background: linear-gradient(90deg, #f5b800 0%, #f08200 35%, #c91a1a 70%, #800000 100%);
        color: #fff;
        padding: 10px 0;
        font-family: 'Poppins', system-ui, sans-serif;
        border-bottom: 1px solid rgba(255,255,255,.20);
        position: sticky;
        top: 0;
        z-index: 1100;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(200,80,0,.30);
        text-shadow: 0 1px 2px rgba(0,0,0,.25);
    }
    /* Make sure scroll-margin handles anchor jumps cleanly */
    html{ scroll-padding-top: 60px; }

    /* Force single-line on desktop so the strip is consistently ~50px tall */
    @media (min-width: 992px){
        .adm-announce-strip > .container{
            flex-wrap: nowrap !important;
            overflow: hidden;
        }
        .adm-announce-headline,
        .adm-announce-courses{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            min-width: 0;
        }
    }
    /* Hamburger button — mobile-only, opens the existing sidebar */
    .adm-announce-burger{
        display: none;
        background: rgba(255,255,255,.16);
        border: 1px solid rgba(255,255,255,.40);
        border-radius: 10px;
        width: 36px;
        height: 36px;
        padding: 0;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        cursor: pointer;
        transition: background .2s ease;
    }
    .adm-announce-burger span{
        display: block;
        width: 18px;
        height: 2px;
        background: #fff;
        border-radius: 2px;
    }
    .adm-announce-burger:hover{ background: rgba(255,255,255,.28); }
    /* Hide the legacy mobile-topbar — adm-announce-strip + its hamburger replace it */
    .mobile-topbar{ display: none !important; }
    body{ padding-top: 0 !important; }
    @media (max-width: 991.98px){
        .adm-announce-burger{ display: inline-flex; }
        .adm-announce-strip > .container{ justify-content: flex-start; }
    }
    .adm-announce-strip::before{
        content:"";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 0%, rgba(255,255,255,.18), transparent 60%);
        pointer-events: none;
    }
    .adm-announce-strip > .container{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 14px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .adm-announce-eyebrow{
        background: rgba(255,255,255,.16);
        border: 1px solid rgba(255,255,255,.55);
        border-radius: 50px;
        padding: 5px 14px;
        font-size: 11.5px;
        font-weight: 800;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        white-space: nowrap;
        color: #fff;
    }
    .adm-announce-headline{
        font-size: 15px;
        font-weight: 800;
        letter-spacing: .4px;
        color: #fff;
    }
    .adm-announce-courses{
        font-size: 13px;
        font-weight: 600;
        opacity: .94;
        color: #fff;
    }
    /* Apply Now: solid white pill with red text */
    .adm-announce-cta{
        background: #ffffff;
        color: #800000 !important;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none !important;
        box-shadow: 0 4px 12px rgba(0,0,0,.18);
        transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
        letter-spacing: .3px;
        animation: admCtaPulse 2.2s ease-in-out infinite;
        border: 0;
        font-family: 'Poppins', system-ui, sans-serif;
        cursor: pointer;
        line-height: 1.2;
    }
    .adm-announce-cta:hover,
    .adm-announce-cta:focus{
        color: #800000 !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(0,0,0,.28);
        text-decoration: none !important;
    }
    @keyframes admCtaPulse{
        0%,100%{ box-shadow: 0 4px 12px rgba(0,0,0,.18); }
        50%    { box-shadow: 0 8px 22px rgba(255,255,255,.35), 0 4px 12px rgba(0,0,0,.18); }
    }
    /* Enquiry: outline white button (secondary CTA) */
    .adm-announce-cta-enquiry{
        background: transparent !important;
        color: #ffffff !important;
        border: 1.5px solid #ffffff !important;
        animation: none !important;
        box-shadow: none !important;
    }
    .adm-announce-cta-enquiry:hover,
    .adm-announce-cta-enquiry:focus{
        background: #ffffff !important;
        color: #800000 !important;
        box-shadow: 0 8px 18px rgba(0,0,0,.22) !important;
    }
    @media (max-width: 575.98px){
        .adm-announce-courses{ display: none; }
        .adm-announce-strip{ padding: 8px 10px; }
        .adm-announce-strip > .container{ gap: 8px; }
        .adm-announce-eyebrow{ font-size: 10px; padding: 4px 10px; letter-spacing: 1px; }
        .adm-announce-headline{ font-size: 12.5px; }
        .adm-announce-cta{ font-size: 12px; padding: 6px 14px; }
    }

    /* ============ Mobile-only — compact bar with hamburger top-left ============ */
    @media (max-width: 991.98px){
        .adm-announce-strip{
            padding: 6px 10px !important;
        }
        .adm-announce-strip > .container{
            display: flex !important;
            flex-wrap: nowrap !important;
            justify-content: space-between !important;
            align-items: center !important;
            gap: 8px !important;
            max-width: 100% !important;
            padding: 0 !important;
        }
        /* Hamburger pinned to the left */
        .adm-announce-burger{
            order: -1;
            flex-shrink: 0;
            width: 36px;
            height: 36px;
        }
        /* Hide secondary content on mobile to keep the bar compact (1 line) */
        .adm-announce-eyebrow,
        .adm-announce-courses,
        .adm-announce-cta-enquiry{
            display: none !important;
        }
        /* Centered headline */
        .adm-announce-headline{
            flex: 1 1 auto;
            text-align: center;
            font-size: 13px !important;
            font-weight: 800 !important;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            min-width: 0;
        }
        .adm-announce-headline::before{
            content: "🎓 ";
        }
        /* Compact Apply Now CTA on the right */
        .adm-announce-cta{
            font-size: 11.5px !important;
            padding: 6px 14px !important;
            flex-shrink: 0;
            animation: none !important;
            box-shadow: 0 3px 8px rgba(0,0,0,.20) !important;
        }
    }

    .top-admission-strip{
        background: linear-gradient(180deg, #f7ecdf 0%, #efd8c2 100%);
        border-bottom: 2px solid #800000;
        padding: 14px 0 12px;
    }

    .top-admission-wrap{
        display: flex;
        gap: 14px;
        align-items: stretch;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .top-admission-card{
        background: #fffaf5;
        border: 2px solid #800000;
        border-radius: 10px;
        min-height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 12px 18px;
        box-shadow: 0 2px 8px rgba(128,0,0,0.08);
        transition: all 0.25s ease;
    }

    .top-admission-card:hover{
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(128,0,0,0.15);
    }

    .top-admission-card a{
        color: #800000;
        text-decoration: none;
        font-weight: 700;
        font-size: 18px;
        line-height: 1.3;
        display: block;
        width: 100%;
    }

    .top-admission-card a:hover{
        color: #5e0000;
        text-decoration: none;
    }

    .top-admission-main{
        flex: 1.2;
    }

    .top-admission-secondary{
        flex: 1.3;
    }

    .top-admission-helpline{
        flex: 1.8;
        background: #800000;
        border-color: #800000;
    }

    .top-admission-helpline a,
    .top-admission-helpline span{
        color: #ffffff;
        font-weight: 700;
        font-size: 20px;
    }

    .top-admission-enquiry{
        flex: 0.9;
        background: #a00000;
        border-color: #800000;
    }

    .top-admission-enquiry a{
        color: #fff;
        font-size: 18px;
    }

    @media (max-width: 991px){
        .top-admission-main,
        .top-admission-secondary,
        .top-admission-helpline,
        .top-admission-enquiry{
            flex: 1 1 calc(50% - 14px);
        }
    }

    @media (max-width: 576px){
        .top-admission-wrap{
            gap: 10px;
        }

        .top-admission-main,
        .top-admission-secondary,
        .top-admission-helpline,
        .top-admission-enquiry{
            flex: 1 1 100%;
        }

        .top-admission-card a,
        .top-admission-helpline span{
            font-size: 16px;
        }
    }

    /* ============ Mobile compact hero (logo TOP, title + pills BELOW) ============ */
    @media (max-width: 991.98px){
        /* Make the page truly full-width on tablets / large mobiles —
           Bootstrap's .container caps at 540/720px on these breakpoints, leaving empty space on the sides */
        html, body{ overflow-x: hidden; max-width: 100%; margin: 0; }
        body .container{ max-width: 100% !important; width: 100% !important; }

        /* Hero / marquee / nav: also drop the inner gutter so the bg fills edge-to-edge */
        .hero-section > .container,
        .marquee-container > .container,
        .navbar > .container{
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /* Hide the dated top admission strip on mobile — replaced by floating Apply CTA, sidebar, course-leads */
        .top-admission-strip{ display: none !important; }

        .hero-section{
            padding: 14px 14px 14px !important;
            background:
                radial-gradient(circle at 20% 0%, rgba(255,183,3,.12) 0%, transparent 50%),
                radial-gradient(circle at 100% 100%, rgba(214,40,40,.18) 0%, transparent 60%),
                linear-gradient(135deg,#800000 0%,#a52a2a 55%,#5e0000 100%) !important;
            position: relative;
        }

        /* Hero TOP ROW: logo on left + institute name on right (horizontal) */
        .hero-section .row{
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            align-items: center !important;
            margin: 0 !important;
            gap: 14px;
        }

        /* Hide the right-column secondary links on mobile (they're in the sidebar) */
        .hero-section .col-md-3{ display: none !important; }

        .hero-section .col-12,
        .hero-section .col-md-7,
        .hero-section .col-md-2{
            padding: 0 !important;
            margin: 0 !important;
        }

        /* Logo column — left side */
        .hero-section .col-12{
            flex: 0 0 auto !important;
            width: auto !important;
            max-width: 110px !important;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .hero-section .logo{
            height: 50px !important;
            width: auto !important;
            max-width: 110px !important;
            background: transparent !important;
            border-radius: 0 !important;
            padding: 0 !important;
            margin-top: 0 !important;
            box-shadow: none !important;
            object-fit: contain;
            display: block;
            /* Force any logo source (maroon iitm-1.png or white logow.png) to render as a clean white wordmark */
            filter: brightness(0) invert(1) drop-shadow(0 3px 6px rgba(0,0,0,.30));
        }

        /* Title column — right side, takes remaining space */
        .hero-section .col-md-7{
            flex: 1 1 auto !important;
            min-width: 0;
            text-align: left !important;
            max-width: 100% !important;
        }
        .hero-section .col-md-7 center{
            display: block !important;
            text-align: left !important;
        }
        .hero-section .hero-title{
            font-family: 'Poppins', system-ui, sans-serif;
            font-size: 18px !important;
            font-weight: 800 !important;
            line-height: 1.18 !important;
            margin: 0 !important;
            color: #fff;
            letter-spacing: .3px;
            text-align: left !important;
            text-shadow: 0 2px 4px rgba(0,0,0,.22);
        }
        .hero-section p{
            font-family: 'Poppins', system-ui, sans-serif;
            font-size: 11px !important;
            line-height: 1.35 !important;
            margin: 0 !important;
            color: rgba(255,255,255,.92) !important;
            text-align: left !important;
        }

        /* ============ Simple accreditation TEXT line — formal, no pills ============ */
        .hero-section .accreditation-line{
            display: block !important;
            margin: 10px 0 0 !important;
            padding: 0 4px;
            font-family: 'Poppins', system-ui, sans-serif !important;
            font-size: 10.5px !important;
            line-height: 1.45 !important;
            text-align: center !important;
            color: rgba(255,255,255,.88) !important;
            letter-spacing: .25px;
        }
        .hero-section .accreditation-line .acc-label{
            font-weight: 800;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-size: 9.5px;
            margin-right: 5px;
            display: inline-block;
        }
    }

    /* Show simple accreditation line only on mobile */
    .accreditation-line{ display: none; }

    /* ============================================================== */
    /* ============ DESKTOP MODERN POLISH (≥992px) =================== */
    /* ============================================================== */
    @media (min-width: 992px){
        /* ---------- Attractive top quick-links bar (replaces old admission strip) ---------- */
        .top-admission-strip.top-quick-bar{
            background: linear-gradient(135deg,#5e0000 0%,#800000 50%,#3d0000 100%) !important;
            border-bottom: 2px solid rgba(255,255,255,.55) !important;
            padding: 0 !important;
            position: relative;
            overflow: hidden;
        }
        .top-quick-bar::before{
            content:"";
            position: absolute;
            top: 0; right: 0;
            width: 50%; height: 100%;
            background: radial-gradient(circle at 100% 50%, rgba(255,255,255,.10) 0%, transparent 60%);
            pointer-events: none;
        }
        .top-quick-bar::after{
            content:"";
            position: absolute;
            top: 0; left: 0;
            width: 35%; height: 100%;
            background: radial-gradient(circle at 0% 50%, rgba(214,40,40,.22) 0%, transparent 60%);
            pointer-events: none;
        }
        .top-quick-bar > .container{
            position: relative;
            z-index: 1;
        }
        .top-quick-wrap{
            display: flex;
            flex-wrap: nowrap;
            align-items: stretch;
            gap: 0;
        }
        .top-quick-card{
            flex: 1 1 0;
            min-width: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 13px 14px;
            color: #fff !important;
            text-decoration: none !important;
            font-family: 'Poppins', system-ui, sans-serif;
            font-size: 13.5px;
            font-weight: 600;
            letter-spacing: .3px;
            border-right: 1px solid rgba(255,255,255,.12);
            transition: background .25s ease;
            text-align: left;
            line-height: 1.2;
        }
        .top-quick-card:last-child{ border-right: 0; }
        .top-quick-card .qb-icon{
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255,255,255,.18);
            border: 1.5px solid rgba(255,255,255,.55);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            color: #ffffff;
            flex-shrink: 0;
            transition: background .25s ease, transform .25s ease, color .25s ease;
        }
        .top-quick-card:hover{
            background: rgba(255,215,0,.10);
            color: #fff !important;
            text-decoration: none !important;
        }
        .top-quick-card:hover .qb-icon{
            background: rgba(255,255,255,.34);
            transform: scale(1.10) rotate(-6deg);
            color: #fff;
        }

        /* ---------- Hero section: gradient + radial glows (mobile-style) ---------- */
        .hero-section{
            background:
                radial-gradient(circle at 12% 0%, rgba(255,255,255,.10) 0%, transparent 45%),
                radial-gradient(circle at 100% 100%, rgba(214,40,40,.22) 0%, transparent 55%),
                linear-gradient(135deg,#800000 0%,#a52a2a 55%,#5e0000 100%) !important;
            padding: 28px 0 24px !important;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before{
            content:"";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 100%, rgba(255,255,255,.05), transparent 60%);
            pointer-events: none;
        }
        .hero-section .container{
            position: relative;
            z-index: 1;
        }
        .hero-section .row{
            align-items: center;
        }
        .hero-section .logo{
            height: 90px;
            width: auto;
            max-width: 210px;
            margin-top: 4px;
            background: #ffffff;
            border-radius: 14px;
            padding: 10px 16px;
            object-fit: contain;
            box-shadow: 0 8px 20px rgba(0,0,0,.22);
            border: 2px solid rgba(255,255,255,.55);
        }
        .hero-section .hero-title{
            font-family: 'Poppins', system-ui, sans-serif;
            font-size: 28px !important;
            font-weight: 800 !important;
            line-height: 1.18;
            letter-spacing: .4px;
            color: #fff;
            text-shadow: 0 2px 6px rgba(0,0,0,.25);
            margin: 0 0 6px;
        }

        /* RESTORE & polish the full accreditation paragraph on desktop */
        .hero-section .col-md-7 p.d-md-block{
            display: block !important;
            font-family: 'Poppins', system-ui, sans-serif !important;
            font-size: 13.5px !important;
            line-height: 1.7 !important;
            color: rgba(255,255,255,.95) !important;
            margin: 10px 0 0 !important;
            letter-spacing: .25px;
            text-align: center !important;
            font-weight: 500;
        }

        /* Compact accreditation pill line is mobile-only — keep hidden on desktop */
        .hero-section .accreditation-line{ display: none !important; }

        /* Hide the right-column quick-links on desktop — they live in navbar + footer */
        .hero-section .col-md-3{ display: none !important; }

        /* Logo column: fixed width, vertically centered, left-aligned */
        .hero-section .col-md-2{
            flex: 0 0 auto !important;
            width: auto !important;
            max-width: 230px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: flex-start !important;
        }

        /* Title column: takes the rest, vertically centered with the logo,
           text horizontally centered so the institute name + accreditation
           sit on the optical axis next to the logo */
        .hero-section .col-md-7{
            flex: 1 1 auto !important;
            max-width: 100% !important;
            text-align: center !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
        }
        .hero-section .col-md-7 center{
            display: block !important;
            text-align: center !important;
        }
        .hero-section .hero-title,
        .hero-section .col-md-7 p.d-md-block{
            text-align: center !important;
        }

        /* Vertically center logo and title in the row */
        .hero-section .row{
            align-items: center !important;
            justify-content: flex-start !important;
            flex-wrap: nowrap !important;
            margin: 0 !important;
        }

    }

    /* ============ Floating compact institute bar — appears when scrolling past the hero ============
       Body's `overflow-x: hidden` breaks position:sticky for descendants in several browsers,
       so we use a separate position:fixed element shown only when the original hero leaves the viewport. */
    /* Pin the admission strip with position:fixed everywhere (sticky is broken by
       body{overflow-x:hidden} on both desktop and mobile), reserve page space for it,
       and dock the mini-header cleanly underneath without any padding-top void. */
    .adm-announce-strip{
        position: fixed !important;
        top: 0;
        left: 0;
        right: 0;
    }
    /* !important needed to beat the legacy `body{ padding-top: 0 !important }` above
       that was kept around for the old mobile-topbar reset. */
    body{
        padding-top: var(--adm-strip-h, 46px) !important;
    }
    .iitm-mini-header{
        position: fixed;
        top: var(--adm-strip-h, 46px);
        left: 0;
        right: 0;
        z-index: 1090;
        background: linear-gradient(135deg,#800000 0%,#a52a2a 55%,#5e0000 100%);
        color: #fff;
        padding: 5px 0;
        box-shadow: 0 6px 14px rgba(0,0,0,.22);
        transform: translateY(-110%);
        opacity: 0;
        transition: transform .28s ease, opacity .2s ease;
        pointer-events: none;
        font-family: Arial, Helvetica, sans-serif;
    }
    body.hero-shrunk .iitm-mini-header{
        transform: translateY(0);
        opacity: 1;
        pointer-events: auto;
    }
    .iitm-mini-header .container{
        display: flex;
        align-items: center;
        gap: 12px;
        min-height: 0;
    }
    .iitm-mini-header .mini-logo{
        height: 34px;
        width: auto;
        max-width: 110px;
        object-fit: contain;
        background: #fff;
        border-radius: 6px;
        padding: 2px 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,.18);
        flex-shrink: 0;
        display: block;
    }
    .iitm-mini-header .mini-title{
        font-size: 14.5px;
        font-weight: 800;
        letter-spacing: .2px;
        margin: 0;
        line-height: 1.15;
        color: #fff;
        text-shadow: 0 1px 2px rgba(0,0,0,.25);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        flex: 1 1 auto;
        min-width: 0;
    }
    .iitm-mini-header .mini-cta{
        background: #fff;
        color: #800000 !important;
        font-weight: 800;
        font-size: 12px;
        padding: 5px 12px;
        border-radius: 50px;
        text-decoration: none !important;
        box-shadow: 0 2px 6px rgba(0,0,0,.20);
        flex-shrink: 0;
        white-space: nowrap;
        letter-spacing: .3px;
        line-height: 1.2;
        font-family: Arial, Helvetica, sans-serif;
    }
    .iitm-mini-header .mini-cta:hover{
        transform: translateY(-1px);
        box-shadow: 0 6px 14px rgba(0,0,0,.28);
    }
    /* Mobile: keep it but tighter, since adm-strip is already sticky */
    @media (max-width: 991.98px){
        .iitm-mini-header{ padding: 3px 0; }
        .iitm-mini-header .container{ gap: 8px; padding: 0 12px; }
        .iitm-mini-header .mini-logo{ height: 28px; padding: 1px 5px; }
        .iitm-mini-header .mini-title{ font-size: 12px; }
        .iitm-mini-header .mini-cta{ font-size: 11px; padding: 4px 10px; }
    }
</style>

<!-- Admission-centric announcement strip — sticky on top, both desktop & mobile -->
<div class="adm-announce-strip">
    <div class="container">
        <button type="button" class="adm-announce-burger" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" aria-label="Open navigation menu">
            <span></span><span></span><span></span>
        </button>
        <span class="adm-announce-eyebrow">🎓 Admissions Open</span>
        <span class="adm-announce-headline">Academic Year 2026-27</span>
        <span class="adm-announce-courses">MBA · MCA · BBA · BCA · B.Com (H) · BA (JMC)</span>
        <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" class="adm-announce-cta">Apply Now →</a>
        <button type="button" class="adm-announce-cta adm-announce-cta-enquiry" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
    </div>
</div>

<!-- Floating compact institute bar — appears when scrolling past the hero -->
<div class="iitm-mini-header" id="iitmMiniHeader" aria-hidden="true">
    <div class="container">
        <a href="https://www.iitmjanakpuri.com/" aria-label="IITM Janakpuri home">
            <img src="<?php echo $iitm_base_url; ?>iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM" class="mini-logo">
        </a>
        <h2 class="mini-title">INSTITUTE OF INFORMATION TECHNOLOGY &amp; MANAGEMENT</h2>
        <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" rel="noopener" class="mini-cta">Apply Now →</a>
    </div>
</div>

<script>
(function(){
    /* 1) Keep the admission-strip height in a CSS var so the mini-header lines up below it.
       2) Toggle `body.hero-shrunk` when the original .hero-section leaves the viewport.
          Using IntersectionObserver (not scrollY) is robust against header height changes,
          mobile address-bar resize, and the body's overflow-x: hidden that breaks sticky. */
    function measureStrip(){
        var s = document.querySelector('.adm-announce-strip');
        if (!s) return;
        document.documentElement.style.setProperty('--adm-strip-h', s.offsetHeight + 'px');
    }
    window.addEventListener('resize', measureStrip, { passive: true });
    measureStrip();
    document.addEventListener('DOMContentLoaded', function(){
        measureStrip();
        var hero = document.querySelector('.hero-section');
        if (!hero) return;
        if ('IntersectionObserver' in window){
            var io = new IntersectionObserver(function(entries){
                entries.forEach(function(e){
                    document.body.classList.toggle('hero-shrunk', !e.isIntersecting);
                });
            }, { rootMargin: '-40px 0px 0px 0px', threshold: 0 });
            io.observe(hero);
        } else {
            /* Fallback for ancient browsers */
            window.addEventListener('scroll', function(){
                var r = hero.getBoundingClientRect();
                document.body.classList.toggle('hero-shrunk', r.bottom < 60);
            }, { passive: true });
        }
    });
})();
</script>

<div class="top-admission-strip top-quick-bar">
    <div class="container">
        <div class="top-quick-wrap">
            <a href="https://www.iitminternware.com/" target="_blank" class="top-quick-card">
                <span class="qb-icon"><i class="fa fa-briefcase"></i></span>
                <span class="qb-text">Internship Cell</span>
            </a>
            <a href="https://iitmjanakpuri-sdc.in/tracking/" target="_blank" class="top-quick-card">
                <span class="qb-icon"><i class="fa fa-shield"></i></span>
                <span class="qb-text">Grievance Redressal</span>
            </a>
            <a href="https://www.alumniiitmjanakpuri.com/" target="_blank" class="top-quick-card">
                <span class="qb-icon"><i class="fa fa-users"></i></span>
                <span class="qb-text">Alumni Portal</span>
            </a>
            <a href="<?php echo $iitm_base_url; ?>GRC_SGRC 2026-28_2.pdf" target="_blank" class="top-quick-card">
                <span class="qb-icon"><i class="fa fa-file-text-o"></i></span>
                <span class="qb-text">GRC &amp; SGRC Constitution</span>
            </a>
        </div>
    </div>
</div>



  <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 text-center text-md-start mb-2 mb-md-0">

                   <a href="https://www.iitmjanakpuri.com/"> <img src="<?php echo $iitm_base_url; ?>iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM — Nurturing Excellence" class="logo"></a>
                </div>
                <div class="col-md-7">
                    <center>
                        <h1 class="hero-title" style="font-size: 18px;font-weight: bold;"><b>INSTITUTE OF INFORMATION TECHNOLOGY &amp; MANAGEMENT</b></h1>
                        <p style="color: white;text-align: center;" class="d-none d-md-block">Accredited by National Board of Accreditation (NBA) &amp; National Assessment and Accreditation Council (NAAC) Grade-A<br> Recognised U/s 2(f) of UGC act.
                           Rated Category 'A+' by SFRC &amp; 'A' Grade (Highest Category) by JAC Govt. of NCT of Delhi<br>
                           Approved by AICTE &amp; Affiliated to GGS Indraprastha University, New Delhi</p>
                    </center>
                </div>
                <div class="col-md-3" style="margin: 0 auto;">

                        <p>

                            <!-- <a href="https://iitmjanakpuri.com/IITMNBA" target="_blank" style="color: white;">NBA</a> -->

                           <a href="https://www.iitminternware.com/" target="_blank" style="color: white;">Internship Cell</a>




                        </p>
                        <p>
                            <a href="https://iitmjanakpuri-sdc.in/tracking/" target="_blank" style="color: white;">Grievance Redressal Portal</a>
                            </p>
                        <p><a href="https://www.alumniiitmjanakpuri.com/" target="_blank" style="color: white;">Alumni Portal</a></p>
                        <p><a href="<?php echo $iitm_base_url; ?>GRC_SGRC 2026-28_2.pdf" target="_blank" style="color: white;">Constitution of GRC and SGRC</a></p>

                </div>
            </div>

            <!-- Accreditation strip — simple text line below the logo + institute name on mobile -->
            <p class="accreditation-line">
                <span class="acc-label">Accredited by</span>
                NAAC Grade &lsquo;A&rsquo; &middot; NBA &middot; AICTE &middot; UGC 2(f) &middot; GGSIPU
            </p>
        </div>
    </div>