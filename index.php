<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Задание №1</title>
    <style>
    *{
      font-family: 'Open Sans', sans-serif;
    }
    ul{
      list-style: none;
      padding: 0;
      margin: 0;
    }
    li{
      display: inline-block;
      margin: 10px;
      background-color: #fff4a1;
      padding:8px;
      border-radius: 5px;
      color:black;
      text-decoration: underline;
    }
    li:hover{
      background-color: #ffa71c;
      text-decoration: none;
    }
    .selected{
      background-color: #ffa71;
      text-decoration: none;
    }
    h1>a{
      color:#666;
      text-decoration: none;
    }
    h1>a:hover{
      color: black;
      background-color: #e6e6e6;
      transition: background-color 0.2s;
    }
    table {
      width: 400px; border: 1px solid #ccc; border-collapse: collapse;
      margin: 10px;}
      td, th {padding: 5px; border: 1px solid #ccc;}
      th {font-weight: bold; background: #e3edf7}
      label {display: block; width: 300px; margin: 5px 0
      }
    input[type=text], textarea, select {
      width: 350px;
      padding: 5px;
    }
    input[type=submit] {
      width: 100px;
      border-radius: 2px;
      padding: 5px;
      border: 1px solid #ffa71c;
      background: #ffbe32;
      color: #fff
    }
    .main_form {
      width: 380px;
      padding: 10px;
      margin: 10px;
      border: 1px solid #ffa71c;

      }
    input[type=submit]:hover{
        background-color: #ffa71c;
        cursor: pointer;
    }
    </style>
  </head>
  <body>
    <h1><a href="db.php">База данных</a></h1>
  <?php
$script_name = $_SERVER['PHP_SELF'];
require_once 'db.php';
$workers = $db->query("SELECT * FROM Workers ORDER BY id")->fetchAll();

?>

<ul>
  <?php
    echo "<a href=$script_name><li class=selected>Редактирование таблицы</li></a>";
   ?>
</ul>
<div class="main_form">
<form action="handler.php" method="post">
<label>Имя<br/><input type="text" name="Name"></label>
<label>Фамилия<br/><input type="text" name="Last_Name"></label>
<label>Должность<br/><input type="text" name="Function"></label>
<input type="submit" value="Добавить">
<input type="submit" name="del" value="Удалить">
<input type="submit" name="search" value="Поиск">
</form>
</div>
<?php
$sql = "
SELECT Name, Last_Name, Function
FROM Workers";
$result = $db->query($sql);
if ($result && $result->rowCount() > 0) {
?>
<table>
<thead>
<tr><th>Имя</th><th>Фамилия</th><th>Должность</th></tr>
</thead>
<?php
while ($row = $result->fetch()) {
echo "<tr><td>$row[Name]</td>
<td>$row[Last_Name]</td><td>$row[Function]</td></tr>";
}
?>
</table>
<?php
} else {
echo "<p>Данных в таблице нет.</p>";
}

?>
  </body>
</html>
