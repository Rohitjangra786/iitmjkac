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
    <title>Academic Calendar & Schedule | IITM Janakpuri</title>
    <meta name="description" content="View the academic calendar of IITM Janakpuri with important dates, semester schedules, events, examinations, and academic activities.">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #800000;
            --maroon-dark: #5a0000;
            --maroon-soft: #f7eaea;
            --ink: #1f1f1f;
            --muted: #6b6b6b;
            --card-bg: #ffffff;
            --page-bg: #f5f5f7;
            --ring: rgba(128, 0, 0, 0.15);
        }
        html, body { background: var(--page-bg); font-family: 'Roboto', Georgia, sans-serif; color: var(--ink); }
        body { margin: 0; padding: 0; }
        h1, h2, h3 { font-family: 'Roboto', sans-serif; }

        /* Hero */
        .adm-hero {
            background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
            color: #fff;
            padding: 56px 20px 70px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .adm-hero::after {
            content: ""; position: absolute; inset: 0;
            background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 22px 22px; opacity: 0.6; pointer-events: none;
        }
        .adm-hero h1 {
            font-size: clamp(1.8rem, 3vw, 2.6rem);
            font-weight: 700; margin: 0 0 8px;
            letter-spacing: 0.3px; position: relative; z-index: 1;
        }
        .adm-hero .lead { font-size: 1.05rem; opacity: 0.92; margin: 0; position: relative; z-index: 1; }

        /* Subnav */
        .adm-subnav {
            max-width: 1200px; margin: 24px auto 0; padding: 0 16px;
            display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;
        }
        .adm-subnav a {
            background: #fff; color: var(--ink);
            border: 1.5px solid #e0e0e0; border-radius: 999px;
            padding: 7px 16px; font-size: 0.88rem; font-weight: 500;
            text-decoration: none; transition: all .18s ease;
        }
        .adm-subnav a:hover { border-color: var(--maroon); color: var(--maroon); }
        .adm-subnav a.current { background: var(--maroon); color: #fff; border-color: var(--maroon); }

        /* Grid */
        .pl-wrap { max-width: 1200px; margin: 32px auto 60px; padding: 0 16px; }
        
        .calendar-grid {
            display: flex;
            flex-direction: column;
            gap: 16px;
            max-width: 800px;
            margin: 0 auto;
        }
        .calendar-card {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 12px;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
            transition: all 0.25s ease;
            gap: 16px;
        }
        .calendar-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(128,0,0,0.06);
            border-color: var(--maroon);
        }
        .calendar-info {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .calendar-icon {
            font-size: 2.2rem;
            color: #d9534f; /* PDF Red color */
            flex-shrink: 0;
        }
        .calendar-details h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0 0 4px;
            color: var(--ink);
        }
        .calendar-details p {
            font-size: 0.85rem;
            color: var(--muted);
            margin: 0;
        }
        .download-btn {
            background: var(--maroon-soft);
            color: var(--maroon);
            border: 1.5px solid var(--maroon-soft);
            padding: 8px 18px;
            border-radius: 8px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }
        .download-btn:hover {
            background: var(--maroon);
            color: #fff;
            border-color: var(--maroon);
        }

        @media (max-width: 576px) {
            .calendar-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            .download-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <section class="adm-hero">
        <h1>Academic Calendar</h1>
        <p class="lead">Important schedules, holidays, exam dates and activities for GGSIPU semesters</p>
    </section>

    <nav class="adm-subnav" aria-label="Admissions sub-navigation">
        <a href="admissionprocedure.php">Admission Procedure</a>
        <a href="eligibilitycriteria.php">Eligibility Criteria</a>
        <a href="https://iitmjanakpuri.com/direct-file/feesdetails.pdf" target="_blank">Fee Details (UG & PG)</a>
        <a href="academic_calendar.php" class="current">Academic Calendar</a>
        <a href="enquiry.php">Enquiry</a>
        <a href="managementquota.php">Management Quota</a>
    </nav>

    <div class="pl-wrap">
        <div class="calendar-grid">
            
            <div class="calendar-card">
                <div class="calendar-info">
                    <i class="fa fa-file-pdf-o calendar-icon"></i>
                    <div class="calendar-details">
                        <h3>Academic Calendar - 2026-27</h3>
                        <p>GGSIPU Academic Calendar and schedule for the session 2026-2027.</p>
                    </div>
                </div>
                <a href="docs/ggsipu-academic-calendar-2026-27.pdf" target="_blank" class="download-btn">
                    View PDF <i class="fa fa-external-link"></i>
                </a>
            </div>

            <div class="calendar-card">
                <div class="calendar-info">
                    <i class="fa fa-file-pdf-o calendar-icon"></i>
                    <div class="calendar-details">
                        <h3>Academic Calendar - 2025-26</h3>
                        <p>GGSIPU Academic Calendar and schedule for the session 2025-2026.</p>
                    </div>
                </div>
                <a href="docs/ggsipu-academic-calendar-2025-26.pdf" target="_blank" class="download-btn">
                    View PDF <i class="fa fa-external-link"></i>
                </a>
            </div>

            <div class="calendar-card">
                <div class="calendar-info">
                    <i class="fa fa-file-pdf-o calendar-icon"></i>
                    <div class="calendar-details">
                        <h3>Academic Calendar - 2024</h3>
                        <p>GGSIPU Academic Calendar and schedule for the session 2024.</p>
                    </div>
                </div>
                <a href="pdf/AcademicCalendar_2024.pdf" target="_blank" class="download-btn">
                    View PDF <i class="fa fa-external-link"></i>
                </a>
            </div>

            <div class="calendar-card">
                <div class="calendar-info">
                    <i class="fa fa-file-pdf-o calendar-icon"></i>
                    <div class="calendar-details">
                        <h3>Academic Calendar - 2023</h3>
                        <p>GGSIPU Academic Calendar and schedule for the session 2023.</p>
                    </div>
                </div>
                <a href="pdf/AcademicCalendar_2023.pdf" target="_blank" class="download-btn">
                    View PDF <i class="fa fa-external-link"></i>
                </a>
            </div>

            <div class="calendar-card">
                <div class="calendar-info">
                    <i class="fa fa-file-pdf-o calendar-icon"></i>
                    <div class="calendar-details">
                        <h3>Academic Calendar - 2022</h3>
                        <p>GGSIPU Academic Calendar and schedule for the session 2022.</p>
                    </div>
                </div>
                <a href="pdf/AcademicCalendar_2022.pdf" target="_blank" class="download-btn">
                    View PDF <i class="fa fa-external-link"></i>
                </a>
            </div>

        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

</body>
</html>