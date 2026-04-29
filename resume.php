<?php
//error_reporting(0);

?>
<?php
  include("header.php");
  include("navbar1.php");
  
  //echo $_SERVER['DOCUMENT_ROOT'];
?>

<style>
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

.col-50 {
  float: left;
  width: 20%;
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

<div class="container container1 mt-10">
  <div class="row">
    <div class="col-sm-12">
      <ol class="list-inline my_breadcrumb mt-10">
        <li><a href="#" class="text-danger">Faculty</a></li>
        <li>/</li>
        <li><a href="#" class="text-danger">Career</a></li>
      </ol>
    </div>
  </div>
  <div class="row pt-10">
    <div class="col-sm-9">
      <div class="page-title font-family-1 mt-10">Career</div>
      <hr class="hr-maroon" />
    
    
<div class="container">
 <!--   <h1>Admission Enquiry Form</h1><br/> -->
  <form action="resume.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Surname.." required>
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
        <label for="fname">Department / Specialization</label>
      </div>
      <div class="col-75">
        <input type="text" id="dept" name="dept" placeholder="Specialization.." required>
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="query">Additional Information</label>
      </div>
      <div class="col-75">
        <textarea id="add" name="addinfo" placeholder="Write something.." style="height:100px;" required></textarea>
      </div>
    </div>
    <center> <div class="row">
        <div class="col-md-6">
        <div class="col-50">
         <label for="myfile">Select a file:
      </div>
      <div class="col-50">
        <input type="file" id="myfile" name="myfile" style="margin-top:10px;">
      </div>
      
   </div>
</div>
</center>
    <div class="row">
   <center>   <input type="submit" value="Submit" name="Submit"> </center>
    </div>
  </form>
  
  <?php
   // session_start();
  ?>
  <?php

function randomString($length = 3) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
?>


<?php
//echo '<h2 style="margin-left:500px;">Uploaded file is: '.$_FILES["myfile"]["name"].'</h2>';

if(isset($_POST["Submit"]))
{
if(isset($_FILES['myfile'])){
		$errors= array();
		$file_name = $_FILES['myfile']['name'];
		$file_size =$_FILES['myfile']['size'];
		$file_tmp =$_FILES['myfile']['tmp_name'];
		$file_type=$_FILES['myfile']['type'];   
		$file_ext=strtolower(end(explode('.',$_FILES['myfile']['name'])));
		$ext = end((explode(".", $file_name)));
		$expensions= array("doc","docx", "pdf"); 		
		if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a doc, docx, or pdf file.";
		}
	/*	if($file_size > 8097152){
		$errors[]='File size must be less than 2 MB';
		}*/				
		if(empty($errors)==true){
		    $fn='abc111.docx';
		    $str=randomString(3);
		    $x=$_POST['fname'];
		    $y=$_POST['lname'];
		    $z=$_POST['dept'];
		    $fn=$x.''.$y.''.$z.''.$str;
		    $fn=$fn.'.'.$ext;
		 //   echo $fn;
		    $pathto="/home/iitmjwpc/public_html/resumeuploads/".$fn;
			move_uploaded_file($file_tmp,$pathto);
                     	echo "<h3 style='margin-left:300px;'> . </h3>";
                     //	echo "<h3 style='margin-left:300px;'> File Uploaded </h3>";

		}else{
			print_r($errors);
		}
	//	$_SESSION['filepath']=$fn;
	
	
	
 date_default_timezone_set('Asia/Kolkata');


    require_once('db/db.php');
 //   session_start();


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$dept=$_POST['dept'];
$addinfo=$_POST['addinfo'];
//$filepath=$_SESSION['filepath'];
$filepath=$fn;
// `r_id`, `cname`, `surname`, `emailid`, `contactno`, `department`, `info`, `filepath`, `dateuploaded`SELECT * FROM `resume` WHERE 1


//echo $str;

$currenttime=time();
$dt=strftime("%B-%d-%Y %H:%M:%S", $currenttime);
$sql="insert into resume(cname, surname, emailid, contactno, department, info, filepath, dateuploaded) values(:sn, :em, :cn, :ct, :p12, :pg, :cr, :qr)";

$stmt=$con1->prepare($sql);
$stmt->bindValue(':sn', $fname);
$stmt->bindValue(':em', $lname);
$stmt->bindValue(':cn', $email);
$stmt->bindValue(':ct', $contact);
$stmt->bindValue(':p12', $dept);
$stmt->bindValue(':pg', $addinfo);
$stmt->bindValue(':cr', $filepath);
$stmt->bindValue(':qr', $dt);

$ex=$stmt->execute();

if($ex)
{
    $res= 'Your Resume is Saved!';
}
else
{
     $res= 'Temporary Error! Try Again';
}
echo $res;
unset($_POST);
sleep(30);
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}

	    
		//echo $x.' '.$y;
	}


?>


<?php


//ini_set('display_errors', TRUE);
//header('Location: http://www.iitmjanakpuri.com');


?>
</div>
    </div>
    
  </div>
</div>

<?php
	include("footer.php");
?>
<script type="text/javascript">document.title="IITM Janakpuri | Best College of IP University | Best Placements in IT";</script>
    
 
