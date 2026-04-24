<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>СКУД</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f5f5;
            color: #333;
        }
        header {
            background: #fff;
            border-bottom: 1px solid #ccc;
            padding: 10px 20px;
        }
        header nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
        }
        h2 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        form {
            max-width: 400px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"], input[type="date"] {
            padding: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        button, .btn {
            background: #fff;
            color: #000;
            border: 1px solid #000;
            padding: 8px 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }
        button:hover, .btn:hover {
            background: #000;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #f9f9f9;
        }
        .msg {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #c00;
            background: #fff0f0;
            color: #c00;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="/">Главная</a>
        <?php if(app()->auth->check()): ?>
            <span style="margin-right: 15px;"><?= app()->auth->user()->name ?></span>
            <a href="/security/dashboard">Панель охраны</a>
            <a href="/security/report">Отчет</a>
            <a href="/security/search">Поиск</a>
            <?php if(app()->auth->user()->role === 'admin'): ?>
                <a href="/admin">Админка</a>
            <?php endif; ?>
            <a href="/logout">Выход</a>
        <?php else: ?>
            <a href="/login">Вход</a>
            <a href="/signup">Регистрация</a>
        <?php endif; ?>
    </nav>
</header>
<main class="container">
    <?= $content ?? '' ?>
</main>
</body>
</html>