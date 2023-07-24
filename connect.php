<?php

$db_name = 'mysql:host=localhost;dbname=shop_db'; //shop_db.sql can be configured in phpmyadmin
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

?>