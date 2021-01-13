<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Poker1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $data = [
        'mains' => ["10 9 4 roi valet", "6 6 5 3 6", "9 roi 9 9 9", "roi 7 dame 4 6", "6 10 8 as 6", "dame dame 4 7 7", "roi as 7 3 valet", "3 6 8 8 9", "6 8 10 valet 9", "valet 4 3 5 as", "dame 5 7 5 2", "valet 10 as 2 roi", "7 8 6 2 9"]
    ];

    protected $result = 252;
}
