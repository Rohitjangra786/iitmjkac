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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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

  
  background: rgba(255, 255, 255, 0.05);
  

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
.item-text{
    line-height: 200px;
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

/*caraousal*/
.crcontainer {
  position:sticky;
  text-align:center;
  width: 320px;
  left: 200px;
  margin-left: 100vw;
/*  margin: 100px auto 0 auto; */
  perspective: 1000px;
}
.crs {
  position: fixed;
  width: 50%;
  height: 100%;
  transform-style: preserve-3d; 
  animation: rotate360 60s infinite forwards linear;
}
.carousel__face { 
  position: absolute;
  width: 300px;
  height: 187px;
  top: 20px;
  left: 10px;
  right: 10px;
  background-size: cover;
  box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
 /* display: flex;*/
}

span {
/*  margin: auto; */
  font-size: 2rem;
  color:#fff;
  text-align:center;
  margin-top: 2rem;
 
}


.carousel__face:nth-child(1) {
  background-image: url("images/infra/lecture-theater1.jpg");
  transform: rotateY(  0deg) translateZ(430px); }
.carousel__face:nth-child(2) { 
  background-image: url("images/infra/computer-lab.jpg");
    transform: rotateY( 40deg) translateZ(430px); }
.carousel__face:nth-child(3) {
  background-image: url("images/infra/syndicate-room.jpg");
  transform: rotateY(120deg) translateZ(430px); }
.carousel__face:nth-child(4) { 
  background-image: url("images/infra/library.jpg");
 transform: rotateY(160deg) translateZ(430px); }
.carousel__face:nth-child(5) { 
  background-image: url("images/infra/auditorium.jpg");
 transform: rotateY(200deg) translateZ(430px); }
.carousel__face:nth-child(6) { 
  background-image: url("images/infra/canteen-area.jpg");
 transform: rotateY(240deg) translateZ(430px); }
.carousel__face:nth-child(7) {
  background-image: url("images/infra/yoga-kaksh.jpg");
  transform: rotateY(280deg) translateZ(430px); }
.carousel__face:nth-child(8) {
  background-image: url("images/infra/common-room.jpg");
  transform: rotateY(320deg) translateZ(430px); }
.carousel__face:nth-child(9) {
  background-image: url("images/infra/infra_sports.jpg");
  transform: rotateY(320deg) translateZ(430px); }  
.carousel__face:nth-child(10) {
  background-image: url("images/infra/solarplant.jpg");
  transform: rotateY( 80deg) translateZ(430px); }



@keyframes rotate360 {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(-360deg);
  }
}
/*caraousal ends */


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
<?php include('navbartop_inf.php'); ?>
<?php include('navbarcourse.php'); 
?></div>

    <div style="height:20vh;"></div>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="infra">Infrastructure</h1>
          <div class="underline"></div>
          <div class="container">
              <div class="row">
                  
            <div class="col-md-9">      
              <h2 class="text-justify tgfmlt2" style="color: #4b4b4b;">The campus offers a serene and pleasant ambience, featuring centrally air-conditioned, spacious, and well-ventilated lecture theatres, seminar rooms, and syndicate rooms. Additionally, there is a centrally air-conditioned, well-equipped multi-lab computer centre, libraries gleaming with relevant contemporary resources, and a state-of-the-art auditorium. Below are the key facilities provided:</h2></div>
              <div class="col-md-3">
                  <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Quick Links</h1>
                      <hr class="hr-black"/>
                      <div class="row">
                          <div class="col-md">
                        <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                          <a href="../index.php" class="admlinks">Home</a><br/>
                         <!-- <a href="../aboutus/aboutus.php#vision" class="admlinks" style="text-align:left;">Vision & Mission</a><br/> -->
                          <a href="../faculty/faculty.php#fac" class="admlinks">Director</a><br/>
                          
                      </h2>
                          </div>
                          <div class="col-md">
                               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                         
                          
                          <a href="../admissions/admissions.php#adm" class="admlinks">Admission Procedure</a><br/>
                          
                      </h2>
                          </div>
                      </div>
                     
              </div>
          </div>
          </div>
         <div class="container style="margin-bottom: 100vh;
               <div class="container crcontainer">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-6">
                        <div class="carousel crs">
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">ICT-Enabled A/C Lecture Theatres</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Computer Centre</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Seminar and Syndicate Room
</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Library</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Auditorium</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Canteen Area</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Dhyan Kaksha/Meditation Room
</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Common Rooms for Girls and Boys</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Sports</span></div></div>
    <div class="carousel__face"><div class="container" style="text-align:center;margin-top:2rem;"><span class="tgfmlt">Solar Power Plant</span></div></div>

  </div>
                     </div>
                  </div>
               </div>
         
          
        
          
      
        </div>
   
      </section>
   
      <div style="height: 30vh"></div>
      
       <div class="lowerb" style="background:#fff;margin-top: 2rem;">
             
   
      
            <div class="row" style="background: #fff;">
   <div class="col-md card-group">
  <div class="card sliders3-ed border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
        
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>ICT-Enabled A/C Lecture Theatres</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/class.JPG" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
          
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">In order to ensure an environment conducive to pragmatic learning, the lecture theatres are equipped with an AV system, a PA system, and internet connectivity.</h2>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Computer Centre</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/IMG20240503103256.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute boasts a state-of-the-art centrally air-conditioned multi-lab Computer Centre, equipped with the following:</h2>
         <div style="overflow:auto;">
 <h3 class="tgfmlt text-justify" style="color: #4b4b4b;"><ul style="color: #4b4b4b;">
    	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/> Provision of high-end multimedia workstations in a one-to-one ratio.</li>
	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/>Continuous availability of a 50 MBPS dedicated leased line for Internet connectivity from Airtel, supported by optic fibre, to cater to the requirements of faculty and students on campus throughout the day and night.</li>
	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/>Utilization of a high-end IBM server running on either Linux or Windows operating system.</li>
	<!--<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/> LAN connectivity.</li>
	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/> Licensed Academic Softwares in alliance with Microsoft.</li>
	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/> Dedicated Research Labs.</li>
	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/> Peripheral support including scanners and laser printers.</li>
	<li style="line-height: 2.5rem;"><img src='images/bullet2.png'/> 100% power back-up with standby generator.</li>-->
