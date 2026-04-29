<?php
 date_default_timezone_set('Asia/Kolkata');
?>
<?php
    require_once('db/db.php');
    
?>
<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$per12=$_POST['per12'];
$perg=$_POST['perg'];
$course=$_POST['course'];
$query=$_POST['query'];

//$str=$fname.';'.$email.';'.$contact.';'.$per12.';'.$perg.';'.$course.';'.$query;

//echo $str;

$currenttime=time();
$dt=strftime("%B-%d-%Y %H:%M:%S", $currenttime);
$sql="insert into Enquiry(sname, email, contactno, city, per_12, per_grad, coursename, query, querydate) values(:sn, :em, :cn, :ct, :p12, :pg, :cr, :qr, :qd)";

$stmt=$con1->prepare($sql);
$stmt->bindValue(':sn', $fname);
$stmt->bindValue(':em', $email);
$stmt->bindValue(':cn', $contact);
$stmt->bindValue(':ct', $city);
$stmt->bindValue(':p12', $per12);
$stmt->bindValue(':pg', $perg);
$stmt->bindValue(':cr', $course);
$stmt->bindValue(':qr', $query);
$stmt->bindValue(':qd', $dt);
$ex=$stmt->execute();

if($ex)
{
    $res= 'Thank You!';
}
else
{
     $res= 'Temporary Error! Please try after some time.';
}
?>
<?php
echo "<script>alert('$res');</script>";
echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
?>
<!-- <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
    .button4 {border-radius: 12px;}
</style>
<div class="container"> 
    <div class="row">
        <div class="col-sm-12">
             <div class="col-sm-12 jumbotron" style="border-radius:12px;background-color: #c0c0c0;padding:35px;">
                <h1 style="text-align: center;  text-shadow: none;">
                   <?php echo $res; ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<a href="index.php" class="button button4">Back</a> -->
                