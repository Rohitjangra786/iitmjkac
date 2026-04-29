<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITM | Conference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #0078D7;
            font-family: Georgia, serif;
        }
        .navbar .nav-link {
            color: white;
        }
        .navbar .nav-link:hover {
            color: cyan;
        }
        .navbar .nav-link.active {
            color: white;
            background-color: rgba(0, 120, 215, 0.2);
            text-shadow: 0 0 5px lightblue;
        }
        .navbar-nav {
            margin: 0 auto;
        }
        
        .carousel-caption {
            top: 20px;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            width: 80%;
            height: 20%;
            margin-top: 20px;
        }
        .carousel-caption h1 {
            font-size: 2rem;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
        li{
            text-align: justify;
        }
          .nav-tabs {
            border-bottom: none;
        }
        .tab-container {
            background: #0067a7;
            padding: 20px;
        }
        .nav-tabs .nav-link {
            color: white;
            border: none;
        }
        .nav-tabs .nav-link.active {
            background-color: #4590bf;
            color: white;
        }
        .tab-content {
            background-color: #4590bf;
            padding: 20px;
            color: white;
            border-radius: 0 0 10px 10px;
            margin: 0 auto;
            width: 80%;
        }
    </style>
</head>
<body>


<?php
    include("header.php");
  include("conferencenav.php");
?>

<div style="height: 5vh;"></div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h2 class="text-center text-primary mb-4">Contact Us</h2>
                    <p class="text-center"><strong>Prof. (Dr.) Ganesh Kumar Wadhwani</strong>, Convener ICACIA - 2025<br>
                    <strong>Prof. (Dr.) Pankaj Kumar Varshney</strong>, Convener ICACIA - 2025</p>
                    <hr>
                    <p class="text-center"><strong>Institute of Information Technology and Management</strong><br>
                    D-29, Institutional Area, Janakpuri, New Delhi-110058</p>
                    <hr>
                    <p class="text-center"><strong>Email:</strong> 
                        <a href="mailto:conference@iitmipu.ac.in">conference@iitmipu.ac.in</a>, 
                        <a href="mailto:icacia2025@iitmipu.ac.in">icacia2025@iitmipu.ac.in</a>
                    </p>
                    <p class="text-center"><strong>Phone:</strong> +91/011-28525882, 28520239, 28525051</p>
                    <p class="text-center"><strong>Mobile:</strong> 7982416019, 7906025772</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
