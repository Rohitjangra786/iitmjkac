<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IITM Janakpuri</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="../upload/gallery/logom.png" sizes="16x16">

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


</style>
  </head>
  <body>
<!--      
    <div class="spinner-container">
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
<?php include('../navbartop.php'); ?>
<header class="header" style="height: 70px;background-color: #71797e;">
    <?php include('navbaralumni.php'); ?>
</header>

   <!--   <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div> -->
    <!--    <header class="header">
        <div class="img-wrapper">
        <img src="images/faculty1.jpg" />
        </div>

<div class="navigation"> 
</div>
        <div class="banner">
          <h1 class="tgfmlt">Faculty at IITM</h1>
          <button class="tgfmlt" onclick="window.location.href='#fac'">Read More</button>
        </div>
      </header> -->

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
          <h1 class="section-heading">Notable Alumni</h1>
           <div class="underline"></div>
        </div>
        
        <div class='container mt-5 col-md-12 mt-100'>
            <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/mohitt.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Mohit Dua</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2012-14 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Process Associate</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Clairvolex IP Solutions</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/anshu.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Anshu Punshi</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2013-15 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Assistant Professor </h3>
			                <h3 class="tgfmlt" style="color: #800000;">Jagannath International Management School, Vasant Kunj</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/prateek.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Prateek Gupta</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2014-16 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Assistant Manager</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Indiamart</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
            <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/himanshu.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Himanshu Matta</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2014-16 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Assistant Professor</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Institute of Information Technology & Management</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/anjum.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Anjum Tanwar</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2014-16 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Assistant Professor</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Institute of Innovation in Technology & Management</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/nanamchu.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Naman Chugh</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2014-16 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Director</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Malik Trading Co.</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
            <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/shreyaa.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Shriya Ganguly</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2014-16 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">CEO</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Kamax India Silk Pvt. Ltd</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/rashmi.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Rashmi</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2015-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Career Marshal</h3>
			                <h3 class="tgfmlt" style="color: #800000;">HR Executive</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/nitinc.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Nitin Chawdhary</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2015-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Account Manager - Amazon Food (National & International Brands)</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Amazon</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
     <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/rohit.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Rohit Kandpal</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2015-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Business Development Manager</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Chaayos</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/upas.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Upasana Maggo</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2015-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Counsellor</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Right Directions Overseas Education- Consultants</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/yashika.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Yashika Rawal</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2015-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Senior Associate</h3>
			                <h3 class="tgfmlt" style="color: #800000;">NTT Data</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/mohit_new.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Mohit Jain</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Kingston Smith Arcis Outsourcing Pvt Ltd</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Senior Account Executive</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/amandeep.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Amandeep Grewal</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">HDFC Bank</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Assistant Manager</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/ravikant.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Ravikant</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Max Life Insurance</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Agency Development Manager</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/sahil.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Sahil Dhall</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">BYJU'S</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Business Development Manager</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/shreya.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Shreya Gupta</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">British Telecom</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Sourcing Professional</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/masoom.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Masoom Mehta</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">British Airways</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Senior HR Executive</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
     <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/sakshi.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Sakshi Chopra</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Zomato </h3>
			                <h3 class="tgfmlt" style="color: #800000;">Sr. Associate</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/amanpreet.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Amanpreet Kaur</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Mansukh Securities and Finance Limited</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Derivatives Analyst</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/vash.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Vaishnavi Sharma</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2016-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">International Payroll Specialist</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Safeguard Global</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/samarpreet.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Samarpreet Singh</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2017-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Relationship Manager </h3>
			                <h3 class="tgfmlt" style="color: #800000;">Neogrowth Pvt. Ltd.</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/srishti.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Srishti Bhatt</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2017-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Deputy Manager</h3>
			                <h3 class="tgfmlt" style="color: #800000;">IndusInd Bank</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/shubham.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Shubham Saini</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2017-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Deputy Manager</h3>
			                <h3 class="tgfmlt" style="color: #800000;">ICICI Bank</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
     <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/arpit.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Arpit</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MBA 2017-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Business Development Manager </h3>
			                <h3 class="tgfmlt" style="color: #800000;">Max Bupa</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/akashl.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Akash Takyar</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MCA 2004-07 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Co-founder</h3>
			                <h3 class="tgfmlt" style="color: #800000;">LeewayHertz Technologies</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/naresh.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Naresh Dubey</h2>
			                <h3 class="tgfmlt" style="color: #800000;">MCA 2015-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Managing Director</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Coverscart.com</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/vaibhav.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Vaibhav Mukhi</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2005-08 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Manager–Business Excellence </h3>
			                <h3 class="tgfmlt" style="color: #800000;">Levi Strauss & Co.</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/vikrant.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Vikrant Walia</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2014-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Reporting Analyst</h3>
			                <h3 class="tgfmlt" style="color: #800000;">EXL Services</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/sarthak.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Sarthak Sawhney</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2014-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Senior Marketing Executive</h3>
			                <h3 class="tgfmlt" style="color: #800000;">International Tractors Ltd.</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/shalini.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Shalini</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2014-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Royal Bank of Scotland</h3>
			                <h3 class="tgfmlt" style="color: #800000;">CS&O Analyst (Personal & Business Banking)</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/gunveen.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Gunveen Kaur</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2014-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Sr. Insurance Associate</h3>
			                <h3 class="tgfmlt" style="color: #800000;">MetLife Global Operations</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/nidhi.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Nidhi Kukreja</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2014-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Marketing Analyst</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Coding Blocks</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    
     <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/Ashfaque.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Ashfaque Waris</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Co-founder</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Acuevers</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/saurav.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Saurav Dam</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BBA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Managing Partner</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Acuevers</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/harneet.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Harneet Kaur</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2008-11 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Co-founder, Asst. Director</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Knownymous Online Marketing Solutions</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
     <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/gagan.png" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Gagandeep Singh</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2008-11 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Co-founder, Director</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Knownymous Online Marketing Solutions</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/shubhrank.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Shubhrank Rastogi</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2014-17 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Software Consultant</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Knoldus</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/amanjeet.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Amanjeet Singh</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2015-18 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Associate Analyst</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Deloitte Consulting</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/mohitd.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Mohit Daga</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Associate Analyst</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Deloitte Consulting</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/manish.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Manish Kumar</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Operations Executive</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Infosys</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/rashmivij.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Ms. Rashmi Vij</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Operations Executive</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Infosys</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    
    
    <div class="row">
                <div class="container  text-center">
                    <div class="card-deck">
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/adish.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Adish Jain</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Owner</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Aadish International</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/nishant.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Nishant Arora</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Full Stack Developer</h3>
			                <h3 class="tgfmlt" style="color: #800000;">SAP Labs</h3>
                         </div>
                    </div>
                        <div class="card " style="background: #fff; color: #fff; margin-left: 5px;margin-right: 5px;border: 1px solid #fff;">
                            <img class="card-img-top mx-auto" src="images/prashant.jpg" alt="Card image" style="width:80%;height: 50%; object-fit: fit;">
                            <div class="card-body text-center">
                            <h2 class="tgfmlt" style="color: #800000;">Mr. Prashant Kashyap</h2>
			                <h3 class="tgfmlt" style="color: #800000;">BCA 2016-19 Batch</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Associate Consultant</h3>
			                <h3 class="tgfmlt" style="color: #800000;">Wipro</h3>
                         </div>
                    </div>  
            </div>
       </div>          
    </div>
    
    
        </div> 
        
        
        
        
      
        
        
       
        
     
        
        
      </section>

   <div class="lowerb">
              
     <div class="container" style="background: #800000;"> 
       <div class="row" style="margin-top: 1rem;">
           <div class="col-md" style="margin: 30px 10px">  
             <div class="tgfmlt"><h2>Contact Us</h2></div>
				<hr class="hw" />
				<div class="text-size-18 text-wheat tgfmlt">Institute of Information Technology & Management</div>
				<div class="text-size-16 text-wheat tgfmlt">D-29, Institutional Area, Janakpuri, New Delhi-110058</div>
				<div class="mt-10 text-wheat text-size-15 tgfmlt">
					<i class="fa fa-phone-square"></i> Contact<br/>+91/011-28525882, 28520239, 28525051
				</div>
				<div class="mt-10 text-wheat text-size-15 tgfmlt">					
					<i class="fa fa-envelope"></i> Email<br/>director@iitmipu.ac.in
				</div>
                

           </div>
           <div class="col-md" style="margin: 30px 10px">
             <div class="text-size-20 tgfmlt"><h2>Institutional Memberships</h2></div>
				<hr class="hw" />
				<ul  style="background-color: #800000; padding: 0; color:#fff;" class="tgfmlt text-size-15">
					<li><a href="direct-file/aima.pdf" target="_blank" style="color: #fff;">All India Management Association (AIMA)</a></li>
					<li><a href="direct-file/csi.pdf" target="_blank" style="color: #fff;">Computer Society of India</a></li>
					<li><a href="direct-file/csi_form.pdf" target="_blank" style="color: #fff;">CSI Application Form</a></li>
					<li><a href="direct-file/delnet.pdf" target="_blank" style="color: #fff;">DELNET</a></li>
					<li><a href="direct-file/phd_chamber.pdf" target="_blank" style="color: #fff;">PHD-Chamber for Commerce & Industry</a></li>
					<li><a href="direct-file/iste-faculty.pdf" target="_blank" style="color: #fff;">ISTE Faculty Chapter</a></li>
					<li><a href="direct-file/iste-student.pdf" target="_blank" style="color: #fff;">ISTE Student Chapter</a></li>
					<li><a href="direct-file/iste-student-form.pdf" target="_blank" style="color: #fff;">ISTE Student Registration Form</a></li>
					<li><a href="direct-file/assocham.pdf" target="_blank" style="color: #fff;">ASSOCHAM</a></li>
					<li><a href="direct-file/nhrd.pdf" target="_blank" style="color: #fff;">NHRD Network</a></li>
				</ul>

           </div>
           <div class="col-md" style="margin: 30px 10px">
               <div class="text-size-20 tgfmlt"><h2>Research & Consultancy</h2></div>
				<hr class="hw" />
				<ul style="background-color: #800000; padding: 0" class="tgfmlt text-size-15">
					<li><a href="#" style="color: #fff;">Research Committee</a></li>
					<li><a href="direct-file/projects.pdf" target="_blank" style="color: #fff;">Projects</a></li>
					<li><a href="direct-file/consultancy.pdf" target="_blank" style="color: #fff;">Consultancy</a></li>
				</ul>
				<div class="text-size-20 mt-20 tgfmlt text-size-15">Grievance Redressal System</div>
				<hr class="hw" />
				<ul style="background-color: #800000; padding: 0" class="tgfmlt text-size-15">
					<li><a href="upload/just_pdf/university_advisory.pdf" target="_blank" style="color: #fff;">Grievance Redressal University Advisory</a></li>
					<li><a href="upload/just_pdf/grievances_redressal_committiee.pdf" target="_blank" style="color: #fff;">Grievance Redressal Committee</a></li>
					<!--<li><a href="upload/just_pdf/procedure_for_filing_grievances.pdf" target="_blank" style="color: #fff;">Procedure to file Grievances</a></li>-->
					<li><a href="http://iitmjanakpuri-sdc.in/tracking/" target="_blank" style="color: #fff;">Grievance Redressal System</a></li>
				</ul>
				<!--<div class="text-size-20 mt-20 tgfmlt">NIRF</div>
				<hr class="hw mt-5" />
				<ul class="tgfmlt">
					<li><a href="#" style="color: #fff;">NIRF</a>
				</ul>-->

           </div>
           <div class="col-md" style="margin: 30px 10px">
           <div class="text-size-20 tgfmlt"><h2>Accreditation</h2></div>
				<hr class="hw" />
				<ul style="background-color: #800000; padding: 0" class="tgfmlt text-size-15">
					<!--<li><a href="direct-file/nba.pdf" target="_blank">NBA</a></li>-->
					<li><a href="#" style="color: #fff;">NAAC</a></li>
					<li><a href="#iso" name="iso" style="color: #fff;">ISO Certification</a>
						<ul style="padding-left: 20px; list-style-type:circle;background-color: #800000;" class="tgfmlt text-size-15">
							<li><a href="direct-file/iso-9001-2015.pdf" target="_blank" style="color: #fff;">ISO 9001 : 2015</a></li>
							<li><a href="direct-file/iso-10002-2014.pdf" target="_blank" style="color: #fff;">ISO 10002 : 2014</a></li>
						</ul>
					</li>
					<li><a href="#" style="color: #fff;">IQAC</a></li>
				</ul>
				<div class="text-size-20 mt-20 tgfmlt">NIRF</div>
				<hr class="hw" />
				<ul style="background-color: #800000; padding: 0" class="tgfmlt text-size-15">
				    <li><a href="direct-file/NIRF2020.pdf" style="color: #fff;">NIRF</a>
					<!--<li><a href="#">NIRF</a>-->
				</ul>
				<div class="text-size-20 mt-20 tgfmlt">Careers</div>
				<hr class="hw" />
				<ul style="background-color: #800000; padding: 0" class="tgfmlt text-size-15">
					<li><a href="#" target="_blank" style="color: #fff;">Careers</a></li>
					<!--<li><a href="http://www.ipu.ac.in/norms/Ordinance/o33.pdf" target="_blank">Non-Teaching Staff</a></li>-->
				</ul>
    
           </div>
       </div>
       <div class="row mt-40">
			<div class="col-md text-center tgfmlt text-size-15">
				&copy; Institute of Information Technology & Management 2021<br>
				Visitors Count 3876
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

