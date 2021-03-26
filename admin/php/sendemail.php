<?php
include('../include/db.php');
$query="SELECT * FROM smtp_setup";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);


use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = $data['hostid'];
    $mail->SMTPAuth = $data['auth'];
    $mail->Username = $data['usermail']; // Gmail address which you want to use as SMTP server
    $mail->Password = $data['userpass']; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $data['port'];

    $mail->setFrom($data['usermail'], $name); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<h3>$message</h3><br><p><b>$name</b></p>";

    $mail->send();
    $alert = '<div class="alert btn-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Message Has Been Sent!. </div>';
  } catch (Exception $e){
    $alert = '<div class="alert btn-danger mb-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Failed!</strong> Error '.$e->getMessage().
    '</div>';
  }
}
?>
