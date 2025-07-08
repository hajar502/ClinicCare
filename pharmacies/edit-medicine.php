<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
<?php
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM medicine WHERE medicineID='$id'");  
$row = mysqli_fetch_array($result);
?>
                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Edit Medicine</h1>
                        <form action="update-medicine.php?id=<?php echo $row['medicineID'] ?>" method="POST">
                            <div class="row g-3">
                            <div class="col-12 col-sm-12">
                                    <label>Medicine Name</label>
                                    <input name="name" type="text" value="<?php echo $row['name'] ?>" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Dose</label>
                                    <input name="dose" type="number" value="<?php echo $row['dose'] ?>" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Quantity</label>
                                    <input name="quantity" type="number" value="<?php echo $row['quantity'] ?>" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Price (LBP)</label>
                                    <input name="price" type="number" value="<?php echo $row['price'] ?>" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Discount</label>
                                    <input name="discount" type="number" value="<?php echo $row['discount'] ?>" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Medicine</button>
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