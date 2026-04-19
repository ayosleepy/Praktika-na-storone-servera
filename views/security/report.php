<div class="page-container">
    <h2>Отчет по сотруднику</h2>

    <div class="filters">
        <label>Период:</label>
        <input type="date" value="2026-03-01" class="date-input">
        <span class="separator">-</span>
        <input type="date" value="2026-03-30" class="date-input">
        <button class="btn btn-primary">ПОИСК</button>
    </div>

    <table class="styled-table">
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
.filters {
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}
.filters label {
    font-weight: 600;
    text-decoration: underline;
}
.date-input {
    padding: 10px 14px;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 14px;
    background: #fff;
}
.separator {
    color: #000;
    font-weight: 600;
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
.action-buttons {
    margin-top: 24px;
    display: flex;
    gap: 12px;
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
.btn-primary {
    border-color: #000;
    color: #000;
}
</style>