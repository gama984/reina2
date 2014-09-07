<?php
if(!isset($si)){include 'db.php';}

if(@session_start() == false){session_start();}

if(isset($_POST['setLang'])){
	$_SESSION['idioma'] = $_POST['idioma'];
	texto();
}


//texto segun idioma
function texto(){
	
	$_SESSION["texto"]["menu"]=array();
	$_SESSION["texto"]["footer"]=array();
	$_SESSION["texto"]["index"]=array();
	$_SESSION["texto"]["nosotros"]=array();
	$_SESSION["texto"]["portafolios"]=array();
	$_SESSION["texto"]["politicas"]=array();
	$_SESSION["texto"]["retoquep"]=array();
	
	$conn = new consultas();
	$txt = $conn->all('page_text');
	foreach($txt as $row){
		switch($row["name"]){
			case "menu": $pos=count($_SESSION["texto"]["menu"]);
							$_SESSION["texto"]["menu"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			case "footer": $pos=count($_SESSION["texto"]["footer"]);
							$_SESSION["texto"]["footer"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			case "index": $pos=count($_SESSION["texto"]["index"]);
							$_SESSION["texto"]["index"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			case "nosotros": $pos=count($_SESSION["texto"]["nosotros"]);
							$_SESSION["texto"]["nosotros"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			case "portafolios": $pos=count($_SESSION["texto"]["portafolios"]);
							$_SESSION["texto"]["portafolios"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			case "politicas": $pos=count($_SESSION["texto"]["politicas"]);
							$_SESSION["texto"]["politicas"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			case "retoquep": $pos=count($_SESSION["texto"]["retoquep"]);
							$_SESSION["texto"]["retoquep"][$pos]=$row["texto_".$_SESSION['idioma']];
							break;
			default:		$_SESSION["texto"][$row["name"]]=$row["texto_".$_SESSION['idioma']];
							break;
		}
	}
	//var_dump($txt);
}

?>