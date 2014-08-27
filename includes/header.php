<!DOCTYPE HTML lang="es">
<html><head>
    
        <title> **Reina Blanca Studio - Wedding Photography Cancun, Playa del Carmen, Mexico</title>
        <meta name="description" content="Professional Wedding Photographers company in Cancun, Playa del Carmen and Tulum - Mexico">
        <meta name="keywords" content="Riviera Maya Wedding Photographer, professional wedding photographers, Wedding Photographer Playa del Carmen, Photographer Cancun, Wedding Photographer Playa del Carmen, wedding in mexico, wedding photography cancun">
        <meta name="robots" content="index">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php
			
			
			//Incluir controladores
			$h = $_SERVER['SERVER_NAME'];
			$s = $_SERVER['SCRIPT_NAME'];
			$url = $h.$s;
			$last = strrpos($url, '/'); // Ultima posicion
			$fin = substr($url, 0, $last); // Eliminar nombre archivo
			$kn = substr($fin, strrpos($fin, '/') + 1); // Nombre folder
			
			if($kn == 'admin' || $kn == 'cliente'){
				//DB - TagsHTML
				include('../functions/db.php');
				include('../functions/controler.php');
			}else{
				//DB - TagsHTML
				include('functions/db.php');
				include('functions/controler.php');
			}
			

			session_start();
			if(!isset($_SESSION['idioma'])){
				//1->ingles 2->español 3->frances
				$si = 'si';
				include 'functions/stuff.php';
				$_SESSION['idioma'] = 1; //ingles default
				texto();
			}
			
			//contador visitas
			if(!isset($_SESSION['contador'])){
				$sql   = $conn->lastID('views');
				
				if( $sql['date'] == date("m-Y") ){
					$id    = $sql['id'];
					$total = $sql['qty'] + 1;
					$up    = $conn->update('views'," qty = '$total' "," id = '$id' ");
				}else{
					$date = date("m-Y");
					$in   = $conn->insert('views'," '1', '$date' ");
				}
				$_SESSION['contador'] = 1;
			}

			//jquery
			$tag->print_js_tag('jquery.min');

			
			//Bootstrap
			$tag->print_css_tag('bootstrap.min');
			$tag->print_css_tag('bootstrap-responsive.min');
			$tag->print_js_tag('bootstrap.min');
			$tag->print_js_tag('bootbox.min');
			$tag->print_js_tag('tooltip');
			
			//ccs - js
			$tag->print_js_tag('main');
			$tag->print_css_tag('main');
			
			//variables idioma
			$menu        = $_SESSION["texto"]["menu"];
			$footer      = $_SESSION["texto"]["footer"];
			$index       = $_SESSION["texto"]["index"];
			$nosotros    = $_SESSION["texto"]["nosotros"];
			$portafolios = $_SESSION["texto"]["portafolios"];
			
		?>
        <link href='<?php $tag->icon();?>' rel='icon' type='image/x-icon'/>
        
        <script type="text/javascript">
			//Google Analytics
		</script>
        
    </head>
    
	<body>
    <div class="body">
    <!---- Menu -----> 
    <?php 
		if($kn != 'admin')
		include('includes/menu.php'); 
	?>