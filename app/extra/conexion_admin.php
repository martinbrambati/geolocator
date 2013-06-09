<?php
require_once 'precios.php';
require_once 'tipoprecios.php';
require_once 'textos.php';

class Conexionadmin {
		
	function Conexionadmin(){
		
	}
	
	function openConnection(){
     $conexion= mysql_connect("localhost", "adminmalka", "4dfe63TvvdcDKa8H");
      mysql_select_db("adminmalka", $conexion);
      return $conexion;
	}	
	
	function closeConnection($connection){
		mysql_close($connection);	
	}
	
	function selectCount($query){
		$conexion = $this->openConnection();
		$result = mysql_query($query, $conexion) or $this->printErr(mysql_error());
		$resultado = mysql_fetch_row($result);
		mysql_free_result($result);	
		$this->closeConnection($conexion);
		return $resultado[0]; 
	}
	
	function select($query,$classType){
		$conexion = $this->openConnection();
			$result = mysql_query($query, $conexion) or $this->printErr(mysql_error());
			$object = mysql_fetch_object($result,$classType);
			$i=0;
			while($object){
				
				$arrayToReturn[$i] = $object;
				$object = mysql_fetch_object($result,$classType);
				$i++;
			} 
		mysql_free_result($result);	
		$this->closeConnection($conexion);
		return $arrayToReturn;
	}
	
	function insert($object){
		$conexion = $this->openConnection();
				
		
			$query = "insert into ".strtolower(get_class($object)) ." values(";
			
			foreach ($object as $key=>$val){
				
				if(string == gettype($val)){
					$val = "'".$val."'";
				}else 
				if(!$val){
					$val = "null";
				}
				
				$query = $query." ".$val.", ";
			}
			$query = substr($query,0,sizeof($query)-3);
			$query = $query." )";
						 
			$result = mysql_query($query,$conexion) or $this->printErr(mysql_error());;
			$seqId = mysql_insert_id();  
		$this->closeConnection($conexion);
		return $seqId;
	}
	
	function update($object){
		$conexion = $this->openConnection();
		$query = "update table ".strtolower(get_class($object)) ." set ";
		
		
		
		$result = mysql_query($query, $conexion) or $this->printErr(mysql_error());
		$this->closeConnection($conexion);
		return $seqId;
	}
	
	function printErr($err){
		echo($err);
	}
}
?>