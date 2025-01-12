<?php

if (isset ($_POST['arg_1']) && ($_POST['arg_2'])) {
 

    require_once 'db_.php';  // подключение базы: 'db_.php'

    try { $pdo = new PDO($attr, $user, $pass, $opts); }
    catch (PDOException $e)
    {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    };




    $ajax_query = "SELECT `numb`, `group_id`, `name`, `attribute`, `type`, `colors`, `stars` FROM `products` ORDER BY `numb`";
    $result = $pdo->query($ajax_query);



    $row_2 = $result->fetch(PDO::FETCH_ASSOC);
    // print_r($row_2);
    echo json_encode($row_2);

     $group_id = htmlspecialchars($row['group_id']);
     $name = htmlspecialchars($row['name']);
     $attribute = htmlspecialchars($row['attribute']);
     $type = htmlspecialchars($row['type']);
     $colors = htmlspecialchars($row['colors']); // присваиваем переменной $colors строку "colors" из базы 
     $stars = htmlspecialchars($row['stars']);
 
 
 
    switch ($name){
     case "pencil": $prevName = 'Карандаш';
         break;
     case "lead": $prevName = 'Грифель';  
         break;
     default:
         $prevName = strtoupper(substr($name, 0, 1)).(substr($name, 1 ));
    }
 






}


?>