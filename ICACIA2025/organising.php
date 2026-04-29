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
        
        










    .custom-tabs {
        background: #d72638; /* Solid red */
        display: flex;
        justify-content: center;
        margin: 30px auto 0;
        width: 100%;
        border-bottom: none;
    }

    .custom-tabs .nav-link {
        color: white;
        padding: 12px 25px;
        font-weight: 500;
        border: none;
        background-color: #d72638;
        border-right: 1px solid #e94d5f;
        border-radius: 0;
        text-transform: uppercase;
        position: relative;
    }

    .custom-tabs .nav-link:last-child {
        border-right: none;
    }

    .custom-tabs .nav-link.active {
        background-color: #d72638;
    }

    .custom-tabs .nav-link.active::after {
        content: "";
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #d72638; /* Exact tab color */
    }

    .custom-tab-content {
        background-color: white;
        color: black;
        padding: 20px;
        width: 80%;
        margin: 0 auto 30px;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
    
    
    
        .bg-light {
        background-color: #f9f9ff !important;
    }
    .shadow-sm {
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06) !important;
    }
</style>






</head>
<body>

<?php
  include("header.php");
  include("conferencenav.php");
?>
<!-- Tabs Section -->





<div class="d-flex justify-content-center">
    <ul class="nav nav-tabs custom-tabs" id="committeeTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="steering-tab" data-bs-toggle="tab" data-bs-target="#steering" type="button" role="tab" aria-controls="steering" aria-selected="true">
                Steering Committee
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="local-tab" data-bs-toggle="tab" data-bs-target="#local" type="button" role="tab" aria-controls="local" aria-selected="false">
                Local Organizing Committee
            </button>
        </li>
    </ul>
</div>

<div class="tab-content custom-tab-content" id="committeeTabsContent">
    <div class="tab-pane fade show active" id="steering" role="tabpanel" aria-labelledby="steering-tab">

    <div class="container">
        <div class="mb-1 p-1 bg-light rounded shadow-sm">
            <h5 class="text-danger">Patron</h5>
            <p><strong>Sh. J.C. Sharma, </strong>Chairman & Founder, IITM, Delhi India</p>
        </div>
        <div class="mb-1 p-1 bg-light rounded shadow-sm">
            <h5 class="text-danger">Co Patron</h5>
            <p><strong>Mr. Shiva Sharma, </strong>Executive Director, IITM, Delhi, India</p>
        </div>
        <div class="mb-1 p-1 bg-light rounded shadow-sm">
            <h5 class="text-danger">General Chair</h5>
            <p><strong>Prof (Dr) Rachita Rana</strong>, Director, IITM, Delhi, India</p>
        </div>
        <div class="mb-1 p-1 bg-light rounded shadow-sm">
            <h5 class="text-danger">Conference Chair</h5>
            <p><strong>Dr Marcin Paprzycki,</strong>Systems Research Institute, Poland</p>
            <p><strong>Dr Amit Prakash Singh, </strong>GGSIPU, New Delhi, India</p>
        </div>
        <div class="mb-1 p-1 bg-light rounded shadow-sm">
            <h5 class="text-danger">Technical Program Committee Chair</h5>
            <p><strong>Dr Narayan C Debnath, </strong>EIU,Vietnam</p>
            <p><strong>Dr Mansaf Alam, </strong>JMI, India</p>
            <p><strong>Dr Ganesh Kumar Wadhwani,</strong>IITM,India</p>
            <p><strong>Dr Pankaj Kumar Varshney,</strong>IITM,India</p>
        </div>
        <div class="mb-1 p-1 bg-light rounded shadow-sm">
            <h5 class="text-danger">Publication Chair</h5>
            <p><strong>Dr Atta Ur Rehman, </strong>Ajman University, UAE</p>
            <p><strong>Dr Manzoor Ansari, </strong>IITM,India</p>
        </div>
        <div class="mb-1 p-1bg-light rounded shadow-sm">
            <h5 class="text-danger">Publicity Chair</h5>
            <p><strong>Dr Mudasir Ahmad Wani, </strong>Prince Sultan University, Riyad,Saudi Arabia</p>
            <p><strong>Dr Ramandeep Kaur,</strong>IITM,India</p>
            <p><strong>Dr Saima Saleem,</strong>IITM,India</p>
        </div>
    </div>


    </div>
    <div class="tab-pane fade" id="technical" role="tabpanel" aria-labelledby="technical-tab">
        <p>Local Organizing Committee</p>
    </div>
    <div class="tab-pane fade" id="local" role="tabpanel" aria-labelledby="local-tab">
        <div class="mb-3 p-3 bg-light rounded shadow-sm">
            <h5 class="text-danger">Technical Program Committee Chair</h5>
            <p><strong>Dr. Harmeet Malhotra</strong></p>
            <p><strong>Ms. Kavita Srivastava</strong></p>
            <p><strong>Dr. Raghav jain</strong></p>
            <p><strong>Dr. Mandeep Singh</strong></p>
            <p><strong>Dr. Sahil Dhull</strong></p>
            <p><strong>Ms. Aditi Aggarwal</strong></p>
        </div>
    </div>
