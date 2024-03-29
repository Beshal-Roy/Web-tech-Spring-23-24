<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Count the number of selected options
    $selectedCount = 0;
    if (isset($_POST['ssc'])) $selectedCount++;
    if (isset($_POST['hsc'])) $selectedCount++;
    if (isset($_POST['bsc'])) $selectedCount++;
    if (isset($_POST['msc'])) $selectedCount++;

    // Check if at least two options are selected
    if ($selectedCount >= 2) {
        // Process the selected options
        $selectedDegrees = [];
        if (isset($_POST['ssc'])) {
            $selectedDegrees[] = $_POST['ssc'];
        }
        if (isset($_POST['hsc'])) {
            $selectedDegrees[] = $_POST['hsc'];
        }
        if (isset($_POST['bsc'])) {
            $selectedDegrees[] = $_POST['bsc'];
        }
        if (isset($_POST['msc'])) {
            $selectedDegrees[] = $_POST['msc'];
        }
        echo "Selected Degrees: " . implode(", ", $selectedDegrees);
    } else {
        echo "Please select at least two options for degrees.";
    }
} else {
    // If accessed directly without form submission
    echo "Access denied.";
}
?>