<html>
<body>

<div class="titre-menu">
  <h1>Créer un compte</h1>  
</div>

<div class="container-formumu">
    <div class="container-nouveau-compte">
        <p>Déjà un compte ?</p><a href="index.php?page=5">Se connecter</a>
    </div>
    <form method="post" action="#" id="form1">
            <div class="nom-container">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" autocomplete="off">
                <span></span>
            </div>
            <div class="prenom-container">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" autocomplete="off">
                <span></span>
            </div>
            <div class="telephone-container">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" autocomplete="off">
                <span></span>
            </div>              
            <div class="courriel-container">
                <label for="courriel">Courriel</label>
                <input type="text" id="courriel" name="courriel" autocomplete="off">
                <span>Courriel incorrect</span>
            </div>
            <div class="password-container">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" autocomplete="off">
                <p id="progress-bar"></p>
                <span></span>
            </div>
            <div class="confirm-container">
                <label for="confirm">Confrimer le mot de passe</label>
                <input type="password" id="confirm" name="confirm">
                <span></span>
            </div>
            <input type="submit" value="Créer son compte"/>
    </form>
</div>


</body>
</html>