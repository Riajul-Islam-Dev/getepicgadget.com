<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Change to your Laravel root directory
chdir('/home/softkitx/getepicgadget.com');

echo "<br><strong>Running: php artisan migrate --force</strong><br><br>";

// `--force` is important to run migrations in production
$output = shell_exec("php artisan migrate --force 2>&1");

echo "<pre>$output</pre>";
