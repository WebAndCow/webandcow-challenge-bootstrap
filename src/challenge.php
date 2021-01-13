<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

use WebAndCow\Challenge\Game;
use WebAndCow\Challenge\Test;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env');

$codeChallenge = substr($_GET['challenge'], strrpos($_GET['challenge'], '/'));
$solutionClass = '\WebAndCow\ChallengeBootstrap\\' . $codeChallenge . '\Solution';
$solution = new $solutionClass();

if (!empty($_ENV['MODE']) && $_ENV['MODE'] == 'test') {
    $result = (new Test())->resolveWith($solution);
} else {
    $result = (new Game())->resolveWith($solution);
}

echo $result . PHP_EOL;
