<?php
session_start();
require "../conx.php";
$pid = $_SESSION['pid'];

$did = $_GET['id'];


$date = $_POST['date'];
$time = $_POST['time'];
$cause = $_POST['cause'];

$dayOfWeek = date('l', strtotime($date));

$result1 = mysqli_query($con,"SELECT * FROM appointments where doctorID='$did' AND date='$date' AND time='$time'");
if(mysqli_num_rows($result1)<=0){

$result = mysqli_query($con,"SELECT * FROM availability where doctorID='$did' AND available_days='$dayOfWeek'");
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_array($result);

$start_time = $row['from_time'];
$end_time = $row['to_time'];

$timestamp = strtotime($time);
$start_timestamp = strtotime($start_time);
$end_timestamp = strtotime($end_time);

if($timestamp > $start_timestamp && $timestamp < $end_timestamp){

$stts = 0;
$sql_add_query = "INSERT INTO appointments VALUES ('','$pid','$did','$date','$time','$cause','$stts')";
$result= mysqli_query($con,$sql_add_query);

echo "<script>
     alert('Your Request is Sent! ');
     window.open('appointments.php','_self');
     </script>";
    }
    else{
        echo "<script>
        alert('You must choose time between $start_time and $end_time.');
        window.open('request-appointment.php?id=$did','_self');
        </script>";
    }
    }
else{
    echo "<script>
    alert('Doctor is not available in this day! Please choose another day.');
    window.open('request-appointment.php?id=$did','_self');
    </script>";
}
}
else {
    echo "<script>
        alert('This time is already reserved, please choose another time.');
        window.open('request-appointment.php?id=$did','_self');
        </script>";
}





?>