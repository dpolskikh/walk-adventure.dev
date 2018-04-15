<?php
//Подключение к БД
//TNS
//Подключение к базе данных
ini_set('display_errors','On');
error_reporting(E_ALL|E_STRICT);

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
$result = mysqli_query($link,
"select 1 from
  fnd_users fu
  where 1=1
  and  fu.user_code = '$l_code'
  limit 1");
//$result = mysqli_result("select 1 from dual", 0);
if(mysqli_num_rows($result)> 0)
{
    echo "Корректный код: ".$_POST['l_code'];
}
else {
  echo "Вы ввели не верный код ".$_POST['l_code'];
}
//Закрываем подключение
mysqli_close($link);
?>
