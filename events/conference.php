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
    <title>IITM | Conference and Seminars</title>

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
        
        .carousel-image {
            width: 80%;
            height: auto;
            object-fit: cover;
            margin: 0 auto;
        }
        .carousel-item {
            width: 70vw;
            margin-left: 0;
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
            <h1 id="iipc">Conference/Seminars/Webinars</h1>
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
              
              <p class="text-justify" style="color: #4b4b4b;">The routine academic gatherings 
              play a vital role in facilitating the exchange of knowledge and research among our faculty members, 
              students, and scholars. Serving as forums for engaging with experts in academia, they offer opportunities 
              for information dissemination. Through conferences, seminars, and webinars, faculty members and students 
              are exposed to contemporary paradigms and the latest advancements in their respective fields. Notably, our conferences have received funding 
              support from esteemed government agencies such as the Ministry of Science and Technology, DRDO, 
              and the Indian Council for Social Science Research (ICSSR)..</p>
              
              
              <hr class="hr-maroon"/>
            
              
               <div class="table-container">
                     <h2 class="text-center mb-4">Conferences (2025-26)</h2>
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
        <tr>
            <td>1</td>
            <td>07-08 Nov, 2025</td>
            <td>Springer International Conference: International Conference on Advances in Computational Intelligence and Applications – 2025</td>
            <td>
                Prof. (Dr.) Narayan C. Debnath, Founding Dean, School of Computing and Information Technology, Eastern International University (EIU), Vietnam;
                Prof. (Dr.) D. K. Lobiyal, Professor, JNU, Delhi, India;
                Prof. (Dr.) Rajkumar Buyya, Director, CLOUDS Laboratory, Australia;
                Prof. (Dr.) Jemal H. Abawajy, Professor, Deakin University, School of Information Technology, Australia;
                Prof. (Dr.) Rytis Maskeliunas, Kaunas University of Technology, Lithuania;
                Prof. (Dr.) Sanjay Misra, Senior Scientist at IFE, Halden, Norway;
                Prof. (Dr.) Vinod Sharma, Director, Ramnagar Campus, University of Jammu, India;
                Prof. (Dr.) Mansaf Alam, Professor, Department of Computer Science, Jamia Millia Islamia, Delhi, India;
                Mr. Amit Sharma, Senior Principal Data Architect, Infosys, Gurugram, Haryana, India;
                Prof. (Dr.) Renu Balyan, State University of New York College, New York, United States
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>20-21 Sept, 2025</td>
            <td>AICTE Sponsored: Driving Innovation and Sustainability: Bridging Management, Economics, Business, Social Science, and Entrepreneurship</td>
            <td>
                Prof. (Dr.) Anil Sahasrabudhe, Chairman NAAC;
                Prof. Devi Singh, Former Director, IIM Lucknow;
                Prof. Deepak Tandon, Distinguished Professor, IMS;
                Dr. Preeti Tak, Program Director of Doctoral Program, IIFT;
                Mr. Ishaan Taneja, First Gen Entrepreneur;
                Dr. Neha Puri, Associate Professor, Amity College of Commerce & Finance
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>13-14 Nov, 2025</td>
            <td>National Conference on Synergizing Media, Management & Technology: Driving Integrity, Innovation and Entrepreneurship for Viksit Bharat @ 2047 (SMMT2025)</td>
            <td>
                Prof. (Dr.) A.K. Saini, Director-Development, GGSIPU;
                Prof. (Dr.) Bandana Jha, Chairperson, Centre of Indian Languages, JNU;
                Prof. (Dr.) K. G. Sures, Director IHC, Former VC, Makhanlal Chaturvedi University;
                Prof. (Dr.) Durgesh Tripathi, Dean-USMC, GGSIPU;
                Prof. (Dr.) Sachin Kumar Mangla, O P Jindal Global University, Sonipat, Haryana;
                Prof. (Dr.) K. Srinivas, Head ICT & Project Management Unit, NIEPA;
                Dr. Preeti Malhotra, Assistant Professor, GD Goenka University, Gurugram, Haryana;
                Dr. Salini Rosaline, Assistant Professor, Department of Management Studies, NSUT, Delhi;
                Dr. Aarti Suryavanshi, Assistant Professor, MRIIRS, Faridabad, Haryana;
                Dr. Shikha Gupta, Sr. Associate Professor, LLDIM, Delhi
            </td>
        </tr>
    </tbody>
</table>

        <h2 class="text-center mb-4">Seminars/Webinars (2025-26)</h2>
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
        <tr><td>1</td><td>07-07-2025</td><td>Major-Minor Scheme for BBA Students (Batch 2024–28)</td><td>Dr. Amita Pathania</td></tr>
        <tr><td>2</td><td>22-08-2025</td><td>Resume Building</td><td>Ms. Parul Sharma</td></tr>
        <tr><td>3</td><td>26-08-2025</td><td>Dream, Discover, Develop: Shaping Your Career Through Study Abroad</td><td>Ms. Kiran Negi</td></tr>
        <tr><td>4</td><td>28-08-2025</td><td>Stress Management: Techniques for a Balanced Life</td><td>Ms. Preeti</td></tr>
        <tr><td>5</td><td>03-09-2025</td><td>Baat to Karni Padegi – Breaking the Silence</td><td>Dr. Shefali Chhicholia</td></tr>
        <tr><td>6</td><td>06-09-2025</td><td>Career Branding Essentials</td><td>Ms. Shruti Rohilla</td></tr>
        <tr><td>7</td><td>10-09-2025</td><td>An Insight on Global Immersion</td><td>Ms. Akanksha</td></tr>
        <tr><td>8</td><td>16-09-2025</td><td>From Campus to Corporate: Skills You Need for a Global Career</td><td>Mr. Abhijeet; Ms. Shweta; Mr. Shashant (Imarticus Learning)</td></tr>
        <tr><td>9</td><td>23-09-2025</td><td>Happiness in Wellness: Empowering Youth for Life Balance</td><td>Ms. Shubhangi Manav</td></tr>
        <tr><td>10</td><td>26-09-2025</td><td>Basics of Investment & Depository Services</td><td>Dr. Shikha Gupta</td></tr>
        <tr><td>11</td><td>13-10-2025</td><td>Skills that Matter: Finance & Analytics Essentials for 2025</td><td>Mr. Vaibhav Deepak Mehta</td></tr>
        <tr><td>12</td><td>06-11-2025</td><td>Seminar: Reinforcement Learning – Intelligent Decision Making for a Smarter & Safer Future</td><td>Dr. Abhinav Tomar (Asst. Professor, NSUT)</td></tr>
        <tr><td>13</td><td>11-11-2025</td><td>Man vs Machine or Man with Machine? The Future of Management in the AI Era</td><td>Dr. Akhil Damodaran (IILM University)</td></tr>
        <tr><td>14</td><td>11-11-2025</td><td>Your Attitude is Your Personal Brand</td><td>Ms. Arushi Grover (Ontario Public Service, Canada)</td></tr>
        <tr><td>15</td><td>12-11-2025</td><td>Building Strong Teams for Success: Teamwork Makes the Dream Work</td><td>Ms. Meena Solanki (Anderson College, Canada)</td></tr>
        <tr><td>16</td><td>13-11-2025</td><td>Fitness and Nutrition for Productivity: Keys to Leadership & Resilience</td><td>Ms. Ankita Pandey (FitwishAnkita, Singapore)</td></tr>
        <tr><td>17</td><td>17-11-2025</td><td>I Step</td><td>Dr. Madhu; CA Rohit Kumar</td></tr>
        <tr><td>18</td><td>21-11-2025</td><td>Decoding Consumers: Market Research & Insights as a Career</td><td>Ms. Prabhleen K. Bilkhu (Ventures Middle East, Dubai)</td></tr>
        <tr><td>19</td><td>16-10-2025</td><td>Webinar: The Double-Edged Sword of AI – Transforming Our Lives for Better and Worse</td><td>Expert Speakers from Academia & Industry</td></tr>

        <tr><td>20</td><td>16-09-2025</td><td>From Campus to Corporate: Skills You Need for a Global Career (MBA)</td><td>Mr. Abhijeet; Ms. Shweta Singh; Mr. Shashank (Imarticus Learning)</td></tr>
        <tr><td>21</td><td>17-09-2025</td><td>Placement Policy Briefing</td><td>Dr. Mandeep Singh</td></tr>
        <tr><td>22</td><td>17-09-2025</td><td>The Big Leap Panel</td><td>Mr. Nitish Gupta; Mr. Jeyadev Parthasarathy (XLRI Alumnus); Mr. Narendra Kumar Gupta</td></tr>
        <tr><td>23</td><td>22-09-2025</td><td>An Insight on Global Immersion</td><td>Ms. Surbhi Kamle; Ms. Sakshi Rastogi; Assistant HR Manager (UAS International)</td></tr>
        <tr><td>24</td><td>13-10-2025</td><td>Importance of Digital Literacy for Young Graduates</td><td>Mr. Alok Tiwari (Group One)</td></tr>
        <tr><td>25</td><td>28-10-2025</td><td>Navigating the Entrepreneurial Journey</td><td>Dr. Latika Malhotra</td></tr>
        <tr><td>26</td><td>31-10-2025</td><td>How to Reduce E-Waste</td><td>Dr. Meenakshi Kharb (Asia Pacific Institute of Management)</td></tr>
        <tr><td>27</td><td>01-11-2025</td><td>What the Industry Expects from Fresh Graduates</td><td>Ms. Pooja Sharma (Market Xcel)</td></tr>
        <tr><td>28</td><td>11-11-2025</td><td>Man vs Machine or Man with Machine? The Future of Management in the AI Era (MBA)</td><td>Dr. Akhil Damodaran (IILM University)</td></tr>
        <tr><td>29</td><td>11-11-2025</td><td>Your Attitude is Your Personal Brand (MBA)</td><td>Ms. Arushi Grover (Ontario Public Service, Canada)</td></tr>

        <tr><td>30</td><td>07-07-2025</td><td>Career Pathways After Graduation: Opportunities & Insights</td><td>Mr. Grijesh Gupta; Mr. Gurneet Singh (T.I.M.E.)</td></tr>
        <tr><td>31</td><td>29-08-2025</td><td>Integrating Data Science, AI, Cybersecurity and Privacy</td><td>Professor Gang Li (Deakin University)</td></tr>
        <tr><td>32</td><td>08-09-2025</td><td>Career Awareness Session: Exploring Pathways in Commerce</td><td>Mr. Pawan Kumar (T.I.M.E.)</td></tr>
        <tr><td>33</td><td>26-09-2025</td><td>TrueBlue & Beyond: Exploring Career Pathways in HR</td><td>Ms. Shrishti (NexGen Tek Inc.)</td></tr>
        <tr><td>34</td><td>28-09-2025</td><td>Career Ready: Jaro Education Drive & Careers in Sales/BD</td><td>Ms. Priya Saxena (Jaro Education)</td></tr>
        <tr><td>35</td><td>29-10-2025</td><td>Extension Lecture: Bridging Economics and Econometrics</td><td>Dr. Ruhee Mittal (SOL, University of Delhi)</td></tr>
        <tr><td>36</td><td>07-11-2025</td><td>Skill Enhancement Seminar: Investment Awareness</td><td>Prof. (Dr.) Neelam Tandon (Well Being Shiksha Foundation / SEBI Smart Trainer)</td></tr>
        <tr><td>37</td><td>18-11-2025</td><td>Alumni Talk: Beyond the Classroom – Real-World Career Choices</td><td>Ms. Rishita Gaba (Fresh Prints)</td></tr>
        <tr><td>38</td><td>10-01-2026</td><td>Career Ready: NTT Data Hiring Drive & Careers in Finance/Accounting</td><td>Mr. Gaurav Mahana (NTT Data)</td></tr>

        <tr><td>39</td><td>16-10-2025</td><td>Artificial Intelligence in Media: Opportunities, Challenges & Ethical Concerns</td><td>Dr. Nimish Kumar (Certified ADiRA Trainer)</td></tr>
        <tr><td>40</td><td>10-11-2025</td><td>Writing Skills for Media</td><td>Ms. Anshu Naithani (Chetana Manch News)</td></tr>
        <tr><td>41</td><td>17-11-2025</td><td>Overview of Investigating Journalism</td><td>Mr. Kanaiya Jha (Dainik Jagran)</td></tr>
        <tr><td>42</td><td>31-01-2026</td><td>News Sources in Sports Journalism: Structure, Access and Authenticity</td><td>Dr. Rajesh Kumar (University of Jharkhand)</td></tr>
        <tr><td>43</td><td>31-01-2026</td><td>Viral Justice & Digital Vigilantism</td><td>Dr. Sumant Kumar (Alliance University, Bangalore)</td></tr>
    </tbody>
</table>
                 
                   
                   
                   
                   
                   
                   
                   
                    <h2 class="text-center mb-4">Conferences (2024-25)</h2>
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
               
                    <tr><td>	1	</td><td>	24-25.01.2025	</td><td>	International conference on research and innovations in AI Environment, management and sustainability(ICAIMS-Virtual 2025)	</td><td>	Prof.(Dr.) Sanjay Bhayani, Dean, Professor and Head of Business Management, Saurashtra University, Rajkot, Gujarat Dr. Shweta Singh, Economics Times Most Inspiring Women Leader 2023-24, Entrepreneur, Speaker & Author, Delhi, India Dr. Anukrati Sharma presided over the event, guiding discussions and paper presentations. Dr. Sachin Gupta, Assistant Professor, Department of Business Administration, Mohanlal Sukhadia University, Udaipur, Rajasthan Dr. Albattat Ahmad, Associate Professor & Program Leader, Asia Pacific University of Technology & Innovation (APU), Malaysia Eva Tuba, Assistant Professor, Computer Science, Serbia & Visiting Assistant Professor, Trinity University, United States Prof.(Dr.) Roopali Sharma, Professor, Finance & International Business, Birla Institute of Technology, Mesra Dr. Kritika Tekwani, Academic Associate Strategy Area, IIM - Ahmedabad Prof.(Dr.) Sarwat Jahan, Ph.D., Marketing & Sustainability Professor, Prolific Researcher, Corporate Trainer, Learning & Development Manager, Higher Education Voice, Data Scientist, Dr. Vikas Garg, Associate (Research), Faculty of Finance, Symbiosis Institute of Business Management (SIBM), Noida Dr. Latika Vaishak Shanbhag, Joint Academic Dean for DBA, IIBM Institute of Business Management Dr. Nosile O’Connor, Senior University Lecturer, Educational Developer and Researcher, Technological University of the Shannon, Ireland Dr. Sampath Siriwardena, Senior Lecturer, Head of the Department, CINEC International Hotel School, CINEC Campus, Sri Lanka Milan Tuba, Professor of Computer Science, Mathematics and Electrical Engineering, Head of Artificial Intelligence Project, Singidunum University Belgrade, Vice Rector for Research, Sinergija University, BIH Dr. Divya Girdhar, Associate Professor & Head of Department, Media Studies, Maharishi Markandeshwar (Deemed to be University)	</td></tr>

            </tbody>
        </table>
        <h2 class="text-center mb-4">Seminars/Webinars (2024-25)</h2>
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
                <tr><td>	1	</td><td>	30.08.2024	</td><td>	Waste management and segregation	</td><td>	Ms. Devanshi Chhabra	</td></tr>
                    <tr><td>	2	</td><td>	02.09.2024	</td><td>	International webinar on Data Analysis-SAS	</td><td>	Ms.Amanpreeet Kaur Sara	</td></tr>
                    <tr><td>	3	</td><td>	13.09.2024	</td><td>	World Ozone Day	</td><td>	Mr. Gautam Kumar Singh	</td></tr>
                    <tr><td>	4	</td><td>	20.09.2024	</td><td>	Career sharing and interviewing skills to be successful at the workshop	</td><td>	Deutsche Bank	</td></tr>
                    <tr><td>	5	</td><td>	24.09.2024	</td><td>	General Cancer Awareness	</td><td>	Dr. Sushant Mittal	</td></tr>
                    <tr><td>	6	</td><td>	1/10/2024	</td><td>	Seminar on navigating the future: AI, Machine Learning, and Data science in the age of Innovation	</td><td>	Ms. Komal Sharma	</td></tr>
                    <tr><td>	7	</td><td>	8/10/2024	</td><td>	How to manage E-Waste	</td><td>	Ms. Priyanshi Ahuja	</td></tr>
                    <tr><td>	8	</td><td>	09.10.2024	</td><td>	Introduction to Cyber security	</td><td>	Mr Kandarp Kumar Thakur	</td></tr>
                    <tr><td>	9	</td><td>	11-11.2024	</td><td>	Strategies to do well in Pi though MOCK PI	</td><td>	Mr. Amit Poddar	</td></tr>
                    <tr><td>	10	</td><td>	17.01.2025	</td><td>	AI made simple: understanding the tech behind the buzz	</td><td>	Mr. Sanidhya Goel	</td></tr>
                    <tr><td>	11	</td><td>	11.3.25	</td><td>	Interface & Inheritance in Java	</td><td>	Ms. Kanchan Choudhary	</td></tr>
                    <tr><td>	12	</td><td>	05.05.2025	</td><td>	Transforming Research Into Patents-Strategies for Academic Innovators	</td><td>	Ms. Pooja Menon	</td></tr>
                    <tr><td>	13	</td><td>	31.01.2025	</td><td>	Basics of Mutual Funds 	</td><td>	Dr. Shikha Gupta	</td></tr>
                    <tr><td>	14	</td><td>	30.01.2025	</td><td>	Basics of Capital Market	</td><td>	Dr. Shikha Gupta	</td></tr>
                    <tr><td>	15	</td><td>	25.01.2025	</td><td>	Basics of investment and Depositories	</td><td>	Dr. Shikha Gupta	</td></tr>
                    <tr><td>	16	</td><td>	22.01.2025	</td><td>	 Global Academic Pursuit	</td><td>	Ms. Vidhu Singh	</td></tr>
                    <tr><td>	17	</td><td>	06.02.25	</td><td>	Gender sensitization	</td><td>	Ms. Saniya Azim	</td></tr>
                    <tr><td>	18	</td><td>	7.8.24	</td><td>	Alumni Interaction for BBA	</td><td>	Ms. Bhawana 	</td></tr>
                    <tr><td>	19	</td><td>	16.8.24	</td><td>	Effective Leadership and Human Relations	</td><td>	Dr. Kawaljeet Kaur	</td></tr>
                    <tr><td>	20	</td><td>	28.8.24	</td><td>	Cyber Security	</td><td>	Mr. Partho Pandya	</td></tr>
                    <tr><td>	21	</td><td>	31.01.2025	</td><td>	Seminar on Relevance of International Opportunity in Career	</td><td>	Ms. Aparna	</td></tr>
                    <tr><td>	22	</td><td>	11.7.24	</td><td>	Union Budget 2024	</td><td>	Ms. Parul Sharma	</td></tr>
                    <tr><td>	23	</td><td>	12.7. 24	</td><td>	Union Budget 2024	</td><td>	Ms. Amita Pathania	</td></tr>
                    <tr><td>	24	</td><td>	13.7. 24	</td><td>	Union Budget 2024	</td><td>	Dr. Madhu Ruhil	</td></tr>
                    <tr><td>	25	</td><td>	17.7. 24	</td><td>	Union Budget 2024	</td><td>	Ms. Shweta Aneja	</td></tr>
                    <tr><td>	26	</td><td>	17.7. 24	</td><td>	Union Budget 2024	</td><td>	Mr. Rohit Kumar	</td></tr>
                    <tr><td>	27	</td><td>	17.7. 24	</td><td>	Union Budget 2024	</td><td>	Ms. Shweta Aneja	</td></tr>
                    <tr><td>	28	</td><td>	19.7.24	</td><td>	Gender Sensitization 	</td><td>	Dr. Bhawna 	</td></tr>
                    <tr><td>	29	</td><td>	6.11.24	</td><td>	How to bell the CAT	</td><td>	Mr. Nihar Suryavanshi	</td></tr>
                    <tr><td>	30	</td><td>	6.11.24	</td><td>	Study Abroad: A Pathway to Global Citizens	</td><td>	Ms. Megha Manchanda	</td></tr>
                    <tr><td>	31	</td><td>	6.11.24	</td><td>	MBA as a Career Option	</td><td>	Mr. Anuraj	</td></tr>
                    <tr><td>	32	</td><td>	11.11.24	</td><td>	Strategies to do well in PI through MOCK PI	</td><td>	Mr. Amit Poddar	</td></tr>
                    <tr><td>	33	</td><td>	14.11.24	</td><td>	Implementing Responsible Business Conduct in Healthcare Practices	</td><td>	Dr. Jayesh Lele	</td></tr>
                    <tr><td>	34	</td><td>	31.1.25	</td><td>	Relevance of International Opportunity in CAreer	</td><td>	Ms. Arpana & Ms. Meghna	</td></tr>
                    <tr><td>	35	</td><td>	6.2.25	</td><td>	Union Budget	</td><td>	Mr. Puneet Chawla	</td></tr>
                    <tr><td>	36	</td><td>	6.2.25	</td><td>	Gender Sensitization 	</td><td>	Dr. Bhawna	</td></tr>
                    <tr><td>	37	</td><td>	6.2.25	</td><td>	Happiness Session	</td><td>	Ms. Saniya Azim	</td></tr>
                    <tr><td>	38	</td><td>	6.2.25	</td><td>	Union Budget	</td><td>	Dr. Amita Pathania	</td></tr>
                    <tr><td>	39	</td><td>	8.2.25	</td><td>	Union Budget	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	40	</td><td>	10.2.25	</td><td>	Union Budget on Infrastructure Sector	</td><td>	Ms. Divya Gupta	</td></tr>
                    <tr><td>	41	</td><td>	10.2.25	</td><td>	Union Budget	</td><td>	Ms. Parul Sharma	</td></tr>
                    <tr><td>	42	</td><td>	13.2.25	</td><td>	Union Budget	</td><td>	Ms. Shweta Aneja	</td></tr>
                    <tr><td>	43	</td><td>	22.2.25	</td><td>	Mental Health Awareness 	</td><td>	Dr. Renu Bhatia	</td></tr>
                    <tr><td>	44	</td><td>	22.2.25	</td><td>	Understanding Online/In-house Training /Apprenticeship Training 	</td><td>	Dr. Deepika Arora	</td></tr>
                    <tr><td>	45	</td><td>	6-7.2.25	</td><td>	Union Budget-Key Area Education Sector 	</td><td>	Ms. Manisha	</td></tr>
                    <tr><td>	46	</td><td>	11.3.25	</td><td>	Exploring Opportunities and Different Streams of Management	</td><td>	Mr. Dhruv Sawhney	</td></tr>
                    <tr><td>	47	</td><td>	4.3.25	</td><td>	Cancer Awareness	</td><td>	Dr. Neeti Leekha Chabra	</td></tr>
                    <tr><td>	48	</td><td>	11.3.25	</td><td>	Capital Market & Career  Opportunities	</td><td>	Ms. Himani Lath	</td></tr>
                    <tr><td>	49	</td><td>	13.01.2025	</td><td>	Webinar under KARMA- “The Impact of Technology on Global Politics: AI, Surveillance, and National Security”	</td><td>	Dr. Sumat Kumar	</td></tr>
                    <tr><td>	50	</td><td>	13.01.2025	</td><td>	Webinar under KARMA-- Webinar on Self Care and  Wellness : Tools for Mental Wellbeing 	</td><td>	Dr. Adhrit Chandra Tripathi	</td></tr>
                    <tr><td>	51	</td><td>	14.01.2025	</td><td>	Webinar under KARMA- “ Environmental Issues and The Role of Media”	</td><td>	Dr. Rahul Amin	</td></tr>
                    <tr><td>	52	</td><td>	15.01.2025	</td><td>	“The role of citizen journalism in conflict reporting”	</td><td>	Dr.Aaqib Anwar Butt	</td></tr>
                
            </tbody>
        </table>
        <h2 class="text-center mb-4">Conferences (2023-24)</h2>
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
                <tr>
                    <td>1</td>
                    <td>22-23.01.2024</td>
                    <td>Two Days ICSSR Sponsored National Conference on "NEP2020: A Paradigm Shift in Media Education and ensuring quality with the Global Framework of the G20”</td>
                    <td>Prof. Narayan C. Debnath, Founding Dean, School of Computing and Information Technology, Eastern International University, Vietnam, Dr. Durgesh Tripathi, Associate Professor - USMC and Prof. Dr. Rachita Rana, Director, IITM.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>21-22.6.24</td>
                    <td>Two Days International Conference on Advances in Computational Intelligence and Applications</td>
                    <td>Prof. (Dr.) Polkowaski, Dr. Ashish Sharma, Dr. Virendra Yadav</td>
                </tr>
            </tbody>
        </table>

  <h2 class="text-center mb-4">Seminars/Webinars (2023-24)</h2>
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
                <tr><td>1</td><td>25.8.23</td><td>Bhartiya Gyan Prampara</td><td>Prof. Narayan Prasad Mishra</td></tr>
                <tr><td>2</td><td>31.8.23</td><td>Waste Management</td><td>Ms. Shubham Thareja & Ms. Vani Grover</td></tr>
                <tr><td>3</td><td>18.10.23</td><td>Transformative Intelligence Techniques in Industries</td><td>Mr. Vaseem Durrani</td></tr>
                <tr><td>4</td><td>18.10.23</td><td>Risk Management: Context, Scope and Future in India</td><td>Mr. Pineet Malhotra</td></tr>
                <tr><td>5</td><td>18.10.23</td><td>Impact of Fundamental Rights on Modern Society</td><td>Mr. Aditya Ojha</td></tr>
                <tr><td>6</td><td>28.10.23</td><td>How to be a Good Media Communicator</td><td>Ms. Surbhi</td></tr>
                <tr><td>7</td><td>18.11.23</td><td>Career Sharing and Personal Interviewing Skills to be Successful at Workplace</td><td>Dr. Madhu</td></tr>
                <tr><td>8</td><td>20.11.23</td><td>Exploring Tomorrow's Corporate Landscape</td><td>Mr. Ramit Bedi</td></tr>
                <tr><td>9</td><td>21.11.23</td><td>Embracing Diversity and Inclusion</td><td>Mr. Ankit</td></tr>
                <tr><td>10</td><td>20.12.23</td><td>Navigating Trends and Challenges in Sustainable Textiles in India</td><td>Ms. Prajaktya L. Verma, Joint Secretary, Ministry of Textiles</td></tr>
                <tr><td>11</td><td>18.10.23</td><td>Transformative Intelligence Technologies in Industries</td><td>Mr. Vaseem Durrani</td></tr>
                <tr><td>12</td><td>1.2.24</td><td>PHD Chamber for Budget Viewing Session</td><td>PHD Chamber of Commerce</td></tr>
                <tr><td>13</td><td>12.02.2024</td><td>Seminar on Business Intelligence using Power BI</td><td>Mr. Vaseem Durrani, Director and Co-founder of ACODS</td></tr>
                <tr><td>14</td><td>23.02.2024</td><td>Power Seminar on Internet of Things in Collaboration with ICT Academy</td><td>Mr. Tapan Kapoor</td></tr>
                <tr><td>15</td><td>26.02.2024</td><td>Seminar on How to Get into MAANG Companies</td><td>Mr. Monu Kumar</td></tr>
                <tr><td>16</td><td>16.03.2024</td><td>Seminar on Accelerating Sustainable Livelihood in Rural and Tribal India (Ekal Study Circle Meet)</td><td>Prof. Dinesh Khattar</td></tr>
                <tr><td>17</td><td>20.03.2024</td><td>Seminar on Mastering Profile Building: Strategies for Career Growth</td><td>Mr. Parveen Khanna</td></tr>
                <tr><td>18</td><td>18.04.2024</td><td>Seminar on Future Career Options for BCA Students</td><td>Prof. R Chadda</td></tr>
                <tr><td>19</td><td>30.3.24</td><td>Preserving the Blue Gold: National Webinar on Water Conservation</td><td>Ms. Shreya Das</td></tr>
            </tbody>
        </table>
        
        
        
 <h2 class="text-center mb-4">Conferences (2022-23)</h2>
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
                <tr>
                    <td>1</td>
                    <td>28-29.04.23</td>
                    <td>International Conference on Industry 4.0 and Key Drivers of Sustainability in Amrit Kaal</td>
                    <td>
                        Dr. Deepak Tandon, Mr. Vijay Kumar, Prof. (Dr.) G.S Saun, Prof. (Dr.) Joanna, Mr. J. S. Kamyotra, Prof. (Dr.) Deepak Tandon, Mr. Vijay Gupta, Mr. J.S. Kamyotra, Prof. (Dr.) Resma Nasreen, Dr. Vishal Khatri
                    </td>
                </tr>
            </tbody>
        </table>
  <h2 class="text-center mb-4">Seminars/Webinars</h2>
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
                <tr>
                    <td>1</td>
                    <td>15.10.22</td>
                    <td>Webinar on Advantages and Benefits of AWS Cloud Computing</td>
                    <td>Mr. Raushan Raj</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4.11.22</td>
                    <td>Webinar on Career in Social Sector</td>
                    <td>Ms. Deepti Dwivedi</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>14.11.22</td>
                    <td>Seminar on Menstrual Hygiene</td>
                    <td>Ms. Mansvi Singh</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>29.11.22</td>
                    <td>Seminar on Organ Donation</td>
                    <td>Ms. Simran Anand</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>20.03.23</td>
                    <td>Conclave on G-20 Nations- Building and Sustaining Prosperity</td>
                    <td>Dr. Jyoti Bhambhani</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>22.03.23</td>
                    <td>Symposium on G-20 Summit</td>
                    <td>Dr. Diksha Khera, Dr. Madhu Ruhil, Ms. Saguna Khajuria, Ms. Komal Goel</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>30.03.23</td>
                    <td>Seminar on Water Conservation: Rain Water Harvesting</td>
                    <td>Ms. Himanshi Pandey & Ms. Aaditri Sharma</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>03.05.23</td>
                    <td>Seminar on Cloud Ops Essentials</td>
                    <td>Mr. Piyush Pandey, CEO Interexus, Delhi</td>
                </tr>
            </tbody>
        </table>       


    </div>
    <div style="height: 10vh;"></div>
              <div style="margin: 0; width: 100%;">
    <div class="container">
        <div class="row">
            <div id="my-carousel2" class="carousel slide carousel-fade" data-ride="carousel" style="margin-right: auto; margin-left: auto;">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#my-carousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#my-carousel2" data-slide-to="1"></li>
                    <li data-target="#my-carousel2" data-slide-to="2"></li>
                    <li data-target="#my-carousel2" data-slide-to="3"></li>
                </ol>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row" style="background: #800000;">
                            <div class="col-md">
                                <img class="d-block carousel-image img-responsive" src="images/icacia.jpg" alt="ICACIA Conference">
                            </div>
                            <div class="col-md center">
                                <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">
                                    International Conference on Advances in Computational Intelligence and Applications (ICACIA)
                                </h1>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue: </strong> IITM Janakpuri</h2>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Date:</strong> June 21-22, 2024</h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row" style="background: #800000;">
                            <div class="col-md-3">
                                <img class="d-block carousel-image img-responsive" src="images/interna.jpg" alt="National Conference">
                            </div>
                            <div class="col-md-9 center">
                                <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">
                                    National Conference <br>on<br> Multidisciplinary Studies
                                </h1>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue: </strong> Apeejay School of Management, Dwarka</h2>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Date:</strong> May 03, 2024</h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row" style="background: #800000;">
                            <div class="col-md-3">
                                <img class="d-block carousel-image img-responsive" src="images/waters.jpg" alt="Water Conservation Webinar">
                            </div>
                            <div class="col-md-9 center">
                                <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">
                                    National Webinar <br>on<br> Water Conservation
                                </h1>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue: </strong> IITM Janakpuri, New Delhi</h2>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Date:</strong> April 12, 2024</h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row" style="background: #800000;">
                            <div class="col-md-2">
                                <img class="d-block carousel-image img-responsive" src="images/conference/co.jpg" alt="NEP2020 Conference">
                            </div>
                            <div class="col-md-10 center">
                                <h3 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">
                                    Two Days ICSSR Sponsored National Conference on "NEP2020: A Paradigm Shift in Media Education and ensuring quality with the Global Framework of the G20”
                                </h3>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue: </strong> IITM Janakpuri, New Delhi</h2>
                                <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Date:</strong> January 22-23, 2024</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#my-carousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#my-carousel2" role="button" data-slide="next">
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
