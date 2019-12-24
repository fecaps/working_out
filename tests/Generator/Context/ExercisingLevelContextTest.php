<?php
declare(strict_types=1);

namespace Tests\Generator\Context;

use PHPUnit\Framework\TestCase;
use App\Generator\Level\BeginnerExercising;
use App\Generator\Context\ExercisingLevelContext;

class ExercisingLevelContextTest extends TestCase
{
    private $exercisingLevelContext;

    protected function setUp(): void
    {
        $this->exercisingLevelContext = new ExercisingLevelContext();
    }

    public function testReturnInstanceType(): void
    {
        $beginnerLevel = $this->createMock(BeginnerExercising::class);
        $this->exercisingLevelContext->defineLevel($beginnerLevel);

        $this->assertInstanceOf(ExercisingLevelContext::class, $this->exercisingLevelContext);
    }

    /**
     * Exercising Level Context Response test
     *
     * @dataProvider \Tests\DataProviders\BeginnerParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testLevelContextResponseIsArray(array $participants): void
    {
        $beginnerLevel = $this->createMock(BeginnerExercising::class);
        $this->exercisingLevelContext->defineLevel($beginnerLevel);

        $response = $this->exercisingLevelContext
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertIsArray($response);
    }
}

