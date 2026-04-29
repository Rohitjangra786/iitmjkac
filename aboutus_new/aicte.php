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
    <title>IITM | AICTE</title>

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
            .eoa-links {
            list-style: none;
            padding: 0;
        }
        .eoa-links li {
            margin: 10px 0;
        }
        .eoa-links a {
            font-size: 18px;
            color: #800000;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }
        .eoa-links a:hover {
            color: #333;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div style="height: 5vh;"></div>
        <div class="value-added-section">
        <h1>Extension of Approval (EoA) Documents</h1>
        <ul class="eoa-links">
            <li><a href="http://iitmjanakpuri.com/aboutus_new/ai/Extension of Approval (EoA) 2025-26.PDF" target="_blank">Extension of Approval (EoA) 2025-26</a></li>
            <li><a href="http://iitmjanakpuri.com/aboutus_new/ai/Extension%20of%20Approval%20(EoA)%202024-25%20NE.PDF" target="_blank">Extension of Approval (EoA) 2024-25</a></li>
            <li><a href="http://iitmjanakpuri.com/aboutus_new/ai/Extension%20of%20Approval%20(EoA)%202023-24%20NE.PDF" target="_blank">Extension of Approval (EoA) 2023-24</a></li>
            <li><a href="http://iitmjanakpuri.com/aboutus_new/ai/Extension%20of%20Approval%20(EoA)%202022-23%20NE.PDF" target="_blank">Extension of Approval (EoA) 2022-23</a></li>
            <li><a href="http://iitmjanakpuri.com/aboutus_new/ai/Extension%20of%20Approval%20(EoA)%202021-22%20NE.PDF" target="_blank">Extension of Approval (EoA) 2021-22</a></li>
            <li><a href="http://iitmjanakpuri.com/aboutus_new/ai/Extension%20of%20Approval%20(EoA)%202020-21%20NE.PDF" target="_blank">Extension of Approval (EoA) 2020-21</a></li>
        </ul>
    </div>
    <?php
      include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>