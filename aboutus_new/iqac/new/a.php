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
    <title>IITM | IQAC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style2.css">
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
            color: #000;
            margin-bottom: 15px;
        }

        .value-added-section ul {
            padding-left: 40px;
            color: #000;
            list-style: none;
        }

        .value-added-section ul li {
            margin-bottom: 10px;
            color: #000;
            position: relative;
            padding-left: 25px;
        }

        .value-added-section ul li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 15px;
            height: 15px;
            background: url('https://via.placeholder.com/15/800000/FFFFFF?text=>') no-repeat center center;
            background-size: contain;
        }

        .value-added-section ul ul {
            padding-left: 40px;
        }

        .value-added-section ul ul li::before {
            background: url('https://via.placeholder.com/15/000000/FFFFFF?text=>>') no-repeat center center;
            background-size: contain;
        }
    </style>
</head>
<body>

    <?php include('../../naacheader.php'); ?>
    <?php include('../../n.php'); ?>

    <div class="hero-section">
        <h1 class="hero-title">Internal Quality Assurance Cell (IQAC)</h1>
    </div>

  <div class="container">
      <ul>
          <li>A</li>
          <li>A</li>
          <li>A</li>
      </ul>
  </div>

    <script src="myscript.js"></script>
</body>
</html>
