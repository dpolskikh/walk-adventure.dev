<?php
//Подключение к БД
//TNS
//Подключение к базе данных

$host = 'localhost';  //адрес сервера
$database = 'dev';    //база данных
$user = 'root';       //имя пользователя
$password = 'root';   //паоль
//Подключение

$l_code = $_POST['l_code'];
$link = mysqli_connect($host,$user,$password,$database)
  or die("Ошибка подключения к БД: ").mysqli_error($link);
echo  mysqli_error($link);
//Обработка данных
//sleep(1);
//$query = "select 1 from fnd_users fu
//where 1=1
//and  fu.user_code = '$l_code'";
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$result = mysqli_query("select 1 from dual

limit 1");

if(mysqli_num_rows($result) == 0)
{
    echo "Переданный код ".$_POST['l_code']." верен. ";
    sleep(2);
//echo ($m_code);
}
else {
  echo "Переданный код ".$_POST['l_code']."  Не верен. "."gfkhs".$result.$user."Подключение ";
  sleep(2);
}
//Закрываем подключение
mysqli_close($link);
?>
