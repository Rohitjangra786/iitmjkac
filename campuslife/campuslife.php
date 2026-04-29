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
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
     <link href="//db.onlinewebfonts.com/c/3d801c16769ba2dd6344be073c5bb938?family=TradeGothicLTW01-Light" rel="stylesheet" type="text/css"/>
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
        <style>
        @import url(//db.onlinewebfonts.com/c/3d801c16769ba2dd6344be073c5bb938?family=TradeGothicLTW01-Light);
        @font-face {font-family: "TradeGothicLTW01-Light"; 
        src: url("//db.onlinewebfonts.com/t/3d801c16769ba2dd6344be073c5bb938.eot"); 
        src: url("//db.onlinewebfonts.com/t/3d801c16769ba2dd6344be073c5bb938.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/3d801c16769ba2dd6344be073c5bb938.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/3d801c16769ba2dd6344be073c5bb938.woff") format("woff"), url("//db.onlinewebfonts.com/t/3d801c16769ba2dd6344be073c5bb938.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/3d801c16769ba2dd6344be073c5bb938.svg#TradeGothicLTW01-Light") format("svg"); }

        @font-face {
        font-family: 'tg18';
        src: url('fonts/TradeGothicLTStd-Cn18.otf');  
        format('opentype');
     }
    .tgfmlt{
      font-family: 'TradeGothicLTW01-Light';
      font-size: calc(31.25px+.3vw);
      line-height: 1.75;
      color: #fff;
}
 .tgfmlt2{
      font-family: 'TradeGothicLTW01-Light';
      font-size: calc(31.25px+.3vw);
      line-height: 1.5;
      color: #fff;
}
.tgfmlt1{
    font-family: 'TradeGothicLTW01-Light';
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
/* carousal control */
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23800000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23800000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
/* carousal control ends */
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
.accred
{
	box-shadow: 0px 0px 5px;
	padding:20px;
	border-radius: 5px;	
	margin-bottom: 20px;
	width: 100%;
}

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


</style>
  </head>
  <body>
 <!--   <div class="spinner-container">
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
      <header class="header">
        <div class="img-wrapper">
          <img src="images/WhatsApp Image 2024-05-22 at 21.57.39 (1).jpeg" />
        </div>

<div class="navigation">    
<?php include('../navbartop.php'); ?>
<?php include('navbarcampuslife.php'); 
?></div>
        <div class="banner">
          <h1 class="tgfmlt">Campus Life</h1>
          <button class="tgfmlt" onclick="window.location.href='#cmpl'">Explore now</button>
        </div>
      </header>

      <section class="sidebar">
        <ul class="menu">
          <li class="menu-item">
            <a href="#" class="menu-link" data-content="Home">Home</a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link" data-content="About Us">About Us</a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link" data-content="Team">Team</a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link" data-content="Pricing">Pricing</a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link" data-content="Contact">Contact</a>
          </li>
        </ul>
        <div class="social-media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </section>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="cmpl">Campus Life</h1>
          <div class="underline"></div>
          <div class="container">
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Students' Testimonials</h1>
              <hr class="hr-maroon"/>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                   
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/studentsspeak/Sarthak Kumar BCA (2021-24).jpeg" alt="Ashi Jain" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Sarthak Kumar</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2021-2024)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">My journey at IITM began in August 2021 with the excitement of starting college life. The faculty, initially perceived as strict, quickly became supportive mentors, fostering a friendly learning environment that enhanced our communication skills and confidence crucial for placements. IITM's exceptional placement cell ensured comprehensive assistance, leading me to secure a position as a Machine Learning Data Associate at AMAZON Development Centre India, aligning perfectly with my career goals. Beyond academic excellence, IITM emphasizes holistic development through diverse extracurricular activities, internships like InterWare, and participation in events and competitions that simulate real market conditions. These experiences not only sharpen problem-solving and market understanding but also foster innovation, leadership, communication, and teamwork skills. Supported by a nurturing ecosystem of faculty and mentors, 
                                IITM has equipped me with both academic knowledge and personal growth, preparing me thoroughly for 
                                professional success beyond classrooms and textbooks.</h3>
                            </div>
                        </div> 
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
            
             <h1 class="text-justify tgfmlt" style="color: #4b4b4b;" id="extcr">Extra-curricular Committees</h1>
              <hr class="hr-maroon"/>
              
            
            
            <div class="col-md card-group">
  <div class="card sliders3-ed border-0"  style="background-color: #fff;margin:0;padding:0;">
   
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: #4b4b4b;"></h1>
        <div class="card-text">
          <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">Students are provided with abundant opportunities to refine their skills in various forms of performing arts. Numerous cultural activities and events are organized by students themselves under the close supervision of faculty members.
            </h2>
            <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
           Moreover, at IITM, students have showcased their talent and earned recognition in numerous categories at the GGSIPU's annual festival, 'Anugoonj'. Under the guidance of the faculty members, students have the opportunity to participate in various committees and actively engage in a wide range of activities organized both within and outside the institute.</h2>
       
      </div>
     
    </div>
  </div>
  
  <div class="card sliders3-ed border-0" style="background: #fff;">
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: #4b4b4b;">
</h1>
      <div class="card-text">
          <div class="container">
          <div class="row mt-30">
				<div class="col-md text-center">
					<a href="sports-committee.php">
						<img src="images/extra/sports_day_logo.png" class="img-responsive accred" style="height: 120px;"/>Sports Committee</a>
				</div>
				<div class="col-md text-center">
					<a href="ecs.php">
						<img src="images/extra/ecs.gif" class="img-responsive accred" style="height: 120px;" />NSS & Community Service Committee</a>
				</div>
				<div class="col-md text-center">
					<a href="cultural-committee.php">
						<img src="images/extra/cultural.jpg" class="img-responsive accred" style="height: 120px;"/>Cultural Committee</a>
				</div>
				
			</div>
			<div class="row mt-30">
		    	<div class="col-md text-center">
					<a href="event-management-committee.php">
						<img src="images/extra/event_mgmt.jpg" class="img-responsive accred" style="height: 120px;"/>Event Management Committee</a>
				</div>
				<div class="col-md text-center">
					<a href="canteen-committee.php">
						<img src="images/extra/canteen.jpg" class="img-responsive accred" style="height: 120px;" />Canteen Committee</a>
				</div>
				<div class="col-md text-center">
					<a href="anti-ragging-cell.php">
						<img src="images/extra/anti.jpg" class="img-responsive accred" style="height: 120px;" />Anti-Ragging Committee</a>
				</div>
			</div>
       </div>
      
     
     
      </div>
     </div>
  </div>
</div>
            
            
            
            
            
             <h1 class="text-justify tgfmlt" style="color: #4b4b4b; id="cocr">Co-curricular Committees</h1>
              <hr class="hr-maroon"/>
            
                 <div class="col-md card-group">
  <div class="card sliders3-ed border-0"  style="background-color: #fff;margin:0;padding:0;">
   
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: #4b4b4b;"></h1>
        <div class="card-text">
          <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">In pursuit of fostering the all-round development of our students, the curriculum at IITM integrates co-curricular activities. These activities play a crucial role in nurturing values such as positive thinking, creativity, and intellectual growth, thus preparing students to excel in the professional world. Furthermore, co-curricular activities serve as catalysts for the intellectual, emotional, social, and moral development of students. These activities, which include group discussions on contemporary issues, elocution contests, business quizzes, and inter-Institute competitions, are integral components of student life at our institute.
            </h2>
           
          
       
      </div>
     
    </div>
  </div>
  
  <div class="card sliders3-ed border-0" style="background: #fff;">
    <div class="card-body">
      <h1 class="card-title tgfmlt" style="font-size: 1.3rem;text-align:center;color: #4b4b4b;">
</h1>
      <div class="card-text">
          <div class="container">
          <div class="row mt-30">
				<div class="col-md text-center">
					<a href="itcell.php">
						<img src="images/extra/itcell.jfif" class="img-responsive accred" style="height: 120px;"/>IT Cell</a>
				</div>
				<div class="col-md text-center">
					<a href="sdc.php">
						<img src="images/extra/sdc.png" class="img-responsive accred" style="height: 120px;" />Software Development Cell</a>
				</div>
				<div class="col-md text-center">
					<a href="aiec.php">
						<img src="images/extra/ai.png" class="img-responsive accred" style="height: 120px;"/>Artificial Intelligence Experience Centre</a>
				</div>
			
			</div>
			<div class="row mt-30">
		    	<div class="col-md text-center">
					<a href="edc.php">
						<img src="images/extra/ed.jfif" class="img-responsive accred" style="height: 120px;"/>Entrepreneurship Development Cell</a>
				</div>
				<div class="col-md text-center">
					<a href="dlec.php">
						<img src="https://iitmjanakpuri.com/upload_new/deb.jpeg" class="img-responsive accred" style="height: 120px;" />Debate and Literary Events Committee</a>
				</div>
				<div class="col-md text-center">
					<a href="rc.php">
						<img src="images/extra/research.jfif" class="img-responsive accred" style="height: 120px;" />Research Committeee</a>
				</div>
			</div>
			<div class="row mt-30">
		    	<div class="col-md text-center">
					<a href="libc.php">
						<img src="images/extra/library.jfif" class="img-responsive accred" style="height: 120px;" />Library Committeee</a>
				</div>
				<div class="col-md text-center"></div>
				<div class="col-md text-center"></div>
			</div>
       </div>
      
     
     
      </div>
     </div>
  </div>
</div>
            
            
    <div style="height: 10vh;"></div>        
            
            
            
             <h1 class="text-justify tgfmlt" style="color: #4b4b4b;" id="fitness">Executive Fitness Programme</h1>
              <hr class="hr-maroon"/>
              <div class="row">
                <div class="col-md-3">
                   <img src="images/extra/fitness.png" class="img-responsive" style="height: 120px;" />
                </div>
                <div class="col-md-9">
                 <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">The Institute organizes yoga and stress management workshops in our Dhyan Kaksha. These workshops are conducted with the mission of instilling the art of self-management among the students.
                 </h2>
                </div>
              </div>
             
            <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">Stress Management</h2>
            <h3 class="text-justify tgfmlt2" style="color: #4b4b4b;">
          Stress management constitutes a fundamental component of our Executive Fitness Programme. Regular sessions are conducted for both students and faculty members, encompassing:</h3>
           <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">Yoga</h2>
          <h3 class="text-justify tgfmlt2" style="color: #4b4b4b;">
            Yogasanas possess an exceptional ability to revitalize, rejuvenate, and restore the body to a state of equilibrium. They contribute to toning the nervous system, alleviating tensions, enhancing circulation, and promoting flexibility.</h3>
            <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">Pranayam</h2>
             <h3 class="text-justify tgfmlt2" style="color: #4b4b4b;">
           A consistent rhythmic pattern of slow, deep breathing has a calming effect on the nervous system, enhances the strength of the respiratory system, and helps to regulate the mind.</h3>
           <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">Meditation</h2>
            <h3 class="text-justify tgfmlt2" style="color: #4b4b4b;">
          Meditation facilitates the revelation of latent capabilities within the mind and body. Consistent engagement in this practice induces mental relaxation and fosters heightened concentration.</h3>
          </div>
          
           
          </div>
        
          
          
      
        </div>
   
      </section>
        <?php include('../social_new.php'); ?>  
            <?php include('../footer_new.php'); ?>    
   
            
          <div class="lowerb" style="height: 10vh;"></div>  
                 
       <!-- fee payments, Notices -->
      <!--  <div class="fee" onmouseover="openForm1()" style="color:white;">Fee Payment</div>
      <div class="chat-popup" id="myForm1">
  <form  class="form-container">
    <div class="row">
			            	<div class="col-sm-6 text-center">
			            		<p>Fee Payments for UG Courses</p>
			            		<a href="#" target="_blank" class="btn btn-primary">UG Payments</a>
			            	</div>
			            	<div class="col-sm-6 text-center">
			            		<p>Fee Payments for PG Courses</p>
			            		<a href="#" target="_blank" class="btn btn-danger">PG Payments</a>
			            	</div>
			            </div>
    <button type="button" class="btn cancel" onmouseenter="closeForm1()">Close</button>
  </form>
</div>
       
       
       
       
      <div class="open-button" onmouseover="openForm()" style="color:white;"><i class="fa fa-bullhorn" aria-hidden="true"></i>
</div>
       <button class="open-button" onmouseenter="openForm()" style="color:white;">Notices</button> 

<div class="chat-popup" id="myForm">
  <form  class="form-container">
    <span class="badge" style="background: #800000;color:#fff;">1</span> <a href="#">Webinar on Gender Issues [Uploaded on : 2021-10-28]</a><br/>
    <span class="badge" style="background: #800000;color:#fff;">2</span> <a href="#">Distribution of German Masks to Students [Uploaded on : 2021-10-27]</a><br/>
    <span class="badge" style="background: #800000;color:#fff;">3</span> <a href="#">Knowledge Series 2.0: Part II [Uploaded on : 2021-10-26]</a><br/>
    <span class="badge" style="background: #800000;color:#fff;">4</span> <a href="#">Webinar on Image Processing with Machine Learning [Uploaded on : 2021-10-26]</a><br/>
    <span class="badge" style="background: #800000;color:#fff;">5</span> <a href="#">Series on Corporate Mentorship Program for BBA students [Uploaded on : 2021-10-25]</a><br/>
    <div class="text-right">
		<a href="#" class="btn btn-danger">View All Notices</a>
	</div>
    <button type="button" class="btn cancel" onmouseenter="closeForm()">Close</button>
  </form>
</div> -->
       <!-- XXX ends -->

</div> 
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
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="tilt.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
