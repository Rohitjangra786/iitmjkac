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
    </style>
</head>
<body>

<?php
  include("header.php");
  include("conferencenav.php");
?>

<div style="height: 5vh;"></div>

<div class="container mt-5">
    <h2 class="text-center text-success mb-4">Conference Registration Fees</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th colspan="2" rowspan="3">Category</th>
                    <th colspan="4">Registration Fee</th>
                </tr>
                <tr>
                    <th colspan="2">National</th>
                    <th colspan="2">International</th>
                </tr>
                <tr>
                    <th>Early Bird Registration<br>By 10<sup>th</sup> October 2025</th>
                    <th>Late Registration<br>After 10<sup>th</sup> October 2025</th>
                    <th>Early Bird Registration<br>By 10<sup>th</sup> October 2025</th>
                    <th>Late Registration<br>After 10<sup>th</sup> October 2025</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3"><strong>Author</strong></td>
                    <td>Research Scholar / Student (Full Time)</td>
                    <td>6000/-</td>
                    <td>7000/-</td>
                    <td>200 USD</td>
                    <td>250 USD</td>
                </tr>
                <tr>
                    <td>Academician</td>
                    <td>7000/-</td>
                    <td>8000/-</td>
                    <td>300 USD</td>
                    <td>350 USD</td>
                </tr>
                <tr>
                    <td>Industry</td>
                    <td>10000/-</td>
                    <td>12000/-</td>
                    <td>400 USD</td>
                    <td>500 USD</td>
                </tr>
                <tr>
                    <td rowspan="3"><strong>Delegate (Attendees)</strong></td>
                    <td>Student / Research Scholar</td>
                    <td colspan="2">500/-</td>
                    <td colspan="2">50 USD</td>
                </tr>
                <tr>
                    <td>Academician</td>
                    <td colspan="2">1000/-</td>
                    <td colspan="2">50 USD</td>
                </tr>
                <tr>
                    <td>Industry</td>
                    <td colspan="2">1500/-</td>
                    <td colspan="2">100 USD</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-5 text-center">
    <h2 class="text-success mb-4">Payment Information</h2>
    <p class="lead">Please make the payment using the QR code or bank details provided below. </p>
    <!--   Ensure that you mention your <strong>Name, Paper ID / Registration ID</strong> while making the payment. -->

    <!-- QR Code Card -->
    <div class="card mx-auto shadow p-4 mb-5" style="max-width: 400px;">
        <img src="feepayment.jpeg" alt="Payment QR Code" class="img-fluid mb-3 border rounded">
        <h5 class="mt-3 text-primary">Bank of Maharashtra</h5>
        <p><strong>Merchant / Business Name:</strong> IITM</p>
        <p><strong>Scan QR code to pay securely</strong></p>
    </div>

    <!-- Bank Details Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-start mx-auto" style="max-width:800px;">
            <thead class="table-primary text-center">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Account Name</strong></td>
                    <td>Institute of Information Technology and Management</td>
                </tr>
                <tr>
                    <td><strong>Bank Name</strong></td>
                    <td>Bank of Maharashtra</td>
                </tr>
                <tr>
                    <td><strong>Bank Address</strong></td>
                    <td>22-23 Institutional Area, D Block, Janakpuri, New Delhi - 110058</td>
                </tr>
                <tr>
                    <td><strong>Account No.</strong></td>
                    <td>60010778287</td>
                </tr>
                <tr>
                    <td><strong>IFSC Code</strong></td>
                    <td>MAHB0001188</td>
                </tr>
            </tbody>
        </table>
    </div>

<!--    <div class="alert alert-info mt-4" role="alert">
        After completing payment, please email the transaction receipt to 
        <a href="mailto:conference@iitm.ac.in">conference@iitm.ac.in</a> with your 
        <strong>Name, Contact Number, and Paper ID</strong>. -->
    </div>
    
        <div class="alert alert-info mt-4" role="alert">
        After completing payment, please email the transaction receipt to 
        <a href="mailto:conference@iitm.ac.in">conference@iitm.ac.in</a> with your 
        <strong>Name and Contact Number</strong>.
    </div>
</div>


<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
