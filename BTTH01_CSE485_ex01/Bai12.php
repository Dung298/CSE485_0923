<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    echo 'Phần tử đầu tiên là '. $numbers['key1'] ."<br>";
    echo 'Phần tử cuối cùng là '. $numbers['key6'] ."<br>";
    echo 'Số lớn nhất '. max($numbers) ."<br>";
    echo 'Số lớn nhất '. min($numbers) ."<br>";
    echo 'Tổng mảng '.array_sum($numbers).'<br>';
    sort($numbers);
    echo var_dump($numbers) .'<br>';
    rsort($numbers);
    echo var_dump($numbers) .'<br>';
    ksort($numbers);
    echo var_dump($numbers) .'<br>';
    krsort($numbers);
    echo var_dump($numbers) .'<br>';

?>                              