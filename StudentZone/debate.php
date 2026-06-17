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
    <title>Debate Society & Activities | IITM Janakpuri  </title>
    <meta name="description" content="Join the Debate Society at IITM Janakpuri to enhance public speaking, critical thinking, communication skills, and intellectual engagement.">

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

        .team-section {
            margin: 40px auto;
            max-width: 1200px;
        }

        .team-section .team-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-card {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .card {
            flex: 1 1 calc(33.333% - 20px);
            max-width: calc(33.333% - 20px);
            padding: 20px;
            text-align: center;
            border: 1px solid #800000;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-radius: 50%;
            width: 130px;
            height: 130px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            color: #800000;
            margin-bottom: 5px;
        }

        .card span {
            font-size: 14px;
            color: #555;
        }

        .card .sci {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .card .sci a {
            color: #800000;
            font-size: 18px;
            transition: color 0.3s;
        }

        .card .sci a:hover {
            color: #555;
        }

    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div style="height: 5vh;"></div>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h1 class="text-center">Debate and Literary Events Committee</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
            <p class="text-justify">
              The committee endeavors to instill a fervor for quizzing, debating, 
              creative writing, literature, and elocution among the students. 
              The events organized by the committee serve to enhance students' 
              creativity and logical thinking skills, while also encouraging independent research, thereby preparing them to explore realms beyond technology.
            </p>   
            <a href="https://www.iitmjanakpuri.com/StudentZone/policies/Debating_and_Literary_Committee_Policy.pdf" target="_blank" class="btn btn-lg btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Committee Policy
            </a>
                </div>
            </div>

        </div>

       <!-- <div class="team-section">
            <div class="team-header">
                <h1>Meet Our Team</h1>
            </div>

            <div class="team-card">
                <div class="card">
                    <img src="Photos/manan.png" alt="Manan Narwal">
                    <h3>Manan Narwal</h3>
                    <span>President</span>
                    <div class="sci">
                        <a href="https://www.linkedin.com/in/manannarwal/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/manan__narwal/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/manannarwal" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>

                <div class="card">
                    <img src="Photos/pratham.jpeg" alt="Pratham Aggarwal">
                    <h3>Pratham Aggarwal</h3>
                    <span>AI/ML Head</span>
                    <div class="sci">
                        <a href="https://www.linkedin.com/in/prathamaggarwal/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/iprattham/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/iprattham" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>

               
            </div>
        </div> -->
    </div>
    <div style="height: 5vh;"></div>
    <?php
       include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>