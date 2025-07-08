<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointments</h5>
                        <h1 class="display-4">Your Appointments</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
                <th>Doctor Name</th>
				<th>Appointment Details</th>
				<th>Status</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM appointments WHERE patientID='$pid' ORDER BY date desc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $did = $row['doctorID'];

    $result2 = mysqli_query($con,"SELECT * FROM doctors WHERE doctorID='$did'");
    $row2 = mysqli_fetch_array($result2);
?>
				<td><?php echo $n ?></td>
                <td><i class="fa fa-user-md"></i> <?php echo $row2['first_name'] ?> <?php echo $row2['last_name'] ?></td>
                <td><i class="bi bi-calendar3"></i> <?php echo $row['date'] ?> 
				<br><i class="bi bi-clock"></i> <?php echo $row['time'] ?>
                    </td>

                <?php if($row['status'] == 0){ ?>
                    <td>Pending</td>
                <?php } else if($row['status'] == 1){ ?>
                    <td class="text-success"><i class="bi bi-check-circle-fill"></i> Accepted</td>
                <?php } else { ?>
                    <td class="text-danger"><i class="bi bi-x-circle-fill"></i> Rejected</td>
                <?php } ?>
             </tr>
                <?php $n++; }} else {echo "No Appointments Found";}?>	
		    </table>
            </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
 
    <?php include "footer.php"; ?>