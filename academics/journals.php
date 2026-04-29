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
    <title>IITM | Journal</title>

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
            <h1 id="iipc">Journal</h1>
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
             <!-- Boxes section -->
  <p class="text-justify">
                    The IITM Journal of Management and IT constitutes a bi-annual research publication affiliated with the Institute of Information 
                    Technology and Management (accredited by NAAC & certified by ISO), established and overseen by Mata Leelawati Sikshan Sansthan,
                    New Delhi. This journal operates under a blind peer-review process, aiming to disseminate the experiences, ideas, and case 
                    
                    studies of professionals within the fields of Management and Information Technology, thereby fostering enhanced comprehension 
                    and dissemination of knowledge. The primary focus of the journal lies in empirical, applied research, and reflective analyses 
                    that hold relevance for professionals in the fields of Management and Information Technology, adhering to academic standards and rigor within its purview.
                </p>
                <p class="text-justify">
                     The viewpoints presented within the Journal reflect those of the respective authors. The editor, 
                     editorial board, editorial advisory board, and the institute hereby disclaim responsibility and 
                     liability for any statements of fact, opinions, and originality of content, as well as any potential 
                     violation of copyright by the authors. Reproduction of any part of this publication in any form is strictly 
                     prohibited without the prior written consent of the publisher.
               
                </p>
                <p class="text-justify">
                    The soft copy can be mailed at :- <i class="fa fa-envelope" aria-hidden="true"></i>journal@iitmipu.ac.in
                
                </p>
                <p class="text-justify">
                    Subscription form download link :- <a href="https://www.iitmjanakpuri.com/iitmjournal/docs/SubscriptionForm.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download Subscriptioin Form</a>

                </p>
                <h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;"><strong>Website Link to IITM Online Journals:-</strong></h2>
                <p class="text-justify">The Journal is also available online at the link <a href="http://www.iitmjanakpuri.com/iitmjournal/" target="_blank"><i class="fa fa-link" aria-hidden="true">
                    
                </i> www.iitmipujournal.org</a></p>
               <!-- <h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;"><strong>Advisory Board Members</strong></h2>
                <p class="text-justify">
                <ul class="committee-list" style="margin-left: 2em;">
                	<li style="list-style:disc;">Prof (Dr) Krishna S. Dhir Dean, College of Business and Economics University of Hawaii at Hilo 200 W. Kawili Street Hilo, Hawaii 96720-4091, USA</li>
                	<li style="list-style:disc;">Prof (Dr) Madhu Vij Professor, Faculty of Management Studies University of Delhi</li>
                	<li style="list-style:disc;">Prof (Dr) R. K. Mittal Vice Chancellor, Ch. Bansi Lal University, Bhiwani</li>
                	<li style="list-style:disc;">Prof (Dr) B S Nagi Ex-Director Research Council of Social Development, New Delhi</li>
                	<li style="list-style:disc;">Prof (Dr) V A Eshwar Professor and Managing Director Saai Consultants, New Delhi</li>
                	<li style="list-style:disc;">Prof. (Dr.) P. D. Kaushik Ex. Pro-Vice Chancellor Teerthanker University Moradabad</li>
                	<li style="list-style:disc;">Dr. Anupam Narula, Associate Professor, Marketing FORE School of Management New Delhi</li>
                	<li style="list-style:disc;">Dr. Indu Uprety, Associate Professor, School of Management, Gautam Buddha University, Noida</li>
                	<li style="list-style:disc;">Dr. P.K. Singh Professor Course Director, Master of Banking & Insurance University College of Commerce & Management Studies Mohan Lal Sukhadia University, Udaipur</li>
                	<li style="list-style:disc;">Prof. Som Deo Former Dean, Faculty of Commerce University of Rajasthan, Jaipur.</li>
                </ul>-->
                </p>
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