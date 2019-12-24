<?php
declare(strict_types=1);

namespace App\Generator\Context;

use App\Generator\Level\LevelExercising;

final class ExercisingLevelContext implements ExercisingContext
{
    private $levelExercising;

    public function defineLevel(LevelExercising $levelExercising): void
    {
        $this->levelExercising = $levelExercising;
    }

    public function defineParticipantWithExercises(array $allParticipants, int $participantKey): array
    {
        return $this->levelExercising->defineParticipantWithExercises(
            $allParticipants,
            $participantKey
        );
    }
}
