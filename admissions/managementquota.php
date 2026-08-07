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
    <title>Management Quota Admissions 2026-27 | IITM Janakpuri</title>
    <meta name="description" content="Apply now for Management Quota Admissions 2026-27 for BCA, B.Com, BBA, BAJMC, MCA, and MBA programs at IITM Janakpuri.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- FontAwesome 6 / Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
            color: #2b2b2b;
        }

        .mq-hero {
            background: linear-gradient(135deg, #800000 0%, #4a0000 100%);
            color: #ffffff;
            padding: 50px 20px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.2);
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .mq-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }

        .mq-hero h1 {
            font-weight: 800;
            font-size: 2.2rem;
            letter-spacing: -0.5px;
            margin-bottom: 12px;
        }

        .mq-hero p {
            font-size: 1.05rem;
            color: #e0d0d0;
            max-width: 700px;
            margin: 0 auto;
        }

        .action-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .btn-mq-dropdown {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: #fff !important;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 14px rgba(13, 110, 253, 0.35);
            font-size: 1.05rem;
            transition: all 0.2s ease;
        }

        .btn-mq-dropdown:hover, .btn-mq-dropdown:focus {
            background: linear-gradient(135deg, #0b5ed7 0%, #084298 100%);
            box-shadow: 0 6px 20px rgba(13, 110, 253, 0.45);
        }

        .dropdown-menu-custom {
            border-radius: 12px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            padding: 10px;
            min-width: 260px;
        }

        .dropdown-menu-custom .dropdown-item {
            font-weight: 600;
            padding: 10px 16px;
            border-radius: 8px;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.15s ease;
        }

        .dropdown-menu-custom .dropdown-item:hover {
            background-color: #f0f4ff;
            color: #0d6efd;
            padding-left: 20px;
        }

        .dropdown-menu-custom .dropdown-item i {
            font-size: 0.9rem;
            opacity: 0.7;
        }

        .btn-mq-danger {
            background: linear-gradient(135deg, #dc3545 0%, #b02a37 100%);
            color: #fff !important;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 14px rgba(220, 53, 69, 0.35);
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.2s ease;
        }

        .btn-mq-danger:hover {
            background: linear-gradient(135deg, #bb2d3b 0%, #842029 100%);
            box-shadow: 0 6px 20px rgba(220, 53, 69, 0.45);
        }

        .doc-section-title {
            color: #800000;
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .doc-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 18px 24px;
            margin-bottom: 14px;
            border-left: 5px solid #800000;
            box-shadow: 0 3px 12px rgba(0,0,0,0.04);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s ease;
        }

        .doc-card:hover {
            transform: translateX(5px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-left-color: #0d6efd;
        }

        .doc-card a {
            text-decoration: none;
            color: #212529;
            font-weight: 600;
            font-size: 1.02rem;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-grow: 1;
        }

        .doc-card a:hover {
            color: #0d6efd;
        }

        .doc-icon {
            width: 40px;
            height: 40px;
            background: #fcf2f2;
            color: #800000;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .doc-card:hover .doc-icon {
            background: #e7f1ff;
            color: #0d6efd;
        }

        .badge-academic {
            background: #800000;
            color: #fff;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
 
    <div style="height: 6vh;"></div>
   
    <div class="container">
        <!-- Hero Section -->
        <div class="mq-hero">
            <span class="badge-academic mb-3 d-inline-block">Academic Year 2026-27</span>
            <h1>Management Quota Admissions</h1>
            <p>Empowering future leaders with industry-aligned education in Management & Information Technology at IITM Janakpuri.</p>
        </div>

        <!-- Application Action Buttons -->
        <div class="action-card text-center mb-5">
            <h4 class="fw-bold mb-4" style="color: #333;">Apply for Management Quota</h4>
            <div class="row g-3 justify-content-center align-items-center">
                <div class="col-md-5 col-lg-4 text-center">
                    <!-- Dropdown for Online Application Form -->
                    <div class="dropdown">
                        <button class="btn btn-mq-dropdown dropdown-toggle w-100" type="button" id="onlineAppDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-laptop me-2"></i> Online Application Form
                        </button>
                        <ul class="dropdown-menu dropdown-menu-custom w-100" aria-labelledby="onlineAppDropdown">
                            <li><a class="dropdown-item" href="https://forms.gle/3bZxQXDk5542nc399" target="_blank"><span>BCA</span> <i class="bi bi-box-arrow-up-right"></i></a></li>
                            <li><a class="dropdown-item" href="https://forms.gle/vo1EokNH1phUisUQ8" target="_blank"><span>B.Com (Hons.)</span> <i class="bi bi-box-arrow-up-right"></i></a></li>
                            <li><a class="dropdown-item" href="https://forms.gle/fuJYcKp7ZRD9DfTb9" target="_blank"><span>BBA</span> <i class="bi bi-box-arrow-up-right"></i></a></li>
                            <li><a class="dropdown-item" href="https://forms.gle/ipjsVkXauEqyY3Ns7" target="_blank"><span>BA (JMC)</span> <i class="bi bi-box-arrow-up-right"></i></a></li>
                            <li><a class="dropdown-item" href="https://forms.gle/2ouKW9wyRq7wfJA58" target="_blank"><span>MCA</span> <i class="bi bi-box-arrow-up-right"></i></a></li>
                            <li><a class="dropdown-item" href="https://forms.gle/RrQYVgAeUwFdmwXK7" target="_blank"><span>MBA</span> <i class="bi bi-box-arrow-up-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 text-center">
                    <a href="#" class="btn btn-mq-danger w-100">
                        <i class="bi bi-file-earmark-pdf me-2"></i> Offline Application Form
                    </a>
                </div>
            </div>
        </div>

        <!-- Official Notices & Documents Section -->
        <div class="mb-5">
            <h3 class="doc-section-title">
                <i class="bi bi-journal-text"></i> Important Notices & Documents
            </h3>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Final List of candidates admitted under MQ Admission for BBA_BCA_B.Com AS 2026-27.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                    <span>Final List of candidates admitted under MQ Admission for BCA, BBA, B.Com(H) AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_List of candidates admitted in 2nd Round of MQ Admission for BBA_BCA_B.Com AS 2026-27.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-person-check-fill"></i></div>
                    <span>List of candidates admitted in 2nd Round of MQ Admission for BCA, BBA, B.Com(H) AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Vacancy for 2nd Round of MQ Admission for BBA_BCA_B.Com.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-door-open-fill"></i></div>
                    <span>Vacancy for 2nd Round of MQ Admission for BCA, BBA, B.Com(H) AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_List of candidates admitted in 1st Round of MQ Admission for BBA_BCA_B.Com.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-person-check"></i></div>
                    <span>List of candidates admitted in 1st Round of MQ Admission for BCA, BBA, B.Com(H) AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Final Schedule of MQ Admission for MCA_MBA_BA(JMC) Prog. AS 2026-27.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-calendar2-range-fill"></i></div>
                    <span>Final Schedule of MQ Admission for MCA, MBA, BA(JMC) Prog. AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Merit list of BCA, BBA, B.Com(H) for MQ Admission AS 2026-27.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-card-checklist"></i></div>
                    <span>Merit list of BCA, BBA, B.Com(H) for MQ Admission AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Applicant list of BCA, BBA, B.Com(H) for MQ Admission AS 2026-27.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-person-lines-fill"></i></div>
                    <span>Applicant list of BCA, BBA, B.Com(H) for MQ Admission AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Final Schedule of Management Admission AS 2026-27 BCA,BBA B.Com(H).pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-calendar-event-fill"></i></div>
                    <span>Final Schedule of Management Quota Admission AY 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/IITM_Extension of date for Admission in Management Quota AS 2026-27 MCA-MBA-BA(JMC).pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-clock-history"></i></div>
                    <span>Extension of date for Registration for Admission in Management Seats in various Program AS 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/Notice Board.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                    <span>Admission Notice for Management Quota AY 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/Seat Matrix.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                    <span>Seat Intake and Seat Matrix for Management Quota AY 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>

            <div class="doc-card">
                <a href="/admissions/docs/Nodal Officer Nomination for Management.pdf" target="_blank">
                    <div class="doc-icon"><i class="bi bi-person-badge-fill"></i></div>
                    <span>Nodal Officer Nomination for Management Quota AY 2026-27</span>
                </a>
                <span class="badge bg-secondary">PDF</span>
            </div>
        </div>

        <div style="height: 6vh;"></div>
    </div>

    <?php include("../naacfooter.php"); ?>

    <!-- Bootstrap Bundle JS (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdownBtn = document.getElementById('onlineAppDropdown');
            if (dropdownBtn) {
                dropdownBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var menu = this.nextElementSibling;
                    if (menu) {
                        menu.classList.toggle('show');
                    }
                });

                document.addEventListener('click', function (e) {
                    var dropdown = dropdownBtn.closest('.dropdown');
                    if (dropdown && !dropdown.contains(e.target)) {
                        var menu = dropdownBtn.nextElementSibling;
                        if (menu && menu.classList.contains('show')) {
                            menu.classList.remove('show');
                        }
                    }
                });
            }
        });
    </script>
    <script src="myscript.js"></script>
</body>
</html>
