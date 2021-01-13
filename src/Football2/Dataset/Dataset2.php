<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Football2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $data = [
        'dispositif' => '4-2-4',
        'forces' => [12, 6, 33, 3, 19, 17, 7, 15, 26, 9, 22, 23, 4, 37, 27, 31, 21, 38, 29, 18, 32],
        'postes' => ["G", "D", "A", "M", "A", "D", "A", "M", "G", "D", "D", "A", "D", "G", "A", "A", "A", "D", "A", "D", "M"]
    ];

    protected $result = '17-13-2-20-15-18-14-10-19-5-7';
}
