<?php
declare(strict_types=1);

namespace Tests\Generator\Level;

use PHPUnit\Framework\TestCase;
use App\Generator\Level\BeginnerExercising;
use App\Enum\Participant;
use App\Enum\Exercise;
use App\Enum\Beginner;

class BeginnerExercisingTest extends TestCase
{
    private $beginnerExercising;

    protected function setUp(): void
    {
        $this->beginnerExercising = new BeginnerExercising();
    }

    /**
     * Participants Response test
     *
     * @dataProvider \Tests\DataProviders\BeginnerParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsResponseIsArray(array $participants): void
    {
        $response = $this->beginnerExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertIsArray($response);
    }

    /**
     * Participants Response Length test
     *
     * @dataProvider \Tests\DataProviders\BeginnerParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsResponseLength(array $participants): void
    {
        $response = $this->beginnerExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertCount(34, $response[Participant::EXERCISES_KEY]);
    }

    /**
     * Participants Breaks Quantity test
     *
     * @dataProvider \Tests\DataProviders\BeginnerParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsBreaksQuantity(array $participants): void
    {
        $response = $this->beginnerExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertContains(Exercise::EXERCISING_BREAK, $response[Participant::EXERCISES_KEY]);

        $breaks = array_filter($response[Participant::EXERCISES_KEY], static function($exercise) {
            return $exercise === Exercise::EXERCISING_BREAK;
        });

        $this->assertEquals(Beginner::QUANTITY_OF_BREAKS, sizeof($breaks));
    }

    /**
     * Participants Handstand Quantity test
     *
     * @dataProvider \Tests\DataProviders\BeginnerParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsHandstandQuantity(array $participants): void
    {
        $response = $this->beginnerExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $handstands = array_filter($response[Participant::EXERCISES_KEY], static function($exercise) {
            return $exercise === Exercise::HANDSTAND_PRACTICE;
        });

        $this->assertLessThan(2, sizeof($handstands));
    }
}

