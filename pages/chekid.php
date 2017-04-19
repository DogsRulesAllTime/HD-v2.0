<?php
require_once '../includes/db.php';
echo $_SESSION['id_sotr'];
$userId = $_SESSION['id_sotr'];
$result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = $userId ");
$user = [];
$actor = mysqli_fetch_assoc($result);
$user[] = $actor;

require_once '../includes/func.php';
test();
?>