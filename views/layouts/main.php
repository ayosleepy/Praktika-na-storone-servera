<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>СКУД</title>
</head>
<body>

<header style="background: #eee; padding: 10px; margin-bottom: 20px; border-bottom: 1px solid #ccc;">
    <nav>
        <a href="/">Главная</a> |

        <?php if (app()->auth->check()): ?>
            <b><?= app()->auth->user()->name ?></b> |
            <a href="/security/dashboard">Панель охраны</a> |
            <a href="/security/report">Отчет</a> |
            <a href="/security/search">Поиск</a> |

            <?php if (app()->auth->user()->role === 'admin'): ?>
                <a href="/admin" style="color: red;">Админка</a> |
            <?php endif; ?>

            <a href="/logout">Выход</a>

        <?php else: ?>
            <a href="/login">Вход</a> |
            <a href="/signup">Регистрация</a>
        <?php endif; ?>
    </nav>
</header>

<main style="padding: 20px;">
    <?= $content ?? '' ?>
</main>

</body>
</html>