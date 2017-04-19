<?php
session_start(); //старт сессис

function connectDB(){
	$connect = mysqli_connect("localhost", "root", "", "baza");
	mysqli_set_charset( $connect,'utf8');
	return $connect;
}
//подключение к бд
$connect = mysqli_connect("localhost", "root", "", "baza");
if ($connect == false) {
	echo "не удалось установить соединение с базой";
	//die();
	}else {
	// echo "<H3>"."база подключена"."</H3>";
	}

function reurl(){
    echo "вы не можете прочитать скрытый текст";
    $url ="http://localhost:8383/HD-v2.0/"; //here you set the url
    $time_out = 3; //here you set how many seconds to untill refresh
    header("refresh: $time_out; url=$url");
    die();

}
function protect($a){
    if (isset($a)){
        // echo "этот текст видят только зарегистрированыые пользователи";
    } else{
        reurl();
    }
}

function selectMANY($query){
	$connect = connectDB();
    $result = mysqli_query($connect , $query);
    $rez = [];
    while ($row = mysqli_fetch_assoc($result) ){
        $rez[] = $row;
    }
    return $rez;
}

// $items = selectMANY("SELECT * FROM `account` " );
// var_dump($items);
// echo "<br>";
// foreach($items as $str){
//     echo $str['id'].'  '.$str['login'].'<br>';
// }
function insert($query){
    $connect = connectDB();
    
    $result = mysqli_query($connect , $query);
    
}

?>
