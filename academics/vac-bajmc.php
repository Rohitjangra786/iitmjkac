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
    <title>Value Added Courses - BA (JMC) | IITM Janakpuri</title>
    <meta name="description" content="Explore Value Added Courses done in BA (JMC) Programme at IITM Janakpuri.">

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
            <h1>VALUE ADDED COURSES DONE IN BA (JMC) PROGRAMME</h1>
            <p>
                The Value Added Courses (VACs) in the BA (JMC) programme are an essential component which are industry sponsored certifications. These courses are designed to enrich students' professional education by fostering practical courses like Mobile Journalism, Travel Photography, Advanced CorelDRAW, Basics of Podcast Production, Hindi typing, Adobe InDesign, AI in Media production & Drone Journalism to make the students industry ready.
            </p>
            <p>
                VACs are compulsory credit-bearing courses that enrich students beyond core journalism and media studies and contribute to holistic personality development. Through these value-added learning opportunities, students enhance their employability, strengthen their professional portfolios, and acquire industry-relevant skills that prepare them for careers in journalism, digital media, advertising, public relations, visual communication, and content creation.
            </p>
            
            <p class="fw-bold mt-4" style="color: #800000;">Courses Offered Are:</p>
            <ul class="committee-list">
                <li><strong>Mobile Journalism (MOJO):</strong> In this, students will learn the fundamentals of capturing stories/news through planning, recording, editing, and publishing engaging content like Vox Pop, Field reporting through smartphones.</li>
                <li><strong>Travel Photography:</strong> Students will develop skills in capturing travel images, outdoor shoots through effective composition, lighting, and visual storytelling techniques.</li>
                <li><strong>Advanced CorelDRAW:</strong> Students will gain proficiency in creating professional vector graphics, layouts, and publication designs using advanced CorelDRAW tools.</li>
                <li><strong>Basics of Podcast Production:</strong> Students will learn the fundamentals of podcast planning, research, scripting, recording, editing, interviewing and publishing engaging audio content.</li>
                <li><strong>Hindi Typing:</strong> Students will improve their Hindi typing speed and accuracy using Unicode typing tools for professional media and documentation work.</li>
                <li><strong>Adobe InDesign:</strong> Students will learn to design and produce professional-quality newspapers, magazines, brochures, promotional branding material & other print publications using Adobe InDesign.</li>
                <li><strong>AI in Media Production:</strong> Students will explore AI-powered tools for content creation, editing, automation, prompt engineering, AI in filmmaking and multimedia production while understanding their ethical applications in media.</li>
                <li><strong>Hindi Print Production:</strong> Students will acquire practical skills in Hindi newspaper and magazine page layout, typography, proofreading, and print-ready publication production.</li>
            </ul>
        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

    <script src="myscript.js"></script>
</body>
</html>
