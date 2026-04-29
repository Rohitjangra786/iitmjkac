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
    <title>IITM | Pragya</title>

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

    .gallery-item {
        position: relative;
        margin-bottom: 20px;
    }
    .gallery-item img {
        height: 300px; /* Adjust height as needed */
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            <h1 id="iipc">PRAGYA - Our Annual Students Magazine</h1>
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
        PRAGYA stands as the annual students' magazine of IITM, 
        symbolizing the culmination of all academic endeavors throughout 
        the year. Diverging significantly from the casual demeanor typical 
        of most student publications, PRAGYA projects a professional image. 
        It serves as a platform for students to exhibit their most acclaimed 
        projects, offering a distinguished avenue for the display of academic excellence. The diligent and extensive efforts exerted by students 
        during the execution of their projects are encapsulated within the pages of 
        PRAGYA, transforming these endeavors into academic exercises worthy of recognition.
    </p>
    <p class="text-justify">
        The journey embarked upon by students during their 
        summer internships or projects fosters an enriched knowledge base and a 
        deeper understanding of concepts, complemented by practical implementation. 
        PRAGYA further encompasses reflections on contemporary issues through essays 
        and debating topics, providing a platform for intellectual discourse. Moreover, 
        it offers a comprehensive overview of the activities organized at the Institute, contributing to a holistic portrayal of the academic environment.
    </p>
    <div class="row">
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="images/Magazine 2021-22.pdf" target="_blank">
                    <img src="images/prag22.jpg" alt="Volume 22" class="img-fluid">
                </a>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="images/Pragya Magazine 2022-23.pdf" target="_blank">
                    <img src="images/prag.JPG" alt="Sample 2021-1" class="img-fluid">
                </a>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="images/Final Magazine 2023-24.pdf" target="_blank">
                    <img src="images/mag 2023-24.png" alt="Sample 2022-1" class="img-fluid">
                </a>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="images/Final Magazine 2024-25..pdf" target="_blank">
                    <img src="images/magz202425.PNG" alt="Sample 2022-1" class="img-fluid">
                </a>
                
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