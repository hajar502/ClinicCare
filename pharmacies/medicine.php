<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Manage Pharmacy</h5>
                        <h1 class="display-4">Medicine</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Dose</th>
                <th>Quantity</th>
                <th>Price (LBP)</th>
                <th>Discount</th>
                <th>Alternatives</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM medicine WHERE pharmacyID='$phid' ORDER BY name ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['dose'] ?> mg</td>
                <td><?php echo $row['quantity'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['discount'] ?></td>
                <td><a href='alternatives.php?id=<?php echo $row['medicineID'] ?>' class='btn btn-primary btn-xs'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
  <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z"/>
</svg></a></td>
                <td><a href='edit-medicine.php?id=<?php echo $row['medicineID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a></td>
                <td><a href='delete-medicine.php?id=<?php echo $row['medicineID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No medicine Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-4">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Medicine</h1>
                        <form action="save-medicine.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Medicine Name</label>
                                    <input name="name" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Medicine Picture</label>
                                    <input name="img" type="file" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Dose</label>
                                    <input name="dose" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Quantity</label>
                                    <input name="quantity" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Price (LBP)</label>
                                    <input name="price" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Discount</label>
                                    <input name="discount" type="number" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Medicine</button>
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