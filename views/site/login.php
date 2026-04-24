<h2>Вход</h2>
<?php if(!empty($message)): ?>
    <div class="msg"><?= $message ?></div>
<?php endif; ?>
<form method="post">
    <label>Логин</label>
    <input type="text" name="login" required>
    <label>Пароль</label>
    <input type="password" name="password" required>
    <button type="submit">Войти</button>
</form>