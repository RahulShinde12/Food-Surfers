<?php

$name = $_POST['name'];
$recv_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'support@foodsurfers.ecoviewproperties.in'; // put admin's web mail (server's mail id)

$email_subject = "Enquiry from Food Surfer Website" ;
$email_body = "User Name : $name \r\n";
$email_body .= "User Email Id : $recv_email \r\n";
$email_body .= "User Phone Number : $phone \r\n\n";
$email_body .= $message;
 

$owner_email = "rbshinde2003@gmail.com";
$headers = "From: support@foodsurfers.ecoviewproperties.in\r\n";
$headers .= "Reply-To: support@foodsurfers.ecoviewproperties.in\r\n";
$headers .= "Return-Path: support@foodsurfers.ecoviewproperties.in\r\n";
$headers .= "CC: rbshinde2003@gmail.com\r\n";
$headers .= "BCC: rbshinde2003@gmail.com\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion(); 

$isMailSent = mail($owner_email,$email_subject,$email_body,$headers);

if($isMailSent == true)
{
    echo "Message sent successfully. Please wait until we redirect you to website...";
    sleep(3);
    echo "<script>window.location.href = '../../index.php#reservation'</script>";
}
else
{
    echo "Message not sent. Please try another contact option like phone call or email. Please wait until we redirect you to website...";
    sleep(4);
    echo "<script>window.location.href = '../../index.php#reservation'</script>";
}

?>
