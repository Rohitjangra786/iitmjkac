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
    <title> IIPC Placements & Career Support | IITM Janakpuri </title>
    <meta name="description" content="Explore IIPC placements at IITM Janakpuri with top recruiters, internships, career guidance, industry partnerships, and job opportunities.">

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
            <h1 id="iipc">Industry Institute Partnership Cell (IIPC)</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/placements.php">IIPC</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/partners.php">Placement Partners</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/recruiters.php">Recruiters Speak</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/plrecords.php">Placement Records</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/summertraining.php">Summer Training Records</a>
                <a class="dropdown-item" href="https://www.iitminternware.com/">Internship Cell</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/images/IITM%20Brochure%20(final).pdf">Brochure</a>
        </div>
        <div class="col-md-9">
            <div class="container">
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">
              The Industry Institute Partnership Cell (IIPC) of IITM was established in 2004 with the aim of 
              strengthening the collaboration between the institute and the industry. This center plays a 
              pivotal role in identifying industrial expectations and fostering institutional readiness to meet 
              industrial demands by facilitating internships, seminars, workshops, placements, and various other 
              industrial training programs. The partnership between the industry and the institute is also evident 
              in equipping faculty members with the latest practices and ensuring that students are prepared for the 
              industry by exposing them to current industry standards and practices. The IIPC aids students in refining 
              their skills to adeptly navigate evolving technologies. Its principal objective is to engage with prominent 
              companies spanning various industries to forge partnerships in the near future. Meanwhile, the Central Training 
              and Placement (T&P) Cell is dedicated to fulfilling students' career aspirations and addressing the human 
              resource requirements of organizations interested in conducting campus interviews for the placement of graduating students from IITM. </p>
             
              <h1 class="text-justify tgfmlt2" style="color: #4b4b4b;">The objectives of the cell are:</h1>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">
                  <div class="container" style="margin-left: 2em;">
                  <ul class="committee-list">
                      <li style="list-style-type: disc;">To organize pre-placement training for students.</li>
	                  <li style="list-style-type: disc;">To identify opportunities for students to engage in project work within industries.</li>
	                  <li style="list-style-type: disc;">To encourage department-level partnerships or Memoranda of Understanding (MoUs) with industries for mutual benefit.</li>
	                  <li style="list-style-type: disc;">To enhance the teaching-learning process through identified industrial training or visits.</li>
	                  <li style="list-style-type: disc;">To invite industry experts for guest lectures, seminars, and knowledge sharing sessions.</li>
	                  <li style="list-style-type: disc;">To assist the industry in the selection of suitable candidates to fill up job positions through campus interviews and provide career guidance to students.</li>
                  </ul></div>
              </p>
              <div class="container text-center">
                  <img class="img-responsive img-fluid" src="images/iipc.jpg"/>
              </div>
         
              
              
            
              
              
              
              <div style="height: 5vh;"></div>
              
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