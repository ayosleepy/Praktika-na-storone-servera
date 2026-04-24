<h2>Сотрудники охраны</h2>
<a href="/admin/create">+ Добавить сотрудника</a>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>ФИО</th><th>Логин</th></tr>
    <?php foreach ($users as $user): ?>
    <tr><td><?= $user->id ?></td><td><?= $user->name ?></td><td><?= $user->login ?></td></tr>
    <?php endforeach; ?>
</table>