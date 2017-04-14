
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
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
<!-- /.container -->