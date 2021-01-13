<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Lost1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'nombres' => [4, 8, 15, 16, 23, 42],
        'codes' => ["1 2 2 3 3 + 3", "3 1 + 3 2 6", "5 1 4 + 5 5 5"]
    ];

    protected $result = 2109012;
}
