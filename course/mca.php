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
    <title>IITM | MCA</title>

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
            font-size: 20px;
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
            color: #333;
            margin-bottom: 15px;
        }


    .committee-list {
        color: #800000;
        list-style-position: inside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
                text-align: justify;
    }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

 
    <div style="height:5vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8"> <h1 style="color: #800000;">Master of Computer Applications (MCA)</h1></div>
        </div>
           
        <div class="row">
            <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 270px; margin-right: 10px;">
                  <a class="dropdown-item" href="https://iitmjanakpuri.com/course/mba.php">MBA</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/mca.php">MCA</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bba.php">BBA</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bca.php">BCA</a>  
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bcom.php">B.Com. (H)</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bjmc.php">BA(JMC)</a>   
                                    <hr>
                                    <!-- Separator added -->
     <a href="https://iitmjanakpuri.com/academics/images/syllmca2years171220.pdf" target="_blank" class="dropdown-item btn btn-primary tgfmlt"><i class="fa fa-download"></i> MCA Syllabus</a>
    
            </div>
            <div class="col-md-8">
                <p class="text-justify">
            The two-year MCA program is accredited by Guru Gobind Singh Indraprastha University. 
            Its primary objective is to equip students with the necessary skills and knowledge to 
            succeed in a dynamic and competitive professional landscape. Through innovative pedagogy, 
            deliberate inquiry, rigorous skill development, and meaningful discourse among peers, the 
            program fosters an environment conducive to academic and professional excellence. 
            This comprehensive approach aims to empower students to excel in various career paths, including research, consultancy, and analytics.
            </p>
             <p>
                The MCA programme is divided into four semesters.
            </p>
            <h1 class="text-center" style="color: #800000;">Program Educational Objectives (PEOs)</h1>
            <p>MCA Programme focuses on the following PEOs:</p>
            <ul class="committee-list" style="list-style-position: outside;">
<li>Exhibit professional competencies and knowledge for being a successful technocrat.</li>
<li>Adopt creative and innovative practices to solve real-life complex problems.</li>
<li>Be a lifelong learner and contribute effectively to the betterment of the society.</li>
<li>Be effective and inspiring leader for fellow professionals and fale the challenges of the rapidly changing multi-dimensional, contemporary world</li>
        </ul>
            </div>
        </div>
            
         <!--    <div class="col-md"><h2 class="tgfmlt" style="color:#4b4b4b;">MCA Syllabus</h2>
                    <a href="http://iitmjanakpuri.com/academics/images/syllmca2years171220.pdf" target="_blank" class="btn btn-primary tgfmlt"><i class="fa fa-download"></i> Download</a>
                </div> -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                
            <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            <h1 class="text-center" style="color: #800000;">Programme Outcomes (POs)</h1>
            <p>
                <ol class="committee-list">
<li>Computational Knowledge
    <ul style="list-style-position: outside;">
        <li class="text-justify">Demonstrate competencies in fundamentals of computing, computing specialization, mathematics and domain 
        knowledge suitable for the computing specialization to the 
        abstraction and conceptualization of computing models from defined problems and requirements.</li>
    </ul>
</li>
<li>Problem Analysis
    <ul style="list-style-position: outside;">
        <li class="text-justify">ldentify, formulate and analyze complex real-life problems 
        in order to arrive at computationally viable conclusions using 
        fundamentals of mathematics, computer sctences, management and relevant domain disciplines.</li>
    </ul>
</li>
<li>Design / Development of Solutions
    <ul style="list-style-position: outside;">
        <li class="text-justify">Design efficient solutions for complex, real-world problems to design systems, components 
        or processes that meet the specifications with suitable 
        consideration to public health, safety, cu ltu ral, societal a nd envi ron m enta I considerations.</li>
    </ul>
</li>
<li>Conduct lnvestigations of Complex Computing Problems
    <ul style="list-style-position: outside;">
        <li class="text-justify">Ability to research, analyze and investigate complex computing 
        problems through design of experiments, analysis and interpretation of data and synthesis of the information to arrive at valid conclusions.</li>
    </ul>
</li>
<li>Modern Tool Usage
    <ul style="list-style-position: outside;">
        <li class="text-justify">Create, select, adapt and apply appropriate
        technologies and I tools to a wide range of computational activities while i understandine their limitations.</li>
    </ul>
</li>
        </ol>
            </p>
        </div>
