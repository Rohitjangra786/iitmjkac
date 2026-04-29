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
.tgfmlt1{
    font-family: 'TradeGothicLTW01-Light';
    font-size: calc(31.25px+.3vw);
    line-height: 1.75;
    color: #333333;
}
.card{
    border: #fff 2px solid;
    
    
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



.card-img-top {
    height: 300px; /* Set the desired height for all images */
    object-fit: cover; /* Maintain aspect ratio while covering the specified height */
    border-radius: 5px;
  }
</style>
  </head>
  <body>
<div class="navigation"> 
<?php include('../navbartop.php'); ?>
<?php 
     //include('navbarfac.php'); 
?></div>

   </div>
    <div style="height: 20vh;"></div>
    <section class="team">
        <div class="section-header"  id="fac">
          <h1 class="section-heading">MBA Department</h1>
           <div class="underline"></div>
        </div>
  <!-- Inner -->
  
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="card" style="height: 80%;width: 100%;border: 1px #fff solid;">
              <img
                src="images/commerce/deepika (1).jpg"
                class="card-img-top"
                alt="Waterfall"
                style="border-radius: 5px;" />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:2rem;"><strong>Dr. Deepika Arora</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">Head of the Department</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">B.Com, M.Com, M.Phil, NET., Ph.D. </h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.2rem;">hod.mgmtdept@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 1px #fff solid;">
              <img
                src="images/commerce/gopal.jpg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;border-radius: 5px;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:2rem;"><strong>Dr. Gopal Singh Latwal</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">Associate Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">B.Com, MBA, M.Phil, NET, Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.2rem;">gopalsingh.latwal@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
   
   <!---- XXXX ---->
            <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/sunithaa.jpg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:2rem;"><strong>Dr. Sunitha Ravi</strong></h5>
                <p class="card-text">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">Associate Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">BBA, MBA, M.Phil, PGDHRM, PhD.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.2rem;">drsunitharavi@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/Latika.jpg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:2rem;"><strong>Dr. Latika Malhotra</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">BBA, MBA, NET, Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.2rem;">latika.malhotra@iitmipu.ac.in </h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
   
<!---XXXX-->
   
          
        </div>
        
        
        
        <!--- YYYY -->
          <div class="row">
          <div class="col-lg-3">
             <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/sonam.jpg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:2rem;"><strong>Dr. Sonam Arora</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">BA, MA, MBA, Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.2rem;">sonam_arora@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
             <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/himanshu.jpeg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:2rem;"><strong>Mr. Himanshu Matta</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.3rem;">BBA, MBA, NET, Pursuing Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1.2rem;">himanshumata@iitmipu.ac.in </h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            
          </div>
          <div class="col-lg-3">
            
          </div>
   
   
   
   
  
        
        
  
    </div>


  
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
        
      </section>
        <?php 
        //include('../social_new.php'); 
        ?>    
            <?php 
          //  include('../footer_new.php'); 
            ?>    

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

