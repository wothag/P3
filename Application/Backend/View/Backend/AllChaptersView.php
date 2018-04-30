<?php include_once ('View/Inc/header.php'); ?>

    <!--start of main panel-->
        <div class="col-sm-10">
            <h1> Vue de tous les résumés des chapitres</h1>
                <div class="col-lg-12 table-responsive">
                    <table class="table table-bordered table-striped">
			            <thead>
                        <tr>
                        <th>chapitre</th><th>Date</th><th>Contenu</th><th>Auteur</th><th>Effacer</th><th>Modifier</th>
			             </thead>
        <?php 
          while ($data = $allchapters->fetch())
          {
                {
                echo    '<tr>   <td>'.$data['title'],
                                '<td>'.$data['date_created_fr'],
                                '<td>'.substr($data['content'],0,200),
                                '<td>'.$data['author'],
								'<td><a class ="btn btn-danger" href="index.php?action=deleteChapter&id='.$data['id'].'"><span class="glyphicon glyphicon-moins"></span> Effacer</a>',
								'<td><a class ="btn btn-warning" href="index.php?action=modifychapter&id='.$data['id'].'"><span class="glyphicon glyphicon-moins"></span> Modifier</a>',
                        '</tr>'; 
                }     
         ?>              
        <?php
        }
        $allchapters->closeCursor();
        ?>
                    </table>
                <!--end of main panel-->

              <!--end of bootstrap row-->
 <?php include_once ('View/Inc/footer.php');?>
                </div>
        </div>


<?php $content = ob_get_clean();
require('template.php');?>