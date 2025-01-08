


<?php

require_once 'db_.php';


try {
    $pdo = new PDO ($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}





?>


<article class="ratio ratio_30">
<div class="ratio_wrap card_wrapper ">
</div>
</article>




<div class=" card_wrapper ">


<?php

// $name = '';
// $attribute = '';
// $type = '';
// $color = '';
// $stars = '';


$query = "SELECT * FROM `lines`";
$result = $pdo->query($query);

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
$name = strtoupper($row[`name`]);
$attribute = htmlspecialchars($row[`attribute`]);
$type = htmlspecialchars($row[`type`]);
$color = htmlspecialchars($row[`colors`]);
$stars = htmlspecialchars($row[`stars`]);
 
echo <<<_END

<div id = "$name" class=" card card_4-3-2">
   <section>
    <div> 
    <h4> $name  какойто текст </h4> 
    <p>  $attribute  какойто текст </p> 
    </div>
 
    <div>
    <img src="../img/svg/stars_&_colors/s-$stars.svg" alt="">
    <img src="../img/svg/stars_&_colors/$colors.svg" alt="">
    </div>

    <div>
    <p> $name_group </p>  
    </div>
 </section>
</div>  

_END;

echo $name.'<br>';

echo $name.'<br>';
echo $attribute.'<br>';
echo $type.'<br>';
echo $color.'<br>';
echo $stars.'<br>';


};


?>



    
</div>







        

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="js/swiper_slider.js"></script>
