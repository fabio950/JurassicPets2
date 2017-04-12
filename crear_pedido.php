<?php

$id = (int) $_POST["id"];
$fecha = $_POST["fecha"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "INSERT INTO pedido VALUES (null, '".$fecha."')";

mysqli_query($con, $sql);

mysqli_close($con);


?>