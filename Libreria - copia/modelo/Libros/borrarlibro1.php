<?php
// Recibe los datos enviados desde html
$a=$_POST["isbn"];


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
$query = "delete from libros where isbn='$a'";
$z->query($query);

echo "<script>alert('El libro ha sido eliminado')</script>";
echo "<script>window.location.replace('../../vista/Libros/consultarlibro1.php')</script>"
?>