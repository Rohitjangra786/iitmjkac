<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link 
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>IITM Learning Resource Center</title>
    <style>
    .small{display:none;}
    .site-menu-toggle .site-mobile-menu .site-mobile-menu-body .site-mobile-menu-header .site-navbar-target{
        background: #800000;
    }
        .nav-link{
            color: #fff;
        }
        .fa-phone {
    color: black;
}
.fa-bars{
    color: white;
}
.btn {
    font-weight: 900;
}
 .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              background: pink;
              /*color: #ced4da;*/ 
                color: blue;
            }
             .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a{
            
              /*color: #ced4da;*/ 
                color: white;
            }
            
            
            /* Let Us C */
.caret{color: white;}
.white{}
.navbar .dropdown-menu {
  background-color: #800000;
}

/* and this styles the dropdwon trigger link, when open */
.navbar .dropdown.show a { 
  background-color: #800000;
}
.dropdown:hover>.dropdown-menu {
  display: block;
 
}
.dropdown > .dropdown-toggle:active {
    /*Without this, clicking will make it sticky*/
    pointer-events: none;
    
}
.dropdown-menu > a:hover {
    background-image: none;
    background-color: #581845 ;
}
.nav-item > a:hover {
    background-image: none;
    background-color: #581845 ;
    border-bottom:3px solid white;
}
.nav-item > a {
 
    border-bottom:3px solid #800000;
}
.nav-item{
    margin: 5px; padding: 5px;
}


/* Introduction para */
.intro{
    color: black;
    text-align: justify;
    line-height: 1.5;
}

.opac{
    background: grey;
    color: white;
}

.opac:hover{
    background: yellow;
    color: red;
    border: 2px solid red;
}
/* publications */
.pub{
    margin: 10px;
}
.pub-text{
    color: #000;
    margin-top: 5px;
    font-weight: bolder;
}
.pub-text:hover{
    color: #800000;
    font-weight: 800;
}
.img1 {
     background: #00ffff;
        opacity: 1.0;
        -webkit-filter: brightness(60%);
         
       /* filter: alpha(opacity=40);*/
    }
    
.img1:hover {
        opacity: 0.3;
       -webkit-filter: brightness(80%);
       -webkit-filter: sepia(100%) hue-rotate(90deg) saturate(400%);
  filter: sepia(100%) hue-rotate(90deg) saturate(400%);}
.menu {
  display: flex;
  flex-direction: row;
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu > li {
  margin: 0 1rem;
  overflow: hidden;
}

.menu-button-container {
  display: none;
  height: 100%;
  width: 30px;
  cursor: pointer;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#menu-toggle {
  display: none;
}

.menu-button,
.menu-button::before,
.menu-button::after {
  display: block;
  background-color: #fff;
  position: absolute;
  height: 4px;
  width: 30px;
  transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
  border-radius: 2px;
}

.menu-button::before {
  content: '';
  margin-top: -8px;
}

.menu-button::after {
  content: '';
  margin-top: 8px;
}

#menu-toggle:checked + .menu-button-container .menu-button::before {
  margin-top: 0px;
  transform: rotate(405deg);
}

#menu-toggle:checked + .menu-button-container .menu-button {
  background: rgba(255, 255, 255, 0);
}

#menu-toggle:checked + .menu-button-container .menu-button::after {
  margin-top: 0px;
  transform: rotate(-405deg);
}

@media (max-width: 700px) {
    .small{display:block;}
    .large{display:none;}
    .navbar-brand{
        display: none;
    }
  .menu-button-container {
    display: flex;
  }
  .menu {
    position: absolute;
    top: 0;
    margin-top: 50px;
    left: 0;
    flex-direction: column;
    width: 100%;
    justify-content: center;
    align-items: center;
  }
  #menu-toggle ~ .menu li {
    height: 0;
    margin: 0;
    padding: 0;
    border: 0;
    transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
  }
  #menu-toggle:checked ~ .menu li {
    border: 1px solid #333;
    height: 2.5em;
    padding: 0.5em;
    transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
  }
  .menu > li {
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0.5em 0;
    width: 100%;
    color: white;
    background-color: #222;
  }
  .menu > li:not(:last-child) {
    border-bottom: 1px solid #444;
  }
}            
            
            
            
            /* Let Ud C Ends */
            
            /* First Carousel Classes */
