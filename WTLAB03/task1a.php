<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    // Validation
    if (empty($name)) {
        echo "Name cannot be empty.";
    } else {
        // Split the name into words
        $words = explode(" ", $name);

        // Check if it contains at least two words
        if (count($words) < 2) {
            echo "Name must contain at least two words.";
        } else {
            // Check if the first character is a letter
            if (!ctype_alpha($name[0])) {
                echo "Name must start with a letter.";
            } else {
                // Check if it contains only letters, period, and dash
                if (!preg_match('/^[a-zA-Z.\- ]+$/', $name)) {
                    echo "Name can only contain letters, period, and dash.";
                } else {
                    // Validation passed, process the name
                    echo "Name: $name";
                }
            }
        }
    }
}
?>