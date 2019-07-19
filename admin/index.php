<?php
include_once '../lib/db.php';
include_once '../lib/functions.php';
adminHead("Home");
?>
<nav>
    <ul>
        <li><a href="/admin/"><i class="mdi mdi-home"></i>Inicio</a></li>
        <li><a href="index.php?usuarios"><i class="mdi mdi-account"></i>Usuarios</a></li>
    </ul>
</nav>
<main>
    <?php
        if (isset($_GET['usuarios'])) {
            include 'users/viewusers.php';
        } else {
            include 'home.php';
        }
    ?>
</main>
<?php
adminFooter();