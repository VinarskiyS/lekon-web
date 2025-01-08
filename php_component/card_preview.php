

<article class="ratio ratio_30">
<div class="in_ratio">
</div>
</article>


<div class=" card_wrapper ">





<?php




require_once 'db_.php';  // подключение базы: 'db_.php'

try { $pdo = new PDO($attr, $user, $pass, $opts); }
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
};


$query_preview = "SELECT numb, group_id, name, attribute, type, colors, stars FROM products ORDER BY numb";
$result = $pdo->query($query_preview);



function col($var){
    $i='';
    foreach ($var as $item=> $value){
    $i= $i.'<img class="color_point" src="../img/svg/colors/'.$value.'.svg" alt="">'; }
    // $i .='<img class="color_point" src="../img/svg/colors/'.$value.'.svg" alt="">'; }  // alternate 
        return $i;
   };


while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

   $group_id = htmlspecialchars($row['group_id']);
   $name = htmlspecialchars($row['name']);
   
    // $name = strtoupper(htmlspecialchars($row['name']));
    // $name = substr($name, 0, -2);

    $attribute = htmlspecialchars($row['attribute']);
    $type = htmlspecialchars($row['type']);
    $colors = htmlspecialchars($row['colors']); // присваиваем переменной $colors строку "colors" из базы 
    $stars = htmlspecialchars($row['stars']);

   switch ($name){
    case "oval": $prevName = 'Карандаш';
        break;
    case "lead": $prevName = 'Грифель';  
        break;
    default:
        $prevName = strtoupper(substr($name, 0, 1)).(substr($name, 1 ));
   }


   $colors_arr = explode(', ', "$colors");
   $colors_in_line = col($colors_arr);

 

echo <<<_END

<div id = "$name" class="card $group_id card_4-3-2" title="$group_id"  style="background-image: url(img/sku/preview/$group_id-$name.jpg)" >
<div id="$group_id" class="group_id"><img src="../img/svg/stars_&_colors/s-$stars.svg" alt=""> </div>
   <section>
   <span>  <p> подробнее </p>  </span>
    <div> 
    <h4> $prevName </h4> 
    <p> $attribute </p> 
    </div> <div> $colors_in_line </div> <div>
    <p>  $type </p>  
    </div>
 </section>
</div>  

_END;
}




?>


<div class=" card card_4-3-2 card_prev_opacity "></div>
<div class=" card card_4-3-2 card_prev_opacity "></div>
<div class=" card card_4-3-2 card_prev_opacity "></div>




</div>
    







        

      
