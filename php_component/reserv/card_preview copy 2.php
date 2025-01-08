

<article class="ratio ratio_30">
<div class="ratio_wrap card_wrapper ">
</div>
</article>


<div class=" card_wrapper ">

<?php




require_once 'db_.php';

try { $pdo = new PDO($attr, $user, $pass, $opts); }
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
};

//$query_p = "SELECT `number`, `group_id`, `name`, `attribute`, `type`, `colors`, `stars` FROM `pencils` ORDER BY `number`";
$query_p = "SELECT `number`, `group_id`, `name`, `attribute`, `type`, `colors`, `stars` FROM `pencils` ORDER BY `number`";
$result = $pdo->query($query_p);


echo '';

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{

    $group_id = htmlspecialchars($row['group_id']);
    // $name = substr($name_id, 0, -2);
    // $name = strtoupper(htmlspecialchars($row['name']));
    $name = htmlspecialchars($row['name']);
    $attribute = htmlspecialchars($row['attribute']);
    $type = htmlspecialchars($row['type']);
    $colors = htmlspecialchars($row['colors']);
    $stars = htmlspecialchars($row['stars']);


echo <<<_END
<div id = "$group_id" class="card pencil card_4-3-2">
<div><img src="../img/svg/stars_&_colors/s-$stars.svg" alt=""> </div>

   <section>
   <span>  <p> подробнее </p>  </span>
    <div> 
    <h4>$name</h4> 
    <p>$attribute</p> 
    </div>
 
    <div>
  
    <img src="../img/svg/stars_&_colors/$colors.svg" alt="">
    </div>

    <div>
    <p>  $type </p>  
    </div>
 </section>
</div>  
_END;
}




$query_m = "SELECT `number`, `group_id`, `name`, `attribute`, `type`, `colors`, `stars` FROM `marker_p` ORDER BY `number`";
$result = $pdo->query($query_m);


echo '';

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{

    $group_id = htmlspecialchars($row['group_id']);

    $name = htmlspecialchars($row['name']);

    $attribute = htmlspecialchars($row['attribute']);
    $type = htmlspecialchars($row['type']);
    $colors = htmlspecialchars($row['colors']);
    $stars = htmlspecialchars($row['stars']);


echo <<<_END
<div id = "$group_id" class="card marker_p card_4-3-2">
<div><img src="../img/svg/stars_&_colors/s-$stars.svg" alt=""> </div>
   <section>
   <span>  <p> подробнее </p>  </span>
    <div> 
    <h4>$name</h4> 
    <p>$attribute</p> 
    </div>
 
    <div>

    <img src="../img/svg/stars_&_colors/$colors.svg" alt="">
    </div>

    <div>
    <p>  $type </p>  
    </div>
 </section>
</div>  
_END;
}







$query_sku = "SELECT `number`, `group_id`, `name`, `attribute`, `type`, `colors`, `stars` FROM `marker_p` ORDER BY `number`";
$result = $pdo->query($query_sku);


echo '';

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{

    $group_id = htmlspecialchars($row['group_id']);

    $name = htmlspecialchars($row['name']);

    $attribute = htmlspecialchars($row['attribute']);
    $type = htmlspecialchars($row['type']);
    $colors = htmlspecialchars($row['colors']);
    $stars = htmlspecialchars($row['stars']);


echo <<<_END


<div id = "$group_id" class="card marker_p card_4-3-2">
<div><img src="../img/svg/stars_&_colors/s-$stars.svg" alt=""> </div>
   <section>
   <span>  <p> подробнее </p>  </span>
    <div> 
    <h4>$name</h4> 
    <p>$attribute</p> 
    </div>
 
    <div>

    <img src="../img/svg/stars_&_colors/$colors.svg" alt="">
    </div>

    <div>
    <p>  $type </p>  
    </div>
 </section>
</div>  
_END;
}










$query_sku = "SELECT `numb`, `group_id`, `name`, `attribute`, `type`, `colors`, `stars` FROM `products` ORDER BY `numb`";
$result = $pdo->query($query_sku);


echo '';

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{

    $group_id = htmlspecialchars($row['group_id']);

    $name = htmlspecialchars($row['name']);
    // $prevName = $name;

    $attribute = htmlspecialchars($row['attribute']);
    $type = htmlspecialchars($row['type']);
    $colors = htmlspecialchars($row['colors']);
    $stars = htmlspecialchars($row['stars']);



   switch ($name){
    case "pencil":
        $prevName = 'Карандаш';
        break;
    case "lead":
        $prevName = 'Грифель';  
        break;
    default:
        $prevName = $name;
   }


echo <<<_END

<div id = "$group_id" class="card marker_p card_4-3-2">
<div><img src="../img/svg/stars_&_colors/s-$stars.svg" alt=""> </div>
   <section>
   <span>  <p> подробнее </p>  </span>
    <div> 
    <h4>$prevName</h4> 
    <p>$attribute</p> 
    </div>
 
    <div>

    <img src="../img/svg/stars_&_colors/$colors.svg" alt="">
    </div>

    <div>
    <p>  $type </p>  
    </div>
 </section>
</div>  
_END;
}












?>


<div class=" card card_4-3-2 "></div>



</div>
    







        

      
