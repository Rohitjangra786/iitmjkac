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
    <title>Admission Open for Management & IT Programs | IITM Janakpuri </title>
<meta name="description" content="Apply now for management and IT programs at IITM Janakpuri. Explore career-focused courses, expert faculty, and modern learning facilities.">

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



 /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 /* float: right; */
}

/* Style the container */
.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 45%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.container1{
    background-color:white;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
 
    <div style="height: 10vh;"></div>
   
    <div class="container">
        <h1 class="text-center">
           Management Quota Admissions-2025-26
        </h1>
    </div>
    <div class="container">
        
			            <div class="row">
			            	<div class="col-sm-6 text-center">
			            		<p></p>
			            		<a href="#" target="_blank" class="btn btn-primary">Online Application Form</a>
			            	</div>
			            	<div class="col-sm-6 text-center">
			            		<p></p>
			            		<a href="./docs/manage.pdf" target="_blank" class="btn btn-danger">Offline Application Form</a>
			            	</div>
			            	<div style="height: 5vh;"></div>
			            	<div class="row">
			            	    <div class="col-md-8">
			            	        <p><a href="https://forms.gle/6eYKrhzV43jGdMiSA">Application Form for Admission in Management Quota 2025-26 - MCA</a></p>
			            	<p><a href="https://forms.gle/3jmuMfKmgo9HEZE46">Application Form for Admission in Management Quota 2025-26 - MBA</a></p>
			            	<p><a href="https://forms.gle/J7SmEC72TKAYqfBaA">Application Form for Admission in Management Quota 2025-26 - BA(JMC)</a></p>
			            	<p><a href="https://forms.gle/LAY5dMvpWTw8zHYSA">Application Form for Admission in Management Quota 2025-26 - BCA</a></p>
			            	<p><a href="https://forms.gle/fow6WR1LBKxG4mEg6">Application Form for Admission in Management Quota 2025-26 - B.Com(H)</a></p>
			            	<p><a href="https://forms.gle/ix2B9JPt4XDyRSvq6">Application Form for Admission in Management Quota 2025-26 - BBA</a></p>
			            <p><a href="http://www.iitmjanakpuri.com/direct-file/MQPaymentNotice.pdf">Notice-Payment for Management Quota Admission</a></p>
			            	    </div>
			            	   <!-- <div class="col-md-4">
			            	        <h3>Bank Details (For Payment)</h3>
			            	        <table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <td><strong>Account Name:</strong></td>
    <td>Institute of Information Technology and Management</td>
  </tr>
  <tr>
    <td><strong>Bank Name:</strong></td>
    <td>Bank of Maharashtra</td>
  </tr>
  <tr>
    <td><strong>Bank Address:</strong></td>
    <td>22-23 Institutional Area, D Block, Janakpuri New Delhi-110058</td>
  </tr>
  <tr>
    <td><strong>Account No.</strong></td>
    <td>60212532846</td>
  </tr>
  <tr>
    <td><strong>IFSCode:</strong></td>
    <td>MAHB0001188</td>
  </tr>
</table>

			            	    </div>-->
			            	</div>
			            	
			            </div>
			            
<div style="height: 10vh;"></div>		
 

    </div>
       <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>