<?php include "head.php"; ?>
<?php $mid = $_GET['id']; ?>
<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medicine</h5>
                        <h1 class="display-4">Order Medicine</h1>
                    </div>
                    <!-- form -->
                    <table class="table table-hover" style="color:black">
<?php
$result = mysqli_query($con,"SELECT * FROM medicine WHERE medicineID='$mid'");
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_array($result);
$phid = $row['pharmacyID'];

$discount = $row['discount'];
$price = $row['price'] - $row['price']*($row['discount']/100);
$result1 = mysqli_query($con,"SELECT * FROM pharmacy WHERE pharmacyID='$phid'");
$row1 = mysqli_fetch_array($result1);
?>
            <tr><th>Pharmacy Name:</th><td><?php echo $row1['name'] ?></td></tr>
            <tr><th>Pharmacist Name: </th><td><?php echo $row1['pharmacist_name'] ?></td></tr>
            <tr><th>Medicine: </th><td><?php echo $row['name'] ?> <?php echo $row['dose'] ?> mg</td></tr>
            <tr><th>Available Quantity:</th><td><?php echo $row['quantity'] ?></td></tr>
            <tr><th>Price: </th><td><?php echo $row['price'] ?> LBP</td></tr>
            <tr><th>Discount: </th><td><?php echo $discount ?> %</td></tr>
            <tr><th>Price After Discount: </th><td><?php echo $price ?> LBP</td></tr>
		    </table>
            </div>
<?php } else { 
 $result2 = mysqli_query($con,"SELECT * FROM alternatives WHERE alternativeID='$mid'");
 if(mysqli_num_rows($result2)>0){
 $row2 = mysqli_fetch_array($result2);
 $phid = $row2['pharmacyID'];
 
 $discount = $row2['discount'];
 $price = $row2['price'] - $row2['price']*($row2['discount']/100);
 $result3 = mysqli_query($con,"SELECT * FROM pharmacy WHERE pharmacyID='$phid'");
 $row3 = mysqli_fetch_array($result3);   
    ?>            
            <tr><th>Pharmacy Name:</th><td><?php echo $row3['name'] ?></td></tr>
            <tr><th>Pharmacist Name: </th><td><?php echo $row3['pharmacist_name'] ?></td></tr>
            <tr><th>Medicine: </th><td><?php echo $row2['name'] ?> <?php echo $row2['dose'] ?> mg</td></tr>
            <tr><th>Available Quantity:</th><td><?php echo $row2['quantity'] ?></td></tr>
            <tr><th>Price: </th><td><?php echo $row2['price'] ?> LBP</td></tr>
            <tr><th>Discount: </th><td><?php echo $discount ?> %</td></tr>
            <tr><th>Price After Discount: </th><td><?php echo $price ?> LBP</td></tr>
		    </table>
            </div>
            <?php } else { echo "Nothing Found"; }} ?>
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <form action="save-order.php?mid=<?php echo $mid ?>&phid=<?php echo $phid ?>" method="POST">
                            <div class="row g-3">
                                <div class="col-6 col-sm-12">
                                    <label>Quantity Needed</label>
                                    <input name="qtty" type="number" class="form-control bg-white border-0" required>
                                </div>
                               <div class="col-12 col-sm-12">
                                    <label>Builling Address</label>
                                    <input name="address" type="text" class="form-control bg-white border-0" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Payment Method</label>
                                    <select name="payment" class="form-control bg-white border-0" >
                                        <option value="Cash on Delivery">Cash on Delivery</option>
                                        <option value="Credit Card">Credit Card</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Place Order</button>
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