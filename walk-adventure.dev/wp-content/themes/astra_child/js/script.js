//Вывод сообщения
//alert("Hello2");
//Дождаться пока страница полностью сформируется
jQuery(document).ready(function() {
  //Обработка нажатия кнопки id
  jQuery("#id3").click(function() {
    var l_code;
    //Считать переменную
    l_code = jQuery('#id1').val();
    //if then else
    if (l_code == '') { //
      alert("Значение не задано");
    } else {
            //alert(l_code);
            jQuery.ajax({
              url: "/walk-adventure.dev/wp-content/themes/astra_child/user_code_pr.php",
              //"<?php echo get_stylesheet_directory_uri() . '/json_gallery_data.php'; ?>"
              type:"POST",  //или "GET"
              data:({l_code}),     //переменные
              dataType:"html",
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






//jQuery('body').append('<a href="http://www.google.com">Перейти в Google</a>');
