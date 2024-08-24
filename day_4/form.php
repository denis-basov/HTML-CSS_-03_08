<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

$email = $_POST['my_email'];
$password = $_POST['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
        <h2>Вход на сайт</h2>
        <form action="index.php" method="POST">
            <div>
                <label>Электронная почта:</label>
                <input type="email" name="my_email">
            </div>
            <div>
                <label>Пароль:</label>
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="Войти">
            </div>
        </form>
        <h3>Ваша электронная почта: <?php echo $email?></h3>
</body>
</html