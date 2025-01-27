<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture form inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $website = htmlspecialchars(trim($_POST['website'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Basic validation
    if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please provide a valid name and email address.";
        exit;
    }

    // Prepare response or save data (e.g., send email or save to database)
    $responseMessage = "Thank you, $name. We have received your message and will get back to you shortly.";

    // Optional: Log the details for reference (e.g., to a file or database)
    // file_put_contents('contact_logs.txt', "$name, $email, $phone, $website, $message\n", FILE_APPEND);

    // Send response
    echo $responseMessage;
} else {
    // If accessed without a POST request
    echo "Invalid request method.";
}
?>
