    <?php

    session_start();
    
    include('../model/conexion.php');

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $instaUser = $_POST['instaUser'];



    $consulta = mysqli_query($conexion, "INSERT INTO clientes (name, lastName, email, instaUser) VALUES('$name','$lastName','$email', '$instaUser')");

    if ($consulta = true) {

        $_SESSION['alerta'] = "$instaUser registrado/a correctamente.";
    
        header("Location:../admin.php");
    }
    
