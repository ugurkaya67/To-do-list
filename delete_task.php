<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['tasks'][$id])) {
        unset($_SESSION['tasks'][$id]);
    }
}

header("Location: index.php");
exit();
?>
