<?php session_start();?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Museum</title>
    <!-- CSS only -->
    <link rel="shortcut icon" href="img/museumIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>

<?php include_once "includes/header.php"; ?>



    <section class="registroCliente">

    <div class="back">  <a href="admin.php">Volver</a> </div>

        <h4>Registrar nuevo cliente.</h4>

        <form action="controller/register_controller.php" method="post">

            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="lastName" placeholder="Apellido" required>
            <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" required>
            <input type="text" name="instaUser" placeholder="Instagram" required>
            <button value="register" type="submit">Registrar cliente</button>
        </form>

    </section>


    <script src="js/main.js"></script>
</body>

</html>