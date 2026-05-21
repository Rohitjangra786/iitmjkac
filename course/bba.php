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
    <title>IITM | BBA</title>

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
    
    .peo-list {
        list-style: none; /* Remove default numbering */
        counter-reset: peo-counter; /* Initialize the counter */
    }

    .peo-list li {
        counter-increment: peo-counter; /* Increment the counter for each <li> */
        margin-bottom: 10px; /* Add some spacing between items */
        position: relative; /* Position for custom numbering */
        padding-left: 4em; /* Increase space for the custom number */
        text-align: justify;
    }

    .peo-list li::before {
        content: "PEO " counter(peo-counter) "."; /* Display custom numbering */
        position: absolute; /* Position relative to <li> */
        left: 0; /* Align numbers to the left */
        font-weight: bold; /* Make the numbering bold */
        color: #800000; /* Optional: Customize the color */
        width: 3.5em; /* Add width to create space between number and text */
        text-align: right; /* Align the numbering to the right */
    }
    
    .pso-list {
        list-style: none; /* Remove default numbering */
        counter-reset: peo-counter; /* Initialize the counter */
    }

    .pso-list li {
        counter-increment: pso-counter; /* Increment the counter for each <li> */
        margin-bottom: 10px; /* Add some spacing between items */
        position: relative; /* Position for custom numbering */
        padding-left: 4em; /* Increase space for the custom number */
        text-align: justify;
    }

    .pso-list li::before {
        content: "PSO " counter(pso-counter) "."; /* Display custom numbering */
        position: absolute; /* Position relative to <li> */
        left: 0; /* Align numbers to the left */
        font-weight: bold; /* Make the numbering bold */
        color: #800000; /* Optional: Customize the color */
        width: 3.5em; /* Add width to create space between number and text */
        text-align: right; /* Align the numbering to the right */
    }
    
    
        .po-list {
        list-style: none; /* Remove default numbering */
        counter-reset: peo-counter; /* Initialize the counter */
    }

    .po-list li {
        counter-increment: po-counter; /* Increment the counter for each <li> */
        margin-bottom: 10px; /* Add some spacing between items */
        position: relative; /* Position for custom numbering */
        padding-left: 4em; /* Increase space for the custom number */
        text-align: justify;
    }

    .po-list li::before {
        content: "PO " counter(po-counter) "."; /* Display custom numbering */
        position: absolute; /* Position relative to <li> */
        left: 0; /* Align numbers to the left */
        font-weight: bold; /* Make the numbering bold */
        color: #800000; /* Optional: Customize the color */
        width: 3.5em; /* Add width to create space between number and text */
        text-align: right; /* Align the numbering to the right */
    }

    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

 
    <div style="height: 5vh;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8"><h1 style="color: #800000;">Bachelor of Business Administration (BBA(H))</h1></div>
        </div>
        <div class="row">
            
                <div class="col-md-3" style="padding: 5px; background-color: #add8e6;margin-right: 10px;height: 280px;">
                  <a class="dropdown-item" href="https://iitmjanakpuri.com/course/mba.php">MBA</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/mca.php">MCA</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bba.php">BBA(H)</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bca.php">BCA(H)</a>  
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bcom.php">B.Com.(H)</a>
                                    <a class="dropdown-item" href="https://iitmjanakpuri.com/course/bjmc.php">BAJMC(H)</a>   
                                    <hr> <!-- Separator added -->
     <a href="https://iitmjanakpuri.com/course/syllabus/bbasyllabus.pdf" target="_blank" class="dropdown-item btn btn-primary tgfmlt"><i class="fa fa-download"></i> BBA Syllabus</a>
    
            </div>
            
            <div class="col-md-8">
                <p class="text-justify">
            The Guru Gobind Singh Indraprastha University has a four-year Bachelor of Business Administration (BBA) program. 
            This program focuses on equipping students with basic knowledge and skills that are critical in managing the complex 
            business processes. This program has a very specific aim of creating such professionals, who are capable of working not only 
            in Banking, but also in various other industries including but not limited to Banking, FMCGs, Manufacturing, Telecom, and Logistics.
            </p>
            <p class="text-justify">This degree includes eight semesters in total. 
            The first four semesters concentrate on core courses in business administration. 
            In the fifth semester, the students have industrial placement and in the sixth semester, 
            students engage in a research project, where they analyse real time data and report statistical analysis. 
            This combination allows students to acquire knowledge concepts as well as gain learning exposure through 
            actual business work around them. The final year could potentially lead the students to get an Honours 
            degree by concentrating on practical implementations. The students may also obtain a research degree with 
            Honors while working on research activities in the last semester.</p>
            </div>
        </div>
           <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-8">
                   <div class="container">
    <!--    <div class="row">
            <h1 class="text-center" style="color: #800000;">Programme Educational Objectives (PEOs)</h1>
            <p>The Bachelor of Business Administration (BBA) Program has following four Program Educational objectives(PEOs):</p>
            <ul class="committee-list peo-list" style="list-style-position: outside;">
