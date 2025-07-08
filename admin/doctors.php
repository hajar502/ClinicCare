<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                
                <h1 class="display-4"><i class="fa fa-user-md"></i> Doctors</h1>
                <a href="add-doctor.php" class="d-inline-block btn btn-primary"><i class="fa fa-plus"></i> Add New Doctor</a>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Doctor No.</th>
				<th>Doctor Name</th>
				<th>Contact Info</th>
				<th>Specialty</th>
                <th>Appointment Fees</th>
                <th></th>
                <th></th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM doctors ORDER BY doctorID asc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $specialtyID = $row['specialty'];

    $result2 = mysqli_query($con,"SELECT * FROM specialties where specialtyID='$specialtyID'");
    $row2 = mysqli_fetch_array($result2);
    
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                <td><i class="bi bi-telephone-fill"></i> <?php echo $row['phone'] ?><br><i class="fa fa-envelope"></i> <?php echo $row['email'] ?></td>
                <td><?php echo $row2['name'] ?></td>
                <td><?php echo $row['appointment_fee'] ?> $</td>
                <td><a href='doctor-details.php?id=<?php echo $row['doctorID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-eye"></i></a></td>
                <td><a href='delete-doctor.php?id=<?php echo $row['doctorID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>

			</tr>
                <?php $n++; }} else {echo "No Doctors Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>