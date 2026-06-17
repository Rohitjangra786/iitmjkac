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
    <title>Environment & Sustainability Committee | IITM Janakpuri </title>
    <meta name="description" content="The Environment & Sustainability Committee at IITM Janakpuri promotes eco-friendly practices, environmental awareness, and sustainable campus initiatives.">

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
        list-style-position: outside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #000;
        text-align: justify;
    }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div style="height: 5vh;"></div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="text-center">Environment & Sustainability Committee</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
            <p class="text-justify">
             Environment & Sustainability Committee 
             was established with the objective of generating awareness 
             and promoting environmental care at both individual and community level. 
            </p>
            <a href="https://www.iitmjanakpuri.com/StudentZone/policies/Environmental_Committee_Policy.pdf" target="_blank" class="btn btn-lg btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Committee Policy
            </a> 
            <a href="https://iitmjanakpuri.com/nbasar/8_Green%20Policy.pdf" target="_blank" class="btn btn-lg btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Green Policy
            </a>
            <a href="https://www.iitmjanakpuri.com/StudentZone/policies/green_audit_report.pdf" target="_blank" class="btn btn-lg btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Green Audit Report
            </a> 
            <a href="https://www.iitmjanakpuri.com/StudentZone/policies/water_audit_report.pdf" target="_blank" class="btn btn-lg btn-primary m-2" style="background-color: #800000; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Water Audit Report
            </a>
            </div>
        </div>
          
        </div>


    </div>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Committee Members</h1>
            <ol class="committee-list">
<li>Mr. Gautam Kumar, Coordinator</li>
<li>Ms. Lakshmi, Member</li>
<li>Dr. Rahul, Member</li>
<li>Ms. Manisha, Member</li>
        </ol>
        </div>
        <div class="row">
            <h1 class="text-center">Objectives</h1>
            <p>
                <ol class="committee-list">
<li>Understanding various environmental issues and the need to address them.</li>
<li>Sensitizing people about the need for protection of environment for a sustainable and healthy future.</li>
        </ol>
            </p>
        </div>
        <div class="row">
            <h1 class="text-center">Functional Responsibilities</h1>
            <p>
                <ol class="committee-list">
<li>Conducting seminars, workshops and campaigns to sensitize people about environmental issues pertaining the society.</li>
<li>Organizing various competitions like Poster Making, Essay Writing, etc. to sensitize students about the importance of environmental conservation.</li>
        </ol>
            </p>
        </div>
        <div class="row">
            <h1 class="text-center">Student Coordinators</h1>
            <p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bhavya Aggarwal</td>
                                <td>BBA V E2</td>
                                <td>9350696886</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Shivali Vohra</td>
                                <td>B.COM(H) V M</td>
                                <td>96540 84850</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Parul</td>
                                <td>BCA III E2</td>
                                <td>88517 79451</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rajat Thakur</td>
                                <td>BCA III E2</td>
                                <td>99106 77405</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Rekha Kandpal</td>
                                <td>BCA III E2</td>
                                <td>85338 94203</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Vivek Kumar</td>
                                <td>BCA III E2</td>
                                <td>95182 12930</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Mihir</td>
                                <td>BCA III E2</td>
                                <td>+91 93113 63107</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Nirmal</td>
                                <td>BCA III E2</td>
                                <td>+91 85955 23086</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Harshita</td>
                                <td>BBA III E3</td>
                                <td>+91 96506 27995</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Devanshi</td>
                                <td>BBA III E3</td>
                                <td>+91 88007 41235</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Shubham</td>
                                <td>BCA III E2</td>
                                <td>+91 92893 31192</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Aaryan</td>
                                <td>BCA III E2</td>
                                <td>+91 96252 67909</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Mansifat</td>
                                <td>BCA I M2</td>
                                <td>+91 99530 77594</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Gobind Ghai</td>
                                <td>BBA III E3</td>
                                <td>+91 99712 37945</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Chavi Tayal</td>
                                <td>BBA III E3</td>
                                <td>7015629210</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Prerana Pradeep</td>
                                <td>B.COM(H) I E1</td>
                                <td>8287919537</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Sumiran Khandelwal</td>
                                <td>BBA III E3</td>
                                <td>8226030734</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Yashika Vij</td>
                                <td>BCA I E2</td>
                                <td>9990309011</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Saksham Bhatia</td>
                                <td>BCA I E2</td>
                                <td>+91 72920 53503</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Mridula Kumra</td>
                                <td>BCA I E1</td>
                                <td>+91 99991 36467</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Avni Garg</td>
                                <td>BCA I E1</td>
                                <td>+91 93107 10245</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Vaibhav Negi</td>
                                <td>BCA I E1</td>
                                <td>8800804187</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Aarush Modi</td>
                                <td>BBA III E2</td>
                                <td>9540581080</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Khushi Gupta</td>
                                <td>BBA V M</td>
                                <td>+91 99539 51512</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Unnati Lal</td>
                                <td>BBA III E3</td>
                                <td>9310937243</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </p>
        </div>        
    </div>
    <div style="height: 5vh;"></div>
    <?php
       include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>