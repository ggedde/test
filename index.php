<?php

echo 'This is PRIVATE';

echo '<pre>'; print_r($_SERVER); echo '</pre>';

echo '<pre>'; print_r($_ENV); echo '</pre>';

echo getenv('TEST');
echo getenv('DOCUMENT_ROOT');
echo getenv('APP_BRANCH');

phpinfo();
