<?php

ignore_user_abort(true);
ob_start();
header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
header('Content-Type: text/plain');

$secret = 'secret';

echo('Start deployment...');

header('Content-Length: '.ob_get_length());
header('Connection: close');
ob_end_flush();
ob_flush();
flush();

$output[] = 'git pull...';
exec('git pull', $output);

$output[] = 'npm install...';
exec('npm install', $output);

$output[] = 'npm run build...';
exec('npm run build', $output);

echo(implode(PHP_EOL, $output));
