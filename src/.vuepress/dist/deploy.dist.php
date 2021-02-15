<?php

$secret = 'secret';

ob_start();

echo('Git pull...' . PHP_EOL);
ob_flush();
echo exec('git pull');
ob_flush();

ob_end_flush();
