<?php
require_once("conexion.php");
class publicaciones extends conexion
{
	public function store($usuario,$descripcion,$estado,$imagen)
	{
		$fecha=date('Y-m-d');
		$hora=date('H:i:s');
		$sql="INSERT INTO publicaciones
              (pub_usuario,pub_fecha,pub_hora,pub_descripcion,pub_estado,pub_imagen)
              values('$usuario','$fecha','$hora','$descripcion','$estado','$imagen')";

		return $this->conection->query($sql);
	}
    
    public function last_id(){
    	$result=$this->conection->query("SELECT LAST_INSERT_ID() AS pub_id");
    	return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function show($pub_id){
    	$result=$this->conection->query("SELECT * FROM publicaciones WHERE pub_id=$pub_id");
    	return $result->fetch_all(MYSQLI_ASSOC);
    }


}


?>