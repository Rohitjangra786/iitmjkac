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
             <h1 class="text-start" style="color: #800000;">Institution of Medals, Prizes and Awards to the Outstanding Students and Scholars</h1>
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
    <div class="text-start mt-4">
              <h3 class="text-start" style="color: #800000;">Scholarships &amp; Awards</h3>
         <p class="text-justify tgfmlt2" style="color: #4b4b4b;">With a view to incentivize the future leaders who aspire to carve a niche for themselves in high echelons by dint of sheer industry and perseverance, IITM takes pride in offering the following Merit Scholarships:</p>
              <h3 class="text-start" style="color: #800000;">I. PRE-ADMISSION MERIT SCHOLARSHIPS</h3>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">One-time Pre-Admission Merit Scholarship, up to INR 1,00,000, is available based purely on three criteria: (i) a consistent academic record (previous transcripts required), (ii) achieving 95% or above in Class XII, and (iii) providing a clear written statement of career plans and goals in no more than 1000 words. Interested candidates are requested to apply at IITM. Shortlisted candidates will be interviewed and notified of their interview date well in advance before the commencement of GGSIPU's last and final preference-filling phase.</p>
              <h3 class="text-start" style="color: #800000;">II. IN-HOUSE MERIT SCHOLARSHIPS</h3>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">To acknowledge and encourage brilliant academic performers, the Institute awards Merit Scholarships to the students based on their academic performance in the University examinations. The details of scholarships are appended below:</p>

              <div class="table-responsive">
                  <table class="table table-bordered align-middle" style="color: #333;">
                      <thead style="background-color: #800000; color: #fff;">
                          <tr>
                              <th scope="col" style="width: 6%; color: #fff;">S.No.</th>
                              <th scope="col" style="color: #fff;">Scholarship Criteria</th>
                              <th scope="col" style="width: 28%; color: #fff;">Award</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>i.</td>
                              <td>Annual Program-wise University Rank Holders, up to the first three positions, provided the 2nd and 3rd rank holders are in close proximity/within competitive range (maximum 0.5% marks deviation) of the 1st position holder.</td>
                              <td>&#8377; 25,000/- (Annual)</td>
                          </tr>
                          <tr>
                              <td>ii.</td>
                              <td>Program wise Institutional Toppers (Minimum 90% Marks).</td>
                              <td>&#8377; 15,000/- (Annual)</td>
                          </tr>
                          <tr>
                              <td>iii.</td>
                              <td>Program-wise University Toppers at the end of the program (IPU Gold Medal Awardees).</td>
                              <td>Institutional Gold Medal</td>
                          </tr>
                          <tr>
                              <td>iv.</td>
                              <td>University Exemplary Performance awardees (10 CGPA).</td>
                              <td>&#8377; 10,000/- (Annual)</td>
                          </tr>
                          <tr>
                              <td>v.</td>
                              <td>Annual Subject &ndash; wise University Toppers.</td>
                              <td>&#8377; 500/- (Semester-wise)</td>
                          </tr>
                      </tbody>
                  </table>
              </div>

              <div class="text-justify tgfmlt2" style="color: #4b4b4b; margin-left: 0;">
                  <strong>Note:</strong>
                  <p style="margin-bottom: 8px;">a) It is important to note that the In-House Merit Scholarships cited at S.No. (i) &amp; (v) above are applicable during the intermediary years only as these awardees during the terminal year are expected to vie for the University Gold Medal, and Institutional Gold Medal instituted by IITM (at S.No. iii).</p>
                  <p>b) A student shall be entitled only for one scholarship, i.e., the highest one he/she is eligible for.</p>
              </div>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">For more details, please visit: <a href="http://www.iitmjanakpuri.com">http://www.iitmjanakpuri.com</a></p>
              <h3 class="text-start" style="color: #800000;">III. MERIT CUM MEANS SCHOLARSHIP</h3>
              <div class="table-responsive">
                  <table class="table table-bordered align-middle" style="color: #333;">
                      <thead style="background-color: #800000; color: #fff;">
                          <tr>
                              <th scope="col" style="width: 6%; color: #fff;">S.No.</th>
                              <th scope="col" style="color: #fff;">Scheme</th>
                              <th scope="col" style="width: 28%; color: #fff;">Details</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>i.</td>
                              <td>Merit Cum Means Linked Financial Assistance Scheme</td>
                              <td><a href="http://www.iitmjanakpuri.com">www.iitmjanakpuri.com</a></td>
                          </tr>
                          <tr>
                              <td>ii.</td>
                              <td>Economically Weaker Section (EWS) Scheme</td>
                              <td><a href="http://www.iitmjanakpuri.com">www.iitmjanakpuri.com</a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <p class="text-justify tgfmlt2" style="color: #4b4b4b;">The value of the awards/prizes, eligibility criteria, selection methods, and payment procedures are subject to the approval and formulation from time to time by MLSS. The categories in which medals, prizes and awards are established are outlined below, with an objective of acknowledging diverse aspects of intellectual growth and holistic development:</p>
              <ol class="committee-list" style="margin-left: 1.5em;">
                  <li class="lisch" style="list-style-type: lower-roman;">Academics</li>
                  <li class="lisch" style="list-style-type: lower-roman;">Sports</li>
                  <li class="lisch" style="list-style-type: lower-roman;">Curricular and Extra-Curricular</li>
                  <li class="lisch" style="list-style-type: lower-roman;">Benevolent Prizes and Awards</li>
              </ol>
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