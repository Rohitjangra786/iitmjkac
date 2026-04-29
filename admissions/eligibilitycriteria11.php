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
                      
                      <h1 class="tgfmlt" style="color: #4b4b4b;" id="elg"><strong>Eligibility Criteria</strong></h1>
              <hr class="hr-maroon"/>
          </div>
          <div class="container">
              <table class="table text-size-20 tgfmlt" style="color: #4b4b4b;">
				<tr>
					<th class="text-center" width="15%">Courses</th>
					<th class="text-center">Eligibility Criteria</th>
					<th class="text-center">Admission Process</th>
				</tr>
				
				<tr>
					<td>
						MBA (CET-101)<br/>
						Duration - 2 Years
					</td>
					<td class="text-justify">
                            <p>Any recognized 3 years or more Bachelor's Degree in any
                            discipline with a minimum of 50% marks in aggregate.<br>
                            OR</br>
                            Bachelor's Degree in Engineering, Technology or any other
                            subject with minimum of 50% marks in aggregate or any
                            qualification recognized as equivalent thereto with minimum of
                            50% marks in aggregate.</br>
                            OR</br>
                            Passed the Final Examination of the Institute of Chartered
                            Accountants of India or England, the Institute of Cost and Works
                            Accountants of India or England or the Institute of Company
                            Secretaries of India</p>
					</td>
					<td class="text-justify">
                        <h3>1. All admissions shall be made on the basis of overall Percentile
                        of Common Admission Test (CAT 2023) that was conducted by
                        Indian Institute of Management.<br>
                        2. If seats remain vacant after counselling on the basis of overall
                        percentile of CAT 2023, then only the counseling shall be
                        conducted on the basis of Score in CMAT 2024 (another
                        National Level Test).  University will consider admissions in MBA 
                                                Programme by conducting Common Entrance Test (CET) to be conducted by GGSIP University.</h3>
					</td>
				</tr>
				
				<tr>
					<td>
						MCA (CET-105)<br/>
						Duration - 2 Years
					</td>
					<td class="text-justify">
						<h3>Passed BCA/B.Sc. (Computer Science)/B.Sc.(Technology) or equivalent or Passed at least 03 years
                        Bachelors Degree with mathematics/statistics at 10+2 level or graduation level. Obtained at least 50% marks (45% marks in case of candidates belonging to
                        reserved category) in the qualifying examinations.<br>
                        Note: These applicants, if admitted, may have to study additional bridge
                        courses as per the norms of the University.<br>
                        </h3>
						</td>
					<td class="text-justify">
						<h3>The admission to MCA will be on the basis of
                        NIMCET 2024/CET/CUET in following order of priority:<br>
                        1. NIMCET 2024<br>
                        2. CET (If Seats remain vacant after admission through NIMCET
                        counselling on the basis of merit of NIMCET 2024, the University
                        will consider admission in MCA on the basis of CET.
                        The vacant seats after exhausting the merit
                        filled through the merit list of CUET</h3>
					</td>
				</tr>
				<tr>
					<td>
						BCA(H) (CET-114)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<p> Pass in 12th Class of 10+2 of CBSE or equivalent
                        with a minimum of 50% marks in aggregate* with pass in English (core
                        or elective or functional). Mathematics or Computer Science / or any
                        other subject related to Computer Science.<br>
                        OR<br>
                        Three year Diploma in a branch of Engineering from a polytechnic duly
                        approved by All India Council for Technical Education and affiliated to
                        a recognized examining body with a minimum of 50% marks in
                        aggregate.
						</p>
						</td>
					<td class="text-justify">
						<h3>Admission shall be on the basis of the merit of the
                            CET. The vacant seats after exhausting the merit list of CET will be
                            filled through the merit list of CUET.</h3>
					</td>
				</tr>
				<tr>
					<td>
						BBA(H)  (CET-125)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<h3>Pass in 12th Class of 10+2 of CBSE or equivalent
                        with a minimum of 50% marks in aggregate* and must also have passed
                        English (core or elective or functional) as a subject. </h3>
						</td>
					<td class="text-justify">
						<h3>Admission shall be on the basis of the merit of the
                        CET. The vacant seats after exhausting the merit list of CET will be
                        filled through the merit list of CUET.</h3>
					</td>
				</tr>
				<tr>
					<td>
						B.COM(H) (CET-146)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<h3>50% in aggregate in 10+2 examination / senior School Certificate Examination of C.B.S.E. as minimum marks for admission to B.Com with pass in five subjects (One language and four elective subjects) or an examination recognized as equivalent to that.<br>
                        (i) Pre-University Examination (Two years after ten years of schooling) of an Indian school / college. OR Intermediate Examination of an Indian University / Board or an Examination recognized as equivalent to that (Pass in five written subjects)<br>
                        (ii) Indian School Certificate Examination (12 years) conducted by the Council for the Indian School Certificate Examination, New Delhi (Pass in five written subjects).<br>
                        (iii) Examination of a foreign University / Board which is recognized as equivalent to 10+2 CBSE examination/or Indian University.</h3>
						</td>
					<td class="text-justify">
                    	<h3>Admission shall be on the basis of the merit of the
                        CET. The vacant seats after exhausting the merit list of CET will be
                        filled through the merit list of CUET.</h3>
					</td>
				</tr>
				
				
				
					<tr>
					<td>
						BAJMC(H) (CET-126)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<h3>Pass in 12th Class of 10+2 of CBSE or equivalent
                        with a minimum of 50% marks in aggregate* and must also have passed
                        English (core or elective or functional) as a subject.</h3>
						</td>
					<td class="text-justify">
						<h3>Admission shall be on the basis of the merit of the
                        CET. The vacant seats after exhausting the merit list of CET will be
                        filled through the merit list of CUET.</h3>
					</td>
				</tr>
				
			</table>
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
