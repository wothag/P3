<?php $title ='Connexion Administrateur Jean Forteroche';?>

<!doctype html>
<html>
    <head>
        <title> Connection à l'administration du site</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
            <script>tinymce.init({
                    selector: '#content'
                });
            </script>
    </head>
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

</html>