<?php
session_start();
$host = 'localhost';
$port = '5433';
$base_datos = 'DB_Proyecto_SIG3';
$usuario1 = 'postgres';
$pass = 'p';
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario1 password=$pass");


$usuario=$_POST['user'];
$clave=$_POST['pass'];

$Validacion_User="SELECT numerodoc_admin,password_admin FROM public.admin WHERE numerodoc_admin='$usuario' AND password_admin='$clave'";
$consulta=pg_query($conexion,$Validacion_User);


$todos_barrios = array(
);
$obtener_todos_barrios="SELECT nombre_bar FROM public.barrios";
$consulta_obtener_todos_barrios=pg_query($conexion,$obtener_todos_barrios);
for($i = 0; $i < pg_num_rows($consulta_obtener_todos_barrios); ++$i) {
  array_push($todos_barrios, pg_fetch_object($consulta_obtener_todos_barrios, $i));
  // $todos_barrios[$i]['salt'] = pg_fetch_object($consulta_obtener_todos_barrios, $i);
};
$_SESSION['Barrios_Cali']=$todos_barrios;
$_SESSION['id_inicial_3']=1;
if(pg_num_rows($consulta)>0){
    // print_r($todos_barrios);
    $_SESSION= null;
    $Consulta_nombre="SELECT nombres_admin FROM public.admin WHERE numerodoc_admin='$usuario'";
    $Nombre_Obtenido=pg_query($conexion,$Consulta_nombre);
    
    while ($row = pg_fetch_object($Nombre_Obtenido)) {
        $_SESSION['Nombre_usuario']=$row->nombres_admin;
      }
    header('Location: identificado.php');
}else{
    echo "<script>
        alert('Datos Incorrectos');
                window.location='login.html'
                </script>";
}



?>