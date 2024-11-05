<?php
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = []; // Initialise la liste des tâches si elle n'existe pas
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Ma To-Do List</h1>

        <!-- Formulaire pour ajouter une nouvelle tâche -->
        <form id="taskForm" action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Nouvelle tâche" required>
            <button type="submit">Ajouter</button>
        </form>

        <!-- Liste des tâches -->
        <ul id="taskList">
            <?php
            foreach ($_SESSION['tasks'] as $id => $task) {
                $completed = $task['completed'] ? 'completed' : '';
                $checkmark = $task['completed'] ? '<span class="checkmark">✔️</span>' : '⬜'; // Case à cocher avec ou sans checkmark
                echo "<li class='$completed'>
                        <span class='checkbox'><a href='toggle_task.php?id=$id'>$checkmark</a></span>
                        <span class='task-text'>{$task['task']}</span>
                        <a href='delete_task.php?id=$id' class='delete-icon'>🗑️</a>
                      </li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
