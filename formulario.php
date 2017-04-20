<head>
  <title>FORMULARIO SISBEN</title>

</head>
<body>
<?php 
$file=fopen("archivo.txt", "a");
  fwrite($file, $_GET['id_lastname'].";".$_GET['id_name'].";".$_GET['id_typeid'].";".$_GET['id_number'].";".$_GET['id_dept'].";".$_GET['id_muni'].";".$_GET['id_bar'].";".$_GET['id_nacimiento'].";".$_GET['id_cel'].";".$_GET['id_tipocasa'].";".$_GET['id_estrato'].";".$_GET['id_cuartos'].";".$_GET['id_personas'].";".$_GET['id_ducha'].PHP_EOL);
  fclose($file);
  
 echo "Nombres: ".$_GET['id_lastname'] ." ".$_GET['id_name']."<br>";
 echo "Tipo identificacion: ".$_GET['id_typeid'] . "<br>"; 
 echo "Numero: ".$_GET['id_number'] . "<br>"; 
 echo "Departamento: ".$_GET['id_dept'] . "<br>"; 
 echo "Municipio: ".$_GET['id_muni'] . "<br>"; 
 echo "Barrio: ".$_GET['id_bar'] . "<br>"; 
 echo "Fecha de Nacimiento: ".$_GET['id_nacimiento'] . "<br>"; 
 echo "Celular: ".$_GET['id_cel'] . "<br>"; 
 echo "Datos de la vivienda ". "<br>";
 echo "Tipo: ".$_GET['id_tipocasa']."<br>";
 echo "Estrato: ".$_GET['id_estrato'] ."<br>";
echo "Numero de cuartos: ".$_GET['id_cuartos'] ."<br>";
echo "Numero de personas en el hogar: ".$_GET['id_personas'] ."<br>";
echo "Tiene ducha: ".$_GET['id_ducha'] ."<br>";
 ?>
 </body>