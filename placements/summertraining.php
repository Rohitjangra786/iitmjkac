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
    <title>Summer Training | IITM Janakpuri  </title>
	<meta name="description" content="View the summer training records of IITM Janakpuri showcasing student participation, industry exposure, and practical learning experiences.">

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
        list-style-position: inside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #800000;
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
            <h1 id="iipc"></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/placements.php">IIPC</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/partners.php">Placement Partners</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/recruiters.php">Recruiters Speak</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/plrecords.php">Placement Records</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/summertraining.php">Summer Training Records</a>
                <a class="dropdown-item" href="https://www.iitminternware.com/">Internship Cell</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/placements/images/IITM%20Brochure%20(final).pdf">Brochure</a>
        </div>
        <div class="col-md-9">
             <!-- MBA Summer Training Records   -->
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="mbasum">MBA Summer Training Records</h1>
          <div class="underline"></div>
          <div class="container">
              <p class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  show active" href="msm2225" role="tab" data-bs-toggle="tab">2023-25</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="msm2224" role="tab" data-bs-toggle="tab">2022-24</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="msm2123" role="tab" data-bs-toggle="tab">2021-23</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="msm2022" role="tab" data-bs-toggle="tab">2020-22</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="msm1921" role="tab" data-bs-toggle="tab">2019-21</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="msm1820" role="tab" data-toggle="tab">2018-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="msm1719" role="tab" data-toggle="tab">2017-19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="msm1618" role="tab" data-toggle="tab">2016-18</a>
                </li>-->
             </ul>
             </p>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade show active" id="msm2225">
                  <center>MBA : 2023 - 25 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
<tr><td>00113703923</td> <td>Ansh Sehgal</td> <td>Delhi Public School, Pataudi</td></tr>
<tr><td>00213703923</td> <td>Mayank Kapoor</td> <td>CI Car International</td></tr>
<tr><td>00313703923</td> <td>Muskan Sharma</td> <td>Pioneer E Solutions</td></tr>
<tr><td>00413703923</td> <td>Anurag Mishra</td> <td>Wipro HR Limited</td></tr>
<tr><td>00513703923</td> <td>Akshit Nayyar</td> <td>Journey Routers</td></tr>
<tr><td>00613703923</td> <td>Adarsh Singh</td> <td>Wipro HR Services India Pvt Ltd</td></tr>
<tr><td>00713703923</td> <td>Shyam Aggarwal</td> <td>Hindustan Petroleum Corporation Limited</td></tr>
<tr><td>00813703923</td> <td>Jatin Kumar Jha</td> <td>YNP Ingredients Private Limited</td></tr>
<tr><td>00913703923</td> <td>Ambuj Garg</td> <td>Indian Aviation Academy</td></tr>
<tr><td>01013703923</td> <td>Sahil Ansari</td> <td>Orni Apparels</td></tr>
<tr><td>01113703923</td> <td>Valusha Verma</td> <td>IndiaMART</td></tr>
<tr><td>01213703923</td> <td>Varsha Papnoie</td> <td>ID Tech Solutions Pvt. Ltd.</td></tr>
<tr><td>01313703923</td> <td>Nikhil Gohlan</td> <td>Educate and Elevate</td></tr>
<tr><td>01413703923</td> <td>Nitisha Kumari</td> <td>Morpen Laboratories Ltd</td></tr>
<tr><td>01513703923</td> <td>Muskan</td> <td>Blue Umbrella</td></tr>
<tr><td>01613703923</td> <td>Jatin Rawat</td> <td>Sappy Tech Solutions Pvt. Ltd.</td></tr>
<tr><td>01713703923</td> <td>Tushar Choudhary</td> <td>Branding Pioneers</td></tr>
<tr><td>01813703923</td> <td>Dushyant Kumar</td> <td>Institute of Information Technology and Management</td></tr>
<tr><td>01913703923</td> <td>Rahul Lakra</td> <td>House of Creasip(Infilate)</td></tr>
<tr><td>02013703923</td> <td>Aparna Tikkoo</td> <td>CodSoft</td></tr>
<tr><td>02213703923</td> <td>Anurag Singh</td> <td>Codsoft</td></tr>
<tr><td>02313703923</td> <td>Rahul Pal</td> <td>Idiotic Media</td></tr>
<tr><td>02413703923</td> <td>Muskan Sejwal</td> <td>Easy To Ad Media Pvt. Ltd.</td></tr>
<tr><td>02513703923</td> <td>Kartikay Sonkar</td> <td>Kiddoglee</td></tr>
<tr><td>02613703923</td> <td>Sarthak Tyagi</td> <td>One.com</td></tr>
<tr><td>02713703923</td> <td>Hansika Sharma</td> <td>Career Pathshala</td></tr>
<tr><td>02813703923</td> <td>Divya Pawar</td> <td>Milkbasket</td></tr>
<tr><td>02913703923</td> <td>Yash Jahagirdar</td> <td>Axis Bank</td></tr>
<tr><td>03013703923</td> <td>Vansh Khatter</td> <td>Dakshta Trust</td></tr>
<tr><td>03113703923</td> <td>Amanpreet Singh</td> <td>Indian Institute of Technology Bombay (IIT-Bombay)</td></tr>
<tr><td>03213703923</td> <td>Arnaw Kumar</td> <td>Nayi Value</td></tr>
<tr><td>03313703923</td> <td>Pooja Sharma</td> <td>Arete Consultant Private Limited</td></tr>
<tr><td>03413703923</td> <td>Gursimar Kaur Arora</td> <td>Mother Dairy Fruit and Vegetable Pvt. Ltd.</td></tr>
<tr><td>03513703923</td> <td>Adeeba Khan</td> <td>Ansal Buildwell</td></tr>
<tr><td>03613703923</td> <td>Akansha Diwedi</td> <td>Impact Guru Technology Ventures Pvt Ltd</td></tr>
<tr><td>03713703923</td> <td>Rohit Sharma</td> <td>Career Quest Solutions</td></tr>
<tr><td>03813703923</td> <td>Deepti Jain</td> <td>Digi Sidekick</td></tr>
<tr><td>03913703923</td> <td>Priya Gupta</td> <td>Edulyt India</td></tr>
<tr><td>04013703923</td> <td>Nakul Sejwal</td> <td>One.com</td></tr>
<tr><td>04113703923</td> <td>Ankit Thakur</td> <td>JLR & Associates</td></tr>
<tr><td>04213703923</td> <td>Tripti Prakash</td> <td>Indian Aviation Academy, Vasant Kunj</td></tr>
<tr><td>04313703923</td> <td>Taranjeet Singh</td> <td>Akaal Buildwell</td></tr>
<tr><td>04413703923</td> <td>Zain Ahmad</td> <td>Adjuva Legals</td></tr>
<tr><td>04513703923</td> <td>Deepak Kumar</td> <td>Unbundl</td></tr>
<tr><td>04613703923</td> <td>Romil Chopra</td> <td>Kwalicon Fabtech LLP (Hypak India)</td></tr>
<tr><td>35113703923</td> <td>Tushar Sehgal</td> <td>BR Enterprises</td></tr>
<tr><td>35213703923</td> <td>Ujjwal Gupta</td> <td>Bluesmart Technologies</td></tr>
<tr><td>35313703923</td> <td>Aman Garg</td> <td>Adroit Financial Services Pvt. Ltd.</td></tr>
<tr><td>35413703923</td> <td>Geetika Bhardwaj</td> <td>Dixon Technologies (India) Limited</td></tr>
<tr><td>35513703923</td> <td>Jai Solanki</td> <td>Rimpac HR Services LLP</td></tr>
<tr><td>35613703923</td> <td>Aditi Katoch</td> <td>Action Tesa</td></tr>
<tr><td>70113703923</td> <td>Nandini Prakash</td> <td>WNS Global Services Private Limited</td></tr>

                           
                           
						</tbody>
					</table>
              </div>                
              <div role="tabpanel" class="tab-pane" id="msm2224">
                  <center>MBA : 2022 - 24 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                         <tr><td>	00113703922	</td> <td>	SaaniyaTanwar	</td> <td>	Power Finance Corporation (PFC)	</td></tr>
                             <tr><td>	00213703922	</td> <td>	Mohammad Saood	</td> <td>	Edulyt India.Pvt Ltd	</td></tr>
                             <tr><td>	00313703922	</td> <td>	Mohd Saami Naseer	</td> <td>	Airpay Payments Services 	</td></tr>
                             <tr><td>	00413703922	</td> <td>	Divya Sharma	</td> <td>	Erekrut	</td></tr>
                             <tr><td>	00513703922	</td> <td>	Deepanshu Tyagi	</td> <td>	Bajrang Tools	</td></tr>
                             <tr><td>	00613703922	</td> <td>	Manisha Chhilwal	</td> <td>	SV Traders	</td></tr>
                             <tr><td>	0073703922	</td> <td>	Avneesh Kumar 	</td> <td>	Share India Pvt. Ltd	</td></tr>
                             <tr><td>	00813703922	</td> <td>	Paras Chhabra	</td> <td>	Shriram Life Insurance Co.	</td></tr>
                             <tr><td>	00913703922	</td> <td>	Manish Pal	</td> <td>	Pawan Aaradhya & Co.	</td></tr>
                             <tr><td>	01013703922	</td> <td>	Pooja Dhami	</td> <td>	Learn to Upgrade	</td></tr>
                             <tr><td>	01113703922	</td> <td>	Aakriti Chauhan	</td> <td>	Persistent Systems 	</td></tr>
                             <tr><td>	01213703922	</td> <td>	Sahil Batra	</td> <td>	TriEdge Solutions Pvt. Ltd.	</td></tr>
                             <tr><td>	01313703922	</td> <td>	Anisha Gambhir	</td> <td>	TriEdge Solution Pvt. Ltd.	</td></tr>
                             <tr><td>	01413703922	</td> <td>	Abhijeet Kumar 	</td> <td>	Aura Indie Art & Fashion Entertainment 	</td></tr>
                             <tr><td>	01513703922	</td> <td>	Simran Rajora	</td> <td>	AD Technology	</td></tr>
                             <tr><td>	01613703922	</td> <td>	Sonika	</td> <td>	Amazon.in	</td></tr>
                             <tr><td>	01713703922	</td> <td>	Aman Yadav	</td> <td>	Rohan Infocom Pvt. Ltd.	</td></tr>
                             <tr><td>	01813703922	</td> <td>	Ishant Dhawan 	</td> <td>	Pulhant Marketing Pvt. Ltd.	</td></tr>
                             <tr><td>	01913703922	</td> <td>	Ritik Bharti	</td> <td>	HDFC Pvt. Ltd	</td></tr>
                             <tr><td>	02013703922	</td> <td>	Cheshta Arora	</td> <td>	Support Star Corporate Services Pvt. Ltd.	</td></tr>
                             <tr><td>	02113703922	</td> <td>	Kirti Saini	</td> <td>	Erekrut	</td></tr>
                             <tr><td>	02313703922	</td> <td>	Gaurav Gautam	</td> <td>	Spark Allow	</td></tr>
                             <tr><td>	02413703922	</td> <td>	Harsh	</td> <td>	TriEdge Solution Pvt. Ltd.	</td></tr>
                             <tr><td>	02513703922	</td> <td>	Ayush Kumar	</td> <td>	Reliable Allied Services	</td></tr>
                             <tr><td>	02613703922	</td> <td>	Ankit Ray	</td> <td>	Varun Beverages Limited	</td></tr>
                             <tr><td>	02713703922	</td> <td>	Revanth J	</td> <td>	TriEdge Solutions Pvt. Ltd.	</td></tr>
                             <tr><td>	02813703922	</td> <td>	Tarun Grover	</td> <td>	Animal Booster Nutrition	</td></tr>
                             <tr><td>	02913703922	</td> <td>	Ankur	</td> <td>	Edulyt India.Pvt Ltd	</td></tr>
                             <tr><td>	03013703922	</td> <td>	Riya Chaudhary	</td> <td>	Infonity Systems	</td></tr>
                             <tr><td>	03113703922	</td> <td>	Tanu Jindal	</td> <td>	Infonity Systems	</td></tr>
                             <tr><td>	03213703922	</td> <td>	Namita Bajaj 	</td> <td>	CQS Training Pvt. Ltd.	</td></tr>
                             <tr><td>	03313703922	</td> <td>	Zahara Alavi	</td> <td>	Why Ventures	</td></tr>
                             <tr><td>	03413703922	</td> <td>	Nidhi Pal	</td> <td>	Concentrix 	</td></tr>
                             <tr><td>	03513703922	</td> <td>	Urvashi Arora 	</td> <td>	Maruti Suzuki India Ltd.	</td></tr>
                             <tr><td>	03613703922	</td> <td>	Paras Kumar	</td> <td>	CQS Training Pvt. Ltd.	</td></tr>
                             <tr><td>	03713703922	</td> <td>	Neeti Sharma 	</td> <td>	UNO Minda (Rinder Division)	</td></tr>
                             <tr><td>	03813703922	</td> <td>	Kamini Ghosh	</td> <td>	Newgen Software Technology Ltd.	</td></tr>
                             <tr><td>	03913703922	</td> <td>	Hemant Berwal 	</td> <td>	Pawan Aaradhya & Co. (CA)	</td></tr>
                             <tr><td>	04013703922	</td> <td>	Manan Khurana	</td> <td>	Springwel Mattress Pvt. Ltd.	</td></tr>
                             <tr><td>	04113703922	</td> <td>	Aishwarya Ashok 	</td> <td>	Acuevers	</td></tr>
                             <tr><td>	04213703922	</td> <td>	Naitik Pandey	</td> <td>	Geeken Seating Collection Pvt Ltd 	</td></tr>
                             <tr><td>	35113703922	</td> <td>	Nishita Veerwani 	</td> <td>	TriEdge Solutions Pvt. Ltd.	</td></tr>
                             <tr><td>	35213703922	</td> <td>	Anany Sinha	</td> <td>	Edulyt India.Pvt Ltd	</td></tr>
                             <tr><td>	35313703922	</td> <td>	Shruti Khurana	</td> <td>	Shri Chand Computer Pvt. Ltd.	</td></tr>
                             <tr><td>	35413703922	</td> <td>	Mayank Gothwal	</td> <td>	CQS Training Pvt Ltd	</td></tr>
                             <tr><td>	35513703922	</td> <td>	Saksham Rana	</td> <td>	Spacekayak Technologies Pvt. Ltd.	</td></tr>
                             <tr><td>	35613703922	</td> <td>	Prabhjot Singh Shah	</td> <td>	IITM, Janakpuri	</td></tr>
                             <tr><td>	50113703922	</td> <td>	Mohd Aman Ansari	</td> <td>	Developing Bee Pvt Ltd	</td></tr>
                             <tr><td>	50213703922	</td> <td>	Inderjeet Singh	</td> <td>	Edulyt India.Pvt Ltd	</td></tr>
                             <tr><td>	50313703922	</td> <td>	Simran Singh 	</td> <td>	CQS Training Pvt Ltd	</td></tr>
                             <tr><td>	50413703922	</td> <td>	Neha Chauhan 	</td> <td>	CQS Training Pvt. Ltd.	</td></tr>
                             <tr><td>	50513703922	</td> <td>	Tanya Jawlia	</td> <td>	CQS Training Pvt Ltd	</td></tr>
                             <tr><td>	50613703922	</td> <td>	Swati Sharma 	</td> <td>	Niti Aayog 	</td></tr>

                           
                           
						</tbody>
					</table>
              </div>
                
                <div role="tabpanel" class="tab-pane" id="msm2123">
                  <center>MBA : 2021 - 23 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                        <tr><td>	00113703921	</td> <td>	Palak Rohilla	</td> <td>	WWF India	</td></tr>
                            <tr><td>	00213703921	</td> <td>	Rimjhim Garg	</td> <td>	IFortis World Wide	</td></tr>
                            <tr><td>	00313703921	</td> <td>	Kritika Kalra	</td> <td>	Well Being Shiksha Foundation	</td></tr>
                            <tr><td>	00413703921	</td> <td>	Madhu Kumari	</td> <td>	Modified Arena Private Limited	</td></tr>
                            <tr><td>	00513703921	</td> <td>	Chahat Malhotra	</td> <td>	IBM	</td></tr>
                            <tr><td>	00613703921	</td> <td>	Durdana Naseer	</td> <td>	Airtel Payments Bank	</td></tr>
                            <tr><td>	00713703921	</td> <td>	Vaibhav Mudgal	</td> <td>	S Ratan Capital Pvt Ltd	</td></tr>
                            <tr><td>	00813703921	</td> <td>	Yuvakshi Goel	</td> <td>	Best Seller	</td></tr>
                            <tr><td>	00913703921	</td> <td>	Aakriti Kohli	</td> <td>	Shiksha Foundation	</td></tr>
                            <tr><td>	01013703921	</td> <td>	Dristy Yadav	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	01113703921	</td> <td>	Sourabh Kashyap	</td> <td>	Bajaj Finserv	</td></tr>
                            <tr><td>	01213703921	</td> <td>	Gurleen Kaur	</td> <td>	Best Seller	</td></tr>
                            <tr><td>	01313703921	</td> <td>	Vicky Yadav	</td> <td>	Bajaj Finserv	</td></tr>
                            <tr><td>	01413703921	</td> <td>	Jahnvi Singh	</td> <td>	Sri Mitra India	</td></tr>
                            <tr><td>	01513703921	</td> <td>	Gaurav	</td> <td>	Ikon Staffing Solutions Pvt Ltd	</td></tr>
                            <tr><td>	01613703921	</td> <td>	Mayank Chawla	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	01713703921	</td> <td>	Harsh Vardhan Dubey	</td> <td>	Diya India foundation	</td></tr>
                            <tr><td>	01813703921	</td> <td>	Divya Verma	</td> <td>	Kashware Technologies Pvt. Ltd.	</td></tr>
                            <tr><td>	01913703921	</td> <td>	Manali Paul	</td> <td>	Sri Mitra India	</td></tr>
                            <tr><td>	02013703921	</td> <td>	Chetna Sharma	</td> <td>	ABS	</td></tr>
                            <tr><td>	02113703921	</td> <td>	Charu Bhatia	</td> <td>	Well Being Shiksha Foundation	</td></tr>
                            <tr><td>	02213703921	</td> <td>	Jaya Sahni	</td> <td>	Ifortis Worldwide	</td></tr>
                            <tr><td>	02313703921	</td> <td>	Sonia Negi	</td> <td>	Xero Degree	</td></tr>
                            <tr><td>	02413703921	</td> <td>	Mohd. Areeb	</td> <td>	Hindalco Industries Ltd	</td></tr>
                            <tr><td>	02513703921	</td> <td>	Keshav Tyagi	</td> <td>	ABS	</td></tr>
                            <tr><td>	02613703921	</td> <td>	Kalpana Rawat	</td> <td>	Corporate Access	</td></tr>
                            <tr><td>	02813703921	</td> <td>	Shubham Singh	</td> <td>	1 Mg	</td></tr>
                            <tr><td>	02913703921	</td> <td>	Harsh Shokeen	</td> <td>	Inext Logistics & Supply Chain Pvt Ltd	</td></tr>
                            <tr><td>	03013703921	</td> <td>	Shubham Kumar	</td> <td>	Zup Tek Infotech	</td></tr>
                            <tr><td>	03113703921	</td> <td>	Sumit Pant	</td> <td>	LS Hireman Pvt Ltd	</td></tr>
                            <tr><td>	03213703921	</td> <td>	Ankit Gupta	</td> <td>	Hero Motocorp Pvt Ltd	</td></tr>
                            <tr><td>	03313703921	</td> <td>	Shivam Shahi	</td> <td>	ABS	</td></tr>
                            <tr><td>	03413703921	</td> <td>	Pragati Nayak	</td> <td>	NTPC	</td></tr>
                            <tr><td>	03513703921	</td> <td>	Rida Khan	</td> <td>	Transformplus	</td></tr>
                            <tr><td>	03613703921	</td> <td>	Jatin Ahuja	</td> <td>	Ernst & Young	</td></tr>
                            <tr><td>	03713703921	</td> <td>	Saurabh Prakash	</td> <td>	Inext Logistics and Supply Chain Private Limited	</td></tr>
                            <tr><td>	03813703921	</td> <td>	Kush Kumar Singh	</td> <td>	Vardhan Consulting Engineers 	</td></tr>
                            <tr><td>	03913703921	</td> <td>	Divya Tomar	</td> <td>	ICICI  Bank	</td></tr>
                            <tr><td>	04013703921	</td> <td>	Piyush Tanwar	</td> <td>	Financial Independences Services	</td></tr>
                            <tr><td>	04113703921	</td> <td>	Sparsh Saini	</td> <td>	House ITT	</td></tr>
                            <tr><td>	04213703921	</td> <td>	Kajal Y Kaushik	</td> <td>	Best Seller	</td></tr>
                            <tr><td>	04313703921	</td> <td>	Jatin Pandey	</td> <td>	LS Hireman Consultancy	</td></tr>
                            <tr><td>	04413703921	</td> <td>	Preeti Roy	</td> <td>	Financial Independence Services	</td></tr>
                            <tr><td>	04513703921	</td> <td>	Karan Verma	</td> <td>	IKON Staffing Solutions Pvt Ltd	</td></tr>
                            <tr><td>	04713703921	</td> <td>	Komal Chandra	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	04813703921	</td> <td>	Soumya Bhatnagar	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	50213703921	</td> <td>	Surbhi 	</td> <td>	We Settle	</td></tr>
                            <tr><td>	35113703921	</td> <td>	Tanya Singh	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	35213703921	</td> <td>	Simarjeet Singh	</td> <td>	Raje & Sons	</td></tr>
                            <tr><td>	35313703921	</td> <td>	Sezal Shankar	</td> <td>	BlueRose	</td></tr>
                            <tr><td>	35413703921	</td> <td>	Jaskaran Singh Sagoo	</td> <td>	Honda Cars	</td></tr>
                            <tr><td>	35513703921	</td> <td>	Devansh	</td> <td>	GK MF Invest Pvt Ltd	</td></tr>
                            <tr><td>	35613703921	</td> <td>	Karishma	</td> <td>	ICICI Bank	</td></tr>

						</tbody>
					</table>
              </div>
                
                
                
              <div role="tabpanel" class="tab-pane" id="msm2022">
                  <center>MBA : 2020 - 22 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                        <tr><td>	00113703920	</td> <td>	Aanchal Narula	</td> <td>	The GrayQuest Company	</td></tr>
                            <tr><td>	00213703920	</td> <td>	Aashish Gupta	</td> <td>	Shri Ram Plywood Company.	</td></tr>
                            <tr><td>	00313703920	</td> <td>	Abhishek Dabas	</td> <td>	Road to Trip	</td></tr>
                            <tr><td>	00413703920	</td> <td>	Akanksha Yadav	</td> <td>	Growup Group	</td></tr>
                            <tr><td>	00513703920	</td> <td>	Akash Aggarwal	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	00613703920	</td> <td>	Aman	</td> <td>	Affiniti Forwarders Pvt. Ltd.	</td></tr>
                            <tr><td>	00713703920	</td> <td>	Aman Singh	</td> <td>	Hindware Pvt. Ltd	</td></tr>
                            <tr><td>	00813703920	</td> <td>	Anjali Sharma	</td> <td>	Affiniti Forwarders Pvt. Ltd.	</td></tr>
                            <tr><td>	00913703920	</td> <td>	Anjana S	</td> <td>	Britannia	</td></tr>
                            <tr><td>	01013703920	</td> <td>	Arpit Rai	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	01113703920	</td> <td>	Ashish Pandey	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	01213703920	</td> <td>	Ashu Ansari	</td> <td>	India Magical Trip	</td></tr>
                            <tr><td>	01313703920	</td> <td>	Ashwin Krishna	</td> <td>	One X solution	</td></tr>
                            <tr><td>	01413703920	</td> <td>	Atul Kumar	</td> <td>	Muthoot Fincorp Ltd	</td></tr>
                            <tr><td>	01513703920	</td> <td>	Babita	</td> <td>	The Capital Box	</td></tr>
                            <tr><td>	01613703920	</td> <td>	Bharti Datt	</td> <td>	Edu4sure	</td></tr>
                            <tr><td>	01713703920	</td> <td>	Bhawna Pardal	</td> <td>	Universal Tribes	</td></tr>
                            <tr><td>	01813703920	</td> <td>	Bhuvnesh Sharma	</td> <td>	Magnik India Limited	</td></tr>
                            <tr><td>	01913703920	</td> <td>	Garima	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	02013703920	</td> <td>	Garima	</td> <td>	Varun Beverages Pvt Ltd (Pepsi and Co.)	</td></tr>
                            <tr><td>	02113703920	</td> <td>	Gautam Sachdeva	</td> <td>	Diamond Printers	</td></tr>
                            <tr><td>	02213703920	</td> <td>	Irshad	</td> <td>	Indraprastha Power Generation Co. Ltd.	</td></tr>
                            <tr><td>	02313703920	</td> <td>	Kamal Kant Sharma	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	02413703920	</td> <td>	Khushboo Sindhi	</td> <td>	Risan Designer Wear	</td></tr>
                            <tr><td>	02513703920	</td> <td>	Komal Gupta	</td> <td>	Globus Spirits	</td></tr>
                            <tr><td>	02613703920	</td> <td>	Madalsa Aggarwal	</td> <td>	YMA Ayurveda Private Limited	</td></tr>
                            <tr><td>	02713703920	</td> <td>	Mahima Kalra	</td> <td>	Capital Box	</td></tr>
                            <tr><td>	02813703920	</td> <td>	Naman Sharma	</td> <td>	Unschool	</td></tr>
                            <tr><td>	02913703920	</td> <td>	Nitesh Khatri	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	03013703920	</td> <td>	Nitin Bhandari	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	03113703920	</td> <td>	Piyush Tanwar	</td> <td>	D&G Associates	</td></tr>
                            <tr><td>	03213703920	</td> <td>	Pooja Ahlawat	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	03313703920	</td> <td>	Pragya Jha	</td> <td>	The Times of India	</td></tr>
                            <tr><td>	03413703920	</td> <td>	Priya Dhingra	</td> <td>	Convergence Energy Services Ltd. (CESL)	</td></tr>
                            <tr><td>	03513703920	</td> <td>	Rinkal Rana	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	03613703920	</td> <td>	Rishabh Mishra	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	03713703920	</td> <td>	Saksham Gupta	</td> <td>	Jocund India Ltd	</td></tr>
                            <tr><td>	03813703920	</td> <td>	Saloni Tanwar	</td> <td>	Kumar Associates	</td></tr>
                            <tr><td>	03913703920	</td> <td>	Saransh Rustagi	</td> <td>	DLF Brands Pvt. Ltd. 	</td></tr>
                            <tr><td>	04013703920	</td> <td>	Sarthak Gupta	</td> <td>	The Capital Box	</td></tr>
                            <tr><td>	04113703920	</td> <td>	Shivam Thapliyal	</td> <td>	Fab Mode	</td></tr>
                            <tr><td>	04213703920	</td> <td>	Shivani Singh	</td> <td>	Lodestar UM	</td></tr>
                            <tr><td>	04313703920	</td> <td>	Shreya Singh	</td> <td>	Himgiri Automobile	</td></tr>
                            <tr><td>	04413703920	</td> <td>	Sneha Nirmaan	</td> <td>	Maruti Suzuki India Limited	</td></tr>
                            <tr><td>	04513703920	</td> <td>	Somya Pahuja	</td> <td>	Haldiram	</td></tr>
                            <tr><td>	04613703920	</td> <td>	Sonal Kapoor	</td> <td>	Tenhard India Pvt. Ltd. 	</td></tr>
                            <tr><td>	04713703920	</td> <td>	Sonya Sharma	</td> <td>	ASAP Staffing Solutions	</td></tr>
                            <tr><td>	04813703920	</td> <td>	Sparsh Jain	</td> <td>	Honda Motors	</td></tr>
                            <tr><td>	04913703920	</td> <td>	Srishti	</td> <td>	Bridge Group Solutions	</td></tr>
                            <tr><td>	05013703920	</td> <td>	Vibhor Bhatnagar	</td> <td>	ICICI BANK	</td></tr>
                            <tr><td>	05113703920	</td> <td>	Yogesh Kumar	</td> <td>	Veera Tech Pvt. Ltd.	</td></tr>
                            <tr><td>	05213703920	</td> <td>	Yogita Tyagi	</td> <td>	Sahil & Associates	</td></tr>
                            <tr><td>	35113703920	</td> <td>	Ankur Shukla	</td> <td>	Flying Monarch Academy	</td></tr>
                            <tr><td>	35213703920	</td> <td>	Harsh Chawla	</td> <td>	Convergence Energy Services Ltd. (CESL)	</td></tr>
                            <tr><td>	35313703920	</td> <td>	Himanshu Chaudhary	</td> <td>	SKINSMA	</td></tr>
                            <tr><td>	35413703920	</td> <td>	Kuljot Singh	</td> <td>	Acelot Innovation Private Limited	</td></tr>
                            <tr><td>	35513703920	</td> <td>	Priya Saxena	</td> <td>	Ifortis Worldwide	</td></tr>
                            <tr><td>	35613703920	</td> <td>	Rishita	</td> <td>	Times of India	</td></tr>
                            <tr><td>	50113703920	</td> <td>	Aakash Verma	</td> <td>	Antigerm Biocare Services	</td></tr>
                            <tr><td>	50213703920	</td> <td>	Garvit Singh Shekhawat	</td> <td>	Vmak Research And Services	</td></tr>

						</tbody>
					</table>
              </div>
              
              <div role="tabpanel" class="tab-pane" id="msm1921">
                  <center>MBA : 2019 - 21 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                        <tr><td>	00713703919	</td> <td>	Simranjeet Kaur	</td> <td>	Sharekhan	</td></tr>
                            <tr><td>	00213703919	</td> <td>	Priyanka Shankar	</td> <td>	Outlook	</td></tr>
                            <tr><td>	00113703919	</td> <td>	Devanshi Yadav	</td> <td>	University of Minnesota	</td></tr>
                            <tr><td>	35113703919	</td> <td>	Shivam Gupta	</td> <td>	ICICI Bank	</td></tr>
                            <tr><td>	35213703919	</td> <td>	Ujjol Shome	</td> <td>	Outlook	</td></tr>
                            <tr><td>	00313703919	</td> <td>	Abhimanyu Suryavanshi 	</td> <td>	Minter CS Technology Pvt. Ltd.	</td></tr>
                            <tr><td>	00913703919	</td> <td>	Disha Gahlot	</td> <td>	ASK Automotive Pvt. Ltd. 	</td></tr>
                            <tr><td>	00513703919	</td> <td>	Rachit Gupta	</td> <td>	DG & Associates	</td></tr>
                            <tr><td>	00413703919	</td> <td>	Bhavya Malik	</td> <td>	Outlook	</td></tr>
                            <tr><td>	35313703919	</td> <td>	Ankur Aruraj Singh	</td> <td>	Outlook 	</td></tr>
                            <tr><td>	00613703919	</td> <td>	Akanksha Sinha	</td> <td>	Sharekhan	</td></tr>
                            <tr><td>	00813703919	</td> <td>	Tanya Singh Rathore 	</td> <td>	Sharekhan	</td></tr>
						</tbody>
					</table>
              </div>
            
              <!--<div role="tabpanel" class="tab-pane" id="msm1820">
                  <center>MBA : 2018 - 20 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						     
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
						<tr><td>Aashi Sharma</td><td>Vida Salvateur International Pvt Ltd</td></tr>
                        <tr><td>Aditi Saxena</td><td>India Infoline Limited</td></tr>
                        <tr><td>Alex Kuriakose George</td><td>Shriram Pistons & Rings Limited</td></tr>
                        <tr><td>Avdhesh Kumar</td><td>Sharekhan Limited</td></tr>
                        <tr><td>Ayushi Singh</td><td>NMS Enterprise Ltd.</td></tr>
                        <tr><td>Binny Dureja</td><td>ONGC</td></tr>
                        <tr><td>Diksha</td><td>Delhi Financial Corporation</td></tr>
                        <tr><td>Divya Singh</td><td>Pantaloons Fashion Retail Ltd.</td></tr>
                        <tr><td>Durgesh Uniyal</td><td>NBCC (India) Limited</td></tr>
                        <tr><td>Garima Jonwal</td><td>BSES Ltd.</td></tr>
                        <tr><td>Gurpreet Kaur</td><td>Bridge Group Solutions</td></tr>
                        <tr><td>Jatin </td><td>Astitva Education Trust</td></tr>
                        <tr><td>Jatin Pal Singh	</td><td>Bridgegroup Solutions</td></tr>
                        <tr><td>Kajal Kalra</td><td>Delhi Financial Corporation</td></tr>
                        </td><td>Kannupriya Kaushik</td><td>ONGC</td></tr>
                        <tr><td>Karan Dogra</td><td>HDFC Bank</td></tr>
                        <tr><td>Komal Kaushik</td><td>Shriram Pistons and Rings Limited</td></tr>
                        <tr><td>Latika Shokeen</td><td>Demographic HR Services</td></tr>
                        <tr><td>Mahima Nair</td><td>India Infoline Limited</td></tr>
                        <tr><td>Manoj Kumar</td><td>Bridge Group Solution</td></tr>
                        <tr><td>Mansi Mahawar</td><td>GNG Stock Holdings Pvt. Ltd.</td></tr>
                        <tr><td>Nikunj Kaushik</td><td>Kotak Mahindra Bank</td></tr>
                        <tr><td>Paramjeet Singh</td><td>GME Medical Equipments Pvt. Ltd</td></tr>
                        <tr><td>Preeti</td><td>BT Telecom</td></tr>
                        <tr><td>Preeti Kumari</td><td>ONGC</td></tr>
                        <tr><td>Rahul Seith</td><td>NBCC (India) Limited</td></tr>
                        <tr><td>Ridhima Arora</td><td>Indxx Capital Management</td></tr>
                        <tr><td>Ritu Goyal</td><td>Wipro Limited</td></tr>
                        <tr><td>Ruby</td><td>NSIT Global India</td></tr>
                        <tr><td>Rupali Chhabra</td><td>NBCC (India) Limited</td></tr>
                        <tr><td>Saiby Jaiswal</td><td>DS Group - DS Spiceco - Catch Spice</td></tr>
                        <tr><td>Shabnan Parveen</td><td>NBCC (India) Limited</td></tr>
                        <tr><td>Shekhar</td><td>Wipro HR Services</td></tr>
                        <tr><td>Shubham Kumar Yadav</td><td>NBCC (India) Limited</td></tr>
                        <tr><td>Shubham Solanki</td><td>Natved Bath & Body Care</td></tr>
                        <tr><td>Siddhi Kaushik</td><td>ONGC</td></tr>
                        <tr><td>Tamosha Bhattacharya</td><td>NBCC (India) Limited</td></tr>
                        <tr><td>Vaishali Gupta</td><td>Dalmia Bharat Sugar & Industries Ltd</td></tr>
                        <tr><td>Vipul Gupta</td><td>Carrier Midea India Pvt Ltd</td></tr>
                        <tr><td>Vishal Kumar Gautam</td><td>Andros & Company</td></tr>
                        <tr><td>Disha Taneja</td><td>ROCA Bathroom Products Pvt. Ltd.</td></tr>
                        <tr><td>Ekta Sadana</td><td>Bridge Group Solution</td></tr>
                        <tr><td>Geetanjali</td><td>Bridge Group Solution</td></tr>
                        <tr><td>Pradhi Jain</td><td>HDFC Bank</td></tr>
                        <tr><td>Saurav Lamba</td><td>TNS Automobiles Pvt. Ltd. (SML ISUZU)</td></tr>
                        <tr><td>Shruti Monga</td><td>Career Flight Consultancy</td></tr>
                        <tr><td>Deepesh</td><td>National Building Construction Corporation Limited</td></tr>
                        <tr><td>Pankhuri Shakargaye</td><td>Wipro HR Services Private Limited</td></tr>
                        <tr><td>Shweta Gera</td><td>Axis Bank</td></tr>
                        <tr><td>Sunny Shokeen</td><td>Giriraj Security Private Ltd.</td></tr>
                        <tr><td>Anju Sharma</td><td>Orient Craft Limited</td></tr>
                        <tr><td>Sudhir Kumar Nagar</td><td>HORA.AI</td></tr>
                        <tr><td>Anil Thakur</td><td>Sharekhan limited</td></tr>
                        						
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane" id="msm1719">
                 <center>MBA : 2017 - 19 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
						<tr><td>Akash Tanwar</td><td> Stallion Capital Managemet</td></tr>
						<tr><td>Akshay</td><td> Airport Authority of India</td></tr>
						<tr><td>Akshit Mathur</td><td> SuperDry / Reliance Brands ltd.</td></tr>
						<tr><td>Akshta Jain</td><td> Stallion Capital Management</td></tr>
						<tr><td>Anmol Sharma</td><td> Delhi Financial Corporation (DFC)</td></tr>
						<tr><td>Anushka Jain</td><td> HDFC Bank</td></tr>
						<tr><td>Bharat kumar</td><td> High Beam Global</td></tr>
						<tr><td>Bhawna</td><td> Indycium Tech. LLP</td></tr>
						<tr><td>Deepika Kumari</td><td> Airport Authority of India</td></tr>
						<tr><td>Deepika Verma</td><td> Innovatiview India Pvt. Ltd.</td></tr>
						<tr><td>Deepti</td><td> Stallion Capital Management</td></tr>
						<tr><td>Gaurav Nanda</td><td> Stallion Capital Management</td></tr>
						<tr><td>Gentina George </td><td> HDFC Bank</td></tr>
						<tr><td>Guneet Kaur</td><td> Stallion Capital Management</td></tr>
						<tr><td>Guneet Kaur</td><td> India Infoline Finance Ltd. (IIFL)</td></tr>
						<tr><td>Gurmukh Singh </td><td> Airport Authority of India</td></tr>
						<tr><td>Jatin Gupta</td><td> Delhi Financial Corporation (DFC)</td></tr>
						<tr><td>Jyotsana  kullu</td><td> Career Glitz</td></tr>
						<tr><td>Kartik Seth</td><td> Spectrum@Metro</td></tr>
						<tr><td>Kirti Jaiswal</td><td> NTPC</td></tr>
						<tr><td>Lavisha Jain</td><td> NBCC (India) Limited</td></tr>
						<tr><td>Malvika Yadav</td><td> NTPC</td></tr>
						<tr><td>Manik nagpal</td><td> Ameriprise Financial</td></tr>
						<tr><td>Manpreet kaur</td><td> Pantaloons </td></tr>
						<tr><td>Manpreet Kour </td><td> Punjab and Sind Bank </td></tr>
						<tr><td>Mansh Ahuja</td><td> HCL Info Systems</td></tr>
						<tr><td>Muskan</td><td> DMRC</td></tr>
						<tr><td>Neelam Negi</td><td> Airport Authority of India</td></tr>
						<tr><td>Nidhi Mehra</td><td> HDFC Bank</td></tr>
						<tr><td>Niharika Bhardwaj</td><td> State Trading Corporation of India Ltd.</td></tr>
						<tr><td>Parmeet Gulati</td><td> FIITJEE, Punjabi Bagh Centre</td></tr>
						<tr><td>Prerna chhibba</td><td> HDFC Bank</td></tr>
						<tr><td>Priya</td><td> Liberty Shoes Ltd.</td></tr>
						<tr><td>Priyanka </td><td> Punjab and Sind Bank</td></tr>
						<tr><td>Puneet Singh Saini</td><td> Rajdish Food Products Pvt. Ltd.</td></tr>
						<tr><td>Rahul Roheda</td><td> IDBI</td></tr>
						<tr><td>Rohit Kumar</td><td> Venkateshwar hospitak</td></tr>
						<tr><td>Sahil pawar</td><td> Pantaloons</td></tr>
						<tr><td>Sakshi babbar </td><td> Stallion Capital Management</td></tr>
						<tr><td>Sakshi Kukreti</td><td> Airports Authority of India</td></tr>
						<tr><td>Samarpreet singh</td><td> Punjab and Sind Bank</td></tr>
						<tr><td>Sanskriti Gairola</td><td> SBI Capital Martkets Limited</td></tr>
						<tr><td>Sheetal</td><td> HDFC Bank</td></tr>
						<tr><td>Shikha jain</td><td> People strong</td></tr>
						<tr><td>Shiva kaushik</td><td> Venkateshwar Hospital</td></tr>
						<tr><td>Shourya Bhatia</td><td> Taj Palace Hotels</td></tr>
						<tr><td>Shubham</td><td> India Mart</td></tr>
						<tr><td>Shubham Saini </td><td> Pantaloons </td></tr>
						<tr><td>Shweta Bansal</td><td> HDFC Bank</td></tr>
						<tr><td>Srishti Bhatt</td><td> Delhi Financial Corporation (DFC)</td></tr>
						<tr><td>Sumit Dagar</td><td> HDFC Bank</td></tr>
						<tr><td>Sunshita Ganjoo</td><td> HDFC Bank</td></tr>
						<tr><td>Uruj Waris</td><td> Stallion Capital Management</td></tr>
						<tr><td>Vaibhav Gupta</td><td> HDFC Bank</td></tr>
						<tr><td>Vandana Soni</td><td> BSES Rajdhani Power Ltd.</td></tr>
						<tr><td>Vishal Malhotra</td><td> Pantaloons- Aditya Birla Group</td></tr>
						<tr><td>vishal yadav</td><td> Rajdish food products PVT. LTD</td></tr>
						</tbody>
					</table>
              </div>
              <div role="tabpanel" class="tab-pane" id="msm1618">
                  <center>MBA : 2016 - 18 Summer Training Records</center>
					<table class="table">
						<tbody>
							<tr>
								<th>Student Name</th>
								<th>Company Name</th>
							</tr>
							<tr>
								<td>Aarushi Dua</td>
								<td>Indian Oil Corporation Ltd.</td>
							</tr>
							<tr>
								<td>Aashita Chauhan</td>
								<td>Sikka Group</td>
							</tr>
							<tr>
								<td>Adarsh Kansal</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Aman Vaid</td>
								<td>KK Exports Group</td>
							</tr>
							<tr>
								<td>Amandeep Grewal</td>
								<td>Mercedes Benz-Silver Arrows</td>
							</tr>
							<tr>
								<td>Amanpreet Kaur</td>
								<td>Airports Authority of India</td>
							</tr>
							<tr>
								<td>Anshul Bharti</td>
								<td>Divyansh Infracon Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Archit Kumar</td>
								<td>Punjab &amp; Sind Bank</td>
							</tr>
							<tr>
								<td>B D Amit Kumar</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Dalia Xavier</td>
								<td>Times Of India</td>
							</tr>
							<tr>
								<td>Gaurav Sharma</td>
								<td>Mercedes Benz-Silver Arrows</td>
							</tr>
							<tr>
								<td>Harneet Singh Oberoi</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Himanshi</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Himanshu Saraswat</td>
								<td>Punjab &amp; Sind Bank</td>
							</tr>
							<tr>
								<td>Kajol Dhyani</td>
								<td>Delhi Financial Corporation</td>
							</tr>
							<tr>
								<td>Kirti Dadhwal</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Manoj Singh Kapkoti</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Masoom Mehta</td>
								<td>Le Meridien Hotel</td>
							</tr>
							<tr>
								<td>Milind Jain</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Mohit Jain</td>
								<td>Delhi Financial Corporation</td>
							</tr>
							<tr>
								<td>Mrityunjaya Baburao Hiremath</td>
								<td>Hindustan Insecticides Ltd.</td>
							</tr>
							<tr>
								<td>Naveen Singh</td>
								<td>U.P. State Tourism and Development Corp.</td>
							</tr>
							<tr>
								<td>Nishant Kumar</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Parul Rana</td>
								<td>Punjab &amp; Sind Bank</td>
							</tr>
							<tr>
								<td>Payal Singh</td>
								<td>Excellent Investment Advisorz Pvt. Ltd. (Finadwise)</td>
							</tr>
							<tr>
								<td>Preeti Sharma</td>
								<td>Honda Motor India Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Priya Sharma</td>
								<td>Mool chand Medcity</td>
							</tr>
							<tr>
								<td>Priya Sharma</td>
								<td>ERIC (Equity Research &amp; Investment Consultant)</td>
							</tr>
							<tr>
								<td>Purnima</td>
								<td>MS Services</td>
							</tr>
							<tr>
								<td>Rajat Sharma</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr><tr>
								<td>Ravi Kant</td>
								<td>Time of India Magazine Group</td>
							</tr>
							<tr>
								<td>Ravjeet Singh</td>
								<td>Vardhman Estate &amp; Developers Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Roopali</td>
								<td>Indian Oil Corporation Ltd.</td>
							</tr>
							<tr>
								<td>Sahil</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Sahil Dhall</td>
								<td>FIIT JEE Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Sai Krishna</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Sakshi Chopra</td>
								<td>Thomson Press India Limited</td>
							</tr>
							<tr>
								<td>Shivam Kaushik</td>
								<td>Escorts Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Shivani Gupta</td>
								<td>Metals &amp; Minerals Trading Corp. of India</td>
							</tr>
							<tr>
								<td>Shivani Yadav</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Shreya Gupta</td>
								<td>Airports Authority of India</td>
							</tr>
							<tr>
								<td>Shruti Sachdeva</td>
								<td>Airports Authority of India</td>
							</tr>
							<tr>
								<td>Shubham Gautam</td>
								<td>Sai Powers</td>
							</tr>
							<tr>
								<td>Shubham Singhal</td>
								<td>FAMIEE India Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Sidharth Sewani</td>
								<td>FIIT JEE Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Simran Oberoi</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Sumit Baabal</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Swati Bisht</td>
								<td>Punjab &amp; Sind Bank</td>
							</tr>
							<tr>
								<td>Taranjeet Kaur</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Vaibhav Kohli</td>
								<td>Indian Oil Corporation Ltd.</td>
							</tr>
							<tr>
								<td>Vaishnavi Sharma</td>
								<td>Omnis Healthcare Services Pvt. Ltd.</td>
							</tr>
							<tr>
								<td>Yogender Rana</td>
								<td>Punjab &amp; Sind Bank</td>
							</tr>
						</tbody>
					</table>
              </div>
            </div></h2>-->
             
           
              <div style="height: 10vh;"></div>
             
          </div>
        </div>
        </div>
      </section>
