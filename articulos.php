<?php

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "SELECT * FROM articulo";
$resultado = mysqli_query($con, $sql);

$i = 0;
while($fila = mysqli_fetch_assoc($resultado)){
    $articulos[$i] = array("id"=>$fila["id"], "nombre"=>$fila["nombre"], 
        "descripcion"=>$fila["descripcion"], "imagen"=>$fila["imagen"], 
        "precio"=>$fila["precio"], "categoria"=>$fila["categoria"]);
    $i++;
}

echo json_encode($articulos);

mysqli_close($con);

?>