<html>


<?php

$enlace = mysql_connect('localhost', 'root', 'ave9201');
if (!$enlace) {
    die('No se pudo conectar : ' . mysql_error());
}else
{
echo 'si se conecto';
}

// Hacer que foo sea la base de datos actual
$bd_seleccionada = mysql_select_db('sistema', $enlace);
if (!$bd_seleccionada) {
    die ('No se puede usar foo : ' . mysql_error());
}
else
{
echo 'si se pudo' ;
}

?>

</html>
