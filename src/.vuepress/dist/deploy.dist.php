<?php

header("Content-Type: text/plain");

$secret = 'secret';

exec('git pull', $output);

exec('npm install', $output);

exec('npm run build', $output);

var_dump($output);
