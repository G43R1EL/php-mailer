<?php
    $email = "nghernandez@ngcomputers.com.ar";
    $subject = "Mail de " . $_POST["nombre"];
    $headers = "From: " . $_POST["email"];
    $message = $_POST["mensaje"];
    $returnURL = "https://www.ngcomputers.com.ar/mailer/mailer.html";
    $failURL = "https://www.ngcomputers.com.ar/mailer/mailer.html";

    if ( mail($email, $subject, $message, $headers) ) {
        header('Location: '.$returnURL);
        die();
     } else {
        header('Location: '.$failURL);
     }
?>