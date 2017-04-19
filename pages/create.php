
    <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Заполните поля!</legend>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Тема</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Выберите тему</option>
      <option>Установить ПО</option>
      <option>Принтер/сканер</option>
      <option>Графика</option>
      <option>Плоттерная</option>
      </select>
  </div>
</div>
</div>




<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Текст</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <textarea class="form-control" name="comment" placeholder="Суть заявки"></textarea>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
    <button type="submit" name="send" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
<!-- /.container -->
<?php 
$id = $_SESSION['id'];
// insert("INSERT INTO `zapiski` (`tema`, `text`,  `data_sozdania`,  `id_otprav`) VALUES ($_POST['state'], $_POST['comment'],  CURRENT_TIMESTAMP,  '3'");
echo "<br>";



if (isset($_POST['send'])) {
  if (!empty($_POST['state']) AND !empty($_POST['comment']) ) {
    $tema = $_POST['state'];
    $comment = $_POST['comment'];
    insert("INSERT INTO `zapiski` (`tema`, `text`,  `data_sozdania`,  `id_otprav`) VALUES ('$tema', '$comment',  CURRENT_TIMESTAMP, $id)");
}
}

// if (!empty($_POST['state'])) {
//   echo $_POST['state'];
// $tema = $_POST['state'];
// }

// if (!empty($_POST['comment'])) {
//   echo $_POST['comment'];
//   $comment = $_POST['comment'];
// }
// insert("INSERT INTO `zapiski` (`tema`, `text`,  `data_sozdania`,  `id_otprav`) VALUES ('$tema', '$comment',  CURRENT_TIMESTAMP, '3')");
// // $s = "INSERT INTO `zapiski` (`tema`, `text`,  `data_sozdania`,  `id_otprav`) VALUES ($tema, $comment,  CURRENT_TIMESTAMP,  '3')";
// //   echo $s;
// // }


   
    // var_dump($zapr);
  // $result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = 3 ");
  // $user = [];
  // $actor = mysqli_fetch_assoc($result);
  // $user[] = $actor;
    // var_dump($user);