<?php

	$n  = $_POST['n'];
	$id = $_POST['id'];
	session_start();
	//date_default_timezone_set('America/Los_Angeles');
	include 'db.php';
	include 'controler.php';
	include 'controler.do.php';
	
	switch ($n) {
	  case 1:
		$do->get_info($id);
		break;
	  case 2:
		//stuff
		break;
	  case 3:
		//stuff
		break;
	  case 4:
		//stuff
		break;
	  case 5:
		//stuff
		break;
	  case 6:
		//stuff
		break;
	  case 7:
		//stuff
		break;
	  case 8:
		//stuff
		break;
	  case 9:
		//stuff
		break;
	  case 10:
		//stuff
		break;
	  default:
		//stuff
	}

?>