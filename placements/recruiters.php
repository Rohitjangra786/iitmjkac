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
    <title>IITM | Placements</title>

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
            <h1>Recruiters Speak</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/placements.php">IIPC</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/partners.php">Placement Partners</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/recruiters.php">Recruiters Speak</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/plrecords.php">Placement Records</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/summertraining.php">Summer Training Records</a>
                <a class="dropdown-item" href="https://www.iitminternware.com/">Internship Cell</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/images/IITM%20Brochure%20(final).pdf">Brochure</a>
        </div>
        <div class="col-md-9">
            <div class="container">
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                   
                   <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/feedback_17.jpg" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">Wipro Technologies</span><br/>
						<span class="tgfmlt" style="color: #800000;">Mr. Rahul Bhatia - North Campus Manager</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">Our association with IITM has been great and 
					throughout it has been a journey filled with tremendous outcomes for 
					all those involved. Students that we have recruited in the past have 
					demonstrated learning attitude, perseverance and hard work in their 
					corporate lives. I personally feel that college management is very 
					supportive &amp; encourages Campus placements thus providing valuable 
					opportunities to students in corporates like Wipro.</p>		
				</div>
			</div>

                    </div>
                    <div class="carousel-item">
                         <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/feedback_amazon.jpg" class="img-responsive col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">Amazon India</span><br/>
						<span class="tgfmlt" style="color: #800000;">Mr. Tarun Mehrotra - Recruiter | Customer Service Operations</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">On behalf 
					of all the entire Talent Acquisition Team of Amazon, please accept 
					my appreciation for the excellent work done, especially by the 
					Placement Cell and the work your support staff has done over the past several
					months in ensuring that the right talent is applying for the 
					opportunities against our open position and in great numbers. 
					It was an enormous undertaking but went smoothly and efficiently!</h2>		
					<p class="tgfmlt text-justify" style="color: #4b4b4b;">Thanks to your 
					leadership and dedication combined with your staff's teamwork and energy, we are now excitingly waiting for the 
					right result just like every year against the 
					hard work. You and your employees should take great pride in this accomplishment. Looking forward for the students to join at the earliest.</p>		
				</div>
			</div>
                       
                    </div>
                    <div class="carousel-item">
                         <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/feedback_18.jpg" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">Capgemini India</span><br/>
						<span class="tgfmlt" style="color: #800000;">Ms. Pallabi Baruah - Sr Analyst - Campus Recruitment</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">Our association with IITM has 
					been great. Students that we have recruited in the past drives have very good communication 
					skills, positive learning attitude, and very much determined to work in corporate world. I feel that college management is
					very supportive & encourages Campus placements in future. As far as the infrastructure is 
					concerned it has good seating capacity in labs and auditorium for large pool of candidates.</p>		
				</div>
			</div>
                    </div>
                    
                <div class="carousel-item">
                         <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/BSES Logo.jpg" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">BSES Delhi</span><br/>
						<span class="tgfmlt" style="color: #800000;">Mr. Saurabh Gandhi - Assistant Vice President</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">"It is always a pleasure to connect with IITM students. 
					The kind of confidence and dedication I have seen in these students is commendable. These guys are actually ready for the corporate world. 
					There is so much of professionalism reflected always".</p>		
				</div>
			</div>
                    </div>   
                    
                    
                     <div class="carousel-item">
                         <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/Federal.png" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">Federal Bank</span><br/>
						<span class="tgfmlt" style="color: #800000;">Ms. Supriya - Human Resources</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I wanted to take a moment to express my utmost appreciation for the exceptional recruitment
					process hosted by IITM and the incredible quality of students at your esteemed campus. It has been an absolute pleasure to engage with such talented 
					individuals and witness the remarkable coordination. I would like to extend my gratitude to the entire IITM team for their efforts
					in organizing the recruitment drive and maintaining high standards of student quality."</p>		
				</div>
			</div>
                    </div>    
                    <div class="carousel-item">
                         <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/JLL Logo.png" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">JLL India</span><br/>
						<span class="tgfmlt" style="color: #800000;">Mr. Ranveer Singh - JBS,Talent Acquisition</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I want to extend my sincerest gratitude for the outstanding efforts IITM Placement Cell has put
					forth during the GT Hiring and the invaluable assistance provided in ensuring a seamless onboarding process for the selected students from IITM. 
					Your unwavering support has left a lasting impact, 
					instilling us with confidence and enthusiasm for our future endeavors. Please accept my heartfelt thanks."</p>		
				</div>
			</div>
                    </div> 
                    
                    
                 <div class="carousel-item">
                 <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/cl.png" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">Cloud Certitude</span><br/>
						<span class="tgfmlt" style="color: #800000;">Mr. Rakesh Aggarwal - Founder & CEO</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I strongly believe that InternWare - Internship Cell of IITM Janakpuri is great both for the students community and 
					Industry.Colleges should focus on taking such initiatives to strengthen Industry and Academia Bond".</p>		
				</div>
			</div>
            </div> 
            
            <div class="carousel-item">
                 <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/HIVE AI Logo.png" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">Hive AI</span><br/>
						<span class="tgfmlt" style="color: #800000;">Ms. Usha Yadav - Talent Acquisition Lead</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I would like to thank IITM for such a wonderful coordination throughout the campus hiring process. We had a great experience working with you. My entire team is pleased with the efforts of the team. We were hiring from multiple campuses but experience with your campus was superb. Kudos to the entire team and the quality of students is also amazing, they were well prepared and informed.
                      We would love to partner with you for next year's hiring as well. Great Job👍"</p>		
				</div>
			</div>
            </div> 
                    
                    <div class="carousel-item">
                         <div class="row mt-30">
				<div class="col-md">
					<img src="images/recruiters/VDOIT Technologies.png" class="img-responsive img-thumbnail col-sm-2" align="left" style="margin-right: 1rem;">
					<h2 class="text-danger tgfmlt mb-10" style="color: #800000;">
						<span class="tgfmlt" style="color: #800000;">VDOIT Technologies Ltd.</span><br/>
						<span class="tgfmlt" style="color: #800000;">Mr. Narinder Kamra - CEO, MD</span>
					</h2>
					<p class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I would like to appreciate IITM Janakpuri & the Management Leadership team who encourage their 
					students to learn from the experience of senior corporate executives through numerous platforms".</p>		
				</div>
			</div>
                    </div> 
                    
                </div>
                  <!-- Left and right controls -->
 <!-- Left and right controls -->

<a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
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