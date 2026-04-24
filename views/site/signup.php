<h2>Регистрация</h2>
<?php if(!empty($message)): ?>
    <div class="msg"><?= $message ?></div>
<?php endif; ?>
<form method="post">
    <label>Имя</label>
    <input type="text" name="name" required>
    <label>Логин</label>
    <input type="text" name="login" required>
    <label>Пароль</label>
    <input type="password" name="password" required>
    <button type="submit">Зарегистрироваться</button>
</form>