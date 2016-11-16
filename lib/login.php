<?php 
/*iniciamos la variables de sesion*/
session_start();
/*recojemos los datos del formulario*/
$email = $_POST['email'];
$pass = $_POST['pass'];
$id = 0;
/*incluimo la configuracion de la db*/
include 'config.php';
	/*creamos la conexion y la sentencia*/
	$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
	$sql="SELECT * from users where email = $email AND passwd = $pass";
	/*ejecutamos la sentencia*/
	$result=$db->query($sql);
	$cont=0;
	while($rows=$result->fetch_array()){
		/*guardamos el id del usuario*/
		$id= $rows['id'];
		/*sumamos el contador*/
		$cont++;
	}

	/*si $cont es igual a 1 significa que hay el usuario esta registrado*/
	if($cont == 1){
		/*creamos la variable de session del email y del id*/
		$_SESSION['email']=$email;
		$_SESSION['id']=$id;
		/*redirigimos al las task*/
		header('Location: http://php.dev/todo/task.php');

	}else{
		/*redirigimos al mismo sitio*/
		header('Location: http://php.dev/todo');

	}
	/*cerramos la conexion*/
	$db->close();


 ?>