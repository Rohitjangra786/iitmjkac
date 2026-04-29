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
    <title>IITM | IQAC Composition</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="../../assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}
p{
    text-align: justify;
}
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
        .content-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }
        .content-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }
        .content-section p, .content-section ul {
            font-size: 16px;
            color: #333;
            line-height: 1.8;
        }
        .content-section ul {
            list-style-type: decimal;
            padding-left: 20px;
        }
        .content-section li {
            margin-bottom: 10px;
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

    <?php include('../../naacheader.php'); ?>
    <?php include('../../n.php'); ?>

<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1 class="text-center" id="iipc">Internal Quality Assurance Cell (IQAC)</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/vision.php">Vision</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/objectives.php">Objectives & Functions</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/composition.php">Composition</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac.php">Minutes</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/compliance.php">Compliance Reports</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aqar.php">AQAR</a>
        </div>
        <div class="col-md-9">
        <div class="container">
        <div>
            <h2 class="text-center">Composition of the IQAC</h2>
            <p class="text-justify">
                IQAC may be constituted in every institution under the Chairmanship of the Head of the institution
                with heads of important academic and administrative units, a few teachers, distinguished educationists,
                and representatives of local management and stakeholders.
            </p>
            <h2>Composition:</h2>
            <ul class="committee-list">
                <li>Chairperson: Head of the Institution</li>
                <li>Teachers to represent all levels (Three to eight)</li>
                <li>One member from the Management</li>
                <li>Few senior administrative officers</li>
                <li>One nominee each from local society, students, and alumni</li>
                <li>One nominee each from employers, industrialists, or stakeholders</li>
                <li>One of the senior teachers as the coordinator/director of the IQAC</li>
            </ul>
            <h2>Role of IQAC Coordinator</h2>
            <p class="text-justify">
                The role of the coordinator of the IQAC is crucial in ensuring the effective functioning of all the members.
                The coordinator may be a senior/competent person with experience and exposure in quality aspects. They may
                be a full-time functionary or, initially, a senior academic/administrator with IQAC as an additional responsibility.
                Secretarial assistance may be facilitated by the administration. It is essential that the coordinator has sound
                knowledge about computers, data management, and its various functions for effective communication.
            </p>
        </div>
    </div>
        </div>
    </div>
</div>
      
       <div style="height: 5vh"></div>
    <?php
        include("../../naacfooter.php");
    ?>



   

    <script src="myscript.js"></script>
</body>
</html>
