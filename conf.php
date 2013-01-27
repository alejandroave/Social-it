<?php
$enlace = mysql_connect('localhost', 'root', 'ave9201');
if (!$enlace) {
    die('No se pudo conectar : ' . mysql_error());
}else
{
}

// Hacer que foo sea la base de datos actual
$bd_seleccionada = mysql_select_db('sistema', $enlace);
if (!$bd_seleccionada) {
    die ('No se puede usar la base de datos : ' . mysql_error());
}
else
{

}
?>
