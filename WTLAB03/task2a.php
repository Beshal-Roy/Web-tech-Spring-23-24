<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email field is set and not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];

        // Validation Rules
        $errors = [];

        // A. Cannot be empty
        if (empty($email)) {
            $errors[] = "Email cannot be empty.";
        }

        // B. Must be a valid email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Output errors or process the email
        if (!empty($errors)) {
            // Display errors
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            // Process the email, for example, save it to a database
            echo "Email is valid: $email";
        }
    } else {
        echo "Email field is required.";
    }
} else {
    // If accessed directly without form submission
    echo "Access denied.";
}
?>