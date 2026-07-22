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
    <title>Value Added Courses - MCA | IITM Janakpuri</title>
    <meta name="description" content="Explore Value Added Courses done in MCA Programme at IITM Janakpuri.">

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
            <h1>VALUE ADDED COURSES DONE IN MCA PROGRAMME</h1>
            <p>
                The value added courses for MCA are designed to enhance the Technical Skills, Analytical Skills, Software Development capabilities, Problem Solving ability, Data Science proficiency, Cloud Computing, and Communication skills beyond the core IT curriculum.
            </p>
            <p>
                These short-term courses and hands-on workshops equip computer application students with industry-standard software tools, frameworks, and modern technologies required in the software industry.
            </p>
            
            <p class="fw-bold mt-4" style="color: #800000;">Value Added Courses Conducted:</p>
            <ul class="committee-list">
                <li>Python Programming & Data Science</li>
                <li>Web Development (Full Stack / MERN)</li>
                <li>Cloud Computing & DevOps</li>
                <li>Advanced Java Programming</li>
                <li>Machine Learning & AI Tools</li>
                <li>Cyber Security Essentials</li>
                <li>Soft Skills & Technical Interview Preparation</li>
            </ul>
        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

    <script src="myscript.js"></script>
</body>
</html>
