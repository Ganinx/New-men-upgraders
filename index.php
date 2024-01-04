<?php
require "auto-loader.php";
require  "View/Parts/style.php";

if (empty($_GET)){
    header("Location: index.php?controller=page&action=accueil"); //TODO si rien dans url redirige vers la page accueil
}

if($_GET["controller"] == "page"){
    $page = new UserController();

    if($_GET["action"] == "accueil"){
        $page->findAll();
    }
}
//TODO Modif Immmmportant !!!!!!!!!!!!
//TODO juste modif le premier Get SI besoin


//TODO Modif Immmmportant !!!!!!!!!!!!
//TODO juste modif le premier Get SI besoin

if($_GET["controller"] == "security") {
    $security = new SecurityController();

    if ($_GET["action"] == "register") {
        $security->register();
    }
    if ($_GET["action"] == "login") {
        $security->login();
    }
    if ($_GET["action"] == "logout") {
        $security->logout();
    }
}