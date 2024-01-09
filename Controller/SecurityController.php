<?php



class SecurityController
{

    private $userManager;

    public function __construct()
    {
        $this->userManager = new SecurityManager();
    }

    public function login(){

        $error = false;

        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $user = $this->userManager->findByEmail();

            if ($user){

                $errors = $this->isValidRegister();

                if (password_verify($_POST["password"], $user->getPassword())){

                    session_start();

                    $_SESSION["user"] = serialize($user);

                    header("Location: index.php?controller=security&action=list"); // TODO redirection apres la conection
                }else {
                    $error = true;
                }
            }else{
                $error =true;
            }
        }if (array_key_exists("user",$_SESSION)){
            header("Location: index.php?controller=page&action=accueil"); // TODO redirection si te et deja conecter
        }

        require "View/Security/login.php"; // TODO Changer le require si besoins
    }

    public function register(){

        session_start();

        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $errors = $this->isValidRegister();

            if (count($errors)== 0){

                $user = new User(null,$_POST["firstname"],$_POST["lastname"],$_POST["email"],password_hash($_POST["password"],PASSWORD_DEFAULT));

                $this->userManager->add($user);

                header("Location: index.php?controller=page&action=accueil"); //TODO la création c'est bien passer redirection sur la page login
            }

        }
        if (array_key_exists("user",$_SESSION)){

            header("Location: index.php?controller=page&action=accueil"); // TODO redirection si te et deja conecter
        }
        require 'View/Security/register.php'; // TODO Changer le require si besoins
    }

    private function isValidRegister(){

        $errors = [];

        if (empty($_POST["firstname"])){
            $errors["firstname"] = "Veuillez entrer un prénom";
        }elseif (strlen($_POST["firstname"]) > 50){
            $errors["firstname"] = "Votre prénom est trop long";
        }elseif (!preg_match('/^[A-Z-a-z]+$/',$_POST["firstname"])){
            $errors["firstname"] = "Le prénom ne doit contenir que des lettres";
        }
        if (empty($_POST["lastname"])){
            $errors["lastname"] = "Veuillez entrer un nom de famille";
        }elseif (strlen($_POST["lastname"]) > 50){
            $errors["lastname"] = "Votre nom de famille est trop long";
        }elseif (!preg_match('/^[A-Z-a-z]+$/',$_POST["lastname"])){
            $errors["lastname"] = "Le nom ne doit contenir que des lettres";
        }
        if(empty($_POST["email"])){
            $errors["email"] = "Veuillez entrer un email";
        }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "L'email est invalide";
        }elseif (!is_null($this->userManager->findByEmail())){
            $errors["email"] = "Email déjà utilisé";
        }
        if(empty($_POST["password"])){
            $errors["password"] = "Veuillez entrer un password";
        }elseif(strlen($_POST["password"] )< 9){
            $errors["password"] = 'Le mot de passe doit contenir 8 caractéres minimum';
        }elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^\w\s]).{8,}$/', $_POST["password"])){
            $errors["password"] = 'Le mot de passe doit contenir: <ul>
                                        <li>Une majuscule minimum</li>
                                        <li>Une minuscule minimum</li>
                                        <li>Un caractère spécial minimum</li>
                                        <li>Un chiffre minimum</li>
                                        </ul>';
        }
        if(empty($_POST["confirm-password"])){
            $errors["confirm-password"] = "Veuillez confirmer votre mot de passe";
        }elseif($_POST['password'] != $_POST['confirm-password']){
            $errors["confirm-password"] = "Veuillez mettre le meme mot de passe";
        }

        return $errors;
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php?controller=security&action=login"); // TODO redirection apres la déconection
    }

}