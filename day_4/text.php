<?php

$title = 'Мой первый сайт на php';

$my_list = ['Чай', 'Кофе', 'Молоко'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title; ?></title>
</head>
<body>
    <h1><?php  echo $title; ?></h1>
    <ul>
        <li>Чай</li>
        <li>Кофе</li>
        <li>Молоко</li>
        <?php
            foreach($my_list as $item){
                echo "<li>$item</li>";
            }
        ?>
    </ul>
</body>
</html