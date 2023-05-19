<header>
<nav>

<div>
    <h2>Museum Club</h2>
    <a href="admin.php">Panel Administrador</a>
</div>


<div>
    <div class="sessionUser">

        <div class="userAvatar">
            <img src="img/userAvatar.png">
        </div>

        <h6>
            <?php

            if (isset($_SESSION['user'])) {
                echo  $_SESSION['user'];
            } else {
                header("Location:index.php");
            }

            ?>
        </h6>

    </div>

    <a class="cerrarSesion" href="index.php">Cerrar Sesion</a>

</div>

</nav>
</header>