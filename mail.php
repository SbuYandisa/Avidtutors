<?php
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true); // Create a new PHPMailer instance

    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify the SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'madingayandisa@gmail.com'; // SMTP username
    $mail->Password = 'zqyngodoqwavtjii'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable encryption, 'tls' or 'ssl'
    $mail->Port = 587; // TCP port to connect to

    $mail->setFrom($_POST['email'], $_POST['name']); // Set the sender's email and name
    $mail->addAddress('madingayandisa@gmail.com', 'Yandisa'); // Add a recipient email and name
    $mail->Subject = $_POST['subject']; // Set the email subject
    $mail->Body = $_POST['message']; // Set the email body

    if ($mail->send()) {
        include 'emailSent.html';
    } else {
        echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
    }

?>