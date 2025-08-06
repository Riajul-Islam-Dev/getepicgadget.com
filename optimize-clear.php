<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Change to your Laravel root directory
chdir('/home/softkitx/getepicgadget.com');

echo "<br><strong>Running: php artisan optimize:clear</strong><br><br>";

$output = shell_exec("php artisan optimize:clear 2>&1");

echo "<pre>$output</pre>";
