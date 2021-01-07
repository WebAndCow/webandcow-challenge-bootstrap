<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\WallE\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset4 extends Dataset
{
    protected array $datas = [
        'force' => 18,
        'vitesse' => 14,
        'batterie' => 90,
        'dechets' => [33, 35, 13, 32, 7, 22, 13, 11, 7, 23, 7, 9, 25, 16, 15, 10, 19, 19, 6, 15]
    ];

    protected $result = 49;
}