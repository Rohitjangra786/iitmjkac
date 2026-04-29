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

</div>

<div class="container mt-5">
    <h2 class="text-center text-success mb-4">International Advisory Committee</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group list-group-flush border rounded shadow p-3 bg-light">
<li class="list-group-item"><img src="committeepics/DrDebnath.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Narayan C. Debnath, Nam Ky Khoi Nghia Street, Vietnam</li>
<li class="list-group-item"><img src="committeepics/DrRytis.png" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Rytis Maskeliunas, The Silesian University of Technology, Gliwice, Poland</li>
<li class="list-group-item"><img src="committeepics/DrBrij.jfif" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Brij B. Gupta, Asia University, Wufeng, Taichung, Taiwan, India</li>
<li class="list-group-item"><img src="committeepics/DrJose.png" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) José Vargas-Hernández, Tecnológico Nacional de México</li>
<li class="list-group-item"><img src="committeepics/DrSanjay.jfif" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Sanjay Misra, Institute for Energy Technology, Halden, Norway</li>
<li class="list-group-item"><img src="committeepics/DrMarcin.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Marcin Paprzycki, Systems Research Institute, Poland</li>
<li class="list-group-item"><img src="committeepics/DrHexmoor.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Hexmoor, Southern Illinois University, Carbondale, United States</li>
<li class="list-group-item"><img src="committeepics/DrAttaUrRehman.jpg" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Atta Ur Rehman Khan, Ajman University, UAE</li>
<li class="list-group-item"><img src="committeepics/DrMukesh.jfif" alt="Speaker 1" class="speaker-img"> Prof.(Dr.) Mukesh Bansal, Manchester, England, United Kingdom</li>
<li class="list-group-item"><img src="committeepics/MrKeith.jpg" alt="Speaker 1" class="speaker-img"> Mr. Keith Sherringham, Australian Computer Society: Brisbane, QLD, AU</li>
<li class="list-group-item"><img src="committeepics/DrNitin.jfif" alt="Speaker 1" class="speaker-img"> Mr. Nitin Jain, Portfolio Manager, Infosys, Sydney, Australia</li>
<li class="list-group-item"><img src="committeepics/DrPraveen.jfif" alt="Speaker 1" class="speaker-img"> Mr. Praveen Kumar, Cloud Operating Partner, Guidewire, Texas, USA</li>
<li class="list-group-item"><img src="committeepics/MrSushil.jfif" alt="Speaker 1" class="speaker-img"> Mr. Sushil Kumar Soni, Enterprise Architect, HCL Tech, Florida, USA</li>
<li class="list-group-item"><img src="committeepics/MrNaresh.jpg" alt="Speaker 1" class="speaker-img"> Mr. Naresh Naruka, DevOps Consultant, Manchester, UK</li>
<li class="list-group-item"><img src="committeepics/DrAbir.jpg" alt="Speaker 1" class="speaker-img"> Dr. Abir Boujelben, University of Reims Champagne-Ardenne, France</li>
<li class="list-group-item"><img src="committeepics/DrFurkan.jfif" alt="Speaker 1" class="speaker-img"> Dr. Furkan Ahmad, Hamad Bin Khalifa University, Qatar</li>
<li class="list-group-item"><img src="committeepics/DrRenu.jpg" alt="Speaker 1" class="speaker-img"> Dr. Renu Balyan, State University of New York, NY, USA</li>
<li class="list-group-item"><img src="committeepics/DrSamiya.jfif" alt="Speaker 1" class="speaker-img"> Dr. Samiya Khan, University of Greenwich, U.K</li>

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
