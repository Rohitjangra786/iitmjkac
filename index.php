<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD || performance.getEntriesByType("navigation")[0].type === "back_forward")) {';
echo '   window.location.href = "index.php";';
echo '}';
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM Janakpuri | Established 1999 | Established - 1999 | Institute of Information Technology & Management | IITM Janakpuri |  BA (JMC) | Top BAJMC College of IP University | IPU | Top BAJMC College in IPU | mass communication colleges in IPU | Top BAJMC College in IP University | Best Journalism College in Delhi | Top BAJMC College in Delhi | BJMC | Media Hub | Journalism Courses near me |
    Best Mass Communication Colleges in Delhi | IITm Delhi | Top BJMC Colleges | BJMC ke liye IITM kaisa college hai| IITM me bjmc ka placement kaisa hai | Top Placements in BAJMC | IITM BAJMC placements | Placements in BJMC | How are the BJMC placements of IITM </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Bootstrap JS -->

    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}
        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }

        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 10px;
            padding-right: 0;
        }
        .hero-title{
            font-size: 20px;
        }

  .carousel-inner {
        width: 100%; /* Ensure the carousel spans the full width of the screen */
        height: auto; /* Allow height to adjust dynamically */
    }

    .carousel-item img {
        width: 100%; /* Make the image stretch across the full width */
        height: auto; /* Maintain the image's aspect ratio */
        object-fit: cover; /* Fill the container while maintaining aspect ratio */
    }

    .carousel-item {
        display: flex;
        align-items: center;
        justify-content: center;
    }
