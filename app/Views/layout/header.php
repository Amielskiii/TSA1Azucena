<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'Tasks Management System') ?></title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

<header class="navbar">

    <div class="nav-container">

        <a href="<?= base_url('/') ?>" class="logo">
            Tasks Today
        </a>

        <nav>
            <a href="<?= base_url('/') ?>">Today</a>
            <a href="<?= base_url('/tasks') ?>">All Tasks</a>
            <a href="<?= base_url('/profile') ?>">Profile</a>
            <a href="<?= base_url('/about') ?>">About</a>
        </nav>

    </div>

</header>

<main class="container">