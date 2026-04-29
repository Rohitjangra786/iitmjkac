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
    <title>Institute Incubation Center - IITM Janakpuri</title>

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
        .content-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            line-height: 1.8;
        }
        .content-section h2 {
            font-size: 24px;
            color: #000;
            text-align: center;
            margin-bottom: 20px;
        }
            .committee-list {
        color: #000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
    }
        .gallery-row {
            margin-bottom: 20px;
        }
        .gallery-row img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
                .tab-content {
            margin-top: 20px;
        }
                .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


    <div style="height: 5vh;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="text-center">Institute Incubation Center</h1>
                <h2 class="text-center">[Software Development Cell]</h2>
                <h3 class="text-center">Empowering innovation and skill development at IITM Janakpuri.</h3>               
            
        
        <div class="row">
        <div class="col-md">
            <h2>Introduction</h2>
            <p class="text-justify">The Software Development Cell, IITM was established with the vision of fostering technical innovation 
            and creativity, has had a remarkable semester filled with diverse and impactful activities. As a vibrant community of tech enthusiasts, SDC has worked tirelessly to provide 
            students with opportunities to enhance their skills in software development, web design, 
            cybersecurity, and programming, creating an engaging and collaborative learning environment.</p>
                <a href="https://www.iitmjanakpuri.com/StudentZone/policies/IIC_Policy.pdf" target="_blank" class="btn btn-lg btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                    Committee Policy
                </a>
        </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h1>Objective of the Committee</h1>
                <p class="text-justify">
                    The primary objective of the Software Development Cell (SDC) is to foster a culture of 
                    innovation, technical excellence, and collaborative learning among students. 
                    By providing a platform for exploring cutting-edge technologies and industry practices, 
                    SDC equips students with the skills and confidence required to tackle real-world challenges in software development, web design, and cybersecurity. 
                    The committee is committed to bridging the gap between academic knowledge and its practical application through engaging activities and hands-on experiences.
                </p>

                <p>
                    Through hands-on workshops, engaging competitions, expert lectures, and collaborative projects, the committee strives to:
                    <ul class="committee-list">
                        <li>Enhance technical proficiency and problem-solving skills.</li>
<li>Promote practical learning and application of cutting-edge technologies.</li>
<li>Provide a platform for students to showcase their creativity and technical talents.</li>
<li>Prepare students to meet industry demands and excel in their professional journeys.</li>
                    </ul>
                </p>
                <p class="text-justify">
                    Another key goal of SDC is to promote holistic development 
                    by encouraging creativity and teamwork. Through workshops, 
                    competitions, and expert lectures, the committee not only 
                    enhances technical proficiency but also nurtures 
                    critical thinking, problem-solving, and communication skills. By facilitating interactions with industry leaders and fostering 
                    a sense of community among tech enthusiasts, SDC aims to prepare students to excel in their professional journeys and contribute meaningfully to the ever-evolving tech ecosystem.
                </p>
                <p class="text-justify">
                    SDC’s mission extends beyond technical growth—it also seeks to inspire students to become innovators and leaders who leverage technology for the betterment of society. 
                    By bridging the gap between theoretical knowledge and real-world applications, SDC aspires to shape future-ready professionals and innovators in the ever-evolving tech landscape
                    </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h1>Faculty Coordinator</h1>
                <h3>Ms. Kavita Srivastava</h3>
            </div>
        </div>  
        <div class="row">
            <div class="col-md">
                <h1>Student Coordinators</h1>
                <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Member (Students)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pratham Aggarwal</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Akanksha Negi</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Dhruv Dhayal</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Manan Narwal</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Asmeet Kaur</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h1>List of Events</h1>
               <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Date of Event</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>CodeClash</td>
                    <td>June 3, 2023</td>
                    <td>Programming Competition</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Videography/Photography Competition - Capturing Campus Life</td>
                    <td>February 6, 2024</td>
                    <td>Visual Storytelling of Campus Life</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>SQL - Break the Query Competition</td>
                    <td>February 7, 2024</td>
                    <td>Coding Competition</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Tech Quote Competition – Capturing Campus Life</td>
                    <td>February 8, 2024</td>
                    <td>Content / Technical Writing</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Social Media Campaign: From Idea to Impact Infographics</td>
                    <td>March 15, 2024</td>
                    <td>Creative Design Competition</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Workshop on Front-End Development Using Angular</td>
                    <td>April 18, 2024</td>
                    <td>Front-end Web-Dev Workshop</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h1>Achievements</h1>
                 <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Name of Event</th>
                    <th scope="col">College/University Name</th>
                    <th scope="col">Date of Event</th>
                    <th scope="col">Position</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Keshav, BCA II (M2)</td>
                    <td>Code Clash</td>
                    <td>IITM</td>
                    <td>June 3, 2023</td>
                    <td>First</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bhavishya, BCA II (M1)</td>
                    <td>Code Clash</td>
                    <td>IITM</td>
                    <td>June 3, 2023</td>
                    <td>Second</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Sachin Soni, BCA I (M1)</td>
                    <td>Code Clash</td>
                    <td>IITM</td>
                    <td>June 3, 2023</td>
                    <td>Third</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Akanksha Negi</td>
                    <td>Capturing Campus Life</td>
                    <td>IITM</td>
                    <td>February 6, 2024</td>
                    <td>First</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Vyakhya Goyal</td>
                    <td>Tech Quote Competition</td>
                    <td>IITM</td>
                    <td>February 8, 2024</td>
                    <td>First</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Dhruv Jain, BCA III (E)</td>
                    <td>Social Media Campaign: From Idea to Impact Infographics</td>
                    <td>IITM</td>
                    <td>March 15, 2024</td>
                    <td>First</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Akshit Kalra, BBA I (M3) and Manas Sharma, BCA I (E1)</td>
                    <td>Social Media Campaign: From Idea to Impact Infographics</td>
                    <td>IITM</td>
                    <td>March 15, 2024</td>
                    <td>Second</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Md. Mosim, BCA III (E) and Pratham Agarwal, BCA III (M1)</td>
                    <td>Social Media Campaign: From Idea to Impact Infographics</td>
                    <td>IITM</td>
                    <td>March 15, 2024</td>
                    <td>Third</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h1></h1>
                   <div class="container mt-5">
        <h2 class="text-center mb-4">SDC Events</h2>
        <div class="gallery-row">
            <img src="images/sdc1.png" alt="Wide Image 1">
        </div>
        <div class="gallery-row">
            <img src="images/sdc2.png" alt="Wide Image 2">
        </div>
        <div class="gallery-row">
            <img src="images/sdc3.png" alt="Wide Image 3">
        </div>
    </div>
            </div>
        </div>

     

</div>        
   </div>
   </div>
   </div>
    <div style="height: 5vh;"></div>
    <?php
       include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>
