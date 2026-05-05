<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-Level Navbar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Enable dropdown hover */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0;
            margin-left: 0.1rem;
            display: none;
            position: absolute;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }
    .nav {
        margin: 0;
        padding: 0;
        width: 100%;
       
}

        .navbar {
                margin: 0;
                padding: 0;
                background-color: #F5CEAF !important;
                
        }
/* Dropdown Hover */
.nav-item.dropdown:hover .dropdown-menu {
   
    margin-top: 0;
    background-color: #F8C2B1 !important;

}
 .navbar-nav .nav-link {
            color: black;
            font-weight: bold;
            font-size: 0.8rem;
        }

        .navbar-nav .nav-link:hover {
            color: #800000;
        }

        /* Dropdown Menus */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #F8C2B1;
            border: none;
        }


        

        
        .navbar-nav .nav-link:hover {
            background-color: #FFD8B1 !important;
            color: #800000 !important;
        }
        .dropdown-menu .dropdown-item:hover {
             background-color: #FFD8B1 !important;
             color: #800000 !important;
         }
        /* Change active item font color */
            .navbar-nav .nav-item .nav-link.active, 
            .dropdown-menu .dropdown-item.active {
            color: #A52A2A !important; /* A slightly lighter shade of #800000 */
            font-weight: bold;
           }
        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: "";
            width: 24px;
            height: 2.4px;
            background-color: #800000;
            display: block;
            position: absolute;
            left: 0;
        }

        .navbar-toggler-icon::before {
            top: -10px;
        }

        .navbar-toggler-icon::after {
            top: 10px;
        }
        
.dropdown-menu.show {
    display: block !important;
}
/* Fix second-level dropdown display for mobile */
@media (max-width: 768px) {
  .dropdown-submenu .dropdown-menu {
    position: static; /* no absolute positioning on mobile */
    float: none;
    width: 100%;
    margin-left: 0;
    box-shadow: none;
    background-color: #f8c2b1;
  }
}
.navbar-toggler {
    margin-top: 10px;
  background-color: transparent !important;
  border: none !important;
  box-shadow: none !important;
  padding: 0.25rem 0.5rem;
}

/* Remove default icon image */
.navbar-toggler-icon {
  background-image: none !important;
  width: 30px;
  height: 24px;
  position: relative;
  display: inline-block;
}

/* All three bars */
.navbar-toggler-icon::before,
.navbar-toggler-icon::after,
.navbar-toggler-icon .toggler-bar {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  background-color: #800000;
  left: 0;
  transition: all 0.3s ease;
}

.navbar-toggler-icon::before {
  top: 0;
}

.navbar-toggler-icon .toggler-bar {
  top: 50%;
  transform: translateY(-50%);
}

.navbar-toggler-icon::after {
  bottom: 0;
}

/* ===================== Mobile Off-canvas Sidebar ===================== */
@media (max-width: 991.98px){
    /* Hide the original collapse + its toggler on mobile — we use the fixed top bar + off-canvas instead */
    #navbarNav.collapse,
    #navbarNav.collapsing{
        display: none !important;
    }
    nav.navbar.bg-dark > .container > .navbar-toggler{
        display: none !important;
    }
    nav.navbar.bg-dark{
        display: none !important;  /* original navbar bar hidden on mobile */
    }
}

