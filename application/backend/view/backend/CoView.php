<!<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Connection</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-5 col-md-3">
            <div class="form-login">
                <h4 style="font-size: 2em; color: lightblue; text-align: center";>BIENVENUE SUR L'ADMINISTRATION DU BLOG</h4>
                <form method="POST" action ="index.php?action=login">
                    <input type="text" id="pseudo" class="form-control input-sm chat-input" placeholder="Nom d'utilisateur" name="pseudo" />
                    <input type="password" id="password" class="form-control input-sm chat-input" placeholder="Mot de passe" name="password" />
                    <input type="hidden" name="token" id="token"   value="<?php echo $token;?>"/>
                    <br>
                    <div class="col-lg-offset-3 col-md-4">
                    <div class="group-btn"></div>
                        <input type="submit" name="connect"class="btn btn-primary btn-md">
                </form>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <img class="img-fluid" src="../../public/images/Home.png" alt="Home">
</div>
</body>
</html>

