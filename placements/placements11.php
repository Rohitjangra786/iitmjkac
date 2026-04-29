<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IITM Janakpuri</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

        <style>

    .tgfmlt{
      font-family: Georgia, serif;
      font-size: calc(31.25px+.3vw);
      line-height: 1.75;
      color: #fff;
}
 .tgfmlt2{
      font-family: Georgia, serif;
      font-size: calc(31.25px+.3vw);
      line-height: 1.5;
      color: #fff;
}
.tgfmlt1{
    font-family: Georgia, serif;
    font-size: calc(31.25px+.3vw);
    line-height: 1.75;
    color: #333333;
}

.navigation{
 /* padding-top:5px;
  padding-bottom:5px;*/
  padding: 0;
  position:absolute;
  top:0;
  width:100%;
  z-index:1;
  border-bottom: 0.08rem #fff solid;
  border-top: 1.3rem #800000 solid;

  
  /* background: rgba(255, 255, 255, 0.05);*/
     background: rgba(54, 69, 79, 0.5);
  

}
/* text size classes*/
.hw{
    	margin-top: 1.1rem;
    margin-bottom: 15px;
    border: 4px;
    border-top: white;
    background-color: white;
    height: 0.01rem;
}

.hr-black
{
	margin-top: 15px;
    margin-bottom: 15px;
    border: 4px;
    border-top: 1px solid black;
    background-color: black;
    height: 1px;
}
.hr-maroon
{
	margin-top: 15px;
    margin-bottom: 15px;
    border: 4px;
    border-top: 1px solid #973636;
    background-color: maroon;
    height: 1px;
}
.hr-white
{
	margin-top: 15px;
    margin-bottom: 15px;
    border: 4px;
    border-top: white;
    background-color: white;
    height: 2px;
}

.text-wheat{color:wheat;}

.text-size-10 {font-size: 10px;}
.text-size-11 {font-size: 11px;}
.text-size-12 {font-size: 12px;}
.text-size-13 {font-size: 13px;}
.text-size-14 {font-size: 14px;}
.text-size-15 {font-size: 15px;}
.text-size-16 {font-size: 16px;}
.text-size-17 {font-size: 17px;}
.text-size-18 {font-size: 18px;}
.text-size-19 {font-size: 19px;}
.text-size-20 {font-size: 20px;}
.text-size-21 {font-size: 21px;}
.text-size-22 {font-size: 22px;}
.text-size-23 {font-size: 23px;}
.text-size-24 {font-size: 24px;}
.text-size-25 {font-size: 25px;}
/* font color */
.text-black{color:black;}
.text-maroon{color:maroon;}

.lowerb{
    background-color: #800000;
    color: #fff;
    padding: 1rem;
    padding-bottom: 0px;
    font-size: 1.1rem;
    margin: 0;
   
}
.sliders3-ed{
}
@media screen and (max-width: 520px) {
  .sliders3-ed{
    margin: 30px 10px !important;
  }
}
/* Media Queries Start*/

@media all and (display-mode: fullscreen) {
  .content {
    padding: 0px;
  }
  .videocontainer{
      min-width: 100%;
      width:100%;
      margin:0;
  }
}

.bwhite{
    background-color: #fff;
    color: #333333;
    padding: 0px;
    font-size: 1.1rem;
    padding-bottom: 0px !important;
}
/*xs*/
@media (max-width: 280x) {
 
}
@media (max-width: 600px) {

  .content1{
     overflow: hidden;
     display:none;
  }
  .content1 h1{
            font-size: 1.5rem;
            font-weight: bolder;

  }
  .content1 p{
       font-size: 1.3rem;
            font-weight: bolder;
  }
 .content2{
     display: block;
     margin:0;
     
 }


}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
@media screen and (max-width: 768px) {
    .navigation{
        background: #fff;
        color: #800000;
    }
    
  .fixed-social-icons{
    left: 20px;
  }
  .follow-s-txt{
    display: block;
    margin: 20px 0px;
  }
  .icons-gs a{
    margin: 10px !important;
  }
}
@media screen and (max-width: 520px) {
  .sliders3-ed{
    margin: 30px 10px !important;
  }
  .fixed-social-icons{
    left: 15px;
  }
  .follow-us-icons{
    padding: 10px;
  }
  .follow-s-txt{
    display: block;
    margin: 20px 0px;
  }
  .icons-gs{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 5px;
    text-align: center;
    width: 80%;
    margin: 0 auto;
  }
}

