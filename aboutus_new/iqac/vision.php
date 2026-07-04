<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = window.location.origin + "/index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM | IQAC</title>

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

        .value-added-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            line-height: 1.8;
        }

        .value-added-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
        }

        .team-section {
            margin: 40px auto;
            max-width: 1200px;
        }

        .team-section .team-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-card {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .card {
            flex: 1 1 calc(33.333% - 20px);
            max-width: calc(33.333% - 20px);
            padding: 20px;
            text-align: center;
            border: 1px solid #800000;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-radius: 50%;
            width: 130px;
            height: 130px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            color: #800000;
            margin-bottom: 5px;
        }

        .card span {
            font-size: 14px;
            color: #555;
        }

        .card .sci {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .card .sci a {
            color: #800000;
            font-size: 18px;
            transition: color 0.3s;
        }

        .card .sci a:hover {
            color: #555;
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
            <h2 class="text-center">Introduction</h2>
               <p class="text-justify">
              The Internal Quality Assurance Cell (IQAC) of the Institute of Information Technology & Management (IITM) 
              is established to ensure continuous improvement in the quality of education imparted, research conducted, 
              and overall organizational performance. The IQAC functions as per the guidelines and frameworks provided by the National Assessment and 
              Accreditation Council (NAAC) and the National Board of Accreditation (NBA), aiming to achieve and sustain 
              excellence in all facets of institutional functioning.</p>
            <h2>IQAC – Vision </h2>
            <p class="text-justify">
              To ensure quality culture as the prime concern for the Higher Education Institutions 
              through institutionalizing and internalizing all the initiatives 
              taken with internal and external support.
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
