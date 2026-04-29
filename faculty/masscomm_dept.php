<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = "http://iitmjanakpuri.com/index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM | BA(JMC)</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}

        p{
            text-align: justify;
        }
        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .hero-title {
            font-size: 28px;
            font-weight: bold;
        }

        .value-added-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            line-height: 1.8;
        }

        .value-added-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
        }

     
    .committee-list {
        color: #800000;
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
    }
    p{
        text-align: justify;
        padding: 5px;
    }

    
    .fac-member {
  
  background-color: #fffeee;
  padding: 1rem 1rem 2rem 1rem;
  box-shadow: 1rem 1rem 2rem #ddd, -1rem -1rem 2rem #eee;
  position: relative;
  filter: brightness(120%);
  opacity: 0.9;
  transition: opacity 0.5s;
 
  margin-right:2rem;
  padding:0;
  width: 18rem;
}

.fac-member:hover {
  opacity: 1;
  box-shadow: 0 0 100px #ffff99; 
  font-weight: bolder;
}
.c:hover{
    background: rgba(128, 0, 0, 0.1);
    transition: opacity 0.5s;
}

.card-img-overlay {
  background-color: rgba(#000, 0.4);
}
.hv{
    border: 2rem transparent solid;
}
.hv:hover{
    transform:scale(0.95);
    
}
hv:hover .ab{
    transform:scale(0.95);
    
}
.bg1{
    background: rgb(106, 106, 106, 0.05);
    padding-left: 1rem;
}

.img-fac
{
    min-width: 100%;
    width: 100%;
    object-fit:cover;
    height: 55vh;
    object-position:top;
    bottom:0;
    position:absolute;
    margin-right: 1rem;
    padding-right: 1rem;
    padding-left: 0;
    margin-left: 0;
}
.ab{
    text-align: center;
}



.card-img-top {
    height: 300px; /* Set the desired height for all images */
    object-fit: cover; /* Maintain aspect ratio while covering the specified height */
    border-radius: 5px;
  }
    .card-text h3:first-child {
    font-size: 1rem; /* Set font size for the first line */
  }
  .card-text h3:nth-child(2),
  .card-text h3:nth-child(3) {
    font-size: 0.8rem; /* Set font size for the next lines */
  }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

      <div class="container">
        
            <h1 style="color:#800000; padding: 20px;">IITM School of Mass Communication</h1>
   <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
          <!-- BA(JMC) Faculty -->
           <div class="row">
          <div class="col-lg-3">
            <div class="card" style="height: 80%;width: 100%;border: 1px #fff solid;">
              <img
                src="images/commerce/Nivedita new.JPG"
                class="card-img-top"
                alt="Waterfall"
                style="border-radius: 5px;" />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Dr. Nivedita Sharma</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Head of the Department </h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Associate Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">BA, MA(JMC), MBA, Ph.D. </h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">hod.bajmc@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card" style="height: 80%;width: 100%;border: 1px #fff solid;">
              <img
                src="images/commerce/bkm.jpeg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%; height: 70%;" style="border-radius: 5px;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Dr. Bal Krishna Mishra</strong></h5>
                <p class="card-text">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">BA,MJMC, NET, Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">balkrishna.mishra@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
   
   <!---- XXXX ---->
            <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 1px #fff solid;">
              <img
                src="images/commerce/Image - Dr. Rajnesh Kumar Pandey.png"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;border-radius: 5px;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem;font-size:1rem;"><strong>Dr. Rajnesh Kumar Pandey</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Psychology (Honours), MAMC, Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">rajnesh.pandey@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/IMG_20240724_172459.jpg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Mr. Kishan</strong></h5>
                <p class="card-text">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">B.A(H), PGD in Radio & TV Journalism and Digital Marketing,MAMC, UGC NET &JRF, Pursuing PhD</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">kishan.kashyap@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
          
      </div>    
          
          
          
          <div class="row">
          <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/WhatsApp Image 2024-07-25 at 2.41.14 PM.jpeg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Mr. Sahil Dhall</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">BJMC, MMC,  Pursuing PhD</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">sahil.dhall@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
           <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/Suchivrat_Arya.jpg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Mr. Suchivrat Arya</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">B.Sc. (EM), M.A. (JMC), UGC-NET, Pursuing PhD</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">suchivrat.arya@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
        <div class="col-lg-3">
            <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
              <img
                src="images/commerce/Dr_Rahul.jpeg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Dr. Rahul Kumar</strong></h5>
                <p class="card-text text-center">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Assistant Professor</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">B.Sc.(Hons.), M.A. CMS, UGC NET, PhD</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">rahul.kumar@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
      
       </div>   
          
          <!-- BA(JMC) Faculty Ends -->
      
        
   <!--- YYYY -->

    </div>

   
  
  </div>
  <!-- Inner -->
</div></div></div>
    </div>
 
   <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>                          