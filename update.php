<?php

    require_once 'config/connect.php';

    $people_id = $_GET['id'];
    $people = mysqli_query($connect, query:"SELECT * FROM `people` WHERE `id` = '$people_id'");
    $people = mysqli_fetch_assoc($people);
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Number</title>
</head>
<body>
    <h3>Update Number</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $numbers['id'] ?>">
        <p>Number</p>
        <input type="number" name="number" value="<?= $numbers['number'] ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>