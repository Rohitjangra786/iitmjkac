 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <style>
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
        background: #800000;
        /*font-weight: bolder;
        font-size: 1.1vw*/
        border-bottom:0.5rem #fff solid;
    }
    .custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
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
  border-color: rgb(255,255,255);
} 

@media (max-width: 768px) {
   
    .navcontainer{
        margin: 0;
        background: #800000;
    }
    .fee{
        display: block;
    }
}

@media screen and (max-width: 768px) {
 .color-white{
     color: #fff;
     font-size: 1.2rem;
 }   
 .fee{
        display: block;
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
     .fee{
        display: none;
        background:#fff;
    }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
   .fee{
        display: none;
          background:#fff;
    }
}

/*lg*/
@media (min-width: 1200px) {
   .fee{
        display: none;
    }
}
</style>
  </head>
  <body>
<div class="fee" style="color: black;margin-left: 100px;"><a href="https://www.iitmjanakpuri.com/feepayments.php">Fee Payment</a></div>
<div class="navcontainer">
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="https://www.iitmjanakpuri.com"><img src="upload_new/gallery/logow.png" class="logom" id="logom" style="width: 9.2rem; height: 4.2rem;"/>
   <!-- <p class="tgfmlt" style="font-size: 0.8rem;line-height:1;">Institute of Information </br>Technology and Management</p> -->
    </a>
    
  <button class="navbar-toggler tgfmlt color-maroon custom-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon custom-toggler"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <!-- <a class="navbar-brand color-white tgfmlt" href="#"><img src="upload_new/gallery/logow.png" id="logom" style="width: 50%; height: 50%;"/></a>-->
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
       <li class="nav-item">
                <a ></a>
            </li>
      <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/aboutus_new/aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/course/programmes.php">Programmes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/admissions/admissions.php">Admissions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/infrastructure/infrastructure.php">Infrastructure</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/faculty/faculty.php">Faculty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/academics/academics.php">Academics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/campuslife/campuslife.php">Campus Life</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/events/events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/placements/placements.php">Placements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/alumni/alumni.php">Alumni</a>
            </li>
          <!--  <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/IITMNBA/pages/policy/policy.html" target="_blank">Policy</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://www.iitmjanakpuri.com/AAC/mandatorydisclosure.php">Mandatory Disclosure-Academic Audit</a>
            </li> 
          <!--<li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/scholarships/scholarships.php">Scholarships</a>
            </li>
          <li class="nav-item">
                <a class="nav-link color-white tgfmlt sl1" href="https://iitmjanakpuri.com/AAC/mandatorydisclosure.php">Mandatory Disclosure</a>
            </li>-->
            <li class="nav-item">
             <!--   <a class="nav-link color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="#"><i class="fa fa-fw fa-search"></i></a> -->
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
  </div>
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