.fixed-social-icons li{
  float: none;
  display: block;
  background: #55ACEE;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.fidex-social-icons li:hover{
    transform: translateX(1.7);
}
.fixed-social-icons li:nth-of-type(1){
  background: #3D5B99;
}
.fixed-social-icons li:nth-of-type(2){
  background: #55ACEE;
}
.fixed-social-icons li:nth-of-type(3){
  background: #e2382f;
}
.fixed-social-icons li:nth-of-type(4){
  background: #0073A4;
}
.fixed-social-icons li:nth-of-type(5){
  background: #E25714;
}
.fixed-social-icons li a{
  color: white;
}
.partner
{
	box-shadow: 0px 0px 5px;
	height: 120px;
	padding:20px;
	border-radius: 5px;	
	margin-bottom: 20px;
	width: 100%;
}

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(100%);
        left: 30px;
    }
    .carousel-control-prev {
        margin-left: -150px;
        position: absolute;
        left: 10px;
                bottom: -20px;

        transform: translateY(-50%);
    
      
    }

    .carousel-control-next {
        margin-right: -150px;
         position: absolute;
        right: 10px;
        top: 80%;
        transform: translateY(-50%);
              
    }

</style>
  </head>
  <body>
<!--    <div class="spinner-container">
      <div class="circles">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div> -->

   <!--   <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div> -->
       <div class="navigation">    
<?php include('../navbartop.php'); ?>
<?php include('navbarplacements.php'); 
?></div>

      <div style="height: 20vh;"></div>
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="iipc">Industry Institute Partnership Cell (IIPC)</h1>
          <div class="underline"></div>
          <div class="container">
              <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
              The Industry Institute Partnership Cell (IIPC) of IITM was established in 2004 with the aim of strengthening the collaboration between the institute and the industry. This center plays a pivotal role in identifying industrial expectations and fostering institutional readiness to meet industrial demands by facilitating internships, seminars, workshops, placements, and various other industrial training programs. The partnership between the industry and the institute is also evident in equipping faculty members with the latest practices and ensuring that students are prepared for the industry by exposing them to current industry standards and practices. The IIPC aids students in refining their skills to adeptly navigate evolving technologies. Its principal objective is to engage with prominent companies spanning various industries to forge partnerships in the near future. Meanwhile, the Central Training and Placement (T&P) Cell is dedicated to fulfilling students' career aspirations and addressing the human resource requirements of organizations interested in conducting campus interviews for the placement of graduating students from IITM. </h2>
             
              <h1 class="text-justify tgfmlt2" style="color: #4b4b4b;">The objectives of the cell are:</h1>
              <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                  <div class="container" style="margin-left: 2em;">
                  <ul>
                      <li style="list-style-type: disc;">To organize pre-placement training for students.</li>
	                  <li style="list-style-type: disc;">To identify opportunities for students to engage in project work within industries.</li>
	                  <li style="list-style-type: disc;">To encourage department-level partnerships or Memoranda of Understanding (MoUs) with industries for mutual benefit.</li>
	                  <li style="list-style-type: disc;">To enhance the teaching-learning process through identified industrial training or visits.</li>
	                  <li style="list-style-type: disc;">To invite industry experts for guest lectures, seminars, and knowledge sharing sessions.</li>
	                  <li style="list-style-type: disc;">To assist the industry in the selection of suitable candidates to fill up job positions through campus interviews and provide career guidance to students.</li>
                  </ul></div>
              </h2>
              <div class="container text-center">
                  <img class="img-responsive img-fluid" src="images/iipc.jpg"/>
              </div>
           <!--   <div style="height: 5vh;"></div>
              <h1 class="section-heading" id="part">Placement Partners</h1>
              <hr class="hr-maroon"/>
              <div class="container">
                  <div class="row">
                      <div class="col-md">
                          <img src="../placementpartners/pp1.png" class="img-responsive partner" />
                      </div>
                      <div class="col-md">
                          <img src="../placementpartners/pp2.png" class="img-responsive partner" />
                      </div>
                      <div class="col-md">
                          <img src="../placementpartners/pp3.png" class="img-responsive partner" />                          
                      </div>
                      <div class="col-md">
                          <img src="../placementpartners/pp4.png" class="img-responsive partner" />                          
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md">
                          <img src="../placementpartners/pp5.png" class="img-responsive partner" />
                      </div>
                      <div class="col-md">
                          <img src="../placementpartners/pp6.png" class="img-responsive partner" />
                      </div>
                      <div class="col-md">
                          <img src="../placementpartners/pp7.png" class="img-responsive partner" />                          
                      </div>
                      <div class="col-md">
                          <img src="../placementpartners/pp9.png" class="img-responsive partner" />                         
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md">
                          
                      </div>
                      
                      <div class="col-md">
                      </div>
                      <div class="col-md">
                      </div>
                  </div>
              </div> -->
              
              
              
              <div style="height: 5vh;"></div>
              <h1 class="section-heading" id="part">Placement Partners</h1>
              <hr class="hr-maroon"/>
              <div class="container">
               <div id="carouselExampleSlidesOnly_pp" class="carousel slide" data-ride="carousel">
                   
                   <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#carouselExampleSlidesOnly_pp" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleSlidesOnly_pp" data-slide-to="1"></li>
        <li data-target="#carouselExampleSlidesOnly_pp" data-slide-to="2"></li>
    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                       <div class="row mt-30">
    <div class="col-md-3 mb-3">
        <img src="../placementpartners/pp1.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Second image and content goes here -->
                <img src="../placementpartners/pp2.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Third image and content goes here -->
                <img src="../placementpartners/pp3.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Fourth image and content goes here -->
                <img src="../placementpartners/pp4.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
