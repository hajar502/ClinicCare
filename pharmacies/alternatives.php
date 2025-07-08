<?php include "head.php"; ?>
<?php $mid = $_GET['id']; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Manage Pharmacy</h5>
                        <h1 class="display-4">Alternatives</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Medicine Name</th>
                <th>Alternative For</th>
				<th>Dose</th>
                <th>Quantity</th>
                <th>Price (LBP)</th>
                <th>Discount</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM alternatives WHERE pharmacyID='$phid' and medicineID='$mid' ORDER BY name ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){

$result1 = mysqli_query($con,"SELECT * FROM medicine WHERE pharmacyID='$phid' and medicineID='$mid'");
while($row1 = mysqli_fetch_array($result1)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row1['name'] ?></td>
                <td><?php echo $row['dose'] ?> mg</td>
                <td><?php echo $row['quantity'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['discount'] ?></td>
                 <td><a href='edit-alternative.php?id=<?php echo $row['alternativeID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a></td>
                <td><a href='delete-alternative.php?id=<?php echo $row['alternativeID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }}} else {echo "No alternative Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-4">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Alternative</h1>
                        <form action="save-alternative.php?id=<?php echo $mid ?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Alternative Name</label>
                                    <input name="name" type="text" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Alternative Picture</label>
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
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Alternative</button>
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