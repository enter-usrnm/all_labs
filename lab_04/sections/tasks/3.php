<?php
  include_once('functions.php')
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br><input type="submit" value="Завантажити файл">
</form>
<?php
    if(isset($_FILES['file'])) {
        $check = can_upload($_FILES['file']);
    
        if($check === true){
            $check2 = make_upload($_FILES['file']);
            if ($check2 === true ) {
                echo "<strong>Файл успішно завантажений!</strong>";
            } else {
                echo "<strong>Помилка загрузки файла!</strong>";
            }
            
    } else {
        echo "<strong>$check</strong>";  
    }
}
?>