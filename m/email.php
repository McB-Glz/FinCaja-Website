<?php

$nombre = strip_tags($_POST['nombre']);
$email = strip_tags($_POST['email']);
$edad = strip_tags($_POST['age']);
$city = strip_tags($_POST['city']);
$sexo = strip_tags($_POST['sex']);
$ocupacion = strip_tags($_POST['ocu']);
$asunto = strip_tags($_POST['asunto']);
$comentarios = strip_tags($_POST['mensaje']);

if ($nombre=='' || $email=='' || $comentarios==''){

echo "<script>alert('Todos los campos son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require("includes/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $email;
    $mail->FromName = $nombre; 
    $mail->AddAddress("contacto@fincaja.com.mx");

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Mensaje enviado desde Pagina Web :: fincaja.com.mx";
    $mail->Body     =  "Asunto: $asunto \n<br />".
		"Nombre: $nombre \n<br />".
		"Correo electronico: $email \n<br />".
		"Edad: $edad \n<br />".
		"Ciudad: $city \n<br />".
		"Sexo: $sexo \n<br />".
		"Ocupacion: $ocupacion \n<br />".
		"Mensaje: $comentarios \n<br />";

    $mail->IsSMTP(); 
    $mail->Host = "mail.fincaja.com.mx:2525";
    $mail->SMTPAuth = true; 
    $mail->Username = "formulario@fincaja.com.mx";
    $mail->Password = "3(fRT6.7!+c5";

    if ($mail->Send())
    echo "<script>alert('Formulario Enviado');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>