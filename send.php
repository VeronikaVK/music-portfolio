<?php
		$nome = $_POST['nome'];		
        $cognome = $_POST['cognome'];
		$text = $_POST['text'];
		$email = $_POST['email'];
		echo $text;
		$from = 'Contact Form'; 
		$to = 'veronika.krasteva95@abv.bg'; 
		$subject = 'Message from Contact Form ';


		$body = "Nome: $nome\n Cognome: $cognome\n E-Mail: $email\n Text:\n $text";
		
		if (mail ($to, $subject, $body, $from)) {
			 echo '<p>Il tuo alloggio &egrave; stato inserito correttamente</p>'; } //Messaggio che apparirà sotto il form di aggiunta tramite msg

					else { echo '<p>Si e verificato un errore ' . mysql_error() .'</p>'; } //eventuale messaggio di errore

?>