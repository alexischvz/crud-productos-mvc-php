<?php 

include_once 'controller/Control.php';
include_once 'config/Conexion.php';

$control = new Control();

if (!isset($_REQUEST['c'])){
	$control->index();
} else {
	$action = $_REQUEST['c'];
	call_user_func(array($control, $action));
}

 ?>