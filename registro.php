<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
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
	      <li class="active"><a href="registro.php">registro</a></li>
	    </ul>
	  </div>
	</nav>	

	<div clas="container"> 
		<div class="jumbotron col-xs-10 col-xs-offset-1"><h1>Registro</h1>
			
		</div> 
		<form method="POST" action="lib/crear.php">
			<div class="form-group col-xs-6 col-xs-offset-3">
	    		<label for="email">Email:</label>
	    		<input type="mail" class="form-control" name="email">
	 		</div>
	 		<div class="form-group col-xs-6 col-xs-offset-3">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="pass">
		  </div>
				
			<button type="submit" class="btn btn-default col-xs-6 col-xs-offset-3 ">Enviar</button>
		</form>
	</div>
</body>
</html>