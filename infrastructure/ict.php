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
    <title>ICT Enabled Learning Systems | IITM Janakpuri </title>
    <meta name="description" content="Explore ICT-enabled learning at IITM Janakpuri with smart classrooms, digital tools, modern technology, and interactive education systems.">

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
            text-align: justify;
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

        .value-added-section img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
        }

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
    <div style="height:10vh;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1>ICT for Teaching Learning</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 80px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/infrastructure/ict.php">ICT</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/infrastructure/infrastructure.php">Infrastructure & Facility</a>
            </div>
            <div class="col-md-9">
                        <h2>ICT Tools</h2>
        <p class="text-justify">Faculty members frequently used tools like Microsoft PowerPoint, Canva, Google Slides, and others to create high-quality content for classroom instruction.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/1.png" alt="Pre-Pandemic ICT Tools" style="display: block; margin: 0 auto;">

        <h3>Creating with Canva</h3>
        <p class="text-justify">Canva has emerged as a versatile and user-friendly platform for designing engaging and visually appealing content. Faculty members have leveraged Canva's wide array of templates, graphics, and tools to enhance the quality of their lecture presentations. Whether it’s creating infographics, posters, or slide decks, Canva offers a flexible and creative space to design materials that resonate with students.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/2.png" alt="Creating with Canva" style="display: block; margin: 0 auto;">

        <h3>Google Slides</h3>
        <p class="text-justify">Google Slides has become an indispensable tool for faculty, offering a collaborative and dynamic platform for creating and delivering presentations. Its cloud-based nature allows educators to design and access their presentations from anywhere, making it especially useful for remote and hybrid teaching scenarios.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/3.png" alt="Google Slides" style="display: block; margin: 0 auto;">

        <h2>E-Gamification Tools</h2>
        <p class="text-justify">To encourage participative learning and facilitate quick assessments, game-based learning platforms like Gimkit, Kahoot, and Blooket are utilized.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/4.png" alt="E-Gamification Tools" style="display: block; margin: 0 auto;">

        <h2>Online Classrooms</h2>
        <p class="text-justify">Google Classroom is used to facilitate efficient electronic communication with students and to share notes and learning resources effectively.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/5.png" alt="Online Classrooms" style="display: block; margin: 0 auto;">

        <h2>ICT Tools for Visually Challenged</h2>
        <p class="text-justify">The college has consistently prioritized providing equal opportunities for all students. In line with this commitment, it has established a specialized resource center dedicated to supporting visually impaired students. This facility is equipped with advanced screen reading software like JAWS, NOVA, and Kurzweil. To enable instant access to hard-copy text, the center offers text magnifiers and portable OCR (Optical Character Recognition) scanners. Additionally, a talking notice board with a digital audio database for all notices has been installed to enhance accessibility.</p>
        <img src="path/to/visually-challenged.jpg" alt="ICT Tools for Visually Challenged" style="display: block; margin: 0 auto;">

        <h2>Post-Pandemic Period</h2>
        <p class="text-justify">The use of ICT grew significantly during the post-pandemic period as most activities transitioned from offline to online modes. The ICT tools and systems adopted post-Covid are detailed below:</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/6.png" alt="Post-Pandemic ICT Tools" style="display: block; margin: 0 auto;"><br>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/7.png" alt="Post-Pandemic ICT Tools" style="display: block; margin: 0 auto;"><br>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/8.png" alt="Post-Pandemic ICT Tools" style="display: block; margin: 0 auto;">

        <h3>Online Classes, Tutorials, Practicals, and Evaluations via MS Teams</h3>
        <p class="text-justify">Microsoft Teams was implemented to enhance the instructional experience by integrating various ICT applications for collaborative classrooms. Teachers utilize the platform to share reading materials, distribute and grade assignments, and manage the entire assignment process efficiently through its end-to-end assignment feature.</p>
        <img src="path/to/ms-teams.jpg" alt="Online Classes via MS Teams" style="display: block; margin: 0 auto;">

        <h3>Hybrid Classrooms</h3>
        <p class="text-justify">A hybrid classroom facility was established to enable teaching in a blended mode. This setup allows students to choose between attending lectures and tutorials on the college campus or participating remotely from any location worldwide.</p>
        <img src="path/to/hybrid-classroom.jpg" alt="Hybrid Classrooms" style="display: block; margin: 0 auto;">

        <h3>YouTube Video/Channels</h3>
        <p class="text-justify">Recorded lecture videos are provided to ensure a seamless learning experience, allowing students to revisit the sessions at their convenience.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/9.png" alt="YouTube Channels" style="display: block; margin: 0 auto;">

        <h3>Learning Management System</h3>
        <p class="text-justify">The college has also introduced the Knowledge Portal LMS to facilitate blended teaching-learning pedagogy.</p>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/10.png" alt="Learning Management System" style="display: block; margin: 0 auto;"><br>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/11.png" alt="Learning Management System" style="display: block; margin: 0 auto;"><br>
        <img src="https://www.iitmjanakpuri.com/infrastructure/ict/12.png" alt="Learning Management System" style="display: block; margin: 0 auto;">
            </div>
        </div>


    </div>
   <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>
