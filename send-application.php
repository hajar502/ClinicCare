<?php
require 'conx.php';    
    

    $name=$_POST['name'];
    $phname=$_POST['phname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $street=$_POST['street'];
    $building=$_POST['building'];

    $stts = 0;


    if($pass1 == $pass2){
    $sql_add_query = "INSERT INTO pharmacy VALUES ('','$name','$phname','$phone','$state','$city','$street','$building',
    '$stts','$email','$pass1')";
    $result= mysqli_query($con,$sql_add_query);
     
    echo "<script>
    alert('Your application is sent successfully! We will reply to you very soon.');
    window.open('index.php','_self');
    </script>";
    }

    else{
    echo "<script>
    alert('Failed submitting the form! Password is not matched');
    window.open('apply-as-pharmacy.php','_self');
    </script>";
    }
?>

