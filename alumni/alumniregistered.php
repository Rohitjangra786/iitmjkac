<?php
$dsn='mysql:host=localhost; dbname=iitmjwpc_enquiry';
$con1=new PDO($dsn, 'iitmjwpc_gautam', 'iitm123+');
$con2=new PDO($dsn, 'iitmjwpc_gautam', 'iitm123+');

if($con1)
//echo 'connected';
?>
<?php
$fullname =  $_POST['st_name'];
$course =  $_POST['st_course'];
$batch =  $_POST['st_batch'];
$contactno =  $_POST['st_mobile'];
$alternate_contact =  $_POST['st_ex_mobile'];
$emailid =  $_POST['st_email'];
$address =  $_POST['st_address'];
$altype =  $_POST['first'];
$linkedin_profile =  $_POST['st_spachieve'];
$suggestions =  $_POST['st_suggestions'];
$to_connect =  $_POST['st_feedback'];

if($altype=="first")
    $alumni_type="HigherStudies";
if($altype=="second")
    $alumni_type="WorkingProfessionals";
if($altype=="third")
    $alumni_type="Enterpreneur";
    
//echo $alumni_type;
/*
`id`, `fullname`, `course`, `batch`, `contactno`, `alternate_contact`, `emailid`, `address`, `alumni_type`, `linkedin_profile`, `suggestions`, `to_connect`
*/

$sql = "INSERT INTO alumni_new(fullname, course, batch, contactno, alternate_contact, emailid, address, alumni_type, linkedin_profile, suggestions, to_connect) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $con1->prepare($sql);
$stmt->execute([$fullname, $course, $batch, $contactno, $alternate_contact, $emailid, $address, $alumni_type, $linkedin_profile, $suggestions, $to_connect]);


$statement = $con1->prepare("SELECT MAX(id) as max_id FROM alumni_new");
$statement->execute();
$mid = $statement->fetchColumn();

if($alumni_type=="HigherStudies")
{
//`id`, `course_pursuing`, `specialization`, `university_name`, `completition_year`
$course_pursuing = $_POST['st_hs_course'];
$specialization = $_POST['st_hs_special'];
$university_name = $_POST['st_hs_univ'];
$completion_year = $_POST['st_completion_year'];
//echo $course_pursuing.' '.$specialization.' '.$course_pursuing.' '.$completion_year.' '.$mid;


$sql1 = "INSERT INTO HigherStudies(id, course_pursuing, specialization, university_name, completion_year) VALUES (?,?,?,?,?)";
$stmt1= $con1->prepare($sql1);
$stmt1->execute([$mid, $course_pursuing, $specialization, $university_name, $completion_year]);

if($stmt1)
{
    $res= 'Thank You for Registering!';
}
else
{
     $res= 'Temporary Error! Please try after some time.';
}
echo "<script>alert('$res');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}

if($alumni_type=="WorkingProfessionals")
{
$organization_name = $_POST['st_wi_nameadd'];
$designation = $_POST['st_wi_job'];
$department = $_POST['st_wi_dept'];
$experience = $_POST['st_experience'];
//`id`, `organization_name`, `designation`, `department`, `experience`
$sql = "INSERT INTO WorkingProfessionals(id, organization_name, designation, department, experience) VALUES (?,?,?,?,?)";
$stmt= $con1->prepare($sql);
$stmt->execute([$mid, $organization_name, $designation, $department, $experience]);

if($stmt)
{
    $res= 'Thank You for Registering!';
}
else
{
     $res= 'Temporary Error! Please try after some time.';
}
echo "<script>alert('$res');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}

if($alumni_type=="Enterpreneur")
{

$firm_name = $_POST['st_de_orgname'];
$firmaddress = $_POST['st_de_orgadd'];
$firm_type = $_POST['st_firmtype'];
$firmcontact_no = $_POST['st_de_orgmob'];
$designation = $_POST['st_de_orgprod'];
$running_since = $_POST['st_de_businessrunning'];
//`id`, `firm_name`, `address`, `firm_type`, `firmcontact_no`, `designation`, `running_since`
$sql = "INSERT INTO Enterpreneur(id, firm_name, address, firm_type, firmcontact_no, designation, running_since) VALUES (?,?,?,?,?,?,?)";
$stmt= $con1->prepare($sql);
$stmt->execute([$mid, $firm_name, $firmaddress, $firm_type, $firmcontact_no, $designation, $running_since]);
if($stmt)
{
    $res= 'Thank You for Registering!';
}
else
{
     $res= 'Temporary Error! Please try after some time.';
}
echo "<script>alert('$res');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}
?>