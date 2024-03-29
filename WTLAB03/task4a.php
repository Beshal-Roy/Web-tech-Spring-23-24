<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if at least one option is selected
    if (isset($_POST['Gender'])) {
        // Process the selected option
        $selectedGender = $_POST['Gender'];
        echo "Selected Gender: " . $selectedGender;
    } else {
        echo "Please select at least one option for gender.";
    }
} else {
    // If accessed directly without form submission
    echo "Access denied.";
}
?>