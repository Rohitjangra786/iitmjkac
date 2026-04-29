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
    <title>IITM | Summer Training Records</title>

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
              <div class="text-justify tgfmlt" style="color: #4b4b4b;">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  show active" href="#msm2225" role="tab" data-bs-toggle="tab">2023-25</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#msm2224" role="tab" data-bs-toggle="tab">2022-24</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#msm2123" role="tab" data-bs-toggle="tab">2021-23</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#msm2022" role="tab" data-bs-toggle="tab">2020-22</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#msm1921" role="tab" data-bs-toggle="tab">2019-21</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#msm1820" role="tab" data-toggle="tab">2018-20</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#msm1719" role="tab" data-toggle="tab">2017-19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#msm1618" role="tab" data-toggle="tab">2016-18</a>
                </li>-->
             </ul>
             </div>
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
                    <a class="nav-link show active" href="#csum2124" role="tab" data-bs-toggle="tab">2021-24</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#csum2023" role="tab" data-bs-toggle="tab">2020-23</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#csum1922" role="tab" data-bs-toggle="tab">2019-22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#csum1821" role="tab" data-bs-toggle="tab">2018-21</a>
                </li>
                

             </ul>
             </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="csum2124">
                  <center>B.Com(H) : 2021 24 Summer Training Records</center>
                  	<ul class="nav nav-tabs nav-justified">
						<li class="active">
						    <a data-bs-toggle="tab" href="#2021-2024-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="#2021-2024-BCOM-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
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
						    <a data-bs-toggle="tab" href="#2020-2023-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="#2020-2023-BCOM-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
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
						    <a data-bs-toggle="tab" href="#2019-2022-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong>I Shift</strong></a></li>
						
						<li class="">
							<a data-bs-toggle="tab" href="#2019-2022-BCOM-E" aria-expanded="false" style="margin: 10px;"><strong>II Shift</strong></a></li>
						
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
						    <a data-bs-toggle="tab" href="#2018-2021-BCOM-M" aria-expanded="false" style="margin: 10px;"><strong></strong></a></li>
						
						
						
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