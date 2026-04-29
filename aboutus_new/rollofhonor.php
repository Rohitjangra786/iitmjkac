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
    <title>IITM - Roll of Honor</title>

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
p {
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

        .table-section {
            margin-top: 0;
            max-width: 800px;
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
                <h1 class="text-center text-danger">Roll of Honor</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 430px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/history.php">History</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/aboutus.php">Vision & Mission</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/chairman.php">Chairman</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/director.php">Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/executive_director.php">Executive Director</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/administration.php">Management and Administration</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/rollofhonor.php">Students Rolls of Honor</a><br>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/aboutus_new/milestone.php">Milestone</a><br>    
            </div>
            <div class="col-md-9">
     <div class="table-section">
        
        
        <!-- MBA Table -->
        <h2 class="text-center text-primary">MBA</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Batch</th>
                    <th>Name</th>
                    <th>Enroll No.</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>2022-24</td><td>Saaniya Tanwar</td><td>00113703922</td><td>88.32</td></tr>
                <tr><td>2</td><td>2021-23</td><td>Karishma</td><td>35613703921</td><td>86.11</td></tr>
                 <tr><td>3</td><td>2020-22</td><td>Srishti</td><td>04913703920</td><td>89.68</td></tr>
                 <tr><td>4</td><td>2019-21</td><td>Bhavya Malik</td><td>00413703919</td><td>82.56</td></tr>
                 <tr><td>5</td><td>2018-20</td><td>Diksha</td><td>00713703918</td><td>83.00</td></tr>
                 <tr><td>6</td><td>2017-19</td><td>Vandana Sony</td><td>35613703917</td><td>84.09</td></tr>
                  <tr><td>7</td><td>2016-18</td><td>Shreya Gupta</td><td>03613703916</td><td>82.44</td></tr>
                <tr><td>8</td><td>2015-17</td><td>Anjali</td><td>00613703915</td><td>82.90</td></tr>
                <tr><td>9</td><td>2014-16</td><td>Anjum Tanwar</td><td>03913703914</td><td>86.80</td></tr>
                <tr><td>10</td><td>2013-15</td><td>Nupur Sharma</td><td>05913703913</td><td>87.99</td></tr>
                <tr><td>11</td><td>2012-14</td><td>Niti Suri</td><td>02913703912</td><td>86.13</td></tr>
                
            </tbody>
        </table>

        <!-- BCA Table -->
        <h2 class="text-center text-primary">BCA</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Batch</th>
                    <th>Name</th>
                    <th>Enroll No.</th>
                    <th>Percentage</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>2022-2025</td><td>Dhruv Dhayal</td><td>06313702022</td><td>93.9</td><td></td></tr>
                <tr><td>2</td><td>2021-2024</td><td>Rishit Luthra</td><td>04713702021</td><td>92.2</td><td></td></tr>
                <tr><td>3</td><td>2020-2023</td><td>Ganga Sharma</td><td>01821102020</td><td>91.8</td><td></td></tr>
                <tr><td>4</td><td>2019-2022</td><td>Aarchi Agrawa</td><td>02121102019</td><td>92.7</td><td></td></tr>
                <tr><td>5</td><td>2018-2021</td><td>Deepanshu Sharma</td><td>40713702018</td><td>91.0</td><td></td></tr>
                <tr><td>6</td><td>2017-2020</td><td>Surbhi Sharma</td><td>03621102017</td><td>86.6</td><td></td></tr>
                 <tr><td>7</td><td>2016-2019</td><td>Utkarsh Sareen</td><td>04713702016</td><td>90.0</td><td></td></tr>
                 <tr><td>8</td><td>2015-2018</td><td>Bhavika Bhasin</td><td>40121102015</td><td>88.9</td><td></td></tr>
                 <tr><td>9</td><td>2014-2017</td><td>Simranjeet Kaur</td><td>30613702014</td><td>90.6</td><td>Gold Medal</td></tr>
                 <tr><td>10</td><td>2013-2016</td><td>Divyani Vij</td><td>03113702013</td><td>90.3</td><td></td></tr>
                <tr><td>11</td><td>2012-2015</td><td>Sapna Gupta</td><td>05513702012</td><td>93.0</td><td>Gold Medal</td></tr>
                
                
            </tbody>
        </table>

        <!-- Add similar tables for BBA, MCA, and B.Com(H) -->
        <h1 class="text-center text-danger">Roll of Honor</h1>
        
        <!-- BBA Table -->
        <h2 class="text-center text-primary">BBA</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Batch</th>
                    <th>Name</th>
                    <th>Enroll No.</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>2022-2025</td><td>Bhavya Aggarwal</td><td>07821101722</td><td>89.12</td></tr>
                <tr><td>2</td><td>2021-2024</td><td>Arleen Kaur</td><td>08713701721</td><td>91.40</td></tr>
                 <tr><td>3</td><td>2020-2023</td><td>Krishika Kataria</td><td>05313701720</td><td>92.43</td></tr>
                 <tr><td>4</td><td>2019-2022</td><td>Diya Vinaik</td><td>06713701719</td><td>89.29</td></tr>
                 <tr><td>5</td><td>2018-2021</td><td>Rashi Oberoi</td><td>05813701718</td><td>90.78</td></tr>
                  <tr><td>6</td><td>2017-2020</td><td>Vishesh Jindal</td><td>36213701717</td><td>82.46</td></tr>
                  <tr><td>7</td><td>2016-2019</td><td>Naina Kumari Singh</td><td>03113701716</td><td>88.28</td></tr>
                   <tr><td>8</td><td>2015-2018</td><td>Shruti Gulati</td><td>08213701715</td><td>86.59</td></tr>
                   <tr><td>9</td><td>2014-2017</td><td>Priyanjali Singh</td><td>00321101714</td><td>83.36</td></tr>
                    <tr><td>10</td><td>2013-2016</td><td>Namrala Jolly</td><td>01013701713</td><td>85.00</td></tr>
                <tr><td>11</td><td>2012-2015</td><td>Mohit Chopra</td><td>11421101712</td><td>84.70</td></tr>
               
                
            </tbody>
        </table>

        <!-- MCA Table -->
        <h2 class="text-center text-primary">MCA</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Batch</th>
                    <th>Name</th>
                    <th>Enroll No.</th>
                    <th>Percentage</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>2023-2025</td><td>Annu</td><td>02013704423</td><td>92.89</td><td></td></tr>
                <tr><td>2</td><td>2019-2022</td><td>Manish Kumar</td><td>01213704419</td><td>89.92</td><td></td></tr>
                <tr><td>3</td><td>2018-2021</td><td>Bhavdeep Kaur</td><td>00813704418</td><td>92.29</td><td></td></tr>
                <tr><td>4</td><td>2017-2020</td><td>Simran Chhabra</td><td>40113704417</td><td>90.29</td><td></td></tr>
                <tr><td>5</td><td>2016-2019</td><td>Pooja Rai</td><td>02213704416</td><td>91.59</td><td>Gold Medal</td></tr>
                <tr><td>6</td><td>2015-2018</td><td>Deepti Rawat</td><td>00913704415</td><td>86.00</td><td></td></tr>
                <tr><td>7</td><td>2014-2017</td><td>Palak Khurana</td><td>01113704414</td><td>93.74</td><td>Gold Medal</td></tr>
                <tr><td>8</td><td>2013-2016</td><td>Priyanka Sharma</td><td>01713704413</td><td>92.24</td><td></td></tr>
                <tr><td>9</td><td>2012-2015</td><td>Manpreet Kaur</td><td>02413704412</td><td>91.24</td><td></td></tr>
                
            </tbody>
        </table>

        <!-- B.Com(H) Table -->
        <h2 class="text-center text-primary">B.Com(H)</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Batch</th>
                    <th>Name</th>
                    <th>Enroll No.</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>2022-2025</td><td>Ankita Sharma</td><td>02913788822</td><td>87.63</td></tr>
                <tr><td>2</td><td>2021-2024</td><td>Aditya Gupta</td><td>3913788821</td><td>90.87</td></tr>
                <tr><td>3</td><td>2020-2023</td><td>Vanshika Saxena</td><td>04713788820</td><td>92.62</td></tr>
                 <tr><td>4</td><td>2019-2022</td><td>Yashica Garg</td><td>35113788819</td><td>92.32</td></tr>
                 <tr><td>5</td><td>2018-2021</td><td>Shrishti Bisht</td><td>3313788818</td><td>90.58</td></tr>
                <tr><td>6</td><td>2017-2020</td><td>Prerna Jain</td><td>1713788817</td><td>89.90</td></tr>
                
               
                
                
            </tbody>
        </table>

    </div>
            </div>
        </div>
    </div>








<?php
   include("../naacfooter.php");
?>
    <script src="myscript.js"></script>
    <!-- Bootstrap JS -->

</body>
</html>


    
