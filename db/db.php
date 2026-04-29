<?php
$dsn='mysql:host=localhost; dbname=swlebqmy_Enquiry';
$con1=new PDO($dsn, 'swlebqmy_gautam', 'kavitaiitmgautam');
$con2=new PDO($dsn, 'swlebqmy_gautam', 'kavitaiitmgautam');

if($con1)
  echo "<script>alert('connected');</script>";
else
  echo "<script>alert('not connected');</script>";
?>