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
    <title>IITM Janakpuri</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #fff;
            font-family: Georgia, Arial, sans-serif;
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
        }
        .hero-title{
            font-size: 20px;
        }
        .vision-mission-section {
            margin: 20px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-left: 5px solid #800000;
            border-radius: 10px;
        }

        .vision-mission-section h2 {
            color: #800000;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .vision-mission-section p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            color: #800000;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            color: #800000;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f2f2f2;
            color: #800000;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: teal;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .badge-number {
    display: inline-block;
    background-color: #800000;
    color: #fff;
    padding: 5px 10px;
    border-radius: 50%;
    font-size: 14px;
    margin-right: 10px;
    font-weight: bold;
}

.login-button {
    background-color: #800000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 20px;
    display: inline-block;
}

.login-button:hover {
    background-color: #660000; /* Darker shade for hover effect */
    color: #fff;
}

/* Styles for the popup form */
.popup {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 128, 128, 0.5); /* Teal semi-transparent background */
    backdrop-filter: blur(5px); /* Blurred background */
}

.popup-content {
    margin: 10% auto; /* Centered */
    padding: 20px;
    border: none;
    border-radius: 15px;
    width: 80%;
    max-width: 500px;
    background: linear-gradient(135deg, #00B4DB, #0083B0); /* Attractive gradient background */
    color: white; /* Text color for contrast */
    position: relative; /* To position the close button */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Modern shadow for depth */
    text-align: center;
    animation: fadeIn 2s ease-in-out; /* Fade-in animation */
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

#logo img {
    display: block;
    margin: 0 auto 20px;
    max-width: 70%;
    height: auto;
}

.popup-elements {
    margin-top: 20px;
}

.close {
    color: #fff;
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s;
}

.close:hover,
.close:focus {
    color: white;
    background-color: #FF6347; /* Red color */
    border-radius: 50%;
    padding: 5px;
}

.popup-headings-h1, .popup-headings-course, #admission-link {
    margin: 10px 0;
}

.popup-headings-h1 {
    font-size: 2rem;
    font-weight: bold;
}

.popup-headings-course {
    font-size: 1.2rem;
}

#admission-text {
    color: #FFD700; /* Gold color for links */
    text-decoration: none;
    transition: all 0.3s;
}

#admission-text:hover {
    color: #FFA500; /* Orange color on hover */
}

#admission-link {
    font-weight: normal;
    font-size: 1rem;
}

#admission-link {
    border: 1px solid #FFD700;
    padding: 10px 0px;
    background-color: #FF6347;
    color: white;
    font-weight: bold;
    display: inline-block;
    width: 80%;
    text-align: center;
    margin: 20px auto 0;
    transition: all 0.3s;
}

#admission-link #admission-text {
    color: white;
    text-decoration: none;
}

#admission-link:hover {
    background-color: #FFA500;
}
/* Styles for the popup form */


/*last section */
.svg-icon-container {
    text-align: center;
    margin-bottom: 40px; /* Spacing between items */
}

.programmes a {
    display: inline-block; /* Keeps the content together */
    text-decoration: none;
}

.programmes .icon {
    display: block;
    margin: 0 auto 130px auto; /* Centers the icon and adds spacing below */
    width: 80px;
    height: 80px; /* Adjust icon size */
}

.programmes .text {
    font-size: 18px;
    color: #0056b3; /* A pleasant blue for links */
    font-weight: bold;
    margin: 0;
}

