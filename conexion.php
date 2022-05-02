<?php 
$servidor = "127.0.0.1"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "root"; // El usuario que acabamos de crear en la base de datos 
$contraseña = ""; // La contraseña del usuario que utilizaremos 
$BD = "webregiones"; // El nombre de la base de datos 
$conexion=mysqli_connect("127.0.0.1","root","","webregiones");
if($conexion)
{
    echo("");
}
else
{
    echo("Error en conexion");
}
?>