/* Fixed top mobile bar */
.mobile-topbar{
    display: none;
}
@media (max-width: 991.98px){
    .mobile-topbar{
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1075;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        padding: 8px 12px;
        background: rgba(255,255,255,.92);
        backdrop-filter: saturate(180%) blur(12px);
        -webkit-backdrop-filter: saturate(180%) blur(12px);
        border-bottom: 1px solid rgba(128,0,0,.15);
        box-shadow: 0 4px 14px rgba(0,0,0,.08);
    }
    body{ padding-top: 60px; }  /* space for fixed bar */

    .mobile-topbar .topbar-burger{
        background: linear-gradient(135deg,#800000,#a52a2a);
        color: #fff;
        border: 0;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 4px;
        box-shadow: 0 4px 10px rgba(128,0,0,.25);
    }
    .mobile-topbar .topbar-burger span{
        display: block;
        width: 18px;
        height: 2px;
        background: #fff;
        border-radius: 2px;
    }
    /* Admission-centric center block (replaces the static logo+label) */
    .mobile-topbar .topbar-admission{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        flex: 1 1 auto;
        min-width: 0;
        text-decoration: none;
        padding: 4px 8px;
        line-height: 1;
        overflow: hidden;
    }
    .mobile-topbar .topbar-admission .adm-eyebrow{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        color: #800000;
        background: linear-gradient(135deg,#800000,#d62828);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 3px;
        white-space: nowrap;
    }
    .mobile-topbar .topbar-admission .adm-headline{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 13.5px;
        font-weight: 800;
        color: #2b2b2b;
        white-space: nowrap;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .mobile-topbar .topbar-admission .adm-headline .adm-arrow{
        color: #d62828;
        font-weight: 900;
        animation: admArrow 1.4s ease-in-out infinite;
        display: inline-block;
    }
    @keyframes admArrow{
        0%,100%{ transform: translateX(0); }
        50%    { transform: translateX(4px); }
    }

    .mobile-topbar .topbar-apply{
        background: linear-gradient(135deg,#ffb703,#fb8500,#d62828);
        color: #fff !important;
        font-weight: 800;
        font-size: 12px;
        padding: 10px 14px;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(214,40,40,.45);
        white-space: nowrap;
        animation: applyTopPulse 2s ease-in-out infinite;
    }
    @keyframes applyTopPulse{
        0%,100%{ box-shadow: 0 4px 14px rgba(214,40,40,.45); }
        50%    { box-shadow: 0 6px 20px rgba(214,40,40,.75); }
    }
}

.mobile-sidebar{
    width: 86% !important;
    max-width: 360px;
    background: #fffaf5;
    z-index: 1085 !important;   /* above the fixed mobile topbar (1075) */
}

/* Backdrop must also sit above the topbar so it covers the whole screen */
.offcanvas-backdrop.show{
    z-index: 1080 !important;
}

.mobile-sidebar .offcanvas-header{
    background: linear-gradient(135deg, #800000 0%, #a52a2a 100%);
    color: #fff;
    padding: 16px 18px;
    align-items: center;
}

.mobile-sidebar .sidebar-brand{
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    flex: 1;
}

.mobile-sidebar .sidebar-logo{
    height: 50px;
    width: auto;
    max-width: 160px;
    background: transparent;
    padding: 0;
    border-radius: 0;
    object-fit: contain;
    box-shadow: none;
    flex-shrink: 0;
    /* Force the maroon iitm-1.png OR the white logow.png fallback to render as a clean white wordmark */
    filter: brightness(0) invert(1) drop-shadow(0 3px 6px rgba(0,0,0,.30));
}

.mobile-sidebar .sidebar-brand-text{
    color: #fff;
    font-family: 'Poppins', system-ui, sans-serif;
    line-height: 1.15;
}

.mobile-sidebar .sidebar-brand-text .institute{
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .3px;
    display: block;
}

.mobile-sidebar .sidebar-brand-text .tagline{
    font-size: 10px;
    font-weight: 500;
    opacity: .9;
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin-top: 2px;
}

.mobile-sidebar .btn-close{
    filter: invert(1) brightness(2);
    opacity: .9;
}

/* Eye-catching CTA block at top of sidebar */
.sidebar-cta{
    padding: 14px 14px 6px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #fdf3e7;
    border-bottom: 1px solid #f1d9be;
}

.sidebar-apply-btn{
    display: block;
    text-align: center;
    text-decoration: none;
    background: linear-gradient(135deg, #ffb703 0%, #fb8500 50%, #d62828 100%);
    color: #fff !important;
    font-weight: 800;
    font-size: 15px;
    padding: 14px 12px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(214,40,40,.35);
    position: relative;
    overflow: hidden;
    animation: applyPulse 2s ease-in-out infinite;
}

.sidebar-apply-btn span{
    display: block;
    font-size: 17px;
    margin-top: 3px;
    letter-spacing: .5px;
}

.sidebar-apply-btn:hover,
.sidebar-apply-btn:focus{
    color: #fff !important;
    text-decoration: none;
    transform: translateY(-1px);
}

.sidebar-helpline-btn{
    display: block;
    text-align: center;
    text-decoration: none;
    background: #800000;
    color: #fff !important;
    font-weight: 700;
    font-size: 14px;
    padding: 10px 12px;
    border-radius: 10px;
}

.sidebar-helpline-btn:hover,
.sidebar-helpline-btn:focus{
    color: #fff !important;
    background: #5e0000;
    text-decoration: none;
}

@keyframes applyPulse{
    0%,100%{ box-shadow: 0 6px 18px rgba(214,40,40,.35); }
    50%    { box-shadow: 0 8px 26px rgba(214,40,40,.65); }
}

/* Accordion menu inside off-canvas */
.mobile-sidebar .offcanvas-body{
    padding: 0;
}

.sidebar-accordion .accordion-item{
    border: 0;
    border-bottom: 1px solid #f1d9be;
    background: transparent;
}

.sidebar-accordion .accordion-button{
    background: #fffaf5;
    color: #800000 !important;
    font-weight: 700;
    font-size: 15px;
    padding: 13px 18px;
    box-shadow: none !important;
}

.sidebar-accordion .accordion-button:not(.collapsed){
    background: #f5ceaf;
    color: #5e0000 !important;
}

.sidebar-accordion .accordion-button::after{
    filter: hue-rotate(180deg) saturate(2);
}

.sidebar-accordion .accordion-body{
    padding: 6px 0 10px;
    background: #fff;
}

.sidebar-accordion .accordion-body a{
    display: block;
    padding: 9px 22px 9px 28px;
    color: #333 !important;
    font-size: 14px;
    text-decoration: none;
    border-left: 3px solid transparent;
}

.sidebar-accordion .accordion-body a:hover{
    background: #fdf3e7;
    color: #800000 !important;
    border-left-color: #800000;
}

.sidebar-accordion .sub-label{
    display: block;
    padding: 8px 22px 4px;
    font-size: 11px;
    font-weight: 800;
    color: #800000;
    text-transform: uppercase;
    letter-spacing: .5px;
    background: #faf3ec;
}


    </style>
</head>
<body>

<!-- =============== Fixed Mobile Top Bar (visible <992px) =============== -->
<div class="mobile-topbar">
    <button class="topbar-burger" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" aria-label="Open menu">
        <span></span><span></span><span></span>
    </button>
    <a href="#enquiryModal" data-bs-toggle="modal" class="topbar-admission" aria-label="Open admission enquiry">
        <span class="adm-eyebrow">Admissions Open</span>
        <span class="adm-headline">2026 - 27 <span class="adm-arrow">›</span></span>
    </a>
    <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" class="topbar-apply">Apply Now ›</a>
</div>

<!-- =============== Mobile Off-canvas Sidebar (visible <992px) =============== -->
<div class="offcanvas offcanvas-start mobile-sidebar" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
    <div class="offcanvas-header">
        <a href="https://www.iitmjanakpuri.com/" class="sidebar-brand" aria-label="IITM Home">
            <img src="iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM — Nurturing Excellence" class="sidebar-logo">
            <span class="sidebar-brand-text">
                <span class="institute">Janakpuri</span>
                <span class="tagline">Est. 1999 · NAAC A · NBA</span>
            </span>
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="sidebar-cta">
        <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" class="sidebar-apply-btn">
            🎓 Admissions Open 2026-27
            <span>Apply Now →</span>
        </a>
        <a href="tel:01128525051" class="sidebar-helpline-btn">
            📞 Helpline: 011-28525051
        </a>
    </div>

    <div class="offcanvas-body">
        <div class="accordion accordion-flush sidebar-accordion" id="sidebarAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-about">About Us</button></h2>
                <div id="sb-about" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/history.php">History</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php">Vision &amp; Mission</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/chairman.php">Chairman</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/director.php">Director</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/executive_director.php">Executive Director</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/administration.php">Management &amp; Administration</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/rollofhonor.php">Students Rolls of Honor</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/milestone.php">Milestone</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-acad">Academics</button></h2>
                <div id="sb-acad" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <span class="sub-label">Programmes</span>
                        <a href="https://iitmjanakpuri.com/course/mba.php">MBA</a>
                        <a href="https://iitmjanakpuri.com/course/mca.php">MCA</a>
                        <a href="https://iitmjanakpuri.com/course/bba.php">BBA (H)</a>
                        <a href="https://iitmjanakpuri.com/course/bca.php">BCA (H)</a>
                        <a href="https://iitmjanakpuri.com/course/bcom.php">B.Com. (H)</a>
                        <a href="https://iitmjanakpuri.com/course/bjmc.php">BAJMC (H)</a>

                        <span class="sub-label">Admissions</span>
                        <a href="https://iitmjanakpuri.com/admissions/managementquota.php">Management Quota 2025-26</a>
                        <a href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a>
                        <a href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a>
                        <a href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details (UG &amp; PG)</a>
                        <a href="https://iitmjanakpuri.com/admissions/faqs.php">FAQs</a>

                        <span class="sub-label">Calendar &amp; Time Tables</span>
                        <a href="https://iitmjanakpuri.com/admissions/academic_calendar.php">Academic Calendar</a>
                        <a href="https://iitmjanakpuri.com/academics/2425.php">Time Table 2024-25</a>
                        <a href="https://iitmjanakpuri.com/academics/2324.php">Time Table 2023-24</a>
                        <a href="https://iitmjanakpuri.com/academics/valueaddedcourses.php">Value Added Courses</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-faculty">Faculty</button></h2>
                <div id="sb-faculty" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://www.iitmjanakpuri.com/faculty/mbadept.php">MBA</a>
                        <a href="https://www.iitmjanakpuri.com/faculty/cs.php">BCA &amp; MCA</a>
                        <a href="https://www.iitmjanakpuri.com/faculty/bcom_bba.php">B.Com. (H) &amp; BBA</a>
                        <a href="https://www.iitmjanakpuri.com/faculty/masscomm_dept.php">BA (JMC)</a>
                        <span class="sub-label">Faculty Forms</span>
                        <a href="https://iitmjanakpuri.com/faculty/FacultyForms/PerformanceAppraisalForm.pdf" target="_blank">Performance Appraisal</a>
                        <a href="https://iitmjanakpuri.com/faculty/FacultyForms/LeaveApplicationForm.pdf" target="_blank">Leave Application</a>
                        <a href="https://www.iitmjanakpuri.com/faculty/FacultyForms/tabill.pdf" target="_blank">TA/DA</a>
                        <a href="https://www.iitmjanakpuri.com/faculty/FacultyForms/hrforms.php" target="_blank">HR</a>
                        <a href="https://www.iitmjanakpuri.com/faculty/FacultyForms/EvaluationForm.pdf" target="_blank">Evaluation Form</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-infra">Infrastructure</button></h2>
                <div id="sb-infra" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://www.iitmjanakpuri.com/infrastructure/ict.php">ICT</a>
                        <a href="https://www.iitmjanakpuri.com/infrastructure/infrastructure.php">Infrastructure &amp; Facility</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-place">Placement</button></h2>
                <div id="sb-place" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://www.iitmjanakpuri.com/placements/placements.php">IIPC</a>
                        <a href="https://www.iitmjanakpuri.com/placements/partners.php">Placement Partners</a>
                        <a href="https://www.iitmjanakpuri.com/placements/recruiters.php">Recruiters Speak</a>
                        <a href="https://www.iitmjanakpuri.com/placements/plrecords.php">Placement Records</a>
                        <a href="https://www.iitmjanakpuri.com/placements/summertraining.php">Summer Training Records</a>
                        <a href="https://www.iitminternware.com/" target="_blank">Internship Cell</a>
                        <a href="https://www.iitmjanakpuri.com/placements/images/IITM%20Brochure%20(final).pdf" target="_blank">Brochure</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-pub">Publications</button></h2>
                <div id="sb-pub" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <span class="sub-label">Annual Reports</span>
                        <a href="https://www.iitmjanakpuri.com/academics/pdf/AnnualReport_2324.pdf" target="_blank">2023-24</a>
                        <a href="https://www.iitmjanakpuri.com/academics/pdf/AnnualReport_2223.pdf" target="_blank">2022-23</a>
                        <a href="https://www.iitmjanakpuri.com/academics/pdf/AnnualReport_2122.pdf" target="_blank">2021-22</a>
                        <span class="sub-label">Magazines &amp; Journals</span>
                        <a href="https://www.iitmjanakpuri.com/academics/journals.php">Journals</a>
                        <a href="https://www.iitmjanakpuri.com/academics/unmesh.php">Unmesh</a>
                        <a href="https://www.iitmjanakpuri.com/academics/pragya.php">Pragya</a>
                        <a href="https://www.iitmjanakpuri.com/academics/publications.php">Jigyasa</a>
                        <a href="https://www.iitmjanakpuri.com/alumni/alumnimagazine.php">Alumni Magazine</a>
                        <a href="https://www.iitmjanakpuri.com/academics/pdf/MBA_CorporateConnect.pdf" target="_blank">Corporate Connect</a>
                        <a href="https://www.iitmjanakpuri.com/academics/PurposeForLife.php" target="_blank">Purpose for Life</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-stu">Student Zone</button></h2>
                <div id="sb-stu" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://iitmjanakpuri.com/StudentZone/StudentGuide.php">Student Guide / Rule Book</a>
                        <span class="sub-label">E-Resources</span>
                        <a href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal/" target="_blank">LMS (PG - MBA)</a>
                        <a href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal_General/" target="_blank">LMS (UG &amp; MCA)</a>
                        <a href="https://www.iitmjanakpuri.com/Library/" target="_blank">Library</a>
                        <span class="sub-label">Forms &amp; Payments</span>
                        <a href="https://iitmjanakpuri.com/admissions/fee.php">Online Payment Link</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/studentforms.php">Students' Forms</a>
                        <a href="https://www.iitmjanakpuri.com/academics/Committee List 2025-26.pdf" target="_blank">List of Committees</a>
                        <span class="sub-label">Societies</span>
                        <a href="https://iitmjanakpuri.com/StudentZone/ncc.php">NCC</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/nss.php">NSS</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/sdc.php">Institute Incubation Center (IIC)</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/debate.php">Debate &amp; Literary Events</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/esc.php">Environment &amp; Sustainability</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/edcell.php">Entrepreneurship Development Cell</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/cultural.php">Cultural Committee</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/sports.php">Sports Committee</a>
                        <a href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/canteen.php">Canteen Committee</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/emc.php">Event Management Committee</a>
                        <a href="https://iitmjanakpuri.com/StudentZone/mclub.php">Management Club</a>
                        <span class="sub-label">Other</span>
                        <a href="https://www.iitmjanakpuri.com/campuslife/testimonials.php">Students' Testimonials</a>
                        <a href="https://iitmjanakpuri.com/scholarships/scholarships.php">Scholarships (Inhouse)</a>
                        <a href="https://iitmjanakpuri.com/scholarships/pdfs/Merit-cum-Means - DHE.pdf" target="_blank">Merit-cum-Means Scheme</a>
                        <a href="https://iitmjanakpuri.com/scholarships/pdfs/EWS GGSIPU.pdf" target="_blank">EWS</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-events">Events</button></h2>
                <div id="sb-events" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://iitmjanakpuri.com/events/extra.php">Extra &amp; Co-Curricular Events</a>
                        <a href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
                        <a href="https://iitmjanakpuri.com/events/conference.php">Conference / Seminars / Webinars</a>
                        <a href="https://iitmjanakpuri.com/events/fdp.php">FDP</a>
                        <a href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
                        <a href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a>
                        <a href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-mand">Mandatory Disclosure</button></h2>
                <div id="sb-mand" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://iitmjanakpuri.com/mandatory/mandatorydisclosure.php">Academic Audit</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/aicte.php">AICTE</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/Mandatory Disclosure MBA_2025-26.pdf" target="_blank">Mandatory Disclosure for MBA</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/Mandatory Disclosure MCA_2025-26.pdf" target="_blank">Mandatory Disclosure for MCA</a>
                        <a href="https://www.iitmjanakpuri.com/mandatory/pdf/NOC_DTTE_2025-26.pdf" target="_blank">DTTE</a>
                        <a href="https://www.iitmjanakpuri.com/mandatory/pdf/naac.pdf" target="_blank">NAAC</a>
                        <a href="https://www.iitmjanakpuri.com/mandatory/pdf/NBA Letter.pdf" target="_blank">NBA</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/Affiliation 2025-26.pdf">GGSIPU Affiliation</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/IITM UGC 2(F).pdf">Recognition - UGC 2F</a>
                        <a href="https://www.iitmjanakpuri.com/mandatory/pdf/NIRF_2025.pdf" target="_blank">NIRF</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/iso-21001-2018.pdf" target="_blank">ISO 21001:2018</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/iso-10001-2015.pdf" target="_blank">ISO 10001:2015</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/green audit.pdf" target="_blank">Green Audit</a>
                        <a href="https://www.iitmjanakpuri.com/direct-file/Gender Audit Report.pdf" target="_blank">Gender Audit</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sb-iqac">IQAC</button></h2>
                <div id="sb-iqac" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body">
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/iqac/vision.php">Vision</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/iqac/objectives.php">Objectives &amp; Functions</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/iqac/composition.php">Composition</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/iqac.php">Minutes</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/compliance.php">Compliance Reports</a>
                        <a href="https://www.iitmjanakpuri.com/aboutus_new/aqar.php">AQAR</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"
                aria-controls="mobileSidebar" aria-label="Open navigation menu">
            <span class="navbar-toggler-icon"> 
 <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">


                <!-- Services with Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/history.php">History</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php">Vision & Mission</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/chairman.php">Chairman</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/director.php">Director</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/executive_director.php">Executive Director</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/administration.php">Management and Administration</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/rollofhonor.php">Students Rolls of Honor</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/milestone.php">Milestone</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                       Academics
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Programmes</a>
                            <ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/course/mba.php">MBA</a></li>
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/course/mca.php">MCA</a></li>
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/course/bba.php">BBA(H)</a></li>
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/course/bca.php">BCA(H)</a>  </li>
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/course/bcom.php">B.Com.(H)</a></li>
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/course/bjmc.php">BAJMC(H)</a></li>
                            </ul>
                        </li>
                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Admissions</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/managementquota.php">Management Quota 2025-26</a></li>
                            <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a></li>
                            <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a></li>
                            <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details (UG & PG)</a></li>
                            <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/faqs.php">FAQs</a></li>
                            <!--<li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/enquiry.php">Enquiry</a></li>-->
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/academic_calendar.php">Academic Calendar</a>  </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Time Table</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/academics/2425.php">2024-25</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/academics/2324.php">2023-24</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="https://iitmjanakpuri.com/academics/valueaddedcourses.php">Value Added Courses</a></li>

                    </ul>

                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Faculty
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/mbadept.php">MBA</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/cs.php">BCA & MCA</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/bcom_bba.php">B.Com. (H) & BBA</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/masscomm_dept.php">BA(JMC)</a></li>

                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Faculty Forms</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/faculty/FacultyForms/PerformanceAppraisalForm.pdf" target="_blank"">Performance Appraisal</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/faculty/FacultyForms/LeaveApplicationForm.pdf" target="_blank"">Leave Application</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/FacultyForms/tabill.pdf" target="_blank">TA/DA</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/FacultyForms/hrforms.php" target="_blank">HR</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/faculty/FacultyForms/EvaluationForm.pdf" target="_blank">Evaluation Form</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Infrastructure
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/infrastructure/ict.php">ICT</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/infrastructure/infrastructure.php">Infrastructure & Facility</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Placement
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/placements.php">IIPC</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/partners.php">Placement Partners</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/recruiters.php">Recruiters Speak</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/plrecords.php">Placement Records</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/summertraining.php">Summer Training Records</a></li>
                        <li><a class="dropdown-item" href="https://www.iitminternware.com/">Internship Cell</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/images/IITM%20Brochure%20(final).pdf">Brochure</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Publications
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Annual Reports</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pdf/AnnualReport_2324.pdf" target="_blank">2023-24</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pdf/AnnualReport_2223.pdf" target="_blank">2022-23</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pdf/AnnualReport_2122.pdf" target="_blank">2021-22</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/journals.php">Journals</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/unmesh.php">Unmesh</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pragya.php">Pragya</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/publications.php">Jigyasa</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/alumni/alumnimagazine.php">Alumni Magazine</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pdf/MBA_CorporateConnect.pdf" target="_blank">Corporate Connect</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/PurposeForLife.php" target="_blank">Purpose for Life</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Student Zone
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/StudentGuide.php">Student Guide/Rule Book</a></li>
                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">E-Resources</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal/" target="_blank">LMS (PG - MBA)</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal_General/" target="_blank">LMS (UG & MCA)</a></li>
                                
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/Library/" target="_blank">Library</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/fee.php">Online Payment Link</a></li>
                        <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/studentforms.php">Students' Forms</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/Committee List 2025-26.pdf" target="_blank">List of Committees</a></li>
                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Student Societies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/ncc.php">NCC</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/nss.php">NSS</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/sdc.php">Institute Incubation Center (IIC)</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/debate.php">Debate and Literary Events Committee</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/esc.php">Environment & Sustainability Committee</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/edcell.php">Entrpreneurship Development Cell</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/cultural.php">Cultural Committee</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/sports.php">Sports Committee</a></li>
                                <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/canteen.php">Canteen Committee</a>                                   </li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/emc.php">Event Management Committee</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/mclub.php">Management Club</a></li>
                            </ul>
                        </li>                        
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/campuslife/testimonials.php">Students' Testimonials</a></li>
                        <!-- Submenu -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Scholarships</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/scholarships/scholarships.php">Inhouse</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/scholarships/pdfs/Merit-cum-Means - DHE.pdf" target="_blank">Merit Cum Means Linked Financial Assistance Scheme</a></li>
                                <li><a class="dropdown-item" href="https://iitmjanakpuri.com/scholarships/pdfs/EWS GGSIPU.pdf" target="_blank">EWS</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Events
                    </a>
                    <ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://iitmjanakpuri.com/events/extra.php">Extra & Co-Curricular Events</a></li>
<li>                        <a class="dropdown-item" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a></li>
<li>                        <a class="dropdown-item" href="https://iitmjanakpuri.com/events/conference.php">Conference/Seminars/Webinars</a></li>
<li>                        <a class="dropdown-item" href="https://iitmjanakpuri.com/events/fdp.php">FDP</a></li>
<li>                        <a class="dropdown-item" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a></li>
<li>                        <a class="dropdown-item" href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a></li>

 
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown8" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                       Mandatory Disclosure
                    </a>
                    <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://iitmjanakpuri.com/mandatory/mandatorydisclosure.php">Academic Audit</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aicte.php">AICTE</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/Mandatory Disclosure MBA_2025-26.pdf" target="_blank">Mandatory Disclosure for MBA</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/Mandatory Disclosure MCA_2025-26.pdf" target="_blank">Mandatory Disclosure for MCA</a></li>
                        <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/mandatory/pdf/NOC_DTTE_2025-26.pdf" target="_blank">DTTE</a></li>
                        <!--<li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/mandatory/mandatorydisclosure.php">Academic Audit</a></li>-->
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/mandatory/pdf/naac.pdf" target="_blank">NAAC</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/mandatory/pdf/NBA Letter.pdf" target="_blank">NBA</a></li>
                            <!--<li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/IITMNBA/">NBA</a></li>-->
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/Affiliation 2025-26.pdf">GGSIPU Affiliation</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/IITM UGC 2(F).pdf">Recognition-UGC 2F</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/mandatory/pdf/NIRF_2025.pdf" target="_blank">NIRF</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/iso-21001-2018.pdf" target="_blank">ISO 21001:2018</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/iso-10001-2015.pdf" target="_blank">ISO 10001:2015</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/green audit.pdf" target="_blank">Green Audit</a></li>
                            <li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/direct-file/Gender Audit Report.pdf" target="_blank">Gender Audit</a></li>


                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown9" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        IQAC
                    </a>
                    <ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/vision.php">Vision</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/objectives.php">Objectives & Functions</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/composition.php">Composition</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac.php">Minutes</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/compliance.php">Compliance Reports</a></li>
<li>                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aqar.php">AQAR</a></li>


                    </ul>
                </li>
                

            </ul>
        </div>
    </div>
</nav>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Handle second-level dropdowns
    var submenuTriggers = document.querySelectorAll('.dropdown-submenu > a');

    submenuTriggers.forEach(function (el) {
        el.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent the default link behavior
            e.stopPropagation(); // Prevent parent dropdown from closing

            let submenu = this.nextElementSibling;

            // Close other open submenus
            document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (menu) {
                if (menu !== submenu) {
                    menu.classList.remove('show');
                }
            });

            // Toggle the clicked submenu
            submenu.classList.toggle('show');
        });
    });

    // Close all submenus when main dropdown is closed
    document.querySelectorAll('.dropdown').forEach(function (dropdown) {
        dropdown.addEventListener('hide.bs.dropdown', function () {
            this.querySelectorAll('.dropdown-menu.show').forEach(function (submenu) {
                submenu.classList.remove('show');
            });
        });
    });
});
</script>
<!--
<script>
  document.addEventListener("DOMContentLoaded", function(){
    var dropdowns = document.querySelectorAll('.dropdown-submenu > a');
    dropdowns.forEach(function(drop){
        drop.addEventListener('click', function(e){
            e.preventDefault();
            let next = this.nextElementSibling;
            if (next && next.classList.contains('dropdown-menu')) {
                next.classList.toggle('show');
            }
        });
    });
  });
</script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</body>
</html>
