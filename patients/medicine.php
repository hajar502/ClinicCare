<?php include "head.php"; ?>
<?php 
$phid=$_GET['id'];
$result = mysqli_query($con,"SELECT * FROM pharmacy WHERE pharmacyID='$phid'");
$row = mysqli_fetch_array($result);
?>
<body>


<?php include "navbar.php"; ?>


<!-- Search Result Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
<!-- Blog Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medicine</h5>
                <h1 class="display-4">Pharmacy <?php echo $row['name'] ?></h1>
            </div>
            <div class="row g-5">
                
<?php
$result1 = mysqli_query($con,"SELECT * FROM medicine WHERE pharmacyID='$phid'");
if(mysqli_num_rows($result1)>0){  $n=1;  
    while($row1 = mysqli_fetch_array($result1)){
?>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="../medicine-img/<?php echo $row1['picture'] ?>" style="height:300px">
                        <div class="p-4">
                            <a class="h3 d-block" href=""><?php echo $row1['name'] ?></a>
                            <p>Price: <?php echo $row1['price'] ?> LBP
                            <br>Discount: <?php echo $row1['discount'] ?>%
                            <br>Available Quantity: <?php echo $row1['quantity'] ?> Items</p>
                        </div>
                        <div class="d-flex align-items-center border-top p-4">
                            <a class="btn btn-s btn-primary me-2" href="order-medicine.php?id=<?php echo $row1['medicineID'] ?>">Order Medicine</a>
                        </div>
                    </div>
                </div> 
               
                    
                
                <?php }} else { echo "No Medicine Found" ;} ?>
           
<?php
$result2 = mysqli_query($con,"SELECT * FROM alternatives WHERE pharmacyID='$phid'");
if(mysqli_num_rows($result2)>0){  $n=1;  
    while($row2 = mysqli_fetch_array($result2)){ 

        $medicineID = $row2['medicineID'];

$result3 = mysqli_query($con,"SELECT * FROM medicine WHERE medicineID='$medicineID'");
$row3 = mysqli_fetch_array($result3);
?>       
                    <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="../medicine-img/<?php echo $row2['picture'] ?>" style="height:300px">
                        <div class="p-4">
                            <a class="h3 d-block" href=""><?php echo $row2['name'] ?></a>
                            <p>Alternative of: <?php echo $row3['name'] ?></p>
                            <p>Price: <?php echo $row2['price'] ?> LBP
                            <br>Discount: <?php echo $row2['discount'] ?>%
                            <br>Available Quantity: <?php echo $row2['quantity'] ?> Items</p>
                        </div>
                        <div class="d-flex align-items-center border-top p-4">
                            <a class="btn btn-s btn-primary me-2" href="order-medicine.php?id=<?php echo $row2['alternativeID'] ?>">Order Medicine</a>

                        </div>
                    </div>
                    </div>
                
                <?php }} else { echo "No Alternatives Found" ;} ?>
</div>
            </div>
        </div>
    </div>
</div></div>
</div>


    <?php include "footer.php"; ?>