<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['body'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "athanki406@rku.ac.in";
    $mail->Password = "9737631312$=DatteBayoGmailRKU";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("athanki406@rku.ac.in");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if ($mail->send()) {
        $status = "Success!";
        $response = "Mail Sent Successfully!";
    } else {
        $status = "Error!";
        $response = "Something is Wrong: <br>" . $mail->ErrorInfo;
    }
    exit(json_encode(array("Status" => $status, "Response" => $response)));
}
