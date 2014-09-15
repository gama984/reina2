<?php
/**
*
* Clase controlerDo
* 
* Realiza las acciones requeridas por do.php
*
*
*/
class controlerDo{
	
	public function get_info($id){
		$tag = new controler();
		$con = new consultas();
		$idF = $tag->clean($id);
		$log = $con->select ('fotografo'," id = '$idF' AND status = 1");
		
		if($log){ echo json_encode($log); }else{ echo '0'; }
					
	}	
	
	/* ------------ ------------ ------------ */
	
}


/**
* Se invoca la clase
*
*/

$do = new controlerDo();

?>