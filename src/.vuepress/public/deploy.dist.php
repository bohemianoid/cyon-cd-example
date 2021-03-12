<?php

ob_start();
header('Content-Type: text/plain');

$secret = 'secret';

echo('Start deployment...')

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
