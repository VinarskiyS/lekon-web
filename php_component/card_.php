

<?php

if (isset ($_POST['line_folder']) && ($_POST['folder'])) {
 

  $line_folder = ($_POST['line_folder']);
  $folder = ($_POST['folder']);
  // $line_folder = (string)$line_folder;
  // $folder =   (string)$folder;





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


// $line_folder = 'marker-n';
// $folder = 'profi';


echo <<<_END
<div class="ratio ratio_50_160 theCard">
        <div class="but_close"> </div>
  <div class="in_ratio wrapper_card_block"> 
    <div class="card_block">   
      <aside>
        <div class="slider-container ">
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
              <h3 class="card_zag"> со слайдами </h3>
              <div class="swiper-pagination-card"></div>  

              <!-- <div class="slider-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div> -->

            </div>
        </div>
      </aside> 
      <aside> 
      </aside>
    </div>
  </div>
</div> 
_END;




}

?>


