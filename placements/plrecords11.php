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
.partner
{
	box-shadow: 0px 0px 5px;
	height: 120px;
	padding:20px;
	border-radius: 5px;	
	margin-bottom: 20px;
	width: 100%;
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
<div class="navigation">    
<?php include('../navbartop.php'); ?>
<?php include('navbarplacements.php'); 
?></div>


      <div style="height: 20vh;"></div>

<!-- MBA Placement Records   -->
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="mbarec">MBA Placement Records</h1>
          <div class="underline"></div>
          <div class="container">
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link show active" href="#2025" role="tab" data-toggle="tab">2023-25</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#2024" role="tab" data-toggle="tab">2022-24</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#2023" role="tab" data-toggle="tab">2021-23</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#2022" role="tab" data-toggle="tab">2020-22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#1921" role="tab" data-toggle="tab">2019-21</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#1820" role="tab" data-toggle="tab">2018-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#1719" role="tab" data-toggle="tab">2017-19</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#1618" role="tab" data-toggle="tab">2016-18</a>
                </li>-->
             </ul>
             
            <!-- Tab panes -->
            <div class="tab-content">
                
                <div role="tabpanel" class="tab-pane active show" id="2025">
                  <center>MBA : 2023 - 25 Placement Records</center>
                  <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                          </tr>
					    <tr> <td>03513703923	</td><td>	Adeeba Khan	</td> <td>	Infollion Research Services	</td></tr>
                        
                       	</tbody>
					</table>
				  <strong>Note</strong>: Currently Pursuing
              </div>
                
                
                
           
                
                <div role="tabpanel" class="tab-pane fade" id="2024">
                  <center>MBA : 2022 - 24 Placement Records</center>
                  <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                          </tr>
					    <tr> <td>	01113703922	</td><td>	Aakriti Chauhan	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	01713703922	</td><td>	Aman Yadav	</td> <td>	City Union Bank / Bharat Fincare	</td></tr>
                        <tr> <td>	02913703922	</td><td>	Ankur	</td> <td>	Bharat Fincare	</td></tr>
                        <tr> <td>	0073703922	</td><td>	Avneesh Kumar	</td> <td>	Bharat Fincare	</td></tr>
                        <tr> <td>	02513703922	</td><td>	Ayush Kumar	</td> <td>	HDFC Bank / ExamOnline	</td></tr>
                        <tr> <td>	00513703922	</td><td>	Deepanshu Tyagi	</td> <td>	Hive. AI	</td></tr>
                        <tr> <td>	03913703922	</td><td>	Hemant Berwal 	</td> <td>	Wipro Ltd.	</td></tr>
                        <tr> <td>	01813703922	</td><td>	Ishant Dhawan	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	03813703922	</td><td>	Kamini Ghosh	</td> <td>	JLL	</td></tr>
                        <tr> <td>	02113703922	</td><td>	Kirti Saini	</td> <td>	JLL Business Services	</td></tr>
                        <tr> <td>	00913703922	</td><td>	Manish Pal	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	00613703922	</td><td>	Manisha Chhilwal	</td> <td>	Hive. AI	</td></tr>
                        <tr> <td>	00213703922	</td><td>	Mohammad Saood	</td> <td>	ICICI Securities / Hive. AI	</td></tr>
                        <tr> <td>	00313703922	</td><td>	Mohd. Saami Naseer	</td> <td>	Axis Bank / InsightGeeks	</td></tr>
                        <tr> <td>	04213703922	</td><td>	Naitik Pandey	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	03413703922	</td><td>	Nidhi Pal	</td> <td>	Amazon	</td></tr>
                        <tr> <td>	03613703922	</td><td>	Paras Kumar	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	01013703922	</td><td>	Pooja Dhami	</td> <td>	InsightGeeks	</td></tr>
                        <tr> <td>	02713703922	</td><td>	Revanth J	</td> <td>	ICICI Securities / Hive AI	</td></tr>
                        <tr> <td>	01913703922	</td><td>	Ritik Bharti	</td> <td>	Planetspark	</td></tr>
                        <tr> <td>	03013703922	</td><td>	Riya Chaudhary	</td> <td>	Johnson Controls India	</td></tr>
                        <tr> <td>	01213703922	</td><td>	Sahil Batra	</td> <td>	INJ Partners	</td></tr>
                        <tr> <td>	35513703922	</td><td>	Saksham Rana	</td> <td>	ICICI Securities / City Union Bank	</td></tr>
                        <tr> <td>	03113703922	</td><td>	Tanu Jindal	</td> <td>	Viral Pitch	</td></tr>
                        <tr> <td>	03513703922	</td><td>	Urvashi Arora 	</td> <td>	JLL Business Services	</td></tr>
                        <tr> <td>	03313703922	</td><td>	Zahara Alavi	</td> <td>	Spectrum Events Pvt. Ltd.	</td></tr>

						</tbody>
					</table>
              </div>
                  
                
                
                
                
                
                
                <div role="tabpanel" class="tab-pane fade" id="2023">
                  <center>MBA : 2021 - 23 Placement Records</center>
                  <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                          </tr>
					    <tr> <td>	03213703921	</td><td>	Ankit Gupta	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	00913703921	</td><td>	Aakriti Kohli	</td> <td>	India Mortgage Guarantee Corporation	</td></tr>
                        <tr> <td>	02113703921	</td><td>	Charu Bhatia	</td> <td>	TecTree Consulting / India Mortgage Guarantee Corporation	</td></tr>
                        <tr> <td>	03913703921	</td><td>	Divya Tomar	</td> <td>	Innovate MR	</td></tr>
                        <tr> <td>	01013703921	</td><td>	Dristy Yadav	</td> <td>	ICICI Bank	</td></tr>
                        <tr> <td>	01213703921	</td><td>	Gurleen Kaur	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	02913703921	</td><td>	Harsh Shokeen	</td> <td>	HDFC Bank	</td></tr>
                        <tr> <td>	01713703921	</td><td>	Harsh Vardhan Dubey	</td> <td>	Federal Bank	</td></tr>
                        <tr> <td>	01413703921	</td><td>	Jahnvi Singh	</td> <td>	City Union Bank	</td></tr>
                        <tr> <td>	03613703921	</td><td>	Jatin Ahuja	</td> <td>	TecTree Consulting	</td></tr>
                        <tr> <td>	04313703921	</td><td>	Jatin Pandey	</td> <td>	Home First Finance Pvt. Ltd	</td></tr>
                        <tr> <td>	04513703921	</td><td>	Karan Verma	</td> <td>	Success Pact	</td></tr>
                        <tr> <td>	04713703921	</td><td>	Komal Chandra	</td> <td>	ICICI Bank	</td></tr>
                        <tr> <td>	00313703921	</td><td>	Kritika Kalra	</td> <td>	IMGC	</td></tr>
                        <tr> <td>	03813703921	</td><td>	Kush Kumar Singh 	</td> <td>	Byju's	</td></tr>
                        <tr> <td>	00413703921	</td><td>	Madhu Kumari	</td> <td>	WSP Consultants India Pvt. Ltd.	</td></tr>
                        <tr> <td>	01913703921	</td><td>	Manali Paul	</td> <td>	ICICI Bank	</td></tr>
                        <tr> <td>	01613703921	</td><td>	Mayank Chawla	</td> <td>	ICICI Bank	</td></tr>
                        <tr> <td>	02413703921	</td><td>	Mohd. Areeb	</td> <td>	India Mortgage Guarantee Corporation	</td></tr>
                        <tr> <td>	00113703921	</td><td>	Palak Rohilla	</td> <td>	Phronesis Partners/Prescient & Strateguic Intelligence Pvt. Ltd.	</td></tr>
                        <tr> <td>	04013703921	</td><td>	Piyush Tanwar	</td> <td>	India Mortgage Guarantee Corporation	</td></tr>
                        <tr> <td>	03413703921	</td><td>	Pragati Nayak	</td> <td>	Success Pact	</td></tr>
                        <tr> <td>	04413703921	</td><td>	Preeti Roy	</td> <td>	Innovate MR	</td></tr>
                        <tr> <td>	03513703921	</td><td>	Rida Khan	</td> <td>	ICICI Securities	</td></tr>
                        <tr> <td>	03713703921	</td><td>	Saurabh Prakash	</td> <td>	Innovate MR	</td></tr>
                        <tr> <td>	03013703921	</td><td>	Shubham Kumar	</td> <td>	Axis Bank	</td></tr>
                        <tr> <td>	02813703921	</td><td>	Shubham Singh	</td> <td>	Phronesis Partners 	</td></tr>
                        <tr> <td>	35213703921	</td><td>	Simarjeet Singh	</td> <td>	TecTree Consulting	</td></tr>
                        <tr> <td>	02313703921	</td><td>	Sonia Negi	</td> <td>	Xerox Degrees	</td></tr>
                        <tr> <td>	04113703921	</td><td>	Sparsh Saini	</td> <td>	Internshala	</td></tr>
                        <tr> <td>	03113703921	</td><td>	Sumit Pant	</td> <td>	ICICI Bank	</td></tr>
                        <tr> <td>	50213703921	</td><td>	Surbhi 	</td> <td>	Orbis Financial Corporation Limited	</td></tr>
                        <tr> <td>	35113703921	</td><td>	Tanya Singh	</td> <td>	ICICI Bank	</td></tr>
                        <tr> <td>	00813703921	</td><td>	Yuvakshi Goel	</td> <td>	Success Pact	</td></tr>
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade"  id="2022">
                  <center>MBA : 2020 - 22 Placement Records</center>
                  <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                          </tr>
					    <tr> <td>	00113703920	</td><td>	Aanchal Narula	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	00213703920	</td><td>	Aashish Gupta	</td><td>	Accenture	</td> </tr>
                        <tr> <td>	00413703920	</td><td>	Akanksha Yadav	</td><td>	HONO	</td> </tr>
                        <tr> <td>	00513703920	</td><td>	Akash Aggarwal	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	00813703920	</td><td>	Anjali Sharma	</td><td>	India Mortgage Guarantee Corporation (IMGC)	</td> </tr>
                        <tr> <td>	01013703920	</td><td>	Arpit Rai	</td><td>	City Union Bank	</td> </tr>
                        <tr> <td>	01113703920	</td><td>	Ashish Pandey	</td><td>	Toluna India	</td> </tr>
                        <tr> <td>	01513703920	</td><td>	Babita	</td><td>	Success Pact 	</td> </tr>
                        <tr> <td>	01913703920	</td><td>	Garima	</td><td>	Accenture	</td> </tr>
                        <tr> <td>	50213703920	</td><td>	Garvit Singh Shekhawat	</td><td>	Vmak Research & Services Pvt. Ltd.	</td> </tr>
                        <tr> <td>	35213703920	</td><td>	Harsh Chawla	</td><td>	Ernst & Young	</td> </tr>
                        <tr> <td>	35313703920	</td><td>	Himanshu Chaudhary	</td><td>	AU Small Finance Bank / HDFC Bank	</td> </tr>
                        <tr> <td>	02313703920	</td><td>	Kamal Kant Sharma	</td><td>	JLL India	</td> </tr>
                        <tr> <td>	02413703920	</td><td>	Khushboo Sindhi	</td><td>	Axis Bank / AU Small Finance Bank	</td> </tr>
                        <tr> <td>	35413703920	</td><td>	Kuljot Singh	</td><td>	JLL India	</td> </tr>
                        <tr> <td>	02613703920	</td><td>	Madalsa Aggarwal	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	02713703920	</td><td>	Mahima Kalra	</td><td>	Axis Bank	</td> </tr>
                        <tr> <td>	02813703920	</td><td>	Naman Sharma	</td><td>	PlanetSpark / Publicis Groupe	</td> </tr>
                        <tr> <td>	02913703920	</td><td>	Nitesh Khatri	</td><td>	JLL India	</td> </tr>
                        <tr> <td>	03013703920	</td><td>	Nitin Bhandari	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	03213703920	</td><td>	Pooja Ahlawat	</td><td>	Success Pact 	</td> </tr>
                        <tr> <td>	03413703920	</td><td>	Priya Dhingra	</td><td>	Accenture	</td> </tr>
                        <tr> <td>	35513703920	</td><td>	Priya Saxena	</td><td>	Jaro Education	</td> </tr>
                        <tr> <td>	03513703920	</td><td>	Rinkal Rana	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	03613703920	</td><td>	Rishabh Mishra	</td><td>	Success Pact 	</td> </tr>
                        <tr> <td>	03813703920	</td><td>	Saloni Tanwar	</td><td>	Institute of Chartered Accountants of India (ICAI)	</td> </tr>
                        <tr> <td>	04013703920	</td><td>	Sarthak Gupta	</td><td>	HCL	</td> </tr>
                        <tr> <td>	04113703920	</td><td>	Shivam Thapliyal	</td><td>	Kotak Life Insurance	</td> </tr>
                        <tr> <td>	04213703920	</td><td>	Shivani Singh	</td><td>	UpGrad	</td> </tr>
                        <tr> <td>	04313703920	</td><td>	Shreya Singh	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	04513703920	</td><td>	Somya Pahuja	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	04613703920	</td><td>	Sonal Kapoor	</td><td>	GreenTree Advisory Services Pvt. Ltd.	</td> </tr>
                        <tr> <td>	04713703920	</td><td>	Sonya Sharma	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	04913703920	</td><td>	Srishti	</td><td>	Accenture / ICICI Bank	</td> </tr>
                        <tr> <td>	05013703920	</td><td>	Vibhor Bhatnagar	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>	05113703920	</td><td>	Yogesh Kumar	</td><td>	UpGrad	</td> </tr>

						</tbody>
					</table>
				  
              </div>
              <div role="tabpanel" class="tab-pane fade" id="1921">
                 <center>MBA : 2019 - 21 Placement Records</center>
                 <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                          </tr>
						<tr> <td>00613703919</td><td>	Akanksha Sinha	</td><td>	India Mortgage Guarantee Corporation (IMGC)	</td> </tr>
                        <tr> <td>35313703919</td><td>	Ankur Anuraj Singh	</td><td>	DotPe / SRVA Education	</td> </tr>
                        <tr> <td>00913703919</td><td>	Disha Gahlot	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>00213703919</td><td>	Priyanka Shankar	</td><td>	DotPe / WNS Global 	</td> </tr>
                        <tr> <td>35113703919</td><td>	Shivam Gupta	</td><td>	ICICI Bank (PPO)	</td> </tr>
                        <tr> <td>00713703919</td><td>	Simranjeet Kaur	</td><td>	Blue Umbrella	</td> </tr>
                        <tr> <td>35213703919</td><td>	Ujjol Shome	</td><td>	Toluna India	</td> </tr>

						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="1820">
                  <center>MBA : 2018 - 20 Placement Records</center>
                  <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                           </tr>
						    <tr> <td>00113703918</td><td>	Aashi Sharma	</td><td>	ICICI Bank	</td> </tr>
                            <tr> <td>00213703918</td><td>	Aditi Saxena	</td><td>	IIFL	</td> </tr>
                            <tr> <td>00313703918</td><td>	Alex Kuriakose George	</td><td>	ICICI Bank	</td> </tr>
                            <tr> <td>40813703918</td><td>	Anil Thakur	</td><td>	Squareyards	</td> </tr>
                            <tr> <td>40513703918</td><td>	Anju Sharma	</td><td>	JLL India	</td> </tr>
                            <tr> <td>00613703918</td><td>	Binny Dureja	</td><td>	JLL India	</td> </tr>
                            <tr> <td>40113703918</td><td>	Deepesh	</td><td>	JLL India	</td> </tr>
                            <tr> <td>00713703918</td><td>	Diksha	</td><td>	JLL India	</td> </tr>
                            <tr> <td>35113703918</td><td>	Disha Taneja	</td><td>	Urban Clap	</td> </tr>
                            <tr> <td>00813703918</td><td>	Divya Singh	</td><td>	TO THE NEW	</td> </tr>
                            <tr> <td>00913703918</td><td>	Durgesh Uniyal	</td><td>	JLL India	</td> </tr>
                            <tr> <td>35213703918</td><td>	Ekta Sadana	</td><td>	S.M. Technology	</td> </tr>
                            <tr> <td>01113703918</td><td>	Gautam Kumar	</td><td>	SPACE India	</td> </tr>
                            <tr> <td>35313703918</td><td>	Geetanjali	</td><td>	Roinet Solution	</td> </tr>
                            <tr> <td>01213703918</td><td>	Gurpreet Kaur	</td><td>	Green Tree Advisory Services Pvt. Ltd.	</td> </tr>
                            <tr> <td>01413703918</td><td>	Jatin</td><td>	IndusInd Bank	</td> </tr>
                            <tr> <td>01513703918</td><td>	Jatin Pal Singh	</td><td>	JLL India	</td> </tr>
                            <tr> <td>01713703918</td><td>	Kajal Kalra	</td><td>	JLL India	</td> </tr>
                            <tr> <td>01813703918</td><td>	Kannupriya Kaushik	</td><td>	Green Tree Advisory Services Pvt. Ltd.	</td> </tr>
                            <tr> <td>01913703918</td><td>	Karan Dogra	</td><td>	ICICI Bank	</td> </tr>
                            <tr> <td>02013703918</td><td>	Komal Kaushik	</td><td>	JLL India	</td> </tr>
                            <tr> <td>02113703918</td><td>	Latika Shokeen	</td><td>	Concentrix	</td> </tr>
                            <tr> <td>02213703918</td><td>	Mahima Nair	</td><td>	WNS Global / JLL India	</td> </tr>
                            <tr> <td>02413703918</td><td>	Mansi Mahawar	</td><td>	ICICI Bank	</td> </tr>
                            <tr> <td>40213703918</td><td>	Pankhuri Shakargaye	</td><td>	Huawei / JLL India	</td> </tr>
                            <tr> <td>35413703918</td><td>	Pradhi Jain	</td><td>	ICE- Balaji	</td> </tr>
                            <tr> <td>02713703918</td><td>	Prateek Arya	</td><td>	Toluna India	</td> </tr>
                            <tr> <td>02813703918</td><td>	Preeti	</td><td>	Concentrix	</td> </tr>
                            <tr> <td>02913703918</td><td>	Preeti Kumari	</td><td>	WNS Global	</td> </tr>
                            <tr> <td>03013703918</td><td>	Rahul Seith	</td><td>	ICICI Bank	</td> </tr>
                            <tr> <td>03113703918</td><td>	Ridhima Arora	</td><td>	ICICI Bank	</td> </tr>
                            <tr> <td>03213703918</td><td>	Ritu Goyal	</td><td>	JLL India	</td> </tr>
                            <tr> <td>03413703918</td><td>	Rupali Chhabra	</td><td>	JLL India	</td> </tr>
                            <tr> <td>03513703918</td><td>	Saiby Jaiswal	</td><td>	TO THE NEW	</td> </tr>
                            <tr> <td>03613703918</td><td>	Shabnam Parveen	</td><td>	Transformatie Doorbraak Pvt. Ltd.	</td> </tr>
                            <tr> <td>03713703918</td><td>	Shekhar	</td><td>	SRVA Education / Toluna India	</td> </tr>
                            <tr> <td>35613703918</td><td>	Shruti Monga	</td><td>	Green Tree Advisory Services Pvt. Ltd.	</td> </tr>
                            <tr> <td>03813703918</td><td>	Shubham Kumar Yadav	</td><td>	Squareyards	</td> </tr>
                            <tr> <td>40613703918</td><td>	Sudhir Kumar Nagar	</td><td>	Squareyards	</td> </tr>
                            <tr> <td>04313703918</td><td>	Vaishali Gupta	</td><td>	FRANCHISE TRADE	</td> </tr>
                            <tr> <td>04413703918</td><td>	Vipul Gupta	</td><td>	WNS Global	</td> </tr>

						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="1719">
                 <center>MBA : 2017 - 19 Placement Records</center>
                 <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                           </tr>
						<tr> <td>00113703917</td><td>	Abhinav Madaan	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>35113703917</td><td>	Akash Tanwar	</td><td>	Secure Now	</td> </tr>
                        <tr> <td>00213703917</td><td>	Akshay Kumar Sarwan	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>50113703917</td><td>	Akshit Mathur	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>00313703917</td><td>	Akshta Jain	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>00413703917</td><td>	Anmol Sharma	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>40513703917</td><td>	Anushka Jain	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>50213703917</td><td>	Arpit	</td><td>	Secure Now	</td> </tr>
                        <tr> <td>00613703917</td><td>	Bhawna	</td><td>	Ericsson ARP / Stratemis HR Technologies Pvt. Ltd.	</td> </tr>
                        <tr> <td>00713703917</td><td>	Deepika Kumari	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>00813703917</td><td>	Deepika Verma	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>00913703917</td><td>	Deepti	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>01013703917</td><td>	Gentina George	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>01113703917</td><td>	Guneet Kaur	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>01213703917</td><td>	Gurmukh Singh	</td><td>	Secure Now	</td> </tr>
                        <tr> <td>01313703917</td><td>	Jatin Gupta	</td><td>	India Infoline Finance Limited	</td> </tr>
                        <tr> <td>01413703917</td><td>	Jyotsana Kullu	</td><td>	Elite Recuritment	</td> </tr>
                        <tr> <td>01513703917</td><td>	Kartik Seth	</td><td>	Square Yards	</td> </tr>
                        <tr> <td>35213703917</td><td>	Kirti Jaiswal	</td><td>	Bimlraj Outsourcing Pvt. Ltd.	</td> </tr>
                        <tr> <td>01613703917</td><td>	Lavisha Jain	</td><td>	Standardsservices.com	</td> </tr>
                        <tr> <td>01713703917</td><td>	Malvika Yadav	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>01813703917</td><td>	Manik Nagpal	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>35313703917</td><td>	Manpreet Kaur	</td><td>	Symmetrical Global Search Pvt. Ltd.	</td> </tr>
                        <tr> <td>01913703917</td><td>	Manpreet Kour	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>02013703917</td><td>	Mansha Ahuja	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>50413703917</td><td>	Muskan	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>50313703917</td><td>	Monika	</td><td>	Red Mango	</td> </tr>
                        <tr> <td>02113703917</td><td>	Neelam Negi	</td><td>	Symmetrical Global Search Pvt. Ltd.	</td> </tr>
                        <tr> <td>02213703917</td><td>	Nidhi Mehra	</td><td>	Square Yards	</td> </tr>
                        <tr> <td>02313703917</td><td>	Niharika Bhardwaj	</td><td>	Secure Now	</td> </tr>
                        <tr> <td>40213703917</td><td>	Parmeet Singh Gulati	</td><td>	Jaro Education	</td> </tr>
                        <tr> <td>02513703917</td><td>	Prerna Chhibba	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>02613703917</td><td>	Priya	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>02913703917</td><td>	Rahul Roheda	</td><td>	Shivani Creation	</td> </tr>
                        <tr> <td>35413703917</td><td>	Sahil Pawar	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>03113703917</td><td>	Sakshi Babbar	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>03213703917</td><td>	Sakshi Kukreti	</td><td>	Elite Recuritment	</td> </tr>
                        <tr> <td>03313703917</td><td>	Samarpreet Singh	</td><td>	ICICI Bank / IDFC First Bank	</td> </tr>
                        <tr> <td>03413703917</td><td>	Sanskriti Gairola	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>03513703917</td><td>	Sheetal	</td><td>	NIIT Ltd.	</td> </tr>
                        <tr> <td>35513703917</td><td>	Shiva Kaushik	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>03713703917</td><td>	Shourya Bhatia	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>40613703917</td><td>	Shubham Gogi Prasad	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>03813703917</td><td>	Shubham Saini	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>03913703917</td><td>	Shweta Bansal	</td><td>	News Corp VCCircle	</td> </tr>
                        <tr> <td>04013703917</td><td>	Srishti Bhatt	</td><td>	IndusInd Bank	</td> </tr>
                        <tr> <td>04113703917</td><td>	Sumit Dagar	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>04213703917</td><td>	Sunshita Ganjoo	</td><td>	Secure Now / Onactuate Software Consulting	</td> </tr>
                        <tr> <td>04413703917</td><td>	Vaibhav Gupta	</td><td>	Wipro Ltd. /Oyo	</td> </tr>
                        <tr> <td>35613703917</td><td>	Vandana Sony	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>04513703917</td><td>	Vishal Malhotra	</td><td>	ICICI Bank	</td> </tr>
                        <tr> <td>04613703917</td><td>	Vishal Yadav	</td><td>	ICICI Bank	</td> </tr>

						</tbody>
					</table>
              </div>
              <!--<div role="tabpanel" class="tab-pane fade" id="1618">
                  <center>MBA : 2016 - 18 Placement Records</center>
                  <table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                           </tr>
						<tr> <td>00113703916</td><td>	Aarushi Dua	</td><td>	India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>35213703916</td><td>	Aashita Chauhan	</td><td>	India Infoline Finance Ltd. / Alankit Limited	</td> </tr>
                        <tr> <td>00313703916</td><td>	Adarsh Kansal	</td><td>	H&R Block India Private Limited	</td> </tr>
                        <tr> <td>40313703916</td><td>	Aman Vaid	</td><td>	Alankit Limted	</td> </tr>
                        <tr> <td>00513703916</td><td>	Amandeep Grewal	</td><td>	Ceasefire Industries / HDFC Bank	</td> </tr>
                        <tr> <td>00613703916</td><td>	Amanpreet Kaur	</td><td>	Mansukh Securities	</td> </tr>
                        <tr> <td>00813703916</td><td>	Archit Kumar	</td><td>	Karvy Stock Broking	</td> </tr>
                        <tr> <td>01013703916</td><td>	Dalia Xavier	</td><td>	WNS Global Services	</td> </tr>
                        <tr> <td>01213703916</td><td>	Gaurav Sharma	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>35313703916</td><td>	Harneet Singh Oberoi	</td><td>	Ceasefire Industries	</td> </tr>
                        <tr> <td>01313703916</td><td>	Himanshi 	</td><td>	WNS Global Services	</td> </tr>
                        <tr> <td>01413703916</td><td>	Himanshu Saraswat	</td><td>	India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>01513703916</td><td>	Kajol Dhyani	</td><td>	Mansukh Securities	</td> </tr>
                        <tr> <td>01713703916</td><td>	Manoj Singh Kapkoti	</td><td>	India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>01813703916</td><td>	Manya	</td><td>	Zero1	</td> </tr>
                        <tr> <td>01913703916</td><td>	Masoom Mehta	</td><td>	British Telecom India / Randstad India	</td> </tr>
                        <tr> <td>02013703916</td><td>	Mohit Jain	</td><td>	KS ARCIS Outsourcing Pvt. Ltd. / Silver Skills India Pvt. Ltd.	</td> </tr>
                        <tr> <td>02113703916</td><td>	Mrityunjaya Baburao Hiremath	</td><td>	India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>02213703916</td><td>	Naveen Singh	</td><td>	India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>40113703916</td><td>	Nishant Kumar	</td><td>	Ceasefire Industries	</td> </tr>
                        <tr> <td>02313703916</td><td>	Parul Rana	</td><td>	Ceasefire Industries	</td> </tr>
                        <tr> <td>02413703916</td><td>	Payal Alagh	</td><td>	WNS Global Services	</td> </tr>
                        <tr> <td>02613703916</td><td>	Preeti Soi	</td><td>	Zero1	</td> </tr>
                        <tr> <td>02813703916</td><td>	Priya Sharma	</td><td>	Mansukh Securities	</td> </tr>
                        <tr> <td>02713703916</td><td>	Priya Sharma	</td><td>	HM Aviation (P) Ltd. / Genpact	</td> </tr>
                        <tr> <td>40213703916</td><td>	Purnima	</td><td>	Darwin Talent Seekers	</td> </tr>
                        <tr> <td>35413703916</td><td>	Rajat Sharma	</td><td>	Nirvana Solutions	</td> </tr>
                        <tr> <td>02913703916</td><td>	Ravi Kant	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>03013703916</td><td>	Ravjeet Singh	</td><td>	Ceasefire Industries	</td> </tr>
                        <tr> <td>03113703916</td><td>	Roopali Dhingra	</td><td>	Mansukh Securities / HDFC Bank	</td> </tr>
                        <tr> <td>03313703916</td><td>	Sahil Dhall	</td><td>	Byju’s	</td> </tr>
                        <tr> <td>03413703916</td><td>	Sai Krishna	</td><td>	Uma Enterprises	</td> </tr>
                        <tr> <td>03513703916</td><td>	Sakshi Chopra	</td><td>	Genpact / Zomato	</td> </tr>
                        <tr> <td>40613703916</td><td>	Shivam Kaushik	</td><td>	PIBM	</td> </tr>
                        <tr> <td>35513703916</td><td>	Shivani Yadav	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>03613703916</td><td>	Shreya Gupta	</td><td>	British Telecom India / Randstad India	</td> </tr>
                        <tr> <td>03713703916</td><td>	Shruti Sachdeva	</td><td>	Eldrok India	</td> </tr>
                        <tr> <td>04013703916</td><td>	Sidharth Sewani	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>04213703916</td><td>	Sumit Babbal	</td><td>	Acadecraft	</td> </tr>
                        <tr> <td>04413703916</td><td>	Swati Bisht	</td><td>	WNS Global Services	</td> </tr>
                        <tr> <td>04513703916</td><td>	Vaibhav Kohli	</td><td>	HDFC Bank / India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>40713703916</td><td>	Vaishnavi Sharma	</td><td>	India Infoline Finance Ltd.	</td> </tr>
                        <tr> <td>04713703916</td><td>	Yogender Rana	</td><td>	India Infoline Finance Ltd./ Alankit Limited	</td> </tr>
														
						</tbody>
					</table>
              </div>
            </div></h2>-->
              <!--
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">The IITM Industry I
              nstitute Partnership Centre (IIPC) was established in 2004 for enhancing interface 
              between the Institute and Industry. This centre identifies the industrial expectation and 
              promotes institutional preparation for meeting industrial needs by facilitating internship, 
              seminars, workshops, placement and various other industrial training programs. Industry 
              Institute partnership also reflects in equipping 
              faculty to latest practices and makes the students 
              industry-ready by providing exposure to current industry practices.</h2>
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">It helps students hone their 
              skills to adapt to changing technologies. The primary focus of IIPC is to interact with 
              major companies across different industries to establish partnership in near future. The 
              Central T & P Cell is committed to meet the career objectives of students and cater to 
              the Human Resource needs of Organizations interested in conducting campus interviews for placements of students passing out from IITM.</h2>
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">The objectives of the cell are:</h1>
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                  <div class="container" style="margin-left: 2em;">
                  <ul>
                      <li style="list-style-type: disc;">To arrange pre-placement training to the students.</li>
	                  <li style="list-style-type: disc;">To identify opportunities for student to do project work in Industries.</li>
	                  <li style="list-style-type: disc;">To encourage the department level tie-ups or MoUs with Industries for the mutual benefit.</li>
	                  <li style="list-style-type: disc;">To enrich the teaching learning process through identified industrial training / visit.</li>
	                  <li style="list-style-type: disc;">To invite industry experts for guest lectures, seminars and expertise sharing.</li>
	                  <li style="list-style-type: disc;">To assist the industry in the selection of suitable candidates to fill up job positions through campus interviews and provide career guidance to students.</li>
                  </ul></div>
              </h2> -->
           
              <div style="height: 10vh;"></div>
             
          </div>
          
          
        
          
          
      
        </div>
   
      </section>
<!-- BCOM Placement Records   -->  
 <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="bcomrec">B.Com(H) Placement Records</h1>
          <div class="underline"></div>
          <div class="container">
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link show active" href="#m2025" role="tab" data-toggle="tab">2022-25</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#m2024" role="tab" data-toggle="tab">2021-24</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#m2023" role="tab" data-toggle="tab">2020-23</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#m1922" role="tab" data-toggle="tab">2019-22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#m1821" role="tab" data-toggle="tab">2018-21</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#m1720" role="tab" data-toggle="tab">2017-20</a>
                </li>

             </ul>
             
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active show" id="m2025">
                  <center>B.Com(H) : 2022 - 25 Placement Records</center>
					<table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                           </tr>
                           <tr> <td>	02913788822	</td><td>	Ankita Sharma	</td> <td>	Wipro Ltd.	</td></tr>
                            <tr> <td>	00713788822	</td><td>	Kanishka Pruthi	</td> <td>	TrueBlue India / Wipro Ltd.	</td></tr>
                            <tr> <td>	70413788822	</td><td>	Tanya	</td> <td>	Wipro Ltd.	</td></tr>
                           
                            
                            




						</tbody>
					</table>
				  <strong>Note</strong>: Currently Pursuing
              </div>
              
              
              
              <div role="tabpanel" class="tab-pane fade" id="m2024">
                  <center>B.Com(H) : 2021 - 24 Placement Records</center>
					<table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                           </tr>
                           <tr> <td>	03621188821	</td><td>	Aastha Bhojwani	</td> <td>	Wipro Ltd.	</td></tr>
                            <tr> <td>	00321188821	</td><td>	Abhinav Malhotra 	</td> <td>	Wipro Ltd.	</td></tr>
                            <tr> <td>	04113788821	</td><td>	Anurag Singh 	</td> <td>	Wipro Ltd.	</td></tr>
                            <tr> <td>	03513788821	</td><td>	Ashmit Mahajan	</td> <td>	Wipro Ltd. / Amazon	</td></tr>
                            <tr> <td>	02221188821	</td><td>	Ayushi Bhardwaj	</td> <td>	JLL	</td></tr>
                            <tr> <td>	02121188821	</td><td>	Deepak Kansal	</td> <td>	Intellipat	</td></tr>
                            <tr> <td>	35221188821	</td><td>	Divyansh Chawla	</td> <td>	Hive.ai	</td></tr>
                            <tr> <td>	02813788821	</td><td>	Gunjan Garg	</td> <td>	City Union Bank	</td></tr>
                            <tr> <td>	03013788821	</td><td>	Harshit Khurana	</td> <td>	City Union Bank	</td></tr>
                            <tr> <td>	04613788821	</td><td>	Himanshu Tewatia	</td> <td>	R1 RCM	</td></tr>
                            <tr> <td>	04221188821	</td><td>	Jatin Sharma	</td> <td>	City Union Bank	</td></tr>
                            <tr> <td>	03821188821	</td><td>	K B Gokul Venkatraman	</td> <td>	JLL	</td></tr>
                            <tr> <td>	04121188821	</td><td>	Kanika Agarwal	</td> <td>	Intellipat	</td></tr>
                            <tr> <td>	02421188821	</td><td>	Kashish	</td> <td>	NatWest Group	</td></tr>
                            <tr> <td>	04013788821	</td><td>	Maanshikha Sangwan 	</td> <td>	Wipro Ltd.	</td></tr>
                            <tr> <td>	01313788821	</td><td>	Mugdha Bhalla	</td> <td>	City Union Bank	</td></tr>
                            <tr> <td>	01621188821	</td><td>	Neha Chauhan	</td> <td>	Amazon	</td></tr>
                            <tr> <td>	02921188821	</td><td>	Neha Goyal 	</td> <td>	R1 RCM	</td></tr>
                            <tr> <td>	00821188821	</td><td>	Nikhil Grover	</td> <td>	Epic Investment Partners	</td></tr>
                            <tr> <td>	00813788821	</td><td>	Pooja Arora	</td> <td>	Wipro Ltd. / JLL	</td></tr>
                            <tr> <td>	03313788821	</td><td>	Saith Sansar	</td> <td>	NatWest Group	</td></tr>
                            <tr> <td>	03813788821	</td><td>	Saksham Manav	</td> <td>	City Union Bank	</td></tr>
                            <tr> <td>	00313788821	</td><td>	Saloni Indra	</td> <td>	NatWest Group	</td></tr>
                            <tr> <td>	00721188821	</td><td>	Sambhav Kumar	</td> <td>	JLL	</td></tr>
                            <tr> <td>	01713788821	</td><td>	Shaurya Verma	</td> <td>	JLL	</td></tr>
                            <tr> <td>	02521188821	</td><td>	Vishakha Pant	</td> <td>	HCL Tech	</td></tr>
                            <tr> <td>	00713788821	</td><td>	Yash Goel	</td> <td>	Wipro Ltd.	</td></tr>
                            <tr> <td>	02913788821	</td><td>	Yash Kumar Singh	</td> <td>	Jaro Education	</td></tr>




						</tbody>
					</table>
				  
              </div>
              
              <div role="tabpanel" class="tab-pane fade" id="m2023">
                  <center>B.Com(H) : 2020 - 23 Placement Records</center>
					<table class="table">
						<tbody>
						    <tr>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                           </tr>
                           <tr> <td>	00221188820	</td><td>	ABHIMANYU BATRA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	00421188820	</td><td>	ANURAG PANDEY	</td> <td>	HDFC BANK / BYJU'S	</td></tr>
                            <tr> <td>	00521188820	</td><td>	ANURAG VAZIRANI 	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	00821188820	</td><td>	AYUSH ARYA 	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	01213788820	</td><td>	CHEHAK KHERA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	01121188820	</td><td>	DEEPTI SHARMA	</td> <td>	ZONEMEDIA	</td></tr>
                            <tr> <td>	01321188820	</td><td>	GAUTAM SINGH RAWAT 	</td> <td>	WIPRO LTD. / HDFC BANK	</td></tr>
                            <tr> <td>	02013788820	</td><td>	KARTIK MAHAJAN 	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
                            <tr> <td>	02313788820	</td><td>	KHUSHI KHANDELWAL	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	01921188820	</td><td>	KUNAL KUMAR 	</td> <td>	GENPACT	</td></tr>
                            <tr> <td>	02513788820	</td><td>	KUSHAGRA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	02121188820	</td><td>	MAYANK SHEKHAR	</td> <td>	CITY UNION BANK / BYJU'S	</td></tr>
                            <tr> <td>	02713788820	</td><td>	NAMAN DUTT	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	02813788820	</td><td>	NIDHI GUPTA	</td> <td>	HDFC BANK	</td></tr>
                            <tr> <td>	02913788820	</td><td>	NIDHI SINGH 	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	02521188820	</td><td>	PAYAL SINGHANIA 	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	03413788820	</td><td>	PRAPTI NARULA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	02821188820	</td><td>	PRAVIR BAWA 	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	03021188820	</td><td>	RAGHAV 	</td> <td>	WIPRO LTD. / GENPACT	</td></tr>
                            <tr> <td>	03713788820	</td><td>	RONIT SABHARWAL 	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	35513788820	</td><td>	ROUNAK CHOPRA	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	03821188820	</td><td>	SHUBHAM BHARGAVA	</td> <td>	HDFC BANK / BYJU'S	</td></tr>
                            <tr> <td>	04213788820	</td><td>	SURYANSH KAUSHIK	</td> <td>	CITY UNION BANK / FEDERAL BANK	</td></tr>
                            <tr> <td>	04313788820	</td><td>	SUYASH DUBEY	</td> <td>	BYJU'S	</td></tr>
                            <tr> <td>	04413788820	</td><td>	TANMAY	</td> <td>	CITY UNION BANK / FEDERAL BANK	</td></tr>
                            <tr> <td>	04221188820	</td><td>	TITHI CHANDA 	</td> <td>	PHRONESIS PARTNERS PTE LTD.	</td></tr>
                            <tr> <td>	35521188820	</td><td>	URVASHI SALUJA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	04513788820	</td><td>	UTKARSH	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	04713788820	</td><td>	VANSHIKA SAXENA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	05113788820	</td><td>	YUKTA PASRICHA 	</td> <td>	JARO EDUCATION	</td></tr>
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="m1922">
                  <center>B.Com(H) : 2019 - 22 Placement Records</center>
					<table class="table">
						<tbody>
                      <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						<tr> <td>	00421188819 	</td><td>	Aakash Sharma	</td><td>	Natwest Group (RBS)	</td> </tr>
                            <tr> <td>	04121188819 	</td><td>	Aarushi chauhan	</td><td>	Natwest Group (RBS)	</td> </tr>
                            <tr> <td>	04321188819 	</td><td>	Aditya Choudhary	</td><td>	Natwest Group (RBS)	</td> </tr>
                            <tr> <td>	03221188819 	</td><td>	Akshit Yadav	</td><td>	AU Small Finance Bank	</td> </tr>
                            <tr> <td>	01221188819 	</td><td>	Aman Pandey	</td><td>	Jaro Education / HDFC Bank	</td> </tr>
                            <tr> <td>	01121188819 	</td><td>	Ashish Khatri	</td><td>	Amazon India	</td> </tr>
                            <tr> <td>	02813788819 	</td><td>	Bhabya	</td><td>	Upgrad	</td> </tr>
                            <tr> <td>	04221188819 	</td><td>	Bhanu Nagpal 	</td><td>	JLL	</td> </tr>
                            <tr> <td>	01313788819 	</td><td>	Bhuvan Sahgal	</td><td>	HDFC Bank	</td> </tr>
                            <tr> <td>	02513788819	</td><td>	Bibhav Kirti Choudhary	</td><td>	Natwest Group (RBS)	</td> </tr>
                            <tr> <td>	35613788819 	</td><td>	Charu khanna 	</td><td>	Publicis Groupe	</td> </tr>
                            <tr> <td>	03913788819 	</td><td>	Hardik Mediratta	</td><td>	Natwest Group (RBS)	</td> </tr>
                            <tr> <td>	04613788819 	</td><td>	Harsh Sharma	</td><td>	JLL	</td> </tr>
                            <tr> <td>	04113788819 	</td><td>	Muskan Tiwari	</td><td>	PwC India	</td> </tr>
                            <tr> <td>	00821188819 	</td><td>	Rhea Thapar	</td><td>	Jaro Education	</td> </tr>
                            <tr> <td>	02021188819 	</td><td>	Sajan vij	</td><td>	Natwest Group (RBS)	</td> </tr>
                            <tr> <td>	35221188819 	</td><td>	Saksham Arora	</td><td>	Wipro Ltd.	</td> </tr>
                            <tr> <td>	00921188819 	</td><td>	Sharanjot Singh	</td><td>	Jaro Education	</td> </tr>
                            <tr> <td>	02713788819 	</td><td>	Tushar Garg	</td><td>	JLL	</td> </tr>
                            <tr> <td>	02913788819 	</td><td>	Veeral Batham	</td><td>	JLL	</td> </tr>
                            <tr> <td>	05013788819 	</td><td>	Vinay Garg	</td><td>	AU Small Finance Bank / ImpactGuru	</td> </tr>
                            <tr> <td>	35421188819 	</td><td>	Vinay Sejwal	</td><td>	Wipro Ltd.	</td> </tr>
                            <tr> <td>	00721188819 	</td><td>	Yamini Sharma	</td><td>	TrueBlue India / JLL	</td> </tr>
                            <tr> <td>	03313788819 	</td><td>	Yash dhiman	</td><td>	JLL	</td> </tr>
                            <tr> <td>	01321188819 	</td><td>	Yash Saluja	</td><td>	PwC India	</td> </tr>
                            <tr> <td>	35113788819 	</td><td>	Yashica Garg	</td><td>	Incedo Technologies / Natwest Group (RBS)	</td> </tr>

						
                        

						</tbody>
					</table>
				  
              </div>
              <div role="tabpanel" class="tab-pane fade" id="m1821">
                 <center>B.Com(H) : 2018 - 21 Placement Records</center>
					<table class="table">
						<tbody>
					  <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr> 
                        <tr> <td>00313788818</td><td>	Aditya Bhalla	</td><td>	IBM	</td> </tr>
						<tr> <td>00113788818</td><td>	Anchal Sharma	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>00813788818</td><td>	Anupama Madhu	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>01313788818</td><td>	Ayush Sharma	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>01413788818</td><td>	Ayushi Mahajan	</td><td>	NatWest Group (previously RBS)	</td> </tr>
                        <tr> <td>01513788818</td><td>	Bhumika  	</td><td>	Square Yards	</td> </tr>
                        <tr> <td>01613788818</td><td>	Bhumika Bhatia	</td><td>	NatWest Group (previously RBS) / Wipro Ltd.	</td> </tr>
                        <tr> <td>01713788818</td><td>	Dhruvika	</td><td>	British Telecom	</td> </tr>
                        <tr> <td>01813788818</td><td>	Divya Puri	</td><td>	British Telecom	</td> </tr>
                        <tr> <td>35413788818</td><td>	Kritika Kalra	</td><td>	Square Yards	</td> </tr>
                        <tr> <td>40513788818</td><td>	Madhav Kanotra	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>42313788817</td><td>	Nikhil Manchanda	</td><td>	British Telecom	</td> </tr>
                        <tr> <td>02613788818</td><td>	Parth Vats	</td><td>	British Telecom / Square Yards	</td> </tr>
                        <tr> <td>02713788818</td><td>	Rishita Gaba	</td><td>	PlanetSpark	</td> </tr>
                        <tr> <td>03313788818</td><td>	Shrishti Bisht 	</td><td>	NatWest Group (previously RBS)	</td> </tr>
                        <tr> <td>03513788818</td><td>	Taranjot Singh	</td><td>	NatWest Group (previously RBS)	</td> </tr>
                        

						</tbody>					
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="m1720">
                  <center>B.Com(H) : 2017 - 20 Placement Records</center>
					<table class="table">
						<tbody>
						     <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
                      <tr> <td>00213788817</td><td>	Aditya Kumar	</td><td>	Capgemini	</td> </tr>
                      <tr> <td>50113788817</td><td>	Khaja Rahat Noor	</td><td>	JLL India	</td> </tr>
                      <tr> <td>01413788817</td><td>	Naisergika Negi	</td><td>	Wipro HR Services Pvt. Ltd.	</td> </tr>
                      <tr> <td>41113788817</td><td>	Neha Sawhney	</td><td>	NatWest Group (previously RBS)	</td> </tr>
                      <tr> <td>01513788817</td><td>	Piyush Kathpalia	</td><td>	Capgemini	</td> </tr>
                      <tr> <td>01813788817</td><td>	Priya Singh	</td><td>	Capgemini	</td> </tr>
                      <tr> <td>41713788817</td><td>	Tapur Arora	</td><td>	IBM India	</td> </tr>
						<tr> <td>40113788817</td><td>	Yashika Gulati	</td><td>	IBM India	</td> </tr>
                        
                        
                        
                        
                        
                        
                        

						</tbody>
					</table>
              </div>

            </div></h2>
              
           
              <div style="height: 10vh;"></div>
             
          </div>
          
          
        
          
          
      
        </div>
   
      </section>
<!-- BBA Placement Records   -->
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="bbarec">BBA Placement Records</h1>
          <div class="underline"></div>
          <div class="container">
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link show active" href="#b2025" role="tab" data-toggle="tab">2022-25</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#b2024" role="tab" data-toggle="tab">2021-24</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#b2023" role="tab" data-toggle="tab">2020-23</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#b1922" role="tab" data-toggle="tab">2019-22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#b1821" role="tab" data-toggle="tab">2018-21</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#b1720" role="tab" data-toggle="tab">2017-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#b1619" role="tab" data-toggle="tab">2016-19</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#b1518" role="tab" data-toggle="tab">2015-18</a>
                </li>-->
             </ul>
             
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active show" id="b2025">
                  <center>BBA : 2022 - 25 Placement Records</center>
                  	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						       <tr> <td>	10213701722	</td><td>	Abhav Vijay Gupta	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	09321101722	</td><td>	Abhishek Nair	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	08321101722	</td><td>	Anurag Bhatt	</td> <td>	Hike Education	</td></tr>
                                 <tr> <td>	07113701722	</td><td>	Dushyant Chhabra	</td> <td>	Hike Education	</td></tr>
                                 <tr> <td>	02813701722	</td><td>	Geetika Sharma	</td> <td>	Hike Education	</td></tr>
                                 <tr> <td>	35213701722	</td><td>	Kush Sharma	</td> <td>	TrueBlue India	</td></tr>
                                 <tr> <td>	09313701722	</td><td>	Lakshita Sharma	</td> <td>	TrueBlue India	</td></tr>
                                 <tr> <td>	01021101722	</td><td>	Lavanya Sharma	</td> <td>	AXPONENT	</td></tr>
                                 <tr> <td>	04313701722	</td><td>	Manya Wadhwa	</td> <td>	TrueBlue India / Wipro Ltd.	</td></tr>
                                 <tr> <td>	07713701722	</td><td>	Mehak Bablani	</td> <td>	TrueBlue India	</td></tr>
                                 <tr> <td>	01513701722	</td><td>	Parneet Kaur	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	05313701722	</td><td>	Prisha Singh	</td> <td>	AXPONENT	</td></tr>
                                 <tr> <td>	05613701722	</td><td>	Priyal Verma	</td> <td>	TrueBlue India / Wipro Ltd.	</td></tr>
                                 <tr> <td>	70513701722	</td><td>	Smriti Juneja	</td> <td>	TrueBlue India	</td></tr>
                                 <tr> <td>	70321101722	</td><td>	Vanshika Mahajan	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	08013701722	</td><td>	Vinti Yadav	</td> <td>	Wipro Ltd.	</td></tr>

                              
                                
						</tbody>
					</table>
				  <strong>Note</strong>: Currently Pursuing
              </div>
               
                <div role="tabpanel" class="tab-pane fade" id="b2024">
                  <center>BBA : 2021 - 24 Placement Records</center>
                  	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						      <tr> <td>	10121101721	</td><td>	ANKIT KUMAR THAKUR	</td> <td>	NatWest Group	</td></tr>
                                <tr> <td>	09421101721	</td><td>	ANUSHIKA GARG	</td> <td>	Wipro Ltd. / AON Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	36613701721	</td><td>	ANUSHKA TYAGI	</td> <td>	AoN Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	08713701721	</td><td>	ARLEEN KAUR	</td> <td>	Incedo	</td></tr>
                                <tr> <td>	07121101721	</td><td>	ARSHIT BHATNAGAR 	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	00621101721	</td><td>	ARYAN CHUGH	</td> <td>	Wipro Ltd. / JLL	</td></tr>
                                <tr> <td>	36213701721	</td><td>	ARYAN SINGH	</td> <td>	AoN Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	13613701721	</td><td>	ASSNA SAKSHI 	</td> <td>	AoN Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	07613701721	</td><td>	BHUMIKA JAIN	</td> <td>	City Union Bank	</td></tr>
                                <tr> <td>	08321101721	</td><td>	CHETAN KAILA	</td> <td>	Incedo / NAB (National Australia Bank)	</td></tr>
                                <tr> <td>	00513701721	</td><td>	DEEKSHA BISHT	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	03613701721	</td><td>	DIVYANSH GUPTA	</td> <td>	Epic Investment Partners	</td></tr>
                                <tr> <td>	08813701721	</td><td>	GEETIKA	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	01713701721	</td><td>	GUNGUN DHINGRA	</td> <td>	JLL / AoN Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	06613701721	</td><td>	HARGUN SINGH ARORA	</td> <td>	Amazon	</td></tr>
                                <tr> <td>	35413701721	</td><td>	IHANSHU BHOLA	</td> <td>	British Telecom	</td></tr>
                                <tr> <td>	01221101721	</td><td>	ISHIKA TANWAR	</td> <td>	AoN Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	15713701721	</td><td>	JAHANVI	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	01313701721	</td><td>	JASMINE ARORA 	</td> <td>	City Union Bank / R1 RCM	</td></tr>
                                <tr> <td>	07713701721	</td><td>	JIYA BAJAJ	</td> <td>	NatWest Group	</td></tr>
                                <tr> <td>	01921101721	</td><td>	KANISHKA NAGPAL	</td> <td>	NatWest Group	</td></tr>
                                <tr> <td>	36313701721	</td><td>	KHUSHI RAWAT	</td> <td>	HCL Tech	</td></tr>
                                <tr> <td>	09021101721	</td><td>	KRISHI PASSI	</td> <td>	JLL	</td></tr>
                                <tr> <td>	10113701721	</td><td>	KRITI GUPTA	</td> <td>	Wipro Ltd. / HCL Tech.	</td></tr>
                                <tr> <td>	02513701721	</td><td>	KRITIKA KAIN	</td> <td>	British Telcom	</td></tr>
                                <tr> <td>	15613701721	</td><td>	KUMKUM PAL	</td> <td>	TrueBlue India	</td></tr>
                                <tr> <td>	05721101721	</td><td>	MANISH KUMAR 	</td> <td>	R1 RCM	</td></tr>
                                <tr> <td>	02413701721	</td><td>	MANISH RAWAT	</td> <td>	JLL	</td></tr>
                                <tr> <td>	02013701721	</td><td>	MANSHA JAIN	</td> <td>	Wipro Ltd. / CASITA	</td></tr>
                                <tr> <td>	02813701721	</td><td>	MUSKAN PANJWANI 	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	05221101721	</td><td>	NAMAN MEHTA	</td> <td>	City Union Bank	</td></tr>
                                <tr> <td>	01121101721	</td><td>	NAMAN SHARMA	</td> <td>	Jaro Education	</td></tr>
                                <tr> <td>	05213701721	</td><td>	NAYNA TANWAR	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	04321101721	</td><td>	POOJA MAHANOT	</td> <td>	Wipro Ltd. / Capgemini	</td></tr>
                                <tr> <td>	36713701721	</td><td>	POOJA PURI	</td> <td>	Amazon	</td></tr>
                                <tr> <td>	13113701721	</td><td>	PRABHJOT SINGH	</td> <td>	City Union Bank	</td></tr>
                                <tr> <td>	09321101721	</td><td>	PRATHAM DHINGRA 	</td> <td>	R1 RCM	</td></tr>
                                <tr> <td>	10513701721	</td><td>	PRATHAM VADHWA	</td> <td>	Hive.AI 	</td></tr>
                                <tr> <td>	00313701721	</td><td>	PREETI DEB	</td> <td>	Intellipaat	</td></tr>
                                <tr> <td>	35313701721	</td><td>	PRIYANSHI DESWAL 	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	09613701721	</td><td>	PRIYANSHU PRASAD	</td> <td>	JLL	</td></tr>
                                <tr> <td>	05821101721	</td><td>	PUSHKAR JAIN	</td> <td>	City Union Bank	</td></tr>
                                <tr> <td>	05113701721	</td><td>	RAHUL KAINTH	</td> <td>	UNIQLO INDIA	</td></tr>
                                <tr> <td>	13013701721	</td><td>	RAVI KANT SHARMA	</td> <td>	Hive.AI 	</td></tr>
                                <tr> <td>	12213701721	</td><td>	RENUKA	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	08021101721	</td><td>	ROHAN KUMAR	</td> <td>	Federal Bank	</td></tr>
                                <tr> <td>	03521101721	</td><td>	SANCHIT SINGHAL	</td> <td>	Wipro Ltd. / JLL	</td></tr>
                                <tr> <td>	50121101721	</td><td>	SARTHAK GABA	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	12113701721	</td><td>	SARTHAK RAWAT	</td> <td>	NatWest Group	</td></tr>
                                <tr> <td>	06713701721	</td><td>	SHAGUN VAISHNAV 	</td> <td>	Wipro Ltd.	</td></tr>
                                <tr> <td>	04921101721	</td><td>	SHALEEN VATS	</td> <td>	Incedo	</td></tr>
                                <tr> <td>	11913701721	</td><td>	SHIVANSH SACHDEVA	</td> <td>	R1 RCM	</td></tr>
                                <tr> <td>	00713701721	</td><td>	SIMRAN KHURANA	</td> <td>	NAB (National Australia Bank)	</td></tr>
                                <tr> <td>	04313701721	</td><td>	TANYA BHAYANA	</td> <td>	JLL	</td></tr>
                                <tr> <td>	13513701721	</td><td>	TARIKA NANDWANI 	</td> <td>	PlanetSpark	</td></tr>
                                <tr> <td>	07213701721	</td><td>	UMANG KUKREJA	</td> <td>	AoN Consulting Pvt. Ltd.	</td></tr>
                                <tr> <td>	05313701721	</td><td>	VASUDHA	</td> <td>	Wipro Ltd. / JLL	</td></tr>
                                <tr> <td>	04221101721	</td><td>	VED PRAKASH 	</td> <td>	City Union Bank	</td></tr>
                                <tr> <td>	00521101721	</td><td>	VIDHI	</td> <td>	NatWest Group	</td></tr>
                                <tr> <td>	10013701721	</td><td>	VISHAKHA	</td> <td>	PlanetSpark / Hive.AI	</td></tr>
                                <tr> <td>	07321101721	</td><td>	YASH SINGH NEGI	</td> <td>	JLL	</td></tr>
						</tbody>
					</table>
				  
              </div>
                <div role="tabpanel" class="tab-pane fade" id="b2023">
                  <center>BBA : 2020 - 23 Placement Records</center>
                  	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						    <tr> <td>	00113701720	</td><td>	AANTARIKSH MALHOTRA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	00121101720	</td><td>	AASHRIT MALIK	</td> <td>	CAREER LAUNCHER / MICROLAND	</td></tr>
                            <tr> <td>	00313701720	</td><td>	ABHISHEK GUPTA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	00521101720	</td><td>	ADITI BANSAL	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	00621101720	</td><td>	ADITYA GUPTA 	</td> <td>	ZONEMEDIA	</td></tr>
                            <tr> <td>	00721101720	</td><td>	ADITYA GURUNG	</td> <td>	BYJU'S	</td></tr>
                            <tr> <td>	00821101720	</td><td>	AJAY PAL	</td> <td>	CITY UNION BANK / ZONEMEDIA	</td></tr>
                            <tr> <td>	00921101720	</td><td>	AKASH SRIVASTAVA	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	01121101720	</td><td>	AMIT AGGARWAL	</td> <td>	NTT DATA	</td></tr>
                            <tr> <td>	01221101720	</td><td>	ANISH GOEL	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	01321101720	</td><td>	ANKIT GOMBER	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	01113701720	</td><td>	ANKIT SHARMA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	01421101720	</td><td>	ANKIT SURYAN	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	01213701720	</td><td>	ANMOL ROHILLA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	35413701720	</td><td>	ANSH BHARDWAJ	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	01521101720	</td><td>	ANSHIKA ARORA	</td> <td>	GENPACT	</td></tr>
                            <tr> <td>	01513701720	</td><td>	ANUJ ARORA	</td> <td>	NTT DATA	</td></tr>
                            <tr> <td>	01713701720	</td><td>	ARPIT CHHABRA	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	01721101720	</td><td>	ARYAN AGGARWAL	</td> <td>	PHRONESIS PARTNERS PTE LTD.	</td></tr>
                            <tr> <td>	01921101720	</td><td>	ARYAN SHARMA 	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	02013701720	</td><td>	ASHISH SANGWAN	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	02213701720	</td><td>	ASHITA KAUNDAL	</td> <td>	GREEN TREE ADVISORY	</td></tr>
                            <tr> <td>	02021101720	</td><td>	ATUL KUMAR	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	02313701720	</td><td>	AYUSH MALIK	</td> <td>	GENPACT / UPGRAD	</td></tr>
                            <tr> <td>	02121101720	</td><td>	BAVNEET SINGH 	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	02221101720	</td><td>	BHAVYA BANSAL	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	02321101720	</td><td>	BHAVYA KAPOOR	</td> <td>	GENPACT	</td></tr>
                            <tr> <td>	02413701720	</td><td>	BHOOMI GUPTA	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	02521101720	</td><td>	CHARCHIT AGGRAWAL	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	02513701720	</td><td>	CHETNA MONGA	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	02613701720	</td><td>	DARSHANA CHAUDHARY	</td> <td>	GREEN TREE ADVISORY	</td></tr>
                            <tr> <td>	02721101720	</td><td>	DEEPANSHU BHARDWAJ	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	02913701720	</td><td>	DHRUV MAURYA	</td> <td>	NTT DATA	</td></tr>
                            <tr> <td>	03113701720	</td><td>	DIKSHA GERLA	</td> <td>	CLAIRVOLEX	</td></tr>
                            <tr> <td>	03221101720	</td><td>	GAURI JAGGA	</td> <td>	ZONEMEDIA	</td></tr>
                            <tr> <td>	03713701720	</td><td>	GUNJAN RAMDEY	</td> <td>	CLAIRVOLEX	</td></tr>
                            <tr> <td>	03813701720	</td><td>	GURLEEN KAUR	</td> <td>	CASITA	</td></tr>
                            <tr> <td>	04113701720	</td><td>	HARSH TYAGI	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	04213701720	</td><td>	HARSHIT BATRA	</td> <td>	UPGRAD	</td></tr>
                            <tr> <td>	04413701720	</td><td>	HIMANSHI GUPTA	</td> <td>	NTT DATA	</td></tr>
                            <tr> <td>	04513701720	</td><td>	HIMANSHI TULSANI 	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	04613701720	</td><td>	ISHA SINGH	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	03821101720	</td><td>	ISHAN VIJAY VATSAL	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	03921101720	</td><td>	ISHIKA BANSAL 	</td> <td>	BYJU'S	</td></tr>
                            <tr> <td>	04813701720	</td><td>	KASHISH	</td> <td>	IGT SOLUTIONS	</td></tr>
                            <tr> <td>	05313701720	</td><td>	KRISHIKA KATARIA	</td> <td>	BINDING MINDS	</td></tr>
                            <tr> <td>	04521101720	</td><td>	MAHAK RAJPUT 	</td> <td>	BYJU'S	</td></tr>
                            <tr> <td>	04721101720	</td><td>	MANAV GUPTA	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	05813701720	</td><td>	MANDEEP SINGH BHATI	</td> <td>	BINDING MINDS	</td></tr>
                            <tr> <td>	04921101720	</td><td>	MARVIN KHERA	</td> <td>	HDFC BANK	</td></tr>
                            <tr> <td>	05221101720	</td><td>	MUSKAN ARORA	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	35621101720	</td><td>	MUSKAN RAJPAL	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	06313701720	</td><td>	NIKHIL SINGH BISHT	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	06613701720	</td><td>	NISHTHA MAKKER	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	05521101720	</td><td>	NITIN KUMAR	</td> <td>	CAREER LAUNCHER	</td></tr>
                            <tr> <td>	05621101720	</td><td>	NIVEDITA TRIPATHY	</td> <td>	GENPACT	</td></tr>
                            <tr> <td>	05821101720	</td><td>	PARAG NIMJE	</td> <td>	BRITISH TELECOM	</td></tr>
                            <tr> <td>	06913701720	</td><td>	PRACHI PRIYA	</td> <td>	HDFC BANK	</td></tr>
                            <tr> <td>	06121101720	</td><td>	PRIYANSHU LAKRA	</td> <td>	CITY UNION BANK / FEDERAL BANK	</td></tr>
                            <tr> <td>	07213701720	</td><td>	PULKIT GUPTA	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	07313701720	</td><td>	RAGHAV ANEJA	</td> <td>	NTT DATA	</td></tr>
                            <tr> <td>	07121101720	</td><td>	SAKSHI SINHA	</td> <td>	GREEN TREE ADVISORY	</td></tr>
                            <tr> <td>	36013701720	</td><td>	SANA MONGA	</td> <td>	CVENT	</td></tr>
                            <tr> <td>	08513701720	</td><td>	SANJANA GUGNANI	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	07621101720	</td><td>	SARTHAK MALIK	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	08713701720	</td><td>	SAUHARD SHANKAR SAHA	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	09113701720	</td><td>	SHREYANSH BHAGWAT	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
                            <tr> <td>	09121101720	</td><td>	UJJWAL GAUTAM	</td> <td>	BINDING MINDS / UPGRAD	</td></tr>
                            <tr> <td>	09321101720	</td><td>	UTKARSH MAGOO	</td> <td>	JLL INDIA	</td></tr>
                            <tr> <td>	10013701720	</td><td>	UTTKKARSH CHANANA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	09421101720	</td><td>	VAIBHAV RAI	</td> <td>	CLAIRVOLEX	</td></tr>
                            <tr> <td>	09521101720	</td><td>	VANSH KAPOOR	</td> <td>	NATWEST	</td></tr>
                            <tr> <td>	09921101720	</td><td>	VISHESH VERMA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	10313701720	</td><td>	YASH SINGH LINGWAL	</td> <td>	NATWEST	</td></tr>
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="b1922">
                  <center>BBA : 2019 - 22 Placement Records</center>
                  	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						<tr> <td>	01213701719	</td><td>	Anish Mutreja	</td><td>	TrueBlue India	</td> </tr>
                        <tr> <td>	07813701719	</td><td>	Archie Gupta 	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	03113701719	</td><td>	Arjun Singh	</td><td>	JLL / Amazon India 	</td> </tr>
                        <tr> <td>	00721101719	</td><td>	Arpit Jain	</td><td>	Polestar Solutions & Services	</td> </tr>
                        <tr> <td>	08121101719	</td><td>	Aryan Dawar	</td><td>	GreenTree Advisory Services	</td> </tr>
                        <tr> <td>	04213701719	</td><td>	Avishi Gupta	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	36121101719	</td><td>	Bhawna Taneja	</td><td>	City Union Bank	</td> </tr>
                        <tr> <td>	35813701719	</td><td>	Deepanshu	</td><td>	Wise FinServ	</td> </tr>
                        <tr> <td>	07221101719	</td><td>	Disha Ahlawat	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	05413701719	</td><td>	Divij Chhabra	</td><td>	Wipro Ltd. / ARCHER & BULL	</td> </tr>
                        <tr> <td>	09113701719	</td><td>	Divyam Suri	</td><td>	Jaro Education	</td> </tr>
                        <tr> <td>	07313701719	</td><td>	Divyansh Khurana	</td><td>	JLL	</td> </tr>
                        <tr> <td>	06713701719	</td><td>	Diya Vinaik	</td><td>	TravClan	</td> </tr>
                        <tr> <td>	02413701719	</td><td>	Garv Julka	</td><td>	Upgrad / Publicis Global Delivery 	</td> </tr>
                        <tr> <td>	05813701719	</td><td>	Gurman Singh Chawla	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	08313701719	</td><td>	Harsh Sharma	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	01821101719	</td><td>	Harshit Gupta	</td><td>	HDFC Bank	</td> </tr>
                        <tr> <td>	00713701719	</td><td>	Hemant Dhasmana	</td><td>	JLL	</td> </tr>
                        <tr> <td>	04121101719	</td><td>	Himansh Arora	</td><td>	Byju's	</td> </tr>
                        <tr> <td>	09821101719	</td><td>	Hitesh Manocha	</td><td>	TrueBlue India	</td> </tr>
                        <tr> <td>	09913701719	</td><td>	Ishika Singh	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	06913701719	</td><td>	Jayshree Biswal	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	00221101719	</td><td>	Kavya Joshi	</td><td>	Clevernist	</td> </tr>
                        <tr> <td>	03821101719	</td><td>	Khyati Arora	</td><td>	Wise FinServ / AU Small Finance Bank	</td> </tr>
                        <tr> <td>	00413701719	</td><td>	Kritika Chauhan	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	06313701719	</td><td>	Malika Arora	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	02021101719	</td><td>	Manya	</td><td>	TrueBlue India 	</td> </tr>
                        <tr> <td>	00813701719	</td><td>	Mayank Kathuria	</td><td>	Wipro Ltd. / Clevernist	</td> </tr>
                        <tr> <td>	07821101719	</td><td>	Mayank Makkar	</td><td>	Incedo Technologies	</td> </tr>
                        <tr> <td>	04721101719	</td><td>	Meenal Bansal	</td><td>	Jaro Education / Amazon India	</td> </tr>
                        <tr> <td>	35721101719	</td><td>	Mehak Sharma 	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	08113701719	</td><td>	Mukul Kharb	</td><td>	Wise FinServ	</td> </tr>
                        <tr> <td>	03313701719	</td><td>	Nushant Sethi	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	07921101719	</td><td>	P M Hari Govind	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	05313701719	</td><td>	Piyush Suneja	</td><td>	Clevernist	</td> </tr>
                        <tr> <td>	02113701719	</td><td>	Pranav Mago	</td><td>	TrueBlue India / JLL	</td> </tr>
                        <tr> <td>	09521101719	</td><td>	Pranay Jain	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	36221101719	</td><td>	Priyanshi Agarwal 	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	00321101719	</td><td>	Priyanshu Maheshwari	</td><td>	AU Small Finance Bank	</td> </tr>
                        <tr> <td>	08013701719	</td><td>	Rahul Dhingra	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	01713701719	</td><td>	Rhytham Arora	</td><td>	Jaro Education	</td> </tr>
                        <tr> <td>	07721101719	</td><td>	Ritika Thakur	</td><td>	Concentrix	</td> </tr>
                        <tr> <td>	07521101719	</td><td>	Riya Arora	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	09121101719	</td><td>	Riya Rajwar	</td><td>	MOGI / Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	06113701719	</td><td>	Rohan Khurana	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	09421101719	</td><td>	Ruhani Munjal	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	09313701719	</td><td>	Sakshima Girotra	</td><td>	Incedo Technologies	</td> </tr>
                        <tr> <td>	06513701719	</td><td>	Samarth Ojha	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	01421101719	</td><td>	Sanjana Bhateja	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	01021101719	</td><td>	Sanya Chabbra	</td><td>	TrueBlue India / JLL	</td> </tr>
                        <tr> <td>	06213701719	</td><td>	Satwikk Panigrahy	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	02621101719	</td><td>	Sejal Dandriyal	</td><td>	Upgrad	</td> </tr>
                        <tr> <td>	01613701719	</td><td>	Sheshank Gautam	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	08213701719	</td><td>	Shivam Malhotra 	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	05913701719	</td><td>	Siddhant Khandelwal	</td><td>	City Union Bank	</td> </tr>
                        <tr> <td>	00521101719	</td><td>	Sourav Chamoli	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	03921101719	</td><td>	Sourav Dua	</td><td>	City Union Bank	</td> </tr>
                        <tr> <td>	07421101719	</td><td>	Srishti Gupta	</td><td>	MOGI	</td> </tr>
                        <tr> <td>	02913701719	</td><td>	Stuti Rawat	</td><td>	Jaro Education	</td> </tr>
                        <tr> <td>	01413701719	</td><td>	Tushar Chhabra	</td><td>	PwC India	</td> </tr>
                        <tr> <td>	03213701719	</td><td>	Vaanyaa Oberoi	</td><td>	Amazon India / TrueBlue India	</td> </tr>
                        <tr> <td>	09321101719	</td><td>	Vansh Kapoor	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	05613701719	</td><td>	Vanshika Arora	</td><td>	Amazon India	</td> </tr>
                        <tr> <td>	03513701719	</td><td>	Vijay Kumar	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	05921101719	</td><td>	Viraj Gahlot	</td><td>	Wipro Ltd. / City Union Bank	</td> </tr>
                        <tr> <td>	00921101719	</td><td>	Vishal Anand	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	05421101719	</td><td>	Yash Raj Singh	</td><td>	Natwest Group (RBS)	</td> </tr>
                        <tr> <td>	08221101719	</td><td>	Yashika	</td><td>	NR Consulting	</td> </tr>
                        <tr> <td>	00421101719	</td><td>	Yatharth Ratra	</td><td>	Wipro Ltd.	</td> </tr>
                        <tr> <td>	04613701719	</td><td>	Yatika Sharma	</td><td>	Wise FinServ	</td> </tr>

                        

						</tbody>
					</table>
				  
              </div>
              <div role="tabpanel" class="tab-pane fade" id="b1821">
                 <center>BBA : 2018 - 21 Placement Records</center>
                	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
					    <tr><td>	00221101718	</td>	<td>	Aarti Aggarwal	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	00321101718	</td>	<td>	Aashna Chawla	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	00421101718	</td>	<td>	Abhinav Bansal	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	00521101718	</td>	<td>	Abhishek Kathuria	</td>	<td>	PlanetSpark	</td></tr>
                        <tr><td>	00313701718	</td>	<td>	Akshat Singhal	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	01121101718	</td>	<td>	Akshay Dhingra	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	01421101718	</td>	<td>	Amandeep Singh	</td>	<td>	DotPe	</td></tr>
                        <tr><td>	00513701718	</td>	<td>	Amit Kumar	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	00613701718	</td>	<td>	Anisha Dargan	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	00913701718	</td>	<td>	Anurag Sharma	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	41113701718	</td>	<td>	Arpit Kumar 	</td>	<td>	UpGrad	</td></tr>
                        <tr><td>	42213701718	</td>	<td>	Barkha Kathpal	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	01513701718	</td>	<td>	Bhavna Sharma	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	02021101718	</td>	<td>	Bhavuk ahuja	</td>	<td>	PlanetSpark	</td></tr>
                        <tr><td>	40121101718	</td>	<td>	Chhavi Soni	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	02321101718	</td>	<td>	Chirag Miglani	</td>	<td>	DotPe	</td></tr>
                        <tr><td>	02013701718	</td>	<td>	Deepali Tandon	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	42613701718	</td>	<td>	Deepshikha Gautam	</td>	<td>	PlanetSpark	</td></tr>
                        <tr><td>	02621101718	</td>	<td>	Devas Babbar	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	02721101718	</td>	<td>	Devesh Mishra	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	02113701718	</td>	<td>	Diksha Dhawan	</td>	<td>	TravClan Technology India Pvt. Ltd.	</td></tr>
                        <tr><td>	03021101718	</td>	<td>	Divya Sharma	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	02413701718	</td>	<td>	Elina Singh	</td>	<td>	Jaro Education	</td></tr>
                        <tr><td>	02513701718	</td>	<td>	Garima Sethi	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	40413701718	</td>	<td>	Gaurav Gulati	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	02613701718	</td>	<td>	Geetesh Raj Singh	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	02813701718	</td>	<td>	Gitansh Kakkar	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	03521101718	</td>	<td>	Gourang Chouhan	</td>	<td>	Artech Infosystem / UpGrad	</td></tr>
                        <tr><td>	35513701718	</td>	<td>	Gulshan Gupta	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	03621101718	</td>	<td>	Harshit Chauhan	</td>	<td>	Jaro Education	</td></tr>
                        <tr><td>	03213701718	</td>	<td>	Hrishabh Louhria	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	03313701718	</td>	<td>	Hritik Sondhi	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	03413701718	</td>	<td>	Ishita Jain	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	03513701718	</td>	<td>	Jaspreet Kaur	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	03613701718	</td>	<td>	Jhanvi Dua	</td>	<td>	TravClan	</td></tr>
                        <tr><td>	03913701718	</td>	<td>	Kanak Kathuria	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	40621101718	</td>	<td>	Kartikay Saini	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	04413701718	</td>	<td>	Kunal Aggarwal	</td>	<td>	Loans4wish Financial Services	</td></tr>
                        <tr><td>	04721101718	</td>	<td>	Leena Arora	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	04921101718	</td>	<td>	Manan Oberoi	</td>	<td>	PlanetSpark	</td></tr>
                        <tr><td>	05121101718	</td>	<td>	Manpreet Kaur	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	05221101718	</td>	<td>	Mansi Wadhwa 	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	04713701718	</td>	<td>	Mehak Gupta	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	05521101718	</td>	<td>	Mehak Malhotra	</td>	<td>	Chartered Club	</td></tr>
                        <tr><td>	05621101718	</td>	<td>	Milind Rawat	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	05821101718	</td>	<td>	Muskan	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	40913701718	</td>	<td>	Muskan Rawat	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	04913701718	</td>	<td>	Nishu Tripathi 	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	35321101718	</td>	<td>	Param Grover 	</td>	<td>	Loans4wish Financial Services	</td></tr>
                        <tr><td>	05113701718	</td>	<td>	Paras Arora	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	05313701718	</td>	<td>	Piyush Monga	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	05613701718	</td>	<td>	Prachi Sachdeva	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	40813701718	</td>	<td>	Prarthana Sharma	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	06921101718	</td>	<td>	Pratyush Angirish	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	07221101718	</td>	<td>	Priyanshi Jhalani	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	07321101718	</td>	<td>	Rabjot Singh	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	05813701718	</td>	<td>	Rashi Oberoi	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	07521101718	</td>	<td>	Ritika Kukreti	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	07621101718	</td>	<td>	Ritika Parashar	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	06013701718	</td>	<td>	Ritika Sabharwal 	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	06113701718	</td>	<td>	Sahil Thakur	</td>	<td>	Sun Life Financial	</td></tr>
                        <tr><td>	08021101718	</td>	<td>	Saksham Manuja	</td>	<td>	UpGrad	</td></tr>
                        <tr><td>	06213701718	</td>	<td>	Samriddhi Goswami	</td>	<td>	Square Yards / Wipro Ltd.	</td></tr>
                        <tr><td>	08221101718	</td>	<td>	Satvik Dasgupta	</td>	<td>	Square Yards	</td></tr>
                        <tr><td>	08521101718	</td>	<td>	Shivam Pasbola	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	06513701718	</td>	<td>	Shivang Puri	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	06713701718	</td>	<td>	Shruti Gupta	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                        <tr><td>	35821101718	</td>	<td>	Siddharth Chawla	</td>	<td>	Reliance Brands Limited	</td></tr>
                        <tr><td>	08721101718	</td>	<td>	Sneha Kakkar	</td>	<td>	Jaro Education	</td></tr>
                        <tr><td>	08821101718	</td>	<td>	Sonal Kumari	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	08921101718	</td>	<td>	Suraj Chhetri	</td>	<td>	Loans4wish Financial Services	</td></tr>
                        <tr><td>	35921101718	</td>	<td>	Tamanna tyagi	</td>	<td>	UpGrad	</td></tr>
                        <tr><td>	07513701718	</td>	<td>	Tanjot Kaur	</td>	<td>	Wipro Ltd.	</td></tr>
                        <tr><td>	07613701718	</td>	<td>	Tripti Mittal	</td>	<td>	Loans4wish Financial Services	</td></tr>
                        <tr><td>	07913701718	</td>	<td>	Vibhati Malik	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
						</tbody>					
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="b1720">
                  <center>BBA : 2017 - 20 Placement Records</center>
                 	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						        <tr><td>	00121101717	</td>	<td>	A. Ajith Kumar	</td>	<td>	DXC Technologies	</td></tr>
                                <tr><td>	00213701717	</td>	<td>	Aayushi Srivastav	</td>	<td>	Genpact	</td></tr>
                                <tr><td>	00513701717	</td>	<td>	Afreen Khan	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	00713701717	</td>	<td>	Akanksha Rana	</td>	<td>	Tech Mahindra / Genpact / DXC Technologies	</td></tr>
                                <tr><td>	00813701717	</td>	<td>	Akash Rana	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	00913701717	</td>	<td>	Akshay Dhotrekar	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	01013701717	</td>	<td>	Akul Kakar	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	00621101717	</td>	<td>	Amanpreet Kaur	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	42221101717	</td>	<td>	Amar Arora	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	00821101717	</td>	<td>	Ameesha Khullar	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	00921101717	</td>	<td>	Angad Kalra	</td>	<td>	Amazon	</td></tr>
                                <tr><td>	01021101717	</td>	<td>	Ankush Abrol	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	41913701717	</td>	<td>	Anshuman Gulia	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	01221101717	</td>	<td>	Anushka Sharma	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	41013701717	</td>	<td>	Apoorva Singh	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	35213701717	</td>	<td>	Arjun Kapoor	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	01213701717	</td>	<td>	Beepul Mishra	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	01421101717	</td>	<td>	Bharti Thakral	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	01413701717	</td>	<td>	C S Gayatri	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	44113701717	</td>	<td>	Chahat Relia	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	01513701717	</td>	<td>	Chirag Sethi	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	01613701717	</td>	<td>	Deepanshi Anand	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	01713701717	</td>	<td>	Deepika Bhatt	</td>	<td>	Tech Mahindra / Genpact	</td></tr>
                                <tr><td>	01621101717	</td>	<td>	Dhriti Kumar	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	01813701717	</td>	<td>	Divnoor Kaur Chadha	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	01921101717	</td>	<td>	Gagan Gupta	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	02021101717	</td>	<td>	Garima Tomar	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	01913701717	</td>	<td>	Garvit Singh Shekhawat	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	44313701717	</td>	<td>	Gaurav Saluja	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	02013701717	</td>	<td>	Gaurav Singh	</td>	<td>	Jaro Education	</td></tr>
                                <tr><td>	42013701717	</td>	<td>	Harshit Ghai	</td>	<td>	NatWest Group (previously RBS)	</td></tr>
                                <tr><td>	02421101717	</td>	<td>	Harshit Kapoor	</td>	<td>	Squareyards	</td></tr>
                                <tr><td>	02313701717	</td>	<td>	Harshita	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	02213701717	</td>	<td>	Harshita Kukreja	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	41213701717	</td>	<td>	Harshita Periwal	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	02413701717	</td>	<td>	Himanshi Sharma	</td>	<td>	Genpact	</td></tr>
                                <tr><td>	02721101717	</td>	<td>	Ishika	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	44013701717	</td>	<td>	Jai Kalra	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	42821101717	</td>	<td>	Jaskaran Singh	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	02613701717	</td>	<td>	Jigyasa Dhingra	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	03021101717	</td>	<td>	Jitesh Sharma	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	03121101717	</td>	<td>	Joydeep Banerjee	</td>	<td>	Sun Life Financial	</td></tr>
                                <tr><td>	03321101717	</td>	<td>	Kinshuk Gupta	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	43813701717	</td>	<td>	Komal Singh	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	42913701717	</td>	<td>	Kritika Arora	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	05713701717	</td>	<td>	M Sudharsan	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	02913701717	</td>	<td>	Mahek	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	03013701717	</td>	<td>	Mahima Maurya	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	03113701717	</td>	<td>	Manav Malhotra	</td>	<td>	Tech Mahindra / NatWest Group (previously RBS)	</td></tr>
                                <tr><td>	03213701717	</td>	<td>	Manik Arora	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	03313701717	</td>	<td>	Mannat Gulati	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	03413701717	</td>	<td>	Manu Upadhaya	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	03721101717	</td>	<td>	Manvi Malik	</td>	<td>	Tech Mahindra / Squareyards	</td></tr>
                                <tr><td>	42813701717	</td>	<td>	Mehak Batra	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	03513701717	</td>	<td>	Mehak Dua	</td>	<td>	Jaro Education	</td></tr>
                                <tr><td>	35513701717	</td>	<td>	Minal Verma	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	42513701717	</td>	<td>	Mitali Goyal	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	06313701717	</td>	<td>	Mohak Mathur	</td>	<td>	Wipro HR Services Pvt. Ltd. / Royal Bank of Scottland	</td></tr>
                                <tr><td>	40621101717	</td>	<td>	Mukul Maggo	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	42121101717	</td>	<td>	Muskan Grover	</td>	<td>	Capgemini / Sun Life Financial	</td></tr>
                                <tr><td>	03613701717	</td>	<td>	Nandita Arora	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	04021101717	</td>	<td>	Neha Pamani	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	03713701717	</td>	<td>	Niket Mudgil	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	03813701717	</td>	<td>	Nikita Kalra	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	04221101717	</td>	<td>	Nitin Bhandari	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	04321101717	</td>	<td>	Padmaksh Behal	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	43721101717	</td>	<td>	Parikshit Bhaskar	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	04521101717	</td>	<td>	Pragati Nayak	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	40921101717	</td>	<td>	Prakriti Popli	</td>	<td>	Capgemini / NatWest Group (previously RBS)	</td></tr>
                                <tr><td>	41313701717	</td>	<td>	Pranay Arora	</td>	<td>	Wipro HR Services Pvt. Ltd. / Royal Bank of Scottland	</td></tr>
                                <tr><td>	35613701717	</td>	<td>	Prateek Arora	</td>	<td>	Wipro HR Services Pvt. Ltd. / Royal Bank of Scottland	</td></tr>
                                <tr><td>	50421101717	</td>	<td>	Priya Sharma	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	40821101717	</td>	<td>	Puneet Gambhir	</td>	<td>	JLL India	</td></tr>
                                <tr><td>	41521101717	</td>	<td>	Puneet Thukral	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	04821101717	</td>	<td>	Rahul Mehta 	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	50521101717	</td>	<td>	Rajat Verma	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	42113701717	</td>	<td>	Raunaq Jain	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	04213701717	</td>	<td>	Rishabh Pratap Singh	</td>	<td>	Tech Mahindra	</td></tr>
                                <tr><td>	41813701717	</td>	<td>	Rishabh Sukhija	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	44021101717	</td>	<td>	Rohit Sikri	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	04313701717	</td>	<td>	Roshni Wilku	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	40121101717	</td>	<td>	Ruchir Dhingra	</td>	<td>	JLL India	</td></tr>
                                <tr><td>	04921101717	</td>	<td>	Rupal Bhatt	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	43013701717	</td>	<td>	Rupam Raghav	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	05021101717	</td>	<td>	Saakshi Vaid	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	04513701717	</td>	<td>	Sachin Kukreja	</td>	<td>	Genpact	</td></tr>
                                <tr><td>	05121101717	</td>	<td>	Samveg Handa	</td>	<td>	S.M. Technology	</td></tr>
                                <tr><td>	05521101717	</td>	<td>	Saumya Tyagi	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	04913701717	</td>	<td>	Sharv Katyal	</td>	<td>	Squareyards	</td></tr>
                                <tr><td>	43913701717	</td>	<td>	Shobhit	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	36013701717	</td>	<td>	Shresth Tyagi	</td>	<td>	Capgemini / NatWest Group (previously RBS)	</td></tr>
                                <tr><td>	05113701717	</td>	<td>	Shreya Malik	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	42021101717	</td>	<td>	Shubham Gupta	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	05413701717	</td>	<td>	Shweta	</td>	<td>	Amazon	</td></tr>
                                <tr><td>	05513701717	</td>	<td>	Siddhant Aggarwal	</td>	<td>	Capgemini	</td></tr>
                                <tr><td>	42521101717	</td>	<td>	Simran Wadhwa	</td>	<td>	Tech Mahindra / Royal Bank of Scottland	</td></tr>
                                <tr><td>	41113701717	</td>	<td>	Suprotim Das	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	05721101717	</td>	<td>	Tanya Chhabra	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	44121101717	</td>	<td>	Tanya Sachdeva	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	05813701717	</td>	<td>	Tarun Khatri	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                                <tr><td>	05821101717	</td>	<td>	Ulka	</td>	<td>	Tech Mahindra / Royal Bank of Scottland	</td></tr>
                                <tr><td>	05913701717	</td>	<td>	Urvashi	</td>	<td>	Concentrix	</td></tr>
                                <tr><td>	06021101717	</td>	<td>	Vaibhav Sabharwal	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	35821101717	</td>	<td>	Vanik Oberoi	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	43613701717	</td>	<td>	Vanshika Kharbanda	</td>	<td>	IBM India	</td></tr>
                                <tr><td>	06121101717	</td>	<td>	Vanshika Tuli	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	06221101717	</td>	<td>	Varun Dhawan	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	06321101717	</td>	<td>	Varun Katoch	</td>	<td>	JLL India	</td></tr>
                                <tr><td>	41613701717	</td>	<td>	Vedhai Kandoi	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	06421101717	</td>	<td>	Vipin Singh Rawat	</td>	<td>	British Telecom	</td></tr>
                                <tr><td>	36021101717	</td>	<td>	Yash Sachdev	</td>	<td>	Wipro HR Services Pvt. Ltd. / Royal Bank of Scottland	</td></tr>
                                <tr><td>	40213701717	</td>	<td>	Yasha Anand	</td>	<td>	Royal Bank of Scottland	</td></tr>
                                <tr><td>	41121101717	</td>	<td>	Yati Khanna	</td>	<td>	Guardian	</td></tr>
                                <tr><td>	06721101717	</td>	<td>	Yukti Sharma	</td>	<td>	Capgemini	</td></tr>

						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="b1619">
                 <center>BBA : 2016 - 19 Placement Records</center>
                	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						<tr><td>	35121101716	</td>	<td>	Abhijeet Singh Uppal	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	00321101716	</td>	<td>	Aditya Sharma	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	00421101716	</td>	<td>	Akansh Luthra	</td>	<td>	Urban Clap	</td></tr>
                        <tr><td>	35221101716	</td>	<td>	Akshita Sharma	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	42313701716	</td>	<td>	Aman Malik	</td>	<td>	Urban Clap	</td></tr>
                        <tr><td>	00621101716	</td>	<td>	Anand Kumar Rana	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	00721101716	</td>	<td>	Anjali Kumari	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	00913701716	</td>	<td>	Ankit Anand	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	01013701716	</td>	<td>	Ankit Jain	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	00821101716	</td>	<td>	Anubhav Roy	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	01021101716	</td>	<td>	Arushi Sharma	</td>	<td>	Urban Clap	</td></tr>
                        <tr><td>	01413701716	</td>	<td>	Ashish Kumar Jha	</td>	<td>	Reliance Trends	</td></tr>
                        <tr><td>	41221101716	</td>	<td>	Ashita Garg	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	01513701716	</td>	<td>	Bhanu Pratap Singh Ranawat	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	01613701716	</td>	<td>	Bhavesh Prasad	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	35213701716	</td>	<td>	Chirag Bansal	</td>	<td>	Paytm	</td></tr>
                        <tr><td>	01421101716	</td>	<td>	Chittavasu Prakash	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	01921101716	</td>	<td>	Divanshu Maini	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	02113701716	</td>	<td>	Drishti Rawat	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	02213701716	</td>	<td>	Ekjot Kaur Sahmbi	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	02021101716	</td>	<td>	Garima Bhatt	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	35421101716	</td>	<td>	Gehna Talwar	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	41421101716	</td>	<td>	Harshit Ahuja	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	02221101716	</td>	<td>	Harshit Kapoor	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	02513701716	</td>	<td>	Jayata Dureja	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	02921101716	</td>	<td>	Jayati Gulati	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	03021101716	</td>	<td>	Jitender Kumar Tanwar	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	03121101716	</td>	<td>	Jyotsna Solanki	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	40113701716	</td>	<td>	Kanishka Bansal	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	03221101716	</td>	<td>	Kartik K Ram	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	35513701716	</td>	<td>	Kashyap Vaid	</td>	<td>	Convergys / Jaro Education	</td></tr>
                        <tr><td>	35613701716	</td>	<td>	Keshav Maini	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	03521101716	</td>	<td>	Komal Solanki	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	02813701716	</td>	<td>	Kunal	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	03821101716	</td>	<td>	Lav Kumar Pundhir	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	04021101716	</td>	<td>	Manav Kapoor	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	04121101716	</td>	<td>	Manisha Talwar	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	42213701716	</td>	<td>	Mehak Jaggi	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	02913701716	</td>	<td>	Mohit Jain 	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	41213701716	</td>	<td>	Moksha Kandpal	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	04521101716	</td>	<td>	Mudit Chhabra	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	40713701716	</td>	<td>	Mukta Jain	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	03013701716	</td>	<td>	Muskkan V Seth	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	03113701716	</td>	<td>	Naina Kumari Singh	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	03213701716	</td>	<td>	Nakul Kumar	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	04721101716	</td>	<td>	Naman Jain	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	35621101716	</td>	<td>	Neeraj Wadhwani	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	03513701716	</td>	<td>	Nikita Arora	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	35721101716	</td>	<td>	Nipun Kumar Upadhyay	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	04921101716	</td>	<td>	Nishant Saini	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	40913701716	</td>	<td>	Nishtha Chugh	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	03713701716	</td>	<td>	Nitish Bhatnagar	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	03913701716	</td>	<td>	Parth Ahuja	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	04113701716	</td>	<td>	Pragati Sharma	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	41813701716	</td>	<td>	Pratishtha	</td>	<td>	IBM India	</td></tr>
                        <tr><td>	35813701716	</td>	<td>	Prerna Ghai	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	05421101716	</td>	<td>	Priya Chilwal	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	05621101716	</td>	<td>	Rahish Kumar	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	04813701716	</td>	<td>	Rajat Negi	</td>	<td>	Capgemini / Align Info Solutions Pvt. Ltd.	</td></tr>
                        <tr><td>	04913701716	</td>	<td>	Ram Anuj Singh	</td>	<td>	Reliance JIO	</td></tr>
                        <tr><td>	06021101716	</td>	<td>	Rashika Negi	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	06221101716	</td>	<td>	Raunak Agrawal	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	05113701716	</td>	<td>	Raveena Nanda	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	06321101716	</td>	<td>	Reema Sharma	</td>	<td>	IBM India	</td></tr>
                        <tr><td>	06721101716	</td>	<td>	Ritu Bisht	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	05613701716	</td>	<td>	Rohit Singh	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	05913701716	</td>	<td>	Sahil Chaudhary	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	06013701716	</td>	<td>	Sahil Husain	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	06921101716	</td>	<td>	Sakshi Sethi	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	07021101716	</td>	<td>	Sakshi Tanwar	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	06313701716	</td>	<td>	Sarthak Kapoor	</td>	<td>	Royal Bank of Scottland	</td></tr>
                        <tr><td>	06413701716	</td>	<td>	Sarvagya Sharma	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	07721101716	</td>	<td>	Shivani Das	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	06913701716	</td>	<td>	Shreya Kaushika	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	07113701716	</td>	<td>	Shubham Kaparwan 	</td>	<td>	Amazon	</td></tr>
                        <tr><td>	07821101716	</td>	<td>	Shubhankar Sen Gupta	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	40413701716	</td>	<td>	Simran Chhabra	</td>	<td>	British Telecom	</td></tr>
                        <tr><td>	41713701716	</td>	<td>	Srishti Khatri	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	07921101716	</td>	<td>	Srishti Pathak	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	36013701716	</td>	<td>	Suhani Ahuja	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	08021101716	</td>	<td>	Sukhmani Sahaji	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	07613701716	</td>	<td>	Sukriti Khanna 	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	41521101716	</td>	<td>	Sumit Thukral	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	42013701716	</td>	<td>	Tanya Kohli	</td>	<td>	Royal Bank of Scotland	</td></tr>
                        <tr><td>	08321101716	</td>	<td>	Tanya Sharma	</td>	<td>	Wipro HR Services Pvt. Ltd.	</td></tr>
                        <tr><td>	36113701716	</td>	<td>	Tejesh Garg	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	08621101716	</td>	<td>	Vaibhav Sati	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	40221101716	</td>	<td>	Vidit Agarwal	</td>	<td>	Urban Clap	</td></tr>
                        <tr><td>	07913701716	</td>	<td>	Vishal Chutani	</td>	<td>	Concentrix  /Amazon	</td></tr>
                        <tr><td>	08013701716	</td>	<td>	Vivek	</td>	<td>	Concentrix	</td></tr>
                        <tr><td>	40813701716	</td>	<td>	Vrinda Mehta	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	09321101716	</td>	<td>	Yashita Gupta	</td>	<td>	Capgemini	</td></tr>
												
						</tbody>
					</table>
              </div>
              <!--<div role="tabpanel" class="tab-pane fade" id="b1518">
                  <center>BBA : 2015 - 18 Placement Records</center>
                	<table class="table">
						<tbody>
						    <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						<tr><td>	00122101715	</td>	<td>	Aanchal Roy	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	00413701715	</td>	<td>	Abhishek Kumar	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	35121101715	</td>	<td>	Akansha Kapoor	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	00613701715	</td>	<td>	Akshay Katoch	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	01021101715	</td>	<td>	Akshay Parashar	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	40921101715	</td>	<td>	Amandeep Singh	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	01013701715	</td>	<td>	Ankita Saxena	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	01113701715	</td>	<td>	Ankush Vashisht	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	01213701715	</td>	<td>	Anmol Kaur Bhatia	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	35213701715	</td>	<td>	Anuj Khatri	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	40221101715	</td>	<td>	Arbeen Kaur	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	01413701715	</td>	<td>	Arjun Gambhir	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	01713701715	</td>	<td>	Ashar Sheikh	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	01813701715	</td>	<td>	Ashish Chadha	</td>	<td>	eLitmus Evaluation	</td></tr>
                        <tr><td>	02013701715	</td>	<td>	Avneet Kaur Grover	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	01621101715	</td>	<td>	Chaitanya Taneja	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	35313701715	</td>	<td>	Chirag Arora	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	02313701715	</td>	<td>	Devashish Katyayan	</td>	<td>	Tech Mahindra	</td></tr>
                        <tr><td>	02413701715	</td>	<td>	Dhananjay Malik	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	40721101715	</td>	<td>	Dhruv Arora	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	02613701715	</td>	<td>	Dishank Rajput	</td>	<td>	eLitmus Evaluation	</td></tr>
                        <tr><td>	02221101715	</td>	<td>	Gaurav Kumar	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	02321101715	</td>	<td>	Gautam Sharma	</td>	<td>	Genpact/ Convergys	</td></tr>
                        <tr><td>	02421101715	</td>	<td>	Gayatri Sharma	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	02813701715	</td>	<td>	Harleen Kaur Arora	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	02913701715	</td>	<td>	Harman Chadha	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	02621101715	</td>	<td>	Harmanpreet Singh	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	42321101715	</td>	<td>	Harsh Namdev	</td>	<td>	Secure Now	</td></tr>
                        <tr><td>	02821101715	</td>	<td>	Himani Adhikari	</td>	<td>	Tech Mahindra	</td></tr>
                        <tr><td>	03321101715	</td>	<td>	Japnam Singh Walia	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	03421101715	</td>	<td>	Jaskirat Kaur	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	03713701715	</td>	<td>	Jyoti Gupta	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	03813701715	</td>	<td>	Karamveer Kaur	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	03913701715	</td>	<td>	Karan Mehrolia	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	04013701715	</td>	<td>	Karan Sharma	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	03821101715	</td>	<td>	Karishma Bagai	</td>	<td>	Secure Now	</td></tr>
                        <tr><td>	04213701715	</td>	<td>	Komal Garg	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	04413701715	</td>	<td>	Lakshay Batra	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	04513701715	</td>	<td>	Lakshay Kapoor	</td>	<td>	eLitmus Evaluation	</td></tr>
                        <tr><td>	04021101715	</td>	<td>	Loveleen Panjwani	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	04713701715	</td>	<td>	Mahima Kalra	</td>	<td>	Genpact/RBS	</td></tr>
                        <tr><td>	04813701715	</td>	<td>	Mansi Gupta	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	05213701715	</td>	<td>	Navneet Kaur	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	41021101715	</td>	<td>	Nikhil Mehta	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	04421101715	</td>	<td>	Nikhil Nagvanshi	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	40313701715	</td>	<td>	Nikita Sharma	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	05613701715	</td>	<td>	Nipun Kochhar	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	05713701715	</td>	<td>	Nishant Malhotra	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	35821101715	</td>	<td>	Nishtha Goswami	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	05913701715	</td>	<td>	Palak Arora	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	35513701715	</td>	<td>	Palak Dawar	</td>	<td>	British Telecom India / RBS India	</td></tr>
                        <tr><td>	06213701715	</td>	<td>	Prabh Sohung Singh	</td>	<td>	Jaro Education	</td></tr>
                        <tr><td>	04721101715	</td>	<td>	Prabhleen Kaur Bilkhu	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	05121101715	</td>	<td>	Prem Singh	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	41013701715	</td>	<td>	Priyanka Chhetri	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	06413701715	</td>	<td>	Priyanka Shankar	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	06613701715	</td>	<td>	Pulkit Malik	</td>	<td>	Tech Mahindra / RBS India	</td></tr>
                        <tr><td>	06713701715	</td>	<td>	Pulkit Mehra	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	05221101715	</td>	<td>	Puneet Singh	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	40813701715	</td>	<td>	Rahul Saini	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	06913701715	</td>	<td>	Rahul Sethi	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	35921101715	</td>	<td>	Rakshit Narula	</td>	<td>	Secure Now/ Convergys	</td></tr>
                        <tr><td>	35613701715	</td>	<td>	Ridima Gambhir	</td>	<td>	RBS India	</td></tr>
                        <tr><td>	05821101715	</td>	<td>	Rohan Malhotra	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	07213701715	</td>	<td>	Rohan Malik	</td>	<td>	Alight India/ Genpact	</td></tr>
                        <tr><td>	07413701715	</td>	<td>	Rupinder Singh	</td>	<td>	RBS India	</td></tr>
                        <tr><td>	06021101715	</td>	<td>	Sahil Madan	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	06121101715	</td>	<td>	Saloni Jain	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	06421101715	</td>	<td>	Sanchit Suri	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	07613701715	</td>	<td>	Shaleen Rampal	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	41221101715	</td>	<td>	Shivam Sharma	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	08013701715	</td>	<td>	Shobhit Jain	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	08213701715	</td>	<td>	Shruti Gulati	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	08513701715	</td>	<td>	Shubham Sharma	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	36221101715	</td>	<td>	Simran Arya	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	08713701715	</td>	<td>	Subhash Joshi	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	06921101715	</td>	<td>	Sukriti Vij	</td>	<td>	Capgemini	</td></tr>
                        <tr><td>	07021101715	</td>	<td>	Surbhi Joshi	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	08813701715	</td>	<td>	Surbhi Pushkarna	</td>	<td>	RBS India	</td></tr>
                        <tr><td>	07121101715	</td>	<td>	Sushank Sharma	</td>	<td>	Genpact/ Convergys	</td></tr>
                        <tr><td>	07221101715	</td>	<td>	Tamanna Churania	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	07321101715	</td>	<td>	Tanuja Aswal	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	09113701715	</td>	<td>	Teena Chaudhary	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	07521101715	</td>	<td>	Timsy Bansal	</td>	<td>	Amazon India	</td></tr>
                        <tr><td>	07621101715	</td>	<td>	Tushar Arora	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	36013701715	</td>	<td>	Tushar Sharma	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	36113701715	</td>	<td>	Vaibhav Khanna	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	07921101715	</td>	<td>	Vaibhav Sureka	</td>	<td>	Alight India	</td></tr>
                        <tr><td>	08021101715	</td>	<td>	Vaishali Gulyani	</td>	<td>	Convergys	</td></tr>
                        <tr><td>	09313701715	</td>	<td>	Vartika Bhandari	</td>	<td>	British Telecom India	</td></tr>
                        <tr><td>	36213701715	</td>	<td>	Vishwas Teerth	</td>	<td>	Genpact	</td></tr>
                        <tr><td>	09613701715	</td>	<td>	Yamini Kanojia	</td>	<td>	Alight India	</td></tr>

						</tbody>
					</table>
              </div>
            </div></h2>-->
           
           
              <div style="height: 10vh;"></div>
             
          </div>
          
          
        
          
          
      
        </div>
   
      </section>
<!-- BCA Placement Records   -->
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="bcarec">BCA Placement Records</h1>
          <div class="underline"></div>
          <div class="container">
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link show active" href="#c2025" role="tab" data-toggle="tab">2022-25</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#c2024" role="tab" data-toggle="tab">2021-24</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#c2023" role="tab" data-toggle="tab">2020-23</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#c1922" role="tab" data-toggle="tab">2019-22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#c1821" role="tab" data-toggle="tab">2018-21</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#c1720" role="tab" data-toggle="tab">2017-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#c1619" role="tab" data-toggle="tab">2016-19</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#c1518" role="tab" data-toggle="tab">2015-18</a>
                </li>-->
             </ul>
             
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active show" id="c2025">
                  <center>BCA : 2022 - 25 Placement Records</center>
					<table class="table">
						<tbody>
                      <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						     <tr> <td>	03021102022	</td><td>	Akanksha Negi	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	05421102022	</td><td>	Asmeet Kaur	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	05821102022	</td><td>	Mehak Gossain	</td> <td>	CISCO	</td></tr>
                                 <tr> <td>	35121102022	</td><td>	Priyanka Sharma	</td> <td>	Wipro Ltd.	</td></tr>
                                 <tr> <td>	07021102022	</td><td>	Shrestha Sharma	</td> <td>	CISCO	</td></tr>







                            
						</tbody>
					</table>
				  <strong>Note</strong>: Currently Pursuing
              </div>
              
              
                <div role="tabpanel" class="tab-pane fade" id="c2024">
                  <center>BCA : 2021 - 24 Placement Records</center>
					<table class="table">
						<tbody>
                      <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						     <tr> <td>	03321102021	</td><td>	ANKUR TIWARI	</td> <td>	DEPOTER	</td></tr>
                            <tr> <td>	04821102021	</td><td>	ATUL BHARTI	</td> <td>	AMAZON	</td></tr>
                            <tr> <td>	07713702021	</td><td>	DIVYANSH JHA	</td> <td>	SAP LABS	</td></tr>
                            <tr> <td>	02021102021	</td><td>	GAUTAM KOHLI	</td> <td>	FEDERAL BANK /WIPRO LTD. / MICROLAND	</td></tr>
                            <tr> <td>	05813702021	</td><td>	GURJEET SINGH OHRI	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	03013702021	</td><td>	HARMANDEEP SINGH	</td> <td>	Hive.AI	</td></tr>
                            <tr> <td>	00613702021	</td><td>	HARSH ARORA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	00813702021	</td><td>	LAKSHAY CHAWLA	</td> <td>	TCS	</td></tr>
                            <tr> <td>	01321102021	</td><td>	MANSHA MONGA	</td> <td>	WIPRO LTD. / MICROLAND / Galytix	</td></tr>
                            <tr> <td>	02013702021	</td><td>	MIKUL JAIN	</td> <td>	TCS	</td></tr>
                            <tr> <td>	04913702021	</td><td>	ROHIT PRAJAPATI	</td> <td>	INCEDO TECHNOLOGY	</td></tr>
                            <tr> <td>	00213702021	</td><td>	SARTHAK KUMAR	</td> <td>	TCS	</td></tr>
                            <tr> <td>	03121102021	</td><td>	VIBHOR BADOLA	</td> <td>	CITY UNION BANK	</td></tr>
                            <tr> <td>	00621102021	</td><td>	VIPIN SINGH KIROULA	</td> <td>	TCS	</td></tr>
						</tbody>
					</table>
				  
              </div>
              <div role="tabpanel" class="tab-pane fade" id="c2023">
                  <center>BCA : 2020 - 23 Placement Records</center>
					<table class="table">
						<tbody>
                      <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						   <tr> <td>	00221102020	</td><td>	ABHAY SINGH	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
                            <tr> <td>	00321102020	</td><td>	ABHISHEK PRASAD	</td> <td>	HCL TECHNOLOGIES	</td></tr>
                            <tr> <td>	00513702020	</td><td>	ADITI AGARWAL 	</td> <td>	HCL TECHNOLOGIES / TCS	</td></tr>
                            <tr> <td>	35113702020	</td><td>	AGAM SINGH	</td> <td>	VDART (HCL TECHNOLOGIES)	</td></tr>
                            <tr> <td>	00821102020	</td><td>	ANMOL GARG	</td> <td>	TCS	</td></tr>
                            <tr> <td>	01813702020	</td><td>	AYUSH DUBEY	</td> <td>	HCL TECHNOLOGIES / TCS	</td></tr>
                            <tr> <td>	01321102020	</td><td>	CHETNA SHARMA 	</td> <td>	HCL TECHNOLOGIES	</td></tr>
                            <tr> <td>	01821102020	</td><td>	GANGA SHARMA	</td> <td>	SAP LABS	</td></tr>
                            <tr> <td>	02221102020	</td><td>	HARSH MAHORI	</td> <td>	TCS	</td></tr>
                            <tr> <td>	02421102020	</td><td>	HIMANSHU SHARMA 	</td> <td>	TCS / VDART (HCL TECHNOLOGIES)	</td></tr>
                            <tr> <td>	02521102020	</td><td>	ISHAN MEHRA	</td> <td>	TCS	</td></tr>
                            <tr> <td>	02921102020	</td><td>	KSHITIZ SRIVASTAVA	</td> <td>	TCS	</td></tr>
                            <tr> <td>	04013702020	</td><td>	MANJESH SINGH 	</td> <td>	INCEDO TECHNOLOGIES / TCS	</td></tr>
                            <tr> <td>	03221102020	</td><td>	NAKUL BATRA	</td> <td>	VDART (HCL TECHNOLOGIES)	</td></tr>
                            <tr> <td>	03321102020	</td><td>	NEVIDITA 	</td> <td>	UPGRAD / HCL TECHNOLOGIES	</td></tr>
                            <tr> <td>	05313702020	</td><td>	PRASHANT YADAV 	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
                            <tr> <td>	05513702020	</td><td>	PRATHAM PANDEY	</td> <td>	HEXAWARE TECHNOLOGIES	</td></tr>
                            <tr> <td>	06113702020	</td><td>	SACHIN SHARMA 	</td> <td>	HCL TECHNOLOGIES	</td></tr>
                            <tr> <td>	07113702020	</td><td>	SIMRAN KHANNA	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
                            <tr> <td>	04621102020	</td><td>	SPARSH PANT 	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
                            <tr> <td>	07213702020	</td><td>	SWATI TAHEEM	</td> <td>	DATOPIC TECHNOLOGIES PVT LTD	</td></tr>
                            <tr> <td>	04821102020	</td><td>	TUSHAR ARORA 	</td> <td>	WIPRO LTD.	</td></tr>
                            <tr> <td>	07713702020	</td><td>	UJJWAL YADAV 	</td> <td>	INCEDO TECHNOLOGIES	</td></tr>
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="c1922">
                  <center>BCA : 2019 - 22 Placement Records</center>
					<table class="table">
						<tbody>
                      <tr>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                      </tr>
						    <tr> <td>	02121102019	</td><td>	Aarchi Agrawal	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00421102019	</td><td>	Adarsh Suman	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	01421102019	</td><td>	Aditya Singh	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	00613702019	</td><td>	Ajit Kumar Singh	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03313702019	</td><td>	Aman Khandelwal	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04721102019	</td><td>	Anjali Gupta	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	05121102019	</td><td>	Anurag Verma	</td><td>	SAP Labs	</td> </tr>
                            <tr> <td>	02321102019	</td><td>	Arshi Khan	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03321102019	</td><td>	Ayush Bhardwaj	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00913702019	</td><td>	Ayush Priyadarshi	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	35113702019	</td><td>	Bhavya Bablani	</td><td>	TCS	</td> </tr>
                            <tr> <td>	01221102019	</td><td>	Bhumika Singh	</td><td>	Wipro Technologies / Capgemini	</td> </tr>
                            <tr> <td>	04021102019	</td><td>	Chirag Tuli	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	03921102019	</td><td>	Dhruv Samtani	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02713702019	</td><td>	Drishti Bajpai	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02813702019	</td><td>	Girik Nohani	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00921102019	</td><td>	Harsh Jain	</td><td>	Starworld Digital Pvt. Ltd. / SkyTrust IT Solutions	</td> </tr>
                            <tr> <td>	02013702019	</td><td>	Harsh Paliya	</td><td>	PROVAR	</td> </tr>
                            <tr> <td>	00821102019	</td><td>	Harshika Goel	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	01121102019	</td><td>	Himanshu Rawat	</td><td>	Decimal Technologies	</td> </tr>
                            <tr> <td>	35413702019	</td><td>	Ishan Bablani	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	35613702019	</td><td>	Japleen Kaur	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04313702019	</td><td>	Jaspreet Singh	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02821102019	</td><td>	Karthik Malhotra	</td><td>	Amazon India	</td> </tr>
                            <tr> <td>	02413702019	</td><td>	Kawangun Singh Saluja	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	01321102019	</td><td>	Kirti	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03421102019	</td><td>	Kunal Goyal	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	03713702019	</td><td>	Kushagra	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02221102019	</td><td>	Lakshit	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	00313702019	</td><td>	Lavisha Sehgal	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03521102019	</td><td>	Manan Khanna	</td><td>	Amazon India / Capgemini	</td> </tr>
                            <tr> <td>	35513702019	</td><td>	Manavdeep Singh	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	02213702019	</td><td>	Manavpreet Singh	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00521102019	</td><td>	Manish Thakur	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	05221102019	</td><td>	Mayank Tomar	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	35213702019	</td><td>	Mehar Sahni	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	03721102019	</td><td>	Mehul Verma	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	02521102019	</td><td>	Mohit	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	01013702019	</td><td>	Namrata sehgal	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04921102019 	</td><td>	Nikhil Dhanda	</td><td>	Decimal Technologies	</td> </tr>
                            <tr> <td>	35421102019	</td><td>	Nishant Gupta	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	01613702019	</td><td>	Ojus Gupta	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00813702019	</td><td>	Palak Saluja	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03621102019	</td><td>	Parth Mutreja	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04513702019	</td><td>	Pawan Singh Dangwal	</td><td>	Deloitte / Wipro Technologies	</td> </tr>
                            <tr> <td>	05021102019	</td><td>	Piyush Kumar	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	00113702019	</td><td>	Pranjal Sharma	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02913702019	</td><td>	Prashant Rao	</td><td>	Amazon India	</td> </tr>
                            <tr> <td>	04913702019	</td><td>	Priyanka Bisht	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	05313702019	</td><td>	Rahul Sharma	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	02721102019	</td><td>	Rhythm Budhiraja	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03113702019	</td><td>	Ria Dudeja	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04521102019 	</td><td>	Rishabh Rathore	</td><td>	Wipro Technologies / Capgemini	</td> </tr>
                            <tr> <td>	04613702019	</td><td>	Ritesh Thakur	</td><td>	PROVAR	</td> </tr>
                            <tr> <td>	04013702019	</td><td>	Ritika 	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	01721102019	</td><td>	Ritika Budhiraja	</td><td>	Deloitte / PROVAR	</td> </tr>
                            <tr> <td>	03013702019	</td><td>	Ronit Sharma	</td><td>	Veersa Technologies	</td> </tr>
                            <tr> <td>	04213702019	</td><td>	Saloni Khurana	</td><td>	Deloitte / Veersa Technologies	</td> </tr>
                            <tr> <td>	00621102019	</td><td>	Sanskar Bansal	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04321102019	</td><td>	Sarthak Bhardwaj	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00321102019	</td><td>	Shivam Mehta	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04421102019	</td><td>	Shivam Vij	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03613702019	</td><td>	Siddharth	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02421102019	</td><td>	Siddharth Singh	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	02313702019	</td><td>	Smriti Mahajan	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	00721102019	</td><td>	Tanishq Malik	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	03121102019	</td><td>	Tannu Dubey	</td><td>	Wipro Technologies	</td> </tr>
                            <tr> <td>	01821102019	</td><td>	Tanya Nagpal	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	04821102019	</td><td>	Tushar Bhadouria	</td><td>	Capgemini	</td> </tr>
                            <tr> <td>	01021102019	</td><td>	Vaibhav Kumar	</td><td>	Deloitte / Wipro Technologies	</td> </tr>
                            <tr> <td>	35221102019	</td><td>	Vinayak Sharma	</td><td>	Deloitte	</td> </tr>
                            <tr> <td>	01813702019	</td><td>	Vipashchit Chaturvedi	</td><td>	Decimal Technologies	</td> </tr>
                            <tr> <td>	01413702019	</td><td>	Vivek Sharma	</td><td>	Deloitte	</td> </tr>



						</tbody>
					</table>
				  </div>
              <div role="tabpanel" class="tab-pane fade" id="c1821">
                 <center>BCA : 2018 - 21 Placement Records</center>
					<table class="table">
						<tbody>
						<tr><td>00121102018</td><td>Aarsee  Kashyap</td><td>Deloitte</td></tr>
						<tr><td>00221102018</td><td>Aashi Jain</td><td>Wipro Technologies</td></tr>
						<tr><td>00421102018</td><td>Aayushi Khanna</td><td>Wipro Ltd.</td></tr>
						<tr><td>00213702018</td><td>Adarsh Pratap Singh</td><td>British Telecom</td></tr>
						<tr><td>00313702018</td><td>Aditi Bansal</td><td>Infosys</td></tr>
						<tr><td>00413702018</td><td>Akshat Sharma</td><td>Wipro Technologies</td></tr>
						<tr><td>00621102018</td><td>Aman Kumar Pundhir</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>00613702018</td><td>Anshuman Singh</td><td>Wipro Technologies</td></tr>
						<tr><td>00721102018</td><td>Aryan Saxena</td><td>SAP Labs</td></tr>
						<tr><td>01221102018</td><td>Chirag Bargoojar</td><td>Infosys</td></tr>
						<tr><td>40713702018</td><td>Deepanshu  Sharma</td><td>Deloitte</td></tr>
						<tr><td>35113702018</td><td>Deepti Singh</td><td>Infosys</td></tr>
						<tr><td>01421102018</td><td>Disha Gulati</td><td>Wipro Technologies / TCS</td></tr>
						<tr><td>01621102018</td><td>Gaurav  Thakur</td><td>Deloitte</td></tr>
						<tr><td>01921102018</td><td>Jagmeet Singh</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>01613702018</td><td>Jalaj Lingwal</td><td>Wipro Technologies</td></tr>
						<tr><td>02021102018</td><td>Jatin Grover</td><td>TCS / Wipro Technologies / Infosys</td></tr>
						<tr><td>40521102018</td><td>Jaya</td><td>British Telecom</td></tr>
						<tr><td>35221102018</td><td>Jayant Singh Fartyal</td><td>Wipro Technologies</td></tr>
						<tr><td>40113702018</td><td>Manish Bisht</td><td>Wipro Technologies</td></tr>
						<tr><td>01813702018</td><td>Manpreet Kaur</td><td>Infosys</td></tr>
						<tr><td>02721102018</td><td>Mehak Goyal</td><td>TCS / Infosys</td></tr>
						<tr><td>40813702018</td><td>Naman Jain</td><td>Wipro Technologies</td></tr>
						<tr><td>03021102018</td><td>Nikhil Datt Sharma</td><td>British Telecom</td></tr>
						<tr><td>02113702018</td><td>Onkar Bhayana</td><td>TCS / Infosys</td></tr>
						<tr><td>03221102018</td><td>Parmod Jangra</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>03421102018</td><td>Piyush  Pandey</td><td>Deloitte</td></tr>
						<tr><td>02213702018</td><td>Piyush Kumar Kunwar</td><td>Infosys</td></tr>
						<tr><td>03621102018</td><td>Raksha Negi</td><td>Infosys</td></tr>
						<tr><td>02513702018</td><td>Rhythm Paul</td><td>British Telecom / Wipro Technologies / Infosys</td></tr>
						<tr><td>40421102018</td><td>Rohit Vashisht</td><td>British Telecom / Infosys</td></tr>
						<tr><td>03013702018</td><td>Sambhav  Gupta</td><td>Deloitte</td></tr>
						<tr><td>03113702018</td><td>Sareena Philip</td><td>Decimal Technologies Pvt. Ltd.</td></tr>
						<tr><td>03213702018</td><td>Shikhar Mattoo</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>04021102018</td><td>Shivam Rai</td><td>Wipro Technologies</td></tr>
						<tr><td>03413702018</td><td>Shivam Sourav</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>03513702018</td><td>Shivansh Mohan</td><td>Wipro Technologies</td></tr>
						<tr><td>03613702018</td><td>Shobhit Bhargava</td><td>TCS / Wipro Technologies</td></tr>
						<tr><td>04113702018</td><td>Simran Sindhu</td><td>Infosys</td></tr>
						<tr><td>04213702018</td><td>Sudhit Jain</td><td>SAP Labs</td></tr>
						<tr><td>04313702018</td><td>Sumit Sharma</td><td>Infosys</td></tr>
						<tr><td>35521102018</td><td>Tejasv Sareen</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>04321102018</td><td>Vaibhav Garg</td><td>Infosys</td></tr>
						<tr><td>04413702018</td><td>Vaibhav Jain</td><td>British Telecom / Infosys</td></tr>
						<tr><td>04521102018</td><td>Vaibhav Verma</td><td>Infosys</td></tr>
						<tr><td>40213702018</td><td>Varun Shokeen</td><td>Infosys</td></tr>
						<tr><td>04621102018</td><td>Vishal Verma</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>04721102018</td><td>Vrishank Kumar</td><td>Wipro Technologies</td></tr>
						<tr><td>04613702018</td><td>Yash Sharma</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>40913702018</td><td>Yash Tandon</td><td>Wipro Technologies / Infosys</td></tr>
						<tr><td>04921102018</td><td>Yukta Gulati</td><td>Wipro Technologies</td></tr>
						
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="c1720">
                  <center>BCA : 2017 - 20 Placement Records</center>
					<table class="table">
						<tbody>
						<tr><td>	00121102017	</td>	<td>	Aarush Goel	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	40213702017	</td>	<td>	Aashray Sharma	</td>	<td>	TCS	</td></tr>
                            <tr><td>	41021102017	</td>	<td>	Aayush Panwar	</td>	<td>	British Telecom	</td></tr>
                            <tr><td>	00221102017	</td>	<td>	Achal Tanwar	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	35121102017	</td>	<td>	Akrti Srivastava	</td>	<td>	Capgemini / Wipro Technologies	</td></tr>
                            <tr><td>	00113702017	</td>	<td>	Akshay Tanwar	</td>	<td>	Guardian	</td></tr>
                            <tr><td>	40613702017	</td>	<td>	Akshit Tiwari	</td>	<td>	Tech Mahindra	</td></tr>
                            <tr><td>	50121102017	</td>	<td>	Ambika	</td>	<td>	Genpact	</td></tr>
                            <tr><td>	00321102017	</td>	<td>	Amrinder Singh Sandhu	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	00313702017	</td>	<td>	Ankush Gusain	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	00521102017	</td>	<td>	Anmol Kaur	</td>	<td>	IBM India	</td></tr>
                            <tr><td>	00413702017	</td>	<td>	Anurag Batra	</td>	<td>	SAP Labs	</td></tr>
                            <tr><td>	35113702017	</td>	<td>	Anurag Munjal	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	00621102017	</td>	<td>	Ashish Kaushik	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	00813702017	</td>	<td>	Ashu Kanojia	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	00913702017	</td>	<td>	Ayush Kumar	</td>	<td>	British Telecom	</td></tr>
                            <tr><td>	01013702017	</td>	<td>	Bhavini Chadha	</td>	<td>	TCS	</td></tr>
                            <tr><td>	00821102017	</td>	<td>	Chetna Pandey	</td>	<td>	British Telecom	</td></tr>
                            <tr><td>	01021102017	</td>	<td>	Chitrank Vashist	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	01213702017	</td>	<td>	Dilpreet Singh	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	01413702017	</td>	<td>	Gagandeep Singh	</td>	<td>	Tech Mahindra	</td></tr>
                            <tr><td>	01321102017	</td>	<td>	Garvit Ahuja	</td>	<td>	Guardian	</td></tr>
                            <tr><td>	01513702017	</td>	<td>	Hardik Soni	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	01621102017	</td>	<td>	Isha Sharma	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	01713702017	</td>	<td>	Jisha Joseph	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	40113702017	</td>	<td>	Keshav Sharma	</td>	<td>	Capgemini / Genpact / Wipro Technologies	</td></tr>
                            <tr><td>	01821102017	</td>	<td>	Keshri Nandan	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	02213702017	</td>	<td>	Krishna Arora	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	35313702017	</td>	<td>	Manav Sharma	</td>	<td>	Genpact	</td></tr>
                            <tr><td>	02313702017	</td>	<td>	Manish Kumar	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	01921102017	</td>	<td>	Mayank Gupta	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	02513702017	</td>	<td>	Mayank Setia	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	02713702017	</td>	<td>	Megha Joshi	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	02813702017	</td>	<td>	Mohit Dhankhar	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	02121102017	</td>	<td>	Navneet Kaur	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	02221102017	</td>	<td>	Neeraj Pal Singh Bisht	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	35421102017	</td>	<td>	Paras Mahendru	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	02521102017	</td>	<td>	Pranav Mehta	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	02621102017	</td>	<td>	Pranjal Sharma	</td>	<td>	Tech Mahindra	</td></tr>
                            <tr><td>	03213702017	</td>	<td>	Rishabh Malik	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	35413702017	</td>	<td>	Ritik Bhatnagar	</td>	<td>	British Telecom	</td></tr>
                            <tr><td>	02821102017	</td>	<td>	Ritika Keshri	</td>	<td>	S.M. Technology	</td></tr>
                            <tr><td>	03021102017	</td>	<td>	Sachin Singh	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03121102017	</td>	<td>	Sagar Sharma	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	03321102017	</td>	<td>	Saijal Vashista	</td>	<td>	Genpact	</td></tr>
                            <tr><td>	03513702017	</td>	<td>	Sanjana Sharma	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03713702017	</td>	<td>	Santosh Kumar	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	03421102017	</td>	<td>	Shipranjali	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	40721102017	</td>	<td>	Shivam Saxena	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	04113702017	</td>	<td>	Shubham Jha	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	04213702017	</td>	<td>	Shubham Singhal	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	04313702017	</td>	<td>	Suparna Khara	</td>	<td>	Capgemini / TCS	</td></tr>
                            <tr><td>	03621102017	</td>	<td>	Surbhi Sharma	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	35621102017	</td>	<td>	Surya Dhawan	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	41121102017	</td>	<td>	Tanya Jain	</td>	<td>	Capgemini 	</td></tr>
                            <tr><td>	04513702017	</td>	<td>	Ujjwaldeep Singh	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03721102017	</td>	<td>	Utkarsh Kumar	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	03821102017	</td>	<td>	Vaibhav Sethi	</td>	<td>	Guardian	</td></tr>
                            <tr><td>	40421102017	</td>	<td>	Vatsal Singhal	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03921102017	</td>	<td>	Vijit Tiwari	</td>	<td>	Genpact / Amazon	</td></tr>
                            <tr><td>	04221102017	</td>	<td>	Yajur Sethi	</td>	<td>	Capgemini / Wipro Technologies	</td></tr>


						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="c1619">
                 <center>BCA : 2016 - 19 Placement Records</center>
					<table class="table">
						<tbody>
							<tr><td>	00113702016	</td>	<td>	Aarti Dabral	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	00121102016	</td>	<td>	Abhishek Saxena	</td>	<td>	Ramy Infotech	</td></tr>
                            <tr><td>	00221102016	</td>	<td>	Adish Jain	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	00313702016	</td>	<td>	Aditya Pratap	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	40221102016	</td>	<td>	Aman Nasa	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	40413702016	</td>	<td>	Amandeep Singh	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	00421102016	</td>	<td>	Aniket Singh	</td>	<td>	Capgemini	</td></tr>
                            <tr><td>	00521102016	</td>	<td>	Anushka Gulati	</td>	<td>	IBM India / Infosys	</td></tr>
                            <tr><td>	00813702016	</td>	<td>	Archit Goswami	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	00721102016	</td>	<td>	Arushi Tyagi	</td>	<td>	Amazon	</td></tr>
                            <tr><td>	35113702016	</td>	<td>	Ashmita Ahuja	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	00913702016	</td>	<td>	Ashutosh Gupta	</td>	<td>	Amazon	</td></tr>
                            <tr><td>	00921102016	</td>	<td>	Aviral Adeep Gupta	</td>	<td>	Capgemini	</td></tr>
                            <tr><td>	40121102016	</td>	<td>	Bhawna	</td>	<td>	Infosys 	</td></tr>
                            <tr><td>	01121102016	</td>	<td>	Deepank Sachdeva	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	35213702016	</td>	<td>	Dhriti Bhatia	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	01213702016	</td>	<td>	Gaurav Singh	</td>	<td>	TCS	</td></tr>
                            <tr><td>	01321102016	</td>	<td>	Guneesh Basundhra	</td>	<td>	Infosys 	</td></tr>
                            <tr><td>	01313702016	</td>	<td>	Harangad Singh	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	01521102016	</td>	<td>	Harbans Yadav	</td>	<td>	Ramy Infotech	</td></tr>
                            <tr><td>	01613702016	</td>	<td>	Harsh Tanwar	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	01621102016	</td>	<td>	Himani	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	01721102016	</td>	<td>	Himanshu Verma	</td>	<td>	Capgemini	</td></tr>
                            <tr><td>	01821102016	</td>	<td>	Ishika Gera	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	01813702016	</td>	<td>	Jashvin Kaur	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	02121102016	</td>	<td>	Karan Garg	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	01913702016	</td>	<td>	Karan Sehgal	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	40721102016	</td>	<td>	Karan Sharma	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	02013702016	</td>	<td>	Kiran Arora	</td>	<td>	Infosys 	</td></tr>
                            <tr><td>	02221102016	</td>	<td>	Mandeep Singh	</td>	<td>	Ramy Infotech	</td></tr>
                            <tr><td>	02321102016	</td>	<td>	Manish Kumar	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	02521102016	</td>	<td>	Mohit Chaturvedi	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	02621102016	</td>	<td>	Mohit Daga	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	35413702016	</td>	<td>	Naveen Khurana	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	02313702016	</td>	<td>	Nikita Gulati	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	02413702016	</td>	<td>	Nishant Arora	</td>	<td>	SAP Labs India	</td></tr>
                            <tr><td>	02513702016	</td>	<td>	Poonam Kumari	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	03021102016	</td>	<td>	Pranav Sehgal	</td>	<td>	Capgemini	</td></tr>
                            <tr><td>	03121102016	</td>	<td>	Prashant	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03221102016	</td>	<td>	Priyanka Sharma	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	03421102016	</td>	<td>	Rashmi Vij	</td>	<td>	Infosys 	</td></tr>
                            <tr><td>	03521102016	</td>	<td>	Rishabh Kumar	</td>	<td>	TCS	</td></tr>
                            <tr><td>	03313702016	</td>	<td>	Samyak Jain	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03413702016	</td>	<td>	Sandeep Bhatt	</td>	<td>	TCS	</td></tr>
                            <tr><td>	03513702016	</td>	<td>	Sanjna Katyal	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03921102016	</td>	<td>	Saurabh Sharma	</td>	<td>	TCS	</td></tr>
                            <tr><td>	40321102016	</td>	<td>	Saurabh Singh	</td>	<td>	Ramy Infotech	</td></tr>
                            <tr><td>	03713702016	</td>	<td>	Shivam Chandra	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	04021102016	</td>	<td>	Shivani Kandwal	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04221102016	</td>	<td>	Shubham Nanda	</td>	<td>	Concentrix	</td></tr>
                            <tr><td>	35421102016	</td>	<td>	Somya Jain	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04013702016	</td>	<td>	Sreelakshmi M Prabhu	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	04213702016	</td>	<td>	Sumit Sharma	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	35621102016	</td>	<td>	Sunny Arora	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	04313702016	</td>	<td>	Swastika Dhakal	</td>	<td>	Amazon / Real Time Data Services Pvt. Ltd.	</td></tr>
                            <tr><td>	04513702016	</td>	<td>	Tamanna Pandit	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04613702016	</td>	<td>	Trisha Dixit	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	35613702016	</td>	<td>	Tushar Anand	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04713702016	</td>	<td>	Utkarsh Sareen	</td>	<td>	Deloitte	</td></tr>
                            <tr><td>	40513702016	</td>	<td>	Vansh Srivastava	</td>	<td>	TCS	</td></tr>
						</tbody>
					</table>
              </div>
              <!--<div role="tabpanel" class="tab-pane fade" id="c1518">
                  <center>BCA : 2015 - 18 Placement Records</center>
					<table class="table">
						<tbody>
							<tr><td>	00221102015	</td>	<td>	Aakash Tomar	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	00321102015	</td>	<td>	Abhinav Jain	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	40321102015	</td>	<td>	Aditya Gupta	</td>	<td>	TCS	</td></tr>
                            <tr><td>	35113702015	</td>	<td>	Aishwarya Raman	</td>	<td>	British Telecom India/ Infosys	</td></tr>
                            <tr><td>	00413702015	</td>	<td>	Akshya Chauhan	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	35313702015	</td>	<td>	Amandeep Kaur Jolly	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	00613702015	</td>	<td>	Amanjeet Singh	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	00721102015	</td>	<td>	Anmol Kukreja	</td>	<td>	Convergys	</td></tr>
                            <tr><td>	00913702015	</td>	<td>	Arvind Aswal	</td>	<td>	SAP Labs India	</td></tr>
                            <tr><td>	01013702015	</td>	<td>	Ashish Kumar Malik	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	01113702015	</td>	<td>	Ashutosh Gupta	</td>	<td>	Convergys	</td></tr>
                            <tr><td>	01213702015	</td>	<td>	Bharath	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	40121102015	</td>	<td>	Bhavika Bhasin	</td>	<td>	Alight India / Infosys	</td></tr>
                            <tr><td>	01313702015	</td>	<td>	Chanakya Sharma	</td>	<td>	TCS	</td></tr>
                            <tr><td>	01121102015	</td>	<td>	Deepak Gupta	</td>	<td>	TCS	</td></tr>
                            <tr><td>	01413702015	</td>	<td>	Devika Passi	</td>	<td>	British Telecom India/ Infosys	</td></tr>
                            <tr><td>	01513702015	</td>	<td>	Dhananjay	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	01321102015	</td>	<td>	Eklavya	</td>	<td>	Wipro Technologies	</td></tr>
                            <tr><td>	35413702015	</td>	<td>	Eshita Madhok	</td>	<td>	British Telecom India/ TCS Ignite	</td></tr>
                            <tr><td>	01713702015	</td>	<td>	Gagandeep Singh	</td>	<td>	TCS / Convergys	</td></tr>
                            <tr><td>	02013702015	</td>	<td>	Gautam Gandhi	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	40113702015	</td>	<td>	Harshita Nager	</td>	<td>	Capgemini	</td></tr>
                            <tr><td>	35513702015	</td>	<td>	Himanshi Gupta	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	02413702015	</td>	<td>	Kashish Arora	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	02513702015	</td>	<td>	Keshav Chawla	</td>	<td>	Alight India	</td></tr>
                            <tr><td>	02121102015	</td>	<td>	Lakshita Sangtani	</td>	<td>	Tech Mahindra/Infosys	</td></tr>
                            <tr><td>	02613702015	</td>	<td>	Manisha Dadwal	</td>	<td>	Alight India	</td></tr>
                            <tr><td>	02813702015	</td>	<td>	Mansi Jain	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	02913702015	</td>	<td>	Mansi Singh	</td>	<td>	British Telecom India	</td></tr>
                            <tr><td>	02621102015	</td>	<td>	Mohit Kanwar	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	02821102015	</td>	<td>	Naman Sharma	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	03313702015	</td>	<td>	Nikhil Kumar	</td>	<td>	TCS	</td></tr>
                            <tr><td>	02921102015	</td>	<td>	Palak Banwari	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	03513702015	</td>	<td>	Priya Khandelwal	</td>	<td>	Wipro Technologies / TCS	</td></tr>
                            <tr><td>	03613702015	</td>	<td>	Rahul Soni	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	35421102015	</td>	<td>	Richa Narang	</td>	<td>	Convergys	</td></tr>
                            <tr><td>	03713703015	</td>	<td>	Rishi Raj Mishra	</td>	<td>	Tech Mahindra	</td></tr>
                            <tr><td>	35521102015	</td>	<td>	Riya Kalra	</td>	<td>	Amazon India/ Infosys	</td></tr>
                            <tr><td>	04013702015	</td>	<td>	Sanchit Saini	</td>	<td>	TCS	</td></tr>
                            <tr><td>	04113702015	</td>	<td>	Shashank Kundliya	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	04121102015	</td>	<td>	Simar Kaur	</td>	<td>	British Telecom India	</td></tr>
                            <tr><td>	04413702015	</td>	<td>	Simran Samal	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04321102015	</td>	<td>	Smriti Kalra	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	04421102015	</td>	<td>	Srishti Panjrath	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04621102015	</td>	<td>	Tanuj Bisht	</td>	<td>	TCS	</td></tr>
                            <tr><td>	04613702015	</td>	<td>	Tanya Singh	</td>	<td>	Deloitte India	</td></tr>
                            <tr><td>	35613702015	</td>	<td>	Thejashree M.A.	</td>	<td>	Infosys	</td></tr>
                            <tr><td>	04713702015	</td>	<td>	Tirna Roy	</td>	<td>	Alight India	</td></tr>
                            <tr><td>	05113702015	</td>	<td>	Vasudha	</td>	<td>	Convergys	</td></tr>
                            <tr><td>	40621102015	</td>	<td>	Vikas Pokhriyal	</td>	<td>	TCS	</td></tr>
						</tbody>
					</table>
              </div>
            </div>
            </h2>-->
           
           
              <!--<div style="height: 10vh;"></div>-->
             
          </div>
        </div>
   
      </section>

<!-- Footer -->
   
    
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
