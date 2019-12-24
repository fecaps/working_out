<?php
declare(strict_types=1);

namespace App\Generator\Validator;

use App\Enum\Exercise;
use App\Enum\Participant;

class GymValidation
{
    protected function isGymAvailable(
        string $name,
        array $allParticipants,
        int $participantKey,
        int $exerciseKey
    ): bool {
        if ($name !== Exercise::RINGS && $name !== Exercise::PULL_UPS) {
            return true;
        }

        $lastParticipants = $this->defineLastParticipants(
            $allParticipants,
            $participantKey
        );

        $participantsExercisesMatch = $this->defineParticipantsExercisesMatch(
            $lastParticipants,
            $exerciseKey
        );

        $participantsExercisesMatchCount = sizeof($participantsExercisesMatch);

        return $participantsExercisesMatchCount
            ? $participantsExercisesMatchCount < Exercise::MAX_ALLOWED_PULL_UPS_AND_RINGS
            : true;
    }

    private function defineLastParticipants(array $allParticipants, int $participantKey): array
    {
        return array_filter(
            $allParticipants,
            static function (int $key) use ($participantKey) {
                return $key < $participantKey;
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    private function defineParticipantsExercisesMatch(array $lastParticipants, int $exerciseKey): array
    {
        return array_filter(
            $lastParticipants,
            static function (array $participant) use ($exerciseKey) {
                $keyFound = array_key_exists($exerciseKey, $participant[Participant::EXERCISES_KEY]);

                if (!$keyFound) {
                    return false;
                }

                $participantExercise = $participant[Participant::EXERCISES_KEY][$exerciseKey];

                return $participantExercise === Exercise::RINGS ||
                    $participantExercise === Exercise::PULL_UPS;
            }
        );
    }
}
