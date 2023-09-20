<?php
    $arrs=['a','b','c','D'];
    for($i=0;$i<count($arrs);$i++){
        $arrs[$i]=strtolower($arrs[$i]);
    }
    print_r($arrs);
?>