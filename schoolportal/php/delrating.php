<?php
require 'connect.php';
$id=$_POST['id'];
$rating=$_POST['newrating'];
$sql="DELETE FROM `rating` WHERE `id` = '$id'";
$mysql->query($sql);