<?php
    if (isset($_GET['task'])) {
        $task = filter_var($_GET['task'], FILTER_SANITIZE_NUMBER_INT);
        echo "Завдання $task не існує!";
    } else {
        echo 'Завдання ? не існує!';
    };