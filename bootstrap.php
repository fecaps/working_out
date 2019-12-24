<?php
declare(strict_types=1);

chdir(__DIR__);

$composerAutoload = 'vendor/autoload.php';

if (file_exists($composerAutoload) === false) {
    trigger_error('Please, run composer install. ', E_USER_ERROR);
}

require_once $composerAutoload;

use App\Generator\Exercises;
use App\Transformer\Participants;

$exercises = new Exercises();
$transformer = new Participants($exercises);

$response = $transformer->defineResponse();

foreach ($response as $value) {
    echo PHP_EOL;
    echo $value;
    echo PHP_EOL;
}

echo PHP_EOL;
