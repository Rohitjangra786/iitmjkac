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
    <title>IITM | Students' Testimonials</title>

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
                color: #800000;
    }
    
    
    .center-row-mg {
      display: flex;
      justify-content: center;
    }

    .col-md-6 {
      text-align: center;
    }

    .img-wrapper-mg {
      max-width: 300px; /* Adjust the image width as per your preference */
      
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
            <h2 class="text-center mb-4">Students' Testimonials</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                <a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/StudentGuide.php">Student Guide/Rule Book</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri-sdc.in/KnowledgePortal/">Knowledge Portal (LMS)</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/Library/">Library</a>
                <a class="dropdown-item" href="https://iitmjanakpuri.com/StudentZone/studentzone.php">Student Societies</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/campuslife/testimonials.php">Students' Testimonials</a>
                <a class="dropdown-item" href="https://iitmjanakpuri.com/scholarships/scholarships.php">Scholarships</a>
        </div>
<div class="col-md-9">
    <div class="text-center">
        
              <hr class="hr-maroon"/>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                   
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Sarthak Kumar BCA (2021-24).jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="text-justify" style="color: #800000;">Mr. Sarthak Kumar</h2>
                                <h3 class="text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <p class="text-justify" style="color: #4b4b4b;">My journey at IITM began in August 2021 with the excitement of starting college life. The faculty, initially perceived as strict, quickly became supportive mentors, fostering a friendly learning environment that enhanced our communication skills and confidence crucial for placements. IITM's exceptional placement cell ensured comprehensive assistance, leading me to secure a position as a Machine Learning Data Associate at AMAZON Development Centre India, aligning perfectly with my career goals. Beyond academic excellence, IITM emphasizes holistic development through diverse extracurricular activities, internships like InterWare, and participation in events and competitions that simulate real market conditions. These experiences not only sharpen problem-solving and market understanding but also foster innovation, leadership, communication, and teamwork skills. Supported by a nurturing ecosystem of faculty and mentors, 
                                IITM has equipped me with both academic knowledge and personal growth, preparing me thoroughly for 
                                professional success beyond classrooms and textbooks.</p>
                            </div>
                        </div> 
                    </div></div></div>
                     <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Harsha Priya BCA 2021-24.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Harsha Priya</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">
                                    Entering college three years ago, I was both excited and curious. Reflecting on my journey at IITM, 
                                I discovered that the 'I' in IITM stands not only for information but also for inspiration. Here, I have grown immensely, thanks to the nurturing environment 
                                and diverse opportunities. 
                                The passion of our faculty for teaching and their open-door policy for personalized guidance have been pivotal in shaping me into a more resilient, knowledgeable, and confident individual. The college provided me with incredible opportunities to participate in international conferences and workshops, broadening my perspective. As I prepare to embark on the next chapter of my life, I carry with me the knowledge, skills, and confidence gained
                                through my college education. I am deeply grateful for the support and guidance from the faculty, 
                                which fueled my personal and professional development.
                                    </h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Rishit Luthra BCA 2021-24.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Rishit Luthra</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">Having recently graduated with a BCA from IITM, I can confidently attest to its role in laying a strong foundation for my IT career. The faculty at IITM deserves special mention for their industry experience and clear explanations, which made complex concepts easier to grasp. They were always approachable, readily clarifying doubts and encouraging independent learning. The college library was a treasure trove of resources, with updated books, journals, and online databases that proved invaluable for project work and in-depth learning. IITM surprised me with its range of extracurricular activities. From coding clubs to tech fests, there were ample opportunities to explore diverse interests and develop valuable soft skills. The placement opportunities at IITM were a major highlight, with several startups and even companies like Amazon visiting campus, offering placements with competitive packages. The college's excellent pre-placement training further boosted students'
                                confidence and readiness for the job market. Overall, my experience at IITM was enriching and has
                                prepared me well for the exciting world of IT.</h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Jatin Luthra BCA 2021-24.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Jatin Gola </h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">My intellectual and social abilities have greatly improved through my time at IITM. 
                                I've developed a strong analytical attitude that is crucial for my career through demanding coursework and one-on-one guidance from dedicated faculty members. I have the utmost gratitude for all the teachers, administrative staff, and friends who have supported and enhanced my journey. IITM nurtured the essential skills and confidence needed to engage in international conferences and various student-led organizations, allowing me to strengthen my leadership capabilities and broaden my professional network. 
                                These experiences have profoundly influenced my life, and I will deeply treasure every moment spent at the college with teachers and fellow students.</h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Lakshay Chawala.jpg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Lakshay </h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">Reflecting on my time at IITM Janakpuri from 2021 to 2024, I can confidently say it has been immensely fulfilling. Our BCA journey began during the COVID-19 pandemic, necessitating online learning, but the understanding and cooperative faculty ensured our virtual lectures were just as effective as in-person classes. The emphasis on timely submission of assignments and reports prepared us well for the corporate world. Despite the small campus, it is remarkably well-equipped with a cafeteria known for its delicious food, fully air-conditioned and Wi-Fi-enabled classrooms, an auditorium, and state-of-the-art labs. The in-house summer training programs provided invaluable practical exposure. The faculty's support in project development and report preparation was instrumental in our success. One of the highlights was securing a placement at TCS, thanks to the relentless efforts of our placement cell. Many other esteemed companies also visit our campus for recruitment, providing us with excellent opportunities. Overall, the combination of a robust academic framework, excellent facilities, and unwavering support 
                                from the faculty and placement cell made these three years truly unforgettable. I couldn't have 
                                asked for a better college to pursue my BCA degree.</h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Khushi Sihag BCA 2021-24.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Khushi Sihag  </h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">I extend my sincere thanks to my teachers and institute for their unwavering support in achieving career milestones. IITM Janakpuri, affiliated with GGSIPU, offers an outstanding BCA program known for its exceptional teaching quality and enriched learning environment. The college boasts excellent infrastructure, including well-equipped labs, air-conditioned classrooms, and a comprehensive library. While the curriculum prioritizes academic rigor over job readiness, it lays a solid foundation for further studies and is supplemented by teachers' real-world insights. Beyond academics, I've enjoyed a fulfilling college life with supportive friends. Serving as President of AIEC, organizing national fests, and leading clubs like Drone & Robotics and Programming has been a highlight. My achievements include organizing workshops, creating NGO websites, and receiving accolades at international conferences. I successfully secured a placement at Infonative Solutions with the college's assistance, showcasing skills in project management, emerging tech analysis, and proficiency in Python, C, JavaScript,
                                SQL, Java, HTML, CSS, Scikit, TensorFlow, React, NodeJS, GIT, MySQL, and English fluency, 
                                gained through internships at DevTown and Prayan Foundation.</h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/surbhi.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Surbhi Srivastava  </h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BBA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">As an alumnus reflecting on my college experience, IITM Janakpuri was a transformative period in my life, where I discovered not only academic knowledge but also personal growth and lifelong friendships. Academically, the rigorous curriculum challenged me to think critically and push beyond my comfort zones. I was fortunate to have passionate professors who not only imparted knowledge but also mentored me, fostering a love for learning that has stayed with me. Additionally, the placement opportunities provided by our college were exceptional and played a pivotal role in shaping my career. 
                                Thanks to the comprehensive preparation and support from the college, I was able to secure 
                                a position at Tata Consultancy Services before my graduation.</h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/ankit.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Aniket kumar thakur </h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BBA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">As an alumnus of IITM, Janakpuri, I reflect on my time there with immense gratitude and pride. The rigorous academic curriculum, combined with a vibrant campus life, provided a holistic education that was both challenging and enriching. The faculty members, experts in their fields, were always approachable and encouraged us to think critically and innovate. I am particularly grateful for the robust placement support provided by the institute. The placement cell worked tirelessly to bring in top-tier companies for campus recruitment. 
                                As a result, I am thrilled to share that I have been placed at Federal Bank, a leading 
                                financial institution, through the college placement process.</h3>
                            </div>
                        </div> 
                    </div></div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/manish.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Manish kumar</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BBA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">My time in college has been a life-changing adventure filled with learning opportunities, personal growth, and unforgettable experiences. From the moment I set foot on campus, I was welcomed by a diverse community of students and instructors who both encouraged and challenged me. The demanding curriculum pushed me to expand my knowledge and proficiency in various subject areas. IITM gave me a variety of opportunities to participate in extracurricular activities and join various clubs, which helped me  discover my core interests and cultivate lifelong friends. One of the most significant milestones in my college journey was securing a placement. 
                                I am thrilled to have been placed at R1 RCM Company, marking the beginning of a new and exciting chapter in my professional life.</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/rohan.jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Rohan kumar </h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BBA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">My time at IITM Janakpuri surpassed all my expectations in every aspect, from academics and club activities to case studies and educational trips. The teachers and their teaching methods were exceptional, providing a high standard of education. Additionally, I had the privilege of 
                                being placed at NatWest through the campus placement program. In summary, my three years at
                                IITM Janakpuri were thoroughly enjoyable and enriching.</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/ashii.jpg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Aashi Jain</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">IITM the place where I got the unforgettable memorable days of my life 
                                for 3 years were just amazing. It helped my overall growth and development. Build up strong foundation to my career. 
                                From being shy nervous girl to a confident skilled personnel today, my teachers at IITM believed 
                                in me and made me ready for the outside corporate world. IITM aims for holistic development of the 
                                students providing them exposure to good academic knowledge, cultural awareness and practical exposure. 
                                My experience at IITM was the perfect blend of everything with lots of memories and life lessons to cherish. 
                                I am grateful for everything I experienced. I am a proud "IITMian".</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/sudit.jpg" alt="Sudhit Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />   
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Sudhit Jain</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">My journey in IITM begins in August 2018 and I remembered some of the glimpses of my first day in college. 
                                The faculty in the institute are amazing they are both highly experienced and chill on starting they will show you that they are strict but after some day they become
                                more friendly and we all have great time studying from them. The best part in the institute is every Monday there is presentation to present ourselves among our 
                                batch mates which further help us in getting placement. Now talking about placement we have a wonderful opportunity as our placement team is very active and 
                                helpful and does not leave any opportunity in encouraging students. This I am telling because I myself got selected in Deloitte’s first round but rejected in 
                                final round which make me little depressed but because of our faculty who again encouraged me, 
                                I got selected in SAP Labs hence for me IITM is best college amongst all other institutes who offers BCA course in Delhi.</h3>
                            </div>
                        </div> 
                       
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/studentsspeak/muskaann.jpg" alt="Muskaan" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Muskaan</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">My sincere thankfulness 
                                to all my teachers and the institute for helping me achieve great heights in my career. My college has all the necessary infrastructure, 
                                facilities and equipments. The labs are well furnished, classrooms are air conditioned, libraries are well maintained with good collection of books. 
                                IITM is considered to be one of the best colleges of IPU to pursue BCA. The quality of teaching is good. Teachers try their best to clear doubts and 
                                complete syllabus on time. What we're studying definitely doesn't make us job-ready but rather builds a strong foundation to grasp the concepts well 
                                for higher studies.The teachers also share their real time 
                                experience to help us in better understanding of the subject. Apart from the teachers my college friends has also made my college life very fun and interesting.</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/studentsspeak/deepanshu.jpg" alt="deepanshu" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Deepanshu Sharma</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">IITM is one of the remarkable institute among all the GGSIPU affiliated colleges. Indeed, I say that this institution do bring many transformations in me and persistently paved me the way to find the better version of myself. Certainly, there are innumerable assortments which adorns the IITM and attracts me invariably. I got infinite love and support from faculty. I am biblically grateful to my teachers who always cheers me up and channelizing my energy in the right direction. I would also like to extend my heartful thanks to IITM for getting me placed in my dream company ‘Deloitte’.</h3>
                            </div>
                        </div> 
                    </div>
                <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/studentsspeak/deepanshu.jpg" alt="deepanshu" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Deepanshu Sharma</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">IITM is one of the remarkable institute among all the GGSIPU affiliated colleges. Indeed, I say that this institution do bring many transformations in me and persistently paved me the way to find the better version of myself. Certainly, there are innumerable assortments which adorns the IITM and attracts me invariably. I got infinite love and support from faculty. I am biblically grateful to my teachers who always cheers me up and channelizing my energy in the right direction. I would also like to extend my heartful thanks to IITM for getting me placed in my dream company ‘Deloitte’.</h3>
                            </div>
                        </div> 
                    </div>
                <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/studentsspeak/shivam.jpg" alt="shivam" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Shivam Sourav</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">IITM has laid a good foundation where students are made to challenge themselves and develop the desire to achieve their best and to excel in all that they undertake. Experience at IITM has helped me to learn new things to shape me up as a better person both personally as well as professionally. The guidance and exposure that provided by IITM are very much appreciable and I feel fortunate enough to have it by my side as the very crucial moment of my career. I am thankful to the entire faculty specially Ms. Ankita Gupta (my class mentor) for guiding me. Our college gave each one of us an individual focus to enhance our abilities and get ready for the professional life ahead. Because of the college placement program, I got placed in Wipro Company, and I am beyond thrilled to start the new chapter that awaits me.</h3>
                            </div>
                        </div> 
                    </div>
                
                 
                 <!--<div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/studentsspeak/manish.jpg" alt="manish" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Manish Bisht</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">IITM gave me the opportunity to grow and enhance my professional skills. The faculty are very supportive and encourage students to push their boundaries to rise above expectations. Since my admittance, I gained a lot of skills that has evolved me into a confident person ready to face the corporate world.</h3>
                            </div>
                        </div> 
                    </div>-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/studentsspeak/manish.jpg" alt="shikhar" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Shikhar Mattoo</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">IITM is a well-oiled education machinery, powered by highly competent faculty & excellent infrastructure. I have been a student for 3 years in this institute and it has completely transformed my approach towards education and skills. Apart from providing education the institute has given me equal emphasis on personality development, focusing on inculcating ethics. I received deep knowledge and confidence to secure jobs at leading companies and build a successful career in the field of IT. The faculty support was over and beyond limits with strong intentions to mould us towards excellence.</h3>
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