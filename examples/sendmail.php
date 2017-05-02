<?php

/**
 * This example shows sending a message using a local sendmail binary.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
//$mail->isSendmail();

$body = "<p>Hi sweetie</p> \r\n";
$body .= "<p>Hawayu doin.... <a href='http://localhost/PHPMailer/examples/'>activation link </a></p>";
$body .= "Regards";
$mail->IsSMTP(); 

$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = true;

$mail->Username = "mutegison2@gmail.com"; // My gmail username
$mail->Password = "somi28889475"; // My Gmail Password

//Set who the message is to be sent from
$mail->setFrom('mutegison2@gmail.com', '');
//Set an alternative reply-to address
$mail->addReplyTo('mutegison2@gmail.com', '');
//Set who the message is to be sent to
$mail->addAddress('polinesomi@gmail.com', 'polinesomi');
//Set the subject line
$mail->Subject = 'Greetings';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'sweet msg..';
$mail->body = 'Hello bebz..';
$mail->msgHTML($body);
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
