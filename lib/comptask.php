<?php 
/*iniciamos la variables de sesion*/
session_start();
/*recojemos el id*/
$task = $_GET['id'];
/*incluimo la configuracion de la db*/
include 'config.php';

		/*creamos la conexion y la sentencia*/
		$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
		if($db->connect_errno)
			die('Error de connexio');
		else{
			/*cambiamos de 0 a 1 el completed*/
			$sql="UPDATE task SET completed = 1 WHERE id = $task";

			$result=$db->query($sql);


		} 
		$db->close();
		/*redirigimos a task*/
header('Location: http://php.dev/todo/task.php');

 ?>



 