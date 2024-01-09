<?php
require 'View/function.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<?php
include "View/Parts/header.php";
?>
<section class="container">
    <h1>Se connecter</h1>

    <form method="post">

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password">
        </div>

        <a class="" href="index.php?controller=security&action=register">Créer un compte</a>
        <button type="submit">Connecter</button>

        <?php
            if ($error){
                echo ('<p class="text-danger">identifiant incorrect</p>');
            }
        ?>

    </form>
</section>

</body>
</html>