</div>


<!--
<div style="height: 5vh;"></div>
<div class="container-fluid pl-0 pr-0">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <h2 style="text-align:center"> COMMITTEES</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="container jumbotron text-justify list">
                <h3>Chief Patron</h3>
                <ol class="list">
                   <li>Sh. J.C. Sharma</li>
                </ol>
                <h3>Patron</h3>
                <ol class="list">
                   <li>Sh. J.C. Sharma, Chairman & Founder, IITM, Delhi India</li>
                </ol>
                <h3>Co Patron</h3>
                <ol class="list">
                   <li>Prof.(Dr.) Rachita Rana, Director, IITM, Delhi India</li>
                   <li>Mr. Shiva Sharma, Executive Director, IITM, Delhi, India</li>
                </ol>
                <h3>Convenor (s)</h3>
                <ol class="list">
                   <li>Prof.(Dr.) Ganesh Kumar Wadhwani, IITM, Delhi India</li>
                   <li>Prof.(Dr.) Pankaj Kumar Varshney, IITM, Delhi, India</li>
                </ol>
                <h3>Co-Convenor (s)</h3>
                <ol class="list">
                <li>Dr. Manzoor Ansari, , IITM, Delhi, India</li>
                <li>Ms. Leena Gupta, IITM, Delhi, India</li>
                <li>Ms. Kavita Srivastava, IITM, Delhi, India</li>
                <li>Ms. Komal Sharma, IITM, Delhi, India</li>
                </ol>	
                <h3>Finance Chair (s)</h3>
                <ol class="list">
                    <li>Mr. Ashish Kumar Nayyar, IITM, Delhi, India</li>
                    <li>Ms. Anjali Chauhan, IITM, Delhi, India</li>
                </ol>
                <h3>Publicity Chair (s)</h3>
                <ol class="list">
                   <li>Dr. Ramandeep Kaur, IITM, Delhi, India</li>
                   <li>Mr. Gautam Kumar, IITM, Delhi, India</li>
                </ol>
                <center><h3>Internal Organizing Committee</h3></center>         
                <h3>Publication Committee</h3>
                <ol class="list">
                   <li>Prof.(Dr.) Ganesh Kumar Wadhwani, IITM, Delhi, India</li>
                   <li>Dr. Pankaj Kumar Varshney, IITM, Delhi, India</li>
                   <li>Dr. Manzoor Ansari, IITM, Delhi, India</li>
                   <li>Ms. Aditi Agrawal, IITM, Delhi, India</li>
                   <li>Ms. Preeti Sharma, IITM, Delhi, India</li>
                </ol>
                <h3>Conference Track Management Committee</h3>
                <ol class="list">
                    <li>Dr. Ramandeep Kaur, IITM, Delhi, India</li>
                    <li>Dr. Harmeet Malhotra, IITM, Delhi, India</li>
                    <li>Dr. Manzoor Ansari, IITM, Delhi, India</li>
                    <li>Ms. Kavita Srivastva, IITM, Delhi, India</li>
                    <li>Ms. Leena Gupta, IITM, Delhi, India</li>
                    <li>Ms. Priyanka Ratan, IITM, Delhi, India</li>
                    <li>Ms. Komal Sharma, IITM, Delhi, India</li>
                </ol>
                <h3>Stage Committee</h3>
                <ol class="list">
                    <li>Ms. Rashmi Ishrawat, IITM, Delhi, India</li>
                    <li>Ms. Ankita Luke, IITM, Delhi, India</li>
                    <li>Ms. Lakshmi Kumari, IITM, Delhi, India</li>
                    <li>Ms. Parul, IITM, Delhi, India</li>
                </ol>        
                <h3>Reception and Registration Committee</h3>
                <ol class="list">
                    <li>Ms. Prabhneet Kaur, IITM, Delhi, India</li>
                    <li>Ms. Komal Sharma, IITM, Delhi, India</li>
                    <li>Ms. Sunaina, IITM, Delhi, India</li>
                </ol>   
                <h3>Sponsorship Committee</h3>
                <ol class="list">
                    <li>Dr. Vikas Bharara, IITM, Delhi, India</li>
                    <li>Dr. Gopal Singh Latwal, IITM, Delhi, India</li>
                    <li>Dr. Raghav Jain, IITM, Delhi, India</li>
                </ol>    
                <h3>Exhibition Committee</h3>
                <ol class="list">
                    <li>Dr. Mandeep Singh, IITM, Delhi, India</li>
                    <li>Dr. Dipti Gulati, IITM, Delhi, India</li>
                </ol>  
                <h3>Transport and Accommodation Committee</h3>
                <ol class="list">
                    <li>Dr. Mandeep Singh, IITM, Delhi, India</li>
                    <li>Mr. Himanshu Matta, IITM, Delhi, India</li>
                    <li>Dr. Rahul, IITM, Delhi, India</li>
                    <li>Mr. B.K. Mishra, IITM, Delhi, India</li>
                </ol> 
