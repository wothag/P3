<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="utf-8" />
	    <title><?php echo $title = "Blog de Mr Forteroche" ?></title>
	   	<meta name="description" content="Jean Forteroche : Billet simple pour l'Alaska..." />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="public/css/StyleHome.css" type="text/css" />
	    <meta name="viewport" content="initial-scale=1.0" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
<body>
    <?= $content ?>
</body>

<?php include('Application/Frontend/Inc/footer.php');?>