</div>


                    </div>
                    <div class="carousel-item">
                          <div class="row mt-30">
    <div class="col-md-3 mb-3">
        <img src="../placementpartners/pp5.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Second image and content goes here -->
                <img src="../placementpartners/pp6.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Third image and content goes here -->
                <img src="../placementpartners/pp7.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
    <div class="col-md-3 mb-3">
        <!-- Fourth image and content goes here -->
                <img src="../placementpartners/pp8.png" class="img-responsive partner" style="margin-right: 1rem;">
   
    </div>
</div>
                       
                    </div>
                    
                    
                    
                    
                    
                    
                    
                </div>
                  <!-- Left and right controls -->
 <!-- Left and right controls -->

<a class="carousel-control-prev" href="#carouselExampleSlidesOnly_pp" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleSlidesOnly_pp" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
            </div>
              </div>
              
              
              
              
              <div style="height: 5vh;"></div>
              <h1 class="section-heading" id="rec">Recruiters Speak</h1>
              <hr class="hr-maroon"/>
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">Our association with IITM has been great and 
					throughout it has been a journey filled with tremendous outcomes for 
					all those involved. Students that we have recruited in the past have 
					demonstrated learning attitude, perseverance and hard work in their 
					corporate lives. I personally feel that college management is very 
					supportive &amp; encourages Campus placements thus providing valuable 
					opportunities to students in corporates like Wipro.</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">On behalf 
					of all the entire Talent Acquisition Team of Amazon, please accept 
					my appreciation for the excellent work done, especially by the 
					Placement Cell and the work your support staff has done over the past several
					months in ensuring that the right talent is applying for the 
					opportunities against our open position and in great numbers. 
					It was an enormous undertaking but went smoothly and efficiently!</h2>		
					<h2 class="tgfmlt text-justify" style="color: #4b4b4b;">Thanks to your 
					leadership and dedication combined with your staff's teamwork and energy, we are now excitingly waiting for the 
					right result just like every year against the 
					hard work. You and your employees should take great pride in this accomplishment. Looking forward for the students to join at the earliest.</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">Our association with IITM has 
					been great. Students that we have recruited in the past drives have very good communication 
					skills, positive learning attitude, and very much determined to work in corporate world. I feel that college management is
					very supportive & encourages Campus placements in future. As far as the infrastructure is 
					concerned it has good seating capacity in labs and auditorium for large pool of candidates.</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">"It is always a pleasure to connect with IITM students. 
					The kind of confidence and dedication I have seen in these students is commendable. These guys are actually ready for the corporate world. 
					There is so much of professionalism reflected always".</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I wanted to take a moment to express my utmost appreciation for the exceptional recruitment
					process hosted by IITM and the incredible quality of students at your esteemed campus. It has been an absolute pleasure to engage with such talented 
					individuals and witness the remarkable coordination. I would like to extend my gratitude to the entire IITM team for their efforts
					in organizing the recruitment drive and maintaining high standards of student quality."</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I want to extend my sincerest gratitude for the outstanding efforts IITM Placement Cell has put
					forth during the GT Hiring and the invaluable assistance provided in ensuring a seamless onboarding process for the selected students from IITM. 
					Your unwavering support has left a lasting impact, 
					instilling us with confidence and enthusiasm for our future endeavors. Please accept my heartfelt thanks."</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I strongly believe that InternWare - Internship Cell of IITM Janakpuri is great both for the students community and 
					Industry.Colleges should focus on taking such initiatives to strengthen Industry and Academia Bond".</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I would like to thank IITM for such a wonderful coordination throughout the campus hiring process. We had a great experience working with you. My entire team is pleased with the efforts of the team. We were hiring from multiple campuses but experience with your campus was superb. Kudos to the entire team and the quality of students is also amazing, they were well prepared and informed.
                      We would love to partner with you for next year's hiring as well. Great Job👍"</h2>		
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
					<h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;">"I would like to appreciate IITM Janakpuri & the Management Leadership team who encourage their 
					students to learn from the experience of senior corporate executives through numerous platforms".</h2>		
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
   <!--<div class="section-header">
          <h1 class="section-heading" id="policy">Placement Policy</h1>
          <div class="underline"></div>
          <div class="container">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link text-justify tgfmlt2" style="font-size: 20px;color: #4b4b4b;" data-toggle="tab" href="#tab-a">Placement Policy for MBA students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-justify tgfmlt2" style="font-size: 20px;color: #4b4b4b;" data-toggle="tab" href="#tab-b">Placement Policy for UG students</a>
      </li>
    </ul>

    <div class="tab-content" style="margin-top: 2rem;">
      <div id="tab-a" class="tab-pane fade show active">
        <h3 class="text-justify tgfmlt2" style="color: #4b4b4b;">MBA 2021-23 Batch</h3>
        <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                  <div class="container" style="margin-left: 2em;">
            <ul>
