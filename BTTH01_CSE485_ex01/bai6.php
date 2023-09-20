<?php
    $arrs=[12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    $rasuit=[];
    foreach($arrs as $sum ){
        if($sum >=100 && $sum <=200 && $sum % 5==0 ){
                $rasuit[]=$sum;
        }
    }
    foreach($rasuit as $sum){
        echo $sum . " ";
    }
?>