
<?php
if(!class_exists('PHPMailer')) {
    require('PHPMailer_5.2.0/class.phpmailer.php');
    require('PHPMailer_5.2.0/class.smtp.php');
}

        $mail = new PHPMailer();
		$mail->IsSMTP();    
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "";
        $mail->Port     = 25;
        $mail->Username = "support@zijela.com";
        $mail->Password = "people@8624";
        $mail->Host     = "localhost";
        $mail->Mailer   = "smtp";
        
        $mail->SetFrom("iipmonline@iipm.org", "IIPM");
        $mail->AddReplyTo("iipmonline@iipmi.org", "IIPM");
        $mail->ReturnPath="iipmonline@iipmi.org";
        $mail->IsHTML(true);