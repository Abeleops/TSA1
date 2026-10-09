<?= view('partials/header', ['title' => 'Profile | Tasks for Today']) ?>

<h1>Profile</h1>
<p class="sub">Demo user information</p>

<div class="card">
    <?php if ($user): ?>
        <dl>
            <div><dt>Username</dt><dd><?= esc($user['username']) ?></dd></div>
            <div><dt>Full name</dt><dd><?= esc($user['full_name']) ?></dd></div>
            <div><dt>Email</dt><dd><?= esc($user['email']) ?></dd></div>
            <div><dt>Member since</dt><dd><?= esc($user['created_at']) ?></dd></div>
        </dl>
    <?php else: ?>
        <p class="empty">No user found.</p>
    <?php endif; ?>
</div>

<?= view('partials/footer') ?>
