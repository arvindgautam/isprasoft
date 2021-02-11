#!/usr/bin/php -q
<?php
require("test/class.phpmailer.php");
$email_msg = ''; // the content of the email that is being piped
$email_addr = 'arvind@isprasoft.com'; // where the email will be sent
//$subject = 'Piped:'; // the subject of the email being sent
 
// open a handle to the email
$fh = fopen("php://stdin", "r");
 
// read through the email until the end
while (!feof($fh)){
	$email_msg .= fread($fh, 1024);
}
fclose($fh);
// send a copy of the email to your account
//mail($email_addr, $subject, "Piped Email: ".$email_msg);
$lines = explode("\n", $email_msg);

$from = "";
$subject = "";
$headers = "";
$message = "";
$is_header= true;
 
//loop through each line
for ($i=0; $i < count($lines); $i++) {
if ($is_header) {
// hear information. instead of main message body, all other information are here.
$headers .= $lines[$i]."\n";
 
// Split out the subject portion
if (preg_match("/^Subject: (.*)/", $lines[$i], $matches)) {
$subject = $matches[1];
}
//Split out the sender information portion
if (preg_match("/^From: (.*)/", $lines[$i], $matches)) {
$from = $matches[1];
}
} else {
// content/main message body information
$message .= $lines[$i]."\n";
}
if (trim($lines[$i])=="") {
// empty line, header section has ended
$is_header = false;
}
}
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "isprasoft.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "shalini@isprasoft.com";
$mail->Password = "ddli7xDH~zVM";

$mail->From = $from;
$mail->FromName = "Test from Info Piping";
$mail->AddAddress($email_addr);
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;

}



?>