<?php
header('Content-Type: application/json');

function respond($ok, $message) {
    echo json_encode(['success' => $ok, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request method');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$subject = trim($_POST['subject'] ?? 'Contact Form Submission');
$to = 'you@example.com'; // TODO: Replace with your email address

if (!$name || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Invalid form data');
}

$body = "Name: $name\nEmail: $email\nMessage:\n$message";
$headers = "From: $name <$email>";

if (mail($to, $subject, $body, $headers)) {
    respond(true, 'success');
} else {
    respond(false, 'Mail send failed');
}
?>
