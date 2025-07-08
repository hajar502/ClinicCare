<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Orders</h5>
                        <h1 class="display-4">Your Orders</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>Date</th>
                <th>Medicine Ordered</th>
				<th>Pharmacy</th>
                <th>Quantity Ordered</th>
                <th>Total Price</th>
                <th>Payment Status</th>
				<th>Order Status</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM orders WHERE patientID='$pid' ORDER BY date desc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $phid = $row['pharmacyID'];
    $mid = $row['medicineID'];

    $result1 = mysqli_query($con,"SELECT * FROM medicine WHERE medicineID='$mid'");
    $row1 = mysqli_fetch_array($result1);

    $result2 = mysqli_query($con,"SELECT * FROM pharmacy WHERE pharmacyID='$phid'");
    $row2 = mysqli_fetch_array($result2);
?>
                <td><?php echo $row['date'] ?></td>
  <?php   if(mysqli_num_rows($result1)>0){  ?>  
                <td><?php echo $row1['name'] ?></td>
  <?php } else { 
    $result3 = mysqli_query($con,"SELECT * FROM alternatives WHERE alternativeID='$mid'");
    $row3 = mysqli_fetch_array($result3);
    ?>              
                <td><?php echo $row3['name'] ?></td>
                <?php } ?>

                <td><?php echo $row2['name'] ?></td>
                <td><?php echo $row['quantity'] ?></td>
<?php   if(mysqli_num_rows($result1)>0){  ?>            
                <td><?php echo $row['quantity']*$row1['price'] ?> LBP</td>
 <?php } else { 
    $result3 = mysqli_query($con,"SELECT * FROM alternatives WHERE alternativeID='$mid'");
    $row3 = mysqli_fetch_array($result3);
    ?>               
                <td><?php echo $row['quantity']*$row3['price'] ?> LBP</td>
                <?php } ?>
                <?php if($row['payment'] == "Cash on Delivery"){ ?>
                    <td class="text-danger"><i class="bi bi-x-circle-fill"></i> Not Paid</td>
                <?php } else { ?>
                    <td class="text-success"><i class="bi bi-check-circle-fill"></i> Paid</td>
                <?php } ?>
                </td>
                <?php if($row['status'] == 0){ ?>
                    <td>Pending</td>
                <?php } else if($row['status'] == 1){ ?>
                    <td class="text-success"><i class="bi bi-check-circle-fill"></i> Delivered</td>
                <?php } else { ?>
                    <td class="text-danger"><i class="bi bi-x-circle-fill"></i> Canceled</td>
                <?php } ?>
             </tr>
                <?php $n++; }} else {echo "No Orders Found";}?>	
		    </table>
            </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
 
    <?php include "footer.php"; ?>