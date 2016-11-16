<?php 
/*iniciamos la variables de sesion*/
session_start();
/*Creamos la cookie*/
setcookie("email",$_SESSION['email'],time()+1800,"/todo","",0); 


/*incluimo la configuracion de la db*/
include 'lib/config.php';
/*si la variable de session id esta vacia nos redirige al login*/
if($_SESSION['id']==""){

	header('Location: http://php.dev/todo');
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>task</title>
 	
 	<link rel="stylesheet" type="text/css" href="css/css.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">TODO</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="index.php">Login</a></li>
	      <li><a href="registro.php">registro</a></li>
	      <li class="active"><a href="#">Tareas</a></li>
	      <li><a href="nuevatarea.php">Nueva Tarea</a></li>
	    </ul>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
     		<li><a href="lib/cerrarsesion.php">Salir</a></li>
    </ul>
	  </div>
	</nav>
	<div class="container">
 		<h1>Usuario: <?=$_SESSION['email']?></h1>
<?php 
/*creamos la conexion y la sentencia*/
$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
		if($db->connect_errno)
			die('Error de connexio');
		else{
			
			$sql="SELECT * from task";

			/*ejecutamos la sentencia*/
			$result=$db->query($sql);
			while($rows=$result->fetch_array()){
				/*printamos la task si coincide el id con el de la variable de session.*/
				if($rows['user'] == $_SESSION['id'])
					{
						/*compruebo si esta completada*/
						if($rows['completed'] == TRUE){
							/*si esta completada  tiene una clase para tacharla y aparecera el boton deshacer*/
							echo "<div><span class='comp'>";
							echo $rows['data'].' ';
							echo $rows['descripcio'].' ';
							/*envio el id de la task por metodo get para saber ha que taska hace referencia*/
							echo "</span><a href='lib/descomptask.php?id=";
							echo $rows['id'];
							echo "'>Deshacer </a>";
							echo "<a href='lib/borrartask.php?id=";
							echo $rows['id'];
							echo "'>Borrar</a>";
							echo "</div></br>";
						}else{
							/*si no esta completada aparecera el boton completar*/
							echo "<div><span>";
							echo $rows['data'].' ';
							echo $rows['descripcio'].' ';
							echo "</span><a href='lib/comptask.php?id=";
							echo $rows['id'];
							echo "'>Completar </a>";
							echo "<a href='lib/borrartask.php?id=";
							echo $rows['id'];
							echo "'>Borrar</a>";
							
							echo "</div></br>";
						}
					}
			}

		} 
		/*cerramos la conexion*/
	$db->close();?>
 


 </div>
 </body>
 </html>