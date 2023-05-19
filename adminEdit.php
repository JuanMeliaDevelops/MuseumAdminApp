
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

        <h4>Modificar datos de cliente.</h4>

        <form action="controller/update_controller.php" method="post">

            <input style="display:none;" type="text" name="ID" placeholder="Nombre" value='<?php echo $_GET['ID']; ?>' readonly>
            <label for="name">Nombre</label> <input type="text" name="name" placeholder="Nombre" value='<?php echo $_GET['name']; ?>' required>
            <label for="lastName">Apellido</label> <input type="text" name="lastName" placeholder="Apellido" value="<?php echo $_GET['lastName']; ?>" required>
            <label for="email">Email</label> <input type="text" name="email" value="<?php echo $_GET['email']; ?>" placeholder="Email" required>
            <label for="instaUser">Instagram</label> <input type="text" name="instaUser" placeholder="Instagram" value="<?php echo $_GET['instaUser']; ?>" required>
            <button value="register" type="submit">Guardar</button>
        </form>

    </section>


    <script src="js/main.js"></script>
</body>

</html>