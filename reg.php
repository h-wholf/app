<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';?>
<div>
    <center><a class="titulo" >APP CONCEPT</a></center>
</div>

<form action="reg2.php" method="post">
<div class="contenido">
	
<div class="inputBox">
	<input id="nombre" name="nombre" type="tetx" required="required">
	<span>ELIGE UN NOMBRE DE USUARIO</span></div>
<div class="inputBox">
	<input id="pass" name="pass" type="password" required="required">
	<span>ELIGE UNA CONSTRASEÑA</span>
</div>
<div >
	<button class="boton" type="submit">REGISTRARME</button>
</div>
</div>
</form>
<div class="fondo">

	</div>

<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>