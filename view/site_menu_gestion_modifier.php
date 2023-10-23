<?php

if (isset($_GET['id'])) {
    // Récupérer l'ID de l'article depuis l'URL
    $id = $_GET['id'];

    // Récupérer les informations de l'article depuis la base de données
    $sql = "SELECT * FROM plats WHERE id_plats = :id_plats";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_plats', $id);
    $stmt->execute();
    $plat = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Vérifier si le formulaire a été soumis pour mettre à jour l'article
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom_plats = $_POST['nom_plats'];
    $description_plats = $_POST['description_plats'];
    $prix_plats = $_POST['prix_plats'];
    $id_categorie_plats = $_POST['id_categorie_plats'];
    

    // Mettre à jour l'article dans la base de données
    $sql = "UPDATE plats SET nom_plats = :nom_plats, description_plats = :description_plats, prix_plats = :prix_plats, id_categorie_plats = :id_categorie_plats WHERE id_plats = :id_plats";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':nom_plats', $nom_plats);
    $stmt->bindParam(':description_plats', $description_plats);
    $stmt->bindParam(':prix_plats', $prix_plats);
    $stmt->bindParam(':id_categorie_plats', $id_categorie_plats);
    $stmt->bindParam(':id_plats', $id);
    $stmt->execute();

    // Rediriger vers la page d'accueil ou une autre page de gestion si nécessaire
    header('Location: index.php?page=2&c=2');
    exit();
}
?>

<!-- Afficher le formulaire de modification -->
<html>
<body>
    <h1>Modifier le plat</h1>
    <form method="post">
        <label for="nom_plats">Nom :</label>
        <input type="text" name="nom_plats" value="<?= $plat['nom_plats']; ?>"><br>
        
        <label for="description_plats">Description :</label>
        <input type="text" name="description_plats" value="<?= $plat['description_plats']; ?>"><br>
        
        <label for="prix_plats">Prix :</label>
        <input type="text" name="prix_plats" value="<?= $plat['prix_plats']; ?>"><br>

        <label for="id_categorie_plats">Type de plat :</label>
            <select id="id_categorie_plats" name="id_categorie_plats">
                <option value="1">Entrées</option>
                <option value="2">Plats</option>
                <option value="3">Desserts</option>
            </select>
        
        <input type="submit" name="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>