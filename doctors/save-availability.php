<?php
session_start();
require "../conx.php";
$did = $_SESSION['did'];

$day = $_POST['day'];
$from = $_POST['from'];
$to = $_POST['to'];

$sql_add_query = "INSERT INTO availability VALUES ('','$day','$from','$to','$did')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Availability is Added ');
     window.open('availabilities.php','_self');
     </script>";

?>