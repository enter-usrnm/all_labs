<?php
    $numbers = [];

    for ($i = 0; $i <= 5; $i++) {
        $numbers[$i] = mt_rand(-100, 100);
    }

    echo '$numbers = [';
    for ($i = 0; $i <= 5; $i++) {
        if ($i === 5) {
            echo "$numbers[$i]]";
        } else {
            echo "$numbers[$i], ";
        } 
    }

    echo '<br><br>$numbers = [<br>';
    for ($i = 0; $i <= 5; $i++) {
        if ($i === 5) {
            echo "&nbsp;$numbers[$i]<br>";
        } else {
            echo "&nbsp;$numbers[$i],<br>";
        } 
    }

    echo ']<br><br>';
    print_r($numbers);

    echo '<br><br>Сума всіх елементів = '.array_sum($numbers).'<br>';
    $n = [];
    for ($i = 0; $i <= 5; $i++) {
        if ($numbers[$i] >= 0) {
            $n[$i] = $numbers[$i];
        }
    }

    $serr = array_sum($n)/count($n);

    echo 'Середнє = '.$serr.'<br><br>';
    for ($i = 0; $i <= 5; $i++) {
        if ($numbers[$i] > $serr) {
            echo "$serr * $numbers[$i] = ".$serr * $numbers[$i].'<br>';
        } 
    };