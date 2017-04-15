<?php



$id = $_SESSION['id'];

$result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = $id ");
$actor = mysqli_fetch_assoc($result);

require_once 'test.php';
echo $id;
connectDB();
$zapros = selectMANY("SELECT * FROM users INNER JOIN zapiski ON users.id = zapiski.specialist  WHERE id_otprav  = $id;");
print_r($zapros);

?>
<div class="row">
<div  class="col-md-6 offset-md-1">
  <div class="jumbotron ">
<h3 class="text-center">INtro</h3> 
<p class="text-justify">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p> 
    </div>
  

 <!-- Left2 -->
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
      <td>
      <!-- Выпадающее меня с сылкой для отправки на почту -->
    <div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Гуров
</button>
<div class="dropdown-menu" aria-labelledby="about-us">
<a class="dropdown-item" href="mailto:vlad@htmlbook.ru"><i class="fa fa-envelope-o " aria-hidden="true"></i> Отправить письмо</a>

</div>
</div>
  
      </td>
      <td>Обработка</td>
    </tr>
       <tr class="">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td style="text-align:center;"><i class="fa fa-lightbulb-o fa-2x" aria-hidden="true" style="color: orange;""></i></td>
    </tr>
       <tr class="">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td style="text-align:center;"><span class="text-center"><i class="fa fa-check-circle fa-2x" aria-hidden="true" style="color: green;"></span></i></td>
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




<!-- right -->
<div class="col-md-3">
  <div class="jumbotron ">
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
                       <tr>
                        <td>Номер телефона:</td>
                        <td> <?php echo "$actor[number]" ?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
  </div>
</div>















  <!-- <div class="container col-lj-6 col-md-6 col-xs-3 offset-md-1 ">
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
    <div class="container ">
  <div class="jumbotron ">
  </div>
      </div> -->
