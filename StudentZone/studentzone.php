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
    <link rel="stylesheet" href="../style2.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   
    <link rel="canonical" href="https://www.iitmjanakpuri.com/StudentZone/studentzone.php" />
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
            display: block;
            text-decoration: none;
            color: #800000;
            font-weight: bold;
            cursor: pointer;
        }

        .box:hover,
        .box:focus {
            background-color: #800000;
            color: white;
            transform: scale(1.05);
            text-decoration: none;
        }

        .box .material-symbols-outlined {
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

    <div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        
        <div class="col-md">
            <h2 class="text-center mb-4">Student Societies</h2>
        </div>
    </div>
    <div class="row">
       
<div class="col-md">
    <div class="text-center mt-4">
        
<div class="container">
    <!-- Boxes section -->
    <div class="boxMain">

        <div class="parentBox">
            <a class="box leftside" href="https://iitmjanakpuri.com/StudentZone/nss.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                NSS
            </a>
            <a class="box" href="https://iitmjanakpuri.com/StudentZone/ncc.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                NCC
            </a>
        </div>

        <div class="parentBox">
            <a class="box leftside" href="https://iitmjanakpuri.com/StudentZone/sdc.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Incubation Center
            </a>
            <a class="box" href="https://iitmjanakpuri.com/StudentZone/debate.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Debate and Literary Committee
            </a>
        </div>

        <div class="parentBox">
            <a class="box leftside" href="https://iitmjanakpuri.com/StudentZone/cultural.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Cultural Committee
            </a>
            <a class="box" href="https://iitmjanakpuri.com/StudentZone/esc.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Environment &amp; Sustainability Committee
            </a>
        </div>

        <div class="parentBox">
            <a class="box leftside" href="https://iitmjanakpuri.com/StudentZone/edcell.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Entrepreneurship Development Cell
            </a>
            <a class="box" href="https://iitmjanakpuri.com/StudentZone/sports.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Sports Committee
            </a>
        </div>

        <div class="parentBox">
            <a class="box leftside" href="https://iitmjanakpuri.com/fiesta2k25/" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Fiesta
            </a>
            <a class="box" href="https://iitmjanakpuri.com/StudentZone/mclub.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Management Club
            </a>
        </div>
        <div class="parentBox">
            <a class="box leftside" href="https://iitmjanakpuri.com/StudentZone/emc.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Event Management Committee
            </a>
            <a class="box" href="https://iitmjanakpuri.com/StudentZone/canteen.php" target="_blank">
                <span class="material-symbols-outlined">library_books</span>
                Canteen Committee
            </a>
        </div>
    </div>
  </div>
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
