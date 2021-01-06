<?php

require_once(__DIR__.'/vendor/autoload.php');

use WebAndCow\Challenge\Game;
use WebAndCow\Challenge\Test;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$solution = new \WebAndCow\ChallengeBootstrap\Solution();

if ($_ENV['WEBANDCOW_TEST_MODE']) {
    $test = new Test($_ENV['WEBANDCOW_CHALLENGE_CODE']);
    $result = $test->resolveWith($solution);
} else {
    $game = new Game($_ENV['WEBANDCOW_API_KEY'], $_ENV['WEBANDCOW_CHALLENGE_CODE']);
    $result = $game->resolveWith($solution);
}

echo $result.PHP_EOL;