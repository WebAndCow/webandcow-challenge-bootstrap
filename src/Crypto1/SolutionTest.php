<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap\Crypto1;

use PHPUnit\Framework\TestCase;
use WebAndCow\Challenge\Response;

class SolutionTest extends TestCase
{
    /**
     * Test your apply method of Solution class
     * 
     * @dataProvider providerTestApplySolution
     */
    public function test_apply_solution(array $data, $expected)
    {
        $solution = new Solution();
        $response = new Response($expected);

        $this->assertEquals($response, $solution->apply($data));
    }

    public function providerTestApplySolution()
    {
        $providers = [];
        for ($i=1; $i <= 4; $i++) { 
            $datasetClass = '\WebAndCow\ChallengeBootstrap\Crypto1\Dataset\Dataset' . $i;
            $dataSet = new $datasetClass;

            $providers[] = [
                'data' => $dataSet->getData(),
                'expected' => $dataSet->getResult()
            ];
        }

        return $providers;
    }
}