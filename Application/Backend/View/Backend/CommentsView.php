<?php include_once ('View/Inc/header.php'); ?>
        <div class="col-sm-10">
        <h1> Administration</h1>
            <!--start of main panel-->
            <h4>Modération des commentaires</h4>
             <div class="col-lg-12 table-responsive">
                 <table class="table table-bordered table-striped">
			        <thead>
                        <tr>
                        <th>Auteur</th>
                            <th>COMMENTAIRES</th>
                            <th>Chapitre</th>
                            <th>Date</th>
                            <th>Effacer</th>
                            <th>Modérer</th>
                        </tr>
			        </thead>
        <?php
           while($data=$flagcomment->fetch())
              {
                echo '<tr>          <td>'.$data['author'],
                                    '<td>'.$data['comment'],
                                    '<td>'.$data['post_id'],
                                    '<td>'.$data['date_comment_fr'],
                                    '<td>	<a class ="btn btn-danger" href="index.php?action=deleteComment&id='.$data['id'].'"><span class="glyphicon glyphicon-moins"></span> Effacer</a>',
                                    '<td>	<a class ="btn btn-warning" href="index.php?action=modifyComment&id='.$data['id'].'"><span class="glyphicon glyphicon-moins"></span> Modérer</a>',
                '</tr>';
             }  ?>
             </table>
            </div>
        </div>
      </div>
           
<!--end of main panel-->
<!--end of bootstrap row-->
<!--end of bootstrap container-->
