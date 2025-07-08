<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Diseases</h5>
                        <h1 class="display-4">Add New Disease</h1>
                    </div>
                    <!-- form -->
                <div class="col-lg-12">
                    <div class="bg-light  rounded p-5">
                        <form action="save-disease.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-6 col-sm-12">
                                    <label>Disease Name</label>
                                    <input name="name" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
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
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Save Disease</button>
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