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


    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
