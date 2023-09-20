<?php
    $arrs = ['1','b','c','d'];


    for($i=0;$i<count($arrs);$i++)
    {
        $arrs[$i] = strtoupper($arrs[$i]);
    }
    print_r($arrs)
?>