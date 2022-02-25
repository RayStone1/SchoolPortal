<?php
session_start();
require_once "connect.php";
$login=$_POST['login'];
$pass=$_POST['pass'];
$sql="SELECT `id` FROM `users` WHERE `login`='$login' AND `password`='$pass'";
$check_user=$mysql->query($sql);
if($check_user->num_rows==0){
    echo "error";
    exit;
}
$user=$check_user->fetch_assoc();
$_SESSION['id_user']=$user['id'];
echo "done";
?>