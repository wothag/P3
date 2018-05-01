<?php include_once ('view/inc/header.php'); ?>

<!--start of main panel-->
<div class="col-sm-10">
    <h1> Vue de tous les résumés des chapitres</h1>
    <div class="col-sm-12 table-responsive">
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
						'<td>'.substr($data['content'],0,5000),
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
    </div>
</div>


