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
    <title>IITM | Admissions</title>

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
    .table {
            font-size: 18px;
            text-align: justify;
            line-height: 1.2rem;
        }
        td{
            line-height: 1.4rem;
        }
        
        .table-hover tbody tr:hover {
            background-color: #fffacd; /* Light yellow background */
        }
        p{line-height: 1.4rem;}
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

     <div style="height: 10vh;"></div>
     <div class="container">
         <h1 class="text-center" style="margin-bottom:20px;">Eligibility Criteria</h1>
     </div>
   
    <div class="container">
        <div class="row">
             <div class="col-md-3" style="padding: 5px; background-color: #add8e6; height: 200px;">
               <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details (UG & PG)</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/faqs.php">FAQs</a>
                    <a class="dropdown-item" href="https://forms.gle/m7tJHZE7cEkZXEGu5">Enquiry</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/management.php">Online Fees Payment</a>
            </div>
            <div class="col-md-9">
                <table class="table table-striped table-hover" style="color: #4b4b4b;">
				<tr>
					<th class="text-center" width="15%">Courses</th>
					<th class="text-center">Eligibility Criteria</th>
					<th class="text-center">Admission Process</th>
				</tr>
				
				<tr>
					<td>
						MBA (CET-101)<br/>
						Duration - 2 Years
					</td>
					<td class="text-justify">
                            <p>Any recognized 3 years or more Bachelor's Degree in any
                            discipline with a minimum of 50% marks in aggregate.<br>
                            OR</br>
                            Bachelor's Degree in Engineering, Technology or any other
                            subject with minimum of 50% marks in aggregate or any
                            qualification recognized as equivalent thereto with minimum of
                            50% marks in aggregate.</br>
                            OR</br>
                            Passed the Final Examination of the Institute of Chartered
                            Accountants of India or England, the Institute of Cost and Works
                            Accountants of India or England or the Institute of Company
                            Secretaries of India</p>
					</td>
					<td class="text-justify">
                        <p>1. All admissions shall be made on the basis of overall Percentile
                        of Common Admission Test (CAT) that was conducted by
                        Indian Institute of Management.<br>
                        2. If seats remain vacant after counselling on the basis of overall
                        percentile of CAT, then only the counseling shall be
                        conducted on the basis of Score in CMAT  (another
                        National Level Test).  University will consider admissions in MBA 
                                                Programme by conducting Common Entrance Test (CET) to be conducted by GGSIP University.</p>
					</td>
				</tr>
				
				<tr>
					<td>
						MCA (CET-105)<br/>
						Duration - 2 Years
					</td>
					<td class="text-justify">
						<p>Passed BCA/B.Sc. (Computer Science)/B.Sc.(Technology) or equivalent or Passed at least 03 years
                        Bachelors Degree with mathematics/statistics at 10+2 level or graduation level. Obtained at least 50% marks (45% marks in case of candidates belonging to
                        reserved category) in the qualifying examinations.<br>
                        Note: These applicants, if admitted, may have to study additional bridge
                        courses as per the norms of the University.<br>
                        </p>
						</td>
					<td class="text-justify">
						<p>The admission to MCA will be on the basis of
                        NIMCET/CET/CUET in following order of priority:<br>
                        1. NIMCET<br>
                        2. CET (If Seats remain vacant after admission through NIMCET
                        counselling on the basis of merit of NIMCET, the University
                        will consider admission in MCA on the basis of CET.
                        The vacant seats after exhausting the merit
                        filled through the merit list of CUET</p>
					</td>
				</tr>
				<tr>
					<td>
						BCA(H) (CET-114)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<p> Pass in 12th Class of 10+2 of CBSE or equivalent
                        with a minimum of 50% marks in aggregate* with pass in English (core
                        or elective or functional). Mathematics or Computer Science / or any
                        other subject related to Computer Science.<br>
                        OR<br>
                        Three year Diploma in a branch of Engineering from a polytechnic duly
                        approved by All India Council for Technical Education and affiliated to
                        a recognized examining body with a minimum of 50% marks in
                        aggregate.
						</p>
						</td>
					<td class="text-justify">
						<p>Admission shall be on the basis of the merit of the
                            CET. The vacant seats after exhausting the merit list of CET will be
                            filled through the merit list of CUET.</p>
					</td>
				</tr>
				<tr>
					<td>
						BBA(H)  (CET-125)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<p>Pass in 12th Class of 10+2 of CBSE or equivalent
                        with a minimum of 50% marks in aggregate* and must also have passed
                        English (core or elective or functional) as a subject. </p>
						</td>
					<td class="text-justify">
						<p>Admission shall be on the basis of the merit of the
                        CET. The vacant seats after exhausting the merit list of CET will be
                        filled through the merit list of CUET.</p>
					</td>
				</tr>
				<tr>
					<td>
						B.COM(H) (CET-146)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<p>50% in aggregate in 10+2 examination / senior School Certificate Examination of C.B.S.E. as minimum marks for admission to B.Com with pass in five subjects (One language and four elective subjects) or an examination recognized as equivalent to that.<br>
                        (i) Pre-University Examination (Two years after ten years of schooling) of an Indian school / college. OR Intermediate Examination of an Indian University / Board or an Examination recognized as equivalent to that (Pass in five written subjects)<br>
                        (ii) Indian School Certificate Examination (12 years) conducted by the Council for the Indian School Certificate Examination, New Delhi (Pass in five written subjects).<br>
                        (iii) Examination of a foreign University / Board which is recognized as equivalent to 10+2 CBSE examination/or Indian University.</p>
						</td>
					<td class="text-justify">
                    	<p>Admission shall be on the basis of the merit of the
                        CET. The vacant seats after exhausting the merit list of CET will be
                        filled through the merit list of CUET.</p>
					</td>
				</tr>
				
				
				
					<tr>
					<td>
						BAJMC(H) (CET-126)<br/>
						Duration - 4 Years
					</td>
					<td class="text-justify">
						<p>Pass in 12th Class of 10+2 of CBSE or equivalent
                        with a minimum of 50% marks in aggregate* and must also have passed
                        English (core or elective or functional) as a subject.</p>
						</td>
					<td class="text-justify">
						<p>Admission shall be on the basis of the merit of the
                        CET. The vacant seats after exhausting the merit list of CET will be
                        filled through the merit list of CUET.</p>
					</td>
				</tr>
				
			</table>
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