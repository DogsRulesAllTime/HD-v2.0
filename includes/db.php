<?php
session_start(); //старт сессис

//подключение к бд
$connect = mysqli_connect("localhost", "root", "", "baza");
if ($connect == false) {
	echo "не удалось установить соединение с базой";
	//die();
	}else {
	echo "<H3>"."база подключена"."</H3>";
	}

function reurl(){
    echo "вы не можете прочитать скрытый текст";
    $url ="http://localhost/test/"; //here you set the url
    $time_out = 3; //here you set how many seconds to untill refresh
    header("refresh: $time_out; url=$url");
    die();

}
function protect($a){
    if (isset($a)){
        echo "этот текст видят только зарегистрированыые пользователи";
    } else{
        reurl();
    }
}

?>
