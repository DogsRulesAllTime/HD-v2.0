<?php
//кнопка выхода
require_once 'db.php';
unset($_SESSION['id'] );
header('location: http://localhost:8383/hd/ ');
?>
