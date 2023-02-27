<?php 
require 'BD/conexion_bd.php';

class categorias extends BD_PDO
{
	function Ins ($nombre,$fecha)
	{
		$this -> Ejecutar_Instruccion ("Insert into categorias (Nombre,Fecha) values ('$nombre','$fecha')");
	}
	function Mod ($nombre,$fecha,$id)
	{
		$this -> Ejecutar_Instruccion("Update categorias set Nombre = '$nombre', Fecha = '$fecha' where id_categoria = '$id'");
	}
	function Bus($DaB)
	{
		$this -> Ejecutar_Instruccion("Select * from categorias where Nombre like '%$DaB%'");
	}
	function Eli($id)
	{
		$this -> Ejecutar_Instruccion("Delete from categorias where id_categoria = '$id'");
	}
}

?>