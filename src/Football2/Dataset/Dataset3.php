<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Football2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset3 extends Dataset
{
    protected array $datas = [
        'dispositif' => '5-4-1',
        'forces' => [19, 39, 25, 10, 12, 46, 17, 36, 11, 24, 7, 41, 26, 20, 6, 22, 16, 4, 37, 50, 40, 13, 43, 32, 30, 34],
        'postes' => ["G", "A", "A", "D", "M", "A", "A", "M", "G", "A", "D", "A", "M", "D", "M", "G", "M", "D", "D", "M", "M", "M", "A", "A", "D", "A"]
    ];

    protected $result = '19-5-20-18-7-24-12-15-13-3-10';
}