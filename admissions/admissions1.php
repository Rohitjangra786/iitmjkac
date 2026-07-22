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
  <!--  <div class="spinner-container">
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
          <!--<img src="images/a4.jfif" />-->
          <img src="images/addm.jpg"/>
        </div>

<div class="navigation">  
<?php include('../navbartop_new.php'); ?>
<?php include('navbaradm.php'); 
?></div>
        <div class="banner">
          <h1 class="tgfmlt">Join Us</h1>
          <button class="tgfmlt" onclick="window.location.href='#adm'">How to Apply</button>
        </div>
      </header>

     
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="adm">Admissions</h1>
          <div class="underline"></div>
          
          
          <h1 class="tgfmlt2" style="color: #4b4b4b;"><strong>Admission Procedure</strong></h1>
             
              
              <div style="margin: auto 200px ;">
              <div class="row">
                    <p class="tgfmlt2 text-size-20" style="color: #4b4b4b;">Admissions are conducted solely on the basis of merit through a Common Entrance Test (CET) conducted by the GGSIP University. The University conducts centralised online counselling for all colleges affiliated with it.

                  Students are required to choose their College/Institute during online counselling.</p> 
                    <div class="col-md-3 admdoc">
                      <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Quick Links</h1>
                      <hr class="hr-black"/>
                      <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                          <a href="docs/broch23.pdf" class="admlinks">Admission Brochure</a><br/>
                          <a href="docs/documents_req.pdf" class="admlinks">List of Documents</a><br/>
                          <!--<a href="docs/Feedetails.pdf" class="admlinks">Fee Details</a><br/>-->
                          <a href="enquiry.php" class="admlinks">Enquiry</a><br/>
                          <a href="#freq" class="admlinks">Frequently Asked Qustions</a><br/>
                      </h2>
                  </div>
              </div>
          </div>
              <div style="margin: auto 200px;">
                  <div class="row">
                      <h1 class="tgfmlt" style="color: #4b4b4b;" id="elg"><strong>Eligibility Criteria</strong></h1>
                      
                      
                        <table class="table text-size-20 tgfmlt2" style="color: #4b4b4b;">
				<tr>
					<th class="text-center" width="15%">Course</th>
					<th class="text-center">Eligibility Criteria</th>
					<th class="text-center">Admission Process</th>
				</tr>
				
				<tr>
					<td>
						MBA (CET-101)<br/>
						Duration “2 Years"
					</td>
					<td class="text-justify">
						<p>Any recognized 3 years or more Bachelor's Degree in any discipline with a minimum of 50% marks in aggregate.</p>
						<center>OR</center>
						<p>Bachelor's Degree in Engineering, Technology or any other subject with minimum of 50% marks in aggregate or any qualification recognized as equivalent thereto with minimum of 50% marks in aggregate. </p>
						<center>OR</center>
						<p>Passed the Final Examination of the Institute of Chartered Accountants of India or England, the Institute of Cost and Works Accountants of India or England or the Institute of Company Secretaries of India.</p>
						<h3>In addition to above, for MBA (Financial Analysis) the candidate must have passed in Mathematics/Statistics/Economics/Operations Research at Graduation Level.</h3>
					</td>
					<td class="text-justify">
						<h3>1. All admissions shall be made on the basis of overall Percentile of Common Admission Test (CAT) 2022 that was conducted by Indian Institute of Management.<br> 
                        2. If seats remain vacant after counselling on the basis of overall percentile of CAT 2022, then the counselling shall be conducted on the basis of score in CMAT 2023 (another National Level Test).<br>
                        3. In case seats still remain vacant even after exhausting CAT 2022 and CMAT 2023 
                        Merit, University will consider admissions in MBA 
                        Programme by conducting Common Entrance Test (CET 2023) to be conducted by GGSIP University.</h3>
					</td>
				</tr>
				<tr>
					<td>
						BCA (CET-114)<br/>
						Duration "3 Years"
					</td>
					<td class="text-justify">
						<p>Pass in 12th Class of 10+2 of CBSE or equivalent with a minimum of 50% marks in aggregate with pass in English (core or elective or functional). Mathematics or (Computer Science / Informatics Practice / Computer Applications / Multimedia & Web Technology / Data Management Application / Web Application as compulsory subject of non-vocational stream with 50 theory and 50 practical ratio).<br> OR <br>
                        Three year Diploma in a branch of Engineering from a polytechnic duly approved by All India Council for Technical Education and affiliated to a recognized examining body with a minimum of 50% marks in aggregate. 
						</p>
						</td>
					<td class="text-justify">
						<h3>Admission shall be on the basis of the merit of the written test /CET.</h3>
					</td>
				</tr>
				<tr>
					<td>
						BBA (CET-125)<br/>
						Duration "3 Years"
					</td>
					<td class="text-justify">
						<h3>Pass in 12th Class of 10+2 of CBSE or equivalent with a minimum of 50% marks in 
						aggregate and must also have passed English (core or elective or functional) as a subject.</h3>
						</td>
					<td class="text-justify">
						<h3>Admission shall be on the basis of the merit of the written test / CET.</h3>
					</td>
				</tr>
				<tr>
					<td>
						BCOM(H) (CET-146)<br/>
						Duration "3 Years"
					</td>
					<td class="text-justify">
						<h3>50% in aggregate in 10+2 examination / senior school certificate examination of C.B.S.E . as minimum marks for admission to B.Com with pass in five subjects (One language and four elective subjects) or an examination recognized as equivalent to that.<br>
                       (i) Pre-University Examination (Two years after ten years of schooling) of an Indian school / college. <br>OR<br>
                       Intermediate Examination of an Indian University / Board or an Examination recognized as equivalent to that (Pass in Five written subjects)<br>
                       (ii) Indian School Certificate Examination (12 years) conducted by the Council for the Indian School Certificate Examination, New Delhi (Pass in Five written subjects).<br>
                       (iii) Examination of a foreign University / Board which is recognized as equivalent to 10+2 CBSE examination/or Indian university.</h3>
						</td>
					<td class="text-justify">
						<h3>Admission shall be on the basis of the merit of the written test /CET.</h3>
					</td>
				</tr>
			</table>
                  </div>
              </div>
              
              <div style="margin: auto 200px;">
                  <div class="row">
                      <h1 class="tgfmlt" style="color: #4b4b4b;" id="freq"><strong>Frequently Asked Questions</strong></h1>
                      
                       <button class="collapsible tgfmlt">How can I get admission in MBA, BBA, BCA & B.Com (Hons.) programme?</button>
                       <div class="content">
            <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Admission procedure of MBA</strong></h2>
            <h3 class="tgfmlt" style="color: #4b4b4b;">The admissions in regular MBA programme in the affiliated 
            institutes for the Academic Session 2023-24 are on the basis of merit in CAT 2022. If seats remain 
            vacant after counseling on the basis of merit of CAT, then counseling shall be conducted on the 
            basis of score in CMAT. In case seats still remain vacant even after exhausting CAT and CMAT merit, 
            the University will consider admission in MBA programme by conducting Common Entrance Test to be conducted by GGSIPU.</h3>
            <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Admission procedure of BBA, BCA, B.Com(H)</strong></h2>
            <h3 class="tgfmlt" style="color: #4b4b4b;">The admissions in regular BBA, BCA, B.Com(H) 
            programmes in the affiliated institutes for the Academic Session 2022-23 are on the basis of merit of the written test /CET.</h3>
          </div></br>
          
          
          
            <button class="collapsible tgfmlt">What is the fee structure of MBA, BBA, BCA & B.Com (Hons.) programme?</button>
         <div class="content">
           <h3 class="tgfmlt" style="color: #4b4b4b;">The fees structure varies for different courses offered by the Institute.</h3>
           <h3 class="tgfmlt" style="color: #4b4b4b;">Fees: Session 2022 - 23</h3>
           <h3 class="tgfmlt" style="color: #4b4b4b;">
           <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
	            				<table class="table">
									<tbody>
										<tr>
											<th>S.No</th><th>Programme</th><th>Fee(per annum)</th>
										</tr>
										<tr>
											<td align="center">1</td>
											<td align="center">BCA</td>
											<td align="center">86,400/-</td>
										</tr>
										<tr>
											<td align="center">2</td>
											<td align="center">BBA</td>
											<td align="center">88,000/-</td>
										</tr>
										<tr>
											<td align="center">3</td>
											<td align="center">B.Com(H)</td>
											<td align="center">83,800/-</td>
										</tr>
										<tr>
											<td align="center">4</td>
											<td align="center">MBA</td>
											<td align="center">1,44,000/-</td>
										</tr>
										<!--<tr>
											<td align="center">5</td>
											<td align="center">MCA (LE)</td>
											<td align="center">1,44,000/-</td>
										</tr>-->
									</tbody>
								</table>
							</div>
						</div></h3>
						
						
						
            </div></br>
            
            
            
            
            <button class="collapsible tgfmlt">What are the Institute timings?</button>
         <div class="content">
           <h3 class="tgfmlt" style="color: #4b4b4b;">The institute is functional on all 
           working days i.e., from Monday to Saturday from 8.30 am to 6 pm. There are two 
           shifts available for under graduate courses. The first shift starts at 8.30 am 
           and the second shift starts at 11.30 am (depending on the time table).</h3>
           </div></br>
           
           
             <button class="collapsible tgfmlt">How is the campus placement of the Institute?</button>
         <div class="content">
            <h3 class="tgfmlt" style="color: #4b4b4b;">Industry Institute Partnership Centre (IIPC) of 
            Institute of Information Technology & Management (IITM) was established in 2004 for enhancing interface 
            between the Institute and Industry. This centre identifies the industrial expectation and promotes 
            institutional preparation for meeting industrial needs by facilitating internship, seminars, workshops, 
            placement and various other industrial training programs. Industry Institute partnership also reflects in 
            equipping faculty to latest practices and makes the students industry-ready by providing exposure to current 
            industry practices. Related to placements, all top brands like SAP India, Wipro, HDFC Bank, IndusInd Bank, 
            Franchise Trade, Infosys, etc. hire both Management and IT students depending on their specializations. 
            Pre-Placements support is there (specific as well as general) to crack the interviews and aptitude tests 
            of various companies. Highest package for 2020-21 batch was 7.5 LPA and average around 3.75 LPA.</h3>
         </div></br>
         
           <button class="collapsible tgfmlt">Whom to contact for any admission inquiries?</button>
         <div class="content">
            <h3 class="tgfmlt" style="color: #4b4b4b;">In order to assist and address queries of 
            students and parents related to Academic matters, a helpdesk has been created for individual programs as under:-</h3>
            <h3 class="tgfmlt" style="color: #4b4b4b;">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
	            				<table class="table">
									<tbody>
										<tr>
											<th>S.No</th><th>Programme</th><th>Helpdesk</th>
										</tr>
										<tr>
											<td align="center">1</td>
											<td align="center">BCA</td>
											<td align="center">Dr. Harmeet Malhotra - 8287831728 </td>
										</tr>
										
										<tr>
											<td align="center">2</td>
											<td align="center">BBA</td>
											<td align="center">Dr. Deepika Arora - 8178436594</td>
										</tr>
										<tr>
											<td align="center">3</td>
											<td align="center">B.Com(H)</td>
											<td align="center">Dr. Vikas Bharara - 8287826571</td>
										</tr>
										<tr>
											<td align="center">4</td>
											<td align="center">MBA</td>
											<td align="center">Dr. Gopal Singh Latwal - 9711197715</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div></h3>
            </div></br>
         
         
                  <button class="collapsible tgfmlt">What are the Institute scholarships schemes?</button>
         <div class="content">
             <h3 class="tgfmlt" style="color: #4b4b4b;">Apart from providing excellent 
             faculty & individual academic support, the IITM group with a view to 
             inspire & motivate the hard working students provides the following Scholarships:</h3>
             <h2 class="tgfmlt" style="color: #4b4b4b;">(A) Pre - Admission Merit Scholarships</h2>
             <h3 class="tgfmlt" style="color: #4b4b4b;">Eligible candidates seeking Pre-Admission Scholarship in B.Com (Hons.), BCA and BBA programmes have to take online sanction before filling their First Preference as IITM.
                The link for same is <a href ="http://www.iitmjanakpuri.com/pre-admision.php"> http://www.iitmjanakpuri.com/pre-admision.php</a>
             </h3>
             <h2 class="tgfmlt" style="color: #4b4b4b;">(B) In-House Merit Scholarships </h2>
             <h3 class="tgfmlt" style="color: #4b4b4b;"> In order to acknowledge and encourage 
             brilliant academic performers, the Institute awards Merit Scholarships to the students 
             on the basis of their academic performance in University examinations. To get more details kindly go through the below link:
             <a href ="http://www.iitmjanakpuri.com/inhouse.php"> http://www.iitmjanakpuri.com/inhouse.php</a>
        </br></br>
        Apart from the above, following Financial Assistance Programmes are also available to the students:</br>
        (i)	Merit-cum-Means Financial Assistance Scheme</br>
        (ii)	Financial Assistance to the students under EWS Scheme</br>
        <b>Note:</b> For detailed information on above Scholarships/Financial Assistance Scheme, please visit <a href ="http://www.iitmjanakpuri.com/">http://www.iitmjanakpuri.com/</a></br>
      </h3>
    </div></br>

         <button class="collapsible tgfmlt">What is the reservation policy of the Institute with respect to seat allocation?</button>
         <div class="content">
          <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Relaxation in Eligibility</strong></h2>
          <h3 class="tgfmlt" style="color: #4b4b4b;">Candidates belonging to Scheduled Castes/Scheduled Tribes/Widows or Wards of 
          Defense Personnel / Persons With Disability will be allowed 5% relaxation of marks in the minimum eligibility 
          requirement or as specified by the statutory body governing the programme of study, irrespective of the fact 
          whether there exists any reservation for any category of such candidates or not.  Relaxation of any kind, 
          will be granted to only those candidates, who are able to produce necessary relevant supporting documents 
          as per the Admission Brochure before the Admission Officer present at the Venue of the Document Verification / Counseling /Admission.</h3>
          <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Reservation Policy</strong></h2>
          <h3 class="myfontsize">i) 85% of the sanctioned intake (minus the management quota which is 10% of total seats unless surrendered by the institution for common counseling) shall be allocated for Delhi Region wherein reservation of seats shall be as under:
      		Delhi region Scheduled Caste - 15%</br>
            Delhi region Scheduled Tribe- 7.5%
         </h3>
         <h3 class="tgfmlt" style="color: #4b4b4b;">ii) 15% of the sanctioned intake (minus the management quota which is 10% of total seats unless surrendered by the institution for common counseling) shall be allocated for outside Delhi Region wherein reservation of seats shall be as under:
       		Outside Delhi region Scheduled Caste - 15%</br>
     		Outside Delhi region Scheduled Tribe - 7.5%
        </h3>
        <h3 class="tgfmlt" style="color: #4b4b4b;">iii)10% of the total seats (as per CET Code) will be allocated as management quota (unless surrendered by the college/institute) seats as per policy of Govt. of NCT of Delhi in self financing institutions.
        </h3></br>
      </div></br>

                  </div>
              </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    
                </div>
            </div>
        </div>
   <!--   <div class="container">
         <div class="lowerb" style="background: #fff;padding:0;">
               <div class="row course-row shadow-none" style="background: #fff;">
                  <div class="col-md card-group border-0 shadow-none">
                     <div class="card sliders3-ed mr-10 ml-0 border-0 shadow-none" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <img src='images/c2.jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;"/>
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;>
                       <div class="card-body">
                             <p class="card-text">
                                 <p class="tab-heading tgfmlt" style="color: #4b4b4b;">MBA</p>
                                 <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">The two-year MBA programme is affiliated to Guru Gobind Singh Indraprastha University. 
                                        It is designed to impart relevant knowledge, attributes and skills 
                                        necessary for a successful career in the corporate world.</h3>
                                 <button class="tgfmlt read-button">Read More</button>
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
                                <p class="tab-heading tgfmlt" style="color: #4b4b4b;">MCA</p>
                                <h3 class="tgfmlt text-justify mr-0 pr-0" style="color: #4b4b4b;">The three-year MCA programme is affiliated to Guru Gobind Singh Indraprastha University. 
                                      The Programme inculcates essential skills demanded by the global software industry through an interactive learning process.</h3>
                                <button class="tgfmlt read-button">Read More</button>   
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                 <img src='images/cr2.jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;"/>
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
                                 <img src='images/c3.jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <p class="tab-heading tgfmlt" style="color: #4b4b4b;">BCA</p>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">The three-year BCA programme is affiliated to Guru Gobind Singh Indraprastha University. 
                                     It focuses on preparing students through innovative pedagogy for a 
                                     competitive professional environment, thoughtful inquiry, vigorous 
                                     skill development and insightful discourse among students.</h3>
                                <button class="tgfmlt read-button">Read More</button>
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
                               <p class="tab-heading tgfmlt" style="color: #4b4b4b;">BBA</p>
                               <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">The three-year BBA programme is affiliated to 
                                 Guru Gobind Singh Indraprastha University. It is designed to equip 
                                 students with strong conceptual knowledge and thinking skills to manage 
                                 integrated business operations.</h3>
                               <button class="tgfmlt read-button">Read More</button>
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                 <img src='images/c4.jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
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
                                <img src='images/c5.jpg' style="min-width:100%;width: 100%; height:40vh;object-position: bottom;" />
                             </p>
                       </div>
                     </div>
                     <div class="card sliders3-ed border-0" style="background: #fff;">
                       <div class="card-body">
                             <p class="card-text">
                                <p class="tab-heading tgfmlt" style="color: #4b4b4b;">B.Com.(H)</p>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">The three year B.Com(Hons.) programme is affiliated to Guru Gobind Singh Indraprastha University. 
                                        It is divided into six semesters. 
                                        The programme aims to provide to the students the knowledge, understanding and skills 
                                        that build the foundation for all disciplines of Commerce.</h3>
                                <button class="tgfmlt read-button">Read More</button>
                             </p>
                       </div>
                     </div>
                  </div>
              </div>
      </div>
      </div>-->
              <?php include('../social_new.php'); ?>    
                      <?php include('../footer_new.php');   ?>

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

   <!--   <script src="script.js"></script>
  <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script> -->
    <script src="tilt.js"></script>
  </body>
</html>
