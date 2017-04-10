<?php
//защита от перехода
require_once 'includes/db.php';
protect($_SESSION['id']);



$st = $_GET['st'];
//проверка выбранной категории и установка цвета
$main = "";
$create = "";
$check = "";




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="includes/exit.php" method="POST">
  <input type="submit" value= "Выход"" name="">
</form>


  <div class="container">
    <div class="status">
    <div class="statusData new" style="background-color:<?php echo $main; ?>;">
      <a href="panelu.php?st=0" >  <h2>Главная</h2></a>
      </div>
      <div class="statusData new" style="background-color:<?php echo $create; ?>;">
      <a href="panelu.php?st=1" >  <h2>Создать заявку</h2></a>
      </div>
      <div class="statusData inWork" style="background-color:<?php echo $check; ?>;">
      <a href="panelu.php?st=2"><h2>Проверить статус заявки</h2></a>
          </div>
    </div>

    <?php
            if ($st == 0 ) {
                $main = "green";
                require_once 'pages/userinf.php';
            }elseif ($st == 1) {
                $create = "green";
                require_once 'pages/create.php';
            }elseif ($st == 2) {
                $check = "green";
                require_once 'pages/statuscheck.php';
            }  
    ?>



  </div>
</body>
</html>
