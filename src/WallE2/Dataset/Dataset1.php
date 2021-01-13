<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\WallE2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'batterie' => 80,
        'cote' => 6,
        'dechets' => ["3,4", "6,5", "5,3", "3,3", "3,2", "6,3"],
        'chargeurs' => ["4,6", "6,1"]
    ];

    protected $result = 57;
}