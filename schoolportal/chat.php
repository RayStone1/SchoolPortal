<?php 
require_once "blocks/header.php";
require_once "php/connect.php";
$id_chat=$_GET['idchat'];
$id_user=$_SESSION['id_user'];
$sql="SELECT * FROM `chat_list` WHERE `chat_id`='$id_chat' AND `user_id`='$id_user'";
$access=$mysql->query($sql);
if($access->num_rows==0):?>
<div class="chat">
    <div class="container">
        <div class="chat__inner">
            <h1>Вы не участник этого чата</h1>
        </div>
    </div>
</div>
<?php 
exit();
else:
$sql="SELECT * FROM `chat` WHERE `chat_id`='$id_chat'";
$chatinfo=$mysql->query($sql)->fetch_assoc();
?>
<div class="chat">
    <div class="container">
        <div class="chat__inner">
            <div class="chat__name"><h1><?= $chatinfo['name']?></h1></div>
            <div class="dialog">
                <ul>
                    <?php 
                    $sql="SELECT * FROM `msg_chat` WHERE `chat_id`='$id_chat'";
                    $dialog=$mysql->query($sql);
                    while($msg=$dialog->fetch_assoc()):
                        $sql="SELECT * FROM `users` WHERE `id`='$msg[user_id]'";
                        $sender=$mysql->query($sql)->fetch_assoc();
                    ?>
                    <li>
                        <p class="name__user"><?= $sender['fio'] ." ". date('G:i',strtotime($msg['date_msg'])) ?></p>
                        <h4 class="msg" id="msg-id-"><?=$msg['msg']?></h4>
                    </li>
                    <?php endwhile;?>
                </ul>
               
            </div>
            <form action="" method="post" id="sendmsg">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Отправить" style="font-size:25px">
            </form>
            
        </div>
    </div>
</div>
<?php endif;?>
<?php require_once "blocks/footer.php"?>