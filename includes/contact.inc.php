<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Load PHPMailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values and sanitize
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate required fields
    if (!$name || !$email || !$message) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields.']);
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    try {
        $mail = new PHPMailer(true);

        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "2.qservers.net";   // QServers SMTP
        $mail->Port = 465;                // SSL port
        $mail->SMTPSecure = 'ssl';        
        $mail->Username = "contact@onyemachifoundation.com";  // your email
        $mail->Password = "@FounderUche25";       // your email password

        // Email headers
        $mail->setFrom("contact@onyemachifoundation.com", "Onyemachi Foundation");
        $mail->addAddress("contact@onyemachifoundation.com"); // receives email
        $mail->addReplyTo($email, $name); // reply goes to user

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Message from $name";

        $mail->Body = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        // Send
        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
