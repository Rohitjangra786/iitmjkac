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
    <title>Value Added Courses - B.COM (HONS.) | IITM Janakpuri</title>
    <meta name="description" content="Explore Value Added Courses done in B.COM (HONS.) Programme at IITM Janakpuri.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
        html, body * {
            box-sizing: border-box;
            font-family: Georgia, 'Open Sans', sans-serif;
        }

        p {
            text-align: justify;
        }

        .value-added-section {
            margin: 40px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 850px;
            line-height: 1.8;
        }

        .value-added-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .value-added-section p {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
        }

        .committee-list {
            color: #000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #000;
            text-align: justify;
            margin-bottom: 5px;
        }

        .back-btn {
            background-color: #800000;
            color: #fff;
            padding: 8px 18px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .back-btn:hover {
            background-color: #600000;
            color: #fff;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div class="container my-4">
        <a href="valueaddedcourses.php" class="back-btn">&larr; Back to All Courses</a>

        <div class="value-added-section">
            <h1>VALUE ADDED COURSES DONE IN B.COM (HONS.) PROGRAMME</h1>
            <p>
                Value-Added Courses (VACs) are brief, skill-focused programs created to supplement the standard curriculum by giving students professional skills, industry-relevant competences, and practical knowledge. These courses are essential Commerce students for preparing students for the fast-paced business world at the collegiate level.
            </p>
            <p>
                These courses are intended to close the skills gap, improve employability, build industry-relevant competencies, foster entrepreneurship, improve digital and technological skills, support lifelong learning, strengthen industry-academia collaboration, and improve career and placement opportunities.
            </p>
            <p>
                By offering hands-on, skill-based training, these supplemental courses help commerce students close the knowledge gap between academic study and industry demands. Value-Added Courses are incorporated into the Commerce curriculum to help graduates become skilled, flexible, and prepared for the commercial world.
            </p>
            
            <p class="fw-bold mt-4" style="color: #800000;">Value Added Courses Conducted:</p>
            <ul class="committee-list">
                <li>Advanced Excel</li>
                <li>Financial Modelling</li>
                <li>Banking, Financial Services, and Insurance</li>
                <li>SPSS</li>
                <li>Tally Prime with GST</li>
                <li>Stock Market & Mutual Funds</li>
                <li>Power BI for Business Analytics</li>
                <li>Research Methodology</li>
                <li>Life Skills</li>
            </ul>
        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

    <script src="myscript.js"></script>
</body>
</html>
