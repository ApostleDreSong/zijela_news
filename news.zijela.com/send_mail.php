<?php
include('Mail.php'); // includes the PEAR Mail class, already on your server.

$username = 'support@zijela.com'; // your email address
$password = 'people@8624'; // your email address password

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$subject=$_POST['subject'];
$message = $_POST['message'];

$from = $email_address;
$to = "ademesodamilare@gmail.com";
$body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Phone Number: $phone\n Email: $email_address\n Message \n $message";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($to, $headers, $body); // sending the email

if (PEAR::isError($mail)){
    $message = 'Sorry, your message was not sent. Kindly try again or contact us via our other channels';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"https//www.zijela.com\");
</SCRIPT>";
      
}else {
    $message = 'Thank you for contacting us. Your message has been sent.';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\" https://www.zijela.com \");
    </SCRIPT>";

}
?>