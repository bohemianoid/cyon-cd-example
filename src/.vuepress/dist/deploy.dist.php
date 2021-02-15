<?php

$secret = 'secret';

ob_start();
echo('<pre>');

echo('Git pull...' . PHP_EOL);
ob_flush();
echo exec('git pull');
ob_flush();

echo('</pre>')
ob_end_flush();
