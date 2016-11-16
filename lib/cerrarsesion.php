<?php 
/*iniciamos las variables de session*/
session_start() ; 
/*cerramos la sesion*/
session_destroy();
/*redirigimos*/
header('Location: http://php.dev/todo');

 ?>