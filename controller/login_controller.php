<?php
session_start();

include('../model/conexion.php');

if (!empty($_POST['user']) && !empty($_POST['password'])) {

    $user = $_POST['user'];
    $password = $_POST['password'];
    $consulta = mysqli_query($conexion, "SELECT user, password FROM administradores WHERE user='$user' AND password='$password' ");
    $resultado = mysqli_num_rows($consulta);

    if ($resultado != 0) {
        $respuesta = mysqli_fetch_array($consulta);
        $_SESSION['user'] = $respuesta['user'];
        header("Location:../admin.php");
    } else {
        $_SESSION['alertaLogin'] = "Acceso Denegado.";
        header("Location:../index.php");
    }
} else {

    $_SESSION['alertaLogin'] = "Ingresar usuario y/o contraseña valida.";
    header("Location:../index.php");
}
