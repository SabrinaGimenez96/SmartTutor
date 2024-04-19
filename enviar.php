<?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre-apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['num-contacto'];
    $consulta = $_POST['mensaje'];

    $destinatario = 'gimenezsabrina244@gmail.com';
    $asunto = 'Mensaje de $nombre';

    $header = 'From: consultas@smarttutor.com.ar';
    
    $mail = mail($destinatario,$asunto, $consulta, $header);

    if($mail){
        echo "<h4>¡Mensaje enviado con exíto!</h4>";
    }
}
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre-apellido"];
    $email = $_POST["email"];
    $telefono = $_POST ["num-contacto"]
    $consulta = $_POST["mensaje"];
    
    $destinatario = "gimenezsabrina244@gmail.com";
    $asunto = "Mensaje de $nombre";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo Electrónico: $email\n\n";
    $mensaje .= "Telefóno de contacto: $telefono\n\n";
    $mensaje .= "Mensaje:\n$consulta";
    
    // Envía el correo
    mail($destinatario, $asunto, $mensaje);
    
    
    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
}*/
?>
