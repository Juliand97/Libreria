<?php
// Recibe los datos enviados desde html

$a=$_POST["a1"];
$b=$_POST["b1"];
$c=$_POST["c1"];
$d=$_POST["d1"];
$e=$_POST["e1"];
$f=$_POST["f1"];
$g=$_POST["g1"];

echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";
echo $g."<br>";

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
$query = "INSERT INTO `editoriales` ( `codigo_postal`,`ubicacion`,`telefono`,`correo`,`pbx`,`jefe_editorial`,`fecha_creacion`) VALUES ('$a', '$b','$c','$d','$e','$f','$g')";
$z->query($query);

?>
<script>
alert ("hecho")
window.location.replace("../../vista/Editoriales/consultareditorial1.php");
</script>