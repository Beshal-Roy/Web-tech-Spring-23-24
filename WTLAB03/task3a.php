<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // Validation Rules
    $errors = [];

    // A. Cannot be empty
    if (empty($day) || empty($month) || empty($year)) {
        $errors[] = "Date of birth cannot be empty.";
    }

    // B. Must be valid numbers
    if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        $errors[] = "Date of birth must be valid numbers.";
    } else {
        // Validate the range of day, month, and year
        if (($day < 1 || $day > 31) || ($month < 1 || $month > 12) || ($year < 1953 || $year > 1998)) {
            $errors[] = "Invalid date of birth.";
        }
    }

    // Output errors or process the date of birth
    if (!empty($errors)) {
        // Display errors
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        // Process the date of birth
        echo "Date of Birth: $day/$month/$year";
    }
} else {
    // If accessed directly without form submission
    echo "Access denied.";
}
?>