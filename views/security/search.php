<h2>Поиск событий по пропуску</h2>

<div class="search-form">
    <label>Введите номер:</label>
    <input type="text" value="**** **** ****" class="pass-input">
    <button class="btn btn-primary">ПОИСК</button>
</div>

<p class="results-count">Найдено записей: 3</p>

<table class="search-table">
    <thead>
        <tr>
            <th>Дата</th>
            <th>Время</th>
            <th>Турникет</th>
            <th>Результат</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01.03.26</td>
            <td>8:40</td>
            <td>КПП-1</td>
            <td class="status-allowed">Вход разрешен</td>
        </tr>
        <tr>
            <td>02.03.26</td>
            <td>9:00</td>
            <td>КПП-1</td>
            <td class="status-allowed">Вход разрешен</td>
        </tr>
        <tr>
            <td>03.03.26</td>
            <td>8:50</td>
            <td>КПП-2</td>
            <td class="status-denied">Вход запрещен</td>
        </tr>
    </tbody>
</table>

<style>
.search-form {
    margin: 20px 0;
    display: flex;
    align-items: center;
    gap: 15px;
}
.search-form label {
    font-weight: 600;
    text-decoration: underline;
}
.pass-input {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    width: 200px;
}
.results-count {
    margin: 20px 0;
    font-size: 16px;
}
.search-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
}
.search-table th,
.search-table td {
    border: 1px solid #ccc;
    padding: 12px;
    text-align: left;
}
.search-table th {
    background: #f5f5f5;
    font-weight: 600;
}
.status-allowed {
    color: #2e7d32;
}
.status-denied {
    color: #c62828;
}
.btn {
    padding: 8px 20px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
    text-transform: uppercase;
    background: #fff;
}
.btn-primary:hover {
    background: #f5f5f5;
}
</style>