<?php
function mainCSS(){
  ?>
<!--<link rel="stylesheet" href="/css/style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.8.95/css/materialdesignicons.min.css" />
<link rel="stylesheet" href="css/mdi.css"/>
  <?php
}
function mainHead($title){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title><?=$title?></title>
    <?=mainCSS()?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Logo</a>
  <form class="">
      <input class="" type="search" placeholder="Search" aria-label="Search">
      <button class="" type="submit"><i class="mdi mdi-magnify"></i></button>
    </form>
    <ul>
      <li>
        <a href="#"><i class="mdi mdi-account"></i>Mi cuenta</a>
      </li>
      <li><a href="#"><i class="mdi mdi-cart"></i>Carrito (0)</a></li>
    </ul>
</nav>
<?php
}

function mainFooter() {
echo"</body>
</html>";
}

function adminHead($title){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title><?="Admin - " . $title?></title>
    <?= mainCSS()?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Logo Admin Panel</a>
    <ul>
      <li><a href="/admin/"><i class="mdi mdi-account"></i>Mi cuenta</a></li>
      <ul>
        <li><a href="/logout.php">Cerrar Sesión</a></li>
      </ul>
      <li><a href="#"><i class="mdi mdi-bell"></i>Notificaciones (0)</a></li>
      <li><a href="../"><i class="mdi mdi-home"></i>Sitio principal</a></li>
    </ul>
</nav>
<?php
}

function adminFooter() {
echo"</body>
</html>";
}

