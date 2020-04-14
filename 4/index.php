<?php
//Сделайте две страницы: index.php и test.php. При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию (форма при этом должна отправится на эту же страницу). Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.


session_start();

if (!empty($_GET['country'])) {
    $_SESSION['country'] = $_GET['country'];
}

?>

<form action="" method="get">
    <input type="text" name="country">
    <button type="submit">Country</button>
</form>
