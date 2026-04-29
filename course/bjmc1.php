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
    <title>IITM | BA(JMC)</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style2.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
        body {
            background-color: #fff;
            font-family: Georgia, Arial, sans-serif;
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

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div class="container">
        <div>
            <h1>Overview</h1>
            <p>The three-year Bachelor of Arts in Journalism and Mass Communication (BA JMC) program is affiliated with Guru Gobind Singh Indraprastha University and is divided into six semesters. The primary objective of the program is to equip students with the knowledge, understanding, and skills necessary to establish a strong foundation across various disciplines within the field of Journalism.</p>
            
            <h2>Duration</h2>
            <p>3 Years</p>

            <h2>Intake and Reservation of Seats</h2>
            <p>The programme is run in two shifts, each having an intake of 60 students (total 120 students). The existing reservation policy stipulates 10% seats (6 in number) as "Management Quota Seats". Out of the remaining 90% seats (54 in number), 85% seats (46 in number) are reserved for Delhi candidates and 15% seats (8 in number) for outside Delhi candidates. Further reservation for specific categories is as per the guidelines of Government of NCT of Delhi.</p>

            <h2>Eligibility Criteria</h2>
            <p>50% in aggregate in 10+2 examination/senior school certificate examination of CBSE as minimum marks with pass in five subjects (One language and four elective subjects) or an examination recognized as equivalent.</p>
        </div>
    </div>
    
    <script src="myscript.js"></script>
</body>
</html>
