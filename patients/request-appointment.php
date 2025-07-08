<?php include "head.php"; ?>
<?php $did = $_GET['id']; ?>
<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointments</h5>
                        <h1 class="display-4">Book an Appointment</h1>
                    </div>
                    <!-- form -->
                <div class="col-lg-12">
                    <div class="bg-light  rounded p-5">
                        <form action="save-appointment.php?id=<?php echo $did ?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-6 col-sm-6">
                                    <label>Appointment Date</label>
                                    <input name="date" type="date" class="form-control bg-white border-0" required>
                                </div>
                               <div class="col-12 col-sm-6">
                                    <label>Appointment Time</label>
                                    <input name="time" type="time" class="form-control bg-white border-0" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Cause of Visit</label>
                                    <input name="cause" type="text" class="form-control bg-white border-0" >
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Request</button>
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