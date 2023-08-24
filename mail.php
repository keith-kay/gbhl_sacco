<?php


$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: " . $first_name . " " . $last_name . " <" . $email . ">\r\n";
$recipient = "keithrhova@gmail.com";

// mail($recipient, $subject, $message, $mailheader)
// or die("Error!");



require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "keithrhova@gmail.com";
$mail->Password = "Keivarhoth_12";

$mail->setFrom($email, $first_name);
$mail->addAddress("keithrhova@gmail.com", "Keith");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo"message send";
?>