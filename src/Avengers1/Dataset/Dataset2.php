<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Avengers1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $data = [
        'iron_man' => 4,
        'spiderman' => 6,
        'captain_america' => 6,
        'thor' => 2,
        'thanos' => 186
    ];

    protected $result = 25;
}