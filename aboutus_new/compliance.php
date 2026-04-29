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

    <link href="../assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
            height: 100px;
            width: 150px;
            margin-top: 10px;
        }

        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 10px;
        }
        .hero-title{
            font-size: 25px;
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

/* Styles for the popup form */
.popup {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 128, 128, 0.5); /* Teal semi-transparent background */
    backdrop-filter: blur(5px); /* Blurred background */
}

.popup-content {
    margin: 10% auto; /* Centered */
    padding: 20px;
    border: none;
    border-radius: 15px;
    width: 80%;
    max-width: 500px;
    background: linear-gradient(135deg, #00B4DB, #0083B0); /* Attractive gradient background */
    color: white; /* Text color for contrast */
    position: relative; /* To position the close button */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Modern shadow for depth */
    text-align: center;
    animation: fadeIn 2s ease-in-out; /* Fade-in animation */
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

#logo img {
    display: block;
    margin: 0 auto 20px;
    max-width: 70%;
    height: auto;
}

.popup-elements {
    margin-top: 20px;
}

.close {
    color: #fff;
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s;
}

.close:hover,
.close:focus {
    color: white;
    background-color: #FF6347; /* Red color */
    border-radius: 50%;
    padding: 5px;
}

.popup-headings-h1, .popup-headings-course, #admission-link {
    margin: 10px 0;
}

.popup-headings-h1 {
    font-size: 2rem;
    font-weight: bold;
}

.popup-headings-course {
    font-size: 1.2rem;
}

#admission-text {
    color: #FFD700; /* Gold color for links */
    text-decoration: none;
    transition: all 0.3s;
}

#admission-text:hover {
    color: #FFA500; /* Orange color on hover */
}

#admission-link {
    font-weight: normal;
    font-size: 1rem;
}

#admission-link {
    border: 1px solid #FFD700;
    padding: 10px 0px;
    background-color: #FF6347;
    color: white;
    font-weight: bold;
    display: inline-block;
    width: 80%;
    text-align: center;
    margin: 20px auto 0;
    transition: all 0.3s;
}

#admission-link #admission-text {
    color: white;
    text-decoration: none;
}

#admission-link:hover {
    background-color: #FFA500;
}
.logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
/* Styles for the popup form */
    </style>
</head>
<body>
    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

<div style="height: 5vh;"></div>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1 class="text-center" id="iipc">Internal Quality Assurance Cell (IQAC)</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/vision.php">Vision</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/objectives.php">Objectives & Functions</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac/composition.php">Composition</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/iqac.php">Minutes</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/compliance.php">Compliance Reports</a>
                        <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aqar.php">AQAR</a>
        </div>
        <div class="col-md-9">
        <div class="container">
        <div>
            <div class="container">
              <h2 class="text-center">Compliance Reports</h2>
              <hr class="hr-maroon"/>
               <div class="row">
                 <div class="col-md">
       <table style="width: 100%;">
            <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 22<sup>nd</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR22nd.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						 <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 21<sup>st</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR21st.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 20<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR20th-protectedd.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					   
					</table>
                      
                      
                  </div>
              </div>

   </div>
        </div>
    </div>
        </div>
    </div>
</div>
      
       <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>

</div>
    <script src="myscript.js"></script>
</body>
</html>
