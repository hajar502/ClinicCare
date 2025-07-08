<?php include "head.php"; ?>
<?php $diseaseID = $_GET['id']; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Disease's Symptomps</h5>
                        <h1 class="display-4">Symptomps</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Symptomps</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM symptomps WHERE diseaseID='$diseaseID'");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['symptomp'] ?></td>
			</tr>
                <?php $n++; }} else {echo "No Symptomps Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Symptomps</h1>
                        <form action="save-symptomps.php?id=<?php echo $diseaseID ?>" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Sypmtomp Details</label>
                                    <textarea name="symptomp" class="form-control bg-white border-0"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Symptomp</button>
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