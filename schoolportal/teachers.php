<?php require_once "blocks/header.php"?>
<style>
.card {
width: 30%;
margin-left: 3%;
}
</style>
<div class="container mt-5" align="center">
<div class="d-flex flex-wrap">
<?php
require_once("php/connect.php");
if($mysql == false){
	echo "Досведанья, мистер лох!";
	echo mysqli_connect_errno();
	exit();
}
$query = mysqli_query($mysql, "SELECT * FROM `teachers`");
if(mysqli_num_rows($query) == 0){
	echo "А база-то пустая.";
}	else {
  for ($i=0; $i <=9 ; $i++){
while($article = mysqli_fetch_assoc($query)){
	echo
  '<div class="card mb-4 shadow-sm">  <div class="card-header">
  <h4 class="my-0 font-weight-normal">'
  .$article['teacher_name'].'</a></h4><br></div>';
  echo '<div class="card-body"><img src="'.$article['pic'].'""class="img-thumbnail"
width = "300px" height = "300px"><br>
  <ul class="list-unstyled mt-3 mb-4">
  <li><p style="color: gold; font-size: 250%;">'.$article['teacher_rating'].'</p></li>
  </ul>
  <a href=page.php?id='.$article['id_teacher'].'>
  <button type="button" class="btn btn-lg btn-block">Подробнее</button></a>

  </div></div>';

}
echo '</div></div>';
}
	}
?>
<?php require_once("blocks/footer.php"); ?>