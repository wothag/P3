<?php
$token = bin2hex(32);
$_SESSION['token'] = $token;

?>
<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="utf-8" />
	    <title><?=' blog de Mr forteroche'?></title>
	   	<meta name="description" content="Jean Forteroche : Billet simple pour l'Alaska..." />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="public/css/StyleHome.css" type="text/css" />
	    <meta name="viewport" content="initial-scale=1.0" />
<!--    <script src='https://www.google.com/recaptcha/api.js'></script>-->
	</head>
    <body>
        <div class="container-fluid">
            <br>
            <img class="img-fluid" src="public/images/alaska-hiver-etats-unis.jpg" alt="Alaska">
        </div>
            <br>
        <?= $content ?>

<?php include('application/frontend/inc/footer.php');?>
    </body>
</html>
