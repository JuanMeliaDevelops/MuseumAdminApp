<?php session_start();?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Museum Administrador</title>
    <!-- CSS only -->
    <link rel="shortcut icon" href="img/museumIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>

    <section class="adminLogin">

        <div class="adminLabel">
            <h2>Club Museum</h2>
        </div>

        <div class="adminLoginForm">
            <form class="adminForm" action="controller/login_controller.php" method="post">
                <img src="img/userAvatar.png">
                <h3 class="adminTitle">Panel de Administrador</h3>
                <input class="adminInputs" name="user" placeholder="Usuario" type="text">
                <input class="adminInputs" name="password" placeholder="Contraseña" type="password">
                <button type="submit">Iniciar Sesion</button>
                 <?php if (isset($_SESSION['alertaLogin'])) {echo '<h6 class="adminAlertas">'.  $_SESSION['alertaLogin'] . '</h6>'; } ?>
            </form>


        </div>


    </section>

    <script src="js/main.js"></script>
</body>

<?php session_destroy(); ?>

</html>