<?php

$errors = [];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["lastname"])){
        $errors["lastname"] = "Veuillez saisir un identifiant";
    }
    elseif(strlen($_POST["lastname"])< 3){
        $errors['lastname'] = "Pas assez de lettres";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $errors["name"] = "Veuillez saisir un identifiant";
    }
    elseif(strlen($_POST["name"])< 3){
        $errors['name'] = "Pas assez de lettres";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["mail"])){
        $errors["mail"] = "Veuillez saisir un identifiant";
    }
    elseif(strlen($_POST["mail"])< 3){
        $errors['mail'] = "Pas assez de lettres";
    }
    elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = "L'adresse email n'est pas valide..";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["password"])){
        $errors["password"] = "Veuillez saisir un identifiant";
    }

    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

    $password = $_POST['password'];

    if(preg_match($pattern,$password)) {
        if(str_contains($_POST['password'],$_POST['name']) || str_contains($_POST['password'],$_POST['lastname'])){
            $errors['password'] = "Le mot de passe ne doit pas contenir ton Nom ou ton Prenom";
        }
    }else {
        $errors['password'] = "Le mot de passe doit contenir 1 majuscule 1 minuscle et 1 chiffre et 8 caractére mini";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["confirm_password"])){
        $errors["confirm_password"] = "veuillez saisir un mot de passe";
    }elseif($_POST['password'] != $_POST['confirm_password'] ){
        $errors['confirm_password'] ="Les mot de passe ne sont pas identiques";
    }
}

// Redirection vers index.php si le formulaire ne contient pas d'erreur

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (count($errors) == 0) {
        //header('Location: index.php');
        //();
    }
}
?>