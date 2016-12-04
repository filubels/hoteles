<?php
//llamndo parametros de conexión
require_once('credenciales.php');
//invocando conexión metodo mysqli
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';
//verfica si se estable la conexión
if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

//+++++++++++++++++++  Sentencias personales   +++++++++++++++++++++


//insert

function set_hostal($nombre,$direccion,$telefono,$cod_personal){
	global $mysqli;
	$sql="INSERT INTO hostal (nombre,direccion,telefono,cod_personal)VALUES( '{$nombre}','{$direccion}','{$telefono}','{$cod_personal}')";
	echo ($sql);
	$mysqli->query($sql);
}
function set_habitacion($num_habitacion,$tipo,$bano,$precio,$cod_hostal){
	global $mysqli;
	$sql="INSERT INTO habitacion (num_habitacion,tipo,bano,precio,cod_hostal)VALUES('{$num_habitacion}','{$tipo}','{$bano}','{$precio}','{$cod_hostal}')";
	$mysqli->query($sql);
}
function set_actividad($cod_actividad,$nombre,$descripcion,$nivel){
	global $mysqli;
	$sql="INSERT INTO actividad (cod_actividad,nombre,descripcion,nivel)VALUES('{$cod_actividad}','{$nombre}','{$descripcion}','{$nivel}')";
	$mysqli->query($sql);
}
function set_personal($cod_personal,$identificacion,$nombre,$direccion,$telefono,$cod_hostal){
	global $mysqli;
	$sql="INSERT INTO personal (cod_personal,identificacion,nombre,direccion,telefono,cod_hostal)VALUES('{$cod_personal}','{$identificacion}','{$nombre}','{$direccion}','{$telefono}','{$cod_hostal}')";
	$mysqli->query($sql);
}

function set_actividad_hostal($cod_hostal,$cod_actividad,$dia){
	global $mysqli;
	$sql="INSERT INTO actidad_hostal (cod_hostal,cod_actividad,dia)VALUES('{$num_habitacion}','{$tipo}','{$bano}','{$precio}','{$cod_hostal}')";
	$mysqli->query($sql);
}

//select

function get_hostal(){
	global $mysqli;
	$sql="SELECT * FROM hostal";
	return $result=$mysqli->query($sql);

}
function get_habitacion(){
	global $mysqli;
	$sql="SELECT * FROM habitacion";
	return $result=$mysqli->query($sql);
}
function get_actividad(){
	global $mysqli;
	$sql="SELECT * FROM actividad";
	return $result=$mysqli->query($sql);
}
function get_personal(){
	global $mysqli;
	$sql="SELECT * FROM personal";
	return $result=$mysqli->query($sql);
}
function get_actividad_hostal(){
	global $mysqli;
	$sql="SELECT * FROM actividad_hostal";
	return $result=$mysqli->query($sql);
}


function get_hostalByID($id){
	global $mysqli,$result;
	$sql="SELECT * FROM hostal";
	return $result=$mysqli->query($sql);
}
function get_habitacionByID($id){
	global $mysqli;
	$sql="SELECT * FROM habitacion";
	return $result=$mysqli->query($sql);
}
function get_actividadByID($id){
	global $mysqli;
	$sql="SELECT * FROM actividad";
	return $result=$mysqli->query($sql);
}
function get_personalByID($id){
	global $mysqli;
	$sql="SELECT * FROM personal";
	return $result=$mysqli->query($sql);
}
function get_actividad_hostalByDia($dia){
	global $mysqli;
	$sql="SELECT * FROM actividad_hostal";
	return $result=$mysqli->query($sql);
}

//+++++++++++++++++++++++++ Funciones Join ++++++++++++++++




//+++++++++++++++++++++++++  Update +++++++++++++





//+++++++++++++++++++++++++ Delete  ?????
function delete_hostalById( $id )
{
	global $mysqli, $result;
	settype($id, 'integer');
	$sql = 'DELETE FROM hostal WHERE cod_hostal=' . $id;
	echo "$sql";
	return $mysqli->query($sql);
}