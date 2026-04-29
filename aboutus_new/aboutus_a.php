<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IITM Janakpuri</title>
   <!-- Minified and Combined CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="logom.png" sizes="16x16">
  <!-- Google Fonts (Optimized) -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
    line-height: 0.09;
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

.mission{
   font-size: 1.5rem;
   background: #4b4b4b; 
   color: #fff; 
   margin-left: 2rem; 
   margin-top: 1rem;
   width: 2vw; 
   height: 4vh; 
   border-radius: 0.8rem;
   text-align:center;
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

.fac-member{
    height: 70vh;
}
.ct{
    line-height: 2rem;
    margin-top: 1rem;
}
.ct1{
     margin-bottom: 5rem;
}

.header1 {
  width: 100%;
  height: 45vh;
  position: relative;
  perspective: 100rem;
  overflow: hidden;
   background: url('images/wide_image.jpeg') no-repeat center center/cover;
}

.section-heading{
    text-align: center;
  background-color: navy;
  color: white;
  padding: 10px 0;
  margin-bottom: 15px;
  font-size: 2rem;
  border-radius: 5px; /* Optional for a rounded look */
}
</style>-->
  </head>
  <body>
        <header class="header1">
    <!--   <div class="img-wrapper">
          <img src="images/garden.jpg" />
        </div> -->

<div class="navigation">    
<?php include('../navbartop.php'); ?>
<?php include('navbarabout1.php'); 
?></div>
  <!--      <div class="banner">
          <h1 class="tgfmlt">Among Top Institutes in India</h1>
          <button class="tgfmlt" onclick="window.location.href='#about'">Read More</button>
        </div> -->
      </header>
      <section class="about-us">
        <div class="section-header">
        <div class="container"><h1 class="section-heading" id="about" style="width: 100%;">About Us</h1></div>
          
          <div class="underline"></div>
          <div class="container">
              <div class="row">
                
                  <div class="col-md-9"><h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                  <p class="text-justify" style="line-height:1.2;">
                 
                          <img src="images/garden.jpg" class="img-responsive" style="width: 50%;float:left;padding-right: 20px;padding-bottom:10px;padding-top:10px;"/>
                      
                      Established in 1999 under the auspices of Mata Leelawati Shikshan Sansthan (MLSS), a registered educational society dedicated to philanthropic endeavours. The Institute (IITM) has established a strong foundation for academic excellence. Guided by the visionary leadership of Shri T.N. Chaturvedi, a recipient of the prestigious  Padma Vibhushan, India's  second-highest civilian honour, IITM embarked on its journey with Shri. Chaturvedi serving as both the founding President of the society and the institute. Shri Chaturvedi’s illustrious career marked by his tenure as  the Governor of Karnataka, Parliamentarian, and Comptroller and Auditor General (CAG) of India, underscored his profound impact in the realms of education, politics, and administration.</h2>
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">Situated in tranquil and pollution-free surroundings, conveniently accessible via the  Delhi Metro Rail. The institute takes pride in fostering a conducive academic environment, endowed with a dedicated faculty and state-of-the-art infrastructure. IITM champions the implementation of ‘Outcome based education’, a methodology rooted in technological innovations and a student-centric pedagogy. The result-driven approach not only augments students’ learning capabilities but also enhances their performance across various domains. Central to its ethos, IITM remains steadfast to its commitments to nurturing youth, envisioning them not merely as proficient professionals but as empathetic leaders poised for excellence in their respective fields. IITM offers an extensive array of brief yet impactful skill enhancement and syllabus enrichment workshops spanning diverse areas of management specializations, and emerging technologies. Additionally, the IITM takes pride in its expansive alumni network, comprising over 7000 professionals who occupy key managerial positions within the nation’s primer corporate establishments. This robust network not only reflects the institute's commitment to fostering enduring relationships but also underscores its alumni’s significant contributions to the professional landscape.</h2>
                    </p>  
                  </div>
                  <div class="col-md-3">
                      <h1 class="text-justify tgfmlt2" style="color: #4b4b4b;">Quick Links</h1>
                      <hr class="hr-black"/>
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                          <a href="../index.php" class="admlinks">Home</a><br/>
                          <a href="#vision" class="admlinks">Vision & Mission</a><br/>
                          <a href="../faculty/faculty.php#fac" class="admlinks">Director</a><br/>
                         
                          <a href="../admissions/admissions.php#adm" class="admlinks">Admission Procedure</a><br/>
                          <a href="../infrastructure/infrastructure.php" class="admlinks">Infrastructure</a><br/>
                      </h2>
                  </div>
              </div>
              <h1 class="section-heading" id="vision-mission">Vision &amp; Mission</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      <h1 class="text-justify tgfmlt2" style="color: #4b4b4b;"><strong>Vision</strong></h1>
                      
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                     “The Institute aims to be a Centre of Excellence, promoting value-based quality education in the contemporary areas of advanced professional studies in Information Technology, Management and Media studies.”</h2>
                  </div>
              </div>
               <div class="row">
                  <div class="col-md">
                      <h1 class="text-justify tgfmlt2" style="color: #4b4b4b;"><strong>Mission</strong></h1>
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">IITM endeavours</h2>
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                          <ol>
                              <li>
                                  <div class="row">
                                      <div class="col-md-0 mission">1</div>
                                      <div class="col-md-10">
                                         to promote learning environment that delivers students with up to date curriculum & pedagogy equipping them with strong analytical mind, thinking ability, entrepreneurial and organizational skills required in a dynamic professional environment, 
                                      </div>
                                  </div>
                              </li>
                              <li>
                                   <div class="row">
                                      <div class="col-md-0 mission">2</div>
                                      <div class="col-md-10">
                                        to foster strategic alliance with industry for real time business exposure,
                                      </div>
                                  </div>
                              </li>
                              <li>
                                   <div class="row">
                                      <div class="col-md-0 mission">3</div>
                                      <div class="col-md-10">
                                         to inculcate human values like ethical, social and moral values amongst students.
                                      </div>
                                  </div>
                              </li>
                          </ol>
                      </h2>
                  </div>
              </div>
             <h1 class="text-justify tgfmlt2" style="color: #4b4b4b;"><strong>PHILOSOPHY</strong></h1> 
            <h3>Quality Education(Academic Excellence skill & Leadership)</h3>
	<h3>Training (inclusive of Up skill, reskill)</<h3>
	<h3>Consistency</<h3>
	<h3>Empathy & Understanding</<h3>
<h3>Innovation</<h3>

 <!-- Founder -->
              <h1 class="section-heading" id="founder">Founder</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                      The IITM is committed to promoting value-based, high-quality education with a motto of 'Nurturing Excellence.' In its relentless pursuit of excellence and commitment to maintaining the integrity of our mission, the Institute consistently enhances its pedagogy, infrastructural facilities, and student support systems. The institute ensures holistic student development by implementing continuous comprehensive evaluation and monitoring of students' progress and development. Understanding education's role as a 'Nation-Building Mission,' the institute embeds responsiveness, transparency, and accountability as fundamental principles in all endeavors to achieve objectives and acknowledges the pivotal role of education in shaping our nation/ country’s development.</h2>
                      
                  </div>
              </div>
              
 <!-- Governing Body -->
              <h1 class="section-heading" id="governing-body">Governing Body</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                      The IITM is committed to promoting value-based, high-quality education with a motto of 'Nurturing Excellence.' In its relentless pursuit of excellence and commitment to maintaining the integrity of our mission, the Institute consistently enhances its pedagogy, infrastructural facilities, and student support systems. The institute ensures holistic student development by implementing continuous comprehensive evaluation and monitoring of students' progress and development. Understanding education's role as a 'Nation-Building Mission,' the institute embeds responsiveness, transparency, and accountability as fundamental principles in all endeavors to achieve objectives and acknowledges the pivotal role of education in shaping our nation/ country’s development.</h2>
                      
                  </div>
              </div>              

 <!-- Chairman -->
              <h1 class="section-heading" id="chairman">Chairman</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                      The IITM is committed to promoting value-based, high-quality education with a motto of 'Nurturing Excellence.' In its relentless pursuit of excellence and commitment to maintaining the integrity of our mission, the Institute consistently enhances its pedagogy, infrastructural facilities, and student support systems. The institute ensures holistic student development by implementing continuous comprehensive evaluation and monitoring of students' progress and development. Understanding education's role as a 'Nation-Building Mission,' the institute embeds responsiveness, transparency, and accountability as fundamental principles in all endeavors to achieve objectives and acknowledges the pivotal role of education in shaping our nation/ country’s development.</h2>
                      
                  </div>
              </div>
               <!-- Quality Policy -->
              <h1 class="section-heading" id="quality-policy">Quality Policy</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">
                      The IITM is committed to promoting value-based, high-quality education with a motto of 'Nurturing Excellence.' In its relentless pursuit of excellence and commitment to maintaining the integrity of our mission, the Institute consistently enhances its pedagogy, infrastructural facilities, and student support systems. The institute ensures holistic student development by implementing continuous comprehensive evaluation and monitoring of students' progress and development. Understanding education's role as a 'Nation-Building Mission,' the institute embeds responsiveness, transparency, and accountability as fundamental principles in all endeavors to achieve objectives and acknowledges the pivotal role of education in shaping our nation/ country’s development.</h2>
                      
                  </div>
              </div>
              
              
          
        
          
          
      
        </div>
   
      </section>
        <?php
        
        
        include('../social_new.php');
        
          include('../footer_new.php');      
        
        ?>    
      <!-- Footer -->

        <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
      </a>
    

    <script src="script.js"></script>

    <script src="tilt.js"></script>
  </body>
</html>
