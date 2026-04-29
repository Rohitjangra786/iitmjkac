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
 <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
 <!--     <header class="header">
        <div class="img-wrapper">
          <img src="images/building1.jpg" />
        </div>

 <div class="navigation">    
<?php include('../navbartop.php'); ?>
<?php include('navbariqac.php'); 
?></div> 
        <div class="banner">
          <h1 class="tgfmlt">IQAC</h1>
          <button class="tgfmlt" onclick="window.location.href='#about'">Read More</button>
        </div>
      </header>-->

      <section class="sidebar">
     
      </section>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="about">Composition</h1>
          <div class="underline"></div>
          <div class="container">
         
              <div style="height: 10vh;"></div>
              <h1 class="section-heading" id="vision">Minutes</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      	<table style="width: 100%;">
                      	    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 23<sup>rd</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/mom23.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr> 
                      	    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 22<sup>nd</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/mom22.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr> 
                      	    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 21<sup>st</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM21.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 20<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM200.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <!--<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 19<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM19.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 18<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM18.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 17<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM17.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 16<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM16.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 15<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/MOM15.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 14<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/IQAC_MOM_310519.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 13<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/IQAC_MOM_261118.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 12<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/minutes/IQAC_MOM_160418.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Minutes of 11<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/minutes/IQAC_MOM_110717.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>-->
					</table>
                      
                  </div>
              </div>
             
              <div style="height: 10vh;"></div>
              <!-- Compliance Reports -->
              <h1 class="section-heading" id="accr">Compliance Reports</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
       <table style="width: 100%;">
            <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 22<sup>nd</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR22nd.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						 <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 21<sup>st</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR21st.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 20<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR20th-protectedd.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <!--<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 19<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR19-protected.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 18<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR18-protected.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						
						    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 17<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR17-protected.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 16<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR16-protected.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 15<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR15-protected.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 14<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR_14.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 13<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/compliance_reports/ATR_13.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 12<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:10%;padding:10px;">
								<a href="iqac/compliance_reports/ATR_12.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i>
								Compliance Report of 11<sup>th</sup> meeting of IQAC</span>
							</td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/compliance_reports/ATR_11.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>-->
					</table>
                      
                      
                  </div>
              </div>
              <div style="height:10vh;"></div>
              <!-- AQAR -->
              <h1 class="section-heading" id="qp">AQAR</h1>
              <hr class="hr-maroon"/>
               <div class="row">
                  <div class="col-md">
                      <table style="width: 100%;">
                          <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2021-2022</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2021_2022.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2020-2021</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2020_20211.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2019-2020</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2019_2020.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
					    <!--<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2018-2019</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2018_2019.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>						
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2017-2018</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2017_2018.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2016-2017</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2016_2017.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2015-2016</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2015_2016.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>
						<tr>
							<td><span class="text-justify tgfmlt" style="color: #4b4b4b;font-size: 2rem;">
								<i class="fa fa-angle-double-right"></i> AQAR 2014-2015</span></td>
							<td style="width:80px;padding:10px;">
								<a href="iqac/aqar/aqar_2014_2015.pdf" target="_blank" class="btn btn-danger">View</a>
							</td>
						</tr>-->
					</table>
                      
                      
                  </div>
              </div>
              
              
              <div style="height:10vh;"></div>
          </div>
          
          
        
          
          
      
        </div>
   
      </section>
        <?php
        
        
        include('../social_new.php');
        
          include('../footer_new.php');      
        
        ?>    
      <!-- Footer -->

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
<!--    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script> -->
    <script src="tilt.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>
