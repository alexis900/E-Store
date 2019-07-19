<?php 
include '../lib/db.php';
include '../lib/user.php';
include '../lib/functions.php';
admPanel("Location: /admin/", "");
if (isset($_POST['submit']) & !empty($_POST['email']) & !empty($_POST['passwd'])) {
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $db->join("roles_permissions r", "r.role_id=u.role_id", "INNER");
    $db->where('perm_id', 5);
    $db->where('email', $email);
    $db->where('password', $passwd);
    $users = $db->get("users u");

    if ($db->count == 1) {
        $_SESSION["user"]=$email;
        $_SESSION["role_id"]=$users[0]['role_id'];
        admPanel("Location: /admin/", "Location: /admin/loginAdmin.php");
    } else {
        echo "No tienes suficientes permisos";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de administración - Iniciar sesión</title>
</head>
<body>
    <h1>Panel de administración - Iniciar sesión</h1>
    <form action="loginAdmin.php" method="post">
        <input type="email" name="email" id="email" placeholder="Correo electronico"/>
        <input type="password" name="passwd" id="passwd" placeholder="Contraseña"/>
        <input type="submit" value="INICIAR SESIÓN" name="submit"/>
    </form>
</body>
</html>