</ul></h3></div>

      </div>
   
    
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Seminar and Syndicate Room</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img src="images/infra/syndicate-room.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute is equipped with centrally air-conditioned seminar and syndicate rooms that are furnished with LCD projectors, Smart Boards, and multimedia systems. These facilities are utilized extensively for various activities such as student seminars, group presentations, project discussions, and guest lectures. The conducive environment provided by these rooms enhances the learning experience and facilitates effective communication and collaboration among students and faculty members.</h2>
      </div>
     
      </div>
     </div>
  </div>
</div>
</div>
<div style="height: 10vh;"></div>
            <div class="row" style="background: #fff;">
   <div class="col-md card-group">
  <div class="card sliders3-ed border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Library</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/fine.JPG" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute maintains a meticulously organized collection of contemporary text and reference books, e-books, and DVDs relevant to diverse topics covered in our educational programs. Additionally, the libraries house over 29,000 volumes covering contemporary issues, industry studies, annual reports of various companies, project reports, and biographies. The library management system is fully computerized, ensuring efficient organization and accessibility of resources.</h2>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Auditorium</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/438230318_899569008847699_5747320491786116456_n.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The state-of-the-art centrally air-conditioned auditorium, with a seating capacity of 240 persons, is equipped with an LCD projector, a large LCD screen, and a modern Public Announcement System. It serves as a venue for conducting various co-curricular and extra-curricular activities, including conferences, seminars, workshops, and faculty development programs.</h2>



      </div>
   
    
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Canteen Area</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img src="images/infra/canteen-area.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute features a well-managed canteen and a Nescafe outlet, complemented by dedicated spacious seating areas for students, staff, and guests. The canteen area serves as a hub where students can find a variety of healthy eating options and engage in hearty conversations, providing them with a space to unwind.</h2>
      </div>
     
      </div>
     </div>
  </div>
</div>
</div>
      <div style="height: 10vh;"></div>
            <div class="row" style="background: #fff;">
   <div class="col-md card-group">
  <div class="card sliders3-ed border-0 border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Dhyan Kaksha/Meditation Room</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/yoga-kaksh.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The institute organizes regular Yoga and Stress Management workshops in the Dhyan Kaksha. These sessions are conducted with the mission of instilling the art of self-management among students and faculty members.</h2>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Common Rooms for Girls and Boys</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/common-room.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">Separate common rooms have been provided for boys and girls, facilitating interaction, relaxation, and the expansion of knowledge through peer learning.</h2>



      </div>
   
    
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Sports</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img src="images/infra/infra_sports.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The institute boasts a well-equipped sports center, offering students opportunities to pursue their interests in various sports activities. With the aim of encouraging participation in both indoor and outdoor sports, these facilities aid in the development of students' physical abilities, willpower, and self-discipline.</h2>
      </div>
     
      </div>
     </div>
  </div>
</div>
</div>
<div style="height: 10vh;"></div>

             <div class="row" style="background: #fff;">
 
 <div class="col-md card-group">
  <div class="card sliders3-ed border-0 border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Solar Power Plant</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/solarplant.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 400px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">Electricity generated on non-teaching days and holidays is 
         transmitted to the grid. The Solar Power Plant at IITM was installed and commissioned on March 6, 2014, boasting an installed capacity 
         of 20 KW. The plant yields approximately 80 units of electricity per day. Net-metering was integrated into the system on August 18, 2015.</h2>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Audio/ Video Studio</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/WhatsApp Image 2024-05-20 at 11.56.29.jpeg" class="img-responsive" style="min-width:100%;width: 100%;height: 400px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The college features advanced audio and video studios, fostering an immersive learning environment. 
         These facilities provide students a platform to explore creativity, refine skills, and engage in hands-on learning. With cutting-edge technology and professional-grade equipment, 
         students create multimedia presentations and record lectures. 
         This empowers them to bring ideas to life effectively, enhancing their academic journey. Guided by experienced faculty and supported by dedicated staff, these 
         studios are invaluable resources for academic and creative pursuits.</h2>



      </div>
   
    
    </div>
  </div>
 
 
 
  <!--<div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b></b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img  class="img-responsive" style="min-width:100%;width: 100%;height: 200px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <h2 class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;"></h2>
      </div>
     
      </div>
     </div>
  </div> -->
 
</div>
</div>
 <div style="height:10vh;"></div>
        </div>
      
              <?php 
              //include('../social_new.php'); 
              ?>  
            <?php 
           // include('../footer_new.php');
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
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="tilt.js"></script>
  </body>
</html>
