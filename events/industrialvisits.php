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
    <title>IITM | Industrial Visits</title>

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
        
        .carousel-image {
            width: 80%;
            height: auto;
            object-fit: cover;
            margin: 0 auto;
        }
        .carousel-item {
            width: 70vw;
            margin-left: 0;
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
            <h1 id="iipc">Industrial Visits</h1>
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
              
              <p class="text-justify" style="color: #4b4b4b;">IITM advocates that industrial visits, field trips, 
              and excursions are essential components for enriching students' education. These experiences offer students genuine 
              insights into the everyday operations of industries, providing a deeper understanding of their processes. 
              Such tours ensure that students acquire practical experience alongside theoretical knowledge, meeting the 
              demands of the curriculum. These activities complement and enhance classroom instruction, fostering new interests among students. 
              Furthermore, they increase awareness of community resources and enable students to connect their educational experiences with the broader world outside academia.</p>
             <hr class="hr-maroon"/>
            
              
               <div class="table-container">

                <h1>Industrial Visits (2025-26)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Visit to News 18</td><td>29.07.2024</td></tr>
                <tr><td>2</td><td>India TV (Aap Ki Adalat)</td><td>20.08.2025</td></tr>
                <tr><td>3</td><td>Visit to India TV</td><td>11.09.2025</td></tr>
                <tr><td>4</td><td>India TV, Yudh</td><td>25.10.2025</td></tr>
                <tr><td>5</td><td>Visit to ATAL Incubation Center, GGSIPU</td><td>29.10.2025</td></tr>
                <tr><td>6</td><td>Visit to NCUI</td><td>06.11.2025</td></tr>
                <tr><td>7</td><td>Photo Walk at Humayun's Tomb & Sunder Nursery</td><td>12.11.2025</td></tr>
                <tr><td>8</td><td>Bharat Ka Share Bazaar</td><td>18.11.2025</td></tr>
                <tr><td>9</td><td>Educational Visit under YUVAK</td><td>24.01.2026</td></tr>
                <tr><td>10</td><td>Photowalk at Delhi 6</td><td>11.04.2026</td></tr>
            </tbody>
        </table>
        <h1>Industrial Visits - YUVK (2024-25)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                 <tr><td>	1	</td><td>	Visit to Amrit Udyan	</td><td	12.09.2024	</td></tr>
                        <tr><td>	2	</td><td>	Educational Visit to  DIDAC	</td><td>	18.09.2024	</td><td>
                        <tr><td>	3	</td><td>	Educational Visit to DTU	</td><td>	18.09.2024	</td><td>
                        <tr><td>	4	</td><td>	Educational Visit to  DIDAC	</td><td>	19.09.2024	</td><td>
                        <tr><td>	5	</td><td>	Educational Visit to DIDAC	</td><td>	20.09.2024	</td><td>
                        <tr><td>	6	</td><td>	Visit to NWIC	</td><td>	01.10.2024	</td><td>
                        <tr><td>	7	</td><td>	Network Bulls 	</td><td>	05.11.2024	</td><td>
                        <tr><td>	8	</td><td>	National Zoological park	</td><td>	01.10.2024	</td><td>
                        <tr><td>	9	</td><td>	MCA Final year student	</td><td>	05.11.2024	</td><td>
                        <tr><td>	10	</td><td>	Network Bulls 	</td><td>	05.11.2024	</td><td>
                        <tr><td>	11	</td><td>	Educational Visit to Big Data, Cloud Computing  & IOT Laboratory Jamia Millia Islamia	</td><td>	09.11.2024	</td><td>
                        <tr><td>	12	</td><td>	Sundar Nursery and Humayun Tomb	</td><td>	21.02.2025	</td><td>
                        <tr><td>	13	</td><td>	Educational Visit to Amrit Udyan	</td><td>	12.09.24	</td><td>
                        <tr><td>	14	</td><td>	Educational Visit to Bharat Start-up and MSMEs Summit-2024	</td><td>	16.02.24	</td><td>
                        <tr><td>	15	</td><td>	Visit to New Delhi world Book Fair,2025	</td><td>	08.02.2025	</td><td>
                        <tr><td>	16	</td><td>	Visit to Atal Incubation centre 	</td><td>	23.08.2024	</td><td>
                        <tr><td>	17	</td><td>	Bharat ka share bazar	</td><td>	18.11.2024	</td><td>
                        <tr><td>	18	</td><td>	Bharat mobility Global expo 2025	</td><td>	22.01.2025	</td><td>
                        <tr><td>	19	</td><td>	Parle G company	</td><td>	17.02.2025	</td><td>
                        <tr><td>	20	</td><td>	Yakult Danone India	</td><td>	20.02.2025	</td><td>
                        <tr><td>	21	</td><td>	Pradhan Mantri Sanghralaya 	</td><td>	07.03.2025	</td><td>
                        <tr><td>	22	</td><td>	Mother dairy 	</td><td>	05.03.2025	</td><td>
                        <tr><td>	23	</td><td>	Coca Cola Plant-Noida	</td><td>	05.03.2025	</td><td>
                        <tr><td>	24	</td><td>	International Women’s Day 2025	</td><td>	08.03.2025	</td><td>
                        <tr><td>	25	</td><td>	Lapete mein Netaji	</td><td>	08.08.2024	</td><td>
                        <tr><td>	26	</td><td>	Yuvak At Doordarshan	</td><td>	10.08.2024	</td><td>
                        <tr><td>	27	</td><td>	Photo video at ASIA 2024	</td><td>	31.08.2024	</td><td>
                        <tr><td>	28	</td><td>	Media expo	</td><td>	13.09.2024	</td><td>
                        <tr><td>	29	</td><td>	Trip to jaipur	</td><td>	13-16.09.2024	</td><td>
                        <tr><td>	30	</td><td>	Photowalk to old delhi	</td><td>	01.10.2024	</td><td>

            </tbody>
        </table>    
        <h1>Industrial Visits - YUVK (2023-24)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Visit to India TV Studio on the Occasion of Chandrayan 3</td><td>23.8.23</td></tr>
                <tr><td>2</td><td>Visit to India TV Special Live Telecast: ”Show on 24 elections”</td><td></td></tr>
                <tr><td>3</td><td>Visit to India TV</td><td>29.8.23</td></tr>
                <tr><td>4</td><td>Visit to NDTV Talk Show “HUMLOG”</td><td>21.9.23</td></tr>
                <tr><td>5</td><td>Visit to India TV: Discussion on Women Reservation Bill, Remarks on Sanatan Dharm and OBC Reservation</td><td>23.9.23</td></tr>
                <tr><td>6</td><td>Industrial Visit to Dainik Jagran</td><td>29.9.23</td></tr>
                <tr><td>7</td><td>Lok Sabha Election 2024 Opinion Polls Series “Desh Ki Awaj”</td><td>7.10.23</td></tr>
                <tr><td>8</td><td>Introduction to Financial Market and Stock Trading - BSE Ltd</td><td>7.12.23</td></tr>
                <tr><td>9</td><td>Visit at Yakult</td><td>5.2.24</td></tr>
                <tr><td>10</td><td>Recreational College Tour to Kasol-Manali</td><td>5-10.04.2024</td></tr>
                <tr><td>11</td><td>Educational Visit to Bharat Drone Manthan at PHDCCI</td><td>28.03.2024</td></tr>
                <tr><td>12</td><td>Visit to Pragati Maidan</td><td>21.03.2024</td></tr>
                <tr><td>13</td><td>Educational Visit – Neighborhood Tree Watch Campaign</td><td>9.03.2024</td></tr>
                <tr><td>14</td><td>Industrial Visit to Glida EV Charging Station</td><td>8.03.2024</td></tr>
                <tr><td>15</td><td>Educational Visit to Global Summit ESG Advancement</td><td>5.03.2024</td></tr>
            </tbody>
        </table>

        <h1>Industrial Visits (2022-23)</h1>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>National Cooperative Union of India: Study Visit</td><td>13.7.22</td></tr>
                <tr><td>2</td><td>Securities and Exchange Board of India: Study Visit</td><td>30.9.22</td></tr>
                <tr><td>3</td><td>Mother Dairy: Study Visit</td><td>22-23.11.22</td></tr>
                <tr><td>4</td><td>Bombay Stock Exchange (BSE): Study Visit</td><td>20.03.23</td></tr>
                <tr><td>5</td><td>Biodiversity Park: Study Visit</td><td>06.05.23</td></tr>
                <tr><td>6</td><td>Network Bulls: Industrial Visit</td><td>24.05.23</td></tr>
            </tbody>
        </table>

        <h1>Industrial Visits (2021-22)</h1>
 <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Industrial Visit to Parle, Bahadurgarh</td><td>17.11.21</td></tr>
                <tr><td>2</td><td>Industrial Visit to Parle, Bahadurgarh</td><td>30.11.21</td></tr>
                <tr><td>3</td><td>Virtual Industrial Visit - Yakult Danone</td><td>22.6.22</td></tr>
                <tr><td>4</td><td>Barclays Mentorship Programme Phase II</td><td>22-23.6.22</td></tr>
            </tbody>
        </table>
    </div>
    <div style="height: 10vh;"></div>
              <div style="margin:0;width:100%;">
                   <div class="container">
                            <   <div class="row">
                  <div id="my-carousel4" class="carousel slide carousel-fade" data-ride="carousel" style="margin-right: auto;margin-left: auto;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#my-carousel4" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel4" data-slide-to="1"></li>
        <li data-target="#my-carousel4" data-slide-to="2"></li>
    </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
      <div class="carousel-item active" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/outlook.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Outlook Magazine </h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Organized for:</strong>BA(JMC) students</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> April 09, 2024</h2>
             </div>
      </div>
     </div>
      <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/2ind_1.jpg" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Capturing Empowered Indians <br>at Old Delhi</h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Organized for:</strong>BA(JMC) students</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> March 23, 2024</h2>
             </div>
      </div>
     </div>
    
    <div class="carousel-item" style="margin-left:0;width: 70vw;">
        <div class="row" style="background: #800000;">
            <div class="col-md-2">
            <img class="d-block carousel-image img-responsive" src="images/indus/loddhi.jpg" alt="Diwali">
         </div>
         <div class="col-md-10 center">
             <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Photography Walk at<br> Lodhi Garden</h1>
             <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Organized for:</strong>BA(JMC) Students</h2>
             <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Date:</strong> March 14, 2024</h2>
         </div>
        </div>
         
    </div>
   
  </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#my-carousel4" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel4" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

             
              </div>
         

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
