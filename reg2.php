<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';?>



<?php
$nombre = $_POST['nombre'];
$pasword= $_POST['pass'];
$p = exec('echo '.$pasword.'|base64');

$c = $nombre.'","'.$p;
shell_exec('echo \'insert into usuarios (usuario,pass) values("'.$c.'");\'|sqlite3 pag.db');


?>



<div class="contenedor2">
<div class="mensaje" >
 <center>
<?php
	echo " Hola ". $nombre. " <br>
<br>TE REGISTRASTE EXITOSAMENTE" ;
	?>
<div>
<br>
<br>
<br>
	<a class="mensaje" href="index.php">iniciar sesion</a>

</center>
</div>
</div>
<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>