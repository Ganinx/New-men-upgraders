<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="CSS/formulaire.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<?php include "Header.php"?>

    <div class="container-form">
        <div class="block-noir">
            <div class="block-form">
                <div class="civilite">
                    <div class="nom-form">
                        <h3>Nom</h3>
                        <input type="text" placeholder="Votre nom">
                    </div>
                    <div class="prenom-form">
                        <h3>Prénom</h3>
                        <input type="text" placeholder="Votre prénom">
                    </div>
                </div>
                <div class="adresse-form">
                    <h3>E-mail</h3>
                    <input type="email" style=width:400px placeholder="Votre adresse e-mail">
                </div>
                <div class="telephone-form">
                    <h3>Téléphone</h3>
                    <input type="tel" id="phone" name="phone" style=width:400px pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required placeholder="Votre téléphone">
                </div>
                <div class="message">
                    <h3>Message</h3>
                    <textarea name="message" id="message-form" cols="45" rows="15" placeholder="Votre message"></textarea>
                </div>
                <div class="confidentialite">
                    <input type="checkbox" id="checkbox" checked>
                    <label for="consentement">J'accepte que les informations renseignées ci-dessus soient exploitées dans le cadre de ma démarche d'information chez New-Men-Upgrades</label>
                </div>
                <div class="button-form">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
    <?php include "Footer.php"?>
</body>
</html>