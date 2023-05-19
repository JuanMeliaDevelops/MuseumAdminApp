<?php 

session_start();

include("../model/conexion.php");

$ID = $_POST["ID"];
$name = $_POST["name"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$instaUser = $_POST["instaUser"];

$consulta = mysqli_query($conexion, "UPDATE clientes SET name='$name', lastName='$lastName', email='$email',
instaUser='$instaUser'  WHERE ID='$ID'");

if ($consulta = true){
    $_SESSION['alerta'] = "$instaUser modificado correctamente.";
    header("Location:../admin.php");

}


