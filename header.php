<div class="header_top">
    <ul class="social-links header-social-links">
        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
        <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
        <li><a href=""><i class="fa fa-tiktok"></i></a></li>
    </ul>
    <ul class="header-coordonees">
        <li><i class="fa fa-envelope"></i> email@domain.com </li>
        <li><i class="fa fa-mobile"></i> +229 xxxxxxxx</li>
    </ul>
</div>
<a href="Index.php"><img src="Images/Logo_black.png" alt="Logo" class="logo"></a>

<nav>
    <ul id="menu" class="menu">
        <div id="closeMenu"><i class="fa fa-xmark"></i></div>
        <li><a href="">Accueil</a></li>
        <li><a href="">Boutique</a></li>
        <li><a href="">Catégories</a></li>
        <li><a href="">A propos</a></li>
    </ul>
    <div id="openMenu">
        <!-- <i class="fa-solid fa-bars"></i> -->
        <i class="fa fa-bars"></i>
    </div>
</nav>

<div class="connect_info">
    <form action="" class="searchbar">
        <input type="text" name="writeArea" class="writeArea">
        <i class="fa fa-magnifying-glass "></i>
        <!-- <i class="pe-7s-search"></i> -->
    </form>

    <div class="profil">

        <img src="" alt="">
        <div>
            <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <a href="Connexion.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Se conecter</a>
                <a href="Inscription.php"><i class="fa-solid fa-user"></i> S'inscrire</a>
                <?php
            } else {
                ?>
                <a href="deconnexion.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Se deconecter</a>
                <?php
            }
            ?>

        </div>
    </div>

    <div class="favoris">
        <span><i class="fa fa-heart"></i></span>
    </div>
    <div class="panier">
        <span><i class="fa fa-cart-shopping"></i></span>
    </div>
</div>