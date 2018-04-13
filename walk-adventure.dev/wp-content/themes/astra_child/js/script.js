//Вывод сообщения
//alert("Hello2");
//Дождаться пока страница полностью сформируется
jQuery(document).ready(function() {
  //Обработка нажатия кнопки id
  jQuery("#id3").click(function() {
    var l_code;
    var result;
    var user;
    //Считать переменную
    l_code = jQuery('#id1').val();
    //if then else
    if (l_code == '') { //
      //alert("Значение не задано");
      jQuery('#status').empty();
      jQuery('#status').append("Введите код доступа");
    } else {
            //alert(l_code);
            jQuery.ajax({
              url: "/walk-adventure.dev/wp-content/themes/astra_child/user_code_pr.php", //необходимо заменить функцией получающая ссылку
              //"<?php echo get_stylesheet_directory_uri() . '/json_gallery_data.php'; ?>"
              type:"POST",  //или "GET"
              data:({l_code,result,user}),     //переменные
              dataType:"html",     //тип передаваемых данных
              beforeSend: funcBefore,  //функция во время загрузки php
              success: funcSuccess     //функция после успешного выполнения php
            });
    };
  });
});
//Функция, которая будет выполнять во время обработки данных
function funcBefore(){
jQuery("#status").text("Проверка кода. Подождите");
}

//Функция, которая будет выполнять после обработки данных
function funcSuccess(data){
jQuery("#status").text(data);
}

function ddd (){

}





//jQuery('body').append('<a href="http://www.google.com">Перейти в Google</a>');
