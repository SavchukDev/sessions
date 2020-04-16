<?php

// Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
session_start();

if (!isset($_SESSION['user_login'])) {
    $_SESSION['user_login'] = date('Y-m-d H:i:s');
} else {
    $second = time() - strtotime($_SESSION['user_login']);
    echo 'You are logged in ' . $second . ' seconds ago';
}