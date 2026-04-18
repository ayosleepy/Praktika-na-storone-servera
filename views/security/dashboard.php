<h2>Охранник: <?= app()->auth->user()->name ?? 'Иванов О.О.' ?></h2>

<div class="search-container">
    <input type="text" placeholder="Поиск сотрудника..." class="search-input">
</div>

<h3>Последние события:</h3>

<table class="events-table">
    <thead>
        <tr>
            <th>Время</th>
            <th>Сотрудник</th>
            <th>Статус</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>14:20</td>
            <td>Иванов И.В.</td>
            <td class="status-allowed">Вход разрешен</td>
        </tr>
        <tr>
            <td>14:30</td>
            <td>Петров П.П.</td>
            <td class="status-allowed">Вход разрешен</td>
        </tr>
        <tr>
            <td>14:40</td>
            <td>Бобров Б.Б.</td>
            <td class="status-denied">Вход запрещен</td>
        </tr>
    </tbody>
</table>

<div class="action-buttons">
    <button class="btn btn-danger">ЗАБЛОКИРОВАТЬ</button>
</div>

<style>
.search-container {
    margin: 20px 0;
    max-width: 600px;
    width: 100%;
}
.search-input {
    width: 100%;
    padding: 12px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
.events-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
}
.events-table th,
.events-table td {
    border: 1px solid #ccc;
    padding: 12px;
    text-align: left;
}
.events-table th {
    background: #f5f5f5;
    font-weight: 600;
}
.status-allowed {
    color: #2e7d32;
}
.status-denied {
    color: #c62828;
}
.action-buttons {
    margin-top: 30px;
    text-align: center;
}
.btn {
    padding: 12px 30px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
    text-transform: uppercase;
}
.btn-danger {
    background: #fff;
    color: #333;
}
.btn-danger:hover {
    background: #f5f5f5;
}
</style>