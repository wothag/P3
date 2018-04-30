<?php $token = bin2hex(32);
$_SESSION['token'] = $token;?>

<?php include_once ('View/Inc/header.php'); ?>

                    <!--start of main panel-->
<div class="col-sm-10">
    <h1> Modifier le chapitre</h1>
    <div class="col-sm-8">
        <form action="index.php?action=validUpdateChapterForm" method="POST">
            <div class="form-group">
<!--                        <label for="title">Titre : </label>-->
                <input class="form-group" type="text" name="title" id="title" placeholder="Chapitre" value ="<?php echo $data['title']?>">
            </div>

            <div class="form-group">
<!--                             <label for="title">Auteur : </label>-->
                <input class="form-group" type="text" name="author" id="title" placeholder="Chapitre" value ="<?php echo $data['author']?>">
            </div>

            <div class="form-group">
<!--                            <label for="author">Date :</label>-->
                <input class="form-group" type="text" name="date" id="date" value ="<?php echo $data['date_created_fr']?>" >
            </div>

            <div class="form-group">
                <label for="content">Veuillez corriger votre texte ci-dessous.</label>
                <textarea class="form-control" type="text" name="content" id="content" rows="10" cols="132"><?php echo $data['content']?></textarea>
            </div>

            <input class="hidden" type="text" name="id" id="id" value ="<?php echo $data['id']?>" >
            <br>
            <input class="btn btn-success btn-block" type="submit" name="PUBLIER">
            <br><br>
            <input type ="hidden" name="token" value="<?php echo $token;?>" />
        </form>
        <?php include_once ('View/Inc/footer.php');?>
                      </div>
                    <!--end of main panel-->

                </div>

