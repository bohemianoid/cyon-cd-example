<?php

header('Content-Type: text/plain');

$secret = 'secret';

$output[] = 'git pull...';
exec('git pull', $output);

$output[] = 'npm install...';
exec('npm install', $output);

$output[] = 'npm run build...';
exec('npm run build', $output);

echo(implode(PHP_EOL, $output));
