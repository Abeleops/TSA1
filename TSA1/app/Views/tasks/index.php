<?= view('partials/header', ['title' => 'Task List | Tasks for Today']) ?>

<h1>Task List</h1>
<p class="sub"><?= count($tasks) ?> tasks, ordered by date</p>

<div class="card">
    <?php if (empty($tasks)): ?>
        <p class="empty">No tasks found.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr><th>Date</th><th>Task</th><th>Status</th></tr>
            </thead>
            <tbody>
              <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?= esc($task['title']) ?></td>
        <td>
            <span class="badge <?= esc(str_replace(' ', '-', $task['status'])) ?>">
                <?= esc($task['status']) ?>
            </span>
        </td>
    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?= view('partials/footer') ?>
