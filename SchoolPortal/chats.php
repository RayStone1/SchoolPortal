<?php 
require_once("blocks/header.php");
require_once("php/connect.php");
if(!isset($_SESSION['id_user'])):?>

<div class="chats">
    <div class="container">
        <div class="chats__inner">
            <div class="chatlist">
               <h1>Выполните вход</h1>
            </div>
            
        </div>
    </div>
</div>
<?php
else:
$id_user=$_SESSION['id_user'];
$sql="SELECT * FROM `chat_list` WHERE `user_id`='1'";
$chatlist=$mysql->query($sql);

?>
<div class="chats">
    <div class="container">
        <div class="chats__inner">
            <div class="chatlist">
                <ul>
                    <?php while($idchats=$chatlist->fetch_assoc()):
                    $sql="SELECT * FROM `chat` WHERE `chat_id`='$idchats[chat_id]'"; 
                    $userchat=$mysql->query($sql)->fetch_assoc();       
                    ?>
                        <li><h1><a href="chat.php?idchat=<?= $userchat['chat_id']?>"><?= $userchat['name']?></a></h1></li>
                    <?php endwhile;?>
                </ul>
            </div>
            
        </div>
    </div>
</div>
<?php endif;?>
<?php require_once("blocks/footer.php"); ?>
