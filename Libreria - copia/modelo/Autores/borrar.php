<?php
// Recibe los datos enviados desde html
$a=$_POST["no_registro"];


echo $a."<br>";

//CONEXI�N A LA BASE DE DATOS
//Datos de conexi�n
$hostname_db = "localhost";
$database_db = "libreria";
$username_db = "root";
$password_db = "";
// Creaci�n del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
// Se verifica si hay alg�n erro en la conexion

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "delete from autores where no_registro='$a'";
$z->query($query);

echo "<script> alert ('Registro borrado borrado')
		window.location.replace('5reportehtmlqli.php')</script>";

?>
