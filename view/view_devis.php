<html>
<body>

<div class="titre-menu">
  <h1>Demande de devis</h1>
  
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
      <p>Faire une estimation</p>
      <p>N’hésitez pas à nous écrire si vous ne trouvez pas la disponibilité de réservation que<br> vous cherchez, si vous êtes un groupe de plus de 6 personnes ou si vous désirez<br> faire partie de l’équipe!</p>
      <a href="">Pour nous écrire</a>
      <form method="post" action="#">
            <div class="formumu">                
                <div class="form1">
                    <input type="text" id="nom_expediteur" name="nom_expediteur" placeholder="Nom">
                </div>
                <div class="form1">
                    <input type="text" id="email_expediteur" name="email_expediteur" placeholder="Courriel">
                </div>
                <div class="form1">
                    <input type="text" id="telephone_expediteur" name="telephone_expediteur" placeholder="Téléphone">
                </div>
                <div class="form1">
                    <input type="text" id="nombre_personnes" name="nombre_personnes" placeholder="Nombre de personnes">
                </div>
                <div class="form1">
                    <input type="text" id="type_repas" name="type_repas" placeholder="Type de repas voulus">
                </div>
                <div class="form1">
                    <input type="text" id="date_evenement" name="date_evenement" placeholder="Date de l'évènement">
                </div>
                <div class="form2">
                    <input type="text" id="message" name="message" placeholder="Message">
                </div>
                <input type="submit" value="Envoyer"/>
                
            </div>
        </form>

        <?php 
    
    if(isset($_POST['nom_expediteur'],$_POST['email_expediteur'],$_POST['telephone_expediteur'],$_POST['nombre_personnes'],$_POST['type_repas'],$_POST['date_evenement'], $_POST['message'])
    && $_POST['nom_expediteur'] != NULL && $_POST['email_expediteur'] != NULL && $_POST['telephone_expediteur'] != NULL && $_POST['nombre_personnes'] != NULL && $_POST['type_repas'] != NULL && $_POST['date_evenement'] != NULL && $_POST['message'] != NULL){

        $nom=htmlspecialchars($_POST['nom_expediteur']);
        $email=htmlspecialchars($_POST['email_expediteur']);
        $telephone=htmlspecialchars($_POST['telephone_expediteur']);
        $nombre=htmlspecialchars($_POST['nombre_personnes']);
        $type=htmlspecialchars($_POST['type_repas']);
        $date=htmlspecialchars($_POST['date_evenement']);
        $message=htmlspecialchars($_POST['message']);

        $requete = "INSERT INTO demandes_de_devis (nom_expediteur, email_expediteur, telephone_expediteur, nombre_personnes, type_repas, date_evenement, message) VALUES (:nom_expediteur, :email_expediteur, :telephone_expediteur, :nombre_personnes, :type_repas, :date_evenement, :message)"; 
        $req=$bdd->prepare($requete);
        $req->bindValue(':nom_expediteur',$nom,PDO::PARAM_STR); 
        $req->bindValue(':email_expediteur',$email,PDO::PARAM_STR);
        $req->bindValue(':telephone_expediteur',$telephone,PDO::PARAM_STR);
        $req->bindValue(':nombre_personnes',$nombre,PDO::PARAM_STR);
        $req->bindValue(':type_repas',$type,PDO::PARAM_STR);
        $req->bindValue(':date_evenement',$date,PDO::PARAM_STR);
        $req->bindValue(':message',$message,PDO::PARAM_STR);
        $req->execute();     
    } 
    
    ?>

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