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
include 'View/Parts/header.php'
?>

<h1>Creer un compte</h1>

<form method="post">

    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="lastname" class="form-control <?php displayBsClassForm($errors,"lastname") ?>" value="<?php keepFormValue("lastname") ?>">
        <?php displayBsErrorForm($errors,'lastname') ?>
    </div>
    <div class="form-group">
        <label for="">Prénom</label>
        <input type="text" name="firstname" class="form-control <?php displayBsClassForm($errors,"firstname") ?>" value="<?php keepFormValue("firstname") ?>">
        <?php displayBsErrorForm($errors,'firstname') ?>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control <?php displayBsClassForm($errors,"email") ?>" value="<?php keepFormValue("email") ?>">
        <?php displayBsErrorForm($errors,'email') ?>
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control <?php displayBsClassForm($errors,"password") ?>" value="<?php keepFormValue("password") ?>">
        <?php displayBsErrorForm($errors,'password') ?>
    </div>
    <div class="form-group">
        <label for="">Confirm password</label>
        <input type="password" name="confirm-password" class="form-control <?php displayBsClassForm($errors,"confirm-password") ?>" value="<?php keepFormValue("confirm-password") ?>">
        <?php displayBsErrorForm($errors,'confirm-password') ?>
    </div>
    <input type="submit" class="btn btn-success">

</form>

</body>
</html>