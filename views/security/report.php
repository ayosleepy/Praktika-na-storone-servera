<div class="page-container">
    <h2>Отчет по сотруднику</h2>

    <form method="get" class="filters">
        <label>Период:</label>
        <input type="date" name="date_from" value="<?= $date_from ?>" class="date-input">
        <span class="separator">-</span>
        <input type="date" name="date_to" value="<?= $date_to ?>" class="date-input">
        <button type="submit" class="btn btn-primary">ПОИСК</button>
    </form>

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
            <?php foreach ($events as $e): 
                $st = strtolower($e->status);
                $txt = ($st === 'allowed' || $st === '1') ? 'Вход разрешен' : 'Вход запрещен';
                $cls = ($st === 'allowed' || $st === '1') ? 'status-allowed' : 'status-denied';
            ?>
            <tr>
                <td><?= date('d.m.y', strtotime($e->event_time)) ?></td>
                <td><?= date('H:i', strtotime($e->event_time)) ?></td>
                <td>-</td>
                <td class="<?= $cls ?>"><?= $txt ?></td>
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
    max-width: 900px;
    margin: 40px auto;
    padding: 0 16px;
}
.filters {
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: nowrap;
}
.filters label {
    font-weight: 600;
    text-decoration: underline;
    white-space: nowrap;
}
.date-input {
    padding: 10px 14px;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 14px;
    background: #fff;
    white-space: nowrap;
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
.btn {
    padding: 10px 24px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    background: #fff;
    color: #000;
}
.btn:hover {
    background: #000;
    color: #fff;
}
.btn-primary {
    border-color: #000;
    color: #000;
}
</style>