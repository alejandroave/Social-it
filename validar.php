<html>

<body>
<?php

include 'conf.php';

$nombre=$_POST[usuario];
$pas=$_POST[password];



$c_usuario = "SELECT pass,user  FROM usuarios WHERE user='$nombre'";
$res = mysql_query("$c_usuario") or die(mysql_error());


if($row = mysql_fetch_array($res))
{
if($row[pass] == $pas)
{
echo 'bieenvenido ';
echo '<a href="plant.html">SIS</a>';
}else{
echo 'password incorrecto';
}
}else
{
echo 'no exite el usuario';
}

?>

</body>
</html>