@media (max-width: 768px) {
    .svg-icon-container {
        margin-bottom: 30px; /* Adjust spacing for smaller screens */
    }

    .programmes .icon {
        width: 70px;
        height: 70px; /* Adjust icon size for smaller screens */
    }


    .marquee-hot{
  color:#0b1020;
  font-weight:900;
  padding:6px 12px;
  border-radius:999px;
  background: linear-gradient(135deg,#7c5cff,#23c4ff);
  text-decoration:none;
  box-shadow:0 8px 20px rgba(0,0,0,.18);
}
.marquee-hot:hover{ filter:brightness(1.05); text-decoration:none; }

}


.course-intake-section{
    background: #fff;
    padding: 25px 0 10px;
}

.course-title{
    text-align: center;
    font-weight: bold;
    color: #800000;
    margin-bottom: 15px;
    font-size: 22px;
    border-bottom: 2px solid #800000;
    display: inline-block;
    padding-bottom: 5px;
}

.course-wrap{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

.course-box{
    border: 2px solid #800000;
    border-radius: 8px;
    padding: 12px 20px;
    text-align: center;
    background: #fffaf5;
    min-width: 120px;
    transition: 0.3s;
}

.course-box:hover{
    background: #800000;
    color: #fff;
    transform: translateY(-3px);
}

.course-name{
    font-weight: bold;
    font-size: 16px;
}

.course-value{
    font-size: 18px;
    font-weight: bold;
}

@media(max-width:768px){
    .course-box{
        min-width: 100px;
        padding: 10px;
    }
}

    </style>
</head>
<body>

<?php include('naacheader.php'); ?>

       <?php include('n.php'); ?>



        <!-- Marquee Section -->
    <div class="marquee-container">
        <marquee behavior="scroll" direction="left">

  <!--          <a href="https://iitmjanakpuri.com/direct-file/CollageMakingCompetition.jpg" target="_blank">Anugoonj - Collage Making Competition</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <a href="https://iitmjanakpuri.com/direct-file/HindiDebateTopic.jpeg" target="_blank">Anugoonj Hindi Debate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/EnglishDebateTopic.jpeg" target="_blank">Anugoonj English Debate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="https://www.iitmjanakpuri.com/notices/AnugoonjPrelimsNotice.pdf" target="_blank">IITM Zone 4 Anugoonj Prelims Schedule 2026</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a class="marquee-hot" href="https://iitmjanakpuri-sdc.in/ManagementSapiens/" target="_blank">
  🔥 Management Sapiens 2026 (22–23 Jan) • Register Now
</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <a href="https://iitmjanakpuri.com/direct-file/Anugoonj Prelims 2026 Zone 4 Brochure.pdf" target="_blank">Anugoonj Prelims Zone IV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     -->        <a href="https://iitmjanakpuri.com/direct-file/feesdetails.pdf" target="_blank">Fee Details for Academic Year 2025-26 (First Year)</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/counselor.pdf">Contact Your Counsellor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <!-- <a href="https://iitmjanakpuri.com/fiesta2k25/">Fiesta 2K25</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/finalcheck.pdf" target="_blank">Admission Document (Two Copies Each) Check List for Academic Year 2025-26</a>&nbsp;&nbsp;
             <a href="https://iitmjanakpuri.com/admissions/managementquota.php" target="_blank">Management Quota Admissions-2025-26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/admissions/docs/iitmfees.pdf">Fee Details for UG & PG Programme</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="https://forms.gle/6d1BNdiLqA4JjLD1A">Message for students from Chairman</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/20250801(1).pdf" target="_blank">Orientation & Commencement of Classes Academic Year 2025-26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://forms.gle/JXh5zGktX6gjYnVv6">Parent Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.iitmjanakpuri.com/notices/IITMNationalcongf.pdf" target="_blank">AICTE Sponsored National Conference</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="https://forms.gle/m7tJHZE7cEkZXEGu5" target="_blank">Admission Enquiry 2025- 26</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
        </marquee>
    </div>

    <!-- Promo Video Section -->
<div class="container-fluid px-0">
    <video autoplay muted loop playsinline style="width: 100%; height: auto; display: block;" oncontextmenu="return false">
         <source src="0519d.mp4" type="video/mp4">
       <!--<source src="Final_13-04-2024.mp4" type="video/mp4">-->
        Your browser does not support the video tag.
    </video>
</div>

     <!-- Carousel Section -->
   <!-- First Slider -->
     <div id="carouselExampleIndicators1" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="9" aria-label="Slide 10"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="10" aria-label="Slide 11"></button>

    </div>
    <div class="carousel-inner">

         <div class="carousel-item active">
            <img src="sliderimages/12.png" class="d-block w-100" alt="Slide 1">
        </div>
       <div class="carousel-item">
            <img src="sliderimages/13.png" class="d-block w-100" alt="Slide 2">
        </div>
         <div class="carousel-item">
            <img src="sliderimages/14.png" class="d-block w-100" alt="Slide 3">
        </div>
         <div class="carousel-item">
            <img src="sliderimages/15.png" class="d-block w-100" alt="Slide 4">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/16.png" class="d-block w-100" alt="Slide 5">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/17.png" class="d-block w-100" alt="Slide 6">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/18.png" class="d-block w-100" alt="Slide 7">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/19.png" class="d-block w-100" alt="Slide 8">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/11.png" class="d-block w-100" alt="Slide 9">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/TV Studio.png" class="d-block w-100" alt="Slide 10">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/nccc.jpeg" class="d-block w-100" alt="Slide 11">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Second Slider
<div id="carouselExampleIndicators2" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="sliderimages/4.jpeg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/5.jpeg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="sliderimages/6.jpeg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>-->

    <!-- Conference and Admission -->

<!-- Conference and Admission Ends -->
      <!-- upcoming Ends
   <div class="bwhite" data-aos="zoom-in">
      <div class="container">
       <div class="row">
           <div class="container" style="margin: 30px 0px"><h1 class="tgfmlt1 text-center">Upcoming Events</h1>
           	    <hr class="hr-maroon"/>

           </div>
           <div class="container  text-center">
               <div class="card-deck">
  <div class="card" style="background: #800000; color: #fff; margin-left: 5px;margin-right: 5px;">
    <div class="card-body text-center">
      <h2 class="tgfmlt"></h2>
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Green Light Initiative:Driving Change for Cleaner Air</h4>
      	               <h4 class="tgfmlt">Under the Campaign</h4>
      	               <h3 class="tgfmlt">Diwali with MY BHARAT</h3>
      	               <h3 class="tgfmlt">October 29, 2024</h3>
      	               <h3 class="tgfmlt"></h3>
			           <h4 class="tgfmlt"> </h4>

			           <p class="tgfmlt"></p>
    </div>
  </div>
  <div class="card" style="background: #800000; color: #fff; margin-left: 5px;margin-right: 5px;">
    <div class="card-body text-center">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Rangoli Competition</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">October 29, 2024</h3>
			           <h4 class="tgfmlt"></h4>

			           <p class="tgfmlt"></p>

    </div>
  </div>
  <div class="card" style="background: #800000; color: #fff; margin-left: 5px;margin-right: 5px;">
    <div class="card-body text-center">
      <h2 class="tgfmlt"></h2>
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Model United Nations</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">November 13-14, 2024</h3>
			           <h4 class="tgfmlt"></h4>
			           <p class="tgfmlt"></p>


    </div>
  </div>

</div>




               </div>
       </div>
      </div>
  </div>
       upcoming -->

      <!-- Welcome Begins -->
  <div class="bwhite" data-aos="zoom-in">
      <div class="container">
       <div class="row">
         <!--  <div class="container" style="margin: 20px 0px"><h1 class="tgfmlt1 text-center">Welcome</h1> -->
           	  <!--   <hr class="hr-maroon"/> -->

           </div>
           <div class="container  text-center">
               <div class="col-md-16">
     <div class="container mt-10">
</div>

  <div class="container">
<!--	<div class="row">
	    <div class="col-md-3">
	        <div class="aboutheading tgfmlt1">
			   <p class="ab1" id="aa1"> About</p><p class="ab2" id="aa2">Us</p>
			</div>
	    </div>
	    <div class="col-md-9">
	        <div class="aboutp" id="aa3" onmouseover="change7()" onmouseleave="change8()">
			            <p class="text-justify tj tgfmlt" style="color: #000;"><i class="fas fa-quote-left"></i> Established in 1999 under the auspices of Mata Leelawati Shikshan Sansthan (MLSS), a registered educational society dedicated to philanthropic endeavours. The Institute (IITM) has established a strong foundation for academic excellence. Guided by the visionary leadership of Shri T.N. Chaturvedi, a recipient of the prestigious Padma Vibhushan, India's second-highest civilian honour, IITM embarked on its journey with Shri. Chaturvedi serving as both the founding President of the society and the institute. Shri Chaturvedi's illustrious career marked by his tenure as the Governor of Karnataka, Parliamentarian, and Comptroller and Auditor General (CAG) of India, underscored his profound impact in the realms of education, politics, and administration.</p>
			            <p class="text-justify tj tgfmlt" style="color: #000;">Situated in tranquil and pollution-free surroundings, conveniently accessible via the Delhi Metro Rail. The institute takes pride in fostering a conducive academic environment, endowed with a dedicated faculty and state-of-the-art infrastructure. IITM champions the implementation of 'Outcome based education', a methodology rooted in technological innovations and a student-centric pedagogy. The result-driven approach not only augments students' learning capabilities but also enhances their performance across various domains. Central to its ethos, IITM remains steadfast to its commitments to nurturing youth, envisioning them not merely as proficient professionals but as empathetic leaders poised for excellence in their respective fields. IITM offers an extensive array of brief yet impactful skill enhancement and syllabus enrichment workshops spanning diverse areas of management specializations, and emerging technologies. Additionally, the IITM takes pride in its expansive alumni network, comprising over 7000 professionals who occupy key managerial positions within the nation's primer corporate establishments. This robust network not only reflects the institute's commitment to fostering enduring relationships but also underscores its alumni's significant contributions to the professional landscape.</p>
			            <!--<p class="text-justify tj tgfmlt" style="color: #000;">The Institute takes pride in having developed the faculty support and infrastructure imperative to effectively implement the &quot;Outcome Based Education&quot;, a technology-based learner centric and result-oriented approach which enhances students' learning and performance capabilities. We are passionate about grooming the nation&apos;s youth to grow into excellent professionals and good human beings destined to become torch bearers of their respective domains.</p>
			            <p class="text-justify tj tgfmlt" style="color: #000;">IITM conducts a plethora of short duration skill enhancement and syllabus enrichment workshops related to areas of management specialisations and emerging IT technologies. We have a strong alumni network of over 6000+ professionals working at various management levels in the leading corporate houses of the country.
			            <i class="fas fa-quote-right"></i></p>-->
			         </div>
	    </div>


	</div>
</div>



     </div>


       </div>
      </div>
    </div>

        <div class="lowerb" style="background:#fff;margin-top: 2rem;">
             <div class="row" style="margin-top:0;padding-top:0;background: #fff;">
                 <div class="col-md"></div>
             </div>
        <div class="row">
                <div class="container">
                         <div class="col-md" style="color: black;">
  <div class="card sliders3-ed"  style="background-color: #800000;margin:0;padding:0;">

    <!--<div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: white;"><span style="font-size: 2rem;">Admissions Open</span>
      <br>
      <span>MBA, MCA, BCA, BBA, B.Com(H) & BA(JMC)</span>
      </h1>
      <h4 class="" style="font-size: 1.3rem;text-align:center;color: white;">Academic Year: 2025-2026</h4>
      <h3 class="" style="font-size: 1.3rem;text-align:center;color: white;"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdFH0kGBvQVXcsEWM5P08jG8Zd0ZSaYZs6efY6pmusXllT5Rw/viewform" target="_blank" style="color: white;">Click here</a></h3>

      <p class="card-text">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" style="text-align:center;">
                    <!--<div class="carousel-item active">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt"></h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">MEDIAX</h3>
      	               <h3 class="tgfmlt">April 16-17,2025</h3>
      	               <h3 class="tgfmlt"></h3>
			           <h4 class="tgfmlt"> </h4>

			           <p class="tgfmlt"></p>
                    </div>
                    <div class="carousel-item active">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt"></h4>
      	               <h4 class="tgfmlt">Academic Year: 2025-2026</h4>
      	               <h3 class="tgfmlt"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdFH0kGBvQVXcsEWM5P08jG8Zd0ZSaYZs6efY6pmusXllT5Rw/viewform" target="_blank" style="color: white;">Click here</a></h3>
			           <h3 class="tgfmlt"></h3>


			           <p class="tgfmlt"></p>
                    </div> -->
                   <!-- <div class="carousel-item">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Celestia 1.0</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">April 17, 2025</h3>
			           <h4 class="tgfmlt"></h4>
			           <p class="tgfmlt"></p>
                    </div>-->
                </div>
             </div>
      </p>
    </div>
  </div>
                         </div>
                     </div>
        </div>
        <div class="row">

          <div class="col-md-7">
             <div class="container">
                 <div class="row">

                 </div>
                 <div style="height: 5vh;"></div>
                 <div class="row">
                     <div class="container">
                         <div class="col-md" style="color: black; max-width: 600px; margin: 0 auto;">



<div class="course-intake-section">
    <div class="container text-center">
        <div class="course-title">Course Intake</div>

        <div class="course-wrap">
            <div class="course-box">
                <div class="course-name">MBA / MCA</div>
                <div class="course-value">60</div>
            </div>

            <div class="course-box">
                <div class="course-name">BCA</div>
                <div class="course-value">240</div>
            </div>

            <div class="course-box">
                <div class="course-name">BBA</div>
                <div class="course-value">360</div>
            </div>

            <div class="course-box">
                <div class="course-name">B.Com (H)</div>
                <div class="course-value">120</div>
            </div>

            <div class="course-box">
                <div class="course-name">BA (JMC)</div>
                <div class="course-value">180</div>
            </div>
        </div>
    </div>
</div>


<div class="card sliders3-ed" style="background: #800000;">
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: white;">IITM In News</h1>
       <div class="card-text">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                        <img src="upload_new/gallery/rankk.jpeg" class="img-responsive" style="width: 100%;  height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top 50 B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/conf.jpg" class="img-responsive" style="width: 100%;  height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">International Conference on IKDSAK-2023</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/tb24.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Placement Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/tbb23.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top Private Institutes</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/bscho24.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top 70 B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/deb23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Best B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                     <div class="carousel-item">
                        <img src="upload_new/gallery/ind23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/inddd23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/india2333.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                     <div class="carousel-item">
                        <img src="upload_new/gallery/deb23.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Business Award</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/businessaward.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Business Award</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>

                    </div>
                   <div class="carousel-item">
                      <img src="upload_new/gallery/timesbschool.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/fiesta.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">IITM Fiesta</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                     <div class="carousel-item">
                      <img src="upload_new/gallery/fiesta1.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">IITM Fiesta</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/Times B-School 1.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/Times B-Schoolbba.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/placement.jpeg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/lak.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Star Cast of LAKEEREIN</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/indiia.jpg" class="img-responsive" style="width: 100%; height: auto;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Live Show- India TV</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
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
          </div>

      <?php

$db = new PDO('mysql:host=localhost;dbname=iitmjkac_Information', 'iitmjkac_Gautam123', 'Gautam@123+##');

// Fetch the last 5 records in ascending order of notice_id from the AllNotices table
$query = "SELECT * FROM AllNotices ORDER BY notice_id DESC LIMIT 7";
$stmt = $db->prepare($query);
$stmt->execute();
$notices = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-md-3" style="margin: 2em;">
    <div>
        <h1 class="tgfmlt nt">Notices</h1>
        <?php $counter = 1; ?>
        <?php foreach ($notices as $notice): ?>
            <span class="badge tgfmlt" style="background: #800000;color:#fff;"><?php echo $counter; ?></span>
            <?php $counter++; ?>
            <a href="<?php echo $notice['file_path']; ?>" target="_blank" class="tgfmlt nt">
                <?php echo $notice['notice_title']; ?>
                <p class="scp2">[Uploaded on: <?php echo $notice['date_uploaded']; ?>]</p>
                [Link: <a href="<?php echo $notice['file_path']; ?>" target="_blank"><?php echo $notice['file_path']; ?></a>]
            </a>
            <br/>
        <?php endforeach; ?>
        <a class="btn btn-danger tgfmlt"  href="https://www.iitmjanakpuri.com/notices.php" target="_blank">View All Notices</a>
        <div class="text-right">

        </div>
    </div>
</div>
<div style="height: 5vh;"></div>
<div class="container" style="background-color: #f0f8ff; padding: 50px 20px;">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri-sdc.in/" target="_blank">

                 <!--   <img src="icon1.svg" alt="Icon 1" class="icon"> -->

                    <p class="text">Incubation Program</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri.com/StudentZone/esc.php">
                 <!--   <img src="icon2.svg" alt="Icon 2" class="icon"> -->
                    <p class="text">Green Initiatives</p>
                </a>
            </div>
        </div>
<div class="col-lg-3 col-md-6 col-sm-3 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri.com/StudentZone/studentzone.php" target="_blank">

                 <!--   <img src="icon1.svg" alt="Icon 1" class="icon"> -->

                    <p class="text">Students' Societies</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="https://iitmjanakpuri.com/upload_new/Physical%20Wellbeing.pdf" target="_blank">
            <!--        <img src="icon3.svg" alt="Icon 3" class="icon"> -->
                    <p class="text">Counselling Services</p>
                </a>
            </div>
        </div>



       <!--  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
                   <img src="icon3.svg" alt="Icon 3" class="icon">
                    <p class="text">Centre for Professional Development</p>
                </a>
            </div>
        </div>-->
        <!-- Repeat structure for additional items -->
    </div>

</div>
<div style="height: 10vh;"></div>


 <!--   SOCIAL MEDIA ICONS -->
  <div class="row follow-us-icons" style="background: #F5CEAF;width: 100%;">
    <div style="width: 100%">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 text-center" style="text-align:center;padding: 5px;">
                	<span class="text-danger h3 tgfmlt follow-s-txt" style="color: #800000; margin-bottom: 20px">Follow Us @ </span>
                  <div class="icons-gs">

	<a href="https://www.instagram.com/iitm_janakpuri/" class="s instagram" target="_blank" style="border-top-left-radius:4px;"><i class="fa fa-instagram"></i></a>
  	<a href="https://www.facebook.com/iitmjanakpurinewdelhi" class="s facebook" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.linkedin.com/in/iitm-janakpuri-29678b100" class="s linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
  	<a href="https://twitter.com/iitm_ipu" class="s twitter" target="_blank"><i class="fa fa-twitter"></i></a>
  	<a href="https://www.youtube.com/channel/UCRfsFwiKcTStwUIf2vISxCw" class="s youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
   <!--  <div style="background-color: #800000; color: #fff; margin: 0; padding: 20px 0; width: 100%;">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Research & Consultancy</h6>
                <ul class="list-unstyled">
                    <li><a href="upload_new/Formation of Research Committee.pdf" target="_blank" style="color: white;">Research Committee</a></li><br>
                    <li><a href="upload_new/projects.pdf" target="_blank" style="color: white;">Projects</a></li><br>
                    <li><a href="upload_new/consultancy.pdf" target="_blank" style="color: white;">Consultancy</a></li><br>
                </ul>
            </div>

            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Essential Requirements</h6>
                <ul class="list-unstyled">
                    <li><a href="upload_new/ICC-1.pdf" target="_blank" style="color: white;">Internal Complaints Committee (ICC)</a></li><br>
                    <li><a href="upload_new/SC_ST Committtee.pdf" target="_blank" style="color: white;">SC/ST Committee</a></li><br>
                    <li><a href="upload_new/Guidepg (1).pdf" target="_blank" style="color: white;">Code of Conduct (PG)</a></li><br>
                    <li><a href="upload_new/disabilities.pdf" target="_blank" style="color: white;">Disabilities Committee</a></li><br>
                    <li><a href="upload_new/AntiRagging.pdf" target="_blank" style="color: white;">Anti-Ragging Guidelines</a></li><br>
                    <li><a href="upload_new/GRC Notices.pdf" target="_blank" style="color: white;">Constitution of GRC and SGRC</a></li>
                </ul>
            </div>

        </div>


    </div>
</div>
  <div style="background-color: #800000; color: #fff; margin: 0; padding: 20px 0; width: 100%;">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-4">
                <a href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" target="_blank">
                    <img src="images/map.png" style= "height: 300px; width: 400px;"/>
                </a>
               </div>
           <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Contact Us</h6>
                <p class="mb-1">Institute of Information Technology & Management</p>
                <p>D-29, Institutional Area,<br>Janakpuri, New Delhi-110058</p>
                <p><i class="fa fa-phone"></i> 011-28525882 / 28520239 / 28525051</p>
                <p><i class="fa fa-envelope"></i> director@iitmipu.ac.in</p>
            </div>
            </div>
        </div>


        </div>


        <div class="row text-center">
            <div class="col">
               <p class="small mb-0" style="color: #800000;">
                    &copy; Institute of Information Technology & Management 2021<br>
                    Visitors Count: 1234569
                </p>
            </div>
        </div> -->
    </div>
</div>
  </div>
    <!--   SOCIAL MEDIA ICONS END HERE -->



        </div>

        <?php
       include("naacfooter.php");
    ?>
      <!-- Footer Ends -->







</div>
   </div>

    <script src="myscript.js"></script>
</body>
</html>
