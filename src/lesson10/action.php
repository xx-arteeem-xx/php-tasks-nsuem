<?php
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    $ipAddress = $_SERVER['REMOTE_ADDR'];

    $dateTime = date('Y-m-d H:i:s');

    $keywords = ['spam', 'violation', 'alert'];

    foreach ($keywords as $keyword) {
        if (stripos($comment, $keyword) !== false) {
            $to = 'admin@example.com'; 
            $subject = 'Alert: Suspicious Comment Detected';
            $message = "Suspicious comment detected:\n\nComment: $comment\nIP Address: $ipAddress";
            $headers = "From: no-reply@example.com";

            mail($to, $subject, $message, $headers);
            break;
        }
    }

    echo "Спасибо, $name! Ваше сообщение отпралено!";
?>