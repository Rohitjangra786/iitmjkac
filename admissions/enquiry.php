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
    <title>IITM | Admissions Enquiry</title>

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
 
    <div style="height: 5vh;"></div>
   
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                 <h1 class="text-center">
                   Enquiry Form
                 </h1>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
             <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 200px;">
               <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admission Procedure</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/eligibilitycriteria.php">Eligibility Criteria</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/docs/FEE_Details.pdf" target="_blank">Fee Details (UG & PG)</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/faqs.php">FAQs</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/enquiry.php">Enquiry</a>
                    <a class="dropdown-item" href="https://iitmjanakpuri.com/admissions/management.php">Management Quota</a>
            </div>
            <div class="col-md-9">
                <div class="col-md">
                      
              <hr class="hr-maroon"/>
                       <p class="text-justify myfontsize" style="color: #4b4b4b;">
                         <div class="container">  
                         <form action="SaveQuery.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your Email ID.." required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
        
      </div>
    </div>
    
    <div class="row">
    <div class="col-25">
        <label for="contact">Contact No.</label>
      </div>
      <div class="col-75">
        <input type="text" id="contact" name="contact" placeholder="Your Contact No..." pattern="[1-9]{1}[0-9]{9}" required>
      </div>
    </div>
    
     <div class="row">
    <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="city" placeholder="Your City..." required>
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="course">Select Program</label>
      </div>
      <div class="col-75">
        <select id="course" name="course" onChange="showPer()" required>
             <option selected disabled>Select Course (MBA, MCA, BBA, BCA and BCOM(H), BA(JMC))</option>
          <!--<option value="mca">MCA LE</option>-->
          <option value="mba">MBA</option>
          <option value="mca">MCA</option>
          <option value="bca">BCA</option>
          <option value="bba">BBA</option>
          <option value="bcom">BCOM (H)</option>
          <option value="bjmc">BA(JMC)</option>
        </select>
      </div>
    </div>
    
    
    <div class="row" style="display:none;" id="r1">
     <div class="col-25">
        <label for="per12">Marks obtained in 12th<sup>th</sup></label>
      </div>
      <div class="col-75">
        <input type="text" id="per12" name="per12" placeholder="Your class 12 percentage...">
      </div>
    </div>
    
    <div class="row" style="display:none;" id="r2">
     <div class="col-25">
        <label for="perg">Marks obtained in Graduation</label>
      </div>
      <div class="col-75">
        <input type="text" id="perg" name="perg" placeholder="Your Graduation Percentage...">
      </div>
    </div>
    
    
   
    
    <div class="row">
      <div class="col-25">
        <label for="query">Query</label>
      </div>
      <div class="col-75">
        <textarea id="query" name="query" placeholder="Write something.." style="height:200px;" required></textarea>
      </div>
    </div>
    <div class="row">
   <center>   <input type="submit" value="Submit"> </center>
    </div>
  </form>
                        </div>
                
                       </p>
                  </div>
            </div>
        </div>


    </div>
    
    
    
       <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
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

function showPer()
{
   // document.write('Enquiry');
    var cr=document.getElementById("course");
   
    var crname=cr.value;
     //document.write(crname);
    var ug=document.getElementById("r1");
    var pg=document.getElementById("r2");
    //document.write(pg);
    if(crname=='bba' || crname=='bca' || crname=='bcom')
    {
        ug.style.display='block';
    }
    else
    {
        ug.style.display='none';
    }
    if(crname=='mba')
    {
        pg.style.display='block';
    }
    else
    {
        pg.style.display='none';
    }
}
</script>
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