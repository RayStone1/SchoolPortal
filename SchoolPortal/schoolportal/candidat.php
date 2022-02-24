<?php
    require_once "blocks/header.php"
?>
    <?php
    $id = $_GET['id'];
    require_once "php/connect.php";
    $sql = "SELECT `fio`, `about`, `img` FROM `events` WHERE `id`='$id'";
    $candidate = $mysql->query($sql)->fetch_assoc();
   
    ?>
    <main>
        <div class="container">
            <div class="info">
                <img src="<?php echo $candidate['img']; ?>" alt="">
                <div class="content">
                    <h1><?php echo $candidate['fio']; ?></h1>
                    <p><?php echo $candidate['about']; ?></p>
                </div>
            </div>
        </div>
    </main>
    <?php require_once("blocks/footer.php"); ?>