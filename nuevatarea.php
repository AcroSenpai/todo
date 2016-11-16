<?php 
/*iniciamos la variables de sesion*/
session_start();
/*si la variable de session id esta vacia nos redirige al login*/
if($_SESSION['id']==""){

	header('Location: http://php.dev/todo');
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nueva tasca</title>
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
	       <li><a href="lib/task.php">Tareas</a></li>
	      <li class="active"><a href="#">Nueva Tarea</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
     		<li><a href="lib/cerrarsesion.php">Salir</a></li>
    </ul>
	  </div>
	</nav>
<div class="container"> 
<form action="lib/newtask.php" method="POST">
	<div class="form-group col-sm-6 col-sm-offset-3">
		<label for="email">Descripcion:</label>
		<input type="text" class="form-control" name="desc">
		</div>
		<div class="form-group col-sm-6 col-sm-offset-3">
	    <label for="data">Data:</label>
	    <input type="date" class="form-control" name="data">
	</div>
				
	<button type="submit" class="btn btn-default col-sm-6 col-sm-offset-3 ">Enviar</button>
</form>

</div>	
</body>
</html>