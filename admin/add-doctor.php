<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Doctors</h5>
                        <h1 class="display-4">Add New Doctor</h1>
                    </div>
                    <!-- form -->
                <div class="col-lg-12">
                    <div class="bg-light  rounded p-5">
                        <form action="save-doctor.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-6 col-sm-6">
                                    <label>First Name</label>
                                    <input name="fname" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label>Last Name</label>
                                    <input name="lname" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label>Email Address</label>
                                    <input name="email" type="email" class="form-control bg-white border-0">
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label>Phone Number</label>
                                    <input name="phone" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <lable>State</label>
                                    <select name="state" class="form-control bg-white border-0">
                                        <option value="Beirut">Beirut</option>
                                        <option value="South Lebanon">South Lebanon</option>
                                        <option value="North Lebanon">North Lebanon</option>
                                        <option value="Mount Lebanon">Mount Lebanon</option>
                                        <option value="Bekaa">Bekaa</option>
                                        <option value="Baalbek - Hermel">Baalbek - Hermel</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>City</label>
                                    <input name="city" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>street</label>
                                    <input name="street" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Building</label>
                                    <input name="building" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Image</label>
                                    <input name="img" type="file" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>specilaty</label>
                                    <select name="specialty" class="form-control bg-white border-0">
                                    <?php
$result = mysqli_query($con,"SELECT * FROM specialties ORDER BY name asc");
if(mysqli_num_rows($result)>0){  
while($row = mysqli_fetch_array($result)){
?>
                                        <option value="<?php echo $row['specialtyID'] ?>"><?php echo $row['name'] ?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Appointment price ($)</label>
                                    <input name="price" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Save Doctor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    <!-- Appointment End -->

<?php include "footer.php"; ?>