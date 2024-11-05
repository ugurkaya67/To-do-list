<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['tasks'][$id])) {
        $_SESSION['tasks'][$id]['completed'] = !$_SESSION['tasks'][$id]['completed'];
    }
}

header("Location: index.php");
exit();
?>
