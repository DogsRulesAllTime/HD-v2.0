<?php



$id = $_SESSION['id'];

$result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = $id ");
$actor = mysqli_fetch_assoc($result);
?>
<div class="wrapper">
    
/////////////////////////////////////
      <div class="userblock" >
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[id]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[name]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[surname]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[dostup]" ?>
          </div>
      </div>



      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>