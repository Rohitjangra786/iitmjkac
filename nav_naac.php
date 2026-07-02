<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
/* Navbar Background */
nav {
    margin: 0;
    padding: 0;
    width: 100%;
}

.navbar {
    margin: 0;
    padding: 0;
    background-color: #F5CEAF !important;
}

.navbar-nav {
    margin: 0;
    padding: 0;
}

/* Dropdown Hover */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    background-color: #F8C2B1 !important;

}

/* Dropdown Styling */
.custom-dropdown {
    background-color: #F8C2B1 !important;
    border: none;
    transition: all 0.3s ease-in-out;
    width: 350px;
}

.custom-dropdown .dropdown-item {
    color: black !important;
    font-size: 1rem;
    font-weight: bolder;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.custom-dropdown .dropdown-item:hover {
    background-color: #F5CEAF !important;
    color: black !important;
    font-size: 1rem;
    font-weight: bolder;
}
/* Hide submenu initially */
.dropdown .submenu1 {
    display: none;
    position: absolute;
    left: 100%; /* Position the submenu to the right of the parent dropdown */
    top: 0; /* Align submenu to the top */
    margin-top: 0; /* Ensure no additional margin */
    z-index: 1000; /* Keep it on top of other elements */
}

/* Show submenu on hover */
.dropdown:hover .submenu1 {
    display: block;
    background-color: #F8C2B1; /* Optional: Customize background color */
}



/* Hide submenu initially */
.dropdown .dropdown-item .submenu2 {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    margin-top: 0;
}

/* Show submenu on hover */
.dropdown:hover .submenu2 {
    display: block;
    background-color: #F8C2B1; /* Optional: Customize background color */
}


/* Hide submenu initially */
.dropdown .submenu3 {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    margin-top: 0;
}

/* Show submenu on hover */
.dropdown:hover .submenu3 {
    display: block;
    background-color: #F8C2B1; /* Optional: Customize background color */
}
/* Navbar Links */
.navbar-nav .nav-link {
    color: black !important;
    font-size: 1rem;
    font-weight: bolder;
}

.navbar-nav .nav-link:hover {
    color: #800000 !important;
}
</style>

<div class="navcontainer">
<nav class="navbar navbar-expand-lg">
   <!-- <a class="navbar-brand" href="#">
        <img src="../upload_new/gallery/logow.png" style="width: 9.2rem; height: 5.2rem;">
    </a> -->
    <div class="container text-center" style="margin-left: 60px;">
        <button class="navbar-toggler custom-toggler ml-auto" style="margin-bottom: 12px;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- About Us -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button">About Us</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">Vision & Mission</a>
                        <a class="dropdown-item" href="#">Chairman</a>
                        <a class="dropdown-item" href="#">Director</a>
                        <a class="dropdown-item" href="#">Executive Director</a>
                        <a class="dropdown-item" href="#">Management and Administration</a>
                        <a class="dropdown-item" href="#">Students Rolls of Honor</a>
                        <a class="dropdown-item" href="#">Milestone</a>
                    </div>
                </li>
                <!-- Programmes 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="programmesDropdown" role="button">Programmes</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">MBA</a>
                        <a class="dropdown-item" href="#">MCA</a>
                        <a class="dropdown-item" href="#">BCA</a>
                        <a class="dropdown-item" href="#">BBA</a>
                        <a class="dropdown-item" href="#">B.Com.(H)</a>
                        <a class="dropdown-item" href="#">BA(JMC)</a>
                    </div>
                </li> -->
                <!-- Admissions 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="admissionsDropdown" role="button">Admissions</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">Admission Procedure</a>
                        <a class="dropdown-item" href="#">Eligibility Criteria</a>
                        <a class="dropdown-item" href="#">Fee Details</a>
                        <a class="dropdown-item" href="#">FAQs</a>
                        <a class="dropdown-item" href="#">Enquiry</a>
                        <a class="dropdown-item" href="#">Management Quota</a>
                    </div>
                </li> -->
                <!-- Infrastructure -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="infraDropdown" role="button">Infrastructure</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">ICT</a>
                        <a class="dropdown-item" href="#">Infrastructure and Facility</a>
                    </div>
                </li>
                <!-- Faculty -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="facultyDropdown" role="button">Faculty</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">Director</a>
                        <a class="dropdown-item" href="#">Dept. of Comp. Science</a>
                        <a class="dropdown-item" href="#">Dept. of Management Studies</a>
                        <a class="dropdown-item" href="#">Dept. of Commerce</a>
                        <a class="dropdown-item" href="#">IITM School of Mass Communication</a>
                    </div>
                </li>
<!-- Academics -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="academicsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
    <div class="dropdown-menu custom-dropdown" aria-labelledby="academicsDropdown">
        <a class="dropdown-item" href="#">Programmes</a>
        <a class="dropdown-item" href="#">Admissions</a>
        <!-- Time Table with Submenu -->
        <div class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#" id="timeTableDropdown1">Time Table</a>
            <div class="dropdown-menu custom-dropdown submenu1" aria-labelledby="timeTableDropdown1">
                <a class="dropdown-item" href="#">2022-2023</a>
                <a class="dropdown-item" href="#">2023-2024</a>
                <a class="dropdown-item" href="#">2024-2025</a>
            </div>
        </div>

    </div>
</li>
                <!-- Publications -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pubDropdown" role="button">Publications</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">Journals</a>
                        <a class="dropdown-item" href="#">Pragya</a>
                        <a class="dropdown-item" href="#">Jigyasa</a>
                        <a class="dropdown-item" href="#">Purpose of Life</a>
                        <a class="dropdown-item" href="#">Sovenir</a>
                        <a class="dropdown-item" href="#">UNMESH</a>
                    </div>
                </li>
                <!-- Campus Life 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="campusDropdown" role="button">Campus Life</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">Students' Testimonials</a>
                        <a class="dropdown-item" href="#">Committees</a>
                        <a class="dropdown-item" href="#">Executive Fitness Programme</a>
                        <a class="dropdown-item" href="#">Student Guide Book-PG</a>
                    </div>
                </li> -->
                <!-- Events -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button">Events</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">Extra & Co-Curricular Events</a>
                        <a class="dropdown-item" href="#">Guest Lectures</a>
                        <a class="dropdown-item" href="#">Conference/Seminars/Webinars</a>
                        <a class="dropdown-item" href="#">FDP</a>
                        <a class="dropdown-item" href="#">Industrial Visits</a>
                        <a class="dropdown-item" href="#">Workshops</a>
                        <a class="dropdown-item" href="#">Fiesta</a>
                    </div>
                </li>
                <!-- Placements -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="placementsDropdown" role="button">Placements</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">IIPC</a>
                        <a class="dropdown-item" href="#">Placement Partners</a>
                        <a class="dropdown-item" href="#">Recruiters' Speak</a>
                        <a class="dropdown-item" href="#">Placement Records</a>
                        <a class="dropdown-item" href="#">Summer Training Records</a>
                        <a class="dropdown-item" href="#">Internship Cell</a>
                        <a class="dropdown-item" href="#">Brochure</a>
                    </div>
                </li>
                <!-- Alumni -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="alumniDropdown" role="button">Alumni</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">Alumni Association</a>
                        <a class="dropdown-item" href="#">Notable Alumni</a>
                        <a class="dropdown-item" href="#">Alumni Meets</a>
                        <a class="dropdown-item" href="#">Alumni Speak</a>
                        <a class="dropdown-item" href="#">Alumni Magazine</a>
                    </div>
                </li>
                <!-- Scholarship 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="scholarshipDropdown" role="button">Scholarship</a>
                    <div class="dropdown-menu custom-dropdown">
                        <a class="dropdown-item" href="#">In-house Scholarships</a>
                        <a class="dropdown-item" href="#">Merit-cum-Means Linked Financial Assistance Scheme</a>
                        <a class="dropdown-item" href="#">EWS Scheme</a>
                    </div>
                </li> -->
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="mandatoryDisclosureDropdown" role="button">Mandatory Disclosure</a>
    <div class="dropdown-menu custom-dropdown">
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/mandatorydisclosure.php#institute">Institute Information</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/academicprogrammes.php">Details of Academic Programmes</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/accreditationstatus.php">Status of Accreditation</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/teachersavailability.php">Status of Teachers Availability</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/teachingquality.php">Quality of Teachers and Teaching</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/institutionalsupport.php">Institutional Support for Faculty Development</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/grievanceredressal.php">Grievance Redressal Mechanism</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/universityexaminations.php">Institutional Support for University Examination</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/librarystatus.php">Status of Library</a>
        <a class="dropdown-item" href="https://iitmjanakpuri.com/AAC/labstatus.php">Status of Laboratories</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/cocurricular.php">Co-curricular Activities</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/institutepublications.php">Publications of the Institutions</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/personalitiesdevelopment.php">Students Personalities Development</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/placementstatus.php">Status of Placement</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/institutionparameters.php">Parameters about the Institutions</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/facilitiesavailable.php">Facilities Available in the Institute</a>
        <a class="dropdown-item" href="http://www.iitmjanakpuri.com/AAC/deficienciesremoval.php">Removal Completion of Identified Deficiencies</a>
        <!-- Additional dropdown items can be added here -->
    </div>
</li>

            </ul>
        </div>
    </div>
</nav>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