<li>Develop leadership and communication skills in students to become successful business leaders and managers.</li>
<li>Encourage critical thinking, analysis and initiative ability amongst students.</li>
<li>Develop problem solving skills through student’s experiential learning and innovative pedagogy to ensure utilization of knowledge in professional careers.</li>
<li>To make aware students of dynamic business environment in line with global imperatives and ethical values.</li>
        </ul>
        </div> -->
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Programme Specific Outcomes (PSOs)</h1>
            <p class="text-justify">
                <ol class="committee-list pso-list">
<li>Apply reflective thinking and research skills using latest technological tools</li>
<li>Assimilate technical functional knowledge of operations in business organization </li>
<li>Demonstrate strategic and proactive thinking towards business decision making</li>
<li>Illustrate negotiation skills and networking abilities</li>

        </ol>
            </p>
        </div>
        <div class="row">
            <h1 class="text-center" style="color: #800000;">Programme Outcomes (POs)</h1>
            <p class="text-justify">
                <ol class="committee-list po-list">
<li>Develop conceptual knowledge and understanding of management theories and practices. </li>
<li>Apply critical thinking and analytical skills for effective business decision making. </li>
<li>Develop communication and leadership abilities to steer through the dynamic and global business environment. </li>
<li>Demonstrate business intelligence and foster research to find innovative solutions for diverse business situations. </li>
<li>Imbibe responsible citizenship, promoting sustainability, and embrace diverse cultures with universal values.</li>
        </ol>
            </p>
        </div>
<div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Duration</h1>
            <p class="text-center"><strong>4 Years with Multiple Entry/Exits as per NEP-2020</strong></p>
        </div>     
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Student Intake and Reservation of Seats</h1>
            <p class="text-justify">
                The course is being run in two shifts. Morning shift having intake of 180 students and Evening shift having intake of 180 students. 
                The existing reservation policy specifies 10% seats as "Management Quota Seats". Out of the remaining 90% seats, 85% seats are reserved 
                for Delhi candidates and 15% for outside Delhi candidates. Further reservation for specific categories shall be as per the guidelines of 
                Government of NCT of Delhi.
            </p>
        </div>  
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Eligibility Criteria</h1>
            <p class="text-justify"> Passed 12th Class of 10+2 of CBSE or equivalent with a minimum of 50% marks in aggregate and must also 
                have passed English (core or elective or functional) as a subject.</p>
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
               Pedagogy focuses on critical thinking, practical application, and leadership development, 
               enabling the students to perform well in a dynamic global business environment. Students attend 
               skill development workshops, educational tours, and field visits, thus having hands-on experience. 
               It develops a necessary competence in the analysis and decision-making capabilities and also in 
               action-oriented problem solving, getting the students ready to take competitive industry leadership roles.
            </p>
            
        </div> 
        <div class="row">
            <h1 class="text-center" style="color:#800000; padding: 20px;">Skill Development</h1>
            <p class="text-justify">The BBA program at IITM focuses specifically to nurture academic as well as professional excellence. 
            It helps the students to apply theoretical knowledge in real-world business scenarios. The philosophy of 
            "Learning by Doing" guides the development of core IT, management, professional, soft, and thinking skills, including:
            </p>
           <p>
               <ol class="committee-list">
                   <li>IT Skills: Data analytics, data science, and technical writing.</li>
<li>Management Skills: Leadership, decision-making, planning, financial analysis, and technical applications.</li>
<li>Soft Skills: Communication, teamwork, active listening, confidence, and ethics.</li>
<li>Thinking Skills: Creativity, innovation, research, and knowledge creation.</li>
               </ol>
           </p>
           <p class="text-justify">
               This holistic approach to the enhancement of skills will equip students to adapt to changing business environments, 
               innovate in diverse ways, lead effectively, and cultivate a value system along with an ethical attitude.
           </p>
        </div>            
    </div>
               </div>
           </div> 
    </div>

    <?php
        include('faqs/bba.php');
        include('_faq-section.php');
    ?>

    <?php
        include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>