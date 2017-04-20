<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body background="img/fondo3.png" style="">
<form method="get" action="formulario.php" >
<style type="text/css">
	h1
	{
		font-family: Arial;
		color: #b7cccd; 
		size: 500%;
	}
	body
	{
		font-family: cursive;
	}
	table
	{
		border: 10px solid;
		border-color: #415b32;
		border-radius: 20px;
		padding: 5px;
	}
	td
	{
		border: 1px solid;
		border-style: inset;
	}
	#id_submit
	{
		border-radius: 20px ;
		color: darkblue; 
		font-family: impact;
	}
</style>
<meta charset="utf-8">
<table bgcolor="#b7cccd" align="center" width="85%">
<ol>
	<tr>
		<td align="center" id="t1" colspan="3" background="img/green.jpg"><h1> FORMULARIO SISBEN</h1></td>
	</tr>
	<tr>
		<td colspan="3" align="center" bgcolor="#3f888c"> <b>Datos Personales</b>
		</td>
	</tr>
	<tr>
		<td>
			Apellidos: <br> <input type="text" id="id_lastname" name="id_lastname"><br>
			Nombres: <br> <input type="text" id="id_name" name="id_name"><br>
			Tipo de identificación: <br>
			<select name="id_typeid">
			<option>CC cedula</option>
			<option>RE Registro civil</option>
			<option>TI Tarjeta de identidad</option>
			<option>CE Cedula extranjera</option>	
			</select><br>
			Nro: <input type="text" name="id_number">
		</td>
		<td>
			<li>Departamento: </li> <input type="text" name="id_dept">
			<li>Municipio: </li> <input type="text" name="id_muni">
			<li>Barrio: </li> <input type="text" name="id_bar">
		</td>
		<td>
			<li>Fecha de nacimiento: </li> <input type="date" name="id_nacimiento">
			<li>Telefono: </li><input type="text" name="id_cel">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" bgcolor="#3f888c"><b>Datos de la vivienda</b></td>
	</tr>
	<tr>
		<td align="top">
			Tipo de unidad de vivienda: <br>
			<input type="radio" name="id_tipocasa"> Casa o Apartamento <br>
			<input type="radio" name="id_tipocasa"> Cuarto <br>
			<input type="radio" name="id_tipocasa"> Otro tipo de vivienda <br>
			<input type="radio" name="id_tipocasa"> Casa indigena <br>
			
		</td>
		<td>
			<li>Material de las paredes exteriores: </li>
			<input type="radio" name="id_pared"> Bloque, ladrillo, piedra, madera pulida <br>
			<input type="radio" name="id_pared"> Tapia, pisada, adobe <br>
			<input type="radio" name="id_pared"> Madera, tabla, tablón <br>
			<input type="radio" name="id_pared"> cartón, plastico, latas <br>
			<input type="radio" name="id_pared"> Sin parédes <br>
		</td>
		<td>
			<li>La vivienda cuenta con servicios publicos: </li>
			<input type="checkbox" name="id_luz"> Energía electrica <br>
			<input type="checkbox" name="id_agua"> Alcantarillado <br>
			<input type="checkbox" name="id_gas"> Gas natural <br>
			<input type="checkbox" name="id_telefono"> Teléfono <br>
			<li> Estrato: <select name="id_estrato"><option>0</option><option>1</option><option>2</option><option>3</option><option>mayor que 3</option></select></li>
		</td>
	</tr>
	<tr>
		<td width="33%">
			Cuantos cuartos incluyendo sala, comedor<br> y alcoba tiene esta vivienda: 
			<select name="id_cuartos">
				<option>1</option>
				<option>entre 1 y 3</option>
				<option>entre 3 y 5</option>
				<option>mas de 5</option> 
			</select> <br><br>
			Numero de personas en el hogar:  
			<select name="id_personas">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option> 
				<option>5</option>
				<option>6</option> 
			</select> <br>
			</td>
		<td>
			]_El hogar donde usted vive es: <br>
			<input type="radio" name="id_home"> Arrendado<br>
			<input type="radio" name="id_home"> Propio<br>
			<input type="radio" name="id_home"> Anticresado<br>
		</td>
		<td>
			El servicio sanitario que utilizan es: <br>
			<input type="radio" name="id_sanitario"> Inodoro con conexión a alcantarillado<br>
			<input type="radio" name="id_sanitario"> Inodoro con conexión a pozo séptico<br>
			<input type="radio" name="id_sanitario"> Inodoro sin conexión a alcantarillado<br>
			<input type="radio" name="id_sanitario"> letrína<br>
		</td>
	</tr>
	<tr>
		<td>
			Tiene ducha conectada a acueducto: 
			<select name="id_ducha" >
				<option>si</option>
				<option>no</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" bgcolor="#3f888c"> <b>Datos del hogar</b>
		</td>
	</tr>
	<tr>
		<td rowspan="2">
			En donde preparan los alimentos las<br> personas de este hogar<br>
			<input type="radio" name="id_cocina"> En un espacio exclusivo para cocinar<br>
			<input type="radio" name="id_cocina"> En un espacio inapropiado para cocinar<br>
			<input type="radio" name="id_cocina"> No tienen cocina<br><br>

			La cocina o sitio para preparar alimentos es:<br>
			<input type="radio" name="id_alimento"> De uso exclusivo del hogar<br>
			<input type="radio" name="id_alimento"> Compartida con otros hogares<br>	
		</td>
		<td>
			Cual combustible o fuente de energia <br> utilizan principalmente para cocinar: <br>			
			<input type="radio" name="id_energia"> Electricidad<br>
			<input type="radio" name="id_energia"> Gas Natural<br>
			<input type="radio" name="id_energia"> Gas Propano<br>
			<input type="radio" name="id_energia"> keroseno, petroleo<br>
			<input type="radio" name="id_energia"> Carbon mineral<br>
			<input type="radio" name="id_energia"> Ninguno
			<br>
		</td>
		<td rowspan="2">
			El hogar cuenta con los siguientes bienes y servicios:<br>
			<input type="checkbox" name="id_bienes1"> Nevera<br>
			<input type="checkbox" name="id_bienes2"> Lavadora<br>
			<input type="checkbox" name="id_bienes3"> Televisor<br>
			<input type="checkbox" name="id_bienes4"> Tv cable o satelite<br>
			<input type="checkbox" name="id_bienes5"> Ducha eléctrica<br>
			<input type="checkbox" name="id_bienes6"> Horno microondas<br>
			<input type="checkbox" name="id_bienes7"> Aire acondicionado<br>
			<input type="checkbox" name="id_bienes8"> Computador<br>
			<input type="checkbox" name="id_bienes9"> Equipo de sonido<br>
			<input type="checkbox" name="id_bienes10"> Motocicleta<br>
			<input type="checkbox" name="id_bienes11"> Tractor<br>
			<input type="checkbox" name="id_bienes12"> Automovil<br>
		</td>
	</tr>
	<tr>
		<td>
			El servicio telefonico es:<br>
			<select>
				<option>
					De uso exclusivo del hogar
				</option>
				<option>compartido con otros hogares</option>
				<option>no tiene</option>
			</select>		
		</td>
	</tr>
	<tr>
	<td colspan="3" align="center">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/gCYcHz2k5x0" frameborder="0" allowfullscreen></iframe>
	</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="id_submit" id="id_submit" value="Enviar" width="30%">
		</td>
	</tr>
</ol>
</table>
</form>
</body>
</html>