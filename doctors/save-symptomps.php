<?php
require "../conx.php";
$diseaseID = $_GET['id'];


$symptomp = $_POST['symptomp'];

$sql_add_query = "INSERT INTO symptomps VALUES ('','$symptomp','$diseaseID')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Symptomp is Added ');
     window.open('symptomps.php?id=$diseaseID','_self');
     </script>";

?>