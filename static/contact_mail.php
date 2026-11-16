<?php
# Private recipient and default subject are kept server-side so the public site does not expose the inbox address.
$to = "newbirth.believers.ministries@gmail.com";
$from = "noreply@newbirthministry.github.io";
$confirm_page = "/contact_thanks";
$error_page = "/404.html";

if (isset($_POST['send'])) {
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $message_text = isset($_POST['message']) ? trim($_POST['message']) : "";
    $subject = isset($_POST['subject']) && $_POST['subject'] !== '' ? trim(strip_tags($_POST['subject'])) : "New Birth Ministry Contact Form Enquiry";

    $message = "Name: " . $name . "\r\n\r\n";
    $message .= "Email: " . $email . "\r\n\r\n";
    $message .= "Message:\r\n" . $message_text . "\r\n\r\n";

    $email_ok = filter_var($email, FILTER_VALIDATE_EMAIL);
    $headers = "From: " . $from . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    if ($email_ok) {
        $headers .= "Reply-To: " . $email . "\r\n";
    }

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        header("Location: " . $confirm_page);
        exit;
    }
}

header("Location: " . $error_page);
exit;
?>