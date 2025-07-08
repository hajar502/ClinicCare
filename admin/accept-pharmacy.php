<?php
require "../conx.php";

$id = $_GET['id'];
$stts = 1;

$sql = "UPDATE pharmacy SET status='$stts' WHERE pharmacyID='$id'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Pharmacy is Accepted!');
     window.open('applications.php','_self');
     </script>";

?>