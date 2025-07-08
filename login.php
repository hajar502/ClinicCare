<?php
session_start();
require_once 'conx.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $queryP="select * from patients where phone='".$username."' AND password='".$password."'";

    $queryA="select * from admin where email='".$username."' AND password='".$password."'";

    $queryD="select * from doctors where email='".$username."' AND password='".$password."'";

    $queryPH="select * from pharmacy where email='".$username."' AND password='".$password."' AND status=1";
    
    $resultP= mysqli_query($con,$queryP);
    $resultA= mysqli_query($con,$queryA);
    $resultD= mysqli_query($con,$queryD);
    $resultPH= mysqli_query($con,$queryPH);
    
    if(mysqli_num_rows($resultP)===1){
       $_SESSION['is_logged_in']=1;
        $rowP= mysqli_fetch_array($resultP);
        $pid = $rowP['patientID'];
        $_SESSION['pid'] = $pid;
        header("location:patients/home.php");
    }

    else if(mysqli_num_rows($resultD)===1){
        $_SESSION['is_logged_in']=1;
         $rowN= mysqli_fetch_array($resultD);
         $did = $rowN['doctorID'];
         $_SESSION['did'] = $did;
         header("location:doctors/home.php");
     }

     else if(mysqli_num_rows($resultPH)===1){
        $_SESSION['is_logged_in']=1;
         $rowPH= mysqli_fetch_array($resultPH);
         $phid = $rowPH['pharmacyID'];
         $_SESSION['phid'] = $phid;
         header("location:pharmacies/home.php");
     }

    else if(mysqli_num_rows($resultA)===1){
        $_SESSION['is_logged_in']=1;
         $rowA= mysqli_fetch_array($resultA);
         header("location:admin/home.php");
     }
    else{
        echo "<script>
		alert('Failed Signin! Please enter correct username number or email and password');
        window.open('signin.php','_self');
	</script>";
}
}
    else{
        echo "<script>
		alert('Failed Signin!');
		window.open('signin.php','_self');
	</script>";
    }


 
?>