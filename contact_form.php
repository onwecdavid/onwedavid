<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "onwecdavid@gmail.com";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-type: text/html; charset=UTF-8 \r\n";
    
    $body = "Name: $name <br/> Email: $email <br/> Subject: $subject <br/> Message: $message";
    
    mail($to, $subject, $body, $headers);
    
    // Optionally, you can redirect the user to a thank you page
    header('Location: thank_you.html');
}
?>