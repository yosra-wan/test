<?php require_once 'init.inc.php'; ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="css/stylecss.css">
    <!-- fontAwesome icons -->
    <script src="https://kit.fontawesome.com/903aff947f.js" crossorigin="anonymous"></script>
    <title>Inscription</title>
</head>
<body>

    <!--
   
        navBar
    -->

    <?php
include("menu.html")
?>




    <div class="form">
        <div class="back_p m-5"><a href="panier.html"><i class="fas fa-arrow-left"></i>  Retour à la liste des articles</a></div>
        <div class="w-75 mx-auto d-flex bg-white">
            <div class="log position-relative">
                <div class="position-absolute">
                    <p class="log_mess fw-bold h3 text-white mb-5">Déjà Client ?</p>
                    <a href="connexion.php"><button class="con_btn">Se connecter</button></a>
                </div>
                <img src="images/log.jpg" class="log_img" alt="">
            </div>
            <div class="connect">
                <!-- formulaire d'inscri -->
              

                <?php require_once 'process_inscription.php'?>
<form method="post" name="signup" class="signup" action="process_inscription.php">
                    <div class="text-center">
                        <p class="connect_title display-6">Crée un compte</p>
                        <p class="connect_text small">Afin de profiter de tous les avantages de "The Label Store", de bénéficer d'offres exclusives et de garder toutes vos informations clients (whishlist, suivi de vos commandes, etc) il suffit de vous inscrire</p>
                    </div>
                    <div class="d-flex">
                        <div class="form-group m-md-3">
                            <input type="radio" id="mr" name="sexe" value="m" checked="">
                            <label for="mr">Mr.</label>
                        </div>
                        <div class="form-group m-md-3">
                            <input type="radio" id="mme"  name="sexe" value="f">
                            <label for="mme">Mme.</label>
                        </div>
                    </div>
                    <input type="text" class="w-100 my-3" id="nom_utilisateur" name="nom_utilisateur" maxlength="20" placeholder="nom d'utilisateur" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"> 
                    <div class="d-flex">
                        <input type="text" id="nom" placeholder="Nom" name="nom" class="w-50" required>
                        <input type="text" placeholder="Prenom"  id="prenom" name="prenom" class="w-50" required>
                    </div>
                    <input type="mail" placeholder="E-mail"  id="mail" name="mail" class="w-100 my-3" required>
                    <input type="password" placeholder="Mot de passe" id="mdp" name="mdp" class="w-100 mb-3"  required>
               <!--     <input type="number" placeholder="Num téléphone" name="telephone" class="w-100 mb-3" required> -->
                    <input type="text" placeholder="Ville" id="ville"  name="ville" class="w-100 mb-3"required pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."> 
                   
                    <div class="form-group m-md-3">
                        <input type="checkbox" id="mail" name="nouveautes">
                        <label for="mail">Recevoir les nouveautés via les emails.</label>
                    </div>
                    
                    <button class="btn float-end px-4" type="submit" style=" background-color: #AB1810; color: #fff;  border-radius: 25px; transition: all 0.3s ease-in-out; font-size: 14px;"> S'inscrire </button>
               
                </form> 
            </div>
        </div>
    </div>
    <!-- services -->
    <section id="services"class="d-flex justify-content-sm-center fle">
        <div class="service text-center mx-3">
            <i class="fas fa-truck"></i>
            <p class="my-2">LIVRAISON</p>
            <span>il nous désormais possible de vous livrer</br> vos créations préférées sur le grand Tunis</span>
        </div>
        <div class="service text-center mx-3">
            <i class="fas fa-box"></i>
            <p class="my-2">LIVRAISON OFFERTE</p>
            <span>LIVRAISON OFFERTE Dés 90dt d'achat </br>  à Ariana</span>
        </div>
        <div class="service text-center mx-3">
            <i class="fas fa-money-check-alt"></i>
            <p class="my-2">PAIEMENT SECURISE</p>
            <span>De nombreuses solutions de paiement</span>
        </div>
        <div class="service text-center mx-3">
            <i class="fas fa-hand-holding-usd"></i>
            <p class="my-2">RETOUR ET REMBOURSSMENT</p>
            <span>Si l'un des articles a été livré cassé ou </br> endommagé il est possible de le remplacer </br> ou d'étre rembourssé </span>
        </div>
    </section>
    <!-- footer -->
    <footer class="px-lg-5 d-flex align-items-center justify-content-xl-between">
    <div>
        <img src="images/logo.png" alt="logo" class="footer_logo">
        <p class="fw-bold mt-5 small">The Label Store est un design store qui regroupe les créations handmade d'une selection de desingers tunisiens: Luminares en rotin, céramique, cuivre,  arts de la table, piéces uniques ...</p>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
    </div>
    <ul>
        <li class="fw-bold mb-3">PRODUITS</li>
        <li class="mb-1">Luminares</li>
        <li class="mb-1">Tamis</li>
        <li class="mb-1">Accessoires</li>
        <li class="mb-1">Coins Sallon</li>
        <li class="mb-1">Biblo</li>
    </ul>
    <ul>
        <li class="fw-bold mb-3">AIDE </li>
        <li class="mb-1">Qui sommes-nous?</li>
        <li class="mb-1">Nos boutiques</li>
        <li class="mb-1">Newsletter</li>
        <li class="mb-1">Livraison</li>
        <li class="mb-1">Rembourssement</li>
    </ul>
    <ul>
        <li class="fw-bold mb-3">CONTACT</li>
        <li class="mb-1">amine_yaiche@yahoo.fr</li>
        <li class="mb-1">Telephone: +216 50 821 941</li>
        <li class="mb-1">Newsletter</li>
        <li class="mb-1">Livraison</li>
        <li class="mb-1">Rembourssement</li>
    </ul>
    <ul>
      
        <li class="fw-bold mb-3">NEWSLETTER</li>
        <p>Inscrivez-vous a notre  Newsletter et reçoit <br>nos dernieres actualite</p>
        <div>
            <input type="text" placeholder="Entre Votre email">
            <button class="btn px-4">Découvrir</button>
        </div>
    </ul>
    <hr>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>