<div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Duration</h1>
            <p class="text-center"><strong>2 years</strong></p>
        </div>     
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Student Intake and Reservation of Seats</h1>
            <p class="text-justify">
                The programme is run in one shift. The intake for MCA 
                is 60 students in morning shift. The existing reservation 
                policy stipulates 10% seats as "Management Quota Seats".
                Out of the remaining 90% seats, 85% seats are reserved for 
                Delhi candidates and 15% seats for outside Delhi candidates. 
                Further reservations for specific categories are as per the guidelines of Government of NCT of Delhi.
            </p>
        </div>  
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Eligibility Criteria</h1>
            <p class="text-center"><strong>Graduation</strong></p>
        </div>
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Academic Excellence</h1>
            <p class="text-justify">
                The primary educational objective of the Institute is to stimulate the cognitive processes, 
                thereby fostering creativity, innovation, and research endeavors that culminate in the generation of knowledge.
            </p>
        </div>  
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Pedagogy</h1>
            <p class="text-justify">
               The pedagogy embraced at IITM prioritizes the cultivation of academic 
               excellence and professional skills, facilitating the application of 
               conceptual learning to real-world business scenarios in various 
               industries. This approach emphasizes the attainment of high 
               standards through interactive learning processes, 
               achieved by employing innovative teaching methodologies that 
               inspire students to both generate and utilize knowledge through 
               critical thinking and practical application. Consequently, 
               students are prepared to take on leadership roles in an ever-evolving 
               global landscape. The pedagogical framework at IITM is meticulously designed to nurture students' 
               intellectual capacity for analysis, assessment, judgment, decision-making, and action-taking, which are integral facets of their chosen career paths.
            </p>
            <p class="text-justify">The institute employs a diverse range of formal teaching methodologies to 
            facilitate comprehensive learning experiences for our students. These methodologies 
            encompass lectures, assignments, case studies, role-plays, group discussions, business 
            games, experiential learning activities, group work, seminars, simulation workshops, 
            skill enhancement workshops, personality development workshops, entrepreneurship development programs, educational tours, recreational tours, and field visits. 
            Additionally, students actively engage in team projects, presentations, and field-based projects as integral components of various courses.</p>
        </div> 
        <div class="row" style="font-family: 'Arial', sans-serif; background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 class="text-center" style="color: #800000; margin-bottom: 20px;">Skill Development</h1>
    <p class="text-justify" style="font-size: 16px; line-height: 1.6;">
        The institute places a high priority on aiding students in attaining academic excellence while cultivating the skills essential for proficient 
        leadership and teamwork. Consequently, students are thoroughly prepared to meet the demands of the fiercely competitive corporate environment.
    </p>
    <p class="text-justify" style="font-size: 16px; line-height: 1.6;">
        The skill enhancement programs facilitate the acquisition of skills by students to identify and address complex management issues. These skills 
        imparted to the students aim to aid them in navigating through unforeseen and challenging business, economic, and social changes in the future.
    </p>
    <p class="text-justify" style="font-size: 16px; line-height: 1.6;">
        The objective of skills development is to instill a philosophy of <strong>'Learning by Doing'</strong>, emphasizing analysis and problem-solving over rote learning, and fostering critical thinking
        rather than mere information gathering. Our skill development courses and workshops aim to 
        cultivate heightened awareness regarding both domestic and international business environments.
        Thus, at IITM, we prioritize the refinement of students' personalities, integrating them with strong ethical 
        values and a positive attitude.
    </p>

    <h2 style="color: #4A90E2; margin-top: 30px;">Core Skills Development Areas</h2>
<div class="container mt-4">
    <div class="row">
        <!-- IT Skills Card -->
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">IT Skills</div>
                <div class="card-body bg-light">
                    <ul class="committee-list mb-0">
                        <li>Software Development</li>
                        <li>Programming</li>
                        <li>Data Analytics and Data Science</li>
                        <li>Full Stack Development</li>
                        <li>Advanced Java</li>
                        <li>Robotics & AI</li>
                        <li>Matlab</li>
                        <li>R Programming</li>
                        <li>Cyber Security</li>
                        <li>Hackathons</li>
                        <li>AR/VR</li>
                        <li>Blockchain</li>
                        <li>Cloud Computing</li>
                        <li>Internet of Things (IoT)</li>
                        <li>Cyber Security</li>
                        <li>Technical Writing</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Management Professionals' Skills Card -->
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-success text-white">Management Professionals' Skills</div>
                <div class="card-body bg-light">
                    <ul class="committee-list mb-0">
                        <li>Planning & Organizing</li>
                        <li>Leadership</li>
                        <li>Decision Making & Problem Solving</li>
                        <li>Numerical Competence</li>
                        <li>Project Management</li>
                        <li>Software Development Lifecycle (SDLC) Understanding</li>
                        <li>Agile and Scrum Methodologies</li>
                        <li>Cybersecurity Awareness</li>
                        <li>Database Management and SQL Expertise</li>
                        <li>AI and Machine Learning Application</li>
                        <li>Networking and Infrastructure Management</li>
                        <li>IT Governance and Compliance</li>
                    </ul>
                </div>
            </div>
        </div>

       
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        

        <!-- Soft Skills Card -->
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-warning text-white">Soft Skills</div>
                <div class="card-body bg-light">
                    <ul class="committee-list mb-0">
                        <li>Values and Ethics</li>
                        <li>Written and Verbal Communication</li>
                        <li>Active Listening & Teamwork</li>
                        <li>Self Confidence</li>
                        <li>Positive Attitude</li>
                        <li>Time Management</li>
                        <li>Adaptability and Resilience</li>
                        <li>Creative Problem-Solving</li>
                        <li>Conflict Resolution</li>
                        <li>Critical Thinking</li>
                        <li>Collaboration and Networking</li>
                        <li>Stress Management</li>
                        <li>Presentation Skills</li>
                        <li>Self-Motivation and Initiative</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Thinking Skills Card -->
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-info text-white">Thinking Skills</div>
                <div class="card-body bg-light">
                    <ul class="committee-list mb-0">
                        <li>Creativity</li>
                        <li>Innovation</li>
                        <li>Research</li>
                        <li>Creation of Knowledge</li>
                        <li>Analytical Reasoning</li>
                        <li>Logical Problem Solving</li>
                        <li>Design Thinking</li>
                        <li>Strategic Planning</li>
                        <li>Computational Thinking</li>
                        <li>Pattern Recognition</li>
                        <li>Algorithmic Thinking</li>
                        <li>Risk Assessment and Mitigation</li>
                        <li>Abstract Thinking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
          
    </div>
            </div>
        </div>        
           



    </div>

    <?php
        include('faqs/mca.php');
        include('_faq-section.php');
    ?>

    <?php
       include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>