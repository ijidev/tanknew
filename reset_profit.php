<?php
// Log file path
$logFilePath = '/home/saleforcereviews/public_html/reqreviews.co/core/storage/logs/reset_profit_log.txt';

// Log current date/time
file_put_contents($logFilePath, date('Y-m-d H:i:s') . ' - Script is running' . PHP_EOL, FILE_APPEND);

// Include Laravel's autoload file
require __DIR__.'/core/vendor/autoload.php';

// Include Laravel's bootstrap file
$app = require_once __DIR__.'/core/bootstrap/app.php';

// Set up the Laravel application
$kernel = $app->make('Illuminate\Contracts\Console\Kernel');
$kernel->bootstrap();

// Reset daily profit for all users to 0
try {
    \App\Models\User::query()->update(['balance' => 0]);
    file_put_contents($logFilePath, date('Y-m-d H:i:s') . ' - Profit reset successfully' . PHP_EOL, FILE_APPEND);
} catch (\Exception $e) {
    file_put_contents($logFilePath, date('Y-m-d H:i:s') . ' - Error: ' . $e->getMessage() . PHP_EOL, FILE_APPEND);
}
echo 'Profit reset successfully.' . PHP_EOL;
