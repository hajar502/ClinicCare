<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                
                <h1 class="display-4"><i class="fa fa-heartbeat"></i> Diseases</h1>
                <a href="add-disease.php" class="d-inline-block btn btn-primary"><i class="fa fa-plus"></i> Add New Disease</a>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Disease No.</th>
				<th>Disease Name</th>
                <th>Relevant Specialty</th>
                <th>Symptoms</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM diseases ORDER BY diseaseID asc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){

    $specialtyID = $row['specialtyID'];
    $diseaseID = $row['diseaseID'];

    $result2 = mysqli_query($con,"SELECT * FROM specialties where specialtyID='$specialtyID'");
    $row2 = mysqli_fetch_array($result2);
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row2['name'] ?></td><td>
<?php
$result3 = mysqli_query($con,"SELECT * FROM symptomps where diseaseID='$diseaseID'");
if(mysqli_num_rows($result3)>0){     
while($row3 = mysqli_fetch_array($result3)){
    ?>
                <ul><li><?php echo $row3['symptomp'] ?></li></ul>
                <?php }} ?></td>
                <td><a href='delete-disease.php?id=<?php echo $row['diseaseID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>

			</tr>
                <?php $n++; }} else {echo "No Disease Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>