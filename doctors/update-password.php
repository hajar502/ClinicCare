<?php
session_start();
require_once '../conx.php';
$did = $_SESSION['did'];



    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

    if($pass1 == $pass2){


        $sql = "UPDATE doctors SET password='$pass1' WHERE doctorID='$did'";
        $result= mysqli_query($con,$sql);

echo "<script>
     alert('Password is Changed');
     window.open('profile.php','_self');
     </script>";
}
 else {
    echo "<script>
		alert('Failed! Password is not matched');
		window.open('profile.php','_self');
	</script>";
 }

?>