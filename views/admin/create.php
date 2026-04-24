<h2>Добавление сотрудника</h2>
<?php if(!empty($message)): ?>
    <div class="msg"><?= $message ?></div>
<?php endif; ?>
<form method="post" action="/admin/store">
    <label>ФИО</label>
    <input type="text" name="name" required>
    <label>Логин</label>
    <input type="text" name="login" required>
    <label>Пароль</label>
    <input type="password" name="password" required>
    <button type="submit">Создать</button>
</form>
<p style="margin-top: 15px;"><a href="/admin" class="btn">Назад</a></p>