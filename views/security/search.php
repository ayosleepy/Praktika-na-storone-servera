<div class="page-container">
    <h2>Поиск событий по пропуску</h2>

    <div class="search-form">
        <label>Введите номер:</label>
        <input type="text" value="**** **** ****" class="pass-input">
        <button class="btn btn-primary">ПОИСК</button>
    </div>

    <p class="results-count">Найдено записей: 3</p>

    <table class="styled-table">
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
.search-form {
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}
.search-form label {
    font-weight: 600;
    text-decoration: underline;
}
.pass-input {
    padding: 10px 14px;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 14px;
    width: 220px;
    background: #fff;
}
.results-count {
    margin-bottom: 24px;
    font-size: 16px;
    color: #000;
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