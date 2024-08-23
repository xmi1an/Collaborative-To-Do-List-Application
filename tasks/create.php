<?php
include '../config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
    header('Location: ../index.php');
}
?>
<form method="post">
    <input type="text" name="task" required>
    <button type="submit">Add Task</button>
</form>
