<?php 
$cookie_name = "loggedin";

$servername = "localhost";
$username = "root";
$password = "";
$database = "primarie";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	die("Database connection failed: ".mysqli_connect_error());
}
 if (isset($_POST['trimite']))
{
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$data = $_POST['data'];
$ora = $_POST['ora'];
$cnp = $_POST['cnp'];
$telefon = $_POST['telefon'];
$subiect = $_POST['subiect'];	

	$sql = "INSERT INTO audienta (nume, prenume,data,ora,cnp,telefon,subiect) VALUES ( '$nume', '$prenume', '$data', '$ora', '$cnp', '$telefon', '$subiect');";

	$result = mysqli_query($conn, $sql);
	header("Location: contact.php");
}
?>