<?php

    require_once 'config/connect.php';

    $numbers_id = $_GET['id'];
    $numbers = mysqli_query($connect, query:"SELECT * FROM `numbers` WHERE `id` = '$numbers_id'");
    $numbers = mysqli_fetch_assoc($numbers);
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Number</title>
    <link rel="stylesheet" href="css/styleupdate.css">
</head>
<body>
    <h3>Update Number</h3>
    <form action="vendor/update.php" class="form-container" method="post">
        <input type="hidden" name="id" value="<?= $numbers['id'] ?>">
        <p>Number</p>
        <input type="number" name="number" value="<?= $numbers['number'] ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>