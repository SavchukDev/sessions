<?php

// Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
session_start();

if (!isset($_SESSION['seconds'])) {
    $_SESSION['seconds'] = time();
    $_SESSION['count'] = 1;
} else
    $_SESSION['seconds'] = time();
    $_SESSION['count'] += 1;

echo $_SESSION['seconds'] . "<br>";
echo 'Ur page has been reloaded ' . $_SESSION['count'] . ' times' . "<br>";