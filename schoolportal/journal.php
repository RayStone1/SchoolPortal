
    <?php require_once 'blocks/header.php'?>
    <table id="journal" bordercolor='black' width="100%" >
        <?php 
        require 'php/connect.php';
        $sql="SELECT * FROM `discipline`";
        $disciplines=$mysql->query($sql);
        while($discipline=$disciplines->fetch_assoc()):
        ?>
        <tr class="" >
            <td class="discipline"><?= $discipline['name']?></td>
            <?php 
            $sql="SELECT * FROM `rating` WHERE `id_discipline`=$discipline[id]";
            $ratings=$mysql->query($sql);
            while($rating=$ratings->fetch_assoc()):
            ?>
            <td><input type="number" value="<?= $rating['score']?>" class='rating' id='<?=$rating['id']?>'></td>
            <?php
            endwhile;
            ?>

        </tr>
        
        <?php
        endwhile;
        ?>
    </table>
    <?php require_once("blocks/footer.php"); ?>
    <script src="script/journal.js"></script>
</body>
</html>