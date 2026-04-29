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
    <title>IITM | Events</title>

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
        list-style-position: inside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
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
            <div class="col-md">
                <h1 class="text-center">
                    Alumni Magazine
                </h1>
                <h2>Institute of Information Technology & Management Alumni Association (Regd.)</h2>
                <hr>
                <p class="text-justify">
                    ESSENCE - Alumni Magazine is an annual publication released by IITM Alumni Association. 
                    Main motive is to stay connected with our beloved Alumni and it also serves a purpose to connect our Alumni with their junior 
                    batches in the Institute currently pursuing respective courses. 
                    It gives a unique platform to our Alumni to share valuable experience & thoughts with their juniors and fellow Alumni too.
                </p>
                <p class="text-justify">
                    <strong>We look forward to many more fruitful points of connect with our Alumni.</strong>
                </p>
                 <div class="row center-row-mg">
    <div class="col-md-6">
      <div class="img-wrapper-mg">
        <a href="magazines/Essence_vol1.pdf" target="_blank">
          <img src="magazines/2020-21 (1).JPG" class="img-fluid" alt="Image 1">
        </a>
      </div>
      <h2>
        <a href="magazines/Essence_vol1.pdf" target="_blank">Volume 1 : Academic Session 2020-21</a>
      </h2>
    </div>
    
    
     <div class="col-md-6">
      <div class="img-wrapper-mg">
        <a href="magazines/Essence_vol2.pdf" target="_blank">
          <img src="magazines/vol2 (1).png" class="img-fluid" alt="Image 1">
        </a>
      </div>
      <h2>
        <a href="magazines/Essence_vol2.pdf" target="_blank">Volume 2 : Academic Session 2021-22</a>
      </h2>
    </div>
    <br><br>
    
    <div class="col-md-6">
      <div class="img-wrapper-mg">
        <a href="magazines/Alumni Magazine-1.pdf" target="_blank">
          <img src="magazines/2022-23 essence.PNG" class="img-fluid" alt="Image 3">
        </a>
      </div>
      <h2>
        <a href="magazines/Alumni Magazine-1.pdf" target="_blank">Volume 3 : Academic Session 2022-23</a>
      </h2>
    </div>
  </div>
            </div>
        </div>
    </div>
    <?php
      include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>