<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                
                <h1 class="display-4">Pharmacies</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Pharmacy No.</th>
				<th>Farmacy Name</th>
                <th>Farmacist Name</th>
                <th>Pharmacy Address</th>
                <th>Order Medicine</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM pharmacy WHERE status=1 ORDER BY name asc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['pharmacist_name'] ?></td>
                <td><i class="bi bi-geo-alt-fill"></i> <?php echo $row['state'] ?>, <?php echo $row['city'] ?>
                <?php echo $row['street'] ?>, <?php echo $row['building'] ?></td>
                <td><a href='medicine.php?id=<?php echo $row['pharmacyID'] ?>' class='btn btn-primary btn-xs'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
  <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536zM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8m-.5 1.042a3 3 0 0 0 0 5.917zm1 5.917a3 3 0 0 0 0-5.917z"/>
</svg></a></td>

			</tr>
                <?php $n++; }} else {echo "No Pharmacies Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>