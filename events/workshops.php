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
    <title>IITM |Workshops</title>

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
            font-size: 14px; /* Reduced font size */
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
            line-height: 1.5;
        }

        .value-added-section h1 {
            font-size: 10px; /* Reduced font size */
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 7px; /* Further reduced font size */
            color: #333;
            margin-bottom: 15px;
        }

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }

        .carousel-inner {
            max-width: 70vw; /* Restored carousel width */
            margin: 0 auto;
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1); /* Fast and smooth sliding transition */
        }

        .carousel-item img {
            max-height: 300px; /* Restored carousel image height */
            width: auto;
            margin: 0 auto;
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
        <div class="col-md-9">
            <h1 id="iipc">Workshops</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/extra.php">Extra & Co-Curricular Events</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/conference.php">Conference/Seminars/Webinars</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/fdp.php">FDP</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a>
              <a class="dropdown-item" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
        </div>
        <div class="col-md-9">
            
          <div class="underline"></div>
         <div class="container">
              
              <p class="text-justify" style="color: #4b4b4b;">Regular in-house skill enhancement and 
              personality development workshops are conducted at our institution to foster the holistic development 
              of our students. Led by our faculty members and distinguished external experts, these workshops are 
              tailored to assist students in achieving their personal educational and career objectives. 
              They offer students the opportunity to cultivate the essential skills demanded in the professional sphere, 
              thereby preparing them for success in their chosen paths.</p>
              
              
              <hr class="hr-maroon"/>
            
              
               <div class="table-container">
                   <h1>Training Conducted (2025–26)</h1>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>S. No.</th>
            <th>Date</th>
            <th>Type of Activity</th>
            <th>Resource Person(s)</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>1</td><td>06-01-2025 to 15-01-2025</td><td>Advanced Excel & SPSS (MNG)</td><td>Ms. Priya Chetty (Project Guru)</td></tr>
        <tr><td>2</td><td>06-01-2025 to 15-01-2025</td><td>Advanced Excel & SPSS (MNG)</td><td>Ms. Priya Chetty (Project Guru)</td></tr>
        <tr><td>3</td><td>06-01-2025 to 11-01-2025</td><td>Career Excellence & Professional Skills</td><td>Dr. Amit Kumar, Dr. Madhu Ruhil (IITM)</td></tr>
        <tr><td>4</td><td>24-07-2025 to 30-07-2025</td><td>Data Analysis Training Program Using Power BI & Advanced Excel</td><td>Mr. Kundan (Campus Sutra)</td></tr>
        <tr><td>5</td><td>05-01-2026 to 16-01-2026</td><td>Building Smart Dashboards with Excel & Power BI (M1)</td><td>Mr. Kundan (Campus Sutra)</td></tr>
        <tr><td>6</td><td>05-01-2026 to 16-01-2026</td><td>Predictive & Descriptive Analytics with Excel and Power BI (M2)</td><td>Mr. Abhinash Jena (Project Guru)</td></tr>
        <tr><td>7</td><td>05-01-2026 to 16-01-2026</td><td>Advanced Excel & Power BI for Data-Driven Decisions (M3)</td><td>Mr. Pratik (Shape My Skills by DUCAT)</td></tr>
        <tr><td>8</td><td>05-01-2026 to 16-01-2026</td><td>Building Smart Dashboards with Excel & Power BI (E1)</td><td>Mr. Kundan (Campus Sutra)</td></tr>
        <tr><td>9</td><td>05-01-2026 to 16-01-2026</td><td>Predictive & Descriptive Analytics with Excel and Power BI (E2)</td><td>Mr. Abhinash Jena (Project Guru)</td></tr>
        <tr><td>10</td><td>05-01-2026 to 16-01-2026</td><td>Advanced Excel & Power BI for Data-Driven Decisions (E3)</td><td>Mr. Pratik (Shape My Skills by DUCAT)</td></tr>
        <tr><td>11</td><td>05-01-2026 to 09-01-2026</td><td>From Data to Decisions: Mastering Advanced Analytics & Soft Skills</td><td>Dr. Harmeet Malhotra, Mr. Manish Jha, Mr. Nikhil Malhotra, Mr. Anmol Upadhyay (Tata STRIVE / iStep Mentors / T.I.M.E.)</td></tr>
        <tr><td>12</td><td>24-10-2025 to 21-11-2025</td><td>Training Program on Banking, Financial Services & Insurance (BFSI)</td><td>BFSI Subject Matter Experts (Tata STRIVE)</td></tr>
        <tr><td>13</td><td>06-11-2025 to 12-11-2025</td><td>Career Readiness Bootcamp: Preparing for Professional Success</td><td>Mr. Nishant Kumar Verma (Freelance Corporate Trainer)</td></tr>
        <tr><td>14</td><td>06-01-2026 to 15-01-2026</td><td>Industrial Skill-Based Training on Business Analytics: Advanced Excel & Power BI</td><td>Ms. Priya Chetty (Project Guru)</td></tr>
        <tr><td>15</td><td>05-01-2026 to 09-01-2026</td><td>From Data to Decisions: Mastering Advanced Analytics & Soft Skills</td><td>Dr. Harmeet Malhotra (IITM), Mr. Manish Jha (Tata STRIVE), Mr. Anmol Upadhyay (T.I.M.E.)</td></tr>
        <tr><td>16</td><td>12-01-2026 to 16-01-2026</td><td>Business Training Analytics Program</td><td>Mr. Omkar, Mr. Siddarth (KPMG)</td></tr>
        <tr><td>17</td><td>12-01-2026 to 16-01-2026</td><td>Skill Based Training</td><td>Dr. Anurag Tiruwa (IITM)</td></tr>
        <tr><td>18</td><td>06-01-2025 to 11-01-2025</td><td>Integrating and Utilizing Sensors for IoT in Diverse Real-World Scenarios</td><td>Dr. Manzoor Ansari (IITM)</td></tr>
        <tr><td>19</td><td>06-01-2025 to 11-01-2025</td><td>Winter School on Web Development with MERN Stack</td><td>Ms. Kavita Srivastava (IITM)</td></tr>
        <tr><td>20</td><td>13-01-2025 to 17-01-2025</td><td>Winter School on Building Modern Web App with MERN Stack</td><td>Ms. Kavita Srivastava (IITM)</td></tr>
        <tr><td>21</td><td>12-01-2026 to 16-01-2026</td><td>Winter School on Intelligent IoT Systems and Applications</td><td>Dr. Manzoor Ansari (IITM)</td></tr>
        <tr><td>22</td><td>05-01-2026 to 10-01-2026</td><td>Winter School on Foundations of Deep Learning: Concepts, Models and Applications</td><td>Dr. Saima Saleem, Ms. Lakshmi Kumari (IITM)</td></tr>
        <tr><td>23</td><td>08-01-2026 to 16-01-2026</td><td>Winter School on Web Development and Deployment</td><td>Ms. Kavita Srivastava (IITM)</td></tr>
        <tr><td>24</td><td>June 2025</td><td>Summer Training on Data Science</td><td>Prateek Gupta (Shape My Skills)</td></tr>
        <tr><td>25</td><td>26-12-2025 to 30-12-2025</td><td>Summer Training on MERN Stack</td><td>Raman Tiwari (S.O. Infotech)</td></tr>
        <tr><td>26</td><td>26-12-2025 to 30-12-2025</td><td>Summer Training on Artificial Intelligence</td><td>Mohammad Jari, Amandeep Singh (IKIGAI School of AI)</td></tr>
        <tr><td>27</td><td>26-12-2025 to 30-12-2025</td><td>Winter School on Data Analytics</td><td>Sourabh Singh (IBM in collaboration with ICT Academy)</td></tr>
        <tr><td>28</td><td>25-08-2025</td><td>Smart Finance Smart Future: A Roadmap for Young Minds</td><td>Mr. Manoj Gupta (Wealth Building Coach, NGO – Aapki Apni Pehchaan)</td></tr>
        <tr><td>29</td><td>23-09-2025</td><td>Happiness in Wellness: Empowering Youth for Life</td><td>Ms. Tanisha Jain (Counselling Psychologist)</td></tr>
        <tr><td>30</td><td>15-10-2025</td><td>Mock GD & PI</td><td>Dr. Gopal Singh Latwal, Dr. Latika Malhotra, Dr. Sonam Arora, Dr. Himanshu Matta</td></tr>
        <tr><td>31</td><td>29-10-2025</td><td>Bridging Economics and Econometrics</td><td>Dr. Ruhee Mittal (SOL, University of Delhi)</td></tr>
        <tr><td>32</td><td>30-10-2025</td><td>Psychometric Testing</td><td>Dr. Sonam Arora</td></tr>
        <tr><td>33</td><td>30-10-2025</td><td>Corporate Ethics: Focus on Time Management</td><td>Dr. Mandeep Singh</td></tr>
        <tr><td>34</td><td>01-11-2025</td><td>Data Driven Decision Making</td><td>Dr. Gopal Singh Latwal</td></tr>
        <tr><td>35</td><td>30-10-2025</td><td>Cracking GDPI and Aptitude Test</td><td>Mr. Sharad Awasthi, Mr. Navneet Anand (Career Launcher)</td></tr>
        <tr><td>36</td><td>13-11-2025</td><td>Fitness and Nutrition for Productivity</td><td>Ms. Ankita Pandey (Singapore)</td></tr>
        <tr><td>37</td><td>13-11-2025</td><td>Aptitude Enhancement for Placement Success</td><td>Mr. Navneet Anand (Career Launcher)</td></tr>
        <tr><td>38</td><td>02-08-2025 to 08-08-2025</td><td>One Week Summer School on Influencer Marketing</td><td>Sakshi Bhayana; Sana Srivastava</td></tr>
        <tr><td>39</td><td>05-01-2026 to 10-01-2026</td><td>One Week Winter School on AI & Future of Media</td><td>Ms. Vertika Saxena; Mr. Pradeep Singh; Mr. Manoj Kumar Tripathi; Bharat Parmar; Ms. Anchal Sachdeva; Mr. Pankaj Yadav</td></tr>
    </tbody>
</table>

                   
                                      <h1>Workshops (2025-26)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
<tr><td>1</td><td>06-08-2025</td><td>Time Management: Tool of Success</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>2</td><td>07-08-2025</td><td>See it, Set it, Achieve It: The Power of Goal Setting</td><td>Ms. Disha Garg</td></tr>
        <tr><td>3</td><td>07-08-2025</td><td>Student Wellbeing – Thrive & Adapt</td><td>Ms. Lavanya Chadha</td></tr>
        <tr><td>4</td><td>06-08-2025</td><td>Effective Communication Skills in Management</td><td>Ms. Akanksha Agarwal</td></tr>
        <tr><td>5</td><td>19-09-2025</td><td>ER Diagrams: From Concepts to Databases</td><td>Ms. Ruchika</td></tr>
        <tr><td>6</td><td>08-09-2025</td><td>Industrial IoT in POM</td><td>Dr. Manzoor Ansari</td></tr>
        <tr><td>7</td><td>05-08-2025</td><td>Group Presentation and Discussion</td><td>Ms. Komal Goel</td></tr>
        <tr><td>8</td><td>26-11-2025</td><td>Understanding In-House Industrial Training</td><td>Prof. (Dr.) Deepali Saluja, Dr. Sunitha Ravi</td></tr>
        <tr><td>9</td><td>17-09-2025</td><td>Building a Great Profile: Personal Branding</td><td>Mr. Harsh Wadhwa</td></tr>
        <tr><td>10</td><td>27-08-2025</td><td>Tally Prime: Benefits & Opportunities</td><td>Mr. Dinesh Khatri</td></tr>
        <tr><td>11</td><td>11-09-2025</td><td>Group Discussion Strategies</td><td>Dr. Chetan Bajaj</td></tr>
        <tr><td>12</td><td>23-09-2025</td><td>LinkedIn Advantage: Networking for Success</td><td>Dr. Aarti Dawra</td></tr>
        <tr><td>13</td><td>29-10-2025</td><td>Mission Placement: GD & Interview Skills</td><td>Mr. Mohit Sharma</td></tr>
        <tr><td>14</td><td>31-10-2025</td><td>Mock GD & Interview Masterclass</td><td>Mr. Ramit Bedi</td></tr>
        <tr><td>15</td><td>07-01-2026</td><td>Life Skills Employability Training Programme</td><td>Ms. Smriti Arora (Naandi Foundation)</td></tr>
        <tr><td>16</td><td>12-02-2026</td><td>Workshop on Resume Building</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>17</td><td>19-02-2026</td><td>Business Simulation Workshop</td><td>Dr. Deepika Arora, Mr. Jatin Rawat, Mr. Romil Chopra</td></tr>
        <tr><td>18</td><td>25-02-2026</td><td>Case Study Methodology</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>19</td><td>28-10-2025 to 01-11-2025</td><td>Global Immersion Program (Dubai)</td><td>Corporate Mentors</td></tr>
        <tr><td>20</td><td>13-10-2025</td><td>AI Kit Exposure & Hands-On Practice</td><td>Ducat Trainers</td></tr>
        <tr><td>21</td><td>09-10-2025</td><td>CodeSphere: Programming Challenge</td><td>Ms. Komal Sharma</td></tr>
        <tr><td>22</td><td>14-11-2025</td><td>CEREBRO Coding Challenge</td><td>Dr. Ramandeep Kaur</td></tr>
        <tr><td>23</td><td>13-11-2025</td><td>BRAINWIRED Quiz</td><td>AIEC & Dept. of Computer Science</td></tr>
        <tr><td>24</td><td>15-10-2025</td><td>Unlocking Insights with Data Analytics</td><td>Dr. Sunil Sikka</td></tr>
        <tr><td>25</td><td>31-10-2025</td><td>Tableau Hands-On Workshop</td><td>Dr. Abha Rajpoot</td></tr>
        <tr><td>26</td><td>13-10-2025</td><td>Autonomous Systems in Aerospace (UAV)</td><td>Mr. Avanish Kumar Singh</td></tr>
        <tr><td>27</td><td>10-09-2025</td><td>Exploring Generative AI & RAG</td><td>Mr. Dheeraj Kumar</td></tr>
        <tr><td>28</td><td>11-09-2025</td><td>CALM in Chaos: Change & Conflict</td><td>Mr. Manish Jha</td></tr>
        <tr><td>29</td><td>31-10-2025</td><td>RAW – The Unfiltered Talk Series</td><td>Industry Experts Panel</td></tr>
        <tr><td>30</td><td>11-11-2025</td><td>Stigma of Mental Illness in Society</td><td>Dr. Sonam Arora</td></tr>
        <tr><td>31</td><td>18-03-2025</td><td>Basics of Excel and MS Word</td><td>CA Rohit Kumar</td></tr>
        <tr><td>32</td><td>08-08-2025</td><td>Bridge Course: Business Mathematics</td><td>Ms. Akansha</td></tr>
        <tr><td>33</td><td>08-08-2025</td><td>Fundamentals of Accounting</td><td>Ms. Shweta Aneja</td></tr>
        <tr><td>34</td><td>26-08-2025 to 27-08-2025</td><td>Transforming Imaginations into Pixels</td><td>Ms. Srishti Manchanda; Mr. Sameer Ashraf; Mr. Mayank Midham; Ms. Aditi Singh</td></tr>
        <tr><td>35</td><td>13-09-2025</td><td>Workshop on Cyber Crime and Security</td><td>Adv. Piyush Tandon</td></tr>
        <tr><td>36</td><td>16-09-2025</td><td>Dealing in Project Finance</td><td>CA Vishal Goel</td></tr>
        <tr><td>37</td><td>25-09-2025 to 26-09-2025</td><td>Two Days Workshop on Life Skills</td><td>Mr. Keshav Bhatia</td></tr>
        <tr><td>38</td><td>15-10-2025</td><td>Stress Management through Yoga and Pranayam</td><td>Dr. Gopal Singh Latwal</td></tr>
        <tr><td>39</td><td>21-10-2025</td><td>Psychometric Testing for Students</td><td>Dr. Sonam Arora</td></tr>
        <tr><td>40</td><td>07-11-2025 to 08-11-2025</td><td>Theatre for Communication Excellence</td><td>Dr. Sandhya R.</td></tr>
        <tr><td>41</td><td>11-11-2025</td><td>Workshop on Modern Creator Path</td><td>Ms. Mehak Kapoor</td></tr>
        <tr><td>42</td><td>19-02-2026</td><td>Resume Building</td><td>Mr. Pawan Kumar</td></tr>
        <tr><td>43</td><td>26-02-2026</td><td>Importance of Media Membership & Ethics in Media Industry</td><td>Mr. Suchivrat Arya</td></tr>
        <tr><td>44</td><td>16-03-2026</td><td>CV Building Workshop</td><td>Dr. Mandeep Singh</td></tr>
        <tr><td>45</td><td>17-03-2026</td><td>AI and Technology in Investment, Resume Building, Startup Execution</td><td>Jaipuriya Institute of Management</td></tr>
        <tr><td>46</td><td>13-04-2026</td><td>GD Interview Skill Builder</td><td>Mr. Tijendra Sharma</td></tr>
   

                
 
 
            
            </tbody>
        </table>
                   
                   <h1>Workshops (2024-25)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>	1	</td><td>	09.11.2024	</td><td>	Big data, cloud computing & IOT Laboratory jamia Millia islamia	</td><td>	Dr. Manzoor Ansari	</td></tr>
                        <tr><td>	2	</td><td>	01.07.24-02.08.24	</td><td>	Summer Training on AI & DS/ML	</td><td>	Mr. Vaseem Durrani	</td></tr>
                        <tr><td>	3	</td><td>	01-10.10.2024	</td><td>	Self-defense workshop	</td><td>	Dr. Harmeet Malhotra	</td></tr>
                        <tr><td>	4	</td><td>	07.10.2024	</td><td>	Navigating natural language	</td><td>	Dr.Shubhra Goyal	</td></tr>
                        <tr><td>	5	</td><td>	9/10/2024	</td><td>	Introduction to cyber security	</td><td>	Mr Kandarp Kumar Thakur	</td></tr>
                        <tr><td>	6	</td><td>	11.10.2024	</td><td>	Digital forensics	</td><td>	Ms.Anaika Kumari	</td></tr>
                        <tr><td>	7	</td><td>	02-20.01.2025	</td><td>	Winter workshop on ICT academy- Honeywell Cyber Security Women Empowerment CSR Training Program	</td><td>	Mr. Salik Hayat Makhmoor ICT Trainer	</td></tr>
                        <tr><td>	8	</td><td>	06-11.01.2025	</td><td>	Winter school on web development with mern stack	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	9	</td><td>	6-11.01.2025	</td><td>	One week Winter Training Program “ Integrating and Utilizing Sensors for IOT in Diverse Real-World Scenarios”	</td><td>		</td></tr>
                        <tr><td>	10	</td><td>	10.01.2025	</td><td>	Workshop on data analytics	</td><td>	Dr. Manzoor Ansari	</td></tr>
                        <tr><td>	11	</td><td>	13-17.01.2025	</td><td>	Building modern web App with Mern stack	</td><td>	Mr. Prateek Gupta	</td></tr>
                        <tr><td>	12	</td><td>	16.01.2025	</td><td>	One day workshop on java full stack and AWS restart	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	13	</td><td>	23.01.2024	</td><td>	Sustainability through smart technology	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	14	</td><td>	10.02.2025	</td><td>	Power BI	</td><td>	Dr. Manzoor Ansari	</td></tr>
                        <tr><td>	15	</td><td>	19.02.2025	</td><td>	AI tools for Data Analytics	</td><td>	Mr Prateek Gupta	</td></tr>
                        <tr><td>	16	</td><td>	21.02.2025	</td><td>	Aptitude Session	</td><td>	Mr. Akash Manchanda	</td></tr>
                        <tr><td>	17	</td><td>	03.03.2025	</td><td>	Yoga Workshop	</td><td>	Ms. Kavita Srivastava	</td></tr>
                        <tr><td>	18	</td><td>	04.03.2025	</td><td>	Yoga Workshop	</td><td>	Dr. Gopal Singh Latwal	</td></tr>
                        <tr><td>	19	</td><td>	06-18.01.25	</td><td>	Certified Workshop on Advanced Excel	</td><td>	Ms.Preeti and Dr. Harmeet Malhotra	</td></tr>
                        <tr><td>	20	</td><td>	20.01.25	</td><td>	Workshop on Minor Research Project	</td><td>	Ms. Saguna Khajuria	</td></tr>
                        <tr><td>	21	</td><td>	21.01.25	</td><td>	Workshop on Major Research Project	</td><td>	Mr.Puneet Chawla	</td></tr>
                        <tr><td>	22	</td><td>	03.09.2024	</td><td>	Mastering time Strategies for balancing productivity	</td><td>	Dr. Latika Malhotra	</td></tr>
                        <tr><td>	23	</td><td>	23.08.2024	</td><td>	Lanquill	</td><td>	Ms. Priya Gupta 	</td></tr>
                        <tr><td>	24	</td><td>	23.08.2024	</td><td>	Business Simulation	</td><td>	Dr. Deepika Arora	</td></tr>
                        <tr><td>	25	</td><td>	24.09.2024	</td><td>	Stress Management:An Effective tool to improve efficiency at business world	</td><td>	Prof. Dr. Deepali Saluja 	</td></tr>
                        <tr><td>	26	</td><td>	29.08.2024	</td><td>	Ai in digital Marketing	</td><td>	Mr. Jay dattani	</td></tr>
                        <tr><td>	27	</td><td>	29.08.2024	</td><td>	Ai in digital marketing	</td><td>	Mr. Jay dattani	</td></tr>
                        <tr><td>	28	</td><td>	31.08.2024	</td><td>	Summer training project report	</td><td>	Dr, Anurag Tiruwa 	</td></tr>
                        <tr><td>	29	</td><td>	09.10.2024	</td><td>	Creation and usage of digital locker	</td><td>	Dr. Deepika Arora	</td></tr>
                        <tr><td>	30	</td><td>	10.10.2024	</td><td>	Complete guide to case study methodology	</td><td>	Prof. Navin Verma	</td></tr>
                        <tr><td>	31	</td><td>	14.10.24-16.10.24	</td><td>	Yoga & medication	</td><td>	Dr. Gopal Singh Latwal	</td></tr>
                        <tr><td>	32	</td><td>	15-10.2024	</td><td>	Ace the opportunity	</td><td>	Dr. Madhu Ruhil	</td></tr>
                        <tr><td>	33	</td><td>	06.11.2024	</td><td>	The global career landscape	</td><td>	Ms.megha manshandana	</td></tr>
                        <tr><td>	34	</td><td>	13-14.11.2024	</td><td>	Financial Eductaionfor young India	</td><td>	Dr. Shikha Gupta	</td></tr>
                        <tr><td>	35	</td><td>	13.11.2024	</td><td>	Mastering the techniques for MBA through CAT	</td><td>	Mr. Praveen khanna	</td></tr>
                        <tr><td>	36	</td><td>	06.01.2025-15.01.2025	</td><td>	In-house Industrial Skill Based training Program	</td><td>	Prof.(Dr.) Rachita Rana 	</td></tr>
                        <tr><td>	37	</td><td>	16.01.205	</td><td>	Building better Future 	</td><td>	Mr.Bhavish tiwari	</td></tr>
                        <tr><td>	38	</td><td>	16.01.2025	</td><td>	Empowering future leader	</td><td>	Mr.Bhavish tiwari	</td></tr>
                        <tr><td>	39	</td><td>	29.01.25	</td><td>	Resume Writing	</td><td>	Mr. Sunil Dua	</td></tr>
                        <tr><td>	40	</td><td>	29.01.2025	</td><td>	POSH ACT awareness	</td><td>	Dr, Shuchi Dikshit	</td></tr>
                        <tr><td>	41	</td><td>	11.02.2025	</td><td>	BULLRISERS	</td><td>	Mr. Nachiket Save	</td></tr>
                        <tr><td>	42	</td><td>	20.02.2025	</td><td>	Power BI	</td><td>	Mr. Prateek Gupta	</td></tr>
                        <tr><td>	43	</td><td>	20.09.2024	</td><td>	Radio microphone	</td><td>	IITM Mass Communication	</td></tr>
                        <tr><td>	44	</td><td>	20.09.2024	</td><td>	Exposure in Photography	</td><td>	IITM Mass Communication	</td></tr>
                        <tr><td>	45	</td><td>	11.10.2024	</td><td>	Camera presence : How to connect with the audience	</td><td>	Ms. Sana Srivastva	</td></tr>
                        <tr><td>	46	</td><td>	14.10.2024	</td><td>	Digital media writing	</td><td>	Ms. Anshu naithani	</td></tr>
                        <tr><td>	47	</td><td>	14.10.2024	</td><td>	Writing on Radio	</td><td>	IITM Mass Communication	</td></tr>
                        <tr><td>	48	</td><td>	01.02.2024	</td><td>	CSR and Ethical Business Practices in media	</td><td>	Ms. Nirmala B. walter	</td></tr>

                
 
 
            
            </tbody>
        </table>
                   
        <h1>Workshops (2023-24)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>18.8.23</td><td>Retirement and Tax Planning</td><td>Mr. Dhirendra Rawat</td></tr>
                <tr><td>2</td><td>18.9.23</td><td>The Role of Youth in Bringing about Social Change</td><td>Ms. Anisha</td></tr>
                <tr><td>3</td><td>22.9.23</td><td>From Theory to Practice: Mutual Funds Derivatives, and Risk Management</td><td>Ms. Soumya</td></tr>
                <tr><td>4</td><td>26.9.23</td><td>Network Security & Ethical Hacking</td><td>Mr. Sandeep Kumar</td></tr>
                <tr><td>5</td><td>13-17.10.23</td><td>Life Skills</td><td>Ms. Seema Shruti, Ms. Rita Dixit</td></tr>
                <tr><td>6</td><td>13.10.23</td><td>GitHub Services</td><td>Mr. Piyush Pandey</td></tr>
                <tr><td>7</td><td>16.10.23</td><td>How to Prepare Presentations</td><td>All Mentors</td></tr>
                <tr><td>8</td><td>16.10.23</td><td>How to Prepare Assignments and Presentations</td><td>Ms. Manisha, Ms. Ankita Sharma, Dr. Jyoti Bhanbhani</td></tr>
                <tr><td>9</td><td>17.10.23</td><td>Digital Marketing</td><td>Prof. Somraj Bhattacharjee</td></tr>
                <tr><td>10</td><td>19.10.23</td><td>Strategic Planning in Project Management</td><td>Ms. Saguna Khajuria</td></tr>
 
  <tr><td>11</td><td>20.10.23</td><td>Workshop on Resume Building</td><td>Dr. Latika Malhotra, Associate Professor</td></tr>
                <tr><td>12</td><td>23.10.23</td><td>How to Prepare a Case Study</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>13</td><td>25.10.23</td><td>Research in the Digital Age: Leveraging ICT Tools and Techniques</td><td>Ms. Monika</td></tr>
                <tr><td>14</td><td>26.10.23</td><td>Educational Visit to Delhi Technological University UAS Lab</td><td>DTU</td></tr>
                <tr><td>15</td><td>26.10.23</td><td>Writing for Printing Digital Media</td><td>Mr. Prabhat Upadhaya</td></tr>
                <tr><td>16</td><td>27.10.23</td><td>Business Simulation</td><td>Mr. Rahul Jain</td></tr>
                <tr><td>17</td><td>9.11.23</td><td>Awareness of POSH Act</td><td>Ms. Parul Sharma, Assistant Prof.</td></tr>
                <tr><td>18</td><td>10.11.23</td><td>Quiz India Movement</td><td>RJ. Rocky</td></tr>
                <tr><td>19</td><td>20.11.23</td><td>Mock Stock</td><td>Mr. Puneet Chawala, Mr. Saksham Rana</td></tr>
                <tr><td>20</td><td>30.11.23</td><td>Indian Folk Art Workshop</td><td>Ms. Muskan</td></tr>
                
 <tr><td>21</td><td>31.1.24</td><td>Workshop on Artificial Intelligence</td><td>Prof.(Dr.) Rakesh Kumar, University of Petroleum, Dehradun</td></tr>
                <tr><td>22</td><td>31.1.24</td><td>Workshop on Forthcoming Semester - MBA</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>23</td><td>31.1.24</td><td>Workshop on Career Counseling</td><td>Mr. Bharat Sharma, Jamboree Education</td></tr>
                <tr><td>24</td><td>31.1.23</td><td>Workshop on Cyber Awareness Programme</td><td>Delhi Police</td></tr>
                <tr><td>25</td><td>1.2.24</td><td>Workshop on How to Crack a High Paying Role</td><td>Mr. Nikhil Gaur, Co-founder, HiveSchool</td></tr>
                <tr><td>26</td><td>3.2.24</td><td>Corporate Mentorship Session</td><td>Mr. Karan Dhami, Mr. Sarthak Gupta</td></tr>
                <tr><td>27</td><td>7.2.24</td><td>Workshop on Psychometric Testing</td><td>Dr. Sonam Arora</td></tr>
                <tr><td>28</td><td>7.2.24</td><td>Workshop on Digital Empowerment</td><td>Dr. Amit Kumar, Mr. Puneet Chwala</td></tr>
                <tr><td>29</td><td>17.11.23</td><td>Importance of Python Programming</td><td>Dr. Sudhir Kumar Sharma</td></tr>
                <tr><td>30</td><td>1.2.24</td><td>Workshop on IOT Explorer: Journey to M2M Communication IOT Academy</td><td>Ms. Anjali Chauhan</td></tr>
                <tr><td>31</td><td>1.2.24</td><td>Pre-placement Workshop on “How to Crack a High-paying Role”</td><td>Mr. Nikhil Gaur</td></tr>
                <tr><td>32</td><td>6.2.24</td><td>Minor Project-I</td><td>Dr. Vandana Raghava</td></tr>
                <tr><td>33</td><td>7.2.24</td><td>Major Research Project</td><td>Ms. Saguna Khajuria</td></tr>
                <tr><td>34</td><td>12.2.24</td><td>Self Defense Training Programme</td><td>Delhi Police West District</td></tr>
                <tr><td>35</td><td>12.2.24</td><td>Yoga Workshop</td><td>Dr. Gopal Singh Latwal</td></tr>
                <tr><td>36</td><td>14.2.24</td><td>Public Speaking</td><td>Mr. Sunil Dua</td></tr>
                <tr><td>37</td><td>15.2.24</td><td>Building a Successful Startup: Insights from Real-life Case Studies</td><td>Dr. Parul Manchanda</td></tr>
                <tr><td>38</td><td>24.2.24</td><td>Yoga Workshop</td><td>Dr. Gopal Singh Latwal</td></tr>
                <tr><td>39</td><td>26.2.24</td><td>Workshop on Minor Project</td><td>Dr. Vandana Raghava</td></tr>
                <tr><td>40</td><td>27.2.24</td><td>Click Kar: One Day DSLR Workshop</td><td>Mr. Deepak and Mr. Pankaj</td></tr>
                <tr><td>41</td><td>27.2.24</td><td>Global Horizon: Unlocking Opportunities through Higher Education Abroad</td><td>Mr. Kapil Chandok</td></tr>
                <tr><td>42</td><td>28.2.24</td><td>UAV Services & Technology</td><td>Mr. Sudhir Kumar Sharma</td></tr>
                <tr><td>43</td><td>6.3.24</td><td>Business Simulation</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>44</td><td>7.3.24</td><td>Stock Market</td><td>Mr. Alok Sharma</td></tr>
                <tr><td>45</td><td>13.3.24</td><td>Workshop on Digital Verification by Google News Initiative and Data Leads</td><td>Dr. Archna Kumari</td></tr>
                <tr><td>46</td><td>6.3.24</td><td>Crafting Impactful Resumes</td><td>Dr. Mandeep Singh</td></tr>
                <tr><td>47</td><td>14.3.24</td><td>Data Analytics using Python</td><td>Ms. Sheetal Mavi</td></tr>
                <tr><td>48</td><td>20.3.24</td><td>Workshop on IOT: Journey to M2M Communication by IOT Academy Noida</td><td>Dr. Manzoor</td></tr>
                <tr><td>49</td><td>10.4.24</td><td>Corporate Mentorship Session</td><td>Ms. Gentina George</td></tr>
                <tr><td>50</td><td>14.4.24</td><td>Corporate Mentorship Session</td><td>Mr. Nitin Bhandari</td></tr>
                <tr><td>51</td><td>18.4.24</td><td>Front End Development using Angular</td><td>Ms. Kavita Srivastava</td></tr>
                <tr><td>52</td><td>30.4.24</td><td>Enacting Gender Equity: Understanding and Applying Regulation 16 and AICTE Standards</td><td>Prof. Namita Rajput, Professor at Sri Aurobindo College</td></tr>
                <tr><td>53</td><td>7.2.24</td><td>Psychometric Testing</td><td>Dr. Sonam Arora</td></tr>
                <tr><td>54</td><td>20.3.24</td><td>Workshop on Yoga</td><td>Dr. Gopal Singh Latwal</td></tr>
                <tr><td>55</td><td>17.5.24</td><td>Summer Training Report</td><td>Dr. Amit Kumar</td></tr>
                <tr><td>56</td><td>15.5.24</td><td>Internship Project Report</td><td>Mr. Puneet Chawla</td></tr>
                <tr><td>57</td><td>18.3.24</td><td>Mastering the Art of News</td><td>Mr. Vivek Srivatav</td></tr>
            
            </tbody>
        </table>

        <h1>Workshops (2022-23)</h1>
             <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>29.9.22</td><td>Workshop on Profession Email Writing</td><td>Dr. Ruby Daihya</td></tr>
                <tr><td>2</td><td>4.11.22</td><td>Barclays Life Skills Virtual Mentorship Program – Digital Skills for Enhanced Productivity</td><td>Barclay’s</td></tr>
                <tr><td>3</td><td>15.11.22</td><td>Workshop on Banking, Financial Services and Insurance Knowledge</td><td>Mr. Raghav Jain</td></tr>
                <tr><td>4</td><td>17.11.22</td><td>Workshop on Digital Detox & Success Mantras</td><td>BK Sisters</td></tr>
                <tr><td>5</td><td>26.11.22</td><td>Workshop on Google Hacks To Code</td><td>Mr. Piyush Pandey</td></tr>
                <tr><td>6</td><td>14.10.22</td><td>Barclays Life Skills for Employability</td><td>Corporate Persons from Barclay’s</td></tr>
                <tr><td>7</td><td>12.12.22</td><td>Workshop on Roadmap “To Get Into MAANG Companies”</td><td>Mr. Lakshay</td></tr>
                <tr><td>8</td><td>29-11.28-12.22</td><td>Induction Programme for BCA Students</td><td>IITM Faculty Members</td></tr>
                <tr><td>9</td><td>27-28.02.23</td><td>Corporate Mentorship Program-Corporate Behavioural Skills and Mentoring</td><td>Mr. Akash Grover, Ms. Sakshi Chopra</td></tr>
                <tr><td>10</td><td>12.03.23</td><td>Corporate Training Session on Inter Personal Training</td><td>Mr. Akshat Singhal</td></tr>
                <tr><td>11</td><td>04.03.23</td><td>Workshop on How to Make a Good Project Report</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>12</td><td>15.03.23</td><td>Workshop on Minor Project</td><td>Dr. Madhu Ruhil</td></tr>
                <tr><td>13</td><td>16.03.23</td><td>Workshop on Minor Project</td><td>Ms. Saguna Khajuria</td></tr>
                <tr><td>14</td><td>17.03.23</td><td>Workshop on Project Methodology</td><td>Dr. Deepika Arora</td></tr>
                <tr><td>15</td><td>25.03.23</td><td>Case Study Competition: G-20 Nations</td><td>Dr. Sunitha Ravi & Ms. Sunakshi</td></tr>
                <tr><td>16</td><td>28.03.23</td><td>Student Exchange Programme</td><td>Dr. Shalini Vermani, Ms. Ruchi Malik</td></tr>
                <tr><td>17</td><td>12.04.23</td><td>Workshop on Minor Project</td><td>Dr. Latika Malhotra, Associate Professor, IITM</td></tr>
                <tr><td>18</td><td>13.04.23</td><td>Workshop on Research Project</td><td>Mr. Raghav Jain, Assistant Professor, IITM</td></tr>
                <tr><td>19</td><td>09.05.23</td><td>Workshop on Tally International Certification</td><td>Ms. Deepa Negi-BFSI Trainer, CQS Trainings Pvt. Ltd.</td></tr>
                <tr><td>20</td><td>26.05.23</td><td>Workshop on Financial Literacy</td><td>CA Nishant Kumar</td></tr>
                <tr><td>21</td><td>29.05.23</td><td>Workshop on Financial Derivatives</td><td>Mr. Himanshu Arora</td></tr>
            </tbody>
        </table>

        
    </div>
    <div style="height: 10vh;"></div>
              <div style="margin:0;width:100%;">
                   <div class="container">
                             <div class="row">
                  <div id="my-carousel5" class="carousel slide carousel-fade" data-ride="carousel" style="margin-right: auto;margin-left: auto;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#my-carousel5" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel5" data-slide-to="1"></li>
        <li data-target="#my-carousel5" data-slide-to="2"></li>
    </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
      <div class="carousel-item active" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/workshops/icc.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight:bolder;margin-top:2rem;color: #fff; font-size: 1.5rem; text-align: center;">Workshop <br>on<br> Enacting Gender Equity:<br> Understanding and Applying <br>Regulation 16 and<br> AICTE Standards </h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue:</strong> IITM Janakpuri, New Delhi</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> April 30, 2024</h2>
             </div>
      </div>
     </div>
       <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/workshops/wm.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight:bolder;margin-top:2rem;color: #fff; font-size: 1.5rem; text-align: center;">Workshop on <br>Mastering the Art of News:<br> Techniques and Strategies <br>for Effective Reporting <br>( Beyond Curriculum)</h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue:</strong> IITM Janakpuri, New Delhi</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> March 18, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/workshops/wm2.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight:bolder;margin-top:2rem;color: #fff; font-size: 1.5rem; text-align: center;">Workshop on <br>Digital Verification <br>by<br> Google News Initiative <br>and Data Leads</h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue:</strong> IITM Janakpuri, New Delhi</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> March 13, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/workshops/wm3.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight:bolder;margin-top:2rem;color: #fff; font-size: 1.5rem; text-align: center;">Workshop on<br> "Data Analytics using python" </h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue:</strong> IITM Janakpuri, New Delhi</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> March 14, 2024</h2>
             </div>
      </div>
     </div>
      <!--<div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/workshops/nnn.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 class="tgfmlt" style="font-weight:bolder;margin-top:2rem;">Workshop cum Competition  on “Mock Stock” </h1>
                 <h2 class="tgfmlt" style=""><strong>Venue:</strong> IITM Janakpuri, New Delhi</h2>
                 <h2 class="tgfmlt" style=""></strong>Date:</strong> November 20, 2023</h2>
             </div>
      </div>
     </div>-->
     
    
   
  </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#my-carousel5" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel5" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

             
              </div>
         

</div>
</div>
</div>
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
