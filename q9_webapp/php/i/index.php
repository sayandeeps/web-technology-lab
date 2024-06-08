<?php
session_start();
?>

<form action="hello.php" method="post">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Submit">
</form>