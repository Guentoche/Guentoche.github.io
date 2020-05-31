<php
if($_POST){
	$name=$POST['name']
	$first_name = $POST['firstname'];
	$email=$POST['email'];
	$objet=$POST['objet'];
	$message=$POST['message'];
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers.="From: $name <$email>\r\n\Replay-to: $name <$email>\nX-Mailer:PHP";
	$subject="$objet";
	$destinataire="pean.theo@hotmail.fr";
	$body="$message";
	if(mail($destinataire,$subject,$body,$headers)) {
		$response['status']='success';
		$response['msg']='your mail is sent';
	} else {
		$response['status']='error';
		$response['msg']='Something gone wrong';
	}
	echo json_encode($response);
}
?>