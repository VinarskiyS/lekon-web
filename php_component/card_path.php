<?php

if (isset ($_POST['line_folder']) && ($_POST['folder'])) {
 



  $line_folder = ($_POST['line_folder']);
  $folder = ($_POST['folder']);
  $line_folder = (string)$line_folder;
  $folder =   (string)$folder;

  $icons = $folder.'/ic';


  require_once 'db_.php';  // подключение базы: 'db_.php'

  try { $pdo = new PDO($attr, $user, $pass, $opts); }
  catch (PDOException $e)
  {
      throw new PDOException($e->getMessage(), (int)$e->getCode());
  };

  // $ajax_query = "SELECT * FROM `products` WHERE `group_id`='marker-n' AND `name`='profi'";
  $ajax_query = "SELECT * FROM products WHERE group_id='$line_folder' AND name='$folder'";
  $result = $pdo->query($ajax_query);

  $row_2 = $result->fetch(PDO::FETCH_ASSOC);


  $title = htmlspecialchars($row_2['title']);
   $descript = htmlspecialchars($row_2['descript']);



function imgOutput($arg_1, $arg_2) {

  $path = "../img/sku/$arg_1/$arg_2/";
    $wimage = "";
    $fimg = "";
    $path; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:svg|png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
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



function imgOutput_ic($arg_1, $arg_2) {

  $path = "../img/sku/$arg_1/$arg_2/";
    $wimage = "";
    $fimg = "";
    $path; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:svg|png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
    if (is_array($images)) { // если изображения найдены
    foreach($images as $image) { // делаем проход по массиву
    $fimg .= "<img src='".$path.htmlspecialchars(urlencode($image))."'alt='".$image."' />";
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














echo <<<_END
<div class="ratio ratio_50_60_100 theCard">

        <div class="but_close"> </div>
  <div class="in_ratio wrapper_card_block"> 
    <div class="card_block">   
      <aside class="ratio ratio_50_70">
        <div class="slider-container in_ratio" >
           <div class="slider">
           <div class="slider-nav-wrap">
           <div class="swiper-button-up"></div>
           <div class="swiper-button-down"></div>
              <div class="slider-nav">
              <div class="swiper-wrapper nav-wrapper">
_END;

imgOutput($line_folder, $folder);   
echo <<<_END
              </div>
              </div>
              </div>
              <div class="slider-main">
                <div class="swiper-wrapper">
_END;

imgOutput($line_folder, $folder);  
echo <<<_END
              </div>
              </div>
           </div>
           <div class="slider-nav_plus">
              <h3 class="card_zag">  </h3>
              <div class="swiper-pagination-card"></div>  
              <!-- <div class="slider-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div> -->

            </div>
        </div>
      </aside> 
      <aside>
      <div class="card-text">
      <h3>$title</h3>
      <p>$descript</p>
      </div>
      <div class="card-icons">
      _END;
     
      imgOutput_ic($line_folder, $icons);  

echo <<<_END
      </div>
      </aside>
    </div>
  </div>

</div> 
_END;

}

// echo '<script src="js/swiper.js"></script>';
// echo '<script src="js/ajax_1.js"></script>';

//<img src="img/sku/$line_folder/$folder/ic/bright.svg" alt="">

?>



<!-- <script src="js/swiper.js"></script>
<script src="js/ajax_1.js"></script>
<script src="js/ajax_2.js"></script> -->

<!-- <script type="text/javascript"></script> -->