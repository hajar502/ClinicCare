<?php
require_once 'conx.php';

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $birthdate=$_POST['birthdate'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $street=$_POST['street'];
    $building=$_POST['building'];
    $houseNbr=$_POST['houseNbr'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

    if($pass1 == $pass2){
    $sql_add_query = "INSERT INTO patients VALUES ('','$fname','$lname','$gender','$birthdate','$phone','$email','$state','$city',
    '$street','$building','$houseNbr','$pass1')";
    $result= mysqli_query($con,$sql_add_query);
     header("location:signin.php");
    }
    else {
        echo "<script>
		alert('Failed Registration! Password is not matched');
		window.open('signup.php','_self');
	</script>";
    }

?>

