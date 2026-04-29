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
    <title>IITM | B.Com.(H) & BBA</title>

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
        
            <h1 style="color:#800000; padding: 20px;">BBA & B.Com.(H)</h1>
   <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
            <div class="row">
                <h1 class="text-center">BBA</h1>
                <hr style="height:3px; background: #800000;">
            </div>
       <!-- BBA Faculty -->
 <div class="row">
           <div class="col-lg-3">
            <div class="card" style="height: 80%;width: 100%;border: 1px #fff solid;">
              <img
                src="images/commerce/DrDeepali.jpeg"
                class="card-img-top"
                alt="Waterfall" style="width: 100%;" style="border-radius: 5px;"
              />
              <div class="card-body">
                <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem;font-size:1rem;"><strong>Prof. (Dr.) Deepali Saluja</strong></h5>
                <p class="card-text">
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">Head - BBA Programme</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">B.A., M.A.(Economics), NET, Ph.D.</h3>
                 <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem;font-size:0.8rem;">deepali.saluja@iitmipu.ac.in</h3>
                </p>
               <!-- <a href="#!" class="btn btn-primary">Button</a> -->
              </div>
            </div>
          </div>
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/mandeep.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Mandeep Singh</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Associate Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Tech, MBA, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">placements@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/megha1.png" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Megha Sharma</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Associate Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Sc., M.Sc. Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">megha_sharma@iitmipu.ac</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Vaibhav new.JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Raghav Jain</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Associate Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com.(H), MBA, NET, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">raghavjain@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

   
<!---XXXX-->
   
          
        </div>
        
        
        
        <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/madhu.jfif" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Madhu Ruhil</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, MBA, NET, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">madhu.ruhil@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/images.jfif" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Smriti Ahuja</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, MBA, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">smriti@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/shalini.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Shalini Girdhar</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">MBA, NET, Pursuing Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">shalini.girdhar@iitmjanakpuri.com</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/ankita (2).JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Ankita Sharma</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, NET, Ph.D. pursuing</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">ankita.sharma@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

          </div>
   
   
   
   <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Naina new.JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Naina Sobti</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Sc., MBA</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">naina.sobti@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/images.jfif" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Shabnam Parveen</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com., MBA, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">shabnam@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Sapna new.JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Sapna Gandhi</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">BBA, MBA, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">sapna.gandhi@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/20230825_170303 - Saguna Khajuria.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Saguna Khajuria</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">BE, MBA, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">saguna.khajuria@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

          </div>
          
          <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/nisha.png" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Nisha</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">BA, MA, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">nisha.gahlot@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/images.jfif" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Kriti Arora</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, MBA</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">kriti@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/benu.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Benu Bharara</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">M.Com, PGDM</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">benu@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/ambani.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Ambani Rathore</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, MBA, NET, Pursuing Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">ambani.rathaur@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

          
          </div>
          <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/MsShubhangi.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Shubhangi Manav</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com., M.Com., B.Ed., NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">shubhangi.manav@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/DrBhawna.jpg" class="card-img-top" alt="" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Bhawna Mukaria </strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Associate Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Ph. D, M.Com, B.Ed, B.Com, UGC NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">bhawna.mukaria@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/DrAnurag.jpg" class="card-img-top" alt="" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Anurag Tiruwa</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Tech., M.B.A., N.E.T., Ph. D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">anurag.tiruwa@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/DrAmita.jpg" class="card-img-top" alt="" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Amita Pathania</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com(H), M.COM, Ph.D. (Management Studies)
UGC- NET + JRF qualified</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">amita.pathania@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

          
          </div>
         <!-- BBA Faculty Ends -->
       <!-- B.Com.(H) Faculty -->
            
            <div class="row">
                <h1 class="text-center">B.Com.(H)</h1>
                <hr style="height:3px; background: #800000;">
            </div>
            <div class="row">
          <div class="col-lg-3">
    <div class="card" style="height: 80%;width: 100%;border: 1px #fff solid;">
        <img src="images/commerce/vikass (1).jpg" class="card-img-top" alt="Waterfall" style="border-radius: 5px;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Vikas Bharara</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Head - Commerce</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">M.Com, M.Phil, UGC-NET, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">hod.commerce@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 80%;width: 100%;border: 1px #fff solid;">
        <img src="images/commerce/geeta.jpg" class="card-img-top" alt="Waterfall" style="width: 100%; border-radius: 5px;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Geeta Mahajan</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com., M.Com., B.Fellow ICA, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">geeta@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 1px #fff solid;">
        <img src="images/commerce/images.jfif" class="card-img-top" alt="Waterfall" style="width: 100%; border-radius: 5px;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Mr. Deepak Aggarwala</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, CA</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">deepak@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/jyoti.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 1.5rem; font-size: 1rem;">
                <strong>Dr. Jyoti Bhambhani Jeswani</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Associate Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">drjyoti@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

   
<!---XXXX-->
   
          
        </div>
        
        
        
        <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/IMG_6039.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Dr. Amit Kumar</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">BS(FINANCE), M.COM, NET, CFA, Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">amit.kumar@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Rohit new.JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Mr. Rohit Kumar</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">rohit.kumar@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/rachna.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Rachna Ailani</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, PGDBA</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">rachna@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/shwetaa.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Shweta Aneja</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com (H), M.Com., NET.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">shweta.aneja@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

   
   </div>
   
   
   <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Ms. Divya Gupta.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Divya Gupta</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com(H), M.Com, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">divya.gupta@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/aditi.jfif" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Aditi Methi</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">aditi@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Komal Goel new.JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Komal Goel</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">komal.goel@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/paruls.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Parul Sharma</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com, NET, Pursuing Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">parul.sharma@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

          </div>
          
          <!--- YYYY -->
          <div class="row">
         <div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/suna.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Sunakshi Chadha</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com., NET, Pursuing Ph.D.</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">sunakshichadha@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/manisha.jpg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Manisha</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com, M.Com., NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">manishakataria@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/Shikha new.JPG" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Ms. Shikha Dabral</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">M.Com., NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">shikhadabral@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="card" style="height: 100%;width: 100%;border: 2px #fff solid;">
        <img src="images/commerce/puneet - Puneet Chawla.jpeg" class="card-img-top" alt="Waterfall" style="width: 100%;" />
        <div class="card-body">
            <h5 class="card-title tgfmlt text-center" style="color: #000; line-height: 0.5rem; font-size: 1rem;">
                <strong>Mr. Puneet Chawla</strong>
            </h5>
            <p class="card-text text-center">
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">Assistant Professor</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">B.Com. (H), M.Com, C.S. (Inter), NET</h3>
                <h3 class="tgfmlt text-center" style="color: #000; line-height: 1rem; font-size: 0.8rem;">puneet.chawla@iitmipu.ac.in</h3>
            </p>
        </div>
    </div>
</div>

          </div>
          <!-- B.Com. (H) Faculty Ends -->
          </div>
          

          
       </div>
        
        </div> 
        
        
  
    </div>      
       
       
       
       
       <!-- BBA Faculty Ends -->
       <!-- B.Com.(H) Faculty -->
       
       
       
       
       
         
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