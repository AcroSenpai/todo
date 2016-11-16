<?php 
/*iniciamos la variables de sesion*/
session_start();
/*incluimo la configuracion de la db*/
include 'config.php';
	/*recojemos los datos*/
	$descripcio = $_POST['desc'];
	$data = $_POST['data'];
	$user = $_SESSION['id'];

		/*creamos la conexion y la sentencia*/
		$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
		if($db->connect_errno)
			die('Error de connexio');
		else{
			/*Insertamos la nueva task*/
			$sql="INSERT INTO task(descripcio, user, data) VALUES ('".$descripcio."','".$user."','".$data."');";

			$result=$db->query($sql);



		} 
		/*Cerramos la conexion*/
		$db->close();
/*Redirigimos*/
header('Location: http://php.dev/todo/task.php');
 ?>