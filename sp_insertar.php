<?php
$conexion=mysqli_connect("127.0.0.1","root","","webregiones");

$usuario=$_POST['usuario'];
$email=$_POST['email'];
$password=$_POST['password'];

$consulta="INSERT INTO cuenta_login(usuario,email,password) VALUES('$usuario','$email','$password')";
$resultado=$conexion->query($consulta);
if($resultado){
   header ("location:login.php");
}
else{
   echo "No se inserto";
}
?>