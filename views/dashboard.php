<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>TeamTasker - Dashboard</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; padding: 20px; }
        .card { background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; border-left: 5px solid #3498db; }
        .priority-3 { border-left-color: #e74c3c; } /* Vysoká priorita */
        .btn-delete { color: #e74c3c; cursor: pointer; background: none; border: none; }
    </style>
</head>
<body>
    <h1>📋 Team Tasker</h1>

    <div class="task-list">
        <?php foreach ($tasks as $task): ?>
            <div class="card priority-<?= $task->getPriority(); ?>">
                <h3><?= $task->getTitle(); ?></h3>
                <p><?= $task->getDescription(); ?></p>
                <small><strong><?= $task->getWorkLink(); ?></strong></small>
                
                <form action="index.php" method="POST" style="margin-top: 10px;">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?= $task->getId(); ?>">
                    <button type="submit" class="btn-delete" onclick="return confirm('Zmazať?')">Zmazať 🗑️</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>