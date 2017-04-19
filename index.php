<?php
require_once 'includes/db.php';

if (empty($_POST['subm'])) {
  echo "введите данные";
  }
require_once 'frontend/login.html';


if (isset($_POST['login'],$_POST['psw'])) {
  $login = $_POST['login'];
   $password = $_POST['psw'];
}



//Проверка логина и пароля
  if(isset($login,$password)){
    $select = "SELECT * FROM `account` WHERE `login` = '$login' AND `psw` = '$password'";
    $avt = mysqli_query($connect , $select);

    $result = mysqli_fetch_assoc($avt);
    $ids = $result['id_sotr'] ;
    $_SESSION['id_sotr'] = $result['id_sotr'];
    if ( mysqli_num_rows($avt) == 0) {

      echo "пароль или логин не верный!";
      
    }else {
      
      $_SESSION['login'] = $login;
      $_SESSION['id'] = $ids;
      header( 'Location: pages/chekid.php');
      echo "приветствую ВАС";
    }
  }

?>
