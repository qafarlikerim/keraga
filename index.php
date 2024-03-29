<?php

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="icon" href="/address_book.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
  </head>
<body> 
    <h2 class="red-text" style="color: red;" align="center" ><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
  
    <hr class="new5">

    <br><br>
    <table width="50%"  align="center">
        <tr>
            <th>Имя
              <button class="open-button" onclick="openForm()">
                <img class="img_add" src="img/add.png" alt="добавить контакт">
              </button>
            </th>
        </tr>

        <?php
            $people = mysqli_query($connect, query:"SELECT * FROM `people`");
            $people = mysqli_fetch_all($people);
            foreach ($people as $people) {
                ?>
                    <tr>
                        <td class="name_range"><?= $people[1] ?></td>
                        <td class="icon_range"><a href="update.php?people_id=<?= $people[0] ?>"><img class="table_icon" src="img/edit-icon.png" alt="номер" title="номер"></a><a href="vendor/delete.php?id=<?= $people[0] ?>"><img class="table_icon" src="img/delete.png" alt="удалить" title="удалить"></a></td>
                    </tr>
                <?php
            }
        ?>
    </table>

    <div class="form-popup" id="myForm">
      <form action="vendor/add.php" class="form-container" method="post">
    
        <label for="name"><b>Контакт</b></label>
        <input type="text" placeholder="Введите имя контакта..." name="name" id="name" required>
    
        <button type="submit" name="sendTask" class="btn">Добавить</button>
        <button type="button" name="sendTask" class="btn cancel" onclick="closeForm()">Закрыть</button>
      </form>
    </div>

    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>

</body>
</html>