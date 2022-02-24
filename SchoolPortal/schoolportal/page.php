<?php
require_once("php/connect.php");
if($mysql == false){
	echo "Досведанья, мистер лох!";
	echo mysqli_connect_errno();
	exit();
}
$page = $_GET['id'];
//echo $page;
$query = mysqli_query($mysql, "SELECT * FROM `teachers` WHERE id_teacher='$page' ");
?>
<?php require_once "blocks/header.php"?>
<?php
$article = mysqli_fetch_assoc($query);
?>

<div class="container mt-5" align="center">
<div class="d-flex flex-wrap">
<div class="card mb-5 shadow-sm">
  <div class="card-header">
    <h2 class="mb-5"><?echo $article['teacher_name'];?></h2>
  </div>
  <center>
  <div class="card-body" width="1200px">
    <img src="<?php echo $article['pic']; ?>" class="img-thumbnail" width = "50%">
  <ul class="list-unstyled mt-3 mb-4">
    <li><p style="color: gold; font-size: 250%;"><? echo $article['teacher_rating']?></p></li>
  <li style="text-align: left;"><?echo $article['teacher_content'];?></li>
  </ul>
  <a href="teachers.php"><button type="button" class="btn btn-lg btn-block">Назад</button></a>
  </div>
  </center>
</div>
</div>
</div>

<?php require_once("blocks/footer.php"); ?>
