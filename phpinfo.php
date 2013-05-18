<?php
echo 'Current PHP version: ' . phpversion() . "\n";
echo phpversion('tidy') . "\n";
echo '         Current User: ' . get_current_user() . "\n";
echo "\n";
echo exec('curl -s http://checkip.dyndns.org | sed 's/[a-zA-Z/<> :]//g') . "\n";
phpinfo();
phpinfo(INFO_ALL);
?>
