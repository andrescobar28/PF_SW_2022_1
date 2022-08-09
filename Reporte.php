<?php session_start(); ?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css" />
	
	<script src="jquery-3.4.1.js"></script>  <!-- plugin jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
	<title>Reporte infraestructura vial de Santiago de Cali</title>
	
	<style>
	
	*{	
		padding: 0% ;
		margin: 0% 0%;		
	}
	
	html, body{
	height:100% ;
	width:100% vw;
	}
	
	#total{
	height:100% ;
	width:100% ;
	}
	
	#titulo{
	color:FireBrick; 
	font-size: 250%;
	}
	
	#texto{
	color:white; 
	font-size: 100%;
	}
	
	#texto2{
	color:white; 
	font-size: 300%;
	}
	
	#img{
	width:100%;
	height:100%;}
	
	#datos{
	position:relative;
	float:center;
	width:30%;
	height:90%;
	background-color:Salmon;
	top:-95%;
	border-radius:38px;
	outline: 3px solid IndianRed;
	outline-offset: -14px;
	left:35%;}
	
	#geovisor{
	background-color:FireBrick;
	border-color:FireBrick;
	color:white;
	width:40%;
	font-size: 100%;
	border-radius:7px;
	align:"center"
	}
	
	</style>
	
	</head>	
	<body>
	<form class="formulario" id="formulario" action="subir_reporte.php" method="POST">
		<div id="total" style="z-index:0">
				<div id="img" style="z-index:1">
				</div>

				<div id="datos" style="z-index:1">
				<br><br><p align="center" id="titulo">REPORTE</p>

				<p align="center" id="texto">Tipo de reporte<br name="REPORTE_Digitado">
				<select name="Tipo de reporte">
			   	<option value="1">Deformaciones</option>
			   	<option value="2">Pérdida de las capas de la estructura</option>
			   	<option value="3">Daños superficiales</option>
			   	<option value="4">Fisuras</option> 
			   	<option value="5">Otros</option>
				</select>

				<br><br><p align="center" id="texto">Descripción<br>
				<textarea placeholder="Descripcion" style="width:70%;height:15%" name="Descripcion_digitado"></textarea>

				<br><br><p align="center" id="texto">Fecha y hora<br>
				<input type="datetime-local" name="Fecha_Hora_digitado">

				<br><br><p align="center" id="texto">Direccion<br>
				<input type="text" id="direccion" placeholder="Direccion:" style="width:50%" name="Direccion_Digitado">

				<br><br><p align="center" id="texto">Barrio<br>
				<input type="text" id="Barrio" placeholder="Barrio:" style="width:50%" name="Barrios_Digitado">



				<!-- <br><br><p align="center" id="texto">
				<br><br><p align="center"><a id="registro"><input type="submit" value="Submit"><br><br> <!-- input tipo enviar -->
				<!-- <br><br><p align="center"><a id="registro" href="identificado.php"><input type ="button" value= "Volver al visor" id="geovisor"> -->
				 -->
				<div class="formulario__grupo formulario__grupo-btn-enviar" >
				<br><br><p align="center" id="texto">
				<br><br><p align="center"><button id="registro" type="submit">Enviar</button>
				
				
				
				<br><br><p align="center"><a id="visor" href="identificado.php"><input type ="button" value= "Volver al visor" id="geovisor">
				</div>
		</div>
	</form>
	</body>

	