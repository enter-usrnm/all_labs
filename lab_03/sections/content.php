<?php
    if (isset($_GET['task'])) {
        $task = filter_var($_GET['task'], FILTER_SANITIZE_NUMBER_INT);        


        switch ($task) {
            case 1:
                include('tasks/1.php'); 
                break;

            case 2:
                include('tasks/2.php'); 
                break;
            
            case 3:
                include('tasks/3.php'); 
                break;

            default:
                include('tasks/task-no-found.php');     
        }
    } else {
        echo 'Завдання не вибране!';
    };