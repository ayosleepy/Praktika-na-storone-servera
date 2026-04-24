<h2>Сотрудники охраны</h2>
<p><a href="/admin/create" class="btn">+ Добавить</a></p>
<table>
    <tr><th>ID</th><th>ФИО</th><th>Логин</th><th>Роль</th></tr>
    <?php foreach($users as $u): ?>
    <tr><td><?= $u->id ?></td><td><?= $u->name ?></td><td><?= $u->login ?></td><td><?= $u->role ?></td></tr>
    <?php endforeach; ?>
</table>