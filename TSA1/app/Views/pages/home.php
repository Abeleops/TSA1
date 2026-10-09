<?= view('partials/header', ['title' => 'Welcome | Tasks for Today']) ?>

<h1>Welcome</h1>
<p class="sub">Today's tasks &middot; <?= esc($today) ?></p>

<div class="card">
    <?php if (empty($tasks)): ?>
        <p class="empty">No tasks for today.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr><th>Task</th><th>Status</th></tr>
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