.programmes .text:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .svg-icon-container {
        margin-bottom: 30px; /* Adjust spacing for smaller screens */
    }

    .programmes .icon {
        width: 70px;
        height: 70px; /* Adjust icon size for smaller screens */
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
            <a href="https://iitmjanakpuri.com/admissions/docs/FEE for_AY 2024-25all three.pdf">Fee Details for UG & PG Programme - Academic Year 2024-25</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://iitmjanakpuri.com/direct-file/counselor.pdf">Contact Your Counsellor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://forms.gle/6d1BNdiLqA4JjLD1A">Message for students from Chairman</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://forms.gle/JXh5zGktX6gjYnVv6">Parent Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </marquee>
    </div>
     <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="sliderimages/1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="sliderimages/2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="sliderimages/1.jpg" class="d-block w-100" alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="sliderimages/2.jpg" class="d-block w-100" alt="Slide 4">
            </div>
            <div class="carousel-item">
                <img src="sliderimages/1.jpg" class="d-block w-100" alt="Slide 5">
            </div>
            <div class="carousel-item">
                <img src="sliderimages/2.jpg" class="d-block w-100" alt="Slide 6">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
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
			            <p class="text-justify tj tgfmlt" style="color: #000;"><i class="fas fa-quote-left"></i> Established in 1999 under the auspices of Mata Leelawati Shikshan Sansthan (MLSS), a registered educational society dedicated to philanthropic endeavours. The Institute (IITM) has established a strong foundation for academic excellence. Guided by the visionary leadership of Shri T.N. Chaturvedi, a recipient of the prestigious Padma Vibhushan, India's second-highest civilian honour, IITM embarked on its journey with Shri. Chaturvedi serving as both the founding President of the society and the institute. Shri Chaturvedi’s illustrious career marked by his tenure as the Governor of Karnataka, Parliamentarian, and Comptroller and Auditor General (CAG) of India, underscored his profound impact in the realms of education, politics, and administration.</p>
			            <p class="text-justify tj tgfmlt" style="color: #000;">Situated in tranquil and pollution-free surroundings, conveniently accessible via the Delhi Metro Rail. The institute takes pride in fostering a conducive academic environment, endowed with a dedicated faculty and state-of-the-art infrastructure. IITM champions the implementation of ‘Outcome based education’, a methodology rooted in technological innovations and a student-centric pedagogy. The result-driven approach not only augments students’ learning capabilities but also enhances their performance across various domains. Central to its ethos, IITM remains steadfast to its commitments to nurturing youth, envisioning them not merely as proficient professionals but as empathetic leaders poised for excellence in their respective fields. IITM offers an extensive array of brief yet impactful skill enhancement and syllabus enrichment workshops spanning diverse areas of management specializations, and emerging technologies. Additionally, the IITM takes pride in its expansive alumni network, comprising over 7000 professionals who occupy key managerial positions within the nation’s primer corporate establishments. This robust network not only reflects the institute's commitment to fostering enduring relationships but also underscores its alumni’s significant contributions to the professional landscape.</p>
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

          <div class="col-md-7">
             <div class="container">
                 <div class="row">
                     <div class="container">
                         <div class="col-md" style="color: black;">
  <div class="card sliders3-ed"  style="background-color: #800000;margin:0;padding:0;">
   
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;">Upcoming Events</h1>
      <p class="card-text">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" style="text-align:center;">
                    <div class="carousel-item active">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Green Light Initiative:Driving Change for Cleaner Air</h4>
      	               <h4 class="tgfmlt">Under the Campaign</h4>
      	               <h3 class="tgfmlt">Diwali with MY BHARAT</h3>
      	               <h3 class="tgfmlt">October 29, 2024</h3>
      	               <h3 class="tgfmlt"></h3>
			           <h4 class="tgfmlt"> </h4>
			           <!--<p class="tgfmlt"><a class="sl" href="https://technosepians.iitmjanakpuriaiec.com/" target="_blank">Click here</a></p>-->
			           <p class="tgfmlt"></p>
                    </div>
                    <div class="carousel-item">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Rangoli Competition</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">October 29, 2024</h3>
			           <h4 class="tgfmlt"></h4>
			           
			           <!--<p class="tgfmlt"><a class="sl" href="https://iitminternware.com/2024-25/events/newEvents/Case%20Study%20HP/index.php" target="_blank">Click here</a></p>-->
			           <p class="tgfmlt"></p>
                    </div>
                    <div class="carousel-item">
      	               <p class="tgfmlt"></p>
      	               <h4 class="tgfmlt">Model United Nations</h4>
      	               <h4 class="tgfmlt"></h4>
      	               <h3 class="tgfmlt">November 13-14, 2024</h3>
			           <h4 class="tgfmlt"></h4>
			           <p class="tgfmlt"></p>
                    </div>
                </div>
             </div>
      </p>
    </div>
  </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="container">
                         <div class="col-md" style="color: black">
                             
<div class="card sliders3-ed" style="background: #800000;">
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;">IITM In News</h1>
       <div class="card-text">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                        <img src="upload_new/gallery/conf.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">International Conference on IKDSAK-2023</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       <div></div>
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/tb24.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Placement Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/tbb23.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top Private Institutes</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/bscho24.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Top 70 B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/deb23.jpeg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Best B-School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                     <div class="carousel-item">
                        <img src="upload_new/gallery/ind23.jpeg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/inddd23.jpeg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/india2333.jpeg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">India Today Ranking</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                     <div class="carousel-item">
                        <img src="upload_new/gallery/deb23.jpeg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Business Award</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="upload_new/gallery/businessaward.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Business Award</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                       
                    </div>
                   <div class="carousel-item">
                      <img src="upload_new/gallery/timesbschool.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/fiesta.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">IITM Fiesta</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                     <div class="carousel-item">
                      <img src="upload_new/gallery/fiesta1.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">IITM Fiesta</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/Times B-School 1.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/Times B-Schoolbba.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/placement.jpeg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Times B School</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/lak.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
                       <h3 class="tgfmlt" style="text-align: center;font-weight:bolder"></h3>
                       <h4 class="tgfmlt" style="text-align: center;">Star Cast of LAKEEREIN</h4>
                       <h4 class="tgfmlt" style="text-align: center;"></h4>
                    </div>
                    <div class="carousel-item">
                      <img src="upload_new/gallery/indiia.jpg" class="img-responsive" style="width: 100%; height: 400px;object-position: bottom;" />
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
$query = "SELECT * FROM AllNotices ORDER BY notice_id DESC LIMIT 5";
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

<div class="container" style="background-color: #f0f8ff; padding: 50px 20px;">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
                    
                 <!--   <img src="icon1.svg" alt="Icon 1" class="icon"> -->
                    
                    <p class="text">Incubation Program</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
                 <!--   <img src="icon2.svg" alt="Icon 2" class="icon"> -->
                    <p class="text">Centre for Green Initiatives</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
            <!--        <img src="icon3.svg" alt="Icon 3" class="icon"> -->
                    <p class="text">Centre for Professional Development</p>
                </a>
            </div>
        </div>
        <!-- Repeat structure for additional items -->
    </div>
     <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
                    
                 <!--   <img src="icon1.svg" alt="Icon 1" class="icon"> -->
                    
                    <p class="text">Students' Societies</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
                 <!--   <img src="icon2.svg" alt="Icon 2" class="icon"> -->
                    <p class="text">Anti Discrimination Committee</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 svg-icon-container">
            <div class="programmes">
                <a href="">
            <!--        <img src="icon3.svg" alt="Icon 3" class="icon"> -->
                    <p class="text">Counselling Services</p>
                </a>
            </div>
        </div>
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
     <div style="background-color: #800000; color: #fff; margin: 0; padding: 20px 0; width: 100%;">
    <div class="container">
        <div class="row">
            <!-- Research & Consultancy Section -->
            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Research & Consultancy</h6>
                <ul class="list-unstyled">
                    <li><a href="upload_new/Formation of Research Committee.pdf" target="_blank" style="color: white;">Research Committee</a></li><br>
                    <li><a href="upload_new/projects.pdf" target="_blank" style="color: white;">Projects</a></li><br>
                    <li><a href="upload_new/consultancy.pdf" target="_blank" style="color: white;">Consultancy</a></li><br>
                </ul>
            </div>
 <!-- Essential Requirements Section -->
            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase border-bottom pb-2">Essential Requirements</h6>
                <ul class="list-unstyled">
                    <li><a href="upload_new/ICC-1.pdf" target="_blank" style="color: white;">Internal Complaints Committee (ICC)</a></li><br>
                    <li><a href="upload_new/SC_ST Committtee.pdf" target="_blank" style="color: white;">SC/ST Committee</a></li><br>
                    <li><a href="upload_new/Guidepg (1).pdf" target="_blank" style="color: white;">Code of Conduct (PG)</a></li><br>
                    <li><a href="upload_new/disabilities.pdf" target="_blank" style="color: white;">Disabilities Committee</a></li><br>
                    <li><a href="upload_new/AntiRagging.pdf" target="_blank" style="color: white;">Anti-Ragging Guidelines</a></li><br>
                </ul>
            </div>
           
        </div>

       
    </div>
</div>
  <div style="background-color: #800000; color: #fff; margin: 0; padding: 20px 0; width: 100%;">
    <div class="container">
        <div class="row">
             <!-- Location Map -->
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

        <!-- Footer Bottom -->
        <div class="row text-center">
            <div class="col">
               <p class="small mb-0" style="color: #800000;">
                    &copy; Institute of Information Technology & Management 2021<br>
                    Visitors Count: 1234569
                </p>
            </div>
        </div>
    </div>
</div>
  </div>
    <!--   SOCIAL MEDIA ICONS END HERE -->

      

        </div>

       
      <!-- Footer Ends -->
      
  
          
    
            
          
             
</div>  
   </div>

    <script src="myscript.js"></script>
</body>
</html>
