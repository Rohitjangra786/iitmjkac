<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = window.location.origin + "/index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>History & Legacy of Excellence | IITM Janakpuri </title>
<meta name="description" content="Discover the rich history of IITM Janakpuri, known for academic excellence, innovation, research-driven learning, and career-focused education.">

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

        .table-dark th li{
            color: #800000 !important;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            vertical-align: top;
            color: #800000 !important;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }
        .highlight {
            background-color: #f8d7da;
            font-weight: bold;
        }
        p{
            color: #000;
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
            color: #000;
            margin-bottom: 15px;
        }


    .committee-list {
        color: #000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
                text-align: justify;
                font-size: 16px;
    }
    
    
        .table-header {
            color: #800000;
        }
        .details-list {
            list-style-type: disc;
            margin-left: 20px;
        }
  
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


<div style="height: 5vh;"></div>

<div class="container text-center mb-4">
    <div class="row">
        <div class="col-md"> 
          <img src="http://iitmjanakpuri.com/aboutus_new/images/iitmimage_1.jpg" alt="Institute's Image" class="img-fluid" style="height: 550px; width: 550px; max-width: 100%; height: auto; border-radius: 10px; padding: 0;">
        </div>  
        <div class="col-md"> 
           <img src="http://iitmjanakpuri.com/aboutus_new/images/iitmimage_2.jpg" alt="Institute's Image" class="img-fluid" style="height: 550px; width: 550px; max-width: 100%; height: auto; border-radius: 10px; padding: 0;">
        </div>  
        <div class="col-md"> 
           <img src="http://iitmjanakpuri.com/aboutus_new/images/iitmimage_3.jpg" alt="Institute's Image" class="img-fluid" style="height: 550px; width: 550px; max-width: 100%; height: auto; border-radius: 10px; padding: 0;">
        </div>

</div>
    <div class="container">
       
            <h1></h1>
        <div class="container">
            <div class="row">
            <div class="col-md-3" style="padding: 2px; background-color: #add8e6;height: 430px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/history.php">History</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php">Vision & Mission</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/chairman.php">Chairman</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/director.php">Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/executive_director.php">Executive Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/administration.php">Management and Administration</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/rollofhonor.php">Students Rolls of Honor</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/milestone.php">Milestone</a><br>    
            </div>
            <div class="col-md-9">
                 <h1 class="text-center">History</h1><hr>
                  <p class="text-justify">
               Institute of Information Technology & Management (IITM) was set up in 1999 under the aegis of 
               Mata Leelawati Shikshan Sansthan (MLSS), 
               a registered education society engaged in philanthropic activities, with the Late Shri T.N. Chaturvedi, 
               the well-known educationist, parliamentarian, ex-Governor of Karnataka and CAG of India and Padma 
               Vibhushan Awardee, as founder President of both the society and the Institute.  
               Shri J.C. Sharma is the founding Chairman of the Institute. 
               The Institute takes pride in having developed the faculty resource, extended curricular engagements, 
               infrastructure imperative to effectively implement ‘Outcome Based Education’- a technology-based, learner 
               centric and result-oriented approach which enhances students' learning and performance capabilities.
               The institute also emphasizes on green practices, sustainability and inculcating human and moral values amongst students. 
               Institute is also passionate about grooming the nation’s youth to grow into good human beings and excellent professionals destined to become torchbearers of their respective domains. 
               This is done when the vision converts to mission and mission into action.
            </p>
           <p class="text-justify">
               The Society established the Institute of Information Technology and Management in the year 1999. 
               A plot of land measuring 0.78 acres was acquired from DDA in the year 2000 at D - 29 Janakpuri, Institutional area, New Delhi 110058. 
           </p>
           <p class="text-justify">The perspective plan has been formulated meticulously ensuring the involvement of all the stakeholders. The development plan formulated phase-wise, is given below.</p>
           </div>
           </div>
           <div style="height: 5vh;"></div>
           <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-9">
                   <div class="container">    <p class="text-justify">The institutional perspective plan periods are:</p>
           <h3 class="text-justify">
               <ul class="committee-list">
                   <li>Institutional Strategic/ Perspective Plan Phase I  :2000 – 2007 </li>
<li>Institutional Strategic/ Perspective Plan Phase II : 2008 – 2019 </li>
<li>Institutional Strategic/ Perspective Plan Phase III : 2020 – 2030</li>
               </ul>
           </h3>
           <h2>Thrust Areas of Strategic / Perspective Plan</h2>
           <h3>Strategic Plan</h3>
           <p class="text-justify">Bridging the gap between what is required to be the outcome from the attained level of education and what one knows.
               <ul class="committee-list">
                   <li>Igniting young minds</li>
                    <li>Moving from academic excellence to human excellence</li>
                    <li>Being enablers
                        <ul class="committee-list">
                            <li>Governance</li>
<li>Financial and infrastructure</li>
<li>Academic</li>
<li>HR management</li>
<li>Facilitative & Supportive</li>
                        </ul>
                    
                    </li>
               </ul>
           </p>
           <p>The Institute’s plan was developed with emphasis on following areas:</p>
           <ul class="committee-list">
               <li>Academic Programmes</li>
<li>Academic Excellence & Experiential Learning</li>
<li>Infrastructure Development & Augmentation</li>
<li>Excellence in Research</li>
<li>Collaborations and Linkages</li>
<li>Extension Services</li>
<li>Students’ Support and Progression</li>
<li>Faculty and Staff Development</li>
<li>Environmental Awareness & Sustainable Initiatives</li>
<li>Quality Assurance and Enhancement</li>
           </ul>
           </div>
       
           <p class="text-justify">
                 <div class="container mt-5">
 <h2 class="text-center mb-4">Institutional Strategic/Perspective Plan Phase III: 2020 – 2030</h2>
 <div class="container my-4">
        <h2 class="text-center mb-4"></h2>
         <table class="table table-bordered table-striped table hover">
            <thead>
                <tr>
                    <th>Third Perspective Plan (2020–2030)</th>
                    <th>Achievement and Proposed Actions of Third Perspective Plan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="highlight" colspan="2">Academic Programmes</td>
                </tr>
                <tr>    
                    <td class="highlight">To offer new Under Graduate  and Post-Graduate programmes</td>
                    <td>
                        <ul class="committee-list">
                            <li>Undergraduate to Postgraduate department in IT: Re-Start MCA w.e.f the session 2023-2024</li>
                            <li>Horizontal expansion in terms of more UG programmes (BA JMC) - w.e.f the session 2023-2024</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="highlight" colspan="2">Academic Excellence & Experiential Learning</td>
                </tr>
                <tr>
                    
                    <td class="highlight">Academic</td>
                    <td>
                        <ul class="committee-list">
                            <li>Multidisciplinary market-driven and placement-oriented programmes in accordance with National Education Policy (NEP) 2020 to be initiated.</li>
                            <li>New and innovative programmes will be introduced to integrate new emerging technologies like Artificial Intelligence and Internet of Things (IoT) to empower the next generation with the latest technological advancements in the industry.</li>
                            <li>Programmes offered shall integrate future-fit skills and aptitude to enhance employability and inculcate entrepreneurship.</li>
                            <li>Adoption of well-structured outcome-based curriculum and assessment for all the programmes.</li>
                            <li>Creation of open educational resources and online learning.</li>
                            <li>Introduce Value-added courses on contemporary topics.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="highlight">Perspective Plan - Accreditations</td>
                    <td>
                        <ul class="committee-list">
                            <li>NAAC Accreditation Third Cycle to be done from year 2025.</li>
                            <li>NBA Accreditation for MBA.</li>
                        </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="highlight" colspan="2">Excellence in Research</td>
                </tr>
                <tr>
                    <td>
                        <p>Motivated Faculty to enroll for PhD and carry out research.</p>
                        <p>Students to be motivated to do research</p>
                    </td>
                    <td>
                        <ul class="committee-list">
                            <li>Faculty and students will be encouraged to undertake multidisciplinary research projects with a special focus on national priorities and having measurable social impact.</li>
                            <li>The research policy will be revised to incorporate the latest development in various academic disciplines, technology and industry.</li>
                            <li>Expansion of the Research Advisory Committee and Research Centre to plan, coordinate and monitor research initiatives in the institute.</li>
                            <li>The Centre for research shall guide the departments to submit research proposals for funding by central and state government agencies, NGOs and international funding agencies.</li>
                            <li>Ethics in research to be mandatorily upheld through mechanisms.</li>
                            <li>Financial schemes and seed money to be revised to promote the cutting-edge research in all the disciplines</li>
                            <li>Strengthen the ranking of Institutional Journal.</li>
                            <li>Increase in the number of sponsored in-house research projects</li>
                            <li>Motivate faculty members to pursue research and get publications in Scopus/SCI index/Referred/ABDC listed / UGC approved journals.</li>
                            <li>Incentives and Awards for publication in journals of repute.</li>
                            <li>UG/ PG students to be taken as Research Assistants across all departments</li>
                            <li>To develop international collaborations for research and consultancy.</li>
                        </ul>
                    </td>
                </tr>
                
                
                <tr>
                    <td class="highlight" colspan="2">Infrastructure Development & Augmentation</td>
                </tr>
                <tr>
                    <td>
                        <p>Construction of Campus</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>The Institute started expansion of campus of floor fourth to sixth as a result of increase in FAR to 225 at Campus, D-29 Janakpuri, Institutional area.</li>
<li>The extended campus got functional with three additional floors having smart classrooms, I, Mac lab, Graphics Lab, Lab for design and printing, Multimedia studio, MOOCs recording facilities Computer Labs, Wi-fi, Spiritual Room and dedicated parking area.</li>
                        </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="highlight" colspan="2">Extension Services</td>
                </tr>
                <tr>
                    <td>
                        <p>Initiatives for Community Welfare and Nation Building</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Got 7 units of NSS</li>
<li>Started NCC.</li>
<li>Organize more outreach programmes in collaboration with government agencies with the help of NSS and other relevant committees.</li>
<li>Vocational training and skill-based programmes to be designed to orient students for a successful career.</li>
<li>Initiate healthy waste management practices in the neighbouring villages of the Institution.</li>
<li>Water conservation and biodiversity conservation initiatives with local authorities to be initiated.</li>
<li>Strengthening the legal aid to the neighbourhood community.</li>
<li>Rehabilitation and support through skill development programmes to Divyangjan and socially disadvantaged groups.</li>          </ul>
                    </td>
                </tr>
                
                
                <tr>
                    <td class="highlight" colspan="2">Faculty and Staff Development</td>
                </tr>
                <tr>
                    <td>
                        <p>Recruitment & Retention of Faculty and Staff</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Faculty were appointed as per the UGC norms and international standards for the New programmes started.</li>
<li>A performance-based Appraisal system will be implemented more effectively for the Teaching and Non-teaching staff.</li>
<li>To create more positions for improving Faculty Student Ratio. However, the new posts</li>
<li>will be in the line with courses proposed in the academic plan.</li>
<li>Teachers will be motivated to pursue higher degrees to enhance their knowledge and will be encouraged to undertake research studies.</li>
<li>Training programs for the administrative staff will be organized to create a healthy atmosphere and to facilitate students by using ICT tools and techniques like AI/ML</li>
</ul>
                    </td>
                </tr>
                
                
                  <tr>
                    <td class="highlight" colspan="2">Environmental Awareness & Sustainable Initiatives</td>
                </tr>
                <tr>
                    <td>
                        <p>Green Initiatives</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Develop the strategy to have a zero-waste campus </li>
<li>Continue to aim at clean energy by using renewable sources like solar energy.</li>
<li>Strengthening the rainwater harvesting facilities and conserving water resources in the Institution.</li>
<li>Audits for Green, Energy and Environment to be conducted on annual basis</li></ul>
                    </td>
                </tr>
                
                
                
                <tr>
                    <td class="highlight" colspan="2">Quality Assurance and Enhancement</td>
                </tr>
                <tr>
                    <td>
                        <p>E-governance</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>E-governance was adopted in administration, student admission and assessment and Finance through LMS- knowledge portal, Tally</li>
<li>IQAC of the Institution to devise a criterion-wise strategy to score more and attain a higher grade in the second cycle of NAAC accreditation</li>
<li>Participate in NIRF Ranking and efforts to be made to rank in the top colleges in India.</li>
</ul>
                    </td>
                </tr>
                
                
                <tr>
                    <td class="highlight" colspan="2">Collaborations and Linkages</td>
                </tr>
                <tr>
                    <td>
                        <p>Collaborate with Industries, Sponsors, Government agencies, other HEIs</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Collaborate with the institutes of national and international repute for student capacity enhancement, training, internship, placement and even faculty enrichment and research.</li>
<li>Increase industry-academia collaborations for research & extensions</li>
<li>Maintain and develop the tie-ups with NGOs and corporates to engage in various United Nations Sustainable Goals and CSR activities.</li>
<li>Collaboration for the government initiated programmes for nation-building and social welfare.</li>
</ul>
                    </td>
                </tr>
                <!-- Add more rows as necessary based on the structure -->
            </tbody>
        </table>
    </div>
    
    
    
    <!-- Second Table -->
    <h2 class="text-center mb-4">Institutional Strategic/ Perspective Plan Phase II: 2008 – 2019</h2>
 <div class="container my-4">
        <h2 class="text-center mb-4"></h2>
         <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Second Perspective Plan (2008 – 2019)</th>
                    <th>Achievement and Proposed Actions of Second Perspective Plan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="highlight" colspan="2">Academic Programmes</td>
                </tr>
                <tr>    
                    <td class="highlight">To offer new Under Graduate  and Post-Graduate programmes</td>
                    <td>
                        <ul class="committee-list">
                            <li>2008 -	Blossomed into Management Post Graduate Institution </li>
<li>(PGDM and converted to MBA in 2012)</li>
<li>2017 - 	Started B.Com(H) programme</li>
<li>2019 - 	Started B.Com(H)  2nd Shift programme</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="highlight" colspan="2">Academic Excellence & Experiential Learning</td>
                </tr>
                <tr>
                    
                    <td class="highlight">Academic</td>
                    <td>
                        <ul class="committee-list">
                           <li>Program Admin committees </li>
<li>Value Added courses were introduced</li>
<li>Policies were documented</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="highlight">Accolades</td>
                    <td>
                        <ul class="committee-list">
<li>NAAC Accreditation A grade in Cycle II</li>
<li>NBA Accreditation for MCA </li>
<li>Got many Exemplary Performances in the University</li>
                        </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="highlight" colspan="2">Excellence in Research</td>
                </tr>
                <tr>
                    <td>
                        <p>Motivated Faculty to enroll for PhD and carry out research.</p>
                      
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Faculty members pursued research work and participated in various National & International Conferences/Seminars of repute.</li>
<li>Numerous National & International Seminars/conferences/workshops/webinars were organized by the Institute.</li>
                        </ul>
                    </td>
                </tr>
                
                
                <tr>
                    <td class="highlight" colspan="2">Infrastructure Development & Augmentation</td>
                </tr>
                <tr>
                    <td>
                        <p>Construction of Campus</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>The Institute started expansion of campus as a result of increase in FAR Campus in D-29 Janakpuri Institutional area.</li>
<li>The campus extended campus got functional with three floors having smart 
classrooms, Computer Labs, Wi-fi, Administrative Offices, Medical Room, Canteen, Sports Room, Spiritual Room and dedicated parking area.</li>                      </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="highlight" colspan="2">Extension Services</td>
                </tr>
                <tr>
                    <td>
                        <p>Initiatives for Community Welfare and Nation Building</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Initiatives like Blood Bank, Classes for Orphans, Socially & Economically Disadvantaged Students, Cleanliness Drives were organised in collaboration with NGOs, </li>
<li>Fiesta was  started as an annual event.</li>
<li>Internship under Swachh Bharat Abhiyan was pursued by students in addition to various schemes launched by the government.</li>
</ul>
                    </td>
                </tr>
                
 
 
                <tr>
                    <td class="highlight" colspan="2">Students’ Support and Progression</td>
                </tr>
                <tr>
                    <td>
                        <p>Training & Placement Sessions</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Various counselling, training and placement sessions were organized.</li>
<li>Students were placed in prominent institutions TCS, Genpact, Wipro, IBM and  other organizations to name a few.</li>
</ul>
                    </td>
                </tr>
                
                
                
                
                <tr>
                    <td class="highlight" colspan="2">Faculty and Staff Development</td>
                </tr>
                <tr>
                    <td>
                        <p>Recruitment & Retention of Faculty and Staff</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Faculty were appointed as per the UGC norms and international standards.</li>
<li>Ph.D. increments were provided to faculty</li>
<li>Highest retention rate for faculty & staff</li>
</ul>
                    </td>
                </tr>
                
                
                  <tr>
                    <td class="highlight" colspan="2">Environmental Awareness & Sustainable Initiatives</td>
                </tr>
                <tr>
                    <td>
                        <p>Green Initiatives</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Solar Plant of 20 KVA installed and generating 80-110 units per day. Bi-directional meter installed</li>
<li>Rainwater harvesting in the campus.</li>
<li>Reduce, reuse and recycle initiatives were implemented.</li>
<li>Promoted reduction in Plastic usage on campus.</li>
<li>Appreciated for Green, Energy and Environment campus.</li></ul>
                    </td>
                </tr>
                
                
                
                <tr>
                    <td class="highlight" colspan="2">Quality Assurance and Enhancement</td>
                </tr>
                <tr>
                    <td>
                        <p>E-governance</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>E-governance was adopted in administration, student admission and assessment and Finance through LMS- knowledge portal, Tally </li>

</ul>
                    </td>
                </tr>

                <!-- Add more rows as necessary based on the structure -->
            </tbody>
        </table>
    </div>
    
    
    <!-- Third Table -->
    <h2 class="text-center mb-4">Institutional Strategic/ Perspective Plan Phase: 2000 – 2007</h2>
 <div class="container my-4">
        <h2 class="text-center mb-4"></h2>
         <table class="table table-bordered table-striped table hover">
            <thead>
                <tr>
                    <th>First Perspective Plan (2000 – 2007)</th>
                    <th>Achievement and Proposed Actions of First Perspective Plan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="highlight" colspan="2">Academic Programmes</td>
                </tr>
                <tr>    
                    <td class="highlight">To offer various undergraduate programmes</td>
                    <td>
                        <p class="text-justify">
                            Following undergraduate and Post Graduate programmes affiliated to Guru Gobind Singh Indraprastha University were offered<br>
                            *   BCA <br>
                            *	MCA<br>
                            *	BBA<br>
1999 -	Set under the Aegis of Mata Leelawati Sikshan Sansthan 	with BCA Undergraduate programmes with 60 students 	intake and 09 faculty members <br>
2003 -	Blossomed into IT Postgraduate institution (MCA)<br>
2003 -	Set up the Undergraduate Management Dept (BBA)<br>
2007 -	Started Evening Shift for both the departments IT and 	Management<br>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="highlight" colspan="2">Academic Excellence & Experiential Learning</td>
                </tr>
                <tr>
                    
                    <td class="highlight">To Nurture Excellence</td>
                    <td>
                        <ul class="committee-list">
                          <li>Academic Excellence</li>
<li>Skill</li>
<li>Leadership</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="highlight">Achievement</td>
                    <td>
                        <ul class="committee-list">
<li>The students bagged many Exemplary Performances in the affiliated University’s exams</li>

                        </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="highlight" colspan="2">Excellence in Research</td>
                </tr>
                <tr>
                    <td>
                        <p>Motivated Faculty to enroll for PhD and carry out research.</p>
                      
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Most of the Faculty Members enrolled for PhD and got awarded.</li>
<li>Every faculty did research and participated in various National & International Conferences / Seminars of repute.</li>
                        </ul>
                    </td>
                </tr>
                
                
                <tr>
                    <td class="highlight" colspan="2">Infrastructure Development & Augmentation</td>
                </tr>
                <tr>
                    <td>
                        <p>Construction of Campus</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>78 Acres of land was allocated by DDA for creation of campus at D-29 Janakpuri Institutional Area</li>
<li>Construction work was initiated and The Institute started functioning from a new  Campus in D-29 Janakpuri Institutional area</li>                </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="highlight" colspan="2">Extension Services</td>
                </tr>
                <tr>
                    <td>
                        <p>Initiatives for Community Welfare and Nation Building</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Initiatives like Blood Bank, Classes for Orphans, Socially & Economically Disadvantaged Students, Cleanliness Drives were organised.</li>
<li>Awards won by many students in co-curriculum and extra-curriculum activities like Anugoonj.</li>
</ul>
                    </td>
                </tr>
                
 
 
                <tr>
                    <td class="highlight" colspan="2">Students’ Support and Progression</td>
                </tr>
                <tr>
                    <td>
                        <p>Training & Placement Sessions</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Various counselling, training and placement sessions were organized.</li>
<li>The students were placed in Wipro, IBM and other organizations to name a few.</li>
</ul>
                    </td>
                </tr>
                
                
                
                
                <tr>
                    <td class="highlight" colspan="2">Faculty and Staff Development</td>
                </tr>
                <tr>
                    <td>
                        <p>Recruitment & Retention of Faculty and Staff</p>
                        
                    </td>
                    <td>
                        <ul class="committee-list">
<li>Faculty were appointed as per the UGC norms.</li>
<li>•	The Institute had the highest retention rate for faculty & staff.</li>
</ul>
                    </td>
                </tr>
                <!-- Add more rows as necessary based on the structure -->
            </tbody>
        </table>
    </div>
    
    
  <div class="container my-4">
      <h1>Availability and Implementation</h1>
    <ul class="committee-list">
        <li>Strategic Goals
            <ul>
                <li>Educational Excellence
                    <ul>
                        <li>Implementation of Outcome-Based Education (OBE):
                            <ul>
                                <li>Defining Outcomes:
                                    <ul>
                                        <li>Define Course Outcomes (CO) for all courses.</li>
                                        <li>Define Program Outcomes (PO) and Program Specific Outcomes (PSO) for all programs.</li>
                                        <li>Measure attainment of CO, PO, and PSO for each program.</li>
                                    </ul>
                                </li>
                                <li>Measurement Tools:
                                    <ul>
                                        <li>Map each evaluation tool to a specific CO or action verb in Bloom’s taxonomy.</li>
                                        <li>Use internal assessments and final tests to measure CO attainment.</li>
                                        <li>Use CO-PO matrix to evaluate program outcomes.</li>
                                        <li>Calculate PEO and GA performance using PO-PEO and PO-GA matrices.</li>
                                    </ul>
                                </li>
                                <li>Extension to Undergraduate Programs:
                                    <ul>
                                        <li>Extend OBE framework to all undergraduate programs.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Student-Centric Pedagogy:
                            <ul>
                                <li>Implement teaching methods that focus on enhancing students' learning capabilities.</li>
                                <li>Conduct regular workshops and training sessions for students to improve performance in various domains.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Infrastructure and Facilities
                    <ul>
                        <li>State-of-the-Art Facilities:
                            <ul>
                                <li>Maintain prime infrastructure with air-conditioned classrooms, LCD projectors, and Wi-Fi.</li>
                                <li>Provide a well-equipped research center and a library with access to journals/ e-resources/books/e-books/e-journals, etc.</li>
                                <li>Regularly update computer labs with the latest technologies.</li>
                            </ul>
                        </li>
                        <li>Campus Development:
                            <ul>
                                <li>Expansion of physical infrastructure to its optimization.</li>
                                <li>Ensure continuous improvement of campus facilities to support academic growth.</li>
                                <li>Provide a centrally air-conditioned auditorium with modern multimedia facilities.</li>
                                <li>Install a 20 KW solar power plant as a supplementary power source.</li>
                                <li>Implement a knowledge portal for easy retrieval of information by staff and students.</li>
                            </ul>
                        </li>
                        <li>Sports and Cultural Facilities:
                            <ul>
                                <li>Provide facilities for sports, games, and cultural activities.</li>
                                <li>Maintain a portable badminton court, well-equipped gym, and yoga center.</li>
                                <li>Organize cultural events and encourage student participation in intercollegiate competitions.</li>
                                <li>Use DDA playgrounds for sports events and annual sports meets.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Faculty Development and Research
                    <ul>
                        <li>Professional Development:
                            <ul>
                                <li>Encourage faculty to attend seminars, workshops, and conferences.</li>
                                <li>Motivate faculty to apply for research projects and provide financial incentives for publications.</li>
                                <li>Offer duty leave and leave for Faculty Development Programs (FDP).</li>
                            </ul>
                        </li>
                        <li>Support and Recognition:
                            <ul>
                                <li>Provide group insurance and other benefits as per government norms.</li>
                                <li>Announce annual awards for best researchers.</li>
                                <li>Organize recreational trips and family get-togethers for employees.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Student Support and Development
                    <ul>
                        <li>Conducive Academic Environment:
                            <ul>
                                <li>Foster a supportive environment with dedicated faculty and modern infrastructure.</li>
                                <li>Implement an open-door policy to encourage interaction between students and faculty.</li>
                                <li>Conduct regular meetings with students and faculty to address issues and seek feedback.</li>
                            </ul>
                        </li>
                        <li>Skill Enhancement:
                            <ul>
                                <li>Offer skill enhancement and syllabus enrichment workshops in various management specializations and emerging technologies.</li>
                                <li>Maintain a robust alumni network to support current students through mentoring and networking opportunities.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Sustainability and Eco-Friendliness
                    <ul>
                        <li>Eco-Friendly Campus:
                            <ul>
                                <li>Maintain an eco-friendly and hygienic campus environment.</li>
                                <li>Implement sustainable practices, including the use of solar power and RO water plants.</li>
                            </ul>
                        </li>
                        <li>Health and Well-Being:
                            <ul>
                                <li>Organize yoga and meditation classes for holistic health of employees and students.</li>
                                <li>Ensure hygienic working conditions for all campus members.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Alumni Engagement
                    <ul>
                        <li>Active Alumni Association:
                            <ul>
                                <li>Strengthen the IITM Alumni Association to foster enduring relationships and enhance industry interactions.</li>
                                <li>Encourage alumni to contribute to infrastructure improvements and industry connections.</li>
                            </ul>
                        </li>
                        <li>Networking and Support:
                            <ul>
                                <li>Leverage the extensive alumni network for mentoring and support of current students.</li>
                                <li>Organize alumni events and networking opportunities to maintain strong connections.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Action Plan
            <ul>
                <li>Short-Term:
                    <ul>
                        <li>Take intake of students to maximum (permissible limit) as per norms of GGSIP University.</li>
                        <li>Continue refining and implementing the OBE framework across all programs.</li>
                        <li>Upgrade existing infrastructure and introduce new technologies in classrooms and labs.</li>
                        <li>Organize regular workshops and training sessions for faculty and students.</li>
                        <li>Enhance alumni engagement through events and networking opportunities.</li>
                    </ul>
                </li>
                <li>Long-Term:
                    <ul>
                        <li>Add new programs and courses affiliated to GGSIP University, which are aligned with emerging technologies and market needs.</li>
                        <li>Expand research initiatives and collaborations with industry and academic institutions National/International.</li>
                        <li>Invest in sustainable campus development.</li>
                        <li>Foster a culture of continuous improvement through regular feedback and assessment.</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
  </div>
</body>
</html>

    </div>
           </p>
           <p class="text-justify"></p>
           <p class="text-justify"></p>
           <p class="text-justify"></p>
           <p class="text-justify"></p>
           <p class="text-justify"></p>
           <p class="text-justify"></p>
           <p class="text-justify"></p>
    
            </div>
          
        </div>
        </div>
            
       


    </div>
</div>
    
<?php
       include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
