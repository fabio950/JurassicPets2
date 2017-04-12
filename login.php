<?php

session_start();

$nombre = $_POST["nombre"];
$password = $_POST["password"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "SELECT * FROM usuario WHERE nombre='$nombre' AND password='$password'";

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) == "1") {
	$data = mysqli_fetch_array($resultado);
    $_SESSION["usuario"] = $data["nombre"];
    $_SESSION["role"] = $data["role"];
    echo "1";
} else {
    echo "error";
}

mysqli_close($con);

?>