
<?php
header('Content-Type: application/json');

// Disable direct error output (avoid breaking JSON)
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// -----------------------------
// Validate fields
// -----------------------------
if (!isset($_POST['name']) || empty($_POST['name'])) {
    echo json_encode(['status' => 'error', 'message' => 'Name is required']);
    exit;
}

if (!isset($_POST['email']) || empty($_POST['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'Email is required']);
    exit;
}

if (!isset($_POST['message']) || empty($_POST['message'])) {
    echo json_encode(['status' => 'error', 'message' => 'Message is required']);
    exit;
}

// -----------------------------
// Prepare variables
// -----------------------------
$name = htmlspecialchars(trim($_POST['name']));
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message']));

// -----------------------------
// Send Email
// -----------------------------
$to = "contact@onyemachifoundation.com";  // ← CHANGE THIS
$subject = "New Contact Message from $name";

$body = "
Name: $name
Email: $email

Message:
$message
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// -----------------------------
// Mail Action
// -----------------------------
if (mail($to, $subject, $body, $headers)) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Message sent successfully!'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Email could not be sent. Your server might not support mail().'
    ]);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values and sanitize
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $subject = "Contact Form From Onyemachi Foundation";

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
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "2.qservers.net";
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl'; 
        $mail->Username = "contact@onyemachifoundation.com";
        $mail->Password = "@FounderUche25";

        $mail->setFrom($email, $name);
        $mail->addAddress("contact@onyemachifoundation.com"); // your contact email
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "Contact Form: $subject";

        $mail->Body = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->AltBody = "New Contact Form Submission\n
            Name: {$name}\n
            Email: {$email}\n
            Subject: {$subject}\n
            Message: {$message}\n
        ";

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
