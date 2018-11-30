<?php 
//I secure the data and save it to the database
foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
}
?>