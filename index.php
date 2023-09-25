<!DOCTYPE html>
<html>
<head>
    <?php
            $pageTitle = "Venez vous planquer, la porte est ouverte"; 
            if (isset($_GET['page'])) {
                $page = intval($_GET['page']);
                if ($page == 1) {
                    $pageTitle = "Venez vous planquer, la porte est ouverte";
                } elseif ($page == 2) {
                    $pageTitle = "Menu - La Planque";
                } elseif ($page == 3) {
                    $pageTitle = "Contact - La Planque";
                } elseif ($page == 4) {
                    $pageTitle = "Golden Hour - De Soi";
                }  
            }
            ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href=".//public/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/css/fontawesome-6.4/css/all.css">
        
    
</head>

    <body>
        
<?php

        require_once('view/composants/view_navbar.php');
        require_once('model/connexion_bdd.php');
        require_once('model/fonctions.php');
        // require_once('public/assets/');


        if(isset($_GET['page']) && $_GET['page'] !=NULL){ 
            $page=intval($_GET['page']); 
            if($page==1){
                include('view/view_home.php'); 
            }
            elseif($page==2){
                include('view/view_menu.php');
            }
            elseif($page==4){
                include('view/view_devis.php');
            }
            elseif($page==5){
                include('view/view_contact.php');
            }
            else {
                include('view/view_home.php');
            }
        }
        else {
            include('view/view_home.php');
        }
    
        require_once('view/composants/view_footer.php');
   
    ?>

<script src=".//public/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>