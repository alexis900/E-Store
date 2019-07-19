<?php
require_once 'lib/user.php';
require_once 'lib/db.php';
session_unset();
session_destroy();
header("Location: index.php");
?>