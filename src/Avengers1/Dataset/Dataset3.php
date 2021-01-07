<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Avengers1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset3 extends Dataset
{
    protected array $datas = [
        'iron_man' => 5,
        'spiderman' => 3,
        'captain_america' => 4,
        'thor' => 8,
        'thanos' => 323
    ];

    protected $result = 62;
}