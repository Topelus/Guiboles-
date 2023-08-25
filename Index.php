<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/Affichage_PC.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 922px)" href="Styles/Affichage_mobile.css">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Site de vente en ligne de chaussures</title>
</head>

<body>
    <header class="header">
        <?php include('header.php'); ?>
    </header>
    <section class="banniere">
        <?php include('banniere.php'); ?>
    </section>
    <section class="avantages">
        <div>
            <i><i class="fa-solid fa-truck"></i></i>
            <h4>Livraison gratuite</h4>
            <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.</p>
        </div>
        <div>
            <i></i>
            <h4>Paiement Sécurisé</h4>
            <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.</p>
        </div>
    </section>
    <section class="best_product">
        <?php include('best_product.php'); ?>
    </section>



    <script src="Scripts/menu_slide.js" type="text/javascript"></script>
    <script src="Scripts/scroll_anim.js" type="text/javascript"></script>
</body>

</html>