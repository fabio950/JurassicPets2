<?php

$carrito = $_POST['carrito'];
$ocarrito = new stdClass();
$ocarrito = json_decode($carrito);

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "INSERT INTO pedido VALUES (null, '$ocarrito->fecha');";

mysqli_query($con, $sql);

$idPedido = $con->insert_id;

foreach ($ocarrito->articulos as $fila){
    $sql2 = "INSERT INTO linea_pedido VALUES ('".$fila->id."', '".$fila->nombre."', '".$fila->descripcion."', '".$fila->unidad."', '".$fila->precio."', '".$idPedido."');";
    mysqli_query($con, $sql2);
}

mysqli_close($con);

?>