<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Сотрудники</title>
    <link rel="stylesheet" href="style.css">
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
