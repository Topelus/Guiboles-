<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/formulaire_style.css">
    <link rel="shortcut icon" href="Images/favicon.ico">
    <link rel="stylesheet" href="Styles/Affichage_PC.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 922px)" href="Styles/Affichage_mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Site de vente en ligne de chaussures/Connexion</title>
</head>

<body>
    <div id="Bloc_Formulaire">
        <img src="Images/logo_black.png" alt="">
        <?php
        if (isset($_GET['Login_err'])) {
            $err = htmlspecialchars($_GET['Login_err']);

            switch ($err) {
                case 'already':
                    ?>
                    <div class="access_form_error">
                        <strong>Erreur</strong>: Email ou mot de passe incorrect
                    </div>
                    <?php
                    break;
            }
        }
        ?>
        <form action="connexion_traitement.php" method="POST">
            <div class="info_form">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="info_form">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <input type="submit" value="Se connecter" id="BTN">
        </form>
        <p>Pas encore de compte ? <a href="inscription.php" style="text-decoration:none;">S'inscrire</a></p>
    </div>
</body>


</html>