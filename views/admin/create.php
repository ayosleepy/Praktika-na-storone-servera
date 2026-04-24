<h2>Добавление сотрудника</h2>
<?php if (!empty($message)): ?><p style="color:red"><?= $message ?></p><?php endif; ?>
<form method="post" action="/admin/store">
    <label>ФИО: <input type="text" name="name" required></label><br><br>
    <label>Логин: <input type="text" name="login" required></label><br><br>
    <label>Пароль: <input type="password" name="password" required></label><br><br>
    <button type="submit">Создать</button>
</form>
<a href="/admin">Назад</a>