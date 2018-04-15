<?php
//Отладка
ini_set('display_errors','On');
error_reporting(E_ALL|E_STRICT);
//Подключение к БД
//TNS
require_once 'db_connect.php';
//$host = 'localhost';  //адрес сервера
//$database = 'dev';    //база данных
//$user = 'root';       //имя пользователя
//$password = 'root';   //паоль

//Подключение к базе данных
$l_code = $_POST['l_code'];
$link = mysqli_connect($host,$user,$password,$database)
  or die("Ошибка подключения к БД: ").mysqli_error($link);
echo  mysqli_error($link);

//Обработка данных
$check = mysqli_query($link,
"select 1 from
  fnd_users fu
  where 1=1
  and  fu.user_code = '$l_code'
  limit 1");

$quest_url = mysqli_query($link,
"select aq.`url` from adm_quests aq, fnd_users fu
where 1=1
and aq.quest_id = fu.quest_id
and fu.user_code = '$l_code'
limit 1");

if(mysqli_num_rows($check)> 0)
{
    echo "Корректный код: ".$_POST['l_code'];
    sleep(2);
//Редирект
//    header('Location: http://'.$_SERVER['HTTP_HOST'].$quest_1/);
//exit();
header( 'Location: http://localhost/walk-adventure.dev/quest_1' );
    //header('url=http://localhost/walk-adventure.dev/quest_1/');
    exit();
}
else {
  echo "Вы ввели не верный код ".$_POST['l_code'];
}
//Закрываем подключение
mysqli_close($link);
?>
