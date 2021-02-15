<?php

header("Content-Type: text/plain");

$secret = 'secret';

echo('Git pull...' . PHP_EOL);
echo exec('git pull');
