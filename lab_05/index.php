<?php

$db_host = 'localhost';
$db_name = 'lab05';
$db_user = 'me';
$db_pass = 'pass';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die('DB connection error: ' . $conn->connect_error);
}

$where = '';
$filter = '';
if (isset($_GET['filter'])) {
    $filter = trim(filter_var($_GET['filter'], FILTER_SANITIZE_STRING));

    if ($filter !== '') {
        $where = ' WHERE name LIKE "%'.$filter.'%"';
    }
}
?>

<form action="">
    <label for="search">Пошук в таблиці:</label>
    <input type="text" name="filter" id="search" value="<?= $filter ?>">
    <input type="hidden" name="task" value="5">
    <button>Пошук</button>  
</form>
<hr>
<?php

$res = $conn->query('SELECT * FROM submits' . $where );
if ($res->num_rows > 0) {

    if ($filter !== '') {
        echo "<p>Фільтр: $filter</p>";
    }

    ?>    
    <table border=1>
        <thead>
            <tr>
                <th>ІД</th>
                <th>Імя</th>
                <th>Пошта</th>
                <th>Повідомлення</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($r = $res->fetch_assoc()) {
            echo '<tr><td>'.$r['id'].'</td><td>'.$r['name'].'</td><td>'.$r['email'].'</td><td>'.$r['message'].'</td></tr>';
        }
        ?>
        </tbody>
    </table>

    <?php
} else {
    echo '<p>Not found!</p>';
}