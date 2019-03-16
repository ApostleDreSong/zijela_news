	<?php
	
	require ('mail/mail_config.php'); 
	
	
		$bulkMails=$_POST['emails'];
		$cleanedEmails = str_replace(" ","",$bulkMails);
		$mailArray = explode(',', $cleanedEmails);

		$emailBody= $_POST['emailBody'];
		$subject = $_POST['subject'];
        

		for ($i=0;$i<sizeof($mailArray);$i++):
            
            if($mailArray[$i]==""){
               echo 'One of your emails is incorrect. Always ensure to remove the last comma and make sure your email addreesses are well formatted. Thank you. ';
            }
			$mail->AddAddress($mailArray[$i]);

			$mail->Subject = $subject;

			$mail->MsgHTML($emailBody);

			$mail->Send();
			$mail->ClearAllRecipients();

		endfor;

		echo "<br>ALL OTHER MAILS SENT. CONGRATULATIONS EBURUCHE";
