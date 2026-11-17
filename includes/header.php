<?php if (!isset($pageTitle)) $pageTitle = 'Сладкие сны'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-between align-items-center p-3">
        <a href="/index.php" class="h4 mb-0 text-decoration-none">Сладкие сны</a>
        <em class="text-muted">Приезжайте как гости, уезжайте как друзья!</em>
    </header>
