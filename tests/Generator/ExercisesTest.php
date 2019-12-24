<?php
declare(strict_types=1);

namespace Tests\Generator;

use PHPUnit\Framework\TestCase;
use App\Generator\Exercises;
use App\Enum\Exercise;
use App\Enum\Participant;

class ExercisesTest extends TestCase
{
    private $exercises;

    protected function setUp(): void
    {
        parent::setUp();

        $this->exercises = new Exercises();
    }

    public function testReturnInstanceType(): void
    {
        $this->assertInstanceOf(Exercises::class, $this->exercises);
    }

    public function testSequencesResponse(): void
    {
        $sequences = $this->exercises->defineSequences();

        $this->assertIsArray($sequences);
        $this->assertCount(7, $sequences);
    }

    public function testSequencesForBeginnersResponse(): void
    {
        $sequences = $this->exercises->defineSequences();

        $beginnersSequence = array_filter($sequences, static function($sequence) {
           return Participant::BEGINNER_LEVEL === $sequence[Participant::LEVEL_KEY];
        });

        $this->assertIsArray($beginnersSequence);
        $this->assertCount(2, $beginnersSequence);
    }

    public function testSequencesForProfessionalsResponse(): void
    {
        $sequences = $this->exercises->defineSequences();

        $professionalsSequence = array_filter($sequences, static function($sequence) {
            return Participant::PROFESSIONAL_LEVEL === $sequence[Participant::LEVEL_KEY];
        });

        $this->assertIsArray($professionalsSequence);
        $this->assertCount(5, $professionalsSequence);
    }

    public function testExerciseAvailabilityOnSequences(): void
    {
        $sequences = $this->exercises->defineSequences();

        foreach ($sequences as $sequence) {
            foreach ($sequence[Participant::EXERCISES_KEY] as $key => $name) {
                $exerciseCheck = $this->checkExerciseName($name);

                if (!$exerciseCheck || $key === 0) {
                    continue;
                }

                $lastExerciseName = $sequence[Participant::EXERCISES_KEY][$key - 1];

                $exerciseAvailable = $this->checkExerciseName($lastExerciseName);
                $this->assertFalse($exerciseAvailable);
            }
        }
    }

    private function checkExerciseName(string $name): bool
    {
        return $name === Exercise::JUMPING_JACKS ||
            $name === Exercise::JUMPING_ROPE ||
            $name === Exercise::SHORT_SPRINTS;
    }

    public function testGymAvailabilityOnSequences(): void
    {
        $sequences = $this->exercises->defineSequences();

        $gymExercises = [];

        foreach ($sequences as $sequence) {
            $gymExercises = $this->defineGymExercises($sequence, $gymExercises);
        }

        foreach ($gymExercises as $gymExercise) {
            $this->assertLessThan(3, sizeof($gymExercise));
        }
    }

    private function defineGymExercises(array $sequence, array $gymExercises): array
    {
        foreach ($sequence[Participant::EXERCISES_KEY] as $key => $gymExercise) {
            $gymCheck = ($gymExercise === Exercise::PULL_UPS || $gymExercise === Exercise::RINGS);

            if (!$gymCheck) {
                continue;
            }

            $gymExercises[$key][] = $gymCheck;
        }

        return $gymExercises;
    }
}
