<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = $_POST['task'];
    $_SESSION['tasks'][] = [
        'task' => $task,
        'completed' => false
    ];
}

header("Location: index.php");
exit();
?>
