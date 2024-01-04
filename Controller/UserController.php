<?php


class UserController
{

    protected $user;

    public function getUser(): mixed
    {
        return $this->user;
    }

    public function __construct()
    {
        session_start();
        if (!array_key_exists("user",$_SESSION)){
            header("Location:index.php?controller=security&action=login"); // TODO Changer la redirection quand le user n'est pas co
        } else{
            $this->user = unserialize($_SESSION["user"]);
        }
    }

    public function findAll(){
        require 'View/Pages/accueil.php';
    }



}