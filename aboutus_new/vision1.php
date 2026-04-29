<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD || performance.getEntriesByType("navigation")[0].type === "back_forward")) {';
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
    <link rel="stylesheet" href="styles/style2.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #fff;
            font-family: Georgia, Arial, sans-serif;
        }
        .logo {
            height: 100px;
            width: 150px;
            margin-top: 50px;
        }

        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 10px;
        }

        .vision-mission-section {
            margin: 20px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-left: 5px solid #800000;
            border-radius: 10px;
        }

        .vision-mission-section h2 {
            color: #800000;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .vision-mission-section p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            color: #800000;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            color: #800000;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f2f2f2;
            color: #800000;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: teal;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .badge-number {
    display: inline-block;
    background-color: #800000;
    color: #fff;
    padding: 5px 10px;
    border-radius: 50%;
    font-size: 14px;
    margin-right: 10px;
    font-weight: bold;
}

.login-button {
    background-color: #800000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 20px;
    display: inline-block;
}

.login-button:hover {
    background-color: #660000; /* Darker shade for hover effect */
    color: #fff;
}
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="../logow.png" alt="IITM Logo" class="logo">
                </div>
                <div class="col-md-10">
                    <center>
                        <h1 class="hero-title"><b>INSTITUTE OF INFORMATION TECHNOLOGY & MANAGEMENT</b></h1>
                        <p>Accredited ‘A’ Grade by NAAC & Recognised U/s 2(f) of UGC act<br>
                           Rated Category 'A+' by SFRC & 'A' by JAC Govt. of NCT of Delhi<br>
                           Approved by AICTE & Affiliated to GGS Indraprastha University, New Delhi</p>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision and Mission Section -->
    <div class="container vision-mission-section">
        <h2>Vision</h2>
        <p>“The Institute aims to be a Centre of Excellence, promoting value based quality education in the contemporary areas of advanced professional studies in Information Technology, Management and Media studies.”</p>
        
        <h2>Mission</h2>
        <p>IITM endeavours:</p>
        <p>
            <span class="badge badge-number" style="color:#fff; background:#800000;">1</span> to promote a learning environment that delivers students with up-to-date curriculum & pedagogy, equipping them with strong analytical mind, thinking ability, entrepreneurial and organizational skills required in a dynamic professional environment.</li>
            <br><span class="badge badge-number" style="color:#fff; background:#800000;">2</span> to foster strategic alliances with industry for real-time business exposure.</li>
            <br><span class="badge badge-number" style="color:#fff; background:#800000;">3</span> to inculcate human values like ethical, social, and moral values amongst students.</li>
        </p>

    </div>


    <script src="myscript.js"></script>
</body>
</html>
