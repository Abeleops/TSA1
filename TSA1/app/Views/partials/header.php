<?php $path = uri_string(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'ChinitaTasker') ?></title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= site_url('/') ?>">ChinitaTasker</a>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="<?= site_url('/') ?>"        class="<?= $path === '' ? 'active' : '' ?>">Welcome</a>
                <a href="<?= site_url('tasks') ?>"    class="<?= $path === 'tasks' ? 'active' : '' ?>">Task List</a>
                <a href="<?= site_url('profile') ?>"  class="<?= $path === 'profile' ? 'active' : '' ?>">Profile</a>
                <a href="<?= site_url('about') ?>"    class="<?= $path === 'about' ? 'active' : '' ?>">About</a>
            </nav>
        </div>
    </header>

    <main class="container">
