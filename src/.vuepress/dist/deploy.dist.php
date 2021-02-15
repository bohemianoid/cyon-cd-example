<?php

$secret = 'secret';

ob_start();

echo('Git pull...<br>');
ob_flush();
echo exec('git pull');
ob_flush();

ob_end_flush();
