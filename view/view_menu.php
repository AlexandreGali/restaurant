<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>

<div class="titre-menu">
    <h1>Notre</h1>
    <h1><i>menu</i></h1>
</div>

<div class="texte-titre-menu">
    <p>La Planque vous propose un menu qui s’adapte aux<br>saisons et aux produits disponibles.</p>
</div>

<div class="photo-arbre">
    <img src="../../restaurant/public/assets/img/photomenu.png" alt="bg sur un arbre">
</div>

<div class="type-de-plat">
    <h2>Menu à partager</h2>
    <h2><i>les mardis & mercredis</i></h2>
    <div class="description-plat1">
        <p>2 mises en bouches, 2 entrées, 1 plat principal et<br>1 dessert, letout selon l’inspiration du chef</p>
        <p>79,00 / 2<br>personnes</p>
    </div>    
</div>

<div class="container-plat">
    <div class="titre-categorie">
        <h3>Mises en bouche</h3>
    </div>
    <div class="nom-plat">
        <div class="plat">
            <p>HUÎTRES (À L'UNITÉ)</p>
            <p>2,50</p>
        </div>
        <div class="plat">
            <p>TREMPETTE DE POIS CHICHES</p>
            <p>7,00</p>
        </div>
        <div class="plat">
            <p>BHAJIS DE COURGETTE, AÏOLI AU CARI</p>
            <p>6,00</p>
        </div>
        <div class="plat">
            <p>JAMBON DE CANARD</p>
            <p>11,00</p>
        </div>
    </div>
</div>

<div class="container-plat">
    <div class="titre-categorie">
        <h3>Entrées</h3>
    </div>
    <div class="nom-plat">
        <div class="plat">
            <div class="plat1">
                <p>FIOR DI LATTE</p>
                <p>Maïs, Porc, Chili Crisp</p>
            </div>
            <p>23,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>POLPETTES D'AGNEAU</p>
                <p>Polenta, Tomate, Ricotta</p>
            </div>
            <p>22,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>PORCHETTA</p>
                <p>Mayo au Thon, Champignons du Camp de Pêche</p>
            </div>
            <p>23,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>LA BROCHETTE</p>
                <p>Légumes de la Baigneuse, Pieuvre, Romesco</p>
            </div>
            <p>22,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>LE HOT PÉTONCLE</p>
                <p>Pain Brioché, Sauce Mornay</p>
            </div>
            <p>25,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>CREVETTES</p>
                <p>Crème à l'Estragon, Caviar</p>
            </div>
            <p>23,00</p>
        </div>
    </div>
</div>

<div class="container-plat">
    <div class="titre-categorie">
        <h3>Plats principaux</h3>
    </div>
    <div class="nom-plat">
        <div class="plat">
            <div class="plat1">
                <p>BURRATA</p>
                <p>Risotto aux Champignons, Pistaches, Basilic</p>
            </div>
            <p>32,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>PÊCHE DU JOUR</p>
                <p>Pommes de Terre Frites, Sauce Hollandaise, Citron Confit</p>
            </div>
            <p>31,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>STEAK AND EGG</p>
                <p>Boeuf AAA, Céleri-Rave, Oignons Caramélisés, Sauce Foie Gras</p>
            </div>
            <p>45,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>PINTADE</p>
                <p>Sauce Suprême, Bettes à Carde, Harissa, Amandes</p>
            </div>
            <p>35,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>SIDE</p>
                <p>Aglio e Olio</p>
            </div>
            <p>10,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>SIDE</p>
                <p>Baba Gannouj</p>
            </div>
            <p>10,00</p>
        </div>
    </div>
</div>

<div class="container-plat">
    <div class="titre-categorie">
        <h3>Desserts</h3>
    </div>
    <div class="nom-plat">
        <div class="plat">
            <div class="plat1">
                <p>GÂTEAU AUX CAROTTES</p>
                <p>Mascarpone Fouetté, Noix Sablées, Sauce Caramel</p>
            </div>
            <p>10,00</p>
        </div>
        <div class="plat">
            <div class="plat1">
                <p>FRAISE</p>
                <p>Meringue, Basilic, Noix de Grenoble</p>
            </div>
            <p>10,00</p>
        </div>        
    </div>
</div>

<div class="preavis">
    <p>*Le menu et les prix sont sujet à changement sans préavis</p>
</div>
<!-- FOOTER -->
<div class="container-footer">
  <div class="footer-gauche">
    <div class="gauche-haut">
      <h2><i>Où nous trouver</i></h2>
      <p>1027, 3e Avenue, Québec QC G1L 2X3</p>
      <p>Stationnement gratuit dans les rues avoisinantes</p>
      <p>418 914-8780</p>
      <p>info@laplanquerestaurant.com</p>
    </div>
    <div class="gauche-bas">
      <h2><i>Heures d'ouverture</i></h2>
      <p>Mardi à Samedi</p>
      <p>17 h 30 – dernière réservation à 21 h 30</p>
      <p>Dimanche et Lundi</p>
      <p>Fermé</p>
    </div>
  </div>
  <div class="footer-droite">
    <div class="droite-haut">
      <h2><i>Pour nous joindre</i></h2>
      <p>Faire une réservation</p>
      <p>N’hésitez pas à nous écrire si vous ne trouvez pas la disponibilité de réservation que<br> vous cherchez, si vous êtes un groupe de plus de 6 personnes ou si vous désirez<br> faire partie de l’équipe!</p>
      <a href="">Pour nous écrire <i class="fa-solid fa-plus" style="color: #000000;"></i></a>
    </div>
    <div class="droite-bas">
      <p>Suivez-nous sur nos réseaux sociaux</p>
        <div class="lien-reseau">
          <a href="">Facebook</a>
          <a href="">Instagram</a>
          <a href="">Youtube</a>
        </div>
    </div>
  </div>
</div>


</body>
</html>
