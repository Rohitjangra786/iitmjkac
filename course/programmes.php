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


</style>
  </head>
  <body>


<div class="navigation"> 
<?php 
//include('../navbartop.php');
?>
<?php 
//include('navbarcourse.php');
?>
</div>

 
      <div style="height: 20vh;"></div>
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="prog">Programmes</h1>
          <div class="underline"></div>
          <div class="container">
              <div class="row">
              <div class="col-md-9">
              <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">The Institute of Information Technology and Management (IITM) holds an "A" accreditation from the National Assessment and Accreditation Council (NAAC) and is affiliated with Guru Gobind Singh Indraprastha University (GGSIPU) in New Delhi. Within its academic offerings, the institute provides AICTE-approved programs,  including Master of Computer Application (MCA) and Master of Business Administration (MBA). Additionally, GGSIPU conducts Bachelor of Business Administration-BBA(H), Bachelor of Computer Application-BCA(H), Bachelor of Commerce - B.Com(Hons.), and Bachelor of Journalism and Mass Communication-BAJMC(H) education programs. Demonstrating steadfast commitment to academic excellence, the institute has maintained this dedication to higher education for over 25 years.</h2>
          </div>
          
          <div class="col-md-3">
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Programme Quick Links</h1>
                      <hr class="hr-black"/>
                      <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                          <a href="mba.php" class="admlinks">MBA Programme</a><br/>
                          <a href="mca.php" class="admlinks">MCA Programme</a><br/>
                          <a href="bba.php" class="admlinks">BBA Programme</a><br/>
                          <a href="bca.php" class="admlinks">BCA Programme</a><br/>
                          <a href="bcom.php" class="admlinks">B.Com.(H) Programme</a><br/>
                          <a href="bjmc.php" class="admlinks">BA(JMC) Programme</a><br/>
                          <a href="https://iitmjanakpuri.com/academics/academics.php#syl">Syllabus</a><br/>
                          <a href="../admissions/admissions.php#adm" class="admlinks">Admission Procedure</a><br/>
                          <a href="../scholarships/scholarships.php#sch" class="admlinks">In-House Merit Scholarships</a><br/>
                      </h2>
          </div> 
          </div>
          </div>
          
          
        
          
          
      
        </div>
   
      </section>
      <div class="container">
         <div class="lowerb" style="background: #fff;padding:0;">
               <div class="row course-row shadow-none" style="background: #fff;">
                  <div class="col-md card-group border-0 shadow-none">
                     <div class="card sliders3-ed mr-10 ml-0 border-0 shadow-none" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <img src='images/MBA.png' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;"/>
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                 <p class="tab-heading tgfmlt" style="color: #4b4b4b;" id="mba">MBA</p>
                                 <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">The two-year MBA program is affiliated with Guru Gobind Singh Indraprastha University and approved by AICTE. The program, meticulously crafted, aims to impart participants with relevant knowledge, essential attributes, and necessary skills crucial for thriving in the corporate world. </h3>
                                 <button class="tgfmlt read-button" onclick="location.href = 'mba.php';">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
                <div class="row course-row shadow-none" style="background: #fff;">
                  <div class="col-md card-group border-0 shadow-none">
                     <div class="card sliders3-ed mr-10 ml-0 border-0 shadow-none" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <img src='images/MCA.jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;"/>
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                 <p class="tab-heading tgfmlt" style="color: #4b4b4b;" id="mca">MCA</p>
                                 <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">
                                     The two-year MCA program is accredited by Guru Gobind Singh Indraprastha University. Its primary objective is to equip students with the necessary skills and knowledge to succeed in a dynamic and competitive professional landscape. 
                                     </h3>
                                     <button class="tgfmlt read-button" onclick="location.href = 'mca.php'">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
               <div class="row course-row" style="background: #fff;">
                  <div class="col-md card-group" >
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                 <img src='images/BCA.png' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <p class="tab-heading tgfmlt" style="color: #4b4b4b;" id="bca">BCA</p>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">The BCA program, spanning three years in duration, holds affiliation with Guru Gobind Singh Indraprastha University. Its primary objective revolves around the cultivation of students via innovative pedagogical methodologies, geared towards equipping them for the competitive landscape of the professional sphere. </h3>
                                <button class="tgfmlt read-button" onclick="location.href = 'bca.php';">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
               <div class="row course-row" style="background: #fff;">
                  <div class="col-md card-group">
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                              <img src='images/BBA.png' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
                              
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                 <p class="tab-heading tgfmlt" style="color: #4b4b4b;" id="bba">BBA</p>
                               <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">The three-year Bachelor of Business Administration - BBA program is affiliated with Guru Gobind Singh Indraprastha University. Its design is meticulously crafted to furnish students with robust conceptual knowledge and critical thinking skills necessary for the effective management of integrated business operations. </h3>
                               <button class="tgfmlt read-button" onclick="location.href = 'bba.php';">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
               <div class="row course-row" style="background: #fff;">
                  <div class="col-md card-group">
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <img src='images/BCOM.png' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <p class="tab-heading tgfmlt" style="color: #4b4b4b;" id="bcom">B.Com.(H)</p>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">The three-year Bachelor of Commerce (Honours) program is affiliated with Guru Gobind Singh Indraprastha University and is divided into six semesters. The primary objective of the program is to impart students with the requisite knowledge, understanding, and skills that establish the fundamental framework for all disciplines within the field of Commerce.</h3>
                                <button class="tgfmlt read-button" onclick="location.href = 'bcom.php';">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
              
                 <div class="row course-row" style="background: #fff;">
                  <div class="col-md card-group">
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <img src='images/BA(JMC).jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <p class="tab-heading tgfmlt" style="color: #4b4b4b;" id="bjmc">BA(JMC)</p>
                                <h3 class="tgfmlt2 text-justify" style="color: #4b4b4b;">The three-year Bachelor of Arts in Journalism and Mass Communication BA(JMC) program is affiliated with Guru Gobind Singh Indraprastha University and is divided into six semesters. The primary objective of the program is to equip students with the knowledge, understanding, and skills necessary to establish a strong foundation across various disciplines within the field of Journalism.</h3>
                                        <button class="tgfmlt read-button" onclick="location.href = 'bjmc.php';">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
      </div>
      </div>
      
              <?php 
             // include('../social_new.php');
              ?>    
            <?php 
           // include('../footer_new.php'); 
            ?>    
  
            
          <div class="lowerb" style="height: 10vh;"></div>  
                 
</div> 

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
