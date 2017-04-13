<?php
//защита от перехода
require_once 'includes/db.php';
if (isset($_SESSION['id'])){
echo "этот текст видят только зарегистрированыые пользователи";}
else{
reurl();
}
protect($_SESSION['id']);






$st = $_GET['st'];
  
  $select = "SELECT * FROM `zapiski` WHERE `status`= $st "; //запрос для всех заявок
  $avt = mysqli_query($connect , $select);
  $a = mysqli_fetch_assoc($avt);

//проверка выбранной категории и установка цвета
$new = "";
$inWork = "";
$done = "";
if ($st == 0 ) {
  $new = "btn-success";
}elseif ($st == 1) {
  $inWork = "btn-success";
}elseif ($st == 2) {
  $done = "btn-success";
}

require_once 'frontend/panel.html';
?>


