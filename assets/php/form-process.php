<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Se requiere un nombre ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Se requiere un email ";
} else {
    $email = $_POST["email"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Requerido un mensaje ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "daescontrol@gmail.com";

$Subject = "Mensaje recibido";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Enviado";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal :(";
    } else {
        echo $errorMSG;
    }
}

?>