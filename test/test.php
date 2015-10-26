<?php

/* Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté */
require './PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$type = $_POST['type'];
$contenu = $_POST['textarea'];

var_dump($_POST);

$contenido = "Nombre del cliente: $nombre <br/>";
$contenido.= "Email: $email <br/>";
$contenido.= "Projecto: $type <br/>";
$contenido.= "Comentario: $contenu <br/>";

//Crear una instancia de PHPMailer
$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host = 'smtp.gmail.com';
//El puerto será el 587 ya que usamos encriptación TLS
$mail->Port = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth = true;
//Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username = "daguedar@gmail.com";
//Introducimos nuestra contraseña de gmail
$mail->Password = "1LUCHA123";
//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom('agueda.david@gmail.com', 'Mi nombre');
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
$mail->AddReplyTo('agueda.david@gmail.com', 'El de la réplica');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress('agueda.david@gmail.com', 'El Destinatario');
//Definimos el tema del email
$mail->Subject = 'Correo del cliente';
//Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
$mail->MsgHTML($contenido);
//Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
$mail->AltBody = 'This is a plain-text message body';
//Enviamos el correo
if (!$mail->Send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Enviado!";
}