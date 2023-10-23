<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_plats = $_POST['nom_plats'];
    $description_plats = $_POST['description_plats'];
    $prix_plats = $_POST['prix_plats'];
    $id_categorie_plats = $_POST['id_categorie_plats'];

    $sql = "INSERT INTO plats (nom_plats, description_plats, prix_plats, id_categorie_plats) VALUES (:nom_plats, :description_plats, :prix_plats, :id_categorie_plats)";
    $stmt = $bdd->prepare($sql);

    if ($stmt->execute(array(':nom_plats' => $nom_plats, ':description_plats' => $description_plats, ':prix_plats' => $prix_plats, ':id_categorie_plats' => $id_categorie_plats))) {
        // L'article a été ajouté avec succès, vous pouvez rediriger l'utilisateur vers la page d'accueil
        header("Location: index.php?page=2&c=1");
        exit();
    } else {
        echo "Erreur lors de l'ajout du plat.";
    }
} 

?>

<!-- Le reste du code HTML pour afficher le formulaire -->
<div class="titre-page">
    <h4>Contenu de la page</h4>
    <hr>
    <form method="post" action="index.php?page=2&c=1" enctype="multipart/form-data">
        <label for="id_categorie_plats">Type de plat :</label>
            <select id="id_categorie_plats" name="id_categorie_plats">
                <option value="1">Entrées</option>
                <option value="2">Plats</option>
                <option value="3">Desserts</option>
            </select>
        <hr class="hr-form">
        <div class="from">
            <label for="nom_plats">Nom du plat :</label>
            <input type="text" id="nom_plats" name="nom_plats" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="description_plats">Description du plat :</label>
            <input type="text" id="description_plats" name="description_plats" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="prix_plats">Prix du plat :</label>
            <input type="text" id="prix_plats" name="prix_plats" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <input type="submit" value="Valider la saisie">
        </div>
    </form>
</div>