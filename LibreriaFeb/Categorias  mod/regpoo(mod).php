 <?php 
 class registro
 {
 public $a;
 public $b;
 public $c;
 $hostname_db = "localhost";
$database_db = "libreria";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
// Se verifica si hay algún erro en la conexionbueno
public function insert()
{	
	$this->con;
	$this->a= $_POST ['reg'];
	$this->b= $_POST ['lista'];
	$this->c= $_POST ['sub'];
}
$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");
$insert="INSERT INTO `categorias`(`idcategoria`, `subcategoria1`, `subcategoria2`, `subcategoria3`, `nombrecategoria`, `subncategoria1`, `subncategoria2`, `subncategoria3`) VALUES ('$a','$b','$c')";

$con->insert($insert);
 }
 ?>