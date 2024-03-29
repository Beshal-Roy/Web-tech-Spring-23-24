<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a blood group is selected
    if (isset($_POST['group']) && $_POST['group'] !== "") {
        // Process the selected blood group
        $selectedGroup = $_POST['group'];
        echo "Selected Blood Group: $selectedGroup";
    } else {
        echo "Please select a blood group.";
    }
} else {
    // If accessed directly without form submission
    echo "Access denied.";
}
?>