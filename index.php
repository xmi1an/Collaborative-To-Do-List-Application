<?php
include 'config.php';
include 'templates/header.php';
$result = $conn->query("SELECT * FROM tasks");
?>
<h1>To-Do List</h1>
<a href="tasks/create.php">Add New Task</a>
<ul>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <li>
            <?= htmlspecialchars($row['task']) ?>
            <a href="tasks/update.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="tasks/delete.php?id=<?= $row['id'] ?>">Delete</a>
        </li>
    <?php endwhile; ?>
</ul>
<?php include 'templates/footer.php'; ?>
