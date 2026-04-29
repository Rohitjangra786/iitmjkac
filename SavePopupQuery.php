<!--<link rel="stylesheet" href="popupassets/swc.css"> 
<link rel="stylesheet" href="popupassets/popup.css"> -->
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
//$city=$_POST['city'];
//$per12=$_POST['per12'];
//$perg=$_POST['perg'];
//$course=$_POST['course'];
$query=$_POST['query'];

//$str=$fname.';'.$email.';'.$contact.';'.$per12.';'.$perg.';'.$course.';'.$query;

//echo $str;

$currenttime=time();
$dt=strftime("%B-%d-%Y %H:%M:%S", $currenttime);
echo $dt;
$sql="insert into popupbox(sname, emailid, contactno, query, querydate) values(:sn, :em, :cn, :qr, :qd)";

$stmt=$con1->prepare($sql);
$stmt->bindValue(':sn', $fname);
$stmt->bindValue(':em', $email);
$stmt->bindValue(':cn', $contact);
//$stmt->bindValue(':ct', $city);
//$stmt->bindValue(':p12', $per12);
//$stmt->bindValue(':pg', $perg);
//$stmt->bindValue(':cr', $course);
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


unset($_POST);

?>
<!-- Popup Box Starts Here -->
<div id="boxes">
<div style="top: 50%; left: 50%; display: none;" id="dialog" class="window"> 
<div id="san">
<a href="#" class="close agree"><img src="popupassets/close-icon.png" width="35" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
<!-- <img src="san-web-corner.png" width="450"> -->
<div class="container">Thank You
 </div>
</div>
</div>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>

<!-- Popup Box Ends Here -->

<?php
echo "<script>alert('$res');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
?>
<!--- <style>
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
<a href="index.php" class="button button4">Back</a>-->
<script src="popupassets/swc.js"></script>
<script src="popupassets/popup.js"></script>
                