<?php
    $array = array(
        0 => 1,
        1 => 2,
        2 => 3,
        3 => 4,
        4 => 5
    );

    unset($array[3]);
    $newarr = array_values($array);
    print_r($newarr);
?>