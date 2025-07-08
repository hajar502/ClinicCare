<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Find Doctor</h5>
                        <h1 class="display-4">Choose Symptoms that You feel</h1>
                    </div>
                    <!-- form -->
                <div class="col-lg-12">
                    <div class="bg-light  rounded p-5">
                        <form action="check-symptomps.php" method="POST">
                            <div class="row g-3">
                                <div class="col-6 col-sm-12">
                                    
<?php 
$displayedSymptoms = [];
$result = mysqli_query($con,"SELECT * FROM symptomps");
if(mysqli_num_rows($result)>0){ $n=1; $nbr = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)){
   $name = $row['symptomp'];
   
   if (!in_array($name, $displayedSymptoms)) {
?>                                  
                                <div class="from-check">
                                <input name="s<?php echo $n ?>" type="checkbox" value="<?php echo $row['diseaseID'] ?>" class="form-check-input">
                                <label><?php echo $row['symptomp'] ?></label>
                                </div>
                                <?php } $displayedSymptoms[] = $name; $n++; }
                                $_SESSION['n'] = $nbr; }?>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Find Doctor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    </div>
    <!-- Appointment End -->

<?php include "footer.php"; ?>