<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Lost1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $datas = [
        'nombres' => [4, 8, 15, 16, 23, 42],
        'codes' => ["1 3 5 2 5 3", "5 1 4 4 - 2 2 + 6", "4 6 - 3 1 2", "6 2 1 - 2 6 1 1", "1 5 1 5 1 5 5"]
    ];

    protected $result = 21418080;
}