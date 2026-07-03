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
    <title>IITM | Publications</title>
 <link rel="canonical" href="https://www.iitmjanakpuri.com/academics/publications.php" />
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
        list-style-position: inside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #800000;
    }
 .gallery-container {
            margin-top: 30px;
        }
        .gallery-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .gallery-item {
            flex: 1;
            margin: 0 10px;
            position: relative;
        }
        .gallery-item img {
            width: 90%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }
        .gallery-item h5 {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            padding: 5px 10px;
            border-radius: 5px;
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
            <h1 id="iipc">JIGYASA - Our Bi-Annual Newslette</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/publications.php" id="pub" role="button">Publications</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/journals.php">Journals</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/unmesh.php">Unmesh</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pragya.php">Pragya</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/publications.php">Jigyasa</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/alumni/alumnimagazine.php">Alumni Magazine</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pdf/MBA_CorporateConnect.pdf" target="_blank">Corporate Connect</a>
        </div>
        <div class="col-md-9">
           <p class="text-justify">
                     The Institute of Information Technology and Management (IITM) releases its bi-annual 
                     newsletter, JIGYASA, at the conclusion of each semester. The July-December issue 
                     is published in January, while the January-June issue is released in July. JIGYASA serves as a platform to 
                     showcase events, achievements, results, placements, and offers a 
                     comprehensive overview of the semester's activities, providing readers with a diverse and informative perspective.
                 </p>
                 <h2>Issues</h2>
                 <div class="row">
              <div class="container mt-5 gallery-container">
        <h2 class="text-center mb-4">Newsletter</h2>
        <div class="gallery-row">
            <div class="gallery-item">
                <a href="http://www.iitmjanakpuri.com/academics/images/1.pdf" target="_blank">
                    <img src="images/jigyasa_1.png" alt="Volume 22">
                </a>
                <h5>Volume-24, Issue-1</h5>
            </div>
            <div class="gallery-item">
                <a href="http://www.iitmjanakpuri.com/academics/images/2.pdf" target="_blank">
                    <img src="images/jigyasa2.png" alt="Volume 23">
                </a>
                <h5>Volume-23, Issue-2</h5>
            </div>
        </div>
        <h2 class="text-center mb-4"></h2>
        <div class="gallery-row">
            <div class="gallery-item">
                <a href="http://www.iitmjanakpuri.com/academics/images/3.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/jigyasa3.png" alt="Sample 2021-1">
                </a>
                <h5>Volume-23, Issue-1</h5>
            </div>
            <div class="gallery-item">
                <a href="http://www.iitmjanakpuri.com/academics/images/4.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/jigyasa4.png" alt="Sample 2021-2">
                </a>
                <h5>Volume-22, Issue-1</h5>
            </div>
        </div>
        <h2 class="text-center mb-4"></h2>
        <div class="gallery-row">
            <div class="gallery-item">
                <a href="http://www.iitmjanakpuri.com/academics/images/5.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/jigyasa5.png" alt="Sample 2022-1">
                </a>
                <h5>Volume-22, Issue-2</h5>
            </div>
            <div class="gallery-item">
                <a href="http://www.iitmjanakpuri.com/academics/images/6.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/jigyasa6.png" alt="Sample 2022-2">
                </a>
                <h5>Volume-21, Issue-2</h5>
            </div>
        </div>
    </div>

         </div>
        </div>
    </div>
</div>
<div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
     
    <script src="myscript.js"></script>
</body>
</html>