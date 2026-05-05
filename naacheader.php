
 <style>
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
            color: #ffd700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-size: 9.5px;
            margin-right: 5px;
            display: inline-block;
        }
    }

    /* Show simple accreditation line only on mobile */
    .accreditation-line{ display: none; }
</style>

<div class="top-admission-strip">
    <div class="container">
        <div class="top-admission-wrap">
            <div class="top-admission-card top-admission-main">
                <a href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admissions 2026–27</a>
            </div>

            <div class="top-admission-card top-admission-secondary">
                <a href="https://iitmjanakpuri.com/course/syllabus/BA(JMC) Infrastructure.pdf" target="_blank">Explore Media Studio</a>
            </div>

            <div class="top-admission-card top-admission-helpline">
                <span>Admission Helpline: 011-28525051</span>
            </div>

            <div class="top-admission-card top-admission-enquiry">
                <a href="https://forms.gle/pV2QPG3CtNt6eWBc6">Admission Enquiry</a>
            </div>
        </div>
    </div>
</div>


  <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 text-center text-md-start mb-2 mb-md-0">

                   <a href="https://www.iitmjanakpuri.com/"> <img src="iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM — Nurturing Excellence" class="logo"></a>
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
                        <p><a href="GRC_SGRC 2026-28_2.pdf" target="_blank" style="color: white;">Constitution of GRC and SGRC</a></p>

                </div>
            </div>

            <!-- Accreditation strip — simple text line below the logo + institute name on mobile -->
            <p class="accreditation-line">
                <span class="acc-label">Accredited by</span>
                NAAC Grade &lsquo;A&rsquo; &middot; NBA &middot; AICTE &middot; UGC 2(f) &middot; GGSIPU
            </p>
        </div>
    </div>