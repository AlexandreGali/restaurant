<div class="titre-page"><h1>Page de gestion du menu</h1></div>

<div class="titre-page">
    <div class="sous-titre">
        <h3><a href="index.php?page=2&c=1">Saisir la carte</a></h3>
        <hr class="hr-st">
        <h3><a href="index.php?page=2&c=2">Gérer la carte</a></h3>
    </div>
</div>

<?php
// début du routeur interne
if(isset($_GET['c'])&& $_GET['c'] !=NULL) {
    $c = intval($_GET['c']);//ou htmlspecialchars 
        if($c == 1){
            include('view/site_menu_saisie.php');
        }
        elseif($c == 2) {
            include('view/site_menu_gestion.php');
        }
        elseif($c == 3) {
            include('view/site_menu_gestion_modifier.php');
        }
        else {
            include('view/site_menu_saisie.php');
        }
        }
    else {
        include('view/site_menu_saisie.php');
    }
// fin routeur
?>