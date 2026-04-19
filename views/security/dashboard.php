<div class="page-container">
    <h2>Охранник: <?= app()->auth->user()->name ?? 'Иванов О.О.' ?></h2>

    <div class="search-container">
        <input type="text" placeholder="Поиск сотрудника..." class="search-input">
    </div>

    <h3>Последние события:</h3>

    <table class="styled-table">
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
.search-container {
    margin-bottom: 24px;
    width: 100%;
}
.search-input {
    width: 100%;
    padding: 12px 16px;
    font-size: 14px;
    border: 1px solid #000;
    border-radius: 8px;
    background: #fff;
    display: block;
}
.styled-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border: 1px solid #000;
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
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
.status-allowed {
    color: #006400;
    font-weight: 500;
}
.status-denied {
    color: #8b0000;
    font-weight: 500;
}
.action-buttons {
    margin-top: 24px;
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
}
.btn-danger {
    border-color: #000;
    color: #000;
}
</style>