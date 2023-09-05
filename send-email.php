<?php

phpinfo();

// (A) INSTALL PHP MAILER FIRST!
// https://github.com/PHPMailer/PHPMailer
// https://getcomposer.org/
// composer require phpmailer/phpmailer

// (B) LOAD PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";

// (C) SET MAIL
$mail = new PHPMailer;
$mail->setFrom("caroleatierney@email.com");
// $mail->addAddress("jon@doe.com");
// $mail->addCC("joe@doe.com");
// $mail->addBCC("joy@doe.com");
$mail->Subject = "Test Email";
$mail->Body = "This is a test email message.";

// (D) SEND!
echo $mail->send()
  ? "Mail sent"
  : "Error sending mail" . $mail->ErrorInfo ;

//    if (!mail(TO, SUBJECT, MESSAGE)) { print_r(error_get_last()); }

   ?>


// $firstName = $_POST["firstName"];
// $lastName = $_POST["lastName"];
// $email = $_POST["email"];
// $subject = $_POST["subject"];
// $message = $_POST["message"];

// require "vendor/autoload.php";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// $mail = new PHPMailer(true);

// $mail - >isSMTP();
// $mail - >SMTPAuth = true;

// $mail - >Host = "smtp.gmail.com";
// $mail - >Userneme = "caroleatierney@gmail.com";
// $mail - >Password = "BestJob15!"

// $mail - >SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail - >Port = 587;

// $mail - >setFrom($email, $firstName, $lastName);
// $mail - >addAddress("caroleatierney@gmail.com", "Carole");

// $mail - >Subject = $subject;
// $mail - >Body = $message;

// $mail - >send();

// $to = "jon@doe.com";
// $subject = "Test Email";
// $message = "This is a test email message.";



// echo mail($to, $subject, $message)
//   ? "OK" : "ERROR" ;


// echo "email was sent" 