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

 .center-row-mg {
      display: flex;
      justify-content: center;
    }

    .col-md-6 {
      text-align: center;
    }

    .img-wrapper-mg {
      max-width: 300px; /* Adjust the image width as per your preference */
      
      width: auto;
      margin: 0 auto;
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
<!--    <div class="spinner-container">
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
          <img src="images/IMG-20240516-WA0017.jpg" />
          
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
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Institute of Information Technology & Management Alumni Association (Regd.)</h1>
              <hr class="hr-maroon"/>
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">The Alumni Association of the Institute of Information Technology and Management (Regd.) has attained formal registration with the Registrar of Societies, Government of Delhi, in accordance with the provisions of the Societies Registration Act XXI of 1860. The registration number is S/ WEST/2011/8900163, dated 29th January 2011.</h2>
              
              <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Registered Office:</h1> 
              <h2 class="text-justify tgfmlt" style="color: #4b4b4b;"><address>D-29, Institutional Area, Janakpuri, New Delhi-110058<br/>
                Tel: 28525051, 28525882, Fax: 28520239;<br/>
                Website: www.iitmjanakpuri.com<br/>
                Official contact:<br/>
                alumni@iitmipu.ac.in</address></h2>
          
               <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Members:</h1> 
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                 <ol>
                     <li>
                        <div class="row">
                             <div class="col-md-4"><strong>Prof. (Dr.) Rachita Rana</strong></div>
                             <div class="col-md-"><i>Chairperson</i></div>
                         </div>
                     </li>
                     <li>
                        <div class="row">
                             <div class="col-md-4"><strong>Dr. Deepika Arora</strong></div>
                             <div class="col-md-"><i>President</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Dr. Latika Malhotra</strong></div>
                             <div class="col-md-"><i>Vice President</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Dr. Charul Nigam</strong></div>
                             <div class="col-md-"><i>Vice President</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Dr. Mandeep Singh</strong></div>
                             <div class="col-md-"><i>Secretary</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Mr. Shiva Sharma</strong></div>
                             <div class="col-md-"><i>Member</i></div>
                         </div>
                     </li>
                     <li>
                         <div class="row">
                             <div class="col-md-4"><strong>Mr. Himanshu Matta </strong></div>
                             <div class="col-md-"><i>Member</i></div>
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
	                    <li style="list-style:decimal;">To cultivate connections among alumni and promote amicable relationships through organized meetings and gatherings among members of the Association.</li>
	                    <li style="list-style:decimal;">To facilitate and encourage alumni to contribute towards the improvement of the Institute's status in areas related to academic infrastructure and industry.</li>
	                    <li style="list-style:decimal;">To generate a corpus at the Institute of Information Technology & Management aimed at enhancing residential, educational, and recreational facilities for the institution. This includes fostering community interactions and addressing any other areas deemed appropriate by both the alumni and the Institute.</li>
	                    <li style="list-style:decimal;">To facilitate the exchange of professional knowledge, organize conferences, seminars, workshops, and training courses.</li>
	                    <li style="list-style:decimal;">To establish and create endowments aimed at providing assistance to students of the Institute through grants, scholarships, prizes, or in any other area deemed appropriate by both the Association and the Institute.</li>
	                    <li style="list-style:decimal;">To raise funds through subscriptions, contributions, donations, loans, or any other legal means to advance the objectives of the Association as outlined above.</li>
	                    <li style="list-style:decimal;">To engage in all lawful activities that are conducive to achieving the aforementioned objectives.</li>
                    </ol>
                </div>
               </div>
              </div>
               </h2>
               
               <h1 class="text-justify tgfmlt" style="color: #4b4b4b;">Membership Rules:</h1> 
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                  The membership of the Society is accessible to any individual meeting the criteria stipulated by the Association, as outlined below, without discrimination based on religion, caste, color, or creed, albeit contingent upon approval by the Executive Committee.
               </h2>
               <h2 class="text-justify tgfmlt" style="color: #4b4b4b;">
                 <div class="container">  
                   <div class="row">
                     <div class="col-md" style="margin:auto 2rem;">
                         

                   <ol>
                    	<li style="list-style-type: lower-alpha;">Regular Members: All alumni of IITM who have paid the membership fee (Rs. 1000/- as Life Membership fee)</li>
	                    <li style="list-style-type: lower-alpha;">Honorary Members:</li>
	                    <ol style="margin:auto 2rem;">
	                        <li style="list-style-type: lower-roman;">Faculty members who have served the Institute for a minimum of one year and have paid the life membership fee of the Association.</li>
	                        <li style="list-style-type: lower-roman;">All Ex-Directors</li>
	                        <li style="list-style-type: lower-roman;">Eminent individuals who have made significant contributions or have a strong interest in the development of the Institute.</li>
	                    </ol>
                    </ol>
                </div>
               </div>
              </div>
               </h2>
          </div>
          
          
        
          
          
   
        </div>
   
      </section>
            <?php include('../social_new.php'); ?>   
            <?php include('../footer_new.php'); ?>              

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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
