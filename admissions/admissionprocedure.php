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
    <title>IITM | Admissions</title>

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
            font-size: 20px;
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

   <div style="height: 5vh"></div>
    <div class="container">
        
 <div class="container">
     <div class="row">
          <h1>Admission Procedure</h1>
     </div>
     <div class="row">
          <div class="col-md-3" style="padding: 5px; background-color: #add8e6;">
               <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details (UG & PG)</a>
                    <a class="dropdown-item" href="https://forms.gle/m7tJHZE7cEkZXEGu5">Enquiry</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/fee.php">Online Fees Payment</a>
            </div>
         <div class="col-md-6">
             <div>
           
            <p class="text-justify">
                The institute conducts admissions based primarily on merit through a Common Entrance Test (CET) administered by GGSIP University. 
                The University facilitates centralized online counselling for all affiliated colleges, during which students must select their preferred College/Institute. 
                Application forms can be obtained by referring to the University's advertisements in national newspapers or by visiting its website:
                <a href="https://ipu.admissions.nic.in/">www.ipuadmissions.nic.in</a> or <a href="http://www.ipu.ac.in/">www.ipu.ac.in</a>
            </p>
        </div>
         </div>
         <div class="col-md-3">
              <div class="quick-links">
            <h2>Quick Links</h2>
            <a href="docs/Check List_u1.pdf" target="_blank">List of Documents</a><br>
            <a href="https://iitmjanakpuri.com/admissions/docs/PG 2026-27.pdf">Admission Brochure-PG</a><br>
            <a href="https://iitmjanakpuri.com/admissions/docs/UG 2026-27.pdf">Admission Brochure-UG</a><br>
            <a href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details</a>
            
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