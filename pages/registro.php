<?php
<<<<<<< HEAD
$db_host="mysql7002.site4now.net:3306";
$db_user="litcl4wv_valida";
$db_password="ysGMhg3RcZQZZuvkmEhM";
$db_name="litcl4wv_validacion";
=======
$db_host="localhost";
$db_user="root";
$db_password="HalfCabFlip180";
$db_name="validacion";
>>>>>>> a6d354774fe64fd2c81ac0bba68df60e864518c0
$db_table_name="users";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['nombre']);
$password = md5($_POST['password']);
$telefono = utf8_decode($_POST['telefono']);
$subs_email = utf8_decode($_POST['email']);
 
$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);
 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: login.html');
 
} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`nombre` , `telefono` , `email`,password) VALUES ("' . $subs_name . '", "' . $telefono. '", "' . $subs_email . '", "' . $password. '")';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: login.html');
}
 
mysql_close($db_connection);
		
?>