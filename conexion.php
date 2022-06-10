<?php
class conexion
{
	public $conection;
	function __construct()
	{
		$this->conection=mysqli_connect('localhost','root','','facebook');  
	}
}


?> 