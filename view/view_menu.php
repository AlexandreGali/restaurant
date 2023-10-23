<?php
$sql = "SELECT * FROM categorie_plats";
$stmt = $bdd->query($sql);
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <?php
        $sql = "SELECT * FROM plats WHERE id_categorie_plats = 1";
        $stmt = $bdd->query($sql);
        $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($plats as $plat) {
            ?>
            <div class="plat">
                <div class="plat1">
                    <p><?= $plat['nom_plats']; ?></p>
                    <p><?= $plat['description_plats']; ?></p>
                </div>
                <p><?= $plat['prix_plats']; ?></p>
            </div>
            <?php
        }
        ?>
    
    </div>
</div>

<div class="container-plat">
    <div class="titre-categorie">
        <h3>Plats principaux</h3>
    </div>
    <div class="nom-plat">
        <?php
        $sql = "SELECT * FROM plats WHERE id_categorie_plats = 2";
        $stmt = $bdd->query($sql);
        $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($plats as $plat) {
            ?>
            <div class="plat">
                <div class="plat1">
                    <p><?= $plat['nom_plats']; ?></p>
                    <p><?= $plat['description_plats']; ?></p>
                </div>
                <p><?= $plat['prix_plats']; ?></p>
            </div>
            <?php
        }
        ?>
    
    </div>
</div>

<div class="container-plat">
    <div class="titre-categorie">
        <h3>Desserts</h3>
    </div>
    <div class="nom-plat">
        <?php
        $sql = "SELECT * FROM plats WHERE id_categorie_plats = 3";
        $stmt = $bdd->query($sql);
        $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($plats as $plat) {
            ?>
            <div class="plat">
                <div class="plat1">
                    <p><?= $plat['nom_plats']; ?></p>
                    <p><?= $plat['description_plats']; ?></p>
                </div>
                <p><?= $plat['prix_plats']; ?></p>
            </div>
            <?php
        }
        ?>
    
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
