<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Pokemon1\Dataset;

use WebAndCow\ChallengeBootstrap\Dataset;

final class Dataset1 extends Dataset
{
    protected array $data = [
        'types' => ["Psychique", "Glace", "Herbe", "Eau", "Herbe", "Eau", "Feu", "Insecte", "Feu", "Eau", "Feu", "Eau", "Feu", "Eau", "Eau", "Herbe"]
    ];

    protected $result = 3;
}
