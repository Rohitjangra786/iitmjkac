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
    <title>IITM | Essence</title>

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

    .gallery-item {
        position: relative;
        margin-bottom: 20px;
    }
    .gallery-item img {
        height: 300px; /* Adjust height as needed */
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .gallery-item h5 {
        position: absolute;
        bottom: 10px;
        left: 10px;
        color: white;
        background: rgba(0, 0, 0, 0.6);
        padding: 5px 10px;
        border-radius: 5px;
    }

    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


     <div style="height: 10vh"></div>
     <div class="container mt-5 gallery-container">
    <h2 class="text-center mb-4">Essence</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="https://www.iitmjanakpuri.com/academics/pdf/Essence_2023_24.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/Essence23_24.png" alt="Volume 22" class="img-fluid">
                </a>
                <h5>Essence - 2023-24</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="http://iitmjanakpuri.com/academics/pdf/Essence_2023_24.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/Essence23_24.png" alt="Sample 2021-1" class="img-fluid">
                </a>
                <h5>Essence - 2022-23</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="http://iitmjanakpuri.com/academics/pdf/Essence_2023_24.pdf" target="_blank">
                    <img src="http://iitmjanakpuri.com/academics/images/Essence23_24.png" alt="Sample 2022-1" class="img-fluid">
                </a>
                <h5>Essence - 2021-22</h5>
            </div>
        </div>
    </div>
</div>



     
    <script src="myscript.js"></script>
</body>
</html>