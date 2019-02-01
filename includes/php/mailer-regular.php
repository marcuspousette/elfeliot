<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../phpmailer/vendor/autoload.php';

function error($message){
  header("Location: ../../index.php?error='$message'");
  exit();
}
function safe_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
  error('form-input-not-valid');
}
function getFormValues(){
  $array;
  $array[0] = safe_input($_POST['name']);
  $array[1] = safe_input($_POST['number']);
  $array[2] = safe_input($_POST['email']);
  $array[3] = safe_input($_POST['adress']);
  $array[4] = safe_input($_POST['subject']);
  $array[5] = safe_input($_POST['message']);
  return $array;
}
function HTML_MailMessage($array){
  $content =
  "Name: $array[0] <br>".
  "Number: $array[1] <br>".
  "E-mail: $array[2] <br>".
  "Adress: $array[3] <br>".
  "Subject: $array[4] <br>".
  "Message: $array[5] <br>";
  return $content;
}
function plain_MailMessage($array){
  $content =
  "Name: $array[0]
  Number: $array[1]
  E-mail: $array[2]
  Adress: $array[3]
  Subject: $array[4]
  Message: $array[5]";
  return $content;
}
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp-mail.outlook.com';                // Specify main and backup SMTP servers
    $mail->Host = "smtp-mail.outlook.com";
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'elliot.berthold@outlook.com';         // SMTP username
    $mail->Password = 'Husqvarna!2';                       // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('elliot.berthold@outlook.com', 'Elliot');
    $mail->addAddress('elliot.berthold@outlook.com', 'Elliot');     // Add a recipient

    /* Get the content from the form */
    $array = getFormValues();

    /* Error handling */
    if (empty($array[0]) || empty($array[1]) ||
    empty($array[2]) || empty($array[3]) ||
    empty($array[4]) || empty($array[5])){
      error('empty-form');
    }

    /* Create mail message */
    $HTML_message = HTML_MailMessage($array);
    $plain_message = plain_MailMessage($array);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Customer information from webpage';
    $mail->Body    = $HTML_message;
    $mail->AltBody = $plain_message;

    if($mail->send()){
      require './redirect.php';
      exit();
    }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
