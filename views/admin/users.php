<div class="page-container">
    <h2>Сотрудники охраны</h2>
    <p><a href="/admin/create" class="btn">+ Добавить сотрудника</a></p>
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ФИО</th>
                <th>Логин</th>
                <th>Роль</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $u): ?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->name ?></td>
                <td><?= $u->login ?></td>
                <td><?= $u->role ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
.styled-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border: 1px solid #000;
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    margin-top: 20px;
}
.styled-table th,
.styled-table td {
    padding: 12px 14px;
    text-align: left;
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.styled-table th:last-child,
.styled-table td:last-child {
    border-right: none;
}
.styled-table tbody tr:last-child td {
    border-bottom: none;
}
.styled-table th {
    background: #f5f5f5;
    font-weight: 600;
    color: #000;
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
    text-decoration: none;
    display: inline-block;
}
.btn:hover {
    background: #000;
    color: #fff;
}
h2 {
    margin-bottom: 24px;
}
</style>