<?php
require_once('publicaciones.php');
$publicaciones=new publicaciones();
$datos=$_REQUEST;
$user=$datos['user'];
$desc=$datos['desc'];
$est=$datos['est'];
$img=null;
///guardo la publicacion
$publicaciones->store($user,$desc,$est,$img);
///busco el ultimo id de regisstrado
$last=$publicaciones->last_id();
//busco el registro completo 
$registro=$publicaciones->show($last[0]['pub_id']);

echo json_encode($registro);

?>


 
