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
    <title> HR Forms & Faculty Resources | IITM Janakpuri </title>
    <meta name="description" content="Access HR forms and faculty resources at IITM Janakpuri for administrative support, documentation, and institutional processes.">
    
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
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: block;
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
    
.gradient-btn {
    display: inline-block;
    padding: 15px 20px;
    font-size: 20px;
    border-radius: 50%;
    background: linear-gradient(135deg, #fff8dc, #ffe4e1, #ffe0b2);
    color: #800000;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.2s ease;
}
.gradient-btn:hover {
    transform: scale(1.1);
    color: #a00000;
}
    </style>
</head>
<body>

    <?php include('../../naacheader.php'); ?>
    <?php include('../../n.php'); ?>

    <div style="height: 10vh;"></div>
<div class="container">
    <div class="row">

        <div class="col-md">

<div class="row justify-content-center text-center">
    <div class="col-md-5 mb-6">
        <p style="font-size: 16px; color: #800000;">
            Proforma for Research Grant (Journal Article and Patent)
        </p>
        <a href="ResearchGrant_JournalAricle.pdf" target="_blank" class="gradient-btn">
            <i class="fa fa-download"></i>
        </a>
    </div>

    <div class="col-md-5 mb-6">
        <p style="font-size: 16px; color: #800000;">
            Proforma for Research Grant for Books, Book Chapters & Conference Papers and Reimbursement
        </p>
        <a href="ResearchGrant_Books.pdf" target="_blank" class="gradient-btn">
            <i class="fa fa-download"></i>
        </a>
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