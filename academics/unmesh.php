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
    <title>IITM | Unmesh</title>

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

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-danger mb-4">Unmesh Archives (Monthly)</h1>
        </div>
    </div>
    <div class="row">
        <!-- List of Links -->
        <?php
       $months = [
    "June 2026", "May 2026", "April 2026", "March 2026", "February 2026", "January 2026",

    "December 2025", "November 2025", "October 2025", "September 2025", "August 2025", "July 2025",
    "June 2025", "May 2025", "April 2025", "March 2025", "February 2025", "January 2025",

    "December 2024", "November 2024", "October 2024", "September 2024", "August 2024", "July 2024",
    "June 2024", "May 2024", "April 2024", "March 2024", "February 2024", "January 2024",

    "December 2023", "November 2023", "October 2023"
];


        foreach ($months as $month) {
            $url = "http://www.iitmjanakpuri.com/academics/unmesh/" . str_replace(' ', '_', $month) . ".pdf";
            echo '<div class="col-md-4 mb-3">';
            echo '    <div class="card shadow border-danger">';
            echo '        <div class="card-body text-center">';
            echo '            <h5 class="card-title text-danger">' . $month . '</h5>';
            echo '            <a href="' . $url . '" class="btn btn-outline-danger" target="_blank">View PDF</a>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>