<li style="list-style-type: disc;">	Every student who wants to avail the Training & Placement services, has to register with Industry Institute Partnership Cell (IIPC), failing which they cannot have any claim on these services. Every student who registers with IIPC is bound by the terms and conditions in this Placement Policy. Registration implies submitting details in the prescribed format available with IIPC.</li>
<li></li>
<li style="list-style-type: disc;">	Eligibility criterion is specified by every company participating in campus recruitment. Every student, who fulfills this criterion, may attempt the recruitment process of any company until he/she gets the offer.</li>
<li></li>
<li style="list-style-type: disc;">	Companies are expected to give a Pre-Placement Talk (PPT) or a written communication laying out the details of the company and the offer before the process.</li>
<li></li>
<li style="list-style-type: disc;">	Once student have accepted an offer, he/she will not be allowed to change the mind later except in very unusual circumstances. Remember, a verbal acceptance is binding. The reputation of the Institute and therefore the welfare and prospects of other students depend on students’ behavior. Student may also want to approach the organization again in future, so a polite and courteous approach is necessary at all times.</li>
<li></li>
<li style="list-style-type: disc;">	Three (3) absenteeism from the placement drives (in which he/she is eligible) would disqualify the student from further placement support till the whole batch is placed. Any genuine reason needs to be explained to the Placement Cell in advance and written permission to be taken.</li>
<li></li>
<li style="list-style-type: disc;">	If a student is placed in one company, he/she can avail another opportunity to sit and appear for the Dream Company*</li>
<li> </li>
<li></li>
<li style="list-style-type: disc;">	He/she needs to fulfill two criteria’sbefore applying for his/her dream company:</li>
<li>-	The salary difference is atleast 1.0 LPA. It means that Dream Company must be offering minimum 1.0 Lakh more than his/her current offer.</li>
<li>-	The profile offered by the dream company must match the preferred Major specialization chosen by the candidate.</li>
<li>*The candidate has to disclose his/her Dream Company name as he/she comes to know about the company visiting the campus. If the candidate is selected in the chosen dream company or rejected in same, his/her case would be freezed and no further chance will be given.</li>
<li>*Incase of selection in Dream Company, the student will have to withdraw from the first offer received. In case of rejection in Dream Company, he/she can always go back to the first offer.</li>
<li></li>
<li style="list-style-type: disc;">	Students can be debarred if any of the below mentioned is true:</li>
<li>-	Students who have less than 70% attendance in pre-placement classes.</li>
<li>-	Students who fail to achieve 60% marks in each paper in the University exam.</li>
<li>-	Students not actively participating in all co-curricular & extra-curricular activities conducted by the Institute.</li>
<li>-	If there is a misbehavior / indiscipline on the part of the student during the hiring process with any college or company’s official.</li>
<li></li>
<li style="list-style-type: disc;">	Debarred students shall be given opportunity again only after all the students are placed subject to their improved performance and fulfilling other criteria’s as approved by the Placement Committee.</li>
</ul>
        </div></h2>
      </div>

      <div id="tab-b" class="tab-pane fade">
        <h3 class="text-justify tgfmlt2" style="color: #4b4b4b;">BBA, BCA & B.Com(H) students</h3>
        <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                  <div class="container" style="margin-left: 2em;">
            <ul>
