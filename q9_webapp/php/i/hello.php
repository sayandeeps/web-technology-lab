<?php
session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['start_time'] = time();
}

$name = $_SESSION['name'];
$start_time = $_SESSION['start_time'];

?>

<html>
<head>
    <title>Hello <?php echo $name;?></title>
</head>
<body>
    <h1>Hello <?php echo $name;?></h1>
    <p>Start time: <?php echo date("H:i:s", $start_time);?></p>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>