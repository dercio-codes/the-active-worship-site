<?php
// echo "string";
//print_r($_POST);die();

if(isset($_POST['name']) && isset($_POST['contactNo']) && isset($_POST['email']) && isset($_POST['message'])){
	$name = $_POST['name'];
	$contact = $_POST['contactNo'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// $bodyCont = 'Name: '.$name
	// $bodyCont = .'Contact: '.$contact
	// $bodyCont = .'Email: '.$email
	// $bodyCont = .'Message: '.$message

require 'PHPMailerAutoload.php';
 
  $mail = new PHPMailer;
    //Enable SMTP debugging. 
    $mail->SMTPDebug = 0;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = 'smtp.gmail.com';
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = 'mail@activemi.co.za';
    $mail->Password = 'durban2019';
    
    //If SMTP requires TLS encryption then set it
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    
    //Password to use for SMTP authentication
    //Set who the message is to be sent from
    $mail->setFrom('mail@activemi.co.za', 'Active MI');

    $mail->addAddress('louie@activemi.co.za');
    $mail->addAddress('lwando@activemi.co.za');
    $mail->addAddress('info@activeworship.com');

    $mail->isHTML(true);         

    $mail->Subject = 'Active Worship Contact us';
    $mail->Body    = $message;
    $mail->AltBody = 'This too';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
//print_r($_POST);die('dead');
header("Location: http://www.activeworship.com/contact.php");
}
?>