<li style="list-style-type: disc;">-	Every student who wants to avail the Training & Placement services has to register with Industry Institute Partnership Cell (IIPC), failing which they cannot have any claim on Training & Placement Services. Every student who registers with IIPC is bound by the terms and conditions in this Placement Policy. Registration implies submitting details in the prescribed format available with IIPC.</li>
<li></li>
<li style="list-style-type: disc;">-	Eligibility criterion is specified by every company participating in campus recruitment. Every student, who fulfills this criterion, may attempt the recruitment process of any company until he/she gets the offer.</li>
<li></li>
<li style="list-style-type: disc;">-	Companies are expected to give a Pre-Placement Talk (PPT) or a written communication laying out the details of the company and the offer before the process.</li>
<li></li>
<li style="list-style-type: disc;">-	Once student have accepted an offer, he/she will not be allowed to change the mind later except in very unusual circumstances. Remember, a verbal acceptance is binding. The reputation of the Institute and therefore the welfare and prospects of other students depend on students’ behavior. Student may also want to approach the organization again in future, so a polite and courteous approach is necessary at all times.</li>
<li></li>
<li style="list-style-type: disc;">-	Two (2) absenteeism from the placement drives (in which he/she is eligible & registered) would disqualify the student (as soon as A2 is marked against his/her name) from further placement support till the whole batch is placed. Any genuine reason needs to be explained to the Placement Cell in advance and written permission to be taken.</li>
<li> </li>
<li style="list-style-type: disc;">- If a student is placed in one company, he/she has an option to choose another opportunity to sit and appear for the Dream Company*</li>
<li>*The candidate has to disclose his/her Dream Company name as he/she comes to know about the company visiting the campus to the concerned Placement Faculty Coordinator. It would be allowed on case to case basis. If he/she is unable to crack the offer or selected by the company (in any case), his/her case would be freezed. In case of selection in the dream company, he/she has to withdraw from the first offer received.</li>
<li></li>
<li style="list-style-type: disc;">-	Students can be debarred if any of the below mentioned is true:</li>
<li>= Students who have less than 70% attendance in Pre Placement Activities.</li>
<li>= Students who fail to achieve 60% marks in each paper in the University exam.</li>
<li>= Students not actively participating in all co-curricular & extra-curricular activities conducted by the Institute.</li>
<li>= If there is a misbehavior / indiscipline on the part of the student during the hiring process with any college or company’s official.</li>
<li></li>
<li style="list-style-type: disc;">- Debarred students shall be given opportunity again only after all the students are placed subject to their improved performance and fulfilling other criteria’s as approved by the Placement Committee.</li>
</ul>
        </div></h2>
      </div>
    </div>
  </div>-->



         
          
          
        
          
          
      
        </div>
      </section>
              <?php 
            //  include('../social_new.php');
              ?> 
            <?php
        //    include('../footer_new.php');
            ?>    
 
    <!--  <section class="team">
        <div class="section-header">
          <h1 class="section-heading">Our Team</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person-1.jpg" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>John Smith</h2>
              <h3>CEO</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>
              <button>Read More</button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person-2.jpg" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Ann Brown</h2>
              <h3>Designer</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>
              <button>Read More</button>
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="images/person-3.jpg" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Mary Doe</h2>
              <h3>Architect</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>
              <button>Read More</button>
            </div>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="contact-wrapper">
          <div class="contact-left"></div>
          <div class="contact-right">
            <h1 class="contact-heading">Contact</h1>
            <form>
              <div class="input-group">
                <input type="text" class="field" />
                <label class="input-label">Full Name</label>
              </div>
              <div class="input-group">
                <input type="email" class="field" />
                <label class="input-label">Email</label>
              </div>
              <div class="input-group">
                <textarea class="field"></textarea>
                <label class="message">Message</label>
              </div>
              <input type="submit" class="submit-btn" value="Submit" />
            </form>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="footer-content">
          <p class="copyright">
            Copyright &copy; 2020, CodeAndCreate - All Rights Reserved
          </p>
          <div class="social-list">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </footer> -->
      <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
      </a>
    

   <script src="script.js"></script> 
   <!--  <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>-->
    <script src="tilt.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
