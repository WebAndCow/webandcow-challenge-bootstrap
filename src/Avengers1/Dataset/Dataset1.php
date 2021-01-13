<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Avengers1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'iron_man' => 2,
        'spiderman' => 6,
        'captain_america' => 2,
        'thor' => 6,
        'thanos' => 158
    ];

    protected $result = 18;
}
