<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/formulaire_style.css">
    <link rel="shortcut icon" href="Images/">
    <link rel="stylesheet" href="Styles/Affichage_PC.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 922px)" href="Styles/Affichage_mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Site de vente en ligne de chaussures/Inscription</title>
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ?>

    <div id="Bloc_Formulaire">
        <img src="Images/logo_black.png" alt="">
        <?php

        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
                    ?>
                    <div class="no_error">
                        <strong>Succès</strong>: Inscription Réussie
                    </div>
                    <?php
                    break;
                case 'already':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong> Remplissez les champs vides
                    </div>
                    <?php
                    break;
                case 'email':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong>L'Email saisi existe déja
                    </div>
                    <?php
                    break;
                case 'pseudo_length':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong> Le pseudo saisi est trop grand
                    </div>
                    <?php
                    break;
                case 'email_length':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong> L'Email saisi est trop long
                    </div>
                    <?php
                    break;
                case 'email_validate':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong> L'Email saisi n'est pas valide
                    </div>
                    <?php
                    break;
                case 'password':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong> Les mots de passe ne sont pas identiques
                    </div>
                    <?php
                    break;
            }
        }
        ?>
        <form action="inscription_traitement.php" method="post">
            <div class="info_form">
                <input type="text" name="nom" placeholder="Nom">
            </div>
            <div class="info_form">
                <input type="text" name="prenom" placeholder="Prénom">
            </div>
            <div class="info_form">
                <input type="text" name="pseudo" placeholder="Pseudo(facultatif)">
            </div>
            <div class="info_form">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="info_form">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="info_form">
                <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe">
            </div>
            <input type="submit" value="S'inscrire" id="BTN">
        </form>
        <p>Vous êtes déja inscrit ? <a href="Connexion.php" style="text-decoration:none;">Se connecter</a></p>
    </div>
</body>


</html>