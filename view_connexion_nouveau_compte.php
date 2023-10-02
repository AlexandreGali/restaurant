<html>
<body>

<div class="titre-menu">
  <h1>Créer un compte</h1>  
</div>

<div class="container-formumu">
    <div class="container-nouveau-compte">
        <p>Déjà un compte ?</p><a href="index.php?page=5">Se connecter</a>
    </div>
    <form method="post" action="#">
        <div class="formumu">
            <div class="form1">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="form1">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="form1">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone">
            </div>              
            <div class="form1">
                <label for="courriel">Courriel</label>
                <input type="text" id="courriel" name="courriel">
            </div>
            <div class="form1">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp">
            </div>
            <div class="form1">
                <label for="mdpc">Confrimer le mot de passe</label>
                <input type="password" id="mdpc" name="mdpc">
            </div>
            <input type="submit" value="Créer son compte"/>
            
        </div>
    </form>
</div>


</body>
</html>