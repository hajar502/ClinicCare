<?php
session_start();
require "../conx.php";
$phid = $_SESSION['phid'];

$name = $_POST['name'];
$dose = $_POST['dose'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount = $_POST['discount'];

$img = $_FILES['img']['name'];
$imgTmp = $_FILES['img']['tmp_name'];
move_uploaded_file($imgTmp,"../medicine-img/".$img);



$sql_add_query = "INSERT INTO medicine VALUES ('','$name','$dose','$quantity','$price','$discount','$img','$phid')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Medicine is Added');
     window.open('medicine.php','_self');
     </script>";

?>