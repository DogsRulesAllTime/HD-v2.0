<?php
//кнопка выхода
require_once 'db.php';
unset($_SESSION['id'] );
header('location: /test/index.php ');
?>
