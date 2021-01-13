<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\WallE\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'force' => 15,
        'vitesse' => 6,
        'batterie' => 97,
        'dechets' => [18, 6, 34, 31, 29]
    ];

    protected $result = 48;
}