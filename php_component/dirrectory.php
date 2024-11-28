
<?php

// require_once 'db_.php';


// try {
//     $pdo = new PDO ($attr, $user, $pass, $opts);
// }
// catch (PDOException $e)
// {
//     throw new PDOException($e->getMessage(), (int)$e->getCode());
// }







function img_output($path) {

$wimage = "";
    $fimg = "";
    $path; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
    if (is_array($images)) { // если изображения найдены
    foreach($images as $image) { // делаем проход по массиву
    $fimg .= "<img class='image_dir' src='".$path.htmlspecialchars(urlencode($image))."' alt='".$image."' />";
  }
    $wimage .= $fimg;
} else { // иначе, если нет изображений
    $wimage .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
    }
  } else { // иначе, если директория пуста или произошла ошибка
    $wimage .= "<div style='text-align:center'>Директория пуста или произошла ошибка при сканировании.</div>";
  }
    return $wimage; // выводим полученный результат
}

$string = "img/sku/nitro_prev/profi_prev/";

$func = img_output($string);



echo <<<_END
<div id = "dirrectory" class=" ratio ratio_30">$func </div> 
_END;




?>




