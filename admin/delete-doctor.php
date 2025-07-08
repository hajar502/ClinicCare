<?php
include("../conx.php");

$id = $_GET["id"];

	 $sql="DELETE FROM doctors WHERE doctorID='$id'";
	 $con->query($sql);

	                echo "<script>
                    alert('Doctor is Deleted');
                    window.open('doctors.php','_self');
                </script>";
?>