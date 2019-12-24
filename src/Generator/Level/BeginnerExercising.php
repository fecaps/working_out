<?php
declare(strict_types=1);

namespace App\Generator\Level;

use App\Enum\Exercise;
use App\Enum\Participant;
use App\Enum\Beginner;
use App\Generator\Breaks;
use App\Generator\Validator\BeginnerExercisingValidation;

class BeginnerExercising extends BeginnerExercisingValidation implements LevelExercising
{
    use Breaks;

    public function defineParticipantWithExercises(array $allParticipants, int $participantKey): array
    {
        $breaks = $this->generateBreaks(
            Beginner::START_NUMBER_FOR_EXERCISE_BREAKS,
            Beginner::END_NUMBER_FOR_EXERCISE_BREAKS,
            Beginner::QUANTITY_OF_BREAKS
        );

        for ($exerciseKey = 0; $exerciseKey < Beginner::END_NUMBER_FOR_EXERCISE_SEQUENCE; $exerciseKey++) {
            $allParticipants[$participantKey][Participant::EXERCISES_KEY][$exerciseKey] =
                $this->defineExercise($allParticipants, $participantKey, $exerciseKey, $breaks);
        }

        return $allParticipants[$participantKey];
    }

    private function defineExercise(
        array $allParticipants,
        int $participantKey,
        int $exerciseKey,
        array $breaks
    ): string {
        $isBreak = array_search($exerciseKey, $breaks, true);

        if ($isBreak !== false) {
            return Exercise::EXERCISING_BREAK;
        }

        return $this->defineExerciseName($allParticipants, $participantKey, $exerciseKey);
    }

    private function defineExerciseName(
        array $allParticipants,
        int $participantKey,
        int $exerciseKey
    ): string {
        $exerciseIndex = array_rand(Exercise::EXERCISES, Beginner::ITEMS_TO_PICK_RANDOMLY);
        $exerciseName = Exercise::EXERCISES[$exerciseIndex];

        $participantExercises = $allParticipants[$participantKey][Participant::EXERCISES_KEY];

        if ($this->isHandstand($exerciseName)) {
            return $this->existHandstand($participantExercises)
                ? $this->defineExerciseName($allParticipants, $participantKey, $exerciseKey)
                : $exerciseName;
        }

        if (!$this->isExerciseAllowed($exerciseName, $participantExercises)) {
            return $this->defineExerciseName($allParticipants, $participantKey, $exerciseKey);
        }

        return !$this->isGymAvailable($exerciseName, $allParticipants, $participantKey, $exerciseKey)
            ? $this->defineExerciseName($allParticipants, $participantKey, $exerciseKey)
            : $exerciseName;
    }
}
