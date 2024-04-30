<?php include "index.html"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Compose email message
    $to = 'martel.amanda00@gmail.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your message! We will get back to you shortly.</p>";
    } else {
        echo "<p>Oops! Something went wrong and we couldn't send your message.</p>";
    }
} else {
    // Redirect to form page if accessed directly
    header("Location: your_form_page.html");
    exit;
}
?>
