<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Work Days</h5>
                        <h1 class="display-4">Your Availability</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Day</th>
				<th>Work Time</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM availability WHERE doctorID='$did' ORDER BY availabilityID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['available_days'] ?></td>
                <td><?php echo $row['from_time'] ?> - <?php echo $row['to_time'] ?></td>
                <td><a href='edit-availability.php?id=<?php echo $row['availabilityID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a></td>
                <td><a href='delete-availability.php?id=<?php echo $row['availabilityID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No Availability Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Availability</h1>
                        <form action="save-availability.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Choose Day</label>
                                    <select name="day" class="form-select bg-white border-0">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Start Time</label>
                                    <input name="from" type="time" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>End Time</label>
                                    <input name="to" type="time" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Availability</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

<?php include "footer.php"; ?>