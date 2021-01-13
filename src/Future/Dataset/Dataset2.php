<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Future\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset2 extends Dataset
{
    protected array $data = [
        'depart' => 1985,
        'anniversaire' => "06-16",
        'sauts' => ["2007-06-05", "1988-05-08", "2001-01-27", "2014-08-29", "2003-11-15", "1979-12-30", "1977-08-03", "2013-11-07", "1991-04-13"]
    ];

    protected $result = 106;
}
