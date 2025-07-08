<?php
require "../conx.php";

$name = $_POST['name'];



$sql_add_query = "INSERT INTO specialties VALUES ('','$name')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     window.open('specialties.php','_self');
     </script>";

?>