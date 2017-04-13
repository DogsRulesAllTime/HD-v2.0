<?php
require_once 'includes/db.php';
require_once 'test.php';
connectDB();
//делаем выборку записок относящихся к айдишнику залогиненого юзера
$iduser = $_SESSION['id'];
$row=selectONE('`zapiski`','`id_otprav`', $iduser );

while ($row = mysqli_fetch_assoc($GLOBALS['result'])){
echo $row['id'],$row['tema'],$row['text'],$row['status'],'<br>' ;
}
?>



  <div class="form">
            <form action="pages/checkStatus.php" method="post">
                <input class="input" type="text" name="text" placeholder="123">
                <br>
                <input class="sub" type="submit" name="knopka" value="Проверить">
            </form>

        </div>
