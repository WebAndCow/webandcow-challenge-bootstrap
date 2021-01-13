<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Future\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset3 extends Dataset
{
    protected array $data = [
        'depart' => 1985,
        'anniversaire' => "10-14",
        'sauts' => ["2007-06-30", "2006-01-09", "2008-04-13", "2010-11-02", "1970-05-15", "1993-02-12", "1983-08-02", "2001-01-22", "1989-05-21", "2012-04-20", "1992-05-17", "2006-05-27", "1983-11-10"]
    ];

    protected $result = 147;
}