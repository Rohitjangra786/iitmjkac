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
        .speaker-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 3px solid #0078D7;
        }
    </style>
</head>
<body>

<?php
  include("header.php");
  include("conferencenav.php");
?>

<div style="height: 5vh;"></div>
<div class="container-fluid pl-0 pr-0">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <h2 style="text-align:center"> Advisory Committee</h2>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2 class="text-center text-success mb-4">National Advisory Committee</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group list-group-flush border rounded shadow p-3 bg-light">
<li class="list-group-item"><img src="nationalcommittee/DrNaveenRajpal.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Navin Rajpal, GGSIPU, New Delhi, India.</li>
<li class="list-group-item"><img src="nationalcommittee/DrNaveenKumar.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Naveen Kumar, University of Delhi, New Delhi, India.</li>
<li class="list-group-item"><img src="nationalcommittee/DrBVRReddy.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) B.V.R Reddy, Director, NIT Kurukshetra, Haryana, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrAsokDe.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Asok De, DTU New Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrNanhaySingh.png" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Nanhay Singh, NSUT New Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrBrojoKishore.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Brojo Kishore Mishra, NSUT University, New Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrGSAgrawal.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) G.S. Agrawal, Retd. Prof. IIT Roorkee, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrMohapatra.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Durga Prasad Mohapatra, NIT Rourkela, Odisha, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrMNHoda.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) M. N. Hoda, BVICAM, New Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrMuttoo.png" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) S.K. Muttoo, Retd. Prof. University of Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrVinita.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Vinita Jindal, Keshav Mahavidyalaya, University of Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrBashirAlam.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Bashir Alam, Jamia Millia Islamia, New Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrSanjayKumar.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Sanjaya Kumar Panda, NIT Warangal, Telangana, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrSandeepKumar.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Sandeep Kumar Singh, JIIT, Noida, U.P., India</li>
<li class="list-group-item"><img src="nationalcommittee/DrSudhir.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Sudhir Kumar Sharma, Jaipur National University, Rajasthan, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrKishanPal.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Kishan Pal Singh, MU Aligarh, U.P., India</li>
<li class="list-group-item"><img src="nationalcommittee/DrPrernaMahajan.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Prerna Mahajan, Jain University, Karnataka, India</li>
<li class="list-group-item"><img src="nationalcommittee/DrBindeshwarSingh.png" alt="Speaker 1" class="speaker-img"> Dr. Bindeshwar Singh, KNIT Sultanpur, U.P., India</li>
<li class="list-group-item"><img src="nationalcommittee/DrAshishSharma.jpg" alt="Speaker 1" class="speaker-img"> Dr. Ashish Sharma, GLA University Mathura, U.P., India</li>
<li class="list-group-item"><img src="nationalcommittee/DrIhitiram.jpg" alt="Speaker 1" class="speaker-img"> Dr. Ihtiram Raza Khan, Jamia Hamdard University, New Delhi, India</li>
<li class="list-group-item"><img src="nationalcommittee/MrAmitSharma.jpg" alt="Speaker 1" class="speaker-img"> Mr. Amit Sharma, Senior Principal Data Architect, Infosys, Gurugram, Haryana, India</li>
<li class="list-group-item"><img src="nationalcommittee/MrSachinKumar.jpg" alt="Speaker 1" class="speaker-img"> Mr. Sachin Kumar Verma, Director, Capgemini, Noida, U.P., India</li>
<li class="list-group-item"><img src="nationalcommittee/MrAshishRastogi.jpg" alt="Speaker 1" class="speaker-img"> Mr. Ashish Rastogi, Manager, DXC Technology, Noida, U.P., India</li>
<li class="list-group-item"><img src="nationalcommittee/DrKishanPal_1.jpeg" alt="Speaker 1" class="speaker-img"> Dr. Kishan Pal</li>

            </ul>
        </div>
    </div>
</div>


<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
