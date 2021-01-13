<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap;

class Dataset
{
    public function getData(): array
    {
        return $this->data;
    }

    public function getResult()
    {
        return $this->result;
    }
}
