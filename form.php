<?php
    $name = $_POST['name'];
	$compani = $_POST['compani'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: PAGINA WEB MOBILEC'; 
	$to = 'contacto@mobilec.com.mx';
    $subject = $_POST['subject']; 

    $body = "Nombre: $name\n Company: $compani\n Correo de la persona: $email\n Telefono: $phone\n Mensaje:\n $message ";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:enviado.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>