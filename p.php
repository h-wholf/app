<?php

$nombre = "juan";
$p = 'perro';

#$c = '"'.$nombre.'","'.$p.'"';
$c = $nombre.'","'.$p;
shell_exec('echo \'insert into usuarios (usuario,pass) values("'.$c.'");\'|sqlite3 pag.db');
?>
