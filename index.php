<?php

require_once(__DIR__.'/vendor/autoload.php');

$listDirChallenges = array_map(function($dir) {
    $explodeDir = explode('/', $dir);
    echo '<a href="' . end($explodeDir) . '">' . end($explodeDir) . '</a><br />';
}, glob(__DIR__.'/src/*', GLOB_ONLYDIR));