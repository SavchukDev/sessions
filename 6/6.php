<?php
// Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.

session_start();


if (!empty($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}


?>

<form action="" method="post">
    <input type="text" name="email">
    <button type="submit">Email</button>
</form>
