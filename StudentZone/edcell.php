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
    <title>ED Cell - IITM Janakpuri</title>

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
        .gallery-row {
            margin-bottom: 20px;
        }
        .gallery-row img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        

    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


    <div style="height: 5vh;"></div>
    <div class="container">
        <div>
            <h1>Entrepreneurship Development Cell - SAMRIDDHI</h1>
            <p class="text-justify">
              Samriddhi aims to cultivate an environment that inspires students to embark on new ventures. 
              The entrepreneurial spirit is nurtured through both formal and informal 
              programs, addressing the needs of aspiring entrepreneurs by raising awareness about the technical know-how necessary to initiate an enterprise.
            </p>
            <p class="text-justify">Samriddhi has undertaken a variety of activities including Entrepreneurship 
            Awareness Programs, Entrepreneurship Development Programs, Inter-College Business Plan Competitions, and CEO Talks. Furthermore, 
            Samriddhi has facilitated guest lectures by emerging entrepreneurs to inspire 
            students to translate their innovative ideas into tangible products and services.</p>
            <p class="text-justify">IITM collaborates with the National Institute for 
            Entrepreneurship and Small Business Development (NIESBUD) and 
            the National Small Industries Corporation (NSIC) to conduct entrepreneurial programs.</p>

        </div>

      
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                        <div class="gallery-row">
            <img src="images/edcell1.jpeg" alt="Wide Image 1">
        </div>
            </div>
            <div class="col-md">
        <div class="gallery-row">
            <img src="images/edcell2.jpeg" alt="Wide Image 2">
        </div>
            </div>
            <div class="col-md">
                        <div class="gallery-row">
            <img src="images/edcell3.png" alt="Wide Image 3">
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