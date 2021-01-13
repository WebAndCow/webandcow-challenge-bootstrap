<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\WallE2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset3 extends Dataset
{
    protected array $data = [
        'batterie' => 80,
        'cote' => 8,
        'dechets' => ["6,5", "1,5", "6,3", "2,3", "5,2", "8,6", "6,6", "1,2", "3,1", "7,3"],
        'chargeurs' => ["6,8", "8,3"]
    ];

    protected $result = 42;
}
