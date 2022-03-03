<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Школьный портал</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="header__inner">
            <div class="container">
                <div class="top__menu">
                    <a href="/" class="logo">Школьный портал</a>
                    <div class="account__menu">
                        <?php if(isset($_SESSION['id_user'])):
                            require_once "php/connect.php";
                            $id=$_SESSION['id_user'];
                            $sql="SELECT * FROM `users` WHERE `id`='1'";
                            $user=$mysql->query($sql)->fetch_assoc();?>
                            
                            <a href="php/exit.php" id="">Выход</a>
                        <?php 
                        else:?>
                            <a href="#" id="open-sign">Вход</a>
                        <?php endif;?>
                    </div>



                </div>
            </div>
                <div class="bottom__menu">
                    <ul>
                        <li><a href="journal.php">Журнал</a></li>
                        <li><a href="teachers.php">Учителя</a></li>
                        <li><a href="chats.php">Чат</a></li>
                        <li><a href="books.php">Библиотека</a></li>
                        <li><a href="events.php">Мероприятия</a></li>
                    </ul>
                </div>
            
        </div>
    </header>
<div class="popup" id="sign-popup">
    <div class="popup__container">
        <div class="popup__body">
            <form action="php/checkuser.php" method="post" id="log-form">
                    <h2>Логин</h2>
                    <input type="text" name="sign-login" id="sign-login">
                    <h2>Пароль</h2>
                    <input type="text" name="sign-pass" id="sign-pass">
                    <br>
                    <br>
                    <input type="submit" value="Вход">
            </form>
            <div class="popup__close" id="close__sign">&#10006</div>
            <h6 class="errorlog"></h6>
        </div>
    </div>
</div>