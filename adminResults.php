<?php session_start(); ?>
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


    <section class="datosAdmin">
        <a href="userRegister.php"><button>Registrar nuevo cliente</button></a>
        <br>
        <form action="adminResults.php?pagina=1" method="post">
            <input type="text" placeholder="Buscar Cliente" name="busquedaCliente" required> <Button class="buttonBuscar">Buscar</Button>
        </form>


        <?php

        if (!$_GET) {
            header('Location:adminResults.php?pagina=1');
        }

        include('model/conexion.php');

        $buscar = $_POST['busquedaCliente'];

        $usuariosPorPagina = 4;
        $iniciarPaginado = ($_GET['pagina'] - 1) * $usuariosPorPagina;

        $consulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE name LIKE '%$buscar%' OR lastName LIKE '%$buscar%' or email like '%$buscar%' or instaUser like '%$buscar%' order BY id LIMIT $iniciarPaginado,  $usuariosPorPagina");

        $consultaColumnas = mysqli_query($conexion, "SELECT * FROM clientes WHERE name LIKE '%$buscar%' OR lastName LIKE '%$buscar%' order BY id");
        $totalUsers =  mysqli_num_rows($consultaColumnas);
        $paginas = $totalUsers / $usuariosPorPagina;
        $paginas = ceil($paginas);
        ?>

        <a href="admin.php">Eliminar Busqueda</a>

        <div class="tablaClientes">
            <h4>Lista de clientes registrados.</h4>

            <table>

                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Mail</th>
                    <th>Instagram</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

                <?php
                while ($resultados = mysqli_fetch_array($consulta)) {
                ?>
                    <tr>
                        <td><?php echo $resultados['ID']; ?></td>
                        <td><?php echo $resultados['name']; ?></td>
                        <td><?php echo $resultados['lastName']; ?></td>
                        <td> <a target="_blank" href="mailto:<?php echo $resultados['email']; ?>"><?php echo $resultados['email']; ?></a></td>
                        <td><a target="_blank" href="https://www.instagram.com/<?php echo $resultados['instaUser']; ?>/">@<?php echo $resultados['instaUser']; ?></a> </td>

                        <td class="tablaIcon"> <a href="adminEdit.php? ID=<?php echo $resultados['ID'] ?> & name=<?php echo $resultados['name'] ?> & lastName=<?php echo $resultados['lastName'] ?> & 
                         email=<?php echo $resultados['email'] ?> & instaUser=<?php echo $resultados['instaUser'] ?>">
                                <img class="iconEdit" src="img/editing.png"> </a> </td>

                        <td class="tablaIcon"> <a onclick="return confirmDelete();" href="controller/delete_controller.php? ID=<?php echo $resultados['ID'] ?> & instaUser=<?php echo $resultados['instaUser'] ?>"><img class="iconEdit" src="img/delete.png"></a></td>
                    </tr>

                <?php
                }
                mysqli_free_result($consulta);
                mysqli_close($conexion);

                ?>

            </table>

            <?php if($totalUsers <= 0 ){
                echo "<div> Actualmente no hay resultados para su busqueda. </div>";
            } ?>

            <nav class="paginacion" aria-label="Page navigation example">
                <ul class="paginacion pagination">
                    <li class="page-item 
                <?php echo $_GET['pagina'] <= 1 ? 'disabled' : ''; ?>
                ">
                        <a class="page-link paginacionItem" href="Admin.php?pagina=<?php echo $_GET['pagina'] - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i = 0; $i < $paginas; $i++) : ?>

                        <li class="page-item  
                    <?php echo $_GET['pagina'] == $i + 1 ? 'active' : ''; ?>
                    "><a class="page-link paginacionItem" href="Admin.php?pagina=<?php echo $i + 1; ?>"> <?php echo $i + 1; ?> </a></li>
                    <?php endfor ?>

                    <li class="page-item 
                <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : ''; ?>
                ">
                        <a class="page-link paginacionItem" href="Admin.php?pagina=<?php echo $_GET['pagina'] + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>


        </div>

    </section>


    <script src="js/main.js"></script>
</body>

</html>