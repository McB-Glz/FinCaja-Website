<?PHP

$nombre = strip_tags($_POST['nombre']);

$email = strip_tags($_POST['email']);

$edad = strip_tags($_POST['age']);

$city = strip_tags($_POST['city']);

$sexo = strip_tags($_POST['sex']);

$ocupacion = strip_tags($_POST['ocu']);

$asunto = strip_tags($_POST['asunto']);

$comentarios = strip_tags($_POST['mensaje']);


$header = 'From: ' . $nombre . " \r\n";

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";

$header .= "Mime-Version: 1.0 \r\n";

$header .= "Content-Type: text/plain";


require("includes/class.phpmailer.php");

$message = new PHPMailer();

$message = "Mensaje enviado desde Pagina Web :: fincaja.com.mx". " \r\n";

$message .="<---------------------------------------->". " \r\n";

$message .= "Asunto: " . $asunto . " \r\n";

$message .= "Nombre: " . $nombre . " \r\n";

$message .= "Correo electrónico: " . $email . " \r\n";

$message .= "Edad: " . $edad . " \r\n";

$message .= "Estado: " . $city . " \r\n";

$message .= "Sexo: " . $sexo . " \r\n";

$message .= "Ocupación: " . $ocupacion . " \r\n";

$message .= "Mensaje: " . $comentarios . " \r\n";

$to = 'contacto@fincaja.com.mx';

$subject = 'Envio desde Web';

//$prueba = "contacto@fincaja.com.mx";


mail($to, $asunto, utf8_decode($message), $header);

echo "Tus datos fueron mandados, Muchas Gracias!";


?>

