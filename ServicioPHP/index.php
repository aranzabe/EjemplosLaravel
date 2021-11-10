
<?php

$datos = [
    ['num' => 1, 'texto' => "uno"],
    ['num' => 2, 'texto' => "dos"],
    ['num' => 3, 'texto' => "tres"],
    ['num' => 4, 'texto' => "cuatro"]
];
//header("HTTP/1.1 200 OK");
return json_encode($datos);
?>
