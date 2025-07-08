<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM doctors WHERE doctorID='$id'");
$row = mysqli_fetch_array($result);
$specialtyID = $row['specialty'];

$result2 = mysqli_query($con,"SELECT * FROM specialties where specialtyID='$specialtyID'");
    $row2 = mysqli_fetch_array($result2);
?>
<!-- About Start -->
<div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="../doctor-img/<?php echo $row['picture'] ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                <table class="table table-hover" style="color:black">
                    <tr>
                        <th>Full Name</th>
                        <td><i class="fa fa-user"></i>
                        <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><i class="bi bi-geo-alt-fill"></i> 
                        <?php echo $row['state'] ?>, <?php echo $row['city'] ?>, <?php echo $row['street'] ?>,
                        <?php echo $row['building'] ?> Building
                    </td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td><i class="fa fa-envelope"></i> <?php echo $row['email'] ?></td>
                    </tr> 
                    <tr>
                        <th>Phone Number</th>
                        <td><i class="bi bi-telephone-fill"></i> +961 - <?php echo $row['phone'] ?></td>
                    </tr> 
                    <tr>
                        <th>Specialty</th>
                        <td><i class="bi bi-award"></i> <?php echo $row2['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Appointment Fees</th>
                        <td><i class="bi bi-cash"></i> <?php echo $row['appointment_fee'] ?> $</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




<?php include "footer.php"; ?>