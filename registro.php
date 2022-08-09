<?php
session_start();
$host = 'localhost';
$port = '5433';
$base_datos = 'DB_Proyecto_SIGWEB';
$usuario1 = 'postgres';
$pass = 'p';
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario1 password=$pass");


$R_usuario=$_POST['usuario']; // Se guarda en una variable cada entrada definida en el formulario
$R_nombre=$_POST['nombre']; // Se guarda en una variable cada entrada definida en el formulario
$R_correo=$_POST['correo']; // Se guarda en una variable cada entrada definida en el formulario
$R_pass=$_POST['password']; // Se guarda en una variable cada entrada definida en el formulario (codificamos la contraseña en MD5)
$R_telefono=$_POST['telefono']; // Se guarda en una variable cada entrada definida en el formulario


$sql ="INSERT INTO userr(numdoc_user, nombres_user, email_user,password_user,contacto_user) VALUES('$R_usuario', '$R_nombre', '$R_correo','$R_pass','$R_telefono');"; // Ingreso de registro en SQL (parametros de usuario)
$resultado = pg_query($conexion, $sql); // Se ejecuta la consulta en PostgreSQL con la conexión definida anteriormente


$_SESSION['Nombre_usuario']=$R_nombre;

// echo "usuario:".$R_usuario."/ nombre: ".$R_nombre."correo:".$R_correo."password:".$R_pass."telefono:".$R_telefono;

header('Location: identificado.php');


?>