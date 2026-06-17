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
    <title> Student Forms  | IITM Janakpuri  </title>
    <meta name="description" content="Access student forms at IITM Janakpuri for applications, academic requests, official documentation, and other important student services.">

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


    .committee-list {
        color: #800000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: block;
                color: #800000;
    }
    
    
    .center-row-mg {
      display: flex;
      justify-content: center;
    }

    .col-md-6 {
      text-align: center;
    }

    .img-wrapper-mg {
      max-width: 300px; /* Adjust the image width as per your preference */
      
      width: auto;
      margin: 0 auto;
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
            
        </div>
    </div>
    <div class="row">
                <a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/StudentGuide.php">Student Guide/Rule Book</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal/">Knowledge Portal (LMS)</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/Library/">Library</a>
                <a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/studentzone.php">Student Societies</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/campuslife/testimonials.php">Students' Testimonials</a>
                <a class="dropdown-item" href="https://iitmjanakpuri.com/scholarships/scholarships.php">Scholarships</a>
        </div>
<div class="col-md-9">
    <div class="text-center mt-4">
        <h2 class="mb-4">Student Forms</h2>
        <ul class="committee-list">
            <li style="margin-bottom: 10px;">
                <a href="https://iitmjanakpuri.com/StudentZone/pdf/ClearanceForm.pdf" target="_blank" style="text-decoration: none; color: #800000; font-size: 18px; font-weight: bold;">
                    Clearance Form
                </a>
            </li>
            <li style="margin-bottom: 10px;">
                <a href="https://iitmjanakpuri.com/StudentZone/pdf/migrationform.pdf" target="_blank" style="text-decoration: none; color: #800000; font-size: 18px; font-weight: bold;">
                    Migration Form
                </a>
            </li>
            <li style="margin-bottom: 10px;">
                <a href="https://iitmjanakpuri.com/StudentZone/pdf/dropcaseform.pdf" target="_blank" style="text-decoration: none; color: #800000; font-size: 18px; font-weight: bold;">
                    Drop Case Form
                </a>
            </li>
            <li style="margin-bottom: 10px;">
                <a href="https://www.iitmjanakpuri.com/faculty/FacultyForms/hrforms.php" target="_blank" style="text-decoration: none; color: #800000; font-size: 18px; font-weight: bold;">
                   Research Grant Forms
                </a>
            </li>
        </ul></div>
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