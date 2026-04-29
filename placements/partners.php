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
    <title>IITM | Placement Partners</title>

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
            <h1>Placement Partners</h1>
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
               <div id="carouselExampleSlidesOnly_pp" class="carousel slide" data-ride="carousel">
                   
                   <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#carouselExampleSlidesOnly_pp" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleSlidesOnly_pp" data-slide-to="1"></li>
        <li data-target="#carouselExampleSlidesOnly_pp" data-slide-to="2"></li>
    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                       <div class="row mt-30">
    <div class="col-md-3 mb-3">
        <img src="../placementpartners/pp1.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Second image and content goes here -->
                <img src="../placementpartners/pp2.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Third image and content goes here -->
                <img src="../placementpartners/pp3.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Fourth image and content goes here -->
                <img src="../placementpartners/pp4.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
</div>


                    </div>
                    <div class="carousel-item">
                          <div class="row mt-30">
    <div class="col-md-3 mb-3">
        <img src="../placementpartners/pp5.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Second image and content goes here -->
                <img src="../placementpartners/pp6.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Third image and content goes here -->
                <img src="../placementpartners/pp7.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Fourth image and content goes here -->
                <img src="../placementpartners/pp8.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
</div>
                       
                    </div>
                    
                    
                    
                    
                    
                    
                    
                </div>
                  <!-- Left and right controls -->
 <!-- Left and right controls -->

<a class="carousel-control-prev" href="#carouselExampleSlidesOnly_pp" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleSlidesOnly_pp" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
            </div>
              </div>
              
             
              
          
        </div>
    </div>
</div>
      
       <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>



      <section class="about-us">
        <div class="section-header">

         
          
          
        
          
          
      
        </div>
  



         
          
          
        
          
          
      
        </div>
      </section>

    <script src="myscript.js"></script>
</body>
</html>