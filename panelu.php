<?php

//защита от перехода
require_once 'includes/db.php';
protect($_SESSION['id']);

// echo $id;


$st = $_GET['st'];
//проверка выбранной категории и установка цвета
$main = "";
$create = "";
$check = "";
if ($st == 0 ) {
  $main = "btn-success";
}elseif ($st == 1) {
  $create = "btn-success";
}elseif ($st == 2) {
  $check = "btn-success";
}

require_once 'frontend/panelu.html';



// $result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = $id ");
//   $user = [];
//   $actor = mysqli_fetch_assoc($result);
//   $user[] = $actor;
  // foreach ($user as $key) {
  // 	echo $key['id'];
  // }
  // echo $user[0]['id'];
 // var_dump($user);
?>



