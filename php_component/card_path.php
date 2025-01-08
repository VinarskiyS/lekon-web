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
  // $str = str_replace(',', "\r\n", $str);


  $descript_2 = str_replace('.', ".<br><br>",  $descript); // добавление абзаца в тексте

  // setlocale(LC_ALL, "ru_RU.UTF-8");
  // $pattern = "/ [а-я] /m"; 
  // $pattern_2 =  mb_substr($pattern, 0, -1);
  // $descript_2 = preg_replace("/ [в] /",  (mb_substr($pattern, 0, -1)).'&nbsp;',  $descript_1);
  // $descript_2 = str_replace('/[в]g /',  '.<br><br><br><br>',  $descript_1);


   $sliderOpen = "<div class='swiper-slide swiper-card'> <img src='";
   $sliderClose = "</div>";
   $imgOpen = "<img class='icons' src='";


function imgOutput($arg_1, $arg_2, $elOpen, $elClose) {

  $path = "../img/sku/$arg_1/$arg_2/";

    $wimage = "";
    $fimg = "";
    // $path; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:svg|png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
    if (is_array($images)) { // если изображения найдены
    foreach($images as $image) { // делаем проход по массиву
    $fimg .= $elOpen.$path.htmlspecialchars(urlencode($image))."' alt='".$image."' />".$elClose;
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


    ?>







<div class="ratio ratio_54_60_85_120_130_180 theCard">    <div class="but_close"> </div>
  <div class="in_ratio wrapper_card_block"> 
    <div class="card_block">   
      

    <aside>
    <div class="ratio ratio_90 ">
        <div class="slider-container in_ratio" >
           <div class="slider">
           <div class="slider-nav-wrap">
           <div class="swiper-button-up"></div>
           <div class="swiper-button-down"></div>
              <div class="slider-nav">
              <div class="swiper-wrapper nav-wrapper">
                          <?php imgOutput($line_folder, $folder,   $sliderOpen, $sliderClose);  ?>
              </div>
              </div>
              </div>
              <div class="slider-main">
                <div class="swiper-wrapper">
                <?php imgOutput($line_folder, $folder,   $sliderOpen, $sliderClose);  ?>
              </div>
              </div>
           </div>
           <div class="slider-nav_plus">
              <!-- <h4 class="card_zag">  </h4> -->
              <div class="swiper-pagination-card"></div>  
            </div>
        </div>
      </div>
      </aside> 

      <aside>
      <div class="card-text">
      <h4>  <?php echo $title ?> </h4>
      <p>    <?php echo $descript_2 ?> </p>
      </div>
      <span class="atributs">
        <table class='card_table'>
          <thead>
            <tr>
            <th><p>цвет</p></th>
            <th><p>артикул</p></th>
            <th><p>атрибут</p></th>
            </tr>
          </thead>
          <tbody>
<?php
/////// цикл для вывода таблицы с артикулами
$query_sku = "SELECT * FROM sku WHERE group_id='$line_folder' AND name='$folder'";
$result_sku = $pdo->query($query_sku);
// $row_sku =   $result_sku->fetch(PDO::FETCH_ASSOC);


// switch ($name){
//   case "pencil": $th_1 = 'Карандаш';
//       break;
//   case "lead": $prevName = 'Грифель';  
//       break;
//   default:
//       $prevName = strtoupper(substr($name, 0, 1)).(substr($name, 1 ));
//  }

while ($row_sku = $result_sku->fetch(PDO::FETCH_ASSOC)) {
  $article_sku = htmlspecialchars($row_sku['article']);
  $color_sku = htmlspecialchars($row_sku['color']);
  $atr_sku = htmlspecialchars($row_sku['atribut']);
echo <<<_END
          <tr>
            <td>  <img class="" src="../img/svg/colors/$color_sku.svg">   </td>
            <td><p>$article_sku </p></td>
            <td><p> $atr_sku </p></td>
          </tr>
_END;
}


?>

          </tbody>
        </table>
      </span>
      </aside>
      <section class="sku-icons">
      <?php imgOutput($line_folder, $icons,  $imgOpen,  ""); ?> 
      </section>

    </div>
  </div>
</div>

<?php }; ?>

