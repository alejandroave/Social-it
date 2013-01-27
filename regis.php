<html>

<body>
<?php

include 'conf.php';

$user=$_POST[user];
$pass=$_POST[pass];
$nombre=$_POST[nombre];
$apeido=$_POST[apeido];
$matricula=$_POST[matricula];
$sem=$_POST[sem];
$facu=$_POST[facu];

$c_usuario = "SELECT user FROM usuarios WHERE user='$user'";
$res = mysql_query("$c_usuario") or die(mysql_error());


if($row = mysql_fetch_array($res))
{
echo 'ya existe ese usuario trata con otro';
}else
{

$sql= "INSERT INTO usuarios(user,pass,nombre,apeido,matricula,sem,facu) VALUES('$user','$pass','$nombre','$apeido','$matricula','$sem','$facu')";
mysql_query($sql) or die(mysql_error());
echo 'registrado';
echo '<a href="index.html">LOGIN IN</a>';
}



?>

</body>
</html>

