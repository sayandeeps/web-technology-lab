<?php
session_start();

if (isset($_SESSION['start_time'])) {
    $end_time = time();
    $duration = $end_time - $_SESSION['start_time'];
    $name = $_SESSION['name'];
    unset($_SESSION['start_time']);
    unset($_SESSION['name']);
}


?>

<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h1>Thank You <?php echo $name;?></h1>
    <p>You used the application for <?php echo $duration;?> seconds.</p>
    <form action="index.php" method="post">
        <input type="submit" value="Login">
    </form>
</body>
</html>