<?


$to      = 'zubizubwork@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@scholl.local' . "\r\n" .
    'Reply-To: webmaster@scholl.local' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
	?>