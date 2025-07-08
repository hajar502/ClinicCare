<?php
include("../conx.php");

$mid = $_GET["id"];

	 $sql="DELETE FROM alternatives WHERE alternativeID='$mid'";
	 $con->query($sql);

	                echo "<script>
                    alert('Alternative is Deleted');
                    window.open('alternatives.php?id=$mid','_self');
                </script>";
?>