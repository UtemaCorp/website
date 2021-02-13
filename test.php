<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);

echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
