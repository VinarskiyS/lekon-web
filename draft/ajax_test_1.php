
<?php

// if (isset ($_POST['folder']) && ($_POST['folder']== '1')) { 
// print_r($_POST);

if (isset($_POST['arg_1'])) { 

   $arg_1 =  ($_POST['arg_1']);

echo <<<_END
<div class="ratio ratio_30 test">
<div class="in_ratio "> <h1> $arg_1 </h1> </div>
</div>
_END;


}


?>
