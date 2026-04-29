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
tr:hover {
  background-color: #800000;
  color: #fff;
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
/*
.admdoc{
    background: #dedede;
    padding: 2rem;
}
.admlinks{
    color:#4b4b4b;
   margin-bottom: 2rem;
    transition: transform 0.25s ease-out;

}
.admlink:after{
    transition: transform 0.25s ease-out;
  transform: scaleX(0);
  transform-origin: right;
}
.admlinks:hover{
    color: #000;
    border-bottom:0.2rem black solid;
    text-decoration:none;
}
.admlink:hover::after{
    transform: scaleX(1);
  transform-origin: left;
} */

/* Collapsibles */
.collapsible {
  background-color: maroon;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 17px;
  border: 1rem transparent inset;
}

.active, .collapsible:hover {
  background-color: #80000;
  border: 1rem maroon inset;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 1px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  /*background-color: #f1f1f1;*/
  margin:0 auto;
}
/* Collapsibles Ends */
</style>
  </head>
  <body>

<div class="navigation">  
<?php include('../navbartop.php'); ?>
<?php 
//include('navbaradm.php'); 
?></div>


     <div style="height:20vh;"></div>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="adm">Admissions</h1>
          <div class="underline"></div>
          <div class="container">
              
              <div class="row">
                  <div class="col-md-9">
                      <h1 class="tgfmlt" style="color: #4b4b4b;"><strong>Admission Procedure</strong></h1>
              <hr class="hr-maroon"/>
                       <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                 <p class="tgfmlt text-size-20" style="color: #4b4b4b;">The institute conducts admissions based primarily on merit through a Common Entrance Test (CET) administered by GGSIP University. The University facilitates centralized online counselling for all affiliated colleges, during which students must select their preferred College/Institute. Application forms can be obtained by referring to the University's advertisements in national newspapers or by visiting its website: <a href="https://ipu.admissions.nic.in/">www.ipuadmissions.nic.in</a> or <a href="http://www.ipu.ac.in/">www.ipu.ac.in</a></p> 

                  

                  <!--<p class="tgfmlt text-size-20" style="color: #4b4b4b;">Click Here for Admission Prospectus</p>--></h2>
                  </div>
                  <div class="col-md-3 admdoc">
                      <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Quick Links</h1>
                      <hr class="hr-black"/>
                      <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                          <a href="docs/Check List_u1.pdf" target="_blank" class="admlinks">List of Documents</a><br/>
                        
                          
                          <a href="https://iitmjanakpuri.com/admissions/docs/pg.pdf" class="admlinks">Admission Brochure-PG</a><br/>
                          <a href="https://iitmjanakpuri.com/admissions/docs/ug.pdf" class="admlinks">Admission Brochure-UG</a><br/>
                         <a href="https://iitmjanakpuri.com/admissions/docs/FEE for_AY 2024-25all three.pdf" target="_blank" class="admlinks">Fee Details</a><br/>
                           <!--<a href="https://iitmjanakpuri.com/admissions/docs/advertisementttttuniver.pdf" class="admlinks">GGSIPU Admission Notice 2024-25 </a><br/>
                          <a href="docs/documents_req.pdf" class="admlinks">List of Documents</a><br/>
                          <a href="docs/Feedetails.pdf" class="admlinks">Fee Details</a><br/>
                          <a href="enquiry.php" class="admlinks">Enquiry</a><br/>-->
                          <a href="#freq" class="admlinks">Frequently Asked Questions</a><br/>
                      </h2>
                  </div>
              </div>
             
          
          </div>
         
   
      </section>
  

      <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
      </a>
  <script>
    //document.write('JavaScript Working');
    function getchanged()
    {
       str=document.getElementById('course').value;
       if(str=='bba' || str=='bca' || str=='bcom')
       {
           var v=document.getElementById('perg');
           v.disabled=true;
       }
       else
       {
           var v=document.getElementById('perg');
           v.disabled=false;
       }
    }
</script>
  
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

    <script src="script.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="tilt.js"></script>
  </body>
</html>
