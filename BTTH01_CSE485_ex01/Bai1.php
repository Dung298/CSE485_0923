<?php
    $arrs=[2,5,6,9,2,5,6,12,5];
    $tong=0;
    $tich=1;
    $hieu=0;
    $thuong=1;
    for($i=0;$i<=8;$i++){
        $tong+=$arrs[$i];
        $tich*=$arrs[$i];
        $hieu-=$arrs[$i];
        $thuong/=$arrs[$i];
    }
    $elements = implode(" + ",$arrs);
     echo " Tổng  các  phần  tử = ".$elements ." = ".$tong .'<br>';
    $element = implode(" * ",$arrs);
    echo "Tich cac phan tu = ".$element . " = ".$tich .'<br>' ;
    $elemen = implode(" - ",$arrs);
    echo "Hieu cac phan tu = ".$elemen . " = ".$hieu .'<br>' ;
    $eleme = implode(" / ",$arrs);
    echo "Thuong cac phan tu = ".$eleme . " = ".$thuong .'<br>' ;
?>
