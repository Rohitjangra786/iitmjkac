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
    <title>IITM | Scholarships</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="../assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
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
     .committee-list {
        color: #000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
        text-align: justify;
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
             <h1 class="Text-center">Merit Scholarships</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                <a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/StudentGuide.php">Student Guide/Rule Book</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal/">Knowledge Portal (LMS)</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/Library/">Library</a>
                <a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/studentzone.php">Student Societies</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/campuslife/testimonials.php">Students' Testimonials</a>
                <a class="dropdown-item" href="https://iitmjanakpuri.com/scholarships/scholarships.php">Scholarships</a>
        </div>
        <div class="col-md-9">
    <div class="text-center mt-4">
       
         <p class="text-justify tgfmlt2" style="color: #4b4b4b;">With the intention of incentivizing future 
         leaders who aspire to establish themselves in prestigious positions 
         through diligence and perseverance, IITM offers the following Merit Scholarships.</p>
              <!--<h1 class="text-justify tgfmlt2" style="color: #4b4b4b;">PRE-ADMISSION MERIT SCHOLARSHIPS</h1>
              <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">One-time Pre-Admission Merit Scholarships, up to INR 1,00,000 each, are accessible solely based on academic merit (prior transcripts), a distinct career plan, and leadership potential exhibited by the candidate during their interview. Shortlisted candidates will be duly informed of their interview date well in advance before commencement of GGSIPU's last and final preference-filling.</h2>-->
              <h3 class="text-justify" style="color: #800000;">IN-HOUSE MERIT SCHOLARSHIPS</h3>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">Acknowledging and encouraging 
              brilliant academic performers, the Institute awards Merit Scholarships to 
              students based on their academic performance in University examinations. The details of scholarships are appended below.</p>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;margin-left: 2em;">
                  <ol class="committee-list">
                      <li class="lisch" style="list-style-type: upper-roman;">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-9">
                                      Annual Program-wise university Rank Holders, up to the first 
                                      three positions, provided the 2nd and 3rd rank holders are in 
                                      close proximity/within competitive range of the 1st position holder.
                                  </div>
                                  <div class="col-md-3">
                                      ₹ 25000/- (Annual)
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="lisch" style="list-style-type: upper-roman;">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-9">
                                      Program-wise University Toppers (IPU Gold Medal Awardees).
                                  </div>
                                  <div class="col-md-3">
                                      Matshree Leelawati Gold Medal (5gms, 24K Gold)
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="lisch" style="list-style-type: upper-roman;">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-9">
                                      University Exemplary Performance awardees
                                  </div>
                                  <div class="col-md-3">
                                      ₹ 10,000/- (Annual)
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="lisch" style="list-style-type: upper-roman;">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-9">
                                     Annual Subject – wise University Toppers
                                  </div>
                                  <div class="col-md-3">
                                      ₹ 500/- (Semester-wise)
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ol>
              </p>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;margin-left: 2em;">
                  <div class="container">
                      <div class="row">
                          <div class="col-md note">
                              <strong>Note: </strong><br/>
                              It is important to note that the In-House Merit Scholarships cited at S.No. (i) & (iv) above are applicable during the intermediary years 
                              only as these awardees during the terminal year are 
                              expected to vie for the University Gold Medal and Matshree Leelawati Gold Medal instituted by IITM.
                          </div>
                      </div>
                  </div>
              </p>
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