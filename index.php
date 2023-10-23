<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href=".//public/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/css/fontawesome-6.4/css/all.css">
    <title>Back Office La Planque</title>
</head>

<?php

require_once('model/connexion_bdd.php');
require_once('model/functions.php');

    if(isset($_SESSION['connexion']) && $_SESSION['connexion'] == 1){
        echo '
        <nav>
          <div class="logo"><a href="index.php?page=1"><img src="public/assets/img/logoResto.png"></a></div>
          <div class="liens-navbar">
          <div class="lien-navbar"><i class="fa-solid fa-utensils" style="color: #000000;"></i><a href="index.php?page=2">Menu</a></div><br><br>
          <div class="lien-navbar"><i class="fa-solid fa-receipt" style="color: #000000;"></i><a href="index.php?page=4">Devis</a></div><br><br>
          <div class="lien-navbar"><i class="fa-regular fa-message" style="color: #000000;"></i><a href="index.php?page=5">Messages</a></div><br><br>
          <div class="lien-navbar"><a href="index.php?page=6">AAAAAAAAA</a></div><br><br>
          <div class="lien-navbar"><a href="index.php?page=7">AAAAA</a></div><br><br>
          <div class="lien-navbar"><a href="index.php?page=3&dis=1" class="deco">Déconnexion</a></div>
          </div>
        </nav>
        <div class="container">
          <div class="contenu">
        ';
        //inserer le routeur
        if(isset($_GET['page'])&& $_GET['page'] !=NULL) {
            $page = intval($_GET['page']);//ou htmlspecialchars 
                if($page == 1){
                    include('view/accueil.php');
                }
                elseif($page == 2) {
                    include('view/site_menu.php');
                }
                elseif($page == 3) {
                    include('controller/deconnexion.php');
                }
                elseif($page == 4) {
                  include('view/site_devis.php');
                }
                elseif($page == 5) {
                  include('view/site_messagerie.php');
                }
                elseif($page == 6) {
                  include('inc/site_hebergements.php');
                }
                elseif($page == 7) {
                  include('inc/site_clients.php');
                }
                else {
                    include('view/accueil.php');
                }
                }
                else {
                    include('view/accueil.php');
                }
                // fin du routeur
                echo '</div>';
                echo '</div>';
    }
    else{
        // echo 'Vous n'êtes pas connecté';
        include('controller/connexion.php');
    }
?>
<script src=".//public/assets/js/script.js"></script>