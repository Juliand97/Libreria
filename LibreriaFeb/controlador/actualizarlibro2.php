<?php
// Recibe los datos enviados desde html
$a=$_POST["isbn"];
$b=$_POST["libro"];
$c=$_POST["fecha"];
$d=$_POST["editorial"];
$e=$_POST["categoria"];
$f=$_POST["autor"];
$g=$_POST["pais_de_autor"];
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
$query = "UPDATE `libros` set `libro`='$b',`fecha`='$c',`editorial`='$d',`categoria`='$e',`autor`='$f',`pais_de_autor`='$g'  where isbn='$a'";
$z->query($query);
//echo $z;

echo "<script>
alert ('libro actualizado')
window.location.replace('../vista/Libros/consultarlibro1.php');
</script>";
?>
