<?php $title ='Connexion Administrateur Jean Forteroche';?>
<?php include_once ('View/Inc/loginHeader.php'); ?>
<body>
    <div class ="news">
        <div class="row">
            <div class="col-sm-offset-5 ">
                <h2>Connexion</h2>
                <form method="POST" action ="index.php?action=login">
                    <input type="text" id="pseudo" placeholder="Nom d'utilisateur" name="pseudo" >
                    <br>
                    <input type="password" id="password" placeholder="Mot de passe" name="password" >
                    <br>
                    <input type="submit" name="connect" value="Se connecter">
                    <input type="hidden" name="token" id="token"   value="<?php echo $token; ?>"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
