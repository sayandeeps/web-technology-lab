<?php
session_start();

if (isset($_POST['name']) && isset($_POST['age'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = (int)$_POST['age']; 
}

if (isset($_SESSION['name']) && isset($_SESSION['age'])) {
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];

    if ($age >= 18) {
        echo "<h1>Welcome ". $name. " to this site</h1>";
    } else {
        echo "<h1>Hello ". $name. ", you are not authorized to visit the site</h1>";
    }
} else {
    echo "<h1>Please fill out the form first</h1>";
}
?>