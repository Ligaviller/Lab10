<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Addition</title>
  </head>
  <body>
<?php

if(isset($_POST['del']))  {

  if (isset($_POST['Name'])){
    require 'db.php';
    $name = $_POST['Name'];
    $last_Name = $_POST['Last_Name'];
    $func = $_POST['Function'];
    $stmt = $db->prepare('DELETE FROM Workers Where (Name = :name AND Last_name = :last_Name AND Function = :func)');
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':last_Name', $last_Name);
    $stmt->bindParam(':func', $func);

    if ($stmt->execute()) {echo "Данные успешно удалены";}

  }
}

Elseif (isset($_POST['search'])) {
  if(!empty($_POST['Name']) || !empty($_POST['Last_Name']) || !empty($_POST['Function'])) {
    require 'db.php';
    $name = $_POST['Name'];
    $last_Name = $_POST['Last_Name'];
    $func = $_POST['Function'];
    $stmt = $db->prepare('SELECT * FROM Workers Where (Name = :name AND Last_name = :last_Name AND Function = :func)');
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':last_Name', $last_Name);
    $stmt->bindParam(':func', $func);
    $stmt->execute();
    if($stmt->rowCount() > 0){
    while($res = $stmt->fetch(PDO::FETCH_BOTH)){
        echo "<table>
              <thead>
                <tr><th>Имя</th><th>Фамилия</th><th>Должность</th></tr>
              </thead>
              <tr><td>$res[Name]</td>
              <td>$res[Last_Name]</td><td>$res[Function]</td></tr></table>";


    }
}
  }
}


else{
    if (isset($_POST['Name'])){ //добавление записи в бд
    require 'db.php';
    $name = $_POST['Name'];
    $last_Name = $_POST['Last_Name'];
    $func = $_POST['Function'];
    $stmt = $db->prepare('INSERT INTO Workers (Name, Last_Name, Function) VALUES 
    (:name, :last_Name, :func)');
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':last_Name', $last_Name);
    $stmt->bindParam(':func', $func);
    if ($stmt->execute()) {echo "Данные успешно сохранены.";}
    else {
     echo "Ошибка сохранения данных: "; print_r($stmt->errorInfo());
    }
    }
     else { echo "<p class=\"error\">Данных нет. Сначала откройте форму.</p>"; }
    //isset
    }
?>
</body>
</html>
