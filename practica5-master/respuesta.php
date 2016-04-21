<!DOCTYPE html>
<html>
<body>

<font color="blue" size="20"> 
<?php 
$c ='patmaxx@hotmail.es';
$contra ='123456789';
if ($_POST)
{
$correo =$_POST ["correo"];
$contraseña =$_POST  ["contraseña"];
}


if (($correo == $c) && ($contraseña == $contra))
{
 echo "BIENVENIDO";
}
elseif ($correo != $c) 
{
 echo "tu correo no coincide";


}
 elseif ($contraseña != $contra) {

 	echo "tu contraseñano coincide";
 }

?>
</font>
</body>
</html>