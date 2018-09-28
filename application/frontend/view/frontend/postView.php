<?php ob_start(); ?>

<?php if ($message !=null): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?= $message ?> </strong>
    </div>
<?php endif; ?>


<div class="container-fluid">
    <div class="col-sm-12">
        <div class="chapter-title">
            <?= htmlspecialchars($post['title']) ?>
        </div>
        <br/><br/><hr/>
            <strong>le <?= $post['date_created_fr'] ?></strong>
        <br/>
        <br/>
            <?= nl2br($post['content']) ?>
        <strong><?= nl2br($post['author']) ?></strong>
    </div>
    <br/>
    <br/>
<hr>


    <div style="color: #337ab7;">
        <h1>LISTE DES COMMENTAIRES</h1>
    </div>
    <br/>
		<?php
		while ($comment = $comments->fetch())
		{?>
            <div style="color: grey;">
                PSEUDO : <?= htmlspecialchars($comment['author']) ?></strong>
            </div>
            <br/>
                <div style="color: grey;">
            LE <?= $comment['date_comment_fr'] ?>
            <br/><br/>
                </div>
            <p style="font-weight: bold; text-align: justify"><?= nl2br($comment['comment']) ?></p><br/><br/>

<!--SIGNALEMENT DES COMMENTAIRES-->
            <div>
                <form action="index.php?action=flag&amp;id=<?= $comment['id'] ?>" method="post">
                <input type ="hidden" name="postId" value="<?= $post['id'];?>">
                <input type="submit" name="Flag"  value="Signaler le commentaire" class="btn btn-primary"/>
                    <br/>
                    <br/>
                    <br/>
                    <hr>
                    <input type ="hidden" name="token" value="<?php echo $token;?>" />
                </form>
            </div>


        <?php
		}
		?>
<!--AJOUT DES COMMENTAIRES-->

    <div class="Ajoutcomments">Vous pouvez ajouter vos commentaires ou signaler un commentaire indésirable.<br/><br/>
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="author">VOTRE NOM OU PSEUDO</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">VOTRE COMMENTAIRE</label><br />
                <textarea style="width: 300px; height: 200px" id="comment" name="comment"></textarea>
            </div>
<!--                      <div class="g-recaptcha" data-sitekey="6Ld_LlkUAAAAAGJcaDabsVbEHzmyOyNkJAVDAM-S"></div>-->
            <div>
                <input type="submit" name="submit" value="envoyer"btn btn-primary"/>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean();?>
<?php require('template.php');?>
