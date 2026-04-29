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
                 .committee-list {
        color: #800000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
        text-align: justify;
        line-height:1;
    }
    </style>
</head>
<body>

    <?php include('../../naacheader.php'); ?>
    <?php include('../../n.php'); ?>

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
            <h2 class="text-center">Objectives</h2>
              <ol class="committee-list">
                <li>To develop a quality culture and enhance institutional functioning.</li><br>
                <li>To promote measures for continual improvement in academic and administrative performance.</li><br>
                <li>To encourage innovations in teaching-learning, research, and extension activities.</li><br>
                <li>To ensure timely, efficient, and progressive performance of academic, administrative, and inancial tasks.</li><br>
                <li>To ensure the optimal utilization of resources and their maintenance.</li><br>
                <li>To promote transparency and accountability in all activities.</li><br>
                <li>To coordinate quality-related activities and interactions with external quality assessment bodies.</li><br>
            </ol>
            <h2>Functions</h2>
            <ol class="committee-list">
                <li><b>Development and Application of Quality Benchmarks:</b>
                    <ul>
                        <li>Develop and apply quality benchmarks/parameters for various academic and administrative activities.</li><br>
                        <li>Facilitate the creation of a conducive environment for quality teaching and research.</li><br>
                    </ul>
                </li>
                <li><b>Facilitating the Creation of a Learner-Centric Environment:</b>
                    <ul>
                        <li>Ensure learner-centric practices in teaching-learning processes.</li><br>
                        <li>Promote effective student support services for holistic development.</li><br>
                    </ul>
                </li>
                <li><b>Dissemination of Information:</b>
                    <ul>
                        <li>Document and disseminate information on various quality parameters.</li><br>
                        <li>Organize workshops, seminars, and training programs for faculty and staff on quality-related themes.</li><br>
                    </ul>
                </li>
                <li><b>Organizing Feedback Mechanisms:</b>
                    <ul>
                        <li>Develop feedback mechanisms for various academic and administrative activities.</li><br>
                        <li>Analyze and utilize feedback for continuous improvement.</li><br>
                    </ul>
                </li>
                <li><b>Ensuring Integrity and Ethical Practices:</b>
                    <ul>
                        <li>Promote the values of academic integrity and ethical practices.</li><br>
                        <li>Monitor adherence to norms and regulations in all functional areas.</li><br>
                    </ul>
                </li>
                <li><b>Continuous Monitoring & Departmental Audits:</b>
                    <ul>
                        <li>Monitor the departmental strengths & weaknesses through effective processes.</li><br>
                    </ul>
                </li>
                <li><b>Development and Maintenance of Institutional Database:</b>
                    <ul>
                        <li>Develop and maintain an institutional database for management and analysis of data related to quality parameters.</li><br>
                    </ul>
                </li>
                <li><b>Preparation of Annual Quality Assurance Reports (AQAR):</b>
                    <ul>
                        <li>Prepare AQAR as per the guidelines and parameters provided by NAAC.</li><br>
                        <li>Ensure submission of AQAR to NAAC within the stipulated time.</li><br>
                    </ul>
                </li>
                <li><b>Coordination with Internal and External Quality Assurance Cells:</b>
                    <ul>
                        <li>Coordinate all quality-related activities including accreditation processes.</li><br>
                        <li>Liaise with external quality assurance bodies like NAAC and NBA for accreditation and assessment processes.</li><br>
                    </ul>
                </li>
                <li><b>Promoting Best Practices:</b>
                    <ul>
                        <li>Identify and promote best practices in teaching, learning, and assessment methods.</li><br>
                        <li>Encourage research activities that contribute to quality enhancement.</li><br>
                    </ul>
                </li>
            </ol>
            
        </div>
    </div>
        </div>
    </div>
</div>
      
       <div style="height: 5vh"></div>
    <?php
        include("../../naacfooter.php");
    ?>

    <script src="myscript.js"></script>
</body>
</html>
