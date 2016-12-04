<?php

	include_once('../db/funsql.php');

	if(isset($_POST)){
		$id=isset($_POST['id_hostal'])? $_POST['id_hostal']:'';
		
		if($result=delete_hostalById($id)){
		//	header('Location:../hostal.php');
		}else{

		}

	}	
?>