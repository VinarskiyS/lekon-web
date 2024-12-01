

<?php

if (isset ($_POST['line_folder']) && ($_POST['folder'])) {
 

  $line_folder = ($_POST['line_folder']);
  $folder = ($_POST['folder']);
  $line_folder = (string)$line_folder;
  $folder =   (string)$folder;





function imgOutput($line_folder, $folder) {

  $path = "../img/sku/$line_folder/$folder/";



    $wimage = "";
    $fimg = "";
    $path; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
    if (is_array($images)) { // если изображения найдены
    foreach($images as $image) { // делаем проход по массиву

    $fimg .= "<div class='swiper-slide swiper-card'> <img src='".$path.htmlspecialchars(urlencode($image))."' alt='".$image."' /></div>";
   
  }
    $wimage .= $fimg;
} else { // иначе, если нет изображений
    $wimage .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
    }
  } else { // иначе, если директория пуста или произошла ошибка
    $wimage .= "<div style='text-align:center'>Директория пуста или произошла ошибка при сканировании.</div>";
  }
    echo $wimage; // выводим полученный результат
}




}

?>