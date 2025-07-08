<?php
require "../conx.php";

$oid = $_GET['id'];
$stts = 1;

$sql = "UPDATE orders SET status='$stts' WHERE orderID='$oid'";
$result= mysqli_query($con,$sql);

echo "<script>
     alert('Order is Delivered ');
     window.open('orders.php','_self');
     </script>";

?>