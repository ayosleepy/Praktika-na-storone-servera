<div class="page-container">
    <h2>Охранник: <?= app()->auth->user()->name ?? 'Иванов О.О.' ?></h2>

    <form method="get" action="/security/dashboard" class="search-form">
        <input type="text" name="search" placeholder="Поиск сотрудника..." class="search-input">
        <button type="submit" class="btn">Поиск</button>
    </form>

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
            <?php foreach ($events as $e): ?>
            <?php
                $empName = $e->pass->employee->full_name ?? $e->pass->employee->fio ?? $e->pass->employee->name ?? '-';
                $statusRaw = strtolower($e->status);
                $statusText = match($statusRaw) {
                    'allowed', '1', 'ok' => 'Вход разрешен',
                    'denied', '0', 'error' => 'Вход запрещен',
                    default => $e->status
                };
                $statusClass = ($statusRaw === 'allowed' || $statusRaw === '1' || $statusRaw === 'ok') ? 'status-allowed' : 'status-denied';
            ?>
            <tr>
                <td><?= $e->event_time ?></td>
                <td><?= $empName ?></td>
                <td class="<?= $statusClass ?>"><?= $statusText ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
        $passId = count($events) > 0 ? $events[0]->pass->id : null;
        $isBlocked = ($passId && count($events) > 0) ? $events[0]->pass->is_blocked : 0;
    ?>

    <div class="action-buttons">
        <?php if ($passId): ?>
        <form method="post" action="/security/block-pass">
            <input type="hidden" name="pass_id" value="<?= $passId ?>">
            <button type="submit" name="action" value="block" class="btn <?= $isBlocked ? 'disabled' : '' ?>" <?= $isBlocked ? 'disabled' : '' ?>>ЗАБЛОКИРОВАТЬ</button>
            <button type="submit" name="action" value="unblock" class="btn <?= !$isBlocked ? 'disabled' : '' ?>" <?= !$isBlocked ? 'disabled' : '' ?>>РАЗБЛОКИРОВАТЬ</button>
        </form>
        <?php else: ?>
        <p style="color: #777; margin-top: 10px;">Выполните поиск, чтобы управлять пропуском.</p>
        <?php endif; ?>
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
.search-form {
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
    max-width: 420px;
}
.search-input {
    flex: 1;
    padding: 12px 16px;
    font-size: 14px;
    border: 1px solid #000;
    border-radius: 8px;
    background: #fff;
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
    display: flex;
    gap: 10px;
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
}
.btn:hover:not(.disabled) {
    background: #000;
    color: #fff;
}
.btn.disabled {
    background: #eee;
    color: #999;
    border-color: #ccc;
    cursor: not-allowed;
}
</style>