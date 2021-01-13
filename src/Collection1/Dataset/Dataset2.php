<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Collection1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $data = [
        'exemplaires' => [50000, 50000, 100, 50000, 50000, 50000, 50000, 2000, 50000, 50000, 50000, 2000, 2000, 2000, 50000, 2000, 50000, 2000, 2000, 50, 50, 2000, 50000, 2000, 100],
        'cotes' => [0.6, 0.6, 2, 0.6, 0.8, 0.6, 0.8, 0.8, 0.6, 0.8, 0.8, 0.8, 0.6, 1, 0.6, 0.6, 1, 0.8, 0.8, 1.6, 2, 1, 0.8, 0.6, 1.6]
    ];

    protected $result = 15;
}