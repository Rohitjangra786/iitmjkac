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
    <title>Faculty Development Programmes | IITM Janakpuri  </title>
    <meta name="description" content="Explore Faculty Development Programmes at IITM Janakpuri designed to enhance teaching skills, research capabilities, and academic excellence.">

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
            <h1 id="iipc">Faculty Development Programmes</h1>
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
              
              <p class="text-justify" style="color: #4b4b4b;">The aim is to ensure the professional 
              development of faculty members, with a focus on enhancing their teaching and research skills to 
              positively impact student learning and academic performance. Our Faculty Development Programs (FDPs) 
              offer intensive training in pedagogical techniques, state-of-the-art research methodologies, and advanced knowledge in specialized areas.</p>
              
              
              <hr class="hr-maroon"/>
            
              
               <div class="table-container">
                   
                   <h1>Faculty Development Programmes (2025-26)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
               <tr><td>	1	</td>
               <td>	06-10.01.26	</td>
               <td>	Research Idea to Analysis	</td>
               <td>	Dr. Akanksha Upadhyaya, Dr. Anurag Tiruwa and Dr. Disha Garg	</td>
               </tr>
               <tr><td>	2	</td>
               <td>	16-21.06.25	</td>
               <td>	"AICTE-Atal Sponsered  FDP The Fuiture of Computing: Integrating Green AI, IOT & Federated Learning  "	</td>
               <td>	"Prof. Mansaf Alam, Professor, Jamia Millia Islamia, New Delhi
