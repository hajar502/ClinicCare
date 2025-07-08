<?php 
session_start();
require_once '../conx.php';
$n = $_SESSION['n'];
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store selected symptomps' disease IDs
    $selectedSymptoms = [];

    // Loop through the posted values
    for ($i = 1; $i <= $n; $i++) {
        if (isset($_POST["s$i"])) {
            // Add the selected diseaseID (from checkbox value) to the array
            $selectedSymptoms[] = $_POST["s$i"];
        }
    }

    // Initialize an array to count diseaseIDs
    $diseaseCount = [];

    // Check if any symptoms were selected
    if (count($selectedSymptoms) > 0) {
        foreach ($selectedSymptoms as $diseaseID) {
            // Count the occurrences of each diseaseID
            if (isset($diseaseCount[$diseaseID])) {
                $diseaseCount[$diseaseID]++;
            } else {
                $diseaseCount[$diseaseID] = 1;
            }
        }

        // Output the count of each diseaseID
        echo "Disease Count:<br>";
        foreach ($diseaseCount as $diseaseID => $count) {
            echo "Disease ID: $diseaseID - Count: $count <br>";
        }

        // Find the maximum count
        $maxCount = max($diseaseCount);  // Get the maximum count
        $diseaseWithMaxCount = array_search($maxCount, $diseaseCount);  // Get the diseaseID with the max count

        echo "<br>Disease with the most matches:<br>";
        echo "Disease ID: $diseaseWithMaxCount - Count: $maxCount";
        header("location:suggested-doctor.php?id=$diseaseWithMaxCount");
        
    } else {
        echo "No symptoms were selected.";
    }
}
?>
