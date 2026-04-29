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
          <img src="images/pl1.jpg" />
        </div>

<div class="navigation"> 
<?php include('../navbartop.php'); ?>
<?php include('navbaralumni.php'); 
?></div>
        <div class="banner">
          <h1 class="tgfmlt">IITM Alumni</h1>
          <button class="tgfmlt" onclick="window.location.href='#assoc'">Read More</button>
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

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="assoc">Alumni Association</h1>
          <div class="underline"></div>
          <div class="container">
              

  <iframe width="410" height="345" src="https://www.youtube.com/embed/shL3xnmAa9Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="410" height="345" src="https://www.youtube.com/embed/J0y19Ot3748" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br>
<!--<iframe width="410" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
</iframe>-->
<iframe width="410" height="345" src="https://www.youtube.com/embed/DeHON_k8fP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="410" height="345" src="https://www.youtube.com/embed/CmlyV8O3z2w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>
			<!--<div class="row mt-30">
				<div class="col-sm-12 text-right">
					<img src="direct-image/feedback_9.jpg" class="img-responsive col-sm-3 pull-right speak">
					<div class="text-danger mt-5 mb-10 font-family-1">
						<span class="text-size-25">Mr. Rahil Akhtar</span><br/>
						<span>BCA (2006 - 09)</span>
					</div>
					<hr class="hr-maroon mt-5 mb-5" />
					<p class="text-justify text-default">I am glad that I made the choice to take up Bachelors in Computer Applications (BCA) at IITM. At present, I am working in the Advisory / Consultancy Industry now from where I stood. I applied what I have learnt & it has improved the systems and process flow in my area of work.  It was delightful to study in those classrooms in such a cooperative environment under the guidance of ever-supporting professors. It indeed was an experience for life !</p>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-sm-12">
					<img src="direct-image/feedback_8.jpg" class="img-responsive col-sm-3 speak pull-left"/>
					<div class="text-danger mt-5 font-family-1">
						<span class="text-size-25">Mr. Jasmeet Singh</span><br/>
						<span>BCA (2006 - 09)</span>
					</div>
					<hr class="hr-maroon mt-5 mb-5" />
					<p class="text-justify text-default">"IITM has provided me with the experience and exposure that has helped me throughout my graduation. The faculty members and their teachings have taught me important lessons for life. I had also successfully completed an AMIETE Engineering Degree via, distance learning along with my BCA degree from IITM. Then I got admission into M.Tech (CSE) in GGSIPU, main campus after scoring a good percentile in IIT- GATE national exam. After completing my  post graduation I worked at Amity University, Haryana as a lecturer for 2 years. Then I joined JIMS, Rohini as an Assistant Professor and worked there for 2 years and six months. On Jan 2016, I left my job at JIMS and started my own startup by the name "Delhi Developer", a Web - Development &amp; Graphic Design Company. Our company has been doing very well, Since then I worked on several domestic and off shore projects.</p>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-sm-12 pr-0 text-right">
					<img src="direct-image/feedback_10.jpg" class="img-responsive col-sm-3 pull-right speak"/>
					<div class="text-danger mt-5 font-family-1">
						<span class="text-size-25">Mr. Yed Danish Iqbal</span><br/>
						<span>BBA (2009 - 12)</span>
					</div>
					<hr class="hr-maroon mt-5 mb-5" />
					<p class="text-justify text-default">Greetings to all the people of IITM, I have spent the most important phase of my life with IITM. Attending classes which were more of a compulsion than will (75% attendance), acting like bandits in canteen and most important, being the CR of the class, all this had made me a better person. So, do not miss out on anything that you will regret because this time and opportunity will never come back again.</p>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-sm-12 pr-0">
					<img src="direct-image/feedback_11.jpg" class="img-responsive col-sm-3 speak pull-left"/>
					<div class="text-danger mt-5 font-family-1">
						<span class="text-size-25">Ms. Shalini Delics</span><br/>
						<span>BBA (2009 - 12)</span>
					</div>
					<hr class="hr-maroon mt-5 mb-5" />
					<p class="text-justify text-default">Where to start from, IITM is very near to my heart. Entire experience was awesome. Whether its faculties  or classmates, we all were like a helping hand. Faculties  are well versed in their subjects. I have learned a lot. I am really thankful and it has a great contribution to whatever I am today. I wish all the best and a better future to my juniors and great respect to all the faculties.</p>
				</div>


              
              
              
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Institute of Information Technology & Management Alumni Association (Regd.)</h1>
              <hr class="hr-maroon"/>
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">The Alumni Association of Institute of Information Technology and Management (Regd.)
                has been formally registered with the Registrar of Societies Govt. of Delhi. 
                Under Societies Registration Act XXI of 1860, (Registration no: S/ WEST/2011/8900163 dated 29th January 2011).</h2>
              
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Registered Office:</h1> 
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;"><address>D-29, Institutional Area, Janakpuri, New Delhi-110058<br/>
                Tel: 28525051, 28525882, Fax: 28520239;<br/>
                Website: www.iitmipu.ac.in<br/>
                Official contact:<br/>
                alumni@iitmipu.ac.in</address></h2>
          
               <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Members:</h1> 
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                 <ol>
                     <li>
                        <div class="row">
                             <div class="col-md-4"><strong>Prof. (Dr.) Sudhir Kumar Sharma</strong></div>
                             <div class="col-md-"><i>Chairman, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                        <div class="row">
                             <div class="col-md-4"><strong>Dr. Deepika Arora</strong></div>
                             <div class="col-md-"><i>President, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Ms. Nidhi Srivastava</strong></div>
                             <div class="col-md-"><i>Vice President, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Dr. Ruby Dahiya</strong></div>
                             <div class="col-md-"><i>Vice President, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Dr. Mandeep Singh</strong></div>
                             <div class="col-md-"><i>Secretary, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Mr. Himanshu Matta</strong></div>
                             <div class="col-md-"><i>Member, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Ms. Kirti Makhija</strong></div>
                             <div class="col-md-"><i>Member, Alumni Association</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Mr. Naresh Dubey</strong></div>
                             <div class="col-md-"><i>Member, Alumni Association</i></div>
                         </div>
                     </li>
                 </ol>
                </h2>

               <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">The Aim and Objectives:</h1> 
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                 <div class="container">  
                   <div class="row">
                     <div class="col-md" style="margin:auto 2rem;">
                         

                   <ol style="list-style:decimal;">
                    	<li style="list-style:decimal;">To promote and foster mutually beneficial interaction between the Alumni and the Alma Mater.</li>
	                    <li style="list-style:decimal;">To help alumni achieve their professional goals</li>
	                    <li style="list-style:decimal;">To undertake activities for nation building including those of charitable nature</li>
	                    <li style="list-style:decimal;">To foster linkages amongst the alumni and to promote personal and friendly relations through meetings and get-together among members of the Association</li>
	                    <li style="list-style:decimal;">To facilitate and encourage alumni to contribute towards improvement in the status of the Institute in the areas pertaining to academic infrastructure and industry</li>
	                    <li style="list-style:decimal;">To generate corpus at the Institute of Information Technology & Management for creating better residential/educational/ recreational facilities for the Institute. Community interactions and any other area that the alumni and the Institute consider appropriate</li>
	                    <li style="list-style:decimal;">To exchange professional knowledge, organize conferences, seminars, workshops and training courses.</li>
	                    <li style="list-style:decimal;">To create and establish endowments to render assistance to students of the Institute through grants, scholarships and prizes or in any other area so deemed appropriate by the Association and the Institute</li>
	                    <li style="list-style:decimal;">To raise or collect funds by subscriptions, contributions, donations, loans or by any other legal means for furtherance of the above objectives of the Association.</li>
	                    <li style="list-style:decimal;">To undertake all such lawful activities which are conducive to the attainment of the above objectives</li>
                    </ol>
                </div>
               </div>
              </div>
               </h2>
               
               <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Membership Rules:</h1> 
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                   The membership of the Society is open to any person, as defined below, 
                   fulfilling the terms & conditions of the Association 
                   without discrimination of religion, caste, colour or creed but subject to the approval of the Executive Committee.
               </h2>
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                 <div class="container">  
                   <div class="row">
                     <div class="col-md" style="margin:auto 2rem;">
                         

                   <ol>
                    	<li style="list-style-type: lower-alpha;">Regular Members: All alumni of IITM who have paid the membership fee (Rs. 1000/- as Life Membership fee)</li>
	                    <li style="list-style-type: lower-alpha;">Honorary Members:</li>
	                    <ol style="margin:auto 2rem;">
	                        <li style="list-style-type: lower-roman;">Faculty members, who have served the Institute for at least one year and have paid life membership fee of the Association.</li>
	                        <li style="list-style-type: lower-roman;">All Ex-Directors</li>
	                        <li style="list-style-type: lower-roman;">Eminent persons who have contributed immensely or have keen interest for the development of the Institute.</li>
	                    </ol>
                    </ol>
                </div>
               </div>
              </div>
               </h2>
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
  </body>
</html>
