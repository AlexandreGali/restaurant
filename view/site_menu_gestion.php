<?php 

if (isset($_GET['delete'])) {
    // Supprimer l'article de la base de données
    $id=intval($_GET['delete']);
    $sql = "DELETE FROM plats WHERE id_plats = :id_plats";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_plats', $id);
    $stmt->execute();
 
}

// Requête pour récupérer les articles depuis la base de données
$sql = "SELECT * FROM plats";
$result = $bdd->query($sql);

if ($result && $result->rowCount() > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nom</th><th>Description</th><th>Prix</th><th>Type de plat</th><th>Modifier</th><th>Supprimer</th></tr>';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['id_plats'] . '</td>';
        echo '<td>' . $row['nom_plats'] . '</td>';
        echo '<td>' . $row['description_plats'] . '</td>';
        echo '<td>' . $row['prix_plats'] . '</td>';
        echo '<td>' . $row['id_categorie_plats'] . '</td>';
        echo '<td><a href="index.php?page=2&c=3&id=' . $row['id_plats'] . '"><i class="fa-solid fa-gears" style="color: orange;"></i>
        </i></a></td>';
        echo '<td>
                <a href="index.php?page=2&c=2&delete=' . $row['id_plats'] . '" onclick="return(confirm(\'Voulez-vous supprimer ?\'))">
                <i class="fa-solid fa-trash" style="color: red;"></i>
                </a>
            </td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Aucun article trouvé.";
}
?>