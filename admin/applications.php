<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Pharmacy Applications</h5>
                <h1 class="display-4">Upcoming Applications</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Application No.</th>
				<th>Pharmacy Name</th>
                <th>Pharmacist Name</th>
				<th>Contact Info</th>
				<th>Address</th>
                <th>Accept/Reject</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM pharmacy  WHERE status=0 ORDER BY pharmacyID");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['pharmacist_name'] ?></td>
                <td><i class="bi bi-telephone"></i> <?php echo $row['phone'] ?>
                <br><i class="bi bi-envelope"></i> <?php echo $row['email'] ?></td>
                <td><i class="bi bi-geo-alt-fill"></i> 
                        <?php echo $row['state'] ?>, <?php echo $row['city'] ?>, <?php echo $row['street'] ?>,
                        <?php echo $row['building'] ?> Building
                    </td>
                <td>
                    <a href='accept-pharmacy.php?id=<?php echo $row['pharmacyID'] ?>' class='btn btn-success btn-xs'><i class="fa fa-check"></i></a>

                    <a href='reject-pharmacy.php?id=<?php echo $row['pharmacyID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-times"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No New Applications Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>