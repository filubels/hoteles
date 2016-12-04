<?php

	include_once('../db/funsql.php');

	if(isset($_POST)){
		$nombre=isset($_POST['nombre'])? $_POST['nombre']:'';
		$direccion=isset($_POST['direccion'])? $_POST['direccion']:'';
		$telefono=isset($_POST['telefono'])? $_POST['telefono']:'';
		$cod_personal=isset($_POST['contacto'])? $_POST['contacto']:'';
		
	
		if($result=set_hostal($nombre,$direccion,$telefono,$cod_personal)){

		}else{

		}

	}	
?>