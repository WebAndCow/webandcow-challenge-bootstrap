<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Lost1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset4 extends Dataset
{
    protected array $data = [
        'nombres' => [4, 8, 15, 16, 23, 42],
        'codes' => ["2 5 4 4 6 6", "3 4 + 4 1 4 6 2", "4 5 - 6 4 4 + 4", "5 5 4 + 5 5 + 1", "4 5 - 3 2 - 2", "2 6 - 3 1 - 1", "5 6 1 3 4 1", "4 4 5 5 5 2 2 + 6", "5 6 4 2 1 + 6"]
    ];

    protected $result = 1349112813;
}
