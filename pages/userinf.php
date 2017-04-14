<?php



$id = $_SESSION['id'];

$result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = $id ");
$actor = mysqli_fetch_assoc($result);
?>

<div class="row">
  <div class="container col-md-6 offset-md-1 ">
  <div class="jumbotron ">
   <h3 class="text-center">История заявок</h3>
   <table class="table ">
  <thead class="thead-inverse">
    <tr>
      <th>№ </th>
      <th>Отдел</th>
      <th>Тема</th>
      <th>Дата создания</th>      
       <th>Дата выполнения</th>
       <th>Специалист</th>
      <th>Статус</th>
    </tr>
  </thead>
   <tbody>
      <tr class="table-success">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td>Обработка</td>
    </tr>
       <tr class="bg-success">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td>Выполнена</td>
    </tr>
       <tr class="bg-warning">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td>В работе</td>
    </tr>
       <tr class="bg-success">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td>Выполнена</td>
    </tr>
       </tbody>
      </table>
    </div>
  </div>
   <div class="container col-md-3 offset-md-1 ">
    
        
    
     <div class="jumbotron ">
      <div class="row ">
      
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title text-center"><?php echo $actor['name']." ".$actor['surname']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                
                <div class="col-xs-2 col-md-2 col-lg-2 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Табельный номер:</td>
                        <td><?php echo "$actor[id]" ?></td>
                      </tr>
                      <tr>
                        <td>Должность:</td>
                        <td><?php echo "$actor[id]" ?></td>
                      </tr>
                      <tr>
                        <td>Отдел:</td>
                        <td><?php echo "$actor[otd]" ?></td>
                      </tr>
                      <tr>
                        <td>Здание:</td>
                        <td>ЛКК</td>
                      </tr>
                   
                         <tr>
                                 <tr>
                        <td>Этаж:</td>
                        <td>2</td>
                                  </tr>
                        <tr>
                        <td>Комната:</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo "$actor[email]" ?>"><?php echo "$actor[email]" ?></a></td>
                      </tr>
                       <tr>
                        <td>Номер телефона:</td>
                        <td> <?php echo "$actor[number]" ?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
            
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    