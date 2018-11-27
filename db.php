<?php
$host = "localhost"; //Имя хоста
$db_name = "Workers"; //Имя базы данных
$username = "root"; //Имя пользователя
$password = ""; //Пароль пользователя
try {
 $db = new PDO("mysql:host=$host;dbname=$db_name", "$username", "$password",
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
 }
catch(PDOException $e)
 {
 echo $e->getMessage();
 die("Ошибка подключения.");
 }

?>
