<?php

$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sqlSelect = "SELECT * FROM usuario WHERE email='$email'";

$resultado = mysqli_query($con, $sqlSelect);

if(mysqli_num_rows($resultado) == "0"){
    $sql = "INSERT INTO usuario VALUES (null, '".$nombre."', '".$password."', '".$email."', null)";
    mysqli_query($con, $sql);
    echo "1";
}else{
    echo "Ya existe el usuario";
}

mysqli_close($con);

?>