<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                
                <h1 class="display-4"><i class="fa fa-stethoscope"></i> specialties</h1>
                <a href="add-specialty.php" class="d-inline-block btn btn-primary"><i class="fa fa-plus"></i> Add New Specialty</a>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Specialty No.</th>
				<th>Specialty Name</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM specialties ORDER BY name asc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>

			</tr>
                <?php $n++; }} else {echo "No Specialties Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>