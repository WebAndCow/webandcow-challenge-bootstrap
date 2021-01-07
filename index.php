<?php

require_once(__DIR__.'/vendor/autoload.php');

use WebAndCow\Challenge\Game;
use WebAndCow\Challenge\Test;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$solution = new \WebAndCow\ChallengeBootstrap\Solution();

if (!empty($_ENV['TEST_MODE'])) {
    $result = (new Test())->resolveWith($solution);
} else {
    $result = (new Game())->resolveWith($solution);
}

echo $result.PHP_EOL;