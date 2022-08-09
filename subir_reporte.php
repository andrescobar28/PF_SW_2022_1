<?php
session_start();
$host = 'localhost';
$port = '5433';
$base_datos = 'DB_Proyecto_SIGWEB';
$usuario1 = 'postgres';
$pass = 'p';
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario1 password=$pass");

$id_inicial=100;
if ($_SESSION['id_inicial_2']=100){
    $_SESSION['id_inicial_3']=$_SESSION['id_inicial_3']+1
    ;
}

$id_reporte=$_SESSION['id_report']+1;
$id_report=$id_inicial+$_SESSION['id_inicial_3'];
$R_id_reportero=$_SESSION["Nombre_usuario"];
$R_reporte_digitado=$_POST['REPORTE_Digitado']; // Se guarda en una variable cada entrada definida en el formulario
$R_Descripcion_digitado=$_POST['Descripcion_digitado']; // Se guarda en una variable cada entrada definida en el formulario
$R_Fecha_Hora_digitado_digitado=$_POST['Fecha_Hora_digitado_digitado']; // Se guarda en una variable cada entrada definida en el formulario
$R_Direccion_Digitado=$_POST['Direccion_Digitado']; // Se guarda en una variable cada entrada definida en el formulario (codificamos la contraseña en MD5)
$R_Barrios_Digitado=$_POST['Barrios_Digitado']; // Se guarda en una variable cada entrada definida en el formulario


$sql2 ="INSERT INTO userr(geom, id_reporte, id_repor_1, tipo_repor, descripcio, fecha_repo, direccion_, id_comuna_, id_barrio_, id_tramo_t, estado_rep, fecha_chec)  VALUES('1','$id_report','$R_id_reportero','$R_reporte_digitado', '$R_Descripcion_digitado','$R_Fecha_Hora_digitado_digitado','$R_Direccion_Digitado','11','$R_Barrios_Digitado','1438','1','2022/03/07 01:29:27.1');"; // Ingreso de registro en SQL (parametros de usuario)
$resultado_insert = pg_query($conexion, $sql2); // Se ejecuta la consulta en PostgreSQL con la conexión definida anteriormente



$_SESSION['id_inicial_2']=100;


// echo "usuario:".$R_usuario."/ nombre: ".$R_nombre."correo:".$R_correo."password:".$R_pass."telefono:".$R_telefono;

header('Location: identificado.php');


?>