<?php
require "../conx.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$price = $_POST['price'];
$specialty = $_POST['specialty'];
$state=$_POST['state'];
$city=$_POST['city'];
$street=$_POST['street'];
$building=$_POST['building'];

$img = $_FILES['img']['name'];
$imgTmp = $_FILES['img']['tmp_name'];
move_uploaded_file($imgTmp,"../doctor-img/".$img);



$sql_add_query = "INSERT INTO doctors VALUES ('','$fname','$lname','$phone','$email','$img',
'$state','$city','$street','$building','$specialty','$price','$password')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Doctor is Added ');
     window.open('doctors.php','_self');
     </script>";

?>