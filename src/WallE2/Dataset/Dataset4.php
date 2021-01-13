<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\WallE2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset4 extends Dataset
{
    protected array $data = [
        'batterie' => 81,
        'cote' => 9,
        'dechets' => ["5,9", "6,1", "8,3", "6,3", "2,1", "4,6", "3,2", "9,4", "4,4", "3,1", "8,4", "3,3"],
        'chargeurs' => ["4,9", "9,2"]
    ];

    protected $result = 40;
}