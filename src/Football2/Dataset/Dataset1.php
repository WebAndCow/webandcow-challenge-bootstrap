<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Football2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'dispositif' => '5-4-1',
        'forces' => [38, 18, 11, 31, 19, 13, 20, 16, 24, 33, 8, 25, 36, 39, 2, 5, 23, 34, 32, 10, 27],
        'postes' => ["G", "A", "G", "G", "M", "D", "D", "A", "A", "A", "M", "A", "A", "D", "G", "A", "A", "M", "M", "A", "M"]
    ];

    protected $result = 'KO';
}