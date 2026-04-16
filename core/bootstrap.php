<?php
const DIR_CONFIG = '/../config';
require_once __DIR__ . '/../vendor/autoload.php';

function getConfigs(string $path = DIR_CONFIG): array
{
    $settings = [];
    foreach (scandir(__DIR__ . $path) as $file) {
        $name = explode('.', $file)[0];
        if (!empty($name)) {
            $settings[$name] = include __DIR__ . "$path/$file";
        }
    }
    return $settings;
}

require_once __DIR__ . '/../routes/web.php';

$allConfigs = getConfigs();
$settings = new Src\Settings($allConfigs);
$database = new Src\Database($allConfigs['database']);

return new Src\Application($settings, $database);