<!-- BCOM Summer Training Records   -->  
 <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="bcomsum">B.Com(H) Summer Training Records</h1>
          <div class="underline"></div>
          <div class="container">
              <div class="text-justify tgfmlt" style="color: #4b4b4b;">
                 
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link show active" href="csum2124" role="tab" data-bs-toggle="tab">2021-24</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="csum2023" role="tab" data-bs-toggle="tab">2020-23</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="csum1922" role="tab" data-bs-toggle="tab">2019-22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="csum1821" role="tab" data-bs-toggle="tab">2018-21</a>
                </li>
                

             </ul>
             </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="csum2124">
                  <center>B.Com(H) : 2021 24 Summer Training Records</center>
                  	<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2021-2024-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2021-2024-BCOM-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2021-2024-BCOM-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table">
						<tbody>
						<tr>
						     <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
                            <tr><td>00113788821</td> <td>Saksham Jain</td> <td>Pehchaan The Street School</td></tr>
                            <tr><td>00213788821</td> <td>Nishtha Sharma</td> <td>Ram Realty, LLC</td></tr>
                            <tr><td>00313788821</td> <td>Saloni Indra</td> <td>Digitas India</td></tr>
                            <tr><td>00413788821</td> <td>Divyanshu Kumar</td> <td>Kunal Tour and Travels Private Ltd.</td></tr>
                            <tr><td>00513788821</td> <td>Riya Garg</td> <td>Jatin Bansal & Co.</td></tr>
                            <tr><td>00613788821</td> <td>Devesh Gahlot</td> <td>Vsharp</td></tr>
                            <tr><td>00713788821</td> <td>Yash Goel</td> <td>New Shine Diamond Tools</td></tr>
                            <tr><td>00813788821</td> <td>Pooja Arora</td> <td>BCS Consulting Pvt. Ltd.</td></tr>
                            <tr><td>00913788821</td> <td>Puneet Narula</td> <td>Ashiana Housing Limited</td></tr>
                            <tr><td>01013788821</td> <td>Manav Goel</td> <td>RAH Infotech</td></tr>
                            <tr><td>01113788821</td> <td>Pushp Mehta</td> <td>Team Building Pro</td></tr>
                            <tr><td>01213788821</td> <td>Dhruv Mittal</td> <td>Avarna International</td></tr>
                            <tr><td>01313788821</td> <td>Mugdha Bhalla</td> <td>The Leading Solutions</td></tr>
                            <tr><td>01413788821</td> <td>Riddhiman Tokas</td> <td>Nippon India Mutual Funds</td></tr>
                            <tr><td>01513788821</td> <td>Mitali Chauhan</td> <td>Aru Enterprises</td></tr>
                            <tr><td>01613788821</td> <td>Pulkit Nagpal</td> <td>Kshitiksha Foundation</td></tr>
                            <tr><td>01713788821</td> <td>Shaurya Verma</td> <td>Palladium Safety Solutions Pvt Ltd</td></tr>
                            <tr><td>01813788821</td> <td>Raghav Sakhuja</td> <td>DST Productions and Entertainment</td></tr>
                            <tr><td>01913788821</td> <td>Samkit Jain</td> <td>S.S Agencies</td></tr>
                            <tr><td>02013788821</td> <td>Yash Vats</td> <td>Tech Curators</td></tr>
                            <tr><td>02113788821</td> <td>Dhruv Verma</td> <td>Learning Folks</td></tr>
                            <tr><td>02313788821</td> <td>Pranay Sawhney</td> <td>WorldRef Technologies</td></tr>
                            <tr><td>02413788821</td> <td>Anchal Bhatia</td> <td>Kshitiksha Foundation</td></tr>
                            <tr><td>02513788821</td> <td>Siddharth Gautam</td> <td>New Shine Diamond Tools</td></tr>
                            <tr><td>02713788821</td> <td>Anirudh Singh Negi</td> <td>Proxy Ideas Private Limited</td></tr>
                            <tr><td>02813788821</td> <td>Gunjan Garg</td> <td>AIM India Pvt. Ltd.</td></tr>
                            <tr><td>02913788821</td> <td>Yash Kumar Singh</td> <td>Dynamisers Solutions Pvt. Ltd.</td></tr>
                            <tr><td>03013788821</td> <td>Harshit Khurana</td> <td>Mera Profit Pvt. Ltd</td></tr>
                            <tr><td>03113788821</td> <td>Aryan Jain</td> <td>Shivam Computers</td></tr>
                            <tr><td>03213788821</td> <td>Dhruv Kalia</td> <td>Jay Packaging</td></tr>
                            <tr><td>03313788821</td> <td>Saith Sansar</td> <td>ENORD</td></tr>
                            <tr><td>03413788821</td> <td>Prabhjyot Hora</td> <td>Learning Folks</td></tr>
                            <tr><td>03513788821</td> <td>Ashmit Mahajan</td> <td>Accredited Consultants Private Limited</td></tr>
                            <tr><td>03613788821</td> <td>Ridhi Gupta</td> <td>Investosure Consultancy Private Limited</td></tr>
                            <tr><td>03713788821</td> <td>Madhav Khurana</td> <td>Techcurators</td></tr>
                            <tr><td>03813788821</td> <td>Saksham Manav</td> <td>Rites Ltd.</td></tr>
                            <tr><td>03913788821</td> <td>Aditya Gupta</td> <td>The Leading Solutions</td></tr>
                            <tr><td>04013788821</td> <td>Maanshikha Sangwan</td> <td>You Got Brains</td></tr>
                            <tr><td>04113788821</td> <td>Anurag Singh</td> <td>Raj Book Agency</td></tr>
                            <tr><td>04213788821</td> <td>Amanjot Singh Saini</td> <td>Shivam Computers</td></tr>
                            <tr><td>04313788821</td> <td>Lakshay Seth</td> <td>Aru Enterprises</td></tr>
                            <tr><td>04513788821</td> <td>Shobhita Sehgal</td> <td>SipFree Marketing Solutions</td></tr>
                            <tr><td>04613788821</td> <td>Himanshu Tewatia</td> <td>VSharp and Co.</td></tr>
                            <tr><td>04713788821</td> <td>Anish Aggarwal</td> <td>Sant Oil Company</td></tr>
                            <tr><td>04813788821</td> <td>Paras Bhatia</td> <td>Ceramic World</td></tr>
                            <tr><td>35113788821</td> <td>Sneha Mishra</td> <td>You Got Brains</td></tr>
                            <tr><td>35213788821</td> <td>Harsh Khurana</td> <td>Pik Indian</td></tr>
                            <tr><td>35313788821</td> <td>Devanshi Yadav</td> <td>Bhambri Chopora & Pushkarna</td></tr>
                            <tr><td>35413788821</td> <td>Vanshika Verma</td> <td>Profound Print & Design Solution Private Limited</td></tr>
                            <tr><td>35513788821</td> <td>Anshu Rathi</td> <td>Sharekhan by BNP PARIBAS</td></tr>
                            <tr><td>35613788821</td> <td>Ayush Mitra</td> <td>Awal Chetan & Associates</td></tr>



						</tbody>
					</table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2021-2024-BCOM-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
                                    <tr><td>00221188821</td> <td>Pratham Bansal</td> <td>Amson Industries</td></tr>
                                    <tr><td>00321188821</td> <td>Abhinav Malhotra</td> <td>ASG Apple7</td></tr>
                                    <tr><td>00421188821</td> <td>Devansh Sabhlok</td> <td>KG Somani and Co LLP</td></tr>
                                    <tr><td>00521188821</td> <td>Naman Puri</td> <td>Centre for Sight New Delhi</td></tr>
                                    <tr><td>00621188821</td> <td>Gurasis Singh</td> <td>Jairaj Motars</td></tr>
                                    <tr><td>00721188821</td> <td>Sambhav Kumar</td> <td>Nblik</td></tr>
                                    <tr><td>00821188821</td> <td>Nikhil Grover</td> <td>Nysaa</td></tr>
                                    <tr><td>00921188821</td> <td>Punya Sharma</td> <td>ACME Consultants</td></tr>
                                    <tr><td>01021188821</td> <td>Harsh Bhardwaj</td> <td>Shree Ji Traders</td></tr>
                                    <tr><td>01121188821</td> <td>Mayank Gautam</td> <td>Kaushal Construction & Co</td></tr>
                                    <tr><td>01221188821</td> <td>Vrinda Gupta</td> <td>Flavino</td></tr>
                                    <tr><td>01321188821</td> <td>Jeetarth Sharma</td> <td>EduRev Learning Pvt. Ltd.</td></tr>
                                    <tr><td>01421188821</td> <td>Aditya Aggarwal</td> <td>Reliance (Jio)</td></tr>
                                    <tr><td>01521188821</td> <td>Vanshika Singh</td> <td>Z1 Media</td></tr>
                                    <tr><td>01621188821</td> <td>Neha Chauhan</td> <td>Strategic Engagement and Event Solutions</td></tr>
                                    <tr><td>01721188821</td> <td>Arnav Bhattacharya</td> <td>Nehru Place Hotels and Real Estate Pvt. Ltd</td></tr>
                                    <tr><td>01821188821</td> <td>Prerna Khera</td> <td>BasketHunt Private Limited</td></tr>
                                    <tr><td>01921188821</td> <td>Deepak Kathuria</td> <td>My Equation (Tech analogy)</td></tr>
                                    <tr><td>02021188821</td> <td>Yash Kumar Poddar</td> <td>Deepak Bhatia & Associates</td></tr>
                                    <tr><td>02121188821</td> <td>Deepak Kansal</td> <td>You Got Brains</td></tr>
                                    <tr><td>02221188821</td> <td>Ayushi Bhardwaj</td> <td>The Leading Solutions Pvt Ltd</td></tr>
                                    <tr><td>02321188821</td> <td>Tejas Kapoor</td> <td>Centurion Real Estate Developers Pvt. Ltd.</td></tr>
                                    <tr><td>02421188821</td> <td>Kashish</td> <td>ACME Consultants</td></tr>
                                    <tr><td>02521188821</td> <td>Vishakha Pant</td> <td>XIRCLS</td></tr>
                                    <tr><td>02621188821</td> <td>Chirag Mall</td> <td>Ravi Enterprise</td></tr>
                                    <tr><td>02721188821</td> <td>Samarjeet Singh</td> <td>Nblik</td></tr>
                                    <tr><td>02821188821</td> <td>Mehak Jain</td> <td>Educlentt</td></tr>
                                    <tr><td>02921188821</td> <td>Neha Goyal</td> <td>Shree Jee Traders</td></tr>
                                    <tr><td>03021188821</td> <td>Kabir Malhotra</td> <td>Momentum Software</td></tr>
                                    <tr><td>03121188821</td> <td>Sunehra Khan</td> <td>Sigfa Infotech</td></tr>
                                    <tr><td>03321188821</td> <td>Esha Joshi</td> <td>Rank Solider International Private Limited</td></tr>
                                    <tr><td>03421188821</td> <td>Arun Singh</td> <td>V.N. Construction</td></tr>
                                    <tr><td>03521188821</td> <td>Daksh Puri</td> <td>Arth Institute of Vocational Studies</td></tr>
                                    <tr><td>03621188821</td> <td>Aastha Bhojwani</td> <td>Indra Medical</td></tr>
                                    <tr><td>03721188821</td> <td>Mohika Sawhney</td> <td>WorldRef Technologies</td></tr>
                                    <tr><td>03821188821</td> <td>K B Gokul Venkatraman</td> <td>Chennai Enterprises</td></tr>
                                    <tr><td>03921188821</td> <td>Hardik Saluja</td> <td>Outlook Magazines</td></tr>
                                    <tr><td>04021188821</td> <td>Anshul Goel</td> <td>APT Construction Company</td></tr>
                                    <tr><td>04121188821</td> <td>Kanika Agarwal</td> <td>Abhinay Consultant</td></tr>
                                    <tr><td>04221188821</td> <td>Jatin Sharma</td> <td>Bharat Software Solution</td></tr>
                                    <tr><td>04321188821</td> <td>Ankush Suri</td> <td>Pregrad</td></tr>
                                    <tr><td>04421188821</td> <td>Armaan Vaid</td> <td>Tata Steel Ltd.</td></tr>
                                    <tr><td>04521188821</td> <td>Raj Panwar</td> <td>Eatu Media Pvt. Ltd.</td></tr>
                                    <tr><td>04621188821</td> <td>Diksha Kanwar</td> <td>Chahal Automobiles, Gurugram</td></tr>
                                    <tr><td>04721188821</td> <td>Sachin Narayan</td> <td>Amazin Power Pvt. Ltd.</td></tr>
                                    <tr><td>04821188821</td> <td>Shubh Bhatia</td> <td>Cadence Design Systems (India) Pvt. Ltd.</td></tr>
                                    <tr><td>35121188821</td> <td>Kashish Naithani</td> <td>Research Realm</td></tr>
                                    <tr><td>35221188821</td> <td>Divyansh Chawla</td> <td>Acme Consultants</td></tr>
                                    <tr><td>35321188821</td> <td>Pulkit Sahi</td> <td>Jio</td></tr>
                                    <tr><td>35421188821</td> <td>Dhruv Jain</td> <td>Experto Rankers on-call</td></tr>
                                    <tr><td>35521188821</td> <td>Komal</td> <td>Amazin Power</td></tr>
                                    <tr><td>35621188821</td> <td>Nishant</td> <td>Tata Steel Ltd.</td></tr>



											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
              </div>
                <div role="tabpanel" class="tab-pane fade show active" id="csum2023">
                  <center>B.Com(H) : 2020 23 Summer Training Records</center>
                  	<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2020-2023-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2020-2023-BCOM-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2020-2023-BCOM-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table">
						<tbody>
						<tr>
						     <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                        <tr><td>	00113788820	</td> <td>	Aditya Bajaj 	</td> <td>	Agkem Impex Private Limited.	</td></tr>
                            <tr><td>	00313788820	</td> <td>	Amit Kushwaha 	</td> <td>	Literacy India	</td></tr>
                            <tr><td>	00413788820	</td> <td>	Ankur Chandra	</td> <td>	Symphony Prints Pvt. Ltd.	</td></tr>
                            <tr><td>	00513788820	</td> <td>	Anshita Kushwaha	</td> <td>	Bindal Dalal & Co.	</td></tr>
                            <tr><td>	00613788820	</td> <td>	Anshul	</td> <td>	Outlook Group	</td></tr>
                            <tr><td>	00713788820	</td> <td>	Archit Gupta 	</td> <td>	Karanjeet & Associates	</td></tr>
                            <tr><td>	00813788820	</td> <td>	Arshaan Haider	</td> <td>	Blackoffer (OPC) Pvt. Ltd.	</td></tr>
                            <tr><td>	00913788820	</td> <td>	Arvind achuthan	</td> <td>	MegaHertz Infotech	</td></tr>
                            <tr><td>	01013788820	</td> <td>	Ashish mishra	</td> <td>	Tenerife Innovations Private Limited	</td></tr>
                            <tr><td>	01113788820	</td> <td>	Bhavesh Ajmera	</td> <td>	Hamari Pahchan NGO	</td></tr>
                            <tr><td>	01213788820	</td> <td>	Chehak khera	</td> <td>	Outlook Group	</td></tr>
                            <tr><td>	01413788820	</td> <td>	Devansh Dua	</td> <td>	Agkem Impex Private Limited.	</td></tr>
                            <tr><td>	01513788820	</td> <td>	Disha Lochav	</td> <td>	Bindal Dalal & Co.	</td></tr>
                            <tr><td>	01613788820	</td> <td>	Harshita Kalra	</td> <td>	Krishan Supreme Trading Co. Pvt. Ltd.	</td></tr>
                            <tr><td>	01713788820	</td> <td>	Harshvardhan Singh 	</td> <td>	Core Prakashan India Pvt. Ltd.	</td></tr>
                            <tr><td>	01813788820	</td> <td>	Jomin Kunjumon 	</td> <td>	Canopy Technology PvtLtd	</td></tr>
                            <tr><td>	02013788820	</td> <td>	Kartik Mahajan	</td> <td>	One Seven Creative Solutions	</td></tr>
                            <tr><td>	02213788820	</td> <td>	Khushi chauhan	</td> <td>	Career Kits	</td></tr>
                            <tr><td>	02413788820	</td> <td>	Kush bhardwaj 	</td> <td>	All India Rice Export's Association	</td></tr>
                            <tr><td>	02613788820	</td> <td>	Manish Kakkar 	</td> <td>	Pioneer Management Consultants Pvt. Ltd.	</td></tr>
                            <tr><td>	02713788820	</td> <td>	Naman Dutt	</td> <td>	ODMP	</td></tr>
                            <tr><td>	02813788820	</td> <td>	Nidhi Gupta	</td> <td>	Shanti Mukand Hospital	</td></tr>
                            <tr><td>	02913788820	</td> <td>	Nidhi Singh	</td> <td>	Melius Integrated Pvt. Ltd.	</td></tr>
                            <tr><td>	03013788820	</td> <td>	Nitish Kumar Mahalik	</td> <td>	One Seven Creative Solutions	</td></tr>
                            <tr><td>	03113788820	</td> <td>	Parth Kalra	</td> <td>	Tai Infotech Pvt. Ltd.	</td></tr>
                            <tr><td>	03213788820	</td> <td>	Prachi Mittal	</td> <td>	Lavish Exim	</td></tr>
                            <tr><td>	03413788820	</td> <td>	Prapti Narula	</td> <td>	Agile Capital Services	</td></tr>
                            <tr><td>	03513788820	</td> <td>	Pratham Negi	</td> <td>	Saudewala Electro Private limited	</td></tr>
                            <tr><td>	03613788820	</td> <td>	Rishi Goel	</td> <td>	One Seven Creative Solutions	</td></tr>
                            <tr><td>	03713788820	</td> <td>	Ronit Sabharwal 	</td> <td>	Dhirati Education	</td></tr>
                            <tr><td>	03813788820	</td> <td>	Saksham Matta	</td> <td>	Outlook Group	</td></tr>
                            <tr><td>	03913788820	</td> <td>	Samarth Chopra	</td> <td>	Blissfull Prosperity Solutions	</td></tr>
                            <tr><td>	04013788820	</td> <td>	Shalini Singh 	</td> <td>	Z1 Media	</td></tr>
                            <tr><td>	04113788820	</td> <td>	Srishti Agarwal	</td> <td>	Agkem Impex Private Limited.	</td></tr>
                            <tr><td>	04213788820	</td> <td>	Suryansh Kaushik	</td> <td>	Bollore Logistics India Pvt. Ltd.	</td></tr>
                            <tr><td>	04313788820	</td> <td>	Suyash Dubey	</td> <td>	Rudra Robotics Pvt. Ltd.	</td></tr>
                            <tr><td>	04413788820	</td> <td>	Tanmay 	</td> <td>	Shanti Mukand Hospital	</td></tr>
                            <tr><td>	04513788820	</td> <td>	Utkarsh 	</td> <td>	Literacy India	</td></tr>
                            <tr><td>	04613788820	</td> <td>	Vaibhav Gupta 	</td> <td>	Blackoffer (OPC) Pvt. Ltd.	</td></tr>
                            <tr><td>	04713788820	</td> <td>	Vanshika Saxena	</td> <td>	Insplore Consultants Pvt. Ltd.	</td></tr>
                            <tr><td>	04913788820	</td> <td>	Yash Khanna	</td> <td>	The Brooks International	</td></tr>
                            <tr><td>	05013788820	</td> <td>	Yash kumar	</td> <td>	Orbit Techsol India Pvt. Ltd.	</td></tr>
                            <tr><td>	05113788820	</td> <td>	Yukta Pasricha 	</td> <td>	The Big Pitchr Recognises	</td></tr>
                            <tr><td>	35213788820	</td> <td>	Anas	</td> <td>	Seven Industries	</td></tr>
                            <tr><td>	35513788820	</td> <td>	Rounak chopra	</td> <td>	Agile Capital Services	</td></tr>



						</tbody>
					</table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2020-2023-BCOM-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
											<tr><td>	00121188820	</td> <td>	Abhay sharma	</td> <td>	Younglabs Innovations Pvt. Ltd.	</td></tr>
                                            <tr><td>	00221188820	</td> <td>	Abhimanyu batra	</td> <td>	Swell Ambassador	</td></tr>
                                            <tr><td>	00321188820	</td> <td>	Aman chhabra 	</td> <td>	GoodSpace	</td></tr>
                                            <tr><td>	00421188820	</td> <td>	Anurag Pandey 	</td> <td>	Kraft Rooms' Overseas	</td></tr>
                                            <tr><td>	00521188820	</td> <td>	Anurag Vazirani 	</td> <td>	Swell Ambassador	</td></tr>
                                            <tr><td>	00721188820	</td> <td>	Ashok Anand	</td> <td>	Prometheus School	</td></tr>
                                            <tr><td>	00921188820	</td> <td>	Bhimansh Mukhija	</td> <td>	Agile Capital Services	</td></tr>
                                            <tr><td>	01021188820	</td> <td>	Chirag Goel	</td> <td>	Parmar Consultancy Services	</td></tr>
                                            <tr><td>	01121188820	</td> <td>	Deepti Sharma	</td> <td>	Dabur India Limited	</td></tr>
                                            <tr><td>	01221188820	</td> <td>	Gauri tyagi	</td> <td>	OSR charitable Trust, Delhi.	</td></tr>
                                            <tr><td>	01321188820	</td> <td>	Gautam singh rawat	</td> <td>	Parmar Consultancy Services	</td></tr>
                                            <tr><td>	01421188820	</td> <td>	Gautam Sondhi	</td> <td>	Agile Capital Services	</td></tr>
                                            <tr><td>	01521188820	</td> <td>	Ishika Gupta 	</td> <td>	Miran Productions	</td></tr>
                                            <tr><td>	01621188820	</td> <td>	Janmejay Kumar Manibhushan 	</td> <td>	AIM India	</td></tr>
                                            <tr><td>	01721188820	</td> <td>	Jinesh jain	</td> <td>	Ambani & Associates LLP	</td></tr>
                                            <tr><td>	01921188820	</td> <td>	Kunal Kumar	</td> <td>	AIM India	</td></tr>
                                            <tr><td>	02021188820	</td> <td>	M.S. Govind	</td> <td>	Parmar Consultancy Services	</td></tr>
                                            <tr><td>	02121188820	</td> <td>	Mayank Shekhar	</td> <td>	Virtual Villa	</td></tr>
                                            <tr><td>	02221188820	</td> <td>	Minaal Arora	</td> <td>	G.S.S.V. & Associates	</td></tr>
                                            <tr><td>	02321188820	</td> <td>	Navam Jain	</td> <td>	AIM India	</td></tr>
                                            <tr><td>	02421188820	</td> <td>	Nischay gupta	</td> <td>	Bureau of Indian Standards	</td></tr>
                                            <tr><td>	02521188820	</td> <td>	Payal Singhania 	</td> <td>	FrontRow	</td></tr>
                                            <tr><td>	02621188820	</td> <td>	Pratham Chauhan 	</td> <td>	Future Money Easy Services Pvt. Ltd.	</td></tr>
                                            <tr><td>	02721188820	</td> <td>	Pratham Pundir	</td> <td>	Steel Authority India Ltd.	</td></tr>
                                            <tr><td>	02821188820	</td> <td>	Pravir Singh Bawa 	</td> <td>	Websites.co.in	</td></tr>
                                            <tr><td>	02921188820	</td> <td>	Priyanshu kansal	</td> <td>	Bio Concept Formulation	</td></tr>
                                            <tr><td>	03121188820	</td> <td>	Raghav sangal 	</td> <td>	FrontRow	</td></tr>
                                            <tr><td>	03221188820	</td> <td>	Rahul jain	</td> <td>	Vetas	</td></tr>
                                            <tr><td>	03321188820	</td> <td>	Rahul Sharma	</td> <td>	Agile Capital Services	</td></tr>
                                            <tr><td>	03421188820	</td> <td>	Ramandeep Singh	</td> <td>	Swell Ambassador	</td></tr>
                                            <tr><td>	03521188820	</td> <td>	Rishap Nagpal	</td> <td>	Web Ex Designing	</td></tr>
                                            <tr><td>	03621188820	</td> <td>	Satvik Mani	</td> <td>	FrontRow	</td></tr>
                                            <tr><td>	03721188820	</td> <td>	Shruti Singh 	</td> <td>	VIEZ	</td></tr>
                                            <tr><td>	03821188820	</td> <td>	Shubham bhargava	</td> <td>	Parmar Consultancy Services	</td></tr>
                                            <tr><td>	03921188820	</td> <td>	Simarjeet Singh Oberoi 	</td> <td>	Canara Bank	</td></tr>
                                            <tr><td>	04021188820	</td> <td>	Simran Singh	</td> <td>	PicShort	</td></tr>
                                            <tr><td>	04121188820	</td> <td>	Swarnika Chhabra 	</td> <td>	Stratsmith Pvt. Ltd.	</td></tr>
                                            <tr><td>	04221188820	</td> <td>	Tithi Chanda	</td> <td>	Web Ex Designing	</td></tr>
                                            <tr><td>	04421188820	</td> <td>	Varun Dhawan	</td> <td>	Umesh Gupta & Co.	</td></tr>
                                            <tr><td>	04621188820	</td> <td>	Yash Sang 	</td> <td>	G.S. Kohli & Associates	</td></tr>
                                            <tr><td>	35521188820	</td> <td>	Urvashi saluja	</td> <td>	AIM India	</td></tr>
                                            <tr><td>	35621188820	</td> <td>	Vanshita Manchanda 	</td> <td>	MoneyMantra Fintech Pvt. Ltd.	</td></tr>
                                            <tr><td>	50221188820	</td> <td>	Varun kumar verma	</td> <td>	Manikaran Power Ltd.	</td></tr>
                                            <tr><td>	50321188820	</td> <td>	Urvashi batra	</td> <td>	Capps Deployer	</td></tr>



											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
              </div>
                
                
                <div role="tabpanel" class="tab-pane" id="csum1922">
                  <center>B.Com(H) : 2019 - 22 Summer Training Records</center>
                  <ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2019-2022-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2019-2022-BCOM-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2019-2022-BCOM-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table">
						<tbody>
						<tr>
						     <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                            <tr><td>	00213788819	</td> <td>	Avi Chitkara	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	00413788819	</td> <td>	Deepanshu Rawat	</td> <td>	Queen Global International School	</td></tr>
                                <tr><td>	00513788819	</td> <td>	Abhishek gupta	</td> <td>	Times of india	</td></tr>
                                <tr><td>	00613788819	</td> <td>	Rishabh Sharma	</td> <td>	MYRL Tech	</td></tr>
                                <tr><td>	00713788819	</td> <td>	Vansh Sharma	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	00813788819	</td> <td>	Jay Vohra	</td> <td>	Greenon Energyservices Ltd.	</td></tr>
                                <tr><td>	01013788819	</td> <td>	Simranjeet Singh	</td> <td>	Asharp Infotech Pvt.Ltd.	</td></tr>
                                <tr><td>	01113788819	</td> <td>	Khushi	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	01213788819	</td> <td>	Mudit Jain	</td> <td>	Spidernet Cloud Solutions	</td></tr>
                                <tr><td>	01313788819	</td> <td>	Bhuvan Sahgal	</td> <td>	NbliK	</td></tr>
                                <tr><td>	01413788819	</td> <td>	Chirag Kochhar	</td> <td>	Fangled	</td></tr>
                                <tr><td>	01513788819	</td> <td>	Ajitesh Menon	</td> <td>	Stocksprosper	</td></tr>
                                <tr><td>	01613788819	</td> <td>	Ishika Mahajan	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	01713788819	</td> <td>	Ekansh Khanna	</td> <td>	Express Roadways Pvt. Ltd.	</td></tr>
                                <tr><td>	01813788819	</td> <td>	Jatin Upreti	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	01913788819	</td> <td>	Vinayak Krishnan	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	02013788819	</td> <td>	Palak Kapoor	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	02113788819	</td> <td>	Shivam Malhotra	</td> <td>	Dhirati Education	</td></tr>
                                <tr><td>	02213788819	</td> <td>	Pratham Gupta	</td> <td>	Pioneer Management Consultant Pvt. Ltd.	</td></tr>
                                <tr><td>	02313788819	</td> <td>	Rishi Rana	</td> <td>	Dynamiser Solutions	</td></tr>
                                <tr><td>	02413788819	</td> <td>	Shubham Gupta	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                <tr><td>	02513788819	</td> <td>	Bibhav Kirti Choudhary	</td> <td>	InternWare Internship Cell-IITM	</td></tr>
                                <tr><td>	02613788819	</td> <td>	Shashank Mishra	</td> <td>	Mindarika Pvt. Ltd.	</td></tr>
                                <tr><td>	02713788819	</td> <td>	Tushar Garg	</td> <td>	Anteelo Design Pvt. Ltd.	</td></tr>
                                <tr><td>	02813788819	</td> <td>	Bhabya	</td> <td>	Veracity Global Limited	</td></tr>
                                <tr><td>	02913788819	</td> <td>	Veeral Batham	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                <tr><td>	03013788819	</td> <td>	Preet Tehlan	</td> <td>	Advance Automation	</td></tr>
                                <tr><td>	03113788819	</td> <td>	Rashi Nautiyal	</td> <td>	Indraprastha Gas Limited	</td></tr>
                                <tr><td>	03213788819	</td> <td>	Hardik Rawal	</td> <td>	INGLU Global	</td></tr>
                                <tr><td>	03313788819	</td> <td>	Yash dhiman	</td> <td>	Pilania engg works	</td></tr>
                                <tr><td>	03413788819	</td> <td>	Juhi Tayal	</td> <td>	Honey- G Foodies Zone Pvt.Ltd.	</td></tr>
                                <tr><td>	03513788819	</td> <td>	Chirag	</td> <td>	InternWare Internship Cell-IITM	</td></tr>
                                <tr><td>	03613788819	</td> <td>	Thejas Baiju John	</td> <td>	Times of India	</td></tr>
                                <tr><td>	03713788819	</td> <td>	Mohammad Saad	</td> <td>	Jassica and Associates	</td></tr>
                                <tr><td>	03813788819	</td> <td>	Divij Arora	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	03913788819	</td> <td>	Hardik Mediratta	</td> <td>	ShareKhan Ltd.	</td></tr>
                                <tr><td>	04013788819	</td> <td>	Harsh Kataruka	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                <tr><td>	04113788819	</td> <td>	Muskan Tiwari	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                <tr><td>	04313788819	</td> <td>	Sourav Jassi	</td> <td>	OYO Hotels and Homes Pvt. Ltd.	</td></tr>
                                <tr><td>	04513788819	</td> <td>	Raghav Bajaj	</td> <td>	InternWare Internship Cell-IITM	</td></tr>
                                <tr><td>	04813788819	</td> <td>	Vishal Kaushik	</td> <td>	FTS (Failure to Success)	</td></tr>
                                <tr><td>	05013788819	</td> <td>	Vinay Garg	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                <tr><td>	35113788819	</td> <td>	Yashica Garg	</td> <td>	Madhav Packers	</td></tr>
                                <tr><td>	35213788819	</td> <td>	Sambhav Prasad	</td> <td>	Times of india	</td></tr>
                                <tr><td>	35313788819	</td> <td>	Kartik Sharma	</td> <td>	Megmeet Electrical India Pvt. Ltd	</td></tr>
                                <tr><td>	35413788819	</td> <td>	Yaman Daksha	</td> <td>	Jassica & Associates	</td></tr>
                                <tr><td>	35513788819	</td> <td>	kartik Sharma	</td> <td>	Growth Arrow	</td></tr>
                                <tr><td>	35613788819	</td> <td>	Charu Khanna	</td> <td>	Hitachi Micro Clinic System	</td></tr>

  
						
						</tbody>
					</table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2019-2022-BCOM-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
											<tr><td>	00121188819 	</td> <td>	Manas Soti	</td> <td>	Smart Tree	</td></tr>
                                                <tr><td>	00321188819 	</td> <td>	Shreejee Sharma	</td> <td>	Homeflic Livings Pvt. Ltd.	</td></tr>
                                                <tr><td>	00421188819 	</td> <td>	Aakash Sharma	</td> <td>	ShareKhan Ltd.	</td></tr>
                                                <tr><td>	00521188819 	</td> <td>	Medha Pandit	</td> <td>	Expert on Cloud Infotech Pvt. Ltd.	</td></tr>
                                                <tr><td>	00621188819 	</td> <td>	Vinayak Hegde	</td> <td>	iTinker	</td></tr>
                                                <tr><td>	00721188819 	</td> <td>	Yamini Sharma	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                                <tr><td>	00821188819 	</td> <td>	Rhea Thapar	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                                <tr><td>	01021188819 	</td> <td>	Mohit Bambel	</td> <td>	OYO Hotels and Homes Pvt. Ltd.	</td></tr>
                                                <tr><td>	01321188819 	</td> <td>	Yash Saluja	</td> <td>	Ifortis Worldwide	</td></tr>
                                                <tr><td>	01521188819 	</td> <td>	Yug Bhardwaj	</td> <td>	Dhirati Education	</td></tr>
                                                <tr><td>	01621188819 	</td> <td>	Daksh Sejwal	</td> <td>	Visage Lines Personal Care Pvt. Ltd.	</td></tr>
                                                <tr><td>	01921188819 	</td> <td>	Vikrant Nain	</td> <td>	Aashman Foundation	</td></tr>
                                                <tr><td>	02121188819 	</td> <td>	Vishakha Nain	</td> <td>	Aashman Foundation	</td></tr>
                                                <tr><td>	02221188819 	</td> <td>	Sanchit Nehra	</td> <td>	Secure India	</td></tr>
                                                <tr><td>	02521188819 	</td> <td>	Divyansh Singh	</td> <td>	The Times of India	</td></tr>
                                                <tr><td>	02621188819 	</td> <td>	Gaurav Khetwani	</td> <td>	Push and Move	</td></tr>
                                                <tr><td>	02921188819 	</td> <td>	Shivam Bansal	</td> <td>	Neeraj Garg & Associates	</td></tr>
                                                <tr><td>	03021188819 	</td> <td>	Ritik Khera	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                                <tr><td>	03121188819	</td> <td>	Sahil Behura	</td> <td>	The Times of India	</td></tr>
                                                <tr><td>	03221188819 	</td> <td>	Akshit Yadav	</td> <td>	Human Charging India Pvt. Ltd.	</td></tr>
                                                <tr><td>	03321188819 	</td> <td>	Astha Singh	</td> <td>	The Times of India	</td></tr>
                                                <tr><td>	03521188819 	</td> <td>	Arya Kulshrestha	</td> <td>	The Education Tree	</td></tr>
                                                <tr><td>	03621188819 	</td> <td>	Rohan Bisht	</td> <td>	HCL Technologies Ltd.	</td></tr>
                                                <tr><td>	03721188819 	</td> <td>	Prabal Mehra	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                                <tr><td>	03921188819 	</td> <td>	Abdul Samad	</td> <td>	Ifortis Worldwide	</td></tr>
                                                <tr><td>	04021188819 	</td> <td>	Rajat Dogra	</td> <td>	CFI Exports LLP	</td></tr>
                                                <tr><td>	04221188819 	</td> <td>	Bhanu Nagpal	</td> <td>	ATG World Networks Pvt. Ltd.	</td></tr>
                                                <tr><td>	04321188819 	</td> <td>	Aditya Choudhary	</td> <td>	ShareKhan Ltd.	</td></tr>
                                                <tr><td>	04421188819 	</td> <td>	Happy Mighwal	</td> <td>	SIMMI Foundation	</td></tr>
                                                <tr><td>	04621188819 	</td> <td>	Jaspreet Singh	</td> <td>	The Times of India	</td></tr>
                                                <tr><td>	04721188819 	</td> <td>	Vinay	</td> <td>	Acuevers	</td></tr>
                                                <tr><td>	04921188819 	</td> <td>	Shaurya Khanna	</td> <td>	Empliance Information Services India LLP	</td></tr>
                                                <tr><td>	35121188819 	</td> <td>	Mahika Chhabra	</td> <td>	Amit S Agrawal & Co.	</td></tr>
                                                <tr><td>	35221188819 	</td> <td>	Saksham Arora	</td> <td>	Acuevers	</td></tr>
                                                <tr><td>	35321188819 	</td> <td>	Manika Sethi	</td> <td>	Ucliq Services Pvt. Ltd.	</td></tr>
                                                <tr><td>	35421188819 	</td> <td>	Vinay Sejwal	</td> <td>	Visage Lines Personal Care Pvt. Ltd.	</td></tr>
                                                <tr><td>	35521188819 	</td> <td>	Kartik Kaushik	</td> <td>	Ucliq Services Pvt. Ltd.	</td></tr>

											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
              </div>
                
                
                
                <div role="tabpanel" class="tab-pane" id="csum1821">
                  <center>B.Com(H) : 2018 - 21 Summer Training Records</center>
                  	<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2018-2021-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong></strong></a></li>
						
						
						
					</ul>
						<div class="tab-content">
						<div id="2018-2021-BCOM-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : I Shift</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table">
						<tbody>
						<tr>
						     <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                        <tr><td>	00113788818	</td> <td>	Aanchal Sharma	</td> <td>	Inglu Global	</td></tr>
                                <tr><td>	35113788818	</td> <td>	Aashima Arora	</td> <td>	Bharti Cellular Limited	</td></tr>
                                <tr><td>	00313788818	</td> <td>	Aditya Bhalla	</td> <td>	Farms 2 Families	</td></tr>
                                <tr><td>	00613788818	</td> <td>	Akshat Jain	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                <tr><td>	00713788818	</td> <td>	Anoop S Abraham	</td> <td>	Xpert	</td></tr>
                                <tr><td>	00813788818	</td> <td>	Anupama Madhu	</td> <td>	Inglu Global 	</td></tr>
                                <tr><td>	00913788818	</td> <td>	Aparajita Jha	</td> <td>	Citi Bank	</td></tr>
                                <tr><td>	01413788818	</td> <td>	Ayushi Mahajan	</td> <td>	Corporate Infocom Pvt. Ltd.	</td></tr>
                                <tr><td>	01513788818	</td> <td>	Bhumika	</td> <td>	Jtekt India Ltd.	</td></tr>
                                <tr><td>	01613788818	</td> <td>	Bhumika Bhatia	</td> <td>	Sankalp Hmara NGO	</td></tr>
                                <tr><td>	35213788818	</td> <td>	Chirag Dagar	</td> <td>	Fusion Consulting Services 	</td></tr>
                                <tr><td>	01713788818	</td> <td>	Dhruvika	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                <tr><td>	01813788818	</td> <td>	Divya Puri	</td> <td>	Assian Agencies	</td></tr>
                                <tr><td>	40413788818	</td> <td>	Divyanshu Sharma	</td> <td>	Saurabh Enterprises	</td></tr>
                                <tr><td>	40813788818	</td> <td>	Drishti Kathuria	</td> <td>	Whirlpool of India limited	</td></tr>
                                <tr><td>	40713788818	</td> <td>	Garima Batra 	</td> <td>	Ahuja Securities F/o Motilal Oswal	</td></tr>
                                <tr><td>	41413788818	</td> <td>	Geetika Yadav	</td> <td>	Sankalp Hamara NGO	</td></tr>
                                <tr><td>	41313788818	</td> <td>	Harsh Sharma	</td> <td>	Youth Empowerment Foundation 	</td></tr>
                                <tr><td>	02013788818	</td> <td>	Isha Madan	</td> <td>	Sharekhan	</td></tr>
                                <tr><td>	35313788818	</td> <td>	Jaishree	</td> <td>	Nivesh Global	</td></tr>
                                <tr><td>	35413788818	</td> <td>	Kritika Kalra	</td> <td>	Northmount Packaging	</td></tr>
                                <tr><td>	02113788818	</td> <td>	Love Tiwari	</td> <td>	Sri Durga Automobiles	</td></tr>
                                <tr><td>	41813788818	</td> <td>	Madhvi Gupta	</td> <td>	Nivesh Global	</td></tr>
                                <tr><td>	02313788818	</td> <td>	Mayank Mehul	</td> <td>	Internshala	</td></tr>
                                <tr><td>	41113788818	</td> <td>	Mohit Chhabra	</td> <td>	Deloitte	</td></tr>
                                <tr><td>	42313788817	</td> <td>	Nikhil Manchanda 	</td> <td>	Farms2families 	</td></tr>
                                <tr><td>	02513788818	</td> <td>	Nitin Arora 	</td> <td>	Eat My News 	</td></tr>
                                <tr><td>	02613788818	</td> <td>	Parth Vats	</td> <td>	Rich Graviss Products Corps.Ltd	</td></tr>
                                <tr><td>	50113788818	</td> <td>	Rahul Shokeen	</td> <td>	Yashasvi Overseas 	</td></tr>
                                <tr><td>	02713788818	</td> <td>	Rishita Gaba	</td> <td>	Balraj Infotel	</td></tr>
                                <tr><td>	02813788818	</td> <td>	Riteash Tehlan	</td> <td>	IIFL Securities Limited 	</td></tr>
                                <tr><td>	02913788818	</td> <td>	Riti Kumari	</td> <td>	Regex Software Services	</td></tr>
                                <tr><td>	41513788818	</td> <td>	Ritika Budhiraja	</td> <td>	XPERT	</td></tr>
                                <tr><td>	03013788818	</td> <td>	Saksham Aggarwal 	</td> <td>	Opulence Business Solutions Pvt. Ltd. 	</td></tr>
                                <tr><td>	03113788818	</td> <td>	Sanchit Arora	</td> <td>	"Bennett Coleman and Company Limited
                                (Times Group)"	</td></tr>
                                <tr><td>	03213788818	</td> <td>	Saransh Vishwamitra	</td> <td>	Clarastar Trading and Solutions	</td></tr>
                                <tr><td>	03313788818	</td> <td>	Shrishti Bisht	</td> <td>	IIFL Securities Limited 	</td></tr>
                                <tr><td>	03413788818	</td> <td>	Shweta Dubey 	</td> <td>	LUDIFU	</td></tr>
                                <tr><td>	41613788818	</td> <td>	Siddhant Dhondiyal	</td> <td>	Farms2families	</td></tr>
                                <tr><td>	03513788818	</td> <td>	Taranjot Singh	</td> <td>	TPM Consultants	</td></tr>
                                <tr><td>	41713788818	</td> <td>	Winnie Shah 	</td> <td>	Coursera	</td></tr>
                                <tr><td>	03613788818	</td> <td>	Yogita Pachauri 	</td> <td>	Capital Finance Services 	</td></tr>
                                <tr><td>	01113788818	</td> <td>	ARYAN	</td> <td>	Pali Industries	</td></tr>
                                <tr><td>	01313788818	</td> <td>	AYUSH SHARMA	</td> <td>	GKMT-IT	</td></tr>
                                <tr><td>	35513788818	</td> <td>	MANYATA JOSHI	</td> <td>	Hareen Team Work	</td></tr>
                                <tr><td>	35613788818	</td> <td>	PRIYANSH MEHTA	</td> <td>	Nivesh Global	</td></tr>

						
						</tbody>
					</table>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
					
              </div>
              
              
           
              <div style="height: 10vh;"></div>
             
          </div>
        </div>
        </div>
      </section>
