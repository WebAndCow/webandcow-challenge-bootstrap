<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Future\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'depart' => 1985,
        'anniversaire' => "10-24",
        'sauts' => ["1998-04-04", "2004-05-12", "1986-04-14", "1991-09-30", "1999-06-01"]
    ];

    protected $result = 48;
}