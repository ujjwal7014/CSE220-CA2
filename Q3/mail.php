<?php
$to_email = $_GET["email"];
$subject = "Comfirmatory Email via PHP";
$body = "hello";
$headers = "user1@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email <br>";
} else {
    echo "Email sending failed <br>";
}
