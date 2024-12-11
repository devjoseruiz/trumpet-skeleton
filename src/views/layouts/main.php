<?php use devjoseruiz\trumpet\Application; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.svg">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?> | Trumpet MVC Framework</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="/" class="nav-brand">Trumpet</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/">🏠 Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rate">⭐ Rate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/devjoseruiz/trumpet-mvc-framework" target="_blank">🍴
                        Fork</a>
                </li>
                <li class="nav-item nav-separator"></li>
                <?php if (Application::isGuest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">🔐 Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">✅ Register</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link">👤 <?= Application::$app->user->getDisplayName() ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">🚪 Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <?php if (Application::$app->session->getFlashData('success')): ?>
                <div class="success-message">
                    <?= Application::$app->session->getFlashData('success'); ?>
                </div>
            <?php endif; ?>

            <?php if (Application::$app->session->getFlashData('error')): ?>
                <div class="error-message">
                    <?= Application::$app->session->getFlashData('error'); ?>
                </div>
            <?php endif; ?>

            {{content}}
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&#127279; <?php echo date('Y'); ?> <a href="https://github.com/devjoseruiz/trumpet-mvc-framework"
                    target="_blank">Trumpet MVC Framework</a>.</p>
        </div>
    </footer>
</body>

</html>