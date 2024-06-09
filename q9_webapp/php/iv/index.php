<?php
if (isset($_POST['list_cookies'])) {
    $cookies = $_COOKIE;
    echo "<h1>Cookies:</h1><ul>";
    foreach ($cookies as $name => $value) {
        echo "<li>$name = $value</li>";
    }
    echo "</ul>";
}
if (isset($_POST['add_cookie'])) {
    $new_cookie_name = $_POST['cookie_name'];
    $new_cookie_value = $_POST['cookie_value'];
    setcookie($new_cookie_name, $new_cookie_value, time() + 3600);
    echo "<h1>New cookie added: $new_cookie_name = $new_cookie_value</h1>";
}

?>

<form method="post">
    <input type="submit" name="list_cookies" value="List Cookies">
    <br><br>
    Add New Cookie:<br>
    Name: <input type="text" name="cookie_name"><br>
    Value: <input type="text" name="cookie_value"><br>
    <input type="submit" name="add_cookie" value="Add New Cookie">
</form>