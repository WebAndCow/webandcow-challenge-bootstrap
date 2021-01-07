<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

use WebAndCow\Challenge\Game;
use WebAndCow\Challenge\Test;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env');

$solutionClass = '\WebAndCow\ChallengeBootstrap\\' . $_GET['challenge'] . '\Solution';
$solution = new $solutionClass();

if (!empty($_ENV['TEST_MODE'])) {
    $result = (new Test())->resolveWith($solution);
} else {
    $result = (new Game())->resolveWith($solution);
}

echo $result.PHP_EOL;