<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

    $to = 'sales@akshayrajindustry.com';
    $subject = 'New Website Inquiry - Akshayraj Industry';
    $body = "Name: $name\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'akshayrajindustry.com') . "\r\n";
    $headers .= "Reply-To: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'akshayrajindustry.com') . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $success = mail($to, $subject, $body, $headers);
    if ($success) {
        header('Location: contact.html?status=success');
        exit;
    }
    header('Location: contact.html?status=error');
    exit;
}
header('Location: contact.html');
exit;