<!-- BBA Summer Training Records   -->
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="bbasum">BBA Summer Training Records</h1>
          <div class="underline"></div>
          <div class="container">
              <p class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active show" href="bsum2025" role="tab" data-bs-toggle="tab">2022-25</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bsum2024" role="tab" data-bs-toggle="tab">2021-24</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bsum2023" role="tab" data-bs-toggle="tab">2020-23</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="bsum1922" role="tab" data-bs-toggle="tab">2019-22</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bsum1821" role="tab" data-bs-toggle="tab">2018-21</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="bsum1720" role="tab" data-toggle="tab">2017-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bsum1619" role="tab" data-toggle="tab">2016-19</a>
                </li>-->
             </ul>
           </p>
             
            <!-- Tab panes -->
            <div class="tab-content p-10 text-justify">
                <div role="tabpanel" class="tab-pane active" id="bsum2025">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2022 - 25 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2022-2025-BBA-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2022-2025-BBA-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2022-2025-BBA-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
<tr><td>00113701722</td> <td>Vidit Vashist</td> <td>INPAC Times</td></tr>
<tr><td>00213701722</td> <td>Dhruv Gupta</td> <td>Wisdom Venture</td></tr>
<tr><td>00313701722</td> <td>Guramrit Kaur</td> <td>Vio LernX Pvt. Ltd.</td></tr>
<tr><td>00413701722</td> <td>Shruti Rohilla</td> <td>Kshitiksha Foundation</td></tr>
<tr><td>00513701722</td> <td>Yash</td> <td>The Leading Solutions</td></tr>
<tr><td>00613701722</td> <td>Harshita Sethi</td> <td>Obsidius Ventures Pvt. Ltd.</td></tr>
<tr><td>00713701722</td> <td>Somya Keswani</td> <td>Hello Study Global</td></tr>
<tr><td>00813701722</td> <td>Sahil Maheshwari</td> <td>UrsTech Solution</td></tr>
<tr><td>00913701722</td> <td>Sahil Sharma</td> <td>Moon Beverages Limited</td></tr>
<tr><td>01013701722</td> <td>Shalini Pandey</td> <td>The Leading Solutions</td></tr>
<tr><td>01113701722</td> <td>Kartikey Sharma</td> <td>Zielhoch</td></tr>
<tr><td>01413701722</td> <td>Pranjal Aneja</td> <td>DoDev Technology Pvt Ltd</td></tr>
<tr><td>01513701722</td> <td>Parneet Kaur</td> <td>INPAC Times</td></tr>
<tr><td>01613701722</td> <td>Talish</td> <td>INPAC Times</td></tr>
<tr><td>01713701722</td> <td>Tanya Saneja</td> <td>Unsway</td></tr>
<tr><td>01813701722</td> <td>Chetanya Makhija</td> <td>Hello Study Global</td></tr>
<tr><td>01913701722</td> <td>Saransh Katyal</td> <td>The Leading Solutions</td></tr>
<tr><td>02013701722</td> <td>Ansh Bhatia</td> <td>Socio Labs</td></tr>
<tr><td>02113701722</td> <td>Ishita Jain</td> <td>Bank of India</td></tr>
<tr><td>02213701722</td> <td>Kashvi Jain</td> <td>Patanjali Peya Private Limited</td></tr>
<tr><td>02413701722</td> <td>Akshat Chaurasia</td> <td>Shree Shyam Trading Co.</td></tr>
<tr><td>02513701722</td> <td>Ishan Matani</td> <td>Agile Capital Services</td></tr>
<tr><td>02613701722</td> <td>Varun Gupta</td> <td>Growthclues</td></tr>
<tr><td>02713701722</td> <td>Sneha Dheer</td> <td>AdVertent Global Media Solutions</td></tr>
<tr><td>02813701722</td> <td>Geetika Sharma</td> <td>CSA Advisor</td></tr>
<tr><td>02913701722</td> <td>Jasdeep Singh</td> <td>Palicon Industry</td></tr>
<tr><td>03013701722</td> <td>Keshav Gupta</td> <td>INPAC Times</td></tr>
<tr><td>03113701722</td> <td>Kurada Ravi Shankar</td> <td>Bizbaba Directives Pvt.Ltd.</td></tr>
<tr><td>03213701722</td> <td>Khushi Gupta</td> <td>CSA Advisor</td></tr>
<tr><td>03313701722</td> <td>Vikram Kumar</td> <td>Steel Authority of India Limited, Bokaro Steel City Jharkhand</td></tr>
<tr><td>03413701722</td> <td>Kartik Kalra</td> <td>Gmudra India Technology (OPC) Pvt. Ltd.</td></tr>
<tr><td>03513701722</td> <td>Arya Goel</td> <td>Terra Charge</td></tr>
<tr><td>03613701722</td> <td>Nikhil Khattar</td> <td>Eco Law Chambers</td></tr>
<tr><td>03713701722</td> <td>Ronit Jain</td> <td>Shree Balaji Industry</td></tr>
<tr><td>03813701722</td> <td>Arsh Gakhar</td> <td>TravClan</td></tr>
<tr><td>03913701722</td> <td>Prabhleen Singh</td> <td>Perfect Polymers</td></tr>
<tr><td>04013701722</td> <td>Sparsh Babber</td> <td>INPAC Times</td></tr>
<tr><td>04113701722</td> <td>Lavanya Chopra</td> <td>Grocket Venture Pvt. Ltd.</td></tr>
<tr><td>04213701722</td> <td>Garv Talreja</td> <td>Growthclues</td></tr>
<tr><td>04313701722</td> <td>Manya Wadhwa</td> <td>Career Pathshala</td></tr>
<tr><td>04413701722</td> <td>Suhani Gupta</td> <td>Kalakrit</td></tr>
<tr><td>04513701722</td> <td>Lakshay Chachra</td> <td>Aviva Beauty</td></tr>
<tr><td>04613701722</td> <td>Lavanya Asnani</td> <td>Fininvest</td></tr>
<tr><td>04713701722</td> <td>Tisha Ahuja</td> <td>INPAC Times</td></tr>
<tr><td>04813701722</td> <td>Charu Sharma</td> <td>Jiwan Books International Pvt. Ltd.</td></tr>
<tr><td>04913701722</td> <td>Tushar Jain</td> <td>Chandrakant & Associates</td></tr>
<tr><td>05013701722</td> <td>Ansh Pasricha</td> <td>Rajiv Bajaj and Associates</td></tr>
<tr><td>05113701722</td> <td>Kabir Bhandari</td> <td>Growthclues</td></tr>
<tr><td>05213701722</td> <td>Madhav Dhamija</td> <td>Vio LernX Pvt. Ltd.</td></tr>
<tr><td>05313701722</td> <td>Prisha Singh</td> <td>Youth India Foundation</td></tr>
<tr><td>05413701722</td> <td>Akshita Shree</td> <td>Food Safety and Standards Authority of India (FSSAI)</td></tr>
<tr><td>05513701722</td> <td>Ananya Jain</td> <td>INPAC Times</td></tr>
<tr><td>05613701722</td> <td>Priyal Verma</td> <td>Techpoppy Private Limited</td></tr>
<tr><td>05713701722</td> <td>Shivam Gupta</td> <td>SSAMH International Pvt. Ltd.</td></tr>
<tr><td>06013701722</td> <td>Animesh Mishra</td> <td>Infosys</td></tr>
<tr><td>06113701722</td> <td>Harshita Jain</td> <td>Growthclues</td></tr>
<tr><td>06213701722</td> <td>Tanishka Negi</td> <td>Megasoft Solution India Pvt. Ltd.</td></tr>
<tr><td>06313701722</td> <td>Saryansh Jain</td> <td>Metvy</td></tr>
<tr><td>06413701722</td> <td>Lakshit Chauhan</td> <td>Safe Hands Clothing</td></tr>
<tr><td>06513701722</td> <td>Anshul Arora</td> <td>Arts Shala</td></tr>
<tr><td>06813701722</td> <td>Dhruv Raheja</td> <td>BMW Group India</td></tr>
<tr><td>06913701722</td> <td>Ishika Nishad</td> <td>Hypak (Kwalicon Fabtech LLP)</td></tr>
<tr><td>07013701722</td> <td>Bhavya Kain</td> <td>Fantastic Media</td></tr>
<tr><td>07113701722</td> <td>Dushyant Chhabra</td> <td>Erekrut</td></tr>
<tr><td>07213701722</td> <td>Chitraksh</td> <td>INPAC Times</td></tr>
<tr><td>07313701722</td> <td>Advaitt Chandola</td> <td>Vio LernX Pvt. Ltd.</td></tr>
<tr><td>07413701722</td> <td>Shashwat Negi</td> <td>Terra Charge</td></tr>
<tr><td>07513701722</td> <td>Kartik Sarna</td> <td>Zielhoch</td></tr>
<tr><td>07613701722</td> <td>Rishit Anand</td> <td>V.A. Enterprises</td></tr>
<tr><td>07713701722</td> <td>Mehak Bablani</td> <td>Simtrak Solutions</td></tr>
<tr><td>07813701722</td> <td>Aryan Panwar</td> <td>GoodSpace</td></tr>
<tr><td>07913701722</td> <td>Aastha Kapoor</td> <td>V.A. Enterprises</td></tr>
<tr><td>08013701722</td> <td>Vinti Yadav</td> <td>Steller Sprangs Solutions</td></tr>
<tr><td>08113701722</td> <td>Aashita Srivastava</td> <td>Hindustan Aeronautics Limited</td></tr>
<tr><td>08213701722</td> <td>Geetika Juneja</td> <td>Growthclues</td></tr>
<tr><td>08313701722</td> <td>Shiv Bhardwaj</td> <td>INPAC Times</td></tr>
<tr><td>08513701722</td> <td>Yashaswi Kaushal</td> <td>Bank of Baroda (BOB)</td></tr>
<tr><td>08613701722</td> <td>Ojas Ahuja</td> <td>Ads Mania</td></tr>
<tr><td>08713701722</td> <td>Ashpreet Singh Khanuja</td> <td>Milan Sales Corporation</td></tr>
<tr><td>08813701722</td> <td>Sparsh Mittal</td> <td>Growthclues</td></tr>
<tr><td>08913701722</td> <td>Simarpreet Singh</td> <td>Invest Value Fintech Pvt. Ltd.</td></tr>
<tr><td>09013701722</td> <td>Saurabh Chopra</td> <td>PsychoBeings</td></tr>
<tr><td>09113701722</td> <td>Hitesh Arora</td> <td>Future Money Easy Services Pvt Ltd</td></tr>
<tr><td>09213701722</td> <td>Preksha Ratawal</td> <td>College Dekho</td></tr>
<tr><td>09313701722</td> <td>Lakshita Sharma</td> <td>INPAC Times</td></tr>
<tr><td>09613701722</td> <td>Ananya Gupta</td> <td>Marketing Fundas</td></tr>
<tr><td>09713701722</td> <td>Pranav Anand</td> <td>Vio LernX Pvt. Ltd.</td></tr>
<tr><td>09813701722</td> <td>Aayushi Rawat</td> <td>Growthclues</td></tr>
<tr><td>10013701722</td> <td>Archita Sachdeva</td> <td>Luhaif Digitech</td></tr>
<tr><td>10113701722</td> <td>Harman Singh</td> <td>Tata AIA Life Insurance Co. Ltd.</td></tr>
<tr><td>10213701722</td> <td>Abhav Vijay Gupta</td> <td>Steller Sprangs Solutions</td></tr>
<tr><td>10313701722</td> <td>Shreya Sharma</td> <td>Track Manufacturing Co. Pvt. Ltd.</td></tr>
<tr><td>10413701722</td> <td>Harsh Pal</td> <td>Spillmate</td></tr>
<tr><td>10513701722</td> <td>Bhavya Kapoor</td> <td>Niti Aayog, Govt. of India</td></tr>
<tr><td>10713701722</td> <td>Sarthak Sharma</td> <td>Popular Generics</td></tr>
<tr><td>10813701722</td> <td>Harshika Sadyora</td> <td>V A Enterprises</td></tr>
<tr><td>10913701722</td> <td>Ayush Kapoor</td> <td>IWP Academy</td></tr>
<tr><td>11113701722</td> <td>Aditya Sahrawat</td> <td>Sunrise Consultancy</td></tr>
<tr><td>11213701722</td> <td>Medhavi Rana</td> <td>Lazzy Bear</td></tr>
<tr><td>11313701722</td> <td>Kartik Singhal</td> <td>Kedia Capital Pvt. Ltd.</td></tr>
<tr><td>11413701722</td> <td>Pratham Mittal</td> <td>AIM India</td></tr>
<tr><td>11513701722</td> <td>Aanchal Kumari</td> <td>Ritesh Jain & Co. Charted Accountant</td></tr>
<tr><td>11713701722</td> <td>Divansh Bajaj</td> <td>Marketing Fundas</td></tr>
<tr><td>11813701722</td> <td>Tanisha</td> <td>The Delhi State Cooperative Bank Ltd.</td></tr>
<tr><td>11913701722</td> <td>Parmeet Kaur</td> <td>Le Meridien (CJ International Hotels Limited)</td></tr>
<tr><td>12013701722</td> <td>Arushi Bhardwaj</td> <td>Central Pollution Control Board</td></tr>
<tr><td>12113701722</td> <td>Raghav Khandelwal</td> <td>Zeal Global Group</td></tr>
<tr><td>12213701722</td> <td>Shreyas Sankalp Pathak</td> <td>Truesign Media</td></tr>
<tr><td>12413701722</td> <td>Vaidehi</td> <td>Dope Shelf Associates LLP</td></tr>
<tr><td>12513701722</td> <td>Aananya Sethi</td> <td>Maruti Suzuki</td></tr>
<tr><td>12713701722</td> <td>Leevanshi</td> <td>Choudhary Aviation Facilities Pvt. Ltd.</td></tr>
<tr><td>12813701722</td> <td>Shivam Bhati</td> <td>Pehchaan The Street School</td></tr>
<tr><td>12913701722</td> <td>Janefar Chahal</td> <td>Pledge a Smile Foundation</td></tr>
<tr><td>13013701722</td> <td>Jasmin Lochav</td> <td>Wisualyst</td></tr>
<tr><td>13113701722</td> <td>Divyansh Jaggi</td> <td>Agile Capital Services</td></tr>
<tr><td>13313701722</td> <td>Ekansh Srivastava</td> <td>Sunrise Consultancy</td></tr>
<tr><td>13413701722</td> <td>Amogh Singh</td> <td>Agile Capital Services</td></tr>
<tr><td>13513701722</td> <td>Aatish Gidh</td> <td>Quess Corp</td></tr>
<tr><td>13613701722</td> <td>Shiv Malhotra</td> <td>Zomato Hyperpure Pvt. Ltd.</td></tr>
<tr><td>13713701722</td> <td>Sugam Sharma</td> <td>Sharekhan</td></tr>
<tr><td>13913701722</td> <td>Austin Peter</td> <td>Choudhary Aviation Facilities Pvt. Ltd.</td></tr>
<tr><td>14013701722</td> <td>Lakshay Garg</td> <td>Steller Sprangs Solutions</td></tr>
<tr><td>35113701722</td> <td>Jiya Sachdeva</td> <td>Career Pathshala</td></tr>
<tr><td>35213701722</td> <td>Kush Sharma</td> <td>Ceko Products Crop.</td></tr>
<tr><td>35313701722</td> <td>Charvi Pupneja</td> <td>Kyzen Technotrade Pvt Ltd.</td></tr>
<tr><td>35413701722</td> <td>Saumya Dubey</td> <td>Generation India Foundation</td></tr>
<tr><td>35513701722</td> <td>Rohan Gilhotra</td> <td>RRK Group</td></tr>
<tr><td>35613701722</td> <td>Daksh Manocha</td> <td>DNV Paints</td></tr>
<tr><td>35713701722</td> <td>Sugam Arora</td> <td>Quality Asia Certifications Pvt Ltd</td></tr>
<tr><td>35813701722</td> <td>Yash Mehra</td> <td>AB Pal Electricals (P) Limited</td></tr>
<tr><td>35913701722</td> <td>Pratyush Singh Negi</td> <td>Asma Associates</td></tr>
<tr><td>36113701722</td> <td>Saksham Saini</td> <td>Vio LernX Pvt. Ltd.</td></tr>
<tr><td>36213701722</td> <td>Kushal Sharma</td> <td>Sunrise Consultancy</td></tr>
<tr><td>36313701722</td> <td>Tanjot Singh Chadha</td> <td>DERMA Care</td></tr>
<tr><td>36413701722</td> <td>Vansh Sachdev</td> <td>Duke Fashions (India) Ltd.</td></tr>
<tr><td>36513701722</td> <td>Dev Badhiyan</td> <td>SMC Global Securities Ltd</td></tr>
<tr><td>36613701722</td> <td>Vansh Bhatnagar</td> <td>Vega Corporate Service Pvt. Ltd.</td></tr>
<tr><td>36713701722</td> <td>Aryan Pharma</td> <td>Kyzen Technotrade Pvt Ltd.</td></tr>
<tr><td>36813701722</td> <td>Vansh Behl</td> <td>Steller Sprangs Solutions</td></tr>
<tr><td>70113701722</td> <td>Prafful Lohia</td> <td>Evepaper</td></tr>
<tr><td>70313701722</td> <td>Garv Dhingra</td> <td>Baweja Wealth Management Pvt. Ltd.</td></tr>
<tr><td>70413701722</td> <td>Tanya Bhati</td> <td>BIR Garments</td></tr>
<tr><td>70513701722</td> <td>Smriti Juneja</td> <td>Evepaper</td></tr>


                                        

									
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2022-2025-BBA-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
<tr><td>00121101722</td> <td>Kamakshi Sharma</td> <td>Pehchaan The Street School</td></tr>
<tr><td>00221101722</td> <td>Manik Chauhan</td> <td>Fauji Exim Private Limited</td></tr>
<tr><td>00321101722</td> <td>Lakshay Ahuja</td> <td>State Bank of India</td></tr>
<tr><td>00421101722</td> <td>Kanishk Kumar Sharma</td> <td>Quick Logistics</td></tr>
<tr><td>00521101722</td> <td>Ritika Dhami</td> <td>Tummy Section</td></tr>
<tr><td>00621101722</td> <td>Divij Handa</td> <td>Religare Broking Limited</td></tr>
<tr><td>00721101722</td> <td>Shantanu Garg</td> <td>Kshitiksha Foundation</td></tr>
<tr><td>00821101722</td> <td>Krishna Sharma</td> <td>IMPAC Times</td></tr>
<tr><td>00921101722</td> <td>Ishita Sangwal</td> <td>Admissify Edutech Pvt. Ltd.</td></tr>
<tr><td>01021101722</td> <td>Lavanya Sharma</td> <td>Galaxy Advertising & Events</td></tr>
<tr><td>01121101722</td> <td>Vanshita Pahuja</td> <td>IBIS Travels Pvt Ltd.</td></tr>
<tr><td>01221101722</td> <td>Aman Kapoor</td> <td>Harmony Overseas</td></tr>
<tr><td>01321101722</td> <td>Navya Gupta</td> <td>Musak Digital</td></tr>
<tr><td>01421101722</td> <td>Aaradhya Gupta</td> <td>SPG Shipping Pvt. Ltd.</td></tr>
<tr><td>01521101722</td> <td>Vikash Kumar</td> <td>Forage</td></tr>
<tr><td>01621101722</td> <td>Kartik Garg</td> <td>Kyzen Technotrade Pvt Ltd.</td></tr>
<tr><td>01721101722</td> <td>Yakshit Goel</td> <td>Pentagons Digital Marketing LLP</td></tr>
<tr><td>01821101722</td> <td>Tanuj Malik</td> <td>Floww Media Pvt. Ltd.</td></tr>
<tr><td>01921101722</td> <td>Pia Kamra</td> <td>Rozana Rural Commerce Pvt Ltd</td></tr>
<tr><td>02021101722</td> <td>Pratham Dhingra</td> <td>Prettycat</td></tr>
<tr><td>02121101722</td> <td>Sanya Narang</td> <td>CP Transport Co.</td></tr>
<tr><td>02221101722</td> <td>Ashutosh Verma</td> <td>MBSC Jewellers</td></tr>
<tr><td>02321101722</td> <td>Anant Pratosh Sharma</td> <td>Primary Healthtech (MOBILB)</td></tr>
<tr><td>02421101722</td> <td>Sparsh Gupta</td> <td>Pregrad</td></tr>
<tr><td>02521101722</td> <td>Maanya Sharma</td> <td>Prefeasy Enterprises Pvt Ltd</td></tr>
<tr><td>02621101722</td> <td>Tarishi Sachdeva</td> <td>Pehchaan The Street School</td></tr>
<tr><td>02721101722</td> <td>Ishita Saxena</td> <td>BytEquity</td></tr>
<tr><td>02821101722</td> <td>Himen Thakur</td> <td>Zielhoch</td></tr>
<tr><td>02921101722</td> <td>Piyush Baweja</td> <td>Intellect Support Services Pvt. Ltd.</td></tr>
<tr><td>03021101722</td> <td>Rahul Kohli</td> <td>Beltek Canadian Beverages Pvt Ltd</td></tr>
<tr><td>03121101722</td> <td>Ashish</td> <td>The Tummy Section</td></tr>
<tr><td>03221101722</td> <td>Piyush Gaba</td> <td>Bookford Publications Pvt. Ltd.</td></tr>
<tr><td>03321101722</td> <td>Sparsh Jain</td> <td>Phoenix Jewels</td></tr>
<tr><td>03421101722</td> <td>Sidharth Kumar</td> <td>Fauji Exim Private Limited</td></tr>
<tr><td>03521101722</td> <td>Sonali Sharma</td> <td>Pixelonic Media</td></tr>
<tr><td>03621101722</td> <td>Atharv Pandey</td> <td>Showstopper</td></tr>
<tr><td>03721101722</td> <td>Aayushi Puri</td> <td>Manisha Overseas Pvt. Ltd.</td></tr>
<tr><td>03821101722</td> <td>Akshat Goyal</td> <td>Combitic Global Caplet Pvt. Ltd.</td></tr>
<tr><td>03921101722</td> <td>Khushi Bansal</td> <td>Sternet Smart Homes Pvt. Ltd.</td></tr>
<tr><td>04021101722</td> <td>Rohit Raj</td> <td>Asha Mission Society Inc.</td></tr>
<tr><td>04121101722</td> <td>Ishita Chhabra</td> <td>Broz Media</td></tr>
<tr><td>04221101722</td> <td>Harsh Vardhan Mishra</td> <td>Zielhoch</td></tr>
<tr><td>04321101722</td> <td>Krish Wasson</td> <td>Inglu Global</td></tr>
<tr><td>04421101722</td> <td>Muskan Bhardwaj</td> <td>Pixelonic Media</td></tr>
<tr><td>04521101722</td> <td>Divya Raj Purohit</td> <td>Continental Tyres</td></tr>
<tr><td>04621101722</td> <td>Ayush Khandelwal</td> <td>Luxury Personified LLP</td></tr>
<tr><td>04721101722</td> <td>Karanpreet Singh</td> <td>DST Production & Entertainment</td></tr>
<tr><td>04821101722</td> <td>Pavit Singh</td> <td>Qspear</td></tr>
<tr><td>04921101722</td> <td>Aditya Taneja</td> <td>Walkers Media</td></tr>
<tr><td>05021101722</td> <td>Harshita Khatri</td> <td>MudAura</td></tr>
<tr><td>05121101722</td> <td>Riyanka Nanda</td> <td>Growthclues</td></tr>
<tr><td>05221101722</td> <td>Sudhiv Sharma</td> <td>Dehradun E-Net Solution Pvt. Ltd.</td></tr>
<tr><td>05321101722</td> <td>Kashish Agarwal</td> <td>Vrise Global</td></tr>
<tr><td>05421101722</td> <td>Om Rustagi</td> <td>Manoj Satya Jain & Co.</td></tr>
<tr><td>05521101722</td> <td>Niharika Sondhi</td> <td>Avika Packers Pvt.Ltd.</td></tr>
<tr><td>05621101722</td> <td>Satyanshu Kumar</td> <td>Growthclues</td></tr>
<tr><td>05721101722</td> <td>Alocious Joy</td> <td>Lakshyam's Rooh</td></tr>
<tr><td>05821101722</td> <td>Siya Saxena</td> <td>ABL Financial Services</td></tr>
<tr><td>05921101722</td> <td>Harshit Khandelwal</td> <td>Khandelwal Jewellery House</td></tr>
<tr><td>06021101722</td> <td>Diksha Plahania</td> <td>Galaxy Associates</td></tr>
<tr><td>06121101722</td> <td>Sneha Negi</td> <td>Jaypee Hotels and Resorts</td></tr>
<tr><td>06221101722</td> <td>Rishi Kakkar</td> <td>Bricks and Blocks Pvt. Ltd.</td></tr>
<tr><td>06321101722</td> <td>Raghav Sharma</td> <td>Unified Mentor Pvt. Ltd.</td></tr>
<tr><td>06421101722</td> <td>Dev Mehta</td> <td>Floww Media Pvt. Ltd.</td></tr>
<tr><td>06621101722</td> <td>Shivam Aggarwal</td> <td>Growthcure</td></tr>
<tr><td>06721101722</td> <td>Saksham Chopra</td> <td>Harmony Overseas</td></tr>
<tr><td>06821101722</td> <td>Radhika</td> <td>SGAP & Co. (Chartered Accountant)</td></tr>
<tr><td>06921101722</td> <td>Mayank Garg</td> <td>Eco Law Chambers</td></tr>
<tr><td>07021101722</td> <td>Ayush Sharma</td> <td>Phoenix Jewels</td></tr>
<tr><td>07121101722</td> <td>Shourya Daga</td> <td>Floww Media Pvt. Ltd.</td></tr>
<tr><td>07221101722</td> <td>Himanshu Bareja</td> <td>High Street Essentials Pvt. Ltd.</td></tr>
<tr><td>07321101722</td> <td>Tanishk Ahuja</td> <td>Praush Beauty</td></tr>
<tr><td>07421101722</td> <td>Manav Uppal</td> <td>Value360 Communications Pvt. Ltd.</td></tr>
<tr><td>07521101722</td> <td>Jatin Verma</td> <td>Meraki Rehabilitation and Care Centre</td></tr>
<tr><td>07621101722</td> <td>Kritika Bajaj</td> <td>Galaxy Holovision Pvt Ltd</td></tr>
<tr><td>07821101722</td> <td>Bhavya Aggarwal</td> <td>HYPAK</td></tr>
<tr><td>07921101722</td> <td>Sakshi Sharma</td> <td>OPB En Pointe Adwisers LLP</td></tr>
<tr><td>08021101722</td> <td>Sparsh Bhasin</td> <td>Wepearl Pvt. Ltd.</td></tr>
<tr><td>08121101722</td> <td>Lishika Lapsha</td> <td>Tech2Globe Web Solutions LLP</td></tr>
<tr><td>08221101722</td> <td>Aryan Arora</td> <td>Elements HR Services Pvt. Ltd.</td></tr>
<tr><td>08321101722</td> <td>Anurag Bhatt</td> <td>CSA Advisor</td></tr>
<tr><td>08421101722</td> <td>Devesh Bisht</td> <td>Clanstays Pvt Ltd</td></tr>
<tr><td>08521101722</td> <td>Vineet Jain</td> <td>The AXN Power Systems Pvt. Ltd.</td></tr>
<tr><td>08621101722</td> <td>Yashi Mishra</td> <td>A Ditital Solutions</td></tr>
<tr><td>08721101722</td> <td>Naveen Kumar</td> <td>White Future Assets India Pvt. Ltd.</td></tr>
<tr><td>08821101722</td> <td>Muskan Bansal</td> <td>Avika Packers Pvt. Ltd.</td></tr>
<tr><td>08921101722</td> <td>Rajdeep Maity</td> <td>POLAR</td></tr>
<tr><td>09021101722</td> <td>Sonali Dahiya</td> <td>Younity.in</td></tr>
<tr><td>09121101722</td> <td>Anmol Mittal</td> <td>The AXN Power Systems Pvt. Ltd.</td></tr>
<tr><td>09221101722</td> <td>Nitya Gupta</td> <td>Magna Fils and Events</td></tr>
<tr><td>09321101722</td> <td>Abhishek Nair</td> <td>Pehchan-The Street School</td></tr>
<tr><td>09421101722</td> <td>Mayan Gera</td> <td>Gobind Computers Pvt. Ltd.</td></tr>
<tr><td>35121101722</td> <td>Enakshi Sethi</td> <td>Fedback Financial Services Ltd.</td></tr>
<tr><td>35221101722</td> <td>Gursimar Singh</td> <td>Sigma Electronics (India)</td></tr>
<tr><td>35321101722</td> <td>Aaryan Verma</td> <td>T&M Services Consulting Pvt. Ltd.</td></tr>
<tr><td>35421101722</td> <td>Vikhyaat Chopra</td> <td>Mastek Systems</td></tr>
<tr><td>35521101722</td> <td>Niharika Soni</td> <td>Ananta Resource Management Pvt. Ltd.</td></tr>
<tr><td>35621101722</td> <td>Ujjwal Tripathi</td> <td>Phoenix Jewels</td></tr>
<tr><td>35721101722</td> <td>Darsh Pal Singh</td> <td>Engineers Associate</td></tr>
<tr><td>35821101722</td> <td>Dhruv Vaid</td> <td>The Leading Solutions</td></tr>
<tr><td>35921101722</td> <td>Vaman Suri</td> <td>Disha Centre</td></tr>
<tr><td>36021101722</td> <td>Chirag Sablok</td> <td>Kyzen Technotrade Pvt Ltd.</td></tr>
<tr><td>36221101722</td> <td>Antariksh Jain</td> <td>Growthclues</td></tr>
<tr><td>70221101722</td> <td>Prithvi</td> <td>Socio Labs</td></tr>
<tr><td>70321101722</td> <td>Vanshika Mahajan</td> <td>INS Media</td></tr>
<tr><td>70421101722</td> <td>Vansh Dhupar</td> <td>Growthclues</td></tr>


											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div role="tabpanel" class="tab-pane active" id="bsum2024">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2021 - 24 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2021-2024-BBA-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2021-2024-BBA-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2021-2024-BBA-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
