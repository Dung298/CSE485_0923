<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $chuoilonnhat=0;
    $chuoinhonhat=999;
    $a=$b=' ';
    foreach($array as $i){
        if(strlen($i) > ($chuoilonnhat)){
            $chuoilonnhat=strlen($i);
            $a=$i;
        }
        if(strlen($i) < ($chuoinhonhat)){
            $chuoinhonhat=strlen($i);
            $b=$i;
        }
    }
    echo "Chuoi lon nhat la ".$a."do dai = " .strlen($chuoilonnhat)."<br>";
    echo "chuoi nho nhat la ".$b."do dai = " .strlen($chuoinhonhat);
?>