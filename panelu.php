<?php
//защита от перехода
require_once 'includes/db.php';
protect($_SESSION['id']);



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

?>



