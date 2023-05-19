<?php

session_start();

include("../model/conexion.php");

$ID = $_GET["ID"];
$instaUser = $_GET["instaUser"];

$consulta = mysqli_query($conexion, "DELETE FROM clientes WHERE ID='$ID' ");

if ($consulta = true) {

    $_SESSION['alerta'] = "$instaUser eliminado correctamente.";

    header("Location:../admin.php");
}
