<?php 
ob_start();
require_once('./controllers/Autoload.php');
$autoload = new Autoload();
session_start();
if(!isset($_SESSION['ok']))
	$_SESSION['ok']=false;
new Router();