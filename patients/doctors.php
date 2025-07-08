<?php include "head.php"; ?>
<?php
$specialtyID = $_GET['id'];
$result1 = mysqli_query($con,"SELECT * FROM specialties WHERE specialtyID='$specialtyID'");
$row1 = mysqli_fetch_array($result1);
?>
<body>


<?php include "navbar.php"; ?>


<!-- Search Result Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
            <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Doctors</h5>
                        <h1 class="display-4"><i class="fa fa-user-md"></i><?php echo $row1['name'] ?> Doctors</h1>
                    </div>
<?php
$result = mysqli_query($con,"SELECT * FROM doctors WHERE specialty='$specialtyID'");
if(mysqli_num_rows($result)>0){   
while($row = mysqli_fetch_array($result)){
?>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="../doctor-img/<?php echo $row['picture'] ?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-8 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dr. <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></h3>
                                <p><?php echo $row1['name'] ?></p>
                            <div class="d-flex border-top p-2">
                            <a class="btn btn-s btn-primary me-2" href="doctor-details.php?id=<?php echo $row['doctorID'] ?>">Doctor Details</a>
                                <a class="btn btn-s btn-primary me-2" href="request-appointment.php?id=<?php echo $row['doctorID'] ?>">Request Appointment</a>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
<?php }} ?>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
