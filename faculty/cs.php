<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IITM | Computer Science Department</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
    html, * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif;

}
        body {
                box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        p{
            text-align: justify;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
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

        .card {
            background-color: #fff;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
.card img {
    width: 100%;
    height: 300px; /* Adjusted height */
    object-fit: cover;
    object-position: top; /* Keeps top of the image visible */
}

        .card h3 {
            margin: 10px 0 5px;
            font-size: 1.1em;
            color: #333;
        }
        .card p {
            margin: 2px 10px;
            font-size: 0.9em;
            color: #666;
        }
        .card a {
            font-size: 0.85em;
            color: #007BFF;
            text-decoration: none;
            word-break: break-word;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
<h2 style="text-align:center; margin-bottom: 30px;">Department of Computer Science </h2>

<div class="container">
<?php
$faculty = [
    [
        "name" => "Prof.(Dr.) G.K. Wadhwani",
        "designation" => "Deputy Director & Head of the Department",
        "qual" => "B.Sc., M.C.A., M.Phil, NET, Ph.D.",
        "email" => "hod.csdept@iitmipu.ac.in",
        "img" => "images/commerce/DrGanesh.jpg"
    ],
    [
        "name" => "Prof.(Dr.) Ramandeep Kaur",
        "designation" => "IQAC Coordinator &  Professor",
        "qual" => "B.Sc.(H), MCA, PGDBA(Mkt. & HR), Ph.D",
        "email" => "ramandeep.kaur@iitmipu.ac.in",
        "img" => "images/commerce/DrRamandeep.jpg"
    ],
    [
        "name" => "Prof.(Dr.) Pankaj Kumar Varshney",
        "designation" => "Professor",
        "qual" => "B.Sc., M.C.A., NET, Ph.D.",
        "email" => "pankaj.varshney@iitmipu.ac.in",
        "img" => "images/commerce/DrPankaj.jpg"
    ],
    [
        "name" => "Dr. Harmeet Malhotra",
        "designation" => "Associate Professor",
        "qual" => "B.C.A., MCA, M.Phil., Ph.D",
        "email" => "harmeetmalhotra@iitmipu.ac.in",
        "img" => "images/commerce/harmeet-removebg-preview.jpg"
    ],
    [
        "name" => "Dr. Charul Nigam",
        "designation" => "Associate Professor",
        "qual" => "BCA, MCA, M.Tech, Ph.D.",
        "email" => "charulnigam@iitmipu.ac.in",
        "img" => "images/commerce/charulupdated.jpg"
    ],
    [
        "name" => "Ms. Shilpi Bansal",
        "designation" => "Associate Professor",
        "qual" => "B.Tech, M.Tech, MBA, Pursuing PhD.B.Tech, M.Tech, MBA, Pursuing PhD.",
        "email" => "shilpi.bansal@iitmipu.ac.in",
        "img" => "images/commerce/shilpi-removebg-preview.jpg"
    ],
    [
        "name" => "Mr. Ashish Kumar Nayyar",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc. MCA, M.Tech., Pursuing Ph.D.",
        "email" => "pd.bca@iitmipu.ac.in",
        "img" => "images/commerce/DSC06601.jpg"
    ],
    [
        "name" => "Ms. Leena Gupta",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc., MCA, M.Tech, Pursuing Ph.D.",
        "email" => "leena.gupta@iitmipu.ac.in",
        "img" => "images/commerce/leena.jpg"
    ],
    [
        "name" => "Ms. Ankita",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech., NET",
        "email" => "ankitaluke@iitmipu.ac.in",
        "img" => "images/commerce/Ankita new.jpg"
    ],
    [
        "name" => "Ms. Madhumita Devnath",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech.",
        "email" => "madhumita@iitmipu.ac.in",
        "img" => "images/commerce/madhumita-removebg-preview.jpg"
    ],
    [
        "name" => "Ms. Ruchika",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech., NET, Pursuing Ph.D.",
        "email" => "ruchika.sangwan@iitmipu.ac.in",
        "img" => "images/commerce/ruchika-removebg-preview.jpg"
    ],
    [
        "name" => "Ms. Jyoti Khurana",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc., M.Sc., NET",
        "email" => "jyotikhurana@iitmipu.ac.in",
        "img" => "images/commerce/jyotikhurana-removebg-preview.jpg"
    ],
    [
        "name" => "Ms. Kavita Srivastava",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc.(H), MCA, M.Tech.(IT), PGDCA, NET, Pursuing Ph.D",
        "email" => "kavitasrivastava@iitmipu.ac.in",
        "img" => "images/commerce/kavita.jpg"
    ],
    [
        "name" => "Ms. Anjaly Chauhan",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech., NET, Pursuing Ph.D.",
        "email" => "anjalichauhan@iitmipu.ac.in",
        "img" => "images/commerce/anjalii.jpg"
    ],
    [
        "name" => "Ms. Sunaina",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech.,NET",
        "email" => "sunaina.soni@iitmipu.ac.in",
        "img" => "images/commerce/DSC06528.jpg"
    ],
    [
        "name" => "Mr. Gautam Kumar",
        "designation" => "Assistant Professor",
        "qual" => "BCA, MCA",
        "email" => "gautamkumar@iitmipu.ac.in",
        "img" => "images/commerce/DSC06609.jpg"
    ],
     [
        "name" => "Ms. Mamta",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech, NET, Pursuing Ph.D.",
        "email" => "mamta.it@iitmipu.ac.in",
        "img" => "images/commerce/DSC06576.jpg"
    ],
    [
        "name" => "Ms. Rashmi Ishrawat",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc(Electronics),M.C.A,NET",
        "email" => "rashmi.ishrawat@iitmipu.ac.in",
        "img" => "images/commerce/DSC06517.jpg"
    ],
    [
        "name" => "Ms. Preeti Sharma",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech., NET, Pursuing Ph.D",
        "email" => "preeti.sharma@iitmipu.ac.in",
        "img" => "images/commerce/DSC06532.jpg"
    ],
    [
        "name" => "Ms. Priyanka Rattan",
        "designation" => "Assistant Professor",
        "qual" => "BCA, MCA, M.Phil.",
        "email" => "priyanka@iitmipu.ac.in",
        "img" => "images/commerce/priyanka.jpg"
    ],
    [
        "name" => "Ms. Lakshmi Kumari",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech,M.Tech, NET, Pursuing Ph.D.",
        "email" => "lakshmi.kumari@iitmipu.ac.in",
        "img" => "images/commerce/DSC06538.jpg"
    ],
     [
        "name" => "Ms. Komal Sharma",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech",
        "email" => "komal@iitmipu.ac.in",
        "img" => "images/commerce/DSC06484.jpg"
    ],
     [
        "name" => "Dr. Manzoor Ansari",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc. M.Sc. Ph.D., NET",
        "email" => "manzoor@iitmipu.ac.in",
        "img" => "images/commerce/DSC06511.jpg"
    ],
     [
        "name" => "Ms. Aditi Aggarwal",
        "designation" => "Assistant Professor",
        "qual" => "BCA, MCA, NET",
        "email" => "aditi.aggrwal@iitmipu.ac.in",
        "img" => "images/commerce/DSC06488.jpg"
    ],
     [
        "name" => "Ms. Kanchan Choudhary",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech, M.Tech, Pursuing Ph.D.",
        "email" => "kanchan.chaudhary@iitmipu.ac.in",
        "img" => "images/commerce/DSC06512.jpg"
    ],
     [
        "name" => "Ms. Nidhi Ruhil",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech., M.Tech., Pursuing Ph.D.",
        "email" => "nidhi.ruhil@iitmipu.ac.in",
        "img" => "images/commerce/nidhi.jpg"
    ],
     [
        "name" => "Dr. Saima Saleem",
        "designation" => "Assistant Professor",
        "qual" => "BCA, MCA, SET, NET-JRF, Ph.D.",
        "email" => "saima.saleem@iitmipu.ac.in",
        "img" => "images/commerce/DSC06500.jpg"
    ],
     [
        "name" => "Ms. Palak Khurana",
        "designation" => "Assistant Professor",
        "qual" => "BCA, MCA",
        "email" => "palak.khurana@iitmipu.ac.in",
        "img" => "images/commerce/palak.jpg"
    ],

     [
        "name" => "Ms. Nishtha Parashar",
        "designation" => "Assistant Professor",
        "qual" => "BCA, MCA",
        "email" => "nishtha.parashar@iitmipu.ac.in",
        "img" => "images/commerce/DSC06574.jpg"
    ],
     
    // You can add more entries as needed
];

foreach ($faculty as $member) {
    echo "<div class='card'>";
    echo "<img src='{$member['img']}' alt='{$member['name']}'>";
    echo "<h3>{$member['name']}</h3>";
    echo "<p><strong>{$member['designation']}</strong></p>";
    echo "<p>{$member['qual']}</p>";
    echo "<a href='mailto:{$member['email']}'>{$member['email']}</a>";
    echo "</div>";
}
?>
</div>
    <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
</body>
</html>
