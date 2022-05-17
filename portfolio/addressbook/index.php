<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Список контактов</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Список контактов</h1>
    <form action="/add.php" method="post">
      <input type="text" name="name" id="name" placeholder="Введите имя..." class="form-control">
      <input type="int" name="number" id="number" placeholder="Введите номер..." class="form-control">
      <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
    </form>

    <?php
      require 'configDB.php';

      echo '<ul>';
      $query = $pdo->query('SELECT * FROM `people` ORDER BY `id` DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
       echo '<li><b>'.$row->name.'</b></li>';
      }
      
      $query = $pdo->query('SELECT * FROM `numbers` ORDER BY `id` DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
       echo '<li><b>'.$row->number.'</b></li>';
      }
      echo '</ul>';
    ?>

  </div>
</body>
</html>