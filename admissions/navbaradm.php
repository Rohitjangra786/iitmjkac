 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="//db.onlinewebfonts.com/c/3d801c16769ba2dd6344be073c5bb938?family=TradeGothicLTW01-Light" rel="stylesheet" type="text/css"/>
    
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

        .navcontainer{
           margin-left: 3rem;
            margin-right: 3rem;


        }
    .color-maroon{
        color: #800000;
        font-weight: bolder;
        background: rgba(255, 255, 255, 0.05);
    }
    .color-white{
        color: #fff;
        font-weight: bolder;
        font-size: 1.2vw;
    }
       .sl1{
        border-bottom:0.5rem transparent solid;
   }
    a.sl1:hover{
        color: #fff;
        font-weight: bolder;
         background: #800000;
        /*font-size: 1.1vw*/
        border-bottom:0.5rem #fff solid;
    }
    .custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(128,0,0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
.navbar{
    text-align:center;
}
nav{
    z-index: 777;
}
nav ul li{
    margin: 0px;
}
nav ul li a{
    padding-right: 0px;
    padding-left: 0px;
    width: max-content;
    z-index: 990;
}
/* hover 2 */
a.sl: hover{
    color: #fff;
    font-weight: bolder;
    text-decoration: none;
    border: none;
}
/* hover 2 ends */
.custom-toggler.navbar-toggler {
  border-color: rgb(128,0,0);
} 

/*Experiments */
.hamburger-icon {
  width: 30px;
  height: 20px;
  position: relative;
  cursor: pointer;
}

.line {
  width: 100%;
  height: 2px;
  background-color: white;
  position: absolute;
  transition: all 0.3s ease;
}

.line:nth-child(2) {
  top: 50%;
  transform: translateY(-50%);
}

.line:nth-child(3) {
  bottom: 0;
}

.hamburger-icon:hover .line {
  background-color: white;
}

.hamburger-icon.active .line:nth-child(1) {
  transform: rotate(45deg);
  top: 50%;
}

.hamburger-icon.active .line:nth-child(2) {
  opacity: 0;
}

.hamburger-icon.active .line:nth-child(3) {
  transform: rotate(-45deg);
  bottom: 50%;
}
/*Experiments Ends*/
@media (max-width: 768px) {
   
    .navcontainer{
        margin: 0;
    }
}

@media screen and (max-width: 768px) {
 .color-white{
     color: #800000;
 }   
     .navcontainer{
        background: #2596be;
        font-size:200%;
    }
}
/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
  .color-white{
        font-size: 1.1rem;
        
    }
     .navcontainer{
        margin: 0;
    }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
  
}

/*lg*/
@media (min-width: 1200px) {
  
}
@media only screen and (max-width: 600px) {
     .color-maroon{
        font-size:150%;
    }
     .color-white{
        font-size:150%;
        color: #fff;
    }
}
</style>
  </head>
  <body>

<div class="navcontainer">
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="https://www.iitmjanakpuri.com/index.php"><img src="../upload_new/gallery/logow.png" class="logom" id="logom" style="width: 9.2rem; height: 5.2rem;"/>
   <!-- <p class="tgfmlt" style="font-size: 0.8rem;line-height:1;">Institute of Information </br>Technology and Management</p> -->
    </a>
    <div class="container text-center">
  <button class="navbar-toggler tgfmlt color-maroon custom-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo_adm" aria-controls="navbarTogglerDemo_adm" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon hamburger-icon">
        <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
        
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo_adm">
    <!-- <a class="navbar-brand color-white tgfmlt" href="#"><img src="upload/gallery/logow.png" id="logom" style="width: 50%; height: 50%;"/></a>-->
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <li class="nav-item">
                <a ></a>
            </li>
      <li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" style= "font-family: 'TradeGothicLTW01-Light';" href="#adm">Admission Procedure</a>
            </li>
            <li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="#elg">Eligibility Criteria</a>
            </li>
            <!--<li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="docs/broch23.pdf">Admission Brochure</a>
            </li>-->
            <li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="docs/FEE for_AY 2024-25all three.pdf" target="_blank">Fee Details (UG & PG)</a>
               
            </li>
            <li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="#freq">FAQs</a>
            </li>
            <!--<li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="docs/IMG-20230826-WA0017.pdf" target="_blank">List of Documents</a>
            </li>-->
            
            <li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="https://forms.gle/GpKAqQthZjpMhxmY7">Enquiry</a>
            </li>
            
            <li class="nav-item" style="margin-left: 5em;margin-right: 2em;">
                <a class="nav-link color-white tgfmlt sl1" href="../management.php">Management Quota</a>
            </li>
           
            <li class="nav-item" style="margin-left: 5em;">
                <!--<a class="nav-link color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="#"><i class="fa fa-fw fa-search"></i></a>-->
            </li> 
     </ul>
<!--  <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="#">Campus Life</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="#">Placements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="#">Alumni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="#">Scholarships</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="#"><i class="fa fa-fw fa-search"></i></a>
            </li>
          </ul> -->
  </div></div>
</nav>
</div>

 <script>
     function somelinks(x)
     {
         x.style.color='#fff';
         x.style.fontWeight='bolder';
         x.style.transform='scale(1.2)';
     }
     function normallinks(x)
     {
         x.style.transform='scale(1)';
                  x.style.fontWeight='normal';

     }
 </script> 