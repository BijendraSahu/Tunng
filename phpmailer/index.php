<?php 

	require_once('phpmailer/class.phpmailer.php');
	
	$mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "admin@jaljatimilan.in";
    $mail->Password = "Jaljatimilan";
	//$mail->SMTPSecure = "ssl";  
    $mail->Host = "mail.jaljatimilan.in";//"smtp.gmail.com";
    $mail->Port = "25";
 
    $mail->setFrom('admin@jaljatimilan.in', 'JalJatiMilan');
    $mail->AddAddress('developersatdb@gmail.com', 'Ali');
 
    $mail->Subject  =  'Check Mail';
    $mail->IsHTML(true);
    $mail->Body    = 'Hi there ,
	                  <br />
					  this mail was sent using PHPMailer...
					  <br />
					  cheers... :)';
		
	if($mail->Send())
	{
		echo "Message was Successfully Send :)";
	}
	else
	{
		$mail->SMTPDebug = 1;
		echo "Mail Error - >".$mail->ErrorInfo;
	}
		
?>