Prof. (Dr.) D. K. Lobiyal, Professor, JNU, Delhi, India
Prof. A K Mohapatra, Professor ,IGDTUW, New Delhi
Mr. RAJIV KOHLI Industry Expert. American Express
Mr. Ajitabh Aggarwal, Managing Director ,Accenture
Mr. Sushobhit Raman, Industry Expert,Bureau Veritas Group 
"	</td>
               </tr>
               <tr><td>	3	</td>
               <td>	21-26.06.25	</td>
               <td>	Implementing Outcome based Education in Allignment with NEP 2020	</td>
               <td>	Prof. Madhu Vij (FMS)          Dr. Nidhi , RDias                     Dr. Rekha Dahiya,                  Dr. B.R. Ambedkar University                                  Dr. Anurag Tiruwa, Assistant Professor         Dr. Amita Pathania, Assistant Professor, IITM , Dr.  Shweta Jha(APEEJAY School of Management) , Dr. Vikra, Sharma ( Associate Dean ,ICFAI), Dr. Monika Kulshreshtha (Director, IINTM), Dr. Sonam Arora(Associate Professor, IITM),  Dr. Sunitha Ravi , Associate Professor(IITM), Dr. Latika Malhotra -Associate Professor(IITM), Dr. Nivedita Sharma -HOD , Department of Journalism (IITM), Dr. Charul Nigam , Associate Porfessor(IITM), Dr. Raghav Jain, Associate Professor (IITM) , Ms. Saguna Khajuria, Assistant Professor(IITM)	</td>
               </tr>  
               <tr><td>	4	</td>
               <td>	08.11.25	</td>
               <td>	MDEP on "Growing in to Charismatic Leader & Brilliant Strategist"	</td>
               <td>	Mr. Rishi Wadhwa, JLL, Ms. Prerna Kapoor, Evalueserve, Mr. CP Chawla, IITM,  Dr. Sonam Arora, IITM, Dr. Tiruwa, IITM	</td>
               </tr>              
            </tbody>
        </table>
 
 
 
                    <h1>Faculty Development Programmes (2024-25)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
               <tr><td>	1	</td>
               <td>	03-13.09.24	</td>
               <td>	FDP on NEP Orientation And Sensitization	</td>
               <td>	Prof. Mansaf Alam, Dr. Shalini, Prof. Anjala, Prof. Shivani, Prof. Amita	</td>
               </tr>
               <tr>
               <td>	2	</td>
               <td>	05-10.03.25	</td>
               <td>	One Week Research  Methodology Course for Social  Sciences( ICSSR Sponsored)	</td>
               <td>	Dr. Ava Shukla, Director, Dr. B.R. Ambedkar Open University, Ahmedabad, Gujarat, Mr. Ajay Kumar Gupta, former Director, ICSSR, Dr. Sachin Bharti, Associate Professor at the University School of Media Studies (USMC), Dr. Jyoti Shokeen, Assistant Professor at Indira Gandhi Delhi Technical University for Women (IGDTUW), and Dr. Jai Kishon Goswami, Assistant Professor at Sharda University.. Dr. Nidhi Ahuja, Assistant Professor at IILM, Ms. Shruti Gulati, Assistant Professor at Delhi University Dr. Aaqib Anwaar Butt, Assistant Professor at KR Mangalam University, Gurgaon,Dr. Pawan Koundal, Associate Professor at the Indian Institute of Mass Communication, Dr. Minal Pareekh, Dean at Sister Nivedita University (SNU)	</td>
               </tr>
            </tbody>
        </table>
        
        <h1>Faculty Development Programmes (2023-24)</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1-14.8.23</td>
                    <td>FDP on Quality Education and Accreditation: NEP 2020</td>
                    <td>All Faculty Members</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>15-27.7.23</td>
                    <td>FDP on NEP:2020 Quality Assurance and Enhancement</td>
                    <td>Prof. (Dr.) Rachita Rana, Prof. (Dr.) Monika Kulshrestha, Dr. Ramandeep Kaur, Dr. Sunita Ravi, Dr. Ruchi Kawatra, Dr. Archana Kumari, Dr. Sheela Bhargava</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>28.12.2023 – 02.01.2024</td>
                    <td>One Week Faculty Development Programme</td>
                    <td>Dr. Gopal Singh Latwal, Mr. Varun Kapoor</td>
                </tr>
            </tbody>
        </table>

        <h1>Faculty Development Programmes (2022-23)</h1>
  <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1-7.9.22</td>
                    <td>FDP on Innovative Research and Teaching Practices</td>
                    <td>Prof. (Dr.) C.P. Chawala, Prof. (Dr.) Sudhir Kumar Sharma, Prof. Dr. Vandana Raghava, Prof. (Dr.) Umesh Arya</td>
                </tr>
            </tbody>
        </table>

        <h1>Faculty Development Programmes (2021-22)</h1>
  <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Date</th>
                    <th>Type of Activity</th>
                    <th>Resource Person(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>16.8.21-20.8.21</td>
                    <td>Transforming Teachers for a Sustainable Post COVID-19 World</td>
                    <td>Dr. Kirti Mishra-IITM, Dr. Ruchi Gupta-Shaheed Bhagat Singh College, Prof. Amitabh Gupta-DU, Dr. Surya Prakash Pati-IIM, Dr. Komal Chopra</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>9.8.21-14.8.21</td>
                    <td>Emergence of Blockchain Technology and Cryptocurrencies</td>
                    <td>Prof. (Dr.) Pravin Chandra-Dean USICT, Dr. Bharat Bhushan, Prof. (Dr.) Jubliant J Kizhakkethottam-Saintgits College of Engineering, Dr. Rahul Johri-USICT, Dr. Kiran Chaudhary, Mr. Abhishek Bhattacharya, Mr. Raj Chaganti, Prof. Basant Verma, Dr. Lokesh Chouhan, Mr. Raj Kapoor, Dr. D.K. Lobiyal, Dr. Mansaf Alam, Prof. (Dr.) Sailesh Iyer, Prof. (Dr.) Amit Prakash Singh-USICT</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="height: 10vh;"></div>
              <div style="margin:0;width:100%;">
                   <div class="container">
                                <div class="row">
                  <div id="my-carousel3" class="carousel slide carousel-fade" data-ride="carousel" style="margin-right: auto;margin-left: auto;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#my-carousel3" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel3" data-slide-to="1"></li>
        <li data-target="#my-carousel3" data-slide-to="2"></li>
    </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-left:0;width: 70vw;">

        <div class="row" style="background: #800000;">
             <div class="col-md-2">
                <img class="d-block carousel-image img-responsive" src="images/fdp/fd.png" alt="Business Plan">
             </div>
             <div class="col-md-10 center">
                 <h1 class="tgfmlt" style="font-weight: bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">FDP on <br>
                 “ Quality Education and <br>Accreditation:<br> NEP 2020”</h1>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"><strong>Venue: </strong> IITM Janakpuri, New Delhi</h2>
                 <h2 class="tgfmlt" style="color: #fff; font-size: 1.2rem; text-align: center;"></strong>Date:</strong> August 01 - 14, 2023</h2>
             </div>
      </div>
     </div>
   
   
  </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#my-carousel3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel3" role="button" data-slide="next">
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
