<?php
include_once '../lib/db.php';
include_once '../lib/user.php';
include_once '../lib/functions.php';
adminHead("Home");
admPanel("Location: ", "Location: /admin/loginAdmin.php");
?>
<nav>
    <ul>
        <li><a href="/admin/"><i class="mdi mdi-home"></i>Inicio</a></li>
        <li><a href="index.php?usuarios"><i class="mdi mdi-account"></i>Usuarios</a></li>
        <ul>
            <li><a href="index.php?usuarios=roles"><i class="mdi mdi-shield-account"></i>Roles y permisos</a></li>
        </ul>
        <li><a href="index.php?inventario"><i class="mdi mdi-dolly"></i>Inventario</a></li>
    </ul>
</nav>
<main>
    <?php
        if (isset($_GET['usuarios'])) {
            switch ($_GET['usuarios']) {
                case 'roles': include 'users/viewroles.php'; break;
                default: include 'users/viewusers.php'; break;
            }
            
        } elseif (isset($_GET['inventario'])) {
            echo "Inventario";
        } else {
            include 'home.php';
        }
    ?>
</main>
<?php
adminFooter();