<?php
session_start();
require "../conx.php";
$phid = $_SESSION['phid'];

$mid = $_GET['id'];

$name = $_POST['name'];
$dose = $_POST['dose'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount = $_POST['discount'];




$sql = "UPDATE alternatives SET name='$name',dose='$dose',quantity='$quantity',price='$price',discount='$discount' WHERE alternativeID='$mid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Alternative is Updated ');
     </script>";
?>