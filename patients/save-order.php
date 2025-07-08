<?php
session_start();
require "../conx.php";
$pid = $_SESSION['pid'];

$mid = $_GET['mid'];
$phid = $_GET['phid'];


$qtty = $_POST['qtty'];
$address = $_POST['address'];
$payment = $_POST['payment'];

$date = date('Y-m-d');

$stts = 0;

$result = mysqli_query($con,"SELECT * FROM medicine WHERE medicineID='$mid'");
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_array($result);
$quantity = $row['quantity'];
$newQtty = $quantity - $qtty;
$sql = "UPDATE medicine SET quantity='$newQtty' WHERE medicineID='$mid'";
$result= mysqli_query($con,$sql);
}
 else {
$result1 = mysqli_query($con,"SELECT * FROM alternatives WHERE alternativeID='$mid'");
$row1 = mysqli_fetch_array($result1);
$quantity = $row1['quantity'];
$newQtty = $quantity - $qtty;
    $sql = "UPDATE alternatives SET quantity='$newQtty' WHERE alternativeID='$mid'";
    $result= mysqli_query($con,$sql);
}

if($qtty <= $quantity){
$sql_add_query = "INSERT INTO orders VALUES ('','$pid','$mid','$phid','$qtty','$address','$payment','$date','$stts')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Your order is Sent! ');
     window.open('orders.php','_self');
     </script>";
    }
    else{
        echo "<script>
        alert('Quantity requested is not available');
        window.open('order-medicine.php?id=$mid','_self');
        </script>";
    }
   


?>