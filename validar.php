<?php
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;

$conexion=mysqli_connect("127.0.0.1","root","","webregiones");

$consulta="SELECT * FROM cuenta_login WHERE email='$email' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
   header ("location:index.php");
}else{
   echo'<script type="text/javascript">
   alert("USUARIO NO REGISTRADO");
   window.location.href="register.php";
   </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>