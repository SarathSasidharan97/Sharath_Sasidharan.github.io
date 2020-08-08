
<?php

 $user = $_POST['user'];
 $email= $_POST['email'];
 $mobile=$_POST['mobile'];
 $message=$_POST['message'];

$to_email = "sasidharansteven@gmail.com";

$email_from = 'webdeveloper';
$subject = 'New Message From WebDevelopers';
/*$body = "Hi, This is test email send by PHP Script";*/
$email_body= "Name:  $user.\n".
             "Email: $email.\n".
             "Mobile: $mobile.\n ".
             "Message:$message.\n";
$headers= "from : $email_from \r\n";
$headers .="Reply-To: $email \r\n";
if (mail($to_email, $subject, $email_body,$headers)) {
    echo "Email successfull sent to $to_email...";
} else {
    echo "Email sending failed...";
}
 header("location:success.html");

?>

