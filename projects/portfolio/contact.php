<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST["send"])) 
{
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';


$mail = new PHPMailer(true);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
try {
//Server settings
$mail->SMTPDebug = true;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth = true;                                   //Enable SMTP authentication
$mail->Username = 'brijeshpandey.tops@gmail.com';                     //SMTP username
$mail->Password = 'ftdk matn tfut dwet';                               //SMTP password
$mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
$mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress('brijeshpandey.tops@gmail.com', 'Joe User');     //Add a recip//Name is optional
//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'send customers details';
$mail->Body = $_POST["name"] . "<br>" . $_POST["email"] . "<br>" . $_POST["message"];
$mail->send();
echo "<script>
alert('Message has been sent');
window.location.href='index.html';
</script>";
} catch (Exception $e) {
echo "<script>
alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
window.location.href='index.html';
</script>";
}
} else {
// If not submitted via the form, redirect to index
header('Location: index.html');
}
?>