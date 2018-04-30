<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 30/04/2018
 * Time: 18:09
 */
session_start();
require_once('Controller/backend.php');
require_once('Model/WriteManager.php');
require_once('Model/ChapterManager.php');
require_once('Model/ConnectManager.php');
require_once('../frontend/Model/PostManager.php');
require_once('../frontend/Model/CommentManager.php');
require_once ('Model/FlagManager.php');