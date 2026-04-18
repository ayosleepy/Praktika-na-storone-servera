<h2>Отчет по сотруднику</h2>

<div class="filters">
    <label>Период:</label>
    <input type="date" value="01.03.2026" class="date-input">
    <span>-</span>
    <input type="date" value="30.03.2026" class="date-input">
    <button class="btn btn-primary">ПОИСК</button>
</div>

<table class="report-table">
    <thead>
        <tr>
            <th>Дата</th>
            <th>Вход</th>
            <th>Выход</th>
            <th>Время</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01.03.26</td>
            <td>8:40</td>
            <td>17:50</td>
            <td>9 ч. 10 мин.</td>
        </tr>
        <tr>
            <td>02.03.26</td>
            <td>9:00</td>
            <td>17:55</td>
            <td>8 ч. 55 мин.</td>
        </tr>
        <tr>
            <td>03.03.26</td>
            <td>8:50</td>
            <td>18:00</td>
            <td>9 ч. 50 мин.</td>
        </tr>
    </tbody>
</table>

<div class="action-buttons">
    <button class="btn btn-secondary">СКАЧАТЬ</button>
    <button class="btn btn-secondary">ПЕЧАТЬ</button>
</div>

<style>
.filters {
    margin: 20px 0;
    display: flex;
    align-items: center;
    gap: 15px;
}
.filters label {
    font-weight: 600;
}
.date-input {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
}
.report-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
}
.report-table th,
.report-table td {
    border: 1px solid #ccc;
    padding: 12px;
    text-align: left;
}
.report-table th {
    background: #f5f5f5;
    font-weight: 600;
}
.action-buttons {
    margin-top: 30px;
    display: flex;
    gap: 15px;
}
.btn {
    padding: 12px 30px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
    text-transform: uppercase;
    background: #fff;
}
.btn-primary {
    background: #fff;
}
.btn-secondary:hover {
    background: #f5f5f5;
}
</style>