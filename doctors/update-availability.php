<?php
require "../conx.php";

$aid = $_GET['id'];
$day = $_POST['day'];
$from = $_POST['from'];
$to = $_POST['to'];


$sql = "UPDATE availability SET available_days='$day',from_time='$from',to_time='$to' WHERE availabilityID='$aid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Availability is Updated ');
     window.open('availabilities.php','_self');
     </script>";

?>