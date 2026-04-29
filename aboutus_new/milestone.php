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
    <title>IITM | Milestones</title>

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
p{text-align: justify;}
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
            font-size: 28px;
            font-weight: bold;
        }

        .milestones-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            line-height: 1.8;
        }

        .milestones-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .milestones-section ul {
            list-style-type: none;
            padding: 0;
        }

        .milestones-section ul li {
            margin-bottom: 15px;
            font-size: 16px;
            color: #333;
        }

        .milestones-section ul li span.year {
            font-weight: bold;
            color: #800000;
        }
         .committee-list {
        color: #800000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
        text-align: justify;
    }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div style="height: 5vh;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1 class="text-center text-danger">Milestones</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 430px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/history.php">History</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php">Vision & Mission</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/chairman.php">Chairman</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/director.php">Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/executive_director.php">Executive Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/administration.php">Management and Administration</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/rollofhonor.php">Students Rolls of Honor</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/milestone.php">Milestone</a><br>    
            </div>
            <div class="col-md-9">
                <div>

        <ul class="committee-list">
            <li><span class="year">1999:</span> Established under the Aegis of Mata Leelawati Sikshan Sansthan with BCA Undergraduate programs, 60 students intake, and 3 faculty members.</li>
            <li><span class="year">2003:</span> Became an IT Postgraduate institution (MCA) and set up the Undergraduate Management Department (BBA).</li>
            <li><span class="year">2007:</span> Started 2nd Shift for both IT and Management departments.</li>
            <li><span class="year">2008:</span> Transitioned into a Management Postgraduate institution (PGDM, converted to MBA in 2012).</li>
            <li><span class="year">2014:</span> NAAC Accredited First Cycle.</li>
            <li><span class="year">2016:</span> NBA Accredited MCA Programme.</li>
            <li><span class="year">2017:</span> Introduced B.Com (H) programme.</li>
            <li><span class="year">2019:</span> Launched B.Com (H) 2nd Shift programme.</li>
            <li><span class="year">2019:</span> NAAC Accredited 'A' Grade Second Cycle.</li>
            <li><span class="year">2023:</span> Started the BA (JMC) programme.</li>
            <li><span class="year">2025:</span> Expanded to 2200+ students and 100+ faculty members, supported by technical, administrative, and support staff.</li>
        </ul>
    </div>
            </div>
        </div>
    </div>




   <div style="height: 5vh;"></div>

    
<?php
   include("../naacfooter.php");
?>
    <script src="myscript.js"></script>
</body>
</html>
