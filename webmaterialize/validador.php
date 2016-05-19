<?php
echo json_encode($_POST);
exit;
    require 'gmail.php';
    $captcha = "";
    if (isset($_POST["g-recaptcha-response"]))
        $captcha = $_POST["g-recaptcha-response"];

    if (!$captcha)
        echo "not ok";
    // handling the captcha and checking if it's ok
    $secret = "6LdAMCATAAAAAAKG2qeBZbLkywypC9uJO2eVVWjB";
    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

    if ($response["success"] != false) {
        Gmail::Send($_POST['email'],$_POST['nombre'].' '.$_POST['apellido'], 'Gracias por contactarnos. Escuela 3',$_POST['mensaje']);
        echo json_encode($_POST);
    } else {
        echo "not ok";
    }
