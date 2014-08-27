<?php
/**
*
* Clase controler
* 
* Clase que modela las etiquetas img, js, css <funciones conforme se desarrolla>
*
*
*/
class controler{
	
	
	/* ---------------------------- ---------------------------- ---------------------------- ---------------------------- Inicia HTML */
	
	public function http(){
		$site = $_SERVER["SERVER_NAME"]=='localhost'?'peacock/':'';
		return 'http://'.$_SERVER["SERVER_NAME"].'/'.$site;
	}
	
	/**
	 * Funcion print_css_tag
	 * 
	 * Imprime la linea de la ruta del archivo css 
	 * 
	 * @param string $file nombre del archivo css por default tomara  el nombre "main"
	 *
	 * @param string $folder carpeta donde se encuentra el archivo css 
	 * por default tomara el nombre de "css"
	 *
	 */	
	
	public function print_css_tag($file='main',$folder='css'){
		$css = $this->http().$folder.'/'.$file.'.css';
		echo "<link href='$css' rel='stylesheet' type='text/css' media='all' />";
	}
	/**
	 * Funcion print_js_tag
	 * 
	 * Imprime la linea de la ruta del javascript 
	 * 
	 * @param string $file nombre del archivo javascript por default tomara el nombre de "main"
	 *
	 * @param string $folder carpeta donde se encuentra el archivo javascript
	 * por default tomara el nombre de "js"
	 */	
	
	public function print_js_tag($file="main",$folder="js"){
		$js = $this->http().$folder.'/'.$file.".js";
		echo "<script src='$js' type='text/javascript'></script>";
	}
	/**
	 * Funcion print_img_tag
	 * 
	 * Imprime la linea de la ruta de la imagen que se agregara 
	 * 
	 * @param string $file nombre del archivo de la imagen
	 *
	 * @param string $folder carpeta donde se encuentra la imagen por default tomara el nombre de "img"
	 *
	 * @param bool $alt agrega los alt a la imagen por default es falso
	 * 
	 * @param bool $class es la clase de la imagen por default es false
	 * 
	 * @param bool $id es el id de la imagen por default es false
	 */	
	public function print_img_tag($file,$class=false,$id=false,$alt=false){
		$img = $this->http().'img/'.$file;
		$alt = $alt?"alt='$alt'":"";
		$class = $class?"class='$class'":"";
		$id = $id?"id='$id'":"";
		echo "<img src='$img' $alt $class $id />";
	}
	
	/**
	 * Funcion icon - link .icon del sitio
	 * 
	 */	
	 public function icon(){
		 echo $this->http().'img/page/icon.png';
	 }
	
	/* ---------------------------- ---------------------------- ---------------------------- ---------------------------- Fin HTML */
	
	
	
	
	/* ---------------------------- ---------------------------- ---------------------------- ---------------------------- Inicia Actions */
	
	/**
	 * Funcion clean
	 * 
	 * @param $string - cadena a sanear
	 */	
	public function clean($string){
		$p = filter_var($string, FILTER_SANITIZE_STRING);
		$p = stripslashes($p);
		
		$p = str_replace(
			array("\\", "¨", "º", "-", "~",
				 "#", "@", "|", "!", "\"",
				 "·", "$", "%", "&", "/",
				 "(", ")", "?", "'", "¡",
				 "¿", "[", "^", "`", "]",
				 "+", "}", "{", "¨", "´",
				 ">", "< ", ";", ",", ":",
				 ".", " ", "="),
			'',
			$p
		);
		return $p;
	}
	
	/* ---------------------------- ---------------------------- ---------------------------- ---------------------------- Fin Actions*/
	
}


/**
* Se invoca la clase de la etiquetas html
*
*/
$tag = new controler();

?>