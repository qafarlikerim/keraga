<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM `people` WHERE `people`.`id` = '$id'");

header('Location: ../index.php');

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM `numbers` WHERE `numbers`.`id` = '$id'");

header('Location: ../index.php');

?>