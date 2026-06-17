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
    <title>Fiesta Annual Fest & Events | IITM Janakpuri  </title>
    <meta name="description" content="Experience Fiesta at IITM Janakpuri, an annual celebration featuring cultural performances, competitions, talent showcases, and student activities.">

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
            font-size: 14px; /* Reduced font size */
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
            line-height: 1.5;
        }

        .value-added-section h1 {
            font-size: 10px; /* Reduced font size */
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 7px; /* Further reduced font size */
            color: #333;
            margin-bottom: 15px;
        }

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }

        .carousel-inner {
            max-width: 70vw; /* Restored carousel width */
            margin: 0 auto;
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1); /* Fast and smooth sliding transition */
        }

        .carousel-item img {
            max-height: 300px; /* Restored carousel image height */
            width: auto;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1 id="iipc">Annual Cultural Fest - Fiesta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/extra.php">Extra & Co-Curricular Events</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/conference.php">Conference/Seminars/Webinars</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/fdp.php">FDP</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a>
              <a class="dropdown-item" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
        </div>
        <div class="col-md-9">
            
          <div class="underline"></div>
          <div class="container">
              
              <p class="text-justify" style="color: #4b4b4b;">Fiesta, is the institute’s 
              eagerly awaited annual cultural festival that showcases the talents and vibrant spirit of our 
              students while fostering camaraderie and healthy competition among attendees from various universities 
              and institutes. Spanning two days, Fiesta hosts a diverse range of events, including Ad Mad, Rangmanch 
              (Mono Acting), Tickle Your Brain (Quiz), Dalal Street, JAM (Just a Minute), Pictionary, Battle of the Bands, 
              and more. Transitioning to the second day, the festivities shift to Talkatora Stadium, featuring captivating events 
              like Group Dance and the Mr. & Miss Fiesta competitions. In addition, a star-studded performance unfolds, further 
              enhancing the appeal of Fiesta, drawing significant crowds, and providing an exciting experience for all attendees. 
              Some of the star performers list include Akhil, Guru Randhawa, Jassie Gill, Mankirat Aulakh, Haardy Sandhu. 
              Fiesta offers an immersive experience that seamlessly intertwines competition with celebration, learning with 
              fun, and talent with opportunity, serving as a platform not only for personal growth but also as an avenue to 
              cultivate new friendships. Embark on an unforgettable journey brimming with excitement, inspiration, and joy. Regardless of 
              whether you engage actively or simply observe, Fiesta ensures memories that will last a lifetime. Join us and revel in the spirit of youth and creativity together!</p>
              
              
              <hr class="hr-maroon"/>
            
              
               <div class="table-container">
                   <h1>Fiesta-2K25</h1>
             <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/abc.jpeg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/def.jpeg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
        <h1>Fiesta-2K24</h1>
         <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/20242.jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/20241.jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>

        <h1>Fiesta-2K23</h1>
          <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/20231.jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/340954334_3636043923328233_2900781415463165942_n.jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
        <h1>Fiesta-2K19</h1>
         <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/20191.jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/20193.jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
        
        <h1>Fiesta-2K18</h1>
                      <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/DSC_0942(1).jpg" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/2018.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
        <h1>Fiesta-2K17</h1>
              <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/P1050998.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/ZT9A4040.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
        <h1>Fiesta-2K16</h1>
              <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/20161.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/20162.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
        <h1>Fiesta-2K15</h1>
              <div class="row">
                <div class="col-sm-6">
                    <img class="" src="images/_MG_9358.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                    <img class="" src="images/_MG_8654.JPG" alt="Card image" style="width:100%;height: 80%; object-fit: cover;">
                </div>
            </div>
    </div>
    <div style="height: 10vh;"></div>
              <div style="margin:0;width:100%;">
                   <div class="container">
                            
         

</div>
</div>
</div>
        </div>
    </div>
</div>
<div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>

    <script src="myscript.js"></script>
</body>
</html>
