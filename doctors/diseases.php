<?php include "head.php"; ?>
<?php
$result = mysqli_query($con,"SELECT * FROM doctors WHERE doctorID='$did'");
if(mysqli_num_rows($result)>0){ 
    $row = mysqli_fetch_array($result);
    $specialtyID = $row['specialty'];}
    ?>
<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                
                <h1 class="display-4"><i class="fa fa-user-md"></i> Diseases</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Disease No.</th>
				<th>Disease Name</th>
                <th>Manage Symptomps</th>
			</tr>
<?php
$result1 = mysqli_query($con,"SELECT * FROM diseases WHERE specialtyID='$specialtyID' ORDER BY name asc");
if(mysqli_num_rows($result1)>0){  $n=1;  
while($row1 = mysqli_fetch_array($result1)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row1['name'] ?></td>
                <td><a href='symptomps.php?id=<?php echo $row1['diseaseID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-eye"></i></a></td>

			</tr>
                <?php $n++; }} else {echo "No Disease Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>