<tr><td>05013701721</td> <td>Aditi Mishra</td> <td>Hindalco Industries Limited., Aditya Birla Groups</td></tr>
<tr><td>04813701721</td> <td>Anshit Hasteer</td> <td>A &T Security Services Pvt. Ltd.</td></tr>
<tr><td>03113701721</td> <td>Danish Vig</td> <td>DRDO JS and CAO (Ministry of Defence)</td></tr>
<tr><td>00513701721</td> <td>Deeksha Bisht</td> <td>Ghaziabad Football Association</td></tr>
<tr><td>03013701721</td> <td>Deepanshu Bhardwaj</td> <td>Youth India Foundation</td></tr>
<tr><td>01013701721</td> <td>Deepanshu Dalal</td> <td>Hindustan National Glass & Industries Limited</td></tr>
<tr><td>05413701721</td> <td>Dikshant Bisht</td> <td>Guni Hospitality Pvt. Ltd.</td></tr>
<tr><td>03613701721</td> <td>Divyansh Gupta</td> <td>Stanza Living</td></tr>
<tr><td>01713701721</td> <td>Gungun Dhingra</td> <td>DGMH Technologies Pvt Limited</td></tr>
<tr><td>04613701721</td> <td>Harshdeep Singh Bajwa</td> <td>DCM Infotech Limited</td></tr>
<tr><td>02613701721</td> <td>Himanshi Pandey</td> <td>Asia Pragati Capfin Private Limited</td></tr>
<tr><td>03813701721</td> <td>Janvi Nagi</td> <td>Epigroww Global</td></tr>
<tr><td>01313701721</td> <td>Jasmine Arora</td> <td>Asia Pragati Capfin Private Limited</td></tr>
<tr><td>00213701721</td> <td>Kaashvi Pasricha</td> <td>Digi Astro Technologies Pvt Ltd (DivineTalk)</td></tr>
<tr><td>02513701721</td> <td>Kritika Kain</td> <td>Ghaziabad Football Association</td></tr>
<tr><td>03713701721</td> <td>Madhav Vaid</td> <td>Jabra Connect India Pvt Ltd</td></tr>
<tr><td>02413701721</td> <td>Manish Rawat</td> <td>Intouch</td></tr>
<tr><td>01613701721</td> <td>Manya Sharma</td> <td>Green Hermitage (Brand) in Niktri Endeavours (OPC) Pvt. Ltd.</td></tr>
<tr><td>02813701721</td> <td>Muskan Panjwani</td> <td>Skillarena Educational Technologies</td></tr>
<tr><td>05213701721</td> <td>Nayna Tanwar</td> <td>ManMa Services Pvt. Ltd.</td></tr>
<tr><td>03413701721</td> <td>Parth Sharma</td> <td>Nifsen</td></tr>
<tr><td>04513701721</td> <td>Pratham Arora</td> <td>M/S SMC Global Securities Ltd.</td></tr>
<tr><td>00313701721</td> <td>Preeti Deb</td> <td>Sakshar Media Solution and Consultant Pvt. Ltd</td></tr>
<tr><td>04913701721</td> <td>Ramit Sangrai</td> <td>PHD Chamber of Commerce & Industry</td></tr>
<tr><td>05513701721</td> <td>Rohit Verma</td> <td>Guni Hospitality Pvt. Ltd.</td></tr>
<tr><td>04713701721</td> <td>Sahej Preet Kaur</td> <td>International Data Corporation</td></tr>
<tr><td>00713701721</td> <td>Simran Khurana</td> <td>AIM India Pvt. Ltd.</td></tr>
<tr><td>01113701721</td> <td>Smriti Chaubey</td> <td>Inglu Global</td></tr>
<tr><td>01413701721</td> <td>Tanish Sinha</td> <td>GS Kholi & Company, Chartered Accountant</td></tr>
<tr><td>04313701721</td> <td>Tanya Bhayana</td> <td>Academic Evaluation Centre, German embassy</td></tr>
<tr><td>04113701721</td> <td>Tushaar Sharma</td> <td>Car Raunaq</td></tr>
<tr><td>03513701721</td> <td>Vipul Garg</td> <td>Manifold Ventures</td></tr>
<tr><td>04213701721</td> <td>Vrishti Jain</td> <td>Spring Concept India Pvt. Ltd.</td></tr>
<tr><td>11313701721</td> <td>Aastha Kaira</td> <td>BasketHunt Pvt Ltd</td></tr>
<tr><td>11513701721</td> <td>Aditya Ahuja</td> <td>BasketHunt Pvt Ltd</td></tr>
<tr><td>09113701721</td> <td>Aditya Bajaj</td> <td>Chopra Sanitary and Electricals</td></tr>
<tr><td>08213701721</td> <td>Aditya Narayan Yadav</td> <td>Inglu Global</td></tr>
<tr><td>09913701721</td> <td>Arnav Mahajan</td> <td>Orchid India Inframart LLP</td></tr>
<tr><td>12013701721</td> <td>Bhumi Chittauria</td> <td>Enrich Agro Food Product Pvt Ltd</td></tr>
<tr><td>07613701721</td> <td>Bhumika Jain</td> <td>Inglu Global</td></tr>
<tr><td>09813701721</td> <td>Dhruv Mahajan</td> <td>BasketHunt Pvt Ltd</td></tr>
<tr><td>06313701721</td> <td>Gouransh Ahuja</td> <td>Drifts Logistics Pvt. Ltd.</td></tr>
<tr><td>06513701721</td> <td>Harsh Vardhan Joshi</td> <td>ICICI Bank Ltd.</td></tr>
<tr><td>07413701721</td> <td>Harshit Kapoor</td> <td>Sparsh Garments</td></tr>
<tr><td>07713701721</td> <td>Jiya Bajaj</td> <td>Foodaids</td></tr>
<tr><td>08513701721</td> <td>Kashish Sati</td> <td>Pentagons Digital</td></tr>
<tr><td>11413701721</td> <td>Lakshay Advani</td> <td>Chopra Sanitary and Electricals</td></tr>
<tr><td>09213701721</td> <td>Madhav Singal</td> <td>Asia Pragati Capfin Private Limited</td></tr>
<tr><td>08913701721</td> <td>Manan Kumar</td> <td>Chinmaya Mission</td></tr>
<tr><td>07513701721</td> <td>Mannat Shardne</td> <td>Genessys Applications and Solutions Pvt Ltd</td></tr>
<tr><td>06113701721</td> <td>Pulkit Jain</td> <td>Paysprint Private Limited</td></tr>
<tr><td>11113701721</td> <td>Rahul Kumar Dureja</td> <td>BasketHunt Pvt Ltd</td></tr>
<tr><td>10713701721</td> <td>Raina Chakraborty</td> <td>Corporate Diagnostics Pvt. Ltd</td></tr>
<tr><td>10613701721</td> <td>Ritika Jain</td> <td>Roop Saree Sadan</td></tr>
<tr><td>09013701721</td> <td>Sahil Kumar</td> <td>AIM India Pvt. Ltd.</td></tr>
<tr><td>11713701721</td> <td>Saurav Giri</td> <td>PaySprint Private Limited</td></tr>
<tr><td>08113701721</td> <td>Sayogita Pradhan</td> <td>BasketHunt Pvt Ltd</td></tr>
<tr><td>06713701721</td> <td>Shagun Vaishnav</td> <td>Research Realm</td></tr>
<tr><td>11213701721</td> <td>Shivane Kardam</td> <td>Inglu Global</td></tr>
<tr><td>09313701721</td> <td>Shivansh Chopra</td> <td>Chopra Sanitary and Electricals</td></tr>
<tr><td>11913701721</td> <td>Shivansh Sachdeva</td> <td>Research Realm</td></tr>
<tr><td>06413701721</td> <td>Suneet Madan</td> <td>Madantraders</td></tr>
<tr><td>10313701721</td> <td>Tirathjot Singh</td> <td>Baba Jaswant Singh Dental College, Hospital and Research Institute, Ludhiana</td></tr>
<tr><td>06813701721</td> <td>Tulika Raizada</td> <td>Tata Projects Limited</td></tr>
<tr><td>07213701721</td> <td>Umang Kukreja</td> <td>GetWork</td></tr>
<tr><td>10013701721</td> <td>Vishakha</td> <td>GetWork</td></tr>
<tr><td>08013701721</td> <td>Yashika Khanna</td> <td>ABP Network</td></tr>
<tr><td>36613701721</td> <td>Anushka Tyagi</td> <td>Enrichir Healthcare Private limited</td></tr>
<tr><td>14913701721</td> <td>Bhavy Aggarwal</td> <td>SGAA & CO.</td></tr>
<tr><td>35513701721</td> <td>Bhavya Arora</td> <td>Rockwell Automation India Pvt. Ltd</td></tr>
<tr><td>14113701721</td> <td>Deeksha Sharma</td> <td>Rockman Industries Ltd. Haridwar</td></tr>
<tr><td>35413701721</td> <td>Ihanshu Bhola</td> <td>Insplore Consultants</td></tr>
<tr><td>15713701721</td> <td>Jahanvi</td> <td>KEC International</td></tr>
<tr><td>35113701721</td> <td>Jatin</td> <td>Food Corporation of India</td></tr>
<tr><td>15313701721</td> <td>Mannat Chopra</td> <td>MGF Developments Ltd.</td></tr>
<tr><td>12313701721</td> <td>Manya</td> <td>Investosure</td></tr>
<tr><td>14513701721</td> <td>Mayank Gupta</td> <td>Univolt Electro Devices Pvt Ltd</td></tr>
<tr><td>12613701721</td> <td>Mouryan Pahwa</td> <td>Team#9 Productions</td></tr>
<tr><td>15513701721</td> <td>Naman Jain</td> <td>Finexpert Consultant LLP</td></tr>
<tr><td>12513701721</td> <td>Naveen Mundhra</td> <td>Shri Krishna Financial Services</td></tr>
<tr><td>12713701721</td> <td>Nivedita Mahajan</td> <td>Alankar Footwear</td></tr>
<tr><td>14013701721</td> <td>Ojas Kumar</td> <td>S.S.K. Marketing & Finance Pvt. Ltd.</td></tr>
<tr><td>36713701721</td> <td>Pooja Puri</td> <td>Rupa Ice Cream & Cafe</td></tr>
<tr><td>13113701721</td> <td>Prabhjot Singh</td> <td>Tax Partner</td></tr>
<tr><td>12913701721</td> <td>Prabjee Singh Matta</td> <td>Techo Scient Manufacturing Company</td></tr>
<tr><td>35313701721</td> <td>Priyanshi Deswal</td> <td>SS Fashion Group</td></tr>
<tr><td>13013701721</td> <td>Ravi Kant Sharma</td> <td>PaySprint Private Limited</td></tr>
<tr><td>12213701721</td> <td>Renuka</td> <td>Insplore Consultants</td></tr>
<tr><td>14313701721</td> <td>Rishab Mittal</td> <td>Shri Krishna Financial Services</td></tr>
<tr><td>14813701721</td> <td>Samiksha</td> <td>Global Tech Advisors</td></tr>
<tr><td>12113701721</td> <td>Sarthak Rawat</td> <td>Himcom System</td></tr>
<tr><td>35813701721</td> <td>Shivangi Jain</td> <td>VE Commercial Vehicles Ltd.</td></tr>
<tr><td>12413701721</td> <td>Tamanna Thakur</td> <td>Insightful Technologies</td></tr>
<tr><td>15413701721</td> <td>Tanmay Kumar</td> <td>Ducati Delhi- North Star Automotive</td></tr>
<tr><td>36013701721</td> <td>Tanya Pawar</td> <td>Devtown</td></tr>
<tr><td>13513701721</td> <td>Tarika Nandwani</td> <td>PaySprint Private Limited</td></tr>
<tr><td>14213701721</td> <td>Vikas Singh</td> <td>JAK Group Pvt. Ltd.</td></tr>
<tr><td>36413701721</td> <td>Vishwas Kathuria</td> <td>P Kathuria and Associates</td></tr>


                                        

									
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2021-2024-BBA-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
<tr><td>00221101721</td> <td>Aanandita Sehgal</td> <td>Study 24x7</td></tr>
<tr><td>02221101721</td> <td>Ansh Shukla</td> <td>Bharat Heavy Electricals Ltd.(BHEL)</td></tr>
<tr><td>00621101721</td> <td>Aryan Chugh</td> <td>PaySprint Pvt. Ltd.</td></tr>
<tr><td>04821101721</td> <td>Aryan Juneja</td> <td>Matrix Management Consultant Pvt. Ltd.</td></tr>
<tr><td>03021101721</td> <td>Bhavya Aggarwal</td> <td>Effinomy LLP</td></tr>
<tr><td>03821101721</td> <td>Ishika Goyal</td> <td>E SE Events</td></tr>
<tr><td>01221101721</td> <td>Ishika Tanwar</td> <td>Pick My Work</td></tr>
<tr><td>01921101721</td> <td>Kanishka</td> <td>PaySprint Pvt. Ltd.</td></tr>
<tr><td>00821101721</td> <td>Khushi Sharma</td> <td>Goodrich Maritime Private Limited</td></tr>
<tr><td>03121101721</td> <td>Laksh Khurana</td> <td>Shree Jee Traders</td></tr>
<tr><td>05721101721</td> <td>Manish Kumar</td> <td>Sunpure Extracts Private Limited</td></tr>
<tr><td>03721101721</td> <td>Mehak Mendiratta</td> <td>Biba Fashion Ltd</td></tr>
<tr><td>02021101721</td> <td>Mihir Gupta</td> <td>Lernx</td></tr>
<tr><td>05221101721</td> <td>Naman Mehta</td> <td>Punjab and Sind Bank</td></tr>
<tr><td>01121101721</td> <td>Naman Sharma</td> <td>Pick My Work</td></tr>
<tr><td>04521101721</td> <td>Nilesh Wadhwa</td> <td>FE Securities Pvt. Ltd.</td></tr>
<tr><td>04621101721</td> <td>Parth</td> <td>Prime Polyrubs Pvt Ltd</td></tr>
<tr><td>03621101721</td> <td>Pratyaksh Sharma</td> <td>Swanika Fashion</td></tr>
<tr><td>05821101721</td> <td>Pushkar Jain</td> <td>Pick My Work</td></tr>
<tr><td>00321101721</td> <td>Saachi Dua</td> <td>AIM India Pvt. Ltd.</td></tr>
<tr><td>03521101721</td> <td>Sanchit Singhal</td> <td>The Leading Solutions</td></tr>
<tr><td>00421101721</td> <td>Shivansh Chaturvedi</td> <td>Preeti Creations</td></tr>
<tr><td>01321101721</td> <td>Smriti Dhingra</td> <td>The Leather Warehouse</td></tr>
<tr><td>06021101721</td> <td>Sujal Dawar</td> <td>PaySprint Pvt. Ltd.</td></tr>
<tr><td>05921101721</td> <td>Tanmay Jain</td> <td>The Leather Warehouse</td></tr>
<tr><td>01621101721</td> <td>Vanya Arora</td> <td>Tendance Research Insights Pvt. Ltd</td></tr>
<tr><td>00921101721</td> <td>Vartika Priya</td> <td>Poonam Garments</td></tr>
<tr><td>01421101721</td> <td>Vivek Rajput</td> <td>Upwards and Emergings Pvt Ltd</td></tr>
<tr><td>35321101721</td> <td>Aditya Pandey</td> <td>Gupta Fabrics Pvt Ltd</td></tr>
<tr><td>35621101721</td> <td>Amandeep Singh</td> <td>Jupitor Tools</td></tr>
<tr><td>10121101721</td> <td>Ankit Kumar Thakur</td> <td>AB Corporate Interiors Pvt Ltd</td></tr>
<tr><td>07421101721</td> <td>Ansh Rawat</td> <td>Hindustan Petroleum Corporation Limited</td></tr>
<tr><td>10321101721</td> <td>Anshika Panchuri</td> <td>The Wine Connection</td></tr>
<tr><td>07121101721</td> <td>Arshit Bhatnagar</td> <td>Kohli Chitkara and Company LLP</td></tr>
<tr><td>06621101721</td> <td>Aryan Madan</td> <td>S2Dotserve Solutions Pvt. Ltd.</td></tr>
<tr><td>06121101721</td> <td>Gaurav Aggarwal</td> <td>Harmony Overseas</td></tr>
<tr><td>35521101721</td> <td>Harshita Malhotra</td> <td>Quess Corp Ltd</td></tr>
<tr><td>07721101721</td> <td>Kashish Chauhan</td> <td>Torway Pharmacia</td></tr>
<tr><td>09021101721</td> <td>Krishi Passi</td> <td>Devyani Food Industries Ltd</td></tr>
<tr><td>08821101721</td> <td>Manya Patial</td> <td>Sunpure Extracts Private Limited</td></tr>
<tr><td>36021101721</td> <td>Mehak Vij</td> <td>Le Roi Group of Hotels</td></tr>
<tr><td>06721101721</td> <td>Prashant Mani Tiwari</td> <td>Sunstone Education Technology Pvt Ltd</td></tr>
<tr><td>35921101721</td> <td>Puneet Mehra</td> <td>Gupta Fabrics Pvt. Ltd</td></tr>
<tr><td>08021101721</td> <td>Rohan Kumar</td> <td>Titania Motocorp Pvt. Ltd.</td></tr>
<tr><td>08121101721</td> <td>Surbhi Srivastava</td> <td>Ravishing - A Helping Hand</td></tr>
<tr><td>09621101721</td> <td>Wansh Sanjay</td> <td>Gupta Fabrics Pvt. Ltd</td></tr>
<tr><td>07321101721</td> <td>Yash Singh Negi</td> <td>Onu Creative</td></tr>



											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
				
				
                <div role="tabpanel" class="tab-pane active" id="bsum2023">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2020 - 23 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2020-2023-BBA-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2020-2023-BBA-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2020-2023-BBA-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
										<tr><td>	00113701720	</td> <td>	Aantariksh Malhotra 	</td> <td>	Vraksh Management Pvt. Ltd.	</td></tr>
                                        <tr><td>	00213701720	</td> <td>	Abhinav Sharma	</td> <td>	Parmar Consultancy Services	</td></tr>
                                        <tr><td>	00313701720	</td> <td>	Abhishek Gupta 	</td> <td>	AIM India	</td></tr>
                                        <tr><td>	00413701720	</td> <td>	Aditya Goel	</td> <td>	Innovalance Learning System Pvt. Ltd.	</td></tr>
                                        <tr><td>	00613701720	</td> <td>	Aditya Kapoor	</td> <td>	Plantas Innovations Pvt. Ltd.	</td></tr>
                                        <tr><td>	00713701720	</td> <td>	Akshat Chawla 	</td> <td>	Agile Capital Services 	</td></tr>
                                        <tr><td>	00813701720	</td> <td>	Akshit Pahwa	</td> <td>	Primite	</td></tr>
                                        <tr><td>	00913701720	</td> <td>	Aman Tripathi	</td> <td>	Parmar Consultancy Services	</td></tr>
                                        <tr><td>	01013701720	</td> <td>	Aman Verma	</td> <td>	CSOS Corporate Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	01113701720	</td> <td>	Ankit Sharma	</td> <td>	Friendzo.in	</td></tr>
                                        <tr><td>	01213701720	</td> <td>	Anmol Rohilla	</td> <td>	Paytm	</td></tr>
                                        <tr><td>	01313701720	</td> <td>	Anmol Singhal	</td> <td>	Outlook Group	</td></tr>
                                        <tr><td>	01413701720	</td> <td>	Ansh Takyar	</td> <td>	Bain & Company India Pvt. Ltd.	</td></tr>
                                        <tr><td>	01513701720	</td> <td>	Anuj Arora	</td> <td>	Unicohub	</td></tr>
                                        <tr><td>	01613701720	</td> <td>	Aprajita Bahadur	</td> <td>	HDFC Bank	</td></tr>
                                        <tr><td>	01713701720	</td> <td>	Arpit Chhabra	</td> <td>	Vega Industries Pvt Limited 	</td></tr>
                                        <tr><td>	01913701720	</td> <td>	Aryan Rajesh	</td> <td>	Nblik	</td></tr>
                                        <tr><td>	02013701720	</td> <td>	Ashish Sangwan	</td> <td>	Career Pathsala	</td></tr>
                                        <tr><td>	02113701720	</td> <td>	Ashita Arora	</td> <td>	Indian Oil Corporation Limited 	</td></tr>
                                        <tr><td>	02213791720	</td> <td>	Ashita Kaundal 	</td> <td>	Anshu Astroshala 	</td></tr>
                                        <tr><td>	02313791720	</td> <td>	Ayush Malik	</td> <td>	Vinosha Portfolio Pvt. Ltd.	</td></tr>
                                        <tr><td>	02401370120	</td> <td>	Bhoomi Gupta 	</td> <td>	Sportskeeda	</td></tr>
                                        <tr><td>	02501370120	</td> <td>	Chetna Monga	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	02613701720	</td> <td>	Darshana Chaudhary	</td> <td>	Analytics Saves at Work	</td></tr>
                                        <tr><td>	02713701720	</td> <td>	Deepak Vohra 	</td> <td>	Unschool 	</td></tr>
                                        <tr><td>	02813701720	</td> <td>	Dev Saxena	</td> <td>	Parmar Consultancy Services (HR) 	</td></tr>
                                        <tr><td>	02913701720	</td> <td>	Dhruv Maurya	</td> <td>	Maruti Suziki India Limited	</td></tr>
                                        <tr><td>	03013701720	</td> <td>	Dhruv Sabharwal	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                        <tr><td>	03113701720	</td> <td>	Diksha Gerla	</td> <td>	Dimple Design Studio	</td></tr>
                                        <tr><td>	03213701720	</td> <td>	Dinkar Samyal	</td> <td>	IOCL	</td></tr>
                                        <tr><td>	03313701720	</td> <td>	Divyanshu	</td> <td>	Indian Oil Corporation Limited 	</td></tr>
                                        <tr><td>	03413701720	</td> <td>	Ekaagra Rajpal	</td> <td>	Unschool	</td></tr>
                                        <tr><td>	03613701720	</td> <td>	Gaurangi Sharma 	</td> <td>	AltiVen Technologies Pvt. Ltd.	</td></tr>
                                        <tr><td>	03713701720	</td> <td>	Gunjan Ramdey	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                        <tr><td>	03813701720	</td> <td>	Gurleen Kaur	</td> <td>	Parmar Consultating Services	</td></tr>
                                        <tr><td>	03913701720	</td> <td>	Hardik Arora	</td> <td>	Dhirati Education	</td></tr>
                                        <tr><td>	04013701720	</td> <td>	Hardik Sethi	</td> <td>	Angel One and ICICI Direct in	</td></tr>
                                        <tr><td>	04113701720	</td> <td>	Harsh Tyagi 	</td> <td>	Aashman Foundation	</td></tr>
                                        <tr><td>	04213701720	</td> <td>	Harshit Batra	</td> <td>	TBH Circle	</td></tr>
                                        <tr><td>	04313701720	</td> <td>	Harshit Kumar	</td> <td>	Outlook Group	</td></tr>
                                        <tr><td>	04413701720	</td> <td>	Hiamnshi Gupta	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                        <tr><td>	04513701720	</td> <td>	Himanshi Tulsani	</td> <td>	SAP Vardhman Machinery Pvt. Ltd.	</td></tr>
                                        <tr><td>	04613701720	</td> <td>	Isha Singh	</td> <td>	Dynamizers Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	04713701720	</td> <td>	Jahanvi Batra	</td> <td>	Mavitrio Consultating	</td></tr>
                                        <tr><td>	04813701720	</td> <td>	Kashish Narula	</td> <td>	Parmar Consultancy Services	</td></tr>
                                        <tr><td>	04913701720	</td> <td>	Keshav Goel	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                        <tr><td>	05013701720	</td> <td>	Khushi Birhman 	</td> <td>	Vraksh Management Private Limited 	</td></tr>
                                        <tr><td>	05113701720	</td> <td>	Komal Joshi	</td> <td>	Maruti Suzuki India Ltd.	</td></tr>
                                        <tr><td>	05313701720	</td> <td>	Krishika Kataria 	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                        <tr><td>	05413701720	</td> <td>	Laavya 	</td> <td>	The Supreme Industries Limited	</td></tr>
                                        <tr><td>	05513701720	</td> <td>	Lakshay Oberio	</td> <td>	Dynamizer Solutions 	</td></tr>
                                        <tr><td>	05613701720	</td> <td>	Lovenish Manral	</td> <td>	Relaxo	</td></tr>
                                        <tr><td>	05713701720	</td> <td>	Lovish Bajaj	</td> <td>	Outlook Group	</td></tr>
                                        <tr><td>	05813701720	</td> <td>	Mandeep Singh Bhati 	</td> <td>	Dynamizer Solutions 	</td></tr>
                                        <tr><td>	05913701720	</td> <td>	Mansi Goel	</td> <td>	Parmar Consultancy Sevice	</td></tr>
                                        <tr><td>	06013701720	</td> <td>	Moosa	</td> <td>	TalentServe	</td></tr>
                                        <tr><td>	06213701720	</td> <td>	Nidhi Bhalla	</td> <td>	Thermocraft Engineering Services Private Limited	</td></tr>
                                        <tr><td>	06313701720	</td> <td>	Nikhil Singh Bisht	</td> <td>	Finploy Finance Employment Technologies	</td></tr>
                                        <tr><td>	06413701720	</td> <td>	Nishchay	</td> <td>	SR Asia	</td></tr>
                                        <tr><td>	06513701720	</td> <td>	Nishtha Juneja	</td> <td>	Veddaz Herbal Ayurveda	</td></tr>
                                        <tr><td>	06613701720	</td> <td>	Nishtha Makker	</td> <td>	Dynamizer Solutions	</td></tr>
                                        <tr><td>	06713701720	</td> <td>	Parv Arora	</td> <td>	PTE Universe	</td></tr>
                                        <tr><td>	06813701720	</td> <td>	Pinder Ahuja	</td> <td>	Outlook	</td></tr>
                                        <tr><td>	06913701720	</td> <td>	Prachi Priya	</td> <td>	RRRS & Associates	</td></tr>
                                        <tr><td>	07013701720	</td> <td>	Prateek	</td> <td>	Umeed India- A Drop of Hope	</td></tr>
                                        <tr><td>	07113701720	</td> <td>	Prince Choudhary	</td> <td>	Rjwada Pvt. Ltd.	</td></tr>
                                        <tr><td>	07213701720	</td> <td>	Pulkit Gupta	</td> <td>	Parmar Consulting Services	</td></tr>
                                        <tr><td>	07313701720	</td> <td>	Raghav Aneja	</td> <td>	Xero Degrees Café Pvt. Ltd.	</td></tr>
                                        <tr><td>	07413701720	</td> <td>	Rahul Jha	</td> <td>	Guru Ji Associates 	</td></tr>
                                        <tr><td>	07513701720	</td> <td>	Ridhima Singh	</td> <td>	Learn 2 Achieve	</td></tr>
                                        <tr><td>	07713701720	</td> <td>	Riya	</td> <td>	Dynamizers Solutions	</td></tr>
                                        <tr><td>	07813701720	</td> <td>	Rohan Kapoor	</td> <td>	Outlook Group	</td></tr>
                                        <tr><td>	07913701720	</td> <td>	Rohit Bansal	</td> <td>	IHS Markit	</td></tr>
                                        <tr><td>	08013701720	</td> <td>	Rohit Kumar	</td> <td>	Engineers India Ltd.	</td></tr>
                                        <tr><td>	08113701720	</td> <td>	Rohit Nagpal	</td> <td>	RecruitNXT	</td></tr>
                                        <tr><td>	08213701720	</td> <td>	S. Anuraag	</td> <td>	Z1 Media	</td></tr>
                                        <tr><td>	08313701720	</td> <td>	Sameer Malik	</td> <td>	Veddaz Herbal Ayurveda	</td></tr>
                                        <tr><td>	08413701720	</td> <td>	Sandeep Singh	</td> <td>	Medway Technologies Pvt. Ltd.	</td></tr>
                                        <tr><td>	08513701720	</td> <td>	Sanjana Gugnani	</td> <td>	ZEE Media	</td></tr>
                                        <tr><td>	08613701720	</td> <td>	Sarthak Singhal	</td> <td>	Outlook Group	</td></tr>
                                        <tr><td>	08713701720	</td> <td>	Sauhard Shankar Saha	</td> <td>	Agile Capital Services	</td></tr>
                                        <tr><td>	08813701720	</td> <td>	Sejal Sachar	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	08913701720	</td> <td>	Shivam Dhiman	</td> <td>	RecruitNXT	</td></tr>
                                        <tr><td>	09013701720	</td> <td>	Shivam Mishra	</td> <td>	Arise	</td></tr>
                                        <tr><td>	09113701720	</td> <td>	Shreyansh Bhagwat	</td> <td>	Anshu Astroshala	</td></tr>
                                        <tr><td>	09213701720	</td> <td>	Shubham Dhiman	</td> <td>	"SKI Engineers"</td></tr>
                                        <tr><td>	09313701720	</td> <td>	Simranjeet Kaur	</td> <td>	Parmar Consultancy Services	</td></tr>
                                        <tr><td>	09413701720	</td> <td>	Sneha Gupta	</td> <td>	Hanu Enterprises	</td></tr>
                                        <tr><td>	09513701720	</td> <td>	Sohan Maji	</td> <td>	Medway Technology	</td></tr>
                                        <tr><td>	09713701720	</td> <td>	Swati	</td> <td>	DRIM Platform	</td></tr>
                                        <tr><td>	09813701720	</td> <td>	Tanisha Bhola	</td> <td>	Outlook Group	</td></tr>
                                        <tr><td>	09913701720	</td> <td>	Tanisha Gulati	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                        <tr><td>	10013701720	</td> <td>	Uttkkarsh Chanana	</td> <td>	K.S Business Solutions	</td></tr>
                                        <tr><td>	10113701720	</td> <td>	Vanshika Setia	</td> <td>	Career Pathshala	</td></tr>
                                        <tr><td>	10313701720	</td> <td>	Yash Singh Lingwal	</td> <td>	Unschool	</td></tr>
                                        <tr><td>	10513701720	</td> <td>	Yatin Rajput	</td> <td>	Saphirre Associates	</td></tr>
                                        <tr><td>	35113701720	</td> <td>	Anil Badal	</td> <td>	Advise Bazar Pvt. Ltd.	</td></tr>
                                        <tr><td>	35213701720	</td> <td>	Ankit Badal	</td> <td>	Tech Mahindra	</td></tr>
                                        <tr><td>	35313701720	</td> <td>	Anoushka Jain	</td> <td>	HDFC Bank	</td></tr>
                                        <tr><td>	35413701720	</td> <td>	Ansh Bhardwaj	</td> <td>	Shriram Enterprises 	</td></tr>
                                        <tr><td>	35513701720	</td> <td>	Aryan Khosla	</td> <td>	Grapes Digital Private Limited	</td></tr>
                                        <tr><td>	35613701720	</td> <td>	Himanshu Bhardwaj	</td> <td>	Advise Bazaar Bharat Pvt. Ltd.	</td></tr>
                                        <tr><td>	35713701720	</td> <td>	Jai Solanki	</td> <td>	Rimpac HR Services LLP	</td></tr>
                                        <tr><td>	35813701720	</td> <td>	Kartik Singal	</td> <td>	MyGov	</td></tr>
                                        <tr><td>	35913701720	</td> <td>	Neelansh Satija	</td> <td>	Aeroaids Pvt. Ltd.	</td></tr>
                                        <tr><td>	36013701720	</td> <td>	Sana Monga	</td> <td>	SRF Limited	</td></tr>
                                        <tr><td>	36113701720	</td> <td>	Somik Madaan	</td> <td>	ENN BEE Enterprises	</td></tr>
                                        <tr><td>	36213701720	</td> <td>	Vishesh Garg	</td> <td>	Indian Aerosol Pvt. Ltd.	</td></tr>

                                        

									
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2020-2023-BBA-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
											<tr><td>	00121101720	</td> <td>	Aashrit Malik	</td> <td>	Prabhavati Digital Services Pvt. Ltd.	</td></tr>
                                            <tr><td>	00221101720	</td> <td>	Aastha Kohli	</td> <td>	EduRev Learning Pvt. Ltd.	</td></tr>
                                            <tr><td>	00321101720	</td> <td>	Abhishek Sharma	</td> <td>	Pushkar Auto	</td></tr>
                                            <tr><td>	00521101720	</td> <td>	Aditi Bansal	</td> <td>	Zenith Dental Supplies Pvt Ltd	</td></tr>
                                            <tr><td>	00621101720	</td> <td>	Aditya Gupta	</td> <td>	Rozgarinfo	</td></tr>
                                            <tr><td>	00721101720	</td> <td>	Aditya Gurung	</td> <td>	Outlook Group	</td></tr>
                                            <tr><td>	00821101720	</td> <td>	Ajay Pal	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                            <tr><td>	00921101720	</td> <td>	Akash Srivastava	</td> <td>	Dhirati Education Pvt Ltd	</td></tr>
                                            <tr><td>	01021101720	</td> <td>	Akshita Mathur	</td> <td>	Dynamizer Solutions	</td></tr>
                                            <tr><td>	01121101720	</td> <td>	Amit Aggarwal	</td> <td>	Airwon Aviation Academy	</td></tr>
                                            <tr><td>	01221101720	</td> <td>	Anish Goel	</td> <td>	AIM India 	</td></tr>
                                            <tr><td>	01321101720	</td> <td>	Ankit Gomber	</td> <td>	Agile Capital Services 	</td></tr>
                                            <tr><td>	01421101720	</td> <td>	Ankit Suryan	</td> <td>	MBA Hub	</td></tr>
                                            <tr><td>	01521101720	</td> <td>	Anshika Arora	</td> <td>	xAutocare	</td></tr>
                                            <tr><td>	01621101720	</td> <td>	Aradhana D Charan	</td> <td>	Growthclues	</td></tr>
                                            <tr><td>	01721101720	</td> <td>	Aryan Aggarwal	</td> <td>	AIM India 	</td></tr>
                                            <tr><td>	01821101720	</td> <td>	Aryan Narula	</td> <td>	Growth Clues	</td></tr>
                                            <tr><td>	01921101720	</td> <td>	Aryan Sharma	</td> <td>	Rozgarinfo	</td></tr>
                                            <tr><td>	02021101720	</td> <td>	Atul Kumar	</td> <td>	Outlook	</td></tr>
                                            <tr><td>	02121101720	</td> <td>	Bavneet Singh	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                            <tr><td>	02221101720	</td> <td>	Bhavya Bansal	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                            <tr><td>	02321101720	</td> <td>	Bhavya Kapoor	</td> <td>	Sharekhan	</td></tr>
                                            <tr><td>	02421101720	</td> <td>	Chandranshu Sharma	</td> <td>	Times of India Group	</td></tr>
                                            <tr><td>	02521101720	</td> <td>	Charchit Aggrawal	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                            <tr><td>	02621101720	</td> <td>	Damandeep Singh Chhabra	</td> <td>	Delhivery Pvt Ltd	</td></tr>
                                            <tr><td>	02721101720	</td> <td>	Deepanshu Bhardwaj	</td> <td>	Agile Capital Services 	</td></tr>
                                            <tr><td>	02821101720	</td> <td>	Dev Dawra	</td> <td>	MBA Hub	</td></tr>
                                            <tr><td>	02921101720	</td> <td>	Dhruv Arora	</td> <td>	Growth Clues	</td></tr>
                                            <tr><td>	03021101720	</td> <td>	Divanshi Sharma	</td> <td>	Unison Narula Exports	</td></tr>
                                            <tr><td>	03121101720	</td> <td>	Gaurav Garg	</td> <td>	ORS Trust	</td></tr>
                                            <tr><td>	03221101720	</td> <td>	Gauri Jagga	</td> <td>	Ardom Towergen Pvt Ltd	</td></tr>
                                            <tr><td>	03421101720	</td> <td>	Hardik Trika	</td> <td>	IITM Janakpuri	</td></tr>
                                            <tr><td>	03521101720	</td> <td>	Harsh Vohra	</td> <td>	Decathlon	</td></tr>
                                            <tr><td>	03621101720	</td> <td>	Harshit Guleria	</td> <td>	Allcargo Logistics Limited	</td></tr>
                                            <tr><td>	03721101720	</td> <td>	Himangini Khanna	</td> <td>	Vulcan Art Gallery	</td></tr>
                                            <tr><td>	03821101720	</td> <td>	Ishan Vijay Vatsal	</td> <td>	Vetas 	</td></tr>
                                            <tr><td>	03921101720	</td> <td>	Ishika Bansal	</td> <td>	Ifortis Worldwide	</td></tr>
                                            <tr><td>	04021101720	</td> <td>	Kapis Gaba	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                            <tr><td>	04121101720	</td> <td>	Kartik Sharma	</td> <td>	Parmar Consultancy Services	</td></tr>
                                            <tr><td>	04221101720	</td> <td>	Kartik Sharma	</td> <td>	Homeflic Wegrow Pvt Ltd	</td></tr>
                                            <tr><td>	04321101720	</td> <td>	Kush Jindal	</td> <td>	FreeSkout (Lash technologies pvt. Ltd)	</td></tr>
                                            <tr><td>	04421101720	</td> <td>	Lakshya Kaushik	</td> <td>	Times of India Group	</td></tr>
                                            <tr><td>	04521101720	</td> <td>	Mahak Rajput	</td> <td>	Agile Capital Services 	</td></tr>
                                            <tr><td>	04621101720	</td> <td>	Manav Bhanot	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                            <tr><td>	04721101720	</td> <td>	Manav Gupta	</td> <td>	Padam Enterprises	</td></tr>
                                            <tr><td>	04821101720	</td> <td>	Mandeep Singh	</td> <td>	Rawal Residency	</td></tr>
                                            <tr><td>	04921101720	</td> <td>	Marvin Khera	</td> <td>	Sharekhan	</td></tr>
                                            <tr><td>	05021101720	</td> <td>	Mehak Singal	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                            <tr><td>	05121101720	</td> <td>	Mohd Zaid	</td> <td>	Muthoot Finance	</td></tr>
                                            <tr><td>	05221101720	</td> <td>	Muskan Arora	</td> <td>	Aashman Foundation	</td></tr>
                                            <tr><td>	05321101720	</td> <td>	Nakshatra Sehgal	</td> <td>	Mr And Mrs Home 	</td></tr>
                                            <tr><td>	05421101720	</td> <td>	Nishant Aggarwal	</td> <td>	Bytbots	</td></tr>
                                            <tr><td>	05521101720	</td> <td>	Nitin Kumar	</td> <td>	AIM India Pvt. Ltd.	</td></tr>
                                            <tr><td>	05621101720	</td> <td>	Nivedita Tripathy	</td> <td>	BHEL	</td></tr>
                                            <tr><td>	05721101720	</td> <td>	Palak Lamba	</td> <td>	AIM India 	</td></tr>
                                            <tr><td>	05821101720	</td> <td>	Parag Nimje	</td> <td>	Aashman Foundation	</td></tr>
                                            <tr><td>	05921101720	</td> <td>	Prateek Sharma	</td> <td>	The Indian School of Acting	</td></tr>
                                            <tr><td>	06021101720	</td> <td>	Priyanshu Bhushan Gaur	</td> <td>	Agile Capital Services 	</td></tr>
                                            <tr><td>	06121101720	</td> <td>	Priyanshu Lakra	</td> <td>	Cubastion Consulting Pvt. Ltd.	</td></tr>
                                            <tr><td>	06221101720	</td> <td>	Pujita Bakshi	</td> <td>	Dynamizer Solutions	</td></tr>
                                            <tr><td>	06321101720	</td> <td>	Raj Agarwal	</td> <td>	Appollo Steels Pvt Ltd	</td></tr>
                                            <tr><td>	06421101720	</td> <td>	Rashi sharma 	</td> <td>	Decathlon Sports India Pvt. Ltd.	</td></tr>
                                            <tr><td>	06521101720	</td> <td>	Reet Panjolia	</td> <td>	Anar App Pvt. Ltd.	</td></tr>
                                            <tr><td>	06621101720	</td> <td>	Rhytham Shankh	</td> <td>	Dynamizer Solutions	</td></tr>
                                            <tr><td>	06721101720	</td> <td>	Rhythm Kataria	</td> <td>	Ifortis	</td></tr>
                                            <tr><td>	06821101720	</td> <td>	Sahil Garg	</td> <td>	Career Paathshala	</td></tr>
                                            <tr><td>	06921101720	</td> <td>	Sahil Kumar	</td> <td>	Dhirati Education	</td></tr>
                                            <tr><td>	07021101720	</td> <td>	Saksham Dimri	</td> <td>	Aashman Foundation	</td></tr>
                                            <tr><td>	07121101720	</td> <td>	Sakshi Sinha	</td> <td>	Asiana Times	</td></tr>
                                            <tr><td>	07221101720	</td> <td>	Samridhi Gupta	</td> <td>	Pioneer India	</td></tr>
                                            <tr><td>	07321101720	</td> <td>	Sandip Kumar Bharti	</td> <td>	Decathlon Sports India Pvt. Ltd.	</td></tr>
                                            <tr><td>	07421101720	</td> <td>	Sanyam Bhardwaj	</td> <td>	Galaxy Toyota	</td></tr>
                                            <tr><td>	07621101720	</td> <td>	Sarthak Malik	</td> <td>	Vetas	</td></tr>
                                            <tr><td>	07721101720	</td> <td>	Shailaditya Singh	</td> <td>	Aashman Foundation	</td></tr>
                                            <tr><td>	07921101720	</td> <td>	Shivangi Kumari	</td> <td>	Unschool	</td></tr>
                                            <tr><td>	08021101720	</td> <td>	Shristi Asht	</td> <td>	GoodSpace	</td></tr>
                                            <tr><td>	08121101720	</td> <td>	Shubham Singh Meena	</td> <td>	Metvy Net Pvt. Ltd.	</td></tr>
                                            <tr><td>	08221101720	</td> <td>	Shubham Yadav	</td> <td>	Campus to Corporate	</td></tr>
                                            <tr><td>	08321101720	</td> <td>	Simranjeet Singh	</td> <td>	Times of India	</td></tr>
                                            <tr><td>	08421101720	</td> <td>	Simridhi Kapoor 	</td> <td>	Outlook Group	</td></tr>
                                            <tr><td>	08521101720	</td> <td>	Srishti Harjai	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                            <tr><td>	08621101720	</td> <td>	Tanisha Juyal	</td> <td>	Oriental Colour & Paint Industries Pvt. Ltd.	</td></tr>
                                            <tr><td>	08721101720	</td> <td>	Tanishq Sharma	</td> <td>	Jubilant Consumer Pvt. Ltd.	</td></tr>
                                            <tr><td>	08821101720	</td> <td>	Tushita Sharma	</td> <td>	Metso Outotec	</td></tr>
                                            <tr><td>	09121101720	</td> <td>	Ujjwal Gautam	</td> <td>	Steersman Talent Acquisition Company	</td></tr>
                                            <tr><td>	09221101720	</td> <td>	Umang Saini	</td> <td>	State Bank of India 	</td></tr>
                                            <tr><td>	09321101720	</td> <td>	Utkarsh Magoo	</td> <td>	Satish Malik & Co.	</td></tr>
                                            <tr><td>	09421101720	</td> <td>	Vaibhav Rai	</td> <td>	Foodvez.com	</td></tr>
                                            <tr><td>	09521101720	</td> <td>	Vansh Kapoor	</td> <td>	AIM India	</td></tr>
                                            <tr><td>	09621101720	</td> <td>	Varsha Prasad	</td> <td>	Anar App Private Limited	</td></tr>
                                            <tr><td>	09721101720	</td> <td>	Vatsal Sharma	</td> <td>	Biocube Matrics Pvt. Ltd.	</td></tr>
                                            <tr><td>	09921101720	</td> <td>	Vishesh Verma	</td> <td>	Suntech Overseas Pvt. Ltd.	</td></tr>
                                            <tr><td>	10021101720	</td> <td>	Yash Khurana	</td> <td>	Decathlon Sports India Pvt. Ltd.	</td></tr>
                                            <tr><td>	35121101720	</td> <td>	Ansh Gupta	</td> <td>	Galaxy Toyota	</td></tr>
                                            <tr><td>	35221101720	</td> <td>	Chahna Puri	</td> <td>	M/s Wordloom Creative Ventures	</td></tr>
                                            <tr><td>	35321101720	</td> <td>	Divyansh Tyagi	</td> <td>	Grover Charted Accountants	</td></tr>
                                            <tr><td>	35421101720	</td> <td>	Mayank Jain 	</td> <td>	Sangwan Agencies Unilever International	</td></tr>
                                            <tr><td>	35521101720	</td> <td>	Muskan	</td> <td>	UAS International	</td></tr>
                                            <tr><td>	35621101720	</td> <td>	Muskan Rajpal	</td> <td>	FTC Switchgear Pvt. Ltd.	</td></tr>
                                            <tr><td>	35721101720	</td> <td>	Naman Gupta	</td> <td>	Aashi India Glass Limited	</td></tr>
                                            <tr><td>	35821101720	</td> <td>	Paavan Sharma	</td> <td>	Galaxy Toyota	</td></tr>
                                            <tr><td>	35921101720	</td> <td>	Priyanka Bhalla	</td> <td>	Pacific Sports Complex	</td></tr>
                                            <tr><td>	36021101720	</td> <td>	Sachin Singh Bisht	</td> <td>	Galaxy Toyota	</td></tr>
                                            <tr><td>	36121101720	</td> <td>	Shivam Choudhary	</td> <td>	Galaxy Toyota	</td></tr>
                                            <tr><td>	36221101720	</td> <td>	Staphy Abraham	</td> <td>	Krayonnz	</td></tr>
                                            <tr><td>	50121101720	</td> <td>	Bhavika Chopra	</td> <td>	Decathlon	</td></tr>
                                            <tr><td>	50221101720	</td> <td>	Ayush Agarwal	</td> <td>	Solaris Information System	</td></tr>


											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div role="tabpanel" class="tab-pane" id="bsum1922">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2019 - 22 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2019-2022-BBA-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2019-2022-BBA-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2019-2022-BBA-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
										<tr><td>	00113701719	</td> <td>	Akshat Jain	</td> <td>	ICICI Bank	</td></tr>
                                        <tr><td>	00213701719	</td> <td>	Taksh Vithani	</td> <td>	Cultrd Growers LLP	</td></tr>
                                        <tr><td>	00313701719	</td> <td>	Anshuman	</td> <td>	M/s Water 2 People Teknologies	</td></tr>
                                        <tr><td>	00413701719	</td> <td>	Kritika Chauhan	</td> <td>	Dhirati Education	</td></tr>
                                        <tr><td>	00513701719	</td> <td>	Rohit Gupta	</td> <td>	MeetUniversity.com	</td></tr>
                                        <tr><td>	00613701719	</td> <td>	Lisha Narula	</td> <td>	Dhirati Education	</td></tr>
                                        <tr><td>	00713701719	</td> <td>	Hemant Dhasmana	</td> <td>	Ucliq Pvt. Ltd.	</td></tr>
                                        <tr><td>	00813701719	</td> <td>	Mayank Kathuria	</td> <td>	MeetUniversity.com	</td></tr>
                                        <tr><td>	00913701719	</td> <td>	Bulbul Aggarwal	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                        <tr><td>	01013701719	</td> <td>	Ujjwal Anand	</td> <td>	BasketHuntPvt. Ltd.	</td></tr>
                                        <tr><td>	01213701719	</td> <td>	Anish Mutreja	</td> <td>	Magnik India	</td></tr>
                                        <tr><td>	01313701719	</td> <td>	Pranit Jain	</td> <td>	BuziBrAIns.com	</td></tr>
                                        <tr><td>	01413701719	</td> <td>	Tushar Chhabra	</td> <td>	Pioneer Management Consultant Pvt. Ltd.	</td></tr>
                                        <tr><td>	01513701719	</td> <td>	Nandini Sharma	</td> <td>	Falcon Minds Consulting Pvt. Ltd.	</td></tr>
                                        <tr><td>	01613701719	</td> <td>	Sheshank Gautam	</td> <td>	M/s Bhairava Consturction	</td></tr>
                                        <tr><td>	01713701719	</td> <td>	Rhytham Arora	</td> <td>	Learn Today Pvt. Ltd.	</td></tr>
                                        <tr><td>	01813701719	</td> <td>	Nitika Sawhney	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	02113701719	</td> <td>	Pranav Mago	</td> <td>	Ingluglobal.in	</td></tr>
                                        <tr><td>	02313701719	</td> <td>	Shresth Khanna 	</td> <td>	Vineet Garg & Co.	</td></tr>
                                        <tr><td>	02413701719	</td> <td>	Garv Julka	</td> <td>	Sign Xpress India	</td></tr>
                                        <tr><td>	02513701719	</td> <td>	Sumit Kumar Sharma	</td> <td>	Vineet Garg & Co.	</td></tr>
                                        <tr><td>	02613701719	</td> <td>	Kshitiz Dubey	</td> <td>	Vineet Garg & Co.	</td></tr>
                                        <tr><td>	02713701719	</td> <td>	Anushka Singh	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                        <tr><td>	02813701719	</td> <td>	Saaniya Tanwar	</td> <td>	REC Limited	</td></tr>
                                        <tr><td>	02913701719	</td> <td>	Stuti Rawat	</td> <td>	One.com India Pvt. Ltd.	</td></tr>
                                        <tr><td>	03113701719	</td> <td>	Arjun Singh	</td> <td>	Vairan Media	</td></tr>
                                        <tr><td>	03213701719	</td> <td>	Vaanyaa Oberoi	</td> <td>	Queen Global International School	</td></tr>
                                        <tr><td>	03313701719	</td> <td>	Nushant Sethi	</td> <td>	Soch Rangmanch Pvt. Ltd.	</td></tr>
                                        <tr><td>	03413701719	</td> <td>	Akshat Jaggi	</td> <td>	Autus Consultancy Services	</td></tr>
                                        <tr><td>	03513701719	</td> <td>	Vijay Kumar	</td> <td>	Maharishi Markandeshwar Enterprises	</td></tr>
                                        <tr><td>	03613701719	</td> <td>	Adarsh Vats	</td> <td>	Clamed Healthcare	</td></tr>
                                        <tr><td>	03713701719	</td> <td>	Anjali Mehta	</td> <td>	Dhirati Education	</td></tr>
                                        <tr><td>	03813701719	</td> <td>	Upender Partap Singh Sekhawat	</td> <td>	Paras Properties	</td></tr>
                                        <tr><td>	03913701719	</td> <td>	Anushka Tanwar	</td> <td>	H.K. Dua & Co.	</td></tr>
                                        <tr><td>	04013701719	</td> <td>	Arjun Dobhal	</td> <td>	Blocksocial	</td></tr>
                                        <tr><td>	04113701719	</td> <td>	Muskan Khurana	</td> <td>	Traxive	</td></tr>
                                        <tr><td>	04213701719	</td> <td>	Avishi Gupta	</td> <td>	SMDEVOPS LLP	</td></tr>
                                        <tr><td>	04313701719	</td> <td>	Shhivam Goyal	</td> <td>	Ashok Aggarwal & Co.	</td></tr>
                                        <tr><td>	04613701719	</td> <td>	Yatika Sharma	</td> <td>	Soch Rangmanch Pvt. Ltd.	</td></tr>
                                        <tr><td>	04713701719	</td> <td>	Ayush Gupta	</td> <td>	Akash Ganga Courier Ltd.	</td></tr>
                                        <tr><td>	04813701719	</td> <td>	Aashna Sehgal	</td> <td>	Darshan Foods Pvt. Ltd.	</td></tr>
                                        <tr><td>	04913701719	</td> <td>	Shikhar Malhotra	</td> <td>	Smart Bulls Wealth Advisory Services	</td></tr>
                                        <tr><td>	05013701719	</td> <td>	Vedant Singh	</td> <td>	SKV Mercantile	</td></tr>
                                        <tr><td>	05213701719	</td> <td>	Aryan Tanwar	</td> <td>	Paras Properties	</td></tr>
                                        <tr><td>	05313701719	</td> <td>	Piyush Suneja	</td> <td>	Vishwakarma Impex Pvt. Ltd.	</td></tr>
                                        <tr><td>	05413701719	</td> <td>	Divij Chhabra	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                        <tr><td>	05513701719	</td> <td>	Lakshay Arya	</td> <td>	Assets Care & Reconstruction Enterprise Ltd.	</td></tr>
                                        <tr><td>	05613701719	</td> <td>	Vanshika Arora	</td> <td>	Ingluglobal.in	</td></tr>
                                        <tr><td>	05713701719	</td> <td>	Rohit Khatri	</td> <td>	Adversify Marketing Pvt. Ltd.	</td></tr>
                                        <tr><td>	05813701719	</td> <td>	Gurman Singh Chawla	</td> <td>	AIESEC in India	</td></tr>
                                        <tr><td>	05913701719	</td> <td>	Siddhant Khandelwal	</td> <td>	BLS International Services Limited	</td></tr>
                                        <tr><td>	06013701719	</td> <td>	Veeral Puri 	</td> <td>	Elegant Publishers Pvt. Ltd.	</td></tr>
                                        <tr><td>	06113701719	</td> <td>	Rohan Khurana	</td> <td>	AIM India	</td></tr>
                                        <tr><td>	06213701719	</td> <td>	Satwikk Panigrahy	</td> <td>	Dish TV India Ltd.	</td></tr>
                                        <tr><td>	06313701719	</td> <td>	Malika Arora	</td> <td>	Dynamiser Solutions. Pvt. Ltd.	</td></tr>
                                        <tr><td>	06413701719	</td> <td>	Prakhar Rastogi	</td> <td>	D.G. Paper Products 	</td></tr>
                                        <tr><td>	06513701719	</td> <td>	Samarth Ojha	</td> <td>	ILP Overseas	</td></tr>
                                        <tr><td>	06613701719	</td> <td>	Faguni Trehan	</td> <td>	Elegant Publishers Pvt Ltd	</td></tr>
                                        <tr><td>	06713701719	</td> <td>	Diya Vinaik	</td> <td>	Oddballs Recruitment	</td></tr>
                                        <tr><td>	06813701719	</td> <td>	Nikhil Vig	</td> <td>	Insplore TLS Consultants Pvt Ltd	</td></tr>
                                        <tr><td>	07013701719	</td> <td>	Vanshika	</td> <td>	Insplore Consultants Pvt. Ltd.	</td></tr>
                                        <tr><td>	07113701719	</td> <td>	Yash Roy	</td> <td>	SkillSanta.Com 	</td></tr>
                                        <tr><td>	07213701719	</td> <td>	Prabhjot Singh	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                        <tr><td>	07313701719	</td> <td>	Divyansh Khurana	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	07413701719	</td> <td>	Rahul Tawani	</td> <td>	Vardhan Consulting Engineers	</td></tr>
                                        <tr><td>	07513701719	</td> <td>	Suyash Rao	</td> <td>	J.P. Associates	</td></tr>
                                        <tr><td>	07613701719	</td> <td>	Madhur Choudhary	</td> <td>	Globe Capital Market Limited	</td></tr>
                                        <tr><td>	07713701719	</td> <td>	Aniket Chaurasia	</td> <td>	DIGIPERFORM	</td></tr>
                                        <tr><td>	07813701719	</td> <td>	Archie Gupta 	</td> <td>	Youth India Foundation 	</td></tr>
                                        <tr><td>	07913701719	</td> <td>	Jitesh Kumar	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	08013701719	</td> <td>	Rahul Dhingra	</td> <td>	Pioneer Management Consultant Pvt. Ltd.	</td></tr>
                                        <tr><td>	08113701719	</td> <td>	Mukul Kharb	</td> <td>	Pioneer Management Consultant Pvt. Ltd.	</td></tr>
                                        <tr><td>	08213701719	</td> <td>	Shivam Malhotra 	</td> <td>	Max Bupa Insurance Company Ltd.	</td></tr>
                                        <tr><td>	08313701719	</td> <td>	Harsh Sharma	</td> <td>	Policybazaar.com	</td></tr>
                                        <tr><td>	08413701719	</td> <td>	Tarun Aggarwal	</td> <td>	Paras Properties	</td></tr>
                                        <tr><td>	08613701719	</td> <td>	Akshim Khatri 	</td> <td>	Dynamisers Solutions 	</td></tr>
                                        <tr><td>	08813701719	</td> <td>	Kartik Sharma	</td> <td>	Times Of India	</td></tr>
                                        <tr><td>	08913701719	</td> <td>	Sanchit Makhija	</td> <td>	Asharp Info Tech Pvt. Ltd.	</td></tr>
                                        <tr><td>	09213701719	</td> <td>	Kush Gupta	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	09313701719	</td> <td>	Sakshima Girotra	</td> <td>	NYCO Aircraft Engine Oil	</td></tr>
                                        <tr><td>	09413701719	</td> <td>	Shivansh Sharma	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	09513701719	</td> <td>	Anshula Singh	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                        <tr><td>	09613701719	</td> <td>	Jayant Singh	</td> <td>	Dedicated Freight Corridor Corporation of India Ltd.	</td></tr>
                                        <tr><td>	09713701719	</td> <td>	Shyam Aggarwal	</td> <td>	HPC Limited	</td></tr>
                                        <tr><td>	09813701719	</td> <td>	Rashmi Mishra	</td> <td>	IICSR	</td></tr>
                                        <tr><td>	09913701719	</td> <td>	Ishika Singh	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	10113701719	</td> <td>	Jagriti Marwah	</td> <td>	Pioneer Management Consultant Pvt. Ltd.	</td></tr>
                                        <tr><td>	35213701719	</td> <td>	Shivam Wadhawan	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                        <tr><td>	35313701719	</td> <td>	Viren Pratap Singh	</td> <td>	Times Of India	</td></tr>
                                        <tr><td>	35413701719	</td> <td>	Kartik Arora	</td> <td>	BIZ Staffing Comrade Pvt. Ltd.	</td></tr>
                                        <tr><td>	35513701719	</td> <td>	Akash Tyagi	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	35613701719	</td> <td>	Shubham	</td> <td>	Dhirati Education	</td></tr>
                                        <tr><td>	35713701719	</td> <td>	Kashish Maidh	</td> <td>	Mahila Swarojgar Samiti	</td></tr>
                                        <tr><td>	35813701719	</td> <td>	Deepanshu	</td> <td>	Times Of India	</td></tr>
                                        <tr><td>	35913701719	</td> <td>	Bhuvnesh Bhardwaj	</td> <td>	INGLU Global	</td></tr>
                                        <tr><td>	36013701719	</td> <td>	Kanika Singh	</td> <td>	MRK Marketing Pvt. Ltd.	</td></tr>
                                        <tr><td>	36113701719	</td> <td>	Taranjeet Singh	</td> <td>	Vairan Media	</td></tr>
                                        <tr><td>	36213701719	</td> <td>	Prabhsimranjeet Singh	</td> <td>	Pepper Design	</td></tr>

									
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2019-2022-BBA-E" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
											<tr><td>	00121101719	</td> <td>	Aashish Saluja	</td> <td>	Ampere electric vehicles	</td></tr>
                                            <tr><td>	00221101719	</td> <td>	Kavya Joshi	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                            <tr><td>	00321101719	</td> <td>	Priyanshu Maheshwari	</td> <td>	IITM	</td></tr>
                                            <tr><td>	00421101719	</td> <td>	Yatharth Ratra	</td> <td>	The Times of India	</td></tr>
                                            <tr><td>	00521101719	</td> <td>	Sourav Chamoli	</td> <td>	Chai Sutta Bar Pvt. Ltd.	</td></tr>
                                            <tr><td>	00621101719	</td> <td>	Aditi Singh	</td> <td>	Edustori LLP	</td></tr>
                                            <tr><td>	00721101719	</td> <td>	Arpit Jain	</td> <td>	Time of India	</td></tr>
                                            <tr><td>	00821101719	</td> <td>	Rohan  	</td> <td>	Aashman Foundation	</td></tr>
                                            <tr><td>	00921101719	</td> <td>	Vishal Anand	</td> <td>	Indukrishna Projects Pvt. Ltd.	</td></tr>
                                            <tr><td>	01021101719	</td> <td>	Sanya Chabbra	</td> <td>	IO Digital	</td></tr>
                                            <tr><td>	01121101719	</td> <td>	Chanya Roheda	</td> <td>	Fitdeals.in	</td></tr>
                                            <tr><td>	01321101719	</td> <td>	Dilpreet Singh Sokhi	</td> <td>	New Bharat Music House	</td></tr>
                                            <tr><td>	01421101719	</td> <td>	Sanjana Bhateja	</td> <td>	Soch Rangmanch Pvt. Ltd.	</td></tr>
                                            <tr><td>	01521101719	</td> <td>	Aradhya Maheshwari	</td> <td>	Satrang Pvt. Ltd.	</td></tr>
                                            <tr><td>	01621101719	</td> <td>	Shalini Mishra	</td> <td>	Inception Wave Pvt. Ltd.	</td></tr>
                                            <tr><td>	01721101719	</td> <td>	Ayush Raj	</td> <td>	Teenedge India	</td></tr>
                                            <tr><td>	01821101719	</td> <td>	Harshit Gupta	</td> <td>	Time of India	</td></tr>
                                            <tr><td>	01921101719	</td> <td>	Devansh Bajaj	</td> <td>	Publicis Sapient	</td></tr>
                                            <tr><td>	02021101719	</td> <td>	Manya	</td> <td>	Beyond Meds Foundation	</td></tr>
                                            <tr><td>	02121101719	</td> <td>	Shubh Nagpal	</td> <td>	Milans Sales Corporation	</td></tr>
                                            <tr><td>	02221101719	</td> <td>	Dhruv Singh	</td> <td>	MedicFibers Pvt. Ltd.	</td></tr>
                                            <tr><td>	02321101719	</td> <td>	Naman Singla	</td> <td>	Public Works Deptt., GNCTD	</td></tr>
                                            <tr><td>	02421101719	</td> <td>	Falak Mendiratta	</td> <td>	Public Works Deptt., GNCTD	</td></tr>
                                            <tr><td>	02521101719	</td> <td>	Bhavika R Arora	</td> <td>	MeitY	</td></tr>
                                            <tr><td>	02621101719	</td> <td>	Sejal Dandriyal 	</td> <td>	The Times of India	</td></tr>
                                            <tr><td>	02721101719	</td> <td>	Jaideep Chowdhury	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	02821101719	</td> <td>	Anuj Sharma	</td> <td>	Public Works Deptt., GNCTD	</td></tr>
                                            <tr><td>	03121101719	</td> <td>	Mehak Nayar	</td> <td>	Freeskout (Lash Technologies Pvt. Ltd.)	</td></tr>
                                            <tr><td>	03221101719	</td> <td>	Gautam Sharma	</td> <td>	Mother Dairy	</td></tr>
                                            <tr><td>	03321101719	</td> <td>	Ojas Thukral	</td> <td>	Investorvenue Promoters & Developers	</td></tr>
                                            <tr><td>	03421101719	</td> <td>	Dev Aggarwal	</td> <td>	Mahindra & Mahindra	</td></tr>
                                            <tr><td>	03521101719	</td> <td>	Parth Kochhar	</td> <td>	Gold Plus Glass Industry Limited	</td></tr>
                                            <tr><td>	03621101719	</td> <td>	Nishant Jha	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	03721101719	</td> <td>	Leena Kumari	</td> <td>	Jaina India Pvt. Ltd.	</td></tr>
                                            <tr><td>	03821101719	</td> <td>	Khyati Arora	</td> <td>	Grapevine.co.in	</td></tr>
                                            <tr><td>	03921101719	</td> <td>	Sourav Dua	</td> <td>	Orane International	</td></tr>
                                            <tr><td>	04121101719	</td> <td>	Himansh Arora	</td> <td>	Jindal Steel & Power	</td></tr>
                                            <tr><td>	04221101719	</td> <td>	Naitik Adlakha	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	04321101719	</td> <td>	Tamanna Aggarwal	</td> <td>	Inception Wave	</td></tr>
                                            <tr><td>	04421101719	</td> <td>	Manjot Singh	</td> <td>	TVS Motors	</td></tr>
                                            <tr><td>	04521101719	</td> <td>	Lakshay Poddar	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                            <tr><td>	04621101719	</td> <td>	Mohit Kumar	</td> <td>	Digiyouth Infotech	</td></tr>
                                            <tr><td>	04721101719	</td> <td>	Meenal Bansal	</td> <td>	Freeskout (Lash Technologies Pvt. Ltd.)	</td></tr>
                                            <tr><td>	04821101719	</td> <td>	Laxmi Sharma	</td> <td>	Inception Wave	</td></tr>
                                            <tr><td>	04921101719	</td> <td>	Varsha Goel	</td> <td>	Inception Wave	</td></tr>
                                            <tr><td>	05021101719	</td> <td>	Anjali Poonia	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                            <tr><td>	05121101719	</td> <td>	Tanshi Srivastava	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                            <tr><td>	05321101719	</td> <td>	Vishesh Rustagi	</td> <td>	Finvestments (Financial Investment Consultants)	</td></tr>
                                            <tr><td>	05421101719	</td> <td>	Yash Raj Singh	</td> <td>	Hotel Placid	</td></tr>
                                            <tr><td>	05521101719	</td> <td>	Rahul Gilhotra	</td> <td>	Milans Sales Corporation	</td></tr>
                                            <tr><td>	05621101719	</td> <td>	Lakshay Huria	</td> <td>	Homeflic Wegrow Community Pvt. Ltd.	</td></tr>
                                            <tr><td>	05721101719	</td> <td>	Deepak Nautiyal	</td> <td>	Blue Creative Advertising	</td></tr>
                                            <tr><td>	05921101719	</td> <td>	Viraj Gahlot	</td> <td>	SMDEVOPS LLP	</td></tr>
                                            <tr><td>	06021101719	</td> <td>	Akshat Kapur	</td> <td>	Time of India	</td></tr>
                                            <tr><td>	06221101719	</td> <td>	Mohd Danish Khan	</td> <td>	UAS International	</td></tr>
                                            <tr><td>	06321101719	</td> <td>	Hardik Wadhwa	</td> <td>	Insplore TLS Consultants Pvt. Ltd.	</td></tr>
                                            <tr><td>	06421101719	</td> <td>	Pranjal Mehta 	</td> <td>	Suvidha Foundation	</td></tr>
                                            <tr><td>	06521101719	</td> <td>	Shjeeh Mukhtar	</td> <td>	Countrywide Immigration Pvt. Ltd.	</td></tr>
                                            <tr><td>	06721101719	</td> <td>	Navneeth Sundaresan	</td> <td>	AptiSmart-Start Early	</td></tr>
                                            <tr><td>	06821101719	</td> <td>	Aman Agarwal	</td> <td>	Edu4Sure	</td></tr>
                                            <tr><td>	06921101719	</td> <td>	Ujjwal Kalra	</td> <td>	Ucliq Pvt. Ltd.	</td></tr>
                                            <tr><td>	07021101719	</td> <td>	Devraj Dawar	</td> <td>	Sun Automobiles	</td></tr>
                                            <tr><td>	07121101719	</td> <td>	Anand Vikram Singh	</td> <td>	Shining Tommorow Foundation	</td></tr>
                                            <tr><td>	07221101719	</td> <td>	Disha Ahlawat	</td> <td>	EDU World International 	</td></tr>
                                            <tr><td>	07321101719	</td> <td>	Muskan Sehrawat	</td> <td>	The Times of India	</td></tr>
                                            <tr><td>	07421101719	</td> <td>	Srishti Gupta	</td> <td>	Ucliq Pvt. Ltd.	</td></tr>
                                            <tr><td>	07521101719	</td> <td>	Riya Arora	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	07621101719	</td> <td>	Abha Malhotra 	</td> <td>	Mother Dairy	</td></tr>
                                            <tr><td>	07721101719	</td> <td>	Ritika Thakur	</td> <td>	Soch Rangmanch Pvt. Ltd.	</td></tr>
                                            <tr><td>	07821101719	</td> <td>	Mayank Makkar	</td> <td>	Avalonmeta Ventures Pvt. Ltd.	</td></tr>
                                            <tr><td>	07921101719	</td> <td>	P M Hari Govind	</td> <td>	Acuevers	</td></tr>
                                            <tr><td>	08021101719	</td> <td>	Apoorva Dogra	</td> <td>	Edu4Sure	</td></tr>
                                            <tr><td>	08121101719	</td> <td>	Aryan Dawar	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	08221101719	</td> <td>	Yashika	</td> <td>	Protrainy Skilled Learning Pvt. Ltd.	</td></tr>
                                            <tr><td>	08321101719	</td> <td>	Yasar Hussain	</td> <td>	Universal Glass Export	</td></tr>
                                            <tr><td>	08421101719	</td> <td>	Vaibhav Anand	</td> <td>	IITM	</td></tr>
                                            <tr><td>	08521101719	</td> <td>	Ayush	</td> <td>	Salcomp Pvt. Ltd.	</td></tr>
                                            <tr><td>	08621101719	</td> <td>	Arvind Martin Kerketta	</td> <td>	BasketHuntPvt. Ltd.	</td></tr>
                                            <tr><td>	08721101719	</td> <td>	Garv Sehgal	</td> <td>	Bhandari Hosiery Limited	</td></tr>
                                            <tr><td>	08821101719	</td> <td>	Samaksh Mahajan	</td> <td>	Shri Shiv Shakti Canvas Udyog	</td></tr>
                                            <tr><td>	08921101719	</td> <td>	Sajjan Jhawar	</td> <td>	Shri Laxmi Plywood 	</td></tr>
                                            <tr><td>	09021101719	</td> <td>	Ujjwal Singhal	</td> <td>	Inception Wave Pvt. Ltd.	</td></tr>
                                            <tr><td>	09121101719	</td> <td>	Riya Rajwar	</td> <td>	Ucliq Pvt. Ltd.	</td></tr>
                                            <tr><td>	09221101719	</td> <td>	Shefali Priya 	</td> <td>	Eduvantage Box	</td></tr>
                                            <tr><td>	09421101719	</td> <td>	Ruhani Munjal	</td> <td>	Dewrty Foundation	</td></tr>
                                            <tr><td>	09521101719	</td> <td>	Pranay Jain	</td> <td>	Edu4Sure	</td></tr>
                                            <tr><td>	09721101719	</td> <td>	Karman Singh Arora	</td> <td>	Red Dot Foundation	</td></tr>
                                            <tr><td>	09821101719	</td> <td>	Hitesh Manocha	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	09921101719	</td> <td>	Amandeep Pawar	</td> <td>	Brand Skit	</td></tr>
                                            <tr><td>	10021101719	</td> <td>	Aditya Kukreti	</td> <td>	Ucliq Pvt. Ltd.	</td></tr>
                                            <tr><td>	35121101719	</td> <td>	Bharti Vashisht 	</td> <td>	Homeflic Wegrow Pvt. Ltd.	</td></tr>
                                            <tr><td>	35221101719	</td> <td>	Vipul Sachdeva	</td> <td>	Inception Wave Pvt. Ltd.	</td></tr>
                                            <tr><td>	35421101719	</td> <td>	Aryan Chopra	</td> <td>	Dolphin Print Solutions Pvt. Ltd.	</td></tr>
                                            <tr><td>	35521101719	</td> <td>	Bhavya Malkani	</td> <td>	Cargopeople Logistics & Shipping Pvt. Ltd.	</td></tr>
                                            <tr><td>	35621101719	</td> <td>	Sonika Verma	</td> <td>	Nand Imperial Consulting Pvt. Ltd.	</td></tr>
                                            <tr><td>	35721101719	</td> <td>	Mehak Sharma 	</td> <td>	The Times of India	</td></tr>
                                            <tr><td>	35821101719	</td> <td>	Bhawna Taneja	</td> <td>	Inception Wave Pvt. Ltd.	</td></tr>
                                            <tr><td>	36021101719	</td> <td>	Harshul Arora	</td> <td>	Sai Deep Garments	</td></tr>
                                            <tr><td>	36221101719	</td> <td>	Priyanshi Agarwal 	</td> <td>	Pioneer Management Consultant Pvt. Ltd.	</td></tr>

											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                
                
                
                
                
                
                
				<div role="tabpanel" class="tab-pane" id="bsum1821">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2018 - 21 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="2018-2021-BBA-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="2018-2021-BBA-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
					</ul>
					<div class="tab-content">
						<div id="2018-2021-BBA-M" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : I Shift</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
										<tr><td>	00113701718	</td> <td>	Akanksha Sharma	</td> <td>	Outlook 	</td></tr>
                                        <tr><td>	00213701718	</td> <td>	Adesh Yadav	</td> <td>	Webchat	</td></tr>
                                        <tr><td>	00313701718	</td> <td>	Akshat Singhal	</td> <td>	Halos Creations Pvt. Ltd.	</td></tr>
                                        <tr><td>	00413701718	</td> <td>	Aman Garg	</td> <td>	Nivesh Global	</td></tr>
                                        <tr><td>	00513701718	</td> <td>	Amit Kumar	</td> <td>	Zeetron Networks Pvt. Ltd.	</td></tr>
                                        <tr><td>	00613701718	</td> <td>	Anisha Dargan	</td> <td>	DU Assissans Media	</td></tr>
                                        <tr><td>	00713701718	</td> <td>	Anjali Arora	</td> <td>	Cocoweave Work Café Pvt. Ltd.	</td></tr>
                                        <tr><td>	00813701718	</td> <td>	Anshica Parmar	</td> <td>	Sharekhan Ltd.	</td></tr>
                                        <tr><td>	00913701718	</td> <td>	Anurag Sharma	</td> <td>	Ekeekaran Ventures Pvt. Ltd.	</td></tr>
                                        <tr><td>	01013701718	</td> <td>	Apoorva Sharma	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	01113701718	</td> <td>	Apurv Gupta	</td> <td>	Shri R.P. Mahal Jewellers Pvt. Ltd.	</td></tr>
                                        <tr><td>	01213701718	</td> <td>	Ayush Pathak	</td> <td>	Outlook	</td></tr>
                                        <tr><td>	01313701718	</td> <td>	Ayush Sharma	</td> <td>	Dealgate Enterprises	</td></tr>
                                        <tr><td>	01413701718	</td> <td>	Ayushi Jain	</td> <td>	Sharekhan Ltd.	</td></tr>
                                        <tr><td>	01513701718	</td> <td>	Bhavna Sharma	</td> <td>	Unschool.in	</td></tr>
                                        <tr><td>	01713701718	</td> <td>	Bhoomika Arora	</td> <td>	Brown Bird Enterprises Pvt. Ltd.	</td></tr>
                                        <tr><td>	01913701718	</td> <td>	Christo Joseph	</td> <td>	Nivesh Global	</td></tr>
                                        <tr><td>	02013701718	</td> <td>	Deepali Tandon	</td> <td>	Outlook	</td></tr>
                                        <tr><td>	02113701718	</td> <td>	Diksha Dhawan	</td> <td>	Skillsanta	</td></tr>
                                        <tr><td>	02213701718	</td> <td>	Divya Bhakhri	</td> <td>	Outlook	</td></tr>
                                        <tr><td>	02313701718	</td> <td>	Drishaan Grover	</td> <td>	Banti Farma	</td></tr>
                                        <tr><td>	02413701718	</td> <td>	Elina Singh	</td> <td>	EventBeep Techno Services Pvt. Ltd.	</td></tr>
                                        <tr><td>	02513701718	</td> <td>	Garima Sethi	</td> <td>	Peacock Solar	</td></tr>
                                        <tr><td>	02613701718	</td> <td>	Geetesh Raj Singh	</td> <td>	NGK Spark Plugs (India) Pvt. Ltd.	</td></tr>
                                        <tr><td>	02713701718	</td> <td>	Geetika Amba	</td> <td>	Double Tickmedia Pvt. Ltd	</td></tr>
                                        <tr><td>	02813701718	</td> <td>	Gitansh Kakkar	</td> <td>	Unschool.in	</td></tr>
                                        <tr><td>	03113701718	</td> <td>	Harshit Marwah	</td> <td>	Adity Birla Sun Life AMC Ltd.	</td></tr>
                                        <tr><td>	03213701718	</td> <td>	Hrishabh Louhria	</td> <td>	Nivesh Global	</td></tr>
                                        <tr><td>	03313701718	</td> <td>	Hritik Sondhi	</td> <td>	Unschool.in	</td></tr>
                                        <tr><td>	03413701718	</td> <td>	Ishita Jain	</td> <td>	Sharekhan Ltd.	</td></tr>
                                        <tr><td>	03513701718	</td> <td>	Jaspreet Kaur	</td> <td>	Hareen Team Work	</td></tr>
                                        <tr><td>	03613701718	</td> <td>	Jhanvi Dua	</td> <td>	Top Leaf Services	</td></tr>
                                        <tr><td>	03713701718	</td> <td>	Jigyasa Khurana	</td> <td>	Skillsanta	</td></tr>
                                        <tr><td>	03813701718	</td> <td>	Jyoti Sangwan	</td> <td>	Sankalp NGO	</td></tr>
                                        <tr><td>	03913701718	</td> <td>	Kanak Kathuria	</td> <td>	DTDC Express Ltd.	</td></tr>
                                        <tr><td>	04013701718	</td> <td>	Kashish Gambhir	</td> <td>	Varun Beverages Limited	</td></tr>
                                        <tr><td>	04113701718	</td> <td>	Khushboo Jain	</td> <td>	Unschool.in	</td></tr>
                                        <tr><td>	04313701718	</td> <td>	Krtin Gupta	</td> <td>	Energos Services Pvt. Ltd.	</td></tr>
                                        <tr><td>	04413701718	</td> <td>	Kunal Aggarwal	</td> <td>	Webchat	</td></tr>
                                        <tr><td>	04513701718	</td> <td>	Manan Batra	</td> <td>	Webchat	</td></tr>
                                        <tr><td>	04613701718	</td> <td>	Mansi Aggarwal	</td> <td>	Riderz Planet	</td></tr>
                                        <tr><td>	04713701718	</td> <td>	Mehak Gupta	</td> <td>	Med Tour Easy	</td></tr>
                                        <tr><td>	04813701718	</td> <td>	Neelaksh Mehra	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                        <tr><td>	04913701718	</td> <td>	Nishu Tripathi	</td> <td>	Samrat Investments	</td></tr>
                                        <tr><td>	05013701718	</td> <td>	Palak Rohilla	</td> <td>	Sankalp NGO	</td></tr>
                                        <tr><td>	05113701718	</td> <td>	Paras Arora	</td> <td>	Nivesh Global	</td></tr>
                                        <tr><td>	05213701718	</td> <td>	Payal Gupta	</td> <td>	Nishritha Foundation	</td></tr>
                                        <tr><td>	05313701718	</td> <td>	Piyush Monga	</td> <td>	A&T Services Inc.	</td></tr>
                                        <tr><td>	05413701718	</td> <td>	Prachi Arora	</td> <td>	Energos Services Pvt. Ltd.	</td></tr>
                                        <tr><td>	05513701718	</td> <td>	Prachi Jain	</td> <td>	Hareen Team Work	</td></tr>
                                        <tr><td>	05613701718	</td> <td>	Prachi Sachdeva	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                        <tr><td>	05713701718	</td> <td>	Prerna Kumari	</td> <td>	Webchat	</td></tr>
                                        <tr><td>	05813701718	</td> <td>	Rashi Oberoi	</td> <td>	Jivo Wellness Pvt. Ltd.	</td></tr>
                                        <tr><td>	05913701718	</td> <td>	Rishabh Sekhri	</td> <td>	DTDC Express Ltd.	</td></tr>
                                        <tr><td>	06013701718	</td> <td>	Ritika Sabharwal	</td> <td>	Digimaverick Pvt. Ltd.	</td></tr>
                                        <tr><td>	06113701718	</td> <td>	Sahil Thakur	</td> <td>	Jivo Wellness Pvt. Ltd.	</td></tr>
                                        <tr><td>	06213701718	</td> <td>	Samriddhi Goswami	</td> <td>	Sankalp NGO	</td></tr>
                                        <tr><td>	06313701718	</td> <td>	Shashank Singh	</td> <td>	DCM Shriram Cement Works	</td></tr>
                                        <tr><td>	06513701718	</td> <td>	Shivang Puri	</td> <td>	Hareen Team Work	</td></tr>
                                        <tr><td>	06613701718	</td> <td>	Shobhna Rathore	</td> <td>	Codemire	</td></tr>
                                        <tr><td>	06713701718	</td> <td>	Shruti Gupta	</td> <td>	Step Up Student	</td></tr>
                                        <tr><td>	06813701718	</td> <td>	Shubh Dhir	</td> <td>	Nitya Plastic Udyog	</td></tr>
                                        <tr><td>	06913701718	</td> <td>	Shubh Jain	</td> <td>	LD Enterprise	</td></tr>
                                        <tr><td>	07313701718	</td> <td>	Siddharth Bhardwaj	</td> <td>	S.S. Industries	</td></tr>
                                        <tr><td>	07413701718	</td> <td>	Sourav Sharma	</td> <td>	Kids Chaupal	</td></tr>
                                        <tr><td>	07513701718	</td> <td>	Tanjot Kaur	</td> <td>	Uneako	</td></tr>
                                        <tr><td>	07613701718	</td> <td>	Tripti Mittal	</td> <td>	Hamari Pahchan (NGO)	</td></tr>
                                        <tr><td>	07713701718	</td> <td>	Umangjeet Singh	</td> <td>	Motherson Sumi Systems Limited	</td></tr>
                                        <tr><td>	07913701718	</td> <td>	Vibhati Malik	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                        <tr><td>	08013701718	</td> <td>	Vijay Kumar Passi	</td> <td>	IT Automotives	</td></tr>
                                        <tr><td>	08113701718	</td> <td>	Vipul Naugain	</td> <td>	Doon Wheel Private Limited	</td></tr>
                                        <tr><td>	08213701718	</td> <td>	Yash Verma	</td> <td>	Life Insurance Corporation of India	</td></tr>
                                        <tr><td>	35113701718	</td> <td>	Aditya Sharma	</td> <td>	Soven Developer	</td></tr>
                                        <tr><td>	35213701718	</td> <td>	Aniket Bhatt	</td> <td>	Ank E-Services Pvt. Ltd.	</td></tr>
                                        <tr><td>	35313701718	</td> <td>	Aniket Verma	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                        <tr><td>	35413701718	</td> <td>	Ayan Sikka	</td> <td>	Life Insurance Corporation of India	</td></tr>
                                        <tr><td>	35513701718	</td> <td>	Gulshan Gupta	</td> <td>	Arvind Dairy Pvt. Ltd.	</td></tr>
                                        <tr><td>	35713701718	</td> <td>	Jatin Rai	</td> <td>	Digifuse	</td></tr>
                                        <tr><td>	35813701718	</td> <td>	Jayesh Khandelwal	</td> <td>	Y.K. Associates	</td></tr>
                                        <tr><td>	36013701718	</td> <td>	Mayank Singhal	</td> <td>	State Bank of India	</td></tr>
                                        <tr><td>	36113701718	</td> <td>	Muskan Garg	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                        <tr><td>	36213701718	</td> <td>	Sarthak Bansal	</td> <td>	Silvertoan Papers Limited	</td></tr>
                                        <tr><td>	40113701718	</td> <td>	Nistha Verma	</td> <td>	BP Associates LLP	</td></tr>
                                        <tr><td>	40213701718	</td> <td>	Karan Kumar	</td> <td>	Ashav GV Pvt. Ltd.	</td></tr>
                                        <tr><td>	40313701718	</td> <td>	Vishal Venu	</td> <td>	Step Up Student	</td></tr>
                                        <tr><td>	40413701718	</td> <td>	Gaurav Gulati	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                        <tr><td>	40613701718	</td> <td>	Gazal Dua	</td> <td>	Thoomri.com	</td></tr>
                                        <tr><td>	40813701718	</td> <td>	Prarthana Sharma	</td> <td>	Parivartan Sanstha	</td></tr>
                                        <tr><td>	40913701718	</td> <td>	Muskan Rawat	</td> <td>	Codemire	</td></tr>
                                        <tr><td>	41013701718	</td> <td>	Anam Ahsan	</td> <td>	Manav Ujjawal Samaj Samiti (MUSS)	</td></tr>
                                        <tr><td>	41113701718	</td> <td>	Arpit Kumar	</td> <td>	Y.K. Associates	</td></tr>
                                        <tr><td>	41413701718	</td> <td>	Aayushi	</td> <td>	Nishritha Foundation	</td></tr>
                                        <tr><td>	41513701718	</td> <td>	Bhuvan Jhamb	</td> <td>	The Great Indian Foodie	</td></tr>
                                        <tr><td>	41613701718	</td> <td>	Somya Garg	</td> <td>	Uneako	</td></tr>
                                        <tr><td>	41713701718	</td> <td>	Priyanka Aggarwal	</td> <td>	Sharekhan Ltd.	</td></tr>
                                        <tr><td>	41813701718	</td> <td>	Naman Khosla	</td> <td>	Codemire	</td></tr>
                                        <tr><td>	41913701718	</td> <td>	Nishu Tomar	</td> <td>	Nivesh Global	</td></tr>
                                        <tr><td>	42013701718	</td> <td>	Manjeet Dahiya	</td> <td>	MyCaptain	</td></tr>
                                        <tr><td>	42113701718	</td> <td>	Shivank Tomer	</td> <td>	IT Automotives	</td></tr>
                                        <tr><td>	42213701718	</td> <td>	Barkha Kathpal	</td> <td>	Peacock Solar	</td></tr>
                                        <tr><td>	42513701718	</td> <td>	Jasminder Singh Hanspal	</td> <td>	H&G IT Pvt. Ltd.	</td></tr>
                                        <tr><td>	42613701718	</td> <td>	Deepshikha Gautam	</td> <td>	Sharekhan Ltd.	</td></tr>
                                        <tr><td>	50113701718	</td> <td>	Anirudh Bansal	</td> <td>	Krishnapriya Credit Management Services 	</td></tr>
                                        <tr><td>	50213701718	</td> <td>	Devesh Bagga	</td> <td>	Greendot Health Foods Pvt. Ltd.	</td></tr>

									
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2018-2021-BBA-E" class="tab-pane">
							<div class="container-fluid">
								<div class="row">
									<!--<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : II shift</strong></h2>
									</div>-->
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
											<th>Enrollment No</th>
											<th>Student Name</th>
											<th>Company Name</th>
											</tr>
											<tr><td>	00121101718	</td> <td>	Aakash Singh	</td> <td>	Hareen Team Work	</td></tr>
                                            <tr><td>	00221101718	</td> <td>	Aarti Aggarwal	</td> <td>	Vardhan Consulting Engineers	</td></tr>
                                            <tr><td>	00321101718	</td> <td>	Aashna Chawla	</td> <td>	Inglu	</td></tr>
                                            <tr><td>	00421101718	</td> <td>	Abhinav Bansal	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	00521101718	</td> <td>	Abhishek Kathuria	</td> <td>	Web4Bharat	</td></tr>
                                            <tr><td>	00621101718	</td> <td>	Aditya Sankar	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                            <tr><td>	00721101718	</td> <td>	Aditya Tiwari	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	00821101718	</td> <td>	Ajay Sharma	</td> <td>	Unschool.in	</td></tr>
                                            <tr><td>	01121101718	</td> <td>	Akshay Dhingra	</td> <td>	Unschool.in	</td></tr>
                                            <tr><td>	01221101718	</td> <td>	Amaan Ali	</td> <td>	Eat My News	</td></tr>
                                            <tr><td>	01421101718	</td> <td>	Amandeep Singh	</td> <td>	Intec Infra Project	</td></tr>
                                            <tr><td>	01621101718	</td> <td>	Aniroodh Sarkar	</td> <td>	MAX Acerna Management Systems 	</td></tr>
                                            <tr><td>	01721101718	</td> <td>	Anish Bansal	</td> <td>	Singla Automobiles	</td></tr>
                                            <tr><td>	01821101718	</td> <td>	Arush Kumar	</td> <td>	Edubloc (SaltyART Designs LLP)	</td></tr>
                                            <tr><td>	01921101718	</td> <td>	Ayush Raj	</td> <td>	JSW MI Steel Service Center Pvt. Ltd.	</td></tr>
                                            <tr><td>	02021101718	</td> <td>	Bhavuk Ahuja	</td> <td>	Himalayan Food Park Pvt. Ltd.	</td></tr>
                                            <tr><td>	02121101718	</td> <td>	Bhavya Gupta	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	02221101718	</td> <td>	Cheshta Nagpal	</td> <td>	VeerWal GetWork Services Pvt. Ltd.	</td></tr>
                                            <tr><td>	02321101718	</td> <td>	Chirag Miglani	</td> <td>	Airtel Payments Bank	</td></tr>
                                            <tr><td>	02421101718	</td> <td>	Danish Pal	</td> <td>	Wedstory.in	</td></tr>
                                            <tr><td>	02521101718	</td> <td>	Deepak Kumar	</td> <td>	Youth Empowerment Foundation	</td></tr>
                                            <tr><td>	02621101718	</td> <td>	Devas Babbar	</td> <td>	SDL Foreign Trade Services	</td></tr>
                                            <tr><td>	02721101718	</td> <td>	Devesh Mishra	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	02821101718	</td> <td>	Devvrat Bhaskar	</td> <td>	Compare Infobase Limited	</td></tr>
                                            <tr><td>	02921101718	</td> <td>	Dhriti Mehta	</td> <td>	Internet Marketing School	</td></tr>
                                            <tr><td>	03021101718	</td> <td>	Divya Sharma	</td> <td>	Continental Device India Pvt. Ltd.	</td></tr>
                                            <tr><td>	03121101718	</td> <td>	Divyanshi Monga	</td> <td>	Farms 2 Families	</td></tr>
                                            <tr><td>	03221101718	</td> <td>	Eshant Gera	</td> <td>	M8 Bespoke Luxury	</td></tr>
                                            <tr><td>	03321101718	</td> <td>	Garvit Kapoor	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	03421101718	</td> <td>	Gaurav Sharma	</td> <td>	Bisht Price	</td></tr>
                                            <tr><td>	03521101718	</td> <td>	Gourang Chauhan	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	03621101718	</td> <td>	Harshit Chauhan	</td> <td>	Leo Technova India	</td></tr>
                                            <tr><td>	03721101718	</td> <td>	Ishan Sharma	</td> <td>	Saral Prints (P) Limited	</td></tr>
                                            <tr><td>	03821101718	</td> <td>	Itisha Jain	</td> <td>	Eat My News	</td></tr>
                                            <tr><td>	03921101718	</td> <td>	Janvi Bajaj	</td> <td>	Drishti Global Pvt. Ltd.	</td></tr>
                                            <tr><td>	04021101718	</td> <td>	John Das	</td> <td>	Unschool.in	</td></tr>
                                            <tr><td>	04121101718	</td> <td>	Kanak Pal Singh Dutt 	</td> <td>	Hareen Team Work	</td></tr>
                                            <tr><td>	04321101718	</td> <td>	Khushal Goyal	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	04421101718	</td> <td>	Kritik Malik	</td> <td>	Pal Facility Management Services Pvt. Ltd.	</td></tr>
                                            <tr><td>	04621101718	</td> <td>	Kunj Lamba	</td> <td>	Unschool.in	</td></tr>
                                            <tr><td>	04721101718	</td> <td>	Leena Arora	</td> <td>	Web4Bharat	</td></tr>
                                            <tr><td>	04821101718	</td> <td>	Madhur Agarwal	</td> <td>	Big Bag Deals	</td></tr>
                                            <tr><td>	04921101718	</td> <td>	Manan Oberoi	</td> <td>	Saral Prints (P) Limited	</td></tr>
                                            <tr><td>	05021101718	</td> <td>	Manish Negi	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	05121101718	</td> <td>	Manpreet Kaur	</td> <td>	Web4Bharat	</td></tr>
                                            <tr><td>	05221101718	</td> <td>	Mansi Wadhwa	</td> <td>	Dynamisers Solutions Pvt. Ltd.	</td></tr>
                                            <tr><td>	05321101718	</td> <td>	Meenakshi Talan	</td> <td>	Gawking Geeks	</td></tr>
                                            <tr><td>	05521101718	</td> <td>	Mehak Malhotra	</td> <td>	Eat My News	</td></tr>
                                            <tr><td>	05621101718	</td> <td>	Milind Rawat	</td> <td>	IRCTC Ltd.	</td></tr>
                                            <tr><td>	05721101718	</td> <td>	Mohit Bajaj	</td> <td>	Eat My News	</td></tr>
                                            <tr><td>	05821101718	</td> <td>	Muskan	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	05921101718	</td> <td>	Muskan Gakhar	</td> <td>	Saral Prints (P) Limited	</td></tr>
                                            <tr><td>	06021101718	</td> <td>	Muskan Sharma	</td> <td>	DHL Supply Chain India Pvt. Ltd.	</td></tr>
                                            <tr><td>	06121101718	</td> <td>	Naman Dhingra	</td> <td>	Modern Wire Industries	</td></tr>
                                            <tr><td>	06221101718	</td> <td>	Naman Jain	</td> <td>	India Creatives	</td></tr>
                                            <tr><td>	06321101718	</td> <td>	Namya Malhotra	</td> <td>	Mascot-e-Services	</td></tr>
                                            <tr><td>	06421101718	</td> <td>	Nikita Chawla	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	06521101718	</td> <td>	Omkar Sawant	</td> <td>	Keyfill Light Pvt. Ltd.	</td></tr>
                                            <tr><td>	06621101718	</td> <td>	Pankaj Gusain	</td> <td>	Intellify	</td></tr>
                                            <tr><td>	06721101718	</td> <td>	Prabudh Gogia	</td> <td>	Outlook	</td></tr>
                                            <tr><td>	06821101718	</td> <td>	Pratham Gilhotra	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	06921101718	</td> <td>	Pratyush Angirish	</td> <td>	Water 2 People Teknlogies	</td></tr>
                                            <tr><td>	07021101718	</td> <td>	Pratyush Gulati	</td> <td>	Triveni Memorial Foundation	</td></tr>
                                            <tr><td>	07121101718	</td> <td>	Prithwish Sarkar	</td> <td>	The Rising Youth Newspaper	</td></tr>
                                            <tr><td>	07221101718	</td> <td>	Priyanshi Jhalani	</td> <td>	Hareen Team Work	</td></tr>
                                            <tr><td>	07321101718	</td> <td>	Rabjot Singh	</td> <td>	SK Children Foundation	</td></tr>
                                            <tr><td>	07421101718	</td> <td>	Preetham Rathod	</td> <td>	Pal Facility Management Services Pvt. Ltd.	</td></tr>
                                            <tr><td>	07521101718	</td> <td>	Ritika Kukreti	</td> <td>	LSLSHIP Logistic Pvt. Ltd.	</td></tr>
                                            <tr><td>	07621101718	</td> <td>	Ritika Parashar	</td> <td>	Digifuse	</td></tr>
                                            <tr><td>	07721101718	</td> <td>	Rounak Baid	</td> <td>	Devesh PS Chauhan & Co.	</td></tr>
                                            <tr><td>	07821101718	</td> <td>	Saikat Ghosh	</td> <td>	MyCaptain	</td></tr>
                                            <tr><td>	07921101718	</td> <td>	Saksham	</td> <td>	Serve With Care	</td></tr>
                                            <tr><td>	08021101718	</td> <td>	Saksham Manuja	</td> <td>	Satyam Industries	</td></tr>
                                            <tr><td>	08121101718	</td> <td>	Sanskriti	</td> <td>	Inglu	</td></tr>
                                            <tr><td>	08221101718	</td> <td>	Satvik Dasgupta	</td> <td>	Huminty Welfare Council	</td></tr>
                                            <tr><td>	08321101718	</td> <td>	Saurabh Yadav	</td> <td>	Online Reputation Management Pvt. Ltd.	</td></tr>
                                            <tr><td>	08421101718	</td> <td>	Shiv Rattan Yadav	</td> <td>	Codemire	</td></tr>
                                            <tr><td>	08521101718	</td> <td>	Shivam Pasbola	</td> <td>	Cotech Management and Solutions LLP	</td></tr>
                                            <tr><td>	08621101718	</td> <td>	Shubham Aggarwal	</td> <td>	Laxmi Narayan Jewellers	</td></tr>
                                            <tr><td>	08721101718	</td> <td>	Sneha Kakkar	</td> <td>	Muskurahat Foundation	</td></tr>
                                            <tr><td>	08821101718	</td> <td>	Sonal Kumari	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	08921101718	</td> <td>	Suraj Chhetri	</td> <td>	Manav Ujjawal Samaj Samiti (MUSS)	</td></tr>
                                            <tr><td>	09021101718	</td> <td>	Tanishq Malhotra	</td> <td>	Sury Grand ( Banquets & Party Lawn)	</td></tr>
                                            <tr><td>	09121101718	</td> <td>	Tanmay Gupta	</td> <td>	Galaxy Advertising & Events	</td></tr>
                                            <tr><td>	09221101718	</td> <td>	Tanvi Arora	</td> <td>	UAS International	</td></tr>
                                            <tr><td>	09321101718	</td> <td>	Thakur Singh	</td> <td>	Nivesh Global	</td></tr>
                                            <tr><td>	09521101718	</td> <td>	Vaishnavi Thapliyal	</td> <td>	Dealgate Enterprises	</td></tr>
                                            <tr><td>	09621101718	</td> <td>	Vansh Kumar	</td> <td>	Kagaz Print-N-Pack India Pvt. Ltd.	</td></tr>
                                            <tr><td>	09721101718	</td> <td>	Vasu Gupta	</td> <td>	Motorades	</td></tr>
                                            <tr><td>	09821101718	</td> <td>	Vedant Chugh	</td> <td>	Satyam Industries	</td></tr>
                                            <tr><td>	10021101718	</td> <td>	Yashvi Arora	</td> <td>	Connecting The Dotss	</td></tr>
                                            <tr><td>	35121101718	</td> <td>	Dipanshu Mongia	</td> <td>	Fabrina Furnishings Pvt. Ltd.	</td></tr>
                                            <tr><td>	35221101718	</td> <td>	Nikhil Choudhary	</td> <td>	Sharekhan Ltd.	</td></tr>
                                            <tr><td>	35321101718	</td> <td>	Param Grover	</td> <td>	Aryaveer Motors Pvt. Ltd.	</td></tr>
                                            <tr><td>	35421101718	</td> <td>	Saksham Chaudhary	</td> <td>	HRL Foods Pvt. Ltd.	</td></tr>
                                            <tr><td>	35521101718	</td> <td>	Shivam Singh	</td> <td>	Kagaz Print-N-Pack India Pvt. Ltd.	</td></tr>
                                            <tr><td>	35621101718	</td> <td>	Shivam Taneja	</td> <td>	Satyam Industries	</td></tr>
                                            <tr><td>	35721101718	</td> <td>	Shivam Vishwakarma	</td> <td>	Mechtek Engineering Projects	</td></tr>
                                            <tr><td>	35821101718	</td> <td>	Siddharth Chawla	</td> <td>	Inspirin Minds	</td></tr>
                                            <tr><td>	35921101718	</td> <td>	Tamanna Tyagi	</td> <td>	Dzenno & Décor India Pvt. Ltd.	</td></tr>
                                            <tr><td>	36021101718	</td> <td>	Tejsavi Nagpal	</td> <td>	Inglu	</td></tr>
                                            <tr><td>	36121101718	</td> <td>	Udit Gahlot	</td> <td>	Eurosense Analyticals Pvt. Ltd.	</td></tr>
                                            <tr><td>	36221101718	</td> <td>	Utsav Singh	</td> <td>	Netsquare Automation Pvt. Ltd.	</td></tr>
                                            <tr><td>	40121101718	</td> <td>	Chhavi Soni	</td> <td>	UAS International	</td></tr>
                                            <tr><td>	40221101718	</td> <td>	Aditya Das	</td> <td>	Modern Wire Industries	</td></tr>
                                            <tr><td>	40421101718	</td> <td>	Rachit Gupta	</td> <td>	Wintex Apparel Ltd.	</td></tr>
                                            <tr><td>	40521101718	</td> <td>	Megha Singh	</td> <td>	Rover Adventures Pvt. Ltd.	</td></tr>
                                            <tr><td>	40621101718	</td> <td>	Kartikay Saini	</td> <td>	Pathfinders	</td></tr>
                                            <tr><td>	40721101718	</td> <td>	Shiva Bansiwal	</td> <td>	Aquiza Food and Beverages	</td></tr>
                                            <tr><td>	40821101718	</td> <td>	Gurjyot Singh	</td> <td>	Master Stokes	</td></tr>

											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			
				<!--<div role="tabpanel" class="tab-pane" id="bsum1720">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2017 - 20 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-toggle="tab" href="2017-2020-BBA-M1" aria-expanded="false" style="margin: 10px;"><strong>Morning First Batch</strong></a></li>
						<li class="">
							<a data-toggle="tab" href="2017-2020-BBA-M2" aria-expanded="false" style="margin: 10px;"><strong>Morning Second Batch</strong></a></li>
						<li class="">
							<a data-toggle="tab" href="2017-2020-BBA-E1" aria-expanded="false" style="margin: 10px;"><strong>Evening First Batch</strong></a></li>
						<li class="">
							<a data-toggle="tab" href="2017-2020-BBA-E2" aria-expanded="true" style="margin: 10px;"><strong>Evening Second Batch</strong></a></li>
					</ul>
					<div class="tab-content">
						<div id="2017-2020-BBA-M1" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Student Name</th>
											<th>Company Name</th></tr>
										<tr>
											<td>Aayushi Srivastav</td>
											<td>Livpure Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Abhinav Sikri</td>
											<td>Balraj Infotel</td>
										</tr>
										<tr>
											<td>Abhishek Negi</td>
											<td>Sharp Sight Centre</td>
										</tr>
										<tr>
											<td>Afreen Khan</td>
											<td>Pinkfry</td>
										</tr>
										<tr>
											<td>Ahaan Kumar</td>
											<td>Global Volunteer</td>
										</tr>
										<tr>
											<td>Akanksha Rana</td>
											<td>IITM</td>
										</tr>
										<tr>
											<td>Akash Rana</td>
											<td>Times of India</td>
										</tr>
										<tr>
											<td>Akshay Dhotrekar</td>
											<td>Corporate Impex Consultants (P) Ltd.</td>
										</tr>
										<tr>
											<td>Ankit Sharma</td>
											<td>Corporate Impex Consultants (P) Ltd.</td>
										</tr>
										<tr>
											<td>Beepul Mishra</td>
											<td>Airports Authority of India</td>
										</tr>
										<tr>
											<td>Bharti Datt</td>
											<td>Max Healthcare</td>
										</tr>
										<tr>
											<td>C.S. Gayatri</td>
											<td>Takahata Precision India Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Chirag Sethi</td>
											<td>Ducat</td>
										</tr>
										<tr>
											<td>Deepanshi Anand</td>
											<td>Lanista Educational Services OPC Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Deepika Bhatt</td>
											<td>LT Food Ltd.</td>
										</tr>
										<tr>
											<td>Divnoor Kaur Chadha</td>
											<td>Bharti Axa Life Insurance</td>
										</tr>
										<tr>
											<td>Garvit Singh Shekhawat</td>
											<td>Antigerm Biocare Services</td>
										</tr>
										<tr>
											<td>Gaurva Singh</td>
											<td>Skill Circle</td>
										</tr>
										<tr>
											<td>Hardil Dhillon</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Harshita Kukreja</td>
											<td>travVille</td>
										</tr>
										<tr>
											<td>Harshita</td>
											<td>Religare Broking</td>
										</tr>
										<tr>
											<td>Himanshi Sharma</td>
											<td>Air India</td>
										</tr>
										<tr>
											<td>Hridey Garg</td>
											<td>Travelnet India Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Jigyasa Dhingra</td>
											<td>DutyFreelist.com</td>
										</tr>
										<tr>
											<td>Kumar Vikalp</td>
											<td>Bharti Airtel</td>
										</tr>
										<tr>
											<td>Mahek</td>
											<td>LT Food Ltd.</td>
										</tr>
										<tr>
											<td>Mahima Maurya</td>
											<td>AIM India</td>
										</tr>
										<tr>
											<td>Manav Malhotra</td>
											<td>Tech Power</td>
										</tr>
										<tr>
											<td>Manik Arora</td>
											<td>MD Motors Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Mannat Gulati</td>
											<td>Uneako</td>
										</tr>
										<tr>
											<td>Manu Upadhaya</td>
											<td>I-World Solutions</td>
										</tr>
										<tr>
											<td>Mehak</td>
											<td>Jubilant Life Sciences Ltd.</td>
										</tr>
										<tr>
											<td>Nandita Arora</td>
											<td>T.R. Sawhney Automobiles Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Niket Mudgil</td>
											<td>Outlook Group</td>
										</tr>
										<tr>
											<td>Nikita Kalra</td>
											<td>Falcon Minds Consulting Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Nitin Kumar</td>
											<td>Pinkfry</td>
										</tr>
										<tr>
											<td>Rahul Pandit</td>
											<td>Light Field Multi Service Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Rishabh Pratap Singh</td>
											<td>Asba Products</td>
										</tr>
										<tr>
											<td>Roshni Wilku</td>
											<td>AIM India</td>
										</tr>
										<tr>
											<td>Sachin Chauhan</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Sachin Kukreja</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Saloni Tyagi</td>
											<td>Uneako</td>
										</tr>
										<tr>
											<td>Sandeep Kumar</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Satyam</td>
											<td>Adani Agri Fresh Ltd.</td>
										</tr>
										<tr>
											<td>Sharv Katyal</td>
											<td>Outlook Group</td>
										</tr>
										<tr>
											<td>Shivam Jog</td>
											<td>Maruti Suzuki India Ltd.</td>
										</tr>
										<tr>
											<td>Shreya Malik</td>
											<td>SKG Engineering Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Shruti Bansal</td>
											<td>Dr. B.L. Kapur Memorial Hospital</td>
										</tr>
										<tr>
											<td>Shubham</td>
											<td>ImagiNation Edutainment India Pvt. Ltd.- KidZania</td>
										</tr>
										<tr>
											<td>Shweta</td>
											<td>V3D Gifts India Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Siddhant Aggarwal</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Sudharsan</td>
											<td>Corporate Impex Consultants (P) Ltd.</td>
										</tr>
										<tr>
											<td>Tarun Khatri</td>
											<td>IDBI Federal Life Insurance Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Urvashi</td>
											<td>NIFM</td>
										</tr>
										<tr>
											<td>Vivek Kumar</td>
											<td>Plas-Mech Power Systems (I) Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Satyam Prasad</td>
											<td>Certination Solution and Services</td>
										</tr>
										</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div id="2017-2020-BBA-M2" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
											<tbody><tr>
												<th>Student Name</th>
												<th>Company Name</th>
											</tr>
											<tr>
												<td>Kritika Arora</td>
												<td>Nestle</td>
											</tr>
											<tr>
												<td>Ulka</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Apoorva Singh</td>
												<td>Development & Research Services Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Madhureema Gahlot</td>
												<td>HDFC Bank Ltd.</td>
											</tr>
												<tr>
												<td>Suprotim Das</td>
												<td>Light Field Multi Service Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Harshit Ghai</td>
												<td>iTech Power</td>
											</tr>
												<tr>
												<td>Anshuman Gulia</td>
												<td>Ducat</td>
											</tr>
												<tr>
												<td>Rishabh Sukhija</td>
												<td>M/s Shree Ram Electric.</td>
											</tr>	
											<tr>
												<td>Mankaran Singh Suri</td>
												<td>Ford India Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Mayank</td>
												<td>Future Retail Limited</td>
											</tr>
												<tr>
												<td>Vansh Malhotra</td>
												<td>CR TechMedia Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Raunaq Jain</td>
												<td>Ogilvy & Mather Private Limited</td>
											</tr>
												<tr>
												<td>Ragini Arora</td>
												<td>Arun Kishore & Co.</td>
											</tr>
											<tr>
												<td>Pranay Arora</td>
												<td>Sharekhan</td>
											</tr>
												<tr>
												<td>Harshita Periwal</td>
												<td>Ducat</td>
											</tr>
												<tr>
												<td>Rahul Singh</td>
												<td>Bullhorn Consultants Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Jai Kalra</td>
												<td>Falcon Minds Consulting Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Shobhit</td>
												<td>MEBO Pharmaceutical (India) Pvt. Ltd.</td>
											</tr>	
											<tr>
												<td>Aakash Verma</td>
												<td>Antigerm Biocare Services</td>
											</tr>
												<tr>
												<td>Yash Goel</td>
												<td>AKG Plastics Private Limited</td>
											</tr>
												<tr>
												<td>Gaurav Saluja</td>
												<td>DealGate Enterprises</td>
											</tr>
												<tr>
												<td>Komal Singh</td>
												<td>WSNE Consulting Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Nitika</td>
												<td>R.R. Automobiles</td>
											</tr>
											<tr>
												<td>Mehak Batra</td>
												<td>Tata Power DDL</td>
											</tr>
												<tr>
												<td>Sagar Miglani</td>
												<td>Uneako</td>
											</tr>
												<tr>
												<td>Rupam Raghav</td>
												<td>Tech Ventures Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Chirag Chopra</td>
												<td>Midgulf Services India Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Madalsa Aggarwal</td>
												<td>YDTJ Vidhya Private Limited</td>
											</tr>
											<tr>
												<td>Raghav Kalia</td>
												<td>M/s Shree Ram Electric.</td>
											</tr>
												<tr>
												<td>Sahil Walia</td>
												<td>GTM Builders & Promoters Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Vivek Kumar Singh</td>
												<td>Punjab & Sind Bank</td>
											</tr>
												<tr>
												<td>Yash</td>
												<td>Corpgen</td>
											</tr>
												<tr>
												<td>Taranpreet Kaur</td>
												<td>Wonder Wordrobs Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Aayush Verma</td>
												<td>AIM India</td>
											</tr>
												<tr>
												<td>Mitali Goyal</td>
												<td>Travelnet India Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Aishwarya Malhotra</td>
												<td>Club Taurus Adventure Camp</td>
											</tr>
												<tr>
												<td>Mohak Mathur</td>
												<td>Travelnet India Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Ankit Goyal</td>
												<td>IndusInd Bank</td>
											</tr>
											<tr>
												<td>Vishesh Jindal</td>
												<td>Dream Weavers Infocom (Pvt.) Ltd.</td>
											</tr>
												<tr>
												<td>Yasha Anand</td>
												<td>Le Passage to India Tours & Travels Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Inderpreet Singh</td>
												<td>I-World Solutions</td>
											</tr>
												<tr>
												<td>Anjana Ahluwalia</td>
												<td>Campus Vibes</td>
											</tr>
												<tr>
												<td>Ishant Walia</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Shresth Tyagi</td>
												<td>Sugoi Motors Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Arjun Kapoor</td>
												<td>SMC Global Securities Ltd.</td>
											</tr>
												<tr>
												<td>Naman Girdhar</td>
												<td>The Times Group</td>
											</tr>
												<tr>
												<td>Saanya Dhir</td>
												<td>Lakme</td>
											</tr>
												<tr>
												<td>Minal Verma</td>
												<td>Club Taurus Adventure Camp</td>
											</tr>
											<tr>
												<td>Prateek Arora</td>
												<td>Sharekhan</td>
											</tr>
												<tr>
												<td>Tanya Chhabra</td>
												<td>YOUR HR</td>
											</tr>
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="2017-2020-BBA-E1" class="tab-pane">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
												<th>Student Name</th>
												<th>Company Name</th>
											</tr>
											</tr>
												<tr>
												<td>A. Ajith Kumar</td>
												<td>Libra International</td>
											</tr>
												<tr>
												<td>Akash Maurya</td>
												<td>MedTour Easy</td>
											</tr>
												<tr>
												<td>Aman Mohan</td>
												<td>HenryHarvin Education</td>
											</tr>
											<tr>
												<td>Ambika Gaur</td>
												<td>Max Life Insurance</td>
											</tr>
												<tr>
												<td>Ameesha Khullar</td>
												<td>SMC Global Securities Ltd.</td>
											</tr>
												<tr>
												<td>Angad Kalra</td>
												<td>Thomas Cook (India) Ltd.</td>
											</tr>
												<tr>
												<td>Ankush Abrol</td>
												<td>Study Khazana Edugalaxy Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Anubhav Sharma</td>
												<td>IDBI Federal Life Insurance Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Dhriti Kumar</td>
												<td>Ducat</td>
											</tr>
												<tr>
												<td>Dhruv Arora</td>
												<td>Travelnet India Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Garvit Saraswat</td>
												<td>AIESEC</td>
											</tr>
												<tr>
												<td>Gautam Batra</td>
												<td>Ekal Sansthan</td>
											</tr>
												<tr>
												<td>Harshit Kapoor</td>
												<td>Hyten Industrial Corporation</td>
											</tr>
											
												<tr>
												<td>Ishan Naulakha</td>
												<td>Ducat</td>
											</tr>
												<tr>
												<td>Ishika</td>
												<td>HPCL</td>
											</tr>
												<tr>
												<td>Jitesh Sharma</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Joydeep Banerjee</td>
												<td>Max Life Insurance</td>
											</tr>
												<tr>
												<td>Kinshuk Gupta</td>
												<td>Sharekhan</td>
											</tr>
												<tr>
												<td>Lakshay Tyagi</td>
												<td>Speak Desk Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Magan Choudhary</td>
												<td>Ford India Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Malvika Singh</td>
												<td>NTPC Limited></td>
											</tr>	
											<tr>
												<td>Manvi Malik</td>
												<td>Salesforce.com</td>
											</tr>
												<tr>
												<td>Mayank Arora</td>
												<td>Atulyam Infratech Limited</td>
											</tr>
												<tr>
												<td>Melbin Alex</td>
												<td>S.K. Overseas</td>
											</tr>
												<tr>
												<td>Prateek Batra</td>
												<td>Batra Electrical & Home Appliances</td>
											</tr>
												<tr>
												<td>Rahul Mehta</td>
												<td>Bajaj Allianz Life Insurance Corporation</td>
											</tr>
											</tr>
												<tr>
												<td>Rupal Bhatt</td>
												<td>Sharekhan</td>
											</tr>
												<tr>
												<td>Saakshi Vaid</td>
												<td>Sharekhan></td>
											</tr>
												<tr>
												<td>Samveg Handa</td>
												<td>IITM</td>
											</tr>
											<tr>
												<td>Saumya Tyagi</td>
												<td>Uneako</td>
											</tr>
												<tr>
												<td>Shahneel Danish</td>
												<td>V3Villa Technologies Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Shubham Ahuja</td>
												<td>Max Life Insurance</td>
											</tr>
												<tr>
												<td>Surya Pratap Singh</td>
												<td>Ekal Sansthan</td>
											</tr>
												<tr>
												<td>Vaibhav Dubey</td>
												<td>Insurance Institute of India</td>
											</tr>
											<tr>
												<td>Vaibhav Sabharwal</td>
												<td>Coca Cola</td>
											</tr>
												<tr>
												<td>Archit Shukla</td>
												<td>Siyasat Welfare Foundation</td>
											</tr>
												<tr>
												<td>Bharti Thakral</td>
												<td>HDFC Bank Ltd.</td>
											</tr>
											
										</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div id="2017-2020-BBA-E2" class="tab-pane">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table">
											<tbody>
											<tr>
												<th>Student Name</th>
												<th>Company Name</th>
											</tr>
											</tr>
												<tr>
												<td>Anjana S</td>
												<td>BSNL</td>
											</tr>
												<tr>
												<td>Ansh Dhingra</td>
												<td>Indiabulls</td>
											</tr>
											</tr>
												<tr>
												<td>Mohd. Kazim Khan</td>
												<td>AIM India</td>
											</tr>
												<tr>
												<td>Khushi Gautam</td>
												<td>Transformatie Doorbraak Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Mehak Garg</td>
												<td>Rail Vikas Nigam Limited</td>
											</tr>
											<tr>
												<td>Muskan Grover</td>
												<td>Autoweb Hyundai</td>
											</tr>
												<tr>
												<td>Nishant Kumar </td>
												<td>Speak Desk Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Priya Sharma</td>
												<td>Speak Desk Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Rohit Sikri</td>
												<td>Punjab & Sind Bank</td>
											</tr>
												<tr>
												<td>Ruchir Dhingra</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Shubham Sehrawat</td>
												<td>Techno Automobiles Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Shubham Tyagi</td>
												<td>Nana Motors Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Vanshika Tuli</td>
												<td>Varenia CIMS Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Varun Dhawan</td>
												<td>Imperative Hospitality Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Vipin Singh Rawat</td>
												<td>AR Media Marketing</td>
											</tr>
											</tr>
												<tr>
												<td>Vishal Mehta</td>
												<td>HDFC Bank Ltd.</td>
											</tr>
												<tr>
												<td>Vishant Singh</td>
												<td>Ducat</td>
											</tr>
												<tr>
												<td>Yash Goel</td>
												<td>Stain Lay India Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Yash Sachdev</td>
												<td>Tata Communications Limited</td>
											</tr>
												<tr>
												<td>Yukti Sharma</td>
												<td>Rail Vikas Nigam Limited</td>
											</tr>
												<tr>
												<td>Himani Ahuja</td>
												<td>Trackon Couriers Pvt. Ltd.</td>
											</tr>
												<tr>
												<td>Varun Katoch</td>
												<td>Sharekhan</td>
											</tr>
												<tr>
												<td>Tanya Sachdeva</td>
												<td>Trackon Couriers Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Yogita Aggarwal</td>
												<td>Ashish I.D. Garg & Associates</td>
											</tr>
												<tr>
												<td>Yashika Sharma</td>
												<td>Yes Bank</td>
											</tr>
												<tr>
												<td>Vanik Oberoi</td>
												<td>Sharekhan</td>
											</tr>
												<tr>
												<td>Simran Wadhwa</td>
												<td>Seazul Marme Agency Private Limited</td>
											</tr>
											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			
				 <div role="tabpanel" class="tab-pane" id="bsum1619">
					<p class="h3 text-center mt-30 mb-30"><strong>BBA : 2016 - 19 Summer Training Records</strong></p>
					<ul class="nav nav-tabs nav-justified">
						<li>
							<a data-toggle="tab" href="2016-2019-BBA-M1" aria-expanded="false" style="margin: 10px;"><strong>Morning First Batch</strong></a></li>
						<li class="">
							<a data-toggle="tab" href="2016-2019-BBA-M2" aria-expanded="false" style="margin: 10px;"><strong>Morning Second Batch</strong></a></li>
						<li class="">
							<a data-toggle="tab" href="2016-2019-BBA-E1" aria-expanded="false" style="margin: 10px;"><strong>Evening First Batch</strong></a></li>
						<li class="">
							<a data-toggle="tab" href="2016-2019-BBA-E2" aria-expanded="true" style="margin: 10px;"><strong>Evening Second Batch</strong></a></li>
					</ul>
					<div class="tab-content">
						<div id="2016-2019-BBA-M1" class="tab-pane fade active show in">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody><tr>
											<th>Student Name</th>
											<th>Company Name</th>
										</tr>
										<tr>
											<td>Aakash Takyar</td>
											<td>Nestkeys</td>
										</tr>
										<tr>
											<td>Aditya Goswami</td>
											<td>E- Manage Health</td>
										</tr>
										<tr>
											<td>Amit</td>
											<td>Awign Enterprises Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Anant Jain</td>
											<td>WNS / EY (Ernst &amp; Young)</td>
										</tr>
										<tr>
											<td>Anirudh Khurana</td>
											<td>Solomon Group Asia</td>
										</tr>
										<tr>
											<td>Ankit Anand</td>
											<td>Clean Air Asia India</td>
										</tr>
										<tr>
											<td>Ankit Jain</td>
											<td>Bajaj Finance Ltd.</td>
										</tr>
										<tr>
											<td>Anmol Sharma</td>
											<td>Havells</td>
										</tr>
										<tr>
											<td>Anuradha</td>
											<td>Kajaria Tiles</td>
										</tr>
										<tr>
											<td>Ashish Kumar Jha</td>
											<td>Edumyra Service Pvt Ltd</td>
										</tr>
										<tr>
											<td>Bhanu Pratap Singh Ranawat</td>
											<td>Travville</td>
										</tr>
										<tr>
											<td>Bhavesh Prasad</td>
											<td>Nestkeys / Axeurtax</td>
										</tr>
										<tr>
											<td>Bhavya Prabhakar</td>
											<td>Air India</td>
										</tr>
										<tr>
											<td>Dhruv Sharma</td>
											<td>Cox and Kings</td>
										</tr>
										<tr>
											<td>Drishti Rawat</td>
											<td>Umeed</td>
										</tr>
										<tr>
											<td>Ekjot Kaur Sahmbi</td>
											<td>Pearl Academy</td>
										</tr>
										<tr>
											<td>Himanshu Verma</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Jayata Dureja</td>
											<td>Umeed</td>
										</tr>
										<tr>
											<td>Kanav Chawla</td>
											<td>Cox and Kings</td>
										</tr>
										<tr>
											<td>Kunal</td>
											<td>Lumax</td>
										</tr>
										<tr>
											<td>Mohit Jain</td>
											<td>Sitaram Marketing</td>
										</tr>
										<tr>
											<td>Muskkan V Seth</td>
											<td>Pearl Academy</td>
										</tr>
										<tr>
											<td>Naina Kumari Singh</td>
											<td>Arbunize</td>
										</tr>
										<tr>
											<td>Nakul Kumar</td>
											<td>Sharekhan</td>
										</tr>
										<tr>
											<td>Neha Kumari</td>
											<td>Rite-O Insurance Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Nidhi</td>
											<td>Sapient</td>
										</tr>
										<tr>
											<td>Nikita Arora</td>
											<td>Axis Bank</td>
										</tr>
										<tr>
											<td>Nitish Bhatnagar</td>
											<td>SSG Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Parth Ahuja</td>
											<td>Umeed</td>
										</tr>
										<tr>
											<td>Pradeep Singh Shekhawat</td>
											<td>Axis Bank</td>
										</tr>
										<tr>
											<td>Pragati Sharma</td>
											<td>Omnis</td>
										</tr>
										<tr>
											<td>Prince Dawar</td>
											<td>Signature Enterprise / Gaurav Agency</td>
										</tr>
										<tr>
											<td>Priyanka Shruti</td>
											<td>Awign Enterprises Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Raja Gupta</td>
											<td>Airtel </td>
										</tr>
										<tr>
											<td>Rajat Negi</td>
											<td>Awign Enterprises Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Ram Anuj Singh</td>
											<td>Nestkeys</td>
										</tr>
										<tr>
											<td>Ramit Kumar</td>
											<td>Awign Enterprises Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Raveena Nanda</td>
											<td>Nestle</td>
										</tr>
										<tr>
											<td>Ravi</td>
											<td>E- Manage Health</td>
										</tr>
										<tr>
											<td>Rishabh Bajaj</td>
											<td>NTPC Pvt. Ltd.</td>
										</tr>
										<tr>
											<td>Riya Soni</td>
											<td>Times of India</td>
										</tr>
										<tr>
											<td>Rohit Singh</td>
											<td>Omnis</td>
										</tr>
										<tr>
											<td>Sahil Chaudhary</td>
											<td>Mahindra</td>
										</tr>
										<tr>
											<td>Sahil Husain</td>
											<td>Sharekhan</td>
										</tr>
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						<div id="2016-2019-BBA-M2" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Morning Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
											<tbody><tr>
												<th>Student Name</th>
												<th>Company Name</th>
											</tr>
											<tr>
												<td>Sambhav Mehta</td>
												<td>KRF Limited</td>
											</tr>
											<tr>
												<td>Sarthak Kapoor</td>
												<td>Sourcing Valley</td>
											</tr>
											<tr>
												<td>Sarvagya Sharma</td>
												<td>Bajaj Allianz</td>
											</tr>
											<tr>
												<td>Saurav Dam Kanunjna</td>
												<td>Tech Mahindra / Zara</td>
											</tr>
											<tr>
												<td>Shashank Malhotra</td>
												<td>Firefox</td>
											</tr>
											<tr>
											<td>Shivam Bajaj</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Shreya Kaushika</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Shubham Goyal</td>
											<td>Bajaj Allianz</td>
											</tr>
											<tr>
											<td>Shubham Kaparwan</td>
											<td>AIM India</td>
											</tr>
											<tr>
											<td>Shyenjeet Singh</td>
											<td>Omnis Healthcare / Sourcing Valley</td>
											</tr>
											<tr>
											<td>Siddhantha Ranawat</td>
											<td>Star Vice / Adventure Phunk</td>
											</tr>
											<tr>
											<td>Srishti Gupta</td>
											<td>Axeurtax</td>
											</tr>
											<tr>
											<td>Sukriti Khanna</td>
											<td>Times of India / Outlook</td>
											</tr>
											<tr>
											<td>Urja Vig</td>
											<td>Star Imaging / UCB</td>
											</tr>
											<tr>
											<td>Vishal Chutani</td>
											<td>Omnis Healthcare / Sourcing Valley</td>
											</tr>
											<tr>
											<td>Vivek</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Yojit Bhutani</td>
											<td>Big Bazaar</td>
											</tr>
											<tr>
											<td>Bhawana Rana</td>
											<td>International Placement Consultant</td>
											</tr>
											<tr>
											<td>Chirag Bansal</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Divi Khurana</td>
											<td>Industrial Exim Pvt. Ltd.</td>
											</tr>
											<tr>
											<td>Himanshu</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Kashyap Vaid</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Keshav Maini</td>
											<td>Ford Motors</td>
											</tr>
											<tr>
											<td>Niket Saini</td>
											<td>Outlook / SAIL</td>
											</tr>
											<tr>
											<td>Prerna Ghai</td>
											<td>Ador Ltd. / Honda</td>
											</tr>
											<tr>
											<td>Puneet Kumar</td>
											<td>AIM India</td>
											</tr>
											<tr>
											<td>Suhani Ahuja</td>
											<td>SAIL / OBC</td>
											</tr>
											<tr>
											<td>Tejesh Garg</td>
											<td>AIM India</td>
											</tr>
											<tr>
											<td>Yatish Kataria</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Kanishka Bansal</td>
											<td>AIM India</td>
											</tr>
											<tr>
											<td>Ravi Kumar</td>
											<td>Adidas</td>
											</tr>
											<tr>
											<td>Paras Juneja</td>
											<td>Digital India Securities Pvt. Ltd.</td>
											</tr>
											<tr>
											<td>Simran Chhabra</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Siddharth Mahawar</td>
											<td>My Stair</td>
											</tr>
											<tr>
											<td>Mukta Jain</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Vrinda Mehta</td>
											<td>Punjab &amp; Sind Bank / PNB</td>
											</tr>
											<tr>
											<td>Nishtha Chugh</td>
											<td>Gail (India) Ltd.</td>
											</tr>
											<tr>
											<td>Ashfaque Waris</td>
											<td>School For Sure / Zara</td>
											</tr>
											<tr>
											<td>Moksha Kandpal</td>
											<td>Ureka Forbes / Outlook</td>
											</tr>
											<tr>
											<td>Rishabh Aggarwal</td>
											<td>My Stair</td>
											</tr>
											<tr>
											<td>Gurjeet Singh</td>
											<td>My Stair</td>
											</tr>
											<tr>
											<td>Nitin Nair</td>
											<td>My Stair</td>
											</tr>
											<tr>
											<td>Srishti Khatri</td>
											<td>Outlook</td>
											</tr>
											<tr>
											<td>Pratishtha</td>
											<td>AIM India</td>
											</tr>
											<tr>
											<td>Tanya Kohli</td>
											<td>Anita Dogre / House of Design / Nestle</td>
											</tr>
											<tr>
											<td>Luv Bagga</td>
											<td>Samsung / Hindustan Times</td>
											</tr>
											<tr>
											<td>Mehak Jaggi</td>
											<td>Sourcing Valley</td>
											</tr>
											<tr>
											<td>Aman Malik</td>
											<td>Amrit Corporation</td>
											</tr>
											<tr>
											<td>Harmeet Kaur Sachdeva</td>
											<td>Times of India</td>
											</tr>
											<tr>
											<td>Tanya Jain</td>
											<td>FMS Group India</td>
											</tr>
										</tbody></table>
									</div>
								</div>
							</div>
						</div>
						<div id="2016-2019-BBA-E1" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-responsive">
										<tbody>
											<tr>
												<th>Student Name</th>
												<th>Company Name</th>
											</tr>
											<tr>
												<td>Abood Hasan</td>
												<td>HDFC Bank</td>
											</tr>
											<tr>
												<td>Aditya Sharma</td>
												<td>SERB- Science &amp; Engineering Research Board</td>
											</tr>
											<tr>
												<td>Akansh Luthra</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Amitesh Bhardwaj</td>
												<td>Umeed</td>
											</tr>
											<tr>
												<td>Anand Kumar Rana</td>
												<td>Sourcing Valley</td>
											</tr>
											<tr>
												<td>Anjali Kumari</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Anubhav Roy</td>
												<td>Eureka Forbes</td>
											</tr>
											<tr>
												<td>Aparna Tanwar</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Arushi Sharma</td>
												<td>Global MG Harrton Motors LLP</td>
											</tr>
											<tr>
												<td>Cheluvi</td>
												<td>JW Marriot</td>
											</tr>
											<tr>
												<td>Chirag Sehgal</td>
												<td>HDFC Bank</td>
											</tr>
											<tr>
												<td>Chittavasu Prakash</td>
												<td>Times of India</td>
											</tr>
											<tr>
												<td>Damanpreet Singh Kharbanda</td>
												<td>Axis Bank</td>
											</tr>
											<tr>
												<td>Deepak Dhar Dwivedi</td>
												<td>Eureka Forbes</td>
											</tr>
											<tr>
												<td>Deepanshu Bhatia</td>
												<td>India Pring Pack</td>
											</tr>

											<tr>
												<td>Deepika</td>
												<td>Sharekhan</td>
											</tr>

											<tr>
												<td>Divanshu Maini</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Garima Bhatt</td>
												<td>AIM India</td>
											</tr>
											<tr>
												<td>Garvit Bareja</td>
												<td>Outlook</td>
											</tr>

											<tr>
												<td>Harshit Kapoor</td>
												<td>Travellee</td>
											</tr>

											<tr>
												<td>Hemlata</td>
												<td>India Bulls</td>
											</tr>
											<tr>
												<td>Hitesh Jashnani</td>
												<td>Axis Bank</td>
											</tr>
											<tr>
												<td>Jai Chauhan</td>
												<td>Digital Marketing</td>
											</tr>

											<tr>
												<td>Jaspreet Singh</td>
												<td>AIM India</td>
											</tr>

											<tr>
												<td>Jaspreet Singh Dhillon</td>
												<td>Bakshi Forex and Air Services</td>
											</tr>
											<tr>
												<td>Jayati Gulati</td>
												<td>Eureka Forbes</td>
											</tr>
											<tr>
												<td>Jitender Kumar Tanwar</td>
												<td>Fujifilm India</td>
											</tr>

											<tr>
												<td>Jyotsna Solanki</td>
												<td>Outlook</td>
											</tr>

											<tr>
												<td>Kartik K Ram</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Kartikey Watts</td>
												<td>Clensta</td>
											</tr>
											<tr>
												<td>Komal Solanki</td>
												<td>Outlook</td>
											</tr>

											<tr>
												<td>Kshitij Arora</td>
												<td>AIM India</td>
											</tr>

											<tr>
												<td>Lav Kumar Pundhir</td>
												<td>AIM India</td>
											</tr>
											<tr>
												<td>Manav Kapoor</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Manisha Talwar</td>
												<td>AIM India</td>
											</tr>

											<tr>
												<td>Mayank Vij</td>
												<td>AIM India</td>
											</tr>

											<tr>
												<td>Mohit Kalra</td>
												<td>Cox and Kings</td>
											</tr>
											<tr>
												<td>Mohmmad Zohab</td>
												<td>The Metal Arts</td>
											</tr>
											<tr>
												<td>Mudit Chhabra</td>
												<td>Times of India</td>
											</tr>

											<tr>
												<td>Naman Jain</td>
												<td>Sharekhan</td>
											</tr>

											<tr>
												<td>Niharika Verma</td>
												<td>IndiaBulls</td>
											</tr>
											<tr>
												<td>Nishant Saini</td>
												<td>Times of India</td>
											</tr>
											<tr>
												<td>Pooja</td>
												<td>IDBI Federal Life Insurance</td>
											</tr>
											<tr>
												<td>Prachi Chawla</td>
												<td>Eureka Forbes</td>
											</tr>
											<tr>
												<td>Pranav Vaid</td>
												<td>Air India</td>
											</tr>
											<tr>
												<td>Prateek Nag</td>
												<td>Fujifilm India</td>
											</tr>
											<tr>
												<td>Priya Chilwal</td>
												<td>Nestkeys</td>
											</tr>
											<tr>
												<td>Rahish Kumar</td>
												<td>Stalion Cap / Reniso/ Acute Vision</td>
											</tr>
											<tr>
												<td>Rajat Harjai</td>
												<td>Addicshop</td>
											</tr>
											<tr>
												<td>Rajat Jangir</td>
												<td>Addicshop</td>
											</tr>
											<tr>
												<td>Rani Gupta</td>
												<td>IndiaBulls</td>
											</tr>
											<tr>
												<td>Rashika Negi</td>
												<td>Outlook</td>
											</tr>
										</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div id="2016-2019-BBA-E2" class="tab-pane fade">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 text-center">
									<h2 style="margin:40px auto;"><strong>Section : Evening Batch</strong></h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<table class="table">
											<tbody>
											<tr>
												<th>Student Name</th>
												<th>Company Name</th>
											</tr>
											<tr>
												<td>Raunak Agrawal</td>
												<td>Times of India / Outlook</td>
											</tr>
											<tr>
												<td>Reema Sharma</td>
												<td>Omnis Healthcare</td>
											</tr>
											<tr>
												<td>Rishabh Kukreja</td>
												<td>Team Core</td>
											</tr>
											<tr>
												<td>Ritesh Kukreja</td>
												<td>Team Core</td>
											</tr>
											<tr>
												<td>Ritu Bisht</td>
												<td>Omnis Healthcare</td>
											</tr>
											<tr>
												<td>Sachin Garg</td>
												<td>Arhan Alloy &amp; Steel Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Sakshi Sethi</td>
												<td>Omnis Healthcare</td>
											</tr>
											<tr>
												<td>Sakshi Tanwar</td>
												<td>Omnis Healthcare</td>
											</tr>
											<tr>
												<td>Sarthak Verma</td>
												<td>Affluent Business Solutions</td>
											</tr>
											<tr>
												<td>Saurav Yadav</td>
												<td>Nexa</td>
											</tr>
											<tr>
												<td>Shivam Bakshi</td>
												<td>Central Cottage Emporium</td>
											</tr>
											<tr>
												<td>Shivam Negi</td>
												<td>Central Cottage Emporium</td>
											</tr>
											<tr>
												<td>Shivani Das</td>
												<td>Times of India</td>
											</tr>
											<tr>
												<td>Shubhankar Sen Gupta</td>
												<td>Sharekhan</td>
											</tr>
											<tr>
												<td>Srishti Pathak</td>
												<td>People Matrix</td>
											</tr>
											<tr>
												<td>Sukhmani Sahaji</td>
												<td>Pepsico</td>
											</tr>
											<tr>
												<td>Tamanpreet Singh Arneja</td>
												<td>Zomato</td>
											</tr>
											<tr>
												<td>Tanishka Gupta</td>
												<td>Johnson &amp; Johnson</td>
											</tr>
											<tr>
												<td>Tanya Sharma</td>
												<td>Liveiton</td>
											</tr>
											<tr>
												<td>Tushar Bareja</td>
												<td>Thirtysix Labs Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Vaibhav Sati</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Vinay Sharma</td>
												<td>Hyundai</td>
											</tr>
											<tr>
												<td>Vishal Lakra</td>
												<td>Blossom Kochhar</td>
											</tr>
											<tr>
												<td>Vivek Kumar</td>
												<td>Central Cottage Emporium</td>
											</tr>
											<tr>
												<td>Yash Gautam</td>
												<td>Johnson &amp; Johnson</td>
											</tr>
											<tr>
												<td>Yashita Gupta</td>
												<td>Liveiton</td>
											</tr>
											<tr>
												<td>Abhijeet Singh Uppal</td>
												<td>Omnis Healthcare</td>
											</tr>
											<tr>
												<td>Akshita Sharma</td>
												<td>VQMS</td>
											</tr>
											<tr>
												<td>Dhruv Tanwar</td>
												<td>Arbunize</td>
											</tr>
											<tr>
												<td>Gehna Talwar</td>
												<td>VQMS</td>
											</tr>
											<tr>
												<td>Gururaj Kapoor</td>
												<td>Arbunize / GP Global</td>
											</tr>
											<tr>
												<td>Neeraj Wadhwani</td>
												<td>Force Motors</td>
											</tr>
											<tr>
												<td>Nipun Kumar Upadhyay</td>
												<td>AIM India Pvt. Ltd.</td>
											</tr>
											<tr>
												<td>Pulkit Chopra</td>
												<td>Arbunize</td>
											</tr>
											<tr>
												<td>Rishabh Mehra</td>
												<td>Pearl Academy</td>
											</tr>
											<tr>
												<td>Rohit Gupta</td>
												<td>VQMS</td>
											</tr>
											<tr>
												<td>Sagar Thakur</td>
												<td>S.T. Trading Co.</td>
											</tr>
											<tr>
												<td>Taruna Jindal</td>
												<td>Total Solutions</td>
											</tr>
											<tr>
												<td>Ashwani Bhat</td>
												<td>Zurie Design Studios (DM)</td>
											</tr>
											<tr>
												<td>Vidit Agarwal</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Adeetya Madan</td>
												<td>GP Global</td>
											</tr>
											<tr>
												<td>Harsh Dhingra</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Ritika Goel</td>
												<td>Sourcing Valley</td>
											</tr>
											<tr>
												<td>Harshita Sethi</td>
												<td>Pepsico</td>
											</tr>
											<tr>
												<td>Jigyasa Garg</td>
												<td>Johnson &amp; Johnson</td>
											</tr>
											<tr>
												<td>Karan Kumar</td>
												<td>Arbunize</td>
											</tr>
											<tr>
												<td>Sahil Arora</td>
												<td>Outlook</td>
											</tr>
											<tr>
												<td>Ashita Garg</td>
												<td>Bank of India</td>
											</tr>
											<tr>
												<td>Harshit Ahuja</td>
												<td>Luminous Company</td>
											</tr>
											<tr>
												<td>Sumit Thukral</td>
												<td>Johnson &amp; Johnson</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div></h2>-->
              <div style="height: 10vh;"></div>
          </div>
          </div>
        </div>
   
      </section>
      
      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading" id="mbasum">BA(JMC) Summer Training Records</h1>
          <div class="underline"></div>
          <div class="container">
              <p class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  show active" href="#bjm2428" role="tab" data-bs-toggle="tab">2024-28</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bjm2326" role="tab" data-bs-toggle="tab">2023-26</a>
                </li>
               
                <!--<li class="nav-item">
                    <a class="nav-link" href="msm1820" role="tab" data-toggle="tab">2018-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#msm1719" role="tab" data-toggle="tab">2017-19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#msm1618" role="tab" data-toggle="tab">2016-18</a>
                </li>-->
             </ul>
             </p>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade show active" id="bjm2428">
                  <center>BA(JMC) : 2024 - 28 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
                        <tr><td>	113702424	</td> <td>	Pranjal Bhatia	</td> <td>	Manobal Foundation	</td></tr>
                        <tr><td>	213702424	</td> <td>	Bhanu Bedi	</td> <td>	True Value Talks	</td></tr>
                        <tr><td>	413702424	</td> <td>	Ananya Puri	</td> <td>	My Story	</td></tr>
                        <tr><td>	613702424	</td> <td>	Sidak Sachdeva	</td> <td>	Panacea Infosec	</td></tr>
                        <tr><td>	713702424	</td> <td>	Ritika	</td> <td>	Servotech Renewable Power System Ltd.	</td></tr>
                        <tr><td>	1113702424	</td> <td>	Ishmehar Singh Makkar	</td> <td>	Reach Veda	</td></tr>
                        <tr><td>	1413702424	</td> <td>	Manya Popli	</td> <td>	Panacea Infosec	</td></tr>
                        <tr><td>	1713702424	</td> <td>	Mansi Kaushik	</td> <td>	6W RESEARCH	</td></tr>
                        <tr><td>	1813702424	</td> <td>	Kartik Chandel	</td> <td>	GREY BOX ELEPHANT LEARNING	</td></tr>
                        <tr><td>	1913702424	</td> <td>	Krishna Jha	</td> <td>	HINDUSTAN NOW	</td></tr>
                        <tr><td>	2413702424	</td> <td>	Tisha Taneja	</td> <td>	Bharat Express	</td></tr>
                        <tr><td>	2513702424	</td> <td>	Neha Pathak	</td> <td>	Bharat Express	</td></tr>
                        <tr><td>	3413702424	</td> <td>	Shreya Saloni Pandey	</td> <td>	Prabhat khabar - Ranchi	</td></tr>
                        <tr><td>	3513702424	</td> <td>	Sahil	</td> <td>	Quirky Folks Entertainment	</td></tr>
                        <tr><td>	3613702424	</td> <td>	Navya Jain	</td> <td>	Bright Rays	</td></tr>
                        <tr><td>	3713702424	</td> <td>	Bhoomi	</td> <td>	Visas Abroad Services LLP	</td></tr>
                        <tr><td>	4113702424	</td> <td>	Nakul Solanki	</td> <td>	Dream Hunt	</td></tr>
                        <tr><td>	35113702424	</td> <td>	Yashika	</td> <td>	Punjab Kesari	</td></tr>
                        <tr><td>	35313702424	</td> <td>	Hitesh Dhawan	</td> <td>	6W RESEARCH	</td></tr>
                        <tr><td>	35413702424	</td> <td>	Tanya Shukla	</td> <td>	The Unfiltered Manch	</td></tr>
                        <tr><td>	35513702424	</td> <td>	Diya Seth	</td> <td>	Cosmopolitan India	</td></tr>
                        <tr><td>	35713702424	</td> <td>	Joy Chakrabarty	</td> <td>	Grey Elephant Learning	</td></tr>
                        <tr><td>	35813702424	</td> <td>	Nandini Puri	</td> <td>	Cover Up	</td></tr>
                        <tr><td>	35913702424	</td> <td>	Akansha Rani	</td> <td>	Grey Elephant Learning	</td></tr>
                        <tr><td>	50313702424	</td> <td>	Somya Mehndiratta	</td> <td>	Outlook	</td></tr>
                        <tr><td>	50613702424	</td> <td>	Sannidhi	</td> <td>	6W RESEARCH	</td></tr>
                        <tr><td>	50813702424	</td> <td>	Ananya Manchanda	</td> <td>	Panjab Kesari	</td></tr>
                        <tr><td>	50913702424	</td> <td>	Gazal Verma	</td> <td>	Pehchaan NGO	</td></tr>
                        <tr><td>	51013702424	</td> <td>	Chahat	</td> <td>	Visas Abroad Services LLP	</td></tr>
                        <tr><td>	51213702424	</td> <td>	Simran Kaur	</td> <td>	Quirky Fox	</td></tr>
                        <tr><td>	51313702424	</td> <td>	Anushka Manchanda	</td> <td>	My Story Trust	</td></tr>
                        <tr><td>	51513702424	</td> <td>	Samridhi	</td> <td>	Hindustan	</td></tr>
                        <tr><td>	51613702424	</td> <td>	Heena Khatun	</td> <td>	Visas Abroad Services LLP	</td></tr>
                        <tr><td>	51813702424	</td> <td>	Osheen Bhat	</td> <td>	WayOne InfraBuild Pvt. Ltd.	</td></tr>
                        <tr><td>	51913702424	</td> <td>	Lata Sah	</td> <td>	My Story Trust	</td></tr>
                        <tr><td>	52013702424	</td> <td>	Danish Goyal	</td> <td>	Metrictrix Marketing	</td></tr>
                        <tr><td>	52113702424	</td> <td>	Adammya	</td> <td>	6W Research	</td></tr>
                        <tr><td>	52213702424	</td> <td>	Aanjali Yadav	</td> <td>	Bharat Express	</td></tr>
                        <tr><td>	313702424	</td> <td>	Komal	</td> <td>	INNO TECH	</td></tr>

						</tbody>
					</table>
              </div>                
              <div role="tabpanel" class="tab-pane" id="bjm2326">
                  <center>BA(JMC) : 2023 - 26 Summer Training Records</center>
					<table class="table">
						<tbody>
						<tr>
						    <th>Enrollment No</th>
							<th>Student Name</th>
							<th>Company Name</th>
						</tr>
	                        <tr><td>	113702423	</td> <td>	Sachi	</td> <td>	Dainik Jagran 	</td></tr>
                            <tr><td>	213702423	</td> <td>	Krish Mehta	</td> <td>	Decode Design Studio Pvt Ltd.	</td></tr>
                            <tr><td>	313702423	</td> <td>	Drishti Ahuja	</td> <td>	Pehchaan The Street School	</td></tr>
                            <tr><td>	413702423	</td> <td>	Prisha Srivastava	</td> <td>	Dainik Jagran 	</td></tr>
                            <tr><td>	513702423	</td> <td>	Khushi Radda	</td> <td>	Dainik Jagran 	</td></tr>
                            <tr><td>	613702423	</td> <td>	Jhanvi Vats	</td> <td>	Pehchaan The Street School 	</td></tr>
                            <tr><td>	713702423	</td> <td>	Dhriti Gulati	</td> <td>	Youngun	</td></tr>
                            <tr><td>	813702423	</td> <td>	Preksha Sethi	</td> <td>	Look Who's Talking	</td></tr>
                            <tr><td>	913702423	</td> <td>	Simran	</td> <td>	Dhirati Education	</td></tr>
                            <tr><td>	1013702423	</td> <td>	Ananya Das	</td> <td>	Edukida	</td></tr>
                            <tr><td>	1113702423	</td> <td>	Smriti Sharma	</td> <td>	Voi Digital Network Pvt Ltd.	</td></tr>
                            <tr><td>	1213702423	</td> <td>	Shreya	</td> <td>	Pehchaan The Street School	</td></tr>
                            <tr><td>	1313702423	</td> <td>	Arhaan	</td> <td>	ResponsibleUs	</td></tr>
                            <tr><td>	1513702423	</td> <td>	Jashan Kohli	</td> <td>	Kshitiksha Foundation	</td></tr>
                            <tr><td>	1613702423	</td> <td>	Praganya Kaushik	</td> <td>	Digipanda	</td></tr>
                            <tr><td>	1713702423	</td> <td>	Dhruv Mehtani	</td> <td>	Dream Treaders Films 	</td></tr>
                            <tr><td>	1813702423	</td> <td>	Anurag Ghai	</td> <td>	MP Printers 	</td></tr>
                            <tr><td>	1913702423	</td> <td>	Vishvesh Jain	</td> <td>	Mansneh's Creation 	</td></tr>
                            <tr><td>	2013702423	</td> <td>	Gargi	</td> <td>	Collegedekho 	</td></tr>
                            <tr><td>	2113702423	</td> <td>	Divyaj Chhabra	</td> <td>	Pehchaan The Street School	</td></tr>
                            <tr><td>	2213702423	</td> <td>	Sania	</td> <td>	Pehchaan The Street School	</td></tr>
                            <tr><td>	2313702423	</td> <td>	Sanyam Pahuja	</td> <td>	Siddh Bhoomi 	</td></tr>
                            <tr><td>	2413702423	</td> <td>	Prachi Singhal	</td> <td>	Khatte Meethe Desires	</td></tr>
                            <tr><td>	2513702423	</td> <td>	Aditya Kumar	</td> <td>	Dainik Jagran	</td></tr>
                            <tr><td>	2613702423	</td> <td>	Chiraag Gambhir	</td> <td>	Voi Digital Network Pvt Ltd	</td></tr>
                            <tr><td>	2713702423	</td> <td>	Harnoor Kaur	</td> <td>	Sports Studio Media Solutions	</td></tr>
                            <tr><td>	2813702423	</td> <td>	Vansh Kukkar	</td> <td>	Mansneh's Creation 	</td></tr>
                            <tr><td>	2913702423	</td> <td>	Ayush Kumar Anku	</td> <td>	Earth5R	</td></tr>
                            <tr><td>	3013702423	</td> <td>	Aryan Bharija	</td> <td>	Siddh Bhoomi 	</td></tr>
                            <tr><td>	3113702423	</td> <td>	Aman Gulati	</td> <td>	Mansneh's Creation 	</td></tr>
                            <tr><td>	3213702423	</td> <td>	Khayati Chawla	</td> <td>	Kohli Productions	</td></tr>
                            <tr><td>	3313702423	</td> <td>	Siddharth Luthra	</td> <td>	EkPrint 	</td></tr>
                            <tr><td>	3413702423	</td> <td>	Siddhant Moitra	</td> <td>	The Pehechan Street School 	</td></tr>
                            <tr><td>	3513702423	</td> <td>	Gunjan Sharma	</td> <td>	Responsibleus	</td></tr>
                            <tr><td>	3613702423	</td> <td>	Darpit Malhotra	</td> <td>	Khatte Meetha Desires 	</td></tr>
                            <tr><td>	3713702423	</td> <td>	Tushar Sethi	</td> <td>	Pehchaan The Street School	</td></tr>
                            <tr><td>	3813702423	</td> <td>	Nandani	</td> <td>	Dainik Jagran	</td></tr>
                            <tr><td>	3913702423	</td> <td>	Harshita Gahlot	</td> <td>	Edukida 	</td></tr>
                            <tr><td>	70213702423	</td> <td>	Lashit Chugh	</td> <td>	Ekprint 	</td></tr>
                            <tr><td>	70313702423	</td> <td>	Rishita Saxena	</td> <td>	ResponsibleUs	</td></tr>
                            <tr><td>	70413702423	</td> <td>	Pranjal Khanna	</td> <td>	Tv9 Digital 	</td></tr>
                            <tr><td>	70513702423	</td> <td>	Garv Gera	</td> <td>	Market Inside Ltd.	</td></tr>
                            <tr><td>	70613702423	</td> <td>	Garima Rathi	</td> <td>	Edukida 	</td></tr>
                            <tr><td>	70713702423	</td> <td>	Rishabh	</td> <td>	Mansneh's Creation	</td></tr>
                            <tr><td>	70813702423	</td> <td>	Jayant Gulati	</td> <td>	Mansneh's Creation	</td></tr>
                            <tr><td>	71013702423	</td> <td>	Rajesh Gautam	</td> <td>	Mansneh's Creation	</td></tr>
                            <tr><td>	71113702423	</td> <td>	Mausmi	</td> <td>	Mansneh's Creation	</td></tr>
                            <tr><td>	71313702423	</td> <td>	Eshna Salwan	</td> <td>	Mikel Creation	</td></tr>
                            <tr><td>	35113702423	</td> <td>	Ruhani Arora	</td> <td>	Tour Passion 	</td></tr>
                            <tr><td>	35213702423	</td> <td>	Tanisha Malyan	</td> <td>	Pehchaan The Street School 	</td></tr>
                            <tr><td>	35313702423	</td> <td>	Kanika Bhakuni	</td> <td>	The Quint 	</td></tr>
                            <tr><td>	35513702423	</td> <td>	Tanya Suri	</td> <td>	Voi Digital Network Pvt Ltd	</td></tr>
                            <tr><td>	35613702423	</td> <td>	Vanshika Paul	</td> <td>	Dainik Jagran 	</td></tr>
                            <tr><td>	35713702423	</td> <td>	Uday Khanna	</td> <td>	Siddh Bhoomi	</td></tr>
                            <tr><td>	35813702423	</td> <td>	Gagan Deep Singh	</td> <td>	Meraki Brand Pro	</td></tr>
                            <tr><td>	35913702423	</td> <td>	Shivi Jaisingh	</td> <td>	MP Printers	</td></tr>
                            <tr><td>	36013702423	</td> <td>	Rishi	</td> <td>	Dodev 	</td></tr>
                            <tr><td>	36113702423	</td> <td>	Avika Madan	</td> <td>	CNN Media	</td></tr>
                            <tr><td>	36213702423	</td> <td>	Himani Kandpal	</td> <td>	ResponsibleUs 	</td></tr>

                             
						</tbody>
					</table>
              </div>
                
               
            
             
           
              <div style="height: 10vh;"></div>
             
          </div>
        </div>
        </div>
      </section>
        </div>
    </div>
</div>
      
       <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>





    <script src="myscript.js"></script>
<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>