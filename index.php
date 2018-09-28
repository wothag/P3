<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 14/12/2017
 * Time: 16:55
 */
function chargerClasse()
{
	require 'model/BddManager.php';
	require 'model/Chapter.php';
	require 'model/ChapterManager.php';
}
spl_autoload_register('chargerClasse');

