<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = "index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM Janakpuri</title>

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
            padding: 10px;
        }
        .hero-title{
            font-size: 20px;
        }
        .boxMain {
            margin: 20px;
        }

        .parentBox {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .box {
            flex: 0 0 48%;
            padding: 15px;
            text-align: center;
            border: 1px solid #800000;
            border-radius: 5px;
            background-color: #f9f9f9;
            transition: background-color 0.3s, transform 0.3s;
        }

        .box a {
            text-decoration: none;
            color: #800000;
            font-weight: bold;
        }

        .box:hover {
            background-color: #800000;
            color: white;
            transform: scale(1.05);
        }

        .box:hover a {
            color: white;
        }

        .box span {
            font-size: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .leftside {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .parentBox {
                flex-direction: column;
            }

            .box {
                flex: 1 0 auto;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
   <div style="height: 5vh"></div>
  <div class="container">
      <div class="row">
           <h1 class="text-center">Time Table: 2024-25</h1>
      </div>
      <div class="row">
           <div class="col-md-3" style="padding: 5px; background-color: #add8e6;">
               <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details (UG & PG)</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/faqs.php">FAQs</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/enquiry.php">Enquiry</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/management.php">Management Quota</a>
            </div>
                      <div class="col-md-9">
              <!-- Boxes section -->
              <div class="boxMain">
        <div class="parentBox">
            <div class="box leftside">
                <span class="material-symbols-outlined">library_books</span>
                <a href="https://iitmjanakpuri.com/academics/pdf/2425_oddsemester.pdf" target="_blank">Odd Semester</a>
            </div>
            <div class="box">
                <span class="material-symbols-outlined">library_books</span>
                <a href="https://iitmjanakpuri.com/academics/pdf/2425_evensemester.pdf" target="_blank">Even Semster</a>
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