<h3>Hospitality Committee</h3>
<ol class="list">
    <li>Dr. Nivedita Sharma, IITM, Delhi, India</li>
    <li>Mr. Ashish Nayyar, IITM, Delhi, India</li>
    <li>Mr. Rohit, IITM, Delhi, India</li>
    <li>Ms. Priyanka Ratan, IITM, Delhi, India</li>
</ol>

<h3>Certificate & Printing Committee</h3>
<ol class="list">
    <li>Dr. Charul Nigam, IITM, Delhi, India</li>
    <li>Ms. Lakshmi Kumari, IITM, Delhi, India</li>
    <li>Ms. Sunaina, IITM, Delhi, India</li>
    <li>Mr. Rakesh Mandal, IITM, Delhi, India</li>
</ol>

<h3>Anchoring Committee</h3>
<ol class="list">
    <li>Ms. Divya Gupta, IITM, Delhi, India</li>
    <li>Ms. Shikha Dabral, IITM, Delhi, India</li>
</ol>

<h3>Decoration & Cultural Committee</h3>
<ol class="list">
    <li>Ms. Rashmi Ishrawat, IITM, Delhi, India</li>
    <li>Ms. Ankita Luke, IITM, Delhi, India</li>
    <li>Ms. Lakshmi Kumari, IITM, Delhi, India</li>
    <li>Ms. Parul, IITM, Delhi, India</li>
</ol>

<h3>Repertoire Committee & Media Coverage (Press) Committee</h3>
<ol class="list">
    <li>Mr. Sahil Dhull, IITM, Delhi, India</li>
    <li>Mr. Gautam Kumar, IITM, Delhi, India</li>
</ol>

<h3>Website Management Committee</h3>
<ol class="list">
    <li>Ms. Kavita Srivastava, IITM, Delhi, India</li>
    <li>Mr. Gautam Kumar, IITM, Delhi, India</li>
</ol>

            </div>
        </div>
    </div>
</div> -->


<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
