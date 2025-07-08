<?php
session_start();
require "../conx.php";
$phid = $_SESSION['phid'];

$id = $_GET['id'];

$name = $_POST['name'];
$dose = $_POST['dose'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount = $_POST['discount'];




$sql = "UPDATE medicine SET name='$name',dose='$dose',quantity='$quantity',price='$price',discount='$discount' WHERE medicineID='$id'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Medicine is Updated ');
     window.open('medicine.php','_self');
     </script>";
?>