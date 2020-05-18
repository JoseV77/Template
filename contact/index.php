<?php

$msg = '';
if ((isset($_POST['name'])) && (empty ($_POST['honeypot']))) {
    $myName = $_POST['name'];
    $myEmail = $_POST['email'];
    $myQuestion = $_POST['question'];
    $person = $_POST["person"];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail.josevaleriostudent.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "phpmailer@josevaleriostudent.webhostingforstudents.com";
    $mail->Password = "myPassworD7";
    $mail->setFrom('phpmailer@josevaleriostudent.webhostingforstudents.com', 'Jose Valerio');
    $mail->addAddress('jose.valerio@pcc.edu', 'Jose Valerio');
    $mail->addReplyTo($myEmail, $myName);
        $mail->Subject = 'Ace in the Hole Contact Form';
        $mail->isHTML(true);
        $mail->Body = <<<EOT
Email: $myEmail<br>
Name: $myName<br>
I Am a: $person<br>
Question: $myQuestion
EOT;

        if (!$mail->send()) {
            echo "Mailer error" . $mail->ErrorInfo;
        } else {
          include 'success.html.php';
        }
    } else {

      include 'contact.html.php';

    }
?>
