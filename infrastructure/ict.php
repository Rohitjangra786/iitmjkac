<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = "../index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ICT Enabled Learning Systems | IITM Janakpuri</title>
    <meta name="description" content="Explore ICT-enabled learning at IITM Janakpuri with smart classrooms, digital tools, modern technology, and interactive education systems.">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="canonical" href="https://www.iitmjanakpuri.com/infrastructure/ict.php" />
    <link href="../assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Modern Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: #fcfcfc;
            color: #444;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Poppins', system-ui, sans-serif;
            font-weight: 700;
        }

        .infra-hero {
            background: linear-gradient(135deg, #800000 0%, #4a0000 100%);
            color: #fff;
            padding: 50px 20px;
            border-radius: 16px;
            margin-bottom: 40px;
            box-shadow: 0 8px 24px rgba(128,0,0,0.15);
        }

        .infra-hero h1 {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .infra-hero p {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.95;
            max-width: 900px;
        }

        /* Sidebar Styling (Redesigned) */
        .infra-sidebar {
            background: #fff;
            border: 1px solid rgba(128, 0, 0, 0.12);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
            position: sticky;
            top: 20px;
            margin-bottom: 30px;
        }

        .infra-sidebar::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, #800000 0%, #d62828 50%, #800000 100%);
            border-radius: 16px 16px 0 0;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .sidebar-header .icon-box {
            width: 40px; height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #800000 0%, #d62828 100%);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            box-shadow: 0 4px 10px rgba(128,0,0,0.2);
        }

        .sidebar-header h3 {
            font-size: 16px;
            font-weight: 700;
            color: #222;
            margin: 0;
        }

        .sidebar-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sidebar-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 10px;
            text-decoration: none;
            color: #555;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.25s ease;
            background: #f8f9fa;
        }

        .sidebar-btn:hover {
            background: rgba(128, 0, 0, 0.05);
            color: #800000;
            transform: translateX(4px);
        }

        .sidebar-btn.active {
            background: #800000;
            color: #fff;
        }

        /* ICT Sections Cards (Redesigned) */
        .ict-card {
            background: #fff;
            border: 1px solid rgba(0,0,0,0.06);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
        }

        .ict-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(128, 0, 0, 0.06);
            border-color: rgba(128, 0, 0, 0.12);
        }

        .ict-card-title {
            font-size: 22px;
            color: #2b2b2b;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 8px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .ict-card-title i {
            color: #800000;
        }

        .ict-card-title::after {
            content: "";
            position: absolute;
            bottom: 0; left: 0;
            width: 40px; height: 3px;
            background-color: #800000;
            border-radius: 2px;
        }

        .ict-desc {
            font-size: 14.5px;
            line-height: 1.65;
            color: #555;
            text-align: justify;
            margin-bottom: 25px;
        }

        /* Image Display Box */
        .ict-media-box {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 15px;
            border: 1px solid #eee;
            margin-bottom: 25px;
            text-align: center;
        }

        .ict-media-box img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .media-caption {
            font-size: 12.5px;
            color: #888;
            margin-top: 10px;
            font-weight: 500;
        }

        /* Nested Features Grid */
        .sub-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        @media (max-width: 767px) {
            .sub-features {
                grid-template-columns: 1fr;
            }
        }

        .sub-feature-card {
            background: #fdfdfd;
            border: 1px solid #f0f0f0;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.25s ease;
        }

        .sub-feature-card:hover {
            background: #fff;
            border-color: rgba(128, 0, 0, 0.15);
            box-shadow: 0 6px 15px rgba(128, 0, 0, 0.03);
        }

        .sub-feature-title {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sub-feature-title i {
            color: #d62828;
        }

        .sub-feature-desc {
            font-size: 13.5px;
            line-height: 1.6;
            color: #666;
            margin: 0;
            text-align: justify;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div style="height: 5vh;"></div>
    
    <div class="container">
        <!-- Hero Section -->
        <div class="infra-hero">
            <h1>ICT Enabled Learning Systems</h1>
            <p>At IITM Janakpuri, we leverage modern Information and Communication Technology (ICT) tools to design interactive, engaging, and outcome-based educational experiences. From gamified assessment platforms to specialized resources for visually challenged students, technology is deeply integrated into our daily learning workflow.</p>
        </div>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="infra-sidebar">
                    <div class="sidebar-header">
                        <span class="icon-box"><i class="fa fa-building"></i></span>
                        <h3>Infrastructure</h3>
                    </div>
                    <div class="sidebar-links">
                        <a href="infrastructure.php" class="sidebar-btn">
                            <i class="fa fa-university"></i> Facilities Overview
                        </a>
                        <a href="ict.php" class="sidebar-btn active">
                            <i class="fa fa-laptop"></i> ICT Tools & Systems
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-9">
                
                <!-- Section 1: Core ICT Tools -->
                <section class="ict-card">
                    <h2 class="ict-card-title">
                        <i class="fa fa-keyboard-o"></i> Digital Classroom Instruction & Creation
                    </h2>
                    <p class="ict-desc">Faculty members frequently use modern digital presentation tools to create high-quality, illustrative educational content. This bridges the gap between conceptual theory and industrial applications, keeping students actively engaged in class discussions.</p>
                    
                    <div class="ict-media-box">
                        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/1.png" alt="Pre-Pandemic ICT Tools" onerror="this.onerror=null;this.src='../direct-image/bridgeict.jpg'">
                        <div class="media-caption">Active utilization of digital learning assets in lecture halls</div>
                    </div>

                    <div class="sub-features">
                        <div class="sub-feature-card">
                            <h4 class="sub-feature-title"><i class="fa fa-paint-brush"></i> Designing with Canva</h4>
                            <p class="sub-feature-desc">Canva has emerged as a highly versatile and intuitive design platform. Faculty members use its extensive graphic templates, customized flowchart systems, and layouts to build visually compelling infographics, project flow slides, and student handouts.</p>
                        </div>
                        <div class="sub-feature-card">
                            <h4 class="sub-feature-title"><i class="fa fa-slideshare"></i> Interactive Presentations</h4>
                            <p class="sub-feature-desc">Using cloud-based platforms like Google Slides and MS PowerPoint, presentations are enriched with video integrations, links to academic portals, and real-time collaborative workspace setups for group activities.</p>
                        </div>
                    </div>
                </section>

                <!-- Section 2: Gamification -->
                <section class="ict-card">
                    <h2 class="ict-card-title">
                        <i class="fa fa-gamepad"></i> E-Gamification Learning Platforms
                    </h2>
                    <p class="ict-desc">To boost classroom interactivity and enable quick, real-time assessment of learning outcomes, game-based learning environments like Gimkit, Kahoot, and Blooket are integrated into our teaching workflows. These tools make quizzes and review sessions exciting, encouraging active participation from all students.</p>
                    
                    <div class="ict-media-box">
                        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/4.png" alt="E-Gamification Tools" onerror="this.onerror=null;this.src='../direct-image/GDPI.jpg'">
                        <div class="media-caption">Real-time classroom gamification and diagnostic review sessions</div>
                    </div>
                </section>

                <!-- Section 3: Google Classrooms & LMS -->
                <section class="ict-card">
                    <h2 class="ict-card-title">
                        <i class="fa fa-graduation-cap"></i> Online Classrooms & Learning Portals
                    </h2>
                    <p class="ict-desc">Google Classroom acts as our primary centralized channel for academic content delivery. Teachers utilize it to post syllabus schedules, share reading modules, distribute assignments, evaluate student submissions, and offer personalized feedback dynamically.</p>
                    
                    <div class="ict-media-box">
                        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/5.png" alt="Google Classroom" onerror="this.onerror=null;this.src='../direct-image/portal.jpg'">
                        <div class="media-caption">Google Classroom configurations for digital resource management</div>
                    </div>
                </section>

                <!-- Section 4: For Visually Challenged -->
                <section class="ict-card">
                    <h2 class="ict-card-title">
                        <i class="fa fa-eye-slash"></i> ICT Assistive Tools for Visually Impaired
                    </h2>
                    <p class="ict-desc">In line with our commitment to inclusivity and equal opportunity, the college has established a specialized resource cell for visually impaired students. This facility is equipped with state-of-the-art assistive technologies to ensure a seamless learning experience.</p>
                    
                    <div class="ict-media-box">
                        <img src="path/to/visually-challenged.jpg" alt="Assistive Resource Centre" onerror="this.onerror=null;this.src='../direct-image/differently-abled.jpg'">
                        <div class="media-caption">Assistive reading tools and digital accessibility aids</div>
                    </div>

                    <div class="sub-features">
                        <div class="sub-feature-card">
                            <h4 class="sub-feature-title"><i class="fa fa-volume-up"></i> Screen Readers & Scanners</h4>
                            <p class="sub-feature-desc">The lab features advanced screen-reading engines like JAWS, NOVA, and Kurzweil. High-speed OCR (Optical Character Recognition) scanners and text magnifiers allow instant translation of physical documents into audio formats.</p>
                        </div>
                        <div class="sub-feature-card">
                            <h4 class="sub-feature-title"><i class="fa fa-bullhorn"></i> Talking Notice Board</h4>
                            <p class="sub-feature-desc">A specialized digital audio notice database is installed, providing real-time voice announcements of all notices and updates. This ensures that visually challenged students stay fully informed about campus activities.</p>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </div>

    <div style="height: 10vh"></div>
    
    <?php include("../naacfooter.php"); ?>
    
    <script src="script.js"></script>
</body>
</html>
