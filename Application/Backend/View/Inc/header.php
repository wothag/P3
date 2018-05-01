<!doctype html>
    <head>
       <title> Administration du Site</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../public/css/back-admin.css" rel="stylesheet" id="bootstrap-css">
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: '#content'
            });
        </script>
    </head>


     <div class="container-fluid">
        <div class="row">
         <!--start of side panel-->
        <div class="col-sm-2"</div>
            <h2>Jean forteroche</h2>
            <ul id="Side_Menu"class="nav nav-pills nav-stacked">
                <li class="active"><a href="../../index.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Retour sur le site</a></li>
                <li><a href="../Backend/index.php?action=writeChapter"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Ajouter un chapitre</a></li>
                <li><a href="../Backend/index.php?action=allChapters"><span class="glyphicon glyphicon-trash"></span>&nbsp;Modifier/Effacer un chapitre</a></li>
                <li><a href="../Backend/index.php?action=modcomments"><span class="glyphicon glyphicon-comment"></span>&nbsp;Modérer les commentaires</a></li>
                <li><a href="../Backend/index.php?action=deconnection"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Se déconnecter</a></li>
            </ul>
        </div>
<!--end of side panel-->        
    <body>

