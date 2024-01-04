<?php
        session_start();
        ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/compteur.css">
    <link rel="icon" type="image/png" href="images/Logo-nmu4.png"/>
    <title>Compteur batate</title>
</head>
<body>
<?php include "Header.php"?>

<?php

$compteur1 = isset($_SESSION["user"]) ? $_SESSION["user"] : 0;
if (!array_key_exists("user", $_SESSION)) {
    $_SESSION["user"] = 0;
}

if (array_key_exists("score", $_GET)) {
    if ($_GET["score"] === "plus") {
        $compteur1 = $_SESSION["user"];
        $compteur1 += 1;
        $_SESSION["user"] = $compteur1;
    } elseif ($_GET["score"] === "moin") {
        $compteur1 = $_SESSION["user"];
        $compteur1 -= 1;
        $_SESSION["user"] = $compteur1;
    }
}
$compteur2 = isset($_SESSION["user2"]) ? $_SESSION["user2"] : 0;

if (!array_key_exists("user2", $_SESSION)) {
    $_SESSION["user2"] = 0;

}

if (array_key_exists("score2", $_GET)) {
    if ($_GET["score2"] === "plus2") {
        $compteur2 = $_SESSION["user2"];
        $compteur2 += 1;
        $_SESSION["user2"] = $compteur2;
    } elseif ($_GET["score2"] === "moin2") {
        $compteur2 = $_SESSION["user2"];
        $compteur2 -= 1;
        $_SESSION["user2"] = $compteur2;
    }
}
$compteur3 = isset($_SESSION["user3"]) ? $_SESSION["user3"] : 0;

if (!array_key_exists("user3", $_SESSION)) {
    $_SESSION["user3"] = 0;

}

if (array_key_exists("score3", $_GET)) {
    if ($_GET["score3"] === "plus3") {
        $compteur3 = $_SESSION["user3"];
        $compteur3 += 1;
        $_SESSION["user3"] = $compteur3;
    } elseif ($_GET["score3"] === "moin3") {
        $compteur3 = $_SESSION["user3"];
        $compteur3 -= 1;
        $_SESSION["user3"] = $compteur3;
    }
}

$compteur4 = isset($_SESSION["user4"]) ? $_SESSION["user4"] : 0;

if (!array_key_exists("user4", $_SESSION)) {
    $_SESSION["user4"] = 0;

}

if (array_key_exists("score4", $_GET)) {
    if ($_GET["score4"] === "plus4") {
        $compteur4 = $_SESSION["user4"];
        $compteur4 += 1;
        $_SESSION["user4"] = $compteur4;
    } elseif ($_GET["score4"] === "moin4") {
        $compteur4 = $_SESSION["user4"];
        $compteur4 -= 1;
        $_SESSION["user4"] = $compteur4;
    }
}

?>

<section class="compteur_section">

    <div class="les_compteur" ">
        <?php echo $compteur1; ?>
        <div>
            <h3>Thomas</h3>
            <a style="color: black" href="compteur_batate.php?score=plus">+</a>
            <a style="color: black" href="compteur_batate.php?score=moin">-</a>
        </div>
    </div>

    <div class="les_compteur">
        <?php echo $compteur2; ?>
        <div>
            <h3>José</h3>
            <a style="color: black" href="compteur_batate.php?score2=plus2">+</a>
            <a style="color: black" href="compteur_batate.php?score2=moin2">-</a>
        </div>
    </div>

    <div class="les_compteur">
        <?php echo $compteur3; ?>
        <div>
            <h3>Valentin</h3>
            <a style="color: black" href="compteur_batate.php?score3=plus3">+</a>
            <a style="color: black" href="compteur_batate.php?score3=moin3">-</a>
        </div>
    </div>

    <div class="les_compteur">
        <?php echo $compteur4; ?>
        <div>
            <h3>Christina</h3>
            <a style="color: black" href="compteur_batate.php?score4=plus4">+</a>
            <a style="color: black" href="compteur_batate.php?score4=moin4">-</a>
        </div>
    </div>
</section>

    <script src="js/compteur.js"></script>

<?php include "Footer.php" ?>
</body>
</html>
