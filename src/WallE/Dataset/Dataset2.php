<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\WallE\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $data = [
        'force' => 20,
        'vitesse' => 5,
        'batterie' => 73,
        'dechets' => [14, 10, 21, 13, 13, 21, 17, 17, 7, 28]
    ];

    protected $result = 46;
}