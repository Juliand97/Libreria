<?php
// Recibe los datos enviados desde html
$a=$_POST["codigo_postal"];
$b=$_POST["ubicacion"];
$c=$_POST["telefono"];
$d=$_POST["correo"];
$e=$_POST["pbx"];
$f=$_POST["jefe_editorial"];
$g=$_POST["fecha_creacion"];


//$e=$_POST["FechaNacimiento"];

echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";
echo $g."<br>";

//echo $e."<br>";

//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$hostname_db = "localhost";
$database_db = "libreria";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
// Se verifica si hay algún erro en la conexion

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "UPDATE `editoriales` set `ubicacion`='$b',`telefono`='$c',`correo`='$d',`pbx`='$e',`jefe_editorial`='$f',`fecha_creacion`='$g'  where codigo_postal='$a'";
$z->query($query);
//echo $z;


echo "<script> alert('la editorial ha sido actualizada')
window.location.replace('consultareditorial1.php')</script>";
?>
