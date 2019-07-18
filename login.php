<?php 
require 'lib/db.php';
require 'lib/user.php';
require 'includes/functions.php';

mainHead("Iniciar Sesión");
$user = new User;

if (isset($_POST['submit']) && !is_null($_POST['email']) && !is_null($_POST['passwd'])){
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    echo $user->loginUser($email, $passwd);
}
?>

<form action="login.php" method="post">
    <input type="email" name="email" id="email" placeholder="Correo electronico"/>
    <input type="password" name="passwd" id="passwd" placeholder="Contraseña"/>
    <input type="submit" value="INICIAR SESIÓN" name="submit">
</form>