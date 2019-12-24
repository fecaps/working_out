<?php
declare(strict_types=1);

namespace App\Generator\Context;

use App\Generator\Level\LevelExercising;

interface ExercisingContext
{
    public function defineLevel(LevelExercising $levelExercising): void;

    public function defineParticipantWithExercises(array $allParticipants, int $participantKey): array;
}
