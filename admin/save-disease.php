<?php
require "../conx.php";

$name = $_POST['name'];
$specialty = $_POST['specialty'];



$sql_add_query = "INSERT INTO diseases VALUES ('','$name','$specialty')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Disease is Added ');
     window.open('diseases.php','_self');
     </script>";

?>