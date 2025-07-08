<?php
include("../conx.php");

$id = $_GET["id"];

	 $sql="DELETE FROM pharmacy WHERE pharmacyID='$id'";
	 $con->query($sql);

	                echo "<script>
                    alert('Pharmacy is Deleted');
                    window.open('pharmacies.php','_self');
                </script>";
?>