.carousel-image{
  width: 100%;
  height: 100vh;
}

.carousel-fade .carousel-item {
	opacity: 0;
	transition-duration: .6s;
	transition-property: opacity;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
	opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
	opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
	transform: translateX(0);
	transform: translate3d(0, 0, 0);
}

/* First Carousel Classes ends */
    </style>
  </head>
  <body>

 
<!--    <div class="site-mobile-menu site-navbar-target" style="background: #800000;">
        <div class="site-mobile-menu-header" style="background: #800000;">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle" style="color: white;"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body" style="background: #800000;">abc</div>
      </div> -->


      <div class="top-bar">
        <div class="container large">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block"><i class="fas fa-envelope"></i>
director@iitmipu.ac.in</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block"><i class="fas fa-phone"></i>
 +91/011-28525882, 28520239, 28525051</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

              </div>

            </div>

          </div>

        </div>
        <div class="small" style="text-align:center;"><h3>IITM Learning Resoure Center</h3></div>
      </div>
<nav class="navbar navbar-expand-lg navbar-light" style="background: #800000;">
 
 
         
             <div class="navbar-brand">
      
      <div class="container">
      <div class="row">
          <div class="col-md-5"><a href="index.html">
                              <img src="../upload_new/gallery/logow.png" class="logom" id="logom" 
              style="width: 9.2rem; height: 5.2rem;border-right:2px #fff solid;"/></a></div>
           <div class="col-md-2 lrc" style="color: #fff; margin: 10px;margin-left: 30px;display: block;line-height: 1.5;font-size: 14px;">Learning<br> Resource <br> Center</div>
      </div>
          </div>               
                      
                     
                 
              
      
      </div>
         
         <div class="col-md" style="margin-right:0;margin-left:30%;">
             <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
     
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="color: #fff;">Home</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="about-library.php"><span style="color: #fff;">About IITM Library</span></a>
          <a class="dropdown-item" href="resources.php"><span style="color: #fff;">Resources  </span></a>
          <a class="dropdown-item" href="advisory.php"><span style="color: #fff;">Library Committee   </span></a>
          <a class="dropdown-item" href="contactus.php"><span style="color: #fff;">Contact Us  </span></a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="color: #fff;">Catalogue</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="opac.php"><span style="color: #fff;">OPAC  </span></a>
          
        </div>
      </li>
       <li class="nav-item">
       <a class="nav-link " href="libraryservices.php">
          <span style="color: #fff;">Services</span>
        </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link  " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="color: #fff;">Resources & Supporting Tools</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ejournals.php"><span style="color: #fff;">E Journals </span></a>
          <a class="dropdown-item" href="ebooks.php"><span style="color: #fff;">E Books </span></a>
          <a class="dropdown-item" href="enewsletters.php"><span style="color: #fff;">E Newsletters </span></a>
          <a class="dropdown-item" href="edatabases.php"><span style="color: #fff;">E Databases </span></a>
        <!--  <a class="dropdown-item" href="openaccessresources.php"><span style="color: #fff;">Open Access Resources </span></a> -->
        </div>
      </li>
    </ul>
  </div>
  
  
         </div>
    
  
  
