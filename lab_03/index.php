<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab_03</title>

    <link rel = "stylesheet" href = "assets/style.css">
</head>
<body>  

    <div class = "sidenav">
        <?php include('sections/sidebar.php'); ?>
    </div>

    <div class = "main">
        <header align = "CENTER">
            <?php include('sections/header.php'); ?>
        </header>

        <article>
            <?php include('sections/content.php'); ?>
        </article>

        <footer>
            <?php
                if (isset($_GET['task'])) {
                    $task = filter_var($_GET['task'], FILTER_SANITIZE_NUMBER_INT);
                    
                    if ($task == 2) {
                        for ($i = 0; $i <= 10; $i++) {
                            echo "<br>";
                        }
                    }
                    echo "<p>Task: $task</p>";
                }
            ?>
        </footer>
    </div>


</body>
</html>