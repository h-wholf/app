<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';?>


<div class="contenedor2">
<div class="mensaje" >
<?php
$n = $_POST['nombre'];
$nombre = exec('echo \'select usuario from usuarios where usuario="'.$n.'";\'|sqlite3 pag.db');

$p = $_POST['pass'];
$pp = exec('echo '.$p.'|base64');  
$pass = exec('echo \'select pass from usuarios where pass="'.$pp.'";\'|sqlite3 pag.db');
echo $nombre;

echo '<br>pasword '.$pass;


if (($nombre!="") && ($pass!="")) {
	echo " hola ". $nombre. " tienes acceso" ;
	echo "<SCRIPT LANGUAGE=\"javascript\"> setTimeout(\"location.href= 'libro_agregar.php'\",5000)</SCRIPT>";
}else {
	echo "  lo lamentamos no tienes acceso a la pagina";
}

?>

</div>
<div>
	
	<a class="mensaje" href="index.php">regresar al inicio</a>

</div>
<div>
	
	<a class="mensaje" href="reg.php">solicitud de registro</a>

</div>

</div>





<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>
