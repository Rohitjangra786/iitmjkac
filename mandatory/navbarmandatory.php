<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//db.onlinewebfonts.com/c/3d801c16769ba2dd6344be073c5bb938?family=TradeGothicLTW01-Light" rel="stylesheet" type="text/css"/>
    
   <style>
    /* Your existing styles here */

    .navbar {
        /*text-align: center;*/
    }

    .navbar-nav {
        width: 100%;
        /*text-align: center;*/
        flex-direction: column;
    }

    .navbar-toggler {
        margin-left: auto;
        margin-right: auto;
    }

    .navbar-nav.multi-line {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
    }

    /* Additional style for larger font size */
    .navbar-nav li {
        font-size: 16px; /* Adjust the font size as needed */
    }
    
     .navbar-nav .nav-link {
        color: #ffffff; /* Default white color */
        transition: color 0.3s ease; /* Smooth transition */
    }
       .navbar-nav .nav-link:hover {
        color: #add8e6; /* Very light blue color */
    }

    .navbar-nav .nav-link:focus {
        color: #add8e6; /* Same color for focus */
    }
</style>

</head>
<body>

<div class="navcontainer">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="https://www.iitmjanakpuri.com/index.php">
            <img src="../upload_new/gallery/logow.png" class="logom" id="logom" style="width: 9.2rem; height: 5.2rem;"/>
        </a>
        <button class="navbar-toggler tgfmlt color-maroon custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon custom-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto multi-line">
                <!-- Line 1 -->
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/mandatorydisclosure.php#institute">A. Institute Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/academicprogrammes.php">B. Details of Academic Programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/accreditationstatus.php">1. Status of Accreditation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/teachersavailability.php">2. Status of Teachers Availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/teachingquality.php">3. Quality of Teachers and Teaching</a>
                </li>
                <!-- Line 2 -->
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/institutionalsupport.php">4. Institutional Support for Faculty Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/grievanceredressal.php">5. Framework of students' Grievance Redressal Mechanism</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/universityexaminations.php">6. Institutional Support for University Examination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/librarystatus.php">7. Status of Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/mandatory/labstatus.php">8. Status of Laboratories</a>
                </li>
                <!-- Line 3 -->
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/cocurricular.php">9. Co-curricular Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/institutepublications.php">10. Publications of the Institutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/personalitiesdevelopment.php">11. Students Personalities Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/placementstatus.php">12. Status of Placement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/institutionparameters.php">13. General Parameters about the Institutions</a>
                </li>
                <!-- Line 4 -->
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/facilitiesavailable.php">14. Facilities Available in the Institute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/deficienciesremoval.php">15. Removal Completion of Identified Deficiencies</a>
                </li>
          <!--      <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="#">Summary of Marks</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="http://www.iitmjanakpuri.com/mandatory/timeschedule.php">Adherence of Time Schedule</a>
                </li>-->
         <!--        <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="#">Deficiencies Identified</a>
                </li> -->
                <!-- Additional tabs can be added here -->

            </ul>
        </div>
    </nav>
</div>

<script>
    function somelinks(x) {
        x.style.color = '#fff';
        x.style.fontWeight = 'bolder';
        x.style.transform = 'scale(1.2)';
    }

    function normallinks(x) {
        x.style.transform = 'scale(1.2)';
        x.style.fontWeight = 'normal';
    }
</script>

<!-- Bootstrap JS and Popper.js 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskv
-->
</body>
</html
