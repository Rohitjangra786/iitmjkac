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
/* carousal control */
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23800000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23800000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
/* carousal control ends */
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
.accred
{
	box-shadow: 0px 0px 5px;
	padding:20px;
	border-radius: 5px;	
	margin-bottom: 20px;
	width: 100%;
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


</style>
  </head>
  <body>
   

   <!--   <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div> -->
      <header class="header" style="height: 150px; background-color: #4b4b4b;">
        
<div class="navigation">    
<?php include('../navbartop.php'); ?>
<?php include('navbaralumni.php'); 
?></div>
        
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
          <h1 class="section-heading" id="cmpl">Alumni Speak</h1>
          <div class="underline"></div>
          <div class="container">
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Success Stories</h1>
              <hr class="hr-maroon"/>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                   
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/alumnispeak/feedback_38.jpg" alt="Anjum Tanwar" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />    
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Anjum Tanwar</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">MBA (2014-16)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">Experience at IITM has been extraordinary, 
                                right from the day one to the last. All the teachers have been supportive and made us learn beyond the books. 
                                Classes have been interactive and the knowledge gained from them can not be gained from anywhere else. We never had any 
                                classes with one sided communication from teachers, on the other hand our teachers have always adopted innovative classroom 
                                teaching methods. Cultural programs, management development programs and guest lectures also helped me to develop personality. 
                                My overall experience at IITM was unforgettable and made me a knowledgeable person when I stepped out of it after 2 years.</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/alumnispeak/feedback_25.jpg" alt="Ms. Kiran Pundeer" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />   
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Kiran Pundeer</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">MBA (2015 - 17)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM is a place that has helped me in grooming myself and what I am now. At the same time the facilities
                                and the extra curricular activities helped me in enhancing my personality.</h3>
                            </div>
                        </div> 
                       
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/alumnispeak/feedback_27.jpg" alt="Ms. Snigdha Maggo" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Ms. Snigdha Maggo</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">MBA (2015 - 17)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM is committed to impart the highest quality of education and exposure to help 
                                develop the next generation of business leaders with global outlook and capability of adapting to the fast changing business environment of 
                                India and the world at large. By introducing new specialization areas and adopting an innovative pedagogy, the Institute has been constantly 
                                working to develop professionals with vision, courage and dedication to initiate and manage the change.</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/alumnispeak/feedback_28.jpg" alt="Mr. Nitin Chowdhary" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Nitin Chowdhary</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">MBA (2015 - 17)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM helped me become a seasoned Sales and Marketing professional capable of 
                                keeping up with the requirements of the industry. The practical learning approach and the case study method used during my MBA programme helped me 
                                understand the dynamics involved in the management of any business.</h3>
                            </div>
                        </div> 
                    </div>
                <!--<div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/alumnispeak/deepanshu.jpg" alt="deepanshu" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Deepanshu Sharma</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM is one of the remarkable institute among all the GGSIPU affiliated colleges. Indeed, I say that this institution do bring many transformations in me and persistently paved me the way to find the better version of myself. Certainly, there are innumerable assortments which adorns the IITM and attracts me invariably. I got infinite love and support from faculty. I am biblically grateful to my teachers who always cheers me up and channelizing my energy in the right direction. I would also like to extend my heartful thanks to IITM for getting me placed in my dream company ‘Deloitte’.</h3>
                            </div>
                        </div> 
                    </div>
                <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/alumnispeak/shivam.jpg" alt="shivam" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Shivam Sourav</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM has laid a good foundation where students are made to challenge themselves and develop the desire to achieve their best and to excel in all that they undertake. Experience at IITM has helped me to learn new things to shape me up as a better person both personally as well as professionally. The guidance and exposure that provided by IITM are very much appreciable and I feel fortunate enough to have it by my side as the very crucial moment of my career. I am thankful to the entire faculty specially Ms. Ankita Gupta (my class mentor) for guiding me. Our college gave each one of us an individual focus to enhance our abilities and get ready for the professional life ahead. Because of the college placement program, I got placed in Wipro Company, and I am beyond thrilled to start the new chapter that awaits me.</h3>
                            </div>
                        </div> 
                    </div>
                
                 
                 <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/alumnispeak/manish.jpg" alt="manish" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Manish Bisht</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM gave me the opportunity to grow and enhance my professional skills. The faculty are very supportive and encourage students to push their boundaries to rise above expectations. Since my admittance, I gained a lot of skills that has evolved me into a confident person ready to face the corporate world.</h3>
                            </div>
                        </div> 
                    </div>
                    <!--<div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                 <img src="images/alumnispeak/manish.jpg" alt="shikhar" class="img-responsive speak pull-right" style="margin-top:2rem;width: 300px; height: 300px;" />  
                            </div>
                            <div class="col-md-8">
                                <h2 class="tgfmlt text-justify" style="color: #800000;">Mr. Shikhar Mattoo</h2>
                                <h3 class="tgfmlt text-justify" style="color: #800000;">BCA (2018-2021)</h3>
                                <hr class="hr-maroon"/>
                                <h3 class="tgfmlt text-justify" style="color: #4b4b4b;">IITM is a well-oiled education machinery, powered by highly competent faculty & excellent infrastructure. I have been a student for 3 years in this institute and it has completely transformed my approach towards education and skills. Apart from providing education the institute has given me equal emphasis on personality development, focusing on inculcating ethics. I received deep knowledge and confidence to secure jobs at leading companies and build a successful career in the field of IT. The faculty support was over and beyond limits with strong intentions to mould us towards excellence.</h3>
                            </div>
                        </div> 
                    </div>-->
                </div>
            </div>
            
            
              <hr class="hr-maroon"/>
              
            
             <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Alumni Video</h1>
              <hr class="hr-maroon"/>
               <div class="container-fluid"><center>
            
            <iframe width="410" height="345" src="https://www.youtube.com/embed/shL3xnmAa9Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe>
<iframe width="410" height="345" src="https://www.youtube.com/embed/J0y19Ot3748" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe></br>
<!--<iframe width="410" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
</iframe>-->
<iframe width="410" height="345" src="https://www.youtube.com/embed/DeHON_k8fP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe>
<iframe width="410" height="345" src="https://www.youtube.com/embed/CmlyV8O3z2w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe></br>
<iframe width="410" height="345" src="https://www.youtube.com/embed/xjgDRnHBDds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe>
<iframe width="410" height="345" src="https://www.youtube.com/embed/J_YK9iOavpE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe><br>
<iframe width="410" height="345" src="https://www.youtube.com/embed/5m-xtmOIE-c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe>
<iframe width="410" height="345" src="https://www.youtube.com/embed/ljVv3k1RIaY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 50px;"></iframe>
            </center>
            </div>
            
            
            
            
            
    <div style="height: 10vh;"></div>        
            
            
            
           
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
  </body>
</html>
