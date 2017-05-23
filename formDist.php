<?php
    $name = $_POST['name'];
	$last_name = $_POST['last_name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['ciudad'];
	$pais = $_POST['pais'];
    $message = $_POST['message'];
    $from = 'From: PAGINA WEB MOBILEC'; 
	$to = 'contacto@mobilec.com.mx';
    $subject = 'Afiliarme - Distribuidor'; 

    $body = "Nombre: $name\n Apellidos: $last_name\n Correo de la persona: $email\n Telefono: $phone\n Ciudad: $city\n Pais: $pais\n Mensaje:\n  $message ";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:enviado.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>