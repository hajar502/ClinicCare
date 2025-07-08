<?php
include("../conx.php");

$id = $_GET["id"];

	 $sql="DELETE FROM medicine WHERE medicineID='$id'";
	 $con->query($sql);

	                echo "<script>
                    alert('Medicine is Deleted');
                    window.open('medicine.php','_self');
                </script>";
?>