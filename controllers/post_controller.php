<?php

//var_dump($_POST);

$msg = $_POST['msg'];
$errors = [];

if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {
    $errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['mail'] = "Vous n'avez pas renseigné votre e-mail";
}
if (!array_key_exists('objet', $_POST) || $_POST['objet'] == '') {
    $errors['objet'] = "Vous n'avez pas renseigné l'objet de votre message";
}
if (!array_key_exists('msg', $_POST) || $_POST['msg'] == '') {
    $errors['msg'] = "Vous n'avez pas renseigné votre message";
}


session_start();
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    // redirection
    header('location: ../src/vues/contact.php');
} else {
    $_SESSION['success'] = 1;
    $headers = 'FROM: ' . $_POST['email'];
    mail('djeyrea@gmail.com', 'Message de ' . $_POST['nom'] . " " . $_POST['objet'] . ' via le formulaire de contact', $_POST['message'], $headers);
    //mail('djeyrea@gmail.com', 'formulaire de contact', $msg, $headers);
};
