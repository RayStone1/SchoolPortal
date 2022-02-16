<?php
require_once "blocks/header.php"
?>


   
 
    <div class="bibl">
        <div class="container">
        <center><h1>Наши учебники</h1></center>
            <div class="bibl__inner">
                
                <?php
                require_once "php/connect.php";
                $sql = "SELECT `id`, `fio`, `about`, `img` FROM `books`";
                $candidates = $mysql->query($sql);
                while ($candidate = $candidates->fetch_assoc()) :
                ?>
                    <div class="book">
                        <form action="vote.php" method="POST" id="<?php echo $candidate['id'] ?>">
                           
                                <img src="<?php echo $candidate['img'] ?>" alt="">
                                <h3><?php echo $candidate['fio'] ?></h3>
                                <h4 class="votes" id='votes-<?php echo $candidate['id'] ?>'><?php echo $candidate['votes'] ?></h4>
                            </a>
                          
                        </form>


                    </div>
                <?php endwhile;
                ?>
            </div>
        </div>
    </div>
   

    <?php require_once("blocks/footer.php"); ?>