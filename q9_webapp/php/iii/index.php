<?php
session_start();
?>
<form action="hello.php" method="post">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name">
    <label for="age">Enter your Age:</label>
    <input type="number" id="age" name="age">
    <input type="submit" value="Submit">
</form>