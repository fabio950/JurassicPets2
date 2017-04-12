<?php

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "SELECT * FROM categoria";
$resultado = mysqli_query($con, $sql);

$i = 0;
while($fila = mysqli_fetch_assoc($resultado)){
    $categorias[$i] = array("id"=>$fila["id"], "nombre"=>$fila["nombre"]);
    $i++;
}

echo json_encode($categorias);

mysqli_close($con);

?>