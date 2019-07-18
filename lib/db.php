<?php
require_once 'MysqliDb.php';
require_once 'config.php';
$db = new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>