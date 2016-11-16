<?php 
/*iniciamos la variables de sesion*/
session_start();
/*recojemos los datos*/
$email = $_POST['email'];
$pass = $_POST['pass'];
	/*incluimo la configuracion de la db*/
	include 'config.php';
	/*creamos la conexion y la sentencia*/
	$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
	if($db->connect_errno)
			die('Error de connexio');
		else{
			/*Insertamos el nuevo usuario*/
			$sql="INSERT INTO users(email, passwd) VALUES ('".$email."','".$pass."');";

			$result=$db->query($sql);



		} 




	$db->close();


/*redirigimos al login*/
header('Location: http://php.dev/todo');
 ?>