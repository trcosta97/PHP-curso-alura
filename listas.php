<?php

$idadeList = [];

for ($i = 0; $i < 7; $i++) {
    $idadeList[] = rand(1, 100);
}

for($i =0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}

//adicionar item no final


?>