<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and password from the form
    $email = $_POST["email"];
   

    // Process the data (you might want to perform validation, store it in a database, etc.)

    // For demonstration purposes, let's just echo the submitted data
    echo "Email: " . $email . "<br>";
} else {
    // If the request method is not POST, redirect back to the contact form
    header("Location: contact.html");
    exit();
}
?>
