<?php
declare(strict_types=1);

namespace Tests\Generator\Level;

use PHPUnit\Framework\TestCase;
use App\Generator\Level\ProfessionalExercising;
use App\Enum\Participant;
use App\Enum\Exercise;
use App\Enum\Professional;

class ProfessionalExercisingTest extends TestCase
{
    private $professionalExercising;

    protected function setUp(): void
    {
        $this->professionalExercising = new ProfessionalExercising();
    }

    /**
     * Participants Response test
     *
     * @dataProvider \Tests\DataProviders\ProfessionalParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsResponseIsArray(array $participants): void
    {
        $response = $this->professionalExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertIsArray($response);
    }

    /**
     * Participants Response Length test
     *
     * @dataProvider \Tests\DataProviders\ProfessionalParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsResponseLength(array $participants): void
    {
        $response = $this->professionalExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertCount(32, $response[Participant::EXERCISES_KEY]);
    }

    /**
     * Participants Breaks Quantity test
     *
     * @dataProvider \Tests\DataProviders\ProfessionalParticipants::participants()
     * @param array  $participants
     * @return void
     */
    public function testParticipantsBreaksQuantity(array $participants): void
    {
        $response = $this->professionalExercising
            ->defineParticipantWithExercises($participants['data'], $participants['key']);

        $this->assertContains(Exercise::EXERCISING_BREAK, $response[Participant::EXERCISES_KEY]);

        $breaks = array_filter($response[Participant::EXERCISES_KEY], static function($exercise) {
            return $exercise === Exercise::EXERCISING_BREAK;
        });

        $this->assertEquals(Professional::QUANTITY_OF_BREAKS, sizeof($breaks));
    }
}

