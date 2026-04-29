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
    <title>IITM | Director</title>

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

        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
        p{
            text-align: justify;
        }
        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .hero-title {
            font-size: 14px; /* Reduced font size */
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
            line-height: 1.5;
        }

        .value-added-section h1 {
            font-size: 10px; /* Reduced font size */
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 7px; /* Further reduced font size */
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

        .carousel-inner {
            max-width: 70vw; /* Restored carousel width */
            margin: 0 auto;
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1); /* Fast and smooth sliding transition */
        }

        .carousel-item img {
            max-height: 300px; /* Restored carousel image height */
            width: auto;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


<div style="height:5vh"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="col-md col-sm-offset-4 text-center">
					<img src="images/IMG_3178.JPG" class="img-responsive img-thumbnail mt-30" style="width: 60%; height: 80%;border: 3px solid #5c4033;border-radius: 3px;">
				</div>
        </div>
    </div>
</div>

    <div class="container">
        <div>
            <h1></h1>
            <p>
                <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding: 3px; background-color: #add8e6;height: 450px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/history.php">History</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php">Vision & Mission</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/chairman.php">Chairman</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/director.php">Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/executive_director.php">Executive Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/administration.php">Management and Administration</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/rollofhonor.php">Students Rolls of Honor</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/milestone.php">Milestone</a><br>    
            </div>
            <div class="col-md-9">
                 <h1 class="text-center">Director</h1><hr>
                 <h2 class="text-center">Prof. (Dr.) Rachita Rana</h2><hr>
                  <p class="text-justify" style="color: #4b4b4b;font-size: 20px;">Professor (Dr.) Rachita Rana epitomizes 
              a dedicated educationist with over 24 years of extensive experience in 
              both teaching and research. Her illustrious career includes serving as an Evaluator of 
              Research Projects in Economics for the Indian Council of Social Science Research in New Delhi.</p>
<p class="text-justify" style="color: #4b4b4b;font-size: 20px;">With a distinguished portfolio, she has held 
pivotal roles as Professor and Director at renowned management institutes nationwide, such as Maharaja Surajmal 
Institute (MSI), TASMAC affiliated with the University of Wales, Institute of Information Technology & Management 
(IITM), and esteemed institutes within the BalaJi group in Pune.</p>  
<p class="text-justify" style="color: #4b4b4b;font-size: 20px;">Her academic prowess is underscored by her impressive credentials, 
including a Ph.D. and MA in Economics, an MBA specializing in Marketing, and a Postdoctoral Fellow from the Indian Council of Social Science Research (ICSSR), 
demonstrating her expertise in economics and management. She has been Ph.D. examiner at various universities. Three students have been awarded Ph.D. under her guidance.</p>
<p class="text-justify" style="color: #4b4b4b;font-size: 20px;">Professor Rana's contributions extend beyond academia, as she has been instrumental in industry consultancy 
projects and spearheaded numerous major research endeavors funded by the Indian Council of Social Science Research under the Ministry of Human Resource Development.</p> 
<p class="text-justify" style="color: #4b4b4b;font-size: 20px;">A prolific author and editor, she has authored seven books, 
edited six others, and amassed a remarkable collection of over 59 research papers published in reputable journals, book chapters, and conference proceedings. 
Furthermore, her guidance and evaluation have shaped the academic journeys of MBA candidates at the University of Wales, UK, where she served as a guide and evaluator.</p>
<p class="text-justify" style="color: #4b4b4b;font-size: 20px;">Recognized for her outstanding contributions, 
Professor Rana was honoured with the 'Principal of the Year' award by the Universal Mentors Association in 
2022 and bestowed the title of 'Incredible Academician of India' by Record Owners in 2021.</p>
 <p class="text-justify" style="color: #4b4b4b;font-size: 20px;">Additionally, her leadership and 
 expertise were valued by the Surajmal Memorial Education Society (SMES), where she served as Secretary of the Higher Education Advisory Committee 
 from 2019 to 2022. Notably, her involvement as an expert in developing SMES's Service Policy Manual underscored her commitment to shaping educational policies and practices.</p>
           
            </div>
          
        </div>
    </div>
            </p>
        </div>


    </div>

     
<?php
   include("../naacfooter.php");
?>
    <script src="myscript.js"></script>
</body>
</html>
