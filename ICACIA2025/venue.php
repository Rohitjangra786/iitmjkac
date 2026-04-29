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
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="images/campus.jpg" class="img-fluid rounded shadow" alt="Campus Image">
        </div>
        <div class="col-md-8">
            <div class="p-4 bg-light border rounded shadow">
                <h2 class="text-center text-success mb-3">Venue</h2>
                <p class="h4 text-center mb-1">Institute of Information Technology and Management</p>
                <p class="text-center">D-29, Institutional Area, Janakpuri, New Delhi-110058</p>
                <p class="text-center"><strong>Email:</strong> conference@iitmipu.ac.in, icacia2025@iitmipu.ac.in</p>
                <p class="text-center"><strong>Phone:</strong> +91/011-28525882, 28520239, 28525051</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="google-maps text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d437.8294699350114!2d77.102!3d28.610702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b5567911807%3A0x996e86fe24144daf!2sIITM+Janakpuri+%7C+Institute+of+Information+Technology+%26+Management!5e0!3m2!1sen!2sin!4v1538391201210" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
</div>

<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
