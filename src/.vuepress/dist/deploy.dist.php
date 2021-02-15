<?php

$secret = 'secret';

ob_start();

echo('Git pull...');
ob_flush();
echo exec('git pull');
ob_flush();

ob_end_flush();
