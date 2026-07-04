<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = window.location.origin + "/index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vision & Mission</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <link rel="canonical" href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php" />
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}

        p{
            color: #000;
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
            color: #800000;
            margin-bottom: 15px;
        }


    .committee-list {
        color: #800000;
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

<div class="container text-center mb-4">
    <div class="row">
        <div class="col-md"> 
          <img src="http://iitmjanakpuri.com/aboutus_new/images/iitmimage_1.jpg" alt="Institute's Image" class="img-fluid" style="height: 550px; width: 550px; max-width: 100%; height: auto; border-radius: 10px; padding: 0;">
        </div>  
        <div class="col-md"> 
           <img src="http://iitmjanakpuri.com/aboutus_new/images/iitmimage_2.jpg" alt="Institute's Image" class="img-fluid" style="height: 550px; width: 550px; max-width: 100%; height: auto; border-radius: 10px; padding: 0;">
        </div>  
        <div class="col-md"> 
           <img src="http://iitmjanakpuri.com/aboutus_new/images/iitmimage_3.jpg" alt="Institute's Image" class="img-fluid" style="height: 550px; width: 550px; max-width: 100%; height: auto; border-radius: 10px; padding: 0;">
        </div>

</div>
  
</div>
    <div class="container-fluid">
        <div>
            <h1></h1>
            <p>
                <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding: 5px; background-color: #add8e6;">
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
                 <h1 class="text-center">Vision</h1><hr>
                  <p>
                “The Institute aims to be a Centre of Excellence, 
                promoting value based quality education in the contemporary areas of advanced professional studies in Information Technology, Management and Media studies.”
            </p>
            <h1 class="text-center">Mission</h1><hr>
             <p>IITM endeavours:</p>
            <ol class="committee-list">
<li> To promote a learning environment that delivers students with up-to-date curriculum & pedagogy, 
equipping them with strong analytical mind, thinking ability, entrepreneurial and organizational skills required in a dynamic professional environment.</li>
<li>To foster strategic alliances with industry for real-time business exposure.</li>
<li>To inculcate human values like ethical, social, and moral values amongst students.</li>
        </ol>
        </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-9">
                         <h1 class="text-center">Quality Policy</h1><hr>
         <p>
               The IITM is committed to promoting value-based, 
               high-quality education with a motto of 'Nurturing Excellence.' 
               In its relentless pursuit of excellence and commitment to maintaining the 
               integrity of our mission, the Institute consistently enhances its pedagogy,
               infrastructural facilities, and student support systems. 
               The institute ensures holistic student development by 
               implementing continuous comprehensive evaluation and 
               monitoring of students' progress and development. 
               Understanding education's role 
               as a 'Nation-Building Mission,' 
               the institute embeds responsiveness, 
               transparency, and accountability as fundamental principles in all endeavors to achieve objectives and acknowledges the pivotal role of education in shaping our nation/ country’s development.
            </p>
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
