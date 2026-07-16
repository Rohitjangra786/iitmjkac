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
    <title>Campus Infrastructure & Facilities | IITM Janakpuri</title>
    <meta name="description" content="Discover world-class infrastructure at IITM Janakpuri featuring smart classrooms, labs, libraries, and modern learning facilities.">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="canonical" href="https://www.iitmjanakpuri.com/infrastructure/infrastructure.php" />
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

        /* Facility Cards Design (Redesigned) */
        .facility-grid {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .facility-card {
            background: #fff;
            border: 1px solid rgba(0,0,0,0.06);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: row;
            transition: all 0.3s ease;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(128, 0, 0, 0.08);
            border-color: rgba(128, 0, 0, 0.15);
        }

        .facility-image-wrapper {
            width: 45%;
            position: relative;
            min-height: 250px;
            overflow: hidden;
        }

        .facility-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .facility-card:hover .facility-image-wrapper img {
            transform: scale(1.05);
        }

        .facility-body {
            width: 55%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .facility-title {
            font-size: 22px;
            color: #2b2b2b;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 8px;
            font-weight: 700;
        }

        .facility-title::after {
            content: "";
            position: absolute;
            bottom: 0; left: 0;
            width: 40px; height: 3px;
            background-color: #800000;
            border-radius: 2px;
        }

        .facility-desc {
            font-size: 14.5px;
            line-height: 1.65;
            color: #666;
            text-align: justify;
            margin: 0;
        }

        /* Responsive Layouts */
        @media (max-width: 991px) {
            .infra-hero {
                padding: 40px 20px;
                text-align: center;
            }
            .infra-hero h1 {
                font-size: 30px;
            }
            .facility-card {
                flex-direction: column;
            }
            .facility-image-wrapper {
                width: 100%;
                height: 220px;
                min-height: auto;
            }
            .facility-body {
                width: 100%;
                padding: 24px;
            }
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
            <h1>Campus Infrastructure</h1>
            <p>The IITM campus offers a serene and pleasant ambience, featuring centrally air-conditioned, spacious, and well-ventilated lecture theatres, seminar rooms, syndicate rooms, and specialized modern facilities. Designed to foster academic excellence, our state-of-the-art campus provides students with the best learning environment.</p>
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
                        <a href="infrastructure.php" class="sidebar-btn active">
                            <i class="fa fa-university"></i> Facilities Overview
                        </a>
                        <a href="ict.php" class="sidebar-btn">
                            <i class="fa fa-laptop"></i> ICT Tools & Systems
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-9">
                <div class="facility-grid">
                    
                    <!-- Classrooms -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/class.JPG" alt="ICT-Enabled A/C Lecture Theatres" onerror="this.onerror=null;this.src='../direct-image/lecture-theater1.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">ICT-Enabled A/C Lecture Theatres</h2>
                            <p class="facility-desc">In order to ensure an environment conducive to pragmatic learning, the lecture theatres are fully air-conditioned, spacious, and equipped with advanced Audio-Visual (AV) projection systems, integrated PA sound setups, and high-speed internet connectivity for live interactive classes.</p>
                        </div>
                    </article>

                    <!-- Computer Centre -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/IMG20240503103256.jpg" alt="Computer Centre" onerror="this.onerror=null;this.src='../direct-image/computer-lab.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Computer Centre</h2>
                            <p class="facility-desc">The Institute boasts a state-of-the-art centrally air-conditioned multi-lab Computer Centre. Equipped with high-speed processors, modern licensed software suites, and dedicated server configurations, it serves as the tech backbone for programming, analytics, and software design laboratories.</p>
                        </div>
                    </article>

                    <!-- Board Room -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/board.jpeg" alt="Board Room" onerror="this.onerror=null;this.src='../direct-image/cld.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Board Room</h2>
                            <p class="facility-desc">Centrally air-conditioned seminar and syndicate rooms are furnished with LCD projectors, Smart Interactive Boards, and advanced multimedia conference systems. These are utilized extensively for student seminars, team meetings, corporate presentations, and guest lecture sessions.</p>
                        </div>
                    </article>

                    <!-- Library -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/fine.JPG" alt="Library" onerror="this.onerror=null;this.src='../direct-image/library.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Library</h2>
                            <p class="facility-desc">Our meticulously organized library houses over 29,000 volumes, covering contemporary technical topics, business case studies, industry reports, corporate journals, and biographies. Fully computerized and integrated with digital library catalogs, it provides direct access to diverse e-books, research databases, and DVDs.</p>
                        </div>
                    </article>

                    <!-- Auditorium -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/438230318_899569008847699_5747320491786116456_n.jpg" alt="Auditorium" onerror="this.onerror=null;this.src='../direct-image/auditorium.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Auditorium</h2>
                            <p class="facility-desc">The state-of-the-art centrally air-conditioned auditorium features a seating capacity of 240+ people. With dynamic projection setups, high-fidelity sound controls, and acoustic wall panels, it serves as the premier venue for hosting conferences, cultural events, expert talks, and workshops.</p>
                        </div>
                    </article>

                    <!-- Canteen Area -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/canteen-area.jpg" alt="Canteen Area" onerror="this.onerror=null;this.src='../direct-image/canteen-area.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Canteen Area</h2>
                            <p class="facility-desc">Our well-managed college canteen and Nescafe outlet provide a diverse range of hygienic, healthy eating options. Complemented by a spacious, well-ventilated seating area, it serves as a central hub for student interactions, group debates, and relaxation during academic breaks.</p>
                        </div>
                    </article>

                    <!-- Dhyan Kaksha -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/yoga-kaksh.jpg" alt="Dhyan Kaksha" onerror="this.onerror=null;this.src='../direct-image/yoga-kaksh.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Dhyan Kaksha / Meditation Room</h2>
                            <p class="facility-desc">Dedicated to holistic mental and spiritual well-being, the Dhyan Kaksha is designed as a peaceful sanctuary. The Institute organizes regular Yoga practices, mindfulness sessions, and stress-relief workshops here, fostering self-management and focus among students and staff.</p>
                        </div>
                    </article>

                    <!-- Common Rooms -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/common-room.jpg" alt="Common Rooms" onerror="this.onerror=null;this.src='../direct-image/common-room.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Common Rooms for Girls and Boys</h2>
                            <p class="facility-desc">Separate, comfortable common rooms are available for boys and girls. These spaces are equipped with recreational layouts and provide a welcoming setting for peer learning, relaxation, and informal discussions, building strong bonds within the student community.</p>
                        </div>
                    </article>

                    <!-- Sports -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/infra_sports.jpg" alt="Sports Center" onerror="this.onerror=null;this.src='../direct-image/infra_sports.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Sports Center</h2>
                            <p class="facility-desc">The college features a well-equipped indoor and outdoor sports facility. Encouraging a spirit of healthy competition, sportsmanship, and physical fitness, students participate in table tennis, chess, carrom, and other outdoor tournaments, building discipline and focus.</p>
                        </div>
                    </article>

                    <!-- Solar Power Plant -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/solarplant.jpg" alt="Solar Power Plant" onerror="this.onerror=null;this.src='../direct-image/solarplant.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Solar Power Plant</h2>
                            <p class="facility-desc">Committed to environmental sustainability, the college has established a fully functional rooftop Solar Power Plant. This system generates clean energy, reducing carbon emissions and providing power to the campus, serving as a model for green initiatives.</p>
                        </div>
                    </article>

                    <!-- Audio Video Studio -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/WhatsApp Image 2024-05-20 at 11.56.29.jpeg" alt="Audio Video Studio" onerror="this.onerror=null;this.src='../direct-image/ann.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Audio / Video Studio</h2>
                            <p class="facility-desc">Our dedicated Media production studio is equipped with professional-grade video cameras, microphones, acoustic setups, and Chroma key screens. Students of journalism and media studies utilize this facility for recording, editing, news anchoring, and program production.</p>
                        </div>
                    </article>

                    <!-- iMac Lab -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/iMac.jpeg" alt="iMac Lab" onerror="this.onerror=null;this.src='../direct-image/int.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">iMac Lab</h2>
                            <p class="facility-desc">To provide students exposure to diverse operating systems and high-performance design toolsets, the college houses a specialized iMac laboratory. Students learn graphic designing, multimedia edits, and advanced app development processes on modern macOS hardware.</p>
                        </div>
                    </article>

                    <!-- Differently abled -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/differently.jpeg" alt="Differently-abled Infrastructure" onerror="this.onerror=null;this.src='../direct-image/bpc.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">Differently-abled Infrastructure</h2>
                            <p class="facility-desc">Prioritizing equal access and inclusivity, the campus features specialized pathways, ramps, lift systems, and accessible washroom facilities. Dedicated support services and customized technology are provided to ensure a seamless and comfortable learning experience for all students.</p>
                        </div>
                    </article>

                    <!-- IoT Lab -->
                    <article class="facility-card">
                        <div class="facility-image-wrapper">
                            <img src="images/infra/iotlab.jpeg" alt="IoT Lab" onerror="this.onerror=null;this.src='../direct-image/iot.jpg'">
                        </div>
                        <div class="facility-body">
                            <h2 class="facility-title">IoT Lab</h2>
                            <p class="facility-desc">The Internet of Things (IoT) Laboratory is designed for prototyping smart technology. Equipped with development boards like Arduino, Raspberry Pi, and assorted sensor modules, students gain hands-on experience designing and building smart automation solutions.</p>
                        </div>
                    </article>
                    
                </div>
            </div>
        </div>
    </div>

    <div style="height: 10vh"></div>
    
    <?php include("../naacfooter.php"); ?>
    
    <script src="script.js"></script>
</body>
</html>
