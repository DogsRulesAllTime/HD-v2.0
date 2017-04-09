<?php
//Функция Подключения к бд 
function connectDB(){
	$connect = mysqli_connect("localhost", "root", "", "baza");
	mysqli_set_charset( $connect,'utf8');
	return $connect;
}
//Функция выборки конкретики в базу 
function selectONE($table = '`users`',$column='`id`',$value=3){
	$connect = connectDB();
	$query= "SELECT * FROM ".$table." WHERE ".$column." = ".$value."";
    $result = mysqli_query($connect , $query);
    return $row = mysqli_fetch_assoc($result);
}
//Функция Вставки в базу 
function insert($table ,$column,$value){
	$connect = connectDB();
	$query= "INSERT INTO ".$table."(".$column.")"." VALUES  (".$value.")"; 
    $result = mysqli_query($connect , $query);
    echo mysqli_affected_rows($connect);
}



//insert("`users`","`name`, `surname`, `number`, `otd`, `dostup`", "'mama','papa','4352','146','3'");


//Функция выборки многого и запись в глобальную переменную
function selectMANY($table){
	$connect = connectDB();
	$query= "SELECT * FROM ".$table."";
    $result = mysqli_query($connect , $query);
    $GLOBALS['s'] = $result;
    return $row = mysqli_fetch_assoc($result);
}


$res=selectMANY("`zapiski`");
while ($res = mysqli_fetch_assoc($GLOBALS['s'])){
echo $res['id'],$res['tema'],$res['text'],$res['status'],'<br>' ;
}


