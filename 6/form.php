<?php

session_start();

?>

<form action="" method="post">
    <p><input type="" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : 'false'; ?>"
              placeholder="Email"></p>
    <p><input type="" name="name" value="" placeholder="Your name"></p>
    <p><input type="" name="surname" value="" placeholder="Ur second name"></p>
    <p><input type="submit" name="submit"></p>
</form>
