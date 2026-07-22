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
    <title>Value Added Courses & Skills | IITM Janakpuri </title>
    <meta name="description" content="Explore value added courses at IITM Janakpuri designed to enhance practical skills, industry knowledge, and career opportunities for students across all programmes.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
        html, body * {
            box-sizing: border-box;
            font-family: Georgia, 'Open Sans', sans-serif;
        }

        p {
            text-align: justify;
        }

        .main-title {
            color: #800000;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            color: #555;
            max-width: 800px;
            margin: 0 auto 40px auto;
            font-size: 1.1rem;
        }

        .course-card {
            background-color: #f9f9f9;
            border: 2px solid #800000;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(128, 0, 0, 0.2);
            background-color: #fff;
        }

        .course-badge {
            font-size: 2.2rem;
            color: #800000;
            margin-bottom: 15px;
        }

        .course-card h3 {
            color: #800000;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .course-card p {
            font-size: 0.95rem;
            color: #444;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-view-courses {
            background-color: #800000;
            color: #fff;
            padding: 10px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: background 0.3s;
        }

        .btn-view-courses:hover {
            background-color: #600000;
            color: #fff;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div class="container my-5">
        <h1 class="main-title">Value Added Courses</h1>
        <p class="subtitle">
            The Institute of Information Technology and Management conducts specialized Value-Added Courses (VACs) tailored for each programme to enhance technical capabilities, analytical thinking, industry readiness, and overall employability beyond the core university curriculum.
        </p>

        <div class="row">
            <!-- MBA Card -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="course-card">
                    <div>
                        <div class="course-badge"><span class="material-symbols-outlined" style="font-size: 48px;">work</span></div>
                        <h3>MBA</h3>
                        <p>Master of Business Administration</p>
                    </div>
                    <div>
                        <a href="vac-mba.php" class="btn-view-courses">View Courses</a>
                    </div>
                </div>
            </div>

            <!-- MCA Card -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="course-card">
                    <div>
                        <div class="course-badge"><span class="material-symbols-outlined" style="font-size: 48px;">code</span></div>
                        <h3>MCA</h3>
                        <p>Master of Computer Applications</p>
                    </div>
                    <div>
                        <a href="vac-mca.php" class="btn-view-courses">View Courses</a>
                    </div>
                </div>
            </div>

            <!-- BBA Card -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="course-card">
                    <div>
                        <div class="course-badge"><span class="material-symbols-outlined" style="font-size: 48px;">analytics</span></div>
                        <h3>BBA</h3>
                        <p>Bachelor of Business Administration</p>
                    </div>
                    <div>
                        <a href="vac-bba.php" class="btn-view-courses">View Courses</a>
                    </div>
                </div>
            </div>

            <!-- BCA Card -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="course-card">
                    <div>
                        <div class="course-badge"><span class="material-symbols-outlined" style="font-size: 48px;">terminal</span></div>
                        <h3>BCA</h3>
                        <p>Bachelor of Computer Applications</p>
                    </div>
                    <div>
                        <a href="vac-bca.php" class="btn-view-courses">View Courses</a>
                    </div>
                </div>
            </div>

            <!-- BCOM Card -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="course-card">
                    <div>
                        <div class="course-badge"><span class="material-symbols-outlined" style="font-size: 48px;">payments</span></div>
                        <h3>B.COM (H)</h3>
                        <p>Bachelor of Commerce (Honours)</p>
                    </div>
                    <div>
                        <a href="vac-bcom.php" class="btn-view-courses">View Courses</a>
                    </div>
                </div>
            </div>

            <!-- BAJMC Card -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="course-card">
                    <div>
                        <div class="course-badge"><span class="material-symbols-outlined" style="font-size: 48px;">newspaper</span></div>
                        <h3>BA (JMC)</h3>
                        <p>BA in Journalism & Mass Communication</p>
                    </div>
                    <div>
                        <a href="vac-bajmc.php" class="btn-view-courses">View Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

    <script src="myscript.js"></script>
</body>
</html>
