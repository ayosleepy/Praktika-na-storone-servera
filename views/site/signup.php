<div class="page-container">
    <h2>Регистрация</h2>
    <?php if(!empty($message)): ?>
    <div class="msg"><?= $message ?></div>
    <?php endif; ?>
    <form method="post" class="auth-form">
        <label>ФИО</label>
        <input type="text" name="name" required>
        <label>Логин</label>
        <input type="text" name="login" required>
        <label>Пароль</label>
        <input type="password" name="password" required>
        <button type="submit" class="btn">Зарегистрироваться</button>
    </form>
</div>
<style>
* {
    box-sizing: border-box;
}
.page-container {
    max-width: 800px;
    margin: 40px auto;
    padding: 0 16px;
}
.auth-form {
    max-width: 400px;
}
label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
}
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px 16px;
    margin-bottom: 16px;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 14px;
    background: #fff;
}
.btn {
    padding: 10px 24px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    text-transform: uppercase;
    background: #fff;
    color: #000;
}
.btn:hover {
    background: #000;
    color: #fff;
}
.msg {
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #c00;
    background: #fff0f0;
    color: #c00;
    border-radius: 8px;
}
h2 {
    margin-bottom: 24px;
}
</style>