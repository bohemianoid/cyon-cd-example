<?php

$secret = 'secret';

exec('git pull', $output);

exec('npm install', $output);

exec('npm run build', $output);

echo('<pre>');
var_dump($output);
echo('</pre>');
