<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Crypto2\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'depart' => 6369,
        'chemin' => ["+++", "+++", "+++", "+++", "+++", "--", "--", "--", "+", "+", "+"]
    ];

    protected $result = 6842;
}