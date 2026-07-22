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
    <title> Admission FAQs & Queries | IITM Janakpuri Delhi </title>
    <meta name="description" content="Find answers to admission FAQs at IITM Janakpuri about eligibility, courses, fees, application process, placements, and campus facilities.">

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
            font-size: 20px;
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
    
    /* Collapsibles */
.collapsible {
  background-color: maroon;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 17px;
  border: 1rem transparent inset;
}

.active, .collapsible:hover {
  background-color: #80000;
  border: 1rem maroon inset;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 1px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  /*background-color: #f1f1f1;*/
  margin:0 auto;
}

.myfontsize{
    fontsize: 10px;
    text-align: justify;
}
h3{
       fontsize: 10px;
}
/* Collapsibles Ends */
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
 
    <div style="height: 5vh;"></div>
   
    <div class="container">
        <h1 class="text-center">
            Frequently Asked Questions
        </h1>
    </div>
    <div class="container">
        
 <div class="container">
    
        
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 200px;">
               <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/direct-file/feesdetails.pdf" target="_blank">Fee Details (UG & PG)</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/faqs.php">FAQs</a>
                    <a class="dropdown-item" href="https://forms.gle/m7tJHZE7cEkZXEGu5">Enquiry</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/management.php">Online Fees Payment</a>
            </div>
            <div class="col-md-9">
                                 <button class="collapsible tgfmlt">How can I get admission in MBA, MCA, BBA, BCA & B.Com (Hons.) & BA(JMC) programme?</button>
          <div class="content">
            <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Admission procedure of MBA</strong></h2>
            <p class="myfontsize" style="color: #4b4b4b;">The admissions in regular MBA programme in the affiliated 
            institutes for the Academic Session 2025-26 are on the basis of merit in CAT 2024. If seats remain 
            vacant after counseling on the basis of merit of CAT, then counseling shall be conducted on the 
            basis of score in CMAT. In case seats still remain vacant even after exhausting CAT and CMAT merit, 
            the University will consider admission in MBA programme by conducting Common Entrance Test to be conducted by GGSIPU.</h3>
            <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Admission procedure of MCA</strong></h2>
            <p class="myfontsize" style="color: #4b4b4b;">The admission to MCA will be on the basis of NIMCET 2024/CET/CUET in following order of priority:<br>
            1. NIMCET 2024<br>
            2. CET (If Seats remain vacant after admission through NIMCET counselling on the basis of merit of NIMCET 2025,
            the University will consider admission in MCA on
            the basis of CET. The vacant seats after exhausting the merit filled through the merit list of CUET)</h3>
            
            <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Admission procedure of BBA, BCA, B.Com(H) & BA(JMC) </strong></h2>
            <p class="myfontsize" style="color: #4b4b4b;">The admissions in regular BBA, BCA, B.Com(H) & BA(JMC) 
            programmes in the affiliated institutes for the Academic Session 2025-26 are on the basis of merit of the written test CET/CUET.</p>
          </div></br>
            </br>
         <button class="collapsible tgfmlt">What are the institute timings?</button>
         <div class="content">
           <p class="myfontsize" style="color: #4b4b4b;">The institute 
           operates on all working days, Monday through Saturday, 
           from 8:30 am to 6:00 pm. For undergraduate courses, 
           there are two shifts available. The first shift begins at 8:30 am, while the second shift starts at 11:30 am (according to the timetable).</p>
           </div></br>
         <button class="collapsible tgfmlt">How is the campus placement of the institute?</button>
         <div class="content">
            <p class="myfontsize" style="color: #4b4b4b;">The Industry Institute Partnership Centre (IIPC) of 
            the Institute of Information Technology & Management (IITM) was established in 2004 to enhance 
            the interface between the institute and industry. This center identifies industrial expectations 
            and promotes institutional preparation to meet industrial needs by facilitating internships, seminars, 
            workshops, placements, and various other industrial training programs. The Industry Institute 
            partnership is also reflected in equipping faculty with the latest practices and preparing 
            students for the industry by providing exposure to current industry practices. In terms of 
            placements, top brands such as SAP India, Wipro, HDFC Bank, IndusInd Bank, Franchise Trade, 
            and Infosys, among others, hire both Management and IT students based on their specializations. 
            Pre-placement support is available, both specific and general, to assist students in cracking 
            interviews and aptitude tests of various companies. The highest package offered is 22 LPA, with an average package of 4.96 LPA.</p>
         </div></br>
         <button class="collapsible tgfmlt">Whom to contact for admission related inquiries?</button>
         <div class="content">
            <p class="myfontsize" style="color: #4b4b4b;">A helpdesk has been established for individual 
            programs to provide assistance and address queries regarding academic matters for students and parents. Details are provided below:</p>
            <p class="myfontsize" style="color: #4b4b4b;">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
	            				<table class="table">
									<tbody>
										<tr>
											<th>S.No</th><th>Programme</th><th>Helpdesk</th>
										</tr>
										<tr>
											<td align="center">1</td>
											<td align="center">MCA & BCA</td>
											<td align="center">Dr. Harmeet Malhotra - 9211592472</td>
										</tr>
										<tr>
											<td align="center">2</td>
											<td align="center">MBA</td>
											<td align="center">Dr. Mandeep Singh- 9560098709 </td>
										</tr>
											
										
										<!--<tr>
											<td align="center">3</td>
											<td align="center">BCA</td>
											<td align="center">Dr. Charul Nigam- 9952068197 </td>
										</tr>-->
										<tr>
											<td align="center">3</td>
											<td align="center">BBA </td>
											<td align="center">Dr. Deepika Arora & Dr. Deepali Saluja - 9711197715</td>
										</tr>
										<tr>
											<td align="center">4</td>
											<td align="center">B.Com.(H)</td>
											<td align="center">Dr. Raghav Jain - 8920636874</td>
										</tr>
										
									
											<tr>
											<td align="center">5</td>
											<td align="center">BA(JMC)</td>
											<td align="center">Dr. Nivedita Sharma - 7217872947</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div></p>
            </div></br>
         <button class="collapsible tgfmlt">What are the institute's scholarship schemes?</button>
         <div class="content">
             <p class="myfontsize" style="color: #4b4b4b;">In addition to providing excellent faculty and individual academic support, 
             the IITM group aims to inspire and motivate hardworking students by offering the following scholarships:</p>
             <h2 class="tgfmlt" style="color: #4b4b4b;">(A) Pre - Admission Merit Scholarships</h2>
             <p class="myfontsize" style="color: #4b4b4b;">Eligible candidates seeking Pre-Admission Scholarship in B.Com (Hons.), BCA and BBA programmes have to take online sanction before filling their First Preference as IITM.
                The link for same is <a href ="https://iitmjanakpuri.com/scholarships/scholarships.php"> http://www.iitmjanakpuri.com/pre-admision.php</a>
             </p>
             <h2 class="tgfmlt" style="color: #4b4b4b;">(B) In-House Merit Scholarships </h2>
             <p class="myfontsize" style="color: #4b4b4b;"> In order to acknowledge and encourage 
             brilliant academic performers, the Institute awards Merit Scholarships to the students 
             on the basis of their academic performance in University examinations. To get more details kindly go through the below link:
             <a href ="https://iitmjanakpuri.com/scholarships/scholarships.php"> http://www.iitmjanakpuri.com/inhouse.php</a>
        </br></br>
        Apart from the above, following Financial Assistance Programmes are also available to the students:</br>
        (i)	Merit-cum-Means Financial Assistance Scheme</br>
        (ii)	Financial Assistance to the students under EWS Scheme</br>
        <b>Note:</b> For detailed information on above Scholarships/Financial Assistance Scheme, please visit <a href ="https://iitmjanakpuri.com/scholarships/scholarships.php">http://www.iitmjanakpuri.com/</a></br>
      </p>
    </div></br>
         <button class="collapsible tgfmlt">What is the reservation policy of the institute with respect to the seat allocation? </button>
         <div class="content">
          <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Relaxation in Eligibility</strong></h2>
          <p class="myfontsize" style="color: #4b4b4b;">Candidates belonging to Scheduled Castes/Scheduled Tribes/Widows or Wards of 
          Defense Personnel / Persons With Disability will be allowed 5% relaxation of marks in the minimum eligibility 
          requirement or as specified by the statutory body governing the programme of study, irrespective of the fact 
          whether there exists any reservation for any category of such candidates or not.  Relaxation of any kind, 
          will be granted to only those candidates, who are able to produce necessary relevant supporting documents 
          as per the Admission Brochure before the Admission Officer present at the Venue of the Document Verification / Counseling /Admission.</p>
          <h2 class="tgfmlt" style="color: #4b4b4b;"><strong>Reservation Policy</strong></h2>
          <p class="myfontsize">i) 85% of the sanctioned intake (minus the management quota which is 10% of total seats unless surrendered by the institution for common counseling) shall be allocated for Delhi Region wherein reservation of seats shall be as under:
      		Delhi region Scheduled Caste - 15%</br>
            Delhi region Scheduled Tribe- 7.5%
         </p>
         <p class="myfontsize" style="color: #4b4b4b;">ii) 15% of the sanctioned intake (minus the management quota which is 10% of total seats unless surrendered by the institution for common counseling) shall be allocated for outside Delhi Region wherein reservation of seats shall be as under:
       		Outside Delhi region Scheduled Caste - 15%</br>
     		Outside Delhi region Scheduled Tribe - 7.5%
        </p>
        <p class="myfontsize" style="color: #4b4b4b;">iii)10% of the total seats (as per CET Code) will be allocated as 
        management quota (unless surrendered by the college/institute) seats as per policy of Govt. of NCT of Delhi in self financing institutions.
        </p></br>
      </div></br>
            </div>

    </div>    

       
    </div>

    </div>
    
    
     <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
    <script>
    //document.write('JavaScript Working');
    function getchanged()
    {
       str=document.getElementById('course').value;
       if(str=='bba' || str=='bca' || str=='bcom')
       {
           var v=document.getElementById('perg');
           v.disabled=true;
       }
       else
       {
           var v=document.getElementById('perg');
           v.disabled=false;
       }
    }
</script>
  
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
    <script src="myscript.js"></script>
</body>
</html>