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

.fac-member {
  
  background-color: #fffeee;
  padding: 1rem 1rem 2rem 1rem;
  box-shadow: 1rem 1rem 2rem #ddd, -1rem -1rem 2rem #eee;
  position: relative;
  filter: brightness(120%);
  opacity: 0.9;
  transition: opacity 0.5s;
 
  margin-right:2rem;
  padding:0;
  width: 18rem;
}

.fac-member:hover {
  opacity: 1;
  box-shadow: 0 0 100px #ffff99; 
  font-weight: bolder;
}
.c:hover{
    background: rgba(128, 0, 0, 0.1);
    transition: opacity 0.5s;
}

.card-img-overlay {
  background-color: rgba(#000, 0.4);
}
.hv{
    border: 2rem transparent solid;
}
.hv:hover{
    transform:scale(0.95);
    
}
hv:hover .ab{
    transform:scale(0.95);
    
}
.bg1{
    background: rgb(106, 106, 106, 0.05);
    padding-left: 1rem;
}

.img-fac
{
    min-width: 100%;
    width: 100%;
    object-fit:cover;
    height: 55vh;
    object-position:top;
    bottom:0;
    position:absolute;
    margin-right: 1rem;
    padding-right: 1rem;
    padding-left: 0;
    margin-left: 0;
}
.ab{
    text-align: center;
}

 .g1{
 height: 20rem;
 width: 20rem;
 }
 .g2{
  object-fit: contain;
 }
 .g3{
  color: #fff; line-height: 1.2rem;font-size: 120%;
 }
</style>
  </head>
  <body>
    <!--<div class="spinner-container">
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
    </div>-->

   <!--   <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div> -->
      <header class="header">
        <div class="img-wrapper">
          <img src="images/group.jpg" />
        </div>

<div class="navigation"> 
<?php include('../navbartop.php'); ?>
<?php include('navbarfac.php'); 
?></div>
        <div class="banner">
          <h1 class="tgfmlt">Faculty at IITM</h1>
          <button class="tgfmlt" onclick="window.location.href='#fac'">Read More</button>
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

    
   </div>

    <section class="team">
        <div class="section-header">
          <h1 class="section-heading">Dept. of Computer Science</h1>
           <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card border-0" style="height: 25rem; width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/ganesh1.png" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. G.K. Wadhwani</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Deputy Director</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc., M.C.A., M.Phil, NET, Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">acadcod@iitmipu.ac.in</h3>
                        </div>
              <!-- <button>Read More</button> -->
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/sudhir1.jpg" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;" />
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Prof. (Dr.) Sudhir Kumar</strong><br> <strong>Sharma</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Head of the Department & Dean Research</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">M.Sc. M.Tech., Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">hod.csdept@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/pankaj1.png" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Pankaj Kumar Varshney</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc., MCA, Ph.D., NET</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> pankaj.varshney@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
          <!--<div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/ruby1.png" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Ruby Dahiya</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> B.Tech, M.Tech, Diploma in Electronics, GATE, Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> rubydahiya@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>-->
        </div>
        
        
         <!--<div class="cards-wrapper">
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/sandhya1.png" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Sandhya Maitra</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.A.(Maths Hons.), M.A.(Maths), M.Phil (Maths), MCA, NET, Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">dr.sandhyamaitra@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/tripti1.png" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Tripti Lamba</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.A.(Maths), MCM, M.Tech, Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">tripti_lamba@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
          
        </div>-->
        
         <div class="cards-wrapper">
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;" >
              <img src="images/faculty/megha1.png" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Megha Sharma</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc., M.Sc. Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">megha_sharma@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;" >
              <img src="images/commerce/DrRamandeep.jpg" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Ramandeep Kaur</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc.(H), MCA, PGDBA (HR & Marketing), Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">ramandeep.kaur@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>

        </div>
        
        
        <div class="cards-wrapper">
          <!--<div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/romika1.png" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Romika Yadav</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">BCA, MCA, M.Tech(CS), NET, Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">romikayadav@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>-->
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/rohit1.png" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Rohit Kumar Yadav</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc.,M.Sc., Ph.D., NET, GATE</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">rohit_yadav@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/kavita3.png" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Kavita Srivastava</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> Associate Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc.(H), MCA, M.Tech.(IT), PGDCA, NET</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">kavitasrivastava@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/suman1.jpg" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Suman</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc., MCA, M.Tech, NET, Pursuing Ph.D. </h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">suman_singh@iitmipu.ac.in</h3>
                        </div>
              
            </div>
        </div>
        
          <!--<div class="cards-wrapper">
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/gaurav1.jpg" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-60" style="object-cover: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Dr. Gaurav Kumar</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc., M.Sc., MCA, NET</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">gauravkumar@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>-->
          
          </div>
          <!--<div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;" >
              <img src="images/faculty/munna1.png" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Mr. Munna Pandey</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">BCA, MCA, Pursuing Ph.D.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">pandey.id@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
        </div>-->
        
          <div class="cards-wrapper">
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/leena1.png" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Leena Gupta</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Sc., MCA, M.Tech, GATE-2013</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">email2leena@gmail.com</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/nidhi1.png" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Nidhi Srivastava</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">BCA, MCA, M.Tech</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">nidhisrivastava@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/chitra1.png" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Chitra</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.E., M.Tech.</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">chitranasa@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
        </div>
        
         <div class="cards-wrapper">
          <!--<div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/sheetal1.png" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Sheetal Kaushik</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> B.Tech. M.Tech. Pursuing Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">sheetal.kaushik@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>-->
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/ankita1.png" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Ankita Gupta</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> B.Tech., GATE, M.Tech</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">ankita@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/anjali1.png" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Anjaly Chauhan</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">B.Tech (CSE), M.Tech (CSE), NET, Pursuing Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">anjalichauhan@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/madhumita.jpeg" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms.Madhumita Debnath</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> B.Tech. M.Tech. </h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">madhumita.debnath@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
        </div>
        
        
        <div class="cards-wrapper">
          
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/ruchika.jpg" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Ruchika</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> B.Tech., M.Tech., NET, Pursuing Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">ruchika.sangwan@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/ankita.jpg" alt="Architect" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Ankita</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">M.Tech.,UGC NET</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">ankitaigit7@gmail.com</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/rajeev pathak.jpg" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Mr. Rajeev Pathak</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">M.Tech(CSE), Pursuing Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> rajeevpathak@iitmipu.ac.in</h3>
                        </div>
             
            </div>
          </div>
        </div>
        
        
        
        
         <div class="cards-wrapper">
          
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/shilpi.jpg" alt="Designer" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Ms. Shilpi Bansal</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"> M.Tech., Pursuing Ph.D</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">shilpi.bansal@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/komal.jpg" alt="Ms. Komal" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Komal Goel</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">M.com , B.ed , Net in Commerce</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">komal.goel@iitmipu.ac.in</h3>
                        </div>
              
            </div>
          </div>
          <div class="card border-0" style="height: 25rem;width: 25rem;">
            <div class="card-img-wrapper" style="background-color: #fff;">
              <img src="images/faculty/himanshu.PNG" alt="CEO" class="img-responsive img-thumbnail rounded-circle mt-30" style="object-fit: contain;border: 3px solid #800000;"/>
            </div>
            <div class="card-info">
              <div class="tgfmlt align-text-bottom bg1" style="margin-top: auto;">
                          <h2 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;"><strong>Mr. Himanshu Pabbi</strong></h2>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">Assistant Professor</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">BCA,MCA,UGC NET DEC 2018, M.Tech(CSE)-Pursuing</h3>
                          <h3 class="tgfmlt" style="color: #800000; line-height: 1.5rem;font-size: 150%;">himanshu.pabbi28@gmail.com</h3>
             
            </div>
          </div>
        </div>
        
        
      </section>
        <?php include('../social_new.php'); ?>    
            <?php include('../footer_new.php'); ?>    
  
				<?php 
					/* $handle = fopen("counter.txt", "r");
					 if(!$handle)
					 {
					 	echo "could not open the file" ;
					 }
					 else 
					 { 
					    $counter = (int ) fread($handle,20); 
					    fclose ($handle); 
					    $counter++; 
					    echo" <strong> Visitor's Count ". $counter . " </strong> " ; 
					    $handle = fopen("counter.txt", "w" ); 
					    fwrite($handle,$counter); 
					    fclose ($handle); 
					} */
				?>
			</div>
		</div>
            </div>
            
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
    
    <script>
    d=document.querySelector("c");
    d.classList.toggle('change');
        function fch1()
        {
            
        }
        function fch2(){
            
        }
    </script>
  </body>
</html>

