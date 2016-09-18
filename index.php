<?php

//include("controllers/config.php");
if(isset($_GET['url'])){

	$v_params=explode("/", $_GET['url']);
	if(count($v_params)==1){$v_params[1]="0";}
	if(count($v_params)==2){$v_params[2]="0";}
}else{
	$v_params=explode("/", "index/0/0");
}

switch($v_params[0]){

	case "index":
		header("Location: WEBAPP/Views/");
		break;
}


?>
