<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
<?php
$aid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM availability WHERE availabilityID='$aid'");  
$row = mysqli_fetch_array($result);
?>
                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Edit Availability</h1>
                        <form action="update-availability.php?id=<?php echo $row['availabilityID'] ?>" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Choose Day</label>
                                    <select name="day" class="form-select bg-white border-0">
                                    <option value="<?php echo $row['available_days'] ?>" selected>Selected: <?php echo $row['available_days'] ?></option>    
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Start Time</label>
                                    <input value="<?php echo $row['from_time'] ?>" name="from" type="time" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>End Time</label>
                                    <input value="<?php echo $row['to_time'] ?>" name="to" type="time" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Availability</button>
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