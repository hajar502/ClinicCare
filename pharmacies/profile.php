<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Profile</h5>
                        <h1 class="display-4">Pharmacy Profile</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
<?php
$result = mysqli_query($con,"SELECT * FROM pharmacy WHERE pharmacyID='$phid'");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
            <tr><th>Pharmacy Name:</th><td><?php echo $row['name'] ?></td></tr>
            <tr><th>Pharmacist Name:</th><td><?php echo $row['pharmacist_name'] ?></td></tr>
            <tr><th>Email: </th><td><?php echo $row['email'] ?></td></tr>
            <tr><th>Phone: </th><td><?php echo $row['phone'] ?></td></tr>
            <tr><th>Address: </th><td><?php echo $row['state'] ?>, <?php echo $row['city'] ?>, <?php echo $row['street'] ?>,
            <?php echo $row['building'] ?> Building</td></tr>
            <?php }} else {echo "Nothing Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Change Password</h1>
                        <form action="update-password.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label>Create New Password</label>
                                    <input name="pass1" type="password" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Confirm New Password</label>
                                    <input name="pass2" type="password" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Update</button>
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