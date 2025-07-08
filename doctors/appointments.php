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
                        <h1 class="display-4">Appointments</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
                <th>Patient Name</th>
				<th>Appointment Details</th>
				<th>Status</th>
                <th>Accept/Reject</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM appointments WHERE doctorID='$did' ORDER BY date desc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $pid = $row['patientID'];

    $result1 = mysqli_query($con,"SELECT * FROM patients WHERE patientID='$pid'");
    $row1 = mysqli_fetch_array($result1);
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row1['first_name'] ?> <?php echo $row1['last_name'] ?></td>
                <td><i class="bi bi-calendar3"></i> <?php echo $row['date'] ?> 
				<br><i class="bi bi-clock"></i> <?php echo $row['time'] ?>
                    </td>
            
                <?php if($row['status'] == 0){ ?>
                    <td>Pending</td>
                    <td><a href="accept-appointment.php?id=<?php echo $row['appointmentID'] ?>" class="btn btn-success"><i class="fa fa-check"></i></a>
                    <a href="reject-appointment.php?id=<?php echo $row['appointmentID'] ?>" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
                <?php } else if($row['status'] == 1){ ?>
                    <td class="text-success">Accepted</td>
                    <td></td>
                <?php } else { ?>
                    <td class="text-danger">Rejected</td>
                    <td></td>
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