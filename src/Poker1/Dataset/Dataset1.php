<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Poker1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'mains' => ["10 as as 6 10", "5 5 roi 5 5", "9 2 5 dame 10", "8 roi 8 3 10", "valet as 8 3 9", "dame 3 as 7 5", "as 7 10 roi 8", "7 6 2 dame 10"]
    ];

    protected $result = 220;
}