</nav>
   <!--   <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background: #800000;">

        <div class="container">
           <div class="row align-items-center position-relative">


             <div class="site-logo">
             
            <div class="container">
                  <div class="row">
                      <div class="col-md-5">
                          <a href="index.html" class="text-black"><img src="../upload_new/gallery/logow.png" class="logom" id="logom" 
              style="width: 9.2rem; height: 5.2rem;border-right:2px #fff solid;"/></a>
                      </div>
                      <div class="col-md-2" style="color: #fff; margin: 10px;margin-left: 30px;display: block;line-height: 1.5;font-size: 14px;">Learning<br> Resource <br> Center</div>
                  </div>
              </div>
              
             
            </div>

          

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"><i class="fas fa-bars btn btn-lg" href="#" role="button"></i></span></a></div> 
                
          </div> 
       </div>

      </header> -->

            
                  

              
    <div class="hero" style="background-image: url('images/hero_1.jpg');">
        <div id="my-carousel" class="carousel slide carousel-fade" data-ride="carousel" style="margin-right: auto;margin-left: auto;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-left:0;width: 100%;">
        <div class="row" style="">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/a.jpg" alt="Business Plan">
             </div>
             
      </div>
     </div>
      <div class="carousel-item" style="margin-left:0;width: 100%;">
        <div class="row" style="">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/b.jpg" alt="Business Plan">
             </div>
             
      </div>
     </div>
    <div class="carousel-item" style="margin-left:0;width: 100%;">
        <div class="row" style="">
            <div class="col-md">
            <img class="d-block carousel-image img-responsive" src="images/c.jpg" alt="Diwali">
         </div>
         
        </div>
         </div>
   
         <div class="carousel-item" style="margin-left:0;width: 100%;">
            <div class="row" style="">
                  <div class="col-md">
             <img class="d-block carousel-image img-responsive" src="images/a.jpg" alt="Leader">
         </div>
         
        </div>
    </div>
    <div class="carousel-item" style="margin-left:0;width: 100%;">
            <div class="row" style="">
                  <div class="col-md">
             <img class="d-block carousel-image img-responsive" src="images/b.jpg" alt="Leader">
         </div>
        
        </div>
    </div>
    <div class="carousel-item" style="margin-left:0;width: 100%;">
            <div class="row" style="">
                  <div class="col-md">
             <img class="d-block carousel-image img-responsive" src="images/c.jpg" alt="Leader">
         </div>
         
        </div>
    </div>
    
  </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
</div>
  
<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>About Learning Resource Centre</h1>
            <p class="intro">
               “Libraries store the energy that fuels the imagination. They open up windows to the world and inspire us to explore and achieve, and contribute to improving our quality of life.”
Sidney Sheldon

            </p>
            <p class="intro">
              Institute of Information Technology & Management (IITM) have two libraries which are the large repository of knowledge that supports and promotes the use of rich and diverse collection among the students of Management and Information Technology. Both the Libraries are situated in the heart of the campus incorporating the modern technologies so as to provide the readers right information at the right time to face the challenges and achieve results in complex conditions. All Students, Faculty and Staff Members are entitled to make use of the library services such as circulation, reference, indexing, SDI, CAS and inter library loan etc. The library is well-stocked and fully computerized with latest editions of books by eminent authors & is having a huge collection of books on management and Information Technology to cater to the needs and requirements of the faculty as well as students. The library’s operation and services are fully computerized with “SOUL 3.0” multi-user integrated library automation software and a bar code based circulation system is in use.
            </p>
            <button class="opac btn btn-block">OPAC ONLINE SEARCH</button>
        </div>
        <div class="col-md">
           <img class="img-responsive" src="images/library.png" alt="IITM Library"   /> 
        </div>
    </div>
</div>
<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>IITM Publications</h1>
        </div>
    </div>
    <div class="pub">
         <div class="row">
        <div class="col-md">
            <div class="row">
                <img class="img-responsive img1" src="images/cover1.png" alt="Publication 1"/>
            </div>
            <div class="row">
                <div style="text-align:center">
                    <p class="pub-text">
                        Volume 11 | Issue 4 | October 2021
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row">
                <img class="img-responsive img1" src="images/cover2.png" alt="Publication 2"/>
            </div>
            <div class="row">
                <div style="text-align:center">
                <p class="pub-text">
                        Volume 11 | Issue 4 | October 2021
                </p></div>
            </div>
        </div>
                <div class="col-md">
            <div class="row">
                
                <img class="img-responsive img1" src="images/cover3.png" alt="Publication 3"/>
            </div>
            <div class="row">
                <div style="text-align:center">
                <p class="pub-text">
                        Volume 11 | Issue 4 | October 2021
                </p></div>
            </div>
        </div>
    </div>
    </div>
</div>
<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>New Arrival</h1>
        </div>
    </div>
    <div class="pub">
         <div class="row">
       
    </div>
    </div>
</div>
<div style="height: 5vh;"></div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).on('click', function() {
    return $('.collapse').collapse('hide');
});
    </script>
  </body>
</html>