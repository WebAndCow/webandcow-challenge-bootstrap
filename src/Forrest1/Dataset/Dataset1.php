<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Forrest1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'kms' => [15, 32, 60],
        'runners' => [2, 6, 4],
        'stop' => 147
    ];

    protected $result = 1449;
}