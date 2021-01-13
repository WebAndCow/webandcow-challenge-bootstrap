<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Lost1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset3 extends Dataset
{
    protected array $data = [
        'nombres' => [4, 8, 15, 16, 23, 42],
        'codes' => ["2 6 + 6 5 + 3", "6 1 3 2 - 6", "4 2 1 - 6 4", "4 2 + 2 1 - 2", "1 1 3 - 4 3", "4 5 + 1 1 - 1 2", "1 3 1 6 + 2 6"]
    ];

    protected $result = 364768;
}
