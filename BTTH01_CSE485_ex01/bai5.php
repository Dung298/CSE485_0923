<?php
    $a = [
        'a' => [
            'b' => 0,
                'c' => 1
        ],
        'b' => [
            'e' => 2,
                'o' => [
                    'b' => 3
    ]
        ]
                ];
    echo ' Gia  tri = 3 ma co key la b tu mang tren la ' .$a['b']['o']['b']."<br>"; 
    echo 'gia  tri = 1 ma co key la a trong mang la '.$a['a']['c']."<br>";
    var_dump($a['a']);
?>