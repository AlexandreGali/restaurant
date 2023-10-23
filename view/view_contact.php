<html>
<body>

<div class="titre-menu">
  <h1>Nous contacter</h1>  
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
      <a href="">Pour nous écrire</a>
      <form method="post" action="#">
            <div class="formumu">                
                <div class="form1">
                    <input type="text" id="nom" name="nom" placeholder="Nom">
                </div>
                <div class="form1">
                    <input type="text" id="email" name="email" placeholder="Courriel">
                </div>
                <div class="form1">
                    <input type="text" id="telephone" name="telephone" placeholder="Téléphone">
                </div>
                <div class="form2">
                    <input type="text" id="message" name="message" placeholder="Message">
                </div>
                <input type="submit" value="Envoyer"/>
                
            </div>
        </form>

        <?php 
    
    if(isset($_POST['nom'],$_POST['email'],$_POST['telephone'], $_POST['message'])
    && $_POST['nom'] != NULL && $_POST['email'] != NULL && $_POST['telephone'] != NULL && $_POST['message'] != NULL){

        $nom=htmlspecialchars($_POST['nom']);
        $email=htmlspecialchars($_POST['email']);
        $telephone=htmlspecialchars($_POST['telephone']);
        $message=htmlspecialchars($_POST['message']);

        $requete = "INSERT INTO demandes_de_contact (nom, email, telephone, message) VALUES (:nom, :email, :telephone, :message)"; 
        $req=$bdd->prepare($requete);
        $req->bindValue(':nom',$nom,PDO::PARAM_STR); 
        $req->bindValue(':email',$email,PDO::PARAM_STR);
        $req->bindValue(':telephone',$telephone,PDO::PARAM_STR);
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
