<?php
/*******************
** Nombre      : Conexion DB
** Descripcion : Crea el objeto para las consultas del sitio
** Fecha       : Agosto 2014
** Autor       : ivanpoot
*******************/
class consultas{
	private $conection;
	private $hostname;
	private $username;
	private $passw;
	private $bd;
	
	public $lastID;
	
	function __construct(){		
		/*** mysql hostname ***/
		$this->hostname = '127.0.0.1';
		/*** mysql username ***/
		$this->username = 'root';
		/*** mysql password ***/
		$this->password = '';
		/*** mysql BD ***/
		$this->bd= 'reinabla_pick';
		$this->lastID= 0;
	}
	private function conectar(){
		try {
		$this->conection = new PDO("mysql:host=$this->hostname;dbname=$this->bd", $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	private function desconectar(){
		/*** Cierra conexion ***/
		$this->conection = null;
	}
	
	public function all($table=''){
		$this->conectar();
		$stmt = $this->conection->query("SELECT * FROM $table");
		/*** return ***/
		$result = $stmt->fetchALL();
		$this->desconectar();
		return $result;
	}
	
	public function select($table='',$cond=''){
		$where = $cond==""?"":"WHERE $cond";
		$this->conectar();
		$stmt = $this->conection->query("SELECT * FROM $table $where");
		/*** return ***/
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->desconectar();
		return $result;
	}
	
	public function update($table='',$param='',$cond=''){
		$where = $cond==""?"WHERE id = 0":"WHERE $cond";
		$this->conectar();
		$stmt = $this->conection->query("UPDATE $table SET $param $where");
		/*** return ***/
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->desconectar();
		return $result;
	}
	
	public function delete($table='',$cond=''){
		$where = $cond==""?"WHERE id = 0":"WHERE $cond";
		$this->conectar();
		$stmt = $this->conection->query("DELETE FROM $table $where");
		/*** return ***/
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->desconectar();
		return $result;
	}
	
	public function insert($table='',$rows=''){
		$this->conectar();
		$stmt = $this->conection->query("INSERT INTO $table VALUES (NULL,$rows)");
		/*** return ***/
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->desconectar();
		return $result;
	}
	
	public function lastID($table=''){
		$this->conectar();
		$stmt = $this->conection->query("SELECT * FROM $table WHERE id = (SELECT MAX(id) FROM $table)");
		/*** return ***/
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->desconectar();
		return $result;
	}
	
	public function sum($table='',$cond=''){
		$where = $cond==""?"":"WHERE $cond";
		$this->conectar();
		$stmt = $this->conection->query("SELECT SUM(qty) FROM $table $where");
		/*** return ***/
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->desconectar();
		return $result;
	}
}

$conn = new consultas();

/*$res = $conn->all('page_text');
foreach($res as $item){
	echo $item['name'].'<br>';
}*/

/*$res = $conn->select('page_text','id = 1');
echo $res['name'];*/

/*$up = $conn->update('admin',' nivel = 1, status = 1 ',' id = 2 ');*/

/*$de = $conn->delete('admin',' id = 2 ');*/

/*$in = $con->insert('user'," 'playa', '123456789' ");*/

/*$sql = $conn->lastID('views');
echo $sql['id'];*/

?>