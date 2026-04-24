<div class="page-container">
    <h2>Поиск событий по пропуску</h2>

    <form method="get" class="search-form">
        <label>Введите номер:</label>
        <input type="text" name="card_number" value="<?= htmlspecialchars($card_number) ?>" class="pass-input">
        <button type="submit" class="btn btn-primary">ПОИСК</button>
    </form>

    <p class="results-count">Найдено записей: <?= count($events) ?></p>

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
            <?php foreach ($events as $e): 
                $st = strtolower($e->status);
                $txt = ($st === 'allowed' || $st === '1') ? 'Вход разрешен' : 'Вход запрещен';
                $cls = ($st === 'allowed' || $st === '1') ? 'status-allowed' : 'status-denied';
            ?>
            <tr>
                <td><?= date('d.m.y', strtotime($e->event_time)) ?></td>
                <td><?= date('H:i', strtotime($e->event_time)) ?></td>
                <td><?= $e->turnstile->name ?? '-' ?></td>
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