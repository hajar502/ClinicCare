<?php
include("../conx.php");

$aid = ($_GET["id"]);

	 $sql="DELETE FROM availability WHERE availabilityID='$aid'";
	 $con->query($sql);

	                echo "<script>
                    alert('Availability is Deleted');
                    window.open('availabilities.php','_self');
                </script>";
?>