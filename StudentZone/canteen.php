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
    <title>Canteen Committee - IITM Janakpuri</title>

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
        <div class="row">
            <div class="col-md">
                <h1 class="text-center">Canteen Committee</h1>                
            </div>
        </div>
        <div class="row">
            <div class="col-md">
            <p class="text-justify">
              
            </p>
            <p class="text-justify">Cultivating healthy eating habits not only enhances physical well-being but also fosters an environment conducive to improved learning outcomes.</p>                
            <p class="text-justify">The committee shall undertake the responsibility of regular visits to the canteen, meticulously monitoring and assessing its operations to ensure adherence to quality standards. Our aim is to provide a wide variety of high-quality food and beverages at competitive rates, promoting affordability without compromising on excellence.</p>  
            <p class="text-justify">Furthermore, the canteen committee endeavors to foster a sense of community by incorporating feedback from students, faculty, and staff to continually enhance the canteen experience. We are committed to promoting sustainability practices, such as reducing food waste and sourcing ingredients locally whenever possible, in alignment with our institution's values.</p>  
            <p class="text-justify">In addition, we aim to collaborate with local vendors and artisans to showcase regional specialties, enriching the culinary offerings available to our campus community. Through these initiatives, we aspire to transform the canteen into not just a place to eat, but a hub for social interaction, cultural exchange, and nourishment of both body and mind.</p>              
            <p class="text-justify"></p>  
            <a href="https://www.iitmjanakpuri.com/StudentZone/policies/Canteen_Policy.pdf" target="_blank" class="btn btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Committee Policy
            </a></div>
        </div>

     

    </div>
